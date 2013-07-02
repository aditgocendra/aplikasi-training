<br>
<table align="center" border="1" style="text-align: center" class="table btn-warning">
    <tr class="btn-inverse">
        <td>Username</td>
        <td>Email</td>
        <td>No Telepon</td>
    </tr>
    <?php
    include 'koneksi.php';
    $query = mysql_query("SELECT * FROM `register` where akses = 'user' order by username asc");
    while ($data = mysql_fetch_array($query)) {
        ?>
    <tr class="btn-info">
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
        </tr>
    <?php } ?>
</table>