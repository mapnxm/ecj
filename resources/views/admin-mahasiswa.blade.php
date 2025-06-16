<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('elemen.style')
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .scroll::-webkit-scrollbar{
            display: none;
        }

        #nim::-webkit-inner-spin-button {
            display: none;
        }

        #nim{
            -moz-appearance: none;
        }

        .modal.active {
            display: flex;
        }

        .responsiveBar.active{
            left: 20px;

        }
        .back.active{
            display: none;
        }
        .modal-btn.active{
            display: none;
        }
    </style>

</head>
<body class="bg-[#EFECEC]">
    @include('elemen.header')

    <main class="w-full min-h-screen flex flex-col justify-center items-center">
        <div class=" w-[90%] mt-20 lg:mt-10 flex flex-col justify-center items-center  gap-10">
            <h1 class="text-3xl font-semibold mx-auto text-[#03001C]">List Mahasiswa</h1>
            @livewire('list-mahasiswa')
        </div>
    </main>

    <div class="modal w-full h-screen fixed top-0 left-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <div class="relative bg-white w-[90%] lg:w-[35%]  p-5 rounded-md shadow-sm shadow-[#0f0f0f]">
            <div class="absolute top-1 right-1" id="close">
                <button class="size-10 flex justify-center items-center rounded-full bg-[#0f0f0f] group hover:bg-red-300">
                    <i class="fa-solid fa-xmark group-hover:text-red-700 text-base lg:text-2xl text-white rotate-0 group-hover:-rotate-180 transition-all duration-300 ease-in-out"></i>
                </button>
            </div>
            <h1 class="text-center text-3xl font-bold mb-10 text-[#0f0f0f]">Tambah Mahasiswa</h1>

            <form action="/store" method="POST" class="">
                @csrf
                <div class="overflow-hidden overflow-y-scroll h-60 my-5 lg:overflow-auto lg:h-auto">
                    <div class="flex flex-col mt-5 justify-center items-start">
                        <label class="font-semibold" for="nama">Email :</label>
                        <input autocomplete="off" class="w-full border border-black focus:outline-none px-3 py-2 rounded-md" name="email" type="email" id="email">
                    </div>
                    <div class="flex flex-col mt-5 justify-start items-start">
                        <label class="font-semibold" for="jurusan">Nama :</label>
                        <input autocomplete="off" class="w-full border border-black focus:outline-none px-3 py-2 rounded-md" name="nama" type="text" id="nama">
                    </div>
                    <div class="flex flex-col mt-5 justify-start items-start">
                        <label class="font-semibold" for="nim">NIM :</label>
                        <input autocomplete="off" class="w-full border border-black focus:outline-none px-3 py-2 rounded-md" name="nim" type="number" id="nim">
                    </div>
                    <div class="flex flex-col mt-5 justify-start items-start">
                        <label class="font-semibold" for="jurusan">Jurusan :</label>
                        <input autocomplete="off" class="w-full border border-black focus:outline-none px-3 py-2 rounded-md" name="jurusan" type="text" id="jurusan">
                    </div>
                    <br>
                    <div class="">
                        <select name="role" id="" class="border-double border-[#0f0f0f] border-2 rounded-md px-2 py-1">
                             <option value="">Pilih..</option>
                             <option value="mahasiswa">mahasiswa</option>
                             <option value="admin">dosen</option>
                        </select>
                     </div>

                    {{-- <div class="mt-5">
                        <label for="" class="font-semibold">Task :</label>
                        <div class="flex flex-col justify-center items-center">
                            <div class="lg:h-32 h-20 flex justify-center items-center text-xs lg:text-base">
                                <label for="file" class="group justify-center items-center flex rounded-sm h-full active:bg-gray-200 active:border-gray-200 cursor-pointer w-44 border-2 border-dashed border-yellow-500 bg-white">
                                    <i class="fa-solid fa-cloud-arrow-up text-yellow-500 group-active:text-white text-3xl lg:text-6xl"></i>
                                </label>
                            </div>
                            <input type="file" id="file" required class="file:hidden text-sm text-yellow-500 font-semibold mt-2 border-b-2 border-yellow-500 w-60 py-1 pl-10">
                        </div>
                    </div> --}}
                </div>

                <input type="submit" value="Submit" id="close" class=" bg-green-800 px-5 py-2 font-semibold text-white rounded-md cursor-pointer mt-10 hover:bg-green-600 hover:text-green-800 transition-all duration-300 ease-in-out">
            </form>
        </div>
    </div>

    @include('elemen.footer')
    @include('elemen.script')
    <script>
        // // search
        // const search2 = document.getElementById('search2');
        // const label2 = document.getElementById('labelSearch2');

        // search2.addEventListener('focusin', function(){
        //         label2.style.display = 'none';
        // });
        // search2.addEventListener('focusout', function(){
        //     if (!search2.value) {
        //         label2.style.display = 'inline';
        //     }else{
        //         label2.style.display = 'none';
        //     }
        // });


        // modal
        const modal = document.querySelector('.modal');
        const btn = document.querySelector('.modal-btn');
        const close = document.querySelector('#close');

        btn.addEventListener('click', function() {
            modal.classList.add('active');
            // alert('ok');
        });
        close.addEventListener('click', function() {
            modal.classList.remove('active');
            // alert('ok');
        });



        // reponsive search bar
        // const responsiveBar = document.querySelector('.responsiveBar');
        // const responsiveBtn = document.querySelector('.responsiveBtn');
        // const back = document.querySelector('.back');
        // const addBtn = document.querySelector('.modal-btn');
        // const x = document.getElementById('x');

        // responsiveBtn.addEventListener('click', function() {
        //    responsiveBar.classList.toggle('active');
        //    back.classList.toggle('active');
        //    addBtn.classList.toggle('active');
        //    x.classList.toggle('fa-magnifying-glass');
        //    x.classList.toggle('fa-xmark');
        // // alert('ok');
        // });

        // document.addEventListener('click', function(e) {
        //     if (!responsiveBtn.contains(e.target) && !responsiveBar.contains(e.target)) {
        //         responsiveBar.classList.remove('active');
        //         back.classList.remove('active');
        //         addBtn.classList.remove('active');
        //         x.classList.toggle('fa-magnifying-glass');
        //         x.classList.toggle('fa-xmark');
        //     }
        // });
    </script>
</body>
</html>
