<?php
global $home_url;
global $template_url;

get_header();



?>

<main class="mt-subpage">
      <div class="bg-green" data-midnight="green">
        <div class="breadcrumb-block breadcrumb-green outer-block">
          <div class="inner-block">
            <ul class="breadcrumb-list">
              <li><a href="<?php echo $home_url; ?>/">Top</a></li>
              <li><a href="<?php echo $home_url; ?>/news/">News</a></li>
              <li><?php the_title(); ?></li>
            </ul>
          </div>
        </div>
  
        <div class="news-single outer-block">
          <div class="inner-block">
            <div class="news-article shadow-none">
              <div class="date"><?php the_time('Y.m.d'); ?></div>
              <div class="title"><?php the_title(); ?></div>
              <?php $img_url = get_the_post_thumbnail_url(); ?>
              <?php if($img_url): ?>
              <img class="article_img" src="<?php echo $img_url; ?>" alt="<?php the_title(); ?>">
              <?php endif; ?>
              <p> <?php echo the_content(); ?></p>
            </div>
            <div class="button-block">
              <a class="c-button green-button" href="<?php echo $home_url; ?>/news/">All News</a>
            </div>
          </div>
        </div>
      </div>
    </main>




<?php get_footer(); ?>