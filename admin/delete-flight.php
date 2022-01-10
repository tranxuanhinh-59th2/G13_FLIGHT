<?php 
    //Include Constants File
    include('../config/constants.php');

    //echo "Delete Page";
    //Check whether the id and image_name value is set or not
    if(isset($_GET['ma_chuyen_bay']))
    {
        //Get the Value and Delete
        //echo "Get Value and Delete";
        $id = $_GET['ma_chuyen_bay'];
        

        //Remove the physical image file is available
       

        //Delete Data from Database
        //SQL Query to Delete Data from Database
        $sql = "DELETE FROM db_chuyenbay WHERE ma_chuyen_bay=$id";
        echo'Xóa thành công';

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Check whether the data is delete from database or not
        if($res==true)
        {
            //SEt Success MEssage and REdirect
            $_SESSION['delete'] = "<div class='success'>Flight Deleted Successfully.</div>";
            //Redirect to Manage 
            header('location:'.SITEURL.'admin/manage-flight.php');
        }
        else
        {
            //SEt Fail MEssage and Redirecs
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Flight.</div>";
            //Redirect to Manage 
            header('location:'.SITEURL.'admin/manage-flight.php');
        }

 

    }
    else
    {
        //redirect to Manage Page
        header('location:'.SITEURL.'admin/manage-flight.php');
    }
?>