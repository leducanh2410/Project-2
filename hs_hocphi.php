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
    <link rel="stylesheet" href="./assets/css/hs-tkb.css">
    <link rel="stylesheet" href="./assets/css/hs-ttcn.css">
    <link rel="stylesheet" href="./assets/css/gv_thongbaohocphi.css">
    <link rel="stylesheet" href="./assets/css/hs-hocphi.css">
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
            <a href="hocsinh_diem.php"><div class="list-menu diem">Điểm</div></a>
            <a href="hs_hocphi.php"><div class="list-menu hocphi">Học phí</div></a>
            <a href="hocsinh_thoikhoabieu.php"><div class="list-menu thoikhoabieu">Thời khóa biểu</div></a>
            <a href="hs_thongtincanhan.php"><div class="list-menu thongtincanhan">Thông tin cá nhân</div></a>
        </div>
        <div class="col-9 thongbaohoc_container">
            <h1>Thông tin học phí</h1>
            <div class="hocphi_content">
                <p>Học phí tháng 10 năm học 2022-2023 là 1,234,567 đồng.</p>
            </div>
        </div>
    </div>

</body>
</html>
