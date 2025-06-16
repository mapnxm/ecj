<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    @include('elemen.style')
</head>
<body class="bg-[#EFECEC]">
    <main class="w-full h-screen justify-center items-center flex">
        <div class="bg-[#F5F7F8] p-5 rounded-md shadow-sm shadow-[#0f0f0f] w-96">
            <h1 class="text-center text-2xl font-bold">Edit Mahasiswa</h1>
            <form action="/{{$siswa->id}}" method="POST" class="">
                @method('put')
                @csrf
                <div class="mt-5">
                    <label class="font-semibold" for="email">Alamat E-mail</label>
                    <input autocomplete="off" value="{{$siswa->email}}" class="focus:outline-none border border-black w-full px-3 py-1 rounded-md bg-[#F5F7F8]" name="email" type="text" id="email">
                </div>
                <div class="mt-5">
                    <label class="font-semibold" for="nama">Nama:</label>
                    <input autocomplete="off" value="{{$siswa->nama}}" class="focus:outline-none border border-black w-full px-3 py-1 rounded-md bg-[#F5F7F8]" name="nama" type="text" id="nama">
                </div>

                <div class="mt-5">
                    <label class="font-semibold" for="nim">NIM:</label>
                    <input autocomplete="off" value="{{$siswa->nim}}" class="focus:outline-none border border-black w-full px-3 py-1 rounded-md bg-[#F5F7F8]" name="nim" type="number" id="nim">
                </div>

                <div class="mt-5">
                    <label class="font-semibold" for="jurusan">Jurusan</label>
                    <input autocomplete="off" value="{{$siswa->jurusan}}" class="focus:outline-none border border-black w-full px-3 py-1 rounded-md bg-[#F5F7F8]" name="jurusan" type="text" id="jurusan">
                </div>
                <div class="hidden">
                    <select name="role" id="">
                         <option value="{{$siswa->role}}">{{$siswa->role}}</option>
                         <option value="mahasiswa">mahasiswa</option>
                         <option value="admin">dosen</option>
                    </select>
                 </div>


                <input class="bg-green-700 text-white mt-4 py-1 px-2 rounded-lg cursor-pointer  hover:bg-green-400 hover:text-green-800 transition-all duration-300 ease-in-out font-semibold" type="submit" value="Submit">
                <button class="bg-red-600 text-white w-16 h-8 rounded-md font-semibold tracking-wide hover:bg-red-400 hover:text-red-800 transition-all duration-300 ease-in-out"><a href="/list-mahasiswa">Back</a></button>
            </form>
        </div>
    </main>
</body>
</html>
