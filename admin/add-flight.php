<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="container">
        <h1>Thêm Chuyến Bay</h1>

        <br><br>

        <?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        
        ?>

        <br><br>

        <!-- Add CAtegory Form Starts -->
        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Mã Chuyến Bay: </td>
                    <td>
                        <input type="text" name="ma_chuyen_bay" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Điểm Xuất Phát: </td>
                    <td>
                        <input type="text" name="diem_xuat_phat" placeholder="">
                    </td>
                </tr>

                <tr>
                    <td>Điểm Đến: </td>
                    <td>
                        <input type="text" name="diem_den">
                    </td>
                </tr>
                <tr>
                    <td>Thời Gian: </td>
                    <td>
                        <input type="text" name="thoi_gian" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Số Ghế: </td>
                    <td>
                        <input type="text" name="so_ghe" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Giá Vé: </td>
                    <td>
                        <input type="text" name="gia_ve" placeholder="">
                    </td>
                </tr>
                <!-- <tr>
                    <td>Hãng Bay: </td>
                    <td>
                        <input type="text" name="ma_chuyen_bay" placeholder="">
                    </td>
                </tr> -->

               

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Thêm Chuyến Bay" class="btn btn-primary">
                    </td>
                </tr>

            </table>

        </form>
        <!-- Add CAtegory Form Ends -->

        <?php 
        
            //CHeck whether the Submit Button is Clicked or Not
            if(isset($_POST['submit']))
            {
                //echo "Clicked";

                //1. Get the Value from CAtegory Form

                $id = $_POST['ma_chuyen_bay'];
                $dxp = $_POST['diem_xuat_phat'];
                $dd = $_POST['diem_den'];
                $time = $_POST['thoi_gian'];
                $soghe = $_POST['so_ghe'];
                $gia = $_POST['gia_ve'];
            

                //2. Create SQL Query to Insert CAtegory into Database
                $sql = "INSERT INTO db_chuyenbay SET 
                    ma_chuyen_bay = '$id ',
                   diem_xuat_phat ='$dxp',
                    diem_den ='$dd',
                    thoi_gian = '$time ',
                    so_ghe = '$soghe ',
                    gia_ve = '$gia'
                    
                ";

                //3. Execute the Query and Save in Database
                $res = mysqli_query($conn, $sql);

                //4. Check whether the query executed or not and data added or not
                if($res==true)
                {
                    //Query Executed and Category Added
                    $_SESSION['add'] = "<div class='success'>Flight Added Successfully.</div>";
                    //Redirect to Manage Category Page
                    header('location:'.SITEURL.'admin/manage-flight.php');
                }
                else
                {
                    //Failed to Add CAtegory
                    $_SESSION['add'] = "<div class='error'>Failed to Add Category.</div>";
                    //Redirect to Manage Category Page
                    header('location:'.SITEURL.'admin/add-flight.php');
                }
            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>