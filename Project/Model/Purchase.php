<?php
  require_once('./Connection.php');
  class Purchase{

    public $id;
    public $purDate;
    public $cost;
    public $frame;
    public $rightSphere;
	public $leftSphere;
	public $rightCyl;
	public $leftCyl;
	public $rightAxis;
	public $leftAxis;
	public $rightDist;
	public $leftDist;
	public $rightNear;
	public $leftNear;
	public $rightIO;
	public $leftIO;
	public $rightUD;
	public $leftUD;
		
    public function __construct($par_id,$par_purDate, $par_cost,$par_frame, $par_rightSphere, $par_leftSphere, $par_rightCyl, $par_leftCyl, $par_rightAxis, $par_leftAxis, $par_rightDist, $par_leftDist, $par_rightNear, $par_leftNear, $par_rightIO, $par_leftIO, $par_rightUD, $par_leftUD) {
      $this->id = $par_id;	  
	  $this->purDate = $par_purDate;
	  $this->cost = $par_cost;
	  $this->frame = $par_frame;
      $this->rightSphere = $par_rightSphere;
	  $this->leftSphere = $par_leftSphere;
	  $this->rightCyl = $par_rightCyl;
	  $this->leftCyl = $par_leftCyl;
	  $this->rightAxis = $par_rightAxis;
	  $this->leftAxis = $par_leftAxis;
	  $this->rightDist = $par_rightDist;
	  $this->leftDist = $par_leftDist;
	  $this->rightNear = $par_rightNear;
	  $this->leftNear = $par_leftNear;
	  $this->rightIO = $par_rightIO;
	  $this->leftIO = $par_leftIO;
	  $this->rightUD = $par_rightUD;
	  $this->leftUD = $par_leftUD;
    }

    public static function all() {
      $list = [];
      $db = Database_Connection::getInstance();
      $req = $db->query('SELECT * FROM purchase');

      // Creating a list of Purchase objects from the database results
      foreach($req->fetchAll() as $purchase) {
        $list[]= new Purchase($purchase['id'], $purchase['customerName'], $purchase ['date'],$purchase['cost'],$purchase['frame'],	$purchase['rightSphere'], $purchase['leftSphere'], $purchase['rightCyl'], $purchase['leftCyl'], $purchase['rightAxis'], $purchase['leftAxis'], $purchase['rightDist'], $purchase['leftDist'], $purchase['rightNear'], $purchase['leftNear'], $purchase['rightIO'], $purchase['leftIO'], $purchase['rightUD'], $purchase['leftUD']);
      }
      return $list;
    }
	
	
	
			


    public static function find($id) {
      $db = Database_Connection::getInstance();

      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM purchase WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $purchase = $req->fetch();

      return new Purchase($purchase['id'], $purchase['customerName'], $purchase ['date'],$purchase['cost'],$purchase['frame'],	$purchase['rightSphere'], $purchase['leftSphere'], $purchase['rightCyl'], $purchase['leftCyl'], $purchase['rightAxis'], $purchase['leftAxis'], $purchase['rightDist'], $purchase['leftDist'], $purchase['rightNear'], $purchase['leftNear'], $purchase['rightIO'], $purchase['leftIO'], $purchase['rightUD'], $purchase['leftUD']);
    }

    public function update($set,$key){
      $conn = Database_Connection::getInstance();

      $sql = "update purchase set $set where id=$key";

      $stmt = $conn->prepare($sql);

      $stmt->execute();

      return $stmt->rowCount();
    }


    public static function create($set){
      $conn = Database_Connection::getInstance();

      $sql = "insert into purchase set $set";

      $stmt = $conn->prepare($sql);

      $stmt->execute();

      return $conn->lastInsertId();
    }
  }
?>