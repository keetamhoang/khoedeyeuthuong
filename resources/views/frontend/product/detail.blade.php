@extends('frontend')

@section('content')
    <div class="has_cate details_page">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div id="menu_category">
                                <div id="dor-verticalmenu">
                                    <div class="dor-vertical-title"
                                         style="background: #4BC0B7FF;border:2px solid #4BC0B7FF;">
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
                                                                    class="menu-icon"><i
                                                                        class="fa icon-icon-san-pham-hot"></i></span><span
                                                                    class="menu-title">Sản phẩm hot</span><span
                                                                    class="menu-label-hot"><span>hot</span></span></a></li>
                                                    <li class="bold"><a target="_self"
                                                                        href="san-pham-tang-chieu-cao.html"><span
                                                                    class="menu-icon"><i
                                                                        class="fa icon-icon-san-pham-tang-chieu-cao"></i></span><span
                                                                    class="menu-title">Sản phẩm tăng chiều cao</span></a></li>
                                                    <li class="bold"><a target="_self" href="san-pham-lam-dep.html"><span
                                                                    class="menu-icon"><i class="fa icon-icon-san-pham-lam-dep"></i></span><span
                                                                    class="menu-title">Sản phẩm làm đẹp</span></a></li>
                                                    <li class="bold"><a target="_self" href="san-pham-sinh-ly.html"><span
                                                                    class="menu-icon"><i class="fa icon-icon-san-pham-sinh-ly"></i></span><span
                                                                    class="menu-title">Sản phẩm sinh lý</span></a></li>
                                                    <li class="bold"><a target="_self" href="san-pham-xuong-khop.html"><span
                                                                    class="menu-icon"><i
                                                                        class="fa icon-icon-san-pham-xuong-khop"></i></span><span
                                                                    class="menu-title">Sản phẩm xương khớp</span></a></li>
                                                    <li class="bold"><a target="_self" href="san-pham-suc-khoe.html"><span
                                                                    class="menu-icon"><i class="fa icon-icon-san-pham-suc-khoe"></i></span><span
                                                                    class="menu-title">Sản phẩm sức khỏe</span></a></li>
                                                    <li class="bold"><a target="_self" href="nhom-san-pham-khac.html"><span
                                                                    class="menu-icon"><i
                                                                        class="fa icon-icon-san-pham-khac"></i></span><span
                                                                    class="menu-title">Nhóm sản phẩm khác</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 middle nopadding">
                            <div id="dor_search_top">
                                <form method="get" action="https://www.tvbuy.vn/tim-kiem" id="searchbox"
                                      class="form-inline">
                                    <div class="dor_search form-group"><input class="search_query form-control" type="text"
                                                                              id="dor_query_top" name="s" value=""
                                                                              placeholder="Tìm kiếm ..." autocomplete="off">
                                        <button type="submit" id="submit_search" class="btn btn-default"
                                                style="background: #4BC0B7FF;border:1px solid #4BC0B7FF;"><i
                                                    class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="breadcrumbs_page top15">
                            <ul itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a
                                            href="index.html" title="Trang chủ" itemprop="item"><span
                                                itemprop="name">Trang chủ</span><i class="fa fa-angle-right"></i></a>
                                    <meta itemprop="position" content="1">
                                </li>
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a
                                            href="san-pham-tang-chieu-cao.html" title="Xem tất cả Sản phẩm tăng chiều cao"
                                            itemprop="item"><span itemprop="name">Sản phẩm tăng chiều cao</span><i
                                                class="fa fa-angle-right"></i></a>
                                    <meta itemprop="position" content="2">
                                </li>
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a
                                            itemprop="item"
                                            title="Sản phẩm NUBEST TALL - TPBVSK giúp hỗ trợ tăng chiều cao"><span
                                                itemprop="name">NUBEST TALL - TPBVSK giúp hỗ trợ tăng chiều cao</span></a>
                                    <meta itemprop="position" content="3">
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 nopadding_right">
                            <div id="content_page">
                                <div id="detail-product">
                                    <div class="thumb">
                                        <div class="selectors nopadding-left"><a class="mz-thumb" data-zoom-id="Zoom-1"
                                                                                 title="NUBEST TALL - TPBVSK giúp hỗ trợ tăng chiều cao"
                                                                                 href="/images/products/details/nubest-tall.jpg"
                                                                                 data-image="/images/products/details/400_400/nubest-tall.jpg"><img
                                                        srcset="https://www.tvbuy.vn/images/products/details/60_60/nubest-tall.jpg"
                                                        src="/images/products/details/60_60/nubest-tall.jpg" alt="NUBEST TALL"></a><a
                                                    class="mz-thumb" data-zoom-id="Zoom-1"
                                                    title="NUBEST TALL - TPBVSK giúp hỗ trợ tăng chiều cao"
                                                    href="/images/products/details/chai-hop-nubesttall.jpg"
                                                    data-image="/images/products/details/400_400/chai-hop-nubesttall.jpg"><img
                                                        srcset="https://www.tvbuy.vn/images/products/details/60_60/chai-hop-nubesttall.jpg"
                                                        src="/images/products/details/60_60/chai-hop-nubesttall.jpg"
                                                        alt="NUBEST TALL"></a><a class="mz-thumb" data-zoom-id="Zoom-1"
                                                                                 title="NUBEST TALL - TPBVSK giúp hỗ trợ tăng chiều cao"
                                                                                 href="/images/products/details/nubest-tall-right.jpg"
                                                                                 data-image="/images/products/details/400_400/nubest-tall-right.jpg"><img
                                                        srcset="https://www.tvbuy.vn/images/products/details/60_60/nubest-tall-right.jpg"
                                                        src="/images/products/details/60_60/nubest-tall-right.jpg" alt="NUBEST TALL"></a><a
                                                    class="mz-thumb" data-zoom-id="Zoom-1"
                                                    title="NUBEST TALL - TPBVSK giúp hỗ trợ tăng chiều cao"
                                                    href="/images/products/details/chung-nhan-fda-hoa-ky-nubest-tall.jpg"
                                                    data-image="/images/products/details/400_400/chung-nhan-fda-hoa-ky-nubest-tall.jpg"><img
                                                        srcset="https://www.tvbuy.vn/images/products/details/60_60/chung-nhan-fda-hoa-ky-nubest-tall.jpg"
                                                        src="/images/products/details/60_60/chung-nhan-fda-hoa-ky-nubest-tall.jpg"
                                                        alt="NUBEST TALL"></a><a class="mz-thumb" data-zoom-id="Zoom-1"
                                                                                 title="NUBEST TALL - TPBVSK giúp hỗ trợ tăng chiều cao"
                                                                                 href="/images/products/details/chung-nhan-cgmp-haccp-800x800.jpg"
                                                                                 data-image="/images/products/details/400_400/chung-nhan-cgmp-haccp-800x800.jpg"><img
                                                        srcset="https://www.tvbuy.vn/images/products/details/60_60/chung-nhan-cgmp-haccp-800x800.jpg"
                                                        src="/images/products/details/60_60/chung-nhan-cgmp-haccp-800x800.jpg"
                                                        alt="NUBEST TALL"></a></div>
                                        <div class="preview">
                                            <div class="app-figure" id="zoom-fig"><a id="Zoom-1" class="MagicZoom"
                                                                                     href="/images/products/details/nubest-tall-front.jpg"><img
                                                            srcset="https://www.tvbuy.vn/images/products/details/400_400/nubest-tall-front.jpg"
                                                            src="/images/products/details/60_60/nubest-tall-front.jpg"
                                                            alt="NUBEST TALL"/></a></div>
                                        </div>
                                    </div>
                                    <div class="summary"><h1>NUBEST TALL - TPBVSK giúp hỗ trợ tăng chiều cao</h1>
                                        <div class="expand">
                                            <div class="rateYo4_5"></div>
                                            <span>Đánh giá và nhận xét (50)</span><span><a href="javascript:void(0)"
                                                                                           id="nhan-xet"><i
                                                            class="fa fa-pencil-square-o"></i>Viết nhận xét</a></span></div>
                                        <div class="price"> 1,090,000 đ</div>
                                        <div class="clearfix">
                                            <div class="content">
                                                <div class="cot-trai">
                                                    <ul class="fields">
                                                        <li><label>Tình trạng: </label> Còn hàng</li>
                                                        <li><label>Quy cách: </label> 60 viên/hộp, lọ</li>
                                                        <li><label>Xuất xứ: </label> Nubest Supplements - Mỹ</li>
                                                        <li><label>Giấy phép: </label> 3309/2017/ATTP-XNCB</li>
                                                    </ul>
                                                    <div class="product-actions">
                                                        <div class="product-add-to-cart">
                                                            <div class="product-quantity">
                                                                <div class="count-input space-bottom"><a class="incr-btn"
                                                                                                         data-action="decrease"
                                                                                                         href="#">–</a><input
                                                                            class="quantity" type="text" name="quantity"
                                                                            value="1"/><a class="incr-btn"
                                                                                          data-action="increase"
                                                                                          href="#">&plus;</a></div>
                                                                <div class="add">
                                                                    <button class="btn btn-primary add-to-cart addToCart"
                                                                            data-id="2"><span title="Thêm giỏ hàng"><i
                                                                                    class="fa fa-shopping-cart shopping-cart"></i> Mua hàng </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cot-phai">
                                                    <div class="call-action">
                                                        <div class="callback">
                                                            <div class="heading">YÊU CẦU GỌI LẠI</div>
                                                            <div class="box-form">
                                                                <form action="https://www.tvbuy.vn/tu-van" method="post"
                                                                      class="submit_form " enctype="multipart/form-data">
                                                                    <input type="hidden" name="_token"
                                                                           value="zgF90zfAolNkfJLv1L0eZavbafXLAQRRbpUVm7hF"><input
                                                                            type="hidden" name="url"
                                                                            value="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html"><input
                                                                            type="hidden" name="utm_source" value=""><input
                                                                            type="hidden" name="utm_medium" value=""><input
                                                                            type="hidden" name="utm_campaign" value=""><input
                                                                            class="form-control" name="phone" type="number"
                                                                            placeholder="Nhập số điện thoại..."
                                                                            data-validation="custom"
                                                                            data-validation-regexp="^0[0-9]{9,10}$"
                                                                            data-validation-error-msg="Giá trị không hợp lệ">
                                                                    <button class="btn call_me" type="submit">Gửi</button>
                                                                </form>
                                                                <div class="sohotline">
                                                                    <div class="text-center title">HOTLINE</div>
                                                                </div>
                                                                <a href="tel:0914650680" class="btn_hotline"><i
                                                                            class="fa fa-phone"></i>0914 650 680</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="text-center top20">
                                        <div id="uytin" style="color: #4BC0B7FF;">
                                            <div class="block"><a href="http://congbosanpham.vfa.gov.vn/" target="_blank"
                                                                  title="Click xem chi tiết" rel="nofollow">
                                                    <div class="item first">
                                                        <div class="has_icon icon-search"></div>
                                                        <div class="has_content"><span>TRA CỨU XÁC NHẬN CÔNG BỐ SẢN PHẨM TẠI VIỆT NAM</span>
                                                            <div class="nut-xem color_change"><span>Xem chi tiết<i
                                                                            class="fa fa-arrow-circle-right"></i></span></div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                            <div class="block"><a
                                                        href="https://www.amazon.com/Nubest-Capsules-Nanometer-Calcium-Natural/dp/B071R8DNX8/"
                                                        target="_blank" title="Click xem chi tiết" rel="nofollow">
                                                    <div class="item third ">
                                                        <div class="has_icon icon-buy-usa"></div>
                                                        <div class="has_content"><span>NUBEST TALL ĐANG ĐƯỢC<br>BÁN TRÊN AMAZON TẠI MỸ</span>
                                                            <div class="nut-xem color_change"><span>Xem chi tiết<i
                                                                            class="fa fa-arrow-circle-right"></i></span></div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                            <div class="block"><a href="javascript:void(0);" target="_blank"
                                                                  data-toggle="modal" data-target="#canhbaohanggia">
                                                    <div class="item second ">
                                                        <div class="has_icon icon-chu-y"></div>
                                                        <div class="has_content"><span>HƯỚNG DẪN CÁCH KIỂM TRA<br>HÀNG CHÍNH HÃNG</span>
                                                            <div class="nut-xem color_change"><span>Xem chi tiết<i
                                                                            class="fa fa-arrow-circle-right"></i></span></div>
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
                                                                                              aria-hidden="true"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body"
                                                                 style="max-height: 778px; overflow-y: auto;"><p>Hãy là
                                                                    người tiêu dùng THÔNG MINH với 3 bước kiểm tra TPCN giúp hỗ
                                                                    trợ tăng chiều cao CHÍNH HÃNG từ Mỹ như sau:</p>
                                                                <ul>
                                                                    <li>Sản phẩm phải được Cơ quan quản lý nhà nước tại Việt
                                                                        Nam cấp xác nhận công bố lưu hành trên toàn quốc và
                                                                        phải tra cứu được online trên website <a
                                                                                href="http://congbosanpham.vfa.gov.vn/"
                                                                                target="_blank" rel="nofollow"><span
                                                                                    style="color:#001ffe">tại đây.</span></a>
                                                                    </li>
                                                                    <li>Nếu là HÀNG CHÍNH HÃNG đang được bán tại nước Mỹ thì
                                                                        phải được <a
                                                                                href="nubest-tall-dat-chung-nhan-fda-hoa-ky5b12.html?utm_source=tvbuy.vn&amp;utm_medium=fda-product&amp;utm_campaign=sos"
                                                                                target="_blank"><span style="color:#001ffe"> FDA Hoa Kỳ cấp chứng nhận</span></a>
                                                                        lưu hành tự do. <i>(Nếu FDA Hoa Kỳ không cấp phép
                                                                            thì sản phẩm đó chỉ đủ điều kiện xuất khẩu và
                                                                            không được bán tại thị trường Mỹ).</i> Xem chi
                                                                        tiết sản phẩm NUBEST TALL đang được bán ở Mỹ <a
                                                                                href="https://www.amazon.com/Nubest-Capsules-Nanometer-Calcium-Natural/dp/B071R8DNX8/"
                                                                                target="_blank" rel="nofollow"><span
                                                                                    style="color:#001ffe"><b>tại đây.</b></span></a>
                                                                    </li>
                                                                    <li>Có thể kiểm tra Mã vạch, QR Code của sản phẩm bằng
                                                                        các phần mềm như <a href="http://icheck.vn/"
                                                                                            target="_blank"
                                                                                            rel="nofollow"><span
                                                                                    style="color:#001ffe"> ICHECK</span></a> để
                                                                        truy xuất thông tin chính xác nguồn gốc xuất xứ sản
                                                                        phẩm.
                                                                    </li>
                                                                    <li><strong>Lưu ý:</strong> Hiện nay với loại Tem Chống
                                                                        Hàng Giả thông thường đang bị làm giả tràn lan. Quý
                                                                        khách hàng lưu ý nên chọn mua các sản phẩm có Tem
                                                                        Chống Hàng Giả tích hợp loại SMS để có thể xác nhận
                                                                        bằng tin nhắn từ tổng đài.
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="canhtrai ipro_full">
                                    <div class="chungnhan headingsp"><strong>CHỨNG NHẬN SẢN PHẨM</strong></div>
                                    <p style="text-align:center">Thực phẩm bảo vệ sức khỏe&nbsp;<strong>NUBEST TALL</strong>&nbsp;được
                                        sản xuất tr&ecirc;n d&acirc;y truyền c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến, đạt
                                        c&aacute;c chứng nhận chất lượng sản xuất theo ti&ecirc;u Quốc tế, đ&atilde; được
                                        <strong>FDA Hoa Kỳ</strong> cấp ph&eacute;p lưu h&agrave;nh tự do tại
                                        <strong>Mỹ</strong> v&agrave; đ&atilde; được cơ quan quản l&yacute; nh&agrave; nước
                                        tại Việt Nam&nbsp;cấp giấy x&aacute;c nhận lưu h&agrave;nh tr&ecirc;n to&agrave;n
                                        quốc, số: 3309/2017/ATTP-XNCB.&nbsp;X&aacute;c nhận quảng c&aacute;o số:
                                        00563/2017/ATTP-XNQC.&nbsp;Link tra cứu trực tuyến c&aacute;c giấy ph&eacute;p sản
                                        phẩm&nbsp;tr&ecirc;n website của cơ quan quản l&yacute; nh&agrave; nước&nbsp;<a
                                                href="http://congbosanpham.vfa.gov.vn/HomePage.do" rel="nofollow"
                                                target="_blank"><span style="color:#0000cc">tại đ&acirc;y</span></a>.</p>
                                    <div class="btgrid">
                                        <div class="row row-1">
                                            <div class="col col-md-6">
                                                <div class="content">
                                                    <div class="certificate_nbtall_child"><p style="text-align:center"><a
                                                                    class="fancybox"
                                                                    href="../www.nubesttall.com/images/04082017/chung-nhan-fda-hoa-ky-big-size-h650-03.jpg"
                                                                    title="CHỨNG NHẬN FDA HOA KỲ"><img alt="CHỨNG NHẬN FDA HOA KỲ"
                                                                                                       src="../www.nubesttall.com/images/04082017/chung-nhan-fda-hoa-ky.jpg"/></a>
                                                        </p>
                                                        <p style="text-align:center"><strong>CHỨNG NHẬN FDA HOA KỲ</strong>
                                                        </p>
                                                        <p><strong>NUBEST TALL</strong>&nbsp;đ&atilde; được FDA Hoa Kỳ (Cục
                                                            quản l&yacute; Thực phẩm &amp; Dược phẩm Hoa Kỳ) cấp ph&eacute;p
                                                            lưu h&agrave;nh tự do tại Mỹ, số: RZH3-S54Y.&nbsp;<span
                                                                    style="color:#000099"><em>(Nếu kh&ocirc;ng được FDA Hoa Kỳ cấp ph&eacute;p th&igrave; sản phẩm chỉ đủ điều kiện&nbsp;xuất khẩu, kh&ocirc;ng được b&aacute;n tại Mỹ).</em></span>
                                                        </p></div>
                                                </div>
                                            </div>
                                            <div class="col col-md-6">
                                                <div class="content">
                                                    <div class="certificate_nbtall_child"><p style="text-align:center"><a
                                                                    class="fancybox"
                                                                    href="../www.nubesttall.com/images/04082017/chung-nhan-gmp-haccp-big-size-h650-01.jpg"
                                                                    title="CHỨNG NHẬN cGMP, HACCP"><img alt="CHỨNG NHẬN cGMP, HACCP"
                                                                                                        src="../www.nubesttall.com/images/04082017/chung-nhan-gmp-haccp.jpg"/></a>
                                                        </p>
                                                        <p style="text-align:center"><strong>CHỨNG NHẬN cGMP, HACCP</strong>
                                                        </p>
                                                        <p>Thực phẩm bảo vệ sức khỏe&nbsp;<strong>NUBEST TALL</strong>&nbsp;được
                                                            sản xuất tr&ecirc;n d&acirc;y chuyền c&ocirc;ng nghệ hiện đại&nbsp;của
                                                            Mỹ, đạt c&aacute;c ti&ecirc;u chuẩn chất lượng sản xuất Quốc tế
                                                            như: cGMP, HACCP.</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="area_click">
                                    <div class="headingsp huongdan"><strong>HƯỚNG DẪN SỬ DỤNG</strong></div>
                                    <div class="box-thanhphan" style="border:1px solid #eaeaea">
                                        <div class="has-background headingsp" style="clear:both"><strong>TH&Agrave;NH
                                                PHẦN</strong></div>
                                        <p style="margin-left:15px"><strong>Th&agrave;nh phần ch&iacute;nh</strong>: Nano
                                            Canxi; Collagen type II thủy ph&acirc;n;&nbsp;Nhung Hươu, Hải S&acirc;m, Nấm
                                            Phục Linh, Đỗ Trọng, Ngọc Tr&uacute;c, Xuy&ecirc;n Khung, &Iacute;ch Mẫu,&nbsp;5-HTP
                                            v&agrave; Bạch Quả.</p>
                                        <div style="clear:both">
                                            <table border="1" cellspacing="0" class="bang_tp"
                                                   style="margin-bottom:15px; margin-left:15px; width:42%">
                                                <tbody>
                                                <tr>
                                                    <th colspan="3" style="background-color:#deeaf6; text-align:center">
                                                        <strong><span
                                                                    style="font-size:18px">Supplement Facts</span></strong></th>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="text-align:left"><strong>Serving Size: 1
                                                            Capsule</strong></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="background-color:#ffffff; text-align:left">
                                                        <strong>Servings Per Container: 60</strong></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="background-color:#ffffff"><strong>Amount Per
                                                            Serving</strong></td>
                                                    <td style="background-color:#ffffff; text-align:center">
                                                        <strong>%DV</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Calcium (as Nanometer Calcium)</td>
                                                    <td style="text-align:center">150 mg</td>
                                                    <td style="text-align:center">15%</td>
                                                </tr>
                                                <tr>
                                                    <td>Hydrolyzed Collagen (type 2)</td>
                                                    <td style="text-align:center">100 mg</td>
                                                    <td style="text-align:center">&dagger;</td>
                                                </tr>
                                                <tr>
                                                    <td>Sea Cucumber</td>
                                                    <td style="text-align:center">50 mg</td>
                                                    <td style="text-align:center">&dagger;</td>
                                                </tr>
                                                <tr>
                                                    <td>Poria Cocos Mushroom</td>
                                                    <td style="text-align:center">50 mg</td>
                                                    <td style="text-align:center">&dagger;</td>
                                                </tr>
                                                <tr>
                                                    <td>Eucommia Ulmoides Bark</td>
                                                    <td style="text-align:center">50 mg</td>
                                                    <td style="text-align:center">&dagger;</td>
                                                </tr>
                                                <tr>
                                                    <td>Motherwort (Aerial Parts)</td>
                                                    <td style="text-align:center">50 mg</td>
                                                    <td style="text-align:center">&dagger;</td>
                                                </tr>
                                                <tr>
                                                    <td>Deer Antler Velvet Extract</td>
                                                    <td style="text-align:center">25 mg</td>
                                                    <td style="text-align:center">&dagger;</td>
                                                </tr>
                                                <tr>
                                                    <td>Solomon&#39;s Seal Rhizome</td>
                                                    <td style="text-align:center">25 mg</td>
                                                    <td style="text-align:center">&dagger;</td>
                                                </tr>
                                                <tr>
                                                    <td>Szechuan Lovage Rhizome</td>
                                                    <td style="text-align:center">25 mg</td>
                                                    <td style="text-align:center">&dagger;</td>
                                                </tr>
                                                <tr>
                                                    <td>Ginkgo Biloba Leaf</td>
                                                    <td style="text-align:center">3.3 mg</td>
                                                    <td style="text-align:center">&dagger;</td>
                                                </tr>
                                                <tr>
                                                    <td>5-Hydroxytryptophan</td>
                                                    <td style="text-align:center">3.3 mg</td>
                                                    <td style="text-align:center">&dagger;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="text-align:left">% Daily Value are based on a
                                                        2,000 calories diet.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="text-align:left">&dagger; % Daily Value (DV) not
                                                        established
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="text-align:left"><strong>Other
                                                            Ingredients:</strong> Gelatin, Calcium Carbonate, and Magnesium
                                                        Stearate.
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div style="float:right; text-align:center; width:49%"><img
                                                        alt="thuốc tăng chiều cao tuổi dậy thì"
                                                        src="../www.nubesttall.com/public/upload/motasanpham/images/Hinhsp/thanh_phan_chat_NUBEST_TALL.jpg"
                                                        style="margin-bottom:10px; margin-right:15px; margin-top:10px; width:100%"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"
                                     style="border:1px solid #eaeaea; clear:both; margin-left:0px; margin-right:0px">
                                    <div class="box-left">
                                        <div class="has-background headingsp" style="clear:both"><strong>C&Ocirc;NG
                                                DỤNG</strong></div>
                                        <p>Bổ sung Nano canxi v&agrave; c&aacute;c dưỡng chất hỗ trợ ph&aacute;t triển chiều
                                            cao v&agrave; tr&iacute; n&atilde;o cho trẻ v&agrave; thanh, thiếu ni&ecirc;n
                                            đang tuổi ph&aacute;t triển.</p>
                                        <div class="has-background headingsp"><strong>ĐỐI TƯỢNG SỬ DỤNG</strong></div>
                                        <ul>
                                            <li>Thanh thiếu ni&ecirc;n v&agrave; trẻ em từ 5 tuổi trở l&ecirc;n,&nbsp;đặc
                                                biệt l&agrave; giai đoạn dậy th&igrave;.
                                            </li>
                                            <li>Trẻ bị c&ograve;i xương, chậm lớn.</li>
                                        </ul>
                                        <div class="has-background headingsp"><strong>C&Aacute;CH SỬ DỤNG</strong></div>
                                        <ul>
                                            <li style="text-align:justify">Người từ 5-10 tuổi: Ng&agrave;y u&ocirc;́ng 2 lần&nbsp;<em>(sáng,
                                                    chi&ecirc;̀u)</em>, 1 vi&ecirc;n/lần.
                                            </li>
                                            <li style="text-align:justify">Người từ 10-20 tu&ocirc;̉i: Ng&agrave;y u&ocirc;́ng
                                                3 lần&nbsp;<em>(sáng, trưa, chi&ecirc;̀u)</em>, 1 vi&ecirc;n/lần.
                                            </li>
                                            <li style="text-align:justify">Uống với nước trước bữa ăn khoảng 30
                                                ph&uacute;t.
                                            </li>
                                        </ul>
                                        <p style="text-align:justify">N&ecirc;n sử dụng li&ecirc;n tục để đạt hiệu quả tối
                                            ưu. Để đạt kết quả tốt cần kết hợp với việc ăn uống đủ dưỡng chất, sinh hoạt
                                            điều độ, tập thể dục đều đặn v&agrave; ngủ đủ giấc.</p></div>
                                    <div class="box-right">
                                        <div class="has-background headingsp"><strong>QUY C&Aacute;CH &amp; XUẤT XỨ</strong>
                                        </div>
                                        <p style="text-align:justify"><strong>Đ&oacute;ng g&oacute;i:</strong>&nbsp;60 vi&ecirc;n/hộp,
                                            lọ.&nbsp;<strong>Hạn sử dụng:&nbsp;</strong>36 th&aacute;ng kể từ ng&agrave;y
                                            sản xuất. Ng&agrave;y sản xuất v&agrave; thời hạn sử dụng xem tr&ecirc;n sản
                                            phẩm.&nbsp;<strong>Bảo quản:</strong>&nbsp;Nơi kh&ocirc; r&aacute;o, tho&aacute;ng
                                            m&aacute;t, tr&aacute;nh &aacute;nh nắng, để xa tầm tay trẻ em.</p>
                                        <p><strong>Ph&acirc;n phối&nbsp;tại Mỹ bởi:</strong> Nubest Supplements USA</p>
                                        <p style="text-align:justify"><span
                                                    style="color:#000000"><strong>Nhập khẩu bởi:</strong>&nbsp;C&ocirc;ng ty TNHH Nubest (Nubest Vietnam)</span>
                                        </p>
                                        <p style="text-align:justify"><strong>Đ/c</strong><strong>:&nbsp;</strong><span
                                                    style="color:#000000">13 S7, T&acirc;y Thạnh, T&acirc;n Ph&uacute;, TP. HCM</span>
                                        </p>
                                        <p style="text-align:justify"><strong>Ph&acirc;n phối&nbsp;độc quyền tại VN
                                                bởi:</strong>&nbsp;C&ocirc;ng ty TNHH Đ&acirc;̀u tư Quốc tế Ho&agrave;n Mỹ
                                            (TVBUY Vietnam)</p>
                                        <p style="text-align:justify"><strong>Đ/c:</strong>&nbsp;361 L&ecirc; Trọng Tấn, P.
                                            Sơn Kỳ, Q. T&acirc;n Ph&uacute;, TP. HCM</p>
                                        <p style="text-align:justify"><strong>T</strong>ổng đ&agrave;i tư vấn:<strong><span
                                                        style="color:#000000">&nbsp;</span></strong><a href="tel:18001030"><span
                                                        style="color:#000000"><strong>1800.1030</strong></span></a><em>&nbsp;(miễn
                                                cước)</em></p>
                                        <p style="text-align:justify"><strong>H</strong>otline chuy&ecirc;n gia: <strong><a
                                                        href="tel:0984191112"><span
                                                            style="color:#000000">0984.191.112</span></a></strong></p>
                                        <hr/>
                                        <p style="text-align:justify"><em><strong>Lưu &yacute;:</strong>&nbsp;Thực phẩm n&agrave;y
                                                kh&ocirc;ng phải l&agrave; thuốc, kh&ocirc;ng c&oacute; t&aacute;c dụng thay thế
                                                thuốc chữa bệnh.</em></p>
                                        <p style="text-align:right"><em><strong>Số XNQC:</strong>&nbsp;00563/2017/ATTP-XNQC</em>
                                        </p></div>
                                </div>
                                <div style="clear:both; padding-top:30px">
                                    <div>
                                        <div class="headingsp nhanbiet" style="clear:both"><strong>C&Aacute;CH NHẬN BIẾT SẢN
                                                PHẨM</strong></div>
                                        <div class="tem-box-left"><p style="text-align:justify"><strong>Đ</strong>ể đề ph&ograve;ng
                                                h&agrave;ng giả, h&agrave;ng nh&aacute;i tr&ecirc;n thị trường, TVBUY&nbsp;đều c&oacute;
                                                gắn tem chống h&agrave;ng giả của Bộ C&ocirc;ng An tr&ecirc;n bao b&igrave; mỗi
                                                sản phẩm. Sau khi nhận sản phẩm thực phẩm bảo vệ sức khỏe<strong>&nbsp;NUBEST
                                                    TALL&nbsp;</strong>từ nh&acirc;n vi&ecirc;n giao h&agrave;ng, bạn h&atilde;y
                                                c&agrave;o nhẹ lớp bạc tr&ecirc;n tem để kiểm tra v&agrave; x&aacute;c định sản
                                                phẩm qua tin nhắn theo c&uacute; ph&aacute;p:</p>
                                            <div style="background-color:#efefef; font-size:18px; margin-bottom:10px; margin-left:auto; margin-right:auto; margin-top:10px; padding:15px; text-align:center; width:70%">
                                                <strong><span style="color:#e60000">CHG&nbsp;&nbsp;TVBUY&nbsp;&nbsp;m&atilde; số</span></strong>,
                                                rồi gửi tới&nbsp;<strong><span style="color:#e60000">8077</span></strong>
                                            </div>
                                            <div style="font-style:italic; text-align:center"><em><strong>N</strong>ếu sản
                                                    phẩm l&agrave; ch&iacute;nh h&atilde;ng sẽ c&oacute; tin nhắn trả về x&aacute;c
                                                    nhận sản phẩm của nh&agrave; ph&acirc;n phối TVBUY&nbsp;k&egrave;m theo số
                                                    điện thoại CSKH.</em></div>
                                        </div>
                                        <div class="tem-box-right"><p style="text-align:center"><img
                                                        alt="tem chống hàng giả tpcn"
                                                        src="/frontend/upload/hinhchitiet/images/sanpham/tem.png"
                                                        title="Tem chống hàng giả"/></p>
                                            <p style="text-align:center">(Tem chống h&agrave;ng giả của BCA)</p></div>
                                    </div>
                                    <div style="clear:both">&nbsp;</div>
                                    <div class="title-video">&nbsp;</div>
                                    <div class="title-video" style="text-align:center"><span style="color:#000000"><span
                                                    style="font-size:22px"><strong>TH&Ocirc;NG TIN HỮU &Iacute;CH</strong></span></span>
                                    </div>
                                    <p style="text-align:center">&nbsp;</p>
                                    <div class="btgrid">
                                        <div class="row row-1">
                                            <div class="col col-md-6">
                                                <div class="content">
                                                    <div class="gocbaochi_child">
                                                        <div class="img_gbc"><a
                                                                    href="http://dantri.com.vn/suc-khoe/bao-lau-nua-nguoi-viet-cao-du-chuan-20170922100234943.htm"
                                                                    rel="nofollow" target="_blank"
                                                                    title="Bao lâu nữa người Việt cao đủ chuẩn?"><img
                                                                        alt="Báo Dân Trí"
                                                                        src="https://www.nubesttall.com/images/04082017/dan-tri.svg"
                                                                        style="height:57px; width:185px"/></a></div>
                                                        <p><strong><a
                                                                        href="http://dantri.com.vn/suc-khoe/bao-lau-nua-nguoi-viet-cao-du-chuan-20170922100234943.htm"
                                                                        rel="nofollow" target="_blank"
                                                                        title="Bao lâu nữa người Việt cao đủ chuẩn?">Bao l&acirc;u
                                                                    nữa người Việt cao đủ chuẩn?</a></strong></p>
                                                        <p style="text-align:justify"><a
                                                                    href="http://dantri.com.vn/suc-khoe/bao-lau-nua-nguoi-viet-cao-du-chuan-20170922100234943.htm"
                                                                    rel="nofollow" target="_blank"
                                                                    title="Bao lâu nữa người Việt cao đủ chuẩn?">50 năm nữa
                                                                chiều cao của người Việt vẫn kh&ocirc;ng thể đạt chuẩn nếu kh&ocirc;ng
                                                                thay đổi chế độ dinh dưỡng, vận động. Chiều cao trung b&igrave;nh
                                                                theo chuẩn WHO hiện nay l&agrave;: 176,7 cm ở nam v&agrave;
                                                                163,7 cm ở nữ. Trong khi đ&oacute;, chiều cao trung b&igrave;nh
                                                                tại Việt Nam dừng lại ở mức 163,7 cm của nam v&agrave; 153 cm
                                                                với nữ.</a></p></div>
                                                </div>
                                            </div>
                                            <div class="col col-md-6">
                                                <div class="content">
                                                    <div class="gocbaochi_child">
                                                        <div class="img_gbc"><a
                                                                    href="https://suckhoe.vnexpress.net/tin-tuc/dinh-duong/nhung-sai-lam-cua-cha-me-co-the-khien-con-thap-lun-3641875.html"
                                                                    rel="nofollow" target="_blank"
                                                                    title="Những sai lầm của cha mẹ có thể khiến con thấp lùn"><img
                                                                        alt="Báo VNExpress"
                                                                        src="https://www.nubesttall.com/images/04082017/vn-express.svg"
                                                                        style="height:57px; width:288px"/></a></div>
                                                        <p><strong><a
                                                                        href="https://suckhoe.vnexpress.net/tin-tuc/dinh-duong/nhung-sai-lam-cua-cha-me-co-the-khien-con-thap-lun-3641875.html"
                                                                        rel="nofollow" target="_blank"
                                                                        title="Những sai lầm của cha mẹ có thể khiến con thấp lùn">Những
                                                                    sai lầm của cha mẹ c&oacute; thể khiến con thấp
                                                                    l&ugrave;n</a></strong></p>
                                                        <p style="text-align:justify"><a
                                                                    href="https://suckhoe.vnexpress.net/tin-tuc/dinh-duong/nhung-sai-lam-cua-cha-me-co-the-khien-con-thap-lun-3641875.html"
                                                                    rel="nofollow" target="_blank"
                                                                    title="Những sai lầm của cha mẹ có thể khiến con thấp lùn">Hiểu
                                                                sai vấn đề tăng chiều cao, cung cấp dinh dưỡng thiếu c&acirc;n
                                                                bằng hay chăm con qu&aacute; kỹ l&agrave; lỗi cơ bản m&agrave;
                                                                nhiều bậc phụ huynh mắc phải. Chiều cao của con ph&aacute;t
                                                                triển c&oacute; tốt hay kh&ocirc;ng phụ thuộc kh&aacute; nhiều v&agrave;o
                                                                c&aacute;ch nu&ocirc;i dạy của cha mẹ. Chuy&ecirc;n gia cảnh b&aacute;o
                                                                những sai lầm của cha mẹ khiến trẻ thấp l&ugrave;n.</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-2">
                                            <div class="col col-md-6">
                                                <div class="content">
                                                    <div class="gocbaochi_child">
                                                        <div class="img_gbc"><a
                                                                    href="http://vietnamnet.vn/vn/suc-khoe/de-tre-cao-lon-canxi-tu-thuc-pham-chua-du-400748.html"
                                                                    rel="nofollow" target="_blank"
                                                                    title="Để trẻ cao lớn: canxi từ thực phẩm chưa đủ"><img
                                                                        alt="Báo VietNamNet"
                                                                        src="https://www.nubesttall.com/images/04082017/viet-nam-net.svg"
                                                                        style="height:68px; width:135px"/></a></div>
                                                        <p><strong><a
                                                                        href="http://vietnamnet.vn/vn/suc-khoe/de-tre-cao-lon-canxi-tu-thuc-pham-chua-du-400748.html"
                                                                        rel="nofollow" target="_blank"
                                                                        title="Để trẻ cao lớn: canxi từ thực phẩm chưa đủ">Để trẻ
                                                                    cao lớn: canxi từ thực phẩm chưa đủ</a></strong></p>
                                                        <p style="text-align:justify"><a
                                                                    href="http://vietnamnet.vn/vn/suc-khoe/de-tre-cao-lon-canxi-tu-thuc-pham-chua-du-400748.html"
                                                                    rel="nofollow" target="_blank"
                                                                    title="Để trẻ cao lớn: canxi từ thực phẩm chưa đủ">Trẻ em
                                                                đang trong giai đoạn ph&aacute;t triển muốn tăng trưởng chiều
                                                                cao tối ưu, ngo&agrave;i thực phẩm cần phải bổ sung th&ecirc;m
                                                                Canxi từ nhiều nguồn kh&aacute;c. Chỉ 20% lượng canxi từ thực
                                                                phẩm được hấp thụ Canxi l&agrave; kho&aacute;ng chất rất cần
                                                                thiết cho cơ thể, đ&oacute;ng vai tr&ograve; quan trọng trong
                                                                việc h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển của hệ
                                                                xương.</a></p></div>
                                                </div>
                                            </div>
                                            <div class="col col-md-6">
                                                <div class="content">
                                                    <div class="gocbaochi_child">
                                                        <div class="img_gbc"><a
                                                                    href="http://tuoitre.vn/nap-qua-nhieu-thit-ca-va-thuc-an-nhanh-tre-co-nguy-co-bi-lun-20170930095213813.htm"
                                                                    rel="nofollow" target="_blank"
                                                                    title="Nạp quá nhiều thịt, cá và thức ăn nhanh: trẻ có nguy cơ bị lùn"><img
                                                                        alt="Báo Tuổi Trẻ"
                                                                        src="https://www.nubesttall.com/images/04082017/tuoi-tre.svg"
                                                                        style="height:68px; width:211px"/></a></div>
                                                        <p><strong><a
                                                                        href="http://tuoitre.vn/nap-qua-nhieu-thit-ca-va-thuc-an-nhanh-tre-co-nguy-co-bi-lun-20170930095213813.htm"
                                                                        rel="nofollow" target="_blank"
                                                                        title="Nạp quá nhiều thịt, cá và thức ăn nhanh: trẻ có nguy cơ bị lùn">Nạp
                                                                    qu&aacute; nhiều thịt, c&aacute; v&agrave; thức ăn nhanh: trẻ c&oacute;
                                                                    nguy cơ bị l&ugrave;n</a></strong></p>
                                                        <p style="text-align:justify"><a
                                                                    href="http://tuoitre.vn/nap-qua-nhieu-thit-ca-va-thuc-an-nhanh-tre-co-nguy-co-bi-lun-20170930095213813.htm"
                                                                    rel="nofollow" target="_blank"
                                                                    title="Nạp quá nhiều thịt, cá và thức ăn nhanh: trẻ có nguy cơ bị lùn">C&aacute;c
                                                                loại thịt, c&aacute; v&agrave; thức ăn nhanh l&agrave; những m&oacute;n
                                                                ăn thường gặp trong thực đơn hằng ng&agrave;y của trẻ. Tuy nhi&ecirc;n,
                                                                việc nạp qu&aacute; nhiều so với nhu cầu của cơ thể, ch&iacute;nh
                                                                l&agrave; nguy&ecirc;n nh&acirc;n khiến trẻ dễ bị
                                                                l&ugrave;n.</a></p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div id="thongtinphanphoi">
                                <div class="tieude">THÔNG TIN NHÀ PHÂN PHỐI</div>
                                <div class="chitiet">
                                    <div class="chungnhan"><a class="fancybox"
                                                              href="/frontend/upload/hinhchitiet/images/sanpham/csi-bigsize.jpg"
                                                              title="Chứng nhận Quốc tế CSI"><img
                                                    alt="Chứng nhận Quốc tế CSI"
                                                    src="/frontend/upload/hinhchitiet/images/sanpham/csi-smallsize.jpg"></a>
                                        <p><b>Chứng nhận Quốc tế CSI:2017</b></p></div>
                                    <div class="noidung"><p>Công ty TNHH đầu tư Quốc tế Hoàn Mỹ là một trong những doanh
                                            nghiệp uy tín chuyên phân phối các dòng sản phẩm chăm sóc sức khỏe, sắc đẹp chất
                                            lượng hàng đầu Việt Nam. Luôn hoạt động theo phương châm “Vì sức khỏe vàng của người
                                            Việt”, chúng tôi cam kết đem đến cho quý khách hàng những sản phẩm chăm sóc sức khỏe
                                            tốt, an toàn và chất lượng nhất.</p>
                                        <p>Chính vì vậy, tháng 11/2017, Công ty TNHH Đầu tư Quốc tế Hoàn Mỹ đã chính thức
                                            được trao chứng nhận Quốc tế CSI:2017 - Doanh nghiệp xuất sắc được nhiều khách
                                            hàng hài lòng trong lĩnh vực phân phối thực phẩm chức năng. Các tiêu chí đánh
                                            giá của CSI vô cùng khách quan và toàn diện về mọi mặt, đặc biệt là quá trình
                                            cung cấp sản phẩm/dịch vụ của doanh nghiệp thông qua việc thực hiện các quy
                                            trình, khảo sát và đo lường sự thỏa mãn, sự hài lòng hướng đến lòng trung thành
                                            của khách hàng đối với doanh nghiệp.</p>
                                        <p>Chứng nhận Quốc tế CSI là chứng nhận uy tín, vô cùng giá trị mà bất kỳ doanh
                                            nghiệp nào cũng mong muốn đạt được. Có thể xem chứng nhận này là một “bộ lọc”
                                            hữu hiệu, giúp phân loại các nhà phân phối TPCN, loại bỏ những đơn vị yếu kém,
                                            đồng thời tạo sự cạnh tranh lành mạnh cho các công ty đạt chuẩn, nhất là trong
                                            hoàn cảnh thị trường thực phẩm chức năng khá “bát nháo” với nhiều loại hàng giả,
                                            hàng nhái như hiện nay.</p></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form_in_page" style="width:300px;margin: 25px auto;">
                                <div class="dor-vertical-title" style="background: #4BC0B7FF;border:2px solid #4BC0B7FF;">
                                    <div class="vertical-menu-head">
                                        <div class="vertical-menu-head-inner">
                                            <div class="vertical-menu-head-wrapper">
                                                <div class="dor_title_block text-center" style="display: block;"><span>Bác sĩ tư vấn</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_tu_van" style="background: #4BC0B733 ;">
                                    <form name="frmNhanTuVan" method="POST" class="submit_form "
                                          action="https://www.tvbuy.vn/tu-van"><input type="hidden" name="_token"
                                                                                      value="zgF90zfAolNkfJLv1L0eZavbafXLAQRRbpUVm7hF"><input
                                                type="hidden" name="url"
                                                value="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html"><input
                                                type="hidden" name="utm_source" value=""><input type="hidden" name="utm_medium"
                                                                                                value=""><input type="hidden"
                                                                                                                name="utm_campaign"
                                                                                                                value="">
                                        <div class="content_form">
                                            <!--div class="form-grouph has_img" style="margin-bottom: 10px;"><img class="bg_bacsi" src="https://www.tvbuy.vn/images/bac_si_tu_van.jpg"><img class="text_inside" src="https://www.tvbuy.vn/images/text_inside.svg" alt="BS. Phạm Minh Tiến" </div-->
                                            <div class="form-group"><label>Họ và tên:</label>
                                                <div class="inside"><input type="text" id="txtName" name="name"
                                                                           placeholder="Nhập tên" class="txtNameF"
                                                                           data-validation="required"
                                                                           data-validation-error-msg="Vui lòng nhập trường này"><i
                                                            class="fa fa-user" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="form-group"><label>Số điện thoại:</label>
                                                <div class="inside"><input type="text" id="txtSdt" name="phone"
                                                                           placeholder="Nhập số điện thoại" class="txtSdtF"
                                                                           data-validation="custom" data-validation="custom"
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
                                                    <button type="submit" id="btnSend" class="btn btn-lg gui_dk">Gửi đăng
                                                        ký
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="comdetail">
                                <div class="boxRatingCmt" id="boxRatingCmt">
                                    <div class="hrt" id="danhgia">
                                        <div class="tltRt "><h2 data-s="11" data-gpa="3.7" data-c="3">Đánh giá NUBEST
                                                TALL</h2></div>
                                        <div class="sRt"><a href="javascript:void(0)" id="send_rate">Gửi đánh giá của
                                                bạn</a><span id="canel_rate" class="hide">X Hủy</span></div>
                                    </div>
                                    <form id="frm_rate" action="https://www.tvbuy.vn/danh-gia" class="submit_form"
                                          style="display: none" method="POST"><input type="hidden" name="_token"
                                                                                     value="zgF90zfAolNkfJLv1L0eZavbafXLAQRRbpUVm7hF"><input
                                                type="hidden" name="url"
                                                value="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html"><input
                                                type="hidden" name="utm_source" value=""><input type="hidden" name="utm_medium"
                                                                                                value=""><input type="hidden"
                                                                                                                name="utm_campaign"
                                                                                                                value=""><input
                                                type="hidden" name="product_id" value="2"/><input id="vote" type="hidden"
                                                                                                  name="vote" value="5"/>
                                        <div class="ips"><span>Chọn đánh giá của bạn: <div id="choose_rate"
                                                                                           class="rateYo0"></div></span>
                                        </div>
                                        <div class="clr"></div>
                                        <div class="ipt top15" style="display: none;">
                                            <div class="ct"><textarea name="content" id="fRContent" rows="3"
                                                                      placeholder="Nhập đánh giá về sản phẩm (tối thiểu 80 ký tự)"
                                                                      data-validation="length"
                                                                      data-validation-length="min80"
                                                                      data-validation-error-msg=" "></textarea></div>
                                            <div class="if"><input type="text" name="name" placeholder="Họ và tên"
                                                                   id="fRName" data-validation="required"
                                                                   data-validation-error-msg=" "><input type="text"
                                                                                                        name="phone"
                                                                                                        placeholder="Số điện thoại"
                                                                                                        id="fRPhone"
                                                                                                        data-validation="custom"
                                                                                                        data-validation-regexp="^0[0-9]{9,10}$"
                                                                                                        data-validation-error-msg=" "><input
                                                        type="text" name="email" placeholder="Email" id="fREmail"
                                                        style="margin-bottom: 0" data-validation="email"
                                                        data-validation-error-msg=" ">
                                                <button class="gui_danh_gia" type="submit">GỬI ĐÁNH GIÁ</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="list">
                                        <ul class="ratingLst" id="results_danhgia">
                                            <li class="par">
                                                <div class="rh"><span>Quỳnh Châu - 45 tuổi</span><label class="sttB"><i
                                                                class=" fa fa-check-circle"></i>Đã xác nhận mua hàng</label>
                                                    <div class="rcf" style="display: none;"><p>TVBuy.vn xác nhận:
                                                            <label><span>Khách hàng <b
                                                                            class="name">Quỳnh Châu - 45 tuổi</b></span></label><label><span>Đã mua tại: <b>Quận 7, TP. HCM</b></span></label>
                                                        </p>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="rc">
                                                    <div class="noidungdanhgia">
                                                        <div class="rateYo5 rate"></div>
                                                        <p>Mấy năm trước chị g&aacute;i t&ocirc;i&nbsp;b&ecirc;n Mỹ gửi sp n&agrave;y
                                                            về cho con g&aacute;i t&ocirc;i&nbsp;uống từ năm&nbsp;ch&aacute;u&nbsp;17
                                                            tuổi. Sau khi biết sp c&oacute; nh&agrave; ph&acirc;n phối tại
                                                            độc quyền tại Việt Nam t&ocirc;i đ&atilde; mua cho ch&aacute;u
                                                            uống tiếp,&nbsp;giờ ch&aacute;u 19 tuổi đ&atilde; cao 1m72 rồi
                                                            mặc d&ugrave; t&ocirc;i v&agrave; bố ch&aacute;u đều kh&ocirc;ng
                                                            cao. C&aacute;m ơn Tvbuy.</p></div>
                                                </div>
                                            </li>
                                            <li class="par">
                                                <div class="rh"><span>Nguyễn Vĩnh Mai Thanh</span><label class="sttB"><i
                                                                class=" fa fa-check-circle"></i>Đã xác nhận mua hàng</label>
                                                    <div class="rcf" style="display: none;"><p>TVBuy.vn xác nhận:
                                                            <label><span>Khách hàng <b
                                                                            class="name">Nguyễn Vĩnh Mai Thanh</b></span></label><label><span>Đã mua tại: <b>Quận Tân Phú, HCM</b></span></label>
                                                        </p>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="rc">
                                                    <div class="noidungdanhgia">
                                                        <div class="rateYo4 rate"></div>
                                                        <p>M c&oacute; rủ 2 đứa bạn đến Showroom của c&ocirc;ng ty để xem
                                                            sản phẩm v&agrave; hỏi tư vấn, v&igrave; m sợ bị lừa, &nbsp;Được
                                                            b&aacute;c sĩ tư vấn rất tận t&igrave;nh, bjio th&igrave; m tin
                                                            tưởng ho&agrave;n to&agrave;n sp, nhưng m mới chỉ đủ tiền mua 1
                                                            hộp về uống trước, đợi th&aacute;ng sau c&oacute; tiền m sẽ mua
                                                            uống tiếp cho đủ liệu tr&igrave;nh.</p></div>
                                                </div>
                                            </li>
                                            <li class="par">
                                                <div class="rh"><span>Vũ Công Chương</span><label class="sttB"><i
                                                                class=" fa fa-check-circle"></i>Đã xác nhận mua hàng</label>
                                                    <div class="rcf" style="display: none;"><p>TVBuy.vn xác nhận:
                                                            <label><span>Khách hàng <b
                                                                            class="name">Vũ Công Chương</b></span></label><label><span>Đã mua tại: <b>Ninh Kiều, Cần Thơ</b></span></label>
                                                        </p>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="rc">
                                                    <div class="noidungdanhgia">
                                                        <div class="rateYo4 rate"></div>
                                                        <p>H&agrave;ng &nbsp;Mỹ 100% đ&oacute; mọi người, trước khi mua t đ&atilde;
                                                            t&igrave;m hiểu rất kỹ. T đang&nbsp;cho con uống được gần 1
                                                            tuần, chưa thấy dấu hiệu g&igrave;.</p></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                        <div class="more_video"><a href="javascript:void(0)" id="btn_danhgia">Xem thêm <img
                                                        src="/images/loading_more.gif" class="animation_image"></a></div>
                                    </div>
                                </div>
                                <div class="wrap_comment top25" id="comment">
                                    <div class="danhgia_box"><span class="danhgia_title"><h2>Hỏi đáp về sản phẩm</h2></span>
                                        <div style="overflow:hidden" id="new_post_dialog_31171" title="Viết hỏi đáp">
                                            <form method="post" action="https://www.tvbuy.vn/tu-van"
                                                  enctype="multipart/form-data" class="submit_form"><input type="hidden"
                                                                                                           name="_token"
                                                                                                           value="zgF90zfAolNkfJLv1L0eZavbafXLAQRRbpUVm7hF"><input
                                                        type="hidden" name="url"
                                                        value="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html"><input
                                                        type="hidden" name="utm_source" value=""><input type="hidden"
                                                                                                        name="utm_medium"
                                                                                                        value=""><input
                                                        type="hidden" name="utm_campaign" value=""><input type="hidden"
                                                                                                          name="product_id"
                                                                                                          value="2"/>
                                                <div class="row">
                                                    <div class="control-group col-md-6"><label for="dsc_name"
                                                                                               class="label_hoidap">Họ và
                                                            tên *</label><input type="text" id="dsc_name" name="name" size="30"
                                                                                class="form-control input-text"
                                                                                placeholder="Họ và tên"
                                                                                data-validation="required"
                                                                                data-validation-error-msg="Trường này không được để trống">
                                                    </div>
                                                    <div class="control-group col-md-6"><label for="sdt"
                                                                                               class="label_hoidap cm-multiple-radios">Số
                                                            điện thoại *</label><input type="number" id="dsc_name" name="phone"
                                                                                       size="12" class="form-control input-text"
                                                                                       placeholder="Số điện thoại"
                                                                                       data-validation="custom"
                                                                                       data-validation-regexp="^0[0-9]{9,10}$"
                                                                                       data-validation-error-msg="Giá trị không hợp lệ">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="control-group col-md-12"><label for="dsc_message"
                                                                                                class="label_hoidap">Nội
                                                            dung câu hỏi *</label><textarea placeholder="Nhập câu hỏi"
                                                                                            name="content"
                                                                                            class="form-control input-textarea"
                                                                                            rows="3" data-validation="required"
                                                                                            data-validation-error-msg="Trường này không được để trống"></textarea>
                                                    </div>
                                                </div>
                                                <div class="danhgia_btn">
                                                    <button type="submit">GỬI CÂU HỎI</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="danhgia_num"> 24 hỏi đáp</div>
                                        <div id="content_discussion" class="discussion-block">
                                            <div id="binhluan">
                                                <div class="pagination-container cm-pagination-container"
                                                     id="results_hoidap">
                                                    <div class="ty-discussion-post__content top25">
                                                        <div class="user_say"><span class="ty-discussion-post__author">Nguyễn Đình Nam, 48 tuổi - Hai Bà Trưng, Hà Nội</span><span
                                                                    class="ty-discussion-post__date">09/02/2018 11:55</span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="top10"></div>
                                                        <div class="ty-discussion-post">
                                                            <div class="ty-discussion-post__message">Vì sợ cậu con giai độc
                                                                đinh cũng lùn như mình nên tôi định mua Nubest Tall cho con
                                                                uống. Tuy nhiên, khi tham khảo thông tin web, tôi thấy các
                                                                bạn nói Nubest Tall đã đạt chứng nhận FDA Hoa Kỳ. Tôi ko rõ
                                                                lắm về ý nghĩa của cái chứng nhận này. Tvbuy giải thích hộ
                                                                tôi với.
                                                            </div>
                                                        </div>
                                                        <div class="replay_cmd">
                                                            <div class="ty-discussion-post__content bg_replay"><span
                                                                        class="athour"></span>
                                                                <div class="ty-discussion-post ">
                                                                    <div class="ty-discussion-post__message"><p
                                                                                style="text-align:justify">Ch&agrave;o anh Đ&igrave;nh
                                                                            Nam.</p>
                                                                        <p style="text-align:justify">Cảm ơn anh đ&atilde;
                                                                            quan t&acirc;m đến sản phẩm NUBEST TALL của
                                                                            TVBUY. Đầu ti&ecirc;n, c&ocirc;ng ty xin khẳng
                                                                            định th&ocirc;ng tin sản phẩm NUBEST TALL đ&atilde;
                                                                            được FDA Hoa Kỳ cấp ph&eacute;p lưu h&agrave;nh
                                                                            tự do tại nước Mỹ l&agrave; ch&iacute;nh x&aacute;c.
                                                                            C&ocirc;ng ty ch&uacute;ng t&ocirc;i sẽ gửi k&egrave;m
                                                                            bản sao giấy chứng nhận FDA Hoa Kỳ của NUBEST
                                                                            TALL n&agrave;y c&ugrave;ng với sản phẩm nếu anh
                                                                            y&ecirc;u cầu.</p>
                                                                        <p style="text-align:justify"><strong>C&ocirc;ng ty
                                                                                xin giải th&iacute;ch về &yacute; nghĩa của
                                                                                chứng nhận FDA Hoa Kỳ như sau:</strong></p>
                                                                        <p style="text-align:justify">FDA l&agrave; viết tắt
                                                                            của Food And Drug Administration, t&ecirc;n gọi
                                                                            của Cục quản l&yacute; Thực phẩm v&agrave; Dược
                                                                            phẩm Hoa Kỳ. Đ&acirc;y l&agrave; cơ quan quản l&yacute;
                                                                            thực phẩm v&agrave; dược phẩm trực thuộc Bộ Y tế
                                                                            v&agrave; Dịch vụ Nh&acirc;n sinh Hoa Kỳ. FDA
                                                                            chịu tr&aacute;ch nhiệm: Bảo vệ v&agrave; th&uacute;c
                                                                            đẩy sức khỏe cộng đồng th&ocirc;ng qua c&aacute;c
                                                                            quy định v&agrave; gi&aacute;m s&aacute;t an to&agrave;n
                                                                            thực phẩm.</p>
                                                                        <p style="text-align:justify">Chỉ những sản phẩm n&agrave;o
                                                                            được <strong>FDA Hoa Kỳ</strong> cấp ph&eacute;p
                                                                            lưu h&agrave;nh tự do tại Mỹ&nbsp;mới c&oacute;
                                                                            thể được b&aacute;n tr&ecirc;n to&agrave;n l&atilde;nh
                                                                            thổ Hoa Kỳ <em>(Nếu kh&ocirc;ng được FDA Hoa Kỳ
                                                                                cấp ph&eacute;p th&igrave; sản phẩm đ&oacute;
                                                                                chỉ đủ điều kiện xuất khẩu v&agrave; kh&ocirc;ng
                                                                                được ph&eacute;p b&aacute;n tại Mỹ).</em> Dĩ
                                                                            nhi&ecirc;n, sản phẩm đ&atilde; được&nbsp;FDA
                                                                            Hoa Kỳ&nbsp;cấp ph&eacute;p lưu h&agrave;nh tự
                                                                            do tại Mỹ&nbsp;sẽ được cấp ph&eacute;p xuất khẩu
                                                                            sang bất cứ nước n&agrave;o kh&aacute;c tr&ecirc;n
                                                                            thế giới. C&oacute; thể khẳng định, c&aacute;c
                                                                            sản phẩm đạt chứng nhận FDA Hoa Kỳ&nbsp;đều được
                                                                            đảm bảo về chất lượng, an to&agrave;n&nbsp;v&agrave;
                                                                            hiệu quả.</p>
                                                                        <p style="text-align:justify">Sau khi trải qua quy
                                                                            tr&igrave;nh kiểm định nghi&ecirc;m ngặt về độ
                                                                            an to&agrave;n, chất lượng, thực phẩm bảo vệ sức
                                                                            khỏe hỗ trợ tăng chiều cao NUBEST TALL đ&atilde;
                                                                            được Cục quản l&yacute; Thực phẩm &amp; Dược
                                                                            phẩm Hoa Kỳ (FDA Hoa Kỳ) cấp ph&eacute;p lưu h&agrave;nh
                                                                            tự do tại Mỹ, số:&nbsp;RZH3-S54Y.</p>
                                                                        <p style="text-align:justify"><strong>Lưu
                                                                                &yacute;:</strong>&nbsp;Chứng nhận FDA Hoa Kỳ
                                                                            của thực phẩm bảo vệ sức khỏe hỗ trợ tăng chiều
                                                                            cao NUBEST TALL&nbsp;đ&atilde; được<strong>&nbsp;hợp
                                                                                ph&aacute;p h&oacute;a l&atilde;nh
                                                                                sự</strong>&nbsp;(Consular legalization) để
                                                                            x&aacute;c minh t&agrave;i liệu trước khi được
                                                                            gửi về Việt Nam để nộp l&ecirc;n cho cơ quan
                                                                            chịu tr&aacute;ch nhiệm quản l&yacute; tại Việt
                                                                            Nam.</p>
                                                                        <p style="text-align:justify">Anh c&oacute; thể xem
                                                                            chi tiết quy tr&igrave;nh hợp ph&aacute;p h&oacute;a
                                                                            l&atilde;nh sự cho chứng nhận FDA Hoa Kỳ&nbsp;của
                                                                            NUBEST TALL<strong>&nbsp;<a
                                                                                        href="nubest-tall-dat-chung-nhan-fda-hoa-ky.html"
                                                                                        target="_blank"><span
                                                                                            style="color:#0000cd">tại đ&acirc;y</span></a>.</strong>
                                                                        </p></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ty-discussion-post__content top25">
                                                        <div class="user_say"><span class="ty-discussion-post__author">Đinh Quốc Trung - Hai Bà Trưng, Hà Nội</span><span
                                                                    class="ty-discussion-post__date">29/11/2017 14:05</span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="top10"></div>
                                                        <div class="ty-discussion-post">
                                                            <div class="ty-discussion-post__message">Tư vấn cho tôi cách
                                                                kiểm tra rõ nguồn gốc sản phẩm Nubest Tall, làm sao để biết
                                                                là hàng chính hãng của Mỹ. Hiện nay, tình trạng hàng giả
                                                                hàng kém chất lượng quá nhiều, nên rất mong được các bạn tư
                                                                vấn rõ ràng, tôi cảm ơn.
                                                            </div>
                                                        </div>
                                                        <div class="replay_cmd">
                                                            <div class="ty-discussion-post__content bg_replay"><span
                                                                        class="athour"></span>
                                                                <div class="ty-discussion-post ">
                                                                    <div class="ty-discussion-post__message"><p
                                                                                style="text-align:justify">Ch&agrave;o anh Quốc
                                                                            Trung.</p>
                                                                        <p style="text-align:justify">Hiện nay, tr&ecirc;n
                                                                            thị trường Việt Nam xuất hiện rất nhiều c&aacute;c
                                                                            loại thực phẩm bảo vệ sức khỏe hỗ trợ tăng chiều
                                                                            cao<span style="font-size:13.0pt"><span
                                                                                        style="font-family:&quot;Times New Roman&quot;,serif"></span></span>l&agrave;
                                                                            h&agrave;ng giả, h&agrave;ng nh&aacute;i, h&agrave;ng
                                                                            k&eacute;m chất lượng.&nbsp;Ch&iacute;nh v&igrave;
                                                                            vậy, người mua h&agrave;ng cần hết sức cẩn thận,
                                                                            t&igrave;m hiểu r&otilde; r&agrave;ng nguồn gốc
                                                                            xuất xứ, th&ocirc;ng tin sản phẩm, c&ocirc;ng ty
                                                                            ph&acirc;n phối c&oacute; uy t&iacute;n, giấy tờ
                                                                            chứng nhận chất lượng v&agrave; c&aacute;c c&aacute;ch
                                                                            kiểm tra x&aacute;c minh h&agrave;ng thật.</p>
                                                                        <p style="text-align:justify">Đối với sản phẩm
                                                                            NUBEST TALL, c&aacute;ch kiểm tra H&agrave;ng Ch&iacute;nh
                                                                            H&atilde;ng nhập khẩu từ Mỹ như sau:</p>
                                                                        <p style="text-align:justify"><strong>Thứ
                                                                                1:</strong>&nbsp;Nếu l&agrave; H&Agrave;NG CH&Iacute;NH
                                                                            H&Atilde;NG đang được b&aacute;n tại nước Mỹ th&igrave;
                                                                            phải được&nbsp;<a
                                                                                    href="nubest-tall-dat-chung-nhan-fda-hoa-ky4153.html?utm_source=tvbuy.vn&amp;utm_medium=fda-binhluan-nubesttall&amp;utm_campaign=sos"
                                                                                    target="_blank"
                                                                                    title="NUBEST TALL đạt chứng nhận của FDA Hoa Kỳ"
                                                                                    type="NUBEST TALL đạt chứng nhận của FDA Hoa Kỳ"><span
                                                                                        style="color:#0000cd">FDA Hoa Kỳ</span></a>
                                                                            cấp chứng nhận lưu h&agrave;nh tự do.&nbsp;<em>(Nếu
                                                                                FDA Hoa Kỳ kh&ocirc;ng cấp ph&eacute;p th&igrave;
                                                                                sản phẩm đ&oacute; chỉ đủ điều kiện xuất
                                                                                khẩu v&agrave; kh&ocirc;ng được b&aacute;n
                                                                                tại thị trường Mỹ).</em>&nbsp;NUBEST TALL
                                                                            đang được b&aacute;n ở&nbsp;Mỹ xem&nbsp;<strong><a
                                                                                        href="https://www.amazon.com/Nubest-Capsules-Nanometer-Calcium-Natural/dp/B071R8DNX8"
                                                                                        rel="nofollow" target="_blank"
                                                                                        title="Xem chi tiết sản phẩm NUBEST TALL đang được bán tại Mỹ"
                                                                                        type="Xem chi tiết sản phẩm NUBEST TALL đang được bán tại Mỹ"><span
                                                                                            style="color:#0000cd">tại đ&acirc;y</span></a></strong>.
                                                                        </p>
                                                                        <p style="text-align:justify"><strong>Thứ
                                                                                2:</strong>&nbsp;C&oacute; thể kiểm tra M&atilde;
                                                                            vạch, QR Code của sản phẩm bằng phần mềm như&nbsp;<strong>ICHECK</strong>&nbsp;để
                                                                            truy xuất th&ocirc;ng tin ch&iacute;nh x&aacute;c
                                                                            nguồn gốc xuất xứ sản phẩm.</p>
                                                                        <p style="text-align:justify"><strong>Thứ 3</strong>:
                                                                            Phải được Cơ quan quản l&yacute;&nbsp;nh&agrave;
                                                                            nước tại Việt Nam cấp giấy x&aacute;c nhận c&ocirc;ng
                                                                            bố ph&ugrave; hợp quy định an to&agrave;n thực
                                                                            phẩm. C&oacute; thể tra cứu online&nbsp;tr&ecirc;n
                                                                            website <a
                                                                                    href="http://congbosanpham.vfa.gov.vn/HomePage.do"
                                                                                    rel="nofollow" target="_blank"
                                                                                    type="Tra cứu số giấy phép của Nubest Tall trên website của Bộ Y Tế "><span
                                                                                        style="color:#000099">tại đ&acirc;y</span></a>.
                                                                        </p>
                                                                        <p style="text-align:justify"><strong>Lưu
                                                                                &yacute;:</strong> Hiện nay với loại Tem Chống H&agrave;ng
                                                                            Giả th&ocirc;ng thường đang bị l&agrave;m giả tr&agrave;n
                                                                            lan. Qu&yacute; kh&aacute;ch h&agrave;ng lưu
                                                                            &yacute; n&ecirc;n chọn mua c&aacute;c sản phẩm
                                                                            c&oacute; Tem Chống H&agrave;ng Giả t&iacute;ch
                                                                            hợp loại SMS để c&oacute; thể x&aacute;c nhận
                                                                            bằng tin nhắn từ tổng đ&agrave;i.</p>
                                                                        <p style="text-align:justify">Trước khi anh&nbsp;mua
                                                                            h&agrave;ng, c&aacute;c chuy&ecirc;n vi&ecirc;n
                                                                            b&ecirc;n c&ocirc;ng ty sẽ tư vấn cụ thể v&agrave;
                                                                            chi tiết về th&ocirc;ng tin sản phẩm, v&agrave;
                                                                            hướng dẫn anh c&aacute;ch kiểm tra sản phẩm khi
                                                                            nhận h&agrave;ng. C&ocirc;ng ty cũng sẽ gửi k&egrave;m
                                                                            c&aacute;c giấy tờ chứng nhận chất lượng của FDA
                                                                            Hoa Kỳ v&agrave; giấy x&aacute;c nhận c&ocirc;ng
                                                                            bố ph&ugrave; hợp quy định an to&agrave;n thực
                                                                            phẩm do cơ quan nh&agrave; nước tại Việt Nam cấp&nbsp;&nbsp;trong
                                                                            kiện h&agrave;ng&nbsp;để thuận tiện cho việc
                                                                            kiểm tra.</p>
                                                                        <p style="text-align:justify">Để được hỗ trợ tư vấn
                                                                            kỹ hơn về sản phẩm v&agrave; giải đ&aacute;p
                                                                            thắc mắc, anh c&oacute; thể để lại số điện
                                                                            thoại, hoặc gọi trực tiếp Tổng đ&agrave;i&nbsp;tư
                                                                            vấn:&nbsp;<a href="tel:18001030"><span
                                                                                        style="color:#000000"><strong>1800.1030</strong></span></a><span
                                                                                    style="color:#000000">&nbsp;<em>(</em></span><em>miễn
                                                                                ph&iacute; cước gọi)</em> hoặc Holine chuy&ecirc;n
                                                                            gia:<strong><span
                                                                                        style="color:#000000">&nbsp;</span><a
                                                                                        href="tel:0984191112"><span
                                                                                            style="color:#000000">0984.191.112</span></a></strong><span
                                                                                    style="color:#000000">&nbsp;<strong>-&nbsp;</strong></span><strong><a
                                                                                        href="tel:0914650680"><span
                                                                                            style="color:#000000">0914.650.680</span></a></strong>&nbsp;anh
                                                                            nh&eacute;.</p></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ty-discussion-post__content top25">
                                                        <div class="user_say"><span class="ty-discussion-post__author">Trần Văn Hưng - Q.7, TP. HCM</span><span
                                                                    class="ty-discussion-post__date">18/08/2017 13:55</span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="top10"></div>
                                                        <div class="ty-discussion-post">
                                                            <div class="ty-discussion-post__message">Con trai tôi đang học
                                                                tại Mỹ. Đầu năm vừa rồi cháu về VN ăn Tết, cháu đã tìm hiểu
                                                                và mua sản phẩm Nubest tall của của cty. Sau một thời gian
                                                                sử dụng thấy hiệu quả rất tốt. Giờ tôi muốn mua sp và gửi
                                                                qua Mỹ cho cháu sử dụng tiếp, cho tôi hỏi cty có dịch vụ gửi
                                                                hàng qua bên Mỹ không? Mong sớm được giải đáp.
                                                            </div>
                                                        </div>
                                                        <div class="replay_cmd">
                                                            <div class="ty-discussion-post__content bg_replay"><span
                                                                        class="athour"></span>
                                                                <div class="ty-discussion-post ">
                                                                    <div class="ty-discussion-post__message"><p
                                                                                style="text-align:justify">Ch&agrave;o anh
                                                                            Hưng!</p>
                                                                        <p style="text-align:justify">Cảm ơn Anh đ&atilde;
                                                                            tin tưởng v&agrave; tiếp tục&nbsp;lựa chọn sử
                                                                            dụng sản phẩm NUBEST TALL của c&ocirc;ng ty ch&uacute;ng
                                                                            t&ocirc;i.&nbsp;Xin trả lời thắc mắc của anh như
                                                                            sau:</p>
                                                                        <p style="text-align:justify">C&ocirc;ng ty ch&uacute;ng
                                                                            t&ocirc;i&nbsp;c&oacute; hỗ trợ gửi sản phẩm ra
                                                                            nước ngo&agrave;i bằng&nbsp;dịch vụ vận chuyển
                                                                            nhanh quốc tế với nh&agrave; cung cấp uy t&iacute;n
                                                                            h&agrave;ng đầu thế giới l&agrave; DHL. Tuy nhi&ecirc;n
                                                                            với Hoa Kỳ th&igrave; việc gửi c&aacute;c sản
                                                                            phẩm sức khỏe l&agrave; rất kh&oacute; khăn.
                                                                            Nhưng&nbsp;anh cũng kh&ocirc;ng phải&nbsp;lo
                                                                            lắng qu&aacute;, v&igrave; sản phẩm NUBEST TALL
                                                                            c&oacute; xuất xứ tại Hoa Kỳ, n&ecirc;n anh c&oacute;
                                                                            thể n&oacute;i ch&aacute;u mua sản phẩm n&agrave;y
                                                                            tại Hoa Kỳ cho thuận tiện.</p>
                                                                        <p style="text-align:justify">Hiện tại sản phẩm
                                                                            NUBEST TALL c&oacute; b&aacute;n tr&ecirc;n
                                                                            Amazon tại Mỹ, anh c&oacute; thể n&oacute;i ch&aacute;u
                                                                            l&ecirc;n <strong><a
                                                                                        href="https://www.amazon.com/Nubest-Capsules-Nanometer-Calcium-Natural/dp/B071R8DNX8"
                                                                                        target="_blank"><span
                                                                                            style="color:#000080">Amazon.com</span></a></strong>
                                                                            search sản phẩm NUBEST TALL để đặt h&agrave;ng,
                                                                            hoặc anh c&oacute; thể copy trực tiếp&nbsp;link
                                                                            sau gửi cho ch&aacute;u để tham khảo nh&eacute;:<span
                                                                                    style="color:#0000cd">&nbsp;</span><a
                                                                                    href="https://www.amazon.com/Nubest-Capsules-Nanometer-Calcium-Natural/dp/B071R8DNX8"
                                                                                    target="_blank"><span
                                                                                        style="color:#0000cd">https://www.amazon.com/Nubest-Capsules-Nanometer-Calcium-Natural/dp/B071R8DNX8</span></a>
                                                                        </p>
                                                                        <p style="text-align:justify">Nếu anh cần&nbsp;tư
                                                                            vấn hay đặt h&agrave;ng&nbsp;sản phẩm NUBEST
                                                                            TALL hoặc&nbsp;c&aacute;c sản phẩm kh&aacute;c
                                                                            để sử dụng tại Việt Nam, anh c&oacute; thể để
                                                                            lại số điện thoại hoặc li&ecirc;n hệ trực tiếp
                                                                            đến Tổng đ&agrave;i tư vấn:&nbsp;<a
                                                                                    href="tel:18001030"><span
                                                                                        style="color:#000000"><strong>1800.1030</strong></span></a><span
                                                                                    style="color:#000000">&nbsp;</span><em><span
                                                                                        style="color:#000000">(miễn ph&iacute;&nbsp;cước gọi)</span>&nbsp;</em>hoặc
                                                                            Hotline chuy&ecirc;n gia: <a
                                                                                    href="tel:0984191112"><span
                                                                                        style="color:#000000"><strong>0984.191.112</strong></span></a>&nbsp;để&nbsp;được
                                                                            hỗ trợ tốt hơn nh&eacute;. C&aacute;m ơn anh.
                                                                        </p></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ty-discussion-post__content top25">
                                                        <div class="user_say"><span class="ty-discussion-post__author">Nguyễn Đức Dũng, 47 tuổi - Hà Nội</span><span
                                                                    class="ty-discussion-post__date">13/07/2017 08:30</span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="top10"></div>
                                                        <div class="ty-discussion-post">
                                                            <div class="ty-discussion-post__message">Cho tôi hỏi sản phẩm
                                                                Nubest Tall là hàng được sản xuất tại Mỹ hay là sản phẩm
                                                                được sản xuất qua nước thứ 3?
                                                            </div>
                                                        </div>
                                                        <div class="replay_cmd">
                                                            <div class="ty-discussion-post__content bg_replay"><span
                                                                        class="athour"></span>
                                                                <div class="ty-discussion-post ">
                                                                    <div class="ty-discussion-post__message"><p
                                                                                style="text-align:justify">Ch&agrave;o anh Đức
                                                                            Dũng.</p>
                                                                        <p style="text-align:justify">Ch&uacute;ng t&ocirc;i
                                                                            cũng rất th&ocirc;ng cảm v&agrave; thấu hiểu cho
                                                                            kh&uacute;c mắc&nbsp;của anh, v&igrave; thực tế
                                                                            hiện nay tr&ecirc;n thị trường c&oacute; rất
                                                                            nhiều sản phẩm c&ocirc;ng bố h&agrave;ng Mỹ
                                                                            nhưng thực chất lại sản xuất từ một nước thứ
                                                                            3.</p>
                                                                        <p style="text-align:justify">Ch&uacute;ng t&ocirc;i
                                                                            xin trả lời anh l&agrave; sản phẩm NUBEST TALL
                                                                            được sản xuất tại <strong>Mỹ</strong>&nbsp;v&agrave;
                                                                            được ph&acirc;n phối độc quyền&nbsp;bởi&nbsp;<a
                                                                                    href="https://www.nubest-usa.com/"
                                                                                    target="_blank"><span
                                                                                        style="color:#000000">Nubest&nbsp;Supplements</span></a>.
                                                                            Sản phẩm&nbsp;NUBEST TALL đ&atilde; được
                                                                            <strong>FDA Hoa Kỳ</strong> (Cục quản l&yacute;
                                                                            Thực phẩm &amp; Dược phẩm Hoa Kỳ) cấp ph&eacute;p
                                                                            lưu h&agrave;nh tự do tại Mỹ, số: <strong>RZH3-S54Y</strong>.
                                                                        </p>
                                                                        <p style="text-align:justify">Sản phẩm NUBEST TALL
                                                                            được sản xuất tr&ecirc;n d&acirc;y chuyền c&ocirc;ng
                                                                            nghệ ti&ecirc;n tiến, đạt c&aacute;c ti&ecirc;u
                                                                            chuẩn quốc tế như cGMP, HACCP dưới sự gi&aacute;m
                                                                            s&aacute;t chất lượng&nbsp;h&agrave;ng đầu của&nbsp;FDA
                                                                            Hoa Kỳ<strong>. </strong>Thực phẩm bảo vệ sức
                                                                            khỏe hỗ trợ tăng chiều cao NUBEST TALL&nbsp;đ&atilde;
                                                                            được&nbsp;Cơ quan quản l&yacute; nh&agrave; nước
                                                                            tại Việt Nam cấp giấy x&aacute;c nhận c&ocirc;ng
                                                                            bố ph&ugrave; hợp quy định an to&agrave;n thực
                                                                            phẩm, giấy ph&eacute;p mới nhất&nbsp;số:
                                                                            3309/2017/ATTP-XNCB. X&aacute;c nhận quảng c&aacute;o
                                                                            số:&nbsp;00563/2017/ATTP-XNQC.</p>
                                                                        <p style="text-align:justify">Sản phẩm NUBEST TALL
                                                                            đang được b&aacute;n lẻ tại thị trường Mỹ tr&ecirc;n
                                                                            website b&aacute;n h&agrave;ng lớn v&agrave; uy
                                                                            t&iacute;n nhất thế giới&nbsp;<a
                                                                                    href="https://www.amazon.com/Nubest-Capsules-Nanometer-Calcium-Natural/dp/B071R8DNX8"
                                                                                    target="_blank"><span
                                                                                        style="color:#000080"><strong>Amazon</strong></span></a>,
                                                                            anh&nbsp;c&oacute; thể v&agrave;o tham khảo th&ecirc;m.
                                                                        </p></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ty-discussion-post__content top25">
                                                        <div class="user_say"><span class="ty-discussion-post__author">Alisa Tran - EL MONTE, CA 91731-1910, US</span><span
                                                                    class="ty-discussion-post__date">01/07/2017 22:45</span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="top10"></div>
                                                        <div class="ty-discussion-post">
                                                            <div class="ty-discussion-post__message">Hello Tvbuy, toi da mua
                                                                sp Nubest tall supplement tren Amazon cho con gai uong, thay
                                                                chau manh khoe va cao lon tot. Hien nay gia dinh toi dang co
                                                                ky nghi tai Vietnam. Chung toi da khong mang thuoc theo cho
                                                                chau uong. Gia dinh chung toi dang o khach san Rex o Tp hcm.
                                                                Toi xem thay quang cao thuoc Nubest tall tren tivi o khach
                                                                san. cho toi hoi thuoc nay ban o Vietnam co giong thuoc ban
                                                                tren Amazon o My khong? Neu dung thi toi muon mua cai thuoc
                                                                nay tai Vietnam thi lam sao? Thank you so much.
                                                            </div>
                                                        </div>
                                                        <div class="replay_cmd">
                                                            <div class="ty-discussion-post__content bg_replay"><span
                                                                        class="athour"></span>
                                                                <div class="ty-discussion-post ">
                                                                    <div class="ty-discussion-post__message"><p
                                                                                style="text-align:justify">Ch&agrave;o chị Alisa
                                                                            Tran.</p>
                                                                        <p style="text-align:justify">C&aacute;m ơn chị đ&atilde;
                                                                            li&ecirc;n hệ với TVBUY. Ch&uacute;ng t&ocirc;i
                                                                            xin trả lời chị như sau, sản phẩm NUBEST TALL <a
                                                                                    href="https://www.nubest-usa.com/nubest-tall-60-capsules-growth-height-nanometer-calcium"
                                                                                    target="_blank">b&aacute;n tại&nbsp;Hoa
                                                                                Kỳ</a> v&agrave; b&aacute;n&nbsp;tr&ecirc;n
                                                                            <strong><a
                                                                                        href="https://www.amazon.com/Nubest-Capsules-Nanometer-Calcium-Natural/dp/B071R8DNX8"
                                                                                        rel="nofollow" target="_blank"><span
                                                                                            style="color:#0000cd">Amazon</span></a></strong>&nbsp;với&nbsp;sản
                                                                            phẩm NUBEST TALL được ph&acirc;n phối tại Việt
                                                                            Nam l&agrave; c&ugrave;ng một sản phẩm.</p>
                                                                        <p style="text-align:justify">Theo dữ liệu ch&uacute;ng
                                                                            t&ocirc;i&nbsp;nhận được từ chị, ch&uacute;ng t&ocirc;i
                                                                            kh&ocirc;ng thấy số điện thoại của chị tại Việt
                                                                            Nam n&ecirc;n kh&ocirc;ng thể li&ecirc;n lạc
                                                                            trực tiếp qua điện thoại với chị để hỗ trợ được&nbsp;tốt
                                                                            hơn. Nếu chị muốn mua sản phẩm n&agrave;y tại
                                                                            Việt Nam cho ch&aacute;u sử dụng th&igrave; chị
                                                                            c&oacute; thể nhờ taxi chở đến địa chỉ c&ocirc;ng
                                                                            ty ch&uacute;ng t&ocirc;i <em>(361 L&ecirc;
                                                                                Trọng Tấn, Phường Sơn Kỳ, Quận T&acirc;n Ph&uacute;,
                                                                                TP.&nbsp;HCM)</em>&nbsp;để được c&aacute;c
                                                                            chuy&ecirc;n gia tư vấn v&agrave; mua h&agrave;ng
                                                                            trực tiếp. Hoặc chị cũng c&oacute; thể li&ecirc;n
                                                                            hệ với ch&uacute;ng t&ocirc;i theo c&aacute;ch n&agrave;y
                                                                            hoặc gửi Email cho ch&uacute;ng t&ocirc;i, <em>chị
                                                                                lưu &yacute; ghi r&otilde;&nbsp;số lượng sản
                                                                                phẩm muốn mua, số&nbsp;ph&ograve;ng&nbsp;kh&aacute;ch
                                                                                sạn v&agrave; địa chỉ kh&aacute;ch sạn gia đ&igrave;nh
                                                                                chị đang ở</em>.</p>
                                                                        <p style="text-align:justify">V&igrave; kh&aacute;ch
                                                                            sạn Rex&nbsp;ở TP. HCM n&ecirc;n c&ocirc;ng ty
                                                                            ch&uacute;ng t&ocirc;i sẽ giao h&agrave;ng cho
                                                                            chị trong ng&agrave;y theo giờ&nbsp;h&agrave;nh
                                                                            ch&iacute;nh từ 08h00-17h00 chị nh&eacute;. Nếu
                                                                            chị cần hỗ trợ hay tư vấn th&ecirc;m h&atilde;y
                                                                            li&ecirc;n hệ với ch&uacute;ng t&ocirc;i.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ty-discussion-post__content top25">
                                                        <div class="user_say"><span class="ty-discussion-post__author">Hung Tran - HOUSTON, TX 77083-5118, US</span><span
                                                                    class="ty-discussion-post__date">01/07/2017 11:54</span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="top10"></div>
                                                        <div class="ty-discussion-post">
                                                            <div class="ty-discussion-post__message">Em đang học bên Mỹ,
                                                                thấy có sản phẩm giúp tăng chiều cao tên là Nubest Tall đang
                                                                bán trên Amazon, em mua uống và thấy rất tốt, em định mua
                                                                gửi về cho em gái của em ở Việt Nam dùng. Nhưng em nghe mẹ
                                                                nói ở Việt Nam cũng có sản phẩm này. Cho em hỏi sản phẩm
                                                                Nubest Tall đang bán trên Amazon và tại Việt Nam có giống
                                                                nhau không a?
                                                            </div>
                                                        </div>
                                                        <div class="replay_cmd">
                                                            <div class="ty-discussion-post__content bg_replay"><span
                                                                        class="athour"></span>
                                                                <div class="ty-discussion-post ">
                                                                    <div class="ty-discussion-post__message"><p
                                                                                style="text-align:justify">Ch&agrave;o em Hung
                                                                            Tran!</p>
                                                                        <p style="text-align:justify">Cảm ơn em&nbsp;đ&atilde;
                                                                            gửi c&acirc;u hỏi cho ch&uacute;ng t&ocirc;i. C&ocirc;ng
                                                                            ty&nbsp;xin trả lời c&acirc;u hỏi của em&nbsp;l&agrave;
                                                                            sản phẩm NUBEST TALL b&aacute;n tr&ecirc;n <a
                                                                                    href="https://www.amazon.com/Nubest-Capsules-Nanometer-Calcium-Natural/dp/B071R8DNX8"
                                                                                    target="_blank"><span
                                                                                        style="color:#000080"><strong>Amazon</strong></span></a>
                                                                            b&ecirc;n Mỹ v&agrave; sản phẩm NUBEST TALL được
                                                                            ph&acirc;n phối tại Việt Nam l&agrave; c&ugrave;ng
                                                                            một loại&nbsp;sản phẩm bạn nh&eacute;.</p>
                                                                        <p style="text-align:justify">Em đang ở Mỹ, n&ecirc;n
                                                                            c&oacute; thể tiếp tục mua sản phẩm b&ecirc;n&nbsp;Mỹ&nbsp;để
                                                                            sử dụng, c&ograve;n nếu&nbsp;muốn mua cho em g&aacute;i
                                                                            của em tại Việt Nam&nbsp;sử dụng Thực phẩm bảo
                                                                            vệ sức khỏe hỗ trợ tăng chiều cao NUBEST TALL th&igrave;
                                                                            gia đ&igrave;nh em c&oacute; thể li&ecirc;n hệ
                                                                            tới TVBUY để được tư vấn miễn ph&iacute;&nbsp;v&agrave;
                                                                            đặt h&agrave;ng, như vậy vừa thuận tiện lại&nbsp;kh&ocirc;ng
                                                                            tốn chi ph&iacute; gửi h&agrave;ng. Nếu em mua b&ecirc;n
                                                                            Mỹ sau đ&oacute; gửi về Việt Nam gi&aacute; th&agrave;nh
                                                                            sẽ cao hơn rất nhiều, v&igrave; <a
                                                                                    href="https://www.amazon.com/Nubest-Capsules-Nanometer-Calcium-Natural/dp/B071R8DNX8"
                                                                                    target="_blank"><span
                                                                                        style="color:#000080">Amazon</span></a>&nbsp;họ
                                                                            chỉ miễn ph&iacute; giao h&agrave;ng tại Hoa Kỳ.
                                                                            Rất nhiều kh&aacute;ch h&agrave;ng kh&ocirc;ng
                                                                            biết sản phẩm NUBEST TALL c&oacute; ph&acirc;n
                                                                            phối tại Việt Nam, họ đ&atilde; nhờ người th&acirc;n&nbsp;mua
                                                                            h&agrave;ng tại b&ecirc;n Mỹ sau đ&oacute; gửi
                                                                            về Việt Nam đ&atilde; gặp rất nhiều bất tiện
                                                                            trong kh&acirc;u gửi h&agrave;ng v&agrave; tốn
                                                                            th&ecirc;m chi ph&iacute;.</p>
                                                                        <p style="text-align:justify">Để được tư vấn th&ecirc;m
                                                                            về sản phẩm v&agrave; hỗ trợ đặt h&agrave;ng tại
                                                                            Việt Nam em v&agrave; người nh&agrave; c&oacute;
                                                                            thể để lại số điện thoại hoặc li&ecirc;n hệ trực
                                                                            tiếp đến Tổng đ&agrave;i tư vấn:&nbsp;<a
                                                                                    href="tel:18001030"><span
                                                                                        style="color:#000000"><strong>1800.1030</strong></span></a>&nbsp;<em>(miễn
                                                                                cước) </em>hoặc Hotline chuy&ecirc;n gia: <a
                                                                                    href="tel:0984191112"><span
                                                                                        style="color:#000000"><strong>0984.191.112</strong></span></a><span
                                                                                    style="color:#000000"> -&nbsp;</span><a
                                                                                    href="tel:0914650680"><span
                                                                                        style="color:#000000"><strong>0914.650.680</strong></span></a><em>&nbsp;</em>em
                                                                            nh&eacute;.</p></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="more_video"><a href="javascript:void(0)" id="btn_hoidap">Xem thêm <img
                                                        src="/images/loading_more.gif" class="animation_image"></a></div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript"> $("#nhan-xet").click(function () {
                                    $('html, body').animate({scrollTop: $("#comment").offset().top - 10}, 2000);
                                });
                                var page_danhgia = page_hoidap = 1, next_danhgia = next_hoidap = true;
                                $("#btn_danhgia").click(function (e) {
                                    $('.animation_image').show();
                                    if (next_danhgia) {
                                        load_danhgia(++page_danhgia);
                                    } else {
                                        $('.animation_image').fadeOut('slow');
                                    }
                                });
                                function load_danhgia(page_danhgia) {
                                    $.get('danhgia.html', {id: 2, page: page_danhgia}, function (data) {
                                        if (data.trim().length == 0) {
                                            next_danhgia = false;
                                        }
                                        $("#results_danhgia").append(data);
                                        $('.animation_image').fadeOut('slow');
                                    });
                                }
                                $("#btn_hoidap").click(function (e) {
                                    $('.animation_image').show();
                                    if (next_hoidap) {
                                        load_hoidap(++page_hoidap);
                                    } else {
                                        $('.animation_image').fadeOut('slow');
                                    }
                                });
                                function load_hoidap(page_hoidap) {
                                    $.get('hoidap.html', {id: 2, page: page_hoidap}, function (data) {
                                        if (data.trim().length == 0) {
                                            next_hoidap = false;
                                        }
                                        $("#results_hoidap").append(data);
                                        $('.animation_image').fadeOut('slow');
                                    });
                                }
                                $('#send_rate').click(function () {
                                    $(".boxRatingCmt #frm_rate").fadeIn();
                                    $(".boxRatingCmt .sRt span").removeClass("hide");
                                    $(".boxRatingCmt .sRt a").removeClass("hide").addClass("hide");
                                });
                                $('#canel_rate').click(function () {
                                    $(".boxRatingCmt #frm_rate").fadeOut();
                                    $(".boxRatingCmt .sRt a").removeClass("hide");
                                    $(".boxRatingCmt .sRt span").removeClass("hide").addClass("hide");
                                });
                                $(".rateYo0").rateYo({
                                    starWidth: "15px",
                                    ratedFill: '#fed700',
                                    halfStar: true,
                                    onSet: function (rating, rateYoInstance) {
                                        $(".boxRatingCmt .ipt").fadeIn();
                                        $("#vote").val(rating);
                                    },
                                });</script>
                            <div class="clearfix"></div>
                            <div class="clearfix"></div>
                            <div class="form_in_page" style="width:300px;margin: 25px auto;">
                                <div class="dor-vertical-title" style="background: #4BC0B7FF;border:2px solid #4BC0B7FF;">
                                    <div class="vertical-menu-head">
                                        <div class="vertical-menu-head-inner">
                                            <div class="vertical-menu-head-wrapper">
                                                <div class="dor_title_block text-center" style="display: block;"><span>Bác sĩ tư vấn</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_tu_van" style="background: #4BC0B733 ;">
                                    <form name="frmNhanTuVan" method="POST" class="submit_form "
                                          action="https://www.tvbuy.vn/tu-van"><input type="hidden" name="_token"
                                                                                      value="zgF90zfAolNkfJLv1L0eZavbafXLAQRRbpUVm7hF"><input
                                                type="hidden" name="url"
                                                value="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html"><input
                                                type="hidden" name="utm_source" value=""><input type="hidden" name="utm_medium"
                                                                                                value=""><input type="hidden"
                                                                                                                name="utm_campaign"
                                                                                                                value="">
                                        <div class="content_form">
                                            <!--div class="form-grouph has_img" style="margin-bottom: 10px;"><img class="bg_bacsi" src="https://www.tvbuy.vn/images/bac_si_tu_van.jpg"><img class="text_inside" src="https://www.tvbuy.vn/images/text_inside.svg" alt="BS. Phạm Minh Tiến" </div-->
                                            <div class="form-group"><label>Họ và tên:</label>
                                                <div class="inside"><input type="text" id="txtName" name="name"
                                                                           placeholder="Nhập tên" class="txtNameF"
                                                                           data-validation="required"
                                                                           data-validation-error-msg="Vui lòng nhập trường này"><i
                                                            class="fa fa-user" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="form-group"><label>Số điện thoại:</label>
                                                <div class="inside"><input type="text" id="txtSdt" name="phone"
                                                                           placeholder="Nhập số điện thoại" class="txtSdtF"
                                                                           data-validation="custom" data-validation="custom"
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
                                                    <button type="submit" id="btnSend" class="btn btn-lg gui_dk">Gửi đăng
                                                        ký
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="contain block_product top10">
                                <div class="block block_right">
                                    <div class="bd_bottom">
                                        <div class="bg_title"><h3>Sản phẩm đã xem</h3></div>
                                    </div>
                                    <div class="product product_viewed top20 owl-carousel">
                                        <div class="item">
                                            <div class="item-inner line line_right"><a
                                                        href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html"
                                                        title="NUBEST TALL"><span class="cover_image"><img
                                                                src="/images/products/details/200_200/nubest-tall-front.jpg"
                                                                alt="NUBEST TALL"></span></a>
                                                <div class="product_name"><a
                                                            href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html"
                                                            title="NUBEST TALL">NUBEST TALL </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contain block_product block_hot top30">
                                <div class="block block_right">
                                    <div class="bd_bottom">
                                        <div class="bg_title"><h3>Sản phẩm liên quan</h3></div>
                                    </div>
                                    <div class="product product_list top20 owl-carousel">
                                        <div class="item">
                                            <div class="item-inner line line_right"><a
                                                        href="doctor-plus-usa-vien-uong-tang-chieu-cao-cua-my.html"
                                                        title="DOCTOR PLUS"><span class="cover_image"><img
                                                                src="/images/products/details/200_200/doctor-plus-front.jpg"
                                                                alt="DOCTOR PLUS"></span></a>
                                                <div class="product_name"><a
                                                            href="doctor-plus-usa-vien-uong-tang-chieu-cao-cua-my.html"
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
                                                    <button class="addToCart" data-id="60"><span><i
                                                                    class="fa fa-shopping-cart"></i> Mua hàng</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner line line_right"><a
                                                        href="thuc-pham-tang-chieu-cao-grow-power-usa.html"
                                                        title="GROW POWER"><span class="cover_image"><img
                                                                src="/images/products/details/200_200/Grow-power-front.jpg"
                                                                alt="GROW POWER"></span></a>
                                                <div class="product_name"><a
                                                            href="thuc-pham-tang-chieu-cao-grow-power-usa.html"
                                                            title="GROW POWER">GROW POWER </a></div>
                                                <span>(60 viên nang)</span>
                                                <div class="product_rating">
                                                    <div class="rateYo4_5"></div>
                                                </div>
                                                <div class="product_description">
                                                    <div class="slogan">TPBVSK giúp hỗ trợ tăng chiều cao</div>
                                                    <div class="product_price"> 990,000 VNĐ</div>
                                                </div>
                                                <div class="product_cart">
                                                    <button class="addToCart" data-id="21"><span><i
                                                                    class="fa fa-shopping-cart"></i> Mua hàng</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner line line_right"><a
                                                        href="doctor-plus-vien-tang-chieu-cao-hang-dau-tai-my-60-vien.html"
                                                        title="DOCTOR PLUS"><span class="cover_image"><img
                                                                src="/images/products/details/200_200/doctor-plus-nubest-supplements-usa-norax-supplements.jpg"
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
                                                    <button class="addToCart" data-id="61"><span><i
                                                                    class="fa fa-shopping-cart"></i> Mua hàng</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner line line_right"><a
                                                        href="nubest-kids-usa-bo-sung-vitamin-va-khoang-chat-giup-tang-chieu-cao-cho-be.html"
                                                        title="NUBEST KIDS"><span class="cover_image"><img
                                                                src="/images/products/details/200_200/nubest-kid-front.jpg"
                                                                alt="NUBEST KIDS"></span></a>
                                                <div class="product_name"><a
                                                            href="nubest-kids-usa-bo-sung-vitamin-va-khoang-chat-giup-tang-chieu-cao-cho-be.html"
                                                            title="NUBEST KIDS">NUBEST KIDS </a></div>
                                                <span>(90 viên nang)</span>
                                                <div class="product_rating">
                                                    <div class="rateYo4"></div>
                                                </div>
                                                <div class="product_description">
                                                    <div class="slogan">TPCN giúp tăng chiều cao cho bé</div>
                                                    <div class="product_price"> 1,190,000 VNĐ</div>
                                                </div>
                                                <div class="product_cart">
                                                    <button class="btn disabled" data-id="3"><span><i
                                                                    class="fa fa-shopping-cart"></i> Mua hàng</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner line line_right"><a
                                                        href="growth-plus-thuc-pham-chuc-nang-tang-chieu-cao.html"
                                                        title="GROWTH PLUS"><span class="cover_image"><img
                                                                src="/images/products/details/200_200/growth-plus.jpg" alt="GROWTH PLUS"></span></a>
                                                <div class="product_name"><a
                                                            href="growth-plus-thuc-pham-chuc-nang-tang-chieu-cao.html"
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
                                                    <button class="btn disabled" data-id="18"><span><i
                                                                    class="fa fa-shopping-cart"></i> Mua hàng</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner line line_right"><a
                                                        href="help-growing-up-100-tang-chieu-cao.html"
                                                        title="Help Growing Up 100%"><span class="cover_image"><img
                                                                src="/images/products/details/200_200/help-growing-up-100.jpg"
                                                                alt="Help Growing Up 100%"></span></a>
                                                <div class="product_name"><a href="help-growing-up-100-tang-chieu-cao.html"
                                                                             title="Help Growing Up 100%">Help Growing Up
                                                        100% </a></div>
                                                <span>(60 viên nang)</span>
                                                <div class="product_rating">
                                                    <div class="rateYo4"></div>
                                                </div>
                                                <div class="product_description">
                                                    <div class="slogan">TPCN hỗ trợ tăng chiều cao</div>
                                                    <div class="product_price"> 790,000 VNĐ</div>
                                                </div>
                                                <div class="product_cart">
                                                    <button class="btn disabled" data-id="1"><span><i
                                                                    class="fa fa-shopping-cart"></i> Mua hàng</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 scroll_fixed ">
                    <div class="form_caochuan">
                        <div class="dor-vertical-title" style="background: #4BC0B7FF;border:2px solid #4BC0B7FF;">
                            <div class="vertical-menu-head">
                                <div class="vertical-menu-head-inner">
                                    <div class="vertical-menu-head-wrapper">
                                        <div class="fa-icon-menu"><i class="fa fa-user-md"></i></div>
                                        <div class="dor_title_block"><span>Bác sĩ tư vấn</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form_tu_van top15" style="background: #4BC0B733 ;">
                            <form name="frmNhanTuVan" method="POST" class="submit_form "
                                  action="https://www.tvbuy.vn/tu-van"><input type="hidden" name="_token"
                                                                              value="zgF90zfAolNkfJLv1L0eZavbafXLAQRRbpUVm7hF"><input
                                        type="hidden" name="url"
                                        value="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html"><input type="hidden"
                                                                                                            name="utm_source"
                                                                                                            value=""><input
                                        type="hidden" name="utm_medium" value=""><input type="hidden" name="utm_campaign"
                                                                                        value="">
                                <div class="content_form">
                                    <!--div class="form-grouph has_img" style="margin-bottom: 10px;"><img class="bg_bacsi" src="https://www.tvbuy.vn/images/bac_si_tu_van.jpg"><img class="text_inside" src="https://www.tvbuy.vn/images/text_inside.svg" alt="BS. Phạm Minh Tiến" </div-->
                                    <div class="form-group"><label>Họ và tên:</label>
                                        <div class="inside"><input type="text" id="txtName" name="name"
                                                                   placeholder="Nhập tên" class="txtNameF"
                                                                   data-validation="required"
                                                                   data-validation-error-msg="Vui lòng nhập trường này"><i
                                                    class="fa fa-user" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="form-group"><label>Số điện thoại:</label>
                                        <div class="inside"><input type="text" id="txtSdt" name="phone"
                                                                   placeholder="Nhập số điện thoại" class="txtSdtF"
                                                                   data-validation="custom" data-validation="custom"
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
                                            <button type="submit" id="btnSend" class="btn btn-lg gui_dk">Gửi đăng ký
                                            </button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                        <div class="block-quickbuy left_fix top15 hidden-sm hidden-xs">
                            <div class="block_quick_right"><img src="/images/products/details/400_400/nubest-tall-front.jpg"
                                                                alt="NUBEST TALL">
                                <div><b>NUBEST TALL</b><br><span>TPBVSK giúp hỗ trợ tăng chiều cao</span>
                                    <button class="btn-dat-hang add-to-cart addToCart" data-id="2"><i
                                                class="fa fa-shopping-cart"></i> Mua hàng
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top10">
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
                                                href="cach-giup-con-thoat-lun-cua-nha-ngoai-giao-trung-quoc-155187.html"
                                                title="Cách giúp con “thoát lùn” của nhà ngoại giao Trung Quốc"><img
                                                    src="/frontend/images/news/cach-giup-con-thoat-lun-cua-nha-ngoai-giao-trung-quoc-bia.jpg"
                                                    alt="Cách giúp con “thoát lùn” của nhà ngoại giao Trung Quốc"></a></div>
                                    <div class="blog-content"><h3 class="blog-title"><a
                                                    href="cach-giup-con-thoat-lun-cua-nha-ngoai-giao-trung-quoc-155187.html"
                                                    title="Cách giúp con “thoát lùn” của nhà ngoại giao Trung Quốc">Cách giúp con
                                                “thoát lùn” của nhà ngoại giao Trung Quốc</a></h3>
                                        <div class="date_author"><i class="fa fa-calendar" aria-hidden="true"></i>11/04/2018
                                            &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-user" aria-hidden="true"></i>Minh Hiệp
                                        </div>
                                        <div class="blog-des"><span>Nhờ đặc thù của công việc “ngoại giao”, tôi may mắn biết đến một phương thức giúp con mình phát triển chiều cao, vừa nhanh chóng, an toàn mà lại hiệu quả. (Ông Tôn Thanh Dân, 40 tuổi, Trung Quốc)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="see_more bg_yellow top20"><a href="javascript:void(0)" id="btn_more_blogNews">Xem thêm <i
                                    class="fa fa-caret-down"></i><img src="/images/loading_more.gif" class="animation_image"></a>
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
                    $.get('more-blog-news.html', {page: page, product_id: 2}, function (data) {
                        if (data.trim().length == 0) {
                            next = false;
                        }
                        $("#results_blogNews").append(data);
                        $('.animation_image').fadeOut('slow');
                    });
                } </script>
        </div>
    </div>
    <div class="top30">
        <div class="contain block_full block_thuonghieu">
            <div class="container">
                <div class="block">
                    <div class="bd_bottom">
                        <div class="bg_title"><h3>Thương hiệu</h3></div>
                    </div>
                    <div class="list_item top20 owl-carousel">
                        <div class="item"><a class="img-wrapper" href="https://nubest.vn/" title="NUBEST Vietnam"
                                             target="_blank"><img class="img-responsive"
                                                                  src="/frontend/front/images/logo-nubest.svg"
                                                                  alt="NUBEST Vietnam"/></a></div>
                        <div class="item"><a class="img-wrapper" href="https://www.nubesttall.com/" title="NUBEST TALL"
                                             target="_blank"><img class="img-responsive"
                                                                  src="/frontend/front/images/logo-nbt.svg" alt="NUBEST TALL"/></a>
                        </div>
                        <div class="item"><a class="img-wrapper" href="https://doctorplus.vn/" title="DOCTOR PLUS"
                                             target="_blank"><img class="img-responsive"
                                                                  src="/frontend/front/images/logo-doctorplus.svg"
                                                                  alt="DOCTOR PLUS"/></a></div>
                        <div class="item"><a class="img-wrapper" href="https://growpower.vn/" title="GROW POWER"
                                             target="_blank"><img class="img-responsive"
                                                                  src="/frontend/front/images/logo-grow-power.svg"
                                                                  alt="GROW POWER"/></a></div>
                        <div class="item"><a class="img-wrapper"
                                             href="nutrip-gold-usa-nubest-vien-xuong-khop-chua-curcumin-grapeseed-uc-ii-chondroitin.html"
                                             title="NUTRIP GOLD" target="_blank"><img class="img-responsive"
                                                                                      src="/frontend/front/images/logo-nutrip-gold.svg"
                                                                                      alt="NUTRIP GOLD"/></a></div>
                        <div class="item"><a class="img-wrapper" href="nubest-white-vien-uong-trang-da-va-chong-nang.html"
                                             title="Nubest White" target="_blank"><img class="img-responsive"
                                                                                       src="/frontend/front/images/logo-nbw.svg"
                                                                                       alt="Nubest White"/></a></div>
                        <div class="item"><a class="img-wrapper" href="collagen-nubest-usa-vien-tre-hoa-lan-da-cua-my.html"
                                             title="Collagen Nubest" target="_blank"><img class="img-responsive"
                                                                                          src="/frontend/front/images/logo-colagen-nubest.svg"
                                                                                          alt="Collagen Nubest"/></a></div>
                        <div class="item"><a class="img-wrapper"
                                             href="nufala-usa-nubest-tang-cuong-sinh-ly-suc-khoe-va-sac-dep-phu-nu.html"
                                             title="Nufafa" target="_blank"><img class="img-responsive"
                                                                                 src="/frontend/front/images/logo-nufala.svg"
                                                                                 alt="Nufafa"/></a></div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript"> jQuery(function ($) {
                $('.block_thuonghieu .owl-carousel').owlCarousel({
                    loop: true,
                    items: 6,
                    margin: 10,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    navText: ['<div class="carousel-previous disable-select"><span class="fa fa-angle-left"></span></div>', '<div class="carousel-next disable-select"><span class="fa fa-angle-right"></span></div>'],
                    responsive: {0: {items: 2}, 600: {items: 4}, 1000: {items: 6, margin: 30}}
                });
            });</script>
    </div>
@endsection