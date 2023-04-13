<?php
include_once("ketnoi.php");
session_start();
$user = $_SESSION["usercart"];
$ArrayCart = $_SESSION['arraycart'];
// $tong = 0;
// foreach ($ArrayCart as $lang) {
//     $result = mysqli_query($conn, "select * FROM `cart` INNER JOIN product_main ON product_main.ma_sanpham=cart.ma_sanpham INNER JOIN product ON product.ma_sanpham=cart.ma_sanpham WHERE cart.addcart='$lang' and cart.username='$user'");
//     while ($row = mysqli_fetch_array($result)) {
//         echo $row['soluong'], $row['username'], $row['addcart'], $row['phanloai'], $row['gia_sale'], $row['thanhtien'];
//         $tong += $row['thanhtien'];
//     }
// }
// echo $tong;


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
    <title>Thanh Toán | Shopee Việt Nam | Mua và Bán Trên Ứng Dụng Di Động Hoặc Website</title>
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

        .pay_main {
            margin: 20px 0 40px 0;
        }

        .pay_oder {
            width: 1200px;
            margin: auto;
        }

        .vtrWey {
            height: 3px;
            width: 100%;
            background-position-x: -30px;
            background-size: 116px 3px;
            background-image: repeating-linear-gradient(45deg, #6fa6d6, #6fa6d6 33px, transparent 0, transparent 41px, #f18d9b 0, #f18d9b 74px, transparent 0, transparent 82px);
        }

        .pay_oder_main {
            background: white;
        }

        .pay_oder_item p {
            margin-top: 20px;
            font-size: 18px;
            color: #ee4d2d;
            text-transform: capitalize;
        }

        .pay_oder-list {
            margin: 0 20px;
        }

        ul.pay_oder_item-ul {
            display: flex;
            height: 40px;
            justify-content: space-between;
        }

        li.pay_oder_item-li p {
            color: black;
            margin: 0;
            font-size: 16px;
        }

        li.pay_oder_item-li h5 {
            font-size: 14px;
            font-weight: bold;
        }

        li.pay_oder_item-li button {
            color: red;
            background: white;
            border: 1px solid;
            height: 20px;
        }

        li.pay_oder_item-li a {
            color: #0b079a !important;
            font-size: 14px;
            text-transform: capitalize;
        }

        .pay_product {
            margin-top: 30px;
            padding: 20px;
            background: white;
        }

        ul.UxzTi {
            display: flex;
            justify-content: space-between;
        }

        li.Uzxi h3 {
            font-weight: bold !important;
            color: black;
        }

        li.Uzxip p {
            color: rgba(0, 0, 0, 0.5);
            font-size: 14px;
            text-transform: capitalize;
        }

        .Uzxip {
            display: flex;
        }

        li.Uzxip img {
            width: 40px;
            height: 40px;
        }

        .Uzxip span {
            width: 220px;
        }

        .vYrpLx {
            height: 50px;
            border: 0;
        }

        .vYrpLx,
        .xAkOUO {
            display: flex;
            align-items: center;
        }

        .YSl9dN {
            text-decoration: none;
            color: rgba(0, 0, 0, .87);
            font-family: HelveticaNeueMedium, HelveticaNeue-Medium, Helvetica Neue Medium, Helvetica Neue, Arial Bold, arial, sans-serif;
            margin-left: 5px;
        }

        ._75ySYI {
            display: flex;
            align-items: center;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            display: inline-flex;
            color: #00bfa5;
            margin-left: 10px;
            border-left: 1px solid rgba(0, 0, 0, .09);
        }

        .\+Wv1h7 {
            width: 20px;
            height: 15px;
            margin-left: 10px;
            margin-right: 4px;
        }

        .shopee-svg-icon {
            display: inline-block;
            width: 1em;
            height: 1em;
            fill: currentColor;
            position: relative;
        }

        .uw1QJu {
            display: flex;
            flex-direction: column;
            min-width: 0;
            min-height: 0;
            border-bottom: 1px dashed rgba(0, 0, 0, .09);
            padding: 18px 30px;
        }

        .D2AHAU,
        .za7qoR {
            display: flex;
        }

        .D2AHAU {
            flex: 6;
            align-items: center;
            justify-content: flex-end;
        }

        .hcC4-3 {
            font-size: 14px;
        }

        .hcC4-3,
        .zjjc32 {
            display: flex;
            align-items: center;
        }

        .hcC4-3 svg {
            margin-right: 4px;
            width: 24px;
            height: 100%;
            color: #ee4d2d;
        }

        .hcC4-3,
        .zjjc32 {
            display: flex;
            align-items: center;
        }

        .zjjc32 {
            flex: 4;
            justify-content: flex-end;
        }

        ._64JAsH {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding: 0;
            float: right;
            box-shadow: 0 0 0 0 !important;
            border: 0 !important;
            color: #05a !important;
            line-height: 21px;
            font-size: 14px;
            text-transform: none !important;
            font-weight: 500;
            width: 100px;
            background: transparent;
        }

        ._64JAsH span {
            text-transform: capitalize;
        }

        .wVzdz- {
            display: flex;
            background-color: #fafdff;
            min-width: 0;
            min-height: 0;
            border-bottom: 1px dashed rgba(0, 0, 0, .09);
        }

        .Tn7sb8 {
            flex: 4;
        }

        .OUah6W {
            display: flex;
            flex-direction: column;
            min-width: 0;
            min-height: 0;
            font-size: 14px;
        }

        .u-JjSt {
            display: flex;
            border-top: 0;
            min-width: 0;
            min-height: 0;
            padding: 16px 30px;
        }

        .u-JjSt>span {
            line-height: 40px;
        }

        .nWvmL7 {
            flex: 1;
        }

        ._0HwzC1 {
            margin-left: 15px;
            margin-bottom: 0;
            flex: 1;
            font-size: 12px;
            font-weight: 300;
        }

        .F9tXsd {
            background-color: #fff;
        }

        .DBGP\+r {
            display: block;
            display: flex;
            align-items: center;
            box-shadow: inset 0 2px 0 0 rgb(0 0 0 / 2%);
            border-radius: 2px;
            height: 40px;
            box-sizing: border-box;
            border: 1px solid rgba(0, 0, 0, .14);
            transition: border-color .3s ease-in-out, box-shadow .3s ease-in-out, background-color .3s ease-in-out;
        }

        ._0HwzC1 input {
            padding: 4px 12px;
            width: 100%;
            height: 40px;
            font-size: 14px;
        }

        .c1\+TQt {
            height: 38px;
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            background-color: transparent;
            flex: 1;
            outline: none;
            font-size: .875rem;
            min-width: 0;
            color: #222;
            border: 0;
        }

        .OUah6W:last-child {
            border-left: 1px dashed rgba(0, 0, 0, .09);
        }

        .Fzg\+Gz,
        .GJ7sOQ {
            align-items: center;
        }

        .Fzg\+Gz {
            flex: 6;
            padding: 16px 0;
            display: grid;
            grid-template-columns: auto;
            grid-template-rows: auto;
            grid-column-gap: 10px;
        }

        .Oa38lC {
            min-width: 0;
            min-height: 0;
            padding-left: 20px;
            display: flex;
            flex: 0 0 auto;
            color: #00bfa5;
            grid-column-start: 1;
            grid-column-end: 2;
        }

        ._9HO6as {
            flex: 0 0 auto;
            font-weight: 500;
            grid-column-start: 2;
            grid-column-end: 3;
            grid-row-start: 1;
            grid-row-end: 2;
        }

        ._9HO6as,
        .xffMOK {
            white-space: nowrap;
        }

        .GEI150 {
            grid-column-start: 1;
            grid-column-end: 2;
            -ms-grid-column-span: 1;
        }

        ._3zds3i {
            margin-top: 5px;
            font-size: 12px;
            color: #888;
            grid-column-start: 2;
            grid-column-end: 5;
            -ms-grid-column-span: 3;
            grid-row-start: 3;
            grid-row-end: 3;
            -ms-grid-row-span: 0;
        }

        .elfp9W,
        .G2khyK {
            -ms-grid-column-span: 1;
            -ms-grid-row-span: 1;
        }

        .elfp9W {
            flex: 0 0 auto;
            text-align: center;
            text-transform: uppercase;
            color: #05a;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            grid-column-start: 3;
            grid-column-end: 4;
            grid-row-start: 1;
            grid-row-end: 2;
        }

        .dnXfYW {
            padding-right: 30px;
            flex: 1;
            text-align: right;
            font-size: 14px;
            color: #222;
            grid-column-start: 4;
            grid-column-end: 5;
            grid-row-start: 1;
            grid-row-end: 2;
        }

        .Nivkv- {
            background-color: #fafdff;
            display: flex;
            flex-direction: column;
            padding: 16px 30px 20px;
        }

        .ULZMSb {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .z10ZuQ {
            font-size: 14px;
            color: #929292;
        }

        ._9F3E9v {
            margin-left: 20px;
            font-size: 20px;
            color: #ee4d2d;
        }

        .DS2ZYY {
            margin-bottom: 12px;
            border-radius: 3px;
            box-shadow: 0 1px 0 0 rgb(0 0 0 / 5%);
        }

        .DQ7t9K {
            margin-top: 20px;
            background: #fff;
        }

        ._2qsKTk {
            display: flex;
            align-items: center;
            min-height: 90px;
            padding-left: 30px;
            padding-right: 30px;
            box-sizing: border-box;
        }

        .zDPGhr {
            flex: 1;
        }

        .SzEjHI {
            width: 200px;
            font-size: 18px;
            color: #222;
        }

        .KoRB7y {
            font-size: 14px;
            color: #222;
        }

        .FooGkf {
            margin-left: 60px;
            color: #05a;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
        }

        .KQyCj0 {
            background: #fffefb;
            box-shadow: 0 1px 1px 0 rgb(0 0 0 / 5%);
            border-top: 1px solid #f1f0ed;
            padding-top: 15px;
            display: grid;
            grid-template-columns: 1fr -webkit-max-content -webkit-max-content;
            grid-template-columns: 1fr max-content max-content;
            grid-template-rows: auto;
            grid-column-gap: 10px;
        }

        .BcITa9 {
            grid-row-start: 11;
            grid-row-end: 12;
        }

        .BcITa9,
        .GJEkd- {
            -ms-grid-row-span: 1;
        }

        .XIEGGF {
            grid-column-start: 2;
            grid-column-end: 3;
            -ms-grid-column-span: 1;
        }

        .Tc17Ac {
            font-size: 14px;
            color: rgba(0, 0, 0, .54);
            display: flex;
            align-items: center;
        }

        .BcITa9 {
            grid-row-start: 11;
            grid-row-end: 12;
        }

        .BcITa9,
        .GJEkd- {
            -ms-grid-row-span: 1;
        }

        .mCEcIy {
            padding: 0 25px 0 10px;
            height: 40px;
            min-width: 100px;
            grid-column-start: 3;
            grid-column-end: 4;
            -ms-grid-column-span: 1;
            justify-content: flex-end;
        }

        .RY9Grr {
            grid-row-start: 12;
            grid-row-end: 13;
        }

        .kC0GSn {
            height: 50px;
            font-size: 28px;
            color: #ee4d2d;
        }

        .n3vdfL {
            grid-row-start: 19;
            grid-row-end: 20;
        }

        .uTFqRt {
            grid-column-start: 1;
            grid-column-end: 4;
            -ms-grid-column-span: 3;
            grid-row-start: 32;
            grid-row-end: 33;
            -ms-grid-row-span: 1;
            min-height: 95px;
            padding: 0 30px;
            margin: 10px 0 0;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            border-top: 1px dashed rgba(0, 0, 0, .09);
        }

        .k4VpYA {
            padding: 40px 25px 32px 0;
            flex: 1;
        }

        .C-NSr-:first-child {
            padding: 0 15px;
        }

        .C-NSr- {
            padding: 12px 15px 0;
            font-size: 14px;
            background-color: #fffdf8;
            color: rgba(0, 0, 0, .54);
        }

        .OX-2Lj .stardust-button--primary {
            background: #ee4d2d;
            color: #fff;
        }

        .OX-2Lj .stardust-button {
            display: flex;
            align-items: center;
            justify-content: center;
            align-self: flex-start;
            background: #fff;
            border: 1px solid rgba(0, 0, 0, .09);
            box-shadow: 0 1px 1px 0 rgb(0 0 0 / 3%);
            border-radius: 2px !important;
            color: #555;
            text-transform: capitalize;
            outline: none;
        }

        .stardust-button.stardust-button--primary.stardust-button--large.apLZEG {
            width: 250px;
            color: white;
            border: none;
            top: 0;
            font-size: 14px;
        }

        .C-NSr- a {
            color: #ee4d2d !important;
        }

        .\+w8dNn {
            margin-top: 20px;
        }

        .At3Wkr {
            position: relative;
            display: flex;
            align-items: center;
            padding: 28px 30px;
            background: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, .05);
        }

        .kKkbFa,
        .W-XOpk {
            display: flex;
        }

        .W-XOpk {
            flex-grow: 1;
            flex-shrink: 0;
            flex-direction: column;
        }

        .jeFLq1 {
            display: flex;
            align-items: center;
            flex-shrink: 0;
            flex-grow: 1;
        }

        .jeFLq1 svg {
            width: 24px;
            height: 100%;
            color: #ee4d2d;
        }

        .Pd8fbQ {
            font-size: 18px;
            font-weight: 400;
            margin: 0 8px;
        }

        .a\+7foE,
        .XKo7IA {
            display: flex;
            align-items: center;
        }

        .a\+7foE {
            position: relative;
            padding: 28px 30px;
            background: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, .05);
        }

        .XKo7IA {
            flex-grow: 1;
            flex-shrink: 0;
        }

        ._8DaKrB {
            height: 18px;
            fill: transparent;
            flex: 0 0 auto;
            width: 18px;
            height: 100%;
            padding: 0 3px;
        }

        .shopee-svg-icon {
            display: inline-block;
            width: 1em;
            height: 1em;
            fill: currentColor;
            position: relative;
        }

        .rHlA12 {
            font-size: 18px;
            font-weight: 400;
            margin: 0 8px;
        }

        .ER\+Dws {
            font-weight: 500;
            flex: 0 1 auto;
            color: #929292;
            margin-left: 17px;
        }

        ._5bMjRo {
            display: flex;
        }

        .f8yTr7 {
            padding-right: 12px;
            font-weight: 500;
            color: #d0d0d0;
        }

        .stardust-checkbox--disabled {
            opacity: .35;
            cursor: no-drop;
        }

        .stardust-checkbox {
            font-family: -apple-system, HelveticaNeue-Light, Helvetica Neue Light, Helvetica Neue, Helvetica, Roboto, Droid Sans, Arial, sans-serif;
            font-weight: 300;
            font-size: 12px;
            display: flex;
            align-items: center;
            cursor: default;
            position: relative;
            color: rgba(0, 0, 0, .54);
            max-width: 400px;
        }

        .stardust-checkbox__input {
            opacity: 0;
            top: 0;
            left: 0;
            position: absolute;
        }

        button.FPhJqC {
            width: 100px;
        }

        svg.shopee-svg-icon._8DaKrB.icon-coin-line {
            width: 30px;
            height: 30px;
        }

        .pay_main form {
            right: 0;
        }

        .oxiaua {
            width: 250px;
        }

        .oxiaua h3 {
            width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 25px;
            -webkit-line-clamp: 1;
            height: 20px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
        }

        ::selection {
            background-color: red;
        }
    </style>
</head>

<body>
    <div class="pay">
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
                            <li class="header_ringht_login-li register"><a href="./user_main.php"><?php echo $user ?></a></li>
                            <li class="header_ringht_login-li login"><a href="./index.php">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header_pay">
                    <div class="header_pay-main">
                        <div class="logo_pay-main">
                            <img src="./acsset/img/img-logo/logo-shopee-png-images-download-shopee-1.png" alt="">
                        </div>
                        <div class="h3_logo-pay">
                            <h3>THANH TOÁN</h3>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="pay_main">
            <form action="" method="post">
                <div class="pay_main-KzXTy">
                    <div class="pay_oder">
                        <div class="pay_oder_main">
                            <div class="vtrWey"></div>
                            <div class="pay_oder-list">
                                <div class="pay_oder_item">
                                    <p><i class="fa-solid fa-location-dot"></i>địa chỉ nhận hàng</p>
                                </div>
                                <?php
                                $result = mysqli_query($conn, "select * FROM user_main INNER JOIN address_ship ON user_main.username=address_ship.username WHERE address_ship.username='$user' AND address_ship.macdinh='1' ");
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <div class="pay_oder_item">
                                        <ul class="pay_oder_item-ul">
                                            <li class="pay_oder_item-li">
                                                <p><?php echo $row['HoTen'] ?> (+84) <?php $student_id = substr($row['sodienthoai'], -9);
                                                                                        echo $student_id ?></p>
                                            </li>
                                            <li class="pay_oder_item-li">
                                                <h5><?php echo $row['address'] ?></h5>
                                            </li>
                                            <li class="pay_oder_item-li"><button>Mặc định</button></li>
                                            <li class="pay_oder_item-li"><a>thay đổi</a></li>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="pay_product">
                            <div class="pay_product-main">
                                <div class="pay_product_tt">
                                    <ul class="UxzTi">
                                        <li class="Uzxip">
                                            <h3>Sản phẩm</h3>
                                            <span></span>
                                        </li>
                                        <li class="Uzxip">
                                            <p>Loại</p>
                                        </li>
                                        <li class="Uzxip">
                                            <p>Đơn giá</p>
                                        </li>
                                        <li class="Uzxip">
                                            <p>số lượng</p>
                                        </li>
                                        <li class="Uzxip">
                                            <p>Thành tiền</p>
                                        </li>
                                    </ul>
                                </div>
                                <?php
                                $tongphi = 0;
                                $tong = 0;
                                foreach ($ArrayCart as $lang) {
                                    $result = mysqli_query($conn, "select * FROM `cart` INNER JOIN product_main ON product_main.ma_sanpham=cart.ma_sanpham INNER JOIN product ON product.ma_sanpham=cart.ma_sanpham WHERE cart.addcart='$lang' and cart.username='$user'");
                                    while ($row = mysqli_fetch_array($result)) {
                                ?>
                                        <div class="pay_product-item1">
                                            <div class="vYrpLx">
                                                <div>
                                                    <div class="xAkOUO"><svg xmlns="http://www.w3.org/2000/svg" width="62" height="16" fill="none">
                                                            <path fill="#EE4D2D" fill-rule="evenodd" d="M0 2C0 .9.9 0 2 0h58a2 2 0 012 2v12a2 2 0 01-2 2H2a2 2 0 01-2-2V2z" clip-rule="evenodd"></path>
                                                            <g clip-path="url(#clip0)">
                                                                <path fill="#fff" d="M8.7 13H7V8.7L5.6 6.3A828.9 828.9 0 004 4h2l2 3.3a1197.3 1197.3 0 002-3.3h1.6L8.7 8.7V13zm7.9-1.7h1.7c0 .3-.2.6-.5 1-.2.3-.5.5-1 .7l-.6.2h-.8c-.5 0-1 0-1.5-.2l-1-.8a4 4 0 01-.9-2.4c0-1 .3-1.9 1-2.6a3 3 0 012.4-1l.8.1a2.8 2.8 0 011.3.7l.4.6.3.8V10h-4.6l.2 1 .4.7.6.5.7.1c.4 0 .7 0 .9-.2l.2-.6v-.1zm0-2.3l-.1-1-.3-.3c0-.2-.1-.2-.2-.3l-.8-.2c-.3 0-.6.2-.9.5l-.3.5a4 4 0 00-.3.8h3zm-1.4-4.2l-.7.7h-1.4l1.5-2h1.1l1.5 2h-1.4l-.6-.7zm8.1 1.6H25V13h-1.7v-.5.1H23l-.7.5-.9.1-1-.1-.7-.4c-.3-.2-.4-.5-.6-.8l-.2-1.3V6.4h1.7v3.7c0 1 0 1.6.3 1.7.2.2.5.3.7.3h.4l.4-.2.3-.3.3-.5.2-1.4V6.4zM34.7 13a11.2 11.2 0 01-1.5.2 3.4 3.4 0 01-1.3-.2 2 2 0 01-.5-.3l-.3-.5-.2-.6V7.4h-1.2v-1h1.1V5h1.7v1.5h1.9v1h-2v3l.2 1.2.1.3.2.2h.3l.2.1c.2 0 .6 0 1.3-.3v1zm2.4 0h-1.7V3.5h1.7v3.4a3.7 3.7 0 01.2-.1 2.8 2.8 0 013.4 0l.4.4.2.7V13h-1.6V9.3 8.1l-.4-.6-.6-.2a1 1 0 00-.4.1 2 2 0 00-.4.2l-.3.3a3 3 0 00-.3.5l-.1.5-.1.9V13zm5.4-6.6H44V13h-1.6V6.4zm-.8-.9l1.8-2h1.8l-2.1 2h-1.5zm7.7 5.8H51v.5l-.4.5a2 2 0 01-.4.4l-.6.3-1.4.2c-.5 0-1 0-1.4-.2l-1-.7c-.3-.3-.5-.7-.6-1.2-.2-.4-.3-.9-.3-1.4 0-.5.1-1 .3-1.4a2.6 2.6 0 011.6-1.8c.4-.2.9-.3 1.4-.3.6 0 1 .1 1.5.3.4.1.7.4 1 .6l.2.5.1.5h-1.6c0-.3-.1-.5-.3-.6-.2-.2-.4-.3-.8-.3s-.8.2-1.2.6c-.3.4-.4 1-.4 2 0 .9.1 1.5.4 1.8.4.4.8.6 1.2.6h.5l.3-.2.2-.3v-.4zm4 1.7h-1.6V3.5h1.7v3.4a3.7 3.7 0 01.2-.1 2.8 2.8 0 013.4 0l.3.4.3.7V13h-1.6V9.3L56 8.1c-.1-.3-.2-.5-.4-.6l-.6-.2a1 1 0 00-.3.1 2 2 0 00-.4.2l-.3.3a3 3 0 00-.3.5l-.2.5V13z"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0">
                                                                    <path fill="#fff" d="M0 0h55v16H0z" transform="translate(4)"></path>
                                                                </clipPath>
                                                            </defs>
                                                        </svg></div>
                                                </div><span class="YSl9dN">PONIVALAZA</span>
                                                <div class="_75ySYI"><svg viewBox="0 0 16 16" class="shopee-svg-icon +Wv1h7">
                                                        <g fill-rule="evenodd">
                                                            <path d="M15 4a1 1 0 01.993.883L16 5v9.932a.5.5 0 01-.82.385l-2.061-1.718-8.199.001a1 1 0 01-.98-.8l-.016-.117-.108-1.284 8.058.001a2 2 0 001.976-1.692l.018-.155L14.293 4H15zm-2.48-4a1 1 0 011 1l-.003.077-.646 8.4a1 1 0 01-.997.923l-8.994-.001-2.06 1.718a.5.5 0 01-.233.108l-.087.007a.5.5 0 01-.492-.41L0 11.732V1a1 1 0 011-1h11.52zM3.646 4.246a.5.5 0 000 .708c.305.304.694.526 1.146.682A4.936 4.936 0 006.4 5.9c.464 0 1.02-.062 1.608-.264.452-.156.841-.378 1.146-.682a.5.5 0 10-.708-.708c-.185.186-.445.335-.764.444a4.004 4.004 0 01-2.564 0c-.319-.11-.579-.258-.764-.444a.5.5 0 00-.708 0z"></path>
                                                        </g>
                                                    </svg>Chat ngay</div>
                                            </div>
                                            <div class="pay_product_tt">
                                                <ul class="UxzTi">
                                                    <li class="Uzxip oxiaua">
                                                        <img src="./acsset/img/product/<?php echo $row['anh_sanpham'] ?>" alt="">
                                                        <h3><?php echo $row['ten_sanpham'] ?></h3>
                                                    </li>

                                                    <li class="Uzxip">
                                                        <p><?php echo $row['phanloai'] ?></p>
                                                    </li>
                                                    <li class="Uzxip">
                                                        <p><?php echo currency_format($row['gia_sale']) ?></p>
                                                    </li>
                                                    <li class="Uzxip">
                                                        <p><?php echo $row['soluong'] ?></p>
                                                    </li>
                                                    <li class="Uzxip">
                                                        <p><?php
                                                            echo currency_format($row['thanhtien'])
                                                            ?></p>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="uw1QJu">
                                                <div class="za7qoR">
                                                    <div class="D2AHAU">
                                                        <div class="hcC4-3"><svg fill="none" viewBox="0 -2 23 22" class="shopee-svg-icon icon-voucher-line">
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
                                                            <div>Voucher của Shop</div>
                                                        </div>
                                                    </div>
                                                    <div class="zjjc32">
                                                        <div>
                                                            <div><button class="_64JAsH"><span>Chọn Voucher</span></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                            <div class="wVzdz-">
                                                <div class="OUah6W Tn7sb8">
                                                    <div class="u-JjSt"><span>Lời nhắn:</span>
                                                        <div class="nWvmL7">
                                                            <div class="eYPAFB _0HwzC1">
                                                                <div class="DBGP+r F9tXsd"><input class="c1+TQt" type="text" placeholder="Lưu ý cho Người bán..." value=""></div>
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="OUah6W Fzg+Gz">
                                                    <div class="Oa38lC">Đơn vị vận chuyển:</div>
                                                    <div class="_9HO6as">
                                                        <div>Nhanh</div>
                                                    </div>
                                                    <?php
                                                    $date = date('Y-m-d'); // Lấy ngày hiện tại
                                                    $numberOfDays = 7; // Số ngày bạn muốn thêm vào
                                                    $numberOfDay = 2; // đến ngày
                                                    $newDate = date('Y-m-d', strtotime($date . ' + ' . $numberOfDays . ' days')); // Thêm số ngày và trả về ngày mới
                                                    $newDate2 = date('Y-m-d', strtotime($newDate . ' + ' . $numberOfDay . ' days')); // ngày kế tiếp                           
                                                    ?>

                                                    <div class="GEI150"></div>
                                                    <div class="_3zds3i">Nhận hàng vào khoảng <?php echo $newDate; ?> đến <?php echo $newDate2; ?></div>
                                                    <div class="elfp9W">Thay đổi</div>
                                                    <div class="dnXfYW">₫32.700</div>
                                                </div>
                                            </div>
                                            <div class="Nivkv-">
                                                <div class="ULZMSb">
                                                    <div class="z10ZuQ">Tổng số tiền (<?php echo $row['soluong'] ?> sản phẩm):</div>
                                                    <div class="_9F3E9v"><?php
                                                                            $phi = 32000;
                                                                            $tong1 =  $row['thanhtien'] + $phi;
                                                                            echo currency_format($tong1);
                                                                            $tong += $tong1;
                                                                            $tongphi += $phi;
                                                                            ?></div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="+w8dNn">
                            <div class="At3Wkr">
                                <div class="W-XOpk">
                                    <div class="kKkbFa">
                                        <div class="jeFLq1"><svg fill="none" viewBox="0 -2 23 22" class="shopee-svg-icon icon-voucher-line">
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
                                            </svg><span class="Pd8fbQ">Shopee Voucher</span></div>
                                    </div>
                                </div>
                                <div class="_84yUzo"><button class="FPhJqC">Chọn Voucher</button></div>
                            </div>
                            <div class="a+7foE">
                                <div class="XKo7IA"><svg fill="none" viewBox="0 0 18 18" class="shopee-svg-icon _8DaKrB icon-coin-line">
                                        <path stroke="#FFA600" stroke-width="1.3" d="M17.35 9A8.35 8.35 0 11.65 9a8.35 8.35 0 0116.7 0z"></path>
                                        <path fill="#FFA600" fill-rule="evenodd" stroke="#FFA600" stroke-width=".2" d="M6.86 4.723c-.683.576-.998 1.627-.75 2.464.215.725.85 1.258 1.522 1.608.37.193.77.355 1.177.463.1.027.2.051.3.08.098.03.196.062.294.096.06.021.121.044.182.067.017.006.107.041.04.014-.07-.028.071.03.087.037.286.124.56.27.82.44.114.076.045.024.151.111a2.942 2.942 0 01.322.303c.087.093.046.042.114.146.18.275.245.478.235.8-.01.328-.14.659-.325.867-.47.53-1.232.73-1.934.696a4.727 4.727 0 01-1.487-.307c-.45-.182-.852-.462-1.242-.737-.25-.176-.643-.04-.788.197-.17.279-.044.574.207.75.753.532 1.539.946 2.474 1.098.885.144 1.731.124 2.563-.224.78-.326 1.416-.966 1.607-1.772.198-.838-.023-1.644-.61-2.29-.683-.753-1.722-1.17-2.706-1.43a4.563 4.563 0 01-.543-.183c.122.048-.044-.02-.078-.035a4.77 4.77 0 01-.422-.212c-.594-.338-.955-.722-.872-1.369.105-.816.757-1.221 1.555-1.28.808-.06 1.648.135 2.297.554.614.398 1.19-.553.58-.947-1.33-.86-3.504-1.074-4.77-.005z" clip-rule="evenodd"></path>
                                    </svg>
                                    <div class="rHlA12">Shopee Xu</div>
                                    <div class="ER+Dws">Không thể sử dụng Xu</div>
                                </div>
                                <div class="_5bMjRo">
                                    <div class="f8yTr7">[-₫0]</div><label class="stardust-checkbox stardust-checkbox--disabled"><input class="stardust-checkbox__input" type="checkbox">
                                        <div class="stardust-checkbox__box"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="DS2ZYY">
                            <div class="DQ7t9K">
                                <div class="_2qsKTk">
                                    <div class="SzEjHI zDPGhr">Phương thức thanh toán</div>
                                    <div class="KoRB7y">Thanh toán khi nhận hàng</div>
                                    <div class="FooGkf">Thay đổi</div>
                                </div>
                            </div>
                            <div class="KQyCj0">
                                <div class="Tc17Ac XIEGGF BcITa9">Tổng tiền hàng</div>
                                <div class="Tc17Ac mCEcIy BcITa9"><?php
                                                                    $tongtruphi = $tong - $tongphi;
                                                                    echo currency_format($tongtruphi)  ?></div>
                                <div class="Tc17Ac XIEGGF RY9Grr">Phí vận chuyển</div>
                                <div class="Tc17Ac mCEcIy RY9Grr"><?php echo currency_format($tongphi) ?></div>
                                <div class="Tc17Ac XIEGGF n3vdfL">Tổng thanh toán:</div>
                                <div class="Tc17Ac kC0GSn mCEcIy n3vdfL"><?php
                                                                            $tongcophi = $tongtruphi + $tongphi;
                                                                            echo currency_format($tongcophi)
                                                                            ?></div>
                                <div class="uTFqRt">
                                    <div class="k4VpYA">
                                        <div class="C-NSr-">Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo <a href="https://help.shopee.vn/portal/article/77242" target="_blank" rel="noopener noreferrer">Điều khoản Shopee</a></div>
                                    </div><input type="submit" value="Đặt hàng" name="dathang" class="stardust-button stardust-button--primary stardust-button--large apLZEG">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php
            if (isset($_POST['dathang'])) {
                foreach ($ArrayCart as $lang) {
                    $result = mysqli_query($conn, "select * FROM cart INNER JOIN product_main ON product_main.ma_sanpham=cart.ma_sanpham INNER JOIN product ON product.ma_sanpham=cart.ma_sanpham WHERE cart.addcart='$lang' and cart.username='$user'");
                    while ($row = mysqli_fetch_array($result)) {
                        $madonhang=$row['addcart'];
                        $masp = $row['ma_sanpham'];
                        $phanloai = $row['phanloai'];
                        $sl = $row['soluong'];
                        $thanhtien = $row['thanhtien'];
                        $phi = 32000;
                        $tong = 0;
                        $tong = $thanhtien + $phi;
                        $oder = uniqid();
                    }
                    $sqlod = "insert into oder values('$oder','$user','$masp','$phanloai','$sl','$tong','Đơn hàng đã được đặt')";
                    $result = mysqli_query($conn, $sqlod);
                    $sqdele = "delete  from cart where addcart='$madonhang'";
                    $result1 = mysqli_query($conn, $sqdele);
                    echo '<script language="javascript"> alert("Các đơn hàng đặt thành công, sản phẩm sẽ được xóa trong giỏ hàng !");</script>';
                    echo '<script language="javascript"> alert("Đơn hàng đã được đặt , đang chờ được xác nhận !");window.location="home.php"</script>';
                }
            }
            ?>
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
                <a class="chat_mini_content-icon-a">Chat</a>
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

</html>