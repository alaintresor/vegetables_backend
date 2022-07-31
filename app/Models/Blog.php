<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'requirements',
        'link',
        
    ];

    
    public function category()
    {
        return $this->belongsTo(Categories::class ,'category_id');
    }

}
