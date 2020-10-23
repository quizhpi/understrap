<?php
/**
 * Template Name: Page 3 Columns
 *
 * Template for displaying 3 columns of content.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

    <div class="<?php echo esc_attr( $container ); ?>" id="content">

        <div class="row">

            <div class="col-md-4">
                <p class="h1">Heading</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At nostrum saepe sint repellat incidunt vitae provident cum porro. Consequatur quae omnis voluptates alias fuga veniam, molestiae in sed ex error.</p>
                <a href="#" class="btn btn-secondary" role="button" >View details
                    <svg width=".7em" height=".7em" viewBox="0 0 16 16" class="bi bi-chevron-double-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
            </div>
            <div class="col-md-4">
                <p class="h1">Heading</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quia magni accusantium consectetur eveniet veritatis id earum inventore quod error ducimus saepe necessitatibus ullam, atque doloremque quaerat non, facere nostrum.</p>
                <a href="#" class="btn btn-secondary" role="button" >View details
                    <svg width=".7em" height=".7em" viewBox="0 0 16 16" class="bi bi-chevron-double-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
            </div>
            <div class="col-md-4">
                <p class="h1">Heading</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque iste voluptas similique corporis, quisquam animi natus ipsa, totam, at cupiditate hic nobis velit! Magnam omnis pariatur blanditiis, excepturi maiores porro.</p>
                <a href="#" class="btn btn-secondary" role="button" >View details
                    <svg width=".7em" height=".7em" viewBox="0 0 16 16" class="bi bi-chevron-double-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
            </div>

        </div><!-- row -->

        <br>
        <hr>
    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
