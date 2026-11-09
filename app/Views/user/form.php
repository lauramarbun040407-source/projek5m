<h2>Welcome To CodeIgniter</h2>

<a href="<?= base_url('/')?>">Home</a>
<a href="<?= base_url('User')?>">User</a>
<a href="<?= base_url('Welcome')?>">Welcome</a>
<a href="<?= base_url('About')?>">About</a>
<a href="<?= base_url('Layanan')?>">Layanan</a>
<a href="<?= base_url('Kontak')?>">Kontak</a>

<h2><?=$title ?></h2>

<form action= "<?= base_url('/User/store')?>"method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td> 
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="text" name="password"></td> 
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Simpan</button>
            <a href="<?= base_url('user')?>Kembali"></a></td>
        </tr>
    </table>
</form>