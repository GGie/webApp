<ul class="nav nav-tabs tt-tabs-default">
  <li class="nav-item ">
    <a class="nav-link <?php if ($this->uri->segment(2) == 'account_setting') { echo 'active'; } ?>" href="<?php echo base_url('dashboard/account_setting') ?>">Detail Info</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if ($this->uri->segment(2) == 'location_list') { echo 'active'; } ?>" href="<?php echo base_url('dashboard/location_list') ?>">Lokasi Saya</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if ($this->uri->segment(2) == 'rekening_list') { echo 'active'; } ?>" href="<?php echo base_url('dashboard/rekening_list') ?>">Rekening Bank</a>
  </li>
</ul>