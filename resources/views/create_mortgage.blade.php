<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить ипотеку</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Добавить новую ипотеку</h1>
        <form action="{{ route('home') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Название ипотеки:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="percent">Процентная ставка (%):</label>
                <input type="number" id="percent" name="percent" min="0" max="40" required>
            </div>
            <div class="form-group">
                <label for="min_first_payment">Минимальный первоначальный взнос (%):</label>
                <input type="number" id="min_first_payment" name="min_first_payment" min="0" max="98" required>
            </div>
            <div class="form-group">
                <label for="min_price">Минимальная стоимость недвижимости:</label>
                <input type="number" id="min_price" name="min_price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="max_price">Максимальная стоимость недвижимости:</label>
                <input type="number" id="max_price" name="max_price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="min_term">Минимальный срок ипотеки (лет):</label>
                <input type="number" id="min_term" name="min_term" required>
            </div>
            <div class="form-group">
                <label for="max_term">Максимальный срок ипотеки (лет):</label>
                <input type="number" id="max_term" name="max_term" required>
            </div>
            <div class="form-group">
                <label for="is_active">Активна:</label>
                <input type="checkbox" id="is_active" name="is_active" value="1">
            </div>
            <button type="submit" class="btn">Добавить ипотеку</button>
        </form>
    </div>
</body>
</html>