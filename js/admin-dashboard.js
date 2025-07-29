function alert_close(){
  $('.overlay-div').html('').fadeOut(200);
}

// Show the selected section and hide others
function showSection(id) {
            const sections = document.querySelectorAll('.log-div');
            sections.forEach(section => {
            section.classList.remove('active');
            });

            const target = document.getElementById(id);
            if (target) {
            target.classList.add('active');
            }
        };

function _clearModal() {
		document.getElementById('name').value = '';
        document.getElementById('matric_no').value = '';
        document.getElementById('phone').value = '';
        document.getElementById('hostel').value = '';
        document.getElementById('room').value = '';
        document.getElementById('bed').value = '';
	}


window.onload = function () {
                showSection('default'); // or any default
            };
            


function logout() {
        alert('Logging out...');
        localStorage.removeItem('staffInfo');
        window.location.href = '/oouhostel.com/admin';
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

// TO FETCH ALL USERS
function fetchAllUsers() {
    $.ajax({
        type: 'GET',
        url: 'http://localhost/oouhostel.com/api/dev/autosystem/fetch-all-user',
        dataType: 'json',
        cache: false,
        processData: false,
        headers: {
            apiKeys: "d08cebbe-0270-42bb-b559-5759ed2f63d5"
        },
        success: function (response) {
            console.log('API Response:', response);

            if (response.success && Array.isArray(response.data)) {
              
                const rentTableBody = document.querySelector("#studentTable tbody");
                if (!rentTableBody) {
                    console.error('Table body not found!');
                    return;
                }


                // Remove all rows except the header (first row)
                while (rentTableBody.rows.length > 1) {
                    rentTableBody.deleteRow(1);
                }

                response.data.forEach((record, index) => {
                    const row = document.createElement('tr');
                    if (index % 2 === 1) row.classList.add('staff');

                    row.innerHTML = `
                        <td>${record.created_time || ''}</td>
                        <td class="blue">${record.user_id || ''}</td>
                        <td>${record.fullname || ''}</td>
                        <td class="blue">${record.matric_no || ''}</td>
                        <td>${record.phoneNumber || ''}</td>
                        
                    `;
                    rentTableBody.appendChild(row);
                });

            } else {
                _actionAlert('No rent history found.', false);
            }
        },
        error: function (xhr, status, error) {
            console.error('API Error:', error);
            _actionAlert('Could not load rent history.', false);
        }
    });
}



// TO FETCH ALL STAFFS
function fetchAllStaffs() {
    $.ajax({
        type: 'GET',
        url: 'http://localhost/oouhostel.com/api/dev/autosystem/fetch-all-staff',
        dataType: 'json',
        cache: false,
        processData: false,
        headers: {
            apiKeys: "d08cebbe-0270-42bb-b559-5759ed2f63d5"
        },
        success: function (response) {
            console.log('API Response:', response);

            if (response.success && Array.isArray(response.data)) {
                
                
                const rentTableBody = document.querySelector("#staffTable tbody");
                if (!rentTableBody) {
                    console.error('Table body not found!');
                    return;
                }


                // Remove all rows except the header (first row)
                while (rentTableBody.rows.length > 1) {
                    rentTableBody.deleteRow(1);
                }

                response.data.forEach((record, index) => {
                    const row = document.createElement('tr');
                    if (index % 2 === 1) row.classList.add('staff');

                    row.innerHTML = `
                        <td>${record.created_time || ''}</td>
                        <td class="blue">${record.staff_id || ''}</td>
                        <td>${record.staffName || ''}</td>
                        <td class="blue">${record.staffEmail || ''}</td>
                        <td>${record.staffNumber || ''}</td>
                        <td>${record.position || ''}</td>
                        
                    `;
                    rentTableBody.appendChild(row);
                });

            } else {
                _actionAlert('No rent history found.', false);
            }
        },
        error: function (xhr, status, error) {
            console.error('API Error:', error);
            _actionAlert('Could not load staff history.', false);
        }
    });
}


function register_staff() {
    document.getElementById('staffTable').style.display = 'none';
    document.getElementById('staffForm').style.display = 'block';
}

function cancelRegistration() {
    document.getElementById('staffForm').style.display = 'none';
    document.getElementById('staffTable').style.display = 'table';
}

	


// TO REGISTER NEW STAFF
function _insert_staff() {
        event.preventDefault();
        try {
            const formData = new FormData();
            formData.append("staffName", document.getElementById('registerName').value.trim());
            formData.append("staffEmail", document.getElementById('registerEmail').value.trim());
            formData.append("staffNumber", document.getElementById('registerNumber').value.trim());
            formData.append("password", document.getElementById('password').value);
             formData.append("position", document.getElementById('position').value);
            formData.append("passport", document.getElementById('passport').files[0]);
            
            $.ajax({
                type: 'POST',
                url: 'http://localhost/oouhostel.com/api/dev/autosystem/staff-insertion',  // Adjust path if needed
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
                        _actionAlert("STAFF created successfully!", true);
                        window.location.href = '/oouhostel.com/admin-dashboard';
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


let allUsers = []; // 👈 Global variable

function selectUserBox() {
        
    $.ajax({
        type: 'GET',
        url: 'http://localhost/oouhostel.com/api/dev/autosystem/fetch-all-user',
        dataType: 'json',
        cache: false,
        headers: {
            apiKeys: "d08cebbe-0270-42bb-b559-5759ed2f63d5"
        },
        
        success: function (response) {
            console.log('API Response:', response);
            
            if (response.success && Array.isArray(response.data)) {
                allUsers = response.data; // 👈 Store users globally

                const selectBox = document.getElementById('staffSelect');
                response.data.forEach(user => {
                    const option = document.createElement('option');
                    option.value = user.user_id;
                    option.text = user.fullname;
                    selectBox.appendChild(option);
                });
            }
        },
        error: function () {
            console.error('Error fetching users.');
        }
    });
}
function populateDetails() {
    const selectedId = document.getElementById('staffSelect').value;
    const user = allUsers.find(u => u.user_id === selectedId);
    console.log(user.fullname, user.matric_no, user.phoneNumber)
    if (user) {
        document.getElementById('name').value = user.fullname || '';
        document.getElementById('matric_no').value = user.matric_no || '';
        document.getElementById('phone').value = user.phoneNumber || '';
     };
}

// HOSTEL ALLOCATION
function _insert_hostel() {
        event.preventDefault();
        try {
            const formData = new FormData();
            formData.append("user_id", document.getElementById('staffSelect').value.trim());
            formData.append("hostel", document.getElementById('hostel').value.trim());
            formData.append("room", document.getElementById('room').value.trim());
            formData.append("bed", document.getElementById('bed').value.trim());
            
            $.ajax({
                type: 'POST',
                url: 'http://localhost/oouhostel.com/api/dev/autosystem/hostel-allocation',  // Adjust path if needed
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
                        _actionAlert("Hostel Allocated successfully!", true);
                        fetchAllHostels();
                        showSection('default');
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

//TO FETCH ALL HOSTEL
function fetchAllHostels() {
    $.ajax({
        type: 'GET',
        url: 'http://localhost/oouhostel.com/api/dev/autosystem/fetch-all-hostel',
        dataType: 'json',
        cache: false,
        processData: false,
        headers: {
            apiKeys: "d08cebbe-0270-42bb-b559-5759ed2f63d5"
        },
        success: function (response) {
            console.log('API Response:', response);

            if (response.success && Array.isArray(response.data)) {
                
                
                const rentTableBody = document.querySelector("#hostelTable tbody");
                if (!rentTableBody) {
                    console.error('Table body not found!');
                    return;
                }


                // Remove all rows except the header (first row)
                while (rentTableBody.rows.length > 1) {
                    rentTableBody.deleteRow(1);
                }

                response.data.forEach((record, index) => {
                    const row = document.createElement('tr');
                    if (index % 2 === 1) row.classList.add('hostel');

                    row.innerHTML = `
                        <td>${record.created_time || ''}</td>
                        <td class="blue">${record.fullname || ''}</td>
                        <td>${record.matric_no || ''}</td>
                        <td class="blue">${(record.hostel || '').toUpperCase()}</td>
                        <td>${record.bed || ''}</td>
                        <td>${record.room || ''}</td>
                        
                    `;
                    rentTableBody.appendChild(row);
                });

            } else {
                _actionAlert('No rent history found.', false);
            }
        },
        error: function (xhr, status, error) {
            console.error('API Error:', error);
            _actionAlert('Could not load staff history.', false);
        }
    });
}
