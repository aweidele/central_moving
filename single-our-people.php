<?php
  get_header();

  // Determine next and previous links
  $allBios = get_posts([
    "post_type" => "our-people"
  ]);
  $thisBio = $post->ID;
  foreach( $allBios as $i => $bio ) {
    if($bio->ID == $thisBio) {
      break;
    }
  }


  $totalBios = sizeof($allBios) - 1;
  $prev = $i - 1;
  $next = $i + 1;

  if( $prev < 0 ) {
    $prev = $totalBios;
  } else if( $next > $totalBios) {
    $next = 0;
  }

  $nextBio = get_permalink($allBios[$next]->ID);
  $prevBio = get_permalink($allBios[$prev]->ID);

  $about = get_permalink(34);

  if( have_posts() ) : while( have_posts() ) : the_post();
    $fields = get_fields();
    $thumbnail = get_the_post_thumbnail($post->ID, "bio_thumb");
?>
  <main class="main our_people_main" itemscope itemtype="http://schema.org/Person">
    <div class="row">
      <div class="col_md_4 col_lg_7 col_xl_6 push_xl_1">
        <nav class="breadcrumb">
          <a href="<?=$about?>">About</a>
          <a href="<?=rtrim($about,"/")?>#our-people">Bios</a>
        </nav>
      </div>
      <div class="col_md_4 col_lg_4 col_xl_3">
        <nav class="our_people_nav">
          <a href="<?=$prevBio?>">Prev</a>
          <a href="<?=$nextBio?>">Next</a>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col_md_4 col_lg_7 col_xl_6 push_xl_1">
        <header class="our_people_header">
          <h1 itemprop="name"><?php the_title(); ?></h1>
          <div class="our_people_title" itemprop="jobTitle"><?=$fields["title"]?></div>
        </header>
        <section class="our_people_bio" itemprop="disambiguatingDescription">
          <div class="our_people_intro">
            <?=wpautop($fields["intro_text"])?>
          </div>
          <?php the_content(); ?>
        </section>
      </div>
      <div class="col_md_4 col_lg_4 col_xl_3">
        <figure class="our_people_thumb">
          <?=$thumbnail?>
        </figure>
        <div class="our_people_info">

          <?php if($fields["email"] || $fields["main_phone"] || $fields["direct_phone"]) { ?>
          <dl class="our_people_contact">
            <?php if($fields["email"]) { ?>

            <dt>Email</dt>
            <dd><a href="mailto:<?=$fields["email"]?>" itemprop="email"><?=$fields["email"]?></a></dd>

            <?php }
            if($fields["main_phone"]) { ?>

            <dt>Main</dt>
            <dd><a href="tel:<?=str_replace(["(",")"," ","-"],"",$fields["main_phone"])?>" itemprop="telephone"><?=$fields["main_phone"]?></a></dd>

            <?php }
            if($fields["direct_phone"]) { ?>

            <dt>Direct</dt>
            <dd><a href="tel:<?=str_replace(["(",")"," ","-"],"",$fields["direct_phone"])?>" itemprop="telephone"><?=$fields["direct_phone"]?></a></dd>

            <?php } ?>
          </dl>
          <?php }
          if($fields["education"]) { ?>

          <dl>
            <dt>Education</dt>
            <dd><?=nl2br($fields["education"])?></dd>
          </dl>

          <?php }
          if($fields["affiliations"]) { ?>

          <dl>
            <dt>Affiliations</dt>
            <dd><?=nl2br($fields["affiliations"])?></dd>
          </dl>

          <?php }
          if($fields["connect"]) { ?>

          <ul>
            <?php foreach($fields["connect"] as $connect) { ?>
            <li><?=$connect["connect_text"]?> <a href="<?=$connect["link"]["url"]?>" target="_blank" itemprop="url"><?=$connect["link"]["title"]?></a></li>
            <?php } ?>
          </ul>

          <?php } ?>

        </div>
      </div>
    </div>
  </main>
<?php
  endwhile;
  endif;
  get_footer();
