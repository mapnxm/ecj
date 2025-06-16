<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    @include('elemen.style')
    @livewireStyles
    <style>
        .scroller::-webkit-scrollbar {
            width: 0;
        }
    </style>
</head>
<body class="bg-[#EFECEC]">
    @include('elemen.header')

    <main class="w-full justify-center items-center flex">
        <div class="hero w-[90%] lg:mt-32 mt-24 flex gap-5 flex-col justify-center items-center">
            <div class="w-full flex justify-center items-center gap-5">
                <section class="profil w-[60%] h-96 flex justify-center items-center gap-14 bg-[#F5F7F8] shadow-sm shadow-[#0f0f0f] p-5 rounded-md">
                    <img src="/img/user.jpeg" alt="" class="w-36 h-auto rounded-full" srcset="">
                    <div class="text-sm flex flex-col justify-center items-end gap-5">
                            <div class="flex flex-col w-[26rem]">
                                <label class="font-semibold" for="name">Nama :</label>
                                <input class="border border-black py-1 px-2 rounded-sm bg-gray-300 text-gray-700" type="text" disabled value="{{Auth::user()->nama}}" name="" id="name">
                            </div>
                            <div class="flex flex-col w-[26rem]">
                                <label class="font-semibold" for="name">NIM :</label>
                                <input class="border border-black py-1 px-2 rounded-sm bg-gray-300 text-gray-700" type="number" disabled value="{{Auth::user()->nim}}" name="" id="name">
                            </div>
                            <div class="flex flex-col w-[26rem]">
                                <label class="font-semibold" for="name">Jurusan :</label>
                                <input class="border border-black py-1 px-2 rounded-sm bg-gray-300 text-gray-700" type="text" disabled value="{{Auth::user()->jurusan}}" name="" id="name">
                            </div>
                            <button class="bg-red-600 text-white w-16 h-8 rounded-md font-semibold tracking-wide hover:bg-red-400 hover:text-red-800 transition-all duration-300 ease-in-out"><a href="/home">Back</a></button>
                    </div>
                </section>

                <article class="w-[30%] h-96 bg-[#F5F7F8] rounded-md overflow-hidden shadow-sm shadow-[#0f0f0f]">
                    <h1 class="mb-6 text-xl font-bold p-4 bg-blue-500 text-[#F5F7F8]">Description</h1>
                    <p class="text-sm text-gray-700 px-5 py-4">
                    Halaman ini menyajikan hasil pengumpulan tugas untuk berbagai mata pelajaran atau proyek. Pengguna dapat melihat daftar tugas yang telah dikumpulkan, termasuk informasi tentang status penyelesaian, tanggal pengumpulan, dan jika tersedia, penilaian atau feedback dari pengajar. Halaman ini membantu memperjelas proses pengumpulan tugas dan memfasilitasi komunikasi antara pengajar dan siswa atau peserta.</p>
                </article>
            </div>
            @livewire('hasil-tugas')

        </div>
    </main>

    @include('elemen.footer')
    @include('elemen.script')
    @livewireScripts
    <script>
        const search = document.getElementById('search');
        const label = document.getElementById('labelSearch');

        search.addEventListener('focusin', function(){
                label.style.display = 'none';
        });
        search.addEventListener('focusout', function(){
            if (!search.value) {
                label.style.display = 'inline';
            }else{
                label.style.display = 'none';
            }
        });
    </script>

</body>
</html>
