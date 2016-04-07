function yload_ajax_content(tab_url,content_selector){
	$("#ypreloader").show();
	jQuery.ajax({
		url: tab_url, 
		cache: false,
		success: function(message)
		{
			$(content_selector).html(message);
			
			$("#ypreloader").hide();
		}
	});//end ajax
}//end yload_ajax_content

		
function yinit_ajax_tabs(tab_selector,content_selector)
{
	$("#ypreloader").hide();				
	jQuery(tab_selector).on("click", function(){
					
	// get tab id and tab url									
	tab_url = $(this).attr("yurl");
					
	jQuery(tab_selector).removeClass("active");
	$(this).addClass("active");
					
	// load tab content
	yload_ajax_content(tab_url,content_selector);
	return false;
	});
}//end yinit_ajax_tabs

