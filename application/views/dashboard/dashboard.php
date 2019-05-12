<style>
/* profile */
.css-title {
    color: rgba(0, 0, 0, 0.7);
    font-weight: 600;
}
.css-xo9ljf{
    display: block;
    padding: 16px;
}
.css-1tumtwp-unf-card {
    display: block;
    position: relative;
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(49, 53, 59, 0.12) 0px 1px 6px 0px;
    padding: 16px;
    margin: 36px;
    overflow: hidden;
    margin: 0px !important;
    border-radius: 4px !important;
}
.css-1kukc4r {
    display: flex;
    margin-bottom: 16px;
}
.css-1mf51g1 {
    width: 40px;
    height: 40px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 6px 0px;
    border-radius: 50%;
}
.css-1c2mwzn {
    margin-left: 16px;
    flex-direction: column;
    overflow: hidden;
}
.css-2wqymv {
    font-size: 17px;
    font-weight: 600;
    color: rgba(0, 0, 0, 0.7);
    line-height: 22px;
    max-width: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    margin: 0px;
    overflow: hidden;
}
.css-1igmekv {
    font-size: 12px;
    color: #000;
    font-style: italic;
}
.css-gvoll6 {
    display: flex;
}
.css-1dvicdl {
    display: flex;
    margin-right: 16px;
    padding-right: 16px;
    flex: 1 1 0%;
    border-right: 1px solid rgb(224, 224, 224);
}
.css-xvbwhb {
    width: 24px;
    height: 24px;
    margin-right: 8px;
    align-self: center;
}
.css-dbnc6v {
    font-size: 12px;
    line-height: 16px;
    font-weight: 400;
    color: #000;
    margin: 0px;
}
.css-oh1q65 {
    font-size: 14px;
    font-weight: 600;
    color: rgba(0, 0, 0, 0.7);
    letter-spacing: 0px;
    line-height: 20px;
    margin: 0px;
}
.css-1dvicdl:last-child {
    margin-right: 0px;
    padding-right: 0px;
    border-right: 0px;
}
.css-1dvicdl {
    display: flex;
    margin-right: 16px;
    padding-right: 16px;
    flex: 1 1 0%;
    border-right: 1px solid rgb(224, 224, 224);
}

/* background top */
.css-1q0b0je-unf-card {
    display: block;
    position: relative;
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(49, 53, 59, 0.12) 0px 1px 6px 0px;
    background-image: url(https://images.all-free-download.com/images/graphicthumb/transparent_bubbles_with_background_vector_541557.jpg);
    background-size: cover;
    margin: 16px 0px;
    padding: 16px;
    overflow: hidden;
    background-position: center top;
    border-radius: 4px !important;
}

/* tabs */
/**/
.menuuu{
  color: #2879fe;
  padding:10px;
}

.mm1{
  border-bottom: 3px solid #2879fe;
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
  border-bottom: 3px solid rgba(27, 32, 38, 0.09);
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

/* menu */
.css-dashboard-list {
    padding: 10px;
    list-style: none;
    margin: 0px -16px 0px !important;
}
.css-dashboard-list .css-dashboard-list-item {
    display: flex;
    position: relative;
    margin-left: 16px;
    -webkit-box-align: center;
    align-items: center;
    padding: 16px 16px 16px 0px;
    border-bottom: 0.5px solid rgb(224, 224, 224);
}
.css-dashboard-list .css-dashboard-container {
    display: flex;
    flex-direction: column;
    padding-right: 8px;
    text-overflow: ellipsis;
    flex: 1 1 0%;
    overflow: hidden;
}
.css-dashboard-list .css-dashboard-text--two-lines {
    margin: 0px;
  font-weight: 400;
}
.css-dashboard-list .css-dashboard-text {
    color: #2879fe;
    font-size: 1rem;
    line-height: 16px;
    white-space: nowrap;
    text-overflow: ellipsis;
    margin: 8px 0px;
    overflow: hidden;
}
.css-dashboard-list .css-dashboard-description {
    margin-top: 4px;
    font-size: 1rem;
    line-height: 20px;
    color: #000;
    max-height: 44px;
}
.css-dashboard-list .css-dashboard-action {
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    min-width: 8px;
    min-height: 13px;
    color: rgb(66, 181, 73);
    font-size: 1rem;
    line-height: 16px;
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 168px;
    display: inline-block;
    padding: 2px 0px 4px;
    overflow: hidden;
}
</style>
<div style="margin-top: 60px"></div>
<div class="unf-card css-1q0b0je-unf-card">
    <div class="css-xs3fld">
        <div role="presentation" class="css-1kukc4r">
            <img class="css-1mf51g1" src="<?php echo get_photo(user_id()) ?>" alt="profile">
            <div class="css-1c2mwzn">
                <div class="css-2wqymv"><?php echo ucwords($user->fullname) ?></div><span class="css-1igmekv">Personal Account</span></div>
        </div>
    </div>
</div>

<div class="css-xo9ljf">
<div class="unf-card css-1tumtwp-unf-card">
    <div class="css-gvoll6">
        <div role="presentation" class="css-1dvicdl">
            <i class="icon-e-54 css-xvbwhb" style="font-size: 24px"></i>
            <div>
                <div class="css-dbnc6v">DompetGoo</div>
                <div class="css-oh1q65"><?php echo number_rp($user->saldo) ?></div></div>
        </div>
        <div role="presentation" class="css-1dvicdl">
            <i class="icon-f-56 css-xvbwhb" style="font-size: 24px"></i>
            <div>
                <div class="css-dbnc6v">Kartu Promo</div>
                <div class="css-oh1q65">0 Kartu</div></div>
        </div>
    </div>
</div>
</div>

  <div class="row" style="margin: 0px; padding: 0px 0px;color: #2879fe;">
    <div class="col-4 col-md-4 text-center mm1">
        <span>Menu Transaksi</span>
    </div>
    <div class="col-4 col-md-4 text-center mm2">
        <span>Data Pribadi</span>
    </div>
  </div>
<ul class="css-dashboard-list">
    <li>
        <a href="<?php echo site_url('dashboard/sell') ?>" class="css-dashboard-list-item">
            <div style="padding-left: 0px;" class="css-dashboard-container">
                <div class="css-dashboard-text css-dashboard-text--two-lines">Product Jual</div>
                <div class="css-dashboard-description">Semua Product yang anda jual</div>
            </div>
            <i class="icon-g-03"></i>
        </a>
    </li>
    <li>
        <a href="javascript:void(0)" class="css-dashboard-list-item">
            <div style="padding-left: 0px;" class="css-dashboard-container">
                <div class="css-dashboard-text css-dashboard-text--two-lines">Product</div>
                <div class="css-dashboard-description">Semua Product yang anda jual</div>
            </div>
            <i class="icon-g-03"></i>
        </a>
    </li>
    <li>
        <a href="javascript:void(0)" class="css-dashboard-list-item">
            <div style="padding-left: 0px;" class="css-dashboard-container">
                <div class="css-dashboard-text css-dashboard-text--two-lines">Product</div>
                <div class="css-dashboard-description">Semua Product yang anda jual</div>
            </div>
            <i class="icon-g-03"></i>
        </a>
    </li>
</ul>