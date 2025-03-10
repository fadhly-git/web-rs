<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Models\JadwalDokter;
use App\Models\Dokter;
use Illuminate\Support\Facades\DB;

class JadwalDokterController
{
    public function index()
    {
        $jadwalDokter = DB::table('jadwal_dokters as j')
            ->join('dokters as d', 'j.id_dokter', '=', 'd.id_dokter')
            ->select('j.*', 'd.*')
            ->orderByRaw("FIELD(j.hari, 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu')")
            ->get();
        return [
            'jadwal_dokter' => $jadwalDokter
        ];
    }

    public function DokterJaga(){
        $today = now()->format('l'); // Get today's day name in English
        $hariMap = [
            'Monday' => 'senin',
            'Tuesday' => 'selasa',
            'Wednesday' => 'rabu',
            'Thursday' => 'kamis',
            'Friday' => 'jumat',
            'Saturday' => 'sabtu',
            'Sunday' => 'minggu'
        ];
        $hariIni = $hariMap[$today];

        $dokterJaga = DB::table('jadwal_dokters as j')
            ->join('dokters as d', 'j.id_dokter', '=', 'd.id_dokter')
            ->where('j.hari', $hariIni)
            ->where('j.status', 1)
            ->select('j.*', 'd.*')
            ->get();

        return [
            'dokter_jaga' => $dokterJaga
        ];
    }

    public function api(){
        $jadwalDokter = DB::table('jadwal_dokters as j')
            ->join('dokters as d', 'j.id_dokter', '=', 'd.id_dokter')
            ->select('j.*', 'd.*')
            ->orderByRaw("FIELD(j.hari, 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu')")
            ->get();
        $today = now()->format('l'); // Get today's day name in English
        $hariMap = [
            'Monday' => 'senin',
            'Tuesday' => 'selasa',
            'Wednesday' => 'rabu',
            'Thursday' => 'kamis',
            'Friday' => 'jumat',
            'Saturday' => 'sabtu',
            'Sunday' => 'minggu'
        ];
        $hariIni = $hariMap[$today];

        $dokterJaga = DB::table('jadwal_dokters as j')
            ->join('dokters as d', 'j.id_dokter', '=', 'd.id_dokter')
            ->where('j.hari', $hariIni)
            ->where('j.status', 1)
            ->select('j.*', 'd.*')
            ->get();
        return [
            'dokter_jaga' => $dokterJaga,
            'jadwal_dokter' => $jadwalDokter
        ];
    }
}
