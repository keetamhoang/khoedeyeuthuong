@extends('frontend')

@section('content')
    <div class="has_cate">
        <div class="container">
            <div class="row">
                <div class="col-md-3" id="danhmuc">
                    <div id="dor-verticalmenu">
                        <div class="dor-vertical-title">
                            <div class="vertical-menu-head">
                                <div class="vertical-menu-head-inner">
                                    <div class="vertical-menu-head-wrapper">
                                        <div class="fa-icon-menu"><i class="fa fa-bars"></i></div>
                                        <div class="dor_title_block"><span>Danh mục sản phẩm</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dor-verticalmenu block_content">
                            <div class="navbar navbar-default">
                                <div class="verticalmenu" role="navigation">
                                    <ul class="nav navbar-nav verticalmenu">
                                        <li class="bold"><a target="_self" href="san-pham-hot.html"><span class="menu-icon"><i
                                                            class="fa icon-icon-san-pham-hot"></i></span><span class="menu-title">Sản phẩm hot</span><span
                                                        class="menu-label-hot"><span>hot</span></span></a></li>
                                        <li class="bold"><a target="_self" href="san-pham-tang-chieu-cao.html"><span
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
                                                        class="menu-icon"><i class="fa icon-icon-san-pham-khac"></i></span><span
                                                        class="menu-title">Nhóm sản phẩm khác</span></a></li>
                                    </ul>
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
                    <div class="banner top15">
                        <div class="col-md-6 nopadding">
                            <div class="block_one banner_top_1">
                                <div class="image-link"><a href="hoi-dap-bac-si-nubest-tall.html"><img
                                                src="/frontend/front//images/bac-si-01.jpg"></a></div>
                            </div>
                            <div class="block_two banner_top_1">
                                <div class="image-link"><a href="javascript:void(0);"><img
                                                src="/frontend/front//images/bac-si-02.jpg"></a></div>
                            </div>
                        </div>
                        <div class="col-md-6 nopadding col-right">
                            <div class="form_tu_van form_in_banner">
                                <div class="title">Bác sĩ tư vấn</div>
                                <form class="submit_form" name="frmNhanTuVan" method="POST"
                                      action="https://www.tvbuy.vn/tu-van"><input type="hidden" name="_token"
                                                                                  value="zgF90zfAolNkfJLv1L0eZavbafXLAQRRbpUVm7hF"><input
                                            type="hidden" name="url" value="index.html"><input type="hidden" name="utm_source"
                                                                                               value=""><input type="hidden"
                                                                                                               name="utm_medium"
                                                                                                               value=""><input
                                            type="hidden" name="utm_campaign" value="">
                                    <div class="content_form">
                                        <div class="form-group"><label>Họ và tên:<span class="required">*</span></label>
                                            <div class="inside"><input type="text" id="txtName" name="name"
                                                                       placeholder="Nhập tên" class="txtNameF"
                                                                       data-validation="required"
                                                                       data-validation-error-msg="Vui lòng nhập trường này"><i
                                                        class="fa fa-user" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="form-group"><label>Số điện thoại:<span class="required">*</span></label>
                                            <div class="inside"><input type="text" id="txtSdt" name="phone"
                                                                       placeholder="Nhập số điện thoại" class="txtSdtF"
                                                                       data-validation="custom"
                                                                       data-validation-regexp="^0[0-9]{9,10}$"
                                                                       data-validation-error-msg="Giá trị không hợp lệ"><i
                                                        class="fa fa-phone" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="form-group"><label>Nội dung:</label>
                                            <div class="inside"><textarea id="txtCauhoi" name="content"
                                                                          placeholder="Nhập nội dung" rows="3"
                                                                          class="txtCauhoiF"></textarea><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                                        </div>
                                        <div class="clear_both"></div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0">
                                        <div>
                                            <button type="submit" name="height" id="btnSend" class="btn btn-lg">GỬI CÂU
                                                HỎI
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <script> $('.block_two').click(function () {
                                $('#txtName').focus();
                            }); </script>
                    </div>
                </div>
                <div class="col-md-3 form_caochuan">
                    <div class="dor-vertical-title">
                        <div class="vertical-menu-head">
                            <div class="vertical-menu-head-inner">
                                <div class="vertical-menu-head-wrapper">
                                    <div class="fa-icon-menu"><i class="fa icon-icon-chieu-cao-chuan"></i></div>
                                    <div class="dor_title_block"><span>Chiều cao chuẩn</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="caochuan"><p>Bạn có muốn biết chiều cao của mình đã đúng “chuẩn” so với độ tuổi hay chưa?
                            Hãy nhập thông tin để kiểm tra nhanh chóng nhé!</p>
                        <form class="submit_form top20" name="frmChieuCaoChuan" method="get"
                              action="https://www.tvbuy.vn/chieu-cao-chuan">
                            <div class="form-group row"><label class="col-sm-5 col-form-label">Nhập tuổi <span
                                            class="required">*</span></label>
                                <div class="col-sm-7"><input type="text" name="tuoi" class="form-control"
                                                             data-validation="required" data-validation-error-msg=" "></div>
                            </div>
                            <div class="form-group row radio_"><label class="col-sm-5 col-form-label">Giới tính <span
                                            class="required">*</span></label>
                                <div class="col-sm-7">
                                    <div class="form-check form-check-inline"><label
                                                class="form-check-label radio-inline"><input class="form-check-input"
                                                                                             type="radio" name="gioi-tinh"
                                                                                             value="nam" checked>Nam </label>
                                    </div>
                                    <div class="form-check form-check-inline"><label
                                                class="form-check-label radio-inline"><input class="form-check-input"
                                                                                             type="radio" name="gioi-tinh"
                                                                                             value="nu">Nữ </label></div>
                                </div>
                            </div>
                            <div class="form-group row"><label class="col-sm-8 col-form-label nopadding_right">Chiều cao của
                                    bạn (cm) <span class="required">*</span></label>
                                <div class="col-sm-4"><input type="text" name="chieu-cao" class="form-control"
                                                             data-validation="required" data-validation-error-msg=" "></div>
                            </div>
                            <div class="form-group row" style="margin-bottom: 17px;"><label
                                        class="col-sm-8 col-form-label nopadding_right">Cân nặng của bạn (kg) <span
                                            class="required">*</span></label>
                                <div class="col-sm-4"><input type="text" name="can-nang" class="form-control"
                                                             data-validation="required" data-validation-error-msg=" "></div>
                            </div>
                            <button class="btn xem-ccc" type="submit">Xem kết quả</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content content_home">
        <div class="contain block_product block_hot top40">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 block_left block_khachang">
                        <div class="bg_khachhang">Khách hàng cần biết</div>
                        <div id="uytin" class="top20 vertical">
                            <div class="block"><a href="http://congbosanpham.vfa.gov.vn/" target="_blank"
                                                  title="Click xem chi tiết" rel="nofollow">
                                    <div class="item first ">
                                        <div class="has_icon icon-search"></div>
                                        <div class="has_content"><span>TRA CỨU XÁC NHẬN CÔNG BỐ SẢN PHẨM TẠI VIỆT NAM</span>
                                            <div class="nut-xem"><span>Xem chi tiết<i
                                                            class="fa fa-arrow-circle-right"></i></span></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="block"><a href="https://www.amazon.com/s?merchant=A2509EVQU23VKV" target="_blank"
                                                  title="Click xem chi tiết" rel="nofollow">
                                    <div class="item third ">
                                        <div class="has_icon icon-buy-usa"></div>
                                        <div class="has_content"><span>CÁC SẢN PHẨM DO TVBUY<br>PHÂN PHỐI ĐANG ĐƯỢC BÁN<br>TRÊN AMAZON TẠI MỸ</span>
                                            <div class="nut-xem"><span>Xem chi tiết<i
                                                            class="fa fa-arrow-circle-right"></i></span></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="block"><a href="javascript:void(0);" target="_blank" data-toggle="modal"
                                                  data-target="#canhbaohanggia">
                                    <div class="item second ">
                                        <div class="has_icon icon-chu-y"></div>
                                        <div class="has_content"><span>HƯỚNG DẪN CÁCH KIỂM TRA<br>HÀNG CHÍNH HÃNG</span>
                                            <div class="nut-xem"><span>Xem chi tiết<i
                                                            class="fa fa-arrow-circle-right"></i></span></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="modal fade in" id="canhbaohanggia" tabindex="-1" role="dialog"
                                     aria-labelledby="myModal3Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="overflow: hidden;">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                    <i class="fa fa-times-circle" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="modal-body" style="max-height: 778px; overflow-y: auto;"><p>Hãy là
                                                    người tiêu dùng THÔNG MINH với 3 bước kiểm tra TPCN giúp hỗ trợ tăng chiều
                                                    cao CHÍNH HÃNG từ Mỹ như sau:</p>
                                                <ul>
                                                    <li>Sản phẩm phải được Cơ quan quản lý nhà nước tại Việt Nam cấp xác
                                                        nhận công bố lưu hành trên toàn quốc và phải tra cứu được online
                                                        trên website <a href="http://congbosanpham.vfa.gov.vn/"
                                                                        target="_blank" rel="nofollow"><span
                                                                    style="color:#001ffe">tại đây.</span></a></li>
                                                    <li>Nếu là HÀNG CHÍNH HÃNG đang được bán tại nước Mỹ thì phải được <a
                                                                href="tim-kiem5824.html?s=ch%E1%BB%A9ng+nh%E1%BA%ADn+FDA+Hoa+K%E1%BB%B3"
                                                                target="_blank"><span style="color:#001ffe"> FDA Hoa Kỳ cấp chứng nhận</span></a>
                                                        lưu hành tự do. <i>(Nếu FDA Hoa Kỳ không cấp phép thì sản phẩm đó
                                                            chỉ đủ điều kiện xuất khẩu và không được bán tại thị trường
                                                            Mỹ).</i> Xem chi tiết sản phẩm do TVBUY phân phối đang được bán
                                                        trên amazon ở Mỹ <a
                                                                href="https://www.amazon.com/s?me=A2509EVQU23VKV&amp;merchant=A2509EVQU23VKV&amp;qid=1517275866"
                                                                target="_blank" rel="nofollow"><span
                                                                    style="color:#001ffe"><b>tại đây.</b></span></a></li>
                                                    <li>Có thể kiểm tra Mã vạch, QR Code của sản phẩm bằng các phần mềm như
                                                        <a href="http://icheck.vn/" target="_blank" rel="nofollow"><span
                                                                    style="color:#001ffe"> ICHECK</span></a> để truy xuất thông
                                                        tin chính xác nguồn gốc xuất xứ sản phẩm.
                                                    </li>
                                                    <li><strong>Lưu ý:</strong> Hiện nay với loại Tem Chống Hàng Giả thông
                                                        thường đang bị làm giả tràn lan. Quý khách hàng lưu ý nên chọn mua
                                                        các sản phẩm có Tem Chống Hàng Giả tích hợp loại SMS để có thể xác
                                                        nhận bằng tin nhắn từ tổng đài.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 block block_cate block_right">
                        <div class="bd_bottom">
                            <div class="bg_title"><a href="san-pham-hot.html" title="Sản phẩm hot"><h3>Sản phẩm hot</h3></a>
                            </div>
                        </div>
                        <style type="text/css" media="screen"> .block_cate .bd_bottom {
                                border-color: rgba(249, 137, 3, 1);
                            }

                            .block_cate .bg_title {
                                background: rgba(249, 137, 3, 1);
                            }

                            .owl-nav [class^="carousel-"] span:hover {
                                color: rgba(249, 137, 3, 1);
                            } </style>
                        <div class="product product_list top20 owl-carousel">
                            <div class="item">
                                <div class="item-inner line line_right"><a
                                            href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html"
                                            title="NUBEST TALL"><span class="cover_image"><img
                                                    src="/images/products/details/200_200/nubest-tall-front.jpg"
                                                    alt="NUBEST TALL"></span></a>
                                    <div class="product_name"><a href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html"
                                                                 title="NUBEST TALL">NUBEST TALL </a></div>
                                    <span>(60 viên nang) </span>
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
                                            href="doctor-plus-usa-vien-uong-tang-chieu-cao-cua-my.html"
                                            title="DOCTOR PLUS"><span class="cover_image"><img
                                                    src="/images/products/details/200_200/doctor-plus-front.jpg"
                                                    alt="DOCTOR PLUS"></span></a>
                                    <div class="product_name"><a href="doctor-plus-usa-vien-uong-tang-chieu-cao-cua-my.html"
                                                                 title="DOCTOR PLUS">DOCTOR PLUS </a></div>
                                    <span>(30 viên nang) </span>
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
                                            href="nubest-white-vien-uong-trang-da-va-chong-nang.html" title="NUBEST WHITE"><span
                                                class="cover_image"><img
                                                    src="/images/products/details/200_200/nubest-white-front.jpg"
                                                    alt="NUBEST WHITE"></span></a>
                                    <div class="product_name"><a href="nubest-white-vien-uong-trang-da-va-chong-nang.html"
                                                                 title="NUBEST WHITE">NUBEST WHITE </a></div>
                                    <span>(30 viên nang) </span>
                                    <div class="product_rating">
                                        <div class="rateYo4_5"></div>
                                    </div>
                                    <div class="product_description">
                                        <div class="slogan">TPBVSK giúp hỗ trợ sáng da</div>
                                        <div class="product_price"> 790,000 VNĐ</div>
                                    </div>
                                    <div class="product_cart">
                                        <button class="addToCart" data-id="33"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner line line_right"><a
                                            href="collagen-nubest-usa-vien-tre-hoa-lan-da-cua-my.html"
                                            title="COLLAGEN NUBEST"><span class="cover_image"><img
                                                    src="/images/products/details/200_200/collagen-nubest_front.jpg"
                                                    alt="COLLAGEN NUBEST"></span></a>
                                    <div class="product_name"><a href="collagen-nubest-usa-vien-tre-hoa-lan-da-cua-my.html"
                                                                 title="COLLAGEN NUBEST">COLLAGEN NUBEST </a></div>
                                    <span>(60 viên nang) </span>
                                    <div class="product_rating">
                                        <div class="rateYo5_0"></div>
                                    </div>
                                    <div class="product_description">
                                        <div class="slogan">TPBVSK hỗ trợ giúp chống lão hóa, đẹp da</div>
                                        <div class="product_price"> 750,000 VNĐ</div>
                                    </div>
                                    <div class="product_cart">
                                        <button class="addToCart" data-id="4"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner line line_right"><a
                                            href="thuc-pham-tang-chieu-cao-grow-power-usa.html" title="GROW POWER"><span
                                                class="cover_image"><img src="/images/products/details/200_200/Grow-power-front.jpg"
                                                                         alt="GROW POWER"></span></a>
                                    <div class="product_name"><a href="thuc-pham-tang-chieu-cao-grow-power-usa.html"
                                                                 title="GROW POWER">GROW POWER </a></div>
                                    <span>(60 viên nang) </span>
                                    <div class="product_rating">
                                        <div class="rateYo4_5"></div>
                                    </div>
                                    <div class="product_description">
                                        <div class="slogan">TPBVSK giúp hỗ trợ tăng chiều cao</div>
                                        <div class="product_price"> 990,000 VNĐ</div>
                                    </div>
                                    <div class="product_cart">
                                        <button class="addToCart" data-id="21"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner line line_right"><a
                                            href="nufala-usa-nubest-tang-cuong-sinh-ly-suc-khoe-va-sac-dep-phu-nu.html"
                                            title="NUFALA"><span class="cover_image"><img
                                                    src="/images/products/details/200_200/nufala_front.jpg" alt="NUFALA"></span></a>
                                    <div class="product_name"><a
                                                href="nufala-usa-nubest-tang-cuong-sinh-ly-suc-khoe-va-sac-dep-phu-nu.html"
                                                title="NUFALA">NUFALA </a></div>
                                    <span>(30 viên nang) </span>
                                    <div class="product_rating">
                                        <div class="rateYo4_5"></div>
                                    </div>
                                    <div class="product_description">
                                        <div class="slogan">TPBVSK giúp hỗ trợ cải thiện sinh lý Nữ</div>
                                        <div class="product_price"> 690,000 VNĐ</div>
                                    </div>
                                    <div class="product_cart">
                                        <button class="addToCart" data-id="20"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner line line_right"><a
                                            href="nubest-plus-vien-uong-dep-da-chong-lao-hoa.html" title="NUBEST PLUS"><span
                                                class="cover_image"><img src="/images/products/details/200_200/nubest-plus-front.jpg"
                                                                         alt="NUBEST PLUS"></span></a>
                                    <div class="product_name"><a href="nubest-plus-vien-uong-dep-da-chong-lao-hoa.html"
                                                                 title="NUBEST PLUS">NUBEST PLUS </a></div>
                                    <span>(60 viên nang) </span>
                                    <div class="product_rating">
                                        <div class="rateYo5_0"></div>
                                    </div>
                                    <div class="product_description">
                                        <div class="slogan">TPBVSK hỗ trợ giúp chống lão hóa, sáng da</div>
                                        <div class="product_price"> 790,000 VNĐ</div>
                                    </div>
                                    <div class="product_cart">
                                        <button class="addToCart" data-id="34"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner line line_right"><a
                                            href="nutrip-gold-usa-nubest-vien-xuong-khop-chua-curcumin-grapeseed-uc-ii-chondroitin.html"
                                            title="NUTRIP GOLD"><span class="cover_image"><img
                                                    src="/images/products/details/200_200/nutrip-gold_front.jpg"
                                                    alt="NUTRIP GOLD"></span></a>
                                    <div class="product_name"><a
                                                href="nutrip-gold-usa-nubest-vien-xuong-khop-chua-curcumin-grapeseed-uc-ii-chondroitin.html"
                                                title="NUTRIP GOLD">NUTRIP GOLD </a></div>
                                    <span>(60 viên nang) </span>
                                    <div class="product_rating">
                                        <div class="rateYo5_0"></div>
                                    </div>
                                    <div class="product_description">
                                        <div class="slogan">TPBVSK giúp hỗ trợ xương khớp</div>
                                        <div class="product_price"> 690,000 VNĐ</div>
                                    </div>
                                    <div class="product_cart">
                                        <button class="addToCart" data-id="59"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
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
                                    <span>(60 viên nang) </span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contain block_product block_product_1 top40">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 block_left">
                        <div class="banner_top_1">
                            <div class="image-link"><a
                                        href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html?utm_source=banner-jpg-tvbuy&amp;utm_medium=3&amp;utm_campaign=home"
                                        title="Sản phẩm tăng chiều cao" target="_blank"><img
                                            src="/images/upload/category/banner-left-sp-tang-chieu-cao.jpg"
                                            alt="Sản phẩm tăng chiều cao"></a>
                                <div class="overplay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 block block_right">
                        <div class="bd_bottom">
                            <div class="bg_title"><a href="san-pham-tang-chieu-cao.html" title="Sản phẩm tăng chiều cao">
                                    <h3>Sản phẩm tăng chiều cao</h3></a></div>
                        </div>
                        <div class="product product_list top20 owl-carousel">
                            <div class="item">
                                <div class="item-inner line line_right"><a
                                            href="nubest-tall-usa-thuc-pham-tang-chieu-cao-cua-my.html"
                                            title="NUBEST TALL"><span class="cover_image"><img
                                                    src="/images/products/details/200_200/nubest-tall-front.jpg"
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
                                            href="doctor-plus-usa-vien-uong-tang-chieu-cao-cua-my.html"
                                            title="DOCTOR PLUS"><span class="cover_image"><img
                                                    src="/images/products/details/200_200/doctor-plus-front.jpg"
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
                                            href="thuc-pham-tang-chieu-cao-grow-power-usa.html" title="GROW POWER"><span
                                                class="cover_image"><img src="/images/products/details/200_200/Grow-power-front.jpg"
                                                                         alt="GROW POWER"></span></a>
                                    <div class="product_name"><a href="thuc-pham-tang-chieu-cao-grow-power-usa.html"
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
                                        <button class="addToCart" data-id="21"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
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
                                        <button class="addToCart" data-id="61"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner line line_right"><a
                                            href="nubest-kids-usa-bo-sung-vitamin-va-khoang-chat-giup-tang-chieu-cao-cho-be.html"
                                            title="NUBEST KIDS"><span class="cover_image"><img
                                                    src="/images/products/details/200_200/nubest-kid-front.jpg" alt="NUBEST KIDS"></span></a>
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
                                        <button class="btn disabled" data-id="3"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner line line_right"><a
                                            href="growth-plus-thuc-pham-chuc-nang-tang-chieu-cao.html" title="GROWTH PLUS"><span
                                                class="cover_image"><img src="/images/products/details/200_200/growth-plus.jpg"
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
                            <div class="item">
                                <div class="item-inner line line_right"><a href="help-growing-up-100-tang-chieu-cao.html"
                                                                           title="Help Growing Up 100%"><span
                                                class="cover_image"><img
                                                    src="/images/products/details/200_200/help-growing-up-100.jpg"
                                                    alt="Help Growing Up 100%"></span></a>
                                    <div class="product_name"><a href="help-growing-up-100-tang-chieu-cao.html"
                                                                 title="Help Growing Up 100%">Help Growing Up 100% </a>
                                    </div>
                                    <span>(60 viên nang)</span>
                                    <div class="product_rating">
                                        <div class="rateYo4"></div>
                                    </div>
                                    <div class="product_description">
                                        <div class="slogan">TPCN hỗ trợ tăng chiều cao</div>
                                        <div class="product_price"> 790,000 VNĐ</div>
                                    </div>
                                    <div class="product_cart">
                                        <button class="btn disabled" data-id="1"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css" media="screen"> .block_product_1 .bd_bottom {
                border-color: rgba(75, 192, 183, 1);
            }

            .block_product_1 .bg_title {
                background: rgba(75, 192, 183, 1);
            }

            .block_product_1 .owl-nav [class^="carousel-"] span:hover {
                color: rgba(75, 192, 183, 1);
            }</style>
        <div class="contain block_product block_product_2 top40">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 block_left">
                        <div class="banner_top_1">
                            <div class="image-link"><a href="san-pham-lam-dep.html" title="Sản phẩm làm đẹp"
                                                       target="_blank"><img
                                            src="/images/upload/category/banner-left-sp-lam-dep.jpg" alt="Sản phẩm làm đẹp"></a>
                                <div class="overplay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 block block_right">
                        <div class="bd_bottom">
                            <div class="bg_title"><a href="san-pham-lam-dep.html" title="Sản phẩm làm đẹp"><h3>Sản phẩm làm
                                        đẹp</h3></a></div>
                        </div>
                        <div class="product product_grid top20 owl-carousel">
                            <div class="item item_gird">
                                <div class="item_ line line line_right">
                                    <div class="item-inner">
                                        <div class="cover_image"><a
                                                    href="nubest-white-vien-uong-trang-da-va-chong-nang.html"
                                                    title="NUBEST WHITE"><img
                                                        src="/images/products/details/200_200/nubest-white-front.jpg"
                                                        alt="NUBEST WHITE"/></a></div>
                                        <div class="product_info">
                                            <div class="product_name"><a
                                                        href="nubest-white-vien-uong-trang-da-va-chong-nang.html"
                                                        title="NUBEST WHITE">NUBEST WHITE </a></div>
                                            <span>(30 viên nang)</span>
                                            <div class="product_rating">
                                                <div class="rateYo4_5"></div>
                                            </div>
                                            <div class="product_description">
                                                <div class="slogan">TPBVSK giúp hỗ trợ sáng da</div>
                                                <div class="product_price"> 790,000 VNĐ</div>
                                            </div>
                                            <div class="product_cart">
                                                <button class="addToCart" data-id="33"><span><i
                                                                class="fa fa-shopping-cart"></i> Mua hàng</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_ line ">
                                    <div class="item-inner">
                                        <div class="cover_image"><a
                                                    href="collagen-nubest-usa-vien-tre-hoa-lan-da-cua-my.html"
                                                    title="COLLAGEN NUBEST"><img
                                                        src="/images/products/details/200_200/collagen-nubest_front.jpg"
                                                        alt="COLLAGEN NUBEST"/></a></div>
                                        <div class="product_info">
                                            <div class="product_name"><a
                                                        href="collagen-nubest-usa-vien-tre-hoa-lan-da-cua-my.html"
                                                        title="COLLAGEN NUBEST">COLLAGEN NUBEST </a></div>
                                            <span>(60 viên nang)</span>
                                            <div class="product_rating">
                                                <div class="rateYo5_0"></div>
                                            </div>
                                            <div class="product_description">
                                                <div class="slogan">TPBVSK hỗ trợ giúp chống lão hóa, đẹp da</div>
                                                <div class="product_price"> 750,000 VNĐ</div>
                                            </div>
                                            <div class="product_cart">
                                                <button class="addToCart" data-id="4"><span><i
                                                                class="fa fa-shopping-cart"></i> Mua hàng</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_ line line line_right">
                                    <div class="item-inner">
                                        <div class="cover_image"><a href="nubest-plus-vien-uong-dep-da-chong-lao-hoa.html"
                                                                    title="NUBEST PLUS"><img
                                                        src="/images/products/details/200_200/nubest-plus-front.jpg"
                                                        alt="NUBEST PLUS"/></a></div>
                                        <div class="product_info">
                                            <div class="product_name"><a
                                                        href="nubest-plus-vien-uong-dep-da-chong-lao-hoa.html"
                                                        title="NUBEST PLUS">NUBEST PLUS </a></div>
                                            <span>(60 viên nang)</span>
                                            <div class="product_rating">
                                                <div class="rateYo5_0"></div>
                                            </div>
                                            <div class="product_description">
                                                <div class="slogan">TPBVSK hỗ trợ giúp chống lão hóa, sáng da</div>
                                                <div class="product_price"> 790,000 VNĐ</div>
                                            </div>
                                            <div class="product_cart">
                                                <button class="addToCart" data-id="34"><span><i
                                                                class="fa fa-shopping-cart"></i> Mua hàng</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_ line ">
                                    <div class="item-inner">
                                        <div class="cover_image"><a
                                                    href="nubest-lady-usa-vien-chong-lao-hoa-va-trang-da-cua-my.html"
                                                    title="NUBEST LADY"><img
                                                        src="/images/products/details/200_200/nubest-lady-front.jpg"
                                                        alt="NUBEST LADY"/></a></div>
                                        <div class="product_info">
                                            <div class="product_name"><a
                                                        href="nubest-lady-usa-vien-chong-lao-hoa-va-trang-da-cua-my.html"
                                                        title="NUBEST LADY">NUBEST LADY </a></div>
                                            <span>(30 viên nang)</span>
                                            <div class="product_rating">
                                                <div class="rateYo4"></div>
                                            </div>
                                            <div class="product_description">
                                                <div class="slogan">TPBVSK giúp sáng da, chống lão hóa</div>
                                                <div class="product_price"> 690,000 VNĐ</div>
                                            </div>
                                            <div class="product_cart">
                                                <button class="btn disabled" data-id="24"><span><i
                                                                class="fa fa-shopping-cart"></i> Mua hàng</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="item item_gird">
                                <div class="item_ line line line_right">
                                    <div class="item-inner">
                                        <div class="cover_image"><a
                                                    href="collagen-nubest-plus-usa-vien-tre-hoa-da-va-trang-da-cua-my.html"
                                                    title="Collagen Nubest Plus"><img
                                                        src="/images/products/details/200_200/collagen-nubest-plus_front.jpg"
                                                        alt="Collagen Nubest Plus"/></a></div>
                                        <div class="product_info">
                                            <div class="product_name"><a
                                                        href="collagen-nubest-plus-usa-vien-tre-hoa-da-va-trang-da-cua-my.html"
                                                        title="Collagen Nubest Plus">Collagen Nubest Plus </a></div>
                                            <span>(60 viên nang)</span>
                                            <div class="product_rating">
                                                <div class="rateYo4_5"></div>
                                            </div>
                                            <div class="product_description">
                                                <div class="slogan">TPCN giúp hỗ trợ đẹp da, chống lão hóa</div>
                                                <div class="product_price"> 790,000 VNĐ</div>
                                            </div>
                                            <div class="product_cart">
                                                <button class="btn disabled" data-id="32"><span><i
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
        </div>
        <style type="text/css" media="screen"> .block_product_2 .bd_bottom {
                border-color: rgba(255, 141, 104, 1);
            }

            .block_product_2 .bg_title {
                background: rgba(255, 141, 104, 1);
            }

            .block_product_2 .owl-nav [class^="carousel-"] span:hover {
                color: rgba(255, 141, 104, 1);
            }</style>
        <div class="contain block_product block_product_3 top40">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 block_left">
                        <div class="banner_top_1">
                            <div class="image-link"><a
                                        href="nufala-usa-nubest-tang-cuong-sinh-ly-suc-khoe-va-sac-dep-phu-nu.html"
                                        title="Sản phẩm sinh lý" target="_blank"><img
                                            src="/images/upload/category/banner-left-sp-sinh-ly.jpg" alt="Sản phẩm sinh lý"></a>
                                <div class="overplay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 block block_right">
                        <div class="bd_bottom">
                            <div class="bg_title"><a href="san-pham-sinh-ly.html" title="Sản phẩm sinh lý"><h3>Sản phẩm sinh
                                        lý</h3></a></div>
                        </div>
                        <div class="product product_list top20 owl-carousel">
                            <div class="item">
                                <div class="item-inner line line_right"><a
                                            href="nufala-usa-nubest-tang-cuong-sinh-ly-suc-khoe-va-sac-dep-phu-nu.html"
                                            title="NUFALA"><span class="cover_image"><img
                                                    src="/images/products/details/200_200/nufala_front.jpg" alt="NUFALA"></span></a>
                                    <div class="product_name"><a
                                                href="nufala-usa-nubest-tang-cuong-sinh-ly-suc-khoe-va-sac-dep-phu-nu.html"
                                                title="NUFALA">NUFALA </a></div>
                                    <span>(30 viên nang)</span>
                                    <div class="product_rating">
                                        <div class="rateYo4_5"></div>
                                    </div>
                                    <div class="product_description">
                                        <div class="slogan">TPBVSK giúp hỗ trợ cải thiện sinh lý Nữ</div>
                                        <div class="product_price"> 690,000 VNĐ</div>
                                    </div>
                                    <div class="product_cart">
                                        <button class="addToCart" data-id="20"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner line line_right"><a
                                            href="big-jim-usa-nubest-tang-cuong-sinh-ly-nam-gioi.html"
                                            title="Big Jim (Mỹ)"><span class="cover_image"><img
                                                    src="/images/products/details/200_200/big-jim-front.jpg"
                                                    alt="Big Jim (Mỹ)"></span></a>
                                    <div class="product_name"><a href="big-jim-usa-nubest-tang-cuong-sinh-ly-nam-gioi.html"
                                                                 title="Big Jim (Mỹ)">Big Jim (Mỹ) </a></div>
                                    <span>(60 viên nang)</span>
                                    <div class="product_rating">
                                        <div class="rateYo4"></div>
                                    </div>
                                    <div class="product_description">
                                        <div class="slogan">TPCN giúp hỗ trợ tăng sinh lý cho Nam</div>
                                        <div class="product_price"> 590,000 VNĐ</div>
                                    </div>
                                    <div class="product_cart">
                                        <button class="btn disabled" data-id="15"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css" media="screen"> .block_product_3 .bd_bottom {
                border-color: rgba(73, 210, 146, 1);
            }

            .block_product_3 .bg_title {
                background: rgba(73, 210, 146, 1);
            }

            .block_product_3 .owl-nav [class^="carousel-"] span:hover {
                color: rgba(73, 210, 146, 1);
            }</style>
        <div class="contain block_product block_product_4 top40">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 block_left">
                        <div class="banner_top_1">
                            <div class="image-link"><a
                                        href="nutrip-gold-usa-nubest-vien-xuong-khop-chua-curcumin-grapeseed-uc-ii-chondroitin.html"
                                        title="Sản phẩm xương khớp" target="_blank"><img
                                            src="/images/upload/category/banner-left-sp-xuong-khop.jpg"
                                            alt="Sản phẩm xương khớp"></a>
                                <div class="overplay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 block block_right">
                        <div class="bd_bottom">
                            <div class="bg_title"><a href="san-pham-xuong-khop.html" title="Sản phẩm xương khớp"><h3>Sản
                                        phẩm xương khớp</h3></a></div>
                        </div>
                        <div class="product product_grid top20 owl-carousel">
                            <div class="item item_gird">
                                <div class="item_ line line line_right">
                                    <div class="item-inner">
                                        <div class="cover_image"><a
                                                    href="nutrip-gold-usa-nubest-vien-xuong-khop-chua-curcumin-grapeseed-uc-ii-chondroitin.html"
                                                    title="NUTRIP GOLD"><img
                                                        src="/images/products/details/200_200/nutrip-gold_front.jpg"
                                                        alt="NUTRIP GOLD"/></a></div>
                                        <div class="product_info">
                                            <div class="product_name"><a
                                                        href="nutrip-gold-usa-nubest-vien-xuong-khop-chua-curcumin-grapeseed-uc-ii-chondroitin.html"
                                                        title="NUTRIP GOLD">NUTRIP GOLD </a></div>
                                            <span>(60 viên nang)</span>
                                            <div class="product_rating">
                                                <div class="rateYo5_0"></div>
                                            </div>
                                            <div class="product_description">
                                                <div class="slogan">TPBVSK giúp hỗ trợ xương khớp</div>
                                                <div class="product_price"> 690,000 VNĐ</div>
                                            </div>
                                            <div class="product_cart">
                                                <button class="addToCart" data-id="59"><span><i
                                                                class="fa fa-shopping-cart"></i> Mua hàng</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_ line ">
                                    <div class="item-inner">
                                        <div class="cover_image"><a
                                                    href="nu-trip-usa-nubest-vien-xuong-khop-chua-shark-cartilage-glucosamine-msm-chondroitin.html"
                                                    title="NU TRIP"><img src="/images/products/details/200_200/nu-trip-front.jpg"
                                                                         alt="NU TRIP"/></a></div>
                                        <div class="product_info">
                                            <div class="product_name"><a
                                                        href="nu-trip-usa-nubest-vien-xuong-khop-chua-shark-cartilage-glucosamine-msm-chondroitin.html"
                                                        title="NU TRIP">NU TRIP </a></div>
                                            <span>(60 viên nang)</span>
                                            <div class="product_rating">
                                                <div class="rateYo4"></div>
                                            </div>
                                            <div class="product_description">
                                                <div class="slogan">TPCN hỗ trợ phục hồi xương khớp</div>
                                                <div class="product_price"> 650,000 VNĐ</div>
                                            </div>
                                            <div class="product_cart">
                                                <button class="btn disabled" data-id="23"><span><i
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
        </div>
        <style type="text/css" media="screen"> .block_product_4 .bd_bottom {
                border-color: rgba(187, 24, 96, 1);
            }

            .block_product_4 .bg_title {
                background: rgba(187, 24, 96, 1);
            }

            .block_product_4 .owl-nav [class^="carousel-"] span:hover {
                color: rgba(187, 24, 96, 1);
            }</style>
        <div class="contain block_product block_product_5 top40">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 block_left">
                        <div class="banner_top_1">
                            <div class="image-link"><a
                                        href="nutrip-gold-usa-nubest-vien-xuong-khop-chua-curcumin-grapeseed-uc-ii-chondroitin.html"
                                        title="Sản phẩm sức khỏe" target="_blank"><img
                                            src="/images/upload/category/banner-left-sp-suc-khoe.jpg" alt="Sản phẩm sức khỏe"></a>
                                <div class="overplay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 block block_right">
                        <div class="bd_bottom">
                            <div class="bg_title"><a href="san-pham-suc-khoe.html" title="Sản phẩm sức khỏe"><h3>Sản phẩm
                                        sức khỏe</h3></a></div>
                        </div>
                        <div class="product product_list top20 owl-carousel">
                            <div class="item">
                                <div class="item-inner line line_right"><a
                                            href="nu-sleep-usa-nubest-vien-ngu-thao-duoc-giup-ngu-ngon.html"
                                            title="Nu Sleep"><span class="cover_image"><img
                                                    src="/images/products/details/200_200/nu-sleep-front.jpg" alt="Nu Sleep"></span></a>
                                    <div class="product_name"><a
                                                href="nu-sleep-usa-nubest-vien-ngu-thao-duoc-giup-ngu-ngon.html"
                                                title="Nu Sleep">Nu Sleep </a></div>
                                    <span>(60 viên nang)</span>
                                    <div class="product_rating">
                                        <div class="rateYo4"></div>
                                    </div>
                                    <div class="product_description">
                                        <div class="slogan">TPCN giúp hỗ trợ giấc ngủ</div>
                                        <div class="product_price"> 550,000 VNĐ</div>
                                    </div>
                                    <div class="product_cart">
                                        <button class="btn disabled" data-id="14"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner line line_right"><a
                                            href="chol-best-usa-nubest-vien-dieu-hoa-cholesterol-va-giam-mo-mau.html"
                                            title="Chol Best (Mỹ)"><span class="cover_image"><img
                                                    src="/images/products/details/200_200/chol-best-front.jpg"
                                                    alt="Chol Best (Mỹ)"></span></a>
                                    <div class="product_name"><a
                                                href="chol-best-usa-nubest-vien-dieu-hoa-cholesterol-va-giam-mo-mau.html"
                                                title="Chol Best (Mỹ)">Chol Best (Mỹ) </a></div>
                                    <span>(60 viên nang)</span>
                                    <div class="product_rating">
                                        <div class="rateYo4"></div>
                                    </div>
                                    <div class="product_description">
                                        <div class="slogan">TPCN giúp hỗ trợ giảm mỡ máu</div>
                                        <div class="product_price"> 460,000 VNĐ</div>
                                    </div>
                                    <div class="product_cart">
                                        <button class="btn disabled" data-id="5"><span><i class="fa fa-shopping-cart"></i> Mua hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css" media="screen"> .block_product_5 .bd_bottom {
                border-color: rgba(30, 156, 182, 1);
            }

            .block_product_5 .bg_title {
                background: rgba(30, 156, 182, 1);
            }

            .block_product_5 .owl-nav [class^="carousel-"] span:hover {
                color: rgba(30, 156, 182, 1);
            }</style>
        <div class="top40">
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
                                                    href="da-trang-hong-lung-linh-nho-mon-qua-dac-biet-cua-ong-xa-155192.html"
                                                    title="Da trắng hồng lung linh nhờ món quà đặc biệt của ông xã"><img
                                                        src="/frontend//images/news/vo-dep-duoc-yeu-chieu-2jpg.jpg"
                                                        alt="Da trắng hồng lung linh nhờ món quà đặc biệt của ông xã"></a></div>
                                        <div class="blog-content"><h3 class="blog-title"><a
                                                        href="da-trang-hong-lung-linh-nho-mon-qua-dac-biet-cua-ong-xa-155192.html"
                                                        title="Da trắng hồng lung linh nhờ món quà đặc biệt của ông xã">Da trắng
                                                    hồng lung linh nhờ món quà đặc biệt của ông xã</a></h3>
                                            <div class="date_author"><i class="fa fa-calendar" aria-hidden="true"></i>16/04/2018
                                                &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-user" aria-hidden="true"></i>Nguyễn
                                                Hồng
                                            </div>
                                            <div class="blog-des"><span>Sống trong cái bóng hotgirl gần 30 năm, nhưng sau khi sinh con, làn da của mình bị “xuống cấp” nghiêm trọng, nám và tàn nhang xuất hiện nhiều, mụn trứng cá chi chít khiến mình không dám để mặt mộc ra ngoài. May mắn có ông xã tâm lý, quan tâm đến vợ đã mua tặng mình một món quà “đặc biệt”, không chỉ giúp mình tìm lại nhan sắc thời con gái mà còn nhận ra tình yêu chân thành của anh giành cho vợ. (Chị Bích Ngọc – 34 tuổi – Thái Bình).</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="item">
                                    <div class="item-inner">
                                        <div class="blog-img"><a
                                                    href="su-thay-doi-chieu-cao-ngoan-muc-cua-chang-trai-quatar-sau-chuyen-du-hoc-155191.html"
                                                    title="Sự thay đổi chiều cao ngoạn mục của chàng trai Quatar sau chuyến du học"><img
                                                        src="/frontend//images/news/quatar-thap-lun-2.jpg"
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
                                                        src="/frontend//images/news/hanh-trinh-tam-biet-giay-don-cua-nu-sinh-han-quoc-bia.jpg"
                                                        alt="Hành trình “tạm biệt” giày độn của nữ sinh Hàn Quốc"></a></div>
                                        <div class="blog-content"><h3 class="blog-title"><a
                                                        href="hanh-trinh-tam-biet-giay-don-cua-nu-sinh-han-quoc-155190.html"
                                                        title="Hành trình “tạm biệt” giày độn của nữ sinh Hàn Quốc">Hành trình “tạm
                                                    biệt” giày độn của nữ sinh Hàn Quốc</a></h3>
                                            <div class="date_author"><i class="fa fa-calendar" aria-hidden="true"></i>13/04/2018
                                                &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-user" aria-hidden="true"></i>Minh
                                                Hiệp
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
                                                        src="/frontend//images/news/ong-bo-viet-kieu-ke-lai-hanh-trinh-di-tim-chieu-cao-cho-con-bia.jpg"
                                                        alt="Ông bố Việt kiều kể lại hành trình “đi tìm” chiều cao cho con"></a>
                                        </div>
                                        <div class="blog-content"><h3 class="blog-title"><a
                                                        href="ong-bo-viet-kieu-ke-lai-hanh-trinh-di-tim-chieu-cao-cho-con-155189.html"
                                                        title="Ông bố Việt kiều kể lại hành trình “đi tìm” chiều cao cho con">Ông bố
                                                    Việt kiều kể lại hành trình “đi tìm” chiều cao cho con</a></h3>
                                            <div class="date_author"><i class="fa fa-calendar" aria-hidden="true"></i>13/04/2018
                                                &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-user" aria-hidden="true"></i>Minh
                                                Hiệp
                                            </div>
                                            <div class="blog-des"><span>Khi cuộc sống ở Mỹ dần ổn định, nhìn con thấp bé so với bè bạn, tôi bắt đầu nghĩ đến chuyện “tìm lại” chiều cao cho con. Bất ngờ, sau hơn 2 năm sử dụng NUBEST TALL, chiều cao của con trai tôi đã cải thiện một cách tích cực. (Anh Kent Nguyen - 55 tuổi - Taxas - Hoa Kỳ)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="see_more bg_yellow top20"><a href="javascript:void(0)" id="btn_more_blogNews">Xem thêm
                                <i class="fa fa-caret-down"></i><img src="/images/loading_more.gif" class="animation_image"></a>
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
                        $.get('more-blog-news.html', {page: page}, function (data) {
                            if (data.trim().length == 0) {
                                next = false;
                            }
                            $("#results_blogNews").append(data);
                            $('.animation_image').fadeOut('slow');
                        });
                    } </script>
            </div>
        </div>
        <div class="top40">
            <div class="contain block_full block_thuonghieu">
                <div class="container">
                    <div class="block">
                        <div class="bd_bottom">
                            <div class="bg_title"><h3>Thương hiệu</h3></div>
                        </div>
                        <div class="list_item top20 owl-carousel">
                            <div class="item"><a class="img-wrapper" href="https://nubest.vn/" title="NUBEST Vietnam"
                                                 target="_blank"><img class="img-responsive"
                                                                      src="/frontend/front//images/logo-nubest.svg"
                                                                      alt="NUBEST Vietnam"/></a></div>
                            <div class="item"><a class="img-wrapper" href="https://www.nubesttall.com/" title="NUBEST TALL"
                                                 target="_blank"><img class="img-responsive"
                                                                      src="/frontend/front//images/logo-nbt.svg"
                                                                      alt="NUBEST TALL"/></a></div>
                            <div class="item"><a class="img-wrapper" href="https://doctorplus.vn/" title="DOCTOR PLUS"
                                                 target="_blank"><img class="img-responsive"
                                                                      src="/frontend/front//images/logo-doctorplus.svg"
                                                                      alt="DOCTOR PLUS"/></a></div>
                            <div class="item"><a class="img-wrapper" href="https://growpower.vn/" title="GROW POWER"
                                                 target="_blank"><img class="img-responsive"
                                                                      src="/frontend/front//images/logo-grow-power.svg"
                                                                      alt="GROW POWER"/></a></div>
                            <div class="item"><a class="img-wrapper"
                                                 href="nutrip-gold-usa-nubest-vien-xuong-khop-chua-curcumin-grapeseed-uc-ii-chondroitin.html"
                                                 title="NUTRIP GOLD" target="_blank"><img class="img-responsive"
                                                                                          src="/frontend/front//images/logo-nutrip-gold.svg"
                                                                                          alt="NUTRIP GOLD"/></a></div>
                            <div class="item"><a class="img-wrapper"
                                                 href="nubest-white-vien-uong-trang-da-va-chong-nang.html"
                                                 title="Nubest White" target="_blank"><img class="img-responsive"
                                                                                           src="/frontend/front//images/logo-nbw.svg"
                                                                                           alt="Nubest White"/></a></div>
                            <div class="item"><a class="img-wrapper"
                                                 href="collagen-nubest-usa-vien-tre-hoa-lan-da-cua-my.html"
                                                 title="Collagen Nubest" target="_blank"><img class="img-responsive"
                                                                                              src="/frontend/front//images/logo-colagen-nubest.svg"
                                                                                              alt="Collagen Nubest"/></a>
                            </div>
                            <div class="item"><a class="img-wrapper"
                                                 href="nufala-usa-nubest-tang-cuong-sinh-ly-suc-khoe-va-sac-dep-phu-nu.html"
                                                 title="Nufafa" target="_blank"><img class="img-responsive"
                                                                                     src="/frontend/front//images/logo-nufala.svg"
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
    </div>
@endsection

@section('scripts')

@endsection