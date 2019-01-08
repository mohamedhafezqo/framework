<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Eloquent
{
    use SoftDeletes;

    protected $table = 'articles';
    protected $fillable = ['title', 'description'];
    protected $dates = ['deleted_at'];
}
