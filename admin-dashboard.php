<?php include 'config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta.php'?>
     <?php include 'alert.php';?>
    <title><?php echo $thename?> - convenient and comfortable hostels</title>
    <meta name="keywords" content="Limo Rental, Limousine, Shuttle, Car Service, Limo Transportation, Limo Rental, Limo to Airport, Airport, Shuttle to Airport, Oakland International Airport, San Francisco International Airport, San Jose International Airport, Napa Airport, Sacramento International Airport, Wine Tour, Wine Tasting, Wine Tour and Tasting, Limo wine tour, Limousine Wine Tour, Napa Wine, Sonoma Wine Tour, Livermore Wine Tour, Russian River Wine Tour, Corporate Transportation Car  Service, Sports Event Limousine, Night Out Limo, Airport Limousine, Airport Car Service, Wedding Limousine, Prom Limousine, Birthday Limousine, Airport Transfer, Bay Area Limo, Limo in San Francisco, Sightseeing Limo, Airport Transportation, Airport Shuttle, Napa Valley Wine Tour, Sonoma Valley Wine Tour, Livermore Valley Wine Tour, Wine Country Tour, Transportation service, Shuttle Service, Limousine Service, Black Car Service, OAK, SFO, SJC, SMF, Hourly transportation, Day Trip, Day tour, Point-to-point transportation, Hourly Limousine Service, Hourly Car Service, Hourly Transportation Car Service, Charter Bus Service, Bay Area, limo rentals, party buses, classic cars, stretch limo rental services, California, 1st classic, first classic" />
    <meta name="description" content="Premier Airport Transportation Limousine Car service provider in San Francisco for Corporate Transportation, Wine Tour to Napa, Sonoma, Livermore Valley"/>

    <meta property="og:title" content="Worldwide Chauffeured Transportation - <?php echo $thename?>" />
    <meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/1st-classic.jpg"/>
    <meta property="og:description" content="Premier Airport Transportation Limousine Car service provider in San Francisco for Corporate Transportation, Wine Tour to Napa, Sonoma, Livermore Valley"/>

    <meta name="twitter:title" content="Worldwide Chauffeured Transportation - <?php echo $thename?>"/> 
    <meta name="twitter:card" content="<?php echo $thename?>"/> 
    <meta name="twitter:image"  content="<?php echo $website_url?>/all-images/plugin-pix/1st-classic.jpg"/> 
    <meta name="twitter:description" content="Premier Airport Transportation Limousine Car service provider in San Francisco for Corporate Transportation, Wine Tour to Napa, Sonoma, Livermore Valley"/>
   
    <link href="slide-property/engine/style.css" rel="stylesheet" type="text/css"/>
    
    <script>
            window.onload = function () {
            const staffData = JSON.parse(localStorage.getItem('staffInfo'));
            console.log('Staff data : ' , staffData);

            if (!staffData) {
                alert('Unauthorized access. Please log in.');
                window.location.href = '/oouhostel.com/admin';
                return;
            }
            
            
            // Example of displaying info in elements with specific IDs
            document.getElementById('staffName').textContent = staffData.staffName;
            document.getElementById('staffEmail').textContent = staffData.staffEmail;

            const encodedFileName = encodeURIComponent(staffData.passport);
            const imagePath = staffData.documentStoragePath + encodedFileName;
            console.log(imagePath)
            document.getElementById('profileImagePreview').src = imagePath;

            const time = new Date();
            document.getElementById('time').textContent = time;
            fetchAllHostels();
            showSection('default');
             _clearModal();

        fetchAllUsers();
        fetchAllStaffs();
        selectUserBox();
        
        };
    </script>
   
            
    
</head>

<body>
  
	<?php include 'alert.php'?>

<header class="fadeInDown animated">
    <div class="top-header">
        <div class="top-inner-div">
            <div class="left-div">
                <span><i class="bi-envelope"></i> info@oouhostel.com</span>
                <span><i class="bi-telephone"></i> 1-800-6585679</span>          
            </div>

            <div class="right-back-div">
                <span><i class="bi-person"></i> My Account</span>
                <div class="right-div">
                    <ul>
                        <a href="https://api.whatsapp.com/send?text=Hello 1stClassic&amp;phone=+14159371660" target="_blank" title="Whatsapp">
                        <li><i class="bi bi-whatsapp"></i></li></a>
                        <a href="https://web.facebook.com/1stclassiclimos" target="_blank" title="Facebook">
                        <li class="li"><i class="bi bi-facebook"></i></li></a>
                        <a href="https://twitter.com/1stclassiclimos" target="_blank" title="Twitter">
                        <li class="li"><i class="bi bi-twitter-x"></i></i></li></a>
                        <a href="https://www.instagram.com/1stclassiclimos/" target="_blank" title="Instagram">
                        <li class="li"><i class="bi bi-instagram"></i></li></a>                
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-in-div">
        <a href="<?php echo $website_url?>">
        <div class="logo-div">
            <img src="<?php echo $website_url?>/all-images/images/new_logo.png" alt="<?php echo $thename?> Logo"  class="animated zoomIn"/>  
        </div></a>

        <nav>
            <ul>        
                <a href="<?php echo $website_url?>" title="index">
                    <li <?php if (($website_auto_url=="$website_url/")) {?> class="active" <?php }?>>
                        Dashboard
                    </li>
                </a>

                <a href="<?php echo $website_url ?>/about" title="About Us">
                    <li <?php if (($website_auto_url=="$website_url/about")) {?> class="active" <?php }?>>
                        About Us                        
                    </li>
                </a>

                <a href="<?php echo $website_url?>/hostels/" title="Our Service">
                    <li id="expand-div" class="services <?php if (strstr($website_auto_url, "$website_url/hostels/")) {?> active <?php }?>">
                        Hostels <i class="bi-chevron-down"></i>
                        <div class="sub-div animated fadeIn">
                            <ul class="ul-class">
                                <a href="<?php echo $website_url?>/" title="Fleet">
                                <li class="li">Self Room</li></a>                            
                            </ul>
                        </div>
                    </li>
                </a>  

                <a href="<?php echo $website_url?>" title="Contact Us">
                    <li class="contact-us <?php if (($website_auto_url=="$website_url/blog")) {?> active <?php }?>">
                        Blog
                    </li>
                </a> 

                <a href="<?php echo $website_url?>" title="Frequently Asked Questions">
                    <li class="faq <?php if (($website_auto_url=="$website_url/contact-us")) {?> active <?php }?>">
                        FAQ
                    </li>
                </a>

                <a href="<?php echo $website_url?>" title="Contact Us">
                    <li class="contact-us <?php if (($website_auto_url=="$website_url/contact-us")) {?> active <?php }?>">
                        Contact Us
                    </li>
                </a> 
                
                <li id="expand-div" class="read-more <?php if (strstr($website_auto_url, "$website_url/more")) {?> active <?php }?>">
                    Read More <i class="bi-chevron-down"></i>
                    <div class="sub-div animated fadeIn">
                        <ul class="ul-class">
                            <a href="<?php echo $website_url?>" title="FAQ">
                            <li class="li">FAQ</li></a>
                            <a href="<?php echo $website_url?>" title="Contact Us">
                            <li class="li">Contact Us</li></a>                           
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="btn-div">
            <button class="mobile-btn" onclick="_open_menu()"><i class="bi-list"></i></button>
        </div>
    </div>
</header>
    

    <section class="page-title-div animated fadeInDown">
        <div class="page-title-div-in">
            <div class="content-div">
                <div class="title">
                    <h1>Admin Dashboard</h1>
                </div>  
            </div>

            <section class="">

            </section>
           
        </div>
    </section>  

    <section class="body-div user-dash">
        <div class="body-div-in">
            <div class="board">
                
                <div class="nav-link">
                    <div class="nav-link-in">
                        <div class="title">
                            <h2>ADMIN LINKS</h2>
                        </div>
                        <div class="links">
                            
                                <ul>
                                    <li onclick="showSection('default')"><i class="bi-speedometer2"></i><a href="#">Dashboard</a></li>
                                    <li onclick="showSection('button_1')"><i class="bi-credit-card"></i><a href="#">Student History</a></li>
                                    <li onclick="showSection('button_2')"><i class="bi-stopwatch"></i><a href="#">Staff History</a></li>
                                    <li onclick="showSection('button_3')"><i class="bi-bell"></i><a href="#">Hostel Allocation</a></li>
                                    <li onclick="showSection('change_password')"><i class="bi-lock-fill"></i><a href="#">Change Password</a></li>
                                    <li onclick="logout()"><i class="bi-box-arrow-right"></i><a href="#">Logout</a></li>
                                </ul>

                        </div>


                    </div>
                </div>

                <div class="user-profile-board">
                    <div class="user-profile">
                        <div class="user-profile-in">
                            <div class="user-prof-head">
                                <h4>ADMIN PROFILE</h4>
                                <div class="edit-log">
                                    <button class="edit" title="Edit your profile"><i class="bi-pencil-square"></i> Edit</button>
                                    <button class="logout" title="Log Out" onclick="logout()"><i class="bi-box-arrow-right"></i> LogOut</button>
                                </div>
                            </div>

                            <div class="image-name-div">
                                <div class="image-div">
                                     <img id="profileImagePreview" src="all-images/images/user.jpg"  alt="Profile Pic" >
                                </div>

                                <div class="user-name">
                                    <p>Welcome Back!</p>
                                    <h2 id="staffName">Emmanuel Samuel Semako</h2>
                                    <p >Staff Email : <span class="time" id="staffEmail"> 2024-08-01 02:55:30 </span> </p>
                                     <p >Last Login Date : <span class="time" id="time"> 2024-08-01 02:55:30 </span> </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="user-profile log-div"  id="button_1">
                        <div class="user-profile-in">
                            <div class="user-prof-head">
                                <h4>STUDENT HISTORY</h4>
                                <div class="edit-log">
                                    <button class="edit" title="View profile" id="button_1"><i class="bi-eye"></i> View All</button>
                                </div>
                            </div>
                            <table id="studentTable">
                                    <!-- Your JavaScript will add rows here -->
                                     <tbody>
                                    <tr class="colored user">
                                        <td>DATE</td>
                                        <td>STUDENT ID</td>
                                        <td>FULL NAME</td>
                                        <td>MATRIC NUMBER</td>
                                        <td>PHONE NUMBER</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>

                    <div class="user-profile log-div"  id="button_2">
                        <div class="user-profile-in">
                            <div class="user-prof-head">
                                <h4>STAFF HISTORY</h4>
                                <div class="edit-log">
                                    <button class="edit" title="View profile" onclick='register_staff()'><i class="bi-eye"></i> Register</button>
                                </div>
                            </div>
                            <table id="staffTable">
                                    <!-- Your JavaScript will add rows here -->
                                     <tbody>
                                    <tr class="colored staff">
                                        <td>DATE</td>
                                        <td>STAFF ID</td>
                                        <td>STAFF NAME</td>
                                        <td>EMAIL</td>
                                        <td>PHONE NUMBER</td>
                                        <td>POSITION</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div id="staffForm" style="display: none; margin-top: 20px;">
                            <div class="staff-form-container">
                                <h2>Register New Staff</h2>
                                <form id="staffRegistration">
                                <div class="form-group">
                                    <label for="registerName">Full Name</label>
                                    <input type="text" placeholder="Enter your name" id="registerName" required />
                                </div>

                                <div class="form-group">
                                    <label for="registerEmail">Email</label>
                                    <input type="email" placeholder="Enter your Email" id="registerEmail" required />
                                </div>

                                <div class="form-group">
                                    <label for="registerNumber">Phone Number</label>
                                    <input type="text" placeholder="Enter your phone number" id="registerNumber" required />
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" placeholder="Enter your password" id="password" required />
                                </div>

                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <input type="text" placeholder="Enter your Position" id="position" required />
                                </div>

                                <div class="form-group">
                                    <label for="passport">Passport Photo</label>
                                    <input type="file" id="passport" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff,.webp,.svg,.avif"
                                        onchange="userPixPreview.UpdatePreview(this);" />
                                </div>

                                <div class="form-buttons">
                                    <button class="btn-submit" type="submit" onclick="_insert_staff();">Submit</button>
                                    <button class="btn-cancel" type="button" onclick="cancelRegistration()">Cancel</button>
                                </div>
                                </form>
                            </div>
                            </div>

                        </div>
                        
                    </div>

                    <div class="user-profile log-div" id="button_3">
                        <div class="user-profile-in">
                            <div class="user-prof-head">
                                <h4>HOSTEL ALLOCATION</h4>
                               
                            </div>
                            
                    

                            <label for="staffSelect">Select Student:</label>
                            <select id="staffSelect" style="color: black;" onchange="populateDetails();">
                                <option value=""> Student List </option>
                            </select>

                            <div id="staffDetails" style="margin-top: 20px;">
                                <label>Full Name:</label>
                                <input type="text" id="name" readonly>

                                <label>Matric Number:</label>
                                <input type="email" id="matric_no" readonly>

                                <label>Phone:</label>
                                <input type="text" id="phone" readonly>

                                <label>Hostel:</label>
                                <select id="hostel">
                                    <option value="ooudef">OOU DEF</option>
                                    <option value="sycamore">Sycamore</option>
                                    <option value="bvers">Bvers</option>
                                    <option value="oouventure">OOU VENTURE</option>
                                </select>

                                <label>Room Number:</label>
                                <select id="room">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                                <label>Bed Number:</label>
                                <select id="bed">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <button onclick="_insert_hostel()">Allocate</button>
                            </div>
                        </div>
                        
                    </div>

                    <div class="user-profile log-div" id="default">
                        <div class="user-profile-in">
                            <div class="user-prof-head">
                                <h4>DASHBOARD</h4>
                                <div class="edit-log">
                                    <button class="edit" title="Load Wallet"><i class="bi-credit-card"></i> View Hostel</button>
                                </div>
                            </div>
                            
                            <div class="transaction-div">
                                <div class="transaction-inner">
                                    <h5>5</h5>
                                    <P>TOTAL HOSTEL</P>
                                </div>

                                <div class="transaction-inner">
                                    <h5>400</h5>
                                    <P>TOTAL ROOMS</P>
                                </div>

                                <div class="transaction-inner">
                                    <h5>200</h5>
                                    <P>TOTAL VACNCY</P>
                                </div>
                            </div>

                            <div class="user-prof-head view">
                                <h4>Rent History</h4>
                                <div class="edit-log">
                                    <button class="edit" title="View profile"><i class="bi-eye"></i> View All</button>
                                </div>
                            </div>
                            <table id="hostelTable">
                                <tbody>
                                    <tr class="colored hostel">
                                        <td>DATE</td>
                                        <td>FULL NAME</td>
                                        <td>MATRIC NUMBER</td>
                                        <td>HOSTEL</td>
                                        <td>ROOM</td>
                                        <td>BED</td>
                                       
                                    </tr>
                                </tbody>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <br clear="all"/>
      
        <?php include 'footer.php'?>
</body>
</html>