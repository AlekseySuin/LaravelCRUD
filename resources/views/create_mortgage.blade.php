<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить ипотеку</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Добавить новую ипотеку</h1>
        <form action="{{ route('home') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="TITLE">Название ипотеки:</label>
                <input type="text" id="TITLE" name="TITLE" required>
            </div>
            <div class="form-group">
                <label for="DESCRIPTION">Описание:</label>
                <textarea id="DESCRIPTION" name="DESCRIPTION"></textarea>
            </div>
            <div class="form-group">
                <label for="PERCENT">Процентная ставка (%):</label>
                <input type="number" id="PERCENT" name="PERCENT" min="0" max="40" required>
            </div>
            <div class="form-group">
                <label for="MIN_FIRST_PAYMENT">Минимальный первоначальный взнос (%):</label>
                <input type="number" id="MIN_FIRST_PAYMENT" name="MIN_FIRST_PAYMENT" min="0" max="98" required>
            </div>
            <div class="form-group">
                <label for="MIN_PRICE">Минимальная стоимость недвижимости:</label>
                <input type="number" id="MIN_PRICE" name="min_price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="MAX_PRICE">Максимальная стоимость недвижимости:</label>
                <input type="number" id="MAX_PRICE" name="MAX_PRICE" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="MIN_TERM">Минимальный срок ипотеки (лет):</label>
                <input type="number" id="MIN_TERM" name="MIN_TERM" required>
            </div>
            <div class="form-group">
                <label for="MAX_TERM">Максимальный срок ипотеки (лет):</label>
                <input type="number" id="MAX_TERM" name="MAX_TERM" required>
            </div>
            <div class="form-group">
                <label for="IS_ACTIVE">Активна:</label>
                <input type="checkbox" id="IS_ACTIVE" name="IS_ACTIVE" value="1">
            </div>
            <button type="submit" class="btn">Добавить ипотеку</button>
        </form>
    </div>
</body>
</html>