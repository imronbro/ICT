<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Fungsi Komposisi</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #f4f6f7;
            padding: 40px;
        }
        nav {
            margin-bottom: 30px;
            background: #0f4c75;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
        }
        nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 15px;
            font-weight: bold;
        }
        nav a:hover {
            color: #ffd700;
        }
        section {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h2 { 
            color: #0f4c75; 
            margin-bottom: 20px;
        }
        .materi-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .materi-card {
            background: #e8f0fe;
            border-left: 5px solid #0f4c75;
            padding: 20px;
            width: 200px;
            border-radius: 10px;
            transition: transform 0.3s, background 0.3s;
        }
        .materi-card:hover {
            transform: translateY(-5px);
            background: #dceeff;
        }
        .materi-card h3 {
            color: #0f4c75;
            margin-bottom: 10px;
        }
        .materi-card a {
            text-decoration: none;
            color: #fff;
            background: #0f4c75;
            padding: 8px 15px;
            border-radius: 5px;
            display: inline-block;
        }
        .materi-card a:hover {
            background: #ffd700;
            color: #0f4c75;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <nav>
        <a href="beranda.php">Beranda</a>
        <a href="materi.php">Materi</a>
        <a href="latihan.php">Latihan</a>
        <a href="tentang.php">Tentang</a>
    </nav>

    <section>
        <h2>Latihan Fungsi Komposisi</h2>
        <p>Pilih latihan untuk menguji pemahamanmu tentang fungsi komposisi.</p>

        <div class="materi-container">
            <div class="materi-card">
                <h3>Latihan 1</h3>
                <p>Pengenalan fungsi komposisi.</p>
                <a href="latihan1.php">Mulai</a>
            </div>

            <div class="materi-card">
                <h3>Latihan 2</h3>
                <p>Menentukan hasil komposisi fungsi.</p>
                <a href="latihan2.php">Mulai</a>
            </div>

            <div class="materi-card">
                <h3>Latihan 3</h3>
                <p>Menggabungkan dua fungsi.</p>
                <a href="latihan3.php">Mulai</a>
            </div>

            <div class="materi-card">
                <h3>Latihan 4</h3>
                <p>Penerapan fungsi komposisi.</p>
                <a href="latihan4.php">Mulai</a>
            </div>
        </div>
    </section>

</body>
</html>
