<?php

public function_construct()
{
	$this->middleware('quest');
}

public function index()
{
	return view('welcome')l
}