<?php /** @var array $tickets */ ?>
<h2>E-Ticket</h2>
<?php if (empty($tickets)): ?>
    <p>Tidak ada tiket untuk pemesanan ini.</p>
<?php else: ?>
    <ul>
    <?php foreach ($tickets as $t): ?>
        <li>Nomor: <?= htmlspecialchars($t['ticket_id']) ?> - QR: <?= htmlspecialchars($t['qr_code']) ?> - Status: <?= htmlspecialchars($t['status_tiket']) ?></li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
