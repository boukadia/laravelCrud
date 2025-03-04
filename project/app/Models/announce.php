<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class announce extends Model
{
    /** @use HasFactory<\Database\Factories\AnnounceFactory> */
    use HasFactory;
    protected $fillable=["title","description"];
}
