<main id="main" class="">
    <div class="checkout-page-title page-title">
        <div class="page-title-inner flex-row medium-flex-wrap container">
            <div class="flex-col flex-grow medium-text-center">
                <nav class="breadcrumbs flex-row flex-row-center heading-font checkout-breadcrumbs text-center strong h2 uppercase">
                    <a href="https://phukienabc.com/gio-hang/" class="hide-for-small">
                        Giỏ Hàng
                    </a>
                    <span class="divider hide-for-small"><i class="fa-regular fa-chevron-right"></i></span>
                    <a href="https://phukienabc.com/thanh-toan/" class="current">
                        Thanh Toán
                    </a>
                    <span class="divider hide-for-small"><i class="fa-regular fa-chevron-right"></i></span>
                    <a href="#" class="no-click hide-for-small"> Đặt Hàng </a>
                </nav>
            </div>
        </div>
    </div>
    <div class="cart-container container page-wrapper page-checkout">
        <div class="woocommerce">
            <form name="checkout" method="post" class="checkout woocommerce-checkout" action="https://phukienabc.com/thanh-toan/" enctype="multipart/form-data">
                <div class="row pt-0">
                    <div class="large-7 col">
                        <div id="customer_details">
                            <div class="clear">
                                <div class="woocommerce-billing-fields">
                                    <h3>Thông tin thanh toán</h3>

                                    <div class="woocommerce-billing-fields__field-wrapper">
                                        <p class="form-row form-row-wide validate-required" id="billing_last_name_field" data-priority="10">
                                            <label for="billing_last_name" class="">Họ và tên&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text" name="billing_last_name" id="billing_last_name" placeholder="Họ tên của bạn" value="" /></span>
                                        </p>
                                        <p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="20">
                                            <label for="billing_phone" class="">Số điện thoại&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text" name="billing_phone" id="billing_phone" placeholder="" value="" autocomplete="tel" /></span>
                                        </p>
                                        <p class="form-row form-row-last validate-email" id="billing_email_field" data-priority="21">
                                            <label for="billing_email" class="">Địa chỉ email&nbsp;<span class="optional">(không bắt buộc)</span></label><span class="woocommerce-input-wrapper"><input type="email" class="input-text" name="billing_email" id="billing_email" placeholder="" value="" autocomplete="email username" /></span>
                                        </p>
                                        <p class="form-row form-row-first address-field update_totals_on_change validate-required" id="billing_state_field" data-priority="30">
                                            <label for="billing_state" class="">Tỉnh/Thành phố&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><select name="billing_state" id="billing_state" class="select" data-allow_clear="true" data-placeholder="Chọn">
                                                    <option value="">Chọn tỉnh/thành phố</option>
                                                    <option value="HANOI" selected="selected">
                                                        Hà Nội
                                                    </option>
                                                    <option value="HOCHIMINH">Hồ Chí Minh</option>
                                                    <option value="ANGIANG">An Giang</option>
                                                    <option value="BACGIANG">Bắc Giang</option>
                                                    <option value="BACKAN">Bắc Kạn</option>
                                                    <option value="BACLIEU">Bạc Liêu</option>
                                                    <option value="BACNINH">Bắc Ninh</option>
                                                    <option value="BARIAVUNGTAU">
                                                        Bà Rịa - Vũng Tàu
                                                    </option>
                                                    <option value="BENTRE">Bến Tre</option>
                                                    <option value="BINHDINH">Bình Định</option>
                                                    <option value="BINHDUONG">Bình Dương</option>
                                                    <option value="BINHPHUOC">Bình Phước</option>
                                                    <option value="BINHTHUAN">Bình Thuận</option>
                                                    <option value="CAMAU">Cà Mau</option>
                                                    <option value="CANTHO">Cần Thơ</option>
                                                    <option value="CAOBANG">Cao Bằng</option>
                                                    <option value="DAKLAK">Đắk Lắk</option>
                                                    <option value="DAKNONG">Đắk Nông</option>
                                                    <option value="DANANG">Đà Nẵng</option>
                                                    <option value="DIENBIEN">Điện Biên</option>
                                                    <option value="DONGNAI">Đồng Nai</option>
                                                    <option value="DONGTHAP">Đồng Tháp</option>
                                                    <option value="GIALAI">Gia Lai</option>
                                                    <option value="HAGIANG">Hà Giang</option>
                                                    <option value="HAIDUONG">Hải Dương</option>
                                                    <option value="HAIPHONG">Hải Phòng</option>
                                                    <option value="HANAM">Hà Nam</option>
                                                    <option value="HATINH">Hà Tĩnh</option>
                                                    <option value="HAUGIANG">Hậu Giang</option>
                                                    <option value="HOABINH">Hòa Bình</option>
                                                    <option value="HUNGYEN">Hưng Yên</option>
                                                    <option value="KHANHHOA">Khánh Hòa</option>
                                                    <option value="KIENGIANG">Kiên Giang</option>
                                                    <option value="KONTUM">Kon Tum</option>
                                                    <option value="LAICHAU">Lai Châu</option>
                                                    <option value="LAMDONG">Lâm Đồng</option>
                                                    <option value="LANGSON">Lạng Sơn</option>
                                                    <option value="LAOCAI">Lào Cai</option>
                                                    <option value="LONGAN">Long An</option>
                                                    <option value="NAMDINH">Nam Định</option>
                                                    <option value="NGHEAN">Nghệ An</option>
                                                    <option value="NINHBINH">Ninh Bình</option>
                                                    <option value="NINHTHUAN">Ninh Thuận</option>
                                                    <option value="PHUTHO">Phú Thọ</option>
                                                    <option value="PHUYEN">Phú Yên</option>
                                                    <option value="QUANGBINH">Quảng Bình</option>
                                                    <option value="QUANGNAM">Quảng Nam</option>
                                                    <option value="QUANGNGAI">Quảng Ngãi</option>
                                                    <option value="QUANGNINH">Quảng Ninh</option>
                                                    <option value="QUANGTRI">Quảng Trị</option>
                                                    <option value="SOCTRANG">Sóc Trăng</option>
                                                    <option value="SONLA">Sơn La</option>
                                                    <option value="TAYNINH">Tây Ninh</option>
                                                    <option value="THAIBINH">Thái Bình</option>
                                                    <option value="THAINGUYEN">Thái Nguyên</option>
                                                    <option value="THANHHOA">Thanh Hóa</option>
                                                    <option value="THUATHIENHUE">Thừa Thiên Huế</option>
                                                    <option value="TIENGIANG">Tiền Giang</option>
                                                    <option value="TRAVINH">Trà Vinh</option>
                                                    <option value="TUYENQUANG">Tuyên Quang</option>
                                                    <option value="VINHLONG">Vĩnh Long</option>
                                                    <option value="VINHPHUC">Vĩnh Phúc</option>
                                                    <option value="YENBAI">Yên Bái</option>
                                                </select></span>
                                        </p>
                                        <p class="form-row form-row-last validate-required validate-required" id="billing_city_field" data-priority="40">
                                            <label for="billing_city" class="">Quận/Huyện
                                                <abbr class="required" title="bắt buộc">*</abbr></label><select name="billing_city" id="billing_city" class="select" data-allow_clear="true" data-placeholder="Chọn">
                                                <option value="" selected="selected">Chọn</option>
                                                <option value="271">Huyện Ba Vì</option>
                                                <option value="277">Huyện Chương Mỹ</option>
                                                <option value="018">Huyện Gia Lâm</option>
                                                <option value="274">Huyện Hoài Đức</option>
                                                <option value="250">Huyện Mê Linh</option>
                                                <option value="282">Huyện Mỹ Đức</option>
                                                <option value="272">Huyện Phúc Thọ</option>
                                                <option value="280">Huyện Phú Xuyên</option>
                                                <option value="275">Huyện Quốc Oai</option>
                                                <option value="016">Huyện Sóc Sơn</option>
                                                <option value="278">Huyện Thanh Oai</option>
                                                <option value="020">Huyện Thanh Trì</option>
                                                <option value="279">Huyện Thường Tín</option>
                                                <option value="276">Huyện Thạch Thất</option>
                                                <option value="273">Huyện Đan Phượng</option>
                                                <option value="017">Huyện Đông Anh</option>
                                                <option value="281">Huyện Ứng Hòa</option>
                                                <option value="001">Quận Ba Đình</option>
                                                <option value="021">Quận Bắc Từ Liêm</option>
                                                <option value="005">Quận Cầu Giấy</option>
                                                <option value="007">Quận Hai Bà Trưng</option>
                                                <option value="008">Quận Hoàng Mai</option>
                                                <option value="002">Quận Hoàn Kiếm</option>
                                                <option value="268">Quận Hà Đông</option>
                                                <option value="004">Quận Long Biên</option>
                                                <option value="019">Quận Nam Từ Liêm</option>
                                                <option value="009">Quận Thanh Xuân</option>
                                                <option value="003">Quận Tây Hồ</option>
                                                <option value="006">Quận Đống Đa</option>
                                                <option value="269">Thị xã Sơn Tây</option>
                                            </select>
                                        </p>
                                        <p class="form-row form-row-first validate-required validate-required" id="billing_address_2_field" data-priority="50">
                                            <label for="billing_address_2" class="">Xã/Phường
                                                <abbr class="required" title="bắt buộc">*</abbr></label><select name="billing_address_2" id="billing_address_2" class="select" data-allow_clear="true" data-placeholder="Chọn">
                                                <option value="" selected="selected">Chọn</option>
                                            </select>
                                        </p>
                                        <p class="form-row form-row-last validate-required" id="billing_address_1_field" data-priority="60">
                                            <label for="billing_address_1" class="">Địa chỉ&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text" name="billing_address_1" id="billing_address_1" placeholder="Ví dụ: Số 20, ngõ 90" value="" autocomplete="address-line1" /></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="clear">
                                <div class="woocommerce-shipping-fields">
                                    <span id="ship-to-different-address">
                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                            <input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" type="checkbox" name="ship_to_different_address" value="1" />
                                            <span>Giao hàng tới địa chỉ khác?</span>
                                        </label>
                                    </span>

                                    <div class="shipping_address">
                                        <div class="woocommerce-shipping-fields__field-wrapper">
                                            <p class="form-row form-row-first validate-required" id="shipping_last_name_field" data-priority="10">
                                                <label for="shipping_last_name" class="">Họ tên người nhận&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text" name="shipping_last_name" id="shipping_last_name" placeholder="" value="" /></span>
                                            </p>
                                            <p class="form-row form-row-last" id="shipping_phone_field" data-priority="20">
                                                <label for="shipping_phone" class="">Số điện thoại của người nhận&nbsp;<span class="optional">(không bắt buộc)</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text" name="shipping_phone" id="shipping_phone" placeholder="" value="" /></span>
                                            </p>
                                            <p class="form-row form-row-first address-field update_totals_on_change validate-required" id="shipping_state_field" data-priority="30">
                                                <label for="shipping_state" class="">Tỉnh/Thành phố&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><select name="shipping_state" id="shipping_state" class="select" data-allow_clear="true" data-placeholder="Chọn">
                                                        <option value="">Chọn tỉnh/thành phố</option>
                                                        <option value="HANOI" selected="selected">
                                                            Hà Nội
                                                        </option>
                                                        <option value="HOCHIMINH">Hồ Chí Minh</option>
                                                        <option value="ANGIANG">An Giang</option>
                                                        <option value="BACGIANG">Bắc Giang</option>
                                                        <option value="BACKAN">Bắc Kạn</option>
                                                        <option value="BACLIEU">Bạc Liêu</option>
                                                        <option value="BACNINH">Bắc Ninh</option>
                                                        <option value="BARIAVUNGTAU">
                                                            Bà Rịa - Vũng Tàu
                                                        </option>
                                                        <option value="BENTRE">Bến Tre</option>
                                                        <option value="BINHDINH">Bình Định</option>
                                                        <option value="BINHDUONG">Bình Dương</option>
                                                        <option value="BINHPHUOC">Bình Phước</option>
                                                        <option value="BINHTHUAN">Bình Thuận</option>
                                                        <option value="CAMAU">Cà Mau</option>
                                                        <option value="CANTHO">Cần Thơ</option>
                                                        <option value="CAOBANG">Cao Bằng</option>
                                                        <option value="DAKLAK">Đắk Lắk</option>
                                                        <option value="DAKNONG">Đắk Nông</option>
                                                        <option value="DANANG">Đà Nẵng</option>
                                                        <option value="DIENBIEN">Điện Biên</option>
                                                        <option value="DONGNAI">Đồng Nai</option>
                                                        <option value="DONGTHAP">Đồng Tháp</option>
                                                        <option value="GIALAI">Gia Lai</option>
                                                        <option value="HAGIANG">Hà Giang</option>
                                                        <option value="HAIDUONG">Hải Dương</option>
                                                        <option value="HAIPHONG">Hải Phòng</option>
                                                        <option value="HANAM">Hà Nam</option>
                                                        <option value="HATINH">Hà Tĩnh</option>
                                                        <option value="HAUGIANG">Hậu Giang</option>
                                                        <option value="HOABINH">Hòa Bình</option>
                                                        <option value="HUNGYEN">Hưng Yên</option>
                                                        <option value="KHANHHOA">Khánh Hòa</option>
                                                        <option value="KIENGIANG">Kiên Giang</option>
                                                        <option value="KONTUM">Kon Tum</option>
                                                        <option value="LAICHAU">Lai Châu</option>
                                                        <option value="LAMDONG">Lâm Đồng</option>
                                                        <option value="LANGSON">Lạng Sơn</option>
                                                        <option value="LAOCAI">Lào Cai</option>
                                                        <option value="LONGAN">Long An</option>
                                                        <option value="NAMDINH">Nam Định</option>
                                                        <option value="NGHEAN">Nghệ An</option>
                                                        <option value="NINHBINH">Ninh Bình</option>
                                                        <option value="NINHTHUAN">Ninh Thuận</option>
                                                        <option value="PHUTHO">Phú Thọ</option>
                                                        <option value="PHUYEN">Phú Yên</option>
                                                        <option value="QUANGBINH">Quảng Bình</option>
                                                        <option value="QUANGNAM">Quảng Nam</option>
                                                        <option value="QUANGNGAI">Quảng Ngãi</option>
                                                        <option value="QUANGNINH">Quảng Ninh</option>
                                                        <option value="QUANGTRI">Quảng Trị</option>
                                                        <option value="SOCTRANG">Sóc Trăng</option>
                                                        <option value="SONLA">Sơn La</option>
                                                        <option value="TAYNINH">Tây Ninh</option>
                                                        <option value="THAIBINH">Thái Bình</option>
                                                        <option value="THAINGUYEN">Thái Nguyên</option>
                                                        <option value="THANHHOA">Thanh Hóa</option>
                                                        <option value="THUATHIENHUE">Thừa Thiên Huế</option>
                                                        <option value="TIENGIANG">Tiền Giang</option>
                                                        <option value="TRAVINH">Trà Vinh</option>
                                                        <option value="TUYENQUANG">Tuyên Quang</option>
                                                        <option value="VINHLONG">Vĩnh Long</option>
                                                        <option value="VINHPHUC">Vĩnh Phúc</option>
                                                        <option value="YENBAI">Yên Bái</option>
                                                    </select></span>
                                            </p>
                                            <p class="form-row form-row-last validate-required validate-required" id="shipping_city_field" data-priority="40">
                                                <label for="shipping_city" class="">Quận/Huyện
                                                    <abbr class="required" title="bắt buộc">*</abbr></label><select name="shipping_city" id="shipping_city" class="select" data-allow_clear="true" data-placeholder="Chọn">
                                                    <option value="" selected="selected">Chọn</option>
                                                    <option value="271">Huyện Ba Vì</option>
                                                    <option value="277">Huyện Chương Mỹ</option>
                                                    <option value="018">Huyện Gia Lâm</option>
                                                    <option value="274">Huyện Hoài Đức</option>
                                                    <option value="250">Huyện Mê Linh</option>
                                                    <option value="282">Huyện Mỹ Đức</option>
                                                    <option value="272">Huyện Phúc Thọ</option>
                                                    <option value="280">Huyện Phú Xuyên</option>
                                                    <option value="275">Huyện Quốc Oai</option>
                                                    <option value="016">Huyện Sóc Sơn</option>
                                                    <option value="278">Huyện Thanh Oai</option>
                                                    <option value="020">Huyện Thanh Trì</option>
                                                    <option value="279">Huyện Thường Tín</option>
                                                    <option value="276">Huyện Thạch Thất</option>
                                                    <option value="273">Huyện Đan Phượng</option>
                                                    <option value="017">Huyện Đông Anh</option>
                                                    <option value="281">Huyện Ứng Hòa</option>
                                                    <option value="001">Quận Ba Đình</option>
                                                    <option value="021">Quận Bắc Từ Liêm</option>
                                                    <option value="005">Quận Cầu Giấy</option>
                                                    <option value="007">Quận Hai Bà Trưng</option>
                                                    <option value="008">Quận Hoàng Mai</option>
                                                    <option value="002">Quận Hoàn Kiếm</option>
                                                    <option value="268">Quận Hà Đông</option>
                                                    <option value="004">Quận Long Biên</option>
                                                    <option value="019">Quận Nam Từ Liêm</option>
                                                    <option value="009">Quận Thanh Xuân</option>
                                                    <option value="003">Quận Tây Hồ</option>
                                                    <option value="006">Quận Đống Đa</option>
                                                    <option value="269">Thị xã Sơn Tây</option>
                                                </select>
                                            </p>
                                            <p class="form-row form-row-first validate-required validate-required" id="shipping_address_2_field" data-priority="50">
                                                <label for="shipping_address_2" class="">Xã/Phường
                                                    <abbr class="required" title="bắt buộc">*</abbr></label><select name="shipping_address_2" id="shipping_address_2" class="select" data-allow_clear="true" data-placeholder="Chọn">
                                                    <option value="" selected="selected">Chọn</option>
                                                </select>
                                            </p>
                                            <p class="form-row form-row-last validate-required" id="shipping_address_1_field" data-priority="60">
                                                <label for="shipping_address_1" class="">Địa chỉ&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text" name="shipping_address_1" id="shipping_address_1" placeholder="Ví dụ: Số 20, ngõ 90" value="" autocomplete="address-line1" /></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="woocommerce-additional-fields">
                                    <div class="woocommerce-additional-fields__field-wrapper">
                                        <p class="form-row notes" id="order_comments_field" data-priority="">
                                            <label for="order_comments" class="">Ghi chú đơn hàng&nbsp;<span class="optional">(không bắt buộc)</span></label><span class="woocommerce-input-wrapper">
                                                <textarea name="order_comments" class="input-text" id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="2" cols="5"></textarea>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="large-5 col">
                        <div class="col-inner has-border">
                            <div class="checkout-sidebar sm-touch-scroll">
                                <h3 id="order_review_heading">Đơn hàng của bạn</h3>

                                <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Sản phẩm</th>
                                                <th class="product-total">Tạm tính</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Tai Nghe Dareu EH416 Dây USB, Giả Lập 7.1&nbsp;
                                                    <strong class="product-quantity">&times;&nbsp;1</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="woocommerce-Price-amount amount"><bdi>349.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Giá tiền sản phẩm</th>
                                                <td>
                                                    <span class="woocommerce-Price-amount amount"><bdi>349.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                </td>
                                            </tr>

                                            <tr class="woocommerce-shipping-totals shipping">
                                                <td class="shipping__inner" colspan="2">
                                                    <table class="shipping__table">
                                                        <tbody>
                                                            <tr>
                                                                <th style="border-bottom: none !important">
                                                                    Phí vận chuyển
                                                                </th>
                                                                <td data-title="Phí vận chuyển" style="border-bottom: none !important">
                                                                    <ul id="shipping_method" class="shipping__list woocommerce-shipping-methods">
                                                                        <li class="shipping__list_item">
                                                                            <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate3" value="flat_rate:3" class="shipping_method" /><label class="shipping__list_label" for="shipping_method_0_flat_rate3">Giao hàng có tính phí:
                                                                                <span class="woocommerce-Price-amount amount"><bdi>20.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></label>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Tổng chi phí</th>
                                                <td>
                                                    <strong><span class="woocommerce-Price-amount amount"><bdi>369.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div id="payment" class="woocommerce-checkout-payment">
                                        <p><strong>Hình thức thanh toán</strong></p>
                                        <ul class="wc_payment_methods payment_methods methods" style="margin-left: 0.2em">
                                            <li class="wc_payment_method payment_method_cod">
                                                <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked" data-order_button_text="" />

                                                <label for="payment_method_cod">
                                                    Trả tiền mặt khi nhận hàng (COD)
                                                </label>
                                                <div class="payment_box payment_method_cod">
                                                    <p>
                                                        Quý khách trả tiền mặt sau khi đã nhận hàng và kiểm
                                                        tra hàng hóa.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="wc_payment_method payment_method_bacs">
                                                <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" data-order_button_text="" />

                                                <label for="payment_method_bacs">
                                                    Chuyển khoản ngân hàng
                                                </label>
                                                <div class="payment_box payment_method_bacs" style="display: none">
                                                    <p>
                                                        Quý khách chuyển tiền vào tài khoản ngân hàng
                                                        Vietcombank của chúng tôi và sử dụng MÃ ĐƠN HÀNG
                                                        trong phần NỘI DUNG THANH TOÁN. Đơn hàng sẽ đươc
                                                        giao sau khi quý khách chuyển tiền.
                                                    </p>
                                                    <p>Thông tin tài khoản:</p>
                                                    <p>
                                                        NGÂN HÀNG TMCP NGOẠI THƯƠNG VIỆT NAM
                                                        (VIETCOMBANK)<br />
                                                        Tên Tài Khoản: ĐINH VĂN DIỆN<br />
                                                        Số Tài Khoản: 1016017075
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="form-row place-order">
                                            <noscript>
                                                Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị
                                                vô hiệu hóa, hãy đảm bảo bạn nhấp vào
                                                <em>Cập nhật giỏ hàng</em> trước khi bạn thanh toán. Bạn
                                                có thể phải trả nhiều hơn số tiền đã nói ở trên, nếu bạn
                                                không làm như vậy. <br /><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Cập nhật tổng">
                                                    Cập nhật tổng
                                                </button>
                                            </noscript>

                                            <div class="woocommerce-terms-and-conditions-wrapper"></div>

                                            <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng" data-value="Đặt hàng">
                                                Đặt hàng
                                            </button>

                                            <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="e605ecb4ae" /><input type="hidden" name="_wp_http_referer" value="/thanh-toan/" />
                                        </div>
                                    </div>
                                </div>

                                <div class="woocommerce-privacy-policy-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>