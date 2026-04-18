<?php

namespace App\Models;

use Database\Factories\ExperienceFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Table('experiences')]
#[Fillable(['company', 'role', 'period_start', 'period_end', 'description', 'tags', 'order', 'is_visible'])]
class Experience extends Model
{
    /** @use HasFactory<ExperienceFactory> */
    use HasFactory;

    protected $casts = [
        'tags' => 'array',
        'is_visible' => 'boolean',
        'period_start' => 'date',
        'period_end' => 'date',
    ];

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true)->orderBy('order');
    }
}
