<?php

namespace App\Livewire;

use App\Models\hasiltugas as ModelsHasiltugas;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class HasilTugas extends Component
{
    public $search;

    use WithPagination;

    public function render()
    {
        $diri = auth()->user();
        $id = $diri['id'];
        // $data = ModelsHasiltugas::where('akun_id',$id)->get();
        $data = DB::table('hasiltgs')
            ->where('akun_id', $id)
            ->where(function(Builder $query) {
                $query->where('dokumen','like', '%' . $this->search . '%')
                      ->orWhere('tgl_pengumpulan','like', '%' . $this->search . '%');
            })
            ->paginate(5);

        // $data = ModelsHasiltugas::where('nama', 'like', '%'.$this->search.'%')->get();

        return view('livewire.hasil-tugas',[
            'data' => $data
        ]);
    }
}
