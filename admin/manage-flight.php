<?php include('partials/menu.php'); ?>

<div class="">
    <div class="container">
        <h1>Quản Lý Lịch Bay</h1>

        <br /><br />
        <?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['remove']))
            {
                echo $_SESSION['remove'];
                unset($_SESSION['remove']);
            }

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if(isset($_SESSION['no-flight-found']))
            {
                echo $_SESSION['no-flight-found'];
                unset($_SESSION['no-flight-found']);
            }

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }

            if(isset($_SESSION['failed-remove']))
            {
                echo $_SESSION['failed-remove'];
                unset($_SESSION['failed-remove']);
            }
        
        ?>
        <br><br>

                <!-- Button to Add Admin -->
                <a href="<?php echo SITEURL; ?>admin/add-flight.php" class="btn btn-primary">Thêm Chuyến Bay</a>

                <br /><br /><br />

              

                <table class="tbl-full">
                    <tr><th>Hãng Bay</th>
                        <th>Mã Chuyến May</th>
                        <th>Điểm Xuất Phát</th>
                        <th>Điểm Đến</th>
                        <th>Thời Gian</th>
                        <th>Số Ghế</th>
                        <th>Giá Vé</th>
                    </tr>

                    <?php 

                        //Query to Get all CAtegories from Database
                        $sql = "SELECT * FROM db_chuyenbay";

                        //Execute Query
                        $res = mysqli_query($conn, $sql);

                        //Count Rows
                        $count = mysqli_num_rows($res);
                        

                        //Create Serial Number Variable and assign value as 1
                        // $sn=1;

                        //Check whether we have data in database or not
                        if($count>0)
                        {
                            //We have data in database
                            //get the data and display
                            while($row=mysqli_fetch_assoc($res))
                            {
                                // $logo = $row['logo']
                                // $id = $row['ma_chuyen_bay'];
                                // $subject_CA = $row['diem_xuat_phat'];
                                // $image_CA = $row['diem_den'];
                                $logo = $row['logo'];
                                $id = $row['ma_chuyen_bay'];
                                $dxp = $row['diem_xuat_phat'];
                                $dd = $row['diem_den'];
                                $time = $row['thoi_gian'];
                                $soghe = $row['so_ghe'];
                                $gia = $row['gia_ve'];

                                // $featured = $row['featured'];
                                // $active = $row['active'];

                                ?>

                                    <tr>
                                        <td>

                                            <?php  
                                                //Chcek whether image name is available or not
                                                if($logo!="")
                                                {
                                                    //Display the Image
                                                    ?>
                                                    
                                                    <img src="<?php echo $logo; ?>" width="100px" >
                                                    
                                                    <?php
                                                }
                                                else
                                                {
                                                    //DIsplay the MEssage
                                                    echo "<div class='error'>Image not Added.</div>";
                                                }
                                            ?>

                                        </td>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $dxp; ?></td>
                                        <td><?php echo $dd; ?></td>
                                        <td><?php echo $time; ?></td>
                                        <td><?php echo $soghe; ?></td>
                                        <td><?php echo $gia; ?></td>
                                        

                                        

                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-flight.php?ma_chuyen_bay=<?php echo $id; ?>" class="btn btn-primary"><i class="bi bi-gear-fill"></i></a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-flight.php?ma_chuyen_bay=<?php echo $id; ?>" class="btn btn-primary"><i class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //WE do not have data
                            //We'll display the message inside table
                            ?>

                            <tr>
                                <td colspan="6"><div class="error">No Flight Added.</div></td>
                            </tr>

                            <?php
                        }
                    
                    ?>

                    

                    
                </table>
    </div>
    
</div>

<?php include('partials/footer.php'); ?>