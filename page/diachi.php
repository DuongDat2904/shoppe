<?php
include_once("ketnoi.php");
$user1 = $user['username'];

?>
<style>
    .address_top {
        display: flex;
        justify-content: space-between;
        margin: 40px 40px 0 40px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        height: 60px;
    }

    .address_top_l p {
        font-size: 20px;
        font-weight: bold !important;
    }

    .add_top_r-btn {
        width: 170px;
        font-size: 14px;
    }

    .address__pt {
        margin: 0 40px;
        display: flex;
        justify-content: space-between;
        padding: 40px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .address_pt_l-li h2 {
        font-size: 18px;
        font-weight: bold !important;
    }

    .address_pt_l-ul {
        width: 300px;
    }

    .address_pt_li2 {
        display: flex;
    }

    .address_pt-item2 p {
        padding-right: 20px;
        border-right: 1px solid rgba(0, 0, 0, 0.1);
        font-size: 14px;

    }

    .address_pt-item2 span {
        padding-left: 20px;
        font-size: 14px;
    }

    .address_pt_l-li-p {
        font-size: 14px;
        color: rgba(0, 0, 0, 0.4);
    }

    .address_pt_l-li-a {
        display: flex;
        width: 70px;
        font-size: 14px;
        color: var(--color-red) !important;
        padding: 0 5px;
        height: 20px;
        border: 1px solid var(--color-red) !important;
        background: var(--bs-white);
    }

    .address_pt_r button {
        width: 150px;
        background: var(--color-white);
        color: var(--color-black);
        font-size: 14px;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .address_bgr {
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

    .address_bgr_main {
        width: 500px;
        height: 600px;
        background: var(--bs-white);
        margin: auto;
        top: 60px;
        border-radius: 5px;
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.4);
    }

    .address_form-main {
        right: 0;
    }

    .address_main-top {
        display: flex;
        margin: 20px 30px;
        height: 50px;
        justify-content: space-between;
        line-height: 50px;
    }

    .address_main-p p {
        font-size: 16px;
        font-weight: bold !important;
        margin-top: 10px;
    }

    button#hide {
        margin-top: 10px;
    }

    .address_form-main {
        margin: 0 30px;
    }

    .address_form_li input[type="text"] {
        height: 40px;
        margin-bottom: 10px;
        width: 435px;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 2px;
        outline: none;
        font-size: 16px;
    }

    .address_form_li input[type="submit"],
    .address_form_li input[type="reset"] {
        top: 20px;
        font-size: 14px;
        font-weight: bold;
        color: var(--bs-white);
        margin-right: 20px;
    }

    input:checked {
        background: var(--color-background);
    }

    .address_form_li input[placeholder] {
        text-overflow: ellipsis;
        height: 40px;
        padding-left: 10px;
    }
</style>
<div class="address">
    <div class="address_main">
        <div class="address_top">
            <div class="address_top_l">
                <p>Địa Chỉ Của Tôi</p>
            </div>
            <div class="address_top_r">
                <button class="add_top_r-btn" id="show">+ Thêm địa chỉ mới</button>
            </div>
        </div>
        <?php
        $result = mysqli_query($conn, "Select * from user_main where username='$user1' ");
        while ($row1 = mysqli_fetch_array($result)) {

            $result1  = mysqli_query($conn, "select * FROM address_ship  where username='$user1' ");
            while ($row = mysqli_fetch_array($result1)) {

        ?>

                <div class="address__pt">
                    <div class="address_pt_l">
                        <ul class="address_pt_l-ul">
                            <li class="address_pt_l-li">
                                <h2>Địa chỉ</h2>
                            </li>
                            <li class="address_pt_l-li">
                                <div class="address_pt_li2">
                                    <div class="address_pt-item2">
                                        <p><?php echo $row1['HoTen'] ?></p>
                                    </div>
                                    <div class="address_pt-item2"><span>(+84) <?php $student_id = substr($row['sodienthoai'], -9);
                                                                                echo $student_id ?></span></div>
                                </div>
                            </li>
                            <li class="address_pt_l-li">
                                <p class="address_pt_l-li-p"><?php echo $row['address'] ?></p>
                            </li>
                            <li class="address_pt_l-li">
                                <?php if ($row['macdinh'] == 1) { ?>
                                    <button class="address_pt_l-li-a">Mặc định</button>
                                <?php } else { ?>
                                    <button class="address_pt_l-li-a" style="border: 1px solid rgba(0,0,0,0.1) !important;color:rgba(0,0,0,0.1) !important;">Mặc định</button>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                    <div class="address_pt_r">
                        <?php if ($row['macdinh'] == 1) { ?>
                            <button disabled>thiết lập mặc định</button>
                        <?php } else { ?>
                            <button>thiết lập mặc định</button>
                        <?php } ?>
                    </div>
                </div>
        <?php
            }
        } ?>
    </div>
</div>
<div class="address_bgr div">
    <div>
        <div class="address_bgr_main">
            <div class="address_main-top">
                <div class="address_main-p">
                    <p>Địa chỉ mới</p>
                </div>
                <button class="btn_modal-cl2" id="hide">Thoát</button>
            </div>
            <form class="address_form-main" action="" method="post">
                <div class="address_form">
                    <ul class="address_form_ul">
                        <li class="address_form_li">
                            <input type="text" name="" id="" placeholder="Họ tên">
                        </li>
                        <li class="address_form_li">
                            <input type="text" name="sdt" id="" placeholder="Số điện thoại">
                        </li>
                        <li class="address_form_li">
                            <input type="text" name="address" id="" placeholder="Tỉnh/Thành phố, Quận/Huyện , Phường/Xã">
                        </li>
                        <li class="address_form_li_map">
                            <div class="add_li_map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.049821997403!2d105.78166711467735!3d20.99063989445507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad4f1450f353%3A0xf9004670a3e5a639!2zQ2h1bmcgY8awIEMxNCBC4bqvYyBIw6A!5e0!3m2!1svi!2s!4v1677828949192!5m2!1svi!2s" width="435" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="address_form_li">
                            <input type="checkbox" name="check" id="">Đặt làm địa chỉ mặc định
                        </li>
                        <li class="address_form_li">
                            <input type="submit" name="luu" id="" value="Hoàn thành">
                            <input type="reset" name="" id="" value="Trở lại">
                        </li>
                    </ul>
                </div>
            </form>
            <?php
            if (isset($_POST['luu'])) {
                $address = $_POST['address'];
                $sdt = $_POST['sdt'];
                $check = $_POST['check'];
                if (empty($address) || empty($sdt)) {
                    echo '<script language="javascript" > alert("Bạn nhập thiếu dữ liệu");</script>';
                    exit();
                }
                if ($check == true) {
                    $sql = "insert into address_ship values ('$user1','$address','$sdt',1)";
                    $result = mysqli_query($conn, $sql);
                    echo '<script language="javascript"> alert("thêm thành công");window.location="http://localhost/Shopee/user_main.php"</script>';
                } else {
                    $sql = "insert into address_ship values ('$user1','$address','$sdt',0)";
                    $result = mysqli_query($conn, $sql);
                    echo '<script language="javascript"> alert("thêm thành công");window.location="http://localhost/Shopee/user_main.php"</script>';
                }
            }
            ?>
        </div>
    </div>
</div>

<script>
    const showBtn = document.querySelector('#show')
    const hideBtn = document.querySelector('#hide')
    const div = document.querySelector('.div')
    showBtn.addEventListener('click', () => {
        div.style.display = 'block'
    })
    hideBtn.addEventListener('click', () => {
        div.style.display = 'none'
    })
</script>