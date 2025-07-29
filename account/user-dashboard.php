<?php include 'config/config.php';?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta.php'?>
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
                    <h1>User Dashboard</h1>
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
                                <li><i class="bi-credit-card"></i><a href="#">Rent History</a></li>
                                <li><i class="bi-stopwatch"></i><a href="#">Wallet History</a></li>
                                <li><i class="bi-bell"></i><a href="#">Notification</a></li>
                                <li><i class="bi-lock-fill"></i><a href="#">Change Password</a></li>
                                <li><i class="bi-box-arrow-right"></i><a href="#">Logout</a></li>
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
                                    <button class="logout" title="Log Out"><i class="bi-box-arrow-right"></i> LogOut</button>
                                </div>
                            </div>

                            <div class="image-name-div">
                                <div class="image-div">
                                    <img id="passport" src="all-images/images/user.jpg" alt="">
                                </div>

                                <div class="user-name">
                                    <p>Welcome Back!</p>
                                    <h2 id="userFullname">Emmanuel Samuel Semako</h2>
                                    <p class="time" id="presentTime"><span>Last Login Date</span> 2024-08-01 02:55:30 </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="user-profile">
                        <div class="user-profile-in">
                            <div class="user-prof-head">
                                <h4>RECENT HISTORY</h4>
                                <div class="edit-log">
                                    <button class="edit" title="View profile"><i class="bi-eye"></i> View All</button>
                                </div>
                            </div>
                            <table>
                                <tbody>
                                    <tr class="colored">
                                        <td>DATE</td>
                                        <td>RENT ID</td>
                                        <td>APARTMENTS</td>
                                        <td>(#)AMOUNT</td>
                                        <td>RENT STATUS</td>
                                        <td>PAYMENT METHOD</td>
                                        <td>PAYMENT STATUS</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>09/08/2024</td>
                                        <td class="blue">RENT001</td>
                                        <td>14, ARAROMI, ISARA</td>
                                        <td class="blue">130,000</td>
                                        <td>ACTIVE</td>
                                        <td class="blue">ONLINE TRANSFER</td>
                                        <td class="sec-color">PAID</td>
                                    </tr>

                                    <tr class="colored">
                                        <td>09/08/2024</td>
                                        <td class="blue">RENT001</td>
                                        <td>14, ARAROMI, ISARA</td>
                                        <td class="blue">130,000</td>
                                        <td>SUSPENDED</td>
                                        <td class="blue">CASH</td>
                                        <td class="sec-color">PENDING</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>

                    <div class="user-profile">
                        <div class="user-profile-in">
                            <div class="user-prof-head">
                                <h4>WALLET BALANCE</h4>
                                <div class="edit-log">
                                    <button class="edit" title="Load Wallet"><i class="bi-credit-card"></i> Load Wallet</button>
                                </div>
                            </div>
                            
                            <div class="transaction-div">
                                <div class="transaction-inner">
                                    <h5>NGN. 0.00</h5>
                                    <P>TOTAL AMOUNT RECIEVED</P>
                                </div>

                                <div class="transaction-inner">
                                    <h5>NGN. 0.00</h5>
                                    <P>TOTAL AMOUNT RECIEVED</P>
                                </div>

                                <div class="transaction-inner">
                                    <h5>NGN. 0.00</h5>
                                    <P>TOTAL AMOUNT RECIEVED</P>
                                </div>
                            </div>

                            <div class="user-prof-head view">
                                <h4>WALLET BALANCE</h4>
                                <div class="edit-log">
                                    <button class="edit" title="View profile"><i class="bi-eye"></i> View All</button>
                                </div>
                            </div>
                            <table>
                                <tbody>
                                    <tr class="colored">
                                        <td>DATE</td>
                                        <td>RENT ID</td>
                                        <td>APARTMENTS</td>
                                        <td>(#)AMOUNT</td>
                                        <td>RENT STATUS</td>
                                        <td>PAYMENT METHOD</td>
                                        <td>PAYMENT STATUS</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>09/08/2024</td>
                                        <td class="blue">RENT001</td>
                                        <td>14, ARAROMI, ISARA</td>
                                        <td class="blue">130,000</td>
                                        <td>ACTIVE</td>
                                        <td class="blue">ONLINE TRANSFER</td>
                                        <td class="sec-color">PAID</td>
                                    </tr>

                                    <tr class="colored">
                                        <td>09/08/2024</td>
                                        <td class="blue">RENT001</td>
                                        <td>14, ARAROMI, ISARA</td>
                                        <td class="blue">130,000</td>
                                        <td>SUSPENDED</td>
                                        <td class="blue">CASH</td>
                                        <td class="sec-color">PENDING</td>
                                    </tr>
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