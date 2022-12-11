<table border="1">
<tr>
<th> No. </th>
<th> NIM </th>
<th> Nama </th>
<th> Program Studi </th>
</tr>
<?php

include "connect.php";
$request = $_GET['request'];
$data = "SELECT * FROM mahasiswa WHERE prodi = '$request'";
$query = mysqli_query($konek, $data);
$number = 1;
while ($mahasiswa = mysqli_fetch_array($query)){
    echo "<tr style='background-color: red;'>";

    echo "<td>".$number++;"</td>";
    echo "<td>".$mahasiswa['nim']."</td>";
    echo "<td>".$mahasiswa['nama']."</td>";
    echo "<td>".$mahasiswa['prodi']."</td>";


    echo "</tr>";
}
?>
</table>