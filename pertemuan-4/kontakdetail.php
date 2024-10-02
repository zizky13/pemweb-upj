<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex flex-col bg-zinc-200 justify-center items-center">
    <div class="flex flex-col px-3 justify-center items-center">
        <div class="flex flex-row justify-center px-5">
            <h1 class='font-serif text-xl'>Terima kasih sudah menghubungi kami!</h1>
        </div>

        <div class="flex flex-col bg-zinc-400 rounded-lg max-w-fit p-5 mt-3">
            <div class="flex flex-row bg-orange-800 justify-center rounded-xl">
                <p class="text-slate-200 font-serif">Profil</p>
            </div>

            <div class="pt-5">
                <ul class="font-serif">
                <?php
                    $nama = $_POST["nama"];
                    $email = $_POST["email"];
                    $telp = $_POST["telepon"];
                    $alamat = $_POST["alamat"];
                    echo "
                <li class='font-serif'>Nama: $nama</li>
                <li class='font-serif'>Email: $email</li>
                <li class='font-serif'>Telepon: $telp</li>
                <li class='font-serif'>Alamat: $alamat</li>
                ";
                    ?>
                </ul>
            </div>
            

        </div>

    </div>

</body>

</html>