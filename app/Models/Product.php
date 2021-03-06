<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Product extends Model {

        protected $fillable = [
           'name',
           'count',
           'price',
           'description',
        ];
}
