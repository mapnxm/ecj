<?php

namespace App\Livewire;

use App\Models\hasiltugas;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    public $search;

    use WithPagination;

    public function render()
    {
        $hasil = hasiltugas::where('nama', 'LIKE', '%'. $this->search .'%')
        ->whereNot('is_delete', true)
        ->paginate(5);
        return view('livewire.search', ['hasil' => $hasil]);
    }
}
