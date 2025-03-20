<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Konsultasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            padding: 20px;
            color: #374151;
        }

        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2563eb;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #d1d5db;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #2563eb;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9fafb;
        }

        .text-center {
            text-align: center;
        }

        .signature {
            margin-top: 40px;
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Laporan Konsultasi Masyarakat</h1>
        <p class="text-center">Tanggal: <?= date('d-m-Y') ?></p>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Bukti</th>
                    <th>Status</th>
                    <th>Tanggapan</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($konsultasi)): ?>
                    <?php foreach ($konsultasi as $key => $item): ?>
                        <tr>
                            <td class="text-center"> <?= $key + 1 ?> </td>
                            <td> <?= htmlspecialchars($item['nama']) ?> </td>
                            <td> <?= htmlspecialchars($item['alamat']) ?> </td>
                            <td class="text-center"> <?= htmlspecialchars($item['telpon']) ?> </td>
                            <td> <?= htmlspecialchars($item['judul']) ?> </td>
                            <td class="text-center"> <?= htmlspecialchars($item['kategori']) ?> </td>
                            <td style="width:250px;"> <?= htmlspecialchars($item['deskripsi']) ?> </td>
                            <td class="text-center"> <?= htmlspecialchars($item['tanggal']) ?> </td>
                            <td class="text-center"> <a href="<?= htmlspecialchars($item['bukti']) ?>" target="_blank">Lihat Bukti</a> </td>
                            <td class="text-center"> <?= htmlspecialchars($item['status']) ?> </td>
                            <td style="width:250px;"> <?= htmlspecialchars($item['tanggapan']) ?> </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="11" class="text-center">Tidak ada data konsultasi.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="signature">
            <p>Disetujui oleh,</p>
            <p style="margin-top: 50px; font-weight: bold;">(...................................)</p>
        </div>
    </div>
</body>

</html>