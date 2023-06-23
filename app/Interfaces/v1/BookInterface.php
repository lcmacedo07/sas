<?php

namespace App\Interfaces\v1;

use App\Http\Requests\BookRequest;

interface BookInterface
{

	public function index();
	public function show($uuid);
	public function details($uuid);
	public function store(BookRequest $request);
	public function update($uuid, BookRequest $request);
	public function delete($uuid);
	public function trash();
	public function restore($uuid);
}