<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use HasFactory;

    public $active;

    protected $listeners =['ticketSelected'];

    public function ticketSelected($ticketId)
    {
        $this->active=$ticketId;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
