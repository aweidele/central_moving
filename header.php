<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
  <title><?php
  if (is_front_page()) {
    echo get_bloginfo('name');
    if (get_bloginfo('description')!="") { echo " | ".get_bloginfo('description'); }
  } else {
    wp_title ( ' | ', true,'right' );
    echo get_bloginfo('name');
} ?></title>
<?php
  wp_head();

  // Adding body classes
  $body_classes = [get_post_type()];
  if( is_front_page() ) {
    $body_classes[] = "front_page";
  }
  $body_classes[] = $post->post_name;
  if( is_user_logged_in() ) {
    $body_classes[] = "loggedin";
  }
?>
</head>
<body class="<?=implode($body_classes, " ")?>">
  <figure class="site_logo"><svg id="site_logo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 121.72 144"><path class="logo_path" d="M121.72,110.28H0V0H121.72ZM2.25,108H119.47V2.25H2.25Zm111.32-5.91H8.16v-94H113.57ZM10.41,99.87h100.9V10.41H10.41Zm2,15.26V144H31.84V115.13Zm77.47,0V144h19.43V115.13ZM37.57,15.34V56.25h68.82V15.34ZM68.82,63.15V94.94h37.56V63.15Zm-44.44,0V94.94H61.93V63.15Z"/></svg></figure>
  <div class="page_wrapper">
    <header class="header">
      <div class="row space_between align_center">
        <div class="col">
          <h1 class="header_logo">
            <a href="<?php echo get_home_url(); ?>">
              <svg viewBox="0 0 121.72 144"><use xlink:href="#site_logo"></use></svg>
              <span class="header_logo_title">Central Moving & Storage</span>
            </a>
          </h1>
        </div>
        <div class="col">
          <div class="header_nav_wrapper">
            <button class="header_nav_button" id="header_nav_button"><span>Menu</span></button>
            <div class="header_nav_menu">
              <div class="row flex-end">
                <div class="col_sm_2 col_md_4 col_lg_11 col_xl_6">
                  <div class="main_nav_wrapper">
                    <h2>Exceptional Service Since 1987</h2>
                    <nav class="main_nav">
                      <?php
                        wp_nav_menu(
                          array(
                            'theme_location' => 'primary-menu',
                            'walker' => new CM_Walker()
                          )
                        ); ?>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
