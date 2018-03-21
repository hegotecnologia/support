<?php

namespace HEGO\Support\Domain\Database;

use Illuminate\Database\Migrations\Migration as LaravelMigration;

abstract class Migration extends LaravelMigration
{
    /**
     * @var \Illuminate\Database\Schema\Builder
     */
    protected $schema;
    
    public function __construct()
    {
        $this->schema = app('db')->connection()->getSchemaBuilder();
    }

    /**
     * Run the migrations.
     */
    abstract public function up();
    
    /**
     * Reverse the migrations.
     */
    abstract public function down();
}