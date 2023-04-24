<?php
include_once("ketnoi.php");
session_start();
$user = [];
$user = (isset($_SESSION["user"])) ? $_SESSION["user"] : [];

/**
 *
 * Chuyển đổi chuỗi kí tự thành dạng slug dùng cho việc tạo friendly url.
 *
 * @access    public
 * @param    string
 * @return    string
 */
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = '')
    {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro.min.css">
    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-colors.min.css">
    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-rtl.min.css">
    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-icons.min.css">
    <link rel="stylesheet" href="./acsset/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="icon" href="./acsset/img/img-logo/Logo-Shopee.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./acsset/reset/normalize.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./acsset/Css/style.css">
    <link rel="stylesheet" href="./acsset/Css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        body {
            background: rgba(241, 219, 219, 0.4);
        }

        header {
            top: 0;
            position: relative;
        }

        .header_pay-main {
            display: flex;
            width: 1200px;
            margin: auto;

        }

        .logo_pay-main img {
            width: 200px;
            height: 70px;
        }

        .h3_logo-pay h3 {
            font-size: 18px;
            font-weight: bold !important;
            line-height: 100px;
            color: red;
        }

        .header {
            margin: 0;
        }

        .header_pay {
            background: white;
            border-bottom: 1px solid #ee4d2d;
        }

        .cart {
            margin-top: 20px;
            margin-bottom: 60px;
        }

        .cart_main {
            margin: auto;
            width: 1200px;
        }

        .rtM2Xz {
            background-color: #fffefb;
            border: 1px solid rgba(224, 168, 0, .4);
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
            margin-bottom: 0.625rem;
            border-radius: 2px;
        }

        .MCA-wE {
            width: unset;
        }

        .shopee-svg-icon {
            display: inline-block;
            width: 1em;
            height: 1em;
            fill: currentColor;
            position: relative;
        }

        svg.shopee-svg-icon.MCA-wE.icon-free-shipping {
            width: 50px;
        }

        .bXROAg {
            color: #222;
            margin-left: 0.5rem;
            font-size: 14px;
        }

        .cart_main form {
            right: 0;
        }

        .check_all {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background: white;
            line-height: 30px;
            margin-top: 30px;
        }

        ul.list_check_all {
            display: flex;
        }

        li.item_check_li {
            width: 150px;
            height: 30px;
            font-size: 14px;
            color: rgba(0, 0, 0, 0.6);
            text-align: center;
        }

        .check_all1 {
            display: flex;
        }

        .check_all1 p {
            width: 450px;
            font-size: 14px;
            margin-left: 20px;
        }

        input#checkAll {
            width: 18px;
            accent-color: #ee4d2d;
        }

        #checkboxcolor {
            accent-color: #ee4d2d;
        }

        .cart_product-s {
            display: flex;
            justify-content: space-between;
            background: white;
            margin-top: 30px;
            padding: 20px;
        }

        ul.cart_prodct1-list {
            display: flex;
            line-height: 80px;
        }

        li.cart_product_item img {
            width: 80px;
            height: 80px;
            margin: 0 20px;
        }

        li.cart_product_item p {
            font-size: 12px;
            width: 400px;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 40px;
        }

        ul.cart_product2_list {
            display: flex;
        }

        li.cart_product2_item {
            width: 150px;
            text-align: center;
            line-height: 80px;
            font-size: 14px;
        }

        li.cart_product2_item.cart_product_item_color {
            color: red;
        }

        form input[type="submit"] {
            top: 0;
        }

        .dT5fMv,
        .jxfDh3 {
            display: flex;
            align-items: center;
            background: white;
        }

        .dT5fMv {
            padding: 1rem 0 1rem 2.5rem;
            border-top: 1px solid rgba(0, 0, 0, .09);
        }

        .E7Kz1Q,
        .L-deCr {
            color: #ee4d2d;
            fill: currentColor;
            width: 1.3125rem;
            height: 1.25rem;
            margin-top: 0.0625rem;
        }

        .jxfDh3 {
            margin: 0 0 0 0.875rem;
            height: 1.75rem;
        }

        .kAocQv {
            white-space: nowrap;
            color: #05a;
        }

        .AYBwMK {
            display: flex;
            align-items: center;
            padding: 1.25rem 0 1.25rem 2.5rem;
            border-top: 1px solid rgba(0, 0, 0, .09);
            background: white;
        }

        .MS9XQD {
            color: #00bfa5;
            stroke: currentColor;
            fill: currentColor;
            width: 1.25rem;
            height: 0.9375rem;
        }

        .hYG2mu {
            margin-left: 0.9375rem;
        }

        .shopee-drawer {
            display: flex;
            position: relative;
            overflow: visible;
            outline: 0;
        }

        .XEejA4 {
            margin-left: 0.375rem;
            color: #05a;
            cursor: pointer;
        }

        .rnocow {
            display: grid;
            grid-template-columns: 1fr 20.3125rem 11.875rem;
            align-items: center;
            box-sizing: border-box;
            background: #fff;
            width: 100%;
            flex: 1;
            font-size: 1rem;
            position: relative;
            margin-top: 0.75rem;
        }

        .exGqmz {
            grid-column-start: 2;
            grid-column-end: 4;
            -ms-grid-column-span: 2;
            display: flex;
            align-items: center;
            padding: 0.75rem 0;
        }

        .exGqmz .icon-voucher-applied-line,
        .exGqmz .icon-voucher-line {
            color: #ee4d2d;
            fill: currentColor;
            width: 1.3125rem;
            height: 1.25rem;
        }

        .C9vN6U {
            margin: 0 0.3125rem;
        }

        .C9vN6U,
        .wcVUmG {
            font-weight: 500;
            flex-shrink: 0;
            margin: 0 0.5rem;
            font-size: 14px;
        }

        .GdUwdD {
            flex: 1;
        }

        .ORcGEd {
            margin-right: 1.875rem;
            text-transform: capitalize;
            color: #05a;
            font-size: 14px;
            white-space: nowrap;
            cursor: pointer;
        }

        .h-Ivjs {
            grid-column-start: 1;
            grid-column-end: 4;
            -ms-grid-column-span: 3;
            border-top: 1px dashed rgba(0, 0, 0, .09);
        }

        .ceZa-G {
            display: flex;
            flex-direction: row-reverse;
            min-width: 58px;
            box-sizing: border-box;
            grid-column-start: 1;
            grid-column-end: 2;
            -ms-grid-column-span: 1;
            flex: 0 0 auto;
            padding: 16px 12px 16px 20px;
        }

        .ceZa-G .stardust-checkbox--disabled {
            opacity: 1;
        }

        .stardust-checkbox--disabled {
            opacity: .35;
            cursor: no-drop;
        }

        .stardust-checkbox__input {
            opacity: 0;
            top: 0;
            left: 0;
            position: absolute;
        }

        ._1dLWkp {
            justify-content: flex-start;
            grid-column-start: 2;
            grid-column-end: 3;
        }

        ._1dLWkp,
        ._4kUN8t {
            -ms-grid-column-span: 1;
            display: flex;
            align-items: center;
        }

        .hpZGIt {
            width: 18px;
            height: 18px;
            flex: 0 0 auto;
            fill: none;
        }

        .korYGr {
            font-weight: 500;
            flex-shrink: 0;
            margin-left: 8px;
        }

        .WpXi0X {
            font-weight: 500;
            flex: 0 1 auto;
            color: #929292;
            margin-left: 17px;
        }

        ._2Z2rR4 {
            z-index: 2;
        }

        .stardust-popover {
            position: relative;
        }

        .K98a1N {
            font-size: 14px;
            box-sizing: border-box;
        }

        .OzpV75 {
            stroke: currentColor;
            flex: 0 1 auto;
            font-size: 12px;
            color: rgba(0, 0, 0, .54);
            padding-right: 6px;
            padding-left: 6px;
        }

        .shopee-svg-icon {
            display: inline-block;
            width: 1em;
            height: 1em;
            fill: currentColor;
            position: relative;
        }

        ._1dLWkp,
        ._4kUN8t {
            -ms-grid-column-span: 1;
            display: flex;
            align-items: center;
        }

        ._4kUN8t {
            grid-column-start: 3;
            grid-column-end: 4;
            justify-content: flex-end;
        }

        ._9d15-k {
            padding-right: 30px;
            font-weight: 500;
            color: #d0d0d0;
        }

        .s1Gxkq {
            padding: 12px 0;
            grid-column-start: 1;
            grid-column-end: 4;
            -ms-grid-column-span: 3;
            display: flex;
            align-items: center;
            flex: 1;
            width: 100%;
            justify-content: space-around;
        }

        .aiyQAr {
            display: flex;
        }

        .A-CcKC {
            font-size: 18px;
        }

        .WC0us\+ span {
            font-size: 18px;
            color: #ee4d2d;
        }

        .WC0us\+ {
            width: 300px;
        }

        .WC0us\+ sup {
            font-size: 12px;
            margin-left: 20px;
            color: #ee4d2d;
        }

        input.cart_pay_submit {
            color: white;
            font-size: 16px;
            font-weight: bold;
        }

        .listPage li {
            background-color: #ee4d2d;
            padding: 20px;
            display: inline-block;
            color: var(--color-white);
            margin: 0 10px;
            font-weight: bold !important;
            cursor: pointer;
            font-size: 12px;
            border-radius: 10px;
        }

        .listPage .active {
            background-color: white;
            color: #ee4d2d;
            border: 1px solid #ee4d2d;
        }

        .listPage li:hover {
            background-color: white;
            color: #ee4d2d;
            border: 1px solid #ee4d2d;
        }

        .product_tt-p::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 1px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .product_tt {
            margin-top: 40px;
        }

        .content__web7_main {
            background: white;
        }

        .product_tt-p p {
            height: 40px;
            width: 150px;
            line-height: 40px;
            margin: auto;
            font-size: 18px;
            text-transform: uppercase;
            font-weight: bold !important;
            background: #ee4d2d;
            text-align: center;
            color: var(--color-white);
            margin-bottom: 40px;
        }

        ::selection {
            background-color: red;
        }

        .cart_product2-aozia {
            display: block;
            color: red !important;
        }

        .cart_product2-aozia:hover {
            color: black !important;
        }
    </style>

</head>

<body>
    <div class="cart_web">
        <header>
            <div class="header">
                <div class="header_app">
                    <div class="header_app-left">
                        <ul class="header_app-left-ul">
                            <li class="header_app-left-li"><a onclick="launch_toast()" class="flex _2TLLZP ZUq1cc">Kênh người bán</a>
                            </li>
                            <li class="header_app-left-li"><a onclick="launch_toast()">Trở thành người bàn Shopee</a></li>
                            <li class="header_app-left-li header_app-left-li-lv1"><a onclick="launch_toast()" class="_2TLLZP">Tải ứng
                                    dụng</a>
                                <ul class="header_app-QR">
                                    <li class="header_app-QR-li">
                                        <div class="header_app-QR-img">
                                            <a onclick="launch_toast()">
                                                <img src="./acsset/img/img-logo/QR-app.png" alt="">
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="header_app-left-li"><a href="https://www.facebook.com/profile.php?id=100023235677271" class="HniJJe">Kết
                                    nối</a></li>
                            <li class="header_app-left-li"><a href="https://www.facebook.com/profile.php?id=100023235677271"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="header_app-left-li"><a href="https://www.instagram.com/duongdat13/"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="header_right_login">
                        <ul class="header_right_login-ul">
                            <li class="header_ringht_login-li"><a href=""><i class="fa-regular fa-bell"></i>Thông
                                    báo</a>
                                <div class="header_right_lv2">
                                    <div class="header_ringht-lv2-main">

                                    </div>
                                    <div class="header_right-TBDN">
                                        <div class="header_right-lv2-DK">

                                        </div>
                                        <div class="header_right-lv2-DN">

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="header_ringht_login-li">
                                <a onclick="launch_toast()">
                                    <svg height="16" viewBox="0 0 16 16" width="16" class="shopee-svg-icon icon-help-center">
                                        <g fill="none" fill-rule="evenodd" transform="translate(1)">
                                            <circle cx="7" cy="8" r="7" stroke="currentColor"></circle>
                                            <path fill="currentColor" d="m6.871 3.992c-.814 0-1.452.231-1.914.704-.462.462-.693 1.089-.693 1.892h1.155c0-.484.099-.858.297-1.122.22-.319.583-.473 1.078-.473.396 0 .715.11.935.33.209.22.319.517.319.902 0 .286-.11.55-.308.803l-.187.209c-.682.605-1.1 1.056-1.243 1.364-.154.286-.22.638-.22 1.045v.187h1.177v-.187c0-.264.055-.506.176-.726.099-.198.253-.396.462-.572.517-.451.825-.737.924-.858.275-.352.418-.803.418-1.342 0-.66-.22-1.188-.66-1.573-.44-.396-1.012-.583-1.716-.583zm-.198 6.435c-.22 0-.418.066-.572.22-.154.143-.231.33-.231.561 0 .22.077.407.231.561s.352.231.572.231.418-.077.572-.22c.154-.154.242-.341.242-.572s-.077-.418-.231-.561c-.154-.154-.352-.22-.583-.22z">
                                            </path>
                                        </g>
                                    </svg> Hỗ trợ</a>
                            </li>
                            <li class="header_ringht_login-li"><a onclick="launch_toast()"><svg padding-right="5px" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.00065 14.6667C11.6825 14.6667 14.6673 11.6819 14.6673 8.00004C14.6673 4.31814 11.6825 1.33337 8.00065 1.33337C4.31875 1.33337 1.33398 4.31814 1.33398 8.00004C1.33398 11.6819 4.31875 14.6667 8.00065 14.6667Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M5.33464 8.00004C5.33464 11.6819 6.52854 14.6667 8.0013 14.6667C9.47406 14.6667 10.668 11.6819 10.668 8.00004C10.668 4.31814 9.47406 1.33337 8.0013 1.33337C6.52854 1.33337 5.33464 4.31814 5.33464 8.00004Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1.33398 8H14.6673" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>Tiếng Việt
                                    <svg padding-right="5px" viewBox="0 0 12 12" fill="none" width="12" height="12" color="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 8.146L11.146 3l.707.707-5.146 5.147a1 1 0 01-1.414 0L.146 3.707.854 3 6 8.146z" fill="currentColor"></path>
                                    </svg>
                                </a></li>
                            <?php if (isset($user['username'])) { ?>
                                <li class="header_ringht_login-li register"><a href="./user_main.php"><?php echo $user['username'] ?></a></li>
                                <li class="header_ringht_login-li login"><a href="./index.php">Đăng xuất</a></li>
                            <?php } else { ?>
                                <li class="header_ringht_login-li register"><a href="./register-dki.php">Đăng kí</a></li>
                                <li class="header_ringht_login-li login"><a href="./login.php">Đăng nhập</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="header_pay">
                    <div class="header_pay-main">
                        <div class="logo_pay-main">
                            <a href="./home.php">
                                <img src="./acsset/img/img-logo/logo-shopee-png-images-download-shopee-1.png" alt="">
                            </a>
                        </div>
                        <div class="h3_logo-pay">
                            <h3>GIỎ HÀNG</h3>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="cart">
            <div class="cart_main">
                <div class="rtM2Xz"><svg height="12" viewBox="0 0 20 12" width="20" class="shopee-svg-icon MCA-wE icon-free-shipping">
                        <g fill="none" fill-rule="evenodd" transform="">
                            <rect fill="#00bfa5" fill-rule="evenodd" height="9" rx="1" width="12" x="4"></rect>
                            <rect height="8" rx="1" stroke="#00bfa5" width="11" x="4.5" y=".5"></rect>
                            <rect fill="#00bfa5" fill-rule="evenodd" height="7" rx="1" width="7" x="13" y="2"></rect>
                            <rect height="6" rx="1" stroke="#00bfa5" width="6" x="13.5" y="2.5"></rect>
                            <circle cx="8" cy="10" fill="#00bfa5" r="2"></circle>
                            <circle cx="15" cy="10" fill="#00bfa5" r="2"></circle>
                            <path d="m6.7082481 6.7999878h-.7082481v-4.2275391h2.8488017v.5976563h-2.1405536v1.2978515h1.9603297v.5800782h-1.9603297zm2.6762505 0v-3.1904297h.6544972v.4892578h.0505892c.0980164-.3134765.4774351-.5419922.9264138-.5419922.0980165 0 .2276512.0087891.3003731.0263672v.6210938c-.053751-.0175782-.2624312-.038086-.3762568-.038086-.5122152 0-.8758247.3017578-.8758247.75v1.8837891zm3.608988-2.7158203c-.5027297 0-.8536919.328125-.8916338.8261719h1.7390022c-.0158092-.5009766-.3446386-.8261719-.8473684-.8261719zm.8442065 1.8544922h.6544972c-.1549293.571289-.7050863.9228515-1.49238.9228515-.9864885 0-1.5903965-.6269531-1.5903965-1.6464843 0-1.0195313.6165553-1.6669922 1.5872347-1.6669922.9580321 0 1.5366455.6064453 1.5366455 1.6083984v.2197266h-2.4314412v.0351562c.0221328.5595703.373095.9140625.9169284.9140625.4110369 0 .6924391-.1376953.8189119-.3867187zm2.6224996-1.8544922c-.5027297 0-.853692.328125-.8916339.8261719h1.7390022c-.0158091-.5009766-.3446386-.8261719-.8473683-.8261719zm.8442064 1.8544922h.6544972c-.1549293.571289-.7050863.9228515-1.49238.9228515-.9864885 0-1.5903965-.6269531-1.5903965-1.6464843 0-1.0195313.6165553-1.6669922 1.5872347-1.6669922.9580321 0 1.5366455.6064453 1.5366455 1.6083984v.2197266h-2.4314412v.0351562c.0221328.5595703.373095.9140625.9169284.9140625.4110369 0 .6924391-.1376953.8189119-.3867187z" fill="#fff"></path>
                            <path d="m .5 8.5h3.5v1h-3.5z" fill="#00bfa5"></path>
                            <path d="m0 10.15674h3.5v1h-3.5z" fill="#00bfa5"></path>
                            <circle cx="8" cy="10" fill="#047565" r="1"></circle>
                            <circle cx="15" cy="10" fill="#047565" r="1"></circle>
                        </g>
                    </svg><span class="bXROAg">Nhấn vào mục Mã giảm giá ở cuối trang để hưởng miễn phí vận chuyển bạn nhé!</span>
                </div>
                <form action="" method="post">
                    <div class="check_all">
                        <div class="check_all1">
                            <input type="checkbox" id="checkAll">
                            <p>Sản Phẩm</p>
                        </div>
                        <div class="check_all2">
                            <ul class="list_check_all">
                                <li class="item_check_li">
                                    <p>Đơn Giá</p>
                                </li>
                                <li class="item_check_li">
                                    <p>Số Lượng</p>
                                </li>
                                <li class="item_check_li">
                                    <p>Số Tiền</p>
                                </li>
                                <li class="item_check_li">
                                    <p>Thao Tác</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    $user = $user['username'];
                    $result = mysqli_query($conn, "select * FROM `cart` INNER JOIN product_main ON product_main.ma_sanpham=cart.ma_sanpham INNER JOIN product ON product.ma_sanpham=cart.ma_sanpham WHERE cart.username='$user'");
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="cart_product-s">
                            <div class="cart_product1">
                                <ul class="cart_prodct1-list">
                                    <li class="cart_product_item">
                                        <input id="checkboxcolor" type="checkbox" class="check" name="option[]" value="<?php echo $row['addcart'] ?>" data-price="<?php echo $row['thanhtien'] ?>">
                                    </li>
                                    <li class="cart_product_item">
                                        <img src="./acsset/img/product/product_main/<?php echo $row['anh1'] ?>" alt="">
                                    </li>
                                    <li class="cart_product_item">
                                        <p><?php echo $row['ten_sanpham'] ?></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart__product-a">
                                <div class="cart_product2">
                                    <ul class="cart_product2_list">
                                        <li class="cart_product2_item"><sup>đ</sup><?php echo currency_format($row['gia_sale']) ?></li>
                                        <li class="cart_product2_item"><?php echo $row['soluong'] ?></li>
                                        <li class="cart_product2_item cart_product_item_color"><sup>đ</sup><?php echo currency_format($row['thanhtien']) ?></li>
                                        <li class="cart_product2_item"><a class="cart_product2-aozia" href="">Xóa</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="dT5fMv"><svg fill="none" viewBox="0 -2 23 22" class="shopee-svg-icon L-deCr icon-voucher-line">
                                <g filter="url(#voucher-filter0_d)">
                                    <mask id="a" fill="#fff">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1 2h18v2.32a1.5 1.5 0 000 2.75v.65a1.5 1.5 0 000 2.75v.65a1.5 1.5 0 000 2.75V16H1v-2.12a1.5 1.5 0 000-2.75v-.65a1.5 1.5 0 000-2.75v-.65a1.5 1.5 0 000-2.75V2z"></path>
                                    </mask>
                                    <path d="M19 2h1V1h-1v1zM1 2V1H0v1h1zm18 2.32l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zm0 .65l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zm0 .65l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zM19 16v1h1v-1h-1zM1 16H0v1h1v-1zm0-2.12l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zm0-.65l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zm0-.65l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zM19 1H1v2h18V1zm1 3.32V2h-2v2.32h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zm.6 1.56v-.65h-2v.65h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zm.6 1.56v-.65h-2v.65h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zM20 16v-2.13h-2V16h2zM1 17h18v-2H1v2zm-1-3.12V16h2v-2.12H0zm1.4.91a2.5 2.5 0 001.5-2.29h-2a.5.5 0 01-.3.46l.8 1.83zm1.5-2.29a2.5 2.5 0 00-1.5-2.3l-.8 1.84c.18.08.3.26.3.46h2zM0 10.48v.65h2v-.65H0zM.9 9.1a.5.5 0 01-.3.46l.8 1.83A2.5 2.5 0 002.9 9.1h-2zm-.3-.46c.18.08.3.26.3.46h2a2.5 2.5 0 00-1.5-2.3L.6 8.65zM0 7.08v.65h2v-.65H0zM.9 5.7a.5.5 0 01-.3.46l.8 1.83A2.5 2.5 0 002.9 5.7h-2zm-.3-.46c.18.08.3.26.3.46h2a2.5 2.5 0 00-1.5-2.3L.6 5.25zM0 2v2.33h2V2H0z" mask="url(#a)"></path>
                                </g>
                                <path clip-rule="evenodd" d="M6.49 14.18h.86v-1.6h-.86v1.6zM6.49 11.18h.86v-1.6h-.86v1.6zM6.49 8.18h.86v-1.6h-.86v1.6zM6.49 5.18h.86v-1.6h-.86v1.6z"></path>
                                <defs>
                                    <filter id="voucher-filter0_d" x="0" y="1" width="20" height="16" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                        <feOffset></feOffset>
                                        <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.09 0"></feColorMatrix>
                                        <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                        <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                            <div class="jxfDh3">
                                <div>
                                    <div class="">
                                        <div class="kAocQv">Thêm mã giảm giá của Shop</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="AYBwMK"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon MS9XQD icon-free-shipping-line">
                                <g>
                                    <line fill="none" stroke-linejoin="round" stroke-miterlimit="10" x1="8.6" x2="4.2" y1="9.8" y2="9.8"></line>
                                    <circle cx="3" cy="11.2" fill="none" r="2" stroke-miterlimit="10"></circle>
                                    <circle cx="10" cy="11.2" fill="none" r="2" stroke-miterlimit="10"></circle>
                                    <line fill="none" stroke-miterlimit="10" x1="10.5" x2="14.4" y1="7.3" y2="7.3"></line>
                                    <polyline fill="none" points="1.5 9.8 .5 9.8 .5 1.8 10 1.8 10 9.1" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                    <polyline fill="none" points="9.9 3.8 14 3.8 14.5 10.2 11.9 10.2" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                </g>
                            </svg>
                            <div class="hYG2mu">Giảm ₫15.000 phí vận chuyển đơn tối thiểu ₫50.000; Giảm ₫25.000 phí vận chuyển đơn tối thiểu ₫250.000</div>
                            <div class="shopee-drawer" id="pc-drawer-id-0" tabindex="0"><span class="XEejA4"> Tìm hiểu thêm </span></div>
                        </div>


                    <?php } ?>
                    <div class="rnocow">
                        <div class="exGqmz WjgNv5"><svg fill="none" viewBox="0 -2 23 22" class="shopee-svg-icon icon-voucher-line">
                                <g filter="url(#voucher-filter0_d)">
                                    <mask id="a" fill="#fff">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1 2h18v2.32a1.5 1.5 0 000 2.75v.65a1.5 1.5 0 000 2.75v.65a1.5 1.5 0 000 2.75V16H1v-2.12a1.5 1.5 0 000-2.75v-.65a1.5 1.5 0 000-2.75v-.65a1.5 1.5 0 000-2.75V2z"></path>
                                    </mask>
                                    <path d="M19 2h1V1h-1v1zM1 2V1H0v1h1zm18 2.32l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zm0 .65l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zm0 .65l.4.92.6-.26v-.66h-1zm0 2.75h1v-.65l-.6-.26-.4.91zM19 16v1h1v-1h-1zM1 16H0v1h1v-1zm0-2.12l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zm0-.65l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zm0-.65l-.4-.92-.6.26v.66h1zm0-2.75H0v.65l.6.26.4-.91zM19 1H1v2h18V1zm1 3.32V2h-2v2.32h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zm.6 1.56v-.65h-2v.65h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zm.6 1.56v-.65h-2v.65h2zm-.9 1.38c0-.2.12-.38.3-.46l-.8-1.83a2.5 2.5 0 00-1.5 2.29h2zm.3.46a.5.5 0 01-.3-.46h-2c0 1.03.62 1.9 1.5 2.3l.8-1.84zM20 16v-2.13h-2V16h2zM1 17h18v-2H1v2zm-1-3.12V16h2v-2.12H0zm1.4.91a2.5 2.5 0 001.5-2.29h-2a.5.5 0 01-.3.46l.8 1.83zm1.5-2.29a2.5 2.5 0 00-1.5-2.3l-.8 1.84c.18.08.3.26.3.46h2zM0 10.48v.65h2v-.65H0zM.9 9.1a.5.5 0 01-.3.46l.8 1.83A2.5 2.5 0 002.9 9.1h-2zm-.3-.46c.18.08.3.26.3.46h2a2.5 2.5 0 00-1.5-2.3L.6 8.65zM0 7.08v.65h2v-.65H0zM.9 5.7a.5.5 0 01-.3.46l.8 1.83A2.5 2.5 0 002.9 5.7h-2zm-.3-.46c.18.08.3.26.3.46h2a2.5 2.5 0 00-1.5-2.3L.6 5.25zM0 2v2.33h2V2H0z" mask="url(#a)"></path>
                                </g>
                                <path clip-rule="evenodd" d="M6.49 14.18h.86v-1.6h-.86v1.6zM6.49 11.18h.86v-1.6h-.86v1.6zM6.49 8.18h.86v-1.6h-.86v1.6zM6.49 5.18h.86v-1.6h-.86v1.6z"></path>
                                <defs>
                                    <filter id="voucher-filter0_d" x="0" y="1" width="20" height="16" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                        <feOffset></feOffset>
                                        <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.09 0"></feColorMatrix>
                                        <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                        <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                            <div class="C9vN6U">Shopee Voucher</div>
                            <div class="GdUwdD"></div><span class="ORcGEd">Chọn hoặc nhập mã</span>
                        </div>
                        <div class="h-Ivjs _1Xi-wS"></div>
                        <div class="nPjHJw ceZa-G"><label class="stardust-checkbox stardust-checkbox--disabled"><input class="stardust-checkbox__input" type="checkbox">
                                <div class="stardust-checkbox__box"></div>
                            </label></div>
                        <div class="nPjHJw K98a1N _1dLWkp r71pqT"><svg fill="none" viewBox="0 0 18 18" class="shopee-svg-icon hpZGIt icon-coin-line">
                                <path stroke="#FFA600" stroke-width="1.3" d="M17.35 9A8.35 8.35 0 11.65 9a8.35 8.35 0 0116.7 0z"></path>
                                <path fill="#FFA600" fill-rule="evenodd" stroke="#FFA600" stroke-width=".2" d="M6.86 4.723c-.683.576-.998 1.627-.75 2.464.215.725.85 1.258 1.522 1.608.37.193.77.355 1.177.463.1.027.2.051.3.08.098.03.196.062.294.096.06.021.121.044.182.067.017.006.107.041.04.014-.07-.028.071.03.087.037.286.124.56.27.82.44.114.076.045.024.151.111a2.942 2.942 0 01.322.303c.087.093.046.042.114.146.18.275.245.478.235.8-.01.328-.14.659-.325.867-.47.53-1.232.73-1.934.696a4.727 4.727 0 01-1.487-.307c-.45-.182-.852-.462-1.242-.737-.25-.176-.643-.04-.788.197-.17.279-.044.574.207.75.753.532 1.539.946 2.474 1.098.885.144 1.731.124 2.563-.224.78-.326 1.416-.966 1.607-1.772.198-.838-.023-1.644-.61-2.29-.683-.753-1.722-1.17-2.706-1.43a4.563 4.563 0 01-.543-.183c.122.048-.044-.02-.078-.035a4.77 4.77 0 01-.422-.212c-.594-.338-.955-.722-.872-1.369.105-.816.757-1.221 1.555-1.28.808-.06 1.648.135 2.297.554.614.398 1.19-.553.58-.947-1.33-.86-3.504-1.074-4.77-.005z" clip-rule="evenodd"></path>
                            </svg>
                            <div class="korYGr">Shopee Xu</div>
                            <div class="WpXi0X">Bạn chưa có xu shoppe</div>
                            <div class="stardust-popover _2Z2rR4" id="stardust-popover0" tabindex="0">
                                <div role="button" class="stardust-popover__target">
                                    <div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon OzpV75 icon-help">
                                            <g>
                                                <circle cx="7.5" cy="7.5" fill="none" r="6.5" stroke-miterlimit="10"></circle>
                                                <path d="m5.3 5.3c.1-.3.3-.6.5-.8s.4-.4.7-.5.6-.2 1-.2c.3 0 .6 0 .9.1s.5.2.7.4.4.4.5.7.2.6.2.9c0 .2 0 .4-.1.6s-.1.3-.2.5c-.1.1-.2.2-.3.3-.1.2-.2.3-.4.4-.1.1-.2.2-.3.3s-.2.2-.3.4c-.1.1-.1.2-.2.4s-.1.3-.1.5v.4h-.9v-.5c0-.3.1-.6.2-.8s.2-.4.3-.5c.2-.2.3-.3.5-.5.1-.1.3-.3.4-.4.1-.2.2-.3.3-.5s.1-.4.1-.7c0-.4-.2-.7-.4-.9s-.5-.3-.9-.3c-.3 0-.5 0-.7.1-.1.1-.3.2-.4.4-.1.1-.2.3-.3.5 0 .2-.1.5-.1.7h-.9c0-.3.1-.7.2-1zm2.8 5.1v1.2h-1.2v-1.2z" stroke="none"></path>
                                            </g>
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                        <div class="nPjHJw _4kUN8t _9d15-k">-₫0</div>
                        <div class="h-Ivjs ivEpTY"></div>
                        <div class="s1Gxkq c2pfrq">
                            <div class="UlxAss"></div>
                            <div class="UQv8V6">
                                <div class="fyYBP1">
                                    <div class="aiyQAr">
                                        <div class="A-CcKC">Tổng thanh toán:</div>
                                        <div class="WC0us+"><sup>đ</sup><span id="total">0</span></div>
                                    </div>
                                </div>
                                <div class="onR5FG"></div>
                            </div><input type="submit" value="Thanh Toán" class="cart_pay_submit" name="cartpay">
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['cartpay'])) {
                    $ArrayCart = array();
                    if (!isset($_POST['option'])) {
                        echo '<script language="javascript"> alert("Bạn chưa chọn sản phẩm nào để thanh toán !")';
                    } else if (isset($_POST['option'])) {
                        foreach ($_POST['option'] as $value) {
                            $ArrayCart[] = $value;
                        }
                    }
                    foreach ($ArrayCart as $lang) {
                        echo "$lang <br>";
                    }
                    $_SESSION['arraycart'] = $ArrayCart;
                    $_SESSION['usercart'] = $user;
                    echo '<script language="javascript"> alert("Bạn được chuyển đến trang thanh toán");window.location="cart_to_pay.php"</script>';
                }
                ?>
                <div class="product_tt">
                    <div class="product_tt-p">
                        <p>xem thêm</p>
                    </div>
                </div>
                <div class="content__web7_main">
                    <div class="content__web7_wrap">
                        <?php
                        $result = mysqli_query($conn, "Select * from product");
                        while ($row = mysqli_fetch_array($result)) {

                        ?>
                            <div class="content__web7_item">
                                <?php echo "<a href=Detail_product.php?ma=" . $row['ma_sanpham'] . " >"; ?>
                                <!-- <a href="Detail_product.php"> -->
                                <div class="content__web7_item-main">
                                    <div class="content__web7-main-img">
                                        <img src="./acsset/img/product/<?php echo $row['anh_sanpham'] ?>" alt="">
                                        <div class="-mCRW0">
                                            <div class="CGWoC0 _7JfmM3" style="color: rgb(242, 82, 32);"><span class="jKw-Wu">Yêu thích</span>
                                            </div>
                                        </div>

                                        <div class="_20CHwO">
                                            <div class="_5KXYyu r5IeUK DGPJIB"><span class="percent">21%</span><span class="bzhmIc">giảm</span></div>
                                        </div>
                                    </div>
                                    <div class="phaD5a">
                                        <div class="C2cLca">
                                            <div class="_7qeYIT">
                                                <div class="xu+II7 xIpsKK"><?php echo $row['ten_sanpham'] ?></div>
                                            </div>
                                        </div>
                                        <div class="K0jDSR +5sWQF">
                                            <div class="_8pWXgw d6Ui7v"><span class="PBXD50">₫</span><span class="_0pAnxm"><?php echo currency_format($row['GiaBan']) ?></span></div>
                                            <div class="Xpegl0 _4BRSeN">Đã bán <?php echo $row['sldaban'] ?></div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <div class="shopee-item-card__hover-footer mwNFPv">Tìm sản phẩm tương tự</div>
                            </div>
                        <?php } ?>

                    </div>
                    <ul class="listPage">

                    </ul>

                </div>
            </div>
        </div>
        <?php
        include("footer2.php");
        ?>
    </div>
    <div class="chat_overlay chat open">
        <div class="chat_overlay_main">
            <div class="chat_container">
                <div class="chat_header">
                    <ul class="chat__header_list chat-lock">
                        <div class="chat__header_item-1">
                            <li class="chat__header_item">
                                <p>Chat</p>
                            </li>
                        </div>
                        <div class="chat__header_item-2">
                            <li class="chat__header_item chat__header_item-right button-chat">
                                <i class="fa-solid fa-arrow-right"></i>
                            </li>
                            <li class="chat__header_item chat__header_item-left ">
                                <i class="fa-solid fa-arrow-left"></i>
                            </li>
                            <li class="chat__header_item button-chat2">
                                <i class="fa-solid fa-arrow-down"></i>
                            </li>
                        </div>
                    </ul>
                </div>
                <div class="chat__container_main">

                </div>
            </div>
        </div>
    </div>
    <div class="chat__mini">
        <div class="chat__mini_main">
            <div class="chat_mini_content">
                <i class="fa-duotone fa-square-arrow-up"></i>
                <a class="chat_mini_content-icon-a">Chats</a>
            </div>
        </div>
    </div>
    <div id="toast">
        <div id="img"><i class="fa-solid fa-circle-exclamation"></i></div>
        <div id="desc">Chức năng đang được cập nhật</div>
    </div>
</body>
<script src="./acsset/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./acsset/Css/main.js"></script>
<script src="https://cdn.korzh.com/metroui/v4.5.1/js/metro.min.js"></script>
<script>
    // Lấy tất cả các checkbox
    var checkboxes = document.querySelectorAll('input[class="check"]');

    // Lấy checkbox "Check All"
    var checkAll = document.getElementById('checkAll');

    // Thêm sự kiện nhấp chuột vào checkbox "Check All"
    checkAll.addEventListener('click', function() {
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = checkAll.checked;
            calculateTotal();
        });
    });

    // Thêm sự kiện nhấp chuột vào mỗi checkbox để tính toán tổng số tiền
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('click', function() {
            calculateTotal();
        });
    });

    // Hàm tính tổng số tiền của các checkbox được chọn
    function calculateTotal() {
        var total = 0;
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                total += parseInt(checkbox.getAttribute('data-price')) + 25000;
            }
        });
        document.getElementById('total').innerHTML = total;
    }
</script>
<script>
    let thisPage = 1;
    let limit = 48;
    let list = document.querySelectorAll('.content__web7_wrap .content__web7_item');

    function loadItem() {
        let beginGet = limit * (thisPage - 1);
        let endGet = limit * thisPage - 1;
        list.forEach((item, key) => {
            if (key >= beginGet && key <= endGet) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        })
        listPage();
    }
    loadItem();

    function listPage() {
        let count = Math.ceil(list.length / limit);
        document.querySelector('.listPage').innerHTML = '';

        if (thisPage != 1) {
            let prev = document.createElement('li');
            prev.innerText = 'PREV';
            prev.setAttribute('onclick', "changePage(" + (thisPage - 1) + ")");
            document.querySelector('.listPage').appendChild(prev);
        }

        for (i = 1; i <= count; i++) {
            let newPage = document.createElement('li');
            newPage.innerText = i;
            if (i == thisPage) {
                newPage.classList.add('active');
            }
            newPage.setAttribute('onclick', "changePage(" + i + ")");
            document.querySelector('.listPage').appendChild(newPage);
        }

        if (thisPage != count) {
            let next = document.createElement('li');
            next.innerText = 'NEXT';
            next.setAttribute('onclick', "changePage(" + (thisPage + 1) + ")");
            document.querySelector('.listPage').appendChild(next);
        }
    }

    function changePage(i) {
        thisPage = i;
        loadItem();
    }
</script>

</html>