<?php
  class Database_Connection {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=myDatabase', 'root', '', $pdo_options);
      }
      return self::$instance;
    }

    public static function getQuery($method, $table, $key,$set){
      // create SQL based on HTTP method
        switch ($method) {
          case 'GET':
          $sql = "select * from `$table`".($key?" WHERE id=$key":''); //a short form to write an if/else
          break;
          case 'PUT':
            $sql = "update `$table` set $set where id=$key"; break;
          case 'POST':
            $sql = "insert into `$table` set $set"; break;
          case 'DELETE':
            $sql = "delete from `$table` where id=$key"; break;
        }
        // echo "SQL Query: ".$sql."<br>";
        return $sql;
    }

    public static function executeQuery($sql){
      // excecute SQL statement
      $result = mysqli_query(self::$instance,$sql);
      // echo self::$instance."<br>";
        // // die if SQL statement failed
        if (!$result) {
          http_response_code(404);
          // die(mysqli_error());
        }
        // http_response_code(200);
        return $result;
    }

    function closeConnection(){
      mysqli_close($this->dbInstance);
    }
  }
?>
