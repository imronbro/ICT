<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Level 1 - Pertempuran Gerbang Komposisi</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Poppins:wght@400;500&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #2d174d;
        font-family: 'Poppins', sans-serif;
        color: #f4e1c6;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        min-height: 100vh;
        padding: 50px 20px;
        text-align: center;
    }

    h1 {
        font-family: 'Cinzel', serif;
        margin-bottom: 20px;
        font-size: 2.4em;
        color: #f4e1c6;
    }

    .story {
        max-width: 700px;
        font-size: 1.1em;
        margin-bottom: 30px;
        color: #e5d5b1;
        line-height: 1.6;
    }

    .gate {
        display: none;
        background: #f4e1c6;
        color: #2b2b2b;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.4);
        max-width: 500px;
        width: 100%;
        margin-top: 20px;
        animation: fadeIn 0.5s ease;
    }

    .gate.active {
        display: block;
    }

    .gate h2 {
        margin-bottom: 15px;
        color: #452c63;
    }

    .gate p {
        margin: 10px 0;
        line-height: 1.5;
    }

    .work-shown {
        background: #fff9f0;
        padding: 15px;
        border-radius: 8px;
        margin: 15px 0;
        font-size: 0.95em;
        text-align: left;
    }

    .work-shown strong {
        color: #452c63;
    }

    input {
        margin-top: 15px;
        padding: 10px 15px;
        border-radius: 6px;
        border: 2px solid #452c63;
        outline: none;
        width: 150px;
        text-align: center;
        font-size: 1em;
    }

    input:focus {
        border-color: #6b4a8a;
        box-shadow: 0 0 5px rgba(107, 74, 138, 0.3);
    }

    button {
        margin-top: 15px;
        padding: 10px 25px;
        background: #452c63;
        color: #f4e1c6;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        font-weight: 500;
        transition: 0.3s;
        font-size: 1em;
    }

    button:hover {
        background: #6b4a8a;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .message {
        margin-top: 15px;
        font-weight: 600;
        font-size: 1.1em;
    }

    .success {
        color: #28a745;
    }

    .fail {
        color: #dc3545;
    }

    .final {
        display: none;
        margin-top: 40px;
        font-family: 'Cinzel', serif;
        font-size: 1.8em;
        color: #ffe9b1;
        animation: fadeIn 0.8s ease;
        max-width: 600px;
    }

    .final p {
        font-family: 'Poppins', sans-serif;
        font-size: 0.6em;
        margin-top: 10px;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }

    @media (max-width: 600px) {
        h1 {
            font-size: 1.8em;
        }
        .story {
            font-size: 1em;
        }
        .gate {
            padding: 20px;
        }
    }
</style>
</head>
<body>

    <h1>⚔️ Level 1 ⚔️</h1>
    <div class="story">
        <p>Kau tiba di <b>Lembah Fungsi Terlarang</b>.  
        Untuk menghadapi Raja Iblis Komposisi, kau harus melewati tiga gerbang yang dijaga oleh iblis penjaga.  
        Jawab pertanyaan fungsi komposisi dengan benar agar gerbang terbuka!</p>
    </div>

    <!-- Gerbang 1 -->
    <div class="gate active" id="gate1">
        <h2>🚪 Gerbang 1</h2>
        <p>Penjaga 1:  
        <br><i>"Tunjukkan padaku bagaimana fungsi ini bekerja!"</i></p>
        <p><b>f(x) = 2x + 3</b> dan <b>x = 2</b></p>
        <p>Tentukan <b>f(2) = ?</b></p>

        <div class="work-shown">
            <strong>Petunjuk:</strong> Ganti x dengan 2 di dalam fungsi f(x)
        </div>

        <input type="number" id="answer1" placeholder="Jawaban">
        <button onclick="checkAnswer(1)">Jawab</button>
        <div class="message" id="msg1"></div>
    </div>

    <!-- Gerbang 2 -->
    <div class="gate" id="gate2">
        <h2>🚪 Gerbang 2</h2>
        <p>Penjaga 2: 
        <br><i>"Buktikan kalau kau mengetahui rahasia di bawah ini!"</i></p>
        <p><b>g(x) = 3x – 2</b> dan <b>x = 7</b></p>
        <p>Tentukan <b>g(7) = ?</b></p>

        <div class="work-shown">
            <strong>Petunjuk:</strong> Ganti x dengan 7 di dalam fungsi g(x)
        </div>

        <input type="number" id="answer2" placeholder="Jawaban">
        <button onclick="checkAnswer(2)">Jawab</button>
        <div class="message" id="msg2"></div>
    </div>

    <!-- Gerbang 3 -->
    <div class="gate" id="gate3">
        <h2>🚪 Gerbang 3</h2>
        <p>Penjaga terakhir level 1:  
        <br><i>"Kalau kau benar-benar pahlawan, bukalah gerbang terakhir!"</i></p>
        <p><b>f(x) = 2x + 3</b> dan <b>g(x) = 3x - 2</b></p>
        <p>Tentukan <b>(g ∘ f)(2) = g(f(2)) = ?</b></p>

        <div class="work-shown">
            <strong>Petunjuk:</strong> Hitung f(2) terlebih dahulu, lalu masukkan hasilnya ke dalam g(x)
        </div>

        <input type="number" id="answer3" placeholder="Jawaban">
        <button onclick="checkAnswer(3)">Jawab</button>
        <div class="message" id="msg3"></div>
    </div>

    <!-- Akhir Level -->
    <div class="final" id="finalMessage">
        👑 <b>Kau berhasil melewati semua gerbang!</b>  
        <p>Silakan lanjut ke Level 2. Berhati-hatilah, tantangan berikutnya akan lebih sulit!</p>
    </div>

<script>
function checkAnswer(gate) {
    // Jawaban yang benar:
    // Gate 1: f(2) = 2(2) + 3 = 4 + 3 = 7
    // Gate 2: g(7) = 3(7) - 2 = 21 - 2 = 19
    // Gate 3: f(2) = 7, lalu g(7) = 19
    const correctAnswers = {
        1: 7,
        2: 19,
        3: 19
    };

    const input = document.getElementById(`answer${gate}`);
    const userAnswer = parseInt(input.value.trim());
    const msg = document.getElementById(`msg${gate}`);

    if (userAnswer === correctAnswers[gate]) {
        msg.textContent = "✅ Benar! Gerbang selanjutnya terbuka...";
        msg.className = "message success";
        input.disabled = true;

        // Buka gerbang berikutnya
        setTimeout(() => {
            document.getElementById(`gate${gate}`).classList.remove('active');
            if (gate < 3) {
                document.getElementById(`gate${gate + 1}`).classList.add('active');
            } else {
                document.getElementById("finalMessage").style.display = "block";
            }
        }, 1500);
    } else {
        msg.textContent = "❌ Jawaban salah! Coba lagi!";
        msg.className = "message fail";
        input.value = '';
        input.focus();
    }
}

// Allow Enter key to submit
document.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        const activeGate = document.querySelector('.gate.active');
        if (activeGate) {
            const gateNum = activeGate.id.replace('gate', '');
            checkAnswer(parseInt(gateNum));
        }
    }
});
</script>
</body>
</html>