<?php
include "../config/database.php";

$query = mysqli_query($conn, "SELECT * FROM td_jenis_cuti ORDER BY fs_kd_jenis_cuti");
?>

<h3>Data Jenis Cuti</h3>

<table border="1" cellpadding="8">
    <tr>
        <th>Kode Cuti</th>
        <th>Nama Cuti</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
    <tr>
        <td><?= $row['fs_kd_jenis_cuti']; ?></td>
        <td><?= $row['fs_nm_jenis_cuti']; ?></td>
    </tr>
    <?php } ?>
</table>
