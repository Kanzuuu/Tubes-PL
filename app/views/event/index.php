<?php /** @var array $events */ ?>
<h2>Daftar Event</h2>
<ul>
<?php foreach ($events as $e): ?>
    <li>
        <a href="?url=event/show/<?= htmlspecialchars($e['event_id']) ?>"><?= htmlspecialchars($e['nama_event']) ?></a>
        - <?= htmlspecialchars($e['tanggal_mulai']) ?> sampai <?= htmlspecialchars($e['tanggal_berakhir']) ?>
    </li>
<?php endforeach; ?>
</ul>
