<?php

namespace App\Controllers;
use App\Models\M_schedule;

class Recap extends BaseController
{
    protected $mSchedule;

    public function __construct()
    {
        $this->mSchedule = new M_schedule();
    }

	public function index()
	{
        $schedule = $this->mSchedule->findAll();

        $data = [
            'title' => 'Recap | Edulab',
            'schedule' => $schedule
		];

		return view('recap/index', $data);
	}

    public function order()
    {
        $this->mSchedule->order_by();
    }

}
