
<div class="block_content">
  <p class="address">
    <?php if($block["address_line_1"]) { ?>
    <span><?=$block["address_line_1"]?></span><br>
    <?php } ?>
    <?php if($block["address_line_2"]) { ?>
    <span><?=$block["address_line_2"]?></span><br>
    <?php } ?>
    <?php if($block["city"]) { ?>
    <span>
      <span><?=$block["city"]?>, </span>
      <?php if($block["state"]) { ?>
      <span><?=$block["state"]?></span>
      <?php } ?>
      <?php if($block["zip"]) { ?>
      <span><?=$block["zip"]?></span>
      <?php } ?>
    </span>
    <?php } ?>
  </p>
  <?php if($block["phone_1"]) { ?>
  <p class="phone"><a href="tel:<?=str_replace(array("(",")"," ","-"),"",$block["phone_1"])?>"><?=$block["phone_1"]?></a></p>
  <?php } ?>
  <?php if($block["phone_2"]) { ?>
  <p class="phone"><a href="tel:<?=str_replace(array("(",")"," ","-"),"",$block["phone_2"])?>"><?=$block["phone_2"]?></a></p>
  <?php } ?>
  <?php if($block["email"]) { ?>
  <p class="email"><a href="mainto:<?=$block["email"]?>"><?=$block["email"]?></a></p>
  <?php } ?>
</div>
