<?php
/**
 * Author: Karadaras
 * Uri: http://karadaras.com
 */
if (is_page('our-work') || is_page('work-performed')) :
    get_template_part('page', 'our-work');
else:

get_header();

the_post();
?>

<div class="container page">
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1><?php the_title() ?></h1>
            </div>
        </div>
        <div class="page-body">
        <?php if (has_post_thumbnail()): ?>
        <div class="span7">
            <?php the_content() ?>
        </div>
        <div class="span5">
            <?php the_post_thumbnail() ?>
        </div>
        <?php else: ?>
        <div class="span12">
            <?php the_content() ?>
        </div>
        <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); endif; ?>