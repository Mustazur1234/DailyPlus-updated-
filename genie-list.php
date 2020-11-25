<!-- 
    =============================
    header file included
    =============================
-->
<?php 
    include_once('./template/header.php')
?>




    <!-- Main content -->
   <main>
     <!-- Nav Bar -->
    <nav id="navContainer">
        <div class="navhide">
            <button class="btn btn-secondary" onclick="hideNav()">x</button>
        </div>
        <img src="dist/img/logo.png" class="mb-4" alt="">
        <hr>
        <ul>
            <li><a href="fish.html"><img src="dist/img/image 1.svg" alt=""><h6>Fish</h6> <i class="fa fa-angle-right float-right"></i></a></li>
            
            <li><a href="rice.html"><img src="dist/img/image 1.svg" alt=""><h6>Rice</h6> <i class="fa fa-angle-right float-right"></i></a></li>
            <li><a href="milk.html"><img src="dist/img/image 1.svg" alt=""><h6>Milk</h6> <i class="fa fa-angle-right float-right"></i></a></li>
            <li><a href="mango.html"><img src="dist/img/image 1.svg" alt=""><h6>Mango</h6> <i class="fa fa-angle-right float-right"></i></a></li>
            <li><a href="meat.html"><img src="dist/img/image 1.svg" alt=""><h6>Meat</h6> <i class="fa fa-angle-right float-right"></i></a></li>
            <li><a href="#"><img src="dist/img/image 1.svg" alt=""><h6>Fish</h6> <i class="fa fa-angle-right float-right"></i></a></li>
            <li><a href="#"><img src="dist/img/image 1.svg" alt=""><h6>Fish</h6> <i class="fa fa-angle-right float-right"></i></a></li>
            <li><a href="#"><img src="dist/img/image 1.svg" alt=""><h6>Fish</h6> <i class="fa fa-angle-right float-right"></i></a></li>
        </ul>
    </nav>
    <!-- end -->
   
   <!-- Header Section -->
   <header>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
         
        </div>
      </div>
        <div class="row header-top">
            <div class="col-md-3 col-sm-3 col-12">
                <div class="logo-holder">
                    <a href="index.html"><img src="dist/img/logo.png" alt="logo" class="logo"></a>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-12">
                <div class="top-right">
                  <!-- Search -->
                    <div class="search">
                        <div class="input-group">
                            <input id="searchField" class="form-control" type="text" placeholder="Search Products (examples: Egg, Rice etc)" aria-label="Search">
                            <div class="input-group-append">
                              <span class="search-icon" id="basic-text1"><i class="fa fa-search"
                                  aria-hidden="true"></i></span>
                            </div>
                            <!-- Search Result -->
                            <div class="search-container" id="searchContainer">
                              <!-- Popular search -->
                              <div class="popular-search" id="popularSearch">
                                <h6>Popular Search</h6>
                                <ul>
                                  <li><i class="fa fa-search mr-3"></i>Rice</li>
                                  <hr>
                                  <li><i class="fa fa-search mr-3"></i>Bread</li>
                                  <hr>
                                </ul>
                              </div>
                              <!-- Popular Search End -->
                              <!-- Result Not Found -->
                              <div class="result-not-found" style="display: none;">
                                <img src="dist/img/genie.webp" alt="">
                                <h6 class="text-center mt-3">Didn't find the product you're looking for? Ask Genie!</h6>
                                <p class="text-center mt-1">Genie will deliver it to your address</p>
                                <p class="text-center mt-3">You can also add out of stock product to genie list</p>
                                <button class="btn btn-primary mt-4"><span class="add-genie-plus"><i class="fa fa-plus"></i></span>Add to Genie List</button>
                              </div>
                              <!-- result not found end -->
                              <!-- Search Result -->
                              <div class="search-result" id="searchResult">
                                <h6>Search Result <button class="btn filter-btn float-right">Filter <i class="fa fa-align-center ml-2"></i></button></h6>
                                <div class="filter-container">
                                  <h6>Price Range</h6>
                                  <div class="range-input mt-2 mb-3">
                                    <input type="text" placeholder="Minimun">
                                    <div class="dash ml-2 mr-2"></div>
                                    <input type="text" placeholder="Maximum">

                                  </div>
                                  <h6>Category <button class="btn btn-primary ml-5 all-cat-btn">Select All</button></h6>
                                  <ul class="all-cat-selector">
                                    <li>
                                      <label for="dairy-product">Dairy Product</label>
                                      <input type="checkbox">
                                      <hr>
                                    </li>
                                    <li>
                                      <label for="dairy-product">Dairy Product</label>
                                      <input type="checkbox">
                                      <hr>
                                    </li>
                                  </ul>
                                </div>
                                <div class="recomand-btns mt-3">
                                  <button class="btn">Dairy</button>
                                  <button class="btn">Liquid Milk</button>
                                  <button class="btn">Powered Milk</button>
                                  <button class="btn">Fresh</button>
                                  <button class="btn">Fresh</button>
                                </div>
                                <ul>
                                  <li>
                                    <div class="search-result-list">
                                      <div class="search-result-list-img mr-2">
                                        <img src="dist/img/image 1.svg" alt="">
                                      </div>
                                      <div class="search-result-list-detail">
                                        <button class="btn recommended-btn mb-2">Recommended</button>
                                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, modi!</h6>
                                        <p class="regular-price">800</p>
                                        <div class="sell-price">900</div>
                                      </div>
                                      <div class="search-result-list-btns">
                                        <i class="fa fa-facebook mb-2"></i>
                                        <div class="search-result-list-btn-cart">
                                          <i class="fa fa-heart-o mr-2"></i>
                                          <button class="btn btn-primary"><i class="fa fa-shopping-bag mr-2"></i>Add</button>
                                        </div>
                                      </div>
                                    </div>
                                    <hr>
                                  </li>
                                  <li>
                                    <div class="search-result-list">
                                      <div class="search-result-list-img mr-2">
                                        <img src="dist/img/genie.webp" alt="">
                                      </div>
                                      <div class="search-result-list-detail">
                                        
                                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, modi!</h6>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                      </div>
                                      <div class="search-result-list-btns">
                                        
                                        <div class="search-result-list-btn-cart">
                                          
                                          <button class="btn btn-secondary"><i class="fa fa-shopping-bag mr-2"></i>Ask Genie</button>
                                          <i class="fa fa-heart-o ml-2"></i>
                                        </div>
                                      </div>
                                    </div>
                                    <hr>
                                  </li>
                                </ul>
                              </div>
                              
                    
                              <!-- Search End -->
                            </div>
                            <!-- Search Result End -->
                        </div>
                    </div>
                    <!-- Search End -->
                    <div class="notification-btn">
                        <button class="btn" onclick="notificationShow()"><i class="fa fa-bell-o icon"></i></button>
                        <div class="notification-holder" id="notificationHolder">
                            <div class="notification-header pb-2">
                                <button class="btn"><i class="fa fa-arrow-left pr-2" aria-hidden="true"></i>Notification</button>
                                <button class="btn" onclick="notificationHide()">X</button>
                            </div>
                            <div class="notification-list noti-unread" style="padding: 5px;">
                                <h6>Order #378 <span class="float-right">3.30pm</span></h6>
                                <div class="noti-message">
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    <div class="noti-message-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="notification-list pt-2">
                                <h6>Order #378 <span class="float-right">3.30pm</span></h6>
                                <div class="noti-message">
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    <div class="noti-message-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="notification-list pt-2">
                                <h6>Order #378 <span class="float-right">3.30pm</span></h6>
                                <div class="noti-message">
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    <div class="noti-message-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                    <div class="lamp-btn">
                      <button class="btn"><img src="dist/img/lamp-icon.svg" alt=""></button>
                      
                  </div>
                    <div class="wishlist-btn">
                        <a href="#"><i class="fa fa-heart-o icon" aria-hidden="true"></i></a>
                    </div>
                    <div class="cart-btn">
                        <a href="#" id="cartShowBtn"><i class="fa fa-shopping-bag icon"></i></a>
                    </div>
                    <div class="user-btn">
                        <button class="btn" onclick="userShow()"><img src="dist/img/user.png" alt=""></button>
                        <div class="user-holder" id="userHolder">
                            <h6>User</h6>
                            <hr>
                            <div class="user-body">
                                <button class="btn profile-btn" onclick="profileShow()"><i class="fa fa-user pr-2"></i>My Profile</button>
                                    <div class="profile-holder" id="profileHolder">
                                        <h6>User</h6>
                                        <hr>
                                        <form action="">
                                            <div class="profile-photo-cotainer">
                                                <img src="dist/img/user.png" alt="" class="profile-photo">
                                                <input type="file" class="photo-upload">
                                            </div>
        
                                            <div class="profile-form-fileds">
                                                <div class="name mb-3">
                                                    <label for="">Full Name</label>
                                                    <input type="text" class="form-control">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="password-change mb-3">
                                                <button class="btn btn-secondary">Change Password</button>
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                            <div class="profile-submit">
                                                <button class="btn btn-primary">Save</button>
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                        </form>
                                    </div>
                                <hr>
                                <button class="btn order-btn" onclick="orderShow()"><i class="fa fa-shopping-bag pr-2"></i>My Order</button>
                                    <div class="order-holder" id="orderHolder">
                                        <h6>My Oder</h6>
                                        <hr>
                                        <div class="order-tab-toggler">
                                            
                                            <button class="btn" onclick="openOrderTab('ongoing-order')">Ongoing</button>
                                            <button class="btn" onclick="openOrderTab('history-order')">History</button> 
                                            <hr>
                                        </div>
                                        <div class="order-tabs">
                                            <div id="ongoing-order" class="tabs">
                                                <img src="dist/img/image 1.svg" alt="" class="mt-3 mb-3">
                                                <p class="text-center order-ongoing-alert">There is no ongoing order right now. You can order from home</p>
                                            </div>

                                            <div id="history-order" class="tabs" style="display:none">
                                                <div class="history-item pt-2">
                                                    <div class="history-item-img">
                                                        <img src="dist/img/boxed-bg.jpg" alt="">
                                                    </div>
                                                    <div class="history-item-details">
                                                        <h5>Order #678</h5>
                                                        <p class="status" st>Delivered</p>
                                                        <p>October 26,2016</p>
                                                    </div>
                                                    <div class="history-item-price">
                                                        <h6>700</h6>
                                                    </div>
                                                </div>
                                                <div class="history-item pt-2">
                                                    <div class="history-item-img">
                                                        <img src="dist/img/boxed-bg.jpg" alt="">
                                                    </div>
                                                    <div class="history-item-details">
                                                        <h5>Order #678</h5>
                                                        <p class="status" st>Delivered</p>
                                                        <p>October 26,2016</p>
                                                    </div>
                                                    <div class="history-item-price">
                                                        <h6>700</h6>
                                                    </div>
                                                </div>
                                                <div class="history-item pt-2">
                                                    <div class="history-item-img">
                                                        <img src="dist/img/boxed-bg.jpg" alt="">
                                                    </div>
                                                    <div class="history-item-details">
                                                        <h5>Order #678</h5>
                                                        <p class="status" st>Delivered</p>
                                                        <p>October 26,2016</p>
                                                    </div>
                                                    <div class="history-item-price">
                                                        <h6>700</h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <hr>
                                <button class="btn"><i class="fa fa-power-off pr-2"></i>Logout</button>
                            </div>
                        </div>
                    </div>
                    <div class="login-btn">
                    
                        <button class="btn btn-secondary" onclick="showLogin()">Log In</button>
                        <div class="loging-holder" id="loginHolder">
                            <div class="login-header">
                                <h6>Signup</h6>
                            </div>
                            <div class="login-body">
                                <form id="regForm" action="">
                                    <!-- One "tab" for each step in the form: -->
                                    <div class="tab">
                                        <h6 class="pt-2">Your Information</h6>
                                        <p>It looks like you don't have account in this number. Please let us know some information for a scure service</p>
                                        <div class="camera-icon">
                                            <i class="fa fa-camera fa-2x" aria-hidden="true"></i>
                                        </div>
                                        <button class="btn btn-sync-facebook mb-3 mt-4">Sync From Facebook <i class="fa fa-facebook pl-3" style="color: white;"></i></button>
                            
                                    <p><input placeholder="Full Name" oninput="this.className = ''"></p>
                                    </div>

                                    <div class="tab">
                                        <img src="dist/img/mobile-1976104_1280.webp" class="img-fluid" alt="">
                                        <h6 class="pt-2">Enter your mobile number</h6>
                                        <p>We need to verify you. We will send you a one time verification code.</p>
                                    <p><input placeholder="880 1XXXXXXX" oninput="this.className = ''"></p>
                                    
                                    </div>

                                    <div class="tab">
                                        <img src="dist/img/mobile-1976104_1280.webp" class="img-fluid" alt="">
                                        <h6 class="pt-2">Enter Verification Code</h6>
                                        <p>We have sent SMS to:</p>
                                        <h6>019XXXXXXXXX</h6>
                                        <div class="verification-container pt-3">
                                            <p><input  oninput="this.className = ''"></p>
                                            <p><input  oninput="this.className = ''"></p>
                                            <p><input  oninput="this.className = ''"></p>
                                            <p><input  oninput="this.className = ''"></p>
                                            <p><input  oninput="this.className = ''"></p>
                                        </div>
                                        <div class="verification-bottom">
                                            <a href="#" class="btn-resend-otp">Resend OTP</a>
                                            <a href="#" class="btn-chg-nmbr">Change Phone Number</a>
                                        </div>
                                    </div>

                                    <div class="tab">
                                        <img src="dist/img/mobile-1976104_1280.webp" class="img-fluid" alt="">
                                        <h6 class="pt-2">Choose a Password</h6>
                                        <p>For the security & safety please choose a password</p>
                                        <p><input type="password" placeholder="Password" oninput="this.className = ''"></p>
                                        <p><input type="password" placeholder="Confirm Password" oninput="this.className = ''"></p>
                                    </div>

                                    <div style="overflow:auto;">
                                    <div>
                                        <!-- <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> -->
                                        <button type="button" class="btn mt-4"  id="nextBtn" onclick="nextPrev(1)">Next <i class="fa fa-angle-right" style="color: #F4F6F9;"></i></button>
                                    </div>
                                    </div>

                                    
                                    <div style="text-align:center;margin-top:40px;display:none;">
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    
                                    </div>

                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row header-bottom">

            <div class="col-md-4 col-sm-4 col-12">
                <div class="category-btn">
                    <button class="header-bottom-btn cat-btn" onclick="showNav()"><i class="fa fa-bars"></i>Category</button>
                    
                </div>
            </div>

           
            <div class="col-md-8 col-sm-8 col-8">
                <div class="bottom-right">
                    <div class="offer">

                        <a href="offer.html" class="header-bottom-btn"><i class="fa fa-percent"></i>Offers</a>
                    </div>
                    <div class="contact-btn">
                        <a href="#" class="header-bottom-btn"><i class="fa fa-phone" aria-hidden="true"></i>0198382-2928</a>
                    </div>
                    <div class="delivery">
                        <h6>Delivery to</h6>
                        <p>Dingi Technology LTD</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</header>





<!-- 
    =============================
    sidebar left file included
    =============================
-->
<?php 
    // include_once('./template/sidebar-left.php')
?>


<!-- 
    =============================
    mini card file included
    =============================
-->
<?php 
    include_once('./template/mini-card.php')
?>



<!-- 
    =============================
    footer file included
    =============================
-->
<?php 
    include_once('./template/footer.php')
?>
