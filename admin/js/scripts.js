function alert_close(){
  $('.overlay-div').html('').fadeOut(200);
}

function _next_page(next_id) {
  $('.log-div').hide();
  $('#'+next_id).fadeIn(1000);
}
  
function _get_page(page){
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
  var action='reset_password';
  var dataString ='action='+ action+'&page='+ page;
  $.ajax({
  type: "POST",
  url: login_local_url,
  data: dataString,
  cache: false,
  success: function(html){
      $('.overlay-div').html(html);}
  });
}


function _success_page(page){
  $('.overlay-div').html('').fadeIn(500);
  var action='password_reset_completed';
  var dataString ='action='+ action+'&page='+ page;
  $.ajax({
  type: "POST",
  url: login_local_url,
  data: dataString,
  cache: false,
  success: function(html){
      $('.overlay-div').html(html);}
  });
}

	function _actionModal(action) {
		if (action === 'open') {
			$('#modal').css('display', 'flex');
			
		} else {
			$('#modal').css('display', 'none');
		}
	}



// For the Clear
	function _clearModal() {
		$('#fullName').val('');
		$('#matric_no').val('');
		$('#phoneNumber').val('');
    $('#password').val('');
		$('#profileImagePreview').attr('src', 'all-images/images/friends.png');
		$('#passport').val('');
		userDetailsFetched = false;
	}

// For the insertion
function isLetter(evt) {
		const char = String.fromCharCode(evt.keyCode);
		const pattern = /^[a-zA-Z\s]$/;
		return pattern.test(char) || evt.keyCode === 8; 
	}

	function isNumber(evt) {
		const char = String.fromCharCode(evt.keyCode);
		const input = evt.target.value;
		if (char === "." && input.includes(".")) return false;
		const pattern = /^[0-9.]$/;
		return pattern.test(char) || evt.keyCode === 8;
	}

	function validateFullName(fullName) {
		return /^[a-zA-Z ]{2,50}$/.test(fullName);
	}

	function validatePhoneNumber(phoneNumber) {
		return /^[0-9]{10}$/.test(phoneNumber);
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


    var websiteUrl ="<?php echo $websiteUrl; ?>";
    var endPoint =websiteUrl+"/api/dev";
    var apiKeys = "d08cebbe-0270-42bb-b559-5759ed2f63d5";


  function _fetchUser(event) {
        event.preventDefault();
        console.log("Login function triggered")
        try {
            const formData = new FormData();
            formData.append("staffEmail", document.getElementById("staffEmail").value.trim());
            formData.append("staffPassword", document.getElementById('staffPassword').value.trim());
              
            $.ajax({
                type: 'POST',
                url: 'http://localhost/oouhostel.com/api/dev/autosystem/staff-fetch',
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
                        const staff = info.data;

                        _actionAlert("Details fetched successfully!", true);

                        localStorage.setItem('staffInfo', JSON.stringify(staff));

                        const staffdata = JSON.parse(localStorage.getItem('staffInfo'));
                        if (staffdata.position.toLowerCase() === 'manager' || staffdata.position.toLowerCase() === 'super-admin' || staffdata.position.toLowerCase() === 'admin') {
                        _actionAlert("Welcome " + staffdata.staffName + "!", true);
                        localStorage.setItem('staffInfo', JSON.stringify(staff));
                           window.location.href = '/oouhostel.com/admin-dashboard';
                        } else{
                             window.location.href = '/oouhostel.com/staff-dashboard';
                             localStorage.setItem('staffInfo', JSON.stringify(staff));
                              _actionAlert("Welcome " + staffdata.staffName + "!", true);
                        };

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
 

