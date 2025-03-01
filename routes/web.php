<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MortgagesController;
use App\Http\Controllers\ClientController;

# получить все записи ипотек
Route::get('/mortgages', [ClientController::class, 'mortgages_get'])->name('home');
# получить конкретную ипотеку
Route::get('/mortgages/{id}', [ClientController::class, 'mortgages_details'])->where('id', '[0-9]+')->name('mortgages.details');

# для более удобного просмотра, отображаются все ипотеки (неактивные серым)
Route::get('/mortgages_all', [MortgagesController::class, 'mortgages_get_all'])->name('mortgages.all');
# отобразить форму создания ипотеки
Route::get('/mortgages/create', [MortgagesController::class, 'mortgages_create']);
# отправить данные для создания ипотеки
Route::post('/mortgages', [MortgagesController::class, 'mortgages_add']);

# отобразить форму для редактирования
Route::get('/mortgages/{id}/edit', [MortgagesController::class, 'mortgages_edit_form'])->where('id', '[0-9]+')->name('mortgages.edit');
# обновить ипотеку в базе
Route::put('/mortgages/{id}', [MortgagesController::class, 'mortgages_update'])->where('id', '[0-9]+')->name('mortgages.update');

# удаление ипотеки по id 
Route::get('/mortgages/{id}/delete', [MortgagesController::class, 'morgages_delete'])->where('id', '[0-9]+')->name('mortgages.delete');