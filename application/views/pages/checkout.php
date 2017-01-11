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
          
          <div class="checkoutsteptitle">Step 1: Checkout Options<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep ">
            <section class="newcustomer ">
              <h3 class="heading3">New Customer </h3>
              <div class="loginbox">
                <label class="inline">
                  <input type="radio" value="option1">
                  Register Account </label>
                <br>
                <label class="inline">
                  <input type="radio" value="option1">
                  Guest Checkout </label>
                <p><br>
                  By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                <br>
                <a href="#" class="btn btn-orange">Continue</a>
              </div>
            </section>
            <section class="returncustomer">
              <h3 class="heading3">Returning Customer </h3>
              <div class="loginbox">
                <form class="form-vertical">
                  <fieldset>
                    <div class="control-group">
                      <label class="control-label">E-Mail Address:</label>
                      <div class="controls">
                        <input type="text" class="span3">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Password:</label>
                      <div class="controls">
                        <input type="text"  class="span3">
                      </div>
                    </div>
                    <a class="" href="#">Forgotten Password</a>
                    <br>
                    <br>
                    <a href="#" class="btn btn-orange">Login</a>
                  </fieldset>
                </form>
              </div>
            </section>
          </div>
          
        </div>        
        
        <!-- Sidebar Start-->
        <div class="span3">
          <aside>
            <div class="sidewidt">
              <h2 class="heading2"><span> Tahapan Checkout</span></h2>
              <ul class="nav nav-list categories">
                <li>
                  <a class="active" href="<?=base_url('checkout')?>">Checkout</a>
                </li>
                <li>
                  <a href="<?=base_url('checkout/detail_pembeli')?>">Detail Pembeli</a>
                </li>
                <li>
                  <a href="<?=base_url('checkout/detail_pengiriman')?>">Detail Pengiriman</a>
                </li>
                <li>
                  <a href="<?=base_url('checkout/detail_pesanan')?>">Detail Pesanan</a>
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