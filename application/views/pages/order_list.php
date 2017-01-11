<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Daftar Pemesanan</li>
      </ul>
      <div class="row">
        <!-- My Account-->
        <div class="span9">
            <h1 class="heading1">
                <span class="maintext">Daftar Pemesanan</span><span class="subtext">Informasi pemesanan yang telah dilakukan</span>
            </h1>        
            
            <div class="checkoutsteptitle">Pesan Pada : 29 Dec 2016 (TOTAL : Rp120.000)<a class="modify">Modify</a></div>
            <div class="checkoutstep">
                <div class="cart-info">
                    <table class="table table-striped table-bordered">
                        <tr>
                        <th class="image">Image</th>
                        <th class="name">Product Name</th>
                        <th class="model">Model</th>
                        <th class="quantity">Quantity</th>
                        <th class="price">Unit Price</th>
                        <th class="total">Total</th>
                        </tr>
                        <tr>
                        <td class="image"><a href="#"><img title="product" alt="product" src="<?=base_url('/assets/theme/')?>img/prodcut-40x40.jpg" height="50" width="50"></a></td>
                        <td  class="name"><a href="#">Jeans</a></td>
                        <td class="model">My Product</td>
                        <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
                            &nbsp;
                            <a href="#"><img class="tooltip-test" data-original-title="Update" src="<?=base_url('/assets/theme/')?>img/update.png" alt=""></a>
                            <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="<?=base_url('/assets/theme/')?>img/remove.png" alt=""></a></td>
                        <td class="price">$120.68</td>
                        <td class="total">$120.68</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="pagination pull-right">
              <ul>
                <li><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
              </ul>
            </div>
        </div>
        
        <!-- Sidebar Start-->
          <aside class="span3">
            <div class="sidewidt">
              <h2 class="heading2"><span>Account</span></h2>
              <ul class="nav nav-list categories">
                <li>
                  <a href="#"> My Account</a>
                </li>
                <li>
                  <a href="#">Edit Account</a>
                </li>
                <li>
                  <a href="#">Password</a>
                </li>
                <li>
                  <a href="#">Wish List</a>
                </li>
                <li><a href="#">Order History</a>
                </li>
                <li><a href="#">Downloads</a>
                </li>
                <li><a href="#">Returns</a>
                </li>
                <li>
                  <a href="#"> Transactions</a>
                </li>
                <li>
                  <a href="category.html">Newsletter</a>
                </li>
                <li>
                  <a href="category.html">Logout</a>
                </li>
              </ul>
            </div>
          </aside>
        <!-- Sidebar End-->
      </div>
    </div>
  </section>
</div>