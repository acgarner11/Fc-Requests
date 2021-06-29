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
<div class="grid grid-cols-12 mt-16 md:max-w-xl lg:max-w-2xl mx-auto md:gap-7 md:gap-y-9 w-60 md:w-auto lg:w-auto xl:w-auto">
    <?php
    //start the repeater loop
    if (have_rows('repeater')):
        //Card start
        //Begin looping data
        while (have_rows('repeater')) : the_row();
            ?>

            <div class="col-span-12 md:col-span-6 lg:col-span-4 lg:h-48 mx-5 ">
                <div class="card hover:bg-gray">
                    <a href="<?php the_sub_field('link'); ?>">
                        <img class="pt-5"
                             src="<?php the_sub_field('image'); ?>"
                             alt="Icon"></a>
                    <p class="text-center font-bold"> <?php the_sub_field('title'); ?></p>
                    <p class="font-light"><?php the_sub_field('subtitle'); ?></p>
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


