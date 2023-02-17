<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>php-id-w10</title>
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body>   
<a href="mtskin_add.php" type="button" class="my-4 inline-block px-6 py-2.5 bg-rose-300	mt-32  text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-rose-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg text-xl transition duration-150 ease-in-out">เพิ่มข้อมูล Mastiff Shotgun</a>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-xl	  text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 text-xl uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th  class="px-6 py-3">
                ID
                </th>
                <th  class="px-6 py-3">
                Name
                </th>
                <th  class="px-6 py-3">
                Rarity
                </th>
                <th  class="px-6 py-3">
                Price
                </th>
                <th  class="px-6 py-3">
                Img
                </th>
                
                <th  class="px-6 py-3">
                    <span class="sr-only">แก้ไข้</span>
                </th>
                <th  class="px-6 py-3">
                    <span class="sr-only">ลบ</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <?php
            
                                include 'connectdb.php';
                                $sql =  'SELECT * FROM mt order by mtskin_id';
                                $result = mysqli_query($conn,$sql);
                                while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                    echo '<tr>';
                                    echo '<td class="px-6 py-4">' . $row['mtskin_id'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['mtskin_name'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['mtskin_rarity'] . '</td>';
                                    echo '<td class="px-6 py-4">' . $row['mtskin_price'] . '</td>';                                  
                                    echo '<td class="px-6 py-4"> <img src="'.$row['mtskin_img'].'" width="100px"> </td>';                                               
                                    echo '<td>';
                                    
                            ?>
                    <td class="px-6 py-4 text-right">
                    <a href="mtskin_edit.php?mtskin_id=<?php echo $row['mtskin_id'];?>" class="inline-block px-6 py-2.5 bg-rose-300 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-rose-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out">แก้ไข</a>
                    <a href="JavaScript:if(confirm('ยืนยันการลบ')==true){window.location='mtskin_delete.php?mtskin_id=<?php echo $row["mtskin_id"];?>'}" class="inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">ลบ</a>
                            <?php
                                    echo '</td>';
                                    echo '</tr>';
                                }
                                mysqli_free_result($result);
                                mysqli_close($conn);
                            ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>


    </body>
</html>