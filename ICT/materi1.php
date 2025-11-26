<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi 1 - Pengenalan Fungsi Komposisi</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: url('https://img.freepik.com/free-photo/wooden-table-blurred-restaurant_1203-9429.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            color: #333;
        }
        section {
            max-width: 850px;
            margin: 60px auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        h2 {
            color: #b02a02;
            margin-bottom: 10px;
        }
        .analog {
            background: #fff8f0;
            border-left: 6px solid #b02a02;
            padding: 15px;
            margin: 20px 0;
            border-radius: 8px;
            text-align: left;
        }
        .btn {
            background: #b02a02;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
            margin: 10px;
        }
        .btn:hover {
            background: #ff7b00;
            transform: scale(1.05);
        }
        .output {
            margin-top: 20px;
            background: #fff3cd;
            padding: 15px;
            border-radius: 10px;
            display: none;
            animation: fadeIn 0.6s ease forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .back-btn {
            margin-top: 25px;
            background: #ff7b00;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .back-btn:hover {
            background: #b02a02;
            transform: scale(1.05);
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #fff;
        }

        /* Elemen animasi ayam dan penggorengan */
        .kitchen {
            position: relative;
            height: 180px;
            margin: 20px 0;
        }
        .chicken {
            position: absolute;
            left: 0;
            bottom: 10px;
            width: 100px;
            transition: all 2s ease;
        }
        .pan {
            position: absolute;
            right: 50px;
            bottom: 0;
            width: 130px;
        }
        .smoke {
            position: absolute;
            right: 100px;
            bottom: 90px;
            font-size: 35px;
            opacity: 0;
            animation: smokeUp 1.8s ease-out forwards;
        }
        @keyframes smokeUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(-30px); opacity: 0; }
        }
    </style>
</head>
<body>
    <section>
        <h2>🍗 Materi 1: Pengenalan Fungsi Komposisi</h2>

        <p>
            Bayangkan kamu sedang berada di dapur restoran dan ingin membuat 
            <b>Ayam Goreng Pedas</b>.  
            Dalam matematika, proses ini bisa diibaratkan sebagai <b>fungsi komposisi</b>.
        </p>

        <div class="analog">
            <p><b>Misalkan:</b></p>
            <ul>
                <li>Ayam mentah = <b>x</b> (variabel awal)</li>
                <li>Proses menggoreng = <b>f(x)</b> → menghasilkan <i>ayam goreng</i></li>
                <li>Proses membumbui pedas = <b>g(x)</b> → menghasilkan <i>makanan berbumbu pedas</i></li>
            </ul>
            <p>
                Jadi, ketika ayam digoreng dulu baru dibumbui pedas, hasilnya adalah 
                <b>g(f(x))</b> → <i>Ayam Goreng Pedas</i>! 🍗🔥
            </p>
        </div>

        <div class="kitchen">
            <img src="img/ayam.png" alt="Ayam Mentah" class="chicken" id="chicken">
            <img src="img/alatgoreng.jpg" alt="Penggorengan" class="pan">
        </div>

        <h3 style="color:#b02a02;">Simulasi Interaktif Dapur</h3>
        <p>Klik tombol di bawah untuk melihat proses fungsi komposisi dalam bentuk simulasi restoran!</p>

        <button class="btn" onclick="prosesF()">f(x): Menggoreng Ayam</button>
        <button class="btn" onclick="prosesG()">g(x): Membumbui Pedas</button>
        <button class="btn" onclick="prosesKomposisi()">(g∘f)(x): Gabungan Proses</button>

        <div id="output" class="output"></div>

        <a href="materi.php" class="back-btn">⬅️ Kembali ke Materi</a>
    </section>

    <div class="footer">
        🍴 Belajar Matematika Lebih Nikmat di Dapur Fungsi Komposisi!
    </div>

    <script>
        function prosesF() {
            const chicken = document.getElementById('chicken');
            const output = document.getElementById('output');

            // Reset posisi ayam
            chicken.style.left = "0";
            chicken.style.transition = "none";
            setTimeout(() => {
                chicken.style.transition = "all 2s ease";
                chicken.style.left = "600px"; // bergerak ke arah wajan
            }, 100);

            // Munculkan asap saat sampai
            setTimeout(() => {
                const smoke = document.createElement('div');
                smoke.className = 'smoke';
                smoke.innerHTML = '💨';
                document.querySelector('.kitchen').appendChild(smoke);
                setTimeout(() => smoke.remove(), 1800);
            }, 1800);

            // Tampilkan teks
            setTimeout(() => {
                output.style.display = 'block';
                output.innerHTML = "<b>f(x):</b> Ayam mentah bergerak ke penggorengan dan digoreng hingga matang dan renyah! 🍗";
            }, 2000);
        }

        function prosesG() {
            const output = document.getElementById('output');
            output.style.display = 'block';
            output.innerHTML = "<b>g(x):</b> Makanan dibumbui dengan saus pedas menggugah selera! 🌶️";
        }

        function prosesKomposisi() {
            const output = document.getElementById('output');
            output.style.display = 'block';
            output.innerHTML = "<b>(g∘f)(x):</b> Proses gabungan — ayam digoreng dulu lalu dibumbui pedas. Jadilah <b>Ayam Goreng Pedas</b> yang lezat! 🍗🔥";
        }
    </script>
</body>
</html>
