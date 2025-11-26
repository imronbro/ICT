<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Compath - Level Pilihan</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #452c63; /* warna ungu tua */
        font-family: 'Cinzel', serif;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #f4e1c6;
    }

    h1 {
        font-size: 2.5em;
        margin-bottom: 60px;
    }

    .levels {
        display: flex;
        justify-content: center;
        gap: 50px;
    }

    .level {
        background-color: #f4e1c6; /* warna krem */
        width: 180px;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3em;
        color: #2b2b2b;
        border-radius: 6px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-decoration: none;
    }

    .level:hover {
        transform: translateY(-8px);
        box-shadow: 0 6px 18px rgba(0,0,0,0.4);
    }
</style>
</head>
<body>

    <h1>Let's Play</h1>
    <div class="levels">
        <a href="level1.php" class="level">Level 1</a>
        <a href="level2.php" class="level">Level 2</a>
        <a href="level3.php" class="level">Level 3</a>
    </div>

</body>
</html>
