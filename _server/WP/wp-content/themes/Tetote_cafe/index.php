<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage 
 * @since 1.0.0
 */
global $home_url;
global $template_url;

//新着記事
//$args = array(
//  'post_type' => 'post',
//  'post_status' => 'publish',
//  'posts_per_page' => 9,
//  'paged' => get_query_var('paged'),
//  'order' => 'DESC',
//  'orderby' => 'date',
//);
//$new_query = new WP_Query($args);

get_header();
?>

<main>
  <div class="mv">
    <img class="pcheader-mv" src="<?php echo $template_url; ?>/image/home/mv.jpg" alt="" srcset="">
    <img class="spheader-mv" src="<?php echo $template_url; ?>/image/home/sp_header_mv.jpg" alt="" srcset="">
  </div>

  <div class="mv-block outer-block">
    <div class="inner-block">
      <div class="concept">
        <div class="title">Concept</div>
        <h2 class="main-title">五感で味わうコーヒーと<br>身体を整える美食膳</h2>
        <p class="sub-title">Tetote Cafeでは、<br>
          丁寧に自家焙煎したコーヒー豆で注ぐ香り高い<br class="spbr">コーヒーや <br class="pcbr">手作業で愛情込めて作られた<br class="spbr">地域の無農薬食材を使い<br class="pcbr">内側から悦ぶ美食膳を<br class="spbr">お届けします。<br>
          <br>忙しない都会の空気から抜け出し<br>自分を整えに来ませんか。
        </p>
      </div>
      <div class="concept-img">
        <img class="pc-concept" src="<?php echo $template_url; ?>/image/home/concept-image.jpg" alt="">
        <img class="sp-concept" src="<?php echo $template_url; ?>/image/home/sp_concept_img.png" alt="">
      </div>
    </div>
  </div>

  <div class="news-block outer-block" data-midnight="green">
    <div class="inner-block">
      <div class="c-title">
        <div class="en">News</div>
        <div class="jp">お知らせ</div>
      </div>

      <div class="news-slick">
        <?php
        $args = array(
          'post_type' => array('news'),
          'post_status' => 'publish',
          'posts_per_page' => 3,
        );
        $news_query = new WP_Query($args);
        ?>
        <?php if ($news_query->have_posts()) : ?>
          <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <div class="news-article">
              <?php
              $img_url = get_the_post_thumbnail_url();
              if (!$img_url) {
                $img_url = $template_url . '/image/news/no_image_article.png';
              }
              ?>
              <a href="<?= the_permalink() ?>">
                <img class="article-img" src="<?php echo $img_url; ?>" alt="">
                <div class="article">
                  <div class="date"><?php the_time('Y.m.d'); ?></div>
                  <div class="title"><?php the_title(); ?></div>
                  <p><?php the_excerpt(); ?></p>
                  <img src="<?php echo $template_url; ?>/image/home/news_arrow.png" alt="" class="arrow">
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php wp_reset_postdata(); ?>

    </div>
    <div class="button-block">
      <a href="<?php echo $home_url; ?>/news/" class="c-button green-button">View All</a>
    </div>
  </div>
  </div>

  <div class="menu-block outer-block">
    <div class="inner-block">
      <div class="c-title">
        <div class="en">Menu</div>
        <div class="jp">メニュー</div>
        <div class="line anim"></div>
      </div>
      <div class="menu-content">
        <div class="food">
          <div class="menu-img">
            <img src="<?php echo $template_url; ?>/image/home/food.jpg" alt="">
          </div>
          <div class="title">Food</div>
          <p class="text">地域の採れたて野菜をふんだんに使った<br class=pcbr>オープンサンドやファラフェルサンドが人気です。<br class=pcbr>他にも、日替わりランチなどもあります。
          </p>
        </div>
        <div class="drink">
          <div class="menu-img">
            <img src="<?php echo $template_url; ?>/image/home/drink.jpg" alt="">
          </div>
          <div class="title">Drink
          </div>
          <p class="text">コーヒー豆の焙煎の香りを感じながら味わうコーヒーや、<br class=pcbr>自家製のレモネード、地域の野菜や果物を使った日替わり<br class=pcbr>スムージーもあります。
          </p>
        </div>
      </div>
      <div class="button-block">
        <a class="c-button brown-button" href="<?php echo $home_url; ?>/menu/">View All Menu</a>
      </div>
    </div>
  </div>

  <div class="info-block outer-block" data-midnight="green">
    <div class="inner-block">
      <div class="c-title">
        <div class="en">Shop Info</div>
        <div class="jp">店舗情報</div>
      </div>
      <div class="info-wrap">
        <ul class="info">
          <li class="information">
            <div class="title">
              <span>ADDRESS</span>
              <p>東京都中央区日本橋1-2-3 tetote building 1F <br>
                都営浅草線日本橋駅　出口D2から徒歩5分</p>
            </div>
          </li>
          <li class="information">
            <div class="title">
              <span>OPEN</span>
              <p>平日　　　　　8:00 ー 18:00<br>
                土日・祝日　　9:00 ー 17:00</p>
            </div>
          </li>
          <li class="information">
            <div class="title">
              <span>CALL</span>
              <a href="tel:03-1234-5678">
                <p>03-1234-5678</p>
              </a>
            </div>
          </li>
        </ul>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.2917250356704!2d139.7162302850517!3d35.645183561316486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b4cf379323f%3A0x9b56663808e4b98c!2z44ixVGV0b3Rl!5e0!3m2!1sja!2sjp!4v1714977043019!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="button-block">
        <a class="c-button green-button" href="<?php echo $home_url; ?>/shop-info/">View More</a>
      </div>
    </div>
  </div>
</main>


<?php
get_footer();
