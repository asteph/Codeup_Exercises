<?php 
class Model
{
    protected static $dbc;
    //protected static property
    protected static $table;
    // Array to store key/value data
    private $attributes = [];

    public function __construct()
    {
        self::dbConnect();
    }
    private static function dbConnect()
    {
        if (!self::$dbc)
        {
            // @TODO: Connect to database
            // Get new instance of PDO object
            self::$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            // Tell PDO to throw exceptions on error
            self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }
    // Magic setter to populate $data array
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $data
        $this->attributes[$name] = $value;
    }
    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
        return null;
    }
    public function save()
    {
        // @TODO: Ensure there are attributes before attempting to save
        if(!empty($this->attributes)){
        // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert
            if(!empty($this->attributes['id'])){

            }else{

                $key_string = '';


                'INSERT INTO users (' . $key_string . ') VALUES (' . $value_string . ')';
                $stmt = $dbc->prepare('INSERT INTO ' . self::$table . '(name, email) .  VALUES (:email, :name)');

                foreach ($this->attributes $key as $attribute) {
                    $stmt->bindValue(':' . $key, $attribute, PDO::PARAM_STR);
                    // $stmt->bindValue(':name',  $user['name'],  PDO::PARAM_STR);

                }
                $stmt->execute();
            }
        // @TODO: Ensure that update is properly handled with the id key

        // @TODO: After insert, add the id back to the attributes array so the object can properly reflect the id

        // @TODO: You will need to iterate through all the attributes to build the prepared query

        // @TODO: Use prepared statements to ensure data security
        }else{
            die('ERROR: No values in attributes array.');
        }

    // Find a record based on an id
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements

        // @TODO: Store the resultset in a variable named $result

        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }
    // Find all records in a table
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the previous method, return all the matching records
    }
    public static function getTableName() 
    {
        return static::$table;
    }
}

