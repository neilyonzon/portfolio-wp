<?php

/*Template Name: Home*/

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

    <div class="hero bg--primary">
        <div style="background: linear-gradient( rgba(7,123,104, 0.7), rgba(0, 0, 0, 0.5) ), url('<?php echo THEME_IMG_PATH; ?>/hero_los_angeles.png'), right/contain"
            class="hero__image bg--primary">
        </div>
        <div class="hero__text">
            <h1 class="h2">
                Let Me Be<br />
                Your Dev <span class="hero__emphasis">Hero</span>
            </h1>
            <a href="#" class="btn btn-orange">Learn More</a>
        </div>
        <div class="hero__changer">
            <span>Change Hero</span>
            <button class="btn-icon hero__changer-btn"> <i class="fas fa-dice-d20 fas-lg"></i></button>
        </div>
    </div>
    <div class="experience-links">
        <div class="experience-links__ratio-container">
            <div class="experience-links__container">
                <div class="experience-links__ratio-box">
                    <div class="experience-links__link-container">
                        <a href="#" class="experience-links__link experience-links__btn">ProjX</a>
                    </div>
                </div>
                <div class="experience-links__ratio-box">
                    <div class="experience-links__link-container experience-links__link-container--inline">
                        <a href="#" class="experience-links__link experience-links__inline">eXperience</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="skills">
        <div class="skills__orbit-carousel">

        </div>
        <div class="skills__panel side-panel">
            <h3 class="h3">Skills & Technologies</h3>
        </div>
    </div>

</main><!-- #main -->


<?php 
get_footer();
?>