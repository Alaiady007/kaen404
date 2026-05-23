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

.intro-video{
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

.intro-video.hide{
    opacity:0;
    visibility:hidden;
}

.video-bg{
    position:absolute;
    inset:0;
    overflow:hidden;
}

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
    z-index:3;
    width:100%;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:20px;
}

.main-video video{
    width:100%;
    max-width:1100px;
    max-height:100%;
    object-fit:contain;
    border-radius:18px;
    box-shadow:0 0 40px rgba(56,182,255,.22);
}

.skip-btn{
    position:absolute;
    top:28px;
    left:28px;
    z-index:10;
    padding:12px 20px;
    border-radius:18px;
    background:rgba(3,14,24,.78);
    border:1px solid rgba(56,182,255,.35);
    color:white;
    font-size:15px;
    font-weight:800;
    cursor:pointer;
}

.intro-content{
    position:absolute;
    bottom:45px;
    left:0;
    right:0;
    z-index:5;
    text-align:center;
}

.intro-ring{
    width:90px;
    height:90px;
    border-radius:50%;
    margin:0 auto 18px;
    border:2px solid rgba(56,182,255,.18);
    border-top-color:#38b6ff;
    border-right-color:#0094ff;
    animation:spin 1.1s linear infinite;
}

.intro-title{
    font-size:36px;
    font-weight:800;
    text-shadow:0 0 35px rgba(56,182,255,.85);
}

.intro-title span{
    color:#38b6ff;
}

.intro-sub{
    margin-top:10px;
    font-size:13px;
    color:#dff7ff;
}

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
    transform:translateY(18px);
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
    background:linear-gradient(to bottom,rgba(0,0,0,.05),rgba(0,18,28,.20) 45%,rgba(1,6,10,.98) 100%);
}

.title-box{
    position:relative;
    z-index:5;
    margin-top:-105px;
    text-align:center;
    padding:0 22px 28px;
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
    text-shadow:0 0 35px rgba(56,182,255,.75);
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
        grid-template-columns:1fr 1fr;
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
}

@media (max-width:360px){
    .poster{
        height:460px;
    }

    .title-main h1{
        font-size:40px;
    }

    .title-main span{
        font-size:28px;
    }

    .text{
        font-size:18px;
    }
}

@keyframes spin{
    to{
        transform:rotate(360deg);
    }
}
</style>
</head>

<body>

<div class="intro-video" id="intro">

<button class="skip-btn" onclick="skipIntro()">تخطي</button>

<div class="video-bg">
    <video autoplay muted loop playsinline>
        <source src="/videos/404 END.mp4" type="video/mp4">
    </video>
</div>

<div class="main-video">
    <video autoplay muted playsinline id="introVideo">
        <source src="/videos/404 END.mp4" type="video/mp4">
    </video>
</div>

<div class="intro-content">
    <div class="intro-ring"></div>
    <div class="intro-title">الكائن <span>404</span></div>
    <div class="intro-sub">تجربة تفاعلية مدعومة بالذكاء الاصطناعي</div>
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

function showSite(){
    intro.classList.add('hide');
    page.classList.add('show');
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