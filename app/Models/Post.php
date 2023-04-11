<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // private static $posts = [
    //     [
    //         "source" => "Anonyomous",
    //         "message" => "How do you eat an elephane? One bite at a time."
    //     ],        [
    //         "source" => "Jack",
    //         "message" => "To Accept, to enjoy, and to let it go"
    //     ],

    // ];

}
