<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'classification',
        'title',
        'content',
        'date',
        'location',
        'institution',
        'category',
        'privacy',
        'file',
    ];

}
