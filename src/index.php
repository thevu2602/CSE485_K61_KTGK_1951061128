<?php 
require('./db/config.php');
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                            <a class="nav-link" href="./them.php">Thêm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mã Người hiến</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Tuổi</th>
                        <th scope="col">Nhóm máu</th>
                        <th scope="col">Ngày đăng ký</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                
                <tbody>
                <?php
                    $select = 'SELECT * FROM blood_donor';
                    $result = mysqli_query($conn,$select);
                    $i = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $i++;
                ?>
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $row['db_id']; ?></td>
                        <td><?php echo $row['bd_name']; ?></td>
                        <td><?php echo $row['bd_sex']; ?></td>
                        <td><?php echo $row['db_age']; ?></td>
                        <td><?php echo $row['bd_group']; ?></td>
                        <td><?php echo $row['bd_reg_date']; ?></td>
                        <td><?php echo $row['bd_phno']; ?></td>
                        <td><a href="./chitiet.php?id=<?php echo $row['db_id']; ?>">chi tiết</a></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>