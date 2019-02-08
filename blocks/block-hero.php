<div class="hero_wrapper<?php if( $carousel ) { ?> hero_carousel<?php } ?>">
  <?php if( $carousel ) { ?>
  <div class="hero owl-carousel" data-options='{"items":1,"dots":false,"loop":true,"autoplay":true,"autoplayTimeout":<?=$heroSpeed?>}'>
    <?php
      foreach($hero as $slide) {
    ?>
    <div class="hero_item">
      <figure class="hero_image focal-center">
	  <img src="<?=$slide["hero_image"]["url"]; ?>"  data-width="<?=$slide["hero_image"]["width"]?>" data-height="<?=$slide["hero_image"]["height"]?>">
      </figure>
      <div class="hero_content">
        <div class="row">
          <div class="col_xl_8 push_xl_1">
            <div class="hero_copy">
              <?=wpautop($slide["hero_copy"])?>
            </div>
          </div>
        </div>
        <?php if( $slide["hero_link"] ) { ?>
        <div class="row">
          <div class="col_xl_8 push_xl_1">
            <a href="<?=$slide["hero_link"]["url"]?>" class="hero_cta"><?=$slide["hero_link"]["title"] ? $slide["hero_link"]["title"] : "Read More"?></a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
  <script>
		jQuery(function(){
		function center() {
			var images = jQuery(".focal-center img");
			var $window = jQuery(".hero_carousel");
			var windowWidth = $window.width();
			var windowHeight = $window.height();
			var windowRatio = windowWidth / windowHeight;

			images.each(function(){
				var $this = jQuery(this);
				var width = parseFloat($this.data("width"));
				var height = parseFloat($this.data("height"));
				var ratio = width / height;

				if( windowRatio > ratio ) {
					var newHeight = (windowWidth / ratio);
					var newTop = (newHeight - windowHeight) / 2;

					if( newTop > 0 ) {
						newTop *= -1;
					}
					$this.css({ height: newHeight, width: windowWidth, left: 0, top: newTop });
				} else {
					var newWidth = (windowHeight * ratio);
					var newLeft = (newWidth - windowWidth) / 2;

					if( newLeft > 0 ) {
						newLeft *= -1;
					}
					$this.css({ height: windowHeight, width: newWidth, top: 0, left: newLeft });
				}
			});
		}
		center();
		jQuery(window).on("resize.blockHero", center);
		});
	</script>
  <div class="hero_scroll" style>
    <div class="row">
      <a href="#main">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99.66 27.51"><title>Scroll</title><path d="M49.83,27.51a3.47,3.47,0,0,1-1.41-.3L2.08,6.7A3.5,3.5,0,0,1,4.92.3L49.83,20.18,94.75.3a3.5,3.5,0,0,1,2.83,6.4L51.25,27.21A3.52,3.52,0,0,1,49.83,27.51Z"/></svg>
      </a>
    </div>
  </div>
<?php } else { ?>
  <div class="hero">
    <div class="hero_item_sm">
      <div class="hero_item_sm_inner" data-background="<?=$hero["sizes"]["hero-image-sm"]; ?>">
        <figure class="hero_image">
          <img src="<?=$hero["sizes"]["hero-image-sm"]; ?>">
        </figure>
      </div>
    </div>
  </div>
<?php } ?>
</div>
