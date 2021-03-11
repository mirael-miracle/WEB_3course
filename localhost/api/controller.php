<?php 
class Controller{
	private $data;
	private $action;
	private $protectedActions = ['get-groups', 'edit_group','add_group','del_group','get-students'];

	function __construct(){
		$this->action = $_GET['action'];
		$this->data=(array)json_decode(file_get_contents('php://input'), true);
	}

	function run(){
		$res = [];
		if(in_array($this->action, $this->protectedActions) && !Auth::checkToken($_GET['token'])){
			echo json_encode(['error' => 'authentication failed !']);
			return;
		}
		switch ($this->action) {
			case 'login':
			$res = Auth::getUserToken($this->data);
			break;
			case 'get-groups':
			$res = Model::getGroupsList();
			break;
			case 'edit_group':
			if(Model::editGroup($this->data)){
				$res = ['update'=>'success'];
			}else{
				$res = ['error'=>'groups update error!'];
			}
			break;
			case 'add_group':
				if(Model::addGroup($this-data)){
					$res=['insert'=>'success'];
				}else {
					$res = ['error'=>'groups insert error!'];
				}
			break;
			case 'del_group':
				if(Model::removeGroup($this->data)){
					$res = ['delete'=>'success'];
				} else{
					$res = ['error'=>'group delete error!'];
				}
			break;
			case 'get-students':
				$res = Model::getStudents($_GET['group']);
			break;
			default:
			$res = ['error' => 'this route is incorrecct !'];
			break;
		}
		echo json_encode($res);
	}
}
 ?>
