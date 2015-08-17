$(document).on('click','.tag-cloud', function removeTag(){ $(this).remove(); });

$(document).ready(function(){
    $( window ).scroll( function(e){
        var rightScroll = $( "#rightScroll" );
        var rightScrollSize = rightScroll.height();
        if( $(this).scrollTop > rightScrollSize - ($(window).height()-50) || window.pageYOffset > rightScrollSize - ($(window).height()-50) ) {
            rightScroll.addClass('rscFixed');
        }
        else {
            rightScroll.removeClass('rscFixed');
        }
    });
});