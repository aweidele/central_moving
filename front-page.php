<?php
  get_header();
  $fields = get_fields();
  $hero = $fields["homepage_hero"];
  $heroSpeed = $fields["homepage_hero_speed"];
  include("blocks/block_hero.php");
?>

<main class="main">
<?php cm_blocks($fields["blocks"]); ?>
<pre><?php print_r($fields); ?></pre>
</main>
<?php get_footer(); ?>
