<?php include 'config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta.php'?>
     <script src="js/user-dashboard.js"></script>  

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
        const userData = JSON.parse(localStorage.getItem('userInfo'));
           
        if (!userData) {
            alert('Unauthorized access. Please log in.');
            window.location.href = '/oouhostel.com/account';
            return;
        }
        const time = new Date();
        document.getElementById('time').textContent = time;

        // Example of displaying info in elements with specific IDs
        document.getElementById('userFullName').textContent = userData.fullname;
        document.getElementById('matric_no').textContent = userData.matric_no;

        const encodedFileName = encodeURIComponent(userData.passport);
        document.getElementById('profileImagePreview').src = userData.documentStoragePath + '/' + encodedFileName;

        _fetchUserHostel();
       
        
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
            <a href = "account/index"> <span><i class="bi-person"></i>My Account</span></a>
                <div class="right-div">
                    <ul>
                        <a href="https://api.whatsapp.com/send?text=Hello 1stClassic&amp;phone=+14159371660" target="_blank" title="Whatsapp">
                        <li><i class="bi-whatsapp"></i></li></a>
                        <a href="https://www.facebook.com/share/18hQhVKQaV/" target="_blank" title="Facebook">
                        <li class="li"><i class="bi-facebook"></i></li></a>
                        <a href="https://twitter.com/1stclassiclimos" target="_blank" title="Twitter">
                        <li class="li"><i class="bi-twitter"></i></li></a>
                        <a href="https://www.instagram.com/1stclassiclimos/" target="_blank" title="Instagram">
                        <li class="li"><i class="bi-instagram"></i></li></a>                
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
                    <h1>Student Dashboard</h1>
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
                            <h2>USER LINKS</h2>
                        </div>
                        <div class="links">
                            <ul>
                                <li><i class="bi-speedometer2"></i><a href="#">Dashboard</a></li>
                                
                                <li onclick="logout()"><i class="bi-box-arrow-right" ></i><a href="#">Logout</a></li>
                            </ul>
                        </div>


                    </div>
                </div>

                <div class="user-profile-board">
                    <div class="user-profile">
                        <div class="user-profile-in">
                            <div class="user-prof-head">
                                <h4>USER PROFILE</h4>
                                <div class="edit-log">
                                    <button class="edit" title="Edit your profile"><i class="bi-pencil-square"></i> Edit</button>
                                    <button class="logout" title="Log Out" onclick="logout()"><i class="bi-box-arrow-right"></i> LogOut</button>
                                </div>
                            </div>

                            <div class="image-name-div">
                                <div class="image-div">
                                    <img id="profileImagePreview" src="all-images/images/user.jpg"
                                        alt="Profile Pic" >
                                </div>

                                <div class="user-name">
                                    <p>Welcome Back!</p>
                                    <h2 id="userFullName">Emmanuel Samuel Semako</h2>
                                    <p class="time"> Matric Number <span id="matric_no">Loading...</span></p>
                                    <p class="time" > Last Login Date  <span id="time">Loading...</span>  </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="user-profile">
                        <div class="user-profile-in">
                            <div class="user-prof-head">
                                <h4>Room details</h4>
                                <div class="edit-log">
                                    <button class="edit" title="View profile"><i class="bi-eye"></i> View All</button>
                                </div>
                            </div>
                           <div class="user-prof-head">
                                <h4 id="result" class="allocation-message">
                                    Your allocated room is 
                                    Hostel <strong><span id="hostel"></span></strong> ,
                                    room <strong><span id="room"></span></strong> , 
                                    bed <strong><span id="bed"></span></strong> .
                                </h4>
                            </div>


                                    
                                    
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