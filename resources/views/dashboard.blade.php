<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(auth()->user()->is_admin)
                <!-- Stats Grid for Admins -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Total Posts Card -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <div class="text-sm font-medium text-gray-500">Total Posts</div>
                        <div class="mt-2 text-3xl font-bold text-gray-900">{{ $postsCount }}</div>
                        <div class="mt-4">
                            <a href="{{ route('posts.index') }}" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Manage Posts &rarr;</a>
                        </div>
                    </div>

                    <!-- Total Categories Card -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <div class="text-sm font-medium text-gray-500">Total Categories</div>
                        <div class="mt-2 text-3xl font-bold text-gray-900">{{ $categoriesCount }}</div>
                        <div class="mt-4">
                            <a href="{{ route('categories.index') }}" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Manage Categories &rarr;</a>
                        </div>
                    </div>
                </div>
            @else
                <!-- Welcome View for Regular Users -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800">Welcome, {{ auth()->user()->name }}!</h3>
                    <p class="text-gray-600 mt-2">You are logged in as a standard user. You can manage your account credentials from your profile menu.</p>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>