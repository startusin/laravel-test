<?php

namespace App\Models;

use App\Events\SubmissionSaved;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'email',
      'message'
    ];

    protected static function booted(): void
    {
        static::created(function (Submission $submission) {
            event(new SubmissionSaved($submission));
        });
    }
}
