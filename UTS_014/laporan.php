<?php
include "koneksi.php";
?>

<style>
    body{
        background-color: #F8F8FF;
        font
        }
</style>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN</title>
</head>
<body>
    <center><h2>LAPORAN</h2></center>   
    <a href="laporan_add.php">TAMBAH</a>  <a href="laporan.php">LIHAT</a>
    <br>
    <?php
        $sql = "SELECT I.*,IG.id as ig_id, IG.nama as ig_nama, S.id as s_id, S.nama as s_nama
                FROM item I
                JOIN item_grp IG ON I.item_grp_id = IG.id
                JOIN satuan S ON I.satuan_id = S.id";
        $res = $koneksi->query($sql);
        $jum_data = $res->num_rows;

        echo "Ditemukan $jum_data data";
        echo "<table border='1' width='100%'>";
    	echo "	<thead>
				<tr>
					<td width='5%'><center><b>No.</td></center>
					<td width='5%'><center><b>Act</td></center>
					<td width='10%'><center><b>ID</td></center>
					<td width='15%'><center><b>Nama</td></center>
					<td width='15%'><center><b>Jenis</td></center>
					<td width='5%'><center><b>Satuan</td></center>
					<td width='10%'><center><b>Harga</td></center>	
                    <td width='15%'><center><b>Tambah</td>
					<td width='15%'><center><b>update</td>
				</tr>
			</thead
			<tbody>";

        $i = 0;
        while($rows = $res->fetch_array(MYSQLI_BOTH)){
            $i++;
            echo "<tr>
            <td align='center'>$i</td>
            <td align='center'>
                <a href='laporan_detil.php?id=".$rows['id']."'>DETIL</a>
            </td>
            <td>".$rows['id']."</td>
            <td>".$rows['nama']."</td>
            <td>".$rows['ig_nama']."</td>
            <td>".$rows['s_nama']."</td>
            <td>".$rows['hpp']."</td>
            <td>".$rows['crt_date']."</td>
            <td>".$rows['upd_date']."</td>
        </tr>";
        }
        echo "	</tbody>
		</table>"
    ?>
</body>
</html>