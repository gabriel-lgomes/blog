<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'image',
        'description',
        'author_name',
        'author_photo',
        'user_id', 
    ];

    /**
     * Relacionamento com o usuário (autor do post)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
