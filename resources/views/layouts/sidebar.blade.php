<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 shadow-md">
            <div class="p-6">
                <h1 class="text-white text-2xl font-semibold">My Dashboard</h1>
            </div>
            <nav class="mt-6">
                <!-- Sidebar Links -->
                <a href=""
                    class="block py-2.5 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded">
                    Dashboard
                </a>
                <a href="{{ route('profile.show') }}"
                    class="block py-2.5 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded">
                    Profile
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left py-2.5 px-4 text-gray-300 hover:bg-gray-700 hover:text-white rounded">
                        Logout
                    </button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-md p-4">
                <div class="flex justify-between items-center">
                    <h2 class="text-gray-800 text-xl font-semibold">Dashboard</h2>
                    <div class="flex items-center">
                        <span class="text-gray-600 mr-4">Welcome, {{ Auth::user()->name }}</span>
                        <img src="{{ Auth::user()->profile_photo_url ?? 'https://via.placeholder.com/40' }}"
                            alt="Profile Photo"
                            class="h-10 w-10 rounded-full border-2 border-gray-300">
                    </div>
                </div>
            </header>
            <!-- Page Content -->
            <main class="flex-1 bg-gray-50 p-6 overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>