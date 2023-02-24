<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    use HasFactory;

    public $table = 'abc';

    public function __construct()
    {
        // echo '<h3>Die is Called - HomeModel</h3>';die;
    }

    public function indexModel()
    {
        echo '<h3>Die is Called - HomeModel indexModel</h3>';die;
    }
}
