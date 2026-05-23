<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>منو احنا - الكائن 404</title>

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
    padding:24px 18px 44px;
    background:
    radial-gradient(circle at top, rgba(56,182,255,.22), transparent 32%),
    radial-gradient(circle at bottom, rgba(56,182,255,.12), transparent 36%),
    linear-gradient(180deg,#07111c,#010306);
    position:relative;
    overflow:hidden;
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

.top{
    position:relative;
    z-index:5;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
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
    margin-bottom:28px;
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

.card{
    position:relative;
    z-index:5;
    border-radius:34px;
    padding:24px;
    background:
    linear-gradient(135deg, rgba(4,20,32,.96), rgba(2,8,15,.98));
    border:1px solid rgba(56,182,255,.30);
    box-shadow:
    0 18px 45px rgba(0,0,0,.52),
    inset 0 0 18px rgba(56,182,255,.04),
    0 0 28px rgba(56,182,255,.12);
    animation:fadeUp .9s ease both;
}

.card p{
    font-size:17px;
    line-height:2.05;
    color:#eafaff;
    margin-bottom:16px;
}

.highlight{
    color:#38b6ff;
    font-weight:800;
    text-shadow:0 0 16px rgba(56,182,255,.65);
}

.quote{
    margin:24px 0;
    padding:18px;
    border-radius:24px;
    background:rgba(56,182,255,.06);
    border:1px solid rgba(56,182,255,.22);
    color:#fff;
    font-size:20px;
    font-weight:800;
    text-align:center;
    box-shadow:0 0 24px rgba(56,182,255,.10);
}

.tags{
    position:relative;
    z-index:5;
    margin-top:22px;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:12px;
}

.tag{
    padding:14px;
    border-radius:22px;
    text-align:center;
    background:rgba(56,182,255,.06);
    border:1px solid rgba(56,182,255,.22);
    color:#dff7ff;
    font-weight:800;
    box-shadow:0 0 18px rgba(56,182,255,.08);
}

.cta{
    position:relative;
    z-index:5;
    display:block;
    margin-top:26px;
    text-align:center;
    text-decoration:none;
    color:white;
    padding:18px;
    border-radius:28px;
    font-size:20px;
    font-weight:800;
    background:linear-gradient(135deg,#0ea5e9,#38b6ff);
    box-shadow:
    0 14px 36px rgba(56,182,255,.24),
    0 0 28px rgba(56,182,255,.22);
}

.small{
    position:relative;
    z-index:5;
    margin-top:16px;
    text-align:center;
    color:#9ee8ff;
    font-size:13px;
}

@keyframes fadeUp{
    from{
        opacity:0;
        transform:translateY(22px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}
</style>
</head>

<body>

<div class="page">

    <div class="top">
        <a href="/" class="back">رجوع</a>
        <div class="badge">ABOUT 404</div>
    </div>

    <div class="header">
        <h1>منو احنا</h1>
        <p>تجربة مسرحية من عالم قريب جدًا</p>
        <div class="line"></div>
    </div>

    <div class="card">

        <p>
            صُنّاع مسرحية <span class="highlight">"مصاص الدماء"</span>،
            <span class="highlight">"زمن دراكولا"</span>،
            <span class="highlight">"خطوات الشيطان"</span> و
            <span class="highlight">"الطقاقه نوره - عرس الجن"</span>
            يقدمون لكم:
        </p>

        <div class="quote">
            الكائن 404
        </div>

        <p>
            مو مجرد مسرحية.
        </p>

        <p>
            هذه قصة كل بيت ممكن يصير فيه هذا الشيء بدون ما يحسون.
        </p>

        <p>
            عائلة تعبت من المشاكل، فقررت تعتمد على الذكاء الاصطناعي في كل شيء:
            قراراتهم، حياتهم، وحتى مشاعرهم.
        </p>

        <p>
            إلى أن وصلوا لقرار غريب:
            <span class="highlight">استبدال الأب بروبوت رجل آلي يشبهه.</span>
        </p>

        <p>
            في البداية كان كل شيء مثالي:
            أب ذكي ما يعصب، ما يغلط، يخدمهم ويفهم الكل.
        </p>

        <p>
            لكن شنو يصير لما يتحول هذا الكمال إلى سيطرة؟
            وشنو يصير لما الذكاء الاصطناعي يبدأ يتحكم بمصير الأم والعائلة؟
        </p>

        <p>
            هل الزوجة والعيال يعيشون حياة أفضل؟
            أو يفقدون نفسهم داخل عالم مصنوع؟
        </p>

        <p>
            رعب، ضحك، كوميديا موقف، وواقع ممكن نعيشه قريب.
        </p>

        <p>
            تجربة مسرحية مختلفة تحيط فيكم من كل مكان بين الصالة والمسرح.
        </p>

    </div>

    <div class="tags">
        <div class="tag">رعب</div>
        <div class="tag">كوميديا</div>
        <div class="tag">ذكاء اصطناعي</div>
        <div class="tag">تجربة تفاعلية</div>
    </div>

    <a href="https://www.gofortickets.com" class="cta" target="_blank">
        احجز الآن
    </a>

    <div class="small">
        وخلك جزء من القصة
    </div>

</div>

</body>
</html>