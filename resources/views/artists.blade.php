<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>الفنانين - الكائن 404</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            background:#050d15;
            font-family:'Cairo',sans-serif;
            color:white;
            overflow-x:hidden;
        }

        .page{

            max-width:480px;

            margin:auto;

            min-height:100vh;

            padding:24px 18px 42px;

            position:relative;

            overflow:hidden;

            background:
            radial-gradient(circle at top,
            rgba(56,182,255,.22),
            transparent 32%),

            radial-gradient(circle at bottom,
            rgba(56,182,255,.12),
            transparent 36%),

            linear-gradient(180deg,#07111c,#010306);
        }

        .page::before{

            content:"";

            position:absolute;

            inset:0;

            background-image:
            linear-gradient(rgba(56,182,255,.08) 1px, transparent 1px),
            linear-gradient(90deg, rgba(56,182,255,.06) 1px, transparent 1px);

            background-size:42px 42px;

            opacity:.22;

            pointer-events:none;
        }

        .page::after{

            content:"";

            position:absolute;

            inset:-40%;

            background:
            conic-gradient(
            from 180deg,
            transparent,
            rgba(56,182,255,.08),
            transparent,
            rgba(56,182,255,.12),
            transparent
            );

            animation:rotateGlow 12s linear infinite;

            pointer-events:none;
        }

        .top{

            position:relative;

            z-index:5;

            display:flex;

            justify-content:space-between;

            align-items:center;

            margin-bottom:28px;
        }

        .back{

            color:white;

            text-decoration:none;

            padding:10px 18px;

            border-radius:20px;

            border:1px solid rgba(56,182,255,.35);

            background:rgba(3,14,24,.78);

            box-shadow:0 0 20px rgba(56,182,255,.18);

            font-weight:700;
        }

        .badge{

            color:#38b6ff;

            font-size:14px;

            font-weight:800;

            letter-spacing:1px;

            text-shadow:0 0 14px rgba(56,182,255,.8);
        }

        .header{

            position:relative;

            z-index:5;

            text-align:center;

            margin-bottom:30px;

            animation:fadeUp .8s ease both;
        }

        .header h1{

            font-size:46px;

            font-weight:800;

            color:#fff;

            text-shadow:
            0 0 12px rgba(255,255,255,.22),
            0 0 35px rgba(56,182,255,.75);
        }

        .header p{

            display:inline-block;

            margin-top:10px;

            color:#e8f8ff;

            font-size:15px;

            padding:7px 18px;

            border-radius:999px;

            border:1px solid rgba(56,182,255,.24);

            background:rgba(255,255,255,.04);
        }

        .line{

            width:160px;

            height:2px;

            margin:18px auto 0;

            background:linear-gradient(to right, transparent, #38b6ff, transparent);

            box-shadow:0 0 14px rgba(56,182,255,.7);
        }

        .artists{

            position:relative;

            z-index:5;

            display:grid;

            grid-template-columns:1fr;

            gap:22px;
        }

        .artist-card{

            position:relative;

            min-height:360px;

            border-radius:34px;

            overflow:hidden;

            border:1px solid rgba(56,182,255,.34);

            background:rgba(3,14,24,.78);

            box-shadow:
            0 18px 45px rgba(0,0,0,.55),
            0 0 28px rgba(56,182,255,.14);

            opacity:0;

            transform:translateY(28px) scale(.96);

            animation:cardIn .75s ease forwards;

            text-decoration:none;

            color:white;

            display:block;
        }

        .artist-card:nth-child(1){animation-delay:.15s;}
        .artist-card:nth-child(2){animation-delay:.30s;}
        .artist-card:nth-child(3){animation-delay:.45s;}
        .artist-card:nth-child(4){animation-delay:.60s;}
        .artist-card:nth-child(5){animation-delay:.75s;}

        .artist-card::before{

            content:"";

            position:absolute;

            inset:0;

            background:
            linear-gradient(
            120deg,
            transparent 0%,
            rgba(56,182,255,.22) 45%,
            transparent 65%);

            transform:translateX(-120%);

            animation:scanCard 3.4s ease-in-out infinite;

            z-index:4;

            pointer-events:none;
        }

        .artist-card::after{

            content:"";

            position:absolute;

            inset:0;

            background:
            linear-gradient(
            to top,
            rgba(0,0,0,.92),
            rgba(0,0,0,.15) 45%,
            transparent 70%);

            z-index:2;
        }

        .artist-card img{

            width:100%;

            height:360px;

            object-fit:cover;

            object-position:center top;

            display:block;

            transform:scale(1.04);

            transition:.5s ease;
        }

        .artist-card:hover img{

            transform:scale(1.09);
        }

        .artist-info{

            position:absolute;

            right:22px;

            left:22px;

            bottom:22px;

            z-index:5;
        }

        .artist-info h3{

            font-size:30px;

            font-weight:800;

            margin-bottom:7px;

            text-shadow:
            0 0 12px rgba(255,255,255,.22),
            0 0 30px rgba(56,182,255,.75);
        }

        .artist-info span{

            display:inline-block;

            color:#dff7ff;

            font-size:14px;

            padding:6px 14px;

            border-radius:999px;

            background:rgba(255,255,255,.06);

            border:1px solid rgba(56,182,255,.24);

            backdrop-filter:blur(10px);
        }

        .rank{

            position:absolute;

            top:18px;

            right:18px;

            z-index:5;

            width:54px;

            height:54px;

            border-radius:18px;

            display:flex;

            align-items:center;

            justify-content:center;

            font-size:24px;

            font-weight:800;

            color:#38b6ff;

            background:rgba(3,14,24,.75);

            border:1px solid rgba(56,182,255,.35);

            box-shadow:0 0 20px rgba(56,182,255,.22);
        }

        @keyframes fadeUp{

            from{
                opacity:0;
                transform:translateY(18px);
            }

            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        @keyframes cardIn{

            to{
                opacity:1;
                transform:translateY(0) scale(1);
            }
        }

        @keyframes scanCard{

            0%,40%{
                transform:translateX(-120%);
            }

            70%,100%{
                transform:translateX(120%);
            }
        }

        @keyframes rotateGlow{

            to{
                transform:rotate(360deg);
            }
        }

    </style>

</head>

<body>

<div class="page">

    <div class="top">

        <a href="/" class="back">
            رجوع
        </a>

        <div class="badge">
            CAST 404
        </div>

    </div>

    <div class="header">

        <h1>
            الفنانين
        </h1>

        <p>
            طاقم عمل مسرحية الكائن 404
        </p>

        <div class="line"></div>

    </div>

    <div class="artists">

        <a href="/artists/abdulaziz" class="artist-card">

            <div class="rank">01</div>

            <img src="/images/artists/abdulaziz.jpg" alt="عبدالعزيز المسلم">

            <div class="artist-info">

                <h3>
                    عبدالعزيز المسلم
                </h3>

                <span>
                    نجم العمل
                </span>

            </div>

        </a>

        <a href="/artists/buthaina" class="artist-card">

            <div class="rank">02</div>

            <img src="/images/artists/buthaina.jpg" alt="بثينة الرئيسي">

            <div class="artist-info">

                <h3>
                    بثينة الرئيسي
                </h3>

                <span>
                    نجمة العمل
                </span>

            </div>

        </a>

        <a href="/artists/shihab" class="artist-card">

            <div class="rank">03</div>

            <img src="/images/artists/shihab.jpg" alt="شهاب حاجية">

            <div class="artist-info">

                <h3>
                    شهاب حاجية
                </h3>

                <span>
                    نجم العمل
                </span>

            </div>

        </a>

        <a href="/artists/mais" class="artist-card">

            <div class="rank">04</div>

            <img src="/images/artists/mais.jpg" alt="ميس كمر">

            <div class="artist-info">

                <h3>
                    ميس كمر
                </h3>

                <span>
                    النجمة
                </span>

            </div>

        </a>

        <a href="/artists/abdullah" class="artist-card">

            <div class="rank">05</div>

            <img src="/images/artists/abdullah.jpg" alt="عبدالله المسلم">

            <div class="artist-info">

                <h3>
                    عبدالله المسلم
                </h3>

                <span>
                    طاقم العمل
                </span>

            </div>

        </a>

    </div>

</div>

</body>

</html>