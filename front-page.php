<?php
  get_header();
  $fields = get_fields();
  $hero = $fields["homepage_hero"];
  $heroSpeed = $fields["homepage_hero_speed"];
  include("blocks/block-hero.php");
?>

<main class="main">
<?php cm_blocks($fields["blocks"]); ?>
</main>
<?php get_footer(); ?>
