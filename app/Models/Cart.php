<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $items = array();
    public $total = 0;
    public $subtotal = 0;
    public $tax = 0;
    public $comment = "";

    
}
