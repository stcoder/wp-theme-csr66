<?php
/**
 * Author: Karadaras
 * Uri: http://karadaras.com
 */
?>

<div class="container footer">
	<hr/>
	<?php dynamic_sidebar('footer-copyright-widget-area') ?>
</div>
</div>
<div id="map" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Карта проезда</h3>
    </div>
    <div class="modal-body" style="text-align: center;">
        <img src="/wp-content/plugins/nextgen-gallery/images/ajax-loader.gif">
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>