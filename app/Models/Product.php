<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = ['name', 'details', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
