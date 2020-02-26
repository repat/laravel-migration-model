<?php

namespace Repat\Laravel;

class Migration extends \Illuminate\Database\Eloquent\Model
{
    /**
     * Table is not timestamped
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Database table
     *
     * @var string
     */
    protected $table = 'migrations';

    /**
     * Returns if the migration file exists on the hard drive
     *
     * @return bool
     */
    public function fileExists() : bool
    {
        return file_exists(base_path('database/migrations/' . $this->filename));
    }

    /**
     * Returns Filename
     *
     * @return string
     */
    public function getFilenameAttribute() : string
    {
        return $this->migration . '.php';
    }
}
