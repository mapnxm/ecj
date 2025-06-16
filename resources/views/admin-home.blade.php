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
        #nilai::-webkit-inner-spin-button,
        #nilai::-webkit-outer-spin-button {
            display: none;
            -webkit-appearance: none;
        }

        #nilai {
            -moz-appearance: textfield;
        }

        table,.btn {
            box-shadow: 1px 1px 5px #1F1D36;
        }
    </style>
    @livewireStyles
</head>
<body class="bg-[#F6F6F6]">
    @include('elemen.header')

    <main class="w-full min-h-screen flex flex-col justify-center items-center">
        <h1 id="judul" class="text-3xl font-semibold mx-auto text-[#03001C] mt-32">Daftar Tugas Mahasiswa</h1>
        <div class="flex flex-col justify-center items-start mt-10">
            {{-- <section class=" lg:w-auto w-full flex justify-center items-center flex-col gap-5">


                <a href="/list-tugas" class="bg-blue-400 flex flex-col justify-center items-center lg:w-full lg:h-1/2 w-full h-36 gap-5  rounded-md ">
                    <button class="bg-blue-400 flex flex-col justify-center items-center w-full gap-5  rounded-md ">
                        <i class="fa-solid fa-clipboard-list text-white text-3xl lg:text-5xl"></i>
                        <p class="text-white font-semibold">Daftar Tugas</p>
                    </button>
                </a>
            </section> --}}
            <section class="h-auto flex flex-col justify-center ">
                @livewire('search')
            </section>
        </div>
    </main>

    @include('elemen.footer')
    @include('elemen.script')
    <script>
        const nilai = document.getElementById('nilai')

        nilai.addEventListener('focus', function (){
            nilai.classList.add('border');
        });

        nilai.addEventListener('blur', function () {
            if (!nilai) {
                nilai.classList.add('border');
            }else{
                nilai.classList.remove('border');
            }
        });
    </script>
    @livewireScripts
</body>
</html>
