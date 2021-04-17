<?php

/*Template Name: Kitchen Sink*/

/**
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#kitchensink
 *
 * @package Theme_2021
 */

get_header();
?>

<main id="primary" class="site-main">

    <h1 class="h1">Heading 1</h1>
    <h2 class="h2">Heading 2</h2>
    <h3 class="h3">Heading 3</h3>
    <h4 class="h4">Heading 4</h4>
    <h5 class="h5">Heading 5</h5>
    <hr />

    <h3 class="h3">Paragraph</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. </p>

    <h3 class="h3">Buttons</h3>
    <button class="btn btn-primary">Button Primary</button>
    <button class="btn btn-primary--inverse">Button Primary</button>
    <button class="btn btn-secondary">Button Secondary</button>
    <button class="btn btn-orange">Button Tertiary</button>
    <br /><br />
    <h3 class="h3">Links</h3>
    <a href="#" class="link">Special Link</a>
    <a href="#">Regular Link</a>
    <br /><br />
    <h3 class="h3">Content Container</h3>

    <div class="content-container">
        <p>This is inside a content container with side paddings</p>
    </div>

    <h3 class="h3">Background Colors and Text</h3>
    <div class="bg--primary">
        <h4 class="h4">Primary Color Background and Text Combination</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. </p>
    </div>

    <div class="bg--secondary">
        <h4 class="h4">Primary Color Background and Text Combination</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. </p>
    </div>

    <div class="bg--tertiary">
        <h4 class="h4">Primary Color Background and Text Combination</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. </p>
    </div>

</main><!-- #main -->

<?php
get_footer();