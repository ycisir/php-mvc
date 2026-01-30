<?php

use App\Controller;
use Model\Student;

class TestController extends Controller {

	// get all
	// public function show() {
	// 	$studentTable = new Student($this->pdo);
	// 	$students = $studentTable->getAll();
	// 	var_dump($students);
	// 	$this->view('test', ["name" => "Jack"]);
	// }


	// show
	public function show() {
		$studentTable = new Student($this->pdo);
		$student = $studentTable->get(1);
		// var_dump($student);
		$this->view('test', ["student" => $student]);
	}


	// store
	// public function show() {
	// 	$studentTable = new Student($this->pdo);
	// 	$student = $studentTable->store([
	// 		"name" => "Ginny Weasely",
	// 		"age" => 16
	// 	]);
	// }


	// update not works now
	// public function show() {
	// 	$studentTable = new Student($this->pdo);
	// 	$student = $studentTable->update(4 ,[
	// 		"name" => "Ginny Potter"
	// 	]);
	// }

	// delete
	// public function show() {
	// 	$studentTable = new Student($this->pdo);
	// 	$student = $studentTable->delete(5);
	// }
}