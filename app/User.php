<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function routeNotificationForSlack()
    {
        return 'https://hooks.slack.com/services/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';
    }

    //  
    public function routeNotificationForTrello()
    {
        return [
            'token' => '9833a3301dc784a796e933b0bc61e37bb1faae074aebacecabe3baa3de3d61f4',
            'idList' => '57ca8a9abcff35c4648c775d',
        ];
    }
}
