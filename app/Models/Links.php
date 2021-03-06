<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class Links extends Model
{
    public function getAllLinks($page, $imagesRoot, $mobile=0) {
        /*Cache::flush();*/
        return Cache::rememberForever('content_all_links_page_'.$page.'_mobile_'.$mobile, function () use ($imagesRoot, $mobile) {
            $links =  DB::table('links')
                ->leftJoin('users', 'users.id', '=', 'links.creator_id')
                ->leftJoin('content_types', 'links.link_type', '=', 'content_types.id')
                ->where(function($query) use ($mobile) {
                    if($mobile == 1) {
                        $query->where('content_flash', 0);
                    }
                })
                ->select('links.id as linkId', 'links.description as linkDescription', 'links.url as linkUrl',
                    'links.creator_id as creatorId', 'users.name as creatorName', 'links.hash_id as hashId',
                    'content_types.name as linkType', 'links.image_name as imageName', 'links.image_text as imageText')
                ->orderBy('content_types.name')
                ->paginate(100);

            $linkData = $links->toArray();

            for ($x = 0; $x < sizeof($linkData['data']); $x++) {
                $single = $linkData['data'][$x];
                if(!is_null($linkData['data'][$x]->imageName)) {
                    $linkData['data'][$x]->imageUrl = $imagesRoot.$linkData['data'][$x]->imageName;
                }
                else {
                    $linkData['data'][$x]->imageUrl = null;
                }

                $data = DB::table('tags_map')
                    ->leftJoin('tags', 'tags.id', '=', 'tags_map.tag_id')
                    ->where('tags_map.hash_id', $single->hashId)
                    ->select('tags.id as tagId', 'tags.name as tagName')
                    ->get();
                $linkData['data'][$x]->tags = $data;
            }

            return $linkData;
        });

    }
}
