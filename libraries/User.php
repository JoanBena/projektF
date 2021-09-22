<?php 
class User{
	//Init DB Variable
	private $db;
	
	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database;
	 }
	 
	/*
	 * Register User
	 */
	public function register($data){
			//Insert Query
			$this->db->query('INSERT INTO users (name, email, cogname, Cfiscale, indrizzo, cap, nazine, cita, provinza) 
								    	VALUES (:name, :email, :cogname, :Cfiscale, :indrizzo, :cap :nazine :cita :provinza)');
			//Bind Values
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':cogname', $data['cogname']);
			$this->db->bind(':Cfiscale', $data['Cfiscale']);
			$this->db->bind(':indrizzo', $data['indrizzo']);
			$this->db->bind(':cap', $data['cap']);
            $this->db->bind(':nazine', $data['nazine']);
            $this->db->bind(':cita', $data['cita']);
            $this->db->bind(':provinza', $data['provinza']);
			
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
			//echo $this->db->lastInsertId();
	}



	
	
	
	
}