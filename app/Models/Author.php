<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'lead',
        'image',
        'user_id',
        'views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function incrementViews()
    {
        $this->views = $this->views + 1;
        $this->save();
    }

    public function proses()
    {
        return $this->hasMany(Prose::class);
    }

    public function poesies()
    {
        return $this->hasMany(Poesy::class);
    }

    public function plays()
    {
        return $this->hasMany(Play::class);
    }

    public function jubilees()
    {
        return $this->hasMany(Jubilee::class);
    }
}
