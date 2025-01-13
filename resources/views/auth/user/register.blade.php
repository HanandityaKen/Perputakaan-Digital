<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <meta charset="utf-8">
    @vite('resources/css/app.css')
    <title>Register</title>
  </head>
  <body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <!-- Main Container -->
    <div class="flex flex-col md:flex-row max-w-4xl w-full items-center justify-between gap-x-24">
      <!-- Image Section -->
      <div class="hidden md:flex md:w w-full md:w-1/2 pl-6">
        <!-- Added more padding-left -->
        <img src="{{ asset('storage/asset/image_login_and_register.png') }}" alt="Illustration" class="w-full h-full object-contain" />
      </div>

      <!-- Form Section --> 
      <div class="w-full md:w-1/2 p-4 sm:p-6 md:p-8 space-y-4">
        <div id="register-form" class="space-y-4">
          <div class="text-center">
            <h2 class="text-xl md:text-2xl font-bold text-gray-800">Selamat Datang!</h2>
            <p class="text-xs md:text-sm text-gray-500 mt-1">Daftar sekarang untuk buat akun Anda</p>
          </div>

          <form action="{{ route('') }}" method="POST" class="space-y-4">
            <div>
              <input type="email" id="register-email" name="email" class="w-full p-2 md:p-3 mt-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-xs placeholder:text-xs" placeholder="Email" />
            </div>
            <div>
              <input
                type="password"
                id="register-password"
                name="password"
                class="w-full p-2 md:p-3 mt-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-xs placeholder:text-xs"
                placeholder="Password"
              />
            </div>
            <button type="submit" class="w-full text-white py-2 md:py-2.5 rounded-xl hover:opacity-90 transition duration-300 text-xs" style="background-color: #00b0f0">Daftar</button>
          </form>

          <p class="text-gray-600 text-center text-xs md:text-sm">
            Sudah punya akun?
            <a href="{{ route('user.login') }}" class="text-blue-500">Masuk di sini</a>
          </p>
        </div>
      </div>
    </div>
  </body>
</html>