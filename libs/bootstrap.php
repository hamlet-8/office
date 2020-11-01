<?php 
	class Bootstrap{
		
		function __construct()
		{	
			$validFile = 'models/home.php';
			if(isset($_GET['url'])){ 
				$url = $_GET['url'];
				$url= rtrim($url,'/');
				$url = explode('/',$url);
				if (isset($url[0])) {
					
					$file = 'models/' .$url[0].'.php';

					if (file_exists($file)) {
						$validFile =  $file;

					}else{
						$this-> loadHome();
						// echo 'false_one';
					}
				}
			}else{
				$this-> loadHome();
				// echo 'false_two';
			}
			
			return $validFile;
			
		}

		protected function loadHome(){
			require	'models/home.php';
			//new home;
		}
	
	}

	
?>