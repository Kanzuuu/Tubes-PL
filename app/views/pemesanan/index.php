<?php /** @var array $orders */ ?>
<h2>Daftar Pemesanan</h2>
<?php if (empty($orders)): ?>
    <p>Tidak ada pemesanan.</p>
<?php else: ?>
    <table border="1" cellpadding="6">
        <tr><th>ID</th><th>Tanggal</th><th>Total</th><th>Status</th><th>Kode Booking</th></tr>
        <?php foreach ($orders as $o): ?>
        <tr>
            <td><?= htmlspecialchars($o['pemesanan_id']) ?></td>
            <td><?= htmlspecialchars($o['tanggal_pemesanan']) ?></td>
            <td><?= htmlspecialchars($o['total_harga']) ?></td>
            <td><?= htmlspecialchars($o['status_pembayaran']) ?></td>
            <td><?= htmlspecialchars($o['kode_booking']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
