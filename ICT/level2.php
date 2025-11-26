<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Level 2 - Kastil Komposisi Gelap</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Poppins:wght@400;500&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: linear-gradient(135deg, #1a0a2e 0%, #3d1e5c 100%);
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
        color: #ffd700;
        text-shadow: 0 0 20px rgba(255, 215, 0, 0.5);
    }

    .story {
        max-width: 700px;
        font-size: 1.1em;
        margin-bottom: 30px;
        color: #e5d5b1;
        line-height: 1.6;
        background: rgba(0, 0, 0, 0.3);
        padding: 20px;
        border-radius: 10px;
        border: 2px solid rgba(255, 215, 0, 0.3);
    }

    .gate {
        display: none;
        background: linear-gradient(135deg, #f4e1c6 0%, #e8d4b8 100%);
        color: #2b2b2b;
        padding: 35px;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.5);
        max-width: 550px;
        width: 100%;
        margin-top: 20px;
        animation: fadeIn 0.5s ease;
        border: 3px solid #8b6914;
    }

    .gate.active {
        display: block;
    }

    .gate h2 {
        margin-bottom: 15px;
        color: #8b0000;
        font-size: 1.8em;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }

    .gate p {
        margin: 10px 0;
        line-height: 1.5;
    }

    .challenge-level {
        background: #8b0000;
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 15px;
        font-size: 0.9em;
        font-weight: bold;
    }

    .work-shown {
        background: #fff9f0;
        padding: 15px;
        border-radius: 8px;
        margin: 15px 0;
        font-size: 0.95em;
        text-align: left;
        border-left: 4px solid #8b6914;
    }

    .work-shown strong {
        color: #8b0000;
    }

    .formula-box {
        background: #2d174d;
        color: #ffd700;
        padding: 12px;
        border-radius: 8px;
        margin: 10px 0;
        font-family: 'Courier New', monospace;
        font-size: 1.1em;
        font-weight: bold;
    }

    input {
        margin-top: 15px;
        padding: 12px 15px;
        border-radius: 8px;
        border: 3px solid #8b6914;
        outline: none;
        width: 180px;
        text-align: center;
        font-size: 1.1em;
        font-weight: bold;
    }

    input:focus {
        border-color: #8b0000;
        box-shadow: 0 0 10px rgba(139, 0, 0, 0.3);
    }

    button {
        margin-top: 15px;
        padding: 12px 30px;
        background: linear-gradient(135deg, #8b0000 0%, #b30000 100%);
        color: #ffd700;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        font-weight: 600;
        transition: 0.3s;
        font-size: 1em;
        box-shadow: 0 4px 15px rgba(139, 0, 0, 0.4);
    }

    button:hover {
        background: linear-gradient(135deg, #b30000 0%, #d40000 100%);
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(139, 0, 0, 0.6);
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
        font-size: 2em;
        color: #ffd700;
        animation: fadeIn 0.8s ease;
        max-width: 600px;
        text-shadow: 0 0 20px rgba(255, 215, 0, 0.5);
    }

    .final p {
        font-family: 'Poppins', sans-serif;
        font-size: 0.55em;
        margin-top: 15px;
        color: #e5d5b1;
    }

    .skull {
        font-size: 3em;
        animation: pulse 2s infinite;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }

    @media (max-width: 600px) {
        h1 {
            font-size: 1.8em;
        }
        .story {
            font-size: 1em;
        }
        .gate {
            padding: 25px;
        }
    }
</style>
</head>
<body>

    <h1>⚔️ Level 2 - KASTIL KOMPOSISI GELAP ⚔️</h1>
    <div class="story">
        <p>Kau memasuki <b>Kastil Komposisi Gelap</b> yang dijaga oleh empat iblis kuat.  
        Mereka menguji pemahamanmu tentang <b>komposisi fungsi yang lebih kompleks</b>.  
        Hanya dengan perhitungan yang tepat, kau bisa mengalahkan mereka dan melanjutkan petualanganmu!</p>
        <p style="color: #ff6b6b; margin-top: 10px;">⚠️ <b>Peringatan:</b> Soal-soal ini jauh lebih sulit dari Level 1!</p>
    </div>

    <!-- Gerbang 1 -->
    <div class="gate active" id="gate1">
        <div class="challenge-level">🔥 TINGKAT KESULITAN: SEDANG</div>
        <h2>💀 Iblis Pertama</h2>
        <p>Iblis berkata dengan suara menggelegar:  
        <br><i>"Tunjukkan padaku hasil dari komposisi terbalik!"</i></p>
        
        <div class="formula-box">
            f(x) = x² + 1<br>
            g(x) = 2x - 3
        </div>
        
        <p><b>Tentukan (f ∘ g)(3) = f(g(3)) = ?</b></p>

        <div class="work-shown">
            <strong>Petunjuk:</strong> 
            <br>1. Hitung g(3) terlebih dahulu
            <br>2. Masukkan hasil g(3) ke dalam f(x)
            <br>3. Hitung nilai akhirnya
        </div>

        <input type="number" id="answer1" placeholder="Jawaban">
        <button onclick="checkAnswer(1)">Serang!</button>
        <div class="message" id="msg1"></div>
    </div>

    <!-- Gerbang 2 -->
    <div class="gate" id="gate2">
        <div class="challenge-level">🔥🔥 TINGKAT KESULITAN: SULIT</div>
        <h2>💀 Iblis Kedua</h2>
        <p>Iblis ini lebih licik dan menantangmu:
        <br><i>"Balikkan komposisinya! Berani tidak?"</i></p>
        
        <div class="formula-box">
            f(x) = 3x + 2<br>
            g(x) = x² - 4
        </div>
        
        <p><b>Tentukan (g ∘ f)(2) = g(f(2)) = ?</b></p>

        <div class="work-shown">
            <strong>Petunjuk:</strong>
            <br>1. Hitung f(2) dulu
            <br>2. Gunakan hasilnya untuk menghitung g(hasil f(2))
            <br>3. Ingat: kuadratkan dulu, baru kurangi 4!
        </div>

        <input type="number" id="answer2" placeholder="Jawaban">
        <button onclick="checkAnswer(2)">Serang!</button>
        <div class="message" id="msg2"></div>
    </div>

    <!-- Gerbang 3 -->
    <div class="gate" id="gate3">
        <div class="challenge-level">🔥🔥🔥 TINGKAT KESULITAN: SANGAT SULIT</div>
        <h2>💀 Iblis Ketiga</h2>
        <p>Iblis ini nyaris tak terkalahkan:  
        <br><i>"Coba pecahkan komposisi tiga langkah ini!"</i></p>
        
        <div class="formula-box">
            f(x) = 2x<br>
            g(x) = x + 5<br>
            h(x) = x²
        </div>
        
        <p><b>Tentukan h(g(f(3))) = ?</b></p>

        <div class="work-shown">
            <strong>Petunjuk:</strong>
            <br>1. Mulai dari dalam: f(3) = ?
            <br>2. Lanjut ke tengah: g(hasil f(3)) = ?
            <br>3. Terakhir ke luar: h(hasil g(...)) = ?
            <br>4. Ingat urutan: <b>dari DALAM ke LUAR!</b>
        </div>

        <input type="number" id="answer3" placeholder="Jawaban">
        <button onclick="checkAnswer(3)">Serang!</button>
        <div class="message" id="msg3"></div>
    </div>

    <!-- Gerbang 4 - BOSS -->
    <div class="gate" id="gate4">
        <div class="challenge-level">🔥🔥🔥🔥 TINGKAT KESULITAN: BOSS!</div>
        <h2><span class="skull">💀</span> IBLIS BOSS</h2>
        <p>Raja Iblis Komposisi Level 2 muncul dengan aura menakutkan:
        <br><i>"Ini adalah ujian terakhirmu! Pecahkan komposisi ganda ini!"</i></p>
        
        <div class="formula-box">
            f(x) = x² + 2x<br>
            g(x) = x - 1
        </div>
        
        <p><b>Tentukan (f ∘ g)(4) = f(g(4)) = ?</b></p>

        <div class="work-shown">
            <strong>Petunjuk:</strong>
            <br>1. g(4) = ?
            <br>2. f(hasil g(4)) = (hasil)² + 2(hasil)
            <br>3. Hati-hati dengan perhitungan kuadrat dan perkalian!
        </div>

        <input type="number" id="answer4" placeholder="Jawaban">
        <button onclick="checkAnswer(4)">SERANGAN TERAKHIR!</button>
        <div class="message" id="msg4"></div>
    </div>

    <!-- Akhir Level -->
    <div class="final" id="finalMessage">
        <span class="skull">👑</span>
        <br><b>LUAR BIASA!</b>
        <br>Kau telah mengalahkan semua iblis di Kastil Komposisi Gelap!
        <p>Level 2 selesai! Kau semakin dekat dengan kemenangan akhir.<br>
        Bersiaplah untuk tantangan yang lebih besar di Level 3... 🗡️</p>
    </div>

<script>
function checkAnswer(gate) {
    // Jawaban yang benar:
    // Gate 1: g(3) = 2(3) - 3 = 3, lalu f(3) = 3² + 1 = 9 + 1 = 10
    // Gate 2: f(2) = 3(2) + 2 = 8, lalu g(8) = 8² - 4 = 64 - 4 = 60
    // Gate 3: f(3) = 2(3) = 6, g(6) = 6 + 5 = 11, h(11) = 11² = 121
    // Gate 4: g(4) = 4 - 1 = 3, f(3) = 3² + 2(3) = 9 + 6 = 15
    
    const correctAnswers = {
        1: 10,
        2: 60,
        3: 121,
        4: 15
    };

    const input = document.getElementById(`answer${gate}`);
    const userAnswer = parseInt(input.value.trim());
    const msg = document.getElementById(`msg${gate}`);

    if (userAnswer === correctAnswers[gate]) {
        msg.textContent = gate === 4 ? "⚔️ BOSS TUMBANG! Kau pemenangnya!" : "✅ Iblis tumbang! Lanjut ke iblis berikutnya...";
        msg.className = "message success";
        input.disabled = true;

        // Buka gerbang berikutnya
        setTimeout(() => {
            document.getElementById(`gate${gate}`).classList.remove('active');
            if (gate < 4) {
                document.getElementById(`gate${gate + 1}`).classList.add('active');
            } else {
                document.getElementById("finalMessage").style.display = "block";
            }
        }, gate === 4 ? 2000 : 1500);
    } else {
        msg.textContent = gate === 4 ? "❌ BOSS terlalu kuat! Hitung ulang seranganmu!" : "❌ Seranganmu meleset! Coba lagi!";
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