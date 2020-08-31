<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Contact extends Model
{
    use Notifiable;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'body',
        'subject'
    ];

    public function routeNotificationForMail($notification)
    {
        return $this->email;
    }
}
