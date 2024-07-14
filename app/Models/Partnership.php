<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Partnership extends Model
{
    protected $fillable = [
        'event_name', 'event_date', 'eo_name', 'event_pic_name', 'phone', 'email', 'document', 'user_id', 'status'
    ];

    protected function casts(): array
    {
        return [
            'event_date' => 'date',
            'status' => 'integer',
        ];
    }

    public function getStatusTextAttribute()
    {
        switch ($this->status) {
            case 0:
                return 'On Progress';
            case 1:
                return 'Approved';
            case 2:
                return 'Rejected';
            default:
                return 'Unknown';
        }
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
