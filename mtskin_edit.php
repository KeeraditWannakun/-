<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>php-id-w10-title-edit</title>
        <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>
    <body>
               
<div class="col-sm-12 col-md-9 col-lg-9 mx-auto container w-2/5">

<div class="p-4 mt-4 mb-4  focus:outline-none text-white bg-rose-400 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-rose-900" role="alert">
<span class="text-xl font-bold">แก้ไขข้อมูล Mastiff </span> 
</div>


                <?php
                    include 'connectdb.php';
                    if(isset($_GET['submit'])){
                        $mtskin_id = $_GET['mtskin_id'];
                      $mtskin_name = $_GET['mtskin_name'];
                      $mtskin_rarity = $_GET['mtskin_rarity'];
                      $mtskin_price = $_GET['mtskin_price'];
                      $mtskin_img = $_GET['mtskin_img'];
                      $sql        = "update mt set mtskin_name='$mtskin_name',mtskin_rarity='$mtskin_rarity',mtskin_price ='$mtskin_price',mtskin_img ='$mtskin_img' where mtskin_id='$mtskin_id'";
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "แก้ไข $mtskin_name เรียบร้อยแล้ว<br>";
                        echo '<a href="shop skin1.php"> <button class="bg-rose-500 mt-5 hover:bg-black text-white font-bold py-2 px-4 rounded-full">แสดงทั้งหมด</a>';
                    }else{
                        $fmtskin_id = $_REQUEST['mtskin_id'];
                        $sql =  "SELECT * FROM mt where mtskin_id='$fmtskin_id'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $fmtskin_name = $row['mtskin_name'];
                        $fmtskin_rarity = $row['mtskin_rarity'];
                        $fmtskin_price = $row['mtskin_price'];
                        $fmtskin_img = $row['mtskin_img'];                     
                        mysqli_free_result($result);
                        mysqli_close($conn);                        
                ?>
                    
  <div class="form-group">
<form class="form-horizontal" role="form" name="mtskin_edit" action="<?php echo $_SERVER['PHP_SELF']?>">
<input type="hidden" name="mtskin_id" id="mtskin_id" value="<?php echo "$fmtskin_id";?>">
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อ</label>
    <input type="text" name="mtskin_name" id="mtskin_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo "$fmtskin_name";?>" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ระดับskin</label>
    <input type="text" name="mtskin_rarity" id="mtskin_rarity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo "$fmtskin_rarity";?>" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ราคา</label>
    <input type="text" name="mtskin_price" id="mtskin_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo "$fmtskin_price";?>" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">รูปภาพ</label>
    <input type="text" name="mtskin_img" id="mtskin_img" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo "$fmtskin_img";?>" required>
  </div>
  
  
  <button type="submit" name="submit" value="ตกลง" class="focus:outline-none text-white bg-rose-400 hover:bg-rose-500 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-rose-900">Submit</button>
</form>
                <?php
                    }
                ?>
                </div>    
            </div>
        </div>   


    </body>
</html>