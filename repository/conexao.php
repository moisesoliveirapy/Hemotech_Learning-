<!-- 
class conexao
{
    public static function criar(): PDO
    {
        $env = parse_ini_file('.env');
        $databaseType = $env["databasetype"];
        $database = $env["database"];
        $server = $env["server"];
        $pass = $env["pass"];
        $user = $env["user"];

        if($databaseType == 'mysql'){
            $database = "host=$server;=ddbname=$database";
        }
        // Caminho relativo para o banco de dados SQLite
        return new PDO("$databaseType:" . __DIR__ . "$database", $user, $pass);
    }
}

 -->




<?php
class conexao
{
    public static function criar(): PDO
    {
        // Caminho relativo para o banco de dados SQLite
        return new PDO("sqlite:" . __DIR__ . "/../config/materiais.db");
    }
}


?> 

<?php

/* class Conexao{
    public static function criar ():PDO{
            $env = parse_ini_file('.env');
            $databaseType = $env["databasetype"];
            $database = $env["database"];
            $server = $env["server"];
            $pass = $env["pass"];
            $user = $env["user"];

            if($databaseType === "mysql"){
                $database = "host=$server;dbname=$database";
            }

           return new PDO("$databaseType:$database", $user, $pass);
    }
} */
