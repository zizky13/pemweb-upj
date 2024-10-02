<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontak2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body class="min-h-screen flex flex-col">
   <header class="d-flex justify-content-start px-3 py-3 bg-warning">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a href="./index.php" class="nav-link active" aria-current="page">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-black fw-bold">About</a>
        </li>
        <li class="nav-item">
          <a href="./kontak.php" class="nav-link text-black fw-bold">Contact</a>
        </li>
      </ul>
    </header>

    <div class="flex flex-col h-screen items-center justify-center">
      <form class="max-w-sm mx-auto w-full" action="kontakdetail.php" method="POST">
        <div class="mb-3">
          <label
            for="email"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"
            >Email:</label
          >
          <input
            type="email"
            name="email"
            id="email"
            class="shadow-sm bg-sky-100 border border-sky-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="Masukkan email anda"
            required
          />
        </div>

        <div class="mb-3">
          <label
            for="nama"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"
            >Nama:</label
          >
          <input
            type="text"
            id="nama"
            name="nama"
            class="shadow-sm bg-sky-100 border border-sky-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="Masukkan nama anda"
            required
          />
        </div>

        <div class="mb-3">
          <label
            for="telp"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"
            >No. Telepone:</label
          >
          <input
            type="tel"
            id="telepon"
            name="telepon"
            class="shadow-sm bg-sky-100 border border-sky-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="Masukan nomor telepon"
            required
          />
        </div>
        
        <div class="mb-5">
            <label
            for="alamat"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black"
            >Alamat:</label
          >
          <input
            type="text"
            id="alamat"
            name="alamat"
            class="shadow-sm bg-sky-100 border border-sky-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="Masukan alamat Anda"
            required
          />
        </div>

        

        <button
          type="reset"
          class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
        >
          Hapus
        </button>
        <input
          type="submit"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
        </input>
      </form>
    </div>

    <footer
      class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top bg-warning"
    >
      <div class="col-md-4 d-flex align-items-center">
        <h3>Link Rekomendasi</h3>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3">
          <a class="text-body-secondary" href="https://www.google.com"
            >GOOGLE</a
          >
        </li>
        <li class="ms-3">
          <a class="text-body-secondary" href="https://upj.ac.id">UPJ</a>
        </li>
      </ul>
    </footer>
  </body>
</html>
