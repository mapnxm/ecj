<div>
    <section class="flex justify-center items-center flex-col">

        <div class="flex justify-between relative w-[90%]">
            <div class="flex gap-3">
                <a href="/admin" class="back z-10 bg-red-500 py-2 px-3 font-semibold text-white rounded-md group hover:scale-95 hover:bg-red-400 hover:text-red-800 transition-all duration-300 ease-in-out shadow-sm shadow-[#0f0f0f]"><i class="fa-solid fa-angle-left mr-2 text-white group-hover:bg-red-400 group-hover:text-red-800 transition-all duration-300 ease-in-out"></i> <span class="hidden lg:inline">Back</span></a>
                <button class="modal-btn z-10 bg-green-500 px-5 py-2 font-semibold rounded-md text-white hover:scale-95 hover:bg-green-400 hover:text-green-800 transition-all duration-300 ease-in-out shadow-sm shadow-[#0f0f0f]"><span class="hidden lg:inline">Add</span><i class="fa-solid fa-plus"></i></button>
            </div>
            <!-- <section class="lg:hidden relative overflow-hidden  right-3 w-full py-1.5">
                <button class="responsiveBtn py-1.5 px-2.5 rounded-full bg-white shadow-lg float-right"><i id="x" class="fa-solid fa-magnifying-glass"></i></button>
                <div class="responsiveBar absolute right-[-100rem] w-[80%] transition duration-700 ease-in-out">
                    <form id="" action="" class="relative w-full">
                        <input type="search" wire:model.live="search" id="search2" value="" autocomplete="off" class="border border-black px-4 rounded-full py-2 focus:outline-none w-full">
                        <label for="search" id="labelSearch2" class="absolute left-4 top-1/2 -translate-y-1/2">Search...</label><button type="submit" class="right-3 absolute top-1/2 -translate-y-1/2 bg-white px-3 py-1.5"><i class="fa-solid fa-magnifying-glass "></i></button>
                    </form>
                </div>
            </section> -->
            <form action="/list-mahasiswa" method="GET" class="relative hidden lg:flex w-96">
                <input type="search" wire:model.live="search" id="search" name="cari" value="" autocomplete="off" placeholder="Search..." class="shadow-sm shadow-[#0f0f0f] px-4 rounded-full py-2 focus:outline-none w-full">
                <!-- <label for="search" id="labelSearch" class="absolute left-4 top-1/2 -translate-y-1/2">Search...</label><button type="submit" class="right-3 absolute top-1/2 -translate-y-1/2 bg-white px-3 py-1.5"><i class="fa-solid fa-magnifying-glass "></i></button> -->
            </form>
        </div>
        <div class="table w-[98vw] mx-auto">
            <div class="p-5">
                <table class="text-center w-full table-fixed rounded-lg overflow-hidden bg-[#F5F7F8] shadow-sm shadow-[#0f0f0f]">
                    <thead class="bg-blue-400 text-white overflow-hidden rounded-md">
                        <tr>
                            <th class="w-[5%] py-3">no.</th>
                            <th class="w-[25%] py-3">Nama</th>
                            <th class="w-[25%] py-3">NIM</th>
                            <th class="w-[10%] py-3">Jurusan</th>
                            <th class="w-[25%] py-3">Email</th>
                            <th class="w-[20%] py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @php $no = 1; @endphp
                        @foreach ($mahasiswa as $index => $m)
                        <tr class="border-b border-black">
                            <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$mahasiswa->firstItem() + $loop->index}}</td>
                            {{-- <td class="py-3 scroll overflow-hidden overflow-x-scroll"></td> --}}
                            <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$m->nama}}</td>
                            <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$m->nim}}</td>
                            <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$m->jurusan}}</td>
                            <td class="py-3 scroll overflow-hidden overflow-x-scroll">{{$m->email}}</td>
                            <td class="py-3 scroll overflow-hidden overflow-x-scroll flex flex-col lg:flex-row justify-center items-center gap-2">
                                {{-- <i class="fa-solid fa-cloud-arrow-down p-2 cursor-pointer rounded text-white bg-blue-500"></i> --}}
                            <a href="{{$m->id}}/edit"> <i class="fa-solid fa-pen-to-square p-2 cursor-pointer rounded text-white bg-[#F9D923] hover:bg-yellow-100 hover:text-[#F9D923] transition-all duration-300 ease-in-out"></i></a>
                            <a href="#" class="del" data-id="{{$m->id}}"> <i class="fa-solid fa-trash p-2 cursor-pointer rounded text-white bg-red-500 hover:bg-red-200 hover:text-red-600 transition-all duration-300 ease-in-out"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        {{$mahasiswa->links()}}
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
                                window.location = "/"+delid+"/hapusakun"
                            }
                        });
                    });
                </script>
            </div>
        </div>
    </section>
</div>
