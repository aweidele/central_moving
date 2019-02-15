<section class="testimonial_in_content <?php if( sizeof($block["testimonials"]) > 1 ) { echo " owl-carousel"; } ?>" data-options='{"items":1,"loop":true,"animateIn": "fadeIn","animateOut": "fadeOut","autoplay":true,"autoplayTimeout":<?=$block["speed"]?>}'>
   <?php foreach($block["testimonials"] as $testimonial) { ?>
   <div>
	<blockquote>
		<?=nl2br($testimonial["testimonial"])?>
	</blockquote>
	<cite><?=$testimonial["attribution"]?></cite>
   </div>
   <?php } ?>
</section>
