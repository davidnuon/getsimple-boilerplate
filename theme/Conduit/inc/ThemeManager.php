<?php 

class ThemeManager {
	private $js = array();
	private $css  = array();
    private $cssPath = '';
    private $jsPath  = '';
        
        
	function addCSS($filename, $usePath = false) {
	    if($usePath) {
           array_push($this->css, $this->cssPath . '/' . $filename);
	    } else {
           array_push($this->css, $filename);
	    }
	}
	
	function addJS($filename, $usePath = false) {
        if($usePath) {    	    
	       array_push($this->js, $this->jsPath . '/' . $filename); 
        } else {
            array_push($this->js, $filename);
        }
	}
    
    
    function setJSPath ($string) {
        $this->jsPath = $string;
    }   
    
    function setCSSPath ($string) {
        $this->cssPath = $string;
    } 
		
	function spitCSS() {
		$output = "";
		$base = "<link rel=\"stylesheet\" type=\"text/css\" href=\"#\" />";
		
		foreach($this->css as $cssFile) {
			$output .= str_replace('#', $cssFile, $base);
		}
		
		return $output;
	}
	
	
	function spitJS() {
		$output = "";
		$base = "<script src=\"#\" type=\"text/javascript\"></script>";
		
		foreach($this->js as $jsFile) {
			$output .= str_replace('#', $jsFile, $base);
		}
		
		return $output;
	}
	
}
	
	
