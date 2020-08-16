<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_Comment extends Model
{
    protected $table = "question_comments";

    protected $guarded = ["id"];
}
