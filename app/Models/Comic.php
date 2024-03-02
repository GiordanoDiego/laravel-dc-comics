<?php
//model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    // // @var array<string>
    protected $fillable =[ 
        //questo serve per usare il mass unsigned, specifico i campi che posso modificare
        "title",
        "description",
        "thumb",
        "price",
        "series",
        "sale_date",
        "type"
    ];

}
