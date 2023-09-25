<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderCategory extends Model
{
    
    use HasFactory;
    protected $table = "provider_category";
    protected $fillable = [
        'CategoryName',  'Description', 'Status'
    ];

    public static $rules = [
        "CategoryName" => "required |min:3|max:250",
        "Description" => "required|min:3|max:250",
        "Status" => "required",

    ];

}
