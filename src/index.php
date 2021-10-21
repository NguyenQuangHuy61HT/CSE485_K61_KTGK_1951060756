<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/food.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Quản lý hiến máu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        tr:nth-child(even) {
        background-color: #D6EEEE;
        
        }
        .hidebt{display: none;}
    </style>

</head>
<body>
    <div class="container-fluid">
        <div class="row header">
            <div class="row nav-menu pt-2 ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">Quản trị viên</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                <a class="nav-link active " aria-current="page" href="#">Quản lý danh sách người hiến máu</a>
                                </li>
                            </ul>
                        </div>
                        <a class="navbar-brand d-flex flex-column text-center " href="logout.php"><i class="fas fa-sign-out-alt pt-1" style="color:red"></i><p style="font-size: 14px;color:red">Đăng xuất</p></a>
                    </div>
                </nav>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 daitas "  >
    
                    <table class="table" >
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Giới tính</th>
                                <th scope="col">Tuổi </th>
                                 <th scope="col">Nhóm máu </th>
                                <th scope="col">Thời gian </th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
    
                            <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'qlnhmau');
                                if (!$conn){
                                    die('<h1>không thể kết nối</h1>');
                                }
                                $sql = "select * from BLOOD_DONOR";
                                $result = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result)>0){
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                                        <tr>
                                            <th scope="row"> <?php echo $i;?></th>
                                            <td> <?php echo $row['bd_name']?>  </td>
                                            <td> <?php echo $row['bd_sex']?>  </td>
                                            <td> <?php echo $row['bd_age']?>  </td>
                                             <td> <?php echo $row['bd_bgroup']?></td>
                                            <td>  <?php echo $row['bd_reg_date']?></td>
                                            <td>  <?php echo $row['bd_phno'] ?> </td>
                                            <td><a href="edit_user.php?bl_id=<?php echo $row['bl_id'];?>"><i class="fas fa-edit"></i></a></td>
                                            <td><a href="btn-delete.php?bl_id=<?php echo $row['bl_id'];?>" ><i class="far fa-trash-alt text-danger"></i></a></td>
                                        </tr>
                                    <?php
                                        $i++;
                               
                                        }
                                        }
                                                                    
                                    ?>
                        </tbody>
                        <a href="chitiet.php"><button type="button" name="button" class="btn btn-success btn_change">Chi tiết</button></a>
                    </table>
                </div>
            </div>
        </div>
      
    </div>

     <div class="container-fluid fluid-footer">
            <div class="row footer">
                <div class="col-md-12 wrapper">
                    <p class="text-center">2020 Phát triển bởi - <a href="#">CSE485</a></p>
                </div>
            </div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/myscript.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>