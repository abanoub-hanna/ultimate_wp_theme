<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
      <head>
      <meta charset="<?php bloginfo('charset'); ?>"/>
        <meta content='width=device-width, initial-scale=1' name='viewport'/>
          <title><?php bloginfo('name'); ?></title>

          <link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700,900&display=swap&subset=arabic" rel="stylesheet">          
          <link href='img/self/favicon.jpg' rel='icon' type='image/x-icon'/>
          <link href='https://learns7.com/' rel='canonical'/>
          <meta content='اعرف كل المنتجات وأسعارها وأرقام التواصل لكل الشركات والمؤسسات والمحلات فى مصر' name='description'/>
          <meta property='og:url' content='https://4ar3.com' />
          <meta property='og:site_name' content='موقع شارع' />
          <meta property='og:title' content='موقع شارع' />
          <meta property='og:type' content='website' />
          <meta property='og:description' content='اعرف كل المنتجات وأسعارها وأرقام التواصل لكل الشركات والمؤسسات والمحلات فى مصر' />
          <meta property='og:image' content='img/self/favicon.jpg' />
          <meta name="robots" content="index,follow" />

          <?php wp_head(); ?>
      </head>
      <body <?php body_class(); ?>>
        <!-- left menu -->
        <nav>
            <div class='sticky-col-1'>
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                <?php bloginfo( 'name' ); ?>
                <!-- <img src="img/self/favicon.jpg" alt="logo" width="40"> -->
                </a>
            </div>
            <div class="container">
            <?php wp_nav_menu(array(
                    'theme_location' => 'primary'
                )); ?>
            </div>
        </div>
    </nav>