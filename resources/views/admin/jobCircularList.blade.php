<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job | Prestige</title>

    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body class="bg-gray-50">
    <div class="md:flex min-h-screen">
        @include('partials.sidebar')

        <main class="flex-1 p-6 md:p-10">

            <h1 class="text-3xl font-extrabold mb-8 text-gray-900 text-center md:text-left animate__animated animate__fadeInDown">Job Circular List</h1>

            <div class="overflow-x-auto rounded-lg shadow-lg bg-white">
                <table class="min-w-full divide-y divide-gray-200 table-auto">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">Position</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">Vacancy</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">Closing Date</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">Details</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse ($careers as $career)
                        <tr class="hover:bg-green-50 transition duration-200">
                            <td class="px-6 py-4 text-gray-800 font-medium text-sm md:text-base">
                                {{ $career->Position }}
                            </td>
                            <td class="px-6 py-4 text-gray-700 text-sm md:text-base">
                                {{ $career->Vacancy }}
                            </td>
                            <td class="px-6 py-4 text-gray-700 text-sm md:text-base">
                                {{ \Carbon\Carbon::parse($career->Closing_Date)->format('M d, Y') }}
                            </td>
                            <td class="px-6 py-4 text-sm md:text-base">
                                @if ($career->Status == 1)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                                    Active
                                </span>
                                @else
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-800">
                                    Inactive
                                </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 max-w-xl break-words text-gray-700 text-sm md:text-base whitespace-normal">
                                {{ $career->Details }}
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('careers.destroy', $career->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white text-xs font-bold py-1 px-3 rounded-full shadow-md transition duration-200">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500 font-semibold text-base">
                                No job circulars found.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

</html>
