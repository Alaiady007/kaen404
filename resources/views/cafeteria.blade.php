<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>كافتيريا 404</title>

    <style>
        body {
            margin: 0;
            background: #050505;
            color: white;
            font-family: Arial, sans-serif;
        }

        .page {
            max-width: 430px;
            margin: auto;
            min-height: 100vh;
            padding: 18px;
            background:
                radial-gradient(circle at top, rgba(130, 60, 255, .28), transparent 35%),
                linear-gradient(180deg, #111, #050505);
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
        }

        .back, .cart {
            color: white;
            text-decoration: none;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.14);
            padding: 9px 15px;
            border-radius: 20px;
        }

        .hero {
            padding: 24px;
            border-radius: 28px;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.12);
            margin-bottom: 22px;
        }

        .hero h1 {
            margin: 0 0 8px;
            font-size: 34px;
        }

        .hero p {
            margin: 0;
            color: #ccc;
        }

        .product {
            overflow: hidden;
            margin-bottom: 18px;
            border-radius: 26px;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.12);
        }

        .product img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            display: block;
        }

        .info {
            padding: 18px;
        }

        .info h3 {
            margin: 0 0 8px;
            font-size: 24px;
        }

        .info p {
            margin: 0 0 14px;
            color: #ccc;
            line-height: 1.7;
        }

        .bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price {
            font-size: 20px;
            font-weight: bold;
        }

        .order {
            border: 0;
            color: white;
            cursor: pointer;
            padding: 10px 16px;
            border-radius: 18px;
            background: linear-gradient(135deg, #7c3aed, #ec4899);
        }
    </style>
</head>

<body>

<div class="page">

    <div class="top">
        <a href="/" class="back">رجوع</a>
        <a href="#" class="cart">السلة</a>
    </div>

    <div class="hero">
        <h1>كافتيريا 404</h1>
        <p>اطلب مشروبك قبل بداية الفصل الثاني</p>
    </div>

    @foreach($products as $product)
        <div class="product">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="">
            @endif

            <div class="info">
                <h3>{{ $product->title }}</h3>
                <p>{{ $product->description }}</p>

                <div class="bottom">
                    <div class="price">{{ number_format($product->price, 3) }} KD</div>
                    <button class="order">أضف للسلة</button>
                </div>
            </div>
        </div>
    @endforeach

</div>

</body>
</html>