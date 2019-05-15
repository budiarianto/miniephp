<?php 
include 'koneksi.php';
$sql = "SELECT NIM,NAMA,JENISKELAMIN,PRODI,SEMESTER FROM creat_table";
$result = $conn->query($sql);
echo $code;	
	
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["NIM"]. " - Name: " . $row["NAMA"]. " " . $row["JENISKELAMIN"]. " " .$row["PRODI"]. " " .$row["SEMESTER"]. "<br>";
    }
} else {
    echo "0 results";
}


$conn->close();

?>