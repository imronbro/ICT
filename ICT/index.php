<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Compath - Learning Composition Function</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Poppins:wght@400;500&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #452c63;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
        font-family: 'Poppins', sans-serif;
        color: #2b2b2b;
    }

    /* Kertas utama */
    .paper {
        background: #f4e1c6;
        padding: 60px 100px;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.4);
        position: relative;
        text-align: center;
        z-index: 2;
        max-width: 800px;
        animation: fadeIn 1.2s ease;
    }

    .paper::before {
        content: '';
        position: absolute;
        top: -20px;
        left: -30px;
        width: 110%;
        height: 110%;
        z-index: -2;
        transform: rotate(-2deg);
        opacity: 0.5;
    }

    /* Teks */
    .paper h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 1.4em;
        color: #2b2b2b;
        margin-bottom: 10px;
    }

    .paper h1 {
        font-family: 'Cinzel', serif;
        font-size: 3em;
        color: #000;
        margin-top: 10px;
    }

    /* Tombol */
    .start-btn {
        display: inline-block;
        margin-top: 40px;
        background: #452c63;
        color: #f4e1c6;
        font-size: 1.1em;
        font-weight: 500;
        padding: 12px 40px;
        border-radius: 30px;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid #2b1441;
        box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    .start-btn:hover {
        background: #f4e1c6;
        color: #452c63;
        transform: scale(1.05);
        box-shadow: 0 6px 14px rgba(0,0,0,0.4);
    }

    /* Dekorasi */
    .decor {
        position: absolute;
        z-index: 1;
    }

    .decor img {
        width: 120px;
    }

    .decor.skull {
        bottom: 40px;
        left: 140px;
        width: 110px;
    }

    .decor.books {
        bottom: 30px;
        left: 50px;
        width: 150px;
    }

    .decor.quill {
        top: 40px;
        right: 120px;
        width: 100px;
        transform: rotate(10deg);
        animation: float 3s ease-in-out infinite;
    }

    .decor.book {
        bottom: 60px;
        right: 100px;
        width: 120px;
    }

    /* Animasi */
    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(10deg); }
        50% { transform: translateY(-8px) rotate(12deg); }
    }

</style>
</head>
<body>
    <div class="paper">
        <h2>Learning Composition Function with a Path Sangar</h2>
        <h1>Compath</h1>
        <a href="beranda.php" class="start-btn">Let's Start</a>
    </div>


</body>
</html>
