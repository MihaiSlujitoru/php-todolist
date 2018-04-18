<?php 
//Todo Application
//
//Task, comment, user, date

require 'functions.php';

class Task
{
	public $description;

	public $completed = false;

	public function __construct($description) 
	{
		//Automatically triggered on instationation
		$this->description = $description;
	}

	public function isComplete()
	{
		return $this->completed;
	}

	public function complete()
	{
		$this->completed = true;
	}
}

$tasks = [
	new Task('Go to the store'),
	new Task('Finish my theme'),
	new Task('Go for a run')
];

$tasks[0]->complete();

require 'index.view.php';




