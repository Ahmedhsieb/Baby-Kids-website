<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'icon'
    ];

    public static function rules()
    {
        return [
            'Title' => 'required',
            'slug' => 'required',
            'icon' => 'required',
        ];
    }

    public function getIconAttribute($value)
    {
        return 'images/activity/'.$value;
    }
}
