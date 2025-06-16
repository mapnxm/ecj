<div>
    <div class="flex justify-between">
        <a href="/list-mahasiswa" class="btn bg-[#0C359E] flex flex-col justify-center items-center gap-5 rounded-md ml-5 px-3 hover:scale-105 transition-all duration-300 ease-in-out">
            <button class="bg-transparent flex justify-center items-center w-full gap-5  rounded-md">
                <i class="fa-solid fa-users-gear text-white"></i>
                <p class="text-white font-semibold">List Mahasiswa</p>
            </button>
        </a>
        <form action="/admin" method="GET" class="relative mr-5">
            <input type="search" placeholder="Search..." id="search" name="cari" autocomplete="off" wire:model.live="search" class="bg-[#F5F7F8] shadow shadow-[#1F1D36] text-[#1F1D36] text-sm px-4 rounded-full py-3 focus:outline-none w-96">
            <!-- <label for="search" id="labelSearch" class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">Search...</label><button type="submit" class="right-3 absolute top-1/2 -translate-y-1/2 bg-white px-3 py-1.5 text-gray-500"><i class="fa-solid fa-magnifying-glass "></i></button> -->
        </form>
    </div>
    <div class="table mt-5 lg:w-[95vw] w-[98vw]">
        <div class="p-2">
            <table class="text-center w-full table-fixed rounded-md overflow-hidden bg-[#F5F7F8]">
                <thead class="">
                    <tr class="bg-blue-400 text-white rounded-t-md">
                        <th class="w-[10%] py-3">No</th>
                        <th class="w-[10%] py-3">Nama</th>
                        <th class="w-[10%] py-3">NIM</th>
                        <th class="w-[10%] py-3">Jurusan</th>
                        <th class="w-[10%] py-3">Dokumen</th>
                        <th class="w-[10%] py-3">Audio</th>
                        <th class="w-[10%] py-3">Topic</th>
                        <th class="w-[10%] py-3">Semester</th>
                        <th class="w-[10%] py-3"> Pengumpulan</th>
                        <th class="w-[10%] py-3">nilai</th>
                        <th class="w-[10%] py-3">Download/ <br>Hapus</th>
                    </tr>
                </thead>

                <tbody class="">
                    @foreach ($hasil as $h)
                    <tr id="results" class="text-gray-800 border-b border-[#1F1D36] border-opacity-50">
                        <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$hasil->firstItem() + $loop->index}}</td>
                        <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$h->nama}}</td>
                        <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$h->nim}}</td>
                        <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$h->jurusan}}</td>
                        <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$h->dokumen}}</td>
                        <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$h->audio}}</td>
                        <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$h->topic}}</td>
                        <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$h->semester}}</td>
                        <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$h->tgl_pengumpulan}}</td>
                        <td class="py-3 scroll overflow-hidden overflow-x-scroll">
                            <form method="post" action="/{{$h->id}}/nilai">
                                @method('put')
                                @csrf
                                <input type="number" class="focus:outline-none rounded-md border-black w-10 mr-2 p-1 text-center" min="0" max="100" name="nilai" id="nilai" autocomplete="off" value="{{$h->nilai}}">
                            </form>
                        </td>
                        <td class="py-3 scroll overflow-hidden overflow-x-scroll flex flex-col lg:flex-row justify-center items-center gap-2">
                            <a href="/{{$h->id}}/downloadD"><i class="fa-regular fa-file-word p-2 cursor-pointer rounded text-white bg-blue-500"></i></a>
                            <a href="/{{$h->id}}/downloadA"><i class="fa-solid fa-file-audio p-2 cursor-pointer rounded text-white bg-yellow-500 "></i></a>
                            <a href="#" class="del" data-id="{{$h->id}}"><i class="fa-solid fa-trash p-2 cursor-pointer rounded text-white bg-red-500"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    {{$hasil->links()}}
                </tbody>
            </table>
        <script>
        $('.del').click( function() {
            var delid = $(this).attr('data-id');
            Swal.fire({
                title: "Apa kamu yakin?",
                text: "Aksi ini dapat menghapus data",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Iya"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Data sudah di hapus",
                        icon: "success",
                    });
                    window.location = "/"+delid+"/hapustgs"
                }
            });
        });
        </script>
        </div>
    </div>
</div>
