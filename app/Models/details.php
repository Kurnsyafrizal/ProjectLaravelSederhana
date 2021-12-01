<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    use HasFactory;

    protected $fillable = ['author', 'publisher', 'book_year', 'description'];

    public function books()
    {
        return $this->hasMany(books::class, 'id','book_id');
    }

    
}
