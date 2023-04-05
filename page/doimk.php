<?php
include_once("ketnoi.php");
?>
<style>
    .main_right {
        padding: 20px;
    }

    .main_right_user form {
        right: 0;
    }

    .main_right_user {
        width: 100%;
        padding: 20px;
    }

    .main_right_user form {
        width: 100%;
        display: flex;
    }

    .main_right_td h1 {
        font-size: 24px;
        font-weight: bold !important;
    }

    .main_right_td p {
        font-size: 16px;
    }

    .main_right_td {
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .main_right_user-li {
        margin-right: 20px;
        display: flex;
        height: 30px;
        margin-bottom: 30px;
    }

    .main_right_user-li label {
        width: 150px;
        font-size: 14px;
    }

    .main_right_user-li input[type="password"] {
        width: 500px;
        height: 30px;
        outline-style: none;
        font-size: 14px;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 3px;
    }

    .main_right_user1 {
        margin-left: 40px;
    }

    .main_right_user-li input[type="submit"] {
        top: 0;
        width: 90px;
        font-size: 14px;
        color: var(--color-white);
        font-family: Arial, Helvetica, sans-serif !important;
        font-weight: 500;
    }
</style>
<div class="main_right">
    <div class="main_right_td">
        <h1>ĐỔI MẬT KHẨU</h1>
        <p>Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác</p>
    </div>
    <div class="main_right_user">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="main_right_user1">
                <ul class="main_right_user-ul">
                <li class="main_right_user-li">
                        <div class="main_right_user-li1">
                            <label for="">Tài khoản</label>
                        </div>
                        <div class="main_right_user-li2">
                            <p style="font-size: 18px;color:red;"><?php echo $user['username'] ?></p>
                        </div>
                    </li>
                    <li class="main_right_user-li">
                        <div class="main_right_user-li1">
                            <label for="">Mật Khẩu hiện tại</label>
                        </div>
                        <div class="main_right_user-li2">
                            <input type="password" name="passPresent" id="" value="">
                        </div>
                    </li>
                    <li class="main_right_user-li">
                        <div class="main_right_user-li1">
                            <label for="">Mật Khẩu Mới</label>
                        </div>
                        <div class="main_right_user-li2">
                            <input type="password" name="passnew" id="" value="">
                        </div>
                    </li>
                    <li class="main_right_user-li">
                        <div class="main_right_user-li1">
                            <label for="">Nhập lại Mật Khẩu</label>
                        </div>
                        <div class="main_right_user-li2">
                            <input type="password" name="retype" id="" value="">
                        </div>
                    </li>
                    <li class="main_right_user-li">
                        <input type="submit" value="Lưu" name="luu">
                    </li>
                </ul>
            </div>
        </form>
        <?php
        $usern = $user['username'];
        if (isset($_POST['luu'])) {
            $passPresent = $_POST['passPresent'];
            $passnew = $_POST['passnew'];
            $retype = $_POST['retype'];
            $ktra = "select * from user where username='" .$usern. "' and password=MD5('".$passPresent ."')";
            $result = mysqli_query($conn, $ktra);
            if (!$passPresent || !$passnew || !$retype) {
                echo '<script language="javascript"> alert("Thiếu thông tin");</script>';
                exit;
            }
            if (mysqli_num_rows($result) == 0) {
                echo '<script language="javascript"> alert("mật khẩu không đúng");</script>';
            } else {
                if ($passnew != $retype) {
                    echo '<script language="javascript"> alert("Mật khẩu không khớp");</script>';
                } else {
                    $sql = "update user set password=MD5('$retype'),user_rank='KH' where username='$usern'";
                    $result = mysqli_query($conn, $sql);
    				echo '<script language="javascript" > alert("Cập nhập thành công! Mời bạn đăng nhập lại để cập nhập thông tin"); window.location="http://localhost/Shopee/index.php";</script>';
                }
            }
        }
        ?>
    </div>
</div>