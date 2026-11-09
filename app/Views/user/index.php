<h2>Welcome To CodeIgniter</h2>

<a href="<?= base_url('/')?>">Home</a>
<a href="<?= base_url('User')?>">User</a>
<a href="<?= base_url('Welcome')?>">Welcome</a>
<a href="<?= base_url('About')?>">About</a>
<a href="<?= base_url('Layanan')?>">Layanan</a>
<a href="<?= base_url('Kontak')?>">Kontak</a>

<h2><?=$title ?></h2>

<a href="<?= base_url('User/add')?>">Tambah User</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
        <?php if(!empty($users)) : ?>

        <?php $no=1; ?>

        <?php foreach ($users as $user) : ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $user['nama'] ?></td>
        <td><?= $user['email'] ?></td>
        <td>
            <a href="<?= base_url('/User/edit/'. $user['id'])?>">Edit</a>
            <a href="<?= base_url('/User/delete/'. $user['id'])?>">Hapus</a>
        </td>
    </tr>
        <?php endforeach; ?>

    <?php else: ?>
        <tr>
            <td colspan="4">Data User Belum Ada</td>
        </tr>
        <?php endif; ?>

</table>