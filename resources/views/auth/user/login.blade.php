<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Login</title>
  </head>
  <body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <!-- Layout Container -->
    <div class="flex flex-col md:flex-row items-center justify-between w-full max-w-5xl px-6 md:px-12 gap-x-32">
      <!-- Image Section -->
      <div class="hidden md:flex md:w w-full md:w-1/2 pl-6">
        <img src="{{ asset('storage/asset/image_login_and_register.png') }}" alt="Illustration" class="w-full h-full object-contain" />
      </div>

      <!-- Form Section -->
      <div class="w-full md:w-1/2 max-w-sm space-y-6">
        <!-- Welcome Text -->
        <div class="text-center">
          <h2 class="text-2xl font-bold text-gray-800">Selamat Datang!</h2>
          <p class="text-gray-600 mt-2 text-sm">Masuk sekarang untuk verifikasi akun Anda</p>
        </div>

        <!-- Login Form -->
        <form action="#" method="POST" class="space-y-4">
          <!-- Email Field -->
          <div>
            <input type="email" id="email" name="email" class="w-full p-2 md:p-3 mt-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-xs placeholder:text-xs" placeholder="Email" />
          </div>

          <!-- Password Field -->
          <div>
            <input type="password" id="password" name="password" class="w-full p-2 md:p-3 mt-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-xs placeholder:text-xs" placeholder="Password" />
          </div>

          <!-- Login Button -->
          <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300 text-xs" style="background-color: #00b0f0">Masuk</button>

          <!-- Or Divider -->
          <div class="flex items-center justify-center space-x-4">
            <hr class="w-1/3 border-gray-300" />
            <span class="text-gray-500 text-xs">Atau</span>
            <hr class="w-1/3 border-gray-300" />
          </div>

          <!-- Google Login Button -->
          <button type="button" class="flex items-center justify-center w-full border border-gray-300 py-2 rounded-lg hover:bg-gray-100 transition duration-300 text-xs font-medium">
            <img src="https://www.gstatic.com/images/branding/product/1x/gsa_512dp.png" alt="Google Logo" class="h-5 w-5 mr-2" />
            Masuk Dengan Akun Google
          </button>
        </form>

        <!-- Register Link -->
        <p class="text-gray-600 text-center text-xs">
          Perlu akun?
          <a href="{{ route('user.register') }}" class="text-blue-500 font-medium hover:underline">Klik disini untuk mendaftar</a>
        </p>
      </div>
    </div>
  </body>
</html>