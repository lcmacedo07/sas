<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Interfaces\v1\BookInterface;
use App\Http\Requests\BookRequest;
use App\Http\Controllers\v1\_ControlCommon;

class BookController extends Controller
{
	private $interface, $commons, $gate;

	public function __construct(BookInterface $interface, _ControlCommon $commons)
	{
		$this->interface = $interface;
		$this->commons = $commons;
	}

	public function index()
	{
		return $this->interface->index();
	}

	public function show($uuid)
	{
		return $this->interface->show($uuid);
	}

	public function details($uuid)
	{
		return $this->interface->details($uuid);
	}

	public function store(BookRequest $request)
	{
		return $this->interface->store($request);
	}

	public function update($uuid, BookRequest $request)
	{
		return $this->interface->update($uuid, $request);
	}

	public function delete($uuid)
	{
		return $this->interface->delete($uuid);
	}

	public function trash()
	{
		return $this->interface->trash();
	}

	public function restore($uuid)
	{
		return $this->interface->restore($uuid);
	}
}