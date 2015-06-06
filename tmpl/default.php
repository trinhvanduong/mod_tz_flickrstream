<?php
 /*------------------------------------------------------------------------
    # (TZ Module, TZ Plugin, TZ Component)
    # ------------------------------------------------------------------------
    # author    Sunland .,JSC
    # copyright Copyright (C) 2011 Sunland .,JSC. All Rights Reserved.
    # @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
    # Websites: http://www.TemPlaza.com
    # Technical Support:  Forum - http://www.TemPlaza.com/forums/
-------------------------------------------------------------------------*/
 // no direct access
defined('_JEXEC') or die('Restricted access');
$url = JURI::base();
$document   =   JFactory::getDocument();
//$document->addScript('modules/mod_tz_flickstream/js/jquery-1.6.4.min.js');
$document->addScript('modules/mod_tz_flickstream/js/jflickrfeed.min.js');
$document->addScript('modules/mod_tz_flickstream/js/jquery.prettyPhoto.js');
$document->addStyleSheet('modules/mod_tz_flickstream/css/prettyPhoto.css');
$document->addStyleSheet('modules/mod_tz_flickstream/css/style.css');
$countimg = $params->get('count', '9');
$id = $params->get('yourstream','36587311@N08');

?>

<div id="tz-flickr">
  <ul id="tz-flick" class="flickr footer_flickr"></ul>
</div>

<script type="text/javascript">
  var tz = jQuery.noConflict();
tz(document).ready(function(){
		tz('.footer_flickr').jflickrfeed({
			limit: <?php echo $countimg;?>,
			qstrings: {
				id: '<?php echo $id;?>'
			},
			itemTemplate: '<li>'+
						'<a rel="prettyPhoto_flickr[pp_gal]" href="/{image}}" title="/{title}}">' +
							'<img src="/{image_s}}" alt="/{title}}" />' +
						'</a>' +
				      '</li>'
				},function(data) {
		tz(".flickr a[rel^='prettyPhoto']").prettyPhoto();
	});
	});
</script>