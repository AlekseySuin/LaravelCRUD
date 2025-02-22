<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список ипотек</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Список ипотек</h1>
        <div class="mortgages-list">
            @foreach($mortgages as $mortgage)
            <div class="mortgage-item {{ $mortgage->IS_ACTIVE ? '' : 'inactive' }}">
                <h2>{{ $mortgage->TITLE }}</h2>
                <p>Процентная ставка: {{ $mortgage->PERCENT }}</p>
                <p>Стоимость недвижимости: от {{ $mortgage->MIN_PRICE }} руб. до {{ $mortgage->MAX_PRICE }} руб.</p>
                <p>Первоначальный взнос: от {{ $mortgage->MIN_FIRST_PAYMENT }}% до 98%</p>
                <p>Срок ипотеки: от {{ $mortgage->MIN_TERM }} лет до {{ $mortgage->MAX_TERM }} лет</p>
                <a href="/mortgages/{{$mortgage->ID}}" class="btn">Подробнее</a>
            </div>
            @endforeach
            <!-- Добавьте больше ипотек по аналогии -->
        </div>
    </div>
</body>
</html>