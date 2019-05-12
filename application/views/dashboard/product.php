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

.scrollbar::-webkit-scrollbar-track
{
	background: none;
}

.scrollbar::-webkit-scrollbar
{
	width: 0px;
	background: none;
}

.scrollbar::-webkit-scrollbar-thumb
{
	background: #f8f7fb;
  opacity: 0;
}


.right .scrollbar .block { padding: 16px 14px; margin-bottom: 8px; float: left; width: 100%; border-radius: 8px; background: #fff;-webkit-box-shadow: 0px 16px 25px 0px rgba(118, 88, 198, 0.1);
-moz-box-shadow:    0px 16px 25px 0px rgba(118, 88, 198, 0.1);
box-shadow:         0px 16px 25px 0px rgba(118, 88, 198, 0.1);}
.right .scrollbar .block .picture { float: left; width: 48px;}
.right .scrollbar .block .no_picture { float: left; width: 48px; height: 48px; background: url('../img/no_picture.png') no-repeat 0 0; text-align: center;color: #fff; line-height: 48px; font-weight: 600;}
.right .scrollbar .block .picture img { float: left; border-radius: 4px;}
.right .scrollbar .block .info { padding-left: 72px;}
.right .scrollbar .block .info h3 { height: auto; margin: 0; line-height: 16px; padding:8px 0;}
.right .scrollbar .block .info .place { width: 100%;font-weight: 500; float: left; background: url('../img/point.png') no-repeat 0 0;}
.right .scrollbar .block:last-child { margin: 0; box-shadow: none;}




@media screen and (max-width: 1400px) {
  .txt .store_page .info_tool .column { width: 100%;}
  .txt .store_page .info_tool .row:before { content: none;}
.txt .store_page .info_tool .column.ensure { margin-top: 30px;}
.txt .store_page .services .cont .items .box { width: 50%;}

}

@media screen and (max-width: 1342px) {
  .right {width: 29%;}
  .txt {width: 62%;}
  .txt .store_page .top .person { margin-left: 22px;}
  .txt .store_page .top .info { padding-left: 177px; }
  .txt .store_page .top .info p { padding-right: 120px;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;}
  .txt .store_page .top .follow {right: 22px;}
  .txt .store_page .carousel, .txt .store_page .tools { width: 330px;}
  .txt .store_page .info_tool { padding-left: 395px;}
}

@media screen and (max-width: 1200px) {
  .txt .store_page .info_tool { padding: 0 22px 0 32px;}
  .txt .store_page .info_tool .column { width: 49%;}
  .txt .store_page .info_tool .column.ensure { margin: 0;}
  .txt .store_page .carousel, .txt .store_page .tools { width: 386px;}
  .txt .store_page .tools { float: none; margin-left: auto; margin-right: auto; position: relative; overflow: hidden;}
    .profile .personal_info .contacts { width: 100%;}
.profile .personal_info .equipments { width: 100%; padding-left: 30px; margin-top: 30px;}
.txt .store_page .services .cont .items .box { width: 100%;}
}

@media screen and (max-width: 1130px) {
  .txt {width: 61%;}
  .txt .store_page .items div.box { width: 50%;}
}

@media screen and (max-width: 1040px) {
  .txt {width: 60%;}
}

@media screen and (max-width: 995px) {
  aside .logo, .txt .search_box, .user { display: none;}
  aside h3:nth-child(1) { margin-top: 20px;}
  .content > aside {left: -200px; position: absolute; opacity: 0;}
  .txt { padding: 0; width: 63%;}
  .right {width: 37%;}
  .content > aside, .txt, .right {height: 640px;}
  .txt .view .filter .responsive { display: block;}
  .header { display: block;}
  .header .logo { position: absolute; left: 50%; margin-left: -16px;}
  .header .logo img { float: left; vertical-align: middle; -webkit-transition: transform 1s; transition: transform 1s;}
  .header .logo a:hover img {-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);}
  .bg { padding-right: 0px;}
  .right { padding-right: 30px;}
  aside.show { -webkit-transition: left 1s; transition: left 1s;  -webkit-transition: opacity 1s; transition: opacity 1s; left: 0; opacity: 1; background: #fff; width: 300px; padding-top: 32px; z-index: 99;}
  aside.show .tooltip { display: none !important;}
  aside .close { display: block;}
  aside ul { padding-bottom: 50px;}
  aside h3, aside h6 { display: block;}
  aside ul li a { width: 100%; line-height: 32px;}
  aside ul li a:before { width: 18px; height: 18px; background: url(../img/icons_menu_small.png) no-repeat 0 0; top: 7px;}
  
  aside ul li:hover a:before, aside ul li.active a:before { top: 7px;}

  aside ul.services li:nth-child(2) a:before { background-position-x: -18px;}
  aside ul.services li:nth-child(3) a:before { background-position-x: -36px;}
  aside ul.services li:nth-child(4) a:before { background-position-x: -54px;}

  aside ul.jobs li:nth-child(1) a:before { background-position-x: -72px;}
  aside ul.jobs li:nth-child(2) a:before { background-position-x: -90px;}
  aside ul.jobs li:nth-child(3) a:before { background-position-x: -108px;}
  aside ul.jobs li:nth-child(4) a:before { background-position-x: -126px;}
  aside ul.jobs li:nth-child(5) a:before { background-position-x: -144px;}
  aside ul li {margin: 6px 0 7px 0;}
  .txt .store_page .top .info .data { width: 100px;}
  
  .txt .store_page .services .left { left: -200px; position: absolute; opacity: 0; padding-top: 0; padding-bottom: 50px;}
  .txt .store_page .services .close, .txt .store_page .services .responsive_small { display: block;}
  .txt .store_page .services { background: none;}
  .txt .store_page .services .cont { padding-left: 30px;}
  .txt .store_page .services .cont .items .box {width: 33.3%;}
  
  .txt .store_page .services .show { -webkit-transition: left 1s; transition: left 1s;  -webkit-transition: opacity 1s; transition: opacity 1s; left: 0; opacity: 1; background: #fff; width: 300px; padding-top: 32px; z-index: 99;}
}


@media screen and (max-width: 995px) {
	.txt .store_page .services .cont .items .box {width: 50%;}
}

@media screen and (max-width: 800px) {
  .txt .view .switcher { display: none;}
  .txt .view .filter .button { float: right; margin: 0 32px 0 0;}
  .txt .view .filter { width: 100%;}
  .txt, .right {width: 100%; height: auto !important;}
  .scrollbar  { height: auto !important;}
  .right { padding-right: 0;}
  .txt .view, .right h3 { height: 50px;}
  .content { padding-bottom: 30px;}
  .right .scrollbar .block.adv p { width: 100%;}
.header .search_box .search { width: 30px; position: relative;}
.header .search_box .search input[type="text"] { display: none;}
.search_box .search input[type=submit] {float: right;}
.txt .scrollbar .block .picture {width: 100%; text-align: center; padding-bottom: 15px;}
.txt .scrollbar .block .picture img { float: none;}
.txt .scrollbar .block .info { padding-left: 0;}
.txt .scrollbar .block .info .price { width: 100%; text-align: center;}
.bg:before { display: none; content: none;}
.txt .store_page .items div.box { width: 33.3%;}
.txt .store_page .top .info .data { width: 130px;}
  .profile .personal_info .contacts { width: 45%;}
.profile .personal_info .equipments { width: 55%; padding-left: 0px; margin-top: 0px;}
.txt .store_page .services .cont .items .box {width: 33.3%;}
}

@media screen and (max-width: 690px) {
  .txt .store_page .items div.box { width: 50%;}
  .profile .personal_info .contacts { width: 100%;}
.profile .personal_info .equipments { width: 100%; padding-left: 30px; margin-top: 30px;}
}

@media screen and (max-width: 620px) {
  .txt .store_page .services .cont .items .box {width: 50%;}
}


@media screen and (max-width: 600px) {
  .txt .store_page .top { background: url('../img/top_mobile.jpg') no-repeat right top; height: auto; padding-bottom: 57px;}
.txt .store_page .top .person { float: none; margin: 0 auto; margin-top: 50px;}
.txt .store_page .top .info { padding-left: 22px; text-align: center;}
.txt .store_page .top .info p { padding-right: 0;}
.txt .store_page .top .info .star { text-align: center;}
.txt .store_page .top .info .star img { float: none;}
.txt .store_page .top .info h3 { display: block; height: auto; padding: 20px 0;}
.txt .store_page .top .follow { top: auto; right: auto; bottom: -17px; left: 50%; margin-left: -50px;}
.profile .news .line .info { padding-left: 0;}
.profile .news .line .info .date, .profile .news .line .info h3 { padding-left: 100px; float: none; width: auto;}

}

@media screen and (max-width: 500px) {
  .txt .store_page .items div.box { width: 100%;}
  .txt .store_page .not_logged .label, .txt .store_page .not_logged h3 { padding: 0 22px; float: left; width: 100%; text-align: left;}
  .txt .store_page .not_logged .label { padding-bottom: 10px;}
  .txt .store_page .carousel, .txt .store_page .tools { width: 330px;}
  .profile .white_box { padding-left: 22px;}
  .txt .store_page .items div.box { padding-right: 0;}
  .txt .store_page.profile .items div.box:after { right: 29px;}
  .txt .store_page .services .cont .items .box {width: 100%;}
}

@media screen and (max-width: 450px) {
  .txt .store_page .info_tool .column { width: 100%;}
.txt .store_page .info_tool .column.ensure { margin-top: 30px;}
.txt .store_page .carousel, .txt .store_page .tools { width: 300px;}
}

.pagination li {
background-color: #fff;
  display: inline-block;
  border-radius: 4px;
  text-align: center;
  vertical-align: top;
  height: 30px;
  margin: 5px;
}

.pagination li a {
  color: #444;
  display: inline-block;
  font-size: 1.2rem;
  padding: 0 10px;
  line-height: 30px;
}

.pagination li.active a {
  color: #fff;
}

.pagination li.active {
  background-color: #ee6e73;
}

.pagination li.disabled a {
  cursor: default;
  color: #fff;
  background-color: #2879fe;
}

.pagination li i {
  font-size: 2rem;
}

.pagination li.pages ul li {
  display: inline-block;
  float: none;
}

@media only screen and (max-width: 992px) {
  .pagination {
    width: 100%;
  }
  .pagination li.prev,
  .pagination li.next {
    width: 10%;
  }
  .pagination li.pages {
    width: 80%;
    overflow: hidden;
    white-space: nowrap;
  }

.z-depth-1, nav, .card-panel, .card, .toast, .btn, .btn-large, .btn-floating, .dropdown-content, .collapsible, .side-nav {
  -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
}

.z-depth-1-half, .btn:hover, .btn-large:hover, .btn-floating:hover {
  -webkit-box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
          box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
}


/**/
.menuuu{
	color: #003366;
	padding:10px;
}

.mm1{
	border-bottom: 3px solid #003366;
	font-weight: bold;
	padding:10px;
	display: block;	
	cursor: pointer;
}
.mm1:hover{
	border-color:rgba(38, 128, 255, 0.23);
}

.mm1 span{
	font-size:14px;
}

.mm2{
	
  
	padding:10px;
	display: block;
	cursor: pointer;	
}

.mm2:hover{
	border-color:rgba(38, 128, 255, 0.23);
}

.mm2 span{
	font-size:14px;
}

.tt-search-input {
    background: #eeeeee82;
    font-size: 16px;
    padding: 4px 2px 4px 8px;
    box-shadow: none;
    border:none;
    outline: none;
    width: calc(100% - 00px);
    border-radius: 4px;
}

.form-control {
	margin:10px 10px 10px 10px;
	padding:10px;
	border:none;
	border-radius: 6px;
	border-bottom: 1px #eee solid;
}
.tt-collapse-block .tt-item .tt-collapse-title {
	display: block!important;
	line-height: 20px!important;
}
</style>
<body>

<div style="margin-top: 50px"></div>
<div class="container-indent">
<div class="container">
	<div class="row" style="margin: 0px; padding: 0px 0px;color: #003366;">
	  <div class="col-4 col-md-4 text-center mm1">
	      <span>Beli</span>
	  </div>
	  <div class="col-4 col-md-4 text-center mm2">
	      <span>Jual</span>
	  </div>
	  <div class="col-4 col-md-4 text-center mm2">
	      <span>Stock</span>
	  </div>
	</div>

	<div class="row" style="margin: -15px;">
	<form action="<?php echo site_url('p/search') ?>" method="get" class="form-control">
		<input class="tt-search-input" type="search" name="search" placeholder="Cari..." aria-label="Cari..." autocomplete="off" value="<?php echo $this->input->get('search') ?>">
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