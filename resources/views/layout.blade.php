<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>

<div class="container">
    <nav class="level">
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/">首頁</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/categories">分類</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/subcategories">小分類</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/beacons">Beacon</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/category-beacons">分類與Beacon</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/activities">活動</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/category-activities">分類與活動</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/products">商品</a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info" href="/keywords">關鍵字</a>
        </p>
    </nav>
</div>

<div class="container">
    @yield('content')
</div>

</body>
</html>
