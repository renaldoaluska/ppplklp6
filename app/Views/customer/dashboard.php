<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Customer</title>
  <link href="<?= base_url('assets/css/tailwind.css') ?>" rel="stylesheet">
</head>
<body class="bg-gray-50 pb-20">
  <div class="p-4">
    <!-- banner -->
    <div class="bg-blue-100 h-32 rounded-lg flex items-center justify-center mb-4">
      <div class="text-blue-400">[ Gambar Banner ]</div>
    </div>

    <!-- saldo -->
    <div class="flex items-center justify-between mb-6">
      <div>
        <p class="text-gray-600 text-sm">Saldo</p>
        <p class="text-lg font-semibold text-gray-900">Rp10.000</p>
      </div>
      <button class="px-4 py-2 border border-blue-500 text-blue-500 rounded-md text-sm hover:bg-blue-100">
        Isi Saldo
      </button>
    </div>

    <!-- laundry terdekat -->
    <div class="flex justify-between items-center mb-2">
      <p class="font-semibold text-gray-800">Laundry Terdekat</p>
      <a href="#" class="text-sm text-blue-500">See more</a>
    </div>
    <div class="flex space-x-3 overflow-x-auto pb-2">
      <div class="bg-white rounded-lg p-3 w-40 shadow-sm">
        <div class="bg-blue-100 h-20 rounded mb-2 flex items-center justify-center">[Img]</div>
        <p class="text-sm font-medium">Laundry ABC Keputih</p>
        <p class="text-xs text-gray-500">📍300m</p>
      </div>
      <div class="bg-white rounded-lg p-3 w-40 shadow-sm">
        <div class="bg-blue-100 h-20 rounded mb-2 flex items-center justify-center">[Img]</div>
        <p class="text-sm font-medium">YUK Laundry Mulyosari</p>
        <p class="text-xs text-gray-500">📍450m</p>
      </div>
    </div>

    <!-- penilaian terbaik -->
    <div class="mt-6 flex justify-between items-center mb-2">
      <p class="font-semibold text-gray-800">Penilaian Terbaik</p>
      <a href="#" class="text-sm text-blue-500">See more</a>
    </div>
    <div class="bg-blue-100 h-24 rounded-lg flex items-center justify-center">[ carousel atau list ]</div>
  </div>

  <!-- navbar bawah (optional) -->
  <div class="fixed bottom-0 w-full bg-white border-t p-3 text-center">
    <a href="#" class="text-blue-500 font-semibold">🏠 Home</a>
  </div>
</body>
</html>
