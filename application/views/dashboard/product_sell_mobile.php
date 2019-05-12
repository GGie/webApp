<!-- <meta http-equiv="refresh" content="4"> -->

<style type="text/css">
body {
  font-family: 'Oxygen', sans-serif;
  background-image: linear-gradient(rgb(255, 255, 255), rgb(229, 245, 255));
  height: 100%;
}

* html .container {height: 100%;}
.scrollbar {
  float: left; 
  width: 100%; 
  position: relative; 
}
</style>
<body>

<div style="margin-top: 50px"></div>
<div class="container-indent">
<div class="container">
  <div class="row" style="margin: 0px; padding: 0px 0px;color: #003366;">
    <a href="<?php echo base_url('dashboard/buy') ?>" class="col-4 col-md-4 text-center mm2">
        <span>Beli</span>
    </a>
     <a href="javascript:void(0)" class="col-4 col-md-4 text-center mm1">
        <span>Jual</span>
    </a>
     <a href="<?php echo base_url('dashboard/stock') ?>" class="col-4 col-md-4 text-center mm2">
        <span>Stock</span>
    </a>
  </div>

  <div class="row" style="margin: -15px;">
  <form action="<?php echo site_url('dashboard/sell') ?>" method="get" class="form-control">
    <input class="tt-search" type="search" name="search" placeholder="Cari..." aria-label="Cari..." autocomplete="off" value="<?php echo $this->input->get('search') ?>">
  </form>
  </div>

  <div style="margin-top: 10px"></div>
  <div class="right">

    <div class="scrollbar">

<div class="tt-collapse-block">
<div class="tt-item">
  
      <?php foreach($Dataproduct->result() as $product) { ?>
      <div class="block tt-collapse-title">
        <div class="block" style="float: right">
        <div class="picture">
          <img src="<?php echo base_url('assets') ?>/images/loader.svg" data-src="<?php echo getProductPhoto($product->product_id) ?>"  width="48" height="48" >
        </div>
        <div class="info" style="">
          <b style="color:#2879fe9e!important;display:inline-block;white-space: nowrap;width: 100%;overflow: hidden;text-overflow: ellipsis;" class="tt-white-color"><a style="color: #2879fe9e!important;" href="javascript:void(0)"><?php echo $product->product_name ?></a></b><br>
          <div class="place">Rp. <?php echo @number_format(@$product->price,0,',','.'); ?><br></div>
        </div>
      </div><!-- /block -->
      </div>
      <div class="tt-collapse-content">
        <table class="tt-table-03">
          <tbody>
            <tr>
              <td>Comment:</td>
              <td>128</td>
            </tr>
            <tr>
              <td>View:</td>
              <td>1024</td>
            </tr>
          </tbody>
        </table>
        <table>
          <tbody>
            <tr>
              <td><a href="<?php echo base_url('p/product/' . $product->product_id . '-' . replace_url_char($product->product_name)) ?>" class="btn btn-xsmall">Lihat</a></td>
              <td><a href="#" class="btn btn-xsmall">Ubah</a></td>
              <td><a href="#" class="btn btn-xsmall">Pindah Ke Stock</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <?php } ?>
</div>


    </div>

    <?php echo $this->pagination->create_links(); ?>
    </div>
  </div>
</div>
</div>    
</body>