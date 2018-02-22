<?php
/*
require 'vendor/autoload.php';

use SSD\Backup\Backup;
use SSD\Backup\Remotes\Dropbox;
use SSD\DotEnv\DotEnv;
$dotenv=new DotEnv([
    __DIR__.DIRECTORY_SEPARATOR.'.env'
]);

$dotenv->load();
$dotenv->required([
    'DB_HOST',
    'DB_DATABASE',
    'DB_USERNAME',
    'DB_PASSWORD',
    'DROPBOX_OAUTH',
    'DROPBOX_SECRET',
    'REMOTE_DIR_NAME',
]);

$workingDir=__DIR__.DIRECTORY_SEPARATOR. 'tmp';

try
{
    $remote=new Dropbox(
        getenv('DROPBOX_OAUTH'),
        getenv('DROPBOX_SECRET')


    );

    $backup=new Backup(
        $remote,
        $workingDir
    );

    $backup->setRemoteDirectory(getenv('REMOTE_DIR_NAME'));
    $backup->setNumberOfBackups(30);

}
catch (Exception $e)
{
    $file=$workingDir .DIRECTORY_SEPARATOR. 'error_log';
    file_put_contents($file,$e->getMessage().PHP_EOL,FILE_APPEND|LOCK_EX);
}
*/