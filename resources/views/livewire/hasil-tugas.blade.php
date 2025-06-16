<div>
    <div class="table mt-10 lg:mt-0 w-[98vw] mb-5">
        {{-- <div class="m-5 w-[95%] lg:absolute top-0 left-2">
            <a href="/home" class="bg-red-500 py-2 px-3 text-white rounded-md"><i class="fa-solid fa-angle-left mr-2 text-white"></i>Back</a>
        </div> --}}
        <div class=" flex justify-end mr-10">
            <div class="w-96">
                <form action="/hasil" method="GET" class="relative">
                    <input type="search" placeholder="Search..." wire:model.live="search" name="cari2" id="search" value="" autocomplete="off" class="shadow-sm shadow-[#0f0f0f] px-4 rounded-full py-2 focus:outline-none w-full">
                    <!-- <label for="search" id="labelSearch" class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-700">Search...</label><button type="submit" class="right-3 absolute top-1/2 -translate-y-1/2 bg-[#F5F7F8] px-3 py-1.5"><i class="fa-solid fa-magnifying-glass "></i></button> -->
                </form>
            </div>
        </div>
        <div class="p-5">
           <table class="w-full table-fixed text-center bg-[#F5F7F8] rounded-md shadow-sm shadow-[#0f0f0f] overflow-hidden">
               <thead class="w-full bg-blue-500 text-white">
                   <tr>
                       <th class="w-[5%] py-3 text-center">No.</th>
                       <th class="w-[10%] py-3 text-center">Nama</th>
                       <th class="w-[10%] py-3 text-center">Jurusan</th>
                       <th class="w-[10%] py-3 text-center">Nama dokumen</th>
                       <th class="w-[10%] py-3 text-center">Nama audio</th>
                       <th class="w-[10%] py-3 text-center">Semester</th>
                       <th class="w-[10%] py-3 text-center">Topic</th>
                       <th class="w-[10%] py-3 text-center">Tanggal</th>
                       <th class="w-[10%] py-3 text-center">Nilai</th>
                       <th class="w-[5%] py-3 text-center">Aksi</th>
                       {{-- <th></th> --}}
                   </tr>
               </thead>

               <tbody class="w-full">
                   @foreach ($data as $d)
                   <tr class="border-b border-[#0f0f0f]">
                       <td class="scroller py-3 overflow-hidden text-ellipsis">{{$data->firstItem() + $loop->index}}</td>
                       <td class="scroller py-3 overflow-hidden text-ellipsis">{{$d->nama}}</td>
                       <td class="scroller py-3 overflow-hidden text-ellipsis">{{$d->jurusan}}</td>
                       <td class="scroller py-3 overflow-hidden text-ellipsis">{{$d->dokumen}}</td>
                       <td class="scroller py-3 overflow-hidden text-ellipsis">{{$d->audio}}</td>
                       <td class="scroller py-3 overflow-hidden text-ellipsis">{{$d->semester}}</td>
                       <td class="scroller py-3 overflow-hidden text-ellipsis">{{$d->topic}}</td>
                       <td class="scroller py-3 overflow-hidden text-ellipsis">{{$d->tgl_pengumpulan}}</td>
                       <td class="scroller py-3 overflow-hidden text-ellipsis">{{$d->nilai}}</td>
                       <td class="py-3 scroller  overflow-hidden text-ellipsis flex flex-col lg:flex-row justify-center items-center gap-2">
                            <button href="#" data-id="{{$d->id}}" class="del" ><i class="fa-solid fa-trash p-2 cursor-pointer rounded text-white bg-red-500"></i></button>
                        </td>
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
                        window.location = "/"+delid+"/deltgs"
                    }
                });
            });
        </script>
                   </tr>
                   @endforeach
                   {{$data->links()}}
               </tbody>
           </table>
        </div>
    </div>
</div>
