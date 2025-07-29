
function select_search() {
	$(".srch-select").toggle("fast");
  }
  
  
  function srch_custom(text){
	$('#srch-text').html(text);
	$('.custom-srch-div').fadeIn(500);
  };


function _getActiveLink(divid) {
	$("#dashboard, #staff, #hostel").removeClass("active-li");
	$("#" + divid).addClass("active-li");
	$("#page-title").html($("#_" + divid).html());
  }

function _getPage(page, divid) {
	_getActiveLink(divid);
	if (page == '') {
		//do nothing
	} else {
	  $('#page-content').html('<div class="ajax-loader"><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(10);
		var action = 'get-page';
		var dataString = 'action=' + action + '&page=' + page;
		$.ajax({
			type: "POST",
			url: admin_portal_local_url,
			data: dataString,
			cache: false,
			success: function (html) {
				$('#page-content').html(html);
			}
		});
	}
}