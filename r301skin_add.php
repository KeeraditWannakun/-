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
                <h4>เพิ่มข้อมูล R-301</h4>    
                <?php
                    if(isset($_GET['submit'])){
                        $r301skin_name = $_GET['r301skin_name'];
                        $r301skin_rarity = $_GET['r301skin_rarity'];
                        $r301skin_price = $_GET['r301skin_price'];
                        $r301skin_img = $_GET['r301skin_img'];
                        

                        $sql = "insert into r301 (r301skin_name,r301skin_rarity,r301skin_price,r301skin_img) values ('$r301skin_name','$r301skin_rarity','$r301skin_price','$r301skin_img')";
                        
                        include 'connectdb.php';
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "เพิ่ม $r301skin_name เรียบร้อยแล้ว<br>";
                        echo '<a href="shop skin.php"> <button class="bg-rose-500	 mt-5 hover:bg-black text-white font-bold py-2 px-4 rounded-full">แสดงAssault Riflesทั้งหมด</a>';
                    }else{
                ?>
                <div class="col-sm-12 col-md-9 col-lg-9 mx-auto container w-2/5">

<div class="p-4 mt-4 mb-4  focus:outline-none text-white bg-rose-400	 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900" role="alert">
<span class="text-xl font-bold">เพิ่มข้อมูล R-301</span> 
</div>
                    
<form class="form-horizontal" role="form" name="r301skin_add" action="<?php echo $_SERVER['PHP_SELF']?>">
<input type="hidden" name="r301skin_id" id="r301skin_id" value="<?php echo "$fr301skin_id";?>">
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dr301skink:text-white">ชื่อ</label>
    <input type="text" name="r301skin_name" id="r301skin_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ระดับskin</label>
    <input type="text" name="r301skin_rarity" id="r301skin_rarity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ราคา</label>
    <input type="text" name="r301skin_price" id="r301skin_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">รูปภาพ</label>
    <input type="text" name="r301skin_img" id="r301skin_img" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
  </div>
  <button type="submit" name="submit" value="ตกลง" class="focus:outline-none text-white bg-rose-400	 hover:bg-bg-rose-500	 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-rose-900">Submit</button>
</form>
                <?php
                    }
                ?>
                </div>    
            </div>
            
        </div>
        
    </body>
</html>   
    