<div id="maincontainer">
  <section id="product">
    <div class="container">      
      <!-- Product Details-->
      <div class="row">
       <!-- Left Image-->
        <div class="span4">
          <ul class="thumbnails mainimage">
            <li class="span4">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?=base_url('/assets/uploads/produk/'.$find_produk['gambar'])?>">
                <img width="320px" src="<?=base_url('/assets/uploads/produk/'.$find_produk['gambar'])?>" alt="<?=$find_produk['nama_produk']?>" title="<?=$find_produk['nama_produk']?>">
              </a>
            </li>
          </ul>
        </div>
        <!-- Right Details-->
        <div class="span5">
          <div class="row">
            <div class="span5">
              <h1 class="productname"><span class="bgnone"><?=$find_produk['nama_produk']?></span></h1>
              <div class="productprice">
                <div class="productpageprice">
                  <span class="spiral"></span>Rp<?=$find_produk['harga_jual']?></div>
                <div class="productpageoldprice">DISKON : Rp<?=$find_produk['harga_coret']?></div>
              </div>
              <hr />
              <p><?=$find_produk['deskripsi']?></p>
              <ul class="productpagecart">
                <li><a class="cart" href="" onclick="add_to_cart('<?=base_url('add_to_cart/'.str_replace("%", "_", urlencode($this->encrypt->encode($find_produk['id_produk']))))?>')">Add to Cart</a></li>
              </ul>
            </div>
          </div>
        </div>
        <aside class="span3">
          <?php $this->load->view('/pages/partials/katalog_partials'); ?>
          <?php $this->load->view('/pages/partials/produk_baru_partials'); ?>
        </aside>
        
      </div>
    </div>
  </section>
</div>
<script type="text/javascript">
  function add_to_cart(url) {
    $.get(url, function(data) {
      window.reload();
    });
  }
</script>