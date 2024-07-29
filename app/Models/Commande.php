<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'panier_id',
        'etat',
        'total'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
