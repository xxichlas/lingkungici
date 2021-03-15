<?php

namespace App\Controllers;

use \App\Models\EventModel;

class Home extends BaseController
{
	protected $eventModel;
	public function __construct()
	{
		$this->eventModel = new EventModel();
	}


	public function index()
	{
		helper('html');
		helper('array');
		$events = $this->eventModel->getEvent();

		array_sort_by_multiple_keys($events, [
			'date' => SORT_ASC,
		]);




		$data = [
			'title' => 'Lingkungi | Events',
			'current' => 'events',
			'events' => $events
		];
		return view('home/home', $data);
	}
}
