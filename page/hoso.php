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
        width: 100px;
        font-size: 14px;
    }

    .main_right_user-li input[type="text"] {
        width: 500px;
        height: 30px;
        outline-style: none;
        font-size: 14px;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 3px;
    }

    .main_right_user1 {
        margin-left: 40px;
        border-right: 1px solid rgba(0, 0, 0, 0.1);
    }

    .main_right_user-li2-radio {
        display: flex;
    }

    .main_right_user-li2-radio p {
        margin: 0;
        padding: 0;
        line-height: 30px;
        margin-right: 20px;
        padding-left: 5px;
    }

    .main_right_user-li input[type="submit"] {
        top: 0;
        width: 90px;
        font-size: 14px;
        color: var(--color-white);
        font-family: Arial, Helvetica, sans-serif !important;
        font-weight: 500;
    }

    .main_right_user2-img {
        margin-left: 40px;
    }

    .inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }



    .main_right_user2-img img {
        border-radius: 50%;
    }

    input#imageFile {
        margin-left: 120px;
        margin-top: 30px;
    }
</style>
<?php
$usern = $user['username'];
$result = mysqli_query($conn, "Select * from user_main where username='$usern'");
$row = mysqli_fetch_array($result)

?>
<div class="main_right">
    <div class="main_right_td">
        <h1>HỒ SƠ CỦA TÔI</h1>
        <p>Quản lý thông tin để bảo mật tài khoản</p>
    </div>
    <div class="main_right_user">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="main_right_user1">
                <ul class="main_right_user-ul">
                    <li class="main_right_user-li">
                        <div class="main_right_user-li1">
                            <label for="">Tên tài khoản</label>
                        </div>
                        <div class="main_right_user-li2">
                            <input type="text" name="" id="" value="<?php echo $user['username'] ?>" disabled>
                        </div>
                    </li>
                    <li class="main_right_user-li">
                        <div class="main_right_user-li1">
                            <label for="">Họ tên</label>
                        </div>
                        <div class="main_right_user-li2">
                            <input type="text" name="hoten" id="" value="<?php echo $row['HoTen'] ?>">
                        </div>
                    </li>
                    <li class="main_right_user-li">
                        <div class="main_right_user-li1">
                            <label for="">Email</label>
                        </div>
                        <div class="main_right_user-li2">
                            <input type="text" name="email" id="" value="<?php echo $row['Email'] ?>">
                        </div>
                    </li>
                    <li class="main_right_user-li">
                        <div class="main_right_user-li1">
                            <label for="">Số điện thoại</label>
                        </div>
                        <div class="main_right_user-li2">
                            <input type="text" name="sdt" id="" value="<?php echo $row['SoDT'] ?>">
                        </div>
                    </li>
                    <li class="main_right_user-li">
                        <div class="main_right_user-li1">
                            <label for="">Ngày sinh</label>
                        </div>
                        <div class="main_right_user-li2">
                            <input type="text" name="ngaysinh" id="" value="<?php echo $row['NgaySinh'] ?>">
                        </div>
                    </li>
                    <li class="main_right_user-li">
                        <input type="submit" value="Lưu" name="luu" onclick='return Check()'>
                    </li>
                </ul>
            </div>
            <div class="main_right_user2">
                <div class="main_right_user2-img">
                    <img src="./acsset/img/avartar/<?php echo $row['Anh_user'] ?>" alt="" id="image" width="200" height="200">
                </div>
                <div class="main_right_user2-button">
                    <input type="file" name="file" id="imageFile" onchange="chooseFile(this)" accept="image/gif,image/jpeg,image/png">
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['luu'])) {
            $hoten = $_POST['hoten'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
            $ns = $_POST['ngaysinh'];
            $anh = $_FILES["file"]['name'];
            $ad = $_FILES["file"]['tmp_name'];
            move_uploaded_file($ad, "./acsset/img/avartar/$anh");
            if (empty($hoten) || empty($email) || empty($sdt) || empty($ns)) {
                echo '<script language="javascript" > alert("Bạn nhập thiếu dữ liệu"); window.location="user_main.php?bien=hoso";</script>';
                exit();
            }
            $sql = "update user_main set HoTen='$hoten' ,Email='$email',SoDT='$sdt',NgaySinh='$ns',Anh_user='$anh' where username='$usern'";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                die('Câu truy vấn bị sai');
            }
            echo '<script language="javascript" > alert("Cập nhập thành công! Mời bạn đăng nhập lại để cập nhập thông tin"); window.location="user_main.php?bien=hoso";</script>';
        }
        ?>
    </div>
</div>

<script>
    function chooseFile(fileInput) {
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#image').attr('src', e.target.result);
            }
            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    function Check() {
        return confirm("Bạn có muốn sửa thông tin của mã <?php echo $usern; ?> không?");
    }
</script>