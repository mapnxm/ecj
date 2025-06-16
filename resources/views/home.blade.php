<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    @include('elemen.style')
    <style>
        .subTopic1::-webkit-scrollbar {
            display: none;
        }

        .subTopic1.active {
            top: 0;
        }
        .subTopic2::-webkit-scrollbar {
            display: none;
        }

        .subTopic2.active {
            top: 0;
        }
        .subTopic3::-webkit-scrollbar {
            display: none;
        }

        .subTopic3.active {
            top: 0;
        }
        .subTopic4::-webkit-scrollbar {
            display: none;
        }

        .subTopic4.active {
            top: 0;
        }
        .text.active {
            display: none;
        }
        .profil.active {
            right: 1.25rem;
        }
        .descript::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="select-none bg-[#EFECEC]">
    @include('elemen.header')
    {{-- <header class="fixed top-0 left-0 w-full py-3 px-5 flex justify-between items-center shadow-md bg-white shadow-gray-600 z-50">
        <div class="rounded-full px-1 lg:px-2 py-[0.3rem] lg:py-[0.45rem] lg:ml-12 lg:w-[4.5rem] bg-gray-400">
            <img src="/img/logo.png" class="h-10 lg:h-14" alt="" srcset="">
        </div>

        <button class="profil-btn px-2 lg:px-2.5 py-[0.3rem] lg:py-[0.45rem] bg-gray-300 rounded-full mr-2">
            <i class="fa-solid fa-user text-gray-700 text-xl lg:text-2xl"></i>
        </button>
        <div class="profil absolute bg-white top-28 -right-[200rem] transition-all duration-500 ease-in-out shadow-md shadow-black p-5 min-w-72 max-w-80">
            <div class="flex m-1 gap-5">
                <div class="hidden lg:block">
                    <div class="px-2.5 py-[0.45rem] bg-gray-300 rounded-full mr-2">
                        <i class="fa-solid fa-user text-gray-700 text-2xl"></i>
                    </div>
                </div>
                <div>
                    <p>Nama :</p>
                    <p>Nis :</p>
                    <p>Jurusan :</p>
                </div>
            </div>
            <button class="bg-red-600 w-full rounded-md py-2 text-white mt-5">Log out</button>
        </div>
    </header> --}}

    <main class="w-full flex mb-5 justify-center items-center ">
        <div class="container mt-36 flex flex-col-reverse md:flex-col lg:flex-row justify-center items-start w-[90%] gap-5">
            <div id="leftMenu" class="lg:w-44 w-full basis-[18%] xl:h-[41rem]">
                <div class="rounded-md p-5 h-72 xl:h-96 bg-[#F5F7F8] shadow-md shadow-[#0f0f0f]">
                    <h1 class="font-bold text-lg pb-3">Description</h1>
                    <div class="descript overflow-hidden overflow-y-scroll h-[90%]">
                        <p class="text-sm">
                        halaman ini adalah halaman utama untuk memberikan informasi tugas dan pengumpulan tugas
                        </p>
                    </div>
                </div>

                <a href="/hasil" class="group">
                    <button class="bg-blue-400 w-full h-44 xl:h-[16rem] mt-5 rounded-md text-white group-hover:scale-95 transition ease-in-out">
                        <i class="fa-regular fa-file text-5xl mb-5"></i>
                        <p class="text-center capitalize">hasil pengumpulan <br>tugas</p>
                    </button>
                </a>
            </div>

            <div class="rightMenu mt-10 lg:mt-0 lg:flex lg:flex-col shadow-md shadow-[#0f0f0f] justify-center items-center bg-[#F5F7F8] rounded-md basis-[82%] p-5 gap-5 lg:h-[31rem] xl:h-[41rem]">
                <div class="topCover w-full lg:flex gap-5 h-[50%]">
                    <button class="cover1 group h-44 mt-5 lg:mt-0 lg:h-full w-full bg-cover bg-center basis-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 bg-blend-overlay text-center cursor-pointer rounded-sm relative overflow-hidden transition-all duration-300 ease-in-out" style="background-image: url(/img/s1.jpg)">
                        <p class="text text-white text-3xl font-bold group-hover:text-[2.5rem] group-hover:tracking-wide transition-all duration-500 ease-in-out">Semester 1</p>
                        <div class="subTopic1 flex flex-col w-full p-2 absolute -top-[70rem] left-0 h-full gap-2.5 overflow-hidden overflow-y-scroll transition-all duration-500 ease-in-out">
                            <a href="/upload/1.1" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 1</a>
                            <a href="/upload/1.2" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 2</a>
                            <a href="/upload/1.3" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 3</a>
                            <a href="/upload/1.4" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 4</a>
                            <a href="/upload/1.5" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 5</a>
                            <a href="/upload/1.6" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 6</a>
                            <a href="/upload/1.7" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 7</a>
                        </div>
                    </button>
                    <button class="cover2 group h-44 mt-5 lg:mt-0 lg:h-full w-full bg-cover bg-center basis-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 bg-blend-overlay text-center cursor-pointer rounded-sm relative overflow-hidden transition-all duration-300 ease-in-out" style="background-image: url(/img/s2.jpg)">
                        <p class="text2 text-white text-3xl font-bold group-hover:text-[2.5rem] group-hover:tracking-wide transition-all duration-500 ease-in-out">Semester 2</p>
                        <div class="subTopic2 flex flex-col w-full p-2 absolute -top-[70rem] left-0 h-full gap-2.5 overflow-hidden overflow-y-scroll transition-all duration-500 ease-in-out">
                            <a href="/upload/2.1" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 1</a>
                            <a href="/upload/2.2" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 2</a>
                            <a href="/upload/2.3" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 3</a>
                            <a href="/upload/2.4" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 4</a>
                            <a href="/upload/2.5" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 5</a>
                            <a href="/upload/2.6" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 6</a>
                            <a href="/upload/2.7" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 7</a>
                        </div>
                    </button>
                </div>

                <div class="bottomCover w-full lg:flex gap-5 h-[50%]">
                    <button class="cover3 group h-44 mt-5 lg:mt-0 lg:h-full w-full bg-cover bg-center basis-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 bg-blend-overlay text-center cursor-pointer rounded-sm relative overflow-hidden transition-all duration-300 ease-in-out" style="background-image: url(/img/s3.png)">
                        <p class="text3 text-white text-3xl font-bold group-hover:text-[2.5rem] group-hover:tracking-wide transition-all duration-500 ease-in-out">Semester 3</p>
                        <div class="subTopic3 flex flex-col w-full p-2 absolute -top-[70rem] left-0 h-full gap-2.5 overflow-hidden overflow-y-scroll transition-all duration-500 ease-in-out">
                            <a href="/upload/3.1" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 1</a>
                            <a href="/upload/3.2" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 2</a>
                            <a href="/upload/3.3" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 3</a>
                            <a href="/upload/3.4" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 4</a>
                            <a href="/upload/3.5" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 5</a>
                            <a href="/upload/3.6" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 6</a>
                            <a href="/upload/3.7" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 7</a>
                        </div>
                    </button>
                    <button class="cover4 group h-44 mt-5 lg:mt-0 lg:h-full w-full bg-cover bg-center basis-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 bg-blend-overlay text-center cursor-pointer rounded-sm relative overflow-hidden transition-all duration-300 ease-in-out" style="background-image: url(/img/s4.jpg)" >
                        <p class="text4 text-white text-3xl font-bold group-hover:text-[2.5rem] group-hover:tracking-wide transition-all duration-500 ease-in-out">Semester 4</p>
                        <div class="subTopic4 flex flex-col w-full p-2 absolute -top-[70rem] left-0 h-full gap-2.5 overflow-hidden overflow-y-scroll transition-all duration-500 ease-in-out">
                            <a href="/upload/4.1" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 1</a>
                            <a href="/upload/4.2" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 2</a>
                            <a href="/upload/4.3" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 3</a>
                            <a href="/upload/4.4" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 4</a>
                            <a href="/upload/4.5" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 5</a>
                            <a href="/upload/4.6" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 6</a>
                            <a href="/upload/4.7" class="bg-white rounded-sm text-sm p-3 hover:bg-black hover:text-white transition-all duration-300 ease-in-out">Topic 7</a>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <footer class="my-5">
        <p class="text-xs text-center">&copy; Copyright, <a href="https://www.lp3i.ac.id/" class="py-5"><span class="text-orange-500 font-bold">LP3I</span> Malang 2024</a></p>
    </footer>

    @include('elemen.script')
    <script>

        const subTopic1 = document.querySelector('.subTopic1');
        const cover1 = document.querySelector('.cover1');
        var text = document.querySelector('.text');


        cover1.addEventListener('click', function(){
            subTopic1.classList.toggle('active');
            text.classList.toggle('active');
        });
        document.addEventListener('click', function(e) {
            if (!cover1.contains(e.target) && !subTopic1.contains(e.target)) {
                subTopic1.classList.remove("active");
                text.classList.remove('active');
            }
        });


        const subTopic2 = document.querySelector('.subTopic2');
        const cover2 = document.querySelector('.cover2');
        var text2 = document.querySelector('.text2');

        cover2.addEventListener('click', function(){
            subTopic2.classList.toggle('active');
            text2.style.display = 'none';
        });
        document.addEventListener('click', function(e) {
            if (!cover2.contains(e.target) && !subTopic2.contains(e.target)) {
                subTopic2.classList.remove("active");
                text2.style.display = 'inline';
            }
        });


        const subTopic3 = document.querySelector('.subTopic3');
        const cover3 = document.querySelector('.cover3');
        var text3 = document.querySelector('.text3');

        cover3.addEventListener('click', function(){
            subTopic3.classList.toggle('active');
            text3.style.display = 'none';

        });
        document.addEventListener('click', function(e) {
            if (!cover3.contains(e.target) && !subTopic3.contains(e.target)) {
                subTopic3.classList.remove("active");
                text3.style.display = 'inline';
            }
        });


        const subTopic4 = document.querySelector('.subTopic4');
        const cover4 = document.querySelector('.cover4');
        var text4 = document.querySelector('.text4');

        cover4.addEventListener('click', function(){
            subTopic4.classList.toggle('active');
            text4.style.display = 'none';

        });
        document.addEventListener('click', function(e) {
            if (!cover4.contains(e.target) && !subTopic4.contains(e.target)) {
                subTopic4.classList.remove("active");
                text4.style.display = 'inline';
            }
        });

        // const profil = document.querySelector('.profil');
        // const profilBtn = document.querySelector('.profil-btn');
        // profilBtn.addEventListener('click', function(){
        //     profil.classList.toggle('active');
        // });
        // document.addEventListener('click', function(e) {
        //     if (!profilBtn.contains(e.target) && !profil.contains(e.target)) {
        //         profil.classList.remove('active');
        //     }
        // });
    </script>
</body>
</html>
