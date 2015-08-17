@extends('layouts.main')

@section('scripts')
    @parent
    <noscript>Please enable JavaScript</noscript>
    <script>
        $(document).ready(function(){
            $( window ).scroll( function(e){
                var actpan = $( "#actpan" );
                var offset = actpan.offset();
                if( window.pageYOffset > (offset.top - 50) ) {
                    $(".imgact").show();
                }
                else {
                    $(".imgact").hide();
                }
            });
        });
    </script>
@endsection

@section('maincontent')
    <div class="imgact" style="display: none;">
        <div class="container">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="actions">
                            <div class="btn btn-default btn-xs"><i class="fa fa-thumbs-up"></i> 300</div>
                            <div class="btn btn-default btn-xs"><i class="fa fa-thumbs-down"></i> 300</div>
                            <a class="btn btn-info btn-xs" href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.edflock.com&amp;title=Edflock" target="_blank"><i class="fa fa-facebook"></i> Share</a>
                            <a class="btn btn-primary btn-xs" href="http://twitter.com/share?url=http%3A%2F%2Fdev.twitter.com%2Fpages%2Ftweet-button&amp;text=my%20text%20here" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
                            <div class="btn btn-default btn-xs"><i class="fa fa-comment"></i> 0</div>
                            <div class="nextpost btn btn-danger btn-sm">Next Post ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fullheight">
        @include('includes.navbar')
        <div class="container" style="padding-top: 20px;">

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body" style="padding-bottom: 0">
                        <div class="contentheading">Best Flower in Town that you will be finding today</div>
                        <div class="clearfix"></div>
                        <hr style="margin-top:15px; margin-bottom: 0;">
                    </div>
                    <div class="panel-body" id="actpan">
                        <div class="actions">
                            <div class="btn btn-default btn-xs"><i class="fa fa-thumbs-up"></i> 300</div>
                            <div class="btn btn-default btn-xs"><i class="fa fa-thumbs-down"></i> 300</div>
                            <a class="btn btn-info btn-xs" href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.edflock.com&title=Edflock" target="_blank"><i class="fa fa-facebook"></i> Share</a>
                            <a class="btn btn-primary btn-xs" href="http://twitter.com/share?url=http%3A%2F%2Fdev.twitter.com%2Fpages%2Ftweet-button&text=my%20text%20here" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
                            <div class="btn btn-default btn-xs"><i class="fa fa-comment"></i> 0</div>
                            <div class="nextpost btn btn-danger btn-sm">Next Post ></div>
                        </div>
                    </div>
                    <img src="https://placeimg.com/600/600/any" style="width: 100%;">
                    <div class="panel-body">
                        <div class="contentviews"><span style="font-size: 15px; font-weight: 100"><i class="fa fa-eye"></i></span> <span>45</span></div>
                        <div class="author">
                            <img width="48" alt="LastWeekTonight" height="48" style="float:left;" src="https://yt3.ggpht.com/-lc3LinEhpgA/AAAAAAAAAAI/AAAAAAAAAAA/A6-FbtNyNgU/s88-c-k-no/photo.jpg">
                            <div class="name"><b>Last Week Tonight</b></div>
                            <div class="follow btn btn-success btn-xs">Follow</div><div class="btn btn-default btn-xs"> 200</div> <span style="padding-left: 15px;"> <b>Published:</b> 5 days ago</span>
                        </div>
                        <div class="contTags"></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        {{--<div id="disqus_thread"></div>--}}
                        @include('includes.comments')
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>

@endsection