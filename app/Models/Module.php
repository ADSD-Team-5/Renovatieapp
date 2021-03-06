<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Module extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'category',
        'body'


    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
