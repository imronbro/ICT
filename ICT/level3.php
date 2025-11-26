<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Level 3 - Dimensi Komposisi Kematian</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@600;900&family=Poppins:wght@400;500;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #000000;
        font-family: 'Poppins', sans-serif;
        color: #ff0000;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        min-height: 100vh;
        padding: 50px 20px;
        text-align: center;
        position: relative;
        overflow-x: hidden;
    }

    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 50%, rgba(139, 0, 0, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(75, 0, 130, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 40% 20%, rgba(139, 0, 0, 0.1) 0%, transparent 50%);
        animation: pulse 4s infinite;
        pointer-events: none;
        z-index: 0;
    }

    @keyframes pulse {
        0%, 100% { opacity: 0.5; }
        50% { opacity: 1; }
    }

    .content {
        position: relative;
        z-index: 1;
    }

    h1 {
        font-family: 'Cinzel', serif;
        font-weight: 900;
        margin-bottom: 20px;
        font-size: 3em;
        color: #ff0000;
        text-shadow: 
            0 0 10px #ff0000,
            0 0 20px #ff0000,
            0 0 30px #ff0000,
            0 0 40px #8b0000;
        animation: flicker 3s infinite;
        letter-spacing: 3px;
    }

    @keyframes flicker {
        0%, 100% { opacity: 1; }
        41%, 43% { opacity: 0.8; }
        45% { opacity: 0.9; }
    }

    .story {
        max-width: 750px;
        font-size: 1.15em;
        margin-bottom: 30px;
        color: #ffcccc;
        line-height: 1.7;
        background: rgba(139, 0, 0, 0.2);
        padding: 25px;
        border-radius: 15px;
        border: 3px solid #8b0000;
        box-shadow: 0 0 30px rgba(139, 0, 0, 0.5);
    }

    .warning-box {
        background: #8b0000;
        color: #fff;
        padding: 15px;
        border-radius: 10px;
        margin: 20px auto;
        max-width: 600px;
        font-weight: bold;
        border: 2px solid #ff0000;
        box-shadow: 0 0 20px rgba(255, 0, 0, 0.6);
        animation: warningPulse 2s infinite;
    }

    @keyframes warningPulse {
        0%, 100% { transform: scale(1); box-shadow: 0 0 20px rgba(255, 0, 0, 0.6); }
        50% { transform: scale(1.02); box-shadow: 0 0 30px rgba(255, 0, 0, 0.9); }
    }

    .gate {
        display: none;
        background: linear-gradient(135deg, #1a0000 0%, #330000 100%);
        color: #ffcccc;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 
            0 10px 40px rgba(255, 0, 0, 0.3),
            inset 0 0 50px rgba(139, 0, 0, 0.2);
        max-width: 600px;
        width: 100%;
        margin-top: 25px;
        animation: fadeIn 0.6s ease;
        border: 4px solid #8b0000;
    }

    .gate.active {
        display: block;
    }

    .gate h2 {
        margin-bottom: 20px;
        color: #ff0000;
        font-size: 2.2em;
        text-shadow: 0 0 10px #ff0000;
        font-family: 'Cinzel', serif;
        font-weight: 900;
    }

    .gate p {
        margin: 12px 0;
        line-height: 1.6;
    }

    .challenge-level {
        background: linear-gradient(135deg, #8b0000 0%, #ff0000 100%);
        color: white;
        padding: 8px 20px;
        border-radius: 25px;
        display: inline-block;
        margin-bottom: 20px;
        font-size: 0.95em;
        font-weight: bold;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
        letter-spacing: 1px;
    }

    .work-shown {
        background: rgba(0, 0, 0, 0.5);
        padding: 18px;
        border-radius: 10px;
        margin: 18px 0;
        font-size: 0.95em;
        text-align: left;
        border-left: 5px solid #ff0000;
        border-right: 5px solid #8b0000;
    }

    .work-shown strong {
        color: #ff6666;
        font-size: 1.05em;
    }

    .formula-box {
        background: #000000;
        color: #ff6666;
        padding: 15px;
        border-radius: 10px;
        margin: 15px 0;
        font-family: 'Courier New', monospace;
        font-size: 1.15em;
        font-weight: bold;
        border: 2px solid #8b0000;
        box-shadow: inset 0 0 20px rgba(139, 0, 0, 0.3);
    }

    input {
        margin-top: 18px;
        padding: 14px 20px;
        border-radius: 10px;
        border: 3px solid #8b0000;
        outline: none;
        width: 200px;
        text-align: center;
        font-size: 1.2em;
        font-weight: bold;
        background: #000;
        color: #ff0000;
    }

    input:focus {
        border-color: #ff0000;
        box-shadow: 0 0 20px rgba(255, 0, 0, 0.5);
    }

    button {
        margin-top: 18px;
        padding: 14px 35px;
        background: linear-gradient(135deg, #8b0000 0%, #ff0000 50%, #8b0000 100%);
        color: #fff;
        border: 3px solid #ff0000;
        border-radius: 30px;
        cursor: pointer;
        font-weight: 700;
        transition: 0.3s;
        font-size: 1.1em;
        box-shadow: 0 5px 20px rgba(255, 0, 0, 0.5);
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    button:hover {
        background: linear-gradient(135deg, #ff0000 0%, #ff4444 50%, #ff0000 100%);
        transform: translateY(-4px);
        box-shadow: 0 8px 30px rgba(255, 0, 0, 0.8);
    }

    .message {
        margin-top: 18px;
        font-weight: 700;
        font-size: 1.2em;
        text-shadow: 0 0 5px currentColor;
    }

    .success {
        color: #00ff00;
        text-shadow: 0 0 10px #00ff00;
    }

    .fail {
        color: #ff0000;
        text-shadow: 0 0 10px #ff0000;
    }

    .final {
        display: none;
        margin-top: 50px;
        font-family: 'Cinzel', serif;
        font-size: 2.2em;
        color: #ff0000;
        animation: victoryPulse 1s ease;
        max-width: 700px;
        text-shadow: 0 0 20px #ff0000;
    }

    .final p {
        font-family: 'Poppins', sans-serif;
        font-size: 0.5em;
        margin-top: 20px;
        color: #ffcccc;
    }

    .demon-icon {
        font-size: 4em;
        animation: rotate 3s infinite;
        display: inline-block;
        filter: drop-shadow(0 0 20px #ff0000);
    }

    @keyframes rotate {
        0%, 100% { transform: rotate(0deg) scale(1); }
        50% { transform: rotate(180deg) scale(1.2); }
    }

    @keyframes victoryPulse {
        0% { transform: scale(0.8); opacity: 0; }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); opacity: 1; }
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.9) translateY(20px); }
        to { opacity: 1; transform: scale(1) translateY(0); }
    }

    @media (max-width: 600px) {
        h1 {
            font-size: 2em;
        }
        .story {
            font-size: 1em;
        }
        .gate {
            padding: 30px 20px;
        }
    }
</style>
</head>
<body>
<div class="content">
    <h1>☠️ LEVEL 3 ☠️</h1>
    <h1 style="font-size: 1.8em; margin-top: -10px;">DIMENSI KOMPOSISI KEMATIAN</h1>
    
    <div class="story">
        <p>Kau telah memasuki <b>Dimensi Terlarang</b> yang bahkan oleh para dewa pun ditakuti.  
        Di sini, <b>Raja Iblis Tertinggi</b> menguji pemahamanmu tentang komposisi fungsi tingkat master.  
        Lima penjaga ultimate berdiri di hadapanmu. Mereka tidak akan menunjukkan belas kasihan!</p>
    </div>

    <div class="warning-box">
        ⚠️ PERINGATAN EKSTREM ⚠️<br>
        Level ini hanya untuk master komposisi fungsi!<br>
        Fungsi pecahan, negatif, dan komposisi berlapis menunggumu!
    </div>

    <!-- Gerbang 1 -->
    <div class="gate active" id="gate1">
        <div class="challenge-level">🔥 NIGHTMARE MODE</div>
        <h2>☠️ PENJAGA PERTAMA</h2>
        <p>Suara bergema dari kegelapan:  
        <br><i>"Buktikan kau bisa menguasai fungsi pecahan!"</i></p>
        
        <div class="formula-box">
            f(x) = 3x - 5<br>
            g(x) = 2x + 7
        </div>
        
        <p><b>Tentukan (f ∘ g)(1) = f(g(1)) = ?</b></p>

        <div class="work-shown">
            <strong>Petunjuk:</strong> 
            <br>1. g(1) = 2(1) + 7 = ?
            <br>2. Masukkan hasil ke f(x) = 3(hasil) - 5
            <br>3. Hitung dengan teliti!
        </div>

        <input type="number" id="answer1" placeholder="???">
        <button onclick="checkAnswer(1)">⚔️ SERANG</button>
        <div class="message" id="msg1"></div>
    </div>

    <!-- Gerbang 2 -->
    <div class="gate" id="gate2">
        <div class="challenge-level">🔥🔥 HELL MODE</div>
        <h2>☠️ PENJAGA KEDUA</h2>
        <p>Penjaga kedua muncul dengan api neraka:
        <br><i>"Angka negatif akan menjadi kehancuranmu!"</i></p>
        
        <div class="formula-box">
            f(x) = x² - 10<br>
            g(x) = 2x + 1
        </div>
        
        <p><b>Tentukan (f ∘ g)(-2) = f(g(-2)) = ?</b></p>

        <div class="work-shown">
            <strong>Petunjuk:</strong>
            <br>1. g(-2) = 2(-2) + 1 = ?
            <br>2. f(hasil) = (hasil)² - 10
            <br>3. Hati-hati dengan angka negatif!
        </div>

        <input type="number" id="answer2" placeholder="???">
        <button onclick="checkAnswer(2)">⚔️ SERANG</button>
        <div class="message" id="msg2"></div>
    </div>

    <!-- Gerbang 3 -->
    <div class="gate" id="gate3">
        <div class="challenge-level">🔥🔥🔥 INFERNO MODE</div>
        <h2>☠️ PENJAGA KETIGA</h2>
        <p>Makhluk mengerikan muncul dari bayangan:  
        <br><i>"Komposisi empat lapis! Berani terima tantanganku?"</i></p>
        
        <div class="formula-box">
            f(x) = x + 3<br>
            g(x) = 2x<br>
            h(x) = x²<br>
            k(x) = x - 1
        </div>
        
        <p><b>Tentukan k(h(g(f(1)))) = ?</b></p>

        <div class="work-shown">
            <strong>Petunjuk:</strong>
            <br>1. f(1) = 1 + 3 = ?
            <br>2. g(hasil f) = 2 × (hasil f) = ?
            <br>3. h(hasil g) = (hasil g)² = ?
            <br>4. k(hasil h) = (hasil h) - 1 = ?
            <br>5. <b>KERJAKAN DARI DALAM KE LUAR!</b>
        </div>

        <input type="number" id="answer3" placeholder="???">
        <button onclick="checkAnswer(3)">⚔️ SERANG</button>
        <div class="message" id="msg3"></div>
    </div>

    <!-- Gerbang 4 -->
    <div class="gate" id="gate4">
        <div class="challenge-level">🔥🔥🔥🔥 APOCALYPSE MODE</div>
        <h2>☠️ PENJAGA KEEMPAT</h2>
        <p>Iblis dengan kekuatan dahsyat menatapmu:
        <br><i>"Fungsi kompleks ini akan menghancurkanmu!"</i></p>
        
        <div class="formula-box">
            f(x) = x² + 2x - 3<br>
            g(x) = 3x - 4
        </div>
        
        <p><b>Tentukan (f ∘ g)(2) = f(g(2)) = ?</b></p>

        <div class="work-shown">
            <strong>Petunjuk:</strong>
            <br>1. g(2) = 3(2) - 4 = ?
            <br>2. f(hasil) = (hasil)² + 2(hasil) - 3
            <br>3. Hitung langkah demi langkah!
            <br>4. Jangan lupa urutan operasi: kuadrat → perkalian → penjumlahan/pengurangan
        </div>

        <input type="number" id="answer4" placeholder="???">
        <button onclick="checkAnswer(4)">⚔️ SERANG</button>
        <div class="message" id="msg4"></div>
    </div>

    <!-- Gerbang 5 - FINAL BOSS -->
    <div class="gate" id="gate5">
        <div class="challenge-level">🔥🔥🔥🔥🔥 FINAL BOSS - DEATH MODE</div>
        <h2><span class="demon-icon">👹</span><br>RAJA IBLIS TERTINGGI</h2>
        <p style="font-size: 1.2em; color: #ff0000;">Seluruh dimensi berguncang! Raja Iblis Tertinggi muncul dengan kekuatan penuh:
        <br><i>"INI ADALAH UJIAN TERAKHIRMU, MANUSIA! KALAHKAN AKU JIKA BERANI!"</i></p>
        
        <div class="formula-box" style="font-size: 1.2em; border: 3px solid #ff0000;">
            f(x) = 2x² - 3x + 1<br>
            g(x) = x + 4
        </div>
        
        <p style="font-size: 1.15em;"><b>Tentukan (g ∘ f)(3) = g(f(3)) = ?</b></p>

        <div class="work-shown" style="border: 3px solid #ff0000;">
            <strong style="font-size: 1.1em;">⚠️ PETUNJUK FINAL:</strong>
            <br>1. f(3) = 2(3)² - 3(3) + 1
            <br>2. Hitung: 2(9) - 9 + 1 = ?
            <br>3. g(hasil f) = (hasil f) + 4
            <br>4. <b style="color: #ff0000;">INI ADALAH PERHITUNGAN TERSULIT! FOKUS!</b>
        </div>

        <input type="number" id="answer5" placeholder="???" style="border: 3px solid #ff0000; font-size: 1.3em;">
        <button onclick="checkAnswer(5)" style="font-size: 1.2em;">⚔️ SERANGAN FINAL!</button>
        <div class="message" id="msg5"></div>
    </div>

    <!-- Akhir Level -->
    <div class="final" id="finalMessage">
        <span class="demon-icon">👑⚔️👑</span>
        <br><b>KEMENANGAN LEGENDARIS!</b>
        <br><span style="font-size: 0.7em;">Raja Iblis Tertinggi Tumbang!</span>
        <p>Kau telah menguasai seni komposisi fungsi!<br>
        Tidak ada yang bisa mengalahkanmu lagi!<br>
        <b style="color: #00ff00;">SELAMAT, KAU ADALAH MASTER SEJATI! 🏆</b></p>
    </div>
</div>

<script>
function checkAnswer(gate) {
    // Jawaban yang benar:
    // Gate 1: g(1) = 2(1) + 7 = 9, f(9) = 3(9) - 5 = 27 - 5 = 22
    // Gate 2: g(-2) = 2(-2) + 1 = -3, f(-3) = (-3)² - 10 = 9 - 10 = -1
    // Gate 3: f(1)=4, g(4)=8, h(8)=64, k(64)=63
    // Gate 4: g(2) = 3(2) - 4 = 2, f(2) = 2² + 2(2) - 3 = 4 + 4 - 3 = 5
    // Gate 5: f(3) = 2(9) - 9 + 1 = 18 - 9 + 1 = 10, g(10) = 10 + 4 = 14
    
    const correctAnswers = {
        1: 22,
        2: -1,
        3: 63,
        4: 5,
        5: 14
    };

    const input = document.getElementById(`answer${gate}`);
    const userAnswer = parseInt(input.value.trim());
    const msg = document.getElementById(`msg${gate}`);

    if (userAnswer === correctAnswers[gate]) {
        if (gate === 5) {
            msg.innerHTML = "⚔️💥 <b>RAJA IBLIS TUMBANG!</b> KAU PEMENANG SEJATI! 💥⚔️";
        } else {
            msg.textContent = "✅ PENJAGA TUMBANG! Lanjut ke penjaga berikutnya...";
        }
        msg.className = "message success";
        input.disabled = true;

        // Buka gerbang berikutnya
        setTimeout(() => {
            document.getElementById(`gate${gate}`).classList.remove('active');
            if (gate < 5) {
                document.getElementById(`gate${gate + 1}`).classList.add('active');
            } else {
                document.getElementById("finalMessage").style.display = "block";
            }
        }, gate === 5 ? 2500 : 1500);
    } else {
        if (gate === 5) {
            msg.innerHTML = "❌ <b>RAJA IBLIS TERLALU KUAT!</b> Hitung ulang dengan teliti!";
        } else {
            msg.textContent = "❌ Serangan gagal! Hitung ulang strategimu!";
        }
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