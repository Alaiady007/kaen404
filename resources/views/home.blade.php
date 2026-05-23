<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Testالكائن 404</title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box}

body{
    background:#050d15;
    font-family:'Cairo',sans-serif;
    color:white;
    overflow-x:hidden;
}

.intro{
    position:fixed;
    inset:0;
    z-index:9999;
    background:
        radial-gradient(circle at center, rgba(56,182,255,.18), transparent 35%),
        #000;
    display:flex;
    align-items:center;
    justify-content:center;
    overflow:hidden;
    transition:1s ease;
}

.intro.hide{
    opacity:0;
    visibility:hidden;
    pointer-events:none;
}

.intro-grid{
    position:absolute;
    inset:0;
    background-image:
        linear-gradient(rgba(56,182,255,.12) 1px, transparent 1px),
        linear-gradient(90deg, rgba(56,182,255,.10) 1px, transparent 1px);
    background-size:42px 42px;
    opacity:.22;
    animation:gridMove 2s linear infinite;
}

.intro-scan{
    position:absolute;
    width:150%;
    height:140px;
    background:linear-gradient(to bottom,transparent,rgba(56,182,255,.28),transparent);
    animation:scanLine 1.6s ease-in-out infinite;
}

.video-bg{
    position:absolute;
    inset:0;
    opacity:0;
    transition:1s ease;
}

.video-bg.show{opacity:1}

.video-bg video{
    width:100%;
    height:100%;
    object-fit:cover;
    filter:blur(45px);
    transform:scale(1.25);
    opacity:.28;
}

.main-video{
    position:relative;
    z-index:4;
    width:100%;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:18px;
    opacity:0;
    transform:scale(.75);
    clip-path:circle(0% at 50% 50%);
    transition:1.2s ease;
}

.main-video.open{
    opacity:1;
    transform:scale(1);
    clip-path:circle(78% at 50% 50%);
}

.main-video.close{
    opacity:0;
    transform:scale(.86);
    clip-path:circle(0% at 50% 50%);
}

.main-video video{
    width:100%;
    max-width:1100px;
    max-height:100%;
    object-fit:contain;
    border-radius:24px;
    box-shadow:
        0 0 45px rgba(56,182,255,.32),
        0 0 140px rgba(56,182,255,.16);
}

.ai-core{
    position:absolute;
    z-index:10;
    width:315px;
    height:315px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    transition:1.1s ease;
    background:
        radial-gradient(circle at center, rgba(3,14,24,.98) 0%, rgba(3,14,24,.92) 44%, rgba(56,182,255,.18) 72%, rgba(0,0,0,.92) 100%);
    box-shadow:
        inset 0 0 55px rgba(56,182,255,.20),
        0 0 55px rgba(56,182,255,.38),
        0 0 120px rgba(56,182,255,.16);
}

.ai-core.open{
    transform:scale(5) rotate(120deg);
    opacity:0;
}

.ai-core::before{
    content:"";
    position:absolute;
    inset:18px;
    border-radius:50%;
    background:
        radial-gradient(circle at center, transparent 42%, rgba(56,182,255,.18) 43%, transparent 47%),
        repeating-conic-gradient(from 0deg, rgba(56,182,255,.42) 0deg 8deg, transparent 8deg 18deg);
    mask:radial-gradient(circle, transparent 48%, #000 49%);
    opacity:.75;
    animation:spin 10s linear infinite;
}

.ai-core::after{
    content:"";
    position:absolute;
    inset:54px;
    border-radius:50%;
    background:
        linear-gradient(145deg, rgba(56,182,255,.22), rgba(3,14,24,.96), rgba(56,182,255,.10));
    border:1px solid rgba(56,182,255,.38);
    box-shadow:
        inset 0 0 28px rgba(56,182,255,.18),
        0 0 26px rgba(56,182,255,.25);
}

.ai-ring{
    position:absolute;
    border-radius:50%;
    border:1px solid rgba(56,182,255,.35);
    box-shadow:0 0 30px rgba(56,182,255,.22), inset 0 0 25px rgba(56,182,255,.12);
}

.ring-1{
    inset:0;
    animation:spin 8s linear infinite;
}

.ring-2{
    inset:28px;
    border-style:dashed;
    animation:spinReverse 6s linear infinite;
}

.ring-3{
    inset:58px;
    border-color:rgba(255,255,255,.22);
    animation:pulse 1.6s ease-in-out infinite;
}

.ring-4{
    inset:88px;
    border-color:rgba(56,182,255,.65);
    box-shadow:0 0 35px rgba(56,182,255,.35);
}

.core-lines{
    position:absolute;
    inset:-25px;
    border-radius:50%;
    background:
        conic-gradient(
            from 90deg,
            transparent,
            rgba(56,182,255,.55),
            transparent,
            rgba(56,182,255,.25),
            transparent
        );
    filter:blur(1px);
    animation:spin 5s linear infinite;
    opacity:.55;
}

.start-btn{
    position:relative;
    z-index:20;
    width:142px;
    height:142px;
    border-radius:50%;
    border:1px solid rgba(56,182,255,.75);
    background:
        radial-gradient(circle at 50% 42%, rgba(56,182,255,.28), rgba(4,20,32,.98) 58%, rgba(0,0,0,.96));
    color:white;
    font-family:'Cairo',sans-serif;
    font-size:21px;
    font-weight:800;
    cursor:pointer;
    letter-spacing:1px;
    box-shadow:
        0 0 35px rgba(56,182,255,.60),
        inset 0 0 30px rgba(56,182,255,.22);
}

.start-btn::before{
    content:"";
    position:absolute;
    inset:10px;
    border-radius:50%;
    border:1px solid rgba(255,255,255,.12);
}

.start-btn::after{
    content:"";
    position:absolute;
    inset:-13px;
    border-radius:50%;
    border:1px solid rgba(56,182,255,.22);
    animation:pulse 1.3s ease-in-out infinite;
}

.start-btn:hover{
    transform:scale(1.04);
    box-shadow:
        0 0 45px rgba(56,182,255,.75),
        inset 0 0 36px rgba(56,182,255,.26);
}

.intro-title{
    position:absolute;
    bottom:56px;
    left:20px;
    right:20px;
    z-index:12;
    text-align:center;
    transition:.8s ease;
}

.intro-title.hide{
    opacity:0;
    transform:translateY(25px);
}

.intro-title h2{
    font-size:44px;
    font-weight:800;
    text-shadow:0 0 12px rgba(255,255,255,.25),0 0 38px rgba(56,182,255,.9);
}

.intro-title span{color:#38b6ff}

.intro-title p{
    margin-top:10px;
    color:#dff7ff;
    font-size:14px;
}

.skip-btn{
    position:absolute;
    top:28px;
    left:28px;
    z-index:30;
    padding:12px 20px;
    border-radius:18px;
    background:rgba(3,14,24,.78);
    border:1px solid rgba(56,182,255,.35);
    color:white;
    font-family:'Cairo',sans-serif;
    font-size:15px;
    font-weight:800;
    cursor:pointer;
    display:none;
}

.skip-btn.show{display:block}

.page{
    width:100%;
    max-width:480px;
    margin:auto;
    min-height:100vh;
    background:
        radial-gradient(circle at 50% 35%,rgba(56,182,255,.20),transparent 26%),
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

.page::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(120deg,transparent 0%,rgba(56,182,255,.10) 45%,transparent 65%);
    transform:translateX(-120%);
    animation:pageLight 4.5s ease-in-out infinite;
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
    animation:posterBreath 7s ease-in-out infinite;
}

.poster::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(to bottom,rgba(0,0,0,.05),rgba(0,18,28,.20) 45%,rgba(1,6,10,.98) 100%);
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
    text-shadow:0 0 12px rgba(255,255,255,.25),0 0 35px rgba(56,182,255,.75);
}

.title-main span{
    font-size:36px;
    font-weight:800;
    color:#38b6ff;
    text-shadow:0 0 22px rgba(56,182,255,.95);
}

.subtitle{
    display:inline-block;
    color:#eefbff;
    font-size:16px;
    padding:7px 18px;
    border-radius:999px;
    background:rgba(255,255,255,.04);
    border:1px solid rgba(56,182,255,.20);
    box-shadow:0 0 22px rgba(56,182,255,.14);
}

.tech-line{
    width:170px;
    height:2px;
    margin:18px auto 0;
    background:linear-gradient(to right,transparent,#38b6ff,transparent);
    box-shadow:0 0 16px rgba(56,182,255,.7);
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
    box-shadow:0 12px 35px rgba(0,0,0,.45), inset 0 0 18px rgba(56,182,255,.04), 0 0 20px rgba(56,182,255,.10);
    animation:menuFloat 4s ease-in-out infinite;
}

.menu a:hover{
    transform:translateY(-4px) scale(1.015);
    border-color:rgba(56,182,255,.70);
    box-shadow:0 16px 44px rgba(56,182,255,.18);
}

.menu a:nth-child(2){animation-delay:.2s}
.menu a:nth-child(3){animation-delay:.4s}
.menu a:nth-child(4){animation-delay:.6s}

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
    box-shadow:0 0 18px rgba(56,182,255,.12);
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
    .page{max-width:720px}
    .poster{height:620px}
    .menu{
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:20px;
        padding:0 34px 50px;
    }
    .menu a{height:96px}
}

@media (min-width:1024px){
    .page{max-width:1000px}
    .poster{height:680px}
    .title-main h1{font-size:68px}
    .title-main span{font-size:46px}
    .subtitle{font-size:18px}
    .menu{padding:0 70px 70px}
}

@media (max-width:430px){
    .poster{height:500px}
    .title-main h1{font-size:46px}
    .title-main span{font-size:32px}
    .menu{padding:0 18px 36px}
    .menu a{height:82px;border-radius:24px}
    .text{font-size:20px}
    .icon{width:48px;height:48px;font-size:26px}
    .intro-title h2{font-size:34px}
    .ai-core{width:265px;height:265px}
    .start-btn{width:122px;height:122px;font-size:18px}
}

@keyframes spin{to{transform:rotate(360deg)}}
@keyframes spinReverse{to{transform:rotate(-360deg)}}
@keyframes pulse{
    0%,100%{transform:scale(1);opacity:.65}
    50%{transform:scale(1.12);opacity:1}
}
@keyframes gridMove{
    from{transform:translateY(0)}
    to{transform:translateY(42px)}
}
@keyframes scanLine{
    0%{top:-160px}
    100%{top:100%}
}
@keyframes softUp{
    from{opacity:0;transform:translateY(20px)}
    to{opacity:1;transform:translateY(0)}
}
@keyframes menuFloat{
    0%,100%{transform:translateY(0)}
    50%{transform:translateY(-4px)}
}
@keyframes posterBreath{
    0%,100%{transform:scale(1)}
    50%{transform:scale(1.035)}
}
@keyframes pageLight{
    0%,55%{transform:translateX(-120%)}
    85%,100%{transform:translateX(120%)}
}
</style>
</head>

<body>

<div class="intro" id="intro">

    <div class="intro-grid"></div>
    <div class="intro-scan"></div>

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

    <div class="ai-core" id="aiGate">
        <div class="core-lines"></div>
        <div class="ai-ring ring-1"></div>
        <div class="ai-ring ring-2"></div>
        <div class="ai-ring ring-3"></div>
        <div class="ai-ring ring-4"></div>
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

        <a href="/about">
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

function openSiteDirectly(){
    intro.classList.add('hide');
    page.classList.add('show');
}

if(sessionStorage.getItem('intro_seen_404') === 'yes'){
    openSiteDirectly();
}

function markIntroAsSeen(){
    sessionStorage.setItem('intro_seen_404', 'yes');
}

function aiSound(){
    const AudioContext = window.AudioContext || window.webkitAudioContext;

    if(!AudioContext){
        return;
    }

    const audio = new AudioContext();

    const osc = audio.createOscillator();
    const gain = audio.createGain();
    const filter = audio.createBiquadFilter();

    osc.type = 'sawtooth';
    filter.type = 'lowpass';

    osc.frequency.setValueAtTime(120, audio.currentTime);
    osc.frequency.exponentialRampToValueAtTime(920, audio.currentTime + .45);
    osc.frequency.exponentialRampToValueAtTime(160, audio.currentTime + 1);

    filter.frequency.setValueAtTime(300, audio.currentTime);
    filter.frequency.exponentialRampToValueAtTime(2600, audio.currentTime + .5);

    gain.gain.setValueAtTime(.0001, audio.currentTime);
    gain.gain.exponentialRampToValueAtTime(.18, audio.currentTime + .08);
    gain.gain.exponentialRampToValueAtTime(.0001, audio.currentTime + 1);

    osc.connect(filter);
    filter.connect(gain);
    gain.connect(audio.destination);

    osc.start();
    osc.stop(audio.currentTime + 1);
}

function startExperience(){
    markIntroAsSeen();

    aiSound();

    gate.classList.add('open');
    introTitle.classList.add('hide');

    setTimeout(() => {
        videoBg.classList.add('show');
        mainVideo.classList.add('open');
        skipBtn.classList.add('show');
        video.play();
    }, 900);
}

function showSite(){
    markIntroAsSeen();

    mainVideo.classList.add('close');

    setTimeout(() => {
        intro.classList.add('hide');
        page.classList.add('show');
    }, 900);
}

function skipIntro(){
    markIntroAsSeen();
    video.pause();
    showSite();
}

video.onended = function(){
    showSite();
};
</script>

</body>
</html>