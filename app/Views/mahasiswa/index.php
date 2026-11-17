
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Halaman Mahasiswa</h2>

<p>Selamat datang di halaman data mahasiswa.</p>

<table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Program Studi</th>
    </tr>
    <tr>
        <td>1</td>
        <td>2024001</td>
        <td>Andi</td>
        <td>Sistem Informasi</td>
    </tr>
    <tr>
        <td>2</td>
        <td>2024002</td>
        <td>Budi</td>
        <td>Sistem Informasi</td>
    </tr>
</table>

<?= $this->endSection() ?>
