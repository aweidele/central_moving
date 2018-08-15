<?php
  $terms = get_terms([
      'taxonomy' => "industry",
      'hide_empty' => false,
  ]);
 ?>
 <pre><?php print_r($terms); ?></pre>
