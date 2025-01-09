<!-- resources/views/workspace.blade.php -->
<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="bg-gray-800 shadow-md rounded-lg p-6">
            <h1 class="text-3xl font-bold text-white mb-4">Workspace</h1>
            <p class="text-gray-300 mb-6">
                Welcome to the Workspace section. Here you can manage your groups and access group-related features.
            </p>

            <!-- Group Creation Form -->
            <div class="bg-gray-700 rounded-lg p-4 shadow-lg mb-6">
                <h2 class="text-xl font-semibold text-white mb-2">Create a New Group</h2>
                <form action="{{ route('groups.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="group_name" class="block text-gray-400 mb-2">Group Name</label>
                        <input type="text" id="group_name" name="group_name" class="w-full px-3 py-2 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="group_description" class="block text-gray-400 mb-2">Group Description</label>
                        <textarea id="group_description" name="group_description" class="w-full px-3 py-2 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition border-2 border-white shadow-lg">
                        Create Group
                    </button>
                </form>
            </div>

            <!-- Display Groups -->
            <div class="bg-gray-700 rounded-lg p-4 shadow-lg">
                <h2 class="text-xl font-semibold text-white mb-2">Your Groups</h2>
                @if($groups->isEmpty())
                    <p class="text-gray-400">No groups have been created yet.</p>
                @else
                    <ul>
                        @foreach($groups as $group)
                            <li class="mb-2">
                                <a href="{{ route('groups.show', $group->id) }}" class="block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition text-center border-2 border-white shadow-lg">
                                    <strong>{{ $group->name }}</strong>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
