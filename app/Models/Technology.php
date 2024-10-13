<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; 

class Technology extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug']; 

    public static function generateSlug($title) 
    {
        return Str::slug($title, '_');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class); 
    }
}
