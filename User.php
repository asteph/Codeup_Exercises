<?php 
require_once 'Model.php';

class User extends Model
{
	//protected static property
    protected static $table = 'users';

    public static function find($id)
    {
    	self::dbConnect();
    	//don't want variables in query statement; placeholders only
    	$query = 'SELECT * FROM users WHERE id = :id';
    	$stmt = self::$dbc->prepare($query);
    	$stmt->bindValue(':id', $id, PDO::PARAM_INT);
    	$stmt->execute();

    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    	$instance = null;
        if ($result) {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }
    public static function all()
    {

    }
    public function save()
    {
    	self::dbConnect();
    }
    public function insert()
    {

	}
}