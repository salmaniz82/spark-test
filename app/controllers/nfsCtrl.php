<?php

/**
 * Created by PhpStorm.
 * User: salman
 * Date: 5/29/2017
 * Time: 1:05 PM
 */
class nfsCtrl
{
    public function driveFast()
    {
        echo 'I am driving fast from controller';
    }

    public function driveSlow()
    {
        echo 'I am driving slow from controller';
    }

    public function driveBackward()
    {
        echo 'drive backward from controller';
    }

    public function dbRun()
    {

        $db = new Database();
        $data = $db->listall('books');

        for ($i=0; $i<=sizeof($data)-1; $i++)
        {
            echo $data[$i]['name'] . '<br />';
        }

    }
}