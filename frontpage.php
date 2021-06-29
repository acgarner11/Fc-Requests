<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Wordpack Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Wordpack Theme
 * @since 1.0.0
 */

get_header(); ?>

<div class="text-center">
<div class="grid grid-cols-12 mt-20 md:max-w-xl lg:max-w-2xl mx-auto">
    <?php
    //start the repeater loop
    if (have_rows('repeater')):
        //Card start
        //Begin looping data
        while (have_rows('repeater')) : the_row();
            ?>

            <div class="col-span-12 md:col-span-6 lg:col-span-4  mx-10">
                <div>
                    <a href="<?php the_sub_field('link'); ?>">
                        <img class=""
                             src="<?php the_sub_field('image'); ?>"
                             alt="Icon"></a>
                    <p class="text-center mb-10"><?php the_sub_field('title'); ?></p>
                </div>
            </div>


        <?php


        endwhile;
    else:
        //no rows found
    endif;

    ?>


</div>
</div>


<?php
//get_footer();
?>


