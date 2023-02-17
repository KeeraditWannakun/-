<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    

</head>
<body>

       
        <div class="container mx-auto">
            
            
            <div class="row">
                
                <div class="col-sm-12 col-md-9 col-lg-9">
                <h4>เพิ่มข้อมูล Mastiff Shotgun </h4>    
                <?php
                    if(isset($_GET['submit'])){
                        $mtskin_name = $_GET['mtskin_name'];
                        $mtskin_rarity = $_GET['mtskin_rarity'];
                        $mtskin_price = $_GET['mtskin_price'];
                        $mtskin_img = $_GET['mtskin_img'];
                        

                        $sql = "insert into mt (mtskin_name,mtskin_rarity,mtskin_price,mtskin_img) values ('$mtskin_name','$mtskin_rarity','$mtskin_price','$mtskin_img')";
                        
                        include 'connectdb.php';
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เพิ่ม $mtskin_name เรียบร้อยแล้ว<br>";
                        echo '<a href="shop skin1.php"> <button class="bg-rose-500 mt-5 hover:bg-black text-white font-bold py-2 px-4 rounded-full">แสดง Mastiff ทั้งหมด</a>';
                    }else{
                ?>
                <div class="col-sm-12 col-md-9 col-lg-9 mx-auto container w-2/5">

<div class="p-4 mt-4 mb-4  focus:outline-none text-white bg-rose-400 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-rose-900" role="alert">
<span class="text-xl font-bold">เพิ่มข้อมูล Mastiff </span> 
</div>
                    
<form class="form-horizontal" role="form" name="mtskin_add" action="<?php echo $_SERVER['PHP_SELF']?>">
<input type="hidden" name="mtskin_id" id="mtskin_id" value="<?php echo "$fmtskin_id";?>">
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อ</label>
    <input type="text" name="mtskin_name" id="mtskin_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ระดับskin</label>
    <input type="text" name="mtskin_rarity" id="mtskin_rarity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ราคา</label>
    <input type="text" name="mtskin_price" id="mtskin_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">รูปภาพ</label>
    <input type="text" name="mtskin_img" id="mtskin_img" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
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
    