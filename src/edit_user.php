<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit donvi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/food.css">
</head>
<body>
    <?php
        if(isset($_POST['btn_edit']))
        {   
            if(isset($_GET['bl_id'])){
                 $conn = mysqli_connect('localhost', 'root', '', 'qlnhmau');
                if (!$conn){
                    die('<h1>không thể kết nối</h1>');
                }
                $name=$_POST['txt_name'];
                $gioitinh=$_POST['txt_gioitinh'];
                $age=$_POST['txt_tuoi'];
                $group=$_POST['txt_nhommau'];
                $sodt=$_POST['txt_sodt'];
                $id=$_GET['bl_id'];
                $sql_edit="UPDATE BLOOD_DONOR
                SET bd_name ='$name', bd_sex ='$gioitinh', bd_age='$age',bd_bgroup= '$group',bd_phno='$sodt'
                WHERE bl_id=$id ";
                if(mysqli_query($conn,$sql_edit)==TRUE)
                {
                   
                    
                     echo 'Sửa thành công';
                }
                else
                {
                    echo 'that bai';
                }
            }

        }

    ?>
    <div class="row header">
            <div class="row nav-menu pt-2 ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid ">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                <a class="nav-link  " aria-current="page" href="index.php">Quản lý danh sách hiến máu</a>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <form action=" " method="POST">
                    <?php
                     $id=$_GET['bl_id'];
                     require('conect_db.php');
                     $sql = "select * from BLOOD_DONOR  where bl_id=$id ";
                     $result = mysqli_query($conn,$sql);
                     if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="form-group row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tên mới</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputEmail3"  name="txt_name" value="<?php echo $row['bd_name']?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Giới tính</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputPassword3"  name="txt_gioitinh" value="<?php echo $row['bd_sex']?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tuổi</label>
                        <div class="col-sm-7">
                        <input type="number" class="form-control" id="inputPassword3" name="txt_tuoi" value="<?php echo $row['bd_age']?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nhóm máu</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputPassword3"  name="txt_nhommau" value="<?php echo $row['bd_bgroup'] ?>">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Số điện thoại </label>
                        <div class="col-sm-7">
                        <input type="tel" class="form-control" id="inputPassword3"  name="txt_sodt" value="<?php echo $row['bd_phno']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" name="btn_edit" class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                    <?php
                        
                               
                         }
                        }
                                                                    
                    ?>
                </form>
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
    <script type="text/javascript" src="js/myscript.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>