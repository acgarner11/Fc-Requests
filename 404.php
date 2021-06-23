<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wordpack-theme
 */

get_header();
?>

    <div class="content">
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ), url(https://images.unsplash.com/photo-1501612780327-45045538702b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2100&q=80);
     background-position: center center;
     height: 60vh;">
            <div class="content-middle text-white text-center">
                <h1 class="text-4xl mb-5">Page Not Found!</h1>
            </div>
        </div>
    </div>

    <div class="m-4 md:m-10 lg:max-w-4xl lg:text-center lg:mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="text-center md:text-left mb-1">
                    <h1 class = "font-extrabold text-3xl mb-10">Humorous Statement to bring joy to the people who are stuck on a broken page because you did your job wrong.</h1>
                    <a href="#"
                       class="bg-black rounded-full font-bold text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-blue-light mt-10">
                        Go Somewhere Else
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
