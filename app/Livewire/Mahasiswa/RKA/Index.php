<?php

namespace App\Livewire\Mahasiswa\RKA;

use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $title = 'Rencana Kerja Akhir';

        return view('livewire.mahasiswa.rka.index', compact('title'));
    }
}
