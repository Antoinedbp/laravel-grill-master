<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Steak extends Model
{
    use HasFactory;

    protected $table = "steaks";

    protected $fillable = [
        "titre",
        "description",
        "txtBouton"
    ];
}
