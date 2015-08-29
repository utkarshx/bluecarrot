<?php

namespace App\Models;


use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class Tags extends Model
{
    public function getAllTagsForContentType($contentType) {
        return Cache::rememberForever('tags_all_content_type_'.$contentType, function() use ($contentType) {
            $contentTypeId = $this->getContentTypeId($contentType);
            $hashIdsForContentTypeId = $this->getHashIdsForContentTypeId($contentTypeId);
            $distinctTags = $this->getDistinctTagsFromHashIds($hashIdsForContentTypeId);

            return $distinctTags;
        });
    }

    public function getContentTypeId($contentType) {
        return DB::table('content_types')->where('name', 'like', $contentType)->value('id');
    }

    public function getHashIdsForContentTypeId($contentTypeId) {
        return DB::table('hashes')->where('content_type_id', $contentTypeId)->lists('id');
    }

    public function getDistinctTagsFromHashIds($hashIds) {
        return DB::table('tags_map')
            ->leftJoin('tags', 'tags.id', '=', 'tags_map.tag_id')
            ->whereIn('tags_map.hash_id', $hashIds)
            ->distinct()
            ->select('tags.id as tagId', 'tags.name as tagName')
            ->get();
    }
}
