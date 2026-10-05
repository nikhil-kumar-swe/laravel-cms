<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Page Header with Action Button -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h2 style="font-size: 1.25rem; font-weight: 700; color: #1f2937;">
                    Categories
                </h2>
                <a href="{{ route('categories.create') }}" style="background-color: #4f46e5; color: #ffffff !important; padding: 8px 16px; border-radius: 6px; font-weight: 600; font-size: 0.875rem; text-decoration: none; display: inline-block;">
                    + Add New Category
                </a>
            </div>

            <!-- Table Container -->
            <div style="background-color: #ffffff; border-radius: 8px; border: 1px solid #e5e7eb; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.875rem;">
                        <thead>
                            <tr style="background-color: #f9fafb; border-bottom: 1px solid #e5e7eb;">
                                <th style="padding: 12px 24px; font-weight: 600; color: #374151; text-transform: uppercase; font-size: 0.75rem;">Category Name</th>
                                <th style="padding: 12px 24px; font-weight: 600; color: #374151; text-transform: uppercase; font-size: 0.75rem; text-align: right;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $category)
                                <tr style="border-bottom: 1px solid #f3f4f6;">
                                    <td style="padding: 16px 24px; font-weight: 500; color: #111827;">
                                        {{ $category->name }}
                                    </td>
                                    <td style="padding: 16px 24px; text-align: right; white-space: nowrap;">
                                        <a href="{{ route('categories.edit', $category) }}" style="color: #4f46e5 !important; font-weight: 600; text-decoration: none; margin-right: 12px;">Edit</a>
                                        <form method="POST" action="{{ route('categories.destroy', $category) }}" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="color: #dc2626 !important; font-weight: 600; background: none; border: none; cursor: pointer; padding: 0;" onclick="return confirm('Are you sure?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" style="padding: 24px; text-align: center; color: #6b7280;">
                                        No categories found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>