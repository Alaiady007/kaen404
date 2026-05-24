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
    cursor:pointer;
    transition:.4s ease;
}

.artist-card:hover{
    transform:translateY(-6px);
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
}

.artist-card img{
    width:100%;
    height:360px;
    object-fit:cover;
    object-position:center top;
    display:block;
    transition:.5s ease;
}

.artist-card:hover img{
    transform:scale(1.08);
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
}

.popup{
    position:fixed;
    inset:0;
    z-index:9999;
    background:rgba(0,0,0,.82);
    backdrop-filter:blur(12px);
    display:flex;
    align-items:center;
    justify-content:center;
    padding:20px;
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
    background:
    radial-gradient(circle at top, rgba(56,182,255,.18), transparent 30%),
    linear-gradient(180deg,#07111c,#010306);
    border:1px solid rgba(56,182,255,.30);
    border-radius:34px;
    padding:28px;
    position:relative;
    box-shadow:
    0 0 45px rgba(56,182,255,.22);
    transform:scale(.88);
    transition:.35s ease;
}

.popup.show .popup-box{
    transform:scale(1);
}

.popup-close{
    position:absolute;
    top:18px;
    left:18px;
    width:44px;
    height:44px;
    border-radius:14px;
    border:none;
    background:rgba(56,182,255,.12);
    color:white;
    font-size:22px;
    cursor:pointer;
}

.popup-box img{
    width:110px;
    height:110px;
    object-fit:cover;
    border-radius:24px;
    margin-bottom:18px;
    border:1px solid rgba(56,182,255,.25);
}

.popup-box h2{
    font-size:34px;
    margin-bottom:12px;
    color:#38b6ff;
}

.popup-role{
    display:inline-block;
    margin-bottom:18px;
    color:#fff;
    font-size:14px;
    padding:7px 16px;
    border-radius:999px;
    background:rgba(255,255,255,.06);
    border:1px solid rgba(56,182,255,.24);
}

.popup-box p{
    line-height:2;
    color:#e6f7ff;
    font-size:16px;
}

@media (min-width:768px){

    .page{
        max-width:720px;
        padding:30px 26px 56px;
    }

    .artists{
        grid-template-columns:1fr 1fr;
    }
}

@media (min-width:1024px){

    .page{
        max-width:1000px;
    }

    .artists{
        grid-template-columns:1fr 1fr 1fr;
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

        <div class="artist-card" onclick="openPopup('عبدالعزيز المسلم','نجم العمل','/images/artists/abdulaziz.jpg','عبدالعزيز المسلم أحد أبرز نجوم المسرح الخليجي وصاحب بصمة مميزة في الأعمال الجماهيرية.')">
            <div class="rank">01</div>
            <img src="/images/artists/abdulaziz.jpg">
            <div class="artist-info">
                <h3>عبدالعزيز المسلم</h3>
                <span>نجم العمل</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('بثينة الرئيسي','نجمة العمل','/images/artists/buthaina.jpg','بثينة الرئيسي فنانة خليجية معروفة بحضورها المميز وأعمالها المسرحية والدرامية.')">
            <div class="rank">02</div>
            <img src="/images/artists/buthaina.jpg">
            <div class="artist-info">
                <h3>بثينة الرئيسي</h3>
                <span>نجمة العمل</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('شهاب حاجية','نجم العمل','/images/artists/shihab.jpg','شهاب حاجية ممثل كويتي شاب يشارك في الكائن 404 ضمن تجربة تجمع بين التشويق والكوميديا.')">
            <div class="rank">03</div>
            <img src="/images/artists/shihab.jpg">
            <div class="artist-info">
                <h3>شهاب حاجية</h3>
                <span>نجم العمل</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('ميس كمر','النجمة','/images/artists/mais.jpg','ميس كمر فنانة لها حضور مسرحي وجماهيري مميز داخل أجواء الكائن 404.')">
            <div class="rank">04</div>
            <img src="/images/artists/mais.jpg">
            <div class="artist-info">
                <h3>ميس كمر</h3>
                <span>النجمة</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('عبدالله المسلم','طاقم العمل','/images/artists/abdullah.jpg','عبدالله المسلم يشارك ضمن طاقم عمل مسرحية الكائن 404.')">
            <div class="rank">05</div>
            <img src="/images/artists/abdullah.jpg">
            <div class="artist-info">
                <h3>عبدالله المسلم</h3>
                <span>طاقم العمل</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('خالد المفيدي','الفنان','/images/artists/khaled.jpg','خالد المفيدي من الأسماء المعروفة في المسرح الخليجي ويشارك في الكائن 404.')">
            <div class="rank">06</div>
            <img src="/images/artists/khaled.jpg">
            <div class="artist-info">
                <h3>خالد المفيدي</h3>
                <span>الفنان</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('جمال الشطي','الفنان الكوميدي','/images/artists/gamal.jpg','جمال الشطي يضيف طابعًا كوميديًا ممتعًا داخل عالم الكائن 404.')">
            <div class="rank">07</div>
            <img src="/images/artists/gamal.jpg">
            <div class="artist-info">
                <h3>جمال الشطي</h3>
                <span>الفنان الكوميدي</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('شوق الموسوي','النجمة','/images/artists/shouq.jpg','شوق الموسوي تشارك بحضور مميز ضمن أجواء تجمع بين الدراما والتقنية الحديثة.')">
            <div class="rank">08</div>
            <img src="/images/artists/shouq.jpg">
            <div class="artist-info">
                <h3>شوق الموسوي</h3>
                <span>النجمة</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('محمد المسلم','الفنان الكوميدي','/images/artists/mohamed.jpg','محمد المسلم يشارك بأسلوب كوميدي يضيف روحًا مميزة داخل أحداث العمل.')">
            <div class="rank">09</div>
            <img src="/images/artists/mohamed.jpg">
            <div class="artist-info">
                <h3>محمد المسلم</h3>
                <span>الفنان الكوميدي</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('علي القريشي','الفنان الكوميدي','/images/artists/aly.jpg','علي القريشي يشارك ضمن أجواء كوميدية وتفاعلية داخل المسرحية.')">
            <div class="rank">10</div>
            <img src="/images/artists/aly.jpg">
            <div class="artist-info">
                <h3>علي القريشي</h3>
                <span>الفنان الكوميدي</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('هبه العبسي','الفنانة الكوميدية','/images/artists/heba.jpg','هبه العبسي تتميز بخفة ظلها وحضورها المسرحي ضمن الكائن 404.')">
            <div class="rank">11</div>
            <img src="/images/artists/heba.jpg">
            <div class="artist-info">
                <h3>هبه العبسي</h3>
                <span>الفنانة الكوميدية</span>
            </div>
        </div>

        <div class="artist-card" onclick="openPopup('منى دشتي','الفنانة','/images/artists/mona.jpg','منى دشتي تشارك ضمن تجربة مسرحية حديثة تمزج بين الأداء والأجواء التقنية.')">
            <div class="rank">12</div>
            <img src="/images/artists/mona.jpg">
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

        <img id="popupImage" src="">

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

function openPopup(title,role,image,text){

    popupTitle.innerText = title;
    popupRole.innerText = role;
    popupImage.src = image;
    popupText.innerText = text;

    popup.classList.add('show');

    document.body.style.overflow = 'hidden';
}

function closePopup(){

    popup.classList.remove('show');

    document.body.style.overflow = '';
}

popup.addEventListener('click',function(e){

    if(e.target === popup){
        closePopup();
    }

});

</script>

</body>

</html>