<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?=$title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="<?=base_url('/assets/theme/css/bootstrap.css')?>" rel="stylesheet">
<link href="<?=base_url('/assets/theme/css/bootstrap-responsive.css')?>" rel="stylesheet">
<link href="<?=base_url('/assets/theme/css/style.css')?>" rel="stylesheet">
<link href="<?=base_url('/assets/theme/css/flexslider.css')?>" type="text/css" media="screen" rel="stylesheet"  />
<link href="<?=base_url('/assets/theme/css/jquery.fancybox.css')?>" rel="stylesheet">
<link href="<?=base_url('/assets/theme/css/cloud-zoom.css')?>" rel="stylesheet">
<link rel="shortcut icon" href="<?=base_url('/assets/theme/')?>assets/ico/favicon.html">

</head>
<body>

<!-- Header Start -->
<header>
  <div class="headerstrip">
    <div class="container">
      <div class="row">
        <div class="span12">
          <a href="<?=base_url()?>" class="logo pull-left"><img src="<?=base_url('/assets/theme/')?>img/logo.png" alt="SimpleOne" title="SimpleOne"></a>
          <!-- Top Nav Start -->
          <div class="pull-left">
            <div class="navbar" id="topnav">
              <div class="navbar-inner">
                <ul class="nav" >
                  <li><a class="home active" href="<?=base_url()?>">Home</a>
                  </li>
                  <li><a class="myaccount" href="<?=base_url('detail_akun.html')?>">Masuk Akun</a>
                  </li>
                  <li><a class="shoppingcart" href="<?=base_url('keranjang_belanja.html')?>">Keranjang Belanja</a>
                  </li>
                  <li><a class="checkout" href="<?=base_url('checkout.html')?>">Checkout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Top Nav End -->
          <div class="pull-right">
            <form class="form-search top-search">
              <input type="text" class="input-medium search-query" placeholder="Search Here…">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="headerdetails">
      <div class="pull-right">
        <ul class="nav topcart pull-left">
          <li class="dropdown hover carticon ">
            <a href="#" class="dropdown-toggle" > Keranjang Belanja <span class="label label-orange font14">1 Pesan</span> - Rp120.000 <b class="caret"></b></a>
            <ul class="dropdown-menu topcartopen ">
              <li>
                <table>
                  <tbody>
                    <tr>
                      <td class="image"><a href="product/1.html"><img width="50" height="50" src="<?=base_url('/assets/theme/')?>img/prodcut-40x40.jpg" alt="product" title="product"></a></td>
                      <td class="name"><a href="product/1.html">MacBook</a></td>
                      <td class="quantity">x&nbsp;1</td>
                      <td class="total">Rp120.000</td>
                      <td class="remove">
                          <a href="#" title="Hapus"><i class="icon-remove"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table>
                  <tbody>
                    <tr>
                      <td class="textright"><b>TOTAL :</b></td>
                      <td class="textright">Rp120.000</td>
                    </tr>
                  </tbody>
                </table>
                <div class="well pull-right buttonwrap">
                  <a class="btn btn-orange" href="<?=base_url('keranjang_belanja.html')?>">Daftar Belanja</a>
                  <a class="btn btn-orange" href="<?=base_url('checkout.html')?>">Checkout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<!-- Header End -->

<hr />

<?php $this->load->view($container); ?>

<!-- Footer -->
<footer id="footer">
  <section class="footersocial">
    <div class="container">
      <div class="row">
        <div class="span3 aboutus">
          <h2>ABOUT US</h2>
          <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
            <br>
            t has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
        </div>
        <div class="span3 contact">
          <h2>Contact Us </h2>
          <ul>
            <li class="phone"> +62 821 123456</li>
            <li class="mobile"> +6285 123 6890123</li>
            <li class="email"> distri@email.com</li>
          </ul>
        </div>
        <div class="span3 twitter">
          <h2>Twitter </h2>
          <div id="twitter">
          </div>
        </div>
        <div class="span3 facebook">
          <h2>Facebook </h2>
          <div id="fb-root"></div>
          <script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php" type="text/javascript"></script>
          <script type="text/javascript">FB.init("");</script>
          <script type="text/javascript">
              document.write('<fb:fan profile_id="80655071208" stream="0"	connections="6"	logobar="0" height="190px"	width="200"css="css/fb.css"></fb:fan> ');
          </script>
        </div>
      </div>
    </div>
  </section>
  <section class="footerlinks">
    <div class="container">
      <div id="footersocial">
        <a href="#" title="Facebook" class="facebook">Facebook</a>
        <a href="#" title="Twitter" class="twitter">Twitter</a>
        <a href="#" title="Linkedin" class="linkedin">Linkedin</a>
        <a href="#" title="rss" class="rss">rss</a>
        <a href="#" title="Googleplus" class="googleplus">Googleplus</a>
        <a href="#" title="Skype" class="skype">Skype</a>
        <a href="#" title="Flickr" class="flickr">Flickr</a>
      </div>
    </div>
  </section>
  <section class="copyrightbottom">
    <div class="container">
      <div class="row">
        <div class="span6"> Create By Miswanto (UMP). </div>
        <div class="span6 textright"> Copyright @ <?=date('Y')?> </div>
      </div>
    </div>
  </section>
</footer>

<!-- Placed at the end of the document so the pages load faster -->
<script src="<?=base_url('/assets/theme/js/jquery.js')?>"></script>
<script src="<?=base_url('/assets/theme/js/bootstrap.js')?>"></script>
<script src="<?=base_url('/assets/theme/js/respond.min.js')?>"></script>
<script src="<?=base_url('/assets/theme/js/application.js')?>"></script>
<script src="<?=base_url('/assets/theme/js/bootstrap-tooltip.js')?>"></script>

<script defer src="<?=base_url('/assets/theme/js/jquery.fancybox.js')?>"></script>
<script defer src="<?=base_url('/assets/theme/js/jquery.flexslider.js')?>"></script>

<script type="text/javascript" src="<?=base_url('/assets/theme/js/jquery.tweet.js')?>"></script>
<script src="<?=base_url('/assets/theme/js/cloud-zoom.1.0.2.js')?>"></script>

<script type="text/javascript" src="<?=base_url('/assets/theme/js/jquery.validate.js')?>"></script>
<script type="text/javascript" src="<?=base_url('/assets/theme/js/jquery.carouFredSel-6.1.0-packed.js')?>"></script>
<script type="text/javascript" src="<?=base_url('/assets/theme/js/jquery.mousewheel.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('/assets/theme/js/jquery.touchSwipe.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('/assets/theme/js/jquery.ba-throttle-debounce.min.js')?>"></script>

<script defer src="<?=base_url('/assets/theme/js/custom.js')?>"></script>

</body>
</html>