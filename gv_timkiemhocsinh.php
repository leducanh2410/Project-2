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
    <link rel="stylesheet" href="./assets/css/hs-hocphi.css">
    <link rel="stylesheet" href="./assets/css/gv_timkiemhocsinh.css">
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
            <a href="gv_lichday.php"><div class="list-menu diem">Lịch dạy học</div></a>
            <a href="gv_timkiemhocsinh.php"><div class="list-menu hocphi">Tìm kiếm học sinh</div></a>
            <a href="gv_thongbaohocphi.php"><div class="list-menu thoikhoabieu">Thông báo học phí</div></a>
            <a href="gv_thongtincanhan.php"><div class="list-menu thongtincanhan">Thông tin cá nhân</div></a>
        </div>
        <div id="timkiemhocsinh_container" class="col-9 timkiemhocsinh_container">
            <div class="search-block mb-5">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary">search</button>
                </div>
            </div>
            <h5>Kết quả tìm kiếm cho "Nguyễn Anh Tú"</h5>
            <table class="table-diem mt-3">
                <tr>
                    <th>Tên học sinh</th>
                    <th>Lớp</th>
                    <th>Ngày sinh</th>
                </tr>
                <tr>
                    <td onclick="xemhocsinh()" class="name_hs">Nguyễn Anh Tú</td>
                    <td>12A1</td>
                    <td>2000-10-10</td>
                </tr>
                <tr>
                    <td onclick="xemhocsinh()" class="name_hs">Nguyễn Anh Tú</td>
                    <td>11A2</td>
                    <td>2001-01-01</td>
                </tr>
            </table>
        </div>

        <div id="capnhatdiem" class="col-9 capnhatdiem">
            <div class="row d-flex">
                <div class="col-8">
                    <a onclick="back()" href="#" class="previous mb-3">&laquo; Back</a>
                    <h5>Thông tin học sinh</h5>
                    <div class="thongtin-content hovaten">Họ và tên: Nguyễn Anh Tú</div>
                    <div class="thongtin-content ngaysinh">Ngày sinh: 2001-01-01</div>
                    <div class="thongtin-content nienkhoa">Lớp: 12A1</div>
                </div>
                <div class="col-4">
                    <div class="avatar">
                        <img src="./assets/images/thongtinhocsinh.jfif" alt="">
                    </div>
                </div>
            </div>

            <div class="bangdiemcontainer mt-4">
                <h5>Bảng điểm</h5>
                <table class="table-diem mt-3 mb-3">
                    <tr>
                        <th>Môn học</th>
                        <th>Hệ số 1</th>
                        <th>Hệ số 2</th>
                        <th>Hệ số 3</th>
                        <th>TBM</th>
                    </tr>
                    <tr>
                        <td>Toán</td>
                        <td>9,9,9,9,9</td>
                        <td>9,9,9</td>
                        <td>9</td>
                        <td>9.0</td>
                    </tr>
                </table>
            </div>

            <button type="button" class="btn btn-danger btn-capnhatdiem">Cập nhật điểm</button>
        </div>


    </div>

    <script>
        function xemhocsinh() {
            document.getElementById('timkiemhocsinh_container').style.display = "none";
            document.getElementById('capnhatdiem').style.display = "block";
        }

        function back() {
            document.getElementById('timkiemhocsinh_container').style.display = "block";
            document.getElementById('capnhatdiem').style.display = "none";
        }

    </script>
</body>

</html>
