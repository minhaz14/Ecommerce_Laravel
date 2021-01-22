<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
  public function user()
  {
      return $this-> belongsTo(User::class);
  }

  public function carts()
  {
      return $this-> belongsTo(Cart::class);
  }
}
