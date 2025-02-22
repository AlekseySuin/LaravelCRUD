<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать ипотеку</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Редактировать ипотеку</h1>
        @foreach($mortgages as $mortgage)
        <form action="{{ route('mortgages.update', $mortgage->ID) }}" method="POST" autocomplete="off">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="TITLE">Название ипотеки:</label>
                <input type="text" id="TITLE" name="TITLE" value="{{ $mortgage->TITLE }}" required>
            </div>
            <div class="form-group">
                <label for="DESCRIPTION">Описание:</label>
                <textarea id="DESCRIPTION" name="DESCRIPTION">{{ $mortgage->DESCRIPTION }}</textarea>
            </div>
            <div class="form-group">
                <label for="PERCENT">Процентная ставка (%):</label>
                <input type="number" id="PERCENT" name="PERCENT" value="{{ $mortgage->PERCENT }}" min="0" max="40" required>
            </div>
            <div class="form-group">
                <label for="MIN_FIRST_PAYMENT">Минимальный первоначальный взнос (%):</label>
                <input type="number" id="MIN_FIRST_PAYMENT" name="MIN_FIRST_PAYMENT" value="{{ $mortgage->MIN_FIRST_PAYMENT }}" min="0" max="98" required>
            </div>
            <div class="form-group">
                <label for="MIN_PRICE">Минимальная стоимость недвижимости:</label>
                <input type="number" id="MIN_PRICE" name="MIN_PRICE" value="{{ $mortgage->MIN_PRICE }}" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="MAX_PRICE">Максимальная стоимость недвижимости:</label>
                <input type="number" id="MAX_PRICE" name="MAX_PRICE" value="{{ $mortgage->MAX_PRICE }}" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="MIN_TERM">Минимальный срок ипотеки (лет):</label>
                <input type="number" id="MIN_TERM" name="MIN_TERM" value="{{ $mortgage->MIN_TERM }}" required>
            </div>
            <div class="form-group">
                <label for="MAX_TERM">Максимальный срок ипотеки (лет):</label>
                <input type="number" id="MAX_TERM" name="MAX_TERM" value="{{ $mortgage->MAX_TERM }}" required>
            </div>
            <div class="form-group">
                <label for="IS_ACTIVE">Активна:</label>
                <input type="checkbox" id="IS_ACTIVE" name="IS_ACTIVE" value="1" {{ $mortgage->IS_ACTIVE ? 'checked' : '' }}>
            </div>
            <button type="submit" class="btn">Сохранить изменения</button>
        </form>
        @endforeach
    </div>
</body>
</html>