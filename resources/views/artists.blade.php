<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>الفنانين - الكائن 404</title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box}

body{
    background:#050d15;
    font-family:'Cairo',sans-serif;
    color:white;
    overflow-x:hidden;
}

.page{
    width:100%;
    max-width:480px;
    margin:auto;
    min-height:100vh;
    padding:24px 18px 44px;
    position:relative;
    overflow:hidden;
    background:
    radial-gradient(circle at top, rgba(56,182,255,.22), transparent 32%),
    radial-gradient(circle at bottom, rgba(56,182,255,.12), transparent 36%),
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
    cursor:pointer;
    transition:.45s ease;
}

.artist-card:nth-child(1){animation-delay:.15s}
.artist-card:nth-child(2){animation-delay:.30s}
.artist-card:nth-child(3){animation-delay:.45s}
.artist-card:nth-child(4){animation-delay:.60s}
.artist-card:nth-child(5){animation-delay:.75s}
.artist-card:nth-child(6){animation-delay:.90s}
.artist-card:nth-child(7){animation-delay:1.05s}
.artist-card:nth-child(8){animation-delay:1.20s}
.artist-card:nth-child(9){animation-delay:1.35s}
.artist-card:nth-child(10){animation-delay:1.50s}
.artist-card:nth-child(11){animation-delay:1.65s}
.artist-card:nth-child(12){animation-delay:1.80s}

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

.artist-card:hover{
    transform:translateY(-10px) scale(1.02);
    box-shadow:
    0 24px 55px rgba(0,0,0,.60),
    0 0 40px rgba(56,182,255,.22);
}

.artist-card:hover img{
    transform:scale(1.10);
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

.popup{
    position:fixed;
    inset:0;
    z-index:9999;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:20px;
    background:rgba(0,0,0,.82);
    backdrop-filter:blur(14px);
    opacity:0;
    visibility:hidden;
    transition:.35s ease;
}

.popup.show{
    opacity:1;
    visibility:visible;
}

.popup-box{
    width:100%;
    max-width:560px;
    max-height:86vh;
    overflow-y:auto;
    position:relative;
    border-radius:34px;
    padding:30px 24px 28px;
    border:1px solid rgba(56,182,255,.36);
    background:
    radial-gradient(circle at top, rgba(56,182,255,.18), transparent 34%),
    linear-gradient(180deg,#07111c,#010306);
    transform:translateY(25px) scale(.92);
    transition:.35s ease;
    animation:popupGlow 3s ease-in-out infinite;
}

.popup.show .popup-box{
    transform:translateY(0) scale(1);
}

.popup-close{
    position:absolute;
    top:18px;
    left:18px;
    width:46px;
    height:46px;
    border-radius:16px;
    border:1px solid rgba(56,182,255,.32);
    background:rgba(3,14,24,.78);
    color:white;
    font-size:28px;
    cursor:pointer;
    box-shadow:0 0 18px rgba(56,182,255,.18);
}

.popup-image{
    width:118px;
    height:118px;
    border-radius:28px;
    object-fit:cover;
    object-position:center top;
    border:1px solid rgba(56,182,255,.35);
    box-shadow:0 0 28px rgba(56,182,255,.22);
    margin-bottom:18px;
}

.popup-box h2{
    font-size:34px;
    font-weight:800;
    margin-bottom:8px;
    color:white;
    text-shadow:
    0 0 12px rgba(255,255,255,.22),
    0 0 30px rgba(56,182,255,.75);
}

.popup-role{
    display:inline-block;
    margin-bottom:18px;
    color:#38b6ff;
    font-size:14px;
    font-weight:800;
    padding:7px 16px;
    border-radius:999px;
    background:rgba(255,255,255,.05);
    border:1px solid rgba(56,182,255,.24);
}

.popup-box p{
    color:#e8f8ff;
    font-size:16px;
    line-height:2;
}

@media (min-width:768px){
    .page{
        max-width:720px;
        padding:30px 26px 56px;
    }

    .artists{
        grid-template-columns:1fr 1fr;
        gap:22px;
    }

    .artist-card{
        min-height:380px;
    }

    .artist-card img{
        height:380px;
    }

    .header h1{
        font-size:54px;
    }
}

@media (min-width:1024px){
    .page{
        max-width:1000px;
        padding:34px 42px 70px;
        border-left:1px solid rgba(56,182,255,.12);
        border-right:1px solid rgba(56,182,255,.12);
    }

    .artists{
        grid-template-columns:1fr 1fr 1fr;
        gap:26px;
    }

    .artist-card{
        min-height:390px;
    }

    .artist-card img{
        height:390px;
    }

    .header h1{
        font-size:60px;
    }

    .artist-info h3{
        font-size:26px;
    }
}

@media (max-width:430px){
    .header h1{
        font-size:42px;
    }

    .artist-card{
        min-height:340px;
        border-radius:30px;
    }

    .artist-card img{
        height:340px;
    }

    .artist-info h3{
        font-size:27px;
    }

    .popup-box{
        padding:28px 20px 24px;
        border-radius:30px;
    }

    .popup-box h2{
        font-size:30px;
    }
}

@keyframes fadeUp{
    from{opacity:0;transform:translateY(18px)}
    to{opacity:1;transform:translateY(0)}
}

@keyframes cardIn{
    to{opacity:1;transform:translateY(0) scale(1)}
}

@keyframes scanCard{
    0%,40%{transform:translateX(-120%)}
    70%,100%{transform:translateX(120%)}
}

@keyframes rotateGlow{
    to{transform:rotate(360deg)}
}

@keyframes popupGlow{
    0%,100%{
        box-shadow:
        0 22px 70px rgba(0,0,0,.70),
        0 0 42px rgba(56,182,255,.24);
    }

    50%{
        box-shadow:
        0 22px 70px rgba(0,0,0,.70),
        0 0 65px rgba(56,182,255,.38);
    }
}
</style>
</head>

<body>

<div class="page">

    <div class="top">
        <a href="/" class="back">رجوع</a>
        <div class="badge">CAST 404</div>
    </div>

    <div class="header">
        <h1>الفنانين</h1>
        <p>طاقم عمل مسرحية الكائن 404</p>
        <div class="line"></div>
    </div>

    <div class="artists">

        <div class="artist-card" onclick="openPopup('عبدالعزيز المسلم','نجم العمل','/images/artists/abdulaziz.jpg','عبدالعزيز المسلم أحد أبرز نجوم وصنّاع المسرح الخليجي، وصاحب حضور مميز في الأعمال الجماهيرية وأعمال الرعب المسرحي. يشارك في مسرحية الكائن 404 ضمن تجربة تجمع بين التشويق والذكاء الاصطناعي والأجواء المسرحية المختلفة.')">
            <div class="rank">01</div>
            <img src="/images/artists/abdulaziz.jpg" alt="عبدالعزيز المسلم">
            <div class="artist-info">
                <h3>عبدالعزيز المسلم</h3>
                <span>نجم العمل</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('بثينة الرئيسي','نجمة العمل','/images/artists/buthaina.jpg','بثينة الرئيسي فنانة خليجية معروفة بحضورها القوي وأدائها المميز في الأعمال الدرامية والمسرحية. تشارك في الكائن 404 بشخصية تضيف للعمل طابعًا خاصًا داخل عالم المسرحية.')">
            <div class="rank">02</div>
            <img src="/images/artists/buthaina.jpg" alt="بثينة الرئيسي">
            <div class="artist-info">
                <h3>بثينة الرئيسي</h3>
                <span>نجمة العمل</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('شهاب حاجية','نجم العمل','/images/artists/shihab.jpg','شهاب حاجية ممثل كويتي له حضور كوميدي ومسرحي محبب للجمهور. يشارك في مسرحية الكائن 404 ضمن قالب يجمع بين الترفيه والتشويق.')">
            <div class="rank">03</div>
            <img src="/images/artists/shihab.jpg" alt="شهاب حاجية">
            <div class="artist-info">
                <h3>شهاب حاجية</h3>
                <span>نجم العمل</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('ميس كمر','النجمة','/images/artists/mais.jpg','ميس كمر فنانة لها حضور مسرحي وجماهيري مميز، وتشارك في مسرحية الكائن 404 ضمن أجواء تجمع بين الخيال والتقنية والإثارة.')">
            <div class="rank">04</div>
            <img src="/images/artists/mais.jpg" alt="ميس كمر">
            <div class="artist-info">
                <h3>ميس كمر</h3>
                <span>النجمة</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('عبدالله المسلم','طاقم العمل','/images/artists/abdullah.jpg','عبدالله المسلم يشارك ضمن طاقم عمل مسرحية الكائن 404، في تجربة مسرحية حديثة تعتمد على الأجواء التقنية والذكاء الاصطناعي.')">
            <div class="rank">05</div>
            <img src="/images/artists/abdullah.jpg" alt="عبدالله المسلم">
            <div class="artist-info">
                <h3>عبدالله المسلم</h3>
                <span>طاقم العمل</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('خالد المفيدي','الفنان','/images/artists/khaled.jpg','خالد المفيدي من الأسماء المعروفة في المسرح الخليجي، ويشارك في مسرحية الكائن 404 ضمن تجربة تجمع بين الكوميديا والتشويق والتقنيات الحديثة.')">
            <div class="rank">06</div>
            <img src="/images/artists/khaled.jpg" alt="خالد المفيدي">
            <div class="artist-info">
                <h3>خالد المفيدي</h3>
                <span>الفنان</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('جمال الشطي','الفنان الكوميدي','/images/artists/gamal.jpg','جمال الشطي فنان كوميدي يتميز بحضوره المسرحي وخفة ظله، ويضيف طابعًا ممتعًا داخل عالم الكائن 404.')">
            <div class="rank">07</div>
            <img src="/images/artists/gamal.jpg" alt="جمال الشطي">
            <div class="artist-info">
                <h3>جمال الشطي</h3>
                <span>الفنان الكوميدي</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('شوق الموسوي','النجمة','/images/artists/shouq.jpg','شوق الموسوي تشارك في الكائن 404 ضمن أجواء تجمع بين الدراما والتقنية الحديثة، بحضور مميز وشخصية مختلفة.')">
            <div class="rank">08</div>
            <img src="/images/artists/shouq.jpg" alt="شوق الموسوي">
            <div class="artist-info">
                <h3>شوق الموسوي</h3>
                <span>النجمة</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('محمد المسلم','الفنان الكوميدي','/images/artists/mohamed.jpg','محمد المسلم يشارك ضمن طاقم مسرحية الكائن 404 بأسلوب كوميدي يضيف روحًا مميزة داخل أحداث العمل.')">
            <div class="rank">09</div>
            <img src="/images/artists/mohamed.jpg" alt="محمد المسلم">
            <div class="artist-info">
                <h3>محمد المسلم</h3>
                <span>الفنان الكوميدي</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('علي القريشي','الفنان الكوميدي','/images/artists/aly.jpg','علي القريشي يشارك في الكائن 404 ضمن أجواء كوميدية وتفاعلية تضيف للعمل طابعًا جماهيريًا ممتعًا.')">
            <div class="rank">10</div>
            <img src="/images/artists/aly.jpg" alt="علي القريشي">
            <div class="artist-info">
                <h3>علي القريشي</h3>
                <span>الفنان الكوميدي</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('هبه العبسي','الفنانة الكوميدية','/images/artists/heba.jpg','هبه العبسي فنانة كوميدية تتميز بخفة ظلها وحضورها المسرحي، وتشارك ضمن تجربة الكائن 404.')">
            <div class="rank">11</div>
            <img src="/images/artists/heba.jpg" alt="هبه العبسي">
            <div class="artist-info">
                <h3>هبه العبسي</h3>
                <span>الفنانة الكوميدية</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('منى دشتي','الفنانة','/images/artists/mona.jpg','منى دشتي تشارك في الكائن 404 ضمن تجربة مسرحية حديثة تمزج بين الأداء المسرحي والأجواء التقنية.')">
            <div class="rank">12</div>
            <img src="/images/artists/mona.jpg" alt="منى دشتي">
            <div class="artist-info">
                <h3>منى دشتي</h3>
                <span>الفنانة</span>
            </div>
        </div>

    </div>

</div>

<div class="popup" id="popup">
    <div class="popup-box">
        <button class="popup-close" onclick="closePopup()">×</button>
        <img id="popupImage" class="popup-image" src="" alt="">
        <h2 id="popupTitle"></h2>
        <div class="popup-role" id="popupRole"></div>
        <p id="popupText"></p>
    </div>
</div>

<script>
const popup = document.getElementById('popup');
const popupImage = document.getElementById('popupImage');
const popupTitle = document.getElementById('popupTitle');
const popupRole = document.getElementById('popupRole');
const popupText = document.getElementById('popupText');

function openPopup(title, role, image, text){
    popupTitle.innerText = title;
    popupRole.innerText = role;
    popupImage.src = image;
    popupImage.alt = title;
    popupText.innerText = text;

    popup.classList.add('show');
    document.body.style.overflow = 'hidden';
}

function closePopup(){
    popup.classList.remove('show');
    document.body.style.overflow = '';
}

popup.addEventListener('click', function(e){
    if(e.target === popup){
        closePopup();
    }
});

document.addEventListener('keydown', function(e){
    if(e.key === 'Escape'){
        closePopup();
    }
});
</script>

</body>

</html>