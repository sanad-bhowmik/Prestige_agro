<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Job | Prestige</title>
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
    <style>
        .form-input {
            transition: all 0.3s ease;
        }

        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(72, 187, 120, 0.2);
            border-color: #48bb78;
        }

        .file-upload {
            position: relative;
            overflow: hidden;
        }

        .file-upload-input {
            position: absolute;
            font-size: 100px;
            opacity: 0;
            right: 0;
            top: 0;
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="md:flex min-h-screen">
        @include('partials.sidebar')

        <!-- Main Content -->
        <main class="flex-1 p-6 md:p-10">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden animate__animated animate__fadeIn">
                <!-- Application Form -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Application Form</h2>
                    @if (session('success'))
                    <div
                        x-data="{ show: true }"
                        x-show="show"
                        x-init="setTimeout(() => show = false, 4000)"
                        class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative animate__animated animate__fadeIn"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                        <button
                            @click="show = false"
                            class="absolute top-0 bottom-0 right-0 px-4 py-3"
                            aria-label="Close">
                            &times;
                        </button>
                    </div>
                    @endif

                    <form action="{{ route('career.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Position -->
                        <div>
                            <label for="position" class="block text-sm font-medium text-gray-700 mb-1">Position</label>
                            <input type="text" id="position" name="Position" required
                                class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm py-3 px-4 border"
                                placeholder="Job position title">
                        </div>

                        <!-- Vacancy -->
                        <div>
                            <label for="vacancy" class="block text-sm font-medium text-gray-700 mb-1">Vacancy</label>
                            <input type="number" id="vacancy" name="Vacancy" min="1" required
                                class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm py-3 px-4 border"
                                placeholder="Number of available positions">
                        </div>

                        <!-- Closing Date -->
                        <div>
                            <label for="closing_date" class="block text-sm font-medium text-gray-700 mb-1">Closing Date</label>
                            <input type="date" id="closing_date" name="Closing_Date" required
                                class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm py-3 px-4 border">
                        </div>

                        <!-- Status -->
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <select id="status" name="Status" required
                                class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm py-3 px-4 border">
                                <option value="" disabled selected>Select status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <!-- Details -->
                        <div>
                            <label for="details" class="block text-sm font-medium text-gray-700 mb-1">Details</label>
                            <textarea id="details" name="Details" rows="5" required
                                class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm py-3 px-4 border"
                                placeholder="Job description, responsibilities, requirements, etc."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit"
                                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors duration-200">
                                Submit
                            </button>
                        </div>
                    </form>

                </div>
            </div>
    </div>
    </main>
    </div>

    <script>
        // Display selected file name
        document.getElementById('resume').addEventListener('change', function(e) {
            const fileName = e.target.files[0] ? e.target.files[0].name : 'No file selected';
            const uploadText = document.querySelector('.file-upload p:first-of-type');
            if (uploadText) {
                uploadText.textContent = fileName;
            }
        });
    </script>
</body>

</html>
