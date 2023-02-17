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

<div class="p-4 volt-4 mb-4  focus:outline-none text-white bg-rose-400 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-rose-900" role="alert">
<span class="text-xl font-bold">แก้ไขข้อมูล Volt SMG</span> 
</div>


                <?php
                    include 'connectdb.php';
                    if(isset($_GET['submit'])){
                        $voltskin_id = $_GET['voltskin_id'];
                      $voltskin_name = $_GET['voltskin_name'];
                      $voltskin_rarity = $_GET['voltskin_rarity'];
                      $voltskin_price = $_GET['voltskin_price'];
                      $voltskin_img = $_GET['voltskin_img'];
                      $sql        = "update volt set voltskin_name='$voltskin_name',voltskin_rarity='$voltskin_rarity',voltskin_price ='$voltskin_price',voltskin_img ='$voltskin_img' where voltskin_id='$voltskin_id'";
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "แก้ไข $voltskin_name เรียบร้อยแล้ว<br>";
                        echo '<a href="shop skin2.php"> <button class="bg-rose-500 volt-5 hover:bg-black text-white font-bold py-2 px-4 rounded-full">แสดงทั้งหมด</a>';
                    }else{
                        $fvoltskin_id = $_REQUEST['voltskin_id'];
                        $sql =  "SELECT * FROM volt where voltskin_id='$fvoltskin_id'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $fvoltskin_name = $row['voltskin_name'];
                        $fvoltskin_rarity = $row['voltskin_rarity'];
                        $fvoltskin_price = $row['voltskin_price'];
                        $fvoltskin_img = $row['voltskin_img'];                     
                        mysqli_free_result($result);
                        mysqli_close($conn);                        
                ?>
                    
  <div class="form-group">
<form class="form-horizontal" role="form" name="voltskin_edit" action="<?php echo $_SERVER['PHP_SELF']?>">
<input type="hidden" name="voltskin_id" id="voltskin_id" value="<?php echo "$fvoltskin_id";?>">
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อ</label>
    <input type="text" name="voltskin_name" id="voltskin_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo "$fvoltskin_name";?>" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ระดับความหายาก</label>
    <input type="text" name="voltskin_rarity" id="voltskin_rarity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo "$fvoltskin_rarity";?>" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ราคา</label>
    <input type="text" name="voltskin_price" id="voltskin_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo "$fvoltskin_price";?>" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">รูปภาพ</label>
    <input type="text" name="voltskin_img" id="voltskin_img" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo "$fvoltskin_img";?>" required>
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