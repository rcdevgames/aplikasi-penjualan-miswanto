<div id="maincontainer">
  <section id="product">
    <div class="container">      
      <!-- Product Details-->
      <div class="row">
       <!-- Left Image-->
        <div class="span4">
          <ul class="thumbnails mainimage">
            <li class="span4">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?=base_url('/assets/theme/')?>img/product1big.jpg">
                <img  src="<?=base_url('/assets/theme/')?>img/product1big.jpg" alt="" title="">
              </a>
            </li>
            <li class="span4">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?=base_url('/assets/theme/')?>img/product2big.jpg">
                <img  src="<?=base_url('/assets/theme/')?>img/product2big.jpg" alt="" title="">
              </a>
            </li>
            <li class="span4">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?=base_url('/assets/theme/')?>img/product1big.jpg">
                <img  src="<?=base_url('/assets/theme/')?>img/product1big.jpg" alt="" title="">
              </a>
            </li>
          </ul>
          <span>Mouse move on Image to zoom</span>
          <ul class="thumbnails mainimage">
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="<?=base_url('/assets/theme/')?>img/product2.jpg" alt="" title="">
              </a>
            </li>
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="<?=base_url('/assets/theme/')?>img/product1.jpg" alt="" title="">
              </a>
            </li>
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="<?=base_url('/assets/theme/')?>img/product2.jpg" alt="" title="">
              </a>
            </li>
          </ul>
        </div>
        <!-- Right Details-->
        <div class="span5">
          <div class="row">
            <div class="span5">
              <h1 class="productname"><span class="bgnone">My First Simle One Ecommerce template</span></h1>
              <div class="productprice">
                <div class="productpageprice">
                  <span class="spiral"></span>$230.00</div>
                <div class="productpageoldprice">Old price : $345.00</div>
                <ul class="rate">
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="off"></li>
                  <li class="off"></li>
                </ul>
              </div>
              <div class="quantitybox">
                <select class="selectsize">
                  <option>Select Size</option>
                  <option>Red</option>
                  <option>Green</option>
                  <option>Blue</option>
                  <option>Black</option>
                </select>
                <select class="selectqty">
                  <option>Select</option>
                  <option>24</option>
                  <option>36</option>
                  <option>48</option>
                </select>
                <div class="clear"></div>
                <div class="control-group">
                  <div class="controls">
                    <label class="checkbox">
                      <input type="checkbox" name="optionsCheckboxList2" value="option2">
                      Option two can also be checked and included in form results </label>
                    <label class="checkbox">
                      <input type="checkbox" name="optionsCheckboxList3" value="option3">
                      Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results </label>
                    `
                    <label class="radio">
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Option one is this and that—be sure to include why it's great </label>
                    <label class="radio">
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Option two can be something else and selecting it will deselect option one </label>
                  </div>
                </div>
              </div>
              <ul class="productpagecart">
                <li><a class="cart" href="#">Add to Cart</a>
                </li>
                <li><a class="wish" href="#" >Add to Wishlist</a>
                </li>
                <li><a class="comare" href="#" >Add to Compare</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <aside class="span3">
        <!--Category-->
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
                <a href="category.html">Electronics </a>
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
          <!--Best sellter-->
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
        </aside>
      </div>
    </div>
  </section>
   <!-- Product Description tab & comments-->
  <section id="productdesc" class="row">
    <div class="container">
      <div class="productdesc">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a href="#description">Description</a>
          </li>
          <li><a href="#specification">Specification</a>
          </li>
          <li><a href="#review">Review</a>
          </li>
          <li><a href="#producttag">Tags</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="description">
            <h2>h2 tag will be appear</h2>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum <br>
            <br>
            <ul class="listoption3">
              <li>Lorem ipsum dolor sit amet Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit </li>
              <li>Faucibus porta lacus fringilla vel Aenean sit amet erat nunc Eget porttitor lorem</li>
            </ul>
          </div>
          <div class="tab-pane " id="specification">
            <ul class="productinfo">
              <li>
                <span class="productinfoleft"> Product Code:</span> Product 16 </li>
              <li>
                <span class="productinfoleft"> Reward Points:</span> 60 </li>
              <li>
                <span class="productinfoleft"> Availability: </span> In Stock </li>
              <li>
                <span class="productinfoleft"> Old Price: </span> $500.00 </li>
              <li>
                <span class="productinfoleft"> Ex Tax: </span> $500.00 </li>
              <li>
                <span class="productinfoleft"> Ex Tax: </span> $500.00 </li>
              <li>
                <span class="productinfoleft"> Product Code:</span> Product 16 </li>
              <li>
                <span class="productinfoleft"> Reward Points:</span> 60 </li>
            </ul>
          </div>
          <div class="tab-pane" id="review">
            <h3>Write a Review</h3>
            <form class="form-vertical">
              <fieldset>
                <div class="control-group">
                  <label class="control-label">Text input</label>
                  <div class="controls">
                    <input type="text" class="span3">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Textarea</label>
                  <div class="controls">
                    <textarea rows="3"  class="span3"></textarea>
                  </div>
                </div>
              </fieldset>
              <input type="submit" class="btn btn-orange" value="continue">
            </form>
          </div>
          <div class="tab-pane" id="producttag">
            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum <br>
              <br>
            </p>
            <ul class="tags">
              <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> html</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> html</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> css</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> jquery</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> css</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> jquery</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> css</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> jquery</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
              </li>
              <li><a href="#"><i class="icon-tag"></i> html</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Related Products-->
  <section id="related" class="row mt40">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Related Products</span><span class="subtext"> See Our Most featured Products</span></h1>
      <ul class="thumbnails">
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
    </div>
  </section>
  <!-- Popular Brands-->
  <section id="popularbrands" class="container">
    <h1 class="heading1"><span class="maintext">Popular Brands</span><span class="subtext"> See Our  Popular Brands</span></h1>
    <div class="brandcarousalrelative">
      <ul id="brandcarousal">
        <li><img src="<?=base_url('/assets/theme/')?>img/brand1.jpg" alt="" title=""/></li>
        <li><img src="<?=base_url('/assets/theme/')?>img/brand2.jpg" alt="" title=""/></li>
        <li><img src="<?=base_url('/assets/theme/')?>img/brand3.jpg" alt="" title=""/></li>
        <li><img src="<?=base_url('/assets/theme/')?>img/brand4.jpg" alt="" title=""/></li>
        <li><img src="<?=base_url('/assets/theme/')?>img/brand1.jpg" alt="" title=""/></li>
        <li><img src="<?=base_url('/assets/theme/')?>img/brand2.jpg" alt="" title=""/></li>
        <li><img src="<?=base_url('/assets/theme/')?>img/brand3.jpg" alt="" title=""/></li>
        <li><img src="<?=base_url('/assets/theme/')?>img/brand4.jpg" alt="" title=""/></li>
        <li><img src="<?=base_url('/assets/theme/')?>img/brand1.jpg" alt="" title=""/></li>
        <li><img src="<?=base_url('/assets/theme/')?>img/brand2.jpg" alt="" title=""/></li>
        <li><img src="<?=base_url('/assets/theme/')?>img/brand3.jpg" alt="" title=""/></li>
        <li><img src="<?=base_url('/assets/theme/')?>img/brand4.jpg" alt="" title=""/></li>
      </ul>
      <div class="clearfix"></div>
      <a id="prev" class="prev" href="#">&lt;</a>
      <a id="next" class="next" href="#">&gt;</a>
    </div>
  </section>
</div>