<?php
include_once("ketnoi.php");
$user1 = $user['username'];
?>
<style>
    ul,
    li {
        margin: 0;
        padding: 0;
    }

    .bank,
    .bank_main,
    .bank_main_visa,
    .bank_visa_top,
    .bank_main_often,
    .bank_visa_btn {
        width: 100%;
    }

    .visa_top {
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    ul.visa_top {
        display: flex;
        justify-content: space-between;
        height: 60px;
        line-height: 60px;
        margin: 0 30px;
    }

    .visa_top_li p {
        font-size: 18px;
    }

    .visa_top_button {
        width: 150px;
        font-size: 16px;
    }

    .bank_visa_btn form {
        width: 100%;
        height: auto;
        right: 0;
    }

    .visa_btn_main,
    .visa_btn_main1,
    .visa_nut {
        display: flex;
    }

    .visa_btn_main {
        justify-content: space-between;
        height: 120px;
        line-height: 120px;
        margin: 0 30px;
    }

    input[type="submit"] {
        top: 0;
    }

    .visa_button_main-img {
        margin-right: 20px;
    }

    .visa_button_main-img img {
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .visa_namecard {
        font-size: 16px;
        margin-right: 20px;
    }

    .visa_card-md p {
        color: var(--color-red);
        width: 60px;
        font-size: 14px;
    }

    .visa_number p {
        font-size: 14px;
    }

    .visa-dlt input[type="submit"] {
        background: white;
        font-weight: bold !important;
        font-size: 14px;
        margin-right: 20px;
    }

    .visa-dlt-tl input[type="submit"] {
        font-size: 14px;
        color: var(--color-black);
        font-weight: bold !important;
        background: var(--color-white);
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .bank_often {
        margin-top: 30px;
    }

    .bank_often_btny form {
        right: 0;
    }

    ul.often_top {
        display: flex;
        justify-content: space-between;
        margin: 0 30px;
    }

    .bank_often_top {
        margin-bottom: 30px;
    }

    li.often_top_li p {
        font-size: 22px;
    }

    li.often_top_li button {
        font-size: 16px;
        width: 250px;
    }

    .bank_often-list {
        display: flex;
        margin: 0 30px;
        margin-bottom: 20px;
    }

    .bank_often-item-i i {
        font-size: 3rem;
        margin-right: 20px;
        background: rgba(0, 0, 0, 0.1);
        padding: 10px;
        border-radius: 5px;
        color: var(--color-white);
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .often-item-ul {
        display: flex;
        height: 30px;
        line-height: 30px;
        margin: 0;
        padding: 0;
        margin-bottom: 10px;
    }

    .often-item-li2 h2 {
        width: 280px;
        display: block;
        display: -webkit-box;
        height: 16px*1.3*3;
        font-size: 16px;
        line-height: 1.3;
        -webkit-line-clamp: 1;
        /* số dòng hiển thị */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-top: 10px;
        font-weight: bold !important;
    }

    .often-item-li2 p {
        font-size: 14px;
        color: rgba(0, 0, 0, 0.4);

    }

    .often-item-li2 button {
        width: 70px;
        height: 24px;
        font-size: 12px;
        background: #00BFA5;
        margin: 0 10px;
    }

    .bank-often-item h3 {
        height: 60px;
        line-height: 60px;
        width: 200px;
        font-size: 14px;
        font-weight: bold !important;
        margin: 0 45px;
    }

    .list-btn-sb {
        display: flex;
    }

    .bank-often-item-btn input[type="submit"] {
        background: white;
        color: var(--color-black);
        font-size: 14px;
        font-weight: bold !important;
        margin-right: 30px;
    }

    .bank-often-item-btn1 input[type="submit"] {
        font-size: 14px;
        font-weight: bold !important;
        color: var(--color-black);
        background: white;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    body {
        position: relative;
        min-width: 100%;
        height: 100%;
    }

    .bank-bgr {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0px;
        left: 0px;
        z-index: 9999;
        display: none;
        -webkit-box-align: center;
        align-items: center;
        place-content: center;
        -webkit-box-pack: center;
        background: rgba(0, 0, 0, 0.1);

    }


    .bank_add_main {
        z-index: 10000;
        border-radius: 3px;
        position: relative;
        width: 100%;
        height: 100%;
        margin: auto;
        overflow: hidden;
        top: 30px;
    }

    .bank_add {
        width: 550px;
        height: 650px;
        background: white;
        margin: auto;
    }

    .z3AS\+C {
        width: 500px;
        margin: auto;
    }

    .z3AS\+C .Em79YT {
        padding: 12px;
        background: #f7fffe;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        border: 1px solid #30b566;
        box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
        border-radius: 2px;
    }

    .z3AS\+C .AoACl4 {
        margin-right: 10px;
    }

    .z3AS\+C .CM2mma {
        color: rgba(0, 0, 0, .65);
        font-size: 12px;
        line-height: 16px;
    }

    .z3AS\+C .CM2mma {
        overflow: hidden;
        color: #666;
    }

    .bank_add_p h2 {
        padding: 20px;
        font-weight: bold !important;
    }

    .bank_add_p {
        display: flex;
        justify-content: space-between;
    }

    .bank_add_p button {
        margin: 20px 20px 0 0;
        font-size: 16px;
    }

    .bank-ct-p {
        display: flex;
        justify-content: space-between;
        padding-top: 30px;
        margin: 0 30px;
    }

    .bank-ct-p p {
        font-size: 16px;
        font-weight: bold !important;
    }

    .bank-img-img {
        display: flex;

    }

    input[placeholder] {
        padding-left: 10px;
    }

    .from_main_visa_add form {
        right: 0;
        margin-left: 40px;
    }

    .form_add_visa_li {
        height: 30px;
        margin-bottom: 30px;
    }

    .form_add_visa_li input[type="text"] {
        width: 470px;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .addvisa {
        display: flex;
    }

    .add_visa_li-p {
        margin: 0 0 20px 0;
    }

    input.addvisa-n {
        width: 280px !important;
        margin-right: 50px;
    }

    input.addvisa-cvv {
        width: 140px !important;
    }

    .addbutn input[type="submit"] {
        font-size: 14px;
        width: 150px;
        font-weight: bold !important;
        color: var(--color-white);
    }

    .add_visa_li-p p {
        font-size: 16px;
    }

    .bank_often_bg {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0px;
        left: 0px;
        z-index: 9999;
        display: none;
        -webkit-box-align: center;
        align-items: center;
        place-content: center;
        -webkit-box-pack: center;
        background: rgba(0, 0, 0, 0.1);
    }

    .bank_often_main {
        z-index: 10000;
        border-radius: 3px;
        position: relative;
        width: 100%;
        height: 100%;
        margin: auto;
        overflow: hidden;
        top: 30px;
    }

    .bank_often_main-dk {
        width: 500px;
        height: 600px;
        background: var(--color-white);
        margin: auto;
    }

    .bank_often_main-dk form {
        right: 0;
        margin: 60px 40px 0 40px;

    }

    .bank_often_p {
        display: flex;
        justify-content: space-between;
        margin: 0 30px;
        padding-top: 20px;
        height: 40px;
        line-height: 40px;
    }

    .bank_often_p p {
        font-size: 18px;
        font-weight: bold !important;
    }

    .bank_often_p button {
        width: 30px;
        height: 30px;
    }

    .bank_often_select select,
    .bank_often_input input[type="text"] {
        width: 420px;
        height: 30px;
        font-size: 14px;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 3px;
        margin-bottom: 30px;
        outline: none;
    }

    .bank_often_select select option {
        height: 30px;
        font-size: 14px;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .bank_often_back {
        height: 120px;
    }

    .bank_often_input input[type="submit"] {
        font-size: 14px;
        font-weight: bold !important;
        color: var(--color-white);
    }

    .main_user_right {
        margin-bottom: 20px;
    }
</style>
<div class="bank">
    <div class="bank_main">
        <div class="bank_main_visa">
            <div class="bank_visa_top">
                <ul class="visa_top">
                    <li class="visa_top_li">
                        <p>THẺ TÍN DỤNG / GHI NỢ</p>
                    </li>
                    <li class="visa_top_li">
                        <button class="visa_top_button button-close1"> + Thêm Thẻ Mới</button>
                    </li>
                </ul>
            </div>
            <?php
            $result = mysqli_query($conn, "Select * from bank_visa where username='$user1' ");
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="bank_visa_btn">
                    <form action="" method="post">
                        <div class="visa_btn_main">
                            <div class="visa_btn_main1">
                                <div class="visa_button_main-img">
                                    <img height="40" width="67" src="./acsset/img/png/visa.png" alt="">
                                </div>
                                <div class="visa_namecard">
                                    <p><?php echo $row['loaithe'] ?></p>
                                </div>
                                <div class="visa_card-md">
                                    <p><?php if ($row['macdinh'] == 1) {
                                            echo 'Mặc đinh';
                                        } else {
                                            echo '';
                                        } ?></p>
                                </div>
                            </div>
                            <div class="visa_number">
                                <p>•••• •••• •••• <?php $student_id = substr($row['sotaikhoan'], -4);
                                                    echo $student_id ?></p>
                            </div>
                            <div class="visa_nut">
                                <!-- <div class="visa-dlt"><input type="submit" value="Xóa" name="xoa" onclick="return confirm('Are you sure you want to delete this item?');"></div> -->
                                <?php if ($row['macdinh'] == 1) { ?>
                                    <div class="visa-dlt-tl"><input type="submit" value="Thiết lập mặc định" name="macdinh" disabled></div>
                                <?php } else { ?>
                                    <div class="visa-dlt-tl"><input type="submit" value="Thiết lập mặc định" name="macdinh"> </div>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } ?>

        </div>
        <div class="bank_main_often">
            <div class="bank_often">
                <div class="bank_often_top">
                    <ul class="often_top">
                        <li class="often_top_li">
                            <p>Tài Khoản Ngân Hàng Của Tôi</p>
                        </li>
                        <li class="often_top_li">
                            <button class="often_top_button button-close2"> + Thêm Tài khoản ngân hàng</button>
                        </li>
                    </ul>
                </div>
                <?php
                $result = mysqli_query($conn, "Select * from user_bank_often where username='$user1' ");
                $row = mysqli_fetch_array($result);
                $result1 = mysqli_query($conn, "Select * from user_bank_often inner join bank_name on user_bank_often.viettat=bank_name.viettat where username='$user1' ");
                while ($row1 = mysqli_fetch_array($result1)) {
                ?>
                    <div class="bank_often_btny">
                        <form action="" method="post">
                            <div class="bank_often-list">
                                <div class="bank-often-item">
                                    <div class="bank_often-item-i">
                                        <i class="fa-solid fa-building-columns"></i>
                                    </div>
                                </div>
                                <div class="bank-often-item">
                                    <ul class="often-item">
                                        <li class="often-item-li">
                                            <ul class="often-item-ul">
                                                <?php
                                                ?>
                                                <li class="often-item-li2">
                                                    <h2><?php echo $row1['tennganhang'] ?></h2>
                                                </li>
                                                <li class="often-item-li2">
                                                    <p>Đã kiểm tra</p>
                                                </li>
                                                <li class="often-item-li2">
                                                    <?php
                                                    if ($row1['macdinh']) {
                                                        echo "<button> Mặc định</button>";
                                                    } else {
                                                    ?>
                                                        <button style="background: #f7fffe;"></button>
                                                    <?php
                                                    }
                                                    ?>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="often-item-li">
                                            <p>Chủ TK : <?php echo $row1['hotenTK'] ?></p>
                                        </li>
                                        <li class="often-item-li">
                                            <p>Chi nhánh : HA NOI CD</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bank-often-item">
                                    <h3>•••• •••• •••• <?php $student_id = substr($row1['sotaikhoan'], -4);
                                                        echo $student_id ?></h3>
                                </div>
                                <div class="bank-often-item list-btn-sb">
                                    <!-- <div class="bank-often-item-btn ">
                                        <input type="submit" value="Xóa" name="xoa">
                                    </div> -->
                                    <div class="bank-often-item-btn1">
                                        <?php if ($row1['macdinh'] == 1) { ?>
                                            <input type="submit" value="Thiết lập mặc định" name="tl" disabled>
                                        <?php } else { ?>
                                            <input type="submit" value="Thiết lập mặc định" name="tl">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php } ?>

                    </div>
            </div>
        </div>
    </div>
</div>
<div class="bank-bgr sliner12">
    <div>
        <div class="bank_add_main">
            <div class="bank_add">
                <div class="bank_add_p">
                    <h2>Thêm Thẻ</h2>
                    <button class="btn_modal-cl"><i class="fa-sharp fa-solid fa-xmark"></i></button>
                </div>
                <div class="z3AS+C">
                    <div class="Em79YT">
                        <div class="AoACl4"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3967 3.16068C18.6982 3.25569 18.8995 3.44565 18.8995 3.73051H18.8995C18.8995 3.73848 18.9023 3.76656 18.907 3.81329C18.9585 4.32277 19.234 7.04877 18.4974 10.0938C17.9946 12.0883 17.0897 13.7978 15.9835 15.2221C14.5755 16.9317 12.665 18.1666 10.3521 18.9263C10.0505 19.0212 9.84935 19.0212 9.64811 18.9263C7.33535 18.1664 5.42467 16.9317 4.01674 15.2221C2.81003 13.7978 2.00547 12.0883 1.50272 10.0938C0.765904 7.04916 1.04149 4.32328 1.09304 3.81341C1.09777 3.76661 1.10062 3.73848 1.10062 3.73049C1.201 3.44554 1.30161 3.25559 1.60334 3.16068L9.54758 1.07127C9.74871 0.976243 10.1508 0.976243 10.4527 1.07127L18.3967 3.16068ZM9.95022 17.5966C13.671 16.4569 16.0842 13.7975 17.0899 9.80867L17.0899 9.80869C17.6933 7.43454 17.5927 5.15512 17.4923 4.2053L9.95022 2.21094L2.40832 4.2053C2.30781 5.15512 2.20719 7.33941 2.81055 9.80867C3.81611 13.7975 6.22951 16.3618 9.95022 17.5966Z" fill="#30B566"></path>
                                <path d="M6 8.92308L8.69238 11.6413C8.88802 11.8389 9.20722 11.8389 9.40286 11.6413L14 7" stroke="#30B566" stroke-width="1.5"></path>
                            </svg></div>
                        <div class="CM2mma">
                            <div>
                                <div class="C2HMK0">Thông tin thẻ của bạn được bảo mật.</div>
                                <div class="PFZECt">Chúng tôi hợp tác với CyberSource để đảm bảo thông tin thẻ của bạn được an toàn và bảo mật tuyệt đối. Shopee sẽ không được cấp quyền truy cập vào thông tin thẻ của bạn.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bank-ct-p">
                    <div class="bank-ct-ct">
                        <p>Chi Tiết Thẻ</p>
                    </div>
                    <div class="bank-img-img">
                        <div class="bank-img-img-img"><img width="30" style="margin-right: 10px;" height="20" src="./acsset/img/png/visa.png" alt=""></div>
                        <div class="bank-img-img-img"><img width="30" style="margin-right: 10px;" height="20" src="./acsset/img/png/pcmall.png" alt=""></div>
                        <div class="bank-img-img-img"><img width="30" style="margin-right: 10px;" height="20" src="./acsset/img/png/jcb.png" alt=""></div>
                        <div class="bank-img-img-img"><img width="30" style="margin-right: 10px;" height="20" src="./acsset/img/png/xamm.png" alt=""></div>
                    </div>
                </div>
                <div class="from_main_visa_add">
                    <form action="" method="post">
                        <div class="form_add_visa">
                            <div class="form_add_visa_l">
                                <ul class="form_add_visa-ul">
                                    <li class="form_add_visa_li">
                                        <input type="text" name="sothevisa" id="" title="Chỉ nhập số" placeholder="Số thẻ" maxlength="14">
                                    </li>
                                    <li class="form_add_visa_li">
                                        <div class="addvisa">
                                            <input type="text" class="addvisa-n" name="" id="" maxlength="5" placeholder="Ngày hết hạn (MM/YY)">
                                            <input type="text" class="addvisa-cvv" name="" id="" maxlength="3" placeholder="Mã CVV" title="là 3 số mặt sau thẻ">
                                        </div>
                                    </li>
                                    <li class="form_add_visa_li">
                                        <input type="text" name="hoten" id="" title="Họ tên chủ thẻ phải là chữ in hoa không dấu" placeholder="Họ và tên chủ thẻ">
                                    </li>
                                    <li class="form_add_visa_li add_visa_li-p">
                                        <p>Địa chỉ đăng ký thẻ Tín dụng/Ghi nợ</p>
                                    </li>
                                    <li class="form_add_visa_li">
                                        <input type="text" name="" id="" placeholder="Địa chỉ">
                                    </li>
                                    <li class="form_add_visa_li">
                                        <input type="text" name="" id="" placeholder="Mã bưu chính" title="Chỉ nhập số">
                                    </li>
                                    <li class="form_add_visa_li addbutn">
                                        <input type="submit" name="luuvisa" id="" value="Lưu">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['luuvisa'])) {
                        $sothevisa = $_POST['sothevisa'];
                        $tenthe = $_POST['hoten'];
                        $ktra = "select * from bank_visa where sotaikhoan='" . $sothevisa . "'";
                        $result = mysqli_query($conn, $ktra);
                        $sison = mysqli_fetch_assoc($result);
                        if (empty($sothevisa) || empty($tenthe)) {
                            echo '<script language="javascript" > alert("Bạn nhập thiếu dữ liệu");</script>';
                            exit();
                        }
                        if (mysqli_num_rows($result) > 0) {
                            echo '<script language="javascript"> alert("Số tài khoản đã tồn tại");</script>';
                        } else {
                            $sql = "insert into bank_visa values ('$user1','$sothevisa','$tenthe','VISA',0)";
                            $result = mysqli_query($conn, $sql);
                            echo '<script language="javascript"> alert("đăng Kí thành công, mời bạn đăng nhập");</script>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bank_often_bg sliner13">
    <div>
        <div class="bank_often_main">
            <div class="bank_often_main-dk">
                <div class="bank_often_p">
                    <p>Thêm Tài Khoản Ngân Hàng</p>
                    <button class="btn_modal-cl1"><i class="fa-sharp fa-solid fa-xmark"></i></button>
                </div>
                <form action="" method="post">
                    <div class="bank_often_select">
                        <select name="manh" id="">
                            <option value="" selected>Tên Ngân Hàng</option>
                            <?php
                            $sql = "select * from bank_name ";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value='" . $row['viettat'] . "'>" . $row['tennganhang'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="bank_often_input">
                        <input type="text" name="sotkoften" id="" placeholder="Số Tài Khoản">
                    </div>
                    <div class="bank_often_input">
                        <input type="text" name="tentkoften" id="" placeholder="Tên đầy đủ (Viết in hoa, không dấu)">
                    </div>
                    <div class="bank_often_input">
                        <input type="text" name="" id="" placeholder="CMND/CCCD">
                    </div>
                    <div class="bank_often_back"></div>
                    <div class="bank_often_input">
                        <input type="submit" name="BTNoften" id="" value="Hoàn Thành">
                    </div>
                </form>
                <?php
                if (isset($_POST['BTNoften'])) {
                    $viettat = $_POST['manh'];
                    $sotkoften = $_POST['sotkoften'];
                    $hotenoften = $_POST['tentkoften'];
                    $ktra = "select * from user_bank_often where sotaikhoan='" . $sotkoften . "'";
                    $result = mysqli_query($conn, $ktra);
                    $sison = mysqli_fetch_assoc($result);
                    if (empty($viettat) || empty($sotkoften) || empty($hotenoften)) {
                        echo '<script language="javascript" > alert("Bạn nhập thiếu dữ liệu");</script>';
                        exit();
                    }
                    if (mysqli_num_rows($result) > 0) {
                        echo '<script language="javascript"> alert("Số tài khoản đã tồn tại");</script>';
                    } else {
                        $sql = "insert into user_bank_often values ('$user1','$viettat','$sotkoften','$hotenoften','VISA',0)";
                        $result = mysqli_query($conn, $sql);
                        echo '<script language="javascript"> alert("thêm thẻ thành công");window.location="http://localhost/Shopee/user_main.php"</script>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script>
    const sliner1 = document.querySelector(".sliner12");
    const btn = document.querySelector(".button-close1")
    const btn1 = document.querySelector(".btn_modal-cl")
    btn.addEventListener("click", function() {
        clickbtn(1);
    })
    btn1.addEventListener("click", function() {
        clickbtn(-1);
    })

    function clickbtn(direction) {
        if (direction == 1) {
            sliner1.style = `display: block;`;
        } else if (direction == -1) {
            sliner1.style = `display: none;`;
        }
    }

    const sliner2 = document.querySelector(".sliner13");
    const btn2 = document.querySelector(".button-close2")
    const btn3 = document.querySelector(".btn_modal-cl1")
    btn2.addEventListener("click", function() {
        clickbtn1(1);
    })
    btn3.addEventListener("click", function() {
        clickbtn1(-1);
    })

    function clickbtn1(direction) {
        if (direction == 1) {
            sliner2.style = `display: block;`;
        } else if (direction == -1) {
            sliner2.style = `display: none;`;
        }
    }
</script>