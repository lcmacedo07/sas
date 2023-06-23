<?php

namespace App\Observers;

use App\Models\Book;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Http\Controllers\v1\_ControlCommon;

class BookObserver
{
	private $commons;

	public function __construct(_ControlCommon $commons)
	{
		$this->commons = $commons;
	}

	public function creating(Book $model)
	{
		$model->uuid = Str::uuid();
	}

	public function created(Book $model)
	{
		Cache::forget('books');
		// $this->commons->insertLog($model->id, 'edicao', 'C');
	}

	public function updating(Book $model)
	{
	}

	public function updated(Book $model)
	{
		Cache::forget('books');
		// $this->commons->insertLog($model->id, 'edicao', 'U');
	}

	public function deleted(Book $model)
	{
		Cache::forget('books');
		// $this->commons->insertLog($model->id, 'edicao', 'D');
	}

	public function restored(Book $model)
	{
		Cache::forget('books');
	}

	public function forceDeleted(Book $model)
	{
		Cache::forget('books');
	}
}