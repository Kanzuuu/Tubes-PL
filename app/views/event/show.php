<?php /** @var array $event */ ?>
<?php if ($event): ?>
    <h2><?= htmlspecialchars($event['nama_event']) ?></h2>
    <p><strong>Artis:</strong> <?= htmlspecialchars($event['artis']) ?></p>
    <p><strong>Venue:</strong> <?= htmlspecialchars($event['venue']) ?></p>
    <p><strong>Deskripsi:</strong> <?= nl2br(htmlspecialchars($event['deskripsi'])) ?></p>
    <p><strong>Tanggal:</strong> <?= htmlspecialchars($event['tanggal_mulai']) ?> - <?= htmlspecialchars($event['tanggal_berakhir']) ?></p>
<?php else: ?>
    <p>Event tidak ditemukan.</p>
<?php endif; ?>
