<?php

include_once 'markdown.php';

class Blog {

	public $uri;
	
	public function __construct(){
	
		$full_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		
		$this->uri = explode('/', $full_uri);
		
		if (!$this->uri[1]) $this->show_all();
		
		else $this->show_markdown();
	
	}
	
	private function show_markdown(){
	
		$markdown_file = file_get_contents('md/'.$this->uri[1].'.md');
		
		echo Markdown($markdown_file);
	
	}
	
	private function show_all(){
	
		echo "showing all";
	
	}

}
