/**
 * Created by Aliscom4 on 19.05.2016.
 */
var page; //Объект
$(document).ready(function() {
    if (page) {
        window.onload = function () {
            init_preview_file(page);
        }
    }
	
	$(".zoomimage").fancybox();
	
	$('.lbutton').click(function(){
		$('.order_form_wrapper').fadeIn('slow');
	});
	
/* 	$('.order_form_close').click(function(){
		$('.order_form_wrapper').fadeOut('slow');
	});	 */
});

function delete_preview(element){
    name = element.parents('.file-specials').siblings('.file-caption-name').text();
    if($('.file-input input[data-name="'+name+'"]').length){
        for(i=0;i<$('.file-input input[data-name="'+name+'"]').length;i++){
            $('.file-input input[data-name="'+name+'"]').eq(i).remove();
        }
    }
}

function init_preview_file(page){
    if($(".file-input .file-preview-frame").length == page.files_count){
        $(".file-input .input-group").hide();
    }
}