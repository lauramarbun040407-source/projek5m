<h2>Welcome To CodeIgniter</h2>

<a href="<?= base_url('/')?>">Home</a>
<a href="<?= base_url('User')?>">User</a>
<a href="<?= base_url('Kategori')?>">Kategori</a>
<a href="<?= base_url('Welcome')?>">Welcome</a>
<a href="<?= base_url('About')?>">About</a>
<a href="<?= base_url('Layanan')?>">Layanan</a>
<a href="<?= base_url('Kontak')?>">Kontak</a>

<h2><?=$title ?></h2>

<form action= "<?= base_url('/Kategori/store')?>"method="post">
    <table>
        <tr>
            <td>Nama Kategori</td>
            <td><input type="text" name="namakategori"></td>
        </tr>

        <tr>
            <td></td>
            <td><button type="submit">Simpan</button>
            <a href="<?= base_url('kategori')?>Kembali"></a></td>
        </tr>
    </table>
</form>