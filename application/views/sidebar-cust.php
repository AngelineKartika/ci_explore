<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="<?=base_url()?>Home">
            <img src="<?=base_url();?>asset/images/icon/explore.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">


            <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-file"></i>Reservation</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                          <a href="<?=base_url()?>Order/belumCust">Current Reservation</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>Order/sudahCust">Finished Reservation</a>
                        </li>

                    </ul>
                </li>
                
            </ul>
        </nav>
    </div>
</aside>
