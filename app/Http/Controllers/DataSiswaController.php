<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function datasiswa()
    {

        # data
        $nama = 'Alvin Hardinata';
        return $nama;
    }

    public function datasiswi()
    {

        # data
        $nama = 'Alvin Hardinata';
        return $nama;
    }
    public function nama($nama)
    {
    return 'nama anda adalah : ' .$nama;
    }
}
