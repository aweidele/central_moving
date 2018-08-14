<?php
  get_header();
  $fields = get_fields();
  $hero = $fields["homepage_hero"];
  include("blocks/block_hero.php");
?>

<main style="width: 100%; overflow: hidden;">

<pre><?php print_r($fields); ?></pre>
</main>
<?php get_footer(); ?>
