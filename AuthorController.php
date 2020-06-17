<?php 
	require_once('model/authormodel.php');

	class AuthorController{
		var $cate_model;

		function __construct(){
			$this->cate_model = new author();
		}

		public function archive(){
			$data = array();

			$data = $this->cate_model->All();

			require_once('view/author/archive.php');
		}

		public function single(){

			$id = isset($_GET['id'])?$_GET['id']:0;


			$cate = $this->cate_model->find($id);

			require_once('view/author/single.php');
		}

		public function add(){
			require_once('view/author/add.php');
		}

		public function store(){
			$data = array();
			
			$data['ath_name'] = $_POST['ath_name'];

			$data['description'] = $_POST['description'];

			$status = $this->cate_model->create($data);
			
			if($status == true){
				header("Location: ?mod=author&act=archive");
			}else{
				header("Location: ?mod=author&act=add");
			}
		}
		
		// public function edit(){
		// 	$id = isset($_GET['id'])?$_GET['id']:0;
			
		// 	$cate = $this->cate_model->find($id);
			
		// 	require_once('view/category/edit.php');
		// }
		
		// public function update(){
		// 	$data = array();

		// 	$data['title'] = $_POST['title'];

		// 	$data['description'] = $_POST['description'];

		// 	$status = $this->cate_model->update($data);
			
		// 	if($status == true){
		// 		header("Location: ?mod=category");
		// 	}else{
		// 		header("Location: ?mod=category&act=edit&id=".$dat['id']"");
		// 	}
			
		// }
	}
 ?>