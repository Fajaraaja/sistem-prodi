<?php

namespace App\Livewire\Mahasiswa\RKA;

use App\Models\Mahasiswa;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $title = 'Rencana Kerja Akhir';
        $mahasiswas = Mahasiswa::all();
        return view('livewire.mahasiswa.rka.index', compact('title','mahasiswas'));
    }
}
