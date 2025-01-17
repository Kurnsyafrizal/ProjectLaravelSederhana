<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    
    protected $fillable = ['category','slug'];
    protected $guarded = ['id'];

    public function books()
    {
        return $this->hasMany(books::class, 'id','category_id');
    }
}
