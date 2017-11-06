<?php
	function recursiveScan($dir) {
		$tree = glob(rtrim($dir, '/') . '/*');
		if (is_array($tree)) {
			foreach($tree as $file) {
				if (is_dir($file)) {
					recursiveScan($file);
				}elseif (is_file($file)) {
					$file_parts = pathinfo($file);
					switch($file_parts['extension']){
						case "php":
							$filename = realpath($file);
							echo $filename."<br/>";
							//rename($filename, str_replace(".php",".txt",$file));
						break;
					}					
				}
			}
		}
	}
	recursiveScan('/var/www/');
?>
