<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>php-id-w10</title>
            
    </head>
    <body>        
        <?php
            include 'connectdb.php';
            $mtskin_id = $_GET['mtskin_id'];
            $sql = "delete from mt where mtskin_id='$mtskin_id'";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo 'ลบแล้ว';
            }else{
                echo 'ลบไม่ได้';
            }
            mysqli_close($conn);
        ?>
    </body>
</html>