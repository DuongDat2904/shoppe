<?php
include_once("ketnoi.php");
/**
 *
 * Chuyển đổi chuỗi kí tự thành dạng slug dùng cho việc tạo friendly url.
 *
 * @access    public
 * @param    string
 * @return    string
 */
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = '') {
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
    <title>Shopee Việt Nam | Mua và Bán Trên Ứng Dụng Di Động Hoặc Website</title>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<body>
    <div class="web">
        <header>
            <div class="header">
                <div class="header_app">
                    <div class="header_app-left">
                        <ul class="header_app-left-ul">
                            <li class="header_app-left-li"><a  class="flex _2TLLZP ZUq1cc error">Kênh người bán</a>
                            </li>
                            <li class="header_app-left-li"><a class="error">Trở thành người bàn Shopee</a></li>
                            <li class="header_app-left-li header_app-left-li-lv1"><a href="" class="_2TLLZP error">Tải ứng
                                    dụng</a>
                                <ul class="header_app-QR">
                                    <li class="header_app-QR-li">
                                        <div class="header_app-QR-img">
                                            <a >
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
                                            <a href="./login.php">Đăng nhập</a>
                                        </div>
                                        <div class="header_right-lv2-DN">
                                            <a href="./register-dki.php">Đăng kí</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="header_ringht_login-li">
                                <a class="error">
                                    <svg height="16" viewBox="0 0 16 16" width="16" class="shopee-svg-icon icon-help-center">
                                        <g fill="none" fill-rule="evenodd" transform="translate(1)">
                                            <circle cx="7" cy="8" r="7" stroke="currentColor"></circle>
                                            <path fill="currentColor" d="m6.871 3.992c-.814 0-1.452.231-1.914.704-.462.462-.693 1.089-.693 1.892h1.155c0-.484.099-.858.297-1.122.22-.319.583-.473 1.078-.473.396 0 .715.11.935.33.209.22.319.517.319.902 0 .286-.11.55-.308.803l-.187.209c-.682.605-1.1 1.056-1.243 1.364-.154.286-.22.638-.22 1.045v.187h1.177v-.187c0-.264.055-.506.176-.726.099-.198.253-.396.462-.572.517-.451.825-.737.924-.858.275-.352.418-.803.418-1.342 0-.66-.22-1.188-.66-1.573-.44-.396-1.012-.583-1.716-.583zm-.198 6.435c-.22 0-.418.066-.572.22-.154.143-.231.33-.231.561 0 .22.077.407.231.561s.352.231.572.231.418-.077.572-.22c.154-.154.242-.341.242-.572s-.077-.418-.231-.561c-.154-.154-.352-.22-.583-.22z">
                                            </path>
                                        </g>
                                    </svg> Hỗ trợ</a>
                            </li>
                            <li class="header_ringht_login-li"><a class="error"><svg padding-right="5px" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.00065 14.6667C11.6825 14.6667 14.6673 11.6819 14.6673 8.00004C14.6673 4.31814 11.6825 1.33337 8.00065 1.33337C4.31875 1.33337 1.33398 4.31814 1.33398 8.00004C1.33398 11.6819 4.31875 14.6667 8.00065 14.6667Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M5.33464 8.00004C5.33464 11.6819 6.52854 14.6667 8.0013 14.6667C9.47406 14.6667 10.668 11.6819 10.668 8.00004C10.668 4.31814 9.47406 1.33337 8.0013 1.33337C6.52854 1.33337 5.33464 4.31814 5.33464 8.00004Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1.33398 8H14.6673" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>Tiếng Việt
                                    <svg padding-right="5px" viewBox="0 0 12 12" fill="none" width="12" height="12" color="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 8.146L11.146 3l.707.707-5.146 5.147a1 1 0 01-1.414 0L.146 3.707.854 3 6 8.146z" fill="currentColor"></path>
                                    </svg>
                                </a></li>
                            <li class="header_ringht_login-li register"><a href="./register-dki.php">Đăng kí</a></li>
                            <li class="header_ringht_login-li login"><a href="./login.php">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header_search">
                    <div class="header_logo_big">
                        <a href=""><img src="./acsset/img/img-logo/logo-full-white.png" alt=""></a>
                    </div>
                    <div class="header_search_tk">
                        <form action="" method="post">
                            <div class="header_search-label"><input type="text" name="" id="" placeholder="Đăng ký và nhận voucher bạn mới đến 70k!" size="24px"></div>
                            <div class="header_search-button"><button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button></div>
                        </form>
                    </div>
                    <div class="header_search_cart">
                        <a href="" class="header_search_cart-a">
                            <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                        </a>

                        <div class="_1EQVMQ">
                            <div class="HLWGuL">
                                <div class="dib9cf"></div>
                                <div class="JphfXQ">Chưa có sản phẩm</div>
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
        <div class="content">
            <div class="content_web1-main">
                <div class="content_web1">
                    <div class="content_web1-kmai">
                        <div class="content_web1-left">
                            <div class="content_web1-left-sline">
                                <div id="carouselExample" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./acsset/img/khuyen-mai/sline1.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <?php
                                        $result = mysqli_query($conn, "Select * from sliner_show where vitri='1' and anh_sline!='sline1.jpg'");
                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                            <div class="carousel-item">
                                                <img src="./acsset/img/khuyen-mai/<?php echo $row['anh_sline'] ?>" class="d-block w-100" alt="...">
                                            </div>
                                        <?php } ?>

                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="content_web1_right">
                            <div class="content_web1_right-img1"><img src="./acsset/img/khuyen-mai/right1.jpg" alt="">
                            </div>
                            <div class="content_web1_right-img2"><img src="./acsset/img/khuyen-mai/right2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="content_web1_list-cn">
                        <ul class="content_web_list-ul">
                            <?php
                            $result = mysqli_query($conn, "Select * from function ");
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <li class="content_web1_list-li">
                                    <a href="">
                                        <div class="content_web1-li-img"><img src="./acsset/img/logo-list/<?php echo $row['AnhCN'] ?>" alt="">
                                        </div>
                                        <div class="content_web_li-ND"><a href=""><?php echo $row['TenCN'] ?></a></div>

                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content_web2">
                <div class="content_web2-category">
                    <div class="content_web2-category-label">
                        <h2>DANH MỤC</h2>
                    </div>
                    <div class="content_web2-category-CT">
                        <div class="content_web2-category-main sliner">
                            <ul class="content_image_item-list sliner-main">
                                <?php
                                $result = mysqli_query($conn, "Select * from category");
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <li class="content_image_item-li sliner-item">
                                        <div class="home_list-group">
                                            <?php if ($row['Hang'] == 1) { ?>
                                                <div class="home_image_item-li-grid">
                                                    <a href="" class="home_image_item-CT">
                                                        <img src="./acsset/img/logo-list2/<?php echo $row['AnhDanhMuc'] ?>" alt="">
                                                        <p><?php echo $row['TenDanhMuc'] ?></p>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                            <ul class="content_image_item-list sliner-main">
                                <?php
                                $result = mysqli_query($conn, "Select * from category");
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <li class="content_image_item-li sliner-item">
                                        <div class="home_list-group">
                                            <?php if ($row['Hang'] == 2) { ?>
                                                <div class="home_image_item-li-grid">
                                                    <a href="" class="home_image_item-CT">
                                                        <img src="./acsset/img/logo-list2/<?php echo $row['AnhDanhMuc'] ?>" alt="">
                                                        <p><?php echo $row['TenDanhMuc'] ?></p>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content_web2_CTZ">
                    <div class="content_web2_button-left ">
                        <button class="content_web2_button sliner-pve"><i class="fa-solid fa-angle-left"></i></button>
                    </div>
                    <div class="content_web2_button-right ">
                        <button class="content_web2_button sliner-next"><i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="content_web3">
                <div class="content_web3_sale">
                    <div class="content_web3_sale_header">
                        <div class="content_web3_sale_header-main">
                            <div class="content_web3_sale_img">
                                <img src="./acsset/img/sale/logo.png" alt="">
                            </div>
                            <div class="content_web3_sale_countdow">
                                <div data-role="countdown" data-days="1" data-hours="1" data-minutes="60" data-seconds="0"></div>
                            </div>
                        </div>
                        <div class="content_web3_sale_section">
                            <a href="">Xem tất cả <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="content_web3_sale-main">
                        <div class="image_content_web3_sale">
                            <div class="image_content_web3_sale-wraper sliner1">
                                <ul class="image_content_web3_sale-list sliner-main1">
                                    <?php
                                    $result = mysqli_query($conn, "Select * from product INNER JOIN product_sale ON product.ma_sanpham=product_sale.ma_sanpham");
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <li class="image_content_web3_sale-item sliner-item1" onclick="launch_toast()">
                                            <div class="content_web3_item">
                                                <a class="content_web3_item-a">
                                                    <div class="content_web3_item-img">
                                                        <div class="content_web3_item-imgsale">
                                                            <div class="item_item-imgsale">
                                                                <span class="giamgia"><?php echo $row['phantram_sale'] ?></span>
                                                                <span class="giam">Giảm</span>
                                                            </div>
                                                        </div>
                                                        <div class="content_web3_item-imagsale-main">
                                                            <a>
                                                                <img style="" src="./acsset/img/sale/<?php echo $row['anh_sanpham'] ?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="content_web3_item-imgsale-logo">
                                                            <a>
                                                                <img src="./acsset/img/sale/logosale.png" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="content_web3-item-ND">
                                                        <div class="content_web3-item-ND-main">
                                                            <div class="content_web3-ND-P">
                                                                <div class="content__web3-ND-p-main">
                                                                    <p><sup>đ </sup><?php echo $row['gia_sale'] ?></p>
                                                                </div>
                                                            </div>
                                                            <?php if ($row['sldaban'] >= 20) { ?>
                                                                <div class="content_web3_ND-gia">
                                                                    <div class="RX2Jch RJ6Vpu"></div>
                                                                    <div class="content_web3_ND-gia1">
                                                                        <p>Đang bán chạy</p>
                                                                    </div>
                                                                    <div class="content_web3_ND-gia2 sale-hot2"></div>
                                                                    <div class="content_web3_ND-gia3"></div>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="content_web3_ND-gia">
                                                                    <div class="RX2Jch RJ6Vpu"></div>
                                                                    <div class="content_web3_ND-gia1">
                                                                        <p>Đã bán <?php echo $row['sldaban'] ?></p>
                                                                    </div>
                                                                    <div class="content_web3_ND-gia2 "></div>
                                                                    <div class="content_web3_ND-gia3"></div>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content_web3-button">
                        <div class="content_web3-button-pve "><button class="sliner-pve1" style="display: none;"><i class="fa-solid fa-angle-left"></i></button></div>
                        <div class="content_web3-button-next "><button class="sliner-next1"><i class="fa-solid fa-angle-right"></i></button></div>
                    </div>
                </div>
            </div>
            <div class="content_web4">
                <div class="content_web4_main">
                    <div class="content_web4_main-list">
                        <div class="content_web4_main-item" style="margin-right: 0;">
                            <a href="">
                                <img src="./acsset/img/list3/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="content_web4_main-item" style="margin-right: 0;">
                            <a href="">
                                <img src="./acsset/img/list3/2.jpg" alt="">
                            </a>
                        </div>
                        <div class="content_web4_main-item">
                            <a href="">
                                <img src="./acsset/img/list3/3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_web5">
                <div class="content_web5_main">
                    <div class="content_web5_header">
                        <div class="web5_header_main">
                            <ul class="web5_header_main_list">
                                <li class="web5_header_main_item shoppmail">
                                    <a href="">SHOPPEE MAIL</a>
                                </li>
                                <li class="web5_header_main_item">
                                    <img src="./acsset/img/content-web5/1.png" alt=""> 7 ngày miễn phí trả hàng
                                </li>
                                <li class="web5_header_main_item">
                                    <img src="./acsset/img/content-web5/2.png" alt=""> Hàng Chính Hãng 100%
                                </li>
                                <li class="web5_header_main_item">
                                    <img src="./acsset/img/content-web5/3.png" alt=""> Miễn phí vận chuyển
                                </li>
                            </ul>
                        </div>
                        <div class="web5_header_CT">
                            <a href="">Xem Tất Cả<i class="fa-solid fa-circle-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content_web5_main_sline">
                        <div class="content_web5_main_sline-left">
                            <div class="web5_main_sline sliner3 error">
                                <ul class="web5_main_sline-list sliner-main3">
                                    <li class="web5_main_sline-item sliner-item3">
                                        <div class="web5_main_sline_CT">
                                            <a><img src="./acsset/img/content-web5/sline5/1.jpg" alt=""></a>
                                        </div>
                                    </li>
                                    <?php
                                    $result = mysqli_query($conn, "Select * from sliner_show where vitri='2' and anh_sline!='1.jpg'");
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <li class="web5_main_sline-item sliner-item3 error" >
                                            <div class="web5_main_sline_CT">
                                                <a><img src="./acsset/img/content-web5/sline5/<?php echo $row['anh_sline'] ?>" alt=""></a>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="web5_main_sline-button">
                                <div class="web5_main_sline-button-pov"><button class="sliner-pve3"><i class="fa-solid fa-angle-left "></i></button></div>
                                <div class="web5_main_sline-button-next "><button class="sliner-next3"><i class="fa-solid fa-angle-right"></i></button></div>
                            </div>
                            <div class="web5_main_button-dot">
                                <ul class="web5_main_dot-ul">
                                    <li class="web5_main_dot-li check "></li>
                                    <li class="web5_main_dot-li "></li>
                                    <li class="web5_main_dot-li "></li>
                                    <li class="web5_main_dot-li "></li>
                                    <li class="web5_main_dot-li "></li>
                                    <li class="web5_main_dot-li "></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content_web5_main_sline-right sliner5">
                            <div class="web__main_sline_CT ">
                                <ul class="web5__main_sline-list sliner-main5 error" >
                                    <li class="web5__main_sline-item ">
                                        <div class="web5__main_item-group">
                                            <div class="web5__main_grid">
                                                <a class="web5__main_grid_item">
                                                    <img src="./acsset/img/web5-right/1.png" alt="">
                                                    <p>Ưu đãi đến 40%</p>
                                                </a>
                                            </div>
                                            <div class="web5__main_grid">
                                                <a class="web5__main_grid_item">
                                                    <img src="./acsset/img/web5-right/1-1.png" alt="">
                                                    <p>Mua là có quà</p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="web5__main_sline-item">
                                        <div class="web5__main_item-group">
                                            <div class="web5__main_grid">
                                                <a class="web5__main_grid_item">
                                                    <img src="./acsset/img/web5-right/2.png" alt="">
                                                    <p>mua 2 tặng 1</p>
                                                </a>
                                            </div>
                                            <div class="web5__main_grid">
                                                <a class="web5__main_grid_item">
                                                    <img src="./acsset/img/web5-right/2-2.png" alt="">
                                                    <p>sale chào hè 50%</p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="web5__main_sline-item">
                                        <div class="web5__main_item-group">
                                            <div class="web5__main_grid">
                                                <a class="web5__main_grid_item">
                                                    <img src="./acsset/img/web5-right/3.png" alt="">
                                                    <p>ưu đãi đến 50%</p>
                                                </a>
                                            </div>
                                            <div class="web5__main_grid">
                                                <a class="web5__main_grid_item">
                                                    <img src="./acsset/img/web5-right/3-3.png" alt="">
                                                    <p>siêu ưu đãi độc ...</p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="web5__main_sline-item">
                                        <div class="web5__main_item-group">
                                            <div class="web5__main_grid">
                                                <a class="web5__main_grid_item">
                                                    <img src="./acsset/img/web5-right/4.png" alt="">
                                                    <p>colagen da khỏe ...</p>
                                                </a>
                                            </div>
                                            <div class="web5__main_grid">
                                                <a class="web5__main_grid_item">
                                                    <img src="./acsset/img/web5-right/4-4.png" alt="">
                                                    <p>voucher 1 triệu</p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="web5__main_sline-item">
                                        <div class="web5__main_item-group">
                                            <div class="web5__main_grid">
                                                <a class="web5__main_grid_item">
                                                    <img src="./acsset/img/web5-right/5.png" alt="">
                                                    <p> nội y saliba</p>
                                                </a>
                                            </div>
                                            <div class="web5__main_grid">
                                                <a class="web5__main_grid_item">
                                                    <img src="./acsset/img/web5-right/5-5.png" alt="">
                                                    <p>điện thoại sale ...</p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="web5__main_sline-item">
                                        <div class="web5__main_item-group">
                                            <div class="web5__main_grid">
                                                <a class="web5__main_grid_item">
                                                    <img src="./acsset/img/web5-right/6.png" alt="">
                                                    <p> điện thoại sale ...</p>
                                                </a>
                                            </div>
                                            <div class="web5__main_grid">
                                                <a class="web5__main_grid_item">
                                                    <img src="./acsset/img/web5-right/6-6.png" alt="">
                                                    <p>điện thoại sale ...</p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <div class="web5__right_btn-pve ">
                                    <button class="sliner-pve5" style="display: none;">
                                        <i class="fa-solid fa-angle-left "></i>
                                    </button>
                                </div>
                                <div class="web5__right_btn-next">
                                    <button class="sliner-next5">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="content__web6">
                <div class="content__web6_main">
                    <div class="content__web6_main_CT">
                        <div class="content__web6_main_CT-list">
                            <ul class="web6__main__CT-list">
                                <li class="web6__main__CT-item">
                                    <p>tìm kiếm hàng đầu</p>
                                </li>
                                <li class="web6__main__CT-item">
                                    <a href="">xem tất cả <i class="fa-solid fa-circle-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content__web6_sline sliner6">
                        <ul class="content__web6_sline-list sliner-main6">
                            <?php
                            $result = mysqli_query($conn, "Select * from search_top");
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <li class="content__web6_sline-item sliner-item6">
                                    <div class="content__web6-item">
                                        <a href="">
                                            <div class="uVbGLf od+H03 li78LN"></div>
                                            <div class="content__web6-item-img">
                                                <img src="./acsset/img/web6-sline/<?php echo $row['anh_search'] ?>" alt="">
                                            </div>
                                            <div class="pDTGqb">Bán <?php echo $row['sldaban'] ?>/ tháng</div>
                                            <div class="content__web6-item-pra">
                                                <p><?php echo $row['ten_search'] ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="content__web6_btn-main">
                        <div class="web6__right_btn-pve ">
                            <button class="sliner-pve6" style="display: none;">
                                <i class="fa-solid fa-angle-left "></i>
                            </button>
                        </div>
                        <div class="web6__right_btn-next">
                            <button class="sliner-next6">
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content__web7">
                <div class="content__web7-TD">
                    <p>gợi ý hôm nay</p>
                </div>
                <div class="content__web7_main">
                    <div class="content__web7_wrap">
                        <?php
                        $result = mysqli_query($conn, "Select * from product_show ");
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <div class="content__web7_item error" >
                                <a>
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
                                                <div class="_8pWXgw d6Ui7v"><span class="PBXD50">₫</span><span class="_0pAnxm"><?php echo currency_format($row['gia_ban']) ?></span></div>
                                                <div class="Xpegl0 _4BRSeN">Đã bán <?php echo $row['sl_ban'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="shopee-item-card__hover-footer mwNFPv">Tìm sản phẩm tương tự</div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="CTYAuL">
                        <a class="btn btn-light btn--m btn--inline btn-light--link _23OYGN error" data-testid="btn_light" >Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <?php 
       include("footer.php");
       ?>
    </div>
    <div id="myModal" class="modal sliner4">
        <div class="modal__overlay ">
            <div class="modal_body ">
                <div class="modal__inner sliner__open">
                    <a href="">
                        <img class="modal__inner-img" src="./acsset/img/open-img/2.png" alt="">
                    </a>
                </div>
                <div class="modal__inner-btn">
                    <div class="modal__inner-btn-main button-close">
                        <i class="fa-sharp fa-solid fa-xmark"></i>
                    </div>
                </div>
            </div>
        </div>
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
        <div id="desc">Đăng nhập để tiếp tục</div>
    </div>
</body>
<script src="./acsset/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./acsset/Css/main.js"></script>
<script src="https://cdn.korzh.com/metroui/v4.5.1/js/metro.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    //chống click chuột phải

var message = "NoRightClicking";

function defeatIE() {
    if (document.all) {
        (message);
        return false;
    }
}

function defeatNS(e) {
    if (document.layers || (document.getElementById && !document.all)) {
        if (e.which == 2 || e.which == 3) {
            (message);
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = defeatNS;
} else {
    document.onmouseup = defeatNS;
    document.oncontextmenu = defeatIE;
}
document.oncontextmenu = new Function("return false")

// chống ctrl + U
document.onkeydown = function(e) {
    if (e.ctrlKey &&
        (e.keyCode === 67 ||
            e.keyCode === 86 ||
            e.keyCode === 85 ||
            e.keyCode === 117)) {
        return false;
    } else {
        return true;
    }
};
$(document).keypress("u", function(e) {
    if (e.ctrlKey) {
        return false;
    } else {
        return true;
    }
});


$(document).on('click', '.error', function(e) {
        swal(
            'Error!',
            '<b style="color:red;">Đăng nhập để tiếp tục thao tác</b> !',
            'error'
        )
    });
</script>

</html>