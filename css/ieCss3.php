<?php
/**
 * @package WordPress
 * @subpackage Oakland
 * @since Oakland 1.0
 * 
 * CSS 3 Rules for IE < 9
 * Created by CMSMasters
 * 
 */


header('Content-type: text/css');
require('../../../../wp-load.php');

?>
#middle, 
.middle_inner, 
.caption, 
.border_img, 
.border_img_slide, 
span.dropcap2, 
.shortcode_slideshow ul.shortcode_slideshow_pager li a, 
.tour_box_inner, 
.widget_custom_testimonials_entries .wrap, 
.widget_custom_tweets_entries ul li .tweet_content, 
.widgetinfo, 
.post .published, 
.post_img .border_img, 
.post_img .border_img_slide, 
header .post_img+.post_img_bot, 
header iframe+.post_img_bot, 
.jp-video+.post_img_bot, 
.jp-jp-audio+.post_img_bot, 
.post_img_bot, 
.format-quote .post_img,
.format-link .post_img, 
.format-aside .post_img, 
.wp-pagenavi span.current, 
.wp-pagenavi a, 
.cmsmsLike, 
.com_box, 
.p_filter_container ul.p_filter, 
.cmsms-form-builder select, 
#commentform input[type="text"], 
#commentform textarea, 
.cmsms-form-builder input[type="text"], 
.cmsms-form-builder textarea, 
.formError .formErrorContent, 
.top_sidebar_divider, 
.middle_sidebar_divider, 
.tooltip, 
.cmsms_slides_nav li a, 
.cmsms_close_video, 
.cmsms_prev_slide span, 
.cmsms_next_slide span {behavior:url(<?php echo get_template_directory_uri(); ?>/css/pie.htc);}

#middle {-pie-background:rgba(0, 0, 0, 0.03);}

.top_sidebar_divider, 
.middle_sidebar_divider {-pie-background:rgba(0, 0, 0, .01);}

.tooltip {-pie-background:rgba(0, 0, 0, .7);}

.widget_custom_contact_form_entries .cmsms-form-builder input[type="text"], 
.widget_custom_contact_form_entries .cmsms-form-builder textarea, 
.widget_custom_contact_form_entries .cmsms-form-builder .button, 
a.p_cat_filter.button, 
.p_sort a[name="p_date"], 
.p_sort a[name="p_name"], 
.p_filter_container ul.p_filter {behavior:none;}
