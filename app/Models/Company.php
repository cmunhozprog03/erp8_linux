<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    //protected $guarded = ['id', 'created_at', 'updated_up'];
    protected $fillable = ['social_name', 'fantasy_name', 'cnpj', 'ie', 'im', 'logo'];
}
