<div id="maincontainer">
  <section id="product">
    <div class="container">
    <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Checkout</li>
      </ul>
      <div class="row">        
        <!-- Account Login-->
        <div class="span9">
          <h1 class="heading1"><span class="maintext">Checkout</span><span class="subtext"> Checkout Process Steps</span></h1>
                    
          <div class="checkoutsteptitle">Step 6: Confirm Order<a class="modify">Modify</a>
          </div>
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
            
            <div class="row">
              <div class="pull-right">
                <div class="span4 pull-right">
                  <table class="table table-striped table-bordered ">
                    <tbody>
                      <tr>
                        <td><span class="extra bold totalamout">TOTAL :</span></td>
                        <td><span class="bold totalamout">Rp120.000</span></td>
                      </tr>
                    </tbody>
                  </table>
                  <input type="submit" class="btn btn-orange pull-right" value="Checkout">
                  <input type="submit" class="btn btn-orange pull-right mr10" value="Continue Shopping">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Sidebar Start-->
        <div class="span3">
          <aside>
            <div class="sidewidt">
              <h2 class="heading2"><span> Tahapan Checkout</span></h2>
              <ul class="nav nav-list categories">
                <li>
                  <a href="<?=base_url('checkout')?>">Checkout</a>
                </li>
                <li>
                  <a href="<?=base_url('checkout/detail_pembeli')?>">Detail Pembeli</a>
                </li>
                <li>
                  <a href="<?=base_url('checkout/detail_pengiriman')?>">Detail Pengiriman</a>
                </li>
                <li>
                  <a class="active" href="<?=base_url('checkout/detail_pesanan')?>">Detail Pesanan</a>
                </li>
              </ul>
            </div>
          </aside>
        </div>
        <!-- Sidebar End-->
      </div>
    </div>
  </section>
</div>