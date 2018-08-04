
<div class="block_contact" itemscope itemtype="http://schema.org/Organization">
  <p class="schema_name" itemprop="name"><?=$block["schema_organization_name"]?></p>
  <p class="address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <span itemprop="streetAddress">
      <?php if($block["address_line_1"]) { ?>
      <span><?=$block["address_line_1"]?></span><br>
      <?php } ?>
      <?php if($block["address_line_2"]) { ?>
      <span><?=$block["address_line_2"]?></span><br>
      <?php } ?>
    </span>
    <?php if($block["city"]) { ?>
    <span itemprop="addressLocality"><?=$block["city"]?>, </span>
    <?php } ?>
    <?php if($block["state"]) { ?>
    <span itemprop="addressRegion"><?=$block["state"]?></span>
    <?php } ?>
    <?php if($block["zip"]) { ?>
    <span itemprop="postalCode"><?=$block["zip"]?></span>
    <?php } ?>
  </p>
  <?php if($block["phone_1"]) { ?>
  <p class="phone"><a href="tel:<?=str_replace(array("(",")"," ","-"),"",$block["phone_1"])?>" itemprop="telephone"><?=$block["phone_1"]?></a></p>
  <?php } ?>
  <?php if($block["phone_2"]) { ?>
  <p class="phone"><a href="tel:<?=str_replace(array("(",")"," ","-"),"",$block["phone_2"])?>" itemprop="telephone"><?=$block["phone_2"]?></a></p>
  <?php } ?>
  <?php if($block["email"]) { ?>
  <p class="email"><a href="mainto:<?=$block["email"]?>" itemprop="email"><?=$block["email"]?></a></p>
  <?php } ?>
</div>
