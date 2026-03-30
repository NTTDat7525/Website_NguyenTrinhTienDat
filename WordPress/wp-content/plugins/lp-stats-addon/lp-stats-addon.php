<?php
/*
Plugin Name: LearnPress Stats Dashboard
Plugin URI: http://localhost
Description: Hiển thị thống kê LearnPress (Tổng số khóa học, học viên, khóa học hoàn thành).
Version: 1.0
Author: Dat
Author URI: http://localhost
License: GPL2
*/

// Tổng số khóa học
function lp_total_courses()
{
    global $wpdb;
    return $wpdb->get_var("SELECT COUNT(ID) FROM {$wpdb->posts} WHERE post_type='lp_course' AND post_status='publish'");
}

// Tổng số học viên đã đăng ký
function lp_total_students()
{
    global $wpdb;
    return $wpdb->get_var("SELECT COUNT(DISTINCT user_id) FROM {$wpdb->prefix}learnpress_user_items WHERE item_type='lp_course'");
}

// Số lượng khóa học đã hoàn thành
function lp_completed_courses()
{
    global $wpdb;
    return $wpdb->get_var("SELECT COUNT(DISTINCT item_id) FROM {$wpdb->prefix}learnpress_user_items WHERE status='completed' AND item_type='lp_course'");
}

function lp_stats_dashboard_widget()
{
    echo "<h3>Thống kê LearnPress</h3>";
    echo "Tổng số khóa học: " . lp_total_courses() . "<br>";
    echo "Tổng số học viên: " . lp_total_students() . "<br>";
    echo "Khóa học hoàn thành: " . lp_completed_courses();
}
function lp_add_dashboard_widget()
{
    wp_add_dashboard_widget('lp_stats_widget', 'LearnPress Stats', 'lp_stats_dashboard_widget');
}
add_action('wp_dashboard_setup', 'lp_add_dashboard_widget');

function lp_total_stats_shortcode()
{
    return "<div>
        <strong>Tổng số khóa học:</strong> " . lp_total_courses() . "<br>
        <strong>Tổng số học viên:</strong> " . lp_total_students() . "<br>
        <strong>Khóa học hoàn thành:</strong> " . lp_completed_courses() . "
    </div>";
}
add_shortcode('lp_total_stats', 'lp_total_stats_shortcode');
