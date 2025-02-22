<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Детальная информация об ипотеке</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
    @foreach($mortgages as $mortgage)
        <h1>Детальная информация об ипотеке №{{ $mortgage->ID }}</h1>
        <div class="mortgage-detail">
            <h2 id="mortgage-title">Ипотека: {{$mortgage->TITLE}}</h2>
            <p id="mortgage-percent">Процентная ставка: {{$mortgage->PERCENT}}%</p>
            <p id="mortgage-price-range">Стоимость недвижимости: от {{$mortgage->MIN_PRICE}} руб. до {{$mortgage->MAX_PRICE}} руб.</p>
            <p id="mortgage-payment-range">Первоначальный взнос: от {{$mortgage->ID}}% до 50%</p>
            <p id="mortgage-term-range">Срок ипотеки: от 1 года до 30 лет</p>
            <a href="/mortgages" class="btn">Назад к списку</a>
        </div>
    @endforeach
    </div>
</body>
</html>