<?php


class db
{
    var  $db;
    var $dbhost="localhost";
    var $dbname="";
    var $dbuser="";
    var $dbpass="";

    function __construct()
    {

    }
    function connect()
    {
        $this->db=mysql_connect($this->dbhost,$this->dbuser,$this->dbpass) or die(mysql_error());
        mysql_select_db($this->dbname,$this->db);
    }

    function close()
    {
        mysql_close(mysql_connect($this->dbhost,$this->dbuser,$this->dbpass));
    }
}

?>
