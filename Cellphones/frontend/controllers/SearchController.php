<?php 
	//include file model
	include "models/SearchModel.php";
	/**
	 * 
	 */
	class SearchController extends Controller
	{
		use SearchModel;
		public function smartSearch()
		{
			$key=isset($_GET["key"])?$_GET["key"]:"";
			$data=$this->modelSmartSearch($key);
			foreach ($data as $value) {
				echo "
				<li>
					<a href='index.php?controller=phonedetail&id=$value->id' style='display: flex;'>
						<img style='width:62px;' src='../assets/upload/phone/$value->photo'>
						<p>$value->name</p>
					</a>
				</li>
				<hr class='my-2'>
				";
			}
		}
		//search kích thước màn hình
		public function all()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findAll($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function manDuoi5()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findDuoi5($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function manTren5()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findTren5($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function manTren6()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findTren6($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		//search rom
		public function rom32()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findRom32($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function rom64()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findRom64($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function rom128()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findRom128($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function rom256()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findRom256($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function rom512()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findRom512($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		//search sim
		
		public function oneSim()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findOneSim($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function twoSim()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findTwoSim($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		//search hệ điều hành
		public function ios()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findIos($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function androi()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findAndroi($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}	
		//search Price
		public function price3M()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findPrice3M($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function price3to6M()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findPrice3to6M($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function price6to9M()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findPrice6to9M($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function price9to12M()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findPrice9to12M($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function price12M()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findPrice12M($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		
		
		public function priceUp()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findPriceUp($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function priceDown()
		{
			$id_nsx=isset($_GET["id"])?$_GET["id"]:0;
			$category=isset($_GET["category"])?$_GET["category"]:"";
			$result=$this->findPriceDown($id_nsx,$category);
			$this->loadView('SearchView.php',['result'=>$result]);
		}
		public function SearchDanhMuc()
		{
			$key=isset($_GET['key'])?$_GET['key']:"";
			$result=$this->SearchDanhMucModel($key);
			$this->loadView('SearchDanhMucView.php',['result'=>$result]);
		}
		
	}
	

 ?>