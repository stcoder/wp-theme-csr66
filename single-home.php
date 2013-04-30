<?php
/**
 * Author: Karadaras
 * Uri: http://karadaras.com
 */
if ( function_exists('plugins_url') )
    $url = plugins_url(plugin_basename(dirname(__FILE__)));
else
    $url = get_option('siteurl') . '/wp-content/plugins/' . plugin_basename(dirname(__FILE__));
global $wpdb;
$ns4wp_plugindir = ABSPATH.'wp-content/plugins/nivo-slider-for-wordpress/';
$ns4wp_pluginurl = $url;
$ns4wp_filesdir = ABSPATH.'/wp-content/uploads/nivoslider4wp_files/';
$ns4wp_filesurl = get_option('siteurl').'/wp-content/uploads/nivoslider4wp_files/';

$type1 = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}nivoslider4wp WHERE category = 'type1' AND nivoslider4wp_image_status = 1 OR nivoslider4wp_image_status IS NULL ORDER BY nivoslider4wp_order,nivoslider4wp_id");
$type2 = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}nivoslider4wp WHERE category = 'type2' AND nivoslider4wp_image_status = 1 OR nivoslider4wp_image_status IS NULL ORDER BY nivoslider4wp_order,nivoslider4wp_id");

$count = count($type1);
if ($count == 2) {
    $topRowForType1 = array($type1[0]);
    $bottomRowForType1 = array($type1[1]);
} elseif ($count == 1) {
    $topRowForType1 = array($type1[0]);
    $bottomRowForType1 = array($type1[0]);
} else {
    $topRowForType1 = $type1;
    array_push($type1, $type1[0]);
    array_shift($type1);
    $bottomRowForType1 = $type1;
}

$count = count($type2);
if ($count == 2) {
    $topRowForType2 = array($type2[0]);
    $bottomRowForType2 = array($type2[1]);
} elseif ($count == 1) {
    $topRowForType2 = array($type2[0]);
    $bottomRowForType2 = array($type2[0]);
} else {
    $topRowForType2 = $type2;
    array_push($type2, $type2[0]);
    array_shift($type2);
    $bottomRowForType2 = $type2;
}
?>


<div class="container body">
    <div class="span6 image-box" style="padding: 5px 10px 0 0;">
        <div class="slider image-slider-type1">
            <?php foreach($topRowForType1 as $item) : ?>
            <?php
            if(!$item->nivoslider4wp_image_link){ ?>
                <img src="<?php echo $ns4wp_filesurl.$item->nivoslider4wp_id.'_s.'.$item->nivoslider4wp_type; ?>" alt="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>" title="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>"/>
                <?php } else { ?>
                <a href="<?php echo $item->nivoslider4wp_image_link;?>"><img src="<?php echo $ns4wp_filesurl.$item->nivoslider4wp_id.'_s.'.$item->nivoslider4wp_type; ?>" alt="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>" title="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>"/></a>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="span6 image-box">
        <div class="slider image-slider-type2">
            <?php foreach($topRowForType2 as $item) : ?>
            <?php
            if(!$item->nivoslider4wp_image_link){ ?>
                <img src="<?php echo $ns4wp_filesurl.$item->nivoslider4wp_id.'_s.'.$item->nivoslider4wp_type; ?>" alt="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>" title="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>"/>
                <?php } else { ?>
                <a href="<?php echo $item->nivoslider4wp_image_link;?>"><img src="<?php echo $ns4wp_filesurl.$item->nivoslider4wp_id.'_s.'.$item->nivoslider4wp_type; ?>" alt="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>" title="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>"/></a>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="span6 image-box" style="padding: 5px 10px 0 0;">
        <div class="slider image-slider-type2">
            <?php foreach($bottomRowForType2 as $item) : ?>
            <?php
            if(!$item->nivoslider4wp_image_link){ ?>
                <img src="<?php echo $ns4wp_filesurl.$item->nivoslider4wp_id.'_s.'.$item->nivoslider4wp_type; ?>" alt="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>" title="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>"/>
                <?php } else { ?>
                <a href="<?php echo $item->nivoslider4wp_image_link;?>"><img src="<?php echo $ns4wp_filesurl.$item->nivoslider4wp_id.'_s.'.$item->nivoslider4wp_type; ?>" alt="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>" title="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>"/></a>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="span6 image-box">
        <div class="slider image-slider-type1">
            <?php foreach($bottomRowForType1 as $item) : ?>
            <?php
            if(!$item->nivoslider4wp_image_link){ ?>
                <img src="<?php echo $ns4wp_filesurl.$item->nivoslider4wp_id.'_s.'.$item->nivoslider4wp_type; ?>" alt="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>" title="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>"/>
                <?php } else { ?>
                <a href="<?php echo $item->nivoslider4wp_image_link;?>"><img src="<?php echo $ns4wp_filesurl.$item->nivoslider4wp_id.'_s.'.$item->nivoslider4wp_type; ?>" alt="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>" title="<?php echo stripslashes($item->nivoslider4wp_text_headline); ?>"/></a>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<script type="text/javascript" src="<?php echo get_option('siteurl') . '/wp-content/plugins/nivo-slider-for-wordpress/js/jquery.nivo.slider.pack.js';?>"></script>
<script type="text/javascript">
    jQuery(window).load(function(){
        var $switch = 'type1';
        jQuery('.image-slider-type1').nivoSlider({
            effect:'<?php echo get_option('nivoslider4wp_effect'); ?>',
            slices:15, // For slice animations
            boxCols: <?php echo get_option('nivoslider4wp_colsBox'); ?>, // For box animations
            boxRows: <?php echo get_option('nivoslider4wp_rowsBox'); ?>, // For box animations
            animSpeed:<?php echo get_option('nivoslider4wp_animSpeed'); ?>, // Slide transition speed
            pauseTime:<?php echo get_option('nivoslider4wp_pauseTime'); ?>, // How long each slide will show
            startSlide:0, // Set starting Slide (0 index)
            directionNav:<?php echo get_option('nivoslider4wp_directionNav'); ?>, //Next & Prev
            directionNavHide:<?php echo get_option('nivoslider4wp_directionNavHide'); ?>, //Only show on hover
            controlNav:false, // 1,2,3... navigation
            controlNavThumbs:false, // Use thumbnails for Control Nav
            controlNavThumbsFromRel:false, // Use image rel for thumbs
            controlNavThumbsSearch: '.jpg', // Replace this with...
            controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
            keyboardNav:<?php echo get_option('nivoslider4wp_keyboardNav'); ?>, //Use left & right arrows
            pauseOnHover:<?php echo get_option('nivoslider4wp_pauseOnHover'); ?>, //Stop animation while hovering
            manualAdvance:<?php echo get_option('nivoslider4wp_manualAdvance'); ?>, //Force manual transitions
            captionOpacity:<?php echo get_option('nivoslider4wp_captionOpacity'); ?>, //Universal caption opacity
            prevText: 'Prev', // Prev directionNav text
            nextText: 'Next', // Next directionNav text
            beforeChange: function(){}, // Triggers before a slide transition
            afterChange: function(){$switch = 'type2';}, // Triggers after a slide transition
            slideshowEnd: function(){}, // Triggers after all slides have been shown
            lastSlide: function(){}, // Triggers when last slide is shown
            afterLoad: function(){} // Triggers when slider has loaded
        });

        jQuery('.image-slider-type2').nivoSlider({
            effect:'<?php echo get_option('nivoslider4wp_effect'); ?>',
            slices:15, // For slice animations
            boxCols: <?php echo get_option('nivoslider4wp_colsBox'); ?>, // For box animations
            boxRows: <?php echo get_option('nivoslider4wp_rowsBox'); ?>, // For box animations
            animSpeed:<?php echo get_option('nivoslider4wp_animSpeed'); ?>, // Slide transition speed
            pauseTime:<?php echo get_option('nivoslider4wp_pauseTime'); ?>, // How long each slide will show
            startSlide:0, // Set starting Slide (0 index)
            directionNav:<?php echo get_option('nivoslider4wp_directionNav'); ?>, //Next & Prev
            directionNavHide:<?php echo get_option('nivoslider4wp_directionNavHide'); ?>, //Only show on hover
            controlNav:false, // 1,2,3... navigation
            controlNavThumbs:false, // Use thumbnails for Control Nav
            controlNavThumbsFromRel:false, // Use image rel for thumbs
            controlNavThumbsSearch: '.jpg', // Replace this with...
            controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
            keyboardNav:<?php echo get_option('nivoslider4wp_keyboardNav'); ?>, //Use left & right arrows
            pauseOnHover:<?php echo get_option('nivoslider4wp_pauseOnHover'); ?>, //Stop animation while hovering
            manualAdvance:<?php echo get_option('nivoslider4wp_manualAdvance'); ?>, //Force manual transitions
            captionOpacity:<?php echo get_option('nivoslider4wp_captionOpacity'); ?>, //Universal caption opacity
            prevText: 'Prev', // Prev directionNav text
            nextText: 'Next', // Next directionNav text
            beforeChange: function(){}, // Triggers before a slide transition
            afterChange: function(){$switch = 'type1';}, // Triggers after a slide transition
            slideshowEnd: function(){}, // Triggers after all slides have been shown
            lastSlide: function(){}, // Triggers when last slide is shown
            afterLoad: function(){} // Triggers when slider has loaded
        });


        jQuery('.image-slider-type1').each(function(){
            jQuery(this).data('nivo:vars').stop = true;
        });

        jQuery('.image-slider-type2').each(function(){
            jQuery(this).data('nivo:vars').stop = true;
        });

        var $timer = false;
        var $wait  = 1000;
        var $i = 0;
        function runSlider() {
            if ($switch === 'type1') {
                jQuery('.image-slider-type1').each(function(){
                    jQuery(this).data('nivo:vars').stop = false;
                });

                jQuery('.image-slider-type2').each(function(){
                    jQuery(this).data('nivo:vars').stop = true;
                });
            } else if ($switch === 'type2') {
                jQuery('.image-slider-type1').each(function(){
                    jQuery(this).data('nivo:vars').stop = true;
                });

                jQuery('.image-slider-type2').each(function(){
                    jQuery(this).data('nivo:vars').stop = false;
                });
            }
            setTimeout(runSlider, $wait);
        }
        runSlider();
    });
</script>