<?php
  require_once('./Connection.php');
  class Employee {

    public $name;
    public $wage;

    public function __construct($par_name,$par_wage) {
      $this->name = $par_name;
      $this->wage = $par_wage;
    }

    public static function all() {
      $list = [];
      $db = Database_Connection::getInstance();
      $req = $db->query('SELECT * FROM employee');

      // Creating a list of Employee objects from the database results
      foreach($req->fetchAll() as $employee) {
        $list[]= new Employee($employee['name'], $employee['wage']);
      }
      return $list;
    }

    public static function find($id) {
      $db = Database_Connection::getInstance();

      $req = $db->prepare('SELECT * FROM employee WHERE name = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $name));
      $employee = $req->fetch();

      return new Employee($employee['name'], $employee['wage']);
    }

    public function update($set,$key){
      $conn = Database_Connection::getInstance();

      $sql = "update employee set $set where name=$key";

      $stmt = $conn->prepare($sql);

      $stmt->execute();

      return $stmt->rowCount();
    }


    public static function create($set){
      $conn = Database_Connection::getInstance();

      $sql = "insert into employee set $set";

      $stmt = $conn->prepare($sql);

      $stmt->execute();

      return $conn->lastInsertId();
    }
  }
?>