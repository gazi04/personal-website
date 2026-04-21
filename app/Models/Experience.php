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

    protected $appends = ['formatted_period'];

    protected $casts = [
        'tags' => 'array',
        'is_visible' => 'boolean',
        'period_start' => 'date',
        'period_end' => 'date',
    ];

    protected function getFormattedPeriodAttribute(): string
    {
        $start = $this->period_start?->format('M Y'); // e.g., "Jan 2024"

        // If there is no end date, it's "Present"
        $end = $this->period_end
            ? $this->period_end->format('M Y')
            : 'Present';

        return "{$start} — {$end}";
    }

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true)->orderBy('order');
    }
}
