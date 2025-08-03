function _actionModal(action) {
  if (action === "open") {
    $("#modal").css("display", "flex");
  } else if (action === "close") {
    $("#modal").css("display", "none").fadeOut(200);
  }
}




function _loginUser(){
  const emailAddress = $("#emailAddress").val();
  const password = $("#password").val().trim();
}

















// function _submitUser() {
//   const fullName = $("#fullName").val().trim();
//   const emailAddress = $("#emailAddress").val();
//   const phoneNumber = $("#phoneNumber").val();
//   const passport = $("#passport")[0].files[0];
//   const userId = $("#searchUser").val(); // Determines if it's update or register
//   const isUpdate = Boolean(userId);

//   $("#fullName, #emailAddress, #phoneNumber, #passport").removeClass("issue");

//   // === VALIDATIONS ===

//   if (!fullName) {
//     $("#fullName").addClass("issue");
//     _actionAlert("USER ERROR! Kindly provide fullname to continue", false);
//   }

//   if (!emailAddress) {
//     $("#emailAddress").addClass("issue");
//     _actionAlert("Provide email address to continue", false);
     
//   } else if (!/\S+@\S+\.\S+/.test(emailAddress)) {
//     $("#emailAddress").addClass("issue");
//     _actionAlert("USER ERROR! Invalid email format.", false);
    
//   }

//   if (!phoneNumber) {
//     $("#phoneNumber").addClass("issue");
//     _actionAlert("Provide phone number to continue", false);
//   }

//   if (!passport && !isUpdate) {
//     $("#passport").addClass("issue");
//     _actionAlert("USER ERROR! Kindly upload a profile picture to continue", false);

//   }

//   // === FORM DATA ===
//   const formData = new FormData();
//   formData.append("fullName", fullName);
//   formData.append("emailAddress", emailAddress);
//   formData.append("phoneNumber", phoneNumber);

//   if (passport) {
//     formData.append("passport", passport);
//   }

//   const apiEndpint = isUpdate
//     ? `${endPoint}/auto_system/update-user?userId=${userId}`
//     : `${endPoint}/auto_system/registration`;

//   const successMsg = isUpdate ? "User updated successfully!" : "User registered successfully!";
//   const errorMsg = isUpdate
//     ? "An error occurred while updating user."
//     : "An error occurred while registering user.";


//   // === AJAX REQUEST ===
//   $.ajax({
//     type: "POST",
//     url: apiEndpint,
//     data: formData,
//     dataType: "json",
//     contentType: false,
//     cache: false,
//     processData: false,
//     headers: {
//       apiKey: apiKey,
//     },
//     success: function (info) {
//       const success = info.success;
//       const message = info.message;

//       if (success === true) {
//         _actionAlert(successMsg, true);
//         _clearFunction();
//       } else {
//         _actionAlert(message || "Operation failed. Please try again.", false);
//       }
//     },
//     error: function () {
//       _actionAlert(errorMsg + " Please try again.", false);
//     },
//   });
// }
