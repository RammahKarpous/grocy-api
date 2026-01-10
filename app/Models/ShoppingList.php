<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    protected $fillable = ['name'];

    public function Users() {
        return $this->belongsToMany(User::class);
    }
}
