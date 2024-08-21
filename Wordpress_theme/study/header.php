<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <title>Blog By Harshit</title>
    <?php wp_head(); ?>
  </head>

<body <?php body_class();?> class="mintus" >

<header>
      <div class="logo">
        <strong><a href="#">
            <?php  
        
            if(has_custom_logo()){
                the_custom_logo();
            }else{
                echo '<h3>' .get_bloginfo('name'). '</h3>';
            }
            
            ?> </a>
        </strong>
    </div>

      <nav >
        <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'nav-menu-list',
            ));
            ?>
         
         <span class="material-symbols-outlined" id="close"> close </span>
     
      </nav>
      <div id="mobile">
        <span class="material-symbols-outlined" id="menu">menu</span>
      </div> 
    </header>