@extends('layouts.main')

@section('maincontent')
    <div class="fullheight">
        @include('includes.navbar')
        <div class="col-md-9 page_queue_grid">
            @include('includes.cards.allcards')
            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 rightScroll" id="rightScroll">
            @include('includes.widgets.tagcloud')
        </div>
    </div>
@endsection