@extends('layouts.navbar')
@section('content')
<!-- Container principal -->
<div class="max-w-3xl mx-auto mt-10 space-y-6">
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif
    @foreach($posts as $post)
    <!-- Un seul Post -->
    <div class="bg-white p-4 rounded-lg shadow-md">
        <!-- Header du Post -->
        <div class="flex items-center mb-4">
            <!-- <img src="https://via.placeholder.com/50" alt="Profile picture"
                    class="w-12 h-12 rounded-full object-cover"> -->
            <div class="ml-3">
                <!-- <h3 class="text-lg font-semibold">John Doe</h3> -->
                <p class="text-sm text-gray-500">2 hours ago</p>
            </div>
        </div>

        <!-- Contenu du Post -->
        <h2 class="text-xl font-bold mb-2">My Amazing Trip to Paris</h2>
        <p class="text-gray-700 mb-4">
            I just got back from the most incredible trip to Paris! The Eiffel Tower was breathtaking, and the food was delicious. Here's a photo I took while enjoying the beautiful views.
        </p>

        <!-- Image dans le Post -->
        <!-- <img src="https://via.placeholder.com/600x300" alt="Post image"
                class="w-full rounded-lg"> -->

        <!-- Boutons d'actions (Like, Comment) -->
        <div class="flex justify-between mt-4 text-gray-500">
            <button class="flex items-center hover:text-blue-500">
                👍 Like
            </button>
            <button class="flex items-center hover:text-blue-500">
                💬 Comment
            </button>
        </div>
    </div>
    @endforeach
</div>
@endsection