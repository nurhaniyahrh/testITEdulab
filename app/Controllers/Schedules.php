<?php

namespace App\Controllers;
use App\Models\M_schedule;

class Schedules extends BaseController
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
            'title' => 'Schedule | Edulab',
            'schedule' => $schedule
		];

		return view('schedules/index', $data);

	}

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Jadwal Belajar',
            'validation' =>\Config\Services::validation()
        ];

        return view('schedules/create', $data);
    }

    public function save()
    {
        if(!$this->validate([
            'hari' => 'required',
            'tanggal' => 'required',
            'kelas' => 'required',
            'subjects' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/schedules/create')->withInput()->with('validation', $validation);
        }

        $this->mSchedule->save([
            'hari' => $this->request->getVar('hari'),
            'tanggal' => $this->request->getVar('tanggal'),
            'kelas' => $this->request->getVar('kelas'),
            'subjects' => $this->request->getVar('subjects')
        ]);

        session()->setFlashdata('message', 'Jadwal berhasil ditambahkan');
        return redirect()->to('/schedules');
    }

    public function delete($id)
    {
        $this->mSchedule->delete($id);
        session()->setFlashdata('message', 'Jadwal berhasil dihapus');
        return redirect()->to('/schedules');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Jadwal Belajar',
            'validation' =>\Config\Services::validation(),
            'schedule' => $this->mSchedule->getSchedule($id)
        ];

        return view('schedules/edit', $data);
    }

    public function update($id)
    {
        $this->mSchedule->save([
            'id' => $id,
            'hari' => $this->request->getVar('hari'),
            'tanggal' => $this->request->getVar('tanggal'),
            'kelas' => $this->request->getVar('kelas'),
            'subjects' => $this->request->getVar('subjects')
        ]);

        session()->setFlashdata('message', 'Jadwal berhasil diubah');
        return redirect()->to('/schedules');
    }

}
