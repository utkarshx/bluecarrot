@extends('layouts.main')

@section('maincontent')
    <div class="fullheight">
        @include('includes.navbar')
        <div class="col-md-9 page_queue_grid">
            @include('includes.cards.onlytitle')
            @include('includes.cards.contenttitle')
            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 rightScroll" id="rightScroll">
            @include('includes.widgets.tagcloud')
        </div>
    </div>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
@endsection

@section('modals')
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection