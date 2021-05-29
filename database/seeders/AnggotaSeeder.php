<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anggota;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Anggota1 = new Anggota;
        $Anggota1->anggota_id = "1";
        $Anggota1->anggota_nama = "Arif";
        $Anggota1->anggota_alamat = "Sidoarjo";
        $Anggota1->anggota_jk = "L";
        $Anggota1->anggota_tlp = "11111";
        $Anggota1->save();
        
        $Anggota2 = new Anggota;
        $Anggota2->anggota_id = "2";
        $Anggota2->anggota_nama = "Ade";
        $Anggota2->anggota_alamat = "Surabaya";
        $Anggota2->anggota_jk = "L";
        $Anggota2->anggota_tlp = "22222";
        $Anggota2->save();

        $Anggota3 = new Anggota;
        $Anggota3->anggota_id = "3";
        $Anggota3->anggota_nama = "Zam";
        $Anggota3->anggota_alamat = "Kalimantan";
        $Anggota3->anggota_jk = "L";
        $Anggota3->anggota_tlp = "33333";
        $Anggota3->save();

    }
}
