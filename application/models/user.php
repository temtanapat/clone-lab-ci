
<?php
Class user extends CI_Model
{

	var $id; //���ʼ����ҹ�������к�
	var $username; //���ͼ����ҹ�������к�
	var $password; //���ʼ�ҹ�����ҹ�������к�
	var $classid; //��˹������ҹ�������к�

function __construct()
{
parent::__construct();
}

	###### SET : id (���ʼ����ҹ�������к�) ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id (���ʼ����ҹ�������к�) ######
	function getId()
	{
		return $this->id;
	}

		###### SET : username (���ͼ����ҹ�������к�) ######
	function setUsername($username)
	{
		$this->username = $username;
	}

	###### GET : username (���ͼ����ҹ�������к�) ######
	function getUsername()
	{
		return $this->username;
	}


		###### SET : password (���ʼ�ҹ�����ҹ�������к�) ######
	function setPassword($password)
	{
		$this->password = $password;
	}

	###### GET : password (���ʼ�ҹ�����ҹ�������к�) ######
	function getPassword()
	{
		return $this->password;
	}
	
		###### SET : classid (��˹������ҹ�������к�) ######
	function setClassid($classid)
	{
		$this->classid = $classid;
	}

	###### GET : classid (��˹������ҹ�������к�) ######
	function getClassid()
	{
		return $this->classid;
	}

		 function login($username, $password)
		 {
		   $this -> db -> select('id, username, password, classId');
		   $this -> db -> from('user');
		   $this -> db -> where('username', $username);
		   $this -> db -> where('password', $password);
		   $this -> db -> limit(1);
		   
		   $query = $this -> db -> get();

		   if($query -> num_rows() == 1)
		   {
			 return $query->row();
		   }
		   else
		   {
			 return false;
		   }
		 }
		}
		?>

