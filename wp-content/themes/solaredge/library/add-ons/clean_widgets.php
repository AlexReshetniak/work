<?php
// Remove unused sidebar widgets
if (!function_exists('unregister_default_widgets')) {
    function unregister_default_widgets()
    {
        unregister_widget('WP_Widget_Pages');
        unregister_widget('WP_Widget_Calendar');
        unregister_widget('WP_Widget_Archives');
        unregister_widget('WP_Widget_Meta');
        //unregister_widget('WP_Widget_Text');
        //unregister_widget('WP_Widget_Categories');
        //unregister_widget('WP_Widget_Recent_Posts');
        unregister_widget('WP_Widget_Recent_Comments');
        unregister_widget('WP_Widget_RSS');
        //unregister_widget('WP_Widget_Tag_Cloud');
        //unregister_widget('WP_Nav_Menu_Widget');
        unregister_widget('WP_Widget_Media_Audio');
        unregister_widget('WP_Widget_Media_Video');
        unregister_widget('WP_Widget_Media_Image');
        unregister_widget('WP_Widget_Media_Gallery');
        //unregister_widget('GFWidget');
    }

    add_action('widgets_init', 'unregister_default_widgets', 11);
}