<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    @include('elemen.style')
    <style>
        .descript::-webkit-scrollbar{
            display: none;
        }

        #modal.active{
            display: flex;
        }

        #nis {
            -moz-appearance: textfield;
        }

        #nis::-webkit-inner-spin-button,
        #nis::-webkit-outer-spin-button {
            display: none;
            -webkit-appearance: none;
        }
    </style>
</head>
<body class="bg-[#EFECEC]">
    @include('elemen.header')
    <main class=" w-full min-h-screen flex flex-col justify-center items-center relative">
        <div class=" w-[90%] mt-32 flex flex-col lg:flex-row justify-center items-start  gap-10">
            <div class="leftBlock">
                <div class="bg-[#F5F7F8] shadow-md shadow-[#0f0f0f] w-full min-h-[30rem] lg:min-h-[35rem] rounded-md py-5">
                    @foreach($data as $d)
                    <h1 class="font-bold text-lg uppercase lg:text-3xl p-5">{{$d->judul}}</h1>
                    <ul class="p-5">
                        <li class="font-semibold text-sm lg:text-lg">Lecturer's Name : {{$d->dosen}}</li>
                        <li class="font-semibold text-sm lg:text-lg">Date : {{$d->tgl_upload}}</li>
                    </ul>
                    {{-- <p class="px-5 descript text-sm text-left max-w-[100%] overflow-hidden overflow-y-scroll">
                        {{$teks}}
                    </p> --}}
                    <p class="px-5 descript text-sm text-left max-w-[100%] overflow-hidden overflow-y-scroll">
                        {{-- {{$d->vokab}}
                    </p> --}}
                    <div class="flex lg:flex-row flex-col justify-center items-center w-full px-5 gap-5">
                        <img src="{{$d->isi}}" class="lg:size-[50%] w-[90%]" alt="">
                        <img src="{{$d->vokab}}" class="lg:size-[50%] w-[90%]" alt="">
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="rightBlock">
                <button id="open" class="bg-blue-300 text-white text-center h-44  w-full lg:w-52 rounded-md mb-8 hover:scale-95 transition-all duration-300 ease-in-out">
                    <i class="fa-solid fa-cloud-arrow-up text-5xl"></i>
                    <p class="font-semibold text-2xl mt-10">Upload Tugas</p>
                </button>

                <div class="rounded-md p-5 h-80 bg-[#F5F7F8] shadow-md shadow-[#0f0f0f] lg:w-52  w-full">
                    <h1 class="font-bold text-lg pb-3">Description</h1>
                    <div class="descript overflow-hidden overflow-y-scroll h-[90%]">
                        <p class="text-sm text-gray-700">kerjakan tugas dengan benar dan kumpulkan sesuai tenggat waktu yang di berikan oleh pengajar</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=" lg:absolute lg:bottom-20 lg:right-32">
            <a href="/home" class="bg-red-500 py-2 px-3 text-white rounded-md hover:bg-red-400 hover:text-red-800 transition-all duration-300 ease-in-out group"><i class="fa-solid fa-angle-left mr-2 text-white group-hover:text-red-800 transition-all duration-300 ease-in-out"></i>Back</a>
        </div>
    </main>

    <div class="hidden justify-center items-center h-screen w-full bg-black bg-opacity-50 fixed top-0 left-0 z-50" id="modal">
        <div class="bg-[#F5F7F8] shadow-md h-[90vh] lg:h-auto mt-5 lg:mt-0 shadow-black rounded-md p-5 lg:px-10 w-[95%] lg:w-[70%] relative">
         <h1 class="text-center text-2xl font-bold mb-10">Upload Your Files</h1>
         <form action="/uploadhasil" method="POST" enctype="multipart/form-data" class="flex justify-center lg:flex-row flex-col items-start gap-10 lg:h-auto h-[22rem] lg:overflow-y-hidden overflow-hidden overflow-y-scroll">
            @csrf
            <div class="content1 hidden lg:flex flex-col lg:basis-1/2 w-full">
                <div class="flex flex-col justify-start text-xs lg:text-base">
                    <label class="font-semibold" for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama" required autocomplete="off" disabled value="{{Auth::user()->nama}}" spellcheck="false" class="mt-2 focus:outline-none py-1 px-2 rounded-sm border border-black bg-[#F5F7F8] text-gray-700">
                </div>
                <div class="flex flex-col justify-start text-xs lg:text-base mt-5">
                    <label class="font-semibold" for="nis">NIS:</label>
                    <input type="number" name="nim" id="nis" required autocomplete="off" disabled value="{{Auth::user()->nim}}" spellcheck="false" class="mt-2 focus:outline-none py-1 px-2 rounded-sm border border-black bg-[#F5F7F8] text-gray-700">
                </div>
                <div class="flex flex-col justify-start text-xs lg:text-base mt-5 ">
                    <label class="font-semibold" for="jurusan">Jurusan:</label>
                    <input type="text" name="jurusan" id="jurusan" required autocomplete="off" disabled value="{{Auth::user()->jurusan}}" spellcheck="false" class="mt-2 focus:outline-none py-1 px-2 rounded-sm border border-black bg-[#F5F7F8] text-gray-700">
                </div>
                @foreach($data as $d)
                <div class="flex flex-col justify-start text-xs lg:text-base mt-5 ">
                    <label class="font-semibold" for="jurusan">Semester:</label>
                    <input type="text" name="semester" id="jurusan" required autocomplete="off" disabled value="{{$d->semester}}" spellcheck="false" class="mt-2 focus:outline-none py-1 px-2 rounded-sm border border-black bg-[#F5F7F8] text-gray-700">
                </div>
                <div class="flex flex-col justify-start text-xs lg:text-base mt-5 ">
                    <label class="font-semibold" for="jurusan">Topic:</label>
                    <input type="text" name="topic" id="jurusan" required autocomplete="off" disabled value="{{$d->topic}}" spellcheck="false" class="mt-2 focus:outline-none py-1 px-2 rounded-sm border border-black bg-[#F5F7F8] text-gray-700">
                </div>
                <div class="flex invisible flex-col justify-start text-xs lg:text-base mt-5 ">
                    <label class="font-semibold" for="jurusan">Topic:</label>
                    <input type="text" name="id" id="jurusan" required autocomplete="off" value="{{$d->id}}" spellcheck="false" class="mt-2 focus:outline-none py-1 px-2 rounded-sm border border-black bg-[#F5F7F8] text-gray-700">
                </div>
                @endforeach
            </div>


            <div class="content2 lg:basis-1/2 w-full mt-[7rem] mb-5 lg:mb-0 lg:mt-8 flex justify-center items-center gap-10">
                <div class="flex flex-col justify-center items-center gap-5 ">
                    <div class="flex flex-col">
                        <div class="lg:h-32 h-20 flex justify-center items-center text-xs lg:text-base">
                            <label for="file" class="group justify-center items-center flex rounded-sm h-full active:bg-gray-200 active:border-gray-200 cursor-pointer w-44 border-2 border-dashed border-blue-300 bg-[#F5F7F8]">
                                <i class="fa-solid fa-microphone-lines text-[#40679E] group-active:text-white text-3xl lg:text-6xl"></i>
                            </label>
                        </div>
                        <input type="file" name="audio" id="file" required class="file:hidden text-xs font-semibold mt-2 border-b border-blue-300 w-44 py-1">
                    </div>

                    <p class="descript bg-[#40679E] text-white p-5 rounded-md overflow-hidden overflow-y-scroll w-44 h-14 lg:h-44 text-xs"><span class="font-semibold text-lg">Description</span><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, earum!</p>
                </div>

                <div class="flex flex-col justify-center items-center gap-5">
                    <div class="flex flex-col">
                        <div class="lg:h-32 h-20 flex justify-center items-center text-xs lg:text-base">
                            <label for="file2" class="group justify-center items-center flex rounded-sm h-full active:bg-gray-200 active:border-gray-200 cursor-pointer w-44 border-2 border-dashed border-blue-300 bg-[#F5F7F8]">
                                <i class="fa-solid fa-cloud-arrow-up text-[#40679E] group-active:text-white text-3xl lg:text-6xl"></i>
                            </label>
                        </div>
                        <input type="file" name="file" id="file2" required class="file:hidden text-xs font-semibold mt-2 border-b border-blue-300 w-44 py-1">
                    </div>

                    <p class="descript bg-[#40679E] text-white p-5 rounded-md overflow-hidden overflow-y-scroll w-44 h-14 lg:h-44 text-xs"><span class="font-semibold text-lg">Description</span><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, earum!</p>
                </div>
            </div>
            <div class="absolute bottom-10 left-10">
                <input type="submit" value="submit" class="hover:bg-green-600 transition duration-200 cursor-pointer bg-green-800 text-white w-24 lg:h-10 h-8 lg:text-lg rounded-md font-semibold tracking-wide capitalize">
                {{-- <p class="text-xs font-semibold text-center lg:hidden">Jangan lupa mengisi form tugas di Tab ke-2, setelah itu kembalilah untuk melakukan submit!!</p> --}}
            </div>
        </form>
        <div class="absolute top-1 right-1" id="close">
            <button class="hover:bg-red-300 size-8 flex justify-center items-center rounded-full bg-black group">
                <i class="fa-solid fa-xmark group-hover:text-red-700 text-base lg:text-2xl text-white rotate-0 group-hover:-rotate-180 transition-all duration-300 ease-in-out"></i>
            </button>
        </div>
    </div>
    </div>

    <footer class="my-5">
        <p class="text-xs text-center">&copy; Copyright, <a href="https://www.lp3i.ac.id/" class="py-5"><span class="text-orange-500 font-bold">LP3I</span> Malang 2024</a></p>
    </footer>
    @include('elemen.script')
    <script>
        const open = document.getElementById('open');
        const modal = document.getElementById('modal');
        const close = document.getElementById('close');

        open.addEventListener('click', function(){
            modal.classList.add('active');
        });
        close.addEventListener('click', function(){
            modal.classList.remove('active');
        });

        const btn1 = document.querySelector('.btn1');
        const btn2 = document.querySelector('.btn2');
        const content1 = document.querySelector('.content1');
        const content2 = document.querySelector('.content2');


        btn1.addEventListener('click', function() {
            content1.style.right = '0';
            content2.style.right = '200rem';
            btn1.style.borderColor = '#ffcc00';
            btn1.style.color = '#ffcc00';
            btn2.style.borderColor = 'transparent';
            btn2.style.color = 'black';
        });
        btn2.addEventListener('click', function() {
            content2.style.right = '0';
            content1.style.right = '200rem';
            btn2.style.borderColor = '#ffcc00';
            btn2.style.color = '#ffcc00';
            btn1.style.borderColor = 'transparent';
            btn1.style.color = 'black';
        });
        // function open2() {
        //     content2.style.right = '0';
        //     content1.style.right = '200rem';
        // }
    </script>
</body>
</html>
