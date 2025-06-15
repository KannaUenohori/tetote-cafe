      <?php
        global $wp_rewrite;
        $paginate_base = get_pagenum_link(1);
        if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
        $paginate_format = '';
        $paginate_base = add_query_arg('paged','%#%');
        }
        else{
        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
        user_trailingslashit('page/%#%/','paged');;
        $paginate_base .= '%_%';
        }

        $template_url = get_bloginfo('template_directory');

        $page_links =  paginate_links(array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $paging_query->max_num_pages,
        'end_size' => 1,
        'mid_size' => 2,
        'current' => ($paged ? $paged : 1),
        'prev_text' => "<img src='$template_url/image/news/doubleArrow_Left.svg' alt='' class='arrow'>",
        'next_text' => "<img src='$template_url/image/news/doubleArrow_Right.svg' alt='' class='arrow'>",
        ));
        
        if ( strcmp( $page_links, "" ) != 0 ) :
      ?>
        <div class="page-area">
          <?php print $page_links; ?>
        </div><!-- /paging-area -->
      <?php endif; ?>