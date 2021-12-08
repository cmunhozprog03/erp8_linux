<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    //protected $fillable = ['social_name', 'fantasy_name', 'cnpj', 'ie', 'im',
    // 'logo', 'site', 'email', 'phone1', 'phone2', 'mobile'];

    public function addressCompanies()
    {
        return $this->hasMany(AddressCompany::class);
    }
}
