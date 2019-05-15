<?php
include 'koneksi.php';	
$sql = "SELECT NIM,NAMA,JENISKELAMIN,PRODI,SEMESTER FROM creat_table"; // $sql = variable pengganti query text
$result = $conn->query($sql); // $result sama dengan koneksi yang berhasil ($conn) dilanjutkan (->) ke query 
	echo $code ."<br>";	
  
    // if ($result->num_rows > 0) {

    //     echo "<table border='1' cellpadding='10' cellspacing='0'>
    //       <tr>
    //         <th>NIM</th>
    //         <th>NAMA</th>
    //         <th>JENIS KELAMIN</th>
    //         <th>PRODI</th>
    //         <th>SEMESTER</th>
    //       </tr>";

    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {  // fetch_assoc -> $row['nama filed'] fetch_array -> $row[nomor urut baris]
           
    //       echo"<tr><td>". $row["NIM"]."</td><td>". $row["NAMA"]."</td></tr>";
    //       // excell ='joko'&'yanni'
    //     }


    //     echo "</table>";


    // } else {
    //    echo"tidak ada hasil";  
    // }


    if ($result->num_rows > 0) {

       echo "<select>";

        // output data of each row
        while($option = $result->fetch_assoc()) {  // fetch_assoc -> $row['nama filed'] fetch_array -> $row[nomor urut baris]
           
          echo"<option>". $option["NAMA"]."</option>";
          // excell ='joko'&'yanni'
        }

        echo "<option>1</option>";
        echo "</select>";
      


    } else {
       echo"tidak ada hasil";  
    }

    
   echo "<select>
        <option>1</option>
      </select>
   ";
$conn->close();

?>