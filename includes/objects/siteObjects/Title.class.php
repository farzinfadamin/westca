<?php 
	
	class Title extends SiteObject {
		
		public function __construct(){
			parent::__construct();	
		}
		
		
		public function process(){
			

			$title = "WestCA";
			switch(LiteFrame::getActiveAction()){
				case "homepage":
					$title = "WestCA";
					break;
			}
			$this->results = $title;
			
		}
		
	}


?>