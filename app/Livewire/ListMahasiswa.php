<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ListMahasiswa extends Component
{

    public $search;

    use WithPagination;

    public function render()
    {
        $id = Auth()->id();

        $data_siswa = User::where('nama', 'LIKE', '%'.$this->search.'%')->whereNot('id',$id)->paginate(5);

        return view('livewire.list-mahasiswa',[
            'mahasiswa' => $data_siswa
        ]);
    }
}
