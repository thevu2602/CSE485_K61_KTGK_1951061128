<?php
require('./db/config.php')
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Danh mục</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Thêm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <form action="./update.php" method="POST">
        <?php 
        $id = $_GET['id'];
        $select = "SELECT * FROM blood_donor where db_id = $id";
        $result = mysqli_query($conn, $select);

        while($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Họ Tên</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['bd_name'];?>" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="giotinh" class="col-sm-2 col-form-label">Giới tính</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="giotinh" name="giotinh" value="<?php echo $row['bd_sex'];?>" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tuoi" class="col-sm-2 col-form-label">Tuổi</label>
                <div class="col-sm-10">
                    <input value="<?php echo $row['db_age'];?>" type="text" class="form-control" id="tuoi" name="tuoi" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="mau" class="col-sm-2 col-form-label">Nhóm máu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mau" name="mau" value="<?php echo $row['bd_group'];?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="date" class="col-sm-2 col-form-label">Ngày đăng ký</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date" name="date" value="<?php echo $row['bd_reg_date'];?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="sđt" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="sđt" name="sdt" value="<?php echo $row['bd_phno'];?>">
                </div>
                <input type="hidden" value="<?php echo $id; ?>" name="id">
            </div>
            <div>
                <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
            </div>
            <?php }?>
        </form>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>