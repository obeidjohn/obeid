<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderDetail extends Model
{
    use HasFactory;
    protected $table = "provider_details";
    protected $fillable = [
        'Name',  'Code', 'Shortname', 'Description', 'Status'
    ];

    public static $rules = [
        "Name" => "required |min:3|max:250",
        "Code" => "required|min:3|max:250",
        "Shortname" => "required|min:3|max:250",
        "Description" => "required|min:3|max:250",
        "Status" => "required",

    ];
}
