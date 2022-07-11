<!-- NAVBAR SECTION -->
<section class="banner-part">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default navbar-mobile bootsnav on">
                    <a class="navbar-brand" href="index.php"><img src="image/logo.png" alt="logo" class="logo"></a>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">

                        <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">

                            <li class="active">
                                <a href="index.php" data-hover="Home">Start <span></span></a>
                            </li>

                            <li class="dropdown">
                                <a href="buy.php" class="dropdown-toggle" data-toggle="dropdown"
                                    data-hover="Shortcodes">buy
                                    <span></span></a>

                                <ul class="dropdown-menu animated">
                                    <li><a href="buy.php">Flat</a></li>
                                    <li><a href="buy.php">House / Villas</a></li>

                                    <li class="active">
                                        <a href="buy.php" class="dropdown-toggle" data-toggle="dropdown">Residential
                                            Plots</a>
                                    </li>
                                    <li><a href="buy.php">Warehouse</a></li>
                                    <li><a href="buy.php">Factory</a></li>
                                    <li><a href="buy.php">Officespace</a></li>
                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="rent.php" class="dropdown-toggle" data-toggle="dropdown"
                                    data-hover="Shortcodes">rent
                                    <span></span></a>
                                <ul class="dropdown-menu animated">
                                    <li><a href="rent.php">Flat</a></li>
                                    <li><a href="rent.php">House / Villas</a></li>

                                    <li class="active">
                                        <a href="rent.php" class="dropdown-toggle" data-toggle="dropdown">Residential
                                            Plots</a>
                                    </li>
                                    <li><a href="rent.php">Warehouse</a></li>
                                    <li><a href="rent.php">Factory</a></li>
                                    <li><a href="rent.php">Officespace</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="sell.php" data-hover="Portfolio">Sell <span></span></a>
                            </li>

                            <li>
                                <a href="agent.php" data-hover="Portfolio">Agent <span></span></a>
                            </li>

                            <li>
                                <a href="contact.php" data-hover="Portfolio">Contact <span></span></a>
                            </li>

                            <li id="usercircle">
                                <a href="login.php"><i class="fa-solid fa-circle-user" style="font-size: 2em; margin-left: 12rem;"></i></a>
                            </li>

                        </ul>

                    </div>
                </nav>
            </div>
        </div>
        <!-- login modal in agent section -->
        <div class="modal fade" id="popUpWindow">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- header -->
                    <div class="modal-header">
                        <button type="button" class="close " data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Login Form</h3>
                    </div>
                    <!-- body -->
                    <div class="modal-header">
                        <form action="code.php" method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" required
                                    placeholder="Password" />
                            </div>
                        </form>
                    </div>
                    <!-- footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-block" name="login_btn">Log In</button>
                        <a href="signup.php" style="text-decoration:none;" class=" btn btn-danger">Create an account</a>
                        <br>
                        <a href="forgetpassword.php" style="text-decoration:none; color:blue">Forgot your email or
                            password?</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="best">the best way to</div>
            <div class="best">
                <h1 class="heading-title">Find Your Perfect Home</h1>
            </div>
            <div>
            </div>
        </div>
        <!-- SEARCHBAR  -->
        <div class="row">
            <div class="searchbar">
                <form>
                    <input type="text" placeholder="City" />
                    <select name="categ">
                        <option value="Category" selected hidden>Category</option>
                        <option value="Apartments">Apartments</option>
                        <option value="Offices">Offices</option>
                        <option value="TownHome">TownHome</option>
                        <option value="Houses">Houses</option>
                        <option value="Sudio">Sudio</option>
                    </select>
                    <select name="type">
                        <option value="type" selected hidden>Type</option>
                        <option value="Buy">Buy</option>
                        <option value="Rent">Rent</option>
                        <option value="Sell">Sell</option>
                    </select>
                    <div class="price">
                        <span>₹</span>
                        <input type="number" placeholder="Min price" />
                    </div>
                    <div class="price">
                        <span>₹</span>
                        <input type="number" placeholder="Max price" />
                    </div>
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!-- STICKY SOCIAL MEDIA -->
    <div id="fixed-social">
        <div>
            <a href="#" class="fixed-facebook" target="_blank"><i class="fa fa-facebook"></i>
                <span>Facebook</span></a>
        </div>
        <div>
            <a href="#" class="fixed-twitter" target="_blank"><i class="fa fa-twitter"></i>
                <span>Twitter</span></a>
        </div>
        <div>
            <a href="#" class="fixed-gplus" target="_blank"><i class="fa fa-google"></i>
                <span>Google+</span></a>
        </div>
        <div>
            <a href="#" class="fixed-linkedin" target="_blank"><i class="fa fa-linkedin"></i>
                <span>LinkedIn</span></a>
        </div>
        <div>
            <a href="#" class="fixed-instagrem" target="_blank"><i class="fa fa-instagram"></i>
                <span>Instagram</span></a>
        </div>
    </div>
</section>

<!-- SERVICE SECTION -->
<section class="service-grid pb-5 pt-5 bg-sucess">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <!-- text-center mb-4 -->
                <div class="service-title">
                    <h4>Our Services</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="service-wrap">
                    <div class="service-icon">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <h4>Architects</h4>
                    <p>We will provide you the best architects who can give you the most desired home you want . With an
                        affordable price in which you can manage it...</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="service-wrap">
                    <div class="service-icon">
                        <i class="far fa-chart-bar"></i>
                    </div>
                    <h4>Interior Decorators</h4>
                    <p>Our interior decorator will guide you throughout the manufacturing process or renovation process
                        and helps you to get the best interior look you want...</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="service-wrap">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h4>Builders</h4>
                    <p>Person improves raw land with labor and capital, and arranges for utilities and essential
                        services, in order to sell subdivided parcels of land or to build structures for rent and
                        sell...</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="service-wrap">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h4>Building Contractors</h4>
                    <p>A construction contract is a mutual binding agreement between two parties based on policies and
                        conditions recorded in document...</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="service-wrap">
                    <div class="service-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h4>Property Consultants</h4>
                    <p>Our property consultant will provide you the properties that you will be fail to reject even a
                        single one...</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="service-wrap">
                    <div class="service-icon">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <h4>Vaastu Consultant</h4>
                    <p>If a home is made after taking consultant from our vaastu consultant then in that home there will
                        be only happiness...</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<!-- RECENT PROPERTIES FOR SELL -->
<section class="service-grid pb-5 pt-5" style="background-color:whitesmoke;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <!-- text-center mb-4 -->
                <div class="service-title">
                    <h4>Recent Properties for Sell</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="card card-recent">
                    <img src="image/h9.jpg" class="card-img-top" alt="no image">
                    <div class="card-body">
                        <h5 class="card-title"><a href="sell1.php">Building: 123 on the Park</a></h5>
                        <spam class="amt">₹347,120.00/month</spam>
                        <!-- <ul class="describe-1">
                                <li><span class="icon-square icon-sm">
                                    </span>1200 sq ft</li>
                                <li><span class="icon "></span>2 bathrooms</li>
                            </ul>
                            <ul class="describe-2">
                                <li><span class="icon "></span>4 bedrooms</li>
                                <li><span class="icon "></span>2 garages</li>
                            </ul> -->
                        <br><br>
                        <p class="card-text">Introducing Brooklyn's most unique and genteel address: 123 on the
                            Park. A stately, one-of-a-kind rental residence directly overlooking Brooklyn's
                            famed
                            Prospect Park.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="card card-recent">
                    <img src="image/h7.jpg" class="card-img-top" alt="no image">
                    <div class="card-body">
                        <h5 class="card-title"><a href="sell2.php">Building: Rosto on the Sea Beach</a></h5>
                        <spam class="amt">₹347,120.00/month</spam>
                        <!-- <ul class="describe-1">
                                <li><span class="icon-square icon-sm">
                                    </span>1200 sq ft</li>
                                <li><span class="icon "></span>2 bathrooms</li>
                            </ul>
                            <ul class="describe-2">
                                <li><span class="icon "></span>4 bedrooms</li>
                                <li><span class="icon "></span>2 garages</li>
                            </ul> -->
                        <br><br>
                        <p class="card-text">Introducing Brooklyn's most unique and genteel address: 123 on the
                            Park. A stately, one-of-a-kind rental residence directly overlooking Brooklyn's
                            famed
                            Prospect Park.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-3">
                <div class="card card-recent">
                    <img src="image/h6.jpg" class="card-img-top" alt="no image" height="50rem">
                    <div class="card-body">
                        <h5 class="card-title"><a href="sell3.php">Building: 123 on the Park</a></h5>
                        <spam class="amt">₹347,120.00/month</spam>
                        <!-- <ul class="describe-1">
                                <li><span class="icon-square icon-sm">
                                    </span>1200 sq ft</li>
                                <li><span class="icon "></span>2 bathrooms</li>
                            </ul>
                            <ul class="describe-2">
                                <li><span class="icon "></span>4 bedrooms</li>
                                <li><span class="icon "></span>2 garages</li>
                            </ul> -->
                        <br><br>
                        <p class="card-text">Introducing Brooklyn's most unique and genteel address: 123 on the
                            Park. A stately, one-of-a-kind rental residence directly overlooking Brooklyn's
                            famed
                            Prospect Park.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--START FEATURED PROPERTY -->
<br>
<section class="service-grid pb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <!-- text-center mb-4 -->
                <div class="service-title">
                    <h4>Our Featured</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row body1">
        <div class="carousel1">
            <div class="slides1">
                <a href="sell1.php"><img src="image/h1.jpg" alt="slide image1" class="slide1"></a>
                <img src="image/h2.jpg" alt="slide image2" class="slide1">
                <img src="image/h3.jpg" alt="slide image3" class="slide1">
                <img src="image/h4.jpg" alt="slide image3" class="slide1">
            </div>
            <div class="controls1">
                <div class="control1 prev-slide">&#9668;</div>
                <div class="control1 next-slide">&#9658;</div>
            </div>
        </div>
    </div>
</section>
<!-- JAVASCRIPT OF FEATURED CAROUSEL -->
<script>
    const delay = 3000; //ms

    const slides1 = document.querySelector(".slides1");
    const slidesCount = slides1.childElementCount;
    const maxLeft = (slidesCount - 1) * 100 * -1;

    let current = 0;

    function changeSlide(next = true) {
        if (next) {
            current += current > maxLeft ? -100 : current * -1;
        } else {
            current = current < 0 ? current + 100 : maxLeft;
        }

        slides1.style.left = current + "%";
    }

    let autoChange = setInterval(changeSlide, delay);
    const restart = function () {
        clearInterval(autoChange);
        autoChange = setInterval(changeSlide, delay);
    };

    // Controls
    document.querySelector(".next-slide").addEventListener("click", function () {
        changeSlide();
        restart();
    });

    document.querySelector(".prev-slide").addEventListener("click", function () {
        changeSlide(false);
        restart();
    });
</script>
<!--END FEATURED PROPERTY -->

<!-- START CONNECT WITH US   -->
<section class="bg-success">
    <div class="container">
        <div class="row ">
            <div class="col-xl-12 ">
                <div class="service-title">
                    <h4>Connect with us</h4>
                    <br><br><br><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="code.php" method="POST">
                    <div class="form-group">
                        <input type="name" class="form-control" id="exampleInputName" placeholder="Your Name..."
                            name="name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Email..."
                            name="email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="message" placeholder="Your Message..."></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn text-center btn-blue" name="contact_btn" id="submit">Send
                            Message</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 ">
                <div class="card ml-10" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">Address</h3>
                        <p class="card-text">Kurji More</p>
                        <p class="card-text">Patna (Bihar) 800013</p>
                        <a href="about.php" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="card ml-10" style="width: 18rem;">
                    <div class="col-12">
                        <div class="line"></div>
                        <div class="second2">
                            <a href="https://www.instagram.com/codepen_tech/" target="_blank"><i
                                    class="fa-brands fa-telegram fa-2x margin"></i></a>
                            <a href="https://twitter.com/CodePen_Tech" target="_blank"> <i
                                    class="fa-brands fa-twitter fa-2x margin"></i></a>
                            <a href="https://m.facebook.com/codepen.in" target="_blank"> <i
                                    class="fab fa-facebook fa-2x margin"></i></a>
                            <a href="https://www.codepen.in/" target="_blank"><i
                                    class="fab fa-google fa-2x margin"></i></a>
                            <a href="..//squat admin/admin/index.php" target="_blank"><i
                                    class="fa-solid fa-lock fa-2x margin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br><br>
<!-- END CONNECT WITH US   -->

<!-- Properties by Cities -->
<section class="service-grid pb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <!-- text-center mb-4 -->
                <div class="service-title">
                    <h4>Properties in Cities</h4>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-4">
                <h4 class="text-center">Delhi</h4>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.6755687280993!2d72.8563548148743!3d19.16567358703647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b72bbd82b7c9%3A0x33f509662b36dcb6!2sDelhi%20darbar!5e0!3m2!1sen!2sin!4v1657043562985!5m2!1sen!2sin"
                    style="border:1;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-4">
                <h4 class="text-center">Patna</h4>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230292.83828455536!2d85.13756450000002!3d25.5940947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed593425a70f1f%3A0x1be26ed210ba9c5f!2sKurji%20More!5e0!3m2!1sen!2sin!4v1656471985087!5m2!1sen!2sin"
                    style="border:1 black solid;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-4">
                <h4 class="text-center">Hyderabad</h4>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.626883011039!2d85.03765541499101!3d25.617311883702506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed57190c498971%3A0x52c278443d84c59c!2sHyderabadi%20biryani%20house!5e0!3m2!1sen!2sin!4v1657043478068!5m2!1sen!2sin"
                    style="border:1 solid;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<section>
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>