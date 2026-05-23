<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>كافتيريا 404</title>

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

.back,
.cart{
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

.products{
    position:relative;
    z-index:5;
    display:grid;
    grid-template-columns:1fr;
    gap:22px;
}

.product-card{
    position:relative;
    overflow:hidden;
    border-radius:34px;
    border:1px solid rgba(56,182,255,.34);
    background:rgba(3,14,24,.78);
    box-shadow:
    0 18px 45px rgba(0,0,0,.55),
    0 0 28px rgba(56,182,255,.14);
    opacity:0;
    transform:translateY(28px) scale(.96);
    animation:cardIn .75s ease forwards;
}

.product-card:nth-child(1){animation-delay:.15s;}
.product-card:nth-child(2){animation-delay:.30s;}
.product-card:nth-child(3){animation-delay:.45s;}
.product-card:nth-child(4){animation-delay:.60s;}
.product-card:nth-child(5){animation-delay:.75s;}

.product-card::before{
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

.product-image{
    width:100%;
    height:260px;
    object-fit:cover;
    object-position:center;
    display:block;
}

.info{
    position:relative;
    z-index:5;
    padding:20px;
}

.info h3{
    font-size:26px;
    font-weight:800;
    margin-bottom:8px;
    text-shadow:
    0 0 12px rgba(255,255,255,.18),
    0 0 24px rgba(56,182,255,.55);
}

.info p{
    color:#dff7ff;
    font-size:14px;
    line-height:1.8;
    margin-bottom:16px;
}

.bottom{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:12px;
}

.price{
    color:#38b6ff;
    font-size:20px;
    font-weight:800;
    text-shadow:0 0 14px rgba(56,182,255,.65);
}

.order{
    border:0;
    color:white;
    cursor:pointer;
    padding:10px 18px;
    border-radius:20px;
    font-family:'Cairo',sans-serif;
    font-weight:800;
    background:linear-gradient(135deg,#38b6ff,#7c3aed);
    box-shadow:0 0 20px rgba(56,182,255,.25);
}

@media (min-width:768px){

    .page{
        max-width:720px;
        padding:30px 26px 56px;
    }

    .products{
        grid-template-columns:1fr 1fr;
        gap:22px;
    }

    .product-image{
        height:260px;
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

    .products{
        grid-template-columns:1fr 1fr 1fr;
        gap:26px;
    }

    .product-image{
        height:250px;
    }

    .header h1{
        font-size:60px;
    }

    .info h3{
        font-size:24px;
    }
}

@media (max-width:430px){

    .header h1{
        font-size:42px;
    }

    .product-card{
        border-radius:30px;
    }

    .product-image{
        height:230px;
    }

    .info h3{
        font-size:24px;
    }

    .bottom{
        flex-direction:column;
        align-items:stretch;
    }

    .order{
        width:100%;
    }
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
            CAFETERIA 404
        </div>

    </div>

    <div class="header">

        <h1>
            كافتيريا 404
        </h1>

        <p>
            اطلب مشروبك قبل بداية الفصل الثاني
        </p>

        <div class="line"></div>

    </div>

    <div class="products">

        @foreach($products as $product)

            <div class="product-card">

                @if($product->image)

                    <img class="product-image" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">

                @endif

                <div class="info">

                    <h3>
                        {{ $product->title }}
                    </h3>

                    <p>
                        {{ $product->description }}
                    </p>

                    <div class="bottom">

                        <div class="price">
                            {{ number_format($product->price, 3) }} KD
                        </div>

                        <button class="order">
                            أضف للسلة
                        </button>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</div>

</body>

</html>