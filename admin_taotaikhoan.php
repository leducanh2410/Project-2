<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trường THPT HUST</title>
    <link rel="stylesheet" href="./assets/css/trangchu.css">
    <link rel="stylesheet" href="./assets/css/dangnhap.css">
    <link rel="stylesheet" href="./assets/css/hocsinh_diem.css">
    <link rel="stylesheet" href="./assets/css/admin_taotaikhoan.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header class="fixed-header">
        <div class="background-header position-relative">
            <img src="./assets/images/trang-chu/bgr.jpg" alt="">
            <div class="header-content w-100 position-absolute d-flex align-items-center justify-content-between ">
                <div class="name-school">Trường THPT HUST</div>
                <div class="account d-flex align-items-center justify-content-between">
                    <i class="fas fa-user-circle"></i>
                    <?php echo "<h1>" . $_SESSION['username'] . "</h1>"; ?>
                    <button type="button" class="logout_btn btn btn-danger"><a href="logout.php">Đăng xuất</a></button>
                </div>
            </div>
        </div>
    </header>

    <div class="diem-container row">
        <div class="menu col-3">
            <a href="admin_taotaikhoan.php"><div class="list-menu diem">Tạo tài khoản</div></a>
            <a href="admin_danhsachtaikhoan.php"><div class="list-menu hocphi">Danh sách tài khoản</div></a>
            <a href="admin_cosovatchat.php"><div class="list-menu thoikhoabieu">Cơ sở vật chất</div></a>
            <a href="admin_thoikhoabieu.php"><div class="list-menu thongtincanhan">Thời khóa biểu</div></a>
        </div>
        <div class="col-9 taotaikhoan_container">
            <div class="taotaikhoan_content">
                <table class="table-diem">
                    <tr>
                        <th>Họ và tên</th>
                        <th>ID</th>
                    </tr>
                    <tr>
                        <td>Nguyễn Văn A</td>
                        <td>2022XXX</td>
                    </tr>
                    <tr>
                        <td>Nguyễn Văn B</td>
                        <td>2022XXX</td>
                    </tr>
                    <tr>
                        <td>Nguyễn Văn C</td>
                        <td>2022XXX</td>
                    </tr>
                </table>

                <div class="taotaikhoan-btn d-flex justify-content-between mt-4">
                    <form action="/action_page.php">
                        <input type="file" id="myFile" name="filename">
                        <input type="submit" value="Tạo tài khoản">
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
