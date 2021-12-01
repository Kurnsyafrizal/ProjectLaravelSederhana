<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\db;
use Illuminate\Support\Facades\DB as FacadesDB;

class books extends Model
{
    use HasFactory;

    protected $fillable = ['tittle'];

    public function details(){
        return $this->belongsTo(details::class, 'id', 'book_id');

    }

    public function category(){
        return $this->belongsTo(category::class, 'id','category_id');
    }
}
