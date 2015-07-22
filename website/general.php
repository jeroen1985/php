<?
class General {
	public $path = array();

	function parsePath() {
		$path = $this->path;

 		if (isset($_SERVER['REQUEST_URI'])){
    			$request_path = explode('?', $_SERVER['REQUEST_URI']);
			$path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
    			$path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
			$path['call'] = utf8_decode($path['call_utf8']);
    		
			if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
      				$path['call'] = '';
   			}

    			$path['call_parts'] = explode('/', $path['call']);

			if (isset($request_path[1])){
    				$path['query_utf8'] = urldecode($request_path[1]);
    				$path['query'] = utf8_decode(urldecode($request_path[1]));
    				$vars = explode('&', $path['query']);
    				
				foreach ($vars as $var) {
      					$t = explode('=', $var);
      					if( (isset($t[0])) && (isset($t[1]))){
						$path['query_vars'][$t[0]] = $t[1];
					}
   				}
			}
	 	}
	$this->path = $path;
	}
	
	function getParsePath(){
		return $this->path;
	}

}
?>