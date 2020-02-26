<?php

namespace Repat\Laravel;

class Migration extends \Illuminate\Database\Eloquent\Model
{
    /**
     * Migrations folder inside of laravel app
     *
     * @var string
     */
    const FOLDER = 'database/migrations/';

    /**
     * File extension
     *
     * @var string
     */
    const EXT = '.php';

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
        return file_exists(base_path(self::FOLDER . $this->filename));
    }

    /**
     * Returns Filename
     *
     * @return string
     */
    public function getFilenameAttribute() : string
    {
        return $this->migration . self::EXT;
    }

    /**
     * Lists all files in the migrations folder
     *
     * @param bool $asMigration
     * @return array
     */
    public static function listFiles(bool $asMigration = false) : array
    {
        $files = array_values(
            array_filter(
                scandir(base_path(self::FOLDER)),
                function ($file) {
                    return $file !== '.' && $file !== '..';
                }
            )
        );
        return $asMigration ?
            array_map(function (string $file) {
                return str_replace(self::EXT, '', $file);
            }, $files) : $files;
    }
}
