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
<body>
    @include('elemen.header')

    <main class="w-full min-h-screen flex flex-col justify-center items-center">
        <div class=" w-[90%] mt-20 lg:mt-32 flex flex-col justify-center items-center  gap-10">
            <h1 class="text-3xl font-bold mx-auto">Task List</h1>
            <section>
                <div class="flex justify-end relative">
                    <a href="/admin" class="back z-10 bg-red-500 py-2 px-3 text-white rounded-md absolute left-0"><i class="fa-solid fa-angle-left mr-2 text-white"></i> <span class="hidden lg:inline">Back</span></a>
                    <button class="modal-btn z-10 bg-green-500 px-5 py-2 font-semibold rounded-md text-white absolute left-11 lg:left-20"><span class="hidden lg:inline">Add</span><i class="fa-solid fa-plus"></i></button>


                    <section class="lg:hidden relative overflow-hidden  right-3 w-full py-1.5">
                        <button class="responsiveBtn py-1.5 px-2.5 rounded-full bg-white shadow-lg float-right"><i id="x" class="fa-solid fa-magnifying-glass"></i></button>
                        <div class="responsiveBar z-50 absolute right-[-100rem] w-[80%] transition duration-700 ease-in-out">
                            <form id="" action="" class="relative w-full">
                                <input type="search" id="search2" value="" autocomplete="off" class="border border-black px-4 rounded-full py-2 focus:outline-none w-full">
                                <label for="search" id="labelSearch2" class="absolute left-4 top-1/2 -translate-y-1/2">Search...</label><button type="submit" class="right-3 absolute top-1/2 -translate-y-1/2 bg-white px-3 py-1.5"><i class="fa-solid fa-magnifying-glass "></i></button>
                            </form>
                        </div>
                    </section>
                    <form action="" class="relative hidden lg:flex">
                        <input type="search" id="search" value="" autocomplete="off" class="border border-black px-4 rounded-full py-2 focus:outline-none w-72">
                        <label for="search" id="labelSearch" class="absolute left-4 top-1/2 -translate-y-1/2">Search...</label><button type="submit" class="right-3 absolute top-1/2 -translate-y-1/2 bg-white px-3 py-1.5"><i class="fa-solid fa-magnifying-glass "></i></button>
                    </form>
                </div>

                <div class="table lg:mt-5 mt-5 lg:w-auto w-[98vw] mx-auto">
                    <div class="scroll overflow-hidden overflow-y-scroll h-[26rem]">
                        <table class="text-center w-full table-fixed rounded-lg overflow-hidden shadow-md shadow-gray-400">
                            <thead class="bg-blue-400 text-white overflow-hidden rounded-md">
                                <tr>
                                    <th class="w-[25%] py-3">No.</th>
                                    <th class="w-[15%] py-3">Topic</th>
                                    <th class="w-[25%] py-3">Tanggal <span class="hidden lg:inline">Upload</span></th>
                                    <th class="w-[20%] py-3">Lecture</th>
                                    <th class="w-[20%] py-3">Action</th>
                                </tr>
                            </thead>

                            <tbody class="">
                                <tr class="border-b-2 border-black">
                                    <td class="py-3"></td>
                                    <td class="py-3"></td>
                                    <td class="py-3"></td>
                                    <td class="py-3"></td>
                                    <td class="py-3 flex flex-col lg:flex-row justify-center items-center gap-2">
                                        {{-- <i class="fa-solid fa-cloud-arrow-down p-2 cursor-pointer rounded text-white bg-blue-500"></i> --}}
                                        <i class="fa-solid fa-pen-to-square p-2 cursor-pointer rounded text-white bg-yellow-500 "></i>
                                        <i class="fa-solid fa-trash p-2 cursor-pointer rounded text-white bg-red-500"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <div class="modal w-full h-screen fixed top-0 left-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <div class="relative bg-white w-[90%] lg:w-[35%]  p-5 rounded-md shadow-md shadow-black">
            <div class="absolute top-1 right-1" id="close">
                <button class="hover:bg-red-300 lg:py-[0.5rem] lg:px-3 px-2.5 py-1 rounded-full bg-black group">
                    <i class="fa-solid fa-xmark group-hover:text-red-700 text-base lg:text-2xl text-white rotate-0 group-hover:-rotate-180 transition-all duration-300 ease-in-out"></i>
                </button>
            </div>
            <h1 class="text-center text-3xl font-bold mb-10">Tambah Tugas</h1>

            <form action="" class="">
                <div class="overflow-hidden overflow-y-scroll h-60 my-5 lg:overflow-auto lg:h-auto">
                    <div class="flex flex-col mt-5 justify-center items-start">
                        <label class="font-semibold" for="nama">Lecture Name :</label>
                        <input autocomplete="off" class="w-full border border-black focus:outline-none px-3 py-2 rounded-md" type="text" id="nama">
                    </div>
                    {{-- <div class="flex flex-col mt-5 justify-start items-start">
                        <label class="font-semibold" for="nim">NIM :</label>
                        <input autocomplete="off" class="w-full border border-black focus:outline-none px-3 py-2 rounded-md" type="number" id="nim">
                    </div> --}}
                    <div class="flex flex-col mt-5 justify-start items-start">
                        <label class="font-semibold" for="jurusan">Topic :</label>
                        <input autocomplete="off" class="w-full border border-black focus:outline-none px-3 py-2 rounded-md" type="text" id="jurusan">
                    </div>

                    <div class="mt-5">
                        <label for="" class="font-semibold">Task :</label>
                        <div class="flex flex-col justify-center items-center">
                            <div class="lg:h-32 h-20 flex justify-center items-center text-xs lg:text-base">
                                <label for="file" class="group justify-center items-center flex rounded-sm h-full active:bg-gray-200 active:border-gray-200 cursor-pointer w-44 border-2 border-dashed border-yellow-500 bg-white">
                                    <i class="fa-solid fa-cloud-arrow-up text-yellow-500 group-active:text-white text-3xl lg:text-6xl"></i>
                                </label>
                            </div>
                            <input type="file" id="file" required class="file:hidden text-sm text-yellow-500 font-semibold mt-2 border-b-2 border-yellow-500 w-60 py-1 pl-10">
                        </div>
                    </div>
                </div>

                <input type="submit" value="Submit" id="close" class=" bg-green-800 px-5 py-2 font-semibold text-white rounded-md cursor-pointer mt-10 hover:bg-green-600 hover:text-green-800 transition-all duration-300 ease-in-out">
            </form>
        </div>
    </div>
    @include('elemen.footer')
    @include('elemen.script')

    <script>
        // search
        const search2 = document.getElementById('search2');
        const label2 = document.getElementById('labelSearch2');

        search2.addEventListener('focusin', function(){
                label2.style.display = 'none';
        });
        search2.addEventListener('focusout', function(){
            if (!search2.value) {
                label2.style.display = 'inline';
            }else{
                label2.style.display = 'none';
            }
        });


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
        const responsiveBar = document.querySelector('.responsiveBar');
        const responsiveBtn = document.querySelector('.responsiveBtn');
        const back = document.querySelector('.back');
        const addBtn = document.querySelector('.modal-btn');
        const x = document.getElementById('x');

        responsiveBtn.addEventListener('click', function() {
           responsiveBar.classList.toggle('active');
           back.classList.toggle('active');
           addBtn.classList.toggle('active');
           x.classList.toggle('fa-magnifying-glass');
           x.classList.toggle('fa-xmark');
        // alert('ok');
        });
        document.addEventListener('click', function(e) {
            if (!responsiveBtn.contains(e.target) && !responsiveBar.contains(e.target)) {
                responsiveBar.classList.remove('active');
                back.classList.remove('active');
                addBtn.classList.remove('active');
                x.classList.toggle('fa-magnifying-glass');
                x.classList.toggle('fa-xmark');
            }
        });


    </script>
</body>
</html>
