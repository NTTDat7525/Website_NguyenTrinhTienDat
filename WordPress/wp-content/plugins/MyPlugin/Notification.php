<?php

if (!defined('ABSPATH')) {
    exit;
}

class MyPlugin_Notification
{

    public function __construct()
    {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action('wp_ajax_show_notification', array($this, 'handle_notification'));
        add_shortcode('notification_button', array($this, 'notification_shortcode'));
    }

    public function add_admin_menu()
    {
        add_menu_page(
            'My Notification',
            'Notification',
            'manage_options',
            'my-notification',
            array($this, 'render_admin_page'),
            'dashicons-bell',
            20
        );
    }

    public function enqueue_scripts($hook)
    {
        if ($hook == 'toplevel_page_my-notification') {
            wp_enqueue_script(
                'my-notification-script',
                plugin_dir_url(__FILE__) . 'assets/js/notification.js',
                array('jquery'),
                '1.0.0',
                true
            );

            wp_enqueue_style(
                'my-notification-style',
                plugin_dir_url(__FILE__) . 'assets/css/notification.css',
                array(),
                '1.0.0'
            );

            wp_localize_script('my-notification-script', 'myNotification', array(
                'ajaxUrl' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('my_notification_nonce')
            ));
        }
    }
    public function render_admin_page()
    {
?>
        <div class="wrap">
            <h1>My Notification Plugin</h1>
            <div class="notification-container">
                <p>Nhấn vào nút dưới để hiển thị thông báo:</p>
                <button id="showNotificationBtn" class="button button-primary button-large">
                    Hiển Thị Thông Báo
                </button>
            </div>
        </div>
    <?php
    }

    public function handle_notification()
    {

        if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'my_notification_nonce')) {
            wp_send_json_error('Nonce không hợp lệ', 403);
        }

        $messages = array(
            'Plugin notification đang hoạt động!',
        );

        $message = $messages[array_rand($messages)];

        wp_send_json_success(array(
            'message' => $message,
            'type' => 'success'
        ));
    }

    public function notification_shortcode()
    {
        wp_enqueue_script(
            'my-notification-script-frontend',
            plugin_dir_url(__FILE__) . 'assets/js/notification.js',
            array('jquery'),
            '1.0.0',
            true
        );

        wp_enqueue_style(
            'my-notification-style-frontend',
            plugin_dir_url(__FILE__) . 'assets/css/notification.css',
            array(),
            '1.0.0'
        );

        wp_localize_script('my-notification-script-frontend', 'myNotification', array(
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('my_notification_nonce')
        ));

        ob_start();
    ?>
        <div class="notification-shortcode-container">
            <button id="showNotificationBtn" class="notification-btn">
                Hiển Thị Thông Báo
            </button>
        </div>
<?php
        return ob_get_clean();
    }
}
