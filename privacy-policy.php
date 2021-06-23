<?php
/**
 * Template Name: Privacy Policy
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Wordpack Theme
 * @since 1.0.0
 */

get_header(); ?>

    <div class="content">
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ), url(https://images.unsplash.com/photo-1501612780327-45045538702b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2100&q=80);
     background-position: center center;
     height: 60vh;">
            <div class="content-middle text-white text-center">
                <h1 class="text-4xl mb-5">Privacy Policy</h1>
            </div>
        </div>
    </div>


    <div class="grid grid-cols-12 lg:mx-40 p-5 privacy-policy">
        <div class="col-span-12">
            <?php if (have_posts()) : while (have_posts()) : the_post();
                the_content();
            endwhile;
            else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
    </div>


<?php get_footer();
