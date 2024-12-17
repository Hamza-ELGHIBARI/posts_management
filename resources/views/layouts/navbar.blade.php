<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white border-b border-gray-200 shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Left Side -->
                <div class="flex-shrink-0">
                    <a href="" class="text-lg font-bold text-blue-600">
                        Post Share
                    </a>
                </div>

                <!-- Right Side (Profile Dropdown) -->
                @auth
                <div class="relative">
                    <!-- Profile Photo Button -->
                    <button
                        id="profileButton"
                        class="flex items-center focus:outline-none"
                        onclick="toggleDropdown()">
                        <img
                            src="{{ Auth::user()->profile_photo_url ?? 'https://via.placeholder.com/40' }}"
                            alt="Profile Photo"
                            class="h-10 w-10 rounded-full border-2 border-gray-300" />
                    </button>

                    <!-- Dropdown Menu -->
                    <div
                        id="profileDropdown"
                        class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20">
                        <a href="{{ route('profile.show') }}"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                            Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-100">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
                @endauth
                @guest
                <div>
                    <a href="{{ route('login.form') }}" class="text-gray-700 hover:text-blue-600 mx-2">Login</a>
                    <a href="{{ route('register.form') }}" class="text-gray-700 hover:text-blue-600 mx-2">Register</a>
                </div>
                @endguest
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <main class="flex-1 justify-center bg-gray-50 p-6 overflow-y-auto">
            @yield('content')
    </main>
    <!-- Simple Dropdown Script -->
    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('profileDropdown');
            dropdown.classList.toggle('hidden');
        }
    </script>
</body>

</html>