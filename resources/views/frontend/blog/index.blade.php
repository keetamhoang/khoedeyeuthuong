@extends('frontend')

@section('content')
    <div class="has_cate" style="padding-bottom: 0">
        <div class="container">
            <div class="row">
                <div class="col-md-3" id="danhmuc">
                    <div id="menu_category">
                        <div id="dor-verticalmenu">
                            <div class="dor-vertical-title" style="background: #333;border:2px solid ;">
                                <div class="vertical-menu-head">
                                    <div class="veritcal-menu-head-inner">
                                        <div class="vertical-menu-head-wrapper">
                                            <div class="fa-icon-menu"><i class="fa fa-bars"></i></div>
                                            <div class="dor_title_block"><span>Danh mục sản phẩm</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dor-verticalmenu block_content" style="margin:0">
                                <div class="navbar navbar-default">
                                    <div class="verticalmenu" role="navigation">
                                        <ul class="nav navbar-nav verticalmenu">
                                            <li class="bold"><a target="_self" href="san-pham-hot.html"><span
                                                            class="menu-icon"><i class="fa icon-icon-san-pham-hot"></i></span><span
                                                            class="menu-title">Sản phẩm hot</span><span
                                                            class="menu-label-hot"><span>hot</span></span></a></li>
                                            <li class="bold"><a target="_self" href="san-pham-tang-chieu-cao.html"><span
                                                            class="menu-icon"><i
                                                                class="fa icon-icon-san-pham-tang-chieu-cao"></i></span><span
                                                            class="menu-title">Sản phẩm tăng chiều cao</span></a></li>
                                            <li class="bold"><a target="_self" href="san-pham-lam-dep.html"><span
                                                            class="menu-icon"><i
                                                                class="fa icon-icon-san-pham-lam-dep"></i></span><span
                                                            class="menu-title">Sản phẩm làm đẹp</span></a></li>
                                            <li class="bold"><a target="_self" href="san-pham-sinh-ly.html"><span
                                                            class="menu-icon"><i
                                                                class="fa icon-icon-san-pham-sinh-ly"></i></span><span
                                                            class="menu-title">Sản phẩm sinh lý</span></a></li>
                                            <li class="bold"><a target="_self" href="san-pham-xuong-khop.html"><span
                                                            class="menu-icon"><i
                                                                class="fa icon-icon-san-pham-xuong-khop"></i></span><span
                                                            class="menu-title">Sản phẩm xương khớp</span></a></li>
                                            <li class="bold"><a target="_self" href="san-pham-suc-khoe.html"><span
                                                            class="menu-icon"><i
                                                                class="fa icon-icon-san-pham-suc-khoe"></i></span><span
                                                            class="menu-title">Sản phẩm sức khỏe</span></a></li>
                                            <li class="bold"><a target="_self" href="nhom-san-pham-khac.html"><span
                                                            class="menu-icon"><i class="fa icon-icon-san-pham-khac"></i></span><span
                                                            class="menu-title">Nhóm sản phẩm khác</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 middle nopadding">
                    <div id="dor_search_top">
                        <form method="get" action="https://www.tvbuy.vn/tim-kiem" id="searchbox" class="form-inline">
                            <div class="dor_search form-group"><input class="search_query form-control" type="text"
                                                                      id="dor_query_top" name="s" value=""
                                                                      placeholder="Tìm kiếm ..." autocomplete="off">
                                <button type="submit" id="submit_search" class="btn btn-default"><i
                                            class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs_page top15">
        <div class="container">
            <ul itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="index.html"
                                                                                                     title="Trang chủ"
                                                                                                     itemprop="item"><span
                                itemprop="name">Trang chủ</span><i class="fa fa-angle-right"></i></a>
                    <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                     title="Danh mục Blog sức khỏe"><span
                                itemprop="name">Blog sức khỏe</span></a>
                    <meta itemprop="position" content="2">
                </li>
            </ul>
        </div>
    </div>
    <div class="blog_tintuc top15">
        <div class="container">
            <div class="row">
                <div class="block_main col-md-9 nopadding_right">
                    <div class="news_category">
                        <div class="contain block_full news_category0">
                            <div class="block block_right">
                                <div class="bd_bottom" style="border-color: rgba(30,156,182,1)">
                                    <div class="bg_title" style="background: rgba(30,156,182,1)"><h3><a href="suc-khoe.html"
                                                                                                        title="SỨC KHỎE">SỨC
                                                KHỎE</a></h3></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small_row ">
                                <div class="left-big-thumbnail col-md-6"><a class=""
                                                                            href="6-cach-ho-tro-nao-bo-nhanh-nhay-va-thong-minh.html"><img
                                                width="100%" height="300px;"
                                                src="/frontend/images/news/tro-choi-tang-cuong-tri-nao%20-%20Copy.jpg"
                                                alt="6 cách hỗ trợ não bộ nhanh nhạy và thông minh"></a><a
                                            href="6-cach-ho-tro-nao-bo-nhanh-nhay-va-thong-minh.html"><h3>6 cách hỗ trợ não bộ
                                            nhanh nhạy và thông minh</h3></a>
                                    <div class="date_author"><i class="fa fa-calendar" aria-hidden="true"></i> 30/08/2015 <i
                                                class="fa fa-user" aria-hidden="true" style="margin-left: 10px"></i> Trà My
                                    </div>
                                    <p class="small_description"> Với 6 mẹo khoa học dưới đây, bộ não của bạn sẽ trở
                                        nên nhạy bén và tăng khả năng tập trung hơn rất nhiều. </p></div>
                                <div class="right-small-thumbnail col-md-6"></div>
                                <div class="small_row top20">
                                    <div class="list-news-small row"><a class="col_left"
                                                                        href="8-loai-thuc-pham-giup-tre-em-thong-minh-hon.html"><img
                                                    src="/frontend/images/news/cong-dung-cua-sua-chua%20-%20Copy.jpg"
                                                    alt="8 loại thực phẩm giúp trẻ em thông minh hơn"></a>
                                        <div class="col_right date_author"><a
                                                    href="8-loai-thuc-pham-giup-tre-em-thong-minh-hon.html"><span>8 loại thực phẩm giúp trẻ em thông minh hơn</span></a><i
                                                    class="fa fa-calendar" aria-hidden="true"></i> 30/08/2015 <i
                                                    class="fa fa-user" aria-hidden="true" style="margin-left: 10px"></i> Trà My
                                        </div>
                                    </div>
                                </div>
                                <div class="small_row top20">
                                    <div class="list-news-small row"><a class="col_left"
                                                                        href="cach-chua-benh-gout-tu-rau-tia-to.html"><img
                                                    src="/frontend/images/news/tia_to-chua-gout%20-%20Copy.jpg"
                                                    alt="Cách chữa bệnh Gout từ rau tía tô"></a>
                                        <div class="col_right date_author"><a href="cach-chua-benh-gout-tu-rau-tia-to.html"><span>Cách chữa bệnh Gout từ rau tía tô</span></a><i
                                                    class="fa fa-calendar" aria-hidden="true"></i> 30/08/2015 <i
                                                    class="fa fa-user" aria-hidden="true" style="margin-left: 10px"></i> Trà My
                                        </div>
                                    </div>
                                </div>
                                <div class="small_row top20">
                                    <div class="list-news-small row"><a class="col_left"
                                                                        href="3-mon-an-ngon-ma-tang-cuong-tri-nho.html"><img
                                                    src="/frontend/images/news/3-mon-an-ngon-ma-tang-cuong-tri-nho.jpg"
                                                    alt="Phương pháp chế biến 3 món ăn ngon giúp tăng cường trí nhớ"></a>
                                        <div class="col_right date_author"><a
                                                    href="3-mon-an-ngon-ma-tang-cuong-tri-nho.html"><span>Phương pháp chế biến 3 món ăn ngon giúp tăng cường trí nhớ</span></a><i
                                                    class="fa fa-calendar" aria-hidden="true"></i> 30/08/2015 <i
                                                    class="fa fa-user" aria-hidden="true" style="margin-left: 10px"></i> Trà My
                                        </div>
                                    </div>
                                </div>
                                <div class="small_row top20">
                                    <div class="list-news-small row"><a class="col_left"
                                                                        href="10-cong-dung-cua-qua-sung-khong-phai-ai-cung-biet.html"><img
                                                    src="/frontend/images/news/qua-sung.jpg"
                                                    alt="10 công dụng của quả sung không phải ai cũng biết"></a>
                                        <div class="col_right date_author"><a
                                                    href="10-cong-dung-cua-qua-sung-khong-phai-ai-cung-biet.html"><span>10 công dụng của quả sung không phải ai cũng biết</span></a><i
                                                    class="fa fa-calendar" aria-hidden="true"></i> 30/08/2015 <i
                                                    class="fa fa-user" aria-hidden="true" style="margin-left: 10px"></i> Trà My
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <style type="text/css" media="screen"> .news_category0 .bd_bottom {
                                    border-color:;
                                }

                                .news_category0 .bg_title {
                                    background:;
                                } </style>
                            <div class="col-md-6 ">
                                <div class="contain block_full news_category1 top10">
                                    <div class="block block_right">
                                        <div class="bd_bottom" style="border-color: rgba(255,141,104,1)">
                                            <div class="bg_title" style="background: rgba(255,141,104,1)"><h3><a
                                                            href="lam-dep.html" title="LÀM ĐẸP">LÀM ĐẸP</a></h3></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-big-thumbnail top15"><a class=""
                                                                         href="da-trang-hong-lung-linh-nho-mon-qua-dac-biet-cua-ong-xa-155192.html"><img
                                                width="100%" height="300px" src="/frontend/images/news/vo-dep-duoc-yeu-chieu-2jpg.jpg"
                                                alt="Da trắng hồng lung linh nhờ món quà đặc biệt của ông xã"></a><a
                                            href="da-trang-hong-lung-linh-nho-mon-qua-dac-biet-cua-ong-xa-155192.html"><h3>Da
                                            trắng hồng lung linh nhờ món quà đặc biệt của ông xã</h3></a>
                                    <div class="date_author"><i class="fa fa-calendar" aria-hidden="true"></i> 16/04/2018 <i
                                                class="fa fa-user" aria-hidden="true" style="margin-left: 10px"></i> Trà My
                                    </div>
                                    <p class="small_description">Sống trong cái bóng hotgirl gần 30 năm, nhưng sau khi sinh
                                        con, làn da của mình bị “xuống cấp” nghiêm trọng, nám và tàn nhang xuất hiện nhiều,
                                        mụn trứng cá chi chít khiến mình không dám để mặt mộc ra ngoài. May mắn có ông xã
                                        tâm lý, quan tâm đến vợ đã mua tặng mình một món quà “đặc biệt”, không chỉ giúp mình
                                        tìm lại nhan sắc thời con gái mà còn nhận ra tình yêu chân thành của anh giành cho
                                        vợ. (Chị Bích Ngọc – 34 tuổi – Thái Bình).</p></div>
                            </div>
                            <style type="text/css" media="screen"> .news_category1 .bd_bottom {
                                    border-color:;
                                }

                                .news_category1 .bg_title {
                                    background:;
                                } </style>
                            <div class="col-md-6 nopadding_left">
                                <div class="contain block_full news_category2 top10">
                                    <div class="block block_right">
                                        <div class="bd_bottom" style="border-color: rgba(75,192,183,1)">
                                            <div class="bg_title" style="background: rgba(75,192,183,1)"><h3><a
                                                            href="tang-chieu-cao.html" title="TĂNG CHIỀU CAO">TĂNG CHIỀU CAO</a>
                                                </h3></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-big-thumbnail top15"><a class=""
                                                                         href="su-thay-doi-chieu-cao-ngoan-muc-cua-chang-trai-quatar-sau-chuyen-du-hoc-155191.html"><img
                                                width="100%" height="300px" src="/frontend/images/news/quatar-thap-lun-2.jpg"
                                                alt="Sự thay đổi chiều cao ngoạn mục của chàng trai Quatar sau chuyến du học"></a><a
                                            href="su-thay-doi-chieu-cao-ngoan-muc-cua-chang-trai-quatar-sau-chuyen-du-hoc-155191.html">
                                        <h3>Sự thay đổi chiều cao ngoạn mục của chàng trai Quatar sau chuyến du học</h3></a>
                                    <div class="date_author"><i class="fa fa-calendar" aria-hidden="true"></i> 13/04/2018 <i
                                                class="fa fa-user" aria-hidden="true" style="margin-left: 10px"></i> Trà My
                                    </div>
                                    <p class="small_description">Nhìn đứa con trai cao lớn, rắn rỏi, ra dáng thanh niên, trụ
                                        cột của gia đình mà tôi vui không tả nổi. Những cảm giác này dù có sở hữu hết tiền
                                        bạc ở đất nước Quatar này tôi cũng không thể đổi lại được. (Bassam Alrawi – 47 tuổi
                                        - Doha Quatar).</p></div>
                            </div>
                        </div>
                        <style type="text/css" media="screen"> .news_category2 .bd_bottom {
                                border-color:;
                            }

                            .news_category2 .bg_title {
                                background:;
                            } </style>
                        <div class="contain block_full news_category3">
                            <div class="block block_right">
                                <div class="bd_bottom" style="border-color: rgba(73,210,146,1)">
                                    <div class="bg_title" style="background: rgba(73,210,146,1)"><h3><a
                                                    href="thuoc-ho-tro-sinh-ly.html" title="SINH LÝ">SINH LÝ</a></h3></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small_row ">
                                <div class="left-big-thumbnail col-md-6"><a class=""
                                                                            href="chung-nhan-fda-hoa-ky-cho-san-pham-nufala-155101.html"><img
                                                width="100%" height="300px;"
                                                src="/frontend/images/news/chung-nhan-fda-hoa-ky-cho-san-pham-nufala-hinhbia.jpg"
                                                alt="Chứng nhận FDA Hoa Kỳ cho sản phẩm NUFALA"></a><a
                                            href="chung-nhan-fda-hoa-ky-cho-san-pham-nufala-155101.html"><h3>Chứng nhận FDA Hoa
                                            Kỳ cho sản phẩm NUFALA</h3></a>
                                    <div class="date_author"><i class="fa fa-calendar" aria-hidden="true"></i> 12/12/2017 <i
                                                class="fa fa-user" aria-hidden="true" style="margin-left: 10px"></i> Minh Hiệp
                                    </div>
                                    <p class="small_description">Tôi năm nay 38 tuổi, mấy tháng nay, chu kì kinh nguyệt của
                                        tôi diễn ra thất thường và giảm “mặn mà” trong chuyện ấy. Được cô bạn thân giới
                                        thiệu cho sản phẩm NUFALA, bên cạnh khá nhiều công dụng và chỉ dẫn, tôi thấy sản
                                        phẩm này được FDA Hoa Kỳ chứng nhận. Tôi muốn nhờ TVBUY giải thích rõ hơn về chứng
                                        nhận này. Rất cảm ơn! (Chị Nguyễn Cẩm Vân - Đà Nẵng)</p></div>
                                <div class="right-small-thumbnail col-md-6"></div>
                                <div class="small_row top20">
                                    <div class="list-news-small row"><a class="col_left"
                                                                        href="cac-mon-an-giup-phu-nu-tang-ham-muon.html"><img
                                                    src="/frontend/images/news/cach-lam-mon-dau-hu-nau-tom%20-%20Copy.jpg"
                                                    alt="Các món ăn giúp phụ nữ tăng ham muốn"></a>
                                        <div class="col_right date_author"><a
                                                    href="cac-mon-an-giup-phu-nu-tang-ham-muon.html"><span>Các món ăn giúp phụ nữ tăng ham muốn</span></a><i
                                                    class="fa fa-calendar" aria-hidden="true"></i> 30/08/2015 <i
                                                    class="fa fa-user" aria-hidden="true" style="margin-left: 10px"></i> Trà My
                                        </div>
                                    </div>
                                </div>
                                <div class="small_row top20">
                                    <div class="list-news-small row"><a class="col_left"
                                                                        href="phu-nu-chan-yeu-hay-ghi-nho-nhung-thuc-pham-nay.html"><img
                                                    src="/frontend/images/news/phu-nu-chan-yeu-hay-ghi-nho-nhung-thuc-pham-nay.jpg"
                                                    alt="Phụ nữ “chán yêu”, hãy ghi nhớ những thực phẩm này"></a>
                                        <div class="col_right date_author"><a
                                                    href="phu-nu-chan-yeu-hay-ghi-nho-nhung-thuc-pham-nay.html"><span>Phụ nữ “chán yêu”, hãy ghi nhớ những thực phẩm này</span></a><i
                                                    class="fa fa-calendar" aria-hidden="true"></i> 30/08/2015 <i
                                                    class="fa fa-user" aria-hidden="true" style="margin-left: 10px"></i> Trà My
                                        </div>
                                    </div>
                                </div>
                                <div class="small_row top20">
                                    <div class="list-news-small row"><a class="col_left"
                                                                        href="7-dong-tac-yoga-tot-cho-doi-song-tinh-duc-nu-gioi.html"><img
                                                    src="/frontend/images/news/biayoga.jpg"
                                                    alt="7 động tác Yoga tốt cho đời sống tình dục nữ giới"></a>
                                        <div class="col_right date_author"><a
                                                    href="7-dong-tac-yoga-tot-cho-doi-song-tinh-duc-nu-gioi.html"><span>7 động tác Yoga tốt cho đời sống tình dục nữ giới</span></a><i
                                                    class="fa fa-calendar" aria-hidden="true"></i> 30/08/2015 <i
                                                    class="fa fa-user" aria-hidden="true" style="margin-left: 10px"></i> Trà My
                                        </div>
                                    </div>
                                </div>
                                <div class="small_row top20">
                                    <div class="list-news-small row"><a class="col_left"
                                                                        href="nhung-dau-hieu-chung-to-ban-dang-bi-roi-loan-hormone-154661.html"><img
                                                    src="/frontend/images/news/nhung-dau-hieu-chung-to-ban-dang-bi-roi-loan-hormone-ava.jpg"
                                                    alt="Những dấu hiệu chứng tỏ bạn đang bị rối loạn hormone"></a>
                                        <div class="col_right date_author"><a
                                                    href="nhung-dau-hieu-chung-to-ban-dang-bi-roi-loan-hormone-154661.html"><span>Những dấu hiệu chứng tỏ bạn đang bị rối loạn hormone</span></a><i
                                                    class="fa fa-calendar" aria-hidden="true"></i> 01/10/2015 <i
                                                    class="fa fa-user" aria-hidden="true" style="margin-left: 10px"></i> Trà My
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <style type="text/css" media="screen"> .news_category3 .bd_bottom {
                                    border-color:;
                                }

                                .news_category3 .bg_title {
                                    background:;
                                } </style>
                            <div class="col-md-6 ">
                                <div class="contain block_full news_category4 top10">
                                    <div class="block block_right">
                                        <div class="bd_bottom" style="border-color: rgba(187,24,96,1)">
                                            <div class="bg_title" style="background: rgba(187,24,96,1)"><h3><a
                                                            href="xuong-khop.html" title="XƯƠNG KHỚP">XƯƠNG KHỚP</a></h3></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-big-thumbnail top15"><a class=""
                                                                         href="chung-nhan-fda-hoa-ky-cho-san-pham-nutrip-gold-155098.html"><img
                                                width="100%" height="300px"
                                                src="/frontend/images/news/chung-nhan-fda-hoa-ky-cho-san-pham-nutrip-gold-hinhbia2.jpg"
                                                alt="Chứng nhận FDA Hoa Kỳ cho sản phẩm NUTRIP GOLD"></a><a
                                            href="chung-nhan-fda-hoa-ky-cho-san-pham-nutrip-gold-155098.html"><h3>Chứng nhận FDA
                                            Hoa Kỳ cho sản phẩm NUTRIP GOLD</h3></a>
                                    <div class="date_author"><i class="fa fa-calendar" aria-hidden="true"></i> 12/12/2017 <i
                                                class="fa fa-user" aria-hidden="true" style="margin-left: 10px"></i> Trà My
                                    </div>
                                    <p class="small_description">Tôi năm nay 32 tuổi, là nhân viên văn phòng, công việc của
                                        tôi suốt ngày chỉ &quot;quanh quẩn&quot; bên máy tính và bàn làm việc. Đó cũng là lí
                                        do, dạo gần đây các khớp gối và tay của tôi thường hay đau nhức. Tôi tìm hiểu trên
                                        mạng, thấy có nhiều thông tin giới thiệu về sản phẩm NUTRIP GOLD giúp hỗ trợ xương
                                        khớp, nhưng tôi chưa hiểu lắm về chứng nhận FDA Hoa Kỳ mà NUTRIP GOLD đạt được. Tôi
                                        muốn nhờ TVBUY giải thích để rõ hơn. Cảm ơn! (Chị Trương Tuyết Mai - Quận 1 -
                                        TP.HCM)</p></div>
                            </div>
                            <style type="text/css" media="screen"> .news_category4 .bd_bottom {
                                    border-color:;
                                }

                                .news_category4 .bg_title {
                                    background:;
                                } </style>
                        </div>
                    </div>
                </div>
                <div class="sidebar col-md-3">
                    <div class="xemthacmac">
                        <div class="dor-vertical-title" style="background: #EFEFEF;border:2px solid #EFEFEF;">
                            <div class="vertical-menu-head">
                                <div class="vertical-menu-head-inner">
                                    <div class="vertical-menu-head-wrapper">
                                        <div class="fa-icon-menu"><i class="fa icon-tintuc"
                                                                     style="color:#333!important"></i></div>
                                        <div class="dor_title_block"><span style="color:#333!important;font-size: 17px;">Tin xem nhiều</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="results_viewed">
                            <div class="list_news top10">
                                <div class="image_new"><a href="bai-tap-don-gian-tai-nha-giup-teen-cao-them-5cm-326.html"
                                                          title="Bài tập đơn giản tại nhà giúp teen cao thêm 5cm"><img
                                                width="100%" src="/frontend/images/news/104.jpg"
                                                alt="Bài tập đơn giản tại nhà giúp teen cao thêm 5cm"></a></div>
                                <div class="item_details">
                                    <div class="title_new"><a
                                                href="bai-tap-don-gian-tai-nha-giup-teen-cao-them-5cm-326.html"
                                                title="Bài tập đơn giản tại nhà giúp teen cao thêm 5cm">Bài tập đơn giản tại nhà
                                            giúp teen cao thêm 5cm</a></div>
                                    <div class="info_new"><span class="post_date"><i class="fa fa-calendar"
                                                                                     aria-hidden="true"></i>19/10/2015 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="list_news top10">
                                <div class="image_new"><a href="15-phut-moi-ngay-cao-hon-3-6cm-du-qua-tuoi-day-thi-328.html"
                                                          title="15 phút mỗi ngày cao hơn 3 - 6 cm dù qua tuổi dậy thì"><img
                                                width="100%" src="/frontend/images/news/1.png"
                                                alt="15 phút mỗi ngày cao hơn 3 - 6 cm dù qua tuổi dậy thì"></a></div>
                                <div class="item_details">
                                    <div class="title_new"><a
                                                href="15-phut-moi-ngay-cao-hon-3-6cm-du-qua-tuoi-day-thi-328.html"
                                                title="15 phút mỗi ngày cao hơn 3 - 6 cm dù qua tuổi dậy thì">15 phút mỗi ngày
                                            cao hơn 3 - 6 cm dù qua tuổi dậy thì</a></div>
                                    <div class="info_new"><span class="post_date"><i class="fa fa-calendar"
                                                                                     aria-hidden="true"></i>19/10/2015 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="list_news top10">
                                <div class="image_new"><a
                                            href="6-cach-tang-chieu-cao-o-tuoi-17-ma-ai-cung-lam-duoc-154784.html"
                                            title="6 Cách tăng chiều cao ở tuổi teen mà ai cũng làm được"><img width="100%"
                                                                                                               src="/frontend/images/news/6-cach-tang-chieu-cao-o-tuoi-17-ma-ai-cung-lam-duoc.jpg"
                                                                                                               alt="6 Cách tăng chiều cao ở tuổi teen mà ai cũng làm được"></a>
                                </div>
                                <div class="item_details">
                                    <div class="title_new"><a
                                                href="6-cach-tang-chieu-cao-o-tuoi-17-ma-ai-cung-lam-duoc-154784.html"
                                                title="6 Cách tăng chiều cao ở tuổi teen mà ai cũng làm được">6 Cách tăng chiều
                                            cao ở tuổi teen mà ai cũng làm được</a></div>
                                    <div class="info_new"><span class="post_date"><i class="fa fa-calendar"
                                                                                     aria-hidden="true"></i>02/10/2015 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="list_news top10">
                                <div class="image_new"><a href="tam-su-cua-nguoi-mang-noi-kho-vi-lun-154848.html"
                                                          title="Tâm sự của người mang nổi khổ chỉ vì… lùn"><img
                                                width="100%" src="/frontend/images/news/21435829859833-Copy.jpg"
                                                alt="Tâm sự của người mang nổi khổ chỉ vì… lùn"></a></div>
                                <div class="item_details">
                                    <div class="title_new"><a href="tam-su-cua-nguoi-mang-noi-kho-vi-lun-154848.html"
                                                              title="Tâm sự của người mang nổi khổ chỉ vì… lùn">Tâm sự của
                                            người mang nổi khổ chỉ vì… lùn</a></div>
                                    <div class="info_new"><span class="post_date"><i class="fa fa-calendar"
                                                                                     aria-hidden="true"></i>12/01/2016 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="list_news top10">
                                <div class="image_new"><a href="5-bai-tap-tang-chieu-cao-trong-vong-3-tuan-154887.html"
                                                          title="5 bài tập tăng chiều cao trong vòng 3 tuần"><img
                                                width="100%"
                                                src="/frontend/images/news/5-bai-tap-tang-chieu-cao-trong-vong-3-tuan1.jpg"
                                                alt="5 bài tập tăng chiều cao trong vòng 3 tuần"></a></div>
                                <div class="item_details">
                                    <div class="title_new"><a href="5-bai-tap-tang-chieu-cao-trong-vong-3-tuan-154887.html"
                                                              title="5 bài tập tăng chiều cao trong vòng 3 tuần">5 bài tập
                                            tăng chiều cao trong vòng 3 tuần</a></div>
                                    <div class="info_new"><span class="post_date"><i class="fa fa-calendar"
                                                                                     aria-hidden="true"></i>27/05/2016 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="see_more bg_yellow top15 viewed"><a href="javascript:void(0)" id="btn_more_viewed">Xem
                                thêm <i class="fa fa-caret-down"></i><img src="images/loading_more.gif" class="animation_image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection