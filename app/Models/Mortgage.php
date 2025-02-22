<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mortgage extends Model
{
    use HasFactory;
    protected $table = 'mortgages';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'TITLE',
        'IS_ACTIVE',
        'DESCRIPTION',
        'PERCENT',
        'MIN_FIRST_PAYMENT',
        'MAX_PRICE',
        'MIN_PRICE',
        'MIN_TERM',
        'MAX_TERM'
    ];
    public $timestamps = false;
}
