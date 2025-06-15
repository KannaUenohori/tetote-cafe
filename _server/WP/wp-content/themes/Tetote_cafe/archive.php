<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
global $home_url;
global $template_url;

get_header();
?>


<main class="mt-subpage" data-midnight="green">
  <div class="bg-green subpage">
    <div class="breadcrumb-block breadcrumb-green outer-block">
      <div class="inner-block">
        <ul class="breadcrumb-list">
          <li><a href="<?php echo $home_url; ?>/">Top</a></li>
          <li>News</li>
        </ul>
      </div>
    </div>

    <div class="news outer-block">
      <div class="inner-block">
        <div class="c-title">
          <div class="en">News</div>
          <div class="jp">お知らせ</div>
        </div>
        <div class="news-content news-page">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="news-article">
                <?php
                $img_url = get_the_post_thumbnail_url();
                if (!$img_url) {
                  $img_url = $template_url . '/image/news/no_image_article.png';
                }
                ?>
                <a href="<?php the_permalink(); ?>">
                  <img class="article-img" src="<?php echo $img_url; ?>" alt="">
                  <div class="article">
                    <div class="date"><?php the_time('Y.m.d'); ?></div>
                    <div class="title"><?php the_title(); ?></div>
                    <p><?php the_content(); ?></p>
                    <img src="<?php echo $template_url; ?>/image/home/news_arrow.png" alt="" class="arrow">
                  </div>
                </a>
              </div>
          <?php endwhile;
          endif; ?>
        </div>

      </div>

      <?php
      set_query_var('paging_query', $wp_query);
      get_template_part('paging');
      ?>

      <div class="prev" <?php {
                          echo 'style="border:none"';
                        } ?>>
      </div>
    </div>
  </div>
</main>


<?php
get_footer();
