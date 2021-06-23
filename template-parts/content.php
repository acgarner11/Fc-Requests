<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpack-theme
 */

?>


<div class="m-5 mt-40">
    <div class="grid grid-cols-12 lg:mx-10 ">
        <div class="col-span-12 md:col-span-9 xl:col-span-7">
            <?php wordpack_theme_post_thumbnail(); ?>
        </div>
    </div>


    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="grid grid-cols-12 lg:mx-10 ">
            <div class="col-span-12 md:col-span-9 xl:col-span-7">
                <header class="entry-header">
                    <?php
                    if (is_singular()) :
                        the_title('<h1 class="text-3xl mt-3 font-bold">', '</h1>');
                    else :
                        the_title('<h2 class=""><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                    endif;

                    if ('post' === get_post_type()) :
                        ?>
                        <div class="text-lg font-bold font-bold mb-10">
                            <?php
                            wordpack_theme_posted_on();
                            wordpack_theme_posted_by();
                            ?>
                        </div><!-- .entry-meta -->
                    <?php endif; ?>
                </header><!-- .entry-header -->
            </div>
        </div>

        <div class="grid grid-cols-12 lg:mx-10 ">
            <div class="col-span-12 md:col-span-9 xl:col-span-7">
                <div class="entry-content">
                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'wordpack-theme'),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post(get_the_title())
                        )
                    );

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'wordpack-theme'),
                            'after' => '</div>',
                        )
                    );
                    ?>
                </div><!-- .entry-content -->
            </div>
        </div>


        <footer class="entry-footer lg:mx-10">
            // <?php wordpack_theme_entry_footer(); ?>
        </footer><!-- .entry-footer -->

    </article><!-- #post-<?php the_ID(); ?> -->
</div>

