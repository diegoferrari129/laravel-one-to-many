<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'repository',
        'technologies',
        'status',
        'start_date',
        'end_date',
        'slug',
        'image',
    ];

    public static function generateSlug($title){
        return Str::slug($title, '-');
    }

    public function type(){
        return $this->belongTo(Type::class);
    }
}
