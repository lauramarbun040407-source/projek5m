<h2>Welcome To CodeIgniter</h2>

<a href="<?= base_url('/')?>">Home</a>
<a href="<?= base_url('User')?>">User</a>
<a href="<?= base_url('Kategori')?>">Kategori</a>
<a href="<?= base_url('Welcome')?>">Welcome</a>
<a href="<?= base_url('About')?>">About</a>
<a href="<?= base_url('Layanan')?>">Layanan</a>
<a href="<?= base_url('Kontak')?>">Kontak</a>

<h2><?=$title ?></h2>

<a href="<?= base_url('Kategori/add')?>">Tambah Kategori</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Action</th>
    </tr>
        <?php if(!empty($kategori)) : ?>

        <?php $no=1; ?>

        <?php foreach ($kategori as $kategori) : ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $kategori['namakategori'] ?></td>
        <td>
            <a href="<?= base_url('/Kategori/edit/'. $kategori['id_kategori'])?>">Edit</a>
            <a href="<?= base_url('/Kategori/delete/'. $kategori['id_kategori'])?>">Hapus</a>
        </td>
    </tr>
        <?php endforeach; ?>

    <?php else: ?>
        <tr>
            <td colspan="4">Data Kategori Belum Ada</td>
        </tr>
        <?php endif; ?>

</table>