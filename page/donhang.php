<?php
include_once("ketnoi.php");
$user = $user['username'];
?>
<style>
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
        height: 2px;
        border-radius: 5px;
        background-color: #ee4d2d;
        transition: all 0.2s ease;
    }

    .tab-item {
        min-width: 80px;
        padding: 10px 28px;
        font-size: 16px;
        text-align: center;
        color: black;
        background-color: #fffbf8;
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
        border-bottom: 2px solid transparent;
        opacity: 0.6;
        cursor: pointer;
        transition: all 0.5s ease;
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

    .bill-search {
        width: 100%;
        height: 50px;
        background: rgba(241, 219, 219, 0.2);
    }

    .bill-search form {
        width: 60%;
        right: 0;
        margin: auto;
    }

    .bill-search form input[type="search"] {
        border: none;
        outline: none;
        font-size: 16px;
        width: 100%;
        position: relative;
    }

    .bill-search form input[type="submit"] {
        position: absolute;
        background: #fff;
        right: 0;
        top: 0;
        color: black;
        font-size: 16px;
        font-weight: bold;
        margin: 0;
        border-left: 1px solid rgba(0, 0, 0, 0.1);
        height: 40px;
    }

    .bill_ooXtc {
        display: flex;
        justify-content: space-between;
    }

    .bill_Yuia {
        display: flex;
        height: 40px;
        align-items: center;
    }

    .bill_lazoa p {
        background: #FA5430;
        font-size: 12px;
        margin: 0;
        padding: 1px;
        color: white;
        margin-right: 5px;
    }

    .bill_opapzo p {
        font-size: 14px;
        margin: 0;
        font-weight: bold;
        margin-right: 5px;
    }

    .bill__iaozo button {
        height: 24px;
        width: 70px;
        margin-right: 5px;
    }

    .bill__iaozo button svg {
        width: 10px;
        fill: wheat;
        margin-right: 5px;
    }

    .bill_alozo button svg {
        width: 10px;
        fill: rgba(0, 0, 0, 0.8);
        margin-right: 5px;
    }

    .bill_alozo button {
        width: 75px;
        height: 25px;
        background: white;
        color: rgba(0, 0, 0, 0.8);
        border: 1px solid rgba(0, 0, 0, 0.3);
    }

    .bill-list {
        padding: 10px;
    }

    .bill_oXyt {
        display: flex;
        margin-right: 5px;
    }

    .bill_aloza a {
        color: #63C2B5 !important;
        font-size: 16px;
        margin-right: 5px;
        border-right: 1px solid rgba(0, 0, 0, 0.3);
        padding-right: 5px;
    }

    .bill_oaiza span {
        color: red;
        font-size: 16px;
    }

    .bill_aloza a svg {
        width: 10px;
    }

    .bill__oapza {
        display: flex;
        margin-top: 20px;
    }

    .bill__oapaza img {
        width: 70px;
        margin-left: 20px;
    }

    .bill__oaizr {
        width: 80%;
    }

    .zloaaz p {
        font-size: 16px;
        width:80%;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 25px;
        -webkit-line-clamp: 1;
        height: 30px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }

    .pzoeaz p {
        color: rgba(0, 0, 0, 0.5);
        font-size: 12px;
    }

    .lzpaiz {
        display: flex;
        height: 20px;
        font-size: 16px;
    }

    .lzpaiz p {
        color: red;
    }

    .bll_akizk {
        border-bottom: 1px solid rgba(0, 0, 0, 0.3);
    }

    .bill_oapzoq {
        display: flex;
        float: right;
        margin-top: 10px;
    }

    .bill_aloa {
        margin-right: 5px;
    }

    .bill-akzua {
        font-size: 14px;
    }

    .bill_aoizaw {
        font-size: 16px;
        color: red;
    }

    .bill_aoizaw sup {
        margin: 0 5px;
    }

    .bill__alozaz {
        width: 100%;
        height: 50px;
    }

    .bill__alpaoz {
        display: flex;
        justify-content: space-between;
    }

    .bill__paozia {
        display: flex;
    }

    .bill_alzoaiq {
        width: 50%;
        font-size: 12px;
    }

    .bill_Xnai1a button,
    .bill_Xnaizu button {
        margin-right: 5px;
        width: 150px;
    }

    .bill_Xnai1a button {
        background: white;
        color: black;
        border: 1px solid rgba(0, 0, 0, 0.3);
    }
</style>
<div class="bill">
    <div class="bill-main">
        <div class="bill__tt">
            <div class="tabs">
                <div class="tab-item active">
                    <p>Tất cả</p>
                </div>
                <div class="tab-item">
                    <p>Chờ thanh toán</p>
                </div>
                <div class="tab-item">
                    <p>Vận chuyển</p>
                </div>
                <div class="tab-item">
                    <p>Đang giao</p>
                </div>
                <div class="tab-item">
                    <p>Hoàn thành</p>
                </div>
                <div class="tab-item">
                    <p>Đã hủy/Hoàn tiền</p>
                </div>
                <div class="tab-item">
                    <p>Đánh giá</p>
                </div>
                <div class="line"></div>
            </div>
        </div>
        <div class="bill-search">
            <form action="" method="post">
                <input type="search" placeholder="Nhập đơn hàng theo mã đơn hàng cần tìm kiếm ?" name="search">
                <input type="submit" value="Tìm kiếm" name="submit">
            </form>
        </div>
        <div class="bill-content">
            <div class="tab-pane active">
                <?php
                $result = mysqli_query($conn, "select * FROM `oder` INNER JOIN product on oder.ma_sanpham=product.ma_sanpham INNER JOIN product_main ON product.ma_sanpham=product_main.ma_sanpham WHERE username='$user'");
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="bill-list">
                        <ul class="bill_MoXk">
                            <li class="bill_ApErt">
                                <ul class="bill_ooXtc">
                                    <li class="bill_qazxr">
                                        <ul class="bill_Yuia">
                                            <li class="bill_Yzxer bill_lazoa">
                                                <p>Yêu thích +</p>
                                            </li>
                                            <li class="bill_Yzxer bill_opapzo">
                                                <p>NameShop</p>
                                            </li>
                                            <li class="bill_Yzxer bill__iaozo"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path d="M160 368c26.5 0 48 21.5 48 48v16l72.5-54.4c8.3-6.2 18.4-9.6 28.8-9.6H448c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16V352c0 8.8 7.2 16 16 16h96zm48 124l-.2 .2-5.1 3.8-17.1 12.8c-4.8 3.6-11.3 4.2-16.8 1.5s-8.8-8.2-8.8-14.3V474.7v-6.4V468v-4V416H112 64c-35.3 0-64-28.7-64-64V64C0 28.7 28.7 0 64 0H448c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H309.3L208 492z" />
                                                    </svg>Chat</button></li>
                                            <li class="bill_Yzxer bill_alozo"><button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path d="M547.6 103.8L490.3 13.1C485.2 5 476.1 0 466.4 0H109.6C99.9 0 90.8 5 85.7 13.1L28.3 103.8c-29.6 46.8-3.4 111.9 51.9 119.4c4 .5 8.1 .8 12.1 .8c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.2 0 49.3-11.4 65.2-29c16 17.6 39.1 29 65.2 29c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4zM499.7 254.9l-.1 0c-5.3 .7-10.7 1.1-16.2 1.1c-12.4 0-24.3-1.9-35.4-5.3V384H128V250.6c-11.2 3.5-23.2 5.4-35.6 5.4c-5.5 0-11-.4-16.3-1.1l-.1 0c-4.1-.6-8.1-1.3-12-2.3V384v64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V384 252.6c-4 1-8 1.8-12.3 2.3z" />
                                                    </svg>Xem Shop</button></li>
                                        </ul>
                                    </li>
                                    <li class="bill_qazxr">
                                        <ul class="bill_oXyt">
                                            <li class="bill_TxYor bill_aloza"><a href=""><?php echo $row['trangthai']; ?></a></li>
                                            <li class="bill_TxYor bill_oaiza"><span>Đang giao</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="bill_ApErt bll_akizk">
                                <ul class="bill__oapza">
                                    <li class="bill__pazoa bill__oapaza">
                                        <img src="./acsset/img/product/product_main/9.jpg">
                                    </li>
                                    <li class="bill__pazoa bill__oaizr">
                                        <ul class="bil__aozoai">
                                            <li class="bill__alzoaq zloaaz">
                                                <p><?php echo $row['ten_sanpham']; ?></p>
                                            </li>
                                            <li class="bill__alzoaq pzoeaz">
                                                <p>Phân loại hàng :<?php echo $row['phanloai']; ?></p>
                                            </li>
                                            <li class="bill__alzoaq alzoai">
                                                <p>x<?php echo $row['soluong']; ?></p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="bill__pazoa lzpaiz"><sup>đ</sup>
                                        <p><?php
                                            $gia = $row['gia_sale'];
                                            $sl = $row['soluong'];
                                            $tong = $gia * $sl;
                                            echo $tong; ?></p>
                                    </li>
                                </ul>
                            </li>
                            <li class="bill_ApErt bill__alozaz">
                                <div class="bill_oapzoq">
                                    <div class="bill_aloa"><svg width="16" height="17" viewBox="0 0 253 263" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M126.5 0.389801C126.5 0.389801 82.61 27.8998 5.75 26.8598C5.08763 26.8507 4.43006 26.9733 3.81548 27.2205C3.20091 27.4677 2.64159 27.8346 2.17 28.2998C1.69998 28.7657 1.32713 29.3203 1.07307 29.9314C0.819019 30.5425 0.688805 31.198 0.689995 31.8598V106.97C0.687073 131.07 6.77532 154.78 18.3892 175.898C30.003 197.015 46.7657 214.855 67.12 227.76L118.47 260.28C120.872 261.802 123.657 262.61 126.5 262.61C129.343 262.61 132.128 261.802 134.53 260.28L185.88 227.73C206.234 214.825 222.997 196.985 234.611 175.868C246.225 154.75 252.313 131.04 252.31 106.94V31.8598C252.31 31.1973 252.178 30.5414 251.922 29.9303C251.667 29.3191 251.292 28.7649 250.82 28.2998C250.35 27.8358 249.792 27.4696 249.179 27.2225C248.566 26.9753 247.911 26.852 247.25 26.8598C170.39 27.8998 126.5 0.389801 126.5 0.389801Z" fill="#ee4d2d"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M207.7 149.66L119.61 107.03C116.386 105.472 113.914 102.697 112.736 99.3154C111.558 95.9342 111.772 92.2235 113.33 88.9998C114.888 85.7761 117.663 83.3034 121.044 82.1257C124.426 80.948 128.136 81.1617 131.36 82.7198L215.43 123.38C215.7 120.38 215.85 117.38 215.85 114.31V61.0298C215.848 60.5592 215.753 60.0936 215.57 59.6598C215.393 59.2232 215.128 58.8281 214.79 58.4998C214.457 58.1705 214.063 57.909 213.63 57.7298C213.194 57.5576 212.729 57.4727 212.26 57.4798C157.69 58.2298 126.5 38.6798 126.5 38.6798C126.5 38.6798 95.31 58.2298 40.71 57.4798C40.2401 57.4732 39.7735 57.5602 39.3376 57.7357C38.9017 57.9113 38.5051 58.1719 38.1709 58.5023C37.8367 58.8328 37.5717 59.2264 37.3913 59.6604C37.2108 60.0943 37.1186 60.5599 37.12 61.0298V108.03L118.84 147.57C121.591 148.902 123.808 151.128 125.129 153.884C126.45 156.64 126.797 159.762 126.113 162.741C125.429 165.72 123.755 168.378 121.363 170.282C118.972 172.185 116.006 173.221 112.95 173.22C110.919 173.221 108.915 172.76 107.09 171.87L40.24 139.48C46.6407 164.573 62.3785 186.277 84.24 200.16L124.49 225.7C125.061 226.053 125.719 226.24 126.39 226.24C127.061 226.24 127.719 226.053 128.29 225.7L168.57 200.16C187.187 188.399 201.464 170.892 209.24 150.29C208.715 150.11 208.2 149.9 207.7 149.66Z" fill="#fff"></path>
                                        </svg></div>
                                    <div class="bill-akzua">Thành tiền :</div>
                                    <div class="bill_aoizaw"><sup>đ</sup><?php echo $row['thanhtien']; ?></div>
                                </div>
                            </li>
                            <li class="bill_ApErt bill__alozia">
                                <ul class="bill__alpaoz">
                                    <li class="bill__alpozoai bill_alzoaiq">
                                        <p>Vui lòng chỉ nhấn "Đã nhận được hàng" khi đơn hàng đã được giao đến bạn và sản phẩm nhận được không có vấn đề nào.</p>
                                    </li>
                                    <li class="bill__alpozoai">
                                        <ul class="bill__paozia">
                                            <?php
                                            if($row['trangthai']="Đơn hàng đã được đặt")
                                            {?>
                                                 <li class="bill__atzrqz bill_Xnaizu"></li>
                                            <?php
                                            } else if($row['trangthai']="Đơn hàng đang giao đến bạn") {
                                            ?>
                                            <li class="bill__atzrqz bill_Xnaizu"><button>Đã Nhận Hàng</button></li>
                                            <?php } ?>
                                            <li class="bill__atzrqz bill_Xnai1a"><button>Liên Hệ Người Bán</button></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
            <div class="tab-pane">2</div>
            <div class="tab-pane">3</div>
            <div class="tab-pane">4</div>
            <div class="tab-pane">5</div>
            <div class="tab-pane">6</div>
            <div class="tab-pane">7</div>
        </div>
    </div>
</div>
<script>
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
</script>