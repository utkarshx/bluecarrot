@extends('layouts.main')

@section('maincontent')
    <div class="fullheight">
        @include('includes.navbar')
        <div class="col-md-12 page_queue_grid">
            {{--@include('includes.cards.onlytitle')
            @include('includes.cards.contenttitle')--}}
            @foreach($allLinks['data'] as $link)
                @include('includes.cards.externallinkwithdata', array('data'=>$link))
            @endforeach
            <div class="clearfix"></div>
        </div>
        {{--<div class="col-md-3 rightScroll" id="rightScroll">
            @include('includes.widgets.tagcloud', array('tags'=>$allTags))
        </div>--}}
    </div>
@endsection

@section('modals')
    <div id="modalLinks" class="modal fade" role="dialog" style="height: 100%;">
        <div class="modal-dialog modal-lg" style="width: 90%; height: 92%;">

            <!-- Modal content-->
            <div class="modal-content" style="height: 100%;">

                <div class="modal-body" style="height: 90%;">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Open in New Tab</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div id="modalGames" class="modal fade" role="dialog" style="height: 100%;">
        <div class="modal-dialog modal-lg" style="width: 90%; height: 92%;">

            <!-- Modal content-->
            <div class="modal-content" style="height: 100%;">

                <div class="modal-body" style="height: 90%;">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Open in New Tab</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div id="modalVideos" class="modal fade" role="dialog" style="height: 100%;">
        <div class="modal-dialog modal-lg" style="width: 90%; height: 92%;">

            <!-- Modal content-->
            <div class="modal-content" style="height: 100%;">

                <div class="modal-body" style="height: 90%;">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Open in New Tab</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div id="modalPDF" class="modal fade" role="dialog" style="height: 100%;">
        <div class="modal-dialog modal-lg" style="width: 90%; height: 92%;">

            <!-- Modal content-->
            <div class="modal-content" style="height: 100%;">

                <div class="modal-body" style="height: 90%;">

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

        $(function () {
            $(document).on("click", ".itemLinks", function () {
                var hrefer = $(this).attr('href');
                $("#modalLinks .modal-body").html('<iframe frameborder="0" width="100%" height="100%" src="'+hrefer+'"></iframe>');
                $("#modalLinks .modal-body iframe").load(function() {
                    console.log(this.contentWindow.document.body.offsetHeight);
                    this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
                });
            });

            $(document).on("click", ".itemGames", function () {
                var hrefer = $(this).attr('href');
                $("#modalGames .modal-body").html('<iframe class="embed-responsive-item" frameborder="0" width="100%" height="100%" allowfullscreen src="'+hrefer+ '" ></iframe>');
                /*$("#modalGames .modal-body param[name='movie']").val(hrefer);*/

                $("#modalGames .modal-body iframe").load(function() {
                    console.log(this.contentWindow.document.body.offsetHeight);
                    this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
                });
            });

            $(document).on("click", ".itemVideos", function () {
                var hrefer = $(this).attr('href');
                $("#modalVideos .modal-body").html('<iframe class="embed-responsive-item" frameborder="0" allowfullscreen width="100%" height="100%" src="'+hrefer+'"></iframe>');
                /*$("#modalVideos .modal-body param[name='movie']").val(hrefer);*/

                $("#modalVideos .modal-body iframe").load(function() {
                    console.log(this.contentWindow.document.body.offsetHeight);
                    this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
                });
            });

            $(document).on("click", ".itemPDF", function () {
                var hrefer = $(this).attr('href');
                $("#modalPDF .modal-body").html('<iframe class="embed-responsive-item" frameborder="0" allowfullscreen width="100%" height="100%" src="'+hrefer+'"></iframe>');
                /*$("#modalPDF .modal-body param[name='movie']").val(hrefer);*/

                $("#modalPDF .modal-body iframe").load(function() {
                    console.log(this.contentWindow.document.body.offsetHeight);
                    this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
                });
            });

            $('#modalPDF').on('hidden.bs.modal', function() {
                $("#modalPDF .modal-body").html('');
            });
            $('#modalGames').on('hidden.bs.modal', function() {
                $("#modalGames .modal-body").html('');
            });
            $('#modalVideos').on('hidden.bs.modal', function() {
                $("#modalVideos .modal-body").html('');
            });
            $('#modalLinks').on('hidden.bs.modal', function() {
                $("#modalLinks .modal-body").html('');
            });
        });

    </script>
@endsection