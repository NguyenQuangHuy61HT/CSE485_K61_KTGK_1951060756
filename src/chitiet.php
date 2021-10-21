<?php
    include('conect_db.php');
    $output='';
    $output+='<table class="table" >
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
        <tbody>';

           
                $conn = mysqli_connect('localhost', 'root', '', 'qlnhmau');
                if (!$conn){
                    die('<h1>không thể kết nối</h1>');
                }
                $sql = "select * from BLOOD_DONOR";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    $i=1;
                    while($row = mysqli_fetch_assoc($result)){
        
                       $output+= '<tr>
                            <th scope="row">  '.$i.'</th>
                            <td> ' .$row['bd_name']. '</td>
                            <td>  '.$row['bd_sex'].' </td>
                            <td>  '.$row['bd_age'].'</td>
                            <td>  '.$row['bd_bgroup'].'</td>
                            <td>  '.$row['bd_reg_date'].'</td>
                            <td>   '.$row['bd_phno'].'</td>
                            <td><a href="edit_user.php?bl_id='.$row['bl_id'].'"><i class="fas fa-edit"></i></a></td>
                            <td><a href="btn-delete.php?bl_id='.$row['bl_id'].'" ><i class="far fa-trash-alt text-danger"></i></a></td>
                        </tr>';
                  
                        $i++;
            
                        }
                        }
                                                    
                
        $output='</tbody>
        <a href="chitiet.php"><button type="button" class="btn btn-success btn_change">Chi tiết</button></a>
    </table>';
    echo $output;
?>