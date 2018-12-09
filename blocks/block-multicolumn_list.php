<?php
$list = explode("\n", $block["list"]);
?>
<section class="multicolumn_list">
  <div class="row">
    <div class="col_11 col_xl_9 push_xl_1">
      <ul class="multicolumn_list_list list_<?=$block["columns"]?>_column">
        <?php foreach($list as $item) { ?>
        <li><?=$item?></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</section>
