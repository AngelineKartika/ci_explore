<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="">
            <img src="<?=base_url();?>asset/images/icon/explore.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Master Data</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                          <a href="<?=base_url()?>Pengguna">User</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>Admin">Admin</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>Tourguide">Tourguide</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>Customer">Customer</a>
                        </li>
                        <li>
                          <a href="<?=base_url()?>Kota">City</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>Destinasi">Destination</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>Promo">Promo</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>Tour">Tour</a>
                        </li>
                    </ul>
                </li>

                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-envelope"></i>Messages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                          <a href="<?=base_url()?>Pesan">Unreply Messages</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>Pesan/sudah">Replied Messages</a>
                        </li>

                    </ul>
                </li>

                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-file"></i>Reservation</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                          <a href="<?=base_url()?>Order/belum">Current Reservation</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>Order/sudah">Finished Reservation</a>
                        </li>

                    </ul>
                </li>





                
            </ul>
        </nav>
    </div>
</aside>
