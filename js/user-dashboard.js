  function logout() {
        localStorage.removeItem('userInfo');
        window.location.href = '/oouhostel.com/account';
    };

 const userData = JSON.parse(localStorage.getItem('userInfo'));

 function _fetchUserHostel() {
        event.preventDefault();
        console.log("Login function triggered")
        try {
            const formData = new FormData();
           console.log(userData.user_id);
            formData.append("user_id", userData.user_id);
            $.ajax({
                type: 'POST',
                url: 'http://localhost/oouhostel.com/api/dev/autosystem/user-hostel-fetch',
                data: formData,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                headers: {
                    apiKeys: "d08cebbe-0270-42bb-b559-5759ed2f63d5"
                },
                success: function(info) {
                    if (info.success === true) {
                        const hostel = info.data;

                        _actionAlert("Hostel Details fetched successfully!", true);
                        localStorage.setItem('hostelInfo', JSON.stringify(hostel));
                         const hostelData = JSON.parse(localStorage.getItem('hostelInfo'));
                        console.log(hostelData)
                         document.getElementById('hostel').textContent = (hostelData.hostel).toUpperCase();
                        document.getElementById('room').textContent = hostelData.room;
                        document.getElementById('bed').textContent = hostelData.bed;
                    } else {
                        const result= ('You are yet to be allocated room. Wait for the admin to allocate room for you ') ;
                        document.getElementById('result').textContent =result;
                    }
                    },      

                    });


            } catch (error) {
                console.error(error);
                _actionAlert('An unexpected error occurred! Please Try Again', false);
            }
        };
 