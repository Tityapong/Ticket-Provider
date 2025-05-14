<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    protected $fillable = [
        'event_id',
        'ticket_name',
        'price',
        'quantity_available',
        'discount',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
