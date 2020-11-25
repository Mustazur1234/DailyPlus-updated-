<!-- 
    =============================
    header file included
    =============================
-->
<?php 
    include_once('./template/header.php')
?>




<!-- 
    =============================
    navigation file included
    =============================
-->
<?php 
    include_once('./template/navigation.php')
?>




<!-- About Cucomba Section -->


    <section class="content-fish">
        <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <h1>About Cucomba</h1>
               </div>
           </div>
             <!-- Shop by category section -->
        <section>
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-6 col-sm-6 col-12">
                        <h2>Shop by Categories</h2>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <button class="btn btn-primary float-right">View All Category</button>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-12 mt-2">
                        <a href="category.html">
                            <div class="card category-card">
                                <img src="dist/img/image%201.svg" alt="">
                                <h6>Fruits & Vegitables</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-2">
                        <a href="category.html">
                            <div class="card category-card">
                                <img src="dist/img/image%202.svg" alt="">
                                <h6>Fruits & Vegitables</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-2">
                        <a href="category.html">
                            <div class="card category-card">
                                <img src="dist/img/image%207.svg" alt="">
                                <h6>Fruits & Vegitables</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-2">
                        <a href="category.html">
                            <div class="card category-card">
                                <img src="dist/img/image%204.svg" alt="">
                                <h6>Fruits & Vegitables</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-2">
                        <a href="category.html">
                            <div class="card category-card">
                                <img src="dist/img/image%205.svg" alt="">
                                <h6>Fruits & Vegitables</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-2">
                        <a href="category.html">
                            <div class="card category-card">
                                <img src="dist/img/image%206.svg" alt="">
                                <h6>Fruits & Vegitables</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-2">
                        <a href="category.html">
                            <div class="card category-card">
                                <img src="dist/img/image%201.svg" alt="">
                                <h6>Fruits & Vegitables</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-2">
                        <a href="category.html">
                            <div class="card category-card">
                                <img src="dist/img/image%202.svg" alt="">
                                <h6>Fruits & Vegitables</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-2">
                        <a href="category.html">
                            <div class="card category-card">
                                <img src="dist/img/image%207.svg" alt="">
                                <h6>Fruits & Vegitables</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-2">
                        <a href="category.html">
                            <div class="card category-card">
                                <img src="dist/img/image%204.svg" alt="">
                                <h6>Fruits & Vegitables</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-2">
                        <a href="category.html">
                            <div class="card category-card">
                                <img src="dist/img/image%205.svg" alt="">
                                <h6>Fruits & Vegitables</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-2">
                        <a href="category.html">
                            <div class="card category-card">
                                <img src="dist/img/image%206.svg" alt="">
                                <h6>Fruits & Vegitables</h6>

                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- Product View -->         
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="single-product-img">
                                <img class="img-fluid" src="dist/img/Rectangle%201.svg" alt="">
                            </div>
                            <div class="gallery-img mt-4">
                                <div class="gallery-img-container">
                                    <img class="img-fluid" src="dist/img/Rectangle2.svg" alt="">
                                </div>
                                <div class="gallery-img-container">
                                    <img src="dist/img/image 3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="single-product-details">
                                <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                                    <div class="price">
                                        <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                                    </div>
                                <button class="btn add-to-bag-btn single-product-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</button>
                                <hr>
                                <div class="product-tags">
                                    <div class="tag-icon">
                                        <i class="fa fa-tag"></i>
                                    </div>
                                    <div class="tags">
                                        <a class="btn tag-btn" href="category.html">Daily Products</a>
                                        <a class="btn tag-btn" href="category.html">Milk</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="mt-2">Details</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem reprehenderit, quod iure placeat aperiam cum optio cupiditate, perferendis labore fugit pariatur totam culpa. Id fugiat minima voluptatum labore dicta iure.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <h4 class="modal-title">Related Items</h4>
                            </div>
                            
                        </div>
                        <div class="row">                                                     
                            <div class="col-sm col-12 mt-4">
                                <div class="product-card">
                                    <div class="card">
                                        <img src="dist/img/image 3.jpg" alt="">
                                    </div>
                                    <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                                    <div class="price">
                                        <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                                    </div>
                                    <button class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</button>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 mt-4">
                                <div class="product-card">
                                    <div class="card">
                                        <img src="dist/img/image 3.jpg" alt="">
                                    </div>
                                    <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                                    <div class="price">
                                        <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                                    </div>
                                    <button class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</button>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 mt-4">
                                <div class="product-card">
                                    <div class="card">
                                        <img src="dist/img/image 3.jpg" alt="">
                                    </div>
                                    <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                                    <div class="price">
                                        <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                                    </div>
                                    <button class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</button>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 mt-4">
                                <div class="product-card">
                                    <div class="card">
                                        <img src="dist/img/image 3.jpg" alt="">
                                    </div>
                                    <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                                    <div class="price">
                                        <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                                    </div>
                                    <button class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</button>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 mt-4">
                                <div class="product-card">
                                    <div class="card">
                                        <img src="dist/img/image 3.jpg" alt="">
                                    </div>
                                    <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                                    <div class="price">
                                        <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                                    </div>
                                    <button class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</button>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 mt-4">
                                <div class="product-card">
                                    <div class="card">
                                        <img src="dist/img/image 3.jpg" alt="">
                                    </div>
                                    <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                                    <div class="price">
                                        <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                                    </div>
                                    <button class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</button>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 mt-4">
                                <div class="product-card">
                                    <div class="card">
                                        <img src="dist/img/image 3.jpg" alt="">
                                    </div>
                                    <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                                    <div class="price">
                                        <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                                    </div>
                                    <button class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</button>
                                </div>
                            </div>
                            <div class="col-sm-3 col-12 mt-4">
                                <div class="product-card">
                                    <div class="card">
                                        <img src="dist/img/image 3.jpg" alt="">
                                    </div>
                                    <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                                    <div class="price">
                                        <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                                    </div>
                                    <button class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            </div>
        </div>

        <!-- Popular product section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-12">
                        <h2>Popular Items</h2>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <button class="btn btn-primary float-right">View All Products</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img src="dist/img/Rectangle%201.svg" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="price">
                                <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                            </div>
                            <a href="category.html" class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</a>
                        </div>
                    </div>
                   <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img src="dist/img/Rectangle%201.svg" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="price">
                                <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                            </div>
                            <a href="category.html" class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</a>
                        </div>
                    </div>
                   <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img src="dist/img/Rectangle%203.svg" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="price">
                                <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                            </div>
                            <a href="category.html" class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</a>
                        </div>
                    </div>
                   <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img src="dist/img/Rectangle%202.svg" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="price">
                                <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                            </div>
                            <a href="category.html" class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</a>
                        </div>
                    </div>
                   <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img src="dist/img/Rectangle%205.svg" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="price">
                                <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                            </div>
                            <a href="category.html" class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</a>
                        </div>
                    </div>
                   <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img src="dist/img/Rectangle%201.svg" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="price">
                                <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                            </div>
                            <a href="category.html" class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</a>
                        </div>
                    </div>
                  <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img src="dist/img/Rectangle%201.svg" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="price">
                                <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                            </div>
                            <a href="category.html" class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</a>
                        </div>
                    </div>
                   <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img src="dist/img/Rectangle%202.svg" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="price">
                                <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                            </div>
                            <a href="category.html" class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</a>
                        </div>
                    </div>
                   <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img src="dist/img/Rectangle%203.svg" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="price">
                                <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                            </div>
                            <a href="category.html" class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</a>
                        </div>
                    </div>
                   <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img src="dist/img/Rectangle%202.svg" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="price">
                                <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                            </div>
                            <a href="category.html" class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</a>
                        </div>
                    </div>
                   <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img src="dist/img/Rectangle%201.svg" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="price">
                                <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                            </div>
                            <a href="category.html" class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</a>
                        </div>
                    </div>
                  <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img src="dist/img/Rectangle%205.svg" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="price">
                                <h6 class="sell-price">530 <span class="regular-price">800</span></h6>
                            </div>
                            <a href="category.html" class="btn add-to-bag-btn"><i class="fa fa-shopping-bag"></i>Add to Bag</a>
                        </div>
                    </div>
                       
                </div>
            </div>
        </section>

        <!-- pre order secton -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <h2>Pre-Order Products</h2>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="no-card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img class="product-img img-fluid" src="dist/img/preorder.webp" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="delivery-price">
                                <div class="price">
                                    <h6 class="sell-price">৳530 <span class="regular-price">৳800</span></h6>
                                </div>
                                <h6 class="sell-price">Free Delivery</h6>
                            </div>
                            <div class="available">
                                <p>Available 20 Oct, 21</p>
                            </div>
                            <button class="btn add-to-bag-btn pre-order-btn"><i class="fa fa-shopping-bag"></i>Pre-Order</button>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="no-card">
                                <img class="product-img img-fluid" src="dist/img/preorder.webp" alt="">
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="delivery-price">
                                <div class="price">
                                    <h6 class="sell-price">৳530 <span class="regular-price">৳800</span></h6>
                                </div>
                                <h6 class="sell-price">Free Delivery</h6>
                            </div>
                            <div class="available">
                                <p>Available 20 Oct, 21</p>
                            </div>
                            <button class="btn add-to-bag-btn pre-order-btn"><i class="fa fa-shopping-bag"></i>Pre-Order</button>
                        </div>
                    </div> 
                    <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="no-card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img class="product-img img-fluid" src="dist/img/preorder.webp" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="delivery-price">
                                <div class="price">
                                    <h6 class="sell-price">৳530 <span class="regular-price">৳800</span></h6>
                                </div>
                                <h6 class="sell-price">Free Delivery</h6>
                            </div>
                            <div class="available">
                                <p>Available 20 Oct, 21</p>
                            </div>
                            <button class="btn add-to-bag-btn pre-order-btn"><i class="fa fa-shopping-bag"></i>Pre-Order</button>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="no-card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img class="product-img img-fluid" src="dist/img/preorder.webp" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="delivery-price">
                                <div class="price">
                                    <h6 class="sell-price">৳530 <span class="regular-price">৳800</span></h6>
                                </div>
                                <h6 class="sell-price">Free Delivery</h6>
                            </div>
                            <div class="available">
                                <p>Available 20 Oct, 21</p>
                            </div>
                            <button class="btn add-to-bag-btn pre-order-btn"><i class="fa fa-shopping-bag"></i>Pre-Order</button>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="no-card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img class="product-img img-fluid" src="dist/img/preorder.webp" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="delivery-price">
                                <div class="price">
                                    <h6 class="sell-price">৳530 <span class="regular-price">৳800</span></h6>
                                </div>
                                <h6 class="sell-price">Free Delivery</h6>
                            </div>
                            <div class="available">
                                <p>Available 20 Oct, 21</p>
                            </div>
                            <button class="btn add-to-bag-btn pre-order-btn"><i class="fa fa-shopping-bag"></i>Pre-Order</button>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="no-card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img class="product-img img-fluid" src="dist/img/preorder.webp" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="delivery-price">
                                <div class="price">
                                    <h6 class="sell-price">৳530 <span class="regular-price">৳800</span></h6>
                                </div>
                                <h6 class="sell-price">Free Delivery</h6>
                            </div>
                            <div class="available">
                                <p>Available 20 Oct, 21</p>
                            </div>
                            <button class="btn add-to-bag-btn pre-order-btn"><i class="fa fa-shopping-bag"></i>Pre-Order</button>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="no-card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img class="product-img img-fluid" src="dist/img/preorder.webp" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="delivery-price">
                                <div class="price">
                                    <h6 class="sell-price">৳530 <span class="regular-price">৳800</span></h6>
                                </div>
                                <h6 class="sell-price">Free Delivery</h6>
                            </div>
                            <div class="available">
                                <p>Available 20 Oct, 21</p>
                            </div>
                            <button class="btn add-to-bag-btn pre-order-btn"><i class="fa fa-shopping-bag"></i>Pre-Order</button>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="no-card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img class="product-img img-fluid" src="dist/img/preorder.webp" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="delivery-price">
                                <div class="price">
                                    <h6 class="sell-price">৳530 <span class="regular-price">৳800</span></h6>
                                </div>
                                <h6 class="sell-price">Free Delivery</h6>
                            </div>
                            <div class="available">
                                <p>Available 20 Oct, 21</p>
                            </div>
                            <button class="btn add-to-bag-btn pre-order-btn"><i class="fa fa-shopping-bag"></i>Pre-Order</button>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="no-card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img class="product-img img-fluid" src="dist/img/preorder.webp" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="delivery-price">
                                <div class="price">
                                    <h6 class="sell-price">৳530 <span class="regular-price">৳800</span></h6>
                                </div>
                                <h6 class="sell-price">Free Delivery</h6>
                            </div>
                            <div class="available">
                                <p>Available 20 Oct, 21</p>
                            </div>
                            <button class="btn add-to-bag-btn pre-order-btn"><i class="fa fa-shopping-bag"></i>Pre-Order</button>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="no-card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img class="product-img img-fluid" src="dist/img/preorder.webp" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="delivery-price">
                                <div class="price">
                                    <h6 class="sell-price">৳530 <span class="regular-price">৳800</span></h6>
                                </div>
                                <h6 class="sell-price">Free Delivery</h6>
                            </div>
                            <div class="available">
                                <p>Available 20 Oct, 21</p>
                            </div>
                            <button class="btn add-to-bag-btn pre-order-btn"><i class="fa fa-shopping-bag"></i>Pre-Order</button>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="no-card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img class="product-img img-fluid" src="dist/img/preorder.webp" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="delivery-price">
                                <div class="price">
                                    <h6 class="sell-price">৳530 <span class="regular-price">৳800</span></h6>
                                </div>
                                <h6 class="sell-price">Free Delivery</h6>
                            </div>
                            <div class="available">
                                <p>Available 20 Oct, 21</p>
                            </div>
                            <button class="btn add-to-bag-btn pre-order-btn"><i class="fa fa-shopping-bag"></i>Pre-Order</button>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-4">
                        <div class="product-card">
                            <div class="no-card">
                                <a type="button" data-toggle="modal" data-target="#exampleModal"><img class="product-img img-fluid" src="dist/img/preorder.webp" alt=""></a>
                            </div>
                            <h6 class="mt-2 mb-2">Lorem ipsum dolor sit amet consectetur</h6>
                            <div class="delivery-price">
                                <div class="price">
                                    <h6 class="sell-price">৳530 <span class="regular-price">৳800</span></h6>
                                </div>
                                <h6 class="sell-price">Free Delivery</h6>
                            </div>
                            <div class="available">
                                <p>Available 20 Oct, 21</p>
                            </div>
                            <button class="btn add-to-bag-btn pre-order-btn"><i class="fa fa-shopping-bag"></i>Pre-Order</button>
                        </div>
                    </div>   
                </div>
            </div>
        </section>

        </div>
    </section>



    
<?php 
    include_once('./template/view-card.php')
?>




<!-- 
    =============================
    sidebar left file included
    =============================
-->
<?php 
    include_once('./template/sidebar-left.php')
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
