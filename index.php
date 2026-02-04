<!DOCTYPE html>
<html lang="ku" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وێبسایتی ڕاید عبدالله</title>
    <style>
        /* ستایلی گشتی و پاشبنەما */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #050505; /* ڕەنگی ڕەشی قووڵ */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
        }

        /* کۆنتێنەری سەرەکی */
        .neon-container {
            text-align: center;
            padding: 40px;
            border: 2px solid #0ff;
            border-radius: 20px;
            box-shadow: 0 0 15px #0ff, inset 0 0 15px #0ff;
            background: rgba(0, 0, 0, 0.8);
            transition: 0.5s;
        }

        .neon-container:hover {
            box-shadow: 0 0 30px #f0f, inset 0 0 20px #f0f;
            border-color: #f0f;
        }

        /* ستایلی نوسینە نیۆنەکە */
        h1 {
            color: #fff;
            font-size: 3rem;
            text-shadow: 
                0 0 7px #fff,
                0 0 10px #fff,
                0 0 21px #fff,
                0 0 42px #0ff,
                0 0 82px #0ff,
                0 0 92px #0ff,
                0 0 102px #0ff,
                0 0 151px #0ff;
            animation: flicker 2s infinite alternate;
        }

        /* ئەنیمەیشنی لێدان (Flicker) بۆ نوسینەکە */
        @keyframes flicker {
            0%, 18%, 22%, 25%, 53%, 57%, 100% {
                text-shadow: 
                0 0 7px #fff,
                0 0 10px #fff,
                0 0 42px #0ff,
                0 0 82px #0ff,
                0 0 92px #0ff;
            }
            20%, 24%, 55% {       
                text-shadow: none;
            }
        }

        p {
            color: #0ff;
            font-size: 1.2rem;
            margin-top: 20px;
            letter-spacing: 2px;
        }

        /* دوگمەی نیۆن */
        .btn {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 25px;
            color: #0ff;
            border: 1px solid #0ff;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
            text-transform: uppercase;
        }

        .btn:hover {
            background: #0ff;
            color: #000;
            box-shadow: 0 0 20px #0ff;
        }
    </style>
</head>
<body>

    <div class="neon-container">
        <h1>بەخێر بێن بۆ وێبسایتی ڕاید عبدالله</h1>
      
        <a href="#" class="btn">بچۆ ناوەوە</a>
    </div>

</body>
</html>
