<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use SammyK\LaravelFacebookSdk\SyncableGraphNodeTrait; // fb

class FacebookUsers extends Model
{
    //
    use SyncableGraphNodeTrait;
    use Authenticatable;
    protected $table = 'facebookUsers';
    protected $fillable = ['id', 'name', 'email'];

    protected static $graph_node_field_aliases = [
        'id' => 'id',
        'name' => 'name',
        'email' => 'email'
    ];
}
