<?php 
	$sym = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
	$Bsym = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
	$num = array(0,1,2,3,4,5,6,7,8,9);

	function getRandPass(){
		$pass = "";
		global $sym;
		global $num;
		global $Bsym;
		for ($i=0; $i<$_GET["length"]; $i++){
			$p = rand(1,2);
			if ($_GET["password"]=="password"){
				if(isset($_GET["Bword"])){
					switch ($p) {
						case 1:
							$pass.=$sym[rand(0,count($sym)-1)];
						break;
						
						case 2:
							$pass.=$Bsym[rand(0,count($Bsym)-1)];
						break;
					}
				} else {
					$pass.=$sym[rand(0,count($sym)-1)];
				}
			} else 
			if ($_GET["password"]=="pin"){
				$pass.=$num[rand(0,count($num)-1)];
			} else 
			if ($_GET["password"]=="other"){
				if (isset($_GET["Bword"])){
					$r = rand(1,2);
					switch($p) {
						case 1:
							if($r==1){
								$pass.=$Bsym[rand(0,count($Bsym)-1)];
							}
							else{
								$pass.=$sym[rand(0,count($sym)-1)];
							}
						break;
						case 2:
							$pass.=$num[rand(0,count($num)-1)];
						break;
					}
				}
				else{
				switch ($p){
					case 1:
						$pass.=$sym[rand(0,count($sym)-1)];
					break;

					case 2:
						$pass.=$num[rand(0,count($num)-1)];
					break;
					}
				}

			}
		}

		return $pass;
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<script type="text/javascript">
 		function relPage(){
 			location.reload();
 		}
 	</script>
 </head>
 <body>
	 <div class="main">
		<div class="header">
			<a href="index.php"><img src="images/logo.png" class="logo"></a>
			<div>
				<p class="text">Randomize AM</p>
				<p id="text">Ստացեք գաղտաբառ 2 վայրկյանում․</p>	
			</div>
		</div>
		<div class="content">
			<div class="ardyunq">
				<p class="big">
					<?php echo getRandPass() ?>
				</p>
				<a href="index.php" class="big" id="krit">Փոխել կրիտերիան</a>
				<button onclick="relPage()" class="button">Փորձել կրկին</button>
				<noscript>
					<p class="big"><b>Javascript-ը ձեր բրաուզերում անջատված է, այդ պատճառով կրկին փորձելու համար խնդրում ենք թարմացնել էջը (F5).</b></p>
				</noscript>
			</div>
		</div>
		<div class="footer">
			<div class="info">06.2017</div>
			<div class="info" id="name">Կայքը՝ Սերգեյ Ադամյանի</div>
		</div>
	</div>
  </body>
 </html>