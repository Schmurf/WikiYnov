<?php
class coDB
{
    private $_db;
    /**
     * DB constructor.
     */


    public function __construct()
    {
        try {
            $this->_db = new PDO('mysql:dbname=CV;host=localhost', 'root', 'root');
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $pe) {
            echo $pe->getMessage();
        }
    }

    function prepare($req){
        return$this->_db->prepare($req);
    }

    function pdo_query($req, $data = [], $fetch = true)
    {
        $stmt = $this->_db->prepare($req);
        $stmt->execute($data);
        return ($fetch) ? $stmt->fetchAll() : true;
    }

    function pdo_exec($req, $data = [])
    {
        $stmt = $this->_db->prepare($req);
        $stmt->execute($data);
    }
}