<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'db_shopgiay' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g;7)_!TZ3~tF3y;yzd$*3I,/A-|fl(66}``iLBKcn1t,VOqoI MWI@; FA+p9.[Y' );
define( 'SECURE_AUTH_KEY',  '(%*6@qQ@Je^dx(;*_*1r-EAOG.H1z;}qJLv5GV1DJx2o~v_t]ZA%=-3$K=|%~1^q' );
define( 'LOGGED_IN_KEY',    '!BBkb~MFqQ-hp;TIB7:Cqe:}baeLi[^1,JL)DhGri*YYeL$:Cs*c=+umF7Lr@=VZ' );
define( 'NONCE_KEY',        '9txed~(@?^xgjDY)>b9?&!B?TmvzXI1V:reN]5:DG`y65t?ZAbNYLMH6$SxCb+$e' );
define( 'AUTH_SALT',        '$&sd,!biu.|u:4C|{@,oSxicYZr]v6v>xnq=rvy`0YC2:#aK^dhPyR::5%09`1Lv' );
define( 'SECURE_AUTH_SALT', 'yL:zc[_3x(l`fl,|{q5&{R.ug}{sjh&p,x9]c@Sdp^)DGs#.<bnct4~-/[IOS|OT' );
define( 'LOGGED_IN_SALT',   'kS:SI<Z$}vhDuiys1pj7p7<lOZZy6U{x oOHn[*z}BlOkf!5/hz{U%op0T-GA5ls' );
define( 'NONCE_SALT',       'wrDlyU&;Yy]8rk:ukeD(7fq9.f]P7PedKpee^[eWWKU!632xLqGn<NNpn/unOKTj' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
