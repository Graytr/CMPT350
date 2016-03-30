<?php
  require_once('./Connection.php');
  class Customer {
	  
    public $customerName;
    public $address;
    public $postalCode;
    public $city;
    public $telNum;
    public $email;
	
    public function __construct($par_customerName,$par_address, $par_postalCode,$par_city, $par_telNum,$par_email) {
      $this->customerName = $par_customerName;
      $this->address = $par_address;
      $this->postalCode = $par_postalCode;
      $this->city = $par_city;
      $this->telNum = $par_telNum;
      $this->email = $par_email;
    }

    public static function all() {
      $list = [];
      $db = Database_Connection::getInstance();
      $req = $db->query('SELECT * FROM customer');

      // Creating a list of Customer objects from the database results
      foreach($req->fetchAll() as $customer) {
        $list[]= new Customer($customer['customerName'], $customer['address'], $customer['postalCode'],$customer['city'],$customer['telNum'],$customer['email']);
      }
      return $list;
    }

    public static function find($id) {
      $db = Database_Connection::getInstance();

      $req = $db->prepare('SELECT * FROM customer WHERE customerName = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $customerName));
      $customer = $req->fetch();

      return new Customer($customer['customerName'], $customer['address'], $customer['postalCode'],$customer['city'],$customer['telNum'],$customer['email']);
    }

    public function update($set,$key){
      $conn = Database_Connection::getInstance();

      $sql = "update customer set $set where customerName=$key";

      $stmt = $conn->prepare($sql);

      $stmt->execute();

      return $stmt->rowCount();
    }


    public static function create($set){
      $conn = Database_Connection::getInstance();

      $sql = "insert into customer set $set";

      $stmt = $conn->prepare($sql);

      $stmt->execute();

      return $conn->lastInsertId();
    }
  }
?>