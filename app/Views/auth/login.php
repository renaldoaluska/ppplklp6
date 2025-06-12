<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DyWash - Login</title>
  <link href="<?= base_url('assets/css/tailwind.css') ?>" rel="stylesheet">
</head>
<body class="bg-blue-50 flex items-center justify-center min-h-screen">
  <div class="text-center w-full max-w-xs mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-6">
      Do Your Wash <br />
      With <span class="text-black">DyWash!</span>
    </h1>

    <div class="w-24 h-24 mx-auto mb-6 bg-blue-100 rounded flex items-center justify-center">
      <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M3 16.5V5a2 2 0 012-2h14a2 2 0 012 2v11.5M3 16.5l5.5-5.5 4 4 5.5-5.5M3 16.5V19a2 2 0 002 2h14a2 2 0 002-2v-2.5" />
      </svg>
    </div>

    <!-- Login form (sementara pilih role manual) -->
    <form action="<?= base_url('/login/process') ?>" method="post" class="space-y-4">
      <input type="text" name="username" placeholder="Username" required class="w-full px-4 py-2 border rounded" />
      <select name="role" class="w-full px-4 py-2 border rounded" required>
        <option value="">-- Pilih Role --</option>
        <option value="customer">Customer</option>
        <option value="owner">Pemilik Laundry</option>
        <option value="admin">Admin</option>
      </select>
      <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
        Login
      </button>
    </form>
  </div>
</body>
</html>
