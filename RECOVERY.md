# Phục hồi Audiomart — 04/11/2026

Bản nguồn trong thư mục này đã được sửa để phục hồi website từ bản sao tải về. Chưa triển khai lên hosting audiomart.vn.

## Nguyên nhân đã xác nhận

- `audiotheme/functions.php` chứa thư viện Sodium thay vì bootstrap của theme.
- Template giá sản phẩm chứa mã Shopify; template sắp xếp sản phẩm chứa class form Elementor Pro.
- File chính và hai template trang của Elementor bị thay nội dung. Một số file MetaSlider, TablePress, Taxonomy Images và WP Responsive Menu khác với gói chính thức cùng phiên bản.
- Database bật WooCommerce 2.2.8 nhưng thư mục plugin đang chạy bị thiếu. Đã phục hồi từ gói chính thức cùng phiên bản.
- Mã WordPress/WooCommerce cũ có các lỗi thực thi trên PHP 8: so sánh chuỗi rỗng với số làm truy vấn thành 404, cú pháp truy cập chuỗi bằng ngoặc nhọn, phép nhân giá/cân nặng rỗng, callback tham chiếu và xử lý dữ liệu script dạng scalar.

## Thay đổi

Đối chiếu WordPress 5.5.16 với bản chính thức: core ban đầu khớp; không phải thiếu class Sodium trong core. Đã phục hồi các file plugin khác với các gói chính thức, dựng lại bootstrap theme từ template, widget database và theme `audio` còn lại. Giữ nội dung Elementor của trang chủ, menu và các widget; đăng ký lại taxonomy thương hiệu, mục hỗ trợ và shortcode sản phẩm/tin khuyến mại.

Sửa các lỗi tương thích PHP 8 nêu trên và các lỗi template liên quan tới sản phẩm không có giá/danh mục. Tắt hiển thị lỗi công khai trong cấu hình production. Thông tin kết nối database production trong `wp-config.php` không bị đổi sang local.

Database gốc `/home/huy/Bản tải về/loacaoca_audiomart.sql` không bị sửa. Database thử nghiệm riêng giữ 1.429 sản phẩm công khai, 4 sản phẩm riêng tư và 156 đơn hàng. Không tạo đơn thử.

## Bản local

- URL: http://127.0.0.1:18080/
- PHP 8.4.27; WordPress 5.5.16; WooCommerce 2.2.8 có bản sửa tương thích.
- Hai container đang dùng: `audiomart-recovery-web84`, `audiomart-recovery-db`.
- Cấu hình database local được mount riêng từ `/home/huy/audiomart-recovery/wp-config.local.php`, không thay cấu hình production trong source.
- Gửi email, WP-Cron và HTTP ra ngoài đã bị chặn trong môi trường thử nghiệm.

Bật 8 plugin đã đối chiếu/kiểm tra: Advanced Custom Fields, Elementor, MetaSlider, TablePress, Taxonomy Images, WooCommerce, WP Responsive Menu và Yoast SEO. Các plugin khác trong database gốc chưa được bật lại trong bản phục hồi, gồm cả `lutifiw` có mã include bất thường. Không xóa dữ liệu của chúng.

## Kiểm chứng

`/home/huy/audiomart-recovery/verify.py` kiểm tra 20 tình huống: trang chủ Elementor, danh mục/phân trang, sản phẩm đơn/nhóm, có và không có giá, tìm kiếm, tin tức, liên hệ, đăng nhập, URL không tồn tại, giỏ hàng rỗng, thêm hàng, giữ giỏ hàng, cộng số lượng và mở form thanh toán; cùng dashboard, danh sách sản phẩm, sửa trang chủ và danh sách plugin có xác thực local.

Tất cả qua trên PHP 8.4.27. Đã phân tích cú pháp 2.031 file PHP của theme và 8 plugin: không lỗi. 53 tài nguyên local của trang chủ đã kiểm tra trả HTTP 200. Log lượt cuối không có Fatal; có một cảnh báo tải bản dịch do môi trường thử nghiệm cố ý chặn HTTP ra ngoài.

Chưa xác nhận bố cục bằng trình duyệt do công cụ Browser lỗi kết nối; chưa thử đặt đơn, thanh toán thật hoặc gửi email. Các phiên bản core/plugin được giữ nguyên để phục hồi, chưa phải một đợt nâng cấp phiên bản hay kiểm toán toàn bộ mã nguồn. Các bản sửa trực tiếp trong core/WooCommerce cần được chuyển đổi và kiểm thử khi nâng cấp sau này.

## Gói bàn giao

Thư mục `/home/huy/audiomart-recovery/` chứa:

- `audiomart-repair.zip`: các file cần chép đè trong `overlay/`, database nén, SQL bật đúng 8 plugin và kết quả kiểm tra.
- `audiomart-recovered.sql.gz`: bản database phục hồi với URL `https://audiomart.vn`, không chứa URL preview local.
- `activate-recovery-plugins.sql`: chỉ đổi danh sách plugin đang bật; dùng cùng source sửa nếu giữ database trên hosting, tránh ghi đè nội dung/đơn hàng phát sinh sau bản tải về.
- `evidence/`: báo cáo, bản file trước khi sửa và kết quả kiểm tra. Chưa có thao tác ghi lên hosting.

Khi triển khai: sao lưu hosting hiện tại, chép các file trong `overlay/` vào đúng website, giữ/điều chỉnh kết nối database của hosting, rồi áp dụng SQL bật plugin. Chỉ import toàn bộ database phục hồi nếu chủ đích thay database bằng snapshot này. Xóa cache hosting/CDN sau khi đổi source. Không đặt file SQL/ZIP hoặc thư mục bằng chứng trong webroot.
