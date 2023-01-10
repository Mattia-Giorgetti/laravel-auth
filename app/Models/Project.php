<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'proj_description', 'code_lang', 'github_link'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

}
