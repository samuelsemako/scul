<?php include 'config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
  
	<?php include 'header.php'?>
    <?php include 'slide.php'?>

    <div class="slide-div">
        <div class="content-back-div">
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="1400">
                <h1>Where comfort meets <br/><span class="type-text" id="page-title">convenience</span></h1>
                <p>Relax, you're home</p>

                <div class="slide-bottom-back-div">
                    <div class=apart-loc-price>
                        <div class="icon-div">
                            <i class=bi-house-fill></i>
                        </div>
                        <select id="apartments" class="select_field">
                            <option value="All apartments">Select Apartments</option>
                            <option value="Single-Room">Single-Room</option>
                            <option value="Self-Contained">Self-Contained</option>
                            <option value="Flat">Flat</option>
                        </select>
                    </div>
                    
                    <div class=apart-loc-price>
                        <div class="icon-div">
                            <i class=bi-credit-card></i>
                        </div>
                        <select id="apartments" class="select_field">
                            <option value="All prices">Select Price</option>
                            <option value="#70k - #90k">70k - 90k</option>
                            <option value="#100k - #120k">100k - 120k</option>
                            <option value="#130k - #150k">130k - 150k</option>
                            <option value="#160k - #180k">160k - 180k</option>

                        </select>
                    </div>
                    

                    <div class=apart-loc-price>
                        <div class="icon-div">
                            <i class=bi-geo-alt></i>
                        </div>
                        <select id="apartments" class="select_field">
                            <option value="Location">Select Locations</option>
                            <option value="Isara">OOU DEF</option>
                            <option value="Ode">Sycamore</option>
                            <option value="Ipara">Bver</option>
                        </select>
                    </div>

                    <button class="btn">Search Now!</button>
                </div>
            </div>
        </div>



        <script type="text/javascript">
        // List of sentences
        var _CONTENT = [ "Convenience","Comfort","Secured"];
        // Current sentence being processed
        var _PART = 0;
        // Character number of the current sentence being processed 
        var _PART_INDEX = 0;
        // Element that holds the text
        var _ELEMENT = document.querySelector("#page-title");
        // Implements typing effect
        function Type() { 
            var text =  _CONTENT[_PART].substring(0, _PART_INDEX + 1);
            _ELEMENT.innerHTML = text;
            _PART_INDEX++;

            // If full sentence has been displayed then start to delete the sentence after some time
            if(text === _CONTENT[_PART]) {
                clearInterval(_INTERVAL_VAL);
                setTimeout(function() {
                    _INTERVAL_VAL = setInterval(Delete, 2);
                }, 5000);
            }
        }
        // Implements deleting effect
        function Delete() {
            var text =  _CONTENT[_PART].substring(0, _PART_INDEX - 1);
            _ELEMENT.innerHTML = text;
            _PART_INDEX--;

            // If sentence has been deleted then start to display the next sentence
            if(text === '') {
                clearInterval(_INTERVAL_VAL);

                // If last sentence then display the first one, else move to the next
                if(_PART == (_CONTENT.length - 1))
                    _PART = 0;
                else
                    _PART++;
                _PART_INDEX = 0;

                // Start to display the next sentence after some time
                setTimeout(function() {
                    _INTERVAL_VAL = setInterval(Type, 50);
                }, 100);
            }
        }
        // Start the typing effect on load
        _INTERVAL_VAL = setInterval(Type, 50);
        </script>
    </div>

    <section class="index-content-div">

    <!-- About Us -->
    <section class="body-div ">
            <div class="body-div-in">
                <div class="about-body-div">
                    <div class="image-div">
                        <img src="<?php echo $website_url ?>/all-images/body-pix/house6.jpg" alt="about us picture">
                    </div>

                    <div class="text-div">
                        <span>About Us</span>
                        <h2>Experience the art of hospitality at OOU Hostel for <span>Comfortabilty</span></h2>
                        <p>Welcome to OOU Hostel a vibrant and inclusive community designed for students. Our story began with the passion of creating a home away from home, where all walk of life could come together and make unforgettable memories.</p>

                        <div class="text-bottom-div">
                            <h4><i class="bi-check"></i> Easy Booking</h4>
                            <h4><i class="bi-check"></i> Hostels</h4>
                            <h4><i class="bi-check"></i> Flexibility</h4>
                            <h4><i class="bi-check"></i> Trustworthiness</h4>
                        </div>

                        <div class="button-div">
                            <button class="btn">Read More <i class="bi-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- Hostel List -->
        <section class="body-div">
            <div class="body-div-in">
                <div class="title-div">
                    <span>Our Hostels</span>
                    <h2>Our Latest Apartment</h2>
                    <p>Rest assured that our hostel provides a safe, welcoming and comfortable environment with friendly staff always avilable to assist </p>
                </div>
                
                <div class="house-list-div">
                    <div class="house-cont">
                        <div class="status-div">Available</div>
                        <div class="image-div">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/background.jpg" alt="hostels for rent">                       
                        </div>

                        <div class="text-div">
                            <div class="text-inner-div">
                                <h2>Single Room</h2>
                                <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                <div class="bottom-div">
                                    <h4>N100k <span>/year</span></h4>
                                    <button class="btn" title="View Detail"><a href="<?php echo $website_url?>/hostels/hostel-content" 
                                        title="hostels">View Details</a> </button>
                                </div>
                                <span><i class="bi-geo-alt"></i> Sycamore House</span>
                            </div>
                        </div> 
                    </div>

                    <div class="house-cont">
                        <div class="status-div">Available</div>
                        <div class="image-div">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/house1.jpg" alt="hostels for rent">                       
                        </div>

                        <div class="text-div">
                            <div class="text-inner-div">
                                <h2>Mini Flat Apartment</h2>
                                <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                <div class="bottom-div">
                                    <h4>N120k <span>/year</span></h4>
                                    <button class="btn" title="View Detail"><a href="<?php echo $website_url?>/hostels/hostel-content" 
                                        title="hostels">View Details</a> </button>
                                </div>
                                <span><i class="bi-geo-alt"></i> Bver Hostel</span>
                            </div>
                        </div> 
                    </div>

                    <div class="house-cont">
                        <div class="status-div">Available</div>
                        <div class="image-div">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/house5.jpg" alt="hostels for rent">                       
                        </div>

                        <div class="text-div">
                            <div class="text-inner-div">
                                <h2>Self Contained</h2>
                                <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                <div class="bottom-div">
                                    <h4>N150k <span>/year</span></h4>
                                    <button class="btn" title="View Detail"><a href="<?php echo $website_url?>/hostels/hostel-content" 
                                        title="hostels">View Details</a> </button>
                                </div>
                                <span><i class="bi-geo-alt"></i> ISOOU Hostel</span>
                            </div>
                        </div> 
                    </div>

                    <div class="house-cont">
                        <div class="status-div">Available</div>
                        <div class="image-div">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/house4.jpg" alt="hostels for rent">                       
                        </div>

                        <div class="text-div">
                            <div class="text-inner-div">
                                <h2>Self Contained</h2>
                                <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                <div class="bottom-div">
                                    <h4>N100k <span>/year</span></h4>
                                    <button class="btn" title="View Detail"><a href="<?php echo $website_url?>/hostels/hostel-content" 
                                        title="hostels">View Details</a> </button>
                                </div>
                                <span><i class="bi-geo-alt"></i> Mini Campus Hostel</span>
                            </div>
                        </div> 
                    </div>

                    <div class="house-cont">
                        <div class="status-div">Available</div>
                        <div class="image-div">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/house3.avif" alt="hostels for rent">                       
                        </div>

                        <div class="text-div">
                            <div class="text-inner-div">
                                <h2>Single Room</h2>
                                <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                <div class="bottom-div">
                                    <h4>N120k <span>/year</span></h4>
                                    <button class="btn" title="View Detail"><a href="<?php echo $website_url?>/hostels/hostel-content" 
                                        title="hostels">View Details</a> </button>
                                </div>
                                <span><i class="bi-geo-alt"></i> OOU DEF Female Hostel</span>
                            </div>
                        </div> 
                    </div>

                    <div class="house-cont">
                        <div class="status-div">Available</div>
                        <div class="image-div">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/house2.jpg" alt="hostels for rent">                       
                        </div>

                        <div class="text-div">
                            <div class="text-inner-div">
                                <h2>Mini Flat Apartment</h2>
                                <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                <div class="bottom-div">
                                    <h4>N150k <span>/year</span></h4>
                                    <button class="btn" title="View Detail"><a href="<?php echo $website_url?>/hostels/hostel-content" 
                                        title="hostels">View Details</a> </button>
                                </div>
                                <span><i class="bi-geo-alt"></i>OOU DEF AND VENTURES HOSTEL</span>
                            </div>
                        </div> 
                    </div>
                    
                </div>

                <div class="button-div">
                    <a href="<?php echo $website_url?>/hostels/" title="hostels">
                    <button class="btn" title="See more apartments">See More <i class="bi-chevron-right"></i></button></a>
                </div>
            </div> 
        </section>

       
        <section class="why-div">
            <div class="why-div-in">
                <div class="title-div">
                    <span>Why Choose Us</span>
                    <h3>We Give A Unique Blend Of Comfort, Community, And Convenience!</h3>
                </div>

                <div class="box-div">
                    <div class="box-content-div">
                        <div class="div-in">
                            <i class="bi bi-rocket-takeoff-fill"></i>
                            <h3>Easy Booking</h3>
                            <p>Book your stay with us in just a few simple step</p>
                        </div>
                    </div>
                    
                    <div class="box-content-div">
                        <div class="div-in">
                            <i class="bi bi-person-bounding-box"></i>
                            <h3>Experienced Managers</h3>
                            <p>Book your stay with us in just a few simple step</p>
                        </div>
                    </div>
                    
                    <div class="box-content-div">
                        <div class="div-in">
                            <i class="bi bi-shield-fill-check"></i>
                            <h3>Secured Locations</h3>
                            <p>Book your stay with us in just a few simple step</p>
                        </div>
                    </div>

                    <div class="box-content-div">
                        <div class="div-in">
                            <i class="bi bi-person-hearts"></i>
                            <h3>Friendly Neighbours</h3>
                            <p>Book your stay with us in just a few simple step</p>
                        </div>
                    </div>         
                </div>
            </div>
        </section>
        <br clear="all"/>
        <br clear="all"/>
       

        <!-- Blog -->
        <section class="body-div">
            <div class="body-div-in">
                <div class="title-div art">
                    <div class="text">
                        <span>Latest Insight</span>
                        <h2>News & Articles</h2>
                    </div>

                    <button class="btn">View More <i class="bi-chevron-right"></i></button>
                </div>

                <div class="news-art-div">
                    <div class="news-art-content">
                        <div class="image-div">
                            <img src="<?php echo $website_url?>/all-images/body-pix/house1.jpg" alt="blog image">
                        </div>

                        <div class="text-div">
                            <div class="news-view-div">
                                <div class="views">
                                    <i class="bi-calendar3"></i> 24 May, 2024 <span>|</span> <i class="bi-eye"></i> 1,211 Views
                                </div>
                            </div>

                            <h3>Affordable Houses For You available around</h3>
                            <p>Find your place without breaking the bank. A place to call home place to call home......</p>
                            <a href="<?php echo $website_url?>/#">
                            <button class="btn" title="Read more about our affordable apartment">Read More <i class="bi-arrow-right"></i></button></a>
                        </div>
                    </div>
 

                    <div class="news-art-content">
                        <div class="image-div">
                            <img src="<?php echo $website_url?>/all-images/body-pix/house1.jpg" alt="blog image">
                        </div>

                        <div class="text-div">
                            <div class="news-view-div">
                                <div class="views">
                                    <i class="bi-calendar3"></i> 24 May, 2024 <span>|</span> <i class="bi-eye"></i> 1,211 Views
                                </div>
                            </div>

                            <h3>Affordable Houses For You available around</h3>
                            <p>Find your place without breaking the bank. A place to call home......</p>
                            <a href="<?php echo $website_url?>/#">
                            <button class="btn" title="Read more about our affordable apartment">Read More <i class="bi-arrow-right"></i></button></a>
                        </div>
                    </div>


                    <div class="news-art-content">
                        <div class="image-div">
                            <img src="<?php echo $website_url?>/all-images/body-pix/house1.jpg" alt="blog image">
                        </div>

                        <div class="text-div">
                            <div class="news-view-div">
                                <div class="views">
                                    <i class="bi-calendar3"></i> 24 May, 2024 <span>|</span> <i class="bi-eye"></i> 1,211 Views
                                </div>
                            </div>

                            <h3>Affordable Houses For You available around</h3>
                            <p>Find your place without breaking the bank. A place to call home......</p>
                            <a href="<?php echo $website_url?>/#">
                            <button class="btn" title="Read more about our affordable apartment">Read More <i class="bi-arrow-right"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="body-div faq-body">
            <div class="body-div-in">
                <div class="title-div faq-title">
                    <span>Questions & Answers</span>
                    <h2>See Frequently Asked Questions</h2>
                </div>

                <div class="faq-back-div">
                    <div class="faq-div" onclick="_collapse('faq244')">
                        <div class="faq-title-div active">
                            <h3>Can I register Online?</h3>
                            <div class="icon-div" id="faq244num"> &nbsp;<i class="bi-plus"></i>&nbsp;</div>
                        </div>

                        <div class="answer-div" id="faq244answer">
                            <p>Yes, you can. In as musch as you are a student of Olabisi Onabanjo University</p>
                        </div>
                    </div>

                    <div class="faq-div" onclick="_collapse('faq245')">
                        <div class="faq-title-div">
                            <h3>Can I pay Online?</h3>
                            <div class="icon-div" id="faq245num"> &nbsp;<i class="bi-plus"></i>&nbsp;</div>
                        </div>

                        <div class="answer-div" id="faq245answer" style="display:none">
                            <p>Yes, you can. We have an online payment system and an automatic generated reciept Yes, you can. We have an online payment system and an automatic generated reciep Yes, you can. We have an online payment system and an automatic generated reciep Yes, you can. We have an online payment system and an automatic generated reciep</p>
                        </div>
                    </div>

                    <div class="faq-div" onclick="_collapse('faq246')">
                        <div class="faq-title-div">
                            <h3>Can I pay Online?</h3>
                            <div class="icon-div" id="faq246num"> &nbsp;<i class="bi-plus"></i>&nbsp;</div>
                        </div>

                        <div class="answer-div" id="faq246answer" style="display:none">
                            <p>Yes, you can. We have an online payment system and an automatic generated reciept Yes, you can. We have an online payment system and an automatic generated reciep Yes, you can. We have an online payment system and an automatic generated reciep Yes, you can. We have an online payment system and an automatic generated reciep</p>
                        </div>
                    </div>

                    <div class="faq-div" onclick="_collapse('faq247')">
                        <div class="faq-title-div">
                            <h3>Can I pay Online?</h3>
                            <div class="icon-div" id="faq247num"> &nbsp;<i class="bi-plus"></i>&nbsp;</div>
                        </div>

                        <div class="answer-div" id="faq247answer" style="display:none">
                            <p>Yes, you can. We have an online payment system and an automatic generated reciept Yes, you can. We have an online payment system and an automatic generated reciep Yes, you can. We have an online payment system and an automatic generated reciep Yes, you can. We have an online payment system and an automatic generated reciep</p>
                        </div>
                    </div>

                    <div class="button-div">
                        <button class="btn" title="See more apartments">See More <i class="bi-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </section>
        <br clear="all"/>
      
        <?php include 'footer.php'?>
    </section>
</body>
</html>