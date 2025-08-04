<?php
/**
 * Plugin Name: Cherie Core Modifications
 * Plugin URI:  www.facebook.com
 * Description: cherie core modifications plugin
 * Version:     1.0.0
 * Author:      Cupid Chakma
 * Author URI:  www.facebook.com
 * Text Domain: cherie-core-modifications
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


define('CCM_ROOT_DIR', plugin_dir_path(__FILE__));


add_action('elementor/widgets/register', 'register_new_widgets');

function register_new_widgets($widgets_manager)
{
    include CCM_ROOT_DIR . 'widgets/full-page-service.php';
    $widgets_manager->register(new Widget_Art_Full_Page_Services_Modifications());
}


function shop_page_metabox()
{
    if(get_the_ID() != null && get_the_ID() == 949 ) {
        add_meta_box(
            'shop_metabox_',      
            'Shop Metabox',        
            'shop_page_metabox_content', 
            'page',                      
            'normal',                    
            'high'                   
        );
    }

    if(get_the_ID() != null && get_the_ID() == 2913 ) {
        add_meta_box(
            'events_metabox_',      
            'Events Metabox',        
            'events_metabox_content', 
            'page',                      
            'normal',                    
            'high'                   
        );
    }

}
add_action('add_meta_boxes', 'shop_page_metabox');

function shop_page_metabox_content($post)
{
    if(isset($post->ID) && $post->ID == 949 ) {
        $existing_text_meta = ! empty(get_post_meta($post->ID, 'description_custom_field', true)) ? get_post_meta($post->ID, 'description_custom_field', true) : '';
        ?>
            <textarea id="description_custom_field" name="description_custom_field" rows="4" cols="200"><?php echo $existing_text_meta;  ?></textarea>
        <?php 
    }
}

function events_metabox_content($post)
{
    if(isset($post->ID) && $post->ID == 2913 ) {
        $existing_text_meta = ! empty(get_post_meta($post->ID, 'events_custom_field', true)) ? get_post_meta($post->ID, 'events_custom_field', true) : '';
        ?>
            <textarea id="events_custom_field" name="events_custom_field" rows="4" cols="200"><?php echo $existing_text_meta;  ?></textarea>
        <?php 
    }
}

add_action('save_post_page', 'save_shop_metabox_content');

function save_shop_metabox_content($post_id)
{
    if($post_id == 949 && isset($_POST['description_custom_field']) && ! empty($_POST['description_custom_field']) ) {
        update_post_meta($post_id, 'description_custom_field',  $_POST['description_custom_field']);
    } elseif($post_id == 2913 && isset($_POST['events_custom_field']) && ! empty($_POST['events_custom_field']) ) {
        update_post_meta($post_id, 'events_custom_field',  $_POST['events_custom_field']);
    }
}
