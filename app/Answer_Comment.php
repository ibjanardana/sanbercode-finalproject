<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer_Comment extends Model
{
    protected $table = "answer_comments";

    protected $guarded = ["id"];
}
