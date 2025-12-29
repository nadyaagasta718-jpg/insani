<?php
include "../config/database.php";

$query = mysqli_query($conn, "SELECT * FROM td_lokasi ORDER BY fs_kd_lokasi");
?>

<h3>Data Lokasi</h3>

<table border="1" cellpadding="8">
    <tr>
        <th>Kode Lokasi</th>
        <th>Nama Lokasi</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
    <tr>
        <td><?= $row['fs_kd_lokasi']; ?></td>
        <td><?= $row['fs_nm_lokasi']; ?></td>
    </tr>
    <?php } ?>
</table>
