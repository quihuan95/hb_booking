<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 8,
                'title' => 'Thư chào mừng của chủ tịch Hội',
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'slug' => 'thu-chao-mung-cua-chu-tich-hoi',
                'contents' => '<div class="col-md-6 col-sm-6 col-xs-12">
<div class="bggtleft">
<p><img style="width: 100%; border-radius: 5px;" src="/public/frontend/css/images/gs_ts_tran_binh_giang@2x.png" /></p>
<p style="margin-top: 10px;"><em>GS.TS.BS. Trần B&igrave;nh Giang</em></p>
<p><em>Chủ tịch Hội Phẫu thuật nội soi v&agrave; Nội soi Việt Nam (VAES)</em></p>
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="bhg_content_right">
<p style="font-weight: bold; color: #20448e; font-family: RobotoBold;">Tr&acirc;n trọng ch&agrave;o đ&oacute;n qu&yacute; đồng nghiệp v&agrave; bạn đọc đến với trang tin điện tử www.hoiphauthuatnoisoi.vn / www.vaes.vn</p>
<p>Đ&acirc;y l&agrave; trang tin điện tử ch&iacute;nh thức của hội Phẫu thuật nội soi v&agrave; nội soi Việt Nam (Vietnam Association of Endolaparoscopic Surgeons - VAES). C&ugrave;ng với tạp ch&iacute; Phẫu thuật nội soi v&agrave; nội soi Việt Nam, trang tin l&agrave; nơi truyền tải c&aacute;c th&ocirc;ng tin sinh hoạt của hội, c&aacute;c tin tức cập nhật về nghi&ecirc;n cứu khoa học v&agrave; mọi hoạt động của hội cũng như c&aacute;c lĩnh vực khoa học y học v&agrave; c&aacute;c lĩnh vực kh&aacute;c.</p>
<p>Được th&agrave;nh lập v&agrave;o th&aacute;ng 01/2006, hội Phẫu thuật nội soi v&agrave; nội soi Việt Nam l&agrave; tổ chức hội nghề nghiệp, nơi tập trung c&aacute;c nh&agrave; khoa học l&agrave;m việc trong lĩnh vực phẫu thuật nội soi v&agrave; nội soi cũng như c&aacute;c lĩnh vực khoa học li&ecirc;n quan. Tuy l&agrave; một hội khoa học mới th&agrave;nh lập nhưng hội Phẫu thuật nội soi v&agrave; nội soi Việt Nam l&agrave; một hội c&oacute; hoạt động khoa học năng động, đi v&agrave;o những lĩnh vực hiện đại, chuy&ecirc;n s&acirc;u của ng&agrave;nh y tế. C&aacute;c nh&agrave; khoa học, chuy&ecirc;n m&ocirc;n của hội với hơn 1.000 hội vi&ecirc;n ch&iacute;nh thức c&ocirc;ng t&aacute;c tại hầu hết c&aacute;c cở sở y tế trong cả nước. Hội Phẫu thuật nội soi v&agrave; nội soi Việt Nam đ&atilde; c&oacute; đ&oacute;ng g&oacute;p quan trọng trong việc triển khai c&oacute; hiệu quả phẫu thuật nội soi tới tất cả c&aacute;c bệnh viện tỉnh, th&agrave;nh, ng&agrave;nh v&agrave; nhiều bệnh viện tuyến huyện, g&oacute;p phần đưa phẫu thuật nội soi từ một &ldquo;phẫu thuật qu&yacute; tộc&rdquo; đến phục vụ số đ&ocirc;ng nh&acirc;n d&acirc;n, một th&agrave;nh tựu m&agrave; kh&ocirc;ng phải quốc gia n&agrave;o cũng thực hiện được.</p>
<p>C&aacute;c nh&agrave; chuy&ecirc;n m&ocirc;n khoa học phẫu thuật nội soi Việt Nam đ&atilde; c&oacute; nhiều đ&oacute;ng g&oacute;p kh&ocirc;ng những cho sự ph&aacute;t triển của phẫu thuật nội soi v&agrave; nội soi Việt Nam m&agrave; c&ograve;n c&oacute; những th&agrave;nh tựu đ&oacute;ng g&oacute;p c&oacute; chất lượng cao v&agrave;o sự ph&aacute;t triển chuy&ecirc;n ng&agrave;nh n&agrave;y tại khu vực cũng như tr&ecirc;n thế giới. Điều n&agrave;y thể hiện r&otilde; n&eacute;t nhất qua sự đ&aacute;nh gi&aacute; cao của 1.176 đồng nghiệp quốc tế, trong đ&oacute; c&oacute; nhiều nh&agrave; khoa học h&agrave;ng đầu thế giới tham dự hội nghị khoa học phẫu thuật nội soi Ch&acirc;u &Aacute; - Th&aacute;i B&igrave;nh Dương lần thứ 10 tổ chức v&agrave;o th&aacute;ng 11/2010 tại H&agrave; Nội cũng như tại c&aacute;c hội nghị khoa học trong nước v&agrave; quốc tế kh&aacute;c.</p>
<p>Trang tin điện tử www.hoiphauthuatnoisoi.vn l&agrave; diễn đ&agrave;n trao đổi học thuật, chia sẻ kinh nghiệm, cung cấp th&ocirc;ng tin cho tất cả c&aacute;c hội vi&ecirc;n cũng như tới c&aacute;c nh&agrave; khoa học y học v&agrave; c&aacute;c bạn đồng nghiệp quan t&acirc;m.</p>
<p>Ban bi&ecirc;n tập trang tin www.hoiphauthuatnoisoi.vn v&agrave; tạp ch&iacute; Phẫu thuật nội soi v&agrave; nội soi Việt Nam mong nhận được sự quan t&acirc;m hưởng ứng, x&acirc;y dựng của c&aacute;c hội vi&ecirc;n v&agrave; tất cả c&aacute;c bạn cho nội dung v&agrave; h&igrave;nh thức của trang tin ng&agrave;y c&agrave;ng ho&agrave;n thiện.</p>
<p><strong>Xin tr&acirc;n trọng cảm ơn v&agrave; k&iacute;nh ch&agrave;o !</strong></p>
<p><strong>Chủ tịch hội</strong><br /><strong>GS.TS.BS TRẦN B&Igrave;NH GIANG</strong></p>
<p><strong>(Đ&atilde; k&yacute;)</strong></p>
</div>
</div>',
                'created_at' => '2021-12-24 17:04:47',
                'updated_at' => '2021-12-24 17:04:47',
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 9,
                'title' => 'Lịch sử Hội',
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'slug' => 'lich-su-hoi',
                'contents' => '<div class="col-md-6 col-sm-6 col-xs-12">
<div class="bggtleft">
<p><img style="width: 100%;" src="/public/frontend/css/images/photo_267hung3205.jpeg" /></p>
<p style="margin-top: 10px; text-align: center;"><em>HỘI NGHỊ KHOA HỌC</em></p>
<p style="text-align: center;"><em>Phẫu Thuật Nội Soi v&agrave; Ngoại Khoa 2017</em></p>
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="bhg_content_right">
<p style="font-weight: bold; color: #20448e; font-family: RobotoBold;">Lịch sử Hội Phẫu thuật nội soi v&agrave; Nội soi Việt Nam</p>
<p>Trong những thập kỷ qua, c&ugrave;ng với sự ph&aacute;t triển của khoa học y học, phẫu thuật nội so v&agrave; nội soi can thiệp đ&atilde; c&oacute; những bước tiến đ&aacute;ng kể, đ&oacute;ng g&oacute;p quan trọng v&agrave;o việc chẩn đo&aacute;n v&agrave; điều trị người bệnh. Sự ra đời của Hội Phẫu thuật nội soi v&agrave; Nội soi Việt Nam đ&atilde; đ&aacute;nh dấu sự trưởng th&agrave;nh v&agrave; ph&aacute;t triển của chuy&ecirc;n ng&agrave;nh n&agrave;y.</p>
<p>Từ khi th&agrave;nh lập (1996), Hội c&ograve;n &iacute;t th&agrave;nh vi&ecirc;n đến nay Hội đ&atilde; v&ocirc; c&ugrave;ng lớn mạnh, trải rộng khắp 3 miền đất nước. Nhận được sự đ&aacute;nh gi&aacute; cao của đồng nghiệp trong nước v&agrave; quốc tế tại c&aacute;c Hội nghị khoa học thương ni&ecirc;n to&agrave;n quốc h&agrave;ng năm.</p>
</div>
</div>',
                'created_at' => '2021-12-24 17:10:44',
                'updated_at' => '2021-12-24 17:10:44',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 11,
                'title' => 'Thể lệ đăng bài',
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'slug' => 'the-le-dang-bai',
                'contents' => '<p>Nội dung đang cập nhật...</p>',
                'created_at' => '2021-12-29 20:15:05',
                'updated_at' => '2021-12-29 20:15:05',
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 12,
                'title' => 'Thông tin liên hệ',
                'title_seo' => NULL,
                'desc_seo' => NULL,
                'keyword_seo' => NULL,
                'slug' => 'thong-tin-lien-he',
                'contents' => '<p>Update...</p>',
                'created_at' => '2022-01-13 10:40:43',
                'updated_at' => '2022-01-13 10:40:43',
                'status' => 1,
            ),
        ));
        
        
    }
}