<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;
    protected $table = 'ships';

    
    public function dock(){
        return $this->belongsTo(Dock::class);
}
}
