<?php
include_once("ketnoi.php");
session_start();
$user = [];
$user = (isset($_SESSION["user"])) ? $_SESSION["user"] : [];
$ma = $_GET['ma'];
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

$result = mysqli_query($conn, "Select * from product where ma_sanpham='$ma'");
while ($row = mysqli_fetch_array($result)) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $row['ten_sanpham'] ?></title>
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
    </head>
<?php } ?>
<style>
    body {
        background: rgba(241, 219, 219, 0.4);
    }

    header {
        background: linear-gradient(-180deg, #f53d2d, #f63);
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
    }

    .slides {
        padding: 0;
        width: 450px;
        height: 560px;
        display: block;
        margin: 0 auto;
        position: relative;
    }

    .slides * {
        user-select: none;
        -ms-user-select: none;
        -moz-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -webkit-touch-callout: none;
    }

    .slides input {
        display: none;
    }

    .slide-container {
        display: block;
    }

    .slide {
        top: 0;
        opacity: 0;
        width: 450px;
        height: 450px;
        display: block;
        position: absolute;
        transform: scale(0);
        transition: all .7s ease-in-out;
    }

    .slide img {
        width: 100%;
        height: 100%;
    }

    .nav label {
        width: 40px;
        height: 100%;
        display: none;
        position: absolute;
        opacity: 0;
        z-index: 9;
        cursor: pointer;
        transition: opacity .2s;
        color: black;
        font-size: 12px;
        text-align: center;
        line-height: 380px;
    }

    .slide:hover+.nav label {
        opacity: 0.5;
    }

    .nav label:hover {
        opacity: 1;
    }

    .nav .next {
        right: 0;
    }

    input:checked+.slide-container .slide {
        opacity: 1;
        transform: scale(1);
        transition: opacity 1s ease-in-out;
    }

    input:checked+.slide-container .nav label {
        display: block;
    }

    .nav-dots {
        width: 100%;
        bottom: 26px;
        height: 50px;
        display: block;
        position: absolute;
        text-align: center;
    }

    .nav-dots .nav-dot {
        top: -5px;
        width: 50px;
        height: 50px;
        margin: 0 10px;
        position: relative;
        border-radius: 100%;
        display: inline-block;
    }

    .nav-dots .nav-dot img {
        width: 50px;
        height: 50px;
    }

    .nav-dots .nav-dot:hover {
        cursor: pointer;
    }

    input#img-1:checked~.nav-dots label#img-dot-1,
    input#img-2:checked~.nav-dots label#img-dot-2,
    input#img-3:checked~.nav-dots label#img-dot-3,
    input#img-4:checked~.nav-dots label#img-dot-4,
    input#img-5:checked~.nav-dots label#img-dot-5,
    input#img-6:checked~.nav-dots label#img-dot-6 {
        transform: scale(1.1);
    }

    .detail {
        margin: 180px 0 60px 0;
    }

    .slide img {
        width: 420px;
        height: 450px;
        margin: auto;
    }

    .nav label i {
        font-size: 30px;
        color: #f53d2d;
    }

    .detail_main {
        width: 1200px;
        margin: auto;
        display: flex;
        background: var(--color-white);
        padding: 0 0 50px 0;
    }

    .detail_left {
        width: 450px;
        margin: 20px;
    }

    .detail_right {
        width: 650px;
    }

    .letf_app_i {
        display: flex;
    }

    li.left_app_li img {
        width: 20px;
        margin: 0 3px;
    }

    li.left_app_li p {
        height: 20px;
        line-height: 20px;
        font-size: 14px;
    }

    .Lxikt {
        display: flex;
        margin-top: 20px;
        flex-direction: column;
    }

    .Lxikt {
        font-size: 20px;
    }

    .Lxikt-span {
        width: 54px;
        height: 17px;
        background: #EE4D2D;
        color: #ffffff;
        text-align: center;
        padding: 0 2px;
        border-radius: 2px;
        font-size: 12px;
        margin-right: 12px;
    }

    ul.Lixyp {
        display: flex;
        font-size: 14px;
    }

    li.Lvixa {
        margin-right: 20px;
        border-left: 1px solid rgba(0, 0, 0, 0.1);
        padding-left: 4px;
    }

    .Lviva-i {
        color: #EE4D2D;
        border: none !important;
    }

    ul.RxLoc {
        display: flex;
        line-height: 45px;
    }

    li.RxLoc-li {
        width: 110px;
        font-size: 16px;
    }

    li.RxLoc-li.RxLoc-p {
        font-size: 30px;
        width: 120px;
        color: #EE4D2D;
    }

    li.RxLoc-li.RoxLi {
        background: red;
        width: 63px;
        height: 20px;
        line-height: 20px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        margin-top: 12px;
    }

    .detail_right form {
        right: 0;
    }

    .RLxoc {
        background: #FAFAFA;
        padding: 5px;
        margin-top: 20px;
        width: 600px;
    }

    li.RxLoc-li.RxLoc-k {
        width: 80px;
    }

    .flex {
        display: flex;
    }

    .rt-jjf {
        margin-top: 10px;
        color: #222;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    svg:not(:root) {
        overflow: hidden;
    }

    .-LmQBA {
        margin-right: 0.625rem;
        fill: #ee4d2d;
    }

    .U1v9hp {
        display: flex;
        align-items: center;
    }

    .u86SRJ {
        color: #ee4d2d;
        font-size: .875rem;
        margin-right: 0.625rem;
    }

    .shopee-drawer {
        display: flex;
        position: relative;
        overflow: visible;
        outline: 0;
    }

    .stardust-icon {
        stroke: currentColor;
        fill: currentColor;
        height: 1em;
        width: 1em;
    }

    .AUxo4B {
        color: rgba(0, 0, 0, .54) !important;
        font-size: 1.15rem;
        margin-top: 0.25rem;
    }

    .mini-vouchers__wrapper {
        min-width: calc(100% - 245px);
        height: 2.175rem;
    }

    .flex-no-overflow {
        width: 0;
    }

    .flex-auto {
        flex: 1 1 auto;
    }

    .mini-vouchers__vouchers {
        flex-shrink: 1;
        display: flex;
        position: relative;
        overflow: hidden;
    }

    .mini-voucher-with-popover {
        position: relative;
        margin-right: 0.625rem;
    }

    .voucher-ticket--seller-mini-solid {
        cursor: default;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        z-index: 1;
        background: rgba(208, 1, 27, .08);
        padding: 3px 7px;
        border: 0;
        white-space: nowrap;
        color: #ee4d2d;
        font-size: 12px;
    }

    .voucher-ticket {
        max-width: 100%;
    }

    .voucher-ticket--seller-mini-solid:before {
        left: -3px;
    }

    .voucher-ticket--seller-mini-solid:after,
    .voucher-ticket--seller-mini-solid:before {
        content: "";
        width: 6px;
        height: calc(100% - 5px);
        position: absolute;
        top: 2.5px;
        background-image: radial-gradient(#fff 2px, transparent 0);
        background-size: 6px 6px;
        background-position-x: -6px;
    }

    .voucher-ticket--seller-mini-solid:after {
        right: -3px;
    }

    .Hy7yr.Kiszae {
        display: flex;
    }

    .kiszs2 p {
        width: 100px;
        font-size: 12px;
        color: rgba(0, 0, 0, 0.5);
        text-transform: capitalize;
        margin-right: 20px;
    }

    .hepsoa {
        width: 200px;
    }

    .mini-vouchers__wrapper.flex.flex-auto.flex-no-overflow {
        width: 200px;
    }

    .U19ix {
        margin-top: 20px;
    }

    .flex {
        display: flex;
    }

    .rY0UiC {
        margin-top: -4px;
        margin-bottom: 25px;
        margin-left: -4px;
        padding: 4px;
        color: #222;
        display: flex;
        align-items: center;
    }

    .oN9nMU {
        color: #757575;
        width: 110px;
        text-transform: capitalize;
        flex-shrink: 0;
        font-size: 12px;
        align-items: center;
    }

    .JGTdiy {
        overflow: visible;
        outline: 0;
        background: transparent;
        border-radius: 2px;
        padding: 3px 6px;
        width: 120px;
        height: 30px;
        cursor: pointer;
        border: 1px solid #ee4d2d;
        border-color: var(--brand-primary-color, #ee4d2d);
        margin-left: 20px;
    }

    .JGTdiy .eR6vhu {
        color: var(--brand-primary-color, #ee4d2d);
        font-size: 12px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .z-W7XM {
        background-color: #ee4d2d;
        border-radius: 0.5rem;
        border-bottom-left-radius: 0;
        color: #fff;
        font-size: .625rem;
        font-weight: 500;
        height: 1rem;
        line-height: 1rem;
        margin-left: 0.3125rem;
        padding: 0 0.3125rem;
    }

    .dO6pIz {
        color: #08f !important;
        margin-left: 1.25rem;
        font-size: 12px;
    }

    .flex .items-center div {
        font-size: 14px;
        ;
    }

    ._82o6pM {
        margin-right: 20px;
        font-size: 12px;
        color: rgba(0, 0, 0, 0.5);
    }

    .J9pM3L {
        display: flex;
    }

    .flex.items-center.IwHyBY {
        font-size: 12px;
    }

    .Hy7yr {
        display: flex;
    }

    .LbUix {
        width: 120px;
        font-size: 14px;
        color: rgba(0, 0, 0, 0.6);
        margin-bottom: 20px;
    }

    .SleUx {
        font-size: 14px;
    }

    .SleUx select {
        width: 120px;
        text-align: center;
        height: 30px;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        outline: none;
    }

    .SliOx input[type="text"] {
        width: 70px;
        height: 40px;
        text-align: center;
        font-size: 14px;
        border: none;
        outline: none;
        border-top: 1px solid rgba(0, 0, 0, 0.2);
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
    }

    .SliOx button {
        margin: 0;
        padding: 0;
    }

    .SliOx {
        display: flex;
    }

    .minus-btn,
    .plus-btn {
        width: 40px;
        height: 40px;
        align-items: center;
        line-height: 40px;
        text-align: center;
        border: 1px solid rgba(0, 0, 0, 0.2);
        cursor: pointer;
        padding-left: 5px;
    }

    .minus-btn:hover,
    .plus-btn:hover {
        background: #ee4d2d;
        color: var(--color-white);
        border: none;
        transition: all 0.3s ease-in;
    }

    .HjxNe input[type="submit"],
    .LxIep input[type="submit"] {
        top: 0;
    }

    .HjxNe input[type="submit"] {
        width: 200px;
        height: 48px;
        font-size: 14px;
        color: #f53d2d;
        border: 1px solid #ee4d2d;
        border-radius: 3px;
        background: #f7dbd5;
        font-weight: bold !important;
        margin-right: 40px;
    }

    .HjxNe input[type="submit"]:hover {
        color: var(--color-white);
    }

    .LxIep input[type="submit"] {
        height: 48px;
        width: 120px;
        color: var(--color-white);
        font-size: 14px;
        font-weight: bold !important;
    }

    .LxIep input[type="submit"]:hover {
        background: white;
        border: 1px solid #ee4d2d;
        color: #f53d2d;
    }

    .detail_lq {
        width: 1200px;
        margin: auto;
        margin-top: 50px;
        background: white;
    }

    .GiFtx {
        display: flex;
    }

    .FxUTr {
        padding: 15px;
    }

    .HyXue-img img {
        width: 170px;
        height: 170px;
    }

    .PoUxi p {
        display: block;
        display: -webkit-box;
        height: 16px*1.3*3;
        font-size: 14Spx;
        line-height: 1.3;
        -webkit-line-clamp: 2;
        /* số dòng hiển thị */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-top: 10px;
        padding: 0 10px;
    }

    .pYeRt {
        padding: 0 10px;
    }

    .Rteus {
        display: flex;
        justify-content: space-between;
        position: relative;
    }

    .LpUws {
        color: rgba(0, 0, 0, 0.5);
    }

    .LpUys {
        color: #f53d2d;
        font-size: 14px;
    }

    .detail_oop-il {
        display: flex;
        justify-content: space-between;
    }

    .detail_oop-item p {
        font-size: 18px;
        padding: 20px 0 0 20px;
    }

    .detail_oop-item a {
        color: #f53d2d !important;
        font-size: 14px;
        padding: 20px 20px 0 0;
        top: 20px;
    }

    .LpUws {
        position: relative;
    }

    .u-back {
        position: absolute;
        width: 40px;
        height: 1px;
        background: rgba(0, 0, 0, 0.1);
        top: 7px;
    }

    .detail_shop {
        width: 1200px;
        background: var(--color-white);
        margin: auto;
        margin-top: 30px;
    }

    ul.detail_shop-ul {
        display: flex;
    }

    ul.Poszx {
        display: flex;
        justify-content: space-between;
    }

    .shop_item_img img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
    }

    .detail_shop_main {
        padding: 30px;
    }

    li.detail_shop-li {
        margin-right: 20px;
    }

    .shop_item_img {
        position: relative;
    }

    .shop-line {
        position: absolute;
        background: #f53d2d;
        color: white;
        width: 50px;
        height: 15px;
        text-align: center;
        bottom: 34px;
        left: 39px;
    }

    .shop_item_name p {
        font-size: 16px;
    }

    .shop_item_btn1 {
        width: 120px;
        height: 40px;
        background: rgba(255, 87, 34, 0.1);
        color: #ee4d2d;
        border: 1px solid #ee4d2d;
        font-size: 14px;
    }

    .shop_item_btn1 img {
        width: 20px;
        height: 20px;
    }

    button.shop_item_btn2 {
        width: 100px;
        margin-left: 20px;
        background: white;
        color: rgba(0, 0, 0, 0.5);
        font-size: 14px;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    li.detail_shop-li.KxLtY {
        width: 240px;

    }

    .LsZxi p {
        font-size: 14px;
        color: rgba(0, 0, 0, 0.5);
    }

    .DxOyr p {
        font-size: 14px;
        color: #ee4d2d;
    }

    .describe_main {
        width: 1200px;
        margin: auto;
        margin-top: 30px;
        background: white;
        padding: 30px;
    }

    .U9rGd1 {
        padding: 0.9375rem 0.9375rem 0;
    }

    .Iv7FJp {
        background: rgba(0, 0, 0, .02);
        color: rgba(0, 0, 0, .87);
        font-size: 16px;
        padding: 0.875rem;
        text-transform: capitalize;
    }

    .MCCLkq {
        margin: 1.875rem 0.9375rem 0.9375rem;
    }

    .dR8kXc {
        display: flex;
        margin-bottom: 1.125rem;
    }

    .irIKAp {
        font-size: 14px;
    }

    .danhgia {
        width: 1200px;
        margin: auto;
        background: white;
        padding: 30px;
        margin-top: 30px;
    }

    .danhgia_item {
        display: flex;
    }

    .tabs {
        display: flex;
        position: relative;
        background-color: #fffbf8;
    }

    .tabs .line {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 6px;
        border-radius: 15px;
        background-color: #ee4d2d;
        transition: all 0.2s ease;
    }

    .tab-item {
        min-width: 80px;
        padding: 16px 20px 11px 20px;
        font-size: 20px;
        text-align: center;
        color: #ee4d2d;
        background-color: #fffbf8;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom: 5px solid transparent;
        opacity: 0.6;
        cursor: pointer;
        transition: all 0.5s ease;
    }

    .tab-icon {
        font-size: 24px;
        width: 32px;
        position: relative;
        top: 2px;
    }

    .tab-item:hover {
        opacity: 1;
        background-color: rgba(194, 53, 100, 0.05);
        border-color: rgba(194, 53, 100, 0.1);
    }

    .tab-item.active {
        opacity: 1;
    }

    .tab-content {
        padding: 28px 0;
    }

    .tab-pane {
        color: #333;
        display: none;
    }

    .tab-pane.active {
        display: block;
    }

    .tab-pane h2 {
        font-size: 24px;
        margin-bottom: 8px;
    }

    .bl-main {
        display: flex;
        margin-bottom: 40px;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
        padding-top: 20px;
    }

    .bl-avatar img {
        width: 66px;
        height: 66px;
        border-radius: 50%;
    }

    .bl-avatar {
        margin-right: 20px;
    }

    li.bl-item {
        display: flex;
        font-size: 12px;
    }

    .bl-sao i {
        color: #ee4d2d;
    }

    .bl-name p {
        font-size: 14px;
    }

    .bl-img-item img {
        width: 100px;
        height: 100px;
        margin-right: 20px;
    }

    .Uxzyt i {
        color: #ee4d2d;
        font-size: 16px;
    }

    .PxOa p {
        font-size: 18px;
        text-align: center;
        font-weight: bold !important;
    }

    .danhgia-bn h2 {
        font-size: 20px;
        font-weight: bold !important;
        margin-bottom: 30px;
    }

    .listPage {
        padding: 10px;
        text-align: center;
        list-style: none;
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

    .content__web7_main {
        width: 1200px;
        margin: auto;
        background: white;
        margin-top: 40px;
    }

    ul.xUoAz {
        display: flex;
        justify-content: space-between;
    }

    li.xPaowq a {
        color: red !important;
        font-size: 14px;
        display: block;
        margin: 20px 20px 0 0;
    }

    li.xPaowq h2 {
        font-size: 18px;
        font-weight: bold !important;
        margin: 20px 0 20px 20px;
    }

    .cart_menu_item1 img {
        width: 50px;
        height: 50px;
    }

    .cart_menu_item1 {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .cart_menu_item1 p {
        color: red !important;
        font-size: 12px;
        line-height: 30px;
    }

    .HLWGuL {
        text-align: center;
        padding: 3.75rem 1rem;
    }

    .cart__menu a {
        background: red;
        font-size: 12px;
        display: block;
        width: 100px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        border: 1px solid;
        border-radius: 5px;
    }
</style>



<body>
    <div class="web_detal">
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
                                        <img src="./acsset/img/img-logo/thong-bao.png" alt="">
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
                <div class="header_search">
                    <div class="header_logo_big">
                        <a href="http://localhost/Shopee/home.php"><img src="./acsset/img/img-logo/logo-full-white.png" alt=""></a>
                    </div>
                    <div class="header_search_tk">
                        <form action="" method="post">
                            <div class="header_search-label"><input type="text" name="" id="" placeholder="Đăng ký và nhận voucher bạn mới đến 70k!" size="24px"></div>
                            <div class="header_search-button"><button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button></div>
                        </form>
                    </div>
                    <div class="header_search_cart">
                        <a href="./cart.php" class="header_search_cart-a">
                            <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                        </a>

                        <div class="_1EQVMQ">
                            <div class="HLWGuL">
                                <div class="cart__menu">
                                    <ul class="cart__menu_list">
                                        <li class="cart__menu_item">
                                            <div class="cart_menu_item1">

                                                <img src="./acsset/img/product/1.jpg" alt="">
                                                <h3>Tên sản phẩm</h3>
                                                <p><sup>đ</sup>21.000</p>
                                            </div>
                                        </li>
                                        <li class="cart__menu_item">
                                            <div class="cart_menu_item1">

                                                <img src="./acsset/img/product/1.jpg" alt="">
                                                <h3>Tên sản phẩm</h3>
                                                <p><sup>đ</sup>21.000</p>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_History-of-search">
                    <div class="header_History-of-0"></div>
                    <ul>
                        <li class="header_History-of-search-li"><a href="">Túi sách nữ</a></li>
                        <li class="header_History-of-search-li"><a href="">Áo khoác</a></li>
                        <li class="header_History-of-search-li"><a href="">Dép</a></li>
                        <li class="header_History-of-search-li"><a href="">Giày</a></li>
                        <li class="header_History-of-search-li"><a href="">Áo Croptop</a></li>
                        <li class="header_History-of-search-li"><a href="">Áo thun</a></li>
                        <li class="header_History-of-search-li"><a href="">Giày nam</a></li>
                        <li class="header_History-of-search-li"><a href="">Giày nữ</a></li>
                    </ul>
                    <div class="header_History-of-0"></div>
                </div>
            </div>
        </header>
        <div class="detail">
            <?php
            $result = mysqli_query($conn, "select * FROM product_main INNER JOIN product ON product.ma_sanpham=product_main.ma_sanpham WHERE product.ma_sanpham='$ma'");
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="detail_main">
                    <div class="detail_left">
                        <div class="detail_left_main">
                            <ul class="slides">
                                <input type="radio" name="radio-btn" id="img-1" checked />
                                <li class="slide-container">
                                    <div class="slide">
                                        <img src="./acsset/img/product/product_main/<?php echo $row['anh1'] ?>" />
                                    </div>
                                    <div class="nav">
                                        <label for="img-6" class="prev"><i class="fa-solid fa-chevron-left"></i></label>
                                        <label for="img-2" class="next"><i class="fa-solid fa-chevron-right"></i></label>
                                    </div>
                                </li>

                                <input type="radio" name="radio-btn" id="img-2" />
                                <li class="slide-container">
                                    <div class="slide">
                                        <img src="./acsset/img/product/product_main/<?php echo $row['anh2'] ?>" />
                                    </div>
                                    <div class="nav">
                                        <label for="img-1" class="prev"><i class="fa-solid fa-chevron-left"></i></label>
                                        <label for="img-3" class="next"><i class="fa-solid fa-chevron-right"></i></label>
                                    </div>
                                </li>

                                <input type="radio" name="radio-btn" id="img-3" />
                                <li class="slide-container">
                                    <div class="slide">
                                        <img src="./acsset/img/product/product_main/<?php echo $row['anh3'] ?>" />
                                    </div>
                                    <div class="nav">
                                        <label for="img-2" class="prev"><i class="fa-solid fa-chevron-left"></i></label>
                                        <label for="img-4" class="next"><i class="fa-solid fa-chevron-right"></i></label>
                                    </div>
                                </li>

                                <input type="radio" name="radio-btn" id="img-4" />
                                <li class="slide-container">
                                    <div class="slide">
                                        <img src="./acsset/img/product/product_main/<?php echo $row['anh4'] ?>" />
                                    </div>
                                    <div class="nav">
                                        <label for="img-3" class="prev"><i class="fa-solid fa-chevron-left"></i></label>
                                        <label for="img-5" class="next"><i class="fa-solid fa-chevron-right"></i></label>
                                    </div>
                                </li>

                                <input type="radio" name="radio-btn" id="img-5" />
                                <li class="slide-container">
                                    <div class="slide">
                                        <img src="./acsset/img/product/product_main/<?php echo $row['anh5'] ?>" />
                                    </div>
                                    <div class="nav">
                                        <label for="img-4" class="prev"><i class="fa-solid fa-chevron-left"></i></label>
                                        <label for="img-6" class="next"><i class="fa-solid fa-chevron-right"></i></label>
                                    </div>
                                </li>

                                <input type="radio" name="radio-btn" id="img-6" />
                                <li class="slide-container">
                                    <div class="slide">
                                        <img src="./acsset/img/product/product_main/<?php echo $row['anh6'] ?>" />
                                    </div>
                                    <div class="nav">
                                        <label for="img-5" class="prev"><i class="fa-solid fa-chevron-left"></i></label>
                                        <label for="img-1" class="next"><i class="fa-solid fa-chevron-right"></i></label>
                                    </div>
                                </li>

                                <li class="nav-dots">
                                    <label for="img-1" class="nav-dot" id="img-dot-1"><img src="./acsset/img/product/product_main/<?php echo $row['anh1'] ?>" alt=""></label>
                                    <label for="img-2" class="nav-dot" id="img-dot-2"><img src="./acsset/img/product/product_main/<?php echo $row['anh2'] ?>" alt=""></label>
                                    <label for="img-3" class="nav-dot" id="img-dot-3"><img src="./acsset/img/product/product_main/<?php echo $row['anh3'] ?>" alt=""></label>
                                    <label for="img-4" class="nav-dot" id="img-dot-4"><img src="./acsset/img/product/product_main/<?php echo $row['anh4'] ?>" alt=""></label>
                                    <label for="img-5" class="nav-dot" id="img-dot-5"><img src="./acsset/img/product/product_main/<?php echo $row['anh5'] ?>" alt=""></label>
                                    <label for="img-6" class="nav-dot" id="img-dot-6"><img src="./acsset/img/product/product_main/<?php echo $row['anh6'] ?>" alt=""></label>
                                </li>
                            </ul>
                            <div class="detail_letf_app">
                                <div class="detail_letf_app_i">
                                    <ul class="letf_app_i">
                                        <li class="left_app_li">
                                            <p>Chia sẻ : </p>
                                        </li>
                                        <li class="left_app_li"><img src="./acsset/img/logo-app/facebook.png" alt=""></li>
                                        <li class="left_app_li"><img src="./acsset/img/logo-app/messenger.png" alt=""></li>
                                        <li class="left_app_li"><img src="./acsset/img/logo-app/twitter.png" alt=""></li>
                                        <li class="left_app_li"><img src="./acsset/img/logo-app/pinterest.png" alt=""></li>
                                        <li class="left_app_li"><img src="./acsset/img/logo-app/instagram.png" alt=""></li>
                                    </ul>
                                </div>
                                <div class="detail_letf_app_l">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail_right">
                        <form action="" method="post">
                            <div class="Lxikt">
                                <div class="Lxikt-span">Yêu thích</div>
                                <p><?php echo $row['ten_sanpham'] ?></p>
                            </div>
                            <div class="Lxkis">
                                <ul class="Lixyp">
                                    <li class="Lvixa Lviva-i">4.6 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></li>
                                    <li class="Lvixa"><?php echo $row['sl_danhgia'] ?> Đánh Giá</li>
                                    <li class="Lvixa"><?php echo $row['sl_daban'] ?> Đã bán</li>
                                </ul>
                            </div>
                            <div class="RLxoc">
                                <ul class="RxLoc">
                                    <li class="RxLoc-li RxLoc-k"><sup>đ</sup><?php echo currency_format($row['GiaBan']) ?></li>
                                    <li class="RxLoc-li RxLoc-p"><sup>đ</sup><?php echo currency_format($row['gia_sale']) ?></li>
                                    <li class="RxLoc-li RoxLi">8% Giảm</li>
                                </ul>
                                <div class="flex items-center rt-jjf" style=""><svg xmlns="http://www.w3.org/2000/svg" width="33" height="16" viewBox="0 0 33 16" class="-LmQBA" fill="none">
                                        <path d="M29.7085 6.72195L27.4319 3.75641C27.1376 3.37304 26.5043 3.08617 26.0241 3.11887L21.2748 3.44266C21.2599 3.44298 21.245 3.44363 21.2301 3.4446L10.4539 4.18056L8.33573 4.32497C8.33282 4.3253 8.3299 4.32562 8.32731 4.32562L4.44448 4.5908C3.96431 4.62188 3.5353 5.04248 3.49126 5.52557L1.90407 12.9937C1.86003 13.4768 2.21684 13.8465 2.69702 13.8158L20.3893 12.6725C20.4453 12.6689 20.5036 12.6611 20.5635 12.6498L25.2159 12.3497C25.6961 12.317 26.3456 11.989 26.6594 11.6211L29.6722 8.08833C29.9866 7.72018 30.0028 7.10532 29.7085 6.72195ZM27.7758 7.63794C27.61 7.90442 27.2911 8.00544 27.0638 7.86394C26.8365 7.72245 26.7866 7.39187 26.9524 7.12539C27.1182 6.85892 27.4371 6.75789 27.6644 6.89939C27.892 7.04088 27.9416 7.37179 27.7758 7.63794Z" fill="#D0011B"></path>
                                        <path d="M3.80273 9.13674C3.80273 9.13674 4.21653 7.98892 6.5711 6.29487C8.92567 4.60083 9.80281 4.54352 9.80281 4.54352L8.65272 8.63487L3.80273 9.13674Z" fill="#93001C"></path>
                                        <path d="M28.4963 6.69147L26.4192 4.10605C26.1508 3.7719 25.5728 3.52194 25.1347 3.55043L20.8018 3.83277C20.7882 3.8331 20.7746 3.83374 20.761 3.83439L11.8246 4.41753C11.8249 4.41753 11.8249 4.41753 11.8252 4.41753L10.9232 4.4703L9.80285 4.54316C9.40039 4.56971 9.06203 4.85528 8.96846 5.24771L8.30438 8.03518C8.29823 8.06043 8.33028 8.03421 8.30438 8.03518L4.86254 8.36576C4.33056 8.3826 3.87759 8.75787 3.762 9.27722L3.6872 9.61298L3.6354 9.84611L3.58327 10.0805L3.32845 11.2598L3.12835 12.1589C3.0882 12.5801 3.4136 12.9026 3.85169 12.8754L19.9933 11.8788C20.0445 11.8756 20.0976 11.8688 20.1523 11.8591L24.3971 11.5975C24.8352 11.569 25.4277 11.2831 25.7143 10.9622L28.4632 7.88235C28.7498 7.56148 28.7647 7.02562 28.4963 6.69147ZM27.7742 7.63789C27.6084 7.90437 27.2895 8.00539 27.0622 7.8639C26.8349 7.7224 26.7851 7.39182 26.9508 7.12534C27.1166 6.85887 27.4355 6.75785 27.6628 6.89934C27.8905 7.04083 27.94 7.37174 27.7742 7.63789Z" fill="#EE4D2D"></path>
                                        <path d="M15.5524 5.12762L17.8046 4.98095C17.904 4.97447 18.0174 4.97026 18.1446 4.96832C18.1692 4.96767 18.1948 4.96735 18.22 4.96735C18.5063 4.96735 18.7737 5.0075 19.0149 5.08715C19.2821 5.17522 19.5081 5.31477 19.6868 5.50192C19.8662 5.68939 19.9941 5.92931 20.0666 6.21489C20.1381 6.49658 20.1449 6.83364 20.0873 7.21668C20.0102 7.71531 19.8454 8.14465 19.5974 8.49272C19.3698 8.81229 19.093 9.07683 18.7744 9.28016L19.7982 11.0393L17.8393 11.1669L17.034 9.75839L16.6008 9.78656L16.3667 11.2627L14.5762 11.3793L15.5524 5.12762ZM16.8747 8.04784L17.25 8.02355C17.3264 8.0187 17.3954 8.01254 17.4608 8.0051C17.531 7.99733 17.5867 7.99215 17.6308 7.98923C17.8101 7.96592 17.9675 7.90019 18.0989 7.79399C18.2259 7.69103 18.3104 7.52039 18.3499 7.28694C18.3871 7.06547 18.3606 6.91362 18.2702 6.83623C18.1708 6.7514 18.0326 6.70834 17.859 6.70801C17.8182 6.7106 17.7642 6.71255 17.6984 6.71384C17.6301 6.71514 17.5608 6.71838 17.4922 6.72258L17.0781 6.74946L16.8747 8.04784Z" fill="#FCE60C"></path>
                                        <path d="M18.2197 5.06451C18.4969 5.06451 18.7517 5.10272 18.9842 5.17945C19.2371 5.26299 19.4478 5.39283 19.6162 5.56897C19.7849 5.74543 19.9034 5.96852 19.972 6.23888C20.0407 6.50924 20.0468 6.83043 19.9908 7.20214C19.916 7.68782 19.758 8.09935 19.5178 8.43641C19.2775 8.77379 18.9855 9.04383 18.6423 9.24717L19.635 10.9525L17.893 11.0659L17.0878 9.6574L16.7695 9.67812L16.5166 9.69464L16.2825 11.1708L14.6905 11.2744L15.6363 5.21896L17.4812 5.09883C17.6062 5.09074 17.7169 5.08361 17.8137 5.07714C17.9105 5.07099 18.0213 5.06678 18.1462 5.06483C18.1708 5.06483 18.1954 5.06451 18.2197 5.06451ZM16.7601 8.15277L16.8537 8.14662C16.9036 8.14338 16.9644 8.1395 17.0363 8.13464C17.1079 8.13011 17.1814 8.12525 17.2565 8.12039C17.3313 8.11554 17.4031 8.10938 17.4718 8.10161C17.5404 8.09417 17.5964 8.08866 17.6405 8.08607C17.8403 8.06049 18.0135 7.98861 18.1602 7.86946C18.3068 7.75063 18.402 7.56186 18.4457 7.30284C18.4894 7.04413 18.4519 6.86378 18.3334 6.76244C18.2152 6.66142 18.0569 6.61091 17.8581 6.61091C17.8574 6.61091 17.8564 6.61091 17.8558 6.61091C17.8182 6.6135 17.7651 6.61544 17.6965 6.61674C17.6279 6.61803 17.5576 6.62127 17.4857 6.6258C17.4138 6.63033 17.3436 6.63519 17.2749 6.6394C17.2063 6.64393 17.147 6.64782 17.0969 6.65106L16.9939 6.65786L16.7601 8.15277ZM18.2197 4.87024C18.1938 4.87024 18.1676 4.87056 18.1414 4.87121C18.0122 4.87315 17.9002 4.87736 17.8011 4.88384L17.4686 4.90553L15.6236 5.02566L15.4682 5.03569L15.4443 5.18949L14.4985 11.2449L14.4609 11.4845L14.7028 11.4687L16.2948 11.365L16.4496 11.355L16.4739 11.2015L16.6837 9.87855L16.7815 9.87207L16.9787 9.85912L17.7237 11.1624L17.7839 11.2676L17.905 11.2598L19.647 11.1465L19.9601 11.1261L19.8021 10.8548L18.9032 9.31063C19.1998 9.10794 19.4588 8.85247 19.6751 8.54908C19.9322 8.18839 20.1025 7.74513 20.1819 7.2316C20.2418 6.83529 20.234 6.48528 20.1595 6.19096C20.0824 5.88887 19.9468 5.63437 19.7558 5.4346C19.5657 5.23579 19.3264 5.08782 19.0441 4.9949C18.7941 4.91233 18.5163 4.87024 18.2197 4.87024ZM17.1619 6.84144L17.2876 6.83335L17.3656 6.82817L17.4983 6.81943C17.5657 6.81489 17.6337 6.81198 17.7004 6.81068C17.7655 6.80939 17.8199 6.80745 17.8616 6.80518C18.0119 6.80583 18.1249 6.84015 18.2071 6.91009C18.289 6.98035 18.2719 7.1662 18.2541 7.27078C18.2188 7.48027 18.1459 7.63115 18.0378 7.71858C17.9199 7.81409 17.7836 7.87108 17.6214 7.89277C17.5767 7.89569 17.5207 7.90119 17.4507 7.90864C17.3863 7.91576 17.3186 7.92159 17.2438 7.92645L17.1474 7.9326L17.024 7.94069L16.9897 7.94296L17.1619 6.84144Z" fill="#EE4D2D"></path>
                                        <path d="M20.8711 4.78119L25.2276 4.49755L24.9631 6.20779L22.4068 6.37421L22.296 7.10499L24.7779 6.95281L24.5324 8.55846L22.0594 8.71939L21.9693 9.27986L24.5065 9.11473L24.2511 10.7495L19.8945 11.0332L20.8711 4.78119ZM22.467 4.42988C22.4362 4.42988 22.4052 4.42923 22.3741 4.42794L22.2653 4.42341L22.3984 3.58027L22.4971 3.58124C22.6467 3.58124 22.7811 3.55922 22.8967 3.51584C22.9935 3.47957 23.0453 3.4119 23.0592 3.30343L23.0599 3.29955C23.0812 3.17392 23.0343 3.14672 22.9886 3.13118C22.9271 3.11046 22.8536 3.09977 22.7697 3.09977C22.717 3.09977 22.659 3.10398 22.5975 3.1124L22.4689 3.12988L22.5923 2.30779L22.6616 2.29614C22.7989 2.27283 22.9342 2.26117 23.0637 2.26117C23.1107 2.26117 23.158 2.26279 23.2039 2.2657C23.3833 2.27801 23.5407 2.32139 23.6715 2.39554C23.8081 2.47292 23.9101 2.58657 23.9749 2.73292C24.0383 2.87701 24.0532 3.06124 24.0196 3.28077C23.9859 3.49091 23.9143 3.67417 23.8062 3.82667C23.699 3.97788 23.5679 4.10027 23.4163 4.19093C23.2671 4.28029 23.0994 4.34505 22.918 4.38293C22.7697 4.41402 22.6179 4.42988 22.467 4.42988Z" fill="#FCE60C"></path>
                                        <path d="M23.0657 2.35797C23.1107 2.35797 23.1554 2.35959 23.1994 2.3625C23.3649 2.37383 23.5067 2.41269 23.6255 2.48003C23.7441 2.54738 23.8315 2.64452 23.8878 2.77209C23.9442 2.89966 23.9565 3.06414 23.9254 3.26586C23.894 3.46143 23.8286 3.62979 23.7288 3.77032C23.6288 3.91116 23.5087 4.02352 23.3681 4.10738C23.2276 4.19156 23.0716 4.25179 22.8999 4.28773C22.7572 4.31784 22.6137 4.33273 22.469 4.33273C22.4395 4.33273 22.4101 4.33209 22.3803 4.33079L22.4832 3.67804C22.4884 3.67804 22.4939 3.67804 22.4991 3.67804C22.6613 3.67804 22.8057 3.65408 22.9326 3.60648C23.0638 3.55727 23.1386 3.46046 23.1574 3.3154C23.1823 3.17034 23.137 3.07807 23.0217 3.03856C22.9498 3.01396 22.8663 3.00198 22.7717 3.00198C22.7141 3.00198 22.6523 3.00651 22.5865 3.01557L22.6801 2.39132C22.8125 2.3693 22.9414 2.35797 23.0657 2.35797ZM25.1146 4.60245L24.8805 6.11614L22.3239 6.28257L22.1834 7.20956L24.6652 7.05738L24.4499 8.46682L21.9775 8.62774L21.8557 9.38475L24.3936 9.21962L24.1689 10.6579L20.0108 10.9286L20.9566 4.87313L25.1146 4.60245ZM23.0657 2.1637C22.931 2.1637 22.7902 2.176 22.6474 2.19996L22.5085 2.22327L22.4874 2.3625L22.3939 2.98676L22.3553 3.2432L22.6121 3.20823C22.6691 3.20046 22.7228 3.19657 22.7714 3.19657C22.8446 3.19657 22.9077 3.20531 22.9589 3.2228C22.9631 3.22442 22.9663 3.22571 22.9683 3.22668C22.9699 3.23478 22.9709 3.25291 22.9657 3.28302L22.965 3.28691L22.9644 3.29079C22.9534 3.37498 22.9181 3.40444 22.864 3.42484C22.7594 3.46402 22.6364 3.48409 22.4985 3.48409H22.4845L22.3168 3.48247L22.2906 3.64793L22.1876 4.30068L22.1536 4.51599L22.3712 4.52506C22.4033 4.52636 22.436 4.527 22.468 4.527C22.6257 4.527 22.784 4.51049 22.9391 4.47779C23.1308 4.43764 23.3086 4.369 23.4672 4.27413C23.6304 4.17634 23.7713 4.04489 23.8865 3.88267C24.0034 3.71819 24.0808 3.52068 24.1167 3.2963C24.1536 3.05702 24.1362 2.85465 24.0653 2.69341C23.9921 2.52763 23.8765 2.39876 23.7211 2.31069C23.5773 2.22942 23.4063 2.1815 23.2124 2.16855C23.1642 2.16532 23.1149 2.1637 23.0657 2.1637ZM25.3436 4.39296L25.102 4.40882L20.944 4.67951L20.7885 4.68954L20.7646 4.84334L19.8188 10.8988L19.7812 11.1384L20.0231 11.1225L24.1812 10.8518L24.3366 10.8418L24.3605 10.688L24.5852 9.24973L24.6228 9.01013L24.3809 9.026L22.0863 9.17559L22.1449 8.81198L24.4625 8.66109L24.6183 8.65105L24.6419 8.49661L24.8572 7.08717L24.8935 6.84919L24.6532 6.86408L22.4117 7.00169L22.4926 6.46712L24.8932 6.31074L25.0486 6.3007L25.0725 6.14658L25.3066 4.63288L25.3436 4.39296Z" fill="#EE4D2D"></path>
                                        <path d="M10.2082 6.93338C10.2396 6.73587 10.304 6.54775 10.4015 6.36967C10.4989 6.19126 10.62 6.03325 10.7648 5.89532C10.9095 5.75739 11.0746 5.64568 11.2595 5.5602C11.4444 5.47472 11.6374 5.42615 11.8385 5.4145C11.9676 5.40705 12.0852 5.4132 12.1914 5.43295C12.2976 5.4527 12.3937 5.48184 12.4799 5.51973C12.566 5.55793 12.6434 5.60391 12.7124 5.65734C12.7813 5.71108 12.8432 5.76645 12.8976 5.82376L12.3944 6.43993C12.3283 6.36028 12.2399 6.29001 12.1295 6.22849C12.0191 6.1673 11.8805 6.1414 11.7141 6.15111C11.6108 6.15726 11.5147 6.18155 11.4256 6.22396C11.3366 6.2667 11.2579 6.32077 11.1889 6.3865C11.1203 6.45255 11.0636 6.52897 11.0193 6.61639C10.9749 6.70381 10.9454 6.79544 10.9312 6.89128C10.914 6.99878 10.9163 7.0943 10.938 7.17816C10.9597 7.2617 10.9963 7.33228 11.0481 7.38991C11.0999 7.44722 11.1643 7.49029 11.242 7.51911C11.3194 7.5476 11.4055 7.55925 11.5004 7.55375C11.6555 7.5476 11.7902 7.51263 11.9048 7.4482C12.0194 7.38409 12.0968 7.31609 12.137 7.24486L11.6507 7.27303L11.7449 6.66755L13.006 6.5947L12.9889 6.69928C12.9487 6.95216 12.8765 7.17492 12.7719 7.36822C12.6673 7.56152 12.5427 7.72406 12.398 7.85617C12.2532 7.98827 12.0933 8.08962 11.9181 8.1602C11.7433 8.23079 11.5668 8.27126 11.3887 8.28162L11.3758 8.28227C11.1863 8.29328 11.0134 8.2664 10.8571 8.20229C10.7007 8.13786 10.5692 8.04493 10.463 7.92287C10.3568 7.80112 10.2797 7.6551 10.2325 7.48511C10.1849 7.31447 10.1768 7.13089 10.2082 6.93338Z" fill="white"></path>
                                        <path d="M13.896 8.10127L13.0781 8.14854L13.5104 5.36042L14.3283 5.31315L13.896 8.10127ZM13.7769 5.17651L13.4233 4.58398L13.8837 4.55743L14.1081 5.15741L13.7769 5.17651Z" fill="white"></path>
                                        <path d="M4.09815 10.6349C4.12696 10.4484 4.18686 10.2732 4.27752 10.1094C4.36818 9.94552 4.48086 9.80176 4.61491 9.67775C4.74928 9.55374 4.90113 9.45369 5.07112 9.37793C5.2411 9.30216 5.41789 9.25877 5.60245 9.24809C5.8291 9.23514 6.01592 9.26363 6.16357 9.33454C6.31121 9.40545 6.4417 9.50485 6.55502 9.63307L6.10108 10.1903C6.07744 10.1628 6.047 10.132 6.01009 10.0983C5.97318 10.0647 5.9285 10.0352 5.87572 10.009C5.82294 9.98308 5.76175 9.96332 5.69181 9.95037C5.62187 9.9371 5.54352 9.9358 5.45674 9.94616C5.39102 9.95264 5.32237 9.97174 5.25147 10.0035C5.18023 10.0352 5.11386 10.0789 5.05201 10.134C4.99017 10.189 4.9361 10.2544 4.89012 10.3295C4.84415 10.405 4.81177 10.4904 4.79363 10.5869C4.78036 10.6669 4.78198 10.7417 4.79784 10.8107C4.81371 10.8796 4.8422 10.9408 4.883 10.9939C4.9238 11.047 4.97722 11.0894 5.04327 11.1215C5.109 11.1532 5.18574 11.1694 5.27251 11.1697C5.36738 11.1723 5.45351 11.162 5.53121 11.139C5.60892 11.116 5.67951 11.0881 5.74265 11.0554C5.80578 11.0227 5.86374 10.9858 5.91652 10.9444C5.96897 10.9029 6.01786 10.8651 6.06254 10.8311L6.3397 11.3423C6.19497 11.4854 6.02984 11.6075 5.84399 11.7079C5.65846 11.8086 5.44315 11.8659 5.19804 11.8801L5.18606 11.8808C5.00442 11.8915 4.83961 11.8665 4.69197 11.8063C4.54432 11.7461 4.42161 11.6593 4.32415 11.5463C4.22669 11.433 4.1574 11.2983 4.11628 11.1422C4.07516 10.9849 4.06901 10.8162 4.09815 10.6349Z" fill="white"></path>
                                        <path d="M6.63197 10.8172C6.63456 10.7855 6.63844 10.7463 6.64363 10.6996C6.64881 10.653 6.65528 10.6032 6.66338 10.5497C6.67115 10.4963 6.67892 10.4432 6.68701 10.3898C6.69478 10.3364 6.70288 10.2858 6.71065 10.2379L6.86768 9.21412L7.56317 9.17397L7.40614 10.1858C7.38768 10.3085 7.37408 10.4037 7.36502 10.4717C7.35595 10.5397 7.3498 10.5909 7.34753 10.6252C7.33976 10.7498 7.3621 10.847 7.41488 10.9166C7.46766 10.9862 7.55443 11.0176 7.67585 11.0105C7.80212 11.003 7.9012 10.9613 7.97211 10.8842C8.04334 10.8075 8.0945 10.7087 8.12591 10.5879C8.13109 10.5614 8.13692 10.5293 8.14372 10.4918C8.15019 10.4545 8.15667 10.415 8.16347 10.3736C8.16994 10.3322 8.17642 10.2917 8.18322 10.2515C8.18969 10.2114 8.19552 10.1754 8.20103 10.1434L8.35806 9.12766L9.05355 9.08752L8.90429 10.0631C8.89651 10.1058 8.88842 10.155 8.88065 10.2111C8.87288 10.2671 8.86349 10.3237 8.85313 10.381C8.84277 10.4387 8.83208 10.494 8.82172 10.5475C8.81136 10.6009 8.80197 10.6462 8.7942 10.6838C8.75729 10.8366 8.70095 10.9758 8.62454 11.1018C8.54812 11.2277 8.45617 11.3369 8.34835 11.4288C8.24053 11.5211 8.11976 11.5939 7.98701 11.648C7.85393 11.7018 7.71373 11.7332 7.56609 11.7416C7.42394 11.7497 7.29346 11.7348 7.17495 11.6969C7.05645 11.659 6.95478 11.6001 6.8706 11.5204C6.78609 11.4408 6.72295 11.342 6.68054 11.2242C6.63747 11.107 6.62161 10.9713 6.63197 10.8172ZM7.57839 8.66595C7.6153 8.60054 7.65934 8.54906 7.71049 8.5115C7.76198 8.47426 7.81767 8.45386 7.87854 8.4503C7.92581 8.44771 7.96693 8.45451 8.00093 8.47103C8.03525 8.48754 8.06666 8.50632 8.0958 8.52704C8.12461 8.54776 8.15181 8.56751 8.17674 8.58565C8.20167 8.6041 8.22758 8.61382 8.2538 8.61479C8.28553 8.61576 8.31565 8.61058 8.34479 8.59957C8.3736 8.58856 8.40015 8.56913 8.42379 8.54161L8.47948 8.78801C8.44775 8.82946 8.40825 8.8654 8.36098 8.89583C8.3137 8.92627 8.25575 8.94084 8.1871 8.93954C8.13983 8.93695 8.10065 8.92659 8.07054 8.90878C8.04011 8.89065 8.01194 8.87123 7.98571 8.85018C7.95916 8.82913 7.93423 8.81035 7.91059 8.79319C7.88696 8.77603 7.85782 8.76859 7.82349 8.77053C7.78658 8.77279 7.75291 8.78575 7.7228 8.81003C7.69236 8.83431 7.66678 8.86281 7.64574 8.89583L7.57839 8.66595Z" fill="white"></path>
                                        <path d="M9.42626 9.06616L10.0149 9.03216L10.7075 10.3318L10.9157 8.98003L11.5953 8.94086L11.1983 11.5004L10.5423 11.5383L9.90514 10.3348L9.70892 11.5865L9.0293 11.6257L9.42626 9.06616Z" fill="white"></path>
                                        <path d="M11.6754 10.2042C11.7042 10.0229 11.7635 9.85035 11.8528 9.68651C11.9422 9.523 12.0536 9.37762 12.1863 9.25102C12.3191 9.12442 12.4706 9.02178 12.6406 8.94342C12.8106 8.86506 12.9877 8.82038 13.1719 8.8097C13.2904 8.8029 13.3986 8.8084 13.496 8.82653C13.5935 8.84467 13.6819 8.87122 13.7609 8.90618C13.8399 8.94115 13.9111 8.98357 13.9743 9.03246C14.0374 9.08168 14.0941 9.13251 14.1443 9.18496L13.6825 9.75062C13.622 9.67744 13.5407 9.61301 13.4394 9.55667C13.338 9.50033 13.2108 9.4767 13.058 9.48544C12.9631 9.49094 12.8747 9.51329 12.7931 9.55214C12.7115 9.59132 12.639 9.64086 12.5758 9.70141C12.5127 9.76195 12.4606 9.83221 12.4198 9.91251C12.379 9.99281 12.3521 10.077 12.3392 10.1647C12.3233 10.2635 12.3256 10.3512 12.3453 10.428C12.3651 10.5047 12.3987 10.5695 12.4463 10.6223C12.4939 10.675 12.5532 10.7145 12.6244 10.7408C12.6956 10.767 12.7746 10.7777 12.8614 10.7725C13.0036 10.767 13.1276 10.7346 13.2328 10.6757C13.338 10.6168 13.4093 10.5546 13.4458 10.4889L12.9994 10.5148L13.0858 9.95882L14.2437 9.89179L14.2278 9.98796C14.1912 10.2201 14.1248 10.4247 14.0287 10.6019C13.9325 10.7793 13.8182 10.9286 13.6854 11.0497C13.5524 11.1711 13.4057 11.264 13.2451 11.3288C13.0845 11.3935 12.9226 11.4308 12.7591 11.4401L12.7471 11.4408C12.5733 11.4508 12.4146 11.4262 12.2708 11.3673C12.1271 11.308 12.0066 11.2229 11.9092 11.1108C11.8117 10.9988 11.7411 10.8651 11.6974 10.709C11.654 10.5543 11.6466 10.3856 11.6754 10.2042Z" fill="white"></path>
                                        <path d="M27.8641 7.76164C27.6388 7.76164 27.4814 7.71307 27.393 7.61626C27.3046 7.51913 27.2444 7.34396 27.46 7.0587L27.7184 7.25395C27.6537 7.33975 27.6407 7.38637 27.6381 7.40256C27.6915 7.43753 27.9907 7.49743 28.7711 7.27175C29.4371 7.0791 30.1436 6.76341 30.661 6.42732C31.0541 6.17218 31.6868 5.67582 31.509 5.21928C31.4611 5.09624 31.3759 5.01432 31.2487 4.96867C30.6795 4.76501 29.4811 5.32419 29.0673 5.55699L28.9083 5.27497C28.9245 5.26591 29.3121 5.04865 29.801 4.86247C30.4794 4.60409 31.0029 4.53739 31.3575 4.66399C31.5751 4.7417 31.7276 4.88934 31.8104 5.10207C31.9526 5.4673 31.883 6.05108 30.7436 6.75823C30.1951 7.09853 29.4688 7.41325 28.8005 7.59975C28.4146 7.70789 28.1018 7.76164 27.8641 7.76164Z" fill="#EE4D2D"></path>
                                    </svg>
                                    <div>
                                        <div class="U1v9hp">
                                            <div class="u86SRJ">Gì Cũng Rẻ</div>
                                            <div class="shopee-drawer" data-testid="shopee_drawer" id="pc-drawer-id-0" tabindex="0"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" role="img" class="stardust-icon stardust-icon-help">
                                                    <circle cx="7.5" cy="7.5" fill="none" r="6.5" stroke-miterlimit="10"></circle>
                                                    <path stroke="none" d="m5.3 5.3c.1-.3.3-.6.5-.8s.4-.4.7-.5.6-.2 1-.2c.3 0 .6 0 .9.1s.5.2.7.4.4.4.5.7.2.6.2.9c0 .2 0 .4-.1.6s-.1.3-.2.5c-.1.1-.2.2-.3.3-.1.2-.2.3-.4.4-.1.1-.2.2-.3.3s-.2.2-.3.4c-.1.1-.1.2-.2.4s-.1.3-.1.5v.4h-.9v-.5c0-.3.1-.6.2-.8s.2-.4.3-.5c.2-.2.3-.3.5-.5.1-.1.3-.3.4-.4.1-.2.2-.3.3-.5s.1-.4.1-.7c0-.4-.2-.7-.4-.9s-.5-.3-.9-.3c-.3 0-.5 0-.7.1-.1.1-.3.2-.4.4-.1.1-.2.3-.3.5 0 .2-.1.5-.1.7h-.9c0-.3.1-.7.2-1zm2.8 5.1v1.2h-1.2v-1.2z"></path>
                                                </svg></div>
                                        </div>
                                        <div class="AUxo4B">Giá tốt nhất so với các sản phẩm cùng loại trên Shopee!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="U19ix">
                                <div class="Hy7yr Kiszae">
                                    <div class="kiszs2">
                                        <p>mã giảm giá của shop</p>
                                    </div>
                                    <div class="kiszs2 hepsoa">
                                        <div class="mini-vouchers__wrapper flex flex-auto flex-no-overflow">
                                            <div class="mini-vouchers__vouchers flex flex-auto flex-no-overflow">
                                                <div class="voucher-ticket voucher-ticket--VN voucher-ticket--seller-mini-solid mini-voucher-with-popover">
                                                    <div class=""><span class="voucher-promo-value voucher-promo-value--absolute-value">Giảm ₫5k</span></div>
                                                </div>
                                                <div class="voucher-ticket voucher-ticket--VN voucher-ticket--seller-mini-solid mini-voucher-with-popover">
                                                    <div class=""><span class="voucher-promo-value voucher-promo-value--absolute-value">Giảm ₫7k</span></div>
                                                </div>
                                                <div class="mini-vouchers__mask"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex rY0UiC"><label class="oN9nMU">Combo khuyến mãi</label><button class="JGTdiy">
                                        <div class="eR6vhu">Mua 2 &amp; giảm 3%</div>
                                    </button></div>
                                <div class="flex rY0UiC"><label class="oN9nMU">Bảo hiểm</label>
                                    <div class="flex items-center">
                                        <div>Bảo hiểm Thời trang</div>
                                        <div class="z-W7XM">Mới</div><a class="dO6pIz" href="https://insurance.shopee.vn/product-protection/profile?from=pdp&amp;product_id=1650882748039998921" target="_blank" rel="noopener noreferrer">Tìm hiểu thêm</a>
                                    </div>
                                </div>
                                <div class="flex rY0UiC lml8Go"><label class="oN9nMU">Vận chuyển</label>
                                    <div class="_4ZQRNI F6amdq">
                                        <div class="flex" data-testid="shipping_labels_pdp"></div>
                                        <div class="mHANnI">
                                            <div class="iuDG9e"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon icon-free-shipping-line">
                                                    <g>
                                                        <line fill="none" stroke-linejoin="round" stroke-miterlimit="10" x1="8.6" x2="4.2" y1="9.8" y2="9.8"></line>
                                                        <circle cx="3" cy="11.2" fill="none" r="2" stroke-miterlimit="10"></circle>
                                                        <circle cx="10" cy="11.2" fill="none" r="2" stroke-miterlimit="10"></circle>
                                                        <line fill="none" stroke-miterlimit="10" x1="10.5" x2="14.4" y1="7.3" y2="7.3"></line>
                                                        <polyline fill="none" points="1.5 9.8 .5 9.8 .5 1.8 10 1.8 10 9.1" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                                        <polyline fill="none" points="9.9 3.8 14 3.8 14.5 10.2 11.9 10.2" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                                    </g>
                                                </svg></div>
                                            <div class="flex flex-column cZexSD">
                                                <div class="flex items-center J9pM3L">
                                                    <div class="_82o6pM">Vận chuyển tới</div>
                                                    <div class="flex items-center nphO3q">
                                                        <div class="flex items-center">
                                                            <div class="-BfSMx">
                                                                <div class="flex items-center"><span class="jqPI6Z">Phường Trung Văn, Quận Nam Từ Liêm</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="J9pM3L">
                                                    <div class="_82o6pM">phí vận chuyển</div>
                                                    <div>
                                                        <div class="shopee-drawer" data-testid="shopee_drawer" id="pc-drawer-id-1" tabindex="0">
                                                            <div class="flex items-center IwHyBY">₫8.000 - ₫22.000</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Hy7yr Pieuax">
                                    <div class="LbUix">
                                        <p>Màu sắc</p>
                                    </div>
                                    <div class="SleUx">
                                        <select name="color" id="">
                                            <option value="Trắng">Trắng</option>
                                            <option value="Đen">Đen</option>
                                            <option value="Xám">Xám</option>
                                            <option value="Xanh dương">Xanh dương</option>
                                            <option value="Xanh đen">Xanh đen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="Hy7yr Tzxiaw">
                                    <div class="LbUix">
                                        <p>Size</p>
                                    </div>
                                    <div class="SleUx">
                                        <select name="size" id="">
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                            <option value="3XL">3XL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="Hy7yr Qwpazs">
                                    <div class="LbUix">
                                        <p>Số lượng</p>
                                    </div>
                                    <div class="SliOx">
                                        <div class="minus-btn" onclick="handleMinus()"><i class="fa-solid fa-minus"></i></div>
                                        <input type="text" name="sluong" value="1" id="amount">
                                        <div class="plus-btn" onclick="handlePlus()"><i class="fa-solid fa-plus"></i></div>
                                    </div>
                                </div>
                                <div class="Hy7yr sxSdir">
                                    <div class="HjxNe">
                                        <input type="submit" value="Thêm Vào Giỏ Hàng" name="themGH" onclick="return confirm('Bạn có muốn thêm sản phẩm vào giỏ hàng ?');">
                                    </div>
                                    <div class="LxIep">
                                        <input type="submit" value="Mua Ngay" name="muangay" onclick="return confirm('Bạn muốn mua sản phẩm này ?');">
                                    </div>
                                </div>
                            </div>

                        </form>
                        <?php
                        if (isset($_POST['themGH'])) {
                            $order_id = uniqid();
                            $user = $user['username'];
                            $color = $_POST['color'];
                            $size = $_POST['size'];
                            $sl = $_POST['sluong'];
                            $dongia = $row['gia_sale'];
                            $thanhtien = $sl * $dongia;
                            $_SESSION['user'] = $user;
                            $sql = "insert into cart values ('$order_id','$user','$ma','$color,$size','$sl','$thanhtien')";
                            $result = mysqli_query($conn, $sql);
                            echo '<script language="javascript"> alert("Thêm giỏ hàng thành công, bạn được chuyển đến trang giỏ hàng");window.location="cart.php"</script>';
                        } elseif (isset($_POST['muangay'])) {
                            $tk = $user['username'];
                            $color = $_POST['color'];
                            $size = $_POST['size'];
                            $sl = $_POST['sluong'];
                            $_SESSION['masp'] = $ma;
                            $_SESSION['color'] = $color;
                            $_SESSION['size'] = $size;
                            $_SESSION['sl'] = $sl;
                            $_SESSION['user'] = $tk;
                            echo '<script language="javascript"> alert("Bạn được chuyển đến trang thanh toán");window.location="pay.php"</script>';
                        }
                        ?>
                    </div>
                </div>
            <?php } ?>
            <div class="detail_lq">
                <div class="detail_oop">
                    <ul class="detail_oop-il">
                        <li class="detail_oop-item">
                            <p>ComBo khuyến mãi</p>
                        </li>
                        <li class="detail_oop-item">
                            <a href="./product.php">Xem tất cả</a>
                        </li>
                    </ul>
                </div>
                <div class="GiFtx">
                    <?php
                    $result = mysqli_query($conn, "select * FROM product_show WHERE ma_sanpham BETWEEN 'SP01' AND 'SP06'");
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="FxUTr">
                            <div class="HyXue">
                                <div class="HyXue-img">
                                    <img src="./acsset/img/product/<?php echo $row['anh_sanpham'] ?>" alt="">
                                </div>
                            </div>
                            <div class="Mxnoa">
                                <div class="PoUxi">
                                    <p><?php echo $row['ten_sanpham'] ?></p>
                                </div>
                                <div class="pYeRt">
                                    <ul class="Rteus">
                                        <li class="LpUws">
                                            <div class="u-back"></div>
                                            <sup>đ</sup>220.000
                                        </li>
                                        <li class="LpUys"><sup>đ</sup><?php echo currency_format($row['gia_ban']) ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="detail_shop">
                <div class="detail_shop_main">
                    <ul class="detail_shop-ul">
                        <li class="detail_shop-li">
                            <div class="detail_shop_item shop_item_img">
                                <img src="./acsset/img/product/shop.jpg" alt="">
                            </div>
                            <div class="detail_shop_item shop-line">Yêu thích</div>
                        </li>
                        <li class="detail_shop-li">
                            <div class="detail_shop_item shop_item_name">
                                <p>ao_thun_nam_poniva</p>
                            </div>
                            <div class="detail_shop_item">
                                <button class="shop_item_btn1"><img src="./acsset/img/product/chat.png" alt=""> Chat ngay</button>
                                <button class="shop_item_btn2"> <i class="fa-solid fa-store"></i>Xem Shop</button>
                            </div>
                        </li>
                        <li class="detail_shop-li KxLtY">
                            <div class="detail_shop_item">
                                <ul class="Poszx">
                                    <li class="LpoFe LsZxi">
                                        <p>Đánh giá</p>
                                    </li>
                                    <li class="LpoFe DxOyr">
                                        <p>6.5K</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="detail_shop_item">
                                <ul class="Poszx">
                                    <li class="LpoFe LsZxi">
                                        <p>Sản phẩm</p>
                                    </li>
                                    <li class="LpoFe DxOyr">
                                        <p>311</p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="detail_shop-li KxLtY">
                            <div class="detail_shop_item">
                                <ul class="Poszx">
                                    <li class="LpoFe LsZxi">
                                        <p>Tỷ lệ phản hồi</p>
                                    </li>
                                    <li class="LpoFe DxOyr">
                                        <p>95%</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="detail_shop_item">
                                <ul class="Poszx">
                                    <li class="LpoFe LsZxi">
                                        <p>Thời gian phản hồi</p>
                                    </li>
                                    <li class="LpoFe DxOyr">
                                        <p>Trong Vài Giờ</p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="detail_shop-li KxLtY">
                            <div class="detail_shop_item">
                                <ul class="Poszx">
                                    <li class="LpoFe LsZxi">
                                        <p>Tham Gia</p>
                                    </li>
                                    <li class="LpoFe DxOyr">
                                        <p>34 Tháng trước</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="detail_shop_item">
                                <ul class="Poszx">
                                    <li class="LpoFe LsZxi">
                                        <p>Người theo dõi</p>
                                    </li>
                                    <li class="LpoFe DxOyr">
                                        <p>19.2k</p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="describe">
                <div class="describe_main">
                    <div class="U9rGd1">
                        <div class="Iv7FJp">MÔ TẢ SẢN PHẨM</div>
                        <?php
                        $result = mysqli_query($conn, "select * FROM product_main INNER JOIN product ON product.ma_sanpham=product_main.ma_sanpham WHERE product.ma_sanpham='$ma'");
                        while ($row = mysqli_fetch_array($result)) {
                            echo $row['motasp']
                        ?>

                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="danhgia">
                <div class="danhgia-bn">
                    <h2>ĐÁNH GIÁ SẢN PHẨM</h2>
                </div>
                <div class="danhgia_item">
                    <div class="danhgia-s">
                        <div class="PxOa">
                            <p>4.8 Trên 5</p>
                            <div class="Uxzyt">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Tab items -->
                    <div class="tabs">
                        <div class="tab-item active">
                            <p>Tất cả</p>
                        </div>
                        <div class="tab-item">
                            <p>5 sao</p>
                        </div>
                        <div class="tab-item">
                            <p>4 sao</p>
                        </div>
                        <div class="tab-item">
                            <p>3 sao</p>
                        </div>
                        <div class="tab-item">
                            <p>2 sao</p>
                        </div>
                        <div class="tab-item">
                            <p>1 sao</p>
                        </div>
                        <div class="line"></div>
                    </div>
                </div>


                <!-- Tab content -->
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy😘😘😘😘</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="bl-main">
                            <div class="bl-avatar">
                                <img src="./acsset/img/cmt/avatar.jpg" alt="">
                            </div>
                            <div class="bl-ndix">
                                <div class="bl-name">
                                    <p>ohuutin1234</p>
                                </div>
                                <div class="bl-sao">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
                                </div>
                                <div class="bl-list">
                                    <ul class="bl-list-main">
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>2022-12-27 17:14</p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p>Phân loại hàng: Xám,M</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Chất liệu : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> thun trơn</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Màu sắc : </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> màu xàm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <div class="bl-item-main">
                                                <p>Đúng với mô tả: </p>
                                            </div>
                                            <div class="bl-item-main">
                                                <p> ko đúg lắm</p>
                                            </div>
                                        </li>
                                        <li class="bl-item">
                                            <p>Khi nhận và mở hàng tui cứ ngở đó là món hàng đẹp nhất tui từng thấy:))</p>
                                        </li>
                                        <li class="bl-item bl-img-item">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                            <img src="./acsset/img/cmt/1.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <h2>Không có bình luận nào</h2>
                    </div>
                    <div class="tab-pane">
                        <h2>Không có bình luận nào</h2>

                    </div>
                    <div class="tab-pane">
                        <h2>Không có bình luận nào</h2>

                    </div>
                </div>
            </div>
            <div class="content__web7_main">
                <div class="xUzyt">
                    <ul class="xUoAz">
                        <li class="xPaowq">
                            <h2>CÁC SẢN PHẨM KHÁC</h2>
                        </li>
                        <li class="xPaowq"><a href="./product.php">Xem tất cả >>></a></li>
                    </ul>
                </div>
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
        <?php
        include("footer.php");
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
                <a class="chat_mini_content-icon-a">Chat</a>
            </div>
        </div>
    </div>
    <div id="toast">
        <div id="img"><i class="fa-solid fa-circle-exclamation"></i></div>
        <div id="desc">Chức năng đang được cập nhật</div>
    </div>
    </div>
</body>
<script src="./acsset/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./acsset/Css/main.js"></script>
<script src="https://cdn.korzh.com/metroui/v4.5.1/js/metro.min.js"></script>
<script>
    let amountElement = document.getElementById('amount');
    let amount = amountElement.value;

    let rander = (amount) => {
        amountElement.value = amount;
    }
    let handlePlus = () => {
        amount++;
        console.log(amount);
        rander(amount);
    }
    let handleMinus = () => {
        if (amount > 1) {
            console.log(amount);
            amount--;
        }
        rander(amount);
    }
    amountElement.addEventListener('input', () => {
        amount = amountElement.value;
        amount = parseInt(isNaN(amount) || amount == 0) ? 1 : amount;
        console.log(amount);
        rander(amount);
    })


    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const tabs = $$(".tab-item");
    const panes = $$(".tab-pane");

    const tabActive = $(".tab-item.active");
    const line = $(".tabs .line");

    requestIdleCallback(function() {
        line.style.left = tabActive.offsetLeft + "px";
        line.style.width = tabActive.offsetWidth + "px";
    });

    tabs.forEach((tab, index) => {
        const pane = panes[index];

        tab.onclick = function() {
            $(".tab-item.active").classList.remove("active");
            $(".tab-pane.active").classList.remove("active");

            line.style.left = this.offsetLeft + "px";
            line.style.width = this.offsetWidth + "px";

            this.classList.add("active");
            pane.classList.add("active");
        };
    });

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