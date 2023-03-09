<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table="books";

    protected $fillable = [
      "authorid",
        "title",
        "ISBN",
        "pub_year",
        "available",
    ];

    use HasFactory;
}
