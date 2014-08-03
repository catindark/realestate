<?php
class v_HeaderFooter{
	function getHeader($params){
		ob_start();
		?>
			<html>
				<head>
					<title><?php echo $params['title']; ?></title>
					<link rel="stylesheet" href="<?php echo auto_version('lib/v/base.css'); ?>" type="text/css" />
				</head>
				<body>
		<?php
			return ob_get_clean();
	}
	
	function getFooter(){
		ob_start();
		?>
		</body>
		</html>
		<?php
		return ob_get_clean();
	}
	
}
?>
