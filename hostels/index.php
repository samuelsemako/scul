<?php include '../config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta.php'?>
    <title><?php echo $thename?> Hostels</title>
    <meta name="keywords" content="Limo Rental, Limousine, Shuttle, Car Service, Limo Transportation, Limo Rental, Limo to Airport, Airport, Shuttle to Airport, Oakland International Airport, San Francisco International Airport, San Jose International Airport, Napa Airport, Sacramento International Airport, Wine Tour, Wine Tasting, Wine Tour and Tasting, Limo wine tour, Limousine Wine Tour, Napa Wine, Sonoma Wine Tour, Livermore Wine Tour, Russian River Wine Tour, Corporate Transportation Car  Service, Sports Event Limousine, Night Out Limo, Airport Limousine, Airport Car Service, Wedding Limousine, Prom Limousine, Birthday Limousine, Airport Transfer, Bay Area Limo, Limo in San Francisco, Sightseeing Limo, Airport Transportation, Airport Shuttle, Napa Valley Wine Tour, Sonoma Valley Wine Tour, Livermore Valley Wine Tour, Wine Country Tour, Transportation service, Shuttle Service, Limousine Service, Black Car Service, OAK, SFO, SJC, SMF, Hourly transportation, Day Trip, Day tour, Point-to-point transportation, Hourly Limousine Service, Hourly Car Service, Hourly Transportation Car Service, Charter Bus Service, Bay Area, limo rentals, party buses, classic cars, stretch limo rental services, California, 1st classic, first classic" />
    <meta name="description" content="Premier Airport Transportation Limousine Car service provider in San Francisco for Corporate Transportation, Wine Tour to Napa, Sonoma, Livermore Valley"/>

    <meta property="og:title" content="Worldwide Chauffeured Transportation - <?php echo $thename?>" />
    <meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/1st-classic.jpg"/>
    <meta property="og:description" content="Premier Airport Transportation Limousine Car service provider in San Francisco for Corporate Transportation, Wine Tour to Napa, Sonoma, Livermore Valley"/>

    <meta name="twitter:title" content="Worldwide Chauffeured Transportation - <?php echo $thename?>"/> 
    <meta name="twitter:card" content="<?php echo $thename?>"/> 
    <meta name="twitter:image"  content="<?php echo $website_url?>/all-images/plugin-pix/1st-classic.jpg"/> 
    <meta name="twitter:description" content="Premier Airport Transportation Limousine Car service provider in San Francisco for Corporate Transportation, Wine Tour to Napa, Sonoma, Livermore Valley"/>
    
</head>

<body>
  
	<?php include '../header.php'?>

    <section class="page-title-div animated fadeInDown">
        <div class="page-title-div-in">
            <div class="content-div">
                <div class="home-page-div">
                    <ul>
                        <a href="<?php echo $website_url ?>" title="Home page"><li>Home <i class="bi-caret-right-fill"></i></li></a>
                        <a href="<?php echo $website_url?>/hostels/" title="hostels"><li>Hostels</li></a>                   
                    </ul>               
                </div>

                <div class="title">
                    <h1>Hostels</h1>
                </div>  
            </div>
           
        </div>
    </section>  



    <section class="pages-content">


        <div class="sbbdh">
            <div class="slide-bottom-back-div extra " >
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
                        <option value="Ode">Bvers</option>
                        <option value="Ipara">Sycamore</option>
                    </select>
                </div>

                <button class="btn">Search Now!</button>
            </div>
        </div> 
                
        
            

        <!-- Hostel List -->
        <section class="body-div">
            <div class="body-div-in">
                <div class="house-right-left">

                    <div class="house-list-div cat-show-div">
                        <div class="house-cont cat-show-div-in">
                            <div class="status-div">Available</div>
                            <div class="image-div">
                                <img src="<?php echo $website_url ?>/all-images/body-pix/background.jpg" alt="hostels for rent">                       
                            </div>

                            <div class="text-div">
                                <div class="text-inner-div">
                                    <h2>Single Room</h2>
                                    <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                    <div class="bottom-div">
                                        <h4>₦100k <span>/year</span></h4>
                                        <button class="btn" title="View Detail"><a href="<?php echo $website_url?>/hostels/hostel-content" 
                                            title="hostels">View Details</a> </button>
                                    </div>
                                    <span><i class="bi-geo-alt"></i> OOU DEF</span>
                                </div>
                            </div> 
                        </div>

                        <div class="house-cont cat-show-div-in">
                            <div class="status-div">Available</div>
                            <div class="image-div">
                                <img src="<?php echo $website_url ?>/all-images/body-pix/house1.jpg" alt="hostels for rent">                       
                            </div>

                            <div class="text-div">
                                <div class="text-inner-div">
                                    <h2>Mini Flat Apartment</h2>
                                    <p>Perfectly designed for solo students,
                                            providing everything you need for a restful and rejuvinating for......</p>

                                    <div class="bottom-div">
                                        <h4>₦120k <span>/year</span></h4>
                                        <button class="btn" title="View Detail"><a href="<?php echo $website_url?>/hostels/hostel-content" 
                                            title="hostels">View Details</a> </button>
                                    </div>
                                    
                                    <span><i class="bi-geo-alt"></i> SYCAMORE</span>
                                </div>
                            </div> 
                        </div>

                        <div class="house-cont cat-show-div-in">
                            <div class="status-div">Available</div>
                            <div class="image-div">
                                <img src="<?php echo $website_url ?>/all-images/body-pix/house5.jpg" alt="hostels for rent">                       
                            </div>

                            <div class="text-div">
                                <div class="text-inner-div">
                                    <h2>Self Contained</h2>
                                    <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                    <div class="bottom-div">
                                        <h4>₦150k <span>/year</span></h4>
                                        <button class="btn" title="View Detail"><a href="<?php echo $website_url?>/hostels/hostel-content" 
                                            title="hostels">View Details</a> </button>
                                    </div>
                                    <span><i class="bi-geo-alt"></i> BVERS</span>
                                </div>
                            </div> 
                        </div>

                        <div class="house-cont cat-show-div-in">
                            <div class="status-div">Available</div>
                            <div class="image-div">
                                <img src="<?php echo $website_url ?>/all-images/body-pix/house4.jpg" alt="hostels for rent">                       
                            </div>

                            <div class="text-div">
                                <div class="text-inner-div">
                                    <h2>Self Contained</h2>
                                    <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                    <div class="bottom-div">
                                        <h4>₦100k <span>/year</span></h4>
                                        <button class="btn" title="View Detail"><a href="<?php echo $website_url?>/hostels/hostel-content" 
                                            title="hostels">View Details</a> </button>
                                    </div>
                                    <span><i class="bi-geo-alt"></i> OOU VENTURES</span>
                                </div>
                            </div> 
                        </div>

                    </div>

                    <div class="house-catright-inner">
                        <div class="house-cat-right">                        
                            <div class="cat-right-title">
                                <h2>Location</h2>
                            </div>

                            <div class="cat-right-cont">
                                <div class="in-div top-in">
                                    <label>
                                        <input type="radio" class="check_box" name="location" value="bvers">
                                        <span class="check_box"></span> BVERS
                                    </label>

                                    <label>
                                        <input type="radio" class="check_box" name="location" value="oou-def">
                                        <span class="check_box"></span> OOU DEF                                    </label>

                                    <label>
                                        <input type="radio" class="check_box" name="location" value="sycamore">
                                        <span class="check_box"></span> SYCAMORE
                                    </label>   
                                </div>                                       
                            </div>
                        </div>


                        <div class="house-cat-right">
                            <div class="cat-right-title">
                                <h2>Price Range</h2>
                            </div>

                            <div class="cat-right-cont">
                                <div class="in-div">
                                    <div class="top-text">
                                        <span>Price (₦)</span>  
                                        <button class="btn">Apply</button>                              
                                    </div>

                                    <div class="slider-container">
                                        <div id="priceRange" class="slider"></div>
                                        <div class="price-text">
                                            <input type="number" id="minPriceValue" class="price-input" min="90000" max="350000"> - 
                                            <input type="number" id="maxPriceValue" class="price-input" min="90000" max="350000">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>               
                    </div>
                </div> 
            </div> 
            <script>
                _rangeValues();
            </script>
        </section>

       
        <br clear="all"/>
        <br clear="all"/>
       
        <?php include '../footer.php'?>
    </section>
</body>
</html>