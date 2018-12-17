<?php
  get_header();
  $fields = get_fields();
  $hero = $fields["homepage_hero"];
  $heroSpeed = $fields["homepage_hero_speed"];
  $carousel = true;
  //$hero["mode"] = "carousel";
  include("blocks/block-hero.php");
?>

<main class="main" id="main">
<?php cm_blocks($fields["blocks"]); ?>
</main>
<?php get_footer(); ?>
