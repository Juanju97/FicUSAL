<?php
/**
 * Created by PhpStorm.
 * User: enriquehernandez
 * Date: 4/5/18
 * Time: 11:53
 */

    function connect () {

        $db_con = mysqli_connect (DB_SERVER,DB_USER,DB_PASS);
        if (!$db_con) return false;
        if (!mysqli_select_db (DB_NAME, $db_con)) return false;
        return $db_con;

    }