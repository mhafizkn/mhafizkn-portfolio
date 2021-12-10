<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateAnotherSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('another.site_name', 'Laravel Settings');
        $this->migrator->add('another.site_active', false);
    }
}
