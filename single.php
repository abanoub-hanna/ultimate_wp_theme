<?php get_header(); ?>
    <!-- main content -->
    <main>
        <div class="breadcrumb">
            <a href="<?php echo home_url(); ?>">Home</a>
            <?php
            if ( is_category() ) {
				echo '&raquo; Category : ';
				single_cat_title();
			} elseif ( is_tag() ) {
				echo '&raquo; Tag : ';
				single_tag_title();
			} elseif ( is_author() ) {
				the_post();
				echo '&raquo; Author : ' . get_the_author();
				rewind_posts();
			} elseif ( is_day() ) {
				echo '&raquo; Daily Archives : ' . get_the_date();
			} elseif ( is_month() ) {
				echo '&raquo; Monthly Archives : ' . get_the_date('F Y');
			} elseif ( is_year() ) {
				echo '&raquo; Yearly Archives : ' . get_the_date('Y');
            } elseif ( is_front_page()){
                //do nothing
            } else {
				the_post();?>
                &raquo;
                <a href="<?php echo get_category_link( get_the_category($post->ID)[0] ) ?>"><?php echo get_the_category( $post->ID )[0]->name ?></a>
				&raquo;
				<?php the_title();
				rewind_posts();
            }
            ?>
        </div>
        <?php
        if (have_posts()):
            while (have_posts()): the_post();
        ?>
        <div class="post">
            <img src="<?php echo get_first_image(); ?>" alt="" />
            <h2><?php the_title(); ?></h2>
        </div><!-- /post -->
        <div class="post-content">
            <?php the_content(); ?>
        </div>
        <?php
        endwhile;
    else:
        echo '<h2>no content found</h2>';
    endif;
    ?>
        <div class='pagination'>
            <a class='prevpage' href='#prev'>الصفحة السابقة</a>
            <a class='nextpage' href='#next'>الصفحة التالية</a>
        </div>
    </main>
    <!-- right lists -->
    <div class="more-col">
            <div class="search-container" id='search-box'>
                <input type="search" name="search" id="search" placeholder="search">
            </div>
            <div class='sticky-col-2'>
                <footer>
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer'
                ) ); ?>
                <p>
                &copy; All Rights Reserved.
                </p>
                </footer>
        </div><!-- /sticky-col-2 -->
    </div>
<?php get_footer(); ?>