<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modele;
class Article extends Model
{
    use HasFactory;
    public function article_combination(){
        return $this->belongsToMany(Article::class, 'article_combination', 'art_article_id', 'article_id');
    }

    public function model(){
        return $this->belongsTo(Modele::class);
    }
}
