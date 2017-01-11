<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active"> Shopping Cart</li>
      </ul>       
      <h1 class="heading1"><span class="maintext"> Shopping Cart</span><span class="subtext"> All items in your  Shopping Cart</span></h1>
      <!-- Cart-->
      <div class="cart-info">
        <table class="table table-striped table-bordered">
          <tr>
            <th class="image">Image</th>
            <th class="name">Product Name</th>
            <th class="model">Model</th>
            <th class="quantity">Qty</th>
              <th class="total">Action</th>
            <th class="price">Unit Price</th>
            <th class="total">Total</th>
           
          </tr>
          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="<?=base_url('/assets/theme/')?>img/prodcut-40x40.jpg" height="50" width="50"></a></td>
            <td  class="name"><a href="#">Jeans</a></td>
            <td class="model">Purchased Product</td>
            <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1"></td>
            <td class="total"> <a href="#"><img class="tooltip-test" data-original-title="Update" src="<?=base_url('/assets/theme/')?>img/update.png" alt=""></a>
                <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="<?=base_url('/assets/theme/')?>img/remove.png" alt=""></a></td>
            <td class="price">Rp120.000</td>
            <td class="total">Rp120.000</td>
          </tr>
        </table>
      </div>
      <div class="container">
      <div class="pull-right">
          <div class="span4 pull-right">
            <table class="table table-striped table-bordered ">
              <tr>
                <td><span class="extra bold totalamout">TOTAL :</span></td>
                <td><span class="bold totalamout">Rp120.000,-</span></td>
              </tr>
            </table>
            <input type="submit" value="CheckOut" class="btn btn-orange pull-right">
            <input type="submit" value="Continue Shopping" class="btn btn-orange pull-right mr10">
          </div>
        </div>
        </div>
    </div>
  </section>
</div>