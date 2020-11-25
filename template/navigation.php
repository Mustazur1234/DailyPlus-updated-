<header id="navigationBar">
    <div class="container">

        <div class="row header-top">
            <!-- logo section -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                <div class="logo-holder">
                    <a href="index.php">
                        <img src="dist/img/logo.png" alt="logo" class="logo">
                    </a>
                </div>
            </div>

            <!-- search part-->
            <div class="col-lg-5 col-md-9 col-sm-8">
                <div class="nav-search-bar">

                        <span class="search-btn" id="basic-text1">
                            <i class="fa fa-search text-grey" aria-hidden="true"></i>
                        </span>
                        
                        <input
                            class="form-control my-0 py-1 red-border"
                            type="text"
                            placeholder="Search Products"
                            aria-label="Search">
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="navbar-all-btns">
                    <!-- notificaiton panel -->
                        <div class="notification-btn">
                                <button class="btn" id="notificaton_btn" data-toggle="false">
                                    <i class="far fa-bell"></i>
                                </button>
                                <div id="noti-holder"></div>
                            </div>

                        <!-- lamp button -->
                        <div class="lamp-btn">

                            <button class="btn" id="genie-list-btn" data-toggle="false">
                                <img id="lamp-btn-img" src="dist/img/lamp-icon.svg">
                            </button>
                            <div id="gene-holder"></div>

                        </div>

                        <!-- wish list -->
                            <div class="wishlist-btn">
                                <button class="btn">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            
                            <!-- card part -->

                            <div class="cart-btn">
                                <button class="btn" id="cartShowBtn" data-toggle="false">
                                    <i class="fa fa-shopping-bag icon"></i>
                                </button>
                            </div>

                            <!-- user panel -->
                            <div class="user-btn">
                                <button class="btn" id="userNavBtn" data-toggle="false">
                                    <i class="fas fa-user"></i>
                                </button>
                                <div id="userNavHolder"></div>
                            </div>

                            <!-- login panel -->
                            <div class="login-btn"> 
                                <button class="btn secondary-btn" id="login-body-btn" data-toggle="false">Log In</button>
                                <div id="nav-login-Holder"></div>

                            </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-9 col-sm-9 col-12">
                <div class="top-right">

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                        <div class="container">
                            <div class="row header-bottom">

                                <div class="col-md-4 col-sm-4 col-4">
                                    <div class="bottom-right">
                                        <button class="btn cat-btn" data-toggle="false" id="categoryID">
                                            <i class="fas fa-bars"></i>Category
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-8">
                                    <div class="bottom-right">
                                        <div class="offer">

                                            <a href="offer.php" class="header-bottom-btn">
                                                <i class="fa fa-percent"></i>Offers</a>
                                        </div>
                                        <div class="contact-btn">
                                            <a href="#" class="header-bottom-btn">
                                                <i class="fa fa-phone" aria-hidden="true"></i>0198382-2928</a>
                                        </div>

                                        <div class="delivery">
                                            <h6>Delivery to</h6>
                                            <p id="contentcshow" style="cursor: pointer">Dingi Technology LTD.<i class="fa fa-arrow-down" aria-hidden="true"></i>
                                            </p>

                                            <div class="contents wow fadeInRight" id="hidecontent">

                                                <div class="close-btn ">
                                                    <Button class="btn btn-danger" id="contentclose">x Close</Button>
                                                </div>

                                                <div class="row " id="remove-div">
                                                    <div class="col-md-12">
                                                        <div class="title-radio">
                                                            <h5>Selected Delivery Address</h5>
                                                        </div>
                                                    </div>
                                                    <!-- Current Location start -->
                                                    <div class="col-md-12">
                                                        <div class="title_input">
                                                            <input type="radio" id="mapsec">
                                                                <span>Current Location</span>
                                                                <div class="ami" id="ami">
                                                                    <iframe
                                                                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14594.229522317766!2d90.40309515!3d23.869846199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1605526118900!5m2!1sen!2sbd"
                                                                        width="300"
                                                                        height="150"
                                                                        frameborder="0"
                                                                        style="border:0;"
                                                                        allowfullscreen=""
                                                                        aria-hidden="false"
                                                                        tabindex="0"></iframe>
                                                                    <div class="title-work">
                                                                        <button class="btn btn-success btn-block">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>Add New Location</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <!-- Current Location End -->

                                                        <!-- Home Section start -->

                                                        <div class="col-md-12">
                                                            <div class="title-home hover-location">
                                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                                <span>Home</span>
                                                                <i
                                                                    class="fa fa-ellipsis-v"
                                                                    aria-hidden="true"
                                                                    id="home_click"
                                                                    style="cursor: pointer"></i>
                                                                <a href="">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                                                                    <p style="color:rgba(243, 122, 32, 1)">Current Delivery as selected address</p>
                                                                </a>
                                                            </div>

                                                            <div class="home" id="home">
                                                                <div class="edit">
                                                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                                    <span style="padding: 8px 0">Edit address</span>
                                                                </div>
                                                                <div class="adress_home">
                                                                    <h6>Address name</h6>
                                                                    <p>work</p>
                                                                </div>
                                                                <div class="adress_home">
                                                                    <i class="fa fa-map-pin" style="margin-left:10px;" aria-hidden="true"></i>
                                                                    <span style="padding: 0 8px;color:#5EC401">Address</span>
                                                                    <p>House #3(3rd floor) road 12</p>
                                                                </div>

                                                                <div class="text_box">
                                                                    <form action="">
                                                                        <textarea
                                                                            name=""
                                                                            class="form-control"
                                                                            id=""
                                                                            cols="10"
                                                                            rows="5"
                                                                            placeholder="You can write the correct address here"></textarea>
                                                                        <button class="btn btn-success btn-block" style="margin:20px 0">save address</button>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <!-- Home Section End -->

                                                        <!-- Work Section Start -->

                                                        <div class="col-md-12 hover-location">
                                                            <div class="title-home">
                                                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                                <span>work</span>
                                                                <a href="">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                                                                    <p style="color:rgba(243, 122, 32, 1)">Current Delivery as selected address</p>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <!-- Work Section End -->

                                                        <!-- Location Section Start -->

                                                        <div class="col-md-12">
                                                            <div class="title-home">
                                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                <span>Location</span>
                                                                <i
                                                                    class="fa fa-ellipsis-v"
                                                                    aria-hidden="true"
                                                                    id="close_location"
                                                                    style="cursor: pointer"></i>
                                                                <a href="">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                                                                    <p style="color:rgba(243, 122, 32, 1)">Current Delivery as selected address</p>
                                                                </a>
                                                            </div>

                                                            <div class="location" id="location">
                                                                <div class="location-img">
                                                                    <img src="dist/img/512.webp" alt="">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, quaerat.</p>
                                                                        <button class="btn btn-info btn-block" style="margin:20px 0">save address</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Location Section End -->

                                                            <div class="col-md-12">
                                                                <div class="title-work">
                                                                    <button class="btn btn-success btn-block">
                                                                        <i class="fa fa-plus" aria-hidden="true"></i>Add New Address</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </header>