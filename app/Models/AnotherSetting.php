<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnotherSetting extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public string $site_name;

    public bool $site_active;

    public static function group(): string
    {
        return 'another';
    }
}
