<?php /** @var array $users */ ?>
<h2>Daftar User</h2>
<table border="1" cellpadding="6">
    <tr><th>ID</th><th>Nama</th><th>Email</th><th>No Telepon</th><th>Role</th><th>Tanggal Daftar</th></tr>
    <?php foreach ($users as $u): ?>
    <tr>
        <td><?= htmlspecialchars($u['user_id']) ?></td>
        <td><?= htmlspecialchars($u['nama']) ?></td>
        <td><?= htmlspecialchars($u['email']) ?></td>
        <td><?= htmlspecialchars($u['no_telepon']) ?></td>
        <td><?= htmlspecialchars($u['role']) ?></td>
        <td><?= htmlspecialchars($u['tanggal_daftar']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
