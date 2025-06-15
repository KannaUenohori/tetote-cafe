<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<main class="mt-subpage">
      <div class="subpage">
        <div class="breadcrumb-block breadcrumb-white outer-block">
          <div class="inner-block">
            <ul class="breadcrumb-list">
              <li><a href="[home_url]/">Top</a></li>
              <li>404 not found</li>
            </ul>
          </div>
        </div>

        <div class="notfound-block outer-block">
          <div class="inner-block">
            <div class="c-title">
              <div class="en">404 not found</div>
            </div>

            <div class="intro">
              <p class="text">お探しのページは見つかりませんでした。<br>
              お探しのページは一時的にアクセスできない状態にあるか、<br>
              移動もしくは削除された可能性があります。
            </p>
              <a href="tel:03-1234-5678" class="tel"><span class="TEL">TEL</span>03-1234-5678</a>
              <p class="time">平日 8:00-18:00 / 土日・祝日 9:00-17:00</p>
            </div>

            <div class="contact-subpage">
              <form>  
                <div class="button-block">
                  <button type="submit" class="c-button"><a href="[home_url]/">戻る</a></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php
get_footer();
