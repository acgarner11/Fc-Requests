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


    <div class="md:mx-40 mx-5 pt-16 grid grid-cols-12 gap-5">
<!--        <div class="md:pb-10 pb-5 col-span-2 ">-->
            <?php
            //start the repeater loop
            if (have_rows('repeater')):
                //Card start
                //Begin looping data
                while (have_rows('repeater')) : the_row();
                    ?>

                    <div class="md:col-span-4 col-span-12 mb-6 md:ml-24">
                        <a href="<?php the_sub_field('link');?>"><img class="h-40" src="<?php the_sub_field('image');?>" alt="Icon"></a>
                        <p><a href="<?php the_sub_field('image');?>" download><i class="fas fa-file-download"></i> Click To Download</a></p>

                </div>
                <?php


                endwhile;
            else:
                //no rows found
            endif;

            ?>

        </div>

    </div>




