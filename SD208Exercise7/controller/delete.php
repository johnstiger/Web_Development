<?php
require "./connection.php";
$id = (int)$_GET['id'];
$sql = "DELETE FROM users WHERE id='".$id."'";
            if(mysqli_query($conn, $sql)){
                    echo "
                    <script type='text/javascript'>
                        if (confirm('Record Deleted successfully!')){
                            location.href='../register.php';
                        }
                    </script>";
            }else{
                    echo "Error updating data : " . mysqli_error($conn);
            }
            mysqli_close($conn);
?>