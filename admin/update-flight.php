<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="container">
        <h1>Cập Nhật Chuyến Bay</h1>

        <br><br>


        <?php 
        
            //Check whether the id is set or not
            if(isset($_GET['ma_chuyen_bay']))
            {
                //Get the ID and all other details
                //echo "Getting the Data";
                $id = $_GET['ma_chuyen_bay'];
                //Create SQL Query to get all other details
                $sql = "SELECT * FROM db_chuyenbay WHERE ma_chuyen_bay=$id";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count the Rows to check whether the id is valid or not
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    //Get all the data
                    $row = mysqli_fetch_assoc($res);
                    $logo = $row['logo'];
                    $id = $row['ma_chuyen_bay'];
                    $dxp = $row['diem_xuat_phat'];
                    $dd = $row['diem_den'];
                    $time = $row['thoi_gian'];
                    $soghe = $row['so_ghe'];
                    $gia = $row['gia_ve'];
                   
                }
                else
                {
                    //redirect to manage category with session message
                    $_SESSION['no-flight-found'] = "<div class='error'>Flight not Found.</div>";
                    header('location:'.SITEURL.'admin/manage-flight.php');
                }

            }
            else
            {
                //redirect to Manage CAtegory
                header('location:'.SITEURL.'admin/manage-flight.php');
            }
        
        ?>

        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Điểm Xuất Phát: </td>
                    <td>
                        <input type="text" name="diem_xuat_phat" value="<?php echo $dxp; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Điểm Đến: </td>
                    <td>
                        <input type="text" name="diem_den" value="<?php echo $dd; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Thời Gian: </td>
                    <td>
                        <input type="text" name="thoi_gian" value="<?php echo $time; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Số Ghế: </td>
                    <td>
                        <input type="text" name="so_ghe" value="<?php echo $soghe; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Giá Vé: </td>
                    <td>
                        <input type="int" name="gia_ve" value="<?php echo $gia; ?>">
                    </td>
                </tr>

                <tr>
                    <td>   
                        <input type="text" name="ma_chuyen_bay" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Category" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        <?php 
        
            if(isset($_POST['submit']))
            {
                
                //echo "Clicked";
                //1. Get all the values from our form
                $id = $_POST['ma_chuyen_bay'];
                $dxp = $_POST['diem_xuat_phat'];
                $dd = $_POST['diem_den'];
                $time = $_POST['thoi_gian'];
                $soghe = $_POST['so_ghe'];
                $gia = $_POST['gia_ve'];
                

               
                //3. Update the Database
                $sql2 = "UPDATE db_chuyenbay SET 
                    diem_xuat_phat = '$dxp',
                    diem_den = '$dd',
                    thoi_gian = '$time',
                    so_ghe = '$soghe',
                    gia_ve = '$gia'
                     
                    WHERE ma_chuyen_bay=$id
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //4. REdirect to Manage Category with MEssage
                //CHeck whether executed or not
                if($res2==true)
                {
                    //Category Updated
                    $_SESSION['update'] = "<div class='success'>Flight Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-flight.php');
                }
                else
                {
                   
                    //failed to update category
                    $_SESSION['update'] = "<div class='error'>Failed to Update Flight.</div>";
                    header('location:'.SITEURL.'admin/manage-flight.php');
                }

            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>