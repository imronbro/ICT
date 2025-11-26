<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Fungsi Komposisi</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom, #ffecd2, #fcb69f);
            margin: 0;
            padding: 0;
            text-align: center;
        }
    .container {
        max-width: 800px;
        margin: 60px auto;
        background: #fff8f0;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    h1 {
        color: #e85a4f;
    }

    p {
        color: #333;
        font-size: 18px;
    }

    .question {
        background: #ffe4c4;
        border-radius: 15px;
        padding: 20px;
        margin: 20px 0;
        text-align: left;
    }

    .question h3 {
        color: #d84315;
    }

    .option {
        background: #fff;
        border: 2px solid #ff7043;
        border-radius: 10px;
        margin: 10px 0;
        padding: 10px;
        cursor: pointer;
        transition: 0.3s;
    }

    .option:hover {
        background: #ffccbc;
    }

    .result {
        font-weight: bold;
        margin-top: 20px;
        font-size: 20px;
    }

    .back-btn {
        display: inline-block;
        margin-top: 30px;
        background: #e85a4f;
        color: white;
        padding: 12px 25px;
        border-radius: 10px;
        text-decoration: none;
        transition: 0.3s;
    }

    .back-btn:hover {
        background: #d84315;
    }


</style>
```

</head>
<body>
    <div class="container">
        <h1>Latihan 1: Mengenal Fungsi Komposisi 🍗</h1>


        <p>1. Dalam dunia memasak, kita bisa mengibaratkan fungsi komposisi seperti proses memasak ayam pedas.  
        Misalnya:  
        <b>f(x)</b> = menggoreng ayam, dan <b>g(x)</b> = memberi bumbu pedas.  
        Maka <b>(g ∘ f)(x)</b> artinya ayam digoreng terlebih dahulu, baru dibumbui pedas.</p>

    <div class="question">
        <h3>Pertanyaan:</h3>
        <p>Jika <b>f(x)</b> = menggoreng ayam dan <b>g(x)</b> = membumbui pedas, maka urutan yang benar untuk menghasilkan ayam goreng pedas adalah...</p>
        
        <div class="option" onclick="checkAnswer(1)">a. f(g(x)) - Bumbui dulu, baru goreng</div>
        <div class="option" onclick="checkAnswer(2)">b. g(f(x)) - Goreng dulu, baru bumbui</div>
        <div class="option" onclick="checkAnswer(3)">c. f(x) + g(x) - Lakukan bersamaan</div>
    </div>

    <div class="result" id="result"></div>

    <p>2. Dalam dunia memasak, kita bisa mengibaratkan fungsi komposisi seperti proses memasak ayam pedas.  
        Misalnya:  
        <b>f(x)</b> = menggoreng ayam, dan <b>g(x)</b> = memberi bumbu pedas.  
        Maka <b>(g ∘ f)(x)</b> artinya ayam digoreng terlebih dahulu, baru dibumbui pedas.</p>

    <div class="question">
        <h3>Pertanyaan:</h3>
        <p>Jika <b>f(x)</b> = menggoreng ayam dan <b>g(x)</b> = membumbui pedas, maka urutan yang benar untuk menghasilkan ayam goreng pedas adalah...</p>
        
        <div class="option" onclick="checkAnswer(1)">a. f(g(x)) - Bumbui dulu, baru goreng</div>
        <div class="option" onclick="checkAnswer(2)">b. g(f(x)) - Goreng dulu, baru bumbui</div>
        <div class="option" onclick="checkAnswer(3)">c. f(x) + g(x) - Lakukan bersamaan</div>
    </div>

    <div class="result" id="result"></div>


    <a href="latihan.php" class="back-btn">← Kembali ke latihan</a>
</div>

<script>
    function checkAnswer(option) {
        const result = document.getElementById("result");
        const chicken = document.getElementById("chicken");

        if (option === 2) {
            result.innerHTML = "✅ Benar!";
            result.style.color = "#2e7d32";
            chicken.classList.add("move");
            setTimeout(() => chicken.classList.remove("move"), 2000);
        } else {
            result.innerHTML = "❌ Coba lagi! Ingat, fungsi komposisi dilakukan berurutan: f(x) lebih dulu.";
            result.style.color = "#c62828";
        }
    }
</script>
```

</body>
</html>
