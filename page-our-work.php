<?php
/**
 * Author: Karadaras
 * Uri: http://karadaras.com
 */

get_header();

the_post();
?>

<div class="container page">
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <?php wp_nav_menu(array('theme_location' => 'page-tab-menu', 'menu_class' => 'nav nav-pills')) ?>
            </div>

            <?php the_content(); ?>
        </div>
    </div>
</div>

<script>
    jQuery('.ngg-gallery-thumbnail').hover(function(){
        jQuery(this).find('.nivo-caption').show(200);
    }, function() {
        jQuery(this).find('.nivo-caption').hide(200);
    });
</script>
<?php get_footer() ?>