<x-app-layout>
    <div class="py-6">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Page Header -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h2 style="font-size: 1.25rem; font-weight: 700; color: #1f2937;">
                    Create Category
                </h2>
                <a href="{{ route('categories.index') }}" style="color: #4b5563; text-decoration: none; font-weight: 500; font-size: 0.875rem;">
                    &larr; Back to Categories
                </a>
            </div>

            <!-- Form Card -->
            <div style="background-color: #ffffff; border-radius: 8px; border: 1px solid #e5e7eb; padding: 24px; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                
                @if ($errors->any())
                    <div style="background-color: #fef2f2; border-left: 4px solid #ef4444; padding: 12px; margin-bottom: 20px; border-radius: 4px; color: #991b1b; font-size: 0.875rem;">
                        <ul style="margin-left: 16px; list-style-type: disc;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('categories.store') }}">
                    @csrf

                    <div style="margin-bottom: 24px;">
                        <label for="name" style="display: block; font-weight: 600; font-size: 0.875rem; color: #374151; margin-bottom: 6px;">
                            Category Name
                        </label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Enter category name..." style="width: 100%; padding: 10px 12px; border: 1px solid #d1d5db; border-radius: 6px; font-size: 0.875rem; box-sizing: border-box;" required>
                    </div>

                    <!-- Action Buttons -->
                    <div style="display: flex; justify-content: flex-end; gap: 12px; align-items: center;">
                        <a href="{{ route('categories.index') }}" style="background-color: #ffffff; color: #374151 !important; border: 1px solid #d1d5db; padding: 8px 16px; border-radius: 6px; font-weight: 600; font-size: 0.875rem; text-decoration: none; display: inline-block;">
                            Cancel
                        </a>
                        <button type="submit" style="background-color: #4f46e5; color: #ffffff !important; border: none; padding: 8px 18px; border-radius: 6px; font-weight: 600; font-size: 0.875rem; cursor: pointer; display: inline-block;">
                            Save Category
                        </button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-app-layout>