<?php
/**
 * Template Name: Services List
 */


get_header(); ?>

    <div id="main-content" class="main-content container">
        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
                <div class="row">
                    <div class="span9">
                        <div class="row">
                            <div class="navbar-nav navbar">
                                <div class="navbar-inner">
                                    <ul class="nav nav-pills" id="service-nav">
                                        <?php
                                        $args = array('posts_per_page' => -1, 'post_type' => 'my_services', 'orderby'=>'menu_order');
                                        $firstTitles = 'active';
                                        $myposts = get_posts($args);
                                        foreach ($myposts as $post) : setup_postdata($post); ?>
                                            <li class="<?php echo $firstTitles?>">
                                                <a data-id="<?php echo $post->ID ?>"
                                                   href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </li>

                                        <?php
                                        $firstTitles='';
                                        endforeach;
                                        wp_reset_postdata();
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="service-content">
                        <?php
                        $first = 'active';
                        $args = array('post_type' => 'my_services', 'posts_per_page' => 10, 'orderby'=>'menu_order');
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            echo '<div class="row">';
                            echo '<div class="span3">';
                            echo '<div class="'.$first.'" data-id="'.$post->ID .'">';
                            the_title('<h3>','</h3>');
                            echo '<div class="entry-content">';
                            the_content();
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            $first='';
                        endwhile;

                        ?>
                    </div>
                    </div>
                </div>
            </div>
            <!-- #content -->
        </div>
        <!-- #primary -->
        <?php get_sidebar('content'); ?>
    </div><!-- #main-content -->

<?php
get_sidebar();
get_footer();