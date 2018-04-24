@extends('frontend')

@section('content')
    <div class="has_cate" style="padding-bottom: 0">
        <div class="container">
            <div class="row">
                <div class="col-md-3" id="danhmuc">
                    <div id="menu_category">
                        <div id="dor-verticalmenu">
                            <div class="dor-vertical-title" style="background: ;border:2px solid ;">
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
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a
                            href="tang-chieu-cao.html" title="Xem tất cả bài viết trong TĂNG CHIỀU CAO" itemprop="item"><span
                                itemprop="name">TĂNG CHIỀU CAO</span><i class="fa fa-angle-right"></i></a>
                    <meta itemprop="position" content="2">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                     title="Bài viết Cách giúp con “thoát lùn” của nhà ngoại giao Trung Quốc"><span
                                itemprop="name">Cách giúp con “thoát lùn” của nhà ngoại giao Trung Quốc</span></a>
                    <meta itemprop="position" content="3">
                </li>
            </ul>
        </div>
    </div>
    <div class="content_news top15">
        <div class="container">
            <div class="row">
                <div class="block_main nopadding_right col-md-9">
                    <div id="news_details">
                        <div style="padding: 15px"><h1 class="title">Cách giúp con “thoát lùn” của nhà ngoại giao Trung
                                Quốc</h1>
                            <div class="created_at"> Đăng bởi: <b>Minh Hiệp</b> &nbsp- &nbsp 11/04/2018 11:32:34</div>
                            <div class="short_content summary top15">Nhờ đặc thù của công việc “ngoại giao”, tôi may mắn
                                biết đến một phương thức giúp con mình phát triển chiều cao, vừa nhanh chóng, an toàn mà lại
                                hiệu quả. (Ông Tôn Thanh Dân, 40 tuổi, Trung Quốc)
                            </div>
                            <div class="content_full top15"><p style="text-align:justify">T&ocirc;i v&agrave; vợ đều l&agrave;
                                    người Trung Quốc. V&igrave; cả hai vợ chồng đều c&oacute; chiều cao khi&ecirc;m tốn n&ecirc;n
                                    khi bước v&agrave;o tuổi ph&aacute;t triển - con trai t&ocirc;i cũng chỉ sở hữu chiều cao
                                    trung b&igrave;nh, nếu kh&ocirc;ng n&oacute;i l&agrave; &ldquo;thấp l&ugrave;n&rdquo; so với
                                    c&aacute;c bạn ở Mỹ.</p>
                                <p style="text-align:justify">Năm nay con trai t&ocirc;i 15 tuổi, lứa tuổi được xem l&agrave;
                                    thời điểm v&agrave;ng trong giai đoạn ph&aacute;t triển chiều cao. Tuy nhi&ecirc;n, từ
                                    sau tuổi 12 trở đi, chiều cao của con vẫn kh&ocirc;ng mấy thay đổi, d&ugrave; thể trạng
                                    v&agrave; tr&iacute; tuệ của ch&aacute;u th&igrave; ph&aacute;t triển ho&agrave;n to&agrave;n
                                    b&igrave;nh thường. Trong một lần, dẫn ch&aacute;u đến bệnh viện kh&aacute;m sức khỏe
                                    tổng thể, t&ocirc;i lại hoang mang hơn khi b&aacute;c sĩ cho hay, chiều cao hiện tại của
                                    con đang &ldquo;hạn chế&rdquo; rất nhiều so với c&aacute;c bạn c&ugrave;ng lứa. B&aacute;c
                                    sĩ bảo, ở tuổi n&agrave;y, ngo&agrave;i bổ sung dinh dưỡng ra, t&ocirc;i cần khuyến kh&iacute;ch
                                    ch&aacute;u tham gia một m&ocirc;n thể thao nhằm k&iacute;ch th&iacute;ch sự ph&aacute;t
                                    triển của chiều cao.</p>
                                <p style="text-align:justify">Tr&ecirc;n đường từ bệnh viện về nh&agrave;, t&ocirc;i cố gắng
                                    tr&igrave;nh b&agrave;y cho con hiểu về vấn đề con đang mắc phải. Rồi hai bố con thống
                                    nhất sẽ c&ugrave;ng nhau luyện tập m&ocirc;n cầu l&ocirc;ng mỗi ng&agrave;y để cải thiện
                                    sức khỏe cho t&ocirc;i v&agrave; chiều cao cho con. Tuy nhi&ecirc;n, th&oacute;i quen
                                    duy tr&igrave; chưa được bao l&acirc;u, 2 th&aacute;ng sau t&ocirc;i c&oacute; chuyến c&ocirc;ng
                                    t&aacute;c d&agrave;i hạn ở Ch&acirc;u &Acirc;u, v&igrave; kh&ocirc;ng c&oacute; người
                                    chơi c&ugrave;ng, con trai cũng &ldquo;lơ l&agrave;&rdquo; dần với việc luyện tập.</p>
                                <p style="text-align:justify">Trong một lần đi d&atilde; ngoại c&ugrave;ng bạn b&egrave;,
                                    con kh&ocirc;ng may trượt&nbsp;ch&acirc;n t&eacute; dẫn đến g&atilde;y tay. Vợ chồng t&ocirc;i
                                    phải dắt ch&aacute;u đến bệnh viện, b&aacute;c sĩ cho biết do mật độ Canxi trong xương
                                    của con đang bị thiếu hụt trầm trọng, nhằm gi&uacute;p xương mau phục hồi, gia đ&igrave;nh
                                    tr&aacute;nh để con vận động qu&aacute; mạnh, đồng thời tăng cường bổ sung Canxi từ
                                    nhiều nguồn thực phẩm kh&aacute;c nhau. B&aacute;c sĩ c&ograve;n lưu &yacute; th&ecirc;m,
                                    di chấn n&agrave;y c&oacute; thể sẽ ảnh hưởng rất nhiều đến việc ph&aacute;t triển chiều
                                    cao của con trong những năm tiếp theo. Vợ chồng t&ocirc;i như suy sụp!</p>
                                <p style="text-align:justify">Trong lần l&agrave;m việc với một c&aacute;n bộ ngoại giao cấp
                                    cao của Hoa Kỳ, t&ocirc;i được người n&agrave;y giới thiệu cho sản phẩm <a
                                            href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my0bf7.html?utm_source=Native_ads&amp;utm_medium=Links&amp;utm_campaign=nutdathang"
                                            target="_blank">NUBEST TALL</a>. Qua lời chỉ dẫn, được biết, đ&acirc;y l&agrave;
                                    d&ograve;ng thực phẩm bảo vệ sức khỏe đạt rất nhiều chứng nhận uy t&iacute;n, nổi bật
                                    nhất l&agrave; chứng nhận của FDA Hoa Kỳ (Cục quản l&yacute; Thực phẩm &amp; Dược phẩm
                                    Hoa Kỳ). Th&ecirc;m v&agrave;o đ&oacute;, sản phẩm n&agrave;y bổ sung Nano Canxi - một
                                    dạng Canxi ho&agrave;n to&agrave;n mới, c&oacute; k&iacute;ch thước si&ecirc;u nhỏ, c&oacute;
                                    khả năng hấp thụ gấp nhiều lần so với Canxi th&ocirc;ng thường, gi&uacute;p khắc phục
                                    mọi t&igrave;nh trạng về thiếu hụt cũng như chậm hấp thụ Canxi, đồng thời hỗ trợ ph&aacute;t
                                    triển chiều cao v&agrave; tr&iacute; n&atilde;o cho trẻ v&agrave; thanh, thiếu ni&ecirc;n
                                    đang tuổi ph&aacute;t triển. Kh&aacute; ấn tượng với c&ocirc;ng thức v&agrave; t&iacute;nh
                                    năng của <a
                                            href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my0bf7.html?utm_source=Native_ads&amp;utm_medium=Links&amp;utm_campaign=nutdathang"
                                            target="_blank">NUBEST TALL</a>, t&ocirc;i l&ecirc;n trang Amazon đặt h&agrave;ng
                                    cho con d&ugrave;ng thử.</p>
                                <p style="text-align:center"><a
                                            href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my0bf7.html?utm_source=Native_ads&amp;utm_medium=Links&amp;utm_campaign=nutdathang"
                                            target="_blank"><img alt=""
                                                                 src="/frontend/upload/hinhchitiet/images/%5e6F9A3D4C570635D3C6B0FC7BD7780F0D7898DFDFED6D200DFE%5epimgpsh_fullsize_distr.png"
                                                                 style="height:46px; width:435px"/></a></p>
                                <p style="text-align:center"><img
                                            alt="Con tôi đã cao lên nhờ sử dụng TPBVSK giúp hỗ trợ tăng chiều cao và luyện tập thể thao"
                                            src="/frontend/upload/hinhchitiet/images/tintuc/cach-giup-con-thoat-lun-cua-nha-ngoai-giao-trung-quoc-hinh1.jpg"
                                            style="height:788px; width:600px"
                                            title="Con tôi đã cao lên nhờ sử dụng TPBVSK giúp hỗ trợ tăng chiều cao và luyện tập thể thao"/>
                                </p>
                                <p style="text-align:center"><em>Con t&ocirc;i đ&atilde; cao l&ecirc;n nhờ sử dụng <a
                                                href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my0bf7.html?utm_source=Native_ads&amp;utm_medium=Links&amp;utm_campaign=nutdathang">TPBVSK
                                            gi&uacute;p hỗ trợ&nbsp;tăng chiều cao</a> v&agrave; luyện tập thể thao (Ảnh minh
                                        họa)</em></p>
                                <p style="text-align:justify">Sau 2 th&aacute;ng sử dụng sản phẩm, t&ocirc;i dắt con đến b&aacute;c
                                    sĩ kiểm tra t&igrave;nh h&igrave;nh của vết xương rạn lần trước. Thật bất ngờ khi b&aacute;c
                                    sĩ cho biết, &ldquo;dấu vết&rdquo; ở xương đang cải thiện rất t&iacute;ch cực, c&aacute;c
                                    khối xương đ&atilde; dần kết nối lại, những khoảng trống của m&agrave;ng xương đ&atilde;
                                    trở n&ecirc;n &ldquo;d&agrave;y&rdquo; hơn trước rất nhiều. Vợ chồng t&ocirc;i mừng
                                    lắm!</p>
                                <p style="text-align:justify">Thấy kết quả ban đầu kh&aacute; khả quan, t&ocirc;i quyết định
                                    để con sử dụng<a
                                            href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my0bf7.html?utm_source=Native_ads&amp;utm_medium=Links&amp;utm_campaign=nutdathang">
                                        NUBEST TALL</a> th&ecirc;m một thời gian nữa. Vả lại, khi con khỏe hẳn, hai bố con
                                    sẽ lại tiếp tục &ldquo;rủ&rdquo; nhau đi bơi, thay v&igrave; chơi cầu l&ocirc;ng như
                                    trước. V&igrave; t&ocirc;i nghĩ, xương ch&aacute;u đang trong giai đoạn phục hồi, việc
                                    vận động dưới nước sẽ trở n&ecirc;n dễ d&agrave;ng hơn, đồng thời vẫn k&iacute;ch th&iacute;ch
                                    chiều cao ph&aacute;t triển hiệu quả.</p>
                                <p style="text-align:justify">Nửa năm sau, t&ocirc;i bất ngờ khi con bảo với vợ t&ocirc;i
                                    mua th&ecirc;m cho con một v&agrave;i bộ quần &aacute;o mới. Nh&igrave;n lại mới thấy, c&aacute;c
                                    bộ cũ của con đ&atilde; trở n&ecirc;n &ldquo;ngắn&rdquo; hơn trước. Theo định k&igrave;,
                                    t&ocirc;i lại tiếp tục đưa con đến b&aacute;c sĩ để kiểm tra vết thương. H&ocirc;m ấy, b&aacute;c
                                    sĩ b&aacute;o cho hai vợ chồng tin vui, vết thương của con đ&atilde; l&agrave;nh hẳn.
                                    Tuy nhi&ecirc;n, c&oacute; một điều khiến t&ocirc;i cảm thấy vui v&agrave; bất ngờ hơn,
                                    con trai t&ocirc;i đ&atilde; cao l&ecirc;n đ&aacute;ng kể so với thời điểm trước đ&acirc;y.
                                    B&aacute;c sĩ cho hay, th&ocirc;ng thường những trẻ bị chấn thương xương, phải mất một
                                    thời gian d&agrave;i, chiều cao mới ph&aacute;t triển b&igrave;nh thường được. Trường
                                    hợp của con t&ocirc;i thật hiếm.</p>
                                <p style="text-align:justify">Qu&aacute; ngạc nhi&ecirc;n! T&ocirc;i vội bấm điện thoại gọi
                                    cho vị c&aacute;n bộ ngoại giao lần trước để b&agrave;y tỏ l&ograve;ng biết ơn. T&ocirc;i
                                    chia sẻ với anh, ngo&agrave;i việc l&agrave;m &ldquo;vết thương&rdquo; ở xương mau l&agrave;nh,
                                    <a href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my0bf7.html?utm_source=Native_ads&amp;utm_medium=Links&amp;utm_campaign=nutdathang">NUBEST
                                        TALL</a> c&ograve;n gi&uacute;p con t&ocirc;i &ldquo;tho&aacute;t l&ugrave;n&rdquo;
                                    ngoạn mục. T&ocirc;i kh&ocirc;ng thể tin trước sự thay đổi k&igrave; diệu n&agrave;y,
                                    nhưng điều ấy đ&atilde; l&agrave; sự thật. <a
                                            href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my0bf7.html?utm_source=Native_ads&amp;utm_medium=Links&amp;utm_campaign=nutdathang">NUBEST
                                        TALL</a> đ&atilde; thật sự tiếp th&ecirc;m sức mạnh cho con v&agrave; cả hai vợ
                                    chồng t&ocirc;i, để gi&uacute;p con c&oacute; thể cao lớn tối đa, ch&uacute;ng t&ocirc;i
                                    sẽ c&ograve;n cho ch&aacute;u sử dụng sản phẩm n&agrave;y trong nhiều năm tới nữa.</p>
                                <p style="text-align:justify">Cảm ơn <a
                                            href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my0bf7.html?utm_source=Native_ads&amp;utm_medium=Links&amp;utm_campaign=nutdathang">NUBEST
                                        TALL</a> nhiều lắm!</p>
                                <p style="text-align:right"><em><strong>Nguồn:</strong> Nubest Supplements USA</em></p>
                                <p style="text-align:center"><a
                                            href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my0bf7.html?utm_source=Native_ads&amp;utm_medium=Links&amp;utm_campaign=nutdathang"><em><img
                                                    alt=""
                                                    src="/frontend/upload/hinhchitiet/images/%5e12D8CFF0E5A6DFDC493743A95A22550CB32154F27249FDA3E7%5epimgpsh_fullsize_distr.png"
                                                    style="height:47px; width:214px"/></em></a></p>
                                <p style="text-align:center"><strong>CHIA SẺ CỦA KH&Aacute;CH H&Agrave;NG</strong></p>
                                <p style="text-align:center"><a
                                            href="cuu-linh-my-ke-ve-hanh-trinh-khac-phuc-chieu-cao-cho-con-155186.html"><strong>Cựu
                                            l&iacute;nh Mỹ kể về h&agrave;nh tr&igrave;nh &quot;khắc phục&quot; chiều cao cho
                                            con</strong></a></p>
                                <p style="text-align:center"><strong><img alt=""
                                                                          src="/frontend/upload/hinhchitiet/images/tintuc/cuu-linh-my-ke-ve-hanh-trinh-khac-phuc-chieu-cao-cho-con-hinh1.jpg"
                                                                          style="height:356px; width:600px"/></strong></p>
                                <p style="text-align:justify">Được sinh ra từ hai d&ograve;ng m&aacute;u Mỹ v&agrave; Iraq,
                                    thế nhưng con trai lại kh&ocirc;ng &ldquo;thừa hưởng&rdquo; chiều cao ưu t&uacute; của t&ocirc;i,
                                    m&agrave; lại thấp l&ugrave;n giống mẹ. Thử qua nhiều c&aacute;ch kh&aacute;c nhau, cuối
                                    c&ugrave;ng vợ chồng t&ocirc;i cũng &ldquo;cải thiện&rdquo; chiều cao th&agrave;nh c&ocirc;ng
                                    cho con (Anh David James - 36 tuổi - Washington - Hoa Kỳ)</p>
                                <p style="text-align:center"><a
                                            href="tam-su-cua-co-gai-an-do-tung-khong-lay-duoc-chong-vi-thap-lun-155184.html"><strong>T&acirc;m
                                            sự của c&ocirc; g&aacute;i Ấn Độ từng kh&ocirc;ng lấy được chồng b&igrave; thấp l&ugrave;n</strong></a>
                                </p>
                                <p style="text-align:center"><img alt=""
                                                                  src="/frontend/upload/hinhchitiet/images/tintuc/tam-su-cua-co-gai-an-do-tung-khong-lay-duoc-chong-vi-thap-lun(1).jpg"/>
                                </p>
                                <p>Bao nhi&ecirc;u đ&aacute;m đến hỏi cũng đều &ldquo;lắc đầu&rdquo;. Kh&ocirc;ng phải v&igrave;
                                    họ ch&ecirc; t&ocirc;i xấu m&agrave; chỉ v&igrave; t&ocirc;i l&ugrave;n. Những tưởng sẽ
                                    chẳng thể t&igrave;m được một tấm chồng y&ecirc;u thương m&igrave;nh, nhưng cuối c&ugrave;ng
                                    mọi chuyện đ&atilde; kh&aacute;c nhờ sự xuất hiện của NUBEST TALL (Anita Modi - 17 tuổi
                                    - Raikot - Ấn Độ)</p>
                                <p style="text-align:center"><a
                                            href="muon-con-cai-thien-chieu-cao-thanh-cong-can-dat-niem-tin-dung-cho-155181.html"><strong>Muốn
                                            con cải thiện chiều cao, cần đặt niềm tin đ&uacute;ng chỗ</strong></a></p>
                                <p style="text-align:center"><img alt=""
                                                                  src="/frontend/upload/hinhchitiet/images/tintuc/muon-con-cai-thien-chieu-cao-thanh-cong-can-dat-niem-tin-dung-cho-1.jpg"/>
                                </p>
                                <p>&ldquo;V&oacute;c d&aacute;ng cao r&aacute;o l&agrave; lợi thế lớn gi&uacute;p con c&oacute;
                                    được bước đệm tốt hơn trong tương lai. Ch&iacute;nh v&igrave; vậy, t&ocirc;i l&uacute;c
                                    n&agrave;o cũng t&igrave;m c&aacute;ch gi&uacute;p con cải thiện chiều cao. Nhờ t&igrave;m
                                    được một loại thực phẩm bảo vệ sức khỏe gi&uacute;p hỗ trợ tăng chiều cao uy t&iacute;n,
                                    t&ocirc;i tin rằng ch&aacute;u sẽ c&oacute; được chiều cao như mong muốn khi trưởng th&agrave;nh&rdquo;.
                                    Theo chia sẻ từ Nhạc sĩ Minh Ch&acirc;u &ndash; Hội vi&ecirc;n hội Nhạc sĩ Việt Nam.</p>
                                <p style="text-align:center"><strong><a
                                                href="hoi-han-vi-danh-mat-co-hoi-cao-lon-cua-con-155165.html">Hối hận v&igrave;
                                            &quot;đ&aacute;nh mất&quot; cơ hội cao lớn của con</a></strong></p>
                                <p style="text-align:center"><img alt=""
                                                                  src="/frontend/upload/hinhchitiet/images/gia-nhu-toi-biet-den-nubest-tall-som-hon.jpg"/>
                                </p>
                                <p>Sau khi cải thiện chiều cao cho đứa con trai &uacute;t th&agrave;nh c&ocirc;ng, nh&igrave;n
                                    thấy d&aacute;ng v&oacute;c khi&ecirc;m tốn của đứa con trai lớn. T&ocirc;i tiếc nuối,
                                    gi&aacute; như m&igrave;nh biết đến NUBEST TALL sớm hơn th&igrave; tốt biết mấy&hellip;
                                    (Chị H&agrave; Thị Mơ - 38 tuổi - Ph&uacute; Quốc - Ki&ecirc;n Giang)</p></div>
                        </div>
                        <div class="thongtinsanpham">
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-bottom:15px"><a
                                        data-toggle="modal" data-target="#myModal_dathang" style="color:#fff">
                                    <button type="submit" class="animated btn_dathang_news" name="btnAddcart"><i
                                                class="fa fa-shopping-cart"></i> ĐẶT HÀNG
                                    </button>
                                </a></div>
                            <div class="ttsp_innews"><p
                                        style="padding-left: 15px; padding-right: 15px; text-align: justify;"><strong>Chia sẻ
                                        của Chuyên gia Dinh dưỡng – BS Nguyễn Thị Ngọc Hương về cách lựa chọn và sử dụng thực phẩm
                                        bảo vệ sức khỏe giúp hỗ trợ tăng chiều cao:</strong></p>
                                <div class="youtube" id="LDp4yAT9RAk"></div>
                                <div class="clearfix"></div>
                                <div id="uytin" class="top20">
                                    <div class="block"><a href="http://congbosanpham.vfa.gov.vn/" target="_blank"
                                                          title="Click xem chi tiết" rel="nofollow">
                                            <div class="item first">
                                                <div class="has_icon"><i class="fa fa-search" aria-hidden="true"
                                                                         style="transform: scaleX(-1)"></i></div>
                                                <div class="has_content"><span>TRA CỨU XÁC NHẬN CÔNG BỐ<br>SẢN PHẨM TẠI VIỆT NAM</span>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="block"><a
                                                href="https://www.amazon.com/s?me=A2509EVQU23VKV&amp;merchant=A2509EVQU23VKV&amp;qid=1517275866"
                                                target="_blank" title="Click xem chi tiết" rel="nofollow">
                                            <div class="item third ">
                                                <div class="has_icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </div>
                                                <div class="has_content"><span>CÁC SẢN PHẨM DO TVBUY PHÂN PHỐI ĐANG ĐƯỢC BÁN TRÊN AMAZON TẠI MỸ</span>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="block"><a href="javascript:void(0);" target="_blank" data-toggle="modal"
                                                          data-target="#canhbaohanggia">
                                            <div class="item second ">
                                                <div class="has_icon"><i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </div>
                                                <div class="has_content"><span>HƯỚNG DẪN CÁCH KIỂM TRA<br>HÀNG CHÍNH HÃNG</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="modal fade in" id="canhbaohanggia" tabindex="-1" role="dialog"
                                             aria-labelledby="myModal3Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="overflow: hidden;">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true"><i class="fa fa-times-circle"
                                                                                      aria-hidden="true"></i></button>
                                                    </div>
                                                    <div class="modal-body" style="max-height: 778px; overflow-y: auto;"><p>
                                                            Hãy là người tiêu dùng THÔNG MINH với 3 bước kiểm tra TPCN giúp hỗ
                                                            trợ tăng chiều cao CHÍNH HÃNG từ Mỹ như sau:</p>
                                                        <ul>
                                                            <li>Sản phẩm phải được Cơ quan quản lý nhà nước tại Việt Nam cấp
                                                                xác nhận công bố lưu hành trên toàn quốc và phải tra cứu
                                                                được online trên website <a
                                                                        href="http://congbosanpham.vfa.gov.vn/"
                                                                        target="_blank" rel="nofollow"><span
                                                                            style="color:#001ffe">tại đây.</span></a></li>
                                                            <li>Nếu là HÀNG CHÍNH HÃNG đang được bán tại nước Mỹ thì phải
                                                                được
                                                                <a href="tim-kiem5824.html?s=ch%E1%BB%A9ng+nh%E1%BA%ADn+FDA+Hoa+K%E1%BB%B3"
                                                                   target="_blank"><span style="color:#001ffe"> FDA Hoa Kỳ cấp chứng nhận</span></a>
                                                                lưu hành tự do. <i>(Nếu FDA Hoa Kỳ không cấp phép thì sản
                                                                    phẩm đó chỉ đủ điều kiện xuất khẩu và không được bán tại
                                                                    thị trường Mỹ).</i> Xem chi tiết sản phẩm NUBEST TALL
                                                                đang được bán ở Mỹ <a
                                                                        href="https://www.amazon.com/s?me=A2509EVQU23VKV&amp;merchant=A2509EVQU23VKV&amp;qid=1517275866"
                                                                        target="_blank" rel="nofollow"><span
                                                                            style="color:#001ffe"><b>tại đây.</b></span></a>
                                                            </li>
                                                            <li>Có thể kiểm tra Mã vạch, QR Code của sản phẩm bằng các phần
                                                                mềm như <a href="http://icheck.vn/" target="_blank"
                                                                           rel="nofollow"><span style="color:#001ffe"> ICHECK</span></a>
                                                                để truy xuất thông tin chính xác nguồn gốc xuất xứ sản phẩm.
                                                            </li>
                                                            <li><strong>Lưu ý:</strong> Hiện nay với loại Tem Chống Hàng Giả
                                                                thông thường đang bị làm giả tràn lan. Quý khách hàng lưu ý
                                                                nên chọn mua các sản phẩm có Tem Chống Hàng Giả tích hợp
                                                                loại SMS để có thể xác nhận bằng tin nhắn từ tổng đài.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form_in_page" style="max-width:300px;margin: 25px auto;">
                                    <div class="dor-vertical-title" style="background: #333;border:2px solid #333;">
                                        <div class="vertical-menu-head">
                                            <div class="vertical-menu-head-inner">
                                                <div class="vertical-menu-head-wrapper">
                                                    <div class="dor_title_block text-center" style="display: block;"><span
                                                                style="font-size: 20px">Bác sĩ tư vấn</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form_tu_van" style="background: #EFEFEF ;">
                                        <form name="frmNhanTuVan" method="POST" class="submit_form "
                                              action="https://www.tvbuy.vn/tu-van"><input type="hidden" name="_token"
                                                                                          value="zgF90zfAolNkfJLv1L0eZavbafXLAQRRbpUVm7hF"><input
                                                    type="hidden" name="url"
                                                    value="cach-giup-con-thoat-lun-cua-nha-ngoai-giao-trung-quoc-155187.html"><input
                                                    type="hidden" name="utm_source" value=""><input type="hidden"
                                                                                                    name="utm_medium"
                                                                                                    value=""><input
                                                    type="hidden" name="utm_campaign" value="">
                                            <div class="content_form">
                                                <div class="form-group"><label>Họ và tên:</label>
                                                    <div class="inside"><input type="text" id="txtName" name="name"
                                                                               placeholder="Nhập tên" class="txtNameF"
                                                                               data-validation="required"
                                                                               data-validation-error-msg="Vui lòng nhập trường này"><i
                                                                class="fa fa-user" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="form-group"><label>Số điện thoại:</label>
                                                    <div class="inside"><input type="text" id="txtSdt" name="phone"
                                                                               placeholder="Nhập số điện thoại"
                                                                               class="txtSdtF" data-validation="custom"
                                                                               data-validation="custom"
                                                                               data-validation-regexp="^0[0-9]{9,10}$"
                                                                               data-validation-error-msg="Giá trị không hợp lệ"><i
                                                                class="fa fa-phone" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="form-group"><label>Email:</label>
                                                    <div class="inside"><input type="email" id="txtEmail" name="email"
                                                                               placeholder="Nhập email" class="txtEmail"
                                                                               data-validation="email"
                                                                               data-validation-error-msg="Vui lòng nhập email hợp lệ"><i
                                                                class="fa fa-envelope" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="form-group"><label>Nội dung:</label>
                                                    <div class="inside"><textarea id="txtCauhoi" name="content"
                                                                                  placeholder="Nhập nội dung" rows="3"
                                                                                  class="txtCauhoiF"></textarea><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-center">
                                                        <button type="submit" id="btnSend" class="btn btn-lg gui_dk">Gửi câu
                                                            hỏi
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="block_thong_tin_san_pham">
                                    <div class="thongtinchitiet">
                                        <div class="heading_title">Thực phẩm bảo vệ sức khỏe <span class="tensp"
                                                                                                   data-text="NUBEST TALL">NUBEST TALL</span>
                                        </div>
                                        <div class="line_title"></div>
                                        <div class="chi_tiet">
                                            <div class="cot_trai text-center"><img width="90%"
                                                                                   src="/frontend/front/images/nubesttall-bottle.png"
                                                                                   alt="Hộp NUBEST TALL">
                                                <div class="gia_tien">Giá: 1.090.000đ</div>
                                                <div class="clearfix">
                                                    <div class="call-to-action text-center"><a class="is_button"
                                                                                               data-toggle="modal"
                                                                                               data-target="#myModal_dathang"
                                                                                               href="javascript:void(0);"><span
                                                                    class="animated_text"><i
                                                                        class="fa fa-cart-plus"></i> Đặt hàng</span></a></div>
                                                </div>
                                            </div>
                                            <div class="cot-phai">
                                                <div class="im_table">
                                                    <div class="item_row">
                                                        <div class="left_child">CÔNG DỤNG</div>
                                                        <div class="right_child">Giúp bổ sung Nano Canxi và các dưỡng chất
                                                            hỗ trợ phát triển chiều cao và trí não cho trẻ và thanh, thiếu
                                                            niên đang tuổi phát triển.
                                                        </div>
                                                    </div>
                                                    <div class="item_row">
                                                        <div class="left_child">ĐỐI TƯỢNG <br/>SỬ DỤNG</div>
                                                        <div class="right_child"><p>- Thanh thiếu niên và trẻ em từ 5 tuổi
                                                                trở lên, đặc biệt là giai đoạn dậy thì. </p>
                                                            <p>- Trẻ bị còi xương, chậm lớn.</p></div>
                                                    </div>
                                                    <div class="item_row">
                                                        <div class="left_child">HƯỚNG DẪN <br/>SỬ DỤNG</div>
                                                        <div class="right_child"><p>Uống với nước trước các bữa ăn 30
                                                                phút.</p>
                                                            <p>- Từ 5-10 tuổi: Ngày uống 2 lần, 1 viên/lần.</p>
                                                            <p>- Từ 10-20 tuổi: Ngày uống 3 lần, 1 viên/lần.</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chung_nhan_sp">
                                            <div class="noi_dung"><p><strong>Tại Mỹ:</strong> Sản phẩm được FDA Hoa Kỳ (Cục
                                                    quản lý Thực phẩm & Dược phẩm Hoa Kỳ) cấp phép lưu hành tự do tại Mỹ số: <b>RZH3-S54Y</b>.
                                                </p>
                                                <p><strong>Tại Việt Nam:</strong> NUBEST TALL được cơ quan quản lý nhà nước
                                                    tại Việt Nam cấp giấy xác nhận công bố lưu hành trên toàn quốc số: <b>3309/2017/ATTP-XNCB</b>.
                                                    Giấy phép quảng cáo số: <b>00563/2017/ATTP-XNQC</b>.</p>
                                                <p>NUBEST TALL được sản xuất trên dây chuyền công nghệ hiện đại, tiên tiến
                                                    của Mỹ, đạt các tiêu chuẩn chất lượng sản xuất theo chuẩn Quốc tế như:
                                                    <strong>cGMP, HACCP.</strong></p></div>
                                            <div class="hinh_chung_nhan">
                                                <div class="item_chung_nhan"><a class="fancybox"
                                                                                href="../www.nubesttall.com/images/04082017/chung-nhan-fda-hoa-ky-big-size-h650-03.jpg">
                                                        <image src="/frontend/front/images/chung-nhan-fda-small.jpg"
                                                               alt="Chứng nhận FDA Hoa Kỳ"/>
                                                    </a>
                                                    <div class="text-center">Chứng nhận FDA Hoa Kỳ</div>
                                                </div>
                                                <div class="item_chung_nhan"><a class="fancybox"
                                                                                href="../www.nubesttall.com/images/04082017/chung-nhan-gmp-haccp-big-size-h650-01.jpg">
                                                        <image src="/frontend/front/images/chung-nhan-cgmp-haccp-small.jpg"
                                                               alt="Chứng nhận HACCP"/>
                                                    </a>
                                                    <div class="text-center">Chứng nhận cGMP, HACCP</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="row">
                                            <div class="col-md-6 cot_trai"><p>Phân phối tại Mỹ bởi: Nubest Supplements
                                                    USA</p>
                                                <p>Nhập khẩu bởi: Công ty TNHH Nubest (Nubest Vietnam)</p>
                                                <p>Đ/c: 13 S7, Tây Thạnh, Tân Phú, TP. HCM</p></div>
                                            <div class="col-md-6 cot_phai"><p>Phân phối độc quyền tại VN bởi: Công ty TNHH
                                                    Đầu tư Quốc tế Hoàn Mỹ (TVBUY)</p>
                                                <p>Đ/c: 361 Lê Trọng Tấn, P. Sơn Kỳ, Q. Tân Phú, TP. HCM</p></div>
                                            <div class="clearfix"></div>
                                            <hr style="margin: 15px 15px 5px 15px;border-top: 1px solid #ffff;">
                                            <div class="note_thucpham">Thực phẩm này không phải là thuốc, không có tác dụng
                                                thay thế thuốc chữa bệnh.
                                            </div>
                                            <div class="note_thucpham" style="font-size: 8px;">Hiệu quả có thể khác nhau tùy
                                                vào cơ địa của từng người
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p style="padding: 15px 15px 0 15px;">Xem thêm thông tin về sản phẩm hỗ trợ tăng chiều cao
                                    hiệu quả của Mỹ <a href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html" title="">tại
                                        đây</a>.</p>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-bottom:15px"><a
                                            data-toggle="modal" data-target="#myModal_dathang" style="color:#fff">
                                        <button type="submit" class="animated btn_dathang_news" name="btnAddcart"><i
                                                    class="fa fa-shopping-cart"></i> ĐẶT HÀNG
                                        </button>
                                    </a></div>
                            </div>
                        </div>
                        <div class="fb-comments"
                             data-href="https://www.tvbuy.vn/cach-giup-con-thoat-lun-cua-nha-ngoai-giao-trung-quoc-155187"
                             data-width="100%" data-numposts="5"></div>
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
    <div class="top30">
        <div class="contain block_full block_blogsuckhoe">
            <div class="container">
                <div class="block">
                    <div class="bd_bottom">
                        <div class="bg_title"><h3><a href="blog-suc-khoe.html" title="">Blog sức khỏe</a></h3></div>
                    </div>
                    <div class="list_item row" id="results_blogNews">
                        <div class="col-md-3 col-sm-4">
                            <div class="item">
                                <div class="item-inner">
                                    <div class="blog-img"><a
                                                href="su-thay-doi-chieu-cao-ngoan-muc-cua-chang-trai-quatar-sau-chuyen-du-hoc-155191.html"
                                                title="Sự thay đổi chiều cao ngoạn mục của chàng trai Quatar sau chuyến du học"><img
                                                    src="/frontend/images/news/quatar-thap-lun-2.jpg"
                                                    alt="Sự thay đổi chiều cao ngoạn mục của chàng trai Quatar sau chuyến du học"></a>
                                    </div>
                                    <div class="blog-content"><h3 class="blog-title"><a
                                                    href="su-thay-doi-chieu-cao-ngoan-muc-cua-chang-trai-quatar-sau-chuyen-du-hoc-155191.html"
                                                    title="Sự thay đổi chiều cao ngoạn mục của chàng trai Quatar sau chuyến du học">Sự
                                                thay đổi chiều cao ngoạn mục của chàng trai Quatar sau chuyến du học</a></h3>
                                        <div class="date_author"><i class="fa fa-calendar" aria-hidden="true"></i>13/04/2018
                                            &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-user" aria-hidden="true"></i>Nguyễn
                                            Hồng
                                        </div>
                                        <div class="blog-des"><span>Nhìn đứa con trai cao lớn, rắn rỏi, ra dáng thanh niên, trụ cột của gia đình mà tôi vui không tả nổi. Những cảm giác này dù có sở hữu hết tiền bạc ở đất nước Quatar này tôi cũng không thể đổi lại được. (Bassam Alrawi – 47 tuổi - Doha Quatar).</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="item">
                                <div class="item-inner">
                                    <div class="blog-img"><a
                                                href="hanh-trinh-tam-biet-giay-don-cua-nu-sinh-han-quoc-155190.html"
                                                title="Hành trình “tạm biệt” giày độn của nữ sinh Hàn Quốc"><img
                                                    src="/frontend/images/news/hanh-trinh-tam-biet-giay-don-cua-nu-sinh-han-quoc-bia.jpg"
                                                    alt="Hành trình “tạm biệt” giày độn của nữ sinh Hàn Quốc"></a></div>
                                    <div class="blog-content"><h3 class="blog-title"><a
                                                    href="hanh-trinh-tam-biet-giay-don-cua-nu-sinh-han-quoc-155190.html"
                                                    title="Hành trình “tạm biệt” giày độn của nữ sinh Hàn Quốc">Hành trình “tạm
                                                biệt” giày độn của nữ sinh Hàn Quốc</a></h3>
                                        <div class="date_author"><i class="fa fa-calendar" aria-hidden="true"></i>13/04/2018
                                            &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-user" aria-hidden="true"></i>Minh Hiệp
                                        </div>
                                        <div class="blog-des"><span>Không thể tin, trong một thời gian ngắn NUBEST TALL có thể giúp tôi cao nhanh như vậy, giờ đây tôi đã hoàn toàn tự tin đến trường mà chẳng phải “lệ thuộc” vào đôi giày độn, vừa cao vừa chật ấy nữa. (Ji-Young, 17 tuổi, Hàn Quốc)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="item">
                                <div class="item-inner">
                                    <div class="blog-img"><a
                                                href="ong-bo-viet-kieu-ke-lai-hanh-trinh-di-tim-chieu-cao-cho-con-155189.html"
                                                title="Ông bố Việt kiều kể lại hành trình “đi tìm” chiều cao cho con"><img
                                                    src="/frontend/images/news/ong-bo-viet-kieu-ke-lai-hanh-trinh-di-tim-chieu-cao-cho-con-bia.jpg"
                                                    alt="Ông bố Việt kiều kể lại hành trình “đi tìm” chiều cao cho con"></a></div>
                                    <div class="blog-content"><h3 class="blog-title"><a
                                                    href="ong-bo-viet-kieu-ke-lai-hanh-trinh-di-tim-chieu-cao-cho-con-155189.html"
                                                    title="Ông bố Việt kiều kể lại hành trình “đi tìm” chiều cao cho con">Ông bố
                                                Việt kiều kể lại hành trình “đi tìm” chiều cao cho con</a></h3>
                                        <div class="date_author"><i class="fa fa-calendar" aria-hidden="true"></i>13/04/2018
                                            &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-user" aria-hidden="true"></i>Minh Hiệp
                                        </div>
                                        <div class="blog-des"><span>Khi cuộc sống ở Mỹ dần ổn định, nhìn con thấp bé so với bè bạn, tôi bắt đầu nghĩ đến chuyện “tìm lại” chiều cao cho con. Bất ngờ, sau hơn 2 năm sử dụng NUBEST TALL, chiều cao của con trai tôi đã cải thiện một cách tích cực. (Anh Kent Nguyen - 55 tuổi - Taxas - Hoa Kỳ)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="item">
                                <div class="item-inner">
                                    <div class="blog-img"><a
                                                href="cuu-linh-my-ke-ve-hanh-trinh-khac-phuc-chieu-cao-cho-con-155186.html"
                                                title="Cựu lính Mỹ kể về hành trình “khắc phục” chiều cao cho con"><img
                                                    src="/frontend/images/news/bialinhmy.jpg"
                                                    alt="Cựu lính Mỹ kể về hành trình “khắc phục” chiều cao cho con"></a></div>
                                    <div class="blog-content"><h3 class="blog-title"><a
                                                    href="cuu-linh-my-ke-ve-hanh-trinh-khac-phuc-chieu-cao-cho-con-155186.html"
                                                    title="Cựu lính Mỹ kể về hành trình “khắc phục” chiều cao cho con">Cựu lính Mỹ
                                                kể về hành trình “khắc phục” chiều cao cho con</a></h3>
                                        <div class="date_author"><i class="fa fa-calendar" aria-hidden="true"></i>11/04/2018
                                            &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-user" aria-hidden="true"></i>Minh Hiệp
                                        </div>
                                        <div class="blog-des"><span>Được sinh ra từ hai dòng máu Mỹ và Iraq, thế nhưng con trai lại không “thừa hưởng” chiều cao ưu tú của tôi, mà lại thấp lùn giống mẹ. Thử qua nhiều cách khác nhau, cuối cùng vợ chồng tôi cũng “cải thiện” chiều cao thành công cho con (Anh David James - 36 tuổi - Washington - Hoa Kỳ)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="see_more bg_yellow top20"><a href="javascript:void(0)" id="btn_more_blogNews">Xem thêm <i
                                    class="fa fa-caret-down"></i><img src="images/loading_more.gif" class="animation_image"></a>
                    </div>
                </div>
            </div>
            <script type="text/javascript"> var page = 1, next = true;
                $("#btn_more_blogNews").click(function (e) {
                    $('.animation_image').show();
                    if (next) {
                        load_blogNews(++page);
                    } else {
                        $('.animation_image').fadeOut('slow');
                    }
                });
                function load_blogNews(page) {
                    $.get('more-blog-news.html', {page: page, id: 155187, cat_id: 10}, function (data) {
                        if (data.trim().length == 0) {
                            next = false;
                        }
                        $("#results_blogNews").append(data);
                        $('.animation_image').fadeOut('slow');
                    });
                } </script>
        </div>
    </div>
    <div class="sp_related top30">
        <div class="container">
            <div class="contain block_full">
                <div class="block block_right">
                    <div class="bd_bottom">
                        <div class="bg_title"><h3>Sản phẩm ưa chuộng</h3></div>
                    </div>
                    <div class="product product_list top20 owl-carousel">
                        <div class="item">
                            <div class="item-inner line line_right"><a
                                        href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html" title="NUBEST TALL"><span
                                            class="cover_image"><img src="images/products/details/200_200/nubest-tall-front.jpg"
                                                                     alt="NUBEST TALL"></span></a>
                                <div class="product_name"><a href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html"
                                                             title="NUBEST TALL">NUBEST TALL </a></div>
                                <span>(60 viên nang)</span>
                                <div class="product_rating">
                                    <div class="rateYo4_5"></div>
                                </div>
                                <div class="product_description">
                                    <div class="slogan">TPBVSK giúp hỗ trợ tăng chiều cao</div>
                                    <div class="product_price"> 1,090,000 VNĐ</div>
                                </div>
                                <div class="product_cart">
                                    <button class="addToCart" data-id="2"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-inner line line_right"><a
                                        href="doctor-plus-usa-vien-uong-tang-chieu-cao-cua-my.html" title="DOCTOR PLUS"><span
                                            class="cover_image"><img src="images/products/details/200_200/doctor-plus-front.jpg"
                                                                     alt="DOCTOR PLUS"></span></a>
                                <div class="product_name"><a href="doctor-plus-usa-vien-uong-tang-chieu-cao-cua-my.html"
                                                             title="DOCTOR PLUS">DOCTOR PLUS </a></div>
                                <span>(30 viên nang)</span>
                                <div class="product_rating">
                                    <div class="rateYo4_5"></div>
                                </div>
                                <div class="product_description">
                                    <div class="slogan">TPBVSK hỗ trợ phát triển chiều cao</div>
                                    <div class="product_price"> 590,000 VNĐ</div>
                                </div>
                                <div class="product_cart">
                                    <button class="addToCart" data-id="60"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-inner line line_right"><a
                                        href="doctor-plus-vien-tang-chieu-cao-hang-dau-tai-my-60-vien.html" title="DOCTOR PLUS"><span
                                            class="cover_image"><img
                                                src="images/products/details/200_200/doctor-plus-nubest-supplements-usa-norax-supplements.jpg"
                                                alt="DOCTOR PLUS"></span></a>
                                <div class="product_name"><a
                                            href="doctor-plus-vien-tang-chieu-cao-hang-dau-tai-my-60-vien.html"
                                            title="DOCTOR PLUS">DOCTOR PLUS </a></div>
                                <span>(60 viên nang)</span>
                                <div class="product_rating">
                                    <div class="rateYo4_5"></div>
                                </div>
                                <div class="product_description">
                                    <div class="slogan">TPBVSK hỗ trợ phát triển chiều cao</div>
                                    <div class="product_price"> 1,150,000 VNĐ</div>
                                </div>
                                <div class="product_cart">
                                    <button class="addToCart" data-id="61"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-inner line line_right"><a
                                        href="growth-plus-thuc-pham-chuc-nang-tang-chieu-cao.html" title="GROWTH PLUS"><span
                                            class="cover_image"><img src="images/products/details/200_200/growth-plus.jpg"
                                                                     alt="GROWTH PLUS"></span></a>
                                <div class="product_name"><a href="growth-plus-thuc-pham-chuc-nang-tang-chieu-cao.html"
                                                             title="GROWTH PLUS">GROWTH PLUS </a></div>
                                <span>(60 viên nang)</span>
                                <div class="product_rating">
                                    <div class="rateYo4"></div>
                                </div>
                                <div class="product_description">
                                    <div class="slogan">TPCN hỗ trợ phát triển chiều cao</div>
                                    <div class="product_price"> 990,000 VNĐ</div>
                                </div>
                                <div class="product_cart">
                                    <button class="btn disabled" data-id="18"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection