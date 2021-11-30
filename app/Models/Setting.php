<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelSettings\Settings;

/**
 *  Kacau stting kt model - manipulate controller
 */

class Setting extends Settings
{
    use HasFactory;

    protected $guarded = ['id'];

    public string $site_name;

    public bool $site_active;

    public int $id;

    public static function group(): string
    {
        return 'general';
    }
}
