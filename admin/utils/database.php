<?php

/**
 * Base de datos.
 */
class Database
{

    private static $connection;

    public function __construct()
    {
      die('Init function is not allowed');
    }

    /**
     * Retorna el estado de la conexión a la base
     * @return PGSQL_CONNECTION_OK or PGSQL_CONNECTION_BAD.
     */
    public function getconnectionStatus()
    {
      return pg_connection_status($this->connection);
    }


    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$connection )
       {
        try
        {
          echo getenv("DATABASE_URL");
          self::$connection =  new PDO(getenv("DATABASE_URL"));
          self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
          die($e->getMessage());
        }
       }
       return self::$connection;
    }

    public static function disconnect()
    {
        self::$connection = null;
    }

}
