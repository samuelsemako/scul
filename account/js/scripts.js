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


const rangeInput = document.getElementById('myRange');
const minValueSpan = document.getElementById('min-value');
const maxValueSpan = document.getElementById('max-value');

rangeInput.addEventListener('input', () => {
  const values = rangeInput.value.split(',');
  minValueSpan.textContent = values[0];
  maxValueSpan.textContent = values[1];
});


function _next_page(next_id) {
    $('.log-div').hide();
    $('#'+next_id).fadeIn(1000);
  };



	function _actionModal(action) {
		if (action === 'open') {
			$('#modal').css('display', 'flex');
			
		} else {
			$('#modal').css('display', 'none');
		}
	}




   





 
// For the Clear
	function _clearModal() {
		$('#fullname').val('');
		$('#matric_no').val('');
		$('#phoneNumber').val('');
        $('#password').val('');
		$('#profileImagePreview').attr('src', '');
		$('#passport').val('');
	};

// For the insertion
function isLetter(evt) {
		const char = String.fromCharCode(evt.keyCode);
		const pattern = /^[a-zA-Z\s]$/;
		return pattern.test(char) || evt.keyCode === 8; 
	};

	function isNumber(evt) {
		const char = String.fromCharCode(evt.keyCode);
		const input = evt.target.value;
		if (char === "." && input.includes(".")) return false;
		const pattern = /^[0-9.]$/;
		return pattern.test(char) || evt.keyCode === 8;
	};

	function validateFullName(fullname) {
		return /^[a-zA-Z ]{2,50}$/.test(fullname);
	};

	function validatePhoneNumber(phoneNumber) {
		return /^[0-9]{10}$/.test(phoneNumber);
	};

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

	function _insert_user(event) {
        event.preventDefault();
        try {
            const formData = new FormData();
            formData.append("fullname", document.getElementById('fullname').value.trim());
            formData.append("phoneNumber", document.getElementById('phoneNumber').value.trim());
            formData.append("matric_no", document.getElementById('matric_no').value.trim());
            formData.append("password", document.getElementById('password').value);
            formData.append("confirmPassword", document.getElementById('confirmPassword').value);
            formData.append("passport", document.getElementById('passport').files[0]);
            
            $.ajax({
                type: 'POST',
                url: endPoint + '/autosystem/user-insertion',  // Adjust path if needed
                data: formData,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                headers: {
                    'apiKeys': apiKeys
                },
                success: function(info) {
                    if (info.success === true) {
                        _actionAlert("User created successfully!", true);
                        
                         window.location.href = '/oouhostel.com/account';

                    } else {
                        _actionAlert(info.message, false);
                    }
                },
                error: function () {
                            _actionAlert('An error occurred while processing your request! Please Try Again', false);
                        }
                    });
            } catch (error) {
                console.error(error);
                _actionAlert('An unexpected error occurred! Please Try Again', false);
            }
        };



        function _fetchUser(event) {
        event.preventDefault();
        console.log("Login function triggered")
        try {
            const formData = new FormData();
            formData.append("loginMatric", document.getElementById('loginMatric').value.trim());
            formData.append("loginPassword", document.getElementById('loginPassword').value.trim());
                
            
            $.ajax({
                type: 'POST',
                url: endPoint + '/autosystem/user-fetch',
                data: formData,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                headers: {
                    'apiKeys': apiKeys
                },
                success: function(info) {
                    if (info.success === true) {
                        const user = info.data;

                        _actionAlert("Details fetched successfully!", true);

                        localStorage.setItem('userInfo', JSON.stringify(user));

                       window.location.href = '/oouhostel.com/user-dashboard';

                    } else {
                        _actionAlert(info.message || "Invalid login. Please check credentials.", false);
                    }
                    },      
                    });
            } catch (error) {
                console.error(error);
                _actionAlert('An unexpected error occurred! Please Try Again', false);
            }
        };
 
//LOG OUT
    
