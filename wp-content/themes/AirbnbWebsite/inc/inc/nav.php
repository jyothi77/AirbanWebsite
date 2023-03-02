<nav class="navbar navbar-expand-lg navbar-light nav-head fixed-top scrolled" id="top">
        <div class="container">
            <a class="navbar-brand logo-text" href="<?php echo get_site_url(); ?>">Logo</a>
            <button class="navbar-toggler nav-togger border-0 collapsed p-0" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-1" onclick="openNav()"></span>
                <span onclick="openNav()"> </span>
            </button>
            <div id="mySidenav" class="side-navbar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/x-img.svg"
                        alt=""></a>
                <ul class="navbar-nav navv ml-auto">
                <?php
                        $i = 1;
                        while (have_rows('menus', 64)) : the_row(); ?>
                          <li class="nav-item <?php if ($page == 'home' && $i == 1) {
                                                    echo 'active';
                                                } ?><?php if ($page == 'news' && $i == 2) {
                                                                    echo 'active';
                                                                } ?>
                                                                <?php if ($page == 'contact' && $i == 3) {
                                                    echo 'active';
                                                } ?>">
                                                                <a href="<?php echo get_sub_field('menu_link', 64); ?>" class="nav-link page-link1 smooth-scroll"<?php if(get_sub_field('menu_name', 64)=="Contact"){ ?> onclick='closeNav()'<?php }?> >
                                                                <?php echo get_sub_field('menu_name', 64); ?>
                                                            </a> 
                             
                          </li>

                      <?php $i++;
                        endwhile; ?>
                </ul>
            </div>


            <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> -->
            <div class="collapse navbar-collapse d-none d-lg-block" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <?php
                        $i = 1;
                        while (have_rows('menus', 64)) : the_row(); ?>
                          <li class="nav-item <?php if ($page == 'home' && $i == 1) {
                                                    echo 'active';
                                                } ?><?php if ($page == 'news' && $i == 2) {
                                                                    echo 'active';
                                                                } ?>
                                                                <?php if ($page == 'contact' && $i == 3) {
                                                    echo 'active';
                                                } ?>">
                                                                <a href="<?php echo get_sub_field('menu_link', 64); ?>" class="nav-link page-link smooth-scroll" <?php if(get_sub_field('menu_name', 64)=="Contact"){ ?> onclick='closeNav()'<?php }?>>
                                                                <?php echo get_sub_field('menu_name', 64); ?>
                                                            </a> 
                             
                          </li>

                      <?php $i++;
                        endwhile; ?>
                   
                </ul>
            </div>
        </div>
    </nav>
