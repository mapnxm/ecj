    <header class="fixed top-0 left-0 w-full py-3 px-5 flex justify-between items-center shadow-md bg-[#F5F7F8] shadow-gray-600 z-50">   
    <div class="rounded-full size-16 justify-center items-center flex lg:ml-12 lg:size-[4.2rem] bg-gray-400">
        <img src="/img/logo.png" class="h-10 lg:h-14" alt="" srcset="">
    </div>

    <button id="profil-btn" class="size-12 flex justify-center items-center bg-blue-100 rounded-full mr-2">
        <i class="fa-solid fa-user text-sky-500 text-xl lg:text-2xl"></i>
    </button>
    <div id="profil" class=" absolute bg-white top-20 -right-[200rem] transition-all duration-500 ease-in-out shadow-md shadow-black p-5 min-w-64 lg:w-80 rounded-md">
        <div class="flex m-1 gap-5">
            <div class="hidden lg:block">
                <div class="size-16 bg-gray-300 rounded-full mr-2 flex justify-center items-center">
                    <img src="img/user.jpeg" alt="" class="w-full h-full">
                </div>
            </div>
            <div>
                <p>Nama : {{Auth::user()->nama}}</p>
                <p>NIM : {{Auth::user()->nim}}</p>
                <p>Jurusan : {{Auth::user()->jurusan}}</p>
            </div>
        </div>
        <a href="/logout"><button class="bg-red-500 w-full rounded-md py-2 text-white mt-5 transition-all duration-200 ease-in-out hover:bg-red-700">Log out</button></a>
    </div>
</header>