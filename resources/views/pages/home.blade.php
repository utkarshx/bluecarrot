@extends('layouts.main')

@section('maincontent')
    <div class="fullheight">
        @include('includes.navbar')
        <div class="col-md-9 page_queue_grid">
            @include('includes.cards.onlytitle')
            @include('includes.cards.contenttitle')
            @include('includes.cards.externallinks')
            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 rightScroll" id="rightScroll">
            @include('includes.widgets.tagcloud')
        </div>
    </div>
@endsection

@section('modals')
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body">
                    <iframe frameborder="0" width="100%" height="100%" style="min-height: 800px;"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Open in New Tab</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
    <script>
        $(document).on("click", ".item_link", function () {
            var hrefer = $(this).attr('href');
            $(".modal-body iframe").attr({'src': hrefer});
            $(".modal-body iframe").load(function() {
                console.log(this.contentWindow.document.body.offsetHeight);
                this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
            });
        });
    </script>
@endsection