<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMessage {
  public $name;
  public $email;
  public $text;
  public function __construct()
  {
  }
}
