<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-200 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-md text-center">

        <!-- Avatar -->
        <div class="mb-4">
            <div class="w-24 h-24 mx-auto bg-blue-500 text-white flex items-center justify-center rounded-full text-3xl font-bold shadow-lg">
                FA
            </div>
        </div>

        <!-- Judul -->
        <h1 class="text-2xl font-bold text-gray-800 mb-2">
            Profil Mahasiswa
        </h1>

        <!-- Data -->
        <p class="text-gray-600 text-lg">
            <span class="font-semibold">Nama:</span><br>
            Ferdinan Ardiyanto
        </p>

        <p class="text-gray-600 text-lg mt-2">
            <span class="font-semibold">NIM:</span><br>
            25.12.3723
        </p>

        <hr class="my-4">

        <!-- Navigasi -->
        <div class="flex justify-center gap-2 flex-wrap">

            <a href="/" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg">
                Home
            </a>

            <a href="/katalog" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">
                Katalog
            </a>

            <a href="/bantuan" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg">
                Bantuan
            </a>

        </div>

    </div>

</body>
</html>