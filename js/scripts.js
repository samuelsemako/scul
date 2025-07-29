$(window).scroll(function () {
    var scrollheight = $(window).scrollTop();
    
    if (scrollheight >= 100) {
        $("#back2Top").fadeIn(1000);
    } else {
        $("#back2Top").fadeOut(1000);
    }
    
    if (scrollheight >= 400) {
        $("header").css({
            "position": "fixed",
            "background": "rgba(0, 0, 0, 0.9)",
        });
        $(".top-header").css("display", "none");
    } else {
        $("header").css({
            "position": "absolute",
            "background": "rgba(255, 255, 255, 0.027)"
        });
        $(".top-header").css({
            "display": "flex"
        });
    }
});


  
function _back_to_top(){
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
}

function scrolltodiv(divid, margintop){
	$('html, body').animate({
	scrollTop: $("#"+divid).offset().top - margintop}, 500);
}

function _open_menu(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	   $('.live-chat-back-div').animate({'margin-left':'-100%'},400);
	   $('.index-menu-back-div').animate({'margin-left':'0'},400);
}
function _open_live_chat(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	   $('.index-menu-back-div').animate({'margin-left':'-100%'},400);
	   $('.live-chat-back-div').animate({'margin-left':'0'},400);
}
function _close_side_nav(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'-100%'},200);
	   $('.index-menu-back-div,.live-chat-back-div').animate({'margin-left':'-100%'},400);
}



function _collapse(div_id) {
    var x = document.getElementById(div_id + "num");
    var faqDiv = document.getElementById(div_id + "answer").parentNode;
    var titleDiv = faqDiv.querySelector('.faq-title-div');

    if (x.innerHTML === '&nbsp;<i class="bi-dash"></i>&nbsp;') {
        x.innerHTML = '&nbsp;<i class="bi-plus"></i>&nbsp;';
        titleDiv.classList.remove('active');
    } else {
        x.innerHTML = '&nbsp;<i class="bi-dash"></i>&nbsp;';
        titleDiv.classList.add('active');
    }
    $('#'+div_id+'answer').slideToggle('slow');
}


function _rangeValues(){
    var minInput = $("#minPriceValue");
    var maxInput = $("#maxPriceValue");

    $("#priceRange").slider({
        range: true,
        min: 90000,
        max: 350000,
        values: [90000, 350000],
        step: 10,
        slide: function(event, ui) {
            minInput.val(ui.values[0]);
            maxInput.val(ui.values[1]);
        }
    });

    function validateAndCorrectValues() {
        var minValue = parseInt(minInput.val(), 10) || 90000;
        var maxValue = parseInt(maxInput.val(), 10) || 350000;

        minValue = Math.max(90000, Math.min(minValue, maxValue));
        maxValue = Math.min(350000, Math.max(maxValue, minValue));
        minInput.val(minValue);
        maxInput.val(maxValue);
        $("#priceRange").slider("values", [minValue, maxValue]);
    }
    minInput.add(maxInput).on("input blur keydown", function(event) {
        if (event.type === "blur" || event.key === "Enter") {
            validateAndCorrectValues();
        }
    });

    // Initial setup
    minInput.val($("#priceRange").slider("values", 0));
    maxInput.val($("#priceRange").slider("values", 1));

}

function _next_button(button_id) {
  $('.log-div').hide();
  $('#'+next_id).fadeIn(1000);
}
	$(function () {
		userPixPreview = {
		UpdatePreview: function (obj) {
			if (!window.FileReader) {
			console.error("FileReader is not supported.");
			} else {
			var reader = new FileReader();
	
			reader.onload = function (e) {
				$('#passport').prop("src", e.target.result);
			};
			reader.readAsDataURL(obj.files[0]);
			}
		},
		};
	});

    