<?php

use App\Controller;
use Model\Student;

class StudentController extends Controller {
	public function index() {
		$studentTable = new Student($this->pdo);
		$students = $studentTable->getAll();
		$this->view('home', ["students" => $students]);
	}

	public function create() {
		$studentTable = new Student($this->pdo);
		$student = $studentTable->store([
			"name" => "Ginny Weasely",
			"age" => 16
		]);
	}

	public function show() {
		$studentTable = new Student($this->pdo);
		$student = $studentTable->get(3);
		$this->view('show', ["student" => $student]);
	}

	public function update() {
		$studentTable = new Student($this->pdo);
		$student = $studentTable->update(6 ,[
			"name" => "Ginny Potter"
		]);
	}

	public function delete() {
		$studentTable = new Student($this->pdo);
		$student = $studentTable->delete(4);
	}
}