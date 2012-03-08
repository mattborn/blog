<?php

include_once 'markdown.php';

class Blog {

	public $uri;
	
	public function __construct(){
	
		$this->get_uri();
		
		if (!$this->uri[1]) {
			$this->show_all();
		} else {
			$this->show_markdown();
		}
	
	}
	
	private function get_uri(){
	
		$full_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		
		$this->uri = explode('/', $full_uri);
	
	}
	
	private function show_markdown(){
	
		if (file_exists('md/'.$this->uri[1].'.md')) {
			$markdown_file = file_get_contents('md/'.$this->uri[1].'.md');
		} else {
			$markdown_file = file_get_contents('md/404.md');
		}
		
		echo Markdown($markdown_file);
	
	}
	
	private function show_all(){
	
		echo '<a href="/markdown">Markdown Test</a>';
	
	}

}
