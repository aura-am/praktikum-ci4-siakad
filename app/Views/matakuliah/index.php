
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Halaman Mata Kuliah</h2>
<p>Berikut adalah daftar mata kuliah.</p>

<table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Mata Kuliah</th>
        <th>SKS</th>
    </tr>
    <tr>
        <td>1</td>
        <td>SI101</td>
        <td>Pemrograman Web</td>
        <td>3</td>
    </tr>
    <tr>
        <td>2</td>
        <td>SI102</td>
        <td>Basis Data</td>
        <td>3</td>
    </tr>
    <tr>
        <td>3</td>
        <td>SI103</td>
        <td>Analisis Sistem</td>
        <td>2</td>
    </tr>
</table>

<?= $this->endSection() ?>
