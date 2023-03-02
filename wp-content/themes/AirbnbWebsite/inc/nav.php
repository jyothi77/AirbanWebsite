<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-navfirst">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
          <div class="d-flex">
            <div>
            <img src="<?php echo ot_get_option('nav_nav_logo'); ?>" class="img-fluid" alt="nav-p1" />
          </div>
          <div class="brand">
            airbnb</div>
          </div>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto nav-list">
            <?php while (have_rows('menu',53)) : the_row(); ?>
            <li class="nav-item active list-item">
              <a class="nav-link" href="#"
                ><?php echo get_sub_field('menu_name',53);?><span class="sr-only">(current)</span></a
              >
            </li>
            <!-- <li class="nav-item  list-item">
              <a class="nav-link" href="#"><?php //echo get_sub_field('');?>Experiences</a>
            </li>
            <li class="nav-item  list-item">
              <a class="nav-link" href="#"><?php //echo get_sub_field('');?> Online Experiences</a>
            </li> -->
            <?php endwhile;?>
          </ul>
          <ul class="navbar-nav ml-5 list-item4">
          <?php    while (have_rows('menu_icon',53)) : the_row(); ?>
            <li class="nav-item  list-item5">
              <a class="nav-link" href="#"> <?php echo get_sub_field('menu_names',53);?></a>
            </li>
            <li class="nav-item  list-item5">
              <a class="nav-link" href="#">
                <img
                  src="<?php echo get_sub_field('menu_icons1',53);?>"
                  class="img-fluid"
                  alt="nav p-2"
                />
              </a>
            </li>
             <li class="nav-item active list-item5">
            <div class="">
                <button class="btn b2" type="button" data-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex">
                        <div class="px-3 n1">
                            <img
                                 src="<?php echo get_sub_field('menu_icons2',53);?>"
                                  class="img-fluid"
                                alt="bt-p1"
                                 />
                                </div>
                        <div>
                            <img
                             src="<?php echo get_sub_field('menu_icons3',53);?>"
                            class="img-fluid"
                           alt="bt-p1"
                              />
                        </div>
                    </div>
                </button>
                <div class="position-relative">
                
                     <div class="dropdown-menu drop1 drop2">
                     <?php echo get_sub_field('mini_dropdown_name',53);?>
                     <!--  <a class="dropdown-item" href="#">Sign Up</a>
                      <a class="dropdown-item" href="#">Log in</a>
                      <a class="dropdown-item" href="#">Host your home</a>
                      <a class="dropdown-item" href="#">Host an experience</a>
                      <a class="dropdown-item" href="#">Help</a> -->
                    </div>
                 </div>
                </div>
            </li>
            <?php endwhile;?>
            </ul>
        </div>
        
      </div>
    </nav>