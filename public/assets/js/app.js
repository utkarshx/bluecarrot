$(document).on('click','.tag-cloud', function removeTag(){ $(this).remove(); });

$(document).ready(function(){
    $( window ).scroll( function(e){
        var rightScroll = $( "#rightScroll" );
        var rightScrollSize = rightScroll.height();
        console.log("Right Scroll "+ rightScrollSize);
        console.log("window height "+$(window).height());
        console.log("YOffset "+ window.pageYOffset);
        console.log("scrolltop "+$(this).scrollTop);
        if( $(this).scrollTop > rightScrollSize - ($(window).height()-50) || window.pageYOffset > rightScrollSize - ($(window).height()-50) ) {
            rightScroll.addClass('rscFixed');
        }
        else {
            rightScroll.removeClass('rscFixed');
        }
    });
});