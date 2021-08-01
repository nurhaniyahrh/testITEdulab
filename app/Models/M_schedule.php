<?php

namespace App\Models;
use CodeIgniter\Model;

class M_schedule extends Model
{
    protected $table = 'jadwalbelajar';
    protected $allowedFields = ['hari', 'tanggal', 'kelas', 'subjects'];

    public function getSchedule($id = false)
    {
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['id' =>$id])->first();
    }

    public function order_by()
    {
        $builder = $this->mSchedule->table('jadwalbelajar');
        $builder->orderBy('hari', 'ASC');
        $query = $builder->getVar();
        return $query;
    }
}