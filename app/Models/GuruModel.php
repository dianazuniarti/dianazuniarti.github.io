<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GuruModel extends Model
{
    public function allData()
    {
        return DB::table('tb_guru')->get();
    }
    
    public function detailData($id_guru)
    {
        return DB::table('tb_guru')->where('id_guru',$id_guru)->first();
    }

    public function addData($data)
    {
        return DB::table('tb_guru')->insert($data);
    }

    public function editData($id_guru,$data)
    {
        DB::table('tb_guru')
            ->where('id_guru',$id_guru)
            ->update($data);
    }

    public function deleteData($id_guru)
    {
        DB::table('tb_guru')
            ->where('id_guru',$id_guru)
            ->delete();
    }
}
