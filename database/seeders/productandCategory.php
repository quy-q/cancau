<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class productandCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categoryp')->insert([
            ['NameC' => 'Game Seiko','DesC'=>"Cần tay chính hãng Gama Seiko đang được săn lùng cực kì mạnh trên giới đài thủ. Dòng cần tay săn hàng dịch vụ hay đánh thi đấu với chất liệu carbon cao cấp nhất 60T của Nhật Bản dày đặc trên thân cần. Gama Seiko được nhắc đến là cần câu đài hay cần câu đơn có chế độ bảo hành có 1 0 2 từ nhà sản xuất cực ưu ái người dùng BẢO HÀNH THAY 2 LÓNG BẤT KỲ TRỪ LÓNG GỐC MIỄN PHÍ TRONG 1 NĂM  ngoài ra  TẶNG KÈM THEO 1 NGỌN SƠ CUA. Ngoài ra với chất lượng và đẳng cấp của mình, cần tay Gama Seiko đã khẳng định được chỗ đứng trong các bộ sưu tập cần câu đơn của anh em  đài thủ. ",],
            ['NameC' => 'Guide','DesC'=>"Cần tay Benting - 1 trong những mẫu cần tay được ưa chuộng trên giới câu đài từ trước đến nay. Cần câu đơn/Cần câu đài mang thương hiệu Benting hay cái cái tên gọi khác là Benting Lão Mập với trong lượng cực nhẹ và mức giá bình dân được đánh giá rất cao trong  Hội câu đài Việt Nam và là mẫu cần câu đơm/cần câu đài được đa số đài thủ hướng tới trong bộ sưu tập của mình. Với chính sách bảo hành cực ưu ái: Thay 2 lóng trong 3 lóng đầu miễn phí trong vòng 1 năm .  mà hiếm có hãng cần đài nào có thể mang tới sự yên tâm khi săn hàng với anh em đài thủ.",],
            ['NameC' => 'Benting','DesC'=>"Thương Hiệu Guide chuyên sản xuất những dòng cần có sức chịu đựng và tải tĩnh cao được nhiều cần thủ Trung Quốc tin dùng để câu cá to ( cá Tầm - Trắm Cỏ - Trắm Đen ), Và Công Ty Tag Fishing đã hân hạnh được hợp tác và đưa sản phẩm thương hiệu cần tay cao cấp GUIDE phân phối chính hãng tại Việt Nam.",],
            ['NameC' => 'Thùng Câu','DesC'=>"Thùng câu đài là phụ kiện không thể thiếu trong môn câu đài thi đấu, Thùng câu đài dùng để ngồi và bắt các phụ kiện như gác cần, gác rọng, khay mồi… Thùng còn dùng để giữ nhiệt, Một số loại thùng khác như thùng đựng cá, thùng đựng dụng cụ. Cũng có khá nhiều kiểu dáng, thùng có chân địa hình, thùng không chân địa hình, thùng có tựa lưng… Kích thước thường được phân loại theo dung tích sử dụng. Ví Dụ như 26 Lít, 29 Lít, 32 Lít…Một số thương hiệu hàng đầu như Kaiwo, Handing, Xsamtin đang được các cần thủ tin dùng..",],
            ['NameC' => 'Dây Câu','DesC'=>"Dây câu cá là một yếu tố quan trọng trong bộ môn câu. Khái niệm dây câu tưởng chừng đơn giản khi chúng ta mới bắt đầu đi câu. Nhưng thực tế dây câu cá rất đa dạng và phong phú, Mỗi bộ môn câu có những tiêu chuẩn, chủng loại dây và đặc thù riêng. Chúng ta cùng tìm hiểu để biết cách lựa chọn dây câu phù hợp.."],
            ['NameC' => 'Phao','DesC'=>"Phao câu cá là vật bất ly thân của bất kỳ cần thủ chuyên nghiệp nào. Để báo hiệu xem cá cắn câu hay không, phao được chia thành nhiều loại khiến nhiều người không khỏi “bối rối”. Dưới đây chúng tôi sẽ giới thiệu cách chọn phao câu cá đúng chuẩn nhất.",],
        ]);
      
    }
}
