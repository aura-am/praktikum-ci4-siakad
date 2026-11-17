
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'SIAKAD' ?></title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f9;
        }

        header {
            background: #2457a7;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background: #183e78;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
        }

        main {
            padding: 30px;
            min-height: 300px;
            text-align: center;
        }

        footer {
            background: #2457a7;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>

<body>

    <header>
        <h1>SIAKAD</h1>
        <p>Sistem Informasi Akademik</p>
    </header>

    <nav>
        <a href="/">Beranda</a>
        <a href="/mahasiswa">Mahasiswa</a>
        <a href="/dosen">Dosen</a>
        <a href="/mata-kuliah">Mata Kuliah</a>
        <a href="/tentang">Tentang</a>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <p>&copy; 2026 SIAKAD</p>
    </footer>

</body>
</html>
