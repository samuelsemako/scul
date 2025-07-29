

<header class="fadeInDown animated">
    <div class="top-header">
        <div class="top-inner-div">
            <div class="left-div">
                <span><i class="bi-envelope"></i> info@oouagoiwoye.com</span>
                <span><i class="bi-telephone"></i> 1-800-6585679</span>          
            </div>

            <div class="right-back-div">
                <div class="right-div">
                    <ul>
                        <a href="https://api.whatsapp.com/send?text=Hello 1stClassic&amp;phone=+14159371660" target="_blank" title="Whatsapp">
                        <li><i class="bi-whatsapp"></i></li></a>
                        <a href="https://web.facebook.com/1stclassiclimos" target="_blank" title="Facebook">
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
                        Home Page
                    </li>
                </a>

                <a href="<?php echo $website_url ?>/about" title="About Us">
                    <li <?php if (($website_auto_url=="$website_url/about")) {?> class="active" <?php }?>>
                        About Us                        
                    </li>
                </a>

                <a href="<?php echo $website_url?>/hostels" title="Hostels">
                     <li <?php if (($website_auto_url=="$website_url/hostels")) {?> class="active" <?php }?>>
                        Hostels </i>
                        
                    </li>
                </a>  

                <a href="<?php echo $website_url?>/blog" title="Our Blog">
                    <li class="blog <?php if (($website_auto_url=="$website_url/blog")) {?> active <?php }?>">
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
            <a href="account/index">
            <button class="btn" title="Add Property"><i class="bi-house-add-fill"></i> My Account</button></a>
            <button class="mobile-btn" onclick="_open_menu()"><i class="bi-list"></i></button>
        </div>
    </div>
</header>