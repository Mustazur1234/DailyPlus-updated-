<!-- 
  ======================= 
  genie list markup 
  ======================= 
-->

<template id="markup-genie_list">

  <div class="genie-list-container" id="genelist-id">

    <!-- tab nav -->
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
            </li>
        </ul>

        <!-- tav content -->

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <!-- content one -->


                
                        <div class="genie-list-new">
                                <div class="genie-list-products">
                                    
                                    <!--gene-list product-->
                                    <div class="genie-list-product">
                                        <img class="gene-image" src="dist/img/image 2.svg" alt="">
                                        <div class="genie-list-product-details">
                                            <h6>Lorem ipsum dolor sit amet.</h6>
                                            <p>340 gm</p>
                                            <div class="quantity-increment mt-3">
                                                <button class="btn btn-minus"><i class="fa fa-minus"></i></button>
                                                <div class="show-quantity">10</div>
                                                <button class="btn btn-plus"><i class="fas fa-plus"></i></button>

                                            </div>
                                        </div>
                                    </div>


                                    <!--gene-list product-->
                                    <div class="genie-list-product">
                                        <img class="gene-image" src="dist/img/image 2.svg" alt="">
                                        <div class="genie-list-product-details">
                                            <h6>Lorem ipsum dolor sit amet.</h6>
                                            <p>340 gm</p>
                                            <div class="quantity-increment mt-3">

                                            <button class="btn btn-minus"><i class="fa fa-minus"></i></button>
                                            <div class="show-quantity">10</div>
                                            <button class="btn btn-plus"><i class="fas fa-plus"></i></button>

                                            </div>
                                        </div>
                                    </div>




                                    <button class="btn btn-style-three add-more-gene-list">Add More Product</button>

                                    <hr>
                                        <div class="delivery-address mt-4">
                                            <h6>Delivery Address</h6>
                                            <div class="address mt-3">
                                                <div class="address-icon mr-3">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <div class="address-right">
                                                    <h6>Home</h6>
                                                    <p>Floor 4, Wakil Tower, Ta131 Gulshan Badda Link Road</p>
                                                </div>
                                            </div>

                                        </div>
                                        <hr>

                                            <button class="btn btn-style-four add-more-gene-list">Send List to Genie
                                                <i class="fa fa-right-angel"></i>
                                            </button>
                                    </div>
                                    
                                </div>





            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <!-- content two -->


            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <!-- content three -->

                
            </div>
        </div>









        </div>
</template>

<!-- ========================= 
  notification list markup
========================= -->

  <template id="markup-noti_list">

      <div class="notification-holder" id="notificationHolder">
          <div class="notification-header pb-2">
              <button class="btn">
                  <i class="fa fa-arrow-left pr-2" aria-hidden="true"></i>Notification</button>
              <button class="btn" onclick="notificationHide()">X</button>
          </div>
          <div class="notification-list noti-unread" style="padding: 5px;">
              <h6>Order #378
                  <span class="float-right">3.30pm</span>
              </h6>
              <div class="noti-message">
                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                  <div class="noti-message-icon">
                      <i class="fa fa-star"></i>
                  </div>
              </div>

          </div>
          <div class="notification-list pt-2">
              <h6>Order #378
                  <span class="float-right">3.30pm</span>
              </h6>
              <div class="noti-message">
                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                  <div class="noti-message-icon">
                      <i class="fa fa-star"></i>
                  </div>
              </div>

          </div>
          <div class="notification-list pt-2">
              <h6>Order #378
                  <span class="float-right">3.30pm</span>
              </h6>
              <div class="noti-message">
                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                  <div class="noti-message-icon">
                      <i class="fa fa-star"></i>
                  </div>
              </div>

          </div>

      </div>

  </template>


<!-- ========================= 
  sign up markup
========================= -->


<template id="markup_login-body-list">
  <div id="login-body_markup">
    
  <div class="loging-holder" id="loginHolder" style="display: block;">
        <div class="login-header">
            <h6>Signup</h6>
        </div>
        <div class="login-body">
            <form id="regForm" action="">
                <!-- One "tab" for each step in the form: -->
                <div class="tab" style="display: block;">
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
                        <p><input oninput="this.className = ''"></p>
                        <p><input oninput="this.className = ''"></p>
                        <p><input oninput="this.className = ''"></p>
                        <p><input oninput="this.className = ''"></p>
                        <p><input oninput="this.className = ''" class=""></p>
                    </div>
                    <div class="verification-bottom">
                        <a href="#" class="btn-resend-otp">Resend OTP</a>
                        <a href="#" class="btn-chg-nmbr">Change Phone Number</a>
                    </div>
                </div>

                <div class="tab">
                    <img src="dist/img/mobile-1976104_1280.webp" class="img-fluid" alt="">
                    <h6 class="pt-2">Choose a Password</h6>
                    <p>For the security &amp; safety please choose a password</p>
                    <p><input type="password" placeholder="Password" oninput="this.className = ''" class=""></p>
                    <p><input type="password" placeholder="Confirm Password" oninput="this.className = ''"></p>
                </div>

                <div style="overflow:auto;">
                <div>
                    <!-- <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> -->
                    <button type="button" class="btn mt-4" id="nextBtn" onclick="nextPrev(1)">Next <i class="fa fa-angle-right" style="color: #F4F6F9;"></i></button>
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
</template>


<!-- ========================= 
  user panel markup
========================= -->


<template id="userTemplateMarkup">
<div class="user-holder" id="userHolder">
    <h6>User</h6>
    <hr>
    <div class="user-body">

        <!-- my profile holder -->
        <button class="btn profile-btn" id="myProfileNavBtn" data-toggle="false"><i class="fa fa-user pr-2"></i>My Profile</button>
        <div id="myProfileNav_holder"></div>
    
        <hr>

        <!-- order info holder  -->
        <button class="btn order-btn" id="order_nav_btn" data-toggle="false"><i class="fa fa-shopping-bag pr-2"></i>My Order</button>
        <div id="orderInfoHolder"></div>

        <hr>
        <button class="btn"><i class="fa fa-power-off pr-2"></i>Logout</button>
    </div>
</div>
</template>


<!-- ========================= 
  my profile markup
========================= -->


<template id="myProfileMarkup">

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
</template>


<!-- ========================= 
  order nav information
========================= -->

<template id="orderNavMarkup">
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

</template>


<!-- 
    -------------------------------
    Category markup
    -------------------------------
 -->

<template id="categorymarkup">
        <div id="categoryItem" class="col-md-2 col-sm-2 col-12 mt-2">
            <a class="cate_link" href="category-single.php">
                <div class="card category-card">
                    <img class="w-100" src="dist/img/image%201.svg" alt="">
                    <h6 class="category_title">Fruits & Vegitables</h6>
                    <p class="category_description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, harum.</p>
                </div>
            </a>
        </div>
</template>