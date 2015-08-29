<?php

namespace App\Http\Controllers;

use App\Models\Links;
use App\Models\Tags;
use Illuminate\Http\Request;

/*use App\Http\Requests;*/
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class LinkController extends Controller
{

    public function __construct(Links $links, Tags $tags){
        $this->links = $links;
        $this->tags = $tags;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //
        /*Cache::flush();*/
        $page = $request->input('page', 1);

        $allLinks = $this->links->getAllLinks($page);
        $allTags = $this->tags->getAllTagsForContentType('Links');
        /*dump($allLinks);*/

        return view('pages.links', array('allLinks'=>$allLinks, 'allTags'=>$allTags));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
