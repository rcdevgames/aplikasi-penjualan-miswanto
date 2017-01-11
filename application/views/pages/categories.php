<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Category</li>
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
        <aside class="span3">
         <!-- Category-->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Categories</span></h2>
            <ul class="nav nav-list categories">
              <li>
                <a href="category.html">Men Accessories</a>
              </li>
              <li>
                <a href="category.html">Women Accessories</a>
              </li>
              <li>
                <a href="category.html">Computers </a>
              </li>
              <li>
                <a href="category.html">Home and Furniture</a>
              </li>
              <li>
                <a href="category.html">Others</a>
              </li>
            </ul>
          </div>
         <!--  Best Seller -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Best Seller</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="<?=base_url('/assets/theme/')?>img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="<?=base_url('/assets/theme/')?>img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="<?=base_url('/assets/theme/')?>img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
            </ul>
          </div>
          <!-- Latest Product -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Latest Products</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="<?=base_url('/assets/theme/')?>img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="<?=base_url('/assets/theme/')?>img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="<?=base_url('/assets/theme/')?>img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
            </ul>
          </div>
          <!--  Must have -->  
          <div class="sidewidt">
          <h2 class="heading2"><span>Must have</span></h2>
          <div class="flexslider" id="mainslider">
            <ul class="slides">
              <li>
                <img src="<?=base_url('/assets/theme/')?>img/product1.jpg" alt="" />
              </li>
              <li>
                <img src="<?=base_url('/assets/theme/')?>img/product2.jpg" alt="" />
              </li>
            </ul>
          </div>
          </div>
        </aside>
        <!-- Sidebar End-->
        <!-- Category-->
        <div class="span9">          
          <!-- Category Products-->
          <section id="category">
            <div class="row">
              <div class="span9">
               <!-- Sorting-->
                <div class="sorting well">
                  <form class=" form-inline pull-left">
                    Sort By :
                    <select class="span2">
                      <option>Default</option>
                      <option>Name</option>
                      <option>Pirce</option>
                      <option>Rating </option>
                      <option>Color</option>
                    </select>
                    &nbsp;&nbsp;
                    Show:
                    <select class="span1">
                      <option>10</option>
                      <option>15</option>
                      <option>20</option>
                      <option>25</option>
                      <option>30</option>
                    </select>
                  </form>
                  <div class="btn-group pull-right">
                    <button class="btn" id="list"><i class="icon-th-list"></i>
                    </button>
                    <button class="btn btn-orange" id="grid"><i class="icon-th icon-white"></i></button>
                  </div>
                </div>
               <!-- Category-->
                <section id="categorygrid">
                  <ul class="thumbnails grid">
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="#"><img alt="" src="<?=base_url('/assets/theme/')?>img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="#"><img alt="" src="<?=base_url('/assets/theme/')?>img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="#"><img alt="" src="<?=base_url('/assets/theme/')?>img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="#"><img alt="" src="<?=base_url('/assets/theme/')?>img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="offer tooltip-test" >Offer</span>
                        <a href="#"><img alt="" src="<?=base_url('/assets/theme/')?>img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="<?=base_url('/assets/theme/')?>img/product2.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="#"><img alt="" src="<?=base_url('/assets/theme/')?>img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <span class="offer tooltip-test" >Offer</span>
                        <a href="#"><img alt="" src="<?=base_url('/assets/theme/')?>img/product1.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="span3">
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="<?=base_url('/assets/theme/')?>img/product2.jpg"></a>
                        <div class="shortlinks">
                          <a class="details" href="#">DETAILS</a>
                          <a class="wishlist" href="#">WISHLIST</a>
                          <a class="compare" href="#">COMPARE</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="pricenew">$4459.00</div>
                            <div class="priceold">$5000.00</div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="thumbnails list row">
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="span3">
                            <span class="offer tooltip-test" >Offer</span>
                            <a href="#"><img alt="" src="<?=base_url('/assets/theme/')?>img/product1.jpg"></a>
                          </div>
                          <div class="span6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
                            <div class="productdiscrption"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.<br>
                              <br>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stan </div>
                            <div class="pricetag">
                              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                              <div class="price">
                                <div class="pricenew">$4459.00</div>
                                <div class="priceold">$5000.00</div>
                              </div>
                            </div>
                            <div class="shortlinks">
                              <a class="details" href="#">DETAILS</a>
                              <a class="wishlist" href="#">WISHLIST</a>
                              <a class="compare" href="#">COMPARE</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="span3">
                            <span class="offer tooltip-test" >Offer</span>
                            <a href="#"><img alt="" src="<?=base_url('/assets/theme/')?>img/product1.jpg"></a>
                          </div>
                          <div class="span6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
                            <div class="productdiscrption"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.<br>
                              <br>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stan </div>
                            <div class="pricetag">
                              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                              <div class="price">
                                <div class="pricenew">$4459.00</div>
                                <div class="priceold">$5000.00</div>
                              </div>
                            </div>
                            <div class="shortlinks">
                              <a class="details" href="#">DETAILS</a>
                              <a class="wishlist" href="#">WISHLIST</a>
                              <a class="compare" href="#">COMPARE</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="span3">
                            <span class="offer tooltip-test" >Offer</span>
                            <a href="#"><img alt="" src="<?=base_url('/assets/theme/')?>img/product1.jpg"></a>
                          </div>
                          <div class="span6">
                            <a class="prdocutname" href="product.html">Product Name Here</a>
                            <div class="productdiscrption"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.<br>
                              <br>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stan </div>
                            <div class="pricetag">
                              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                              <div class="price">
                                <div class="pricenew">$4459.00</div>
                                <div class="priceold">$5000.00</div>
                              </div>
                            </div>
                            <div class="shortlinks">
                              <a class="details" href="#">DETAILS</a>
                              <a class="wishlist" href="#">WISHLIST</a>
                              <a class="compare" href="#">COMPARE</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="pagination pull-right">
                    <ul>
                      <li><a href="#">Prev</a>
                      </li>
                      <li class="active">
                        <a href="#">1</a>
                      </li>
                      <li><a href="#">2</a>
                      </li>
                      <li><a href="#">3</a>
                      </li>
                      <li><a href="#">4</a>
                      </li>
                      <li><a href="#">Next</a>
                      </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>