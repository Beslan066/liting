<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jubilee extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'lead',
        'content',
        'image',
        'user_id',
        'author_id',
        'views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function author() {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
}
