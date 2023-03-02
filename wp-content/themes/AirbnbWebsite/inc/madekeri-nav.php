<nav class="navbar navbar-expand-lg navbar-light bg-light nav-1">
        <div class="container">
      <a class="navbar-brand n-1" href="#"
        ><img src="<?php echo ot_get_option('madekeri_nav_logo'); ?>" class="img-fluid" alt=""
      /></a>
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
        <ul class="navbar-nav mx-auto nav-2">
        <?php while (have_rows('menu_section3',53)) : the_row(); ?>
          <li class="nav-item active">
            <a class="nav-link nav-3" href="#"
              ><?php echo get_sub_field('menu3_name');?> <span class="sr-only">(current)</span></a
            >
          </li>
        
          <?php endwhile;?>
        </ul>
      
      <ul class="navbar-nav m-auto nav-4 ml-5">
      <?php while (have_rows('menu3_icons',53)) : the_row(); ?>
            <li class="nav-item active">
              <a class="nav-link nav-5" href="#"><?php echo get_sub_field('menu3_icons_name');?></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link  n-5" href="#">
                <img
                  src="<?php echo get_sub_field('menu3_icon');?>"
                  class="img-fluid vector"
                  alt="nav p-2"
                />
              </a>
            </li>
             <li class="nav-item active nav-5">
            <div class="">
                <button class="btn b2 br-1" type="button" data-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex">
                        <div class="px-3 n1">
                            <img
                                 src="<?php echo get_sub_field('menu3_icon2');?>"
                                  class="img-fluid"
                                alt="bt-p1"
                                 />
                                </div>
                        <div>
                            <img
                             src="<?php echo get_sub_field('menu3_icon3');?>"
                            class="img-fluid"
                           alt="bt-p1"
                              />
                        </div>
                    </div>
                </button>
             
                <div class="position-relative">
               
                     <div class="dropdown-menu drop1 drop2">
                   
                     <?php echo get_sub_field('mini_dropdown_name',53);?>
                      <!-- <a class="dropdown-item" href="#"></a> -->
                      <!-- <a class="dropdown-item" href="#">Log in</a>
                      <a class="dropdown-item" href="#">Host your home</a>
                      <a class="dropdown-item" href="#">Host an experience</a>
                      <a class="dropdown-item" href="#">Help</a> -->
                     
                    </div>
                 </div>
                </div>
            </li>
            <?php endwhile; ?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light n-6">
        <div class="container">
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto n-7">
    <?php while (have_rows('dropdown_menu3',53)) : the_row(); ?>
        <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle br-1 n-8" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
        <?php echo get_sub_field('dropdown3_tilte');?>
        </a>
        <div class="dropdown-menu  drop2">
        <?php echo get_sub_field('dropdown_subtilte');?>
          <!-- <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
       <!-- <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle br-1 n-8" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          type of place
        </a>
        <div class="dropdown-menu  drop2">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
<?php endwhile;?>
</ul>
      <ul class="navbar-nav mr-auto n-7">
      <?php while (have_rows('menu3_button',53)) : the_row(); ?>
      <li class="nav-item">
        <a class="nav-link n-8 br-1" href="#"><?php echo get_sub_field('menu3_button_name');?></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link n-8 br-1" href="#">Wifi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link n-8 br-1" href="#">kitchen</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link n-8 br-1" href="#">Air condition</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link n-8 br-1" href="#">Washing machine</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link n-8 br-1" href="#">iron</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link n-8 br-1" href="#">Dedicated Workspace</span></a>
      </li> -->
      <?php endwhile;?>
     
      <li class="nav-item">
        <a class="nav-link n-8 br-1" href="#">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/Group 12.png" class="img-fluid" alt=""> filters</span></a>
      </li>
      
      </ul>
    </div>
   
</nav>