<div class="item item_type_normal_only_title adjusted col col-md-3">
    <div class="item_content">
        <a class="item_link item{{$data->linkType}} start_webview" href="{{$data->linkUrl}}" data-toggle="modal" data-target="#modal{{$data->linkType}}"></a>

        @if(is_null($data->imageName))
            <a class="embedly-card" href="{{$data->linkUrl}}" data-card-controls="0" data-card-chrome="0">{{$data->linkDescription}}</a>
        @else
            <div>
                <img style="margin: 0px auto;" src="{{url('assets/img/thumbnails/'.$data->imageName)}}" alt="{{$data->imageText}}" class="img-responsive">
            </div>
        @endif

        {{--<span class="thumb thumb-wimage lazy-active" variant="" data-lazy-type="thumbnail" data-lazy-key="1012414579" data-thumburl="https://img.readitlater.com/i/bluegape.com/apple-touch-icon/RS/w80-h80-nc.png" data-thumbvariant="1" data-shouldcache="true" style="height: 178.7199993133545px; background-image: url(https://img.readitlater.com/i/bluegape.com/apple-touch-icon/RS/w80-h80-nc.png), url(https://getpocket.com/a/i/tile_graphic_site@1x.png), url(https://getpocket.com/a/i/tile_fallback@1x.jpg);"></span>--}}
        {{--<img class="favicon lazy-active" data-originalurl="http://getpocket.com/redirect?url=http%3A%2F%2Fbluegape.com%2Fbollywood-junction%2Fentertainment%2Fodd-real-life-bollywood-couples-that-prove-love-is-blind-2" data-lazy-type="favicon" data-lazy-key="1012414579" data-favicon-url="https://img.readitlater.com/i/bluegape.com/favicon.ico?f=fi" src="https://img.readitlater.com/i/bluegape.com/favicon.ico?f=fi">--}}
        <div class="favstate"></div>
        <ul class="sub clearfix" style="padding-left: 13px;">
            {{$data->linkDescription}}
            {{--<li class="original_url_container"><a class="original_url" href="http://getpocket.com/redirect?url=http%3A%2F%2Fbluegape.com%2Fbollywood-junction%2Fentertainment%2Fodd-real-life-bollywood-couples-that-prove-love-is-blind-2" target="_blank" title="View Original">{{$data->linkDescription}}</a></li>
            <li class="tags hasTags">
                <span class="tag_container"><a class="tag" href="/a/queue/grid/reference%20bluecarrot">reference bluecarrot</a></span>
                <a class="edit"><span>Add Tag</span></a>
            </li>--}}
        </ul>
        {{--<div class="clear"></div><ul class="buttons">
            <li class="action_mark" title="Love"><a href="#"><i class="fa fa-comment"></i></a></li>
            <li class="action_mark" title="Love"><a href="#"><i class="fa fa-heart"></i></a></li>
            <li class="action_delete" title="Add"><a href="#"><i class="fa fa-plus"></i></a></li>
            <li class="action_share" title="Share"><a href="#" class="btn btn-xs btn-primary" style="color:white;background-color: #819CCA;text-transform: none;">Share</a></li>
        </ul>--}}
    </div>
</div>