<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;

    protected $table = "abouts";

    protected $fillable = [
        "nom",
        "icon1",
        "icon2",
        "icon3",
        "icon4",
        "icon5",
        "icon6"
    ];
}
