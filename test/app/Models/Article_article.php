<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
class Article_article extends Model
{
    use HasFactory;
    public function article(){
        return $this->betongsToMany(Article::class, 'article_articles', 'article_id', 'art_article_id');
    }
}
