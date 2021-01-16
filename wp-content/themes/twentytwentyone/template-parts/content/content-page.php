<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
<section class="start" style="padding-top: 100px">
    <div class="conteiner flex">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.img.png" />
        <div class="start__right">
            <div class="start__title">
                <?php get_template_part( 'template-parts/header/entry-header' ); ?>
                <?php twenty_twenty_one_post_thumbnail(); ?>
            </div>
            <div class="start__right__text">
              <?php
              the_content();
              ?>

            </div>
    </div>
    </div>
</section>


