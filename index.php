
<?php
include_once('website/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into request(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signature Cuisine</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body>

    <!-- ################# Header Starts Here#######################--->
    
      <header id="menu-jk">
    
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;">   
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-10 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#offers">Offers</a></li>
                            <li><a href="#about_us">About Us</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact_us">Contact Us</a></li>
                            <li><a href="#logins">Logins</a></li>  
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>
    
     <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/slider/carousel01.jpg" alt="Second slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">Place that you dreamed to eat.</h5>    
                    </div>
                </div>
                
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/carousel02.jpg" alt="Third slide">
                      <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">Welcome, to the Signature Cuisine.</h5>
                    </div>
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    
  <!--  ************************* Logins ************************** -->
    
    
     <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                <h2>Logins</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/customer_card.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Customer Login</h6>
                                <a href="website/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/staff_card.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Staff login</h6>
                                <a href="website/staff" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/admin_card.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Admin Login</h6>
                    
                                <a href="website/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>             
                </div>
            </div>
            
        </div>
    </section>  







    <!-- ################# Our Departments Starts Here#######################--->


    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Our Services</h2>
                <p>Take a look of services we will offer you</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-utensils"></i>
                        <h5>Dine-in Service</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-truck"></i>
                        <h5>Delivery Service</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fas fa-car"></i>
                        <h5>Catering Service</h5>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="far fa-calendar-check"></i>
                        <h5>Reservations</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-tree"></i>
                        <h5>Outdoor Seating</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-door-closed"></i>
                        <h5>Private Dining Rooms</h5>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-glass-martini"></i>
                        <h5>Bar or Lounge Area</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-mobile-alt"></i>
                        <h5>Online Ordering</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-seedling"></i>
                        <h5>Special Dietary Options</h5>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-gift"></i>
                        <h5>Gift Cards</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-wifi"></i>
                        <h5>Wi-Fi Service</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-music"></i>
                        <h5>Live Entertainment</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!--  ************************* offers Starts Here ************************** -->

    <section id="offers" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                <h2>Offers</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-6 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/offers/american_dinner.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>EPIC X AMERICAN DINNER BUFFET</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/offers/whisky_dinner.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>DEWAR'S WHISKY PAIRING DINNER</h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/offers/pay_1_dine_2.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>ENJOY A "PAY 1 DINE 2" BUFFET</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/offers/special_price.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>SPECIAL PRICE FOR APPRECIATION NIGHT</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/offers/seafood_night.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>SEAFOOD NIGHT PACK</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/offers/lunch_buffet.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>50% OFF BUSINESS LUNCH BUFFET</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/offers/barbecue_feast.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>30% OFF TEXAS BARBECUE FEAST</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/offers/kaiseki_dinner.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>25% OFF KAISEKI SET DINNER</h6>
                            </div>
                        </div>
                    </div>
              
                </div>
            </div>   
        </div>
    </section>  

    
    <!--  ************************* offers ends Here ************************** -->
    
    <!--  ************************* About Us Starts Here ************************** -->
        
    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg no-padding">
                
            </div>
            <div class="col-sm-6 abut-yoiu">
                <h3>About Our Restaurant</h3>
<?php
$ret=mysqli_query($con,"select * from webdetails where PageType='aboutus' ");
while ($row=mysqli_fetch_array($ret)) {
?>

    <p><?php  echo $row['pageDescription'];?>.</p><?php } ?>
            </div>
        </div>
    </section>    
    
    
            <!--  ************************* Gallery Starts Here ************************** -->
        <div id="gallery" class="gallery">    
           <div class="container">
              <div class="inner-title">

                <h2>Our Gallery</h2>
                <p>View Our Gallery</p>
            </div>
              <div class="row">
                

        <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="dishes">Dishes</button>
            <button class="btn btn-default filter-button" data-filter="interior">Interior</button>
            <button class="btn btn-default filter-button" data-filter="kitchen"> Kitchen</button>
            <button class="btn btn-default filter-button" data-filter="gathering">Gatherings</button>
            <button class="btn btn-default filter-button" data-filter="bar">Bar</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dishes">
                <img src="assets/images/gallery/dishes01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dishes">
                <img src="assets/images/gallery/dishes02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dishes">
                <img src="assets/images/gallery/dishes03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter interior">
                <img src="assets/images/gallery/interior01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter interior">
                <img src="assets/images/gallery/interior02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter interior">
                <img src="assets/images/gallery/interior03.jpg" class="img-responsive">
            </div>

        </div>
    </div>
       
       
       </div>
        <!-- ######## Gallery End ####### -->
    
    
     <!--  ************************* Contact Us Starts Here ************************** -->
    
    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div  class="col-sm-12 cop-ck">
                <form method="post">
                <h2 >Any special requests from us?</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Request:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit" name="submit">Send Request</button>
                        </div>
                </div>
            </form>
            </div>
     
        </div>
    </section>
    
    
    
    
    
    <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about_us">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="offers" href="#offers">Offers</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">

<?php
$ret=mysqli_query($con,"select * from webdetails where PageType='contactus' ");
while ($row=mysqli_fetch_array($ret)) {
?>


                        <?php  echo $row['pageDescription'];?> <br>
                        Phone: <?php  echo $row['mobileNumber'];?> <br>
                        Email: <a href="mailto:<?php  echo $row['email'];?>" class=""><?php  echo $row['email'];?></a><br>
                        Timing: <?php  echo $row['openningTime'];?>
                    </address>

        <?php } ?>





                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
            Signature Cuisine @2023
                
     
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>
