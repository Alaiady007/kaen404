<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>الكائن 404</title>

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

/* شاشة البداية */
.intro{
    position:fixed;
    inset:0;
    z-index:9999;
    background:#000;
    display:flex;
    align-items:center;
    justify-content:center;
    overflow:hidden;
    transition:1s ease;
}

.intro.hide{
    opacity:0;
    visibility:hidden;
}

.intro::before{
    content:"";
    position:absolute;
    inset:0;
    background-image:
    linear-gradient(rgba(56,182,255,.12) 1px, transparent 1px),
    linear-gradient(90deg, rgba(56,182,255,.10) 1px, transparent 1px);
    background-size:38px 38px;
    opacity:.22;
    animation:gridMove 1.8s linear infinite;
}

.intro::after{
    content:"";
    position:absolute;
    width:140%;
    height:120px;
    background:
    linear-gradient(to bottom,
    transparent,
    rgba(56,182,255,.22),
    transparent);
    animation:scanLine 1.5s ease-in-out infinite;
}

.video-bg{
    position:absolute;
    inset:0;
    overflow:hidden;
    opacity:0;
    transition:1s ease;
}

.video-bg.show{
    opacity:1;
}

.video-bg video{
    width:100%;
    height:100%;
    object-fit:cover;
    filter:blur(45px);
    transform:scale(1.25);
    opacity:.25;
}

.main-video{
    position:relative;
    z-index:3;
    width:100%;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:18px;
    opacity:0;
    transform:scale(.75);
    transition:1.2s ease;
    clip-path:circle(0% at 50% 50%);
}

.main-video.open{
    opacity:1;
    transform:scale(1);
    clip-path:circle(75% at 50% 50%);
}

.main-video.close{
    clip-path:circle(0% at 50% 50%);
    opacity:0;
    transform:scale(.85);
}

.main-video video{
    width:100%;
    max-width:1100px;
    max-height:100%;
    object-fit:contain;
    border-radius:22px;
    box-shadow:
    0 0 45px rgba(56,182,255,.25),
    0 0 120px rgba(56,182,255,.12);
}

/* دائرة البداية */
.ai-gate{
    position:absolute;
    z-index:8;
    width:230px;
    height:230px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    border:2px solid rgba(56,182,255,.25);
    box-shadow:
    0 0 35px rgba(56,182,255,.35),
    inset 0 0 35px rgba(56,182,255,.15);
    background:rgba(3,14,24,.55);
    backdrop-filter:blur(12px);
    transition:1s ease;
}

.ai-gate.open{
    transform:scale(4);
    opacity:0;
}

.ai-gate::before{
    content:"";
    position:absolute;
    inset:18px;
    border-radius:50%;
    border:2px dashed rgba(56,182,255,.55);
    animation:spin 4s linear infinite;
}

.ai-gate::after{
    content:"";
    position:absolute;
    inset:38px;
    border-radius:50%;
    border:2px solid rgba(56,182,255,.25);
    animation:pulse 1.4s ease-in-out infinite;
}

.start-btn{
    position:relative;
    z-index:10;
    width:122px;
    height:122px;
    border-radius:50%;
    border:1px solid rgba(56,182,255,.45);
    background:rgba(4,20,32,.85);
    color:white;
    font-size:18px;
    font-weight:800;
    cursor:pointer;
    box-shadow:
    0 0 25px rgba(56,182,255,.35),
    inset 0 0 20px rgba(56,182,255,.12);
}

.intro-title{
    position:absolute;
    bottom:55px;
    left:20px;
    right:20px;
    z-index:8;
    text-align:center;
    transition:.8s ease;
}

.intro-title.hide{
    opacity:0;
    transform:translateY(20px);
}

.intro-title h2{
    font-size:42px;
    font-weight:800;
    text-shadow:
    0 0 12px rgba(255,255,255,.25),
    0 0 35px rgba(56,182,255,.85);
}

.intro-title h2 span{
    color:#38b6ff;
}

.intro-title p{
    margin-top:10px;
    color:#dff7ff;
    font-size:14px;
}

.skip-btn{
    position:absolute;
    top:28px;
    left:28px;
    z-index:20;
    padding:12px 20px;
    border-radius:18px;
    background:rgba(3,14,24,.78);
    border:1px solid rgba(56,182,255,.35);
    color:white;
    font-size:15px;
    font-weight:800;
    cursor:pointer;
    display:none;
}

.skip-btn.show{
    display:block;
}

/* الموقع */
.page{
    width:100%;
    max-width:480px;
    margin:auto;
    min-height:100vh;
    background:
    radial-gradient(circle at 50% 45%,rgba(56,182,255,.18),transparent 28%),
    radial-gradient(circle at bottom,rgba(56,182,255,.14),transparent 35%),
    linear-gradient(180deg,#07111c 0%,#040c14 45%,#010306 100%);
    overflow:hidden;
    position:relative;
    opacity:0;
    transform:translateY(24px);
    transition:1s ease;
}

.page.show{
    opacity:1;
    transform:translateY(0);
}

.page::before{
    content:"";
    position:absolute;
    inset:0;
    background-image:
    linear-gradient(rgba(56,182,255,.08) 1px, transparent 1px),
    linear-gradient(90deg, rgba(56,182,255,.06) 1px, transparent 1px);
    background-size:42px 42px;
    opacity:.20;
    pointer-events:none;
}

.topbar{
    position:absolute;
    top:24px;
    left:24px;
    z-index:20;
}

.lang{
    width:62px;
    height:62px;
    border-radius:22px;
    border:1px solid rgba(56,182,255,.45);
    background:rgba(3,14,24,.78);
    color:white;
    font-size:22px;
    font-weight:800;
    box-shadow:0 0 24px rgba(56,182,255,.28);
}

.poster{
    position:relative;
    height:520px;
    overflow:hidden;
}

.poster img{
    width:100%;
    height:100%;
    object-fit:cover;
    object-position:center top;
    display:block;
}

.poster::after{
    content:"";
    position:absolute;
    inset:0;
    background:
    linear-gradient(to bottom,
    rgba(0,0,0,.05),
    rgba(0,18,28,.20) 45%,
    rgba(1,6,10,.98) 100%);
}

.title-box{
    position:relative;
    z-index:5;
    margin-top:-105px;
    text-align:center;
    padding:0 22px 28px;
    animation:softUp .9s ease both;
}

.title-main{
    display:flex;
    justify-content:center;
    align-items:baseline;
    gap:12px;
    margin-bottom:6px;
}

.title-main h1{
    font-size:54px;
    line-height:1;
    font-weight:800;
    color:white;
    text-shadow:
    0 0 12px rgba(255,255,255,.25),
    0 0 35px rgba(56,182,255,.75);
}

.title-main span{
    font-size:36px;
    font-weight:800;
    color:#38b6ff;
}

.subtitle{
    display:inline-block;
    color:#eefbff;
    font-size:16px;
    padding:7px 18px;
    border-radius:999px;
    background:rgba(255,255,255,.04);
    border:1px solid rgba(56,182,255,.20);
}

.tech-line{
    width:170px;
    height:2px;
    margin:18px auto 0;
    background:linear-gradient(to right,transparent,#38b6ff,transparent);
    box-shadow:0 0 16px rgba(56,182,255,.6);
}

.menu{
    position:relative;
    z-index:5;
    padding:0 24px 42px;
    display:flex;
    flex-direction:column;
    gap:18px;
}

.menu a{
    height:88px;
    text-decoration:none;
    color:white;
    border-radius:28px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 22px;
    background:linear-gradient(135deg,rgba(4,20,32,.96),rgba(2,8,15,.98));
    border:1px solid rgba(56,182,255,.30);
    box-shadow:
    0 12px 35px rgba(0,0,0,.45),
    inset 0 0 18px rgba(56,182,255,.04),
    0 0 20px rgba(56,182,255,.10);
    animation:menuFloat 4s ease-in-out infinite;
}

.menu a:nth-child(2){
    animation-delay:.2s;
}

.menu a:nth-child(3){
    animation-delay:.4s;
}

.menu a:nth-child(4){
    animation-delay:.6s;
}

.item-right{
    display:flex;
    align-items:center;
    gap:18px;
}

.icon{
    width:54px;
    height:54px;
    border-radius:18px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#38b6ff;
    font-size:30px;
    background:rgba(56,182,255,.08);
    border:1px solid rgba(56,182,255,.18);
}

.text{
    font-size:22px;
    font-weight:800;
}

.arrow{
    color:#38b6ff;
    font-size:34px;
    font-weight:800;
}

@media (min-width:768px){
    .page{
        max-width:720px;
    }

    .poster{
        height:620px;
    }

    .menu{
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:20px;
        padding:0 34px 50px;
    }

    .menu a{
        height:96px;
    }
}

@media (min-width:1024px){
    .page{
        max-width:1000px;
        border-left:1px solid rgba(56,182,255,.12);
        border-right:1px solid rgba(56,182,255,.12);
    }

    .poster{
        height:680px;
    }

    .title-main h1{
        font-size:68px;
    }

    .title-main span{
        font-size:46px;
    }

    .subtitle{
        font-size:18px;
    }

    .menu{
        padding:0 70px 70px;
    }
}

@media (max-width:430px){
    .poster{
        height:500px;
    }

    .title-main h1{
        font-size:46px;
    }

    .title-main span{
        font-size:32px;
    }

    .menu{
        padding:0 18px 36px;
    }

    .menu a{
        height:82px;
        border-radius:24px;
    }

    .text{
        font-size:20px;
    }

    .icon{
        width:48px;
        height:48px;
        font-size:26px;
    }

    .main-video{
        padding:12px;
    }

    .intro-title h2{
        font-size:34px;
    }
}

@keyframes spin{
    to{
        transform:rotate(360deg);
    }
}

@keyframes pulse{
    0%,100%{
        transform:scale(1);
        opacity:.6;
    }
    50%{
        transform:scale(1.12);
        opacity:1;
    }
}

@keyframes gridMove{
    from{
        transform:translateY(0);
    }
    to{
        transform:translateY(38px);
    }
}

@keyframes scanLine{
    0%{
        top:-150px;
    }
    100%{
        top:100%;
    }
}

@keyframes softUp{
    from{
        opacity:0;
        transform:translateY(20px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

@keyframes menuFloat{
    0%,100%{
        transform:translateY(0);
    }
    50%{
        transform:translateY(-4px);
    }
}
</style>
</head>

<body>

<div class="intro" id="intro">

    <button class="skip-btn" id="skipBtn" onclick="skipIntro()">تخطي</button>

    <div class="video-bg" id="videoBg">
        <video autoplay muted loop playsinline>
            <source src="https://fls-a1d8ff63-a975-4141-af4a-40b8e28df760.laravel.cloud/404%20END.mp4" type="video/mp4">
        </video>
    </div>

    <div class="main-video" id="mainVideo">
        <video playsinline id="introVideo">
            <source src="https://fls-a1d8ff63-a975-4141-af4a-40b8e28df760.laravel.cloud/404%20END.mp4" type="video/mp4">
        </video>
    </div>

    <div class="ai-gate" id="aiGate">
        <button class="start-btn" onclick="startExperience()">ابدأ</button>
    </div>

    <div class="intro-title" id="introTitle">
        <h2>الكائن <span>404</span></h2>
        <p>تجربة تفاعلية مدعومة بالذكاء الاصطناعي</p>
    </div>

</div>

<div class="page" id="page">

    <div class="topbar">
        <button class="lang">EN</button>
    </div>

    <div class="poster">
        <img src="/images/hero.jpg" alt="الكائن 404">
    </div>

    <div class="title-box">

        <div class="title-main">
            <h1>الكائن</h1>
            <span>404</span>
        </div>

        <div class="subtitle">مسرحية تقنية • ذكاء اصطناعي</div>
        <div class="tech-line"></div>

    </div>

    <div class="menu">

        <a href="/artists">
            <div class="item-right">
                <div class="icon">✦</div>
                <div class="text">الفنانين</div>
            </div>
            <div class="arrow">›</div>
        </a>

        <a href="/cafeteria">
            <div class="item-right">
                <div class="icon">☕</div>
                <div class="text">كافتيريا</div>
            </div>
            <div class="arrow">›</div>
        </a>

        <a href="#">
            <div class="item-right">
                <div class="icon">◎</div>
                <div class="text">تصوير مع الفنانين</div>
            </div>
            <div class="arrow">›</div>
        </a>

        <a href="#">
            <div class="item-right">
                <div class="icon">◯</div>
                <div class="text">منو احنا</div>
            </div>
            <div class="arrow">›</div>
        </a>

    </div>

</div>

<script>
const intro = document.getElementById('intro');
const page = document.getElementById('page');
const video = document.getElementById('introVideo');
const gate = document.getElementById('aiGate');
const mainVideo = document.getElementById('mainVideo');
const videoBg = document.getElementById('videoBg');
const introTitle = document.getElementById('introTitle');
const skipBtn = document.getElementById('skipBtn');

function aiSound(){
    const AudioContext = window.AudioContext || window.webkitAudioContext;
    const audio = new AudioContext();

    const osc = audio.createOscillator();
    const gain = audio.createGain();

    osc.type = 'sawtooth';
    osc.frequency.setValueAtTime(180, audio.currentTime);
    osc.frequency.exponentialRampToValueAtTime(760, audio.currentTime + .45);
    osc.frequency.exponentialRampToValueAtTime(120, audio.currentTime + .85);

    gain.gain.setValueAtTime(.0001, audio.currentTime);
    gain.gain.exponentialRampToValueAtTime(.18, audio.currentTime + .08);
    gain.gain.exponentialRampToValueAtTime(.0001, audio.currentTime + .9);

    osc.connect(gain);
    gain.connect(audio.destination);

    osc.start();
    osc.stop(audio.currentTime + .95);
}

function startExperience(){
    aiSound();

    gate.classList.add('open');
    introTitle.classList.add('hide');

    setTimeout(() => {
        videoBg.classList.add('show');
        mainVideo.classList.add('open');
        skipBtn.classList.add('show');
        video.play();
    }, 850);
}

function showSite(){
    mainVideo.classList.add('close');

    setTimeout(() => {
        intro.classList.add('hide');
        page.classList.add('show');
    }, 900);
}

function skipIntro(){
    video.pause();
    showSite();
}

video.onended = function(){
    showSite();
};
</script>

</body>
</html>