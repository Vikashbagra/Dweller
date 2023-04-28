<?php include('./database/dbConn.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dweller</title>
    <script src="https://kit.fontawesome.com/f3edc708d3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/css.css">

</head>

<body>


    <?php include('./include/header.php'); ?>
    <!-- Main Section start here  -->

    <main>
        <div class="left-side">
            <h1>Your trusted short let manager</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. </p>
            <div class="Buttons">
                <button class="Button">Book Now</button>
            </div>
        </div>
        <div class="right-side">

            <div class="calculate_box">
                <div class="Upper_div">
                <div class="btn_div">
                    <div class="btn1">
                    <button class="Button">calculate your income</button>
                </div>
                <div class="btn2">
                    <button class="Button">Book directly with us</button>
                </div>
                
                </div>
            </div>
                <div class="Form_div">
                    <div class="Form_div">
                        <div class="Grid_col">
                        <div class="form_col input_form input_2">
                            <i class="fa-solid fa-globe"></i>
                            <input type="text" placeholder="City">
                        </div>
                        <div class="input_form input_2">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" placeholder="Postcode">
                        </div>
                        
                        
                        
                    </div> 
                    <div class="input_form input_2">
                        <i class="fa-solid fa-bed"></i>
                        <input type="text" placeholder="Bedroom">   
                    </div>
                    <div class="input_form input_2">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="text" placeholder="Availability">
                    </div>
                    <div class="right_side_content">
                        <button class="Button">Calculate</button>
                    <p>By submitting your details above you agree with GuestReady’s Terms & Conditions

                        For more details, <a href=""> see our Privacy Policy.</a></p>

                    </div>

                </div>
                </div>

                
    </main>


    <!-- Main Section start here  -->

    <!-- Multi Booking section -->

    <section class="Booking_plateform">
        <h2>Multiple Booking Plateforms</h2>
        <div class="Plateforms">
            <img src="./image/booking.png" alt="booking.com">
            <img src="./image/vrbo.png" alt="vrbo.com">
            <img src="./image/expedia.png" alt="image">
            <img src="./image/rightmove.png" alt="image">
            <img src="./image/homelike.png" alt="image">

        </div>
    </section>


    <!-- Our services section start here -->


    <div class="Banner-section">
        <div class="left">
            <h2>Our complete service</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
            </p>

        </div>
        <div class="right">
            <img src="./image/Our_services.png" alt="Services image">
        </div>
    </div>


    <section class="Services_section">
        <div class="services1">
            <h3> Listing Management</h3>
            <div class="service_cart"><img src="./image/One Property.png" alt="">
                <p>One property, multiple listings</p>
            </div>
            <div class="service_cart"><img src="./image/Professional Photography.png" alt="">
                <p>Professional Photography</p>
            </div>
            <div class="service_cart"><img src="./image/Listing Creation.png" alt="">
                <p>Listing Creation</p>
            </div>
            <div class="service_cart"><img src="./image/Price Optimistion.png" alt="">
                <p>Price Optimisation</p>
            </div>
        </div>

        <div class="services2">
            <h3>Guest Management</h3>

            <div class="service_cart"><img src="./image/Price Optimistion.png" alt="">
                <p>Guest vetting</p>
            </div>
            <div class="service_cart"><img src="./image/Check-in.png" alt="">
                <p>Check in</p>
            </div>
            <div class="service_cart"><img src="./image/Linen And Toiletries.png" alt="">
                <p>Linen and toiletries</p>
            </div>
            <div class="service_cart"><img src="./image/Guest Communication.png" alt="">
                <p>Guest communication</p>
            </div>
        </div>
        <div class="services3">
            <h3>Property Management</h3>
            <div class="service_cart"><img src="./image/Housekeeping.png" alt="">
                <p>Housekeeping</p>
            </div>
            <div class="service_cart"><img src="./image/Maintenance.png" alt="">
                <p>Maintenance</p>
            </div>
            <div class="service_cart"><img src="./image/Insurance.png" alt="">
                <p>Insurance</p>
            </div>
            <div class="service_cart"><img src="./image/Mobile Deshboard.png" alt="">
                <p>Mobile Dashboard</p>
            </div>

        </div>
    </section>

    <section class="Agreement">

        <div class="left_side_Agreement">
            <h2>Getting Rental
                Agreement made easy,
                quick and affordable</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
            <div class="btn_Agreement">
                <button class="btn">Create Rent Agreement</button>
            </div>
        </div>
        <div class="right_side_Agreement">
            <img src="./image/Agreement_section.png" alt="">
        </div>

    </section>


    <section class="why_let_dweller">
        <div class="why_let_dweller_headding">
            <h2>Why let DWELLER manage my Airbnb?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
        <div class="why_let_dweller_cart">
            <div class="cart">
                <img src="./image/Your rental income amplified.png" alt="">
                <h4>Your rental income, amplified</h4>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna
                    aliqua.</p>
                <div class="btn">
                    <button>Calculate now</button>
                </div>
            </div>
            <div class="cart">
                <img src="./image/An Airbnd concierge, at your service.png" alt="">
                <h4>An Airbnd concierge, at your service</h4>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna
                    aliqua.</p>
                <div class="btn">
                    <button>Discover service</button>
                </div>
            </div>
            <div class="cart">
                <img src="./image/The flexible Airbnd agency.png" alt="">
                <h4>The flexible Airbnd agency</h4>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna
                    aliqua.</p>
                <div class="btn">
                    <button>get in touch</button>
                </div>
            </div>
        </div>
    </section>


    <section class="About_us_Banner fs-3">
        <h1>EXPLORE THE WORLD WITH DWELLER: YOUR HOME
            AWAY FROM HOME!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum.</p>
        <div class="btn">
            <button>About More</button>
        </div>
    </section>

    <section class="FAQ">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class=" fs-2 accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What Does Dweller DO?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class=" fs-3 accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class=" fs-2 accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Where does dweller currently operate?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="fs-2 accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="fs-3 accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="fs-2 accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Which platforms do you list my property on?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="fs-3 accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="fs-2 accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseforth" aria-expanded="false" aria-controls="flush-collapseforth">
                        My property is not on Airbnb, can I use DWELLER?
                    </button>
                </h2>
                <div id="flush-collapseforth" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class=" fs-3 accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="fs-2 accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                        I need to use the property myself how do I
                        temporarily block bookings?

                    </button>
                </h2>
                <div id="flush-collapsefive" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="fs-3 accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="fs-2 accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                        What happens if I decide to stop working with
                        DWELLER
                    </button>
                </h2>
                <div id="flush-collapsesix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="fs-3 accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>

        </div>

    </section>

    <section class="Rental_locations">

        <div class="Rental_section_headding">
            <h2>Where would you like to do short term rental?</h2>
        </div>


        <div class="Location_carts">

            <div class="Sign_cart">
                <img src="./image/Bath.png" alt="">
                <h2>Bath</h2>
            </div>
            <div class="Sign_cart">
                <img src="./image/Brimingham.png" alt="">
                <h2>Brimingham </h2>
            </div>
            <div class="Sign_cart">
                <img src="./image/Brighton.png" alt="">
                <h2>Brighton </h2>
            </div>
            <div class="Sign_cart">
                <img src="./image/Bristol.png" alt="">
                <h2>Bristol </h2>
            </div>
            <div class="Sign_cart">
                <img src="./image/Oxford.png" alt="">
                <h2>Oxford </h2>
            </div>
            <div class="Sign_cart">
                <img src="./image/Cardiff.png" alt="">
                <h2>Cardiff </h2>
            </div>
            <div class="Sign_cart">
                <img src="./image/York.png" alt="">
                <h2>York </h2>
            </div>
            <div class="Sign_cart">
                <img src="./image/Edinburgh.png" alt="">
                <h2>Edinburgh </h2>
            </div>
            <div class="Sign_cart">
                <img src="./image/Liverpol.png" alt="">
                <h2>Liverpol </h2>
            </div>
            <div class="Sign_cart">
                <img src="./image/London.png" alt="">
                <h2>London </h2>
            </div>
        </div>

        </div>
    </section>



    <!-- here footer start  -->
    <?php include('./include/footer.php') ?>


</body>

</html>