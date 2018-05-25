<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}

	public function checkUserName($username){
		$query = "SELECT * FROM tbl_user WHERE username = '$username'";
		$getuser = $this->db->select($query);

		if($username==""){
			echo "<span class='error'> Please Enter Username.</span>";
			exit();
		}elseif(!$getuser){
			echo "<span class='error'><b>$username</b> not available !</span>";
			exit();

		}else{
			echo "<span class='success'><b>$username</b> available !</span>";
			exit();

		}
	}


	public function checkSkill($skill){
		$query = "SELECT * FROM tbl_skill WHERE skill LIKE '%$skill%'";
		$getskill = $this->db->select($query);
		$result = '<div class="skill"><ul>';
		if($getskill){
			while($data = $getskill->fetch_assoc()){
				$result .='<li>'.$data['skill'].'</li>';
			}
		} else {
			$result .='<li>No Result Found.</li>';
		}
		$result .='</ul></div>';
		echo $result;
	}


	public function checkAutoRef($body){
		$query = "INSERT INTO tbl_refresh(body) VALUES('$body') ";

		$getdata = $this->db->insert($query);
	}

	public function getData(){

		$query = "SELECT * FROM tbl_refresh ORDER BY refreshid DESC";//DESC or nothing
		$getContent = $this->db->select($query);
		$result = '<div class="dataShow"><ul>';
		if($getContent){
			while($data = $getContent->fetch_assoc()){
				$result .='<li>'.$data['body'].'</li>';
			}
		} else {
			$result .='<li>No Result Found.</li>';
		}
		$result .='</ul></div>';
		echo $result;
	}

	public function checkSearch($data){
		$query = "SELECT * FROM tbl_search WHERE username LIKE '%$data%'";
		$getSearch = $this->db->select($query);
		if($getSearch){
			$data = "<table class ='tblone'>
			<tr>
			<th>Username</th>
			<th>Name</th>
			<th>Student ID</th>
			</tr>";
			while($result = $getSearch->fetch_assoc()){
				$data .= "<tr>
				<td>".$result['username']."</td>
				<td>".$result['name']."</td>
				<td>".$result['studentid']."</td>
				</tr>";

			} 
			$data .= "</table>";
			echo $data; 

		}else{
			echo "Data Not Found.";
		}

	}

	public function autoSave($content, $contentid){
		if($contentid){
			$query = "UPDATE tbl_autosave SET content = '$content', status = 'saved' WHERE contentid = '$contentid'";
			$updateData = $this->db->update($query);

		}else{
			$query = "INSERT INTO tbl_autosave(content,status) VALUES('$content','draft')";
			$insertData = $this->db->insert($query);
			$lastId = $this->db->link->insert_id;
			echo $lastId;
			exit();
		}
	}

	
}
?>