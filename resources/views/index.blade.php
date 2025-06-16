<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #NIM::-webkit-inner-spin-button {
            display: none;
        }
    </style>
    @include('elemen.style')
    {{-- @vite('resources/css/app.css') --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"> --}}
    <title>English Conversation Website || LP3I Malang</title>
</head>
<body class="bg-fixed bg-cover" style="background-image: url(img/lp3i.jpg)">
    <main class="w-full h-screen bg-black bg-opacity-70 flex flex-col justify-center items-center">
        <div class="relative bg-white rounded-md shadow-lg shadow-black px-6 py-5 w-64 lg:w-96">
            <div class="flex">
                <div class="rounded-full p-1.5 mx-auto bg-gray-400">
                    <img src="/img/logo.png" class="h-16" alt="" srcset="">
                </div>
            </div>
            <h1 class="text-center text-3xl mt-10">Login</h1>
            <form action="/loginproses" method="POST" class="mt-14">
                @csrf
                <div class="relative w-full" >
                    <input autocomplete="off" required spellcheck="false" type="text" class="border-b-2 py-1 px-3 border-black w-full focus:outline-none text-sm" name="nama" id="nama">
                    <label for="nama" id="nameLabel" class="absolute top-0 left-1 transition-all duration-300 ease-in-out px-2 py-0">Nama</label>
                    <i  id="userName" class="fa-solid fa-user absolute right-3 top-0 bg-white p-1"></i>
                </div>

                <div class="relative w-full mt-10" id="userName">
                    <input autocomplete="off" required spellcheck="false" type="password" class="border-b-2 text-sm py-1 px-3 border-black w-full focus:outline-none" name="password" id="NIM">
                    <label for="NIM" id="NIMlabel" class="absolute top-0 left-1 transition-all duration-300 ease-in-out px-2 py-0">NIM</label>
                    <i id="pass" class="fa-solid fa-key absolute right-3 top-0 bg-white p-1"></i>
                </div>
                <br>
                <div class="flex mt-5">
                   <select name="role" id="" class="cursor-pointer rounded-sm border-2 border-double border-[#191919] focus:outline-none">
                        <option value="">Pilih...</option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="admin">Dosen</option>
                   </select>

                </div>

                <input type="submit" value="Login" class="bg-blue-950 text-white w-full py-2 rounded-full cursor-pointer mt-10 font-bold hover:bg-blue-600 transition-all duration-300 ease-in-out">
            </form>
            <button id="show" class="absolute bottom-20 right-10 text-gray-800 text-sm font-semibold">Lihat Password</button>
        </div>
    </main>

<script>
    // nama
    const nameLabel = document.getElementById('nameLabel');
    const nama = document.getElementById('nama');
    const icon = document.querySelector('#userName');
    nama.addEventListener('focusin', function(){
        nameLabel.style.top = '-20px';
        nameLabel.style.fontSize = '13px';
        nama.style.borderColor = 'blue';
        nameLabel.style.color = 'blue';
        icon.style.color = 'blue';
    });

    nama.addEventListener('focusout', function(){
         if (!nama.value) {
             nameLabel.style.fontSize = '16px';
             nameLabel.style.top = '0';
             nama.style.borderColor = 'black';
             nameLabel.style.color = 'black';
             icon.style.color = 'black';
         }else{
             nameLabel.style.fontSize = '13px';
             nameLabel.style.top = '-20px';
             nama.style.borderColor = 'black';
             nameLabel.style.color = 'black';
             icon.style.color = 'black';
         }
    });



    // NIM
    const NIMlabel = document.getElementById('NIMlabel');
    var NIM = document.getElementById('NIM')
    const icon2 = document.querySelector('#pass');
    const show = document.querySelector('#show');
    const showHide = document.getElementById('showHide');
    var x;

    show.addEventListener('click', function(){
        if ( x == 1) {
            NIM.type = 'password';
            show.innerHTML = 'Lihat Password';
            x = 0;
        } else {
            NIM.type = 'text';
            show.innerHTML = 'Sembunyikan';
            x = 1;
        }
    });
    NIM.addEventListener('focusin', function(){
        NIMlabel.style.top = '-20px';
        NIMlabel.style.fontSize = '13px';
        NIM.style.borderColor = 'blue';
        NIMlabel.style.color = 'blue';
        icon2.style.color = 'blue';
    });
    NIM.addEventListener('focusout', function(){
        if (!NIM.value) {
            // alert('iya');
            NIMlabel.style.top = '0';
            NIMlabel.style.fontSize = '16px';
            NIM.style.borderColor = 'black';
            NIMlabel.style.color = 'black';
            icon2.style.color = 'black';
        }else{
            NIMlabel.style.top = '-20px';
            NIMlabel.style.fontSize = '13px';
            NIM.style.borderColor = 'black';
            NIMlabel.style.color = 'black';
            icon2.style.color = 'black';
        }
    });

</script>
</body>
</html>
