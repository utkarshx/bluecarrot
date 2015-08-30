<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{--<a class="navbar-brand" href="#"><img src="{{ url('assets/img/logo.png') }}"></a>--}}
            <a class="navbar-brand" href="{{ env('SCHOOLBANKCHAMPS') }}"><i class="fa fa-arrow-left"> Back</i>{{--<img src="{{ url('assets/img/back.png') }}">--}}</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/') }}">Trending <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Articles</a></li>
                <li><a href="#">Images</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Books</a></li>
                <li><a href="#">Games</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{--<form class="navbar-form navbar-left" role="search">--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="text" class="form-control" placeholder="Search" style="border-bottom:none;box-shadow: none;">--}}

                    {{--</div>--}}
                {{--</form>--}}
                <li><a style="font-size: 20px;">
                        <span style="padding-right: 10px;color:#b4b4b4;">
                            <i class="fa fa-search" style="font-size: 18px;"></i>
                        </span>
                    </a>
                </li>
                <li><a style="font-size: 20px;"><i class="fa fa-bell"></i></a></li>
                <li><a href="#">Utkarshx<span style="padding-left: 4px;"><i class="fa fa-chevron-down"></i></span></a></li>
                <li><button class="btn btn-danger" style="color:#ffffff;margin-top: 7.5px">Create Post</button> </li>
            </ul>
        </div>
    </div>
</nav>