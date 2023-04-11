<?php
include_once("ketnoi.php");
session_start();
$user = [];
$user = (isset($_SESSION["user"])) ? $_SESSION["user"] : [];
// $user=$_SESSION["user"];
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
    <style>
        header {
            background: linear-gradient(-180deg, #f53d2d, #f63);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .product_main {
            margin-top: 180px;
            margin-bottom: 120px;
        }

        .product_tt-p::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 1px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
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
</head>

<body>
    <div class="product">
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
        <div class="product_main">
            <div class="content__web7">
                <div class="product_tt">
                    <div class="product_tt-p">
                        <p>tất cả</p>
                    </div>
                </div>
                <div class="content__web7_main">
                    <div class="content__web7_wrap">
                        <?php
                        $result = mysqli_query($conn, "Select * from product");
                        while ($row = mysqli_fetch_array($result)) {

                        ?>
                            <div class="content__web7_item">
                            <?php echo "<a href=Detail_product.php?ma=".$row['ma_sanpham']." >";?>
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