jQuery(document).ready(function($) {
    'use strict';

    // Xử lý khi nhấn nút "Hiển Thị Thông Báo"
    $(document).on('click', '#showNotificationBtn', function(e) {
        e.preventDefault();

        // Gửi AJAX request
        $.ajax({
            url: myNotification.ajaxUrl,
            method: 'POST',
            data: {
                action: 'show_notification',
                nonce: myNotification.nonce
            },
            success: function(response) {
                if (response.success) {
                    // Hiển thị thông báo
                    showNotificationAlert(response.data.message, response.data.type);
                } else {
                    console.error('Lỗi:', response.data);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                showNotificationAlert('Có lỗi xảy ra!', 'error');
            }
        });
    });

    /**
     * Hàm hiển thị thông báo
     * @param message - Nội dung thông báo
     * @param type - Loại thông báo (success, error, warning, info)
     */
    function showNotificationAlert(message, type) {
        // Xóa thông báo cũ nếu có
        $('.notification-alert').remove();

        // Tạo element thông báo
        var notificationClass = 'notification-alert notification-' + type;
        var $notification = $('<div class="' + notificationClass + '">' + message + '</div>');

        // Thêm vào body
        $('body').prepend($notification);

        // Hiệu ứng hiển thị
        $notification.slideDown();

        // Tự động ẩn sau 4 giây
        setTimeout(function() {
            $notification.slideUp(function() {
                $(this).remove();
            });
        }, 4000);

        // Cho phép click để đóng thông báo
        $notification.on('click', function() {
            $(this).slideUp(function() {
                $(this).remove();
            });
        });
    }
});
