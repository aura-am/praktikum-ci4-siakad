
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Halaman Dosen</h2>
<p>Selamat datang di halaman data dosen.</p>

<table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama Dosen</th>
        <th>Program Studi</th>
    </tr>
    <tr>
        <td>1</td>
        <td>001234</td>
        <td>Pak Ahmad</td>
        <td>Sistem Informasi</td>
    </tr>
    <tr>
        <td>2</td>
        <td>005678</td>
        <td>Bu Siti</td>
        <td>Sistem Informasi</td>
    </tr>
</table>

<?= $this->endSection() ?>
