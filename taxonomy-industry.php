<?php
  $firstURL = false;
  $redirect = false;
  if( have_posts() ) : while( have_posts() ) : the_post();
    $primary = get_field("primary_typology_link");
    if( $primary ) {
      $redirect = get_permalink($post->ID);
      break;
    }
    if( !$firstURL ) {
      $firstURL = get_permalink($post->ID);
    }

  endwhile;
  endif;

  if( !$redirect && $firstURL ) {
    $redirect = $firstURL;
  } else if( !$firstURL ) {
    $redirect = get_field('indexes', 'option')["case_studies"];
  }

  if($redirect) {
    header("Location: ".$redirect);
  } else {
    header("Location: ".get_home_url());
  }
