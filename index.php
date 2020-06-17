<?php 
	$mod = (isset($_GET['mod'])?$_GET['mod']:'');
	$act = (isset($_GET['act'])?$_GET['act']:'list');
	
	switch ($mod) {
		case 'category':
			require_once('controller/CategoryController.php');
			$controller_obj = new CategoryController();
			switch ($act) {
				case 'archive':
					$controller_obj->archive();
					break;
				case 'single':
					$controller_obj->single();
					break;
				case 'add':
					$controller_obj->add();
					break;
				case 'store':
					$controller_obj->store();
					break;
				case 'update':
					$controller_obj->update();
					break;
				case 'delete':
					$controller_obj->delete();
					break;
				default:
					echo "Không tồn tại trang này";
					break;
			}
			break;
		case 'author':
			require_once('controller/authorController.php');
			$controller_obj = new authorController();
			switch ($act) {
				case 'archive':
					$controller_obj->archive();
					break;
				case 'single':
					$controller_obj->single();
					break;
				case 'add':
					$controller_obj->add();
					break;
				case 'store':
					$controller_obj->store();
					break;
				case 'update':
					$controller_obj->update();
					break;
				case 'delete':
					$controller_obj->delete();
					break;
				default:
					echo "Không tồn tại trang này";
					break;
			}
			break;
		
		default:
			echo "Không tồn tại module này";
			break;
	}
 ?>