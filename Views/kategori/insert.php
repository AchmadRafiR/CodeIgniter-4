<?= $this->extend('template/admin')?>
<?= $this->section('content')?>

<h1>FORM INSERT</h1>

<form action="<?= base_url()?>/admin/kategori/insert" method="post">
    Kategori :
    <input type="text" name="kategori" required>
    <br>

    Keterangan :
    <input type="text" name="keterangan" required>
    <br>

    <input type="submit" name="simpan" value="Simpan">
</form>

<?= $this->endSection()?>