<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Prestige Agro Dragoan Limited</title>
    <meta name="description" content="Learn about Prestige Agro Dragoan Limited, a leading agro-based company providing quality crop protection chemicals, seeds, and fertilizers.">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/PADLogo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        prestige: {
                            green: '#1a6b3a',
                            dark: '#1e293b',
                            light: '#64748b'
                        }
                    }
                }
            }
        }
    </script>

</head>

<body class="relative" style="
    background-image: url('https://www.transparentpng.com/download/pattern/p3NBVZ-data-security-and-privacy-software-services-safe-data.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
">
    <!-- Semi-transparent overlay -->
    <div style="
        position: fixed;
        inset: 0;
        background-color: rgb(255 255 255 / 60%);
        z-index: -1;
    "></div>

    @include('partials.navbd')

    <section style=" position: relative;width: 100%; height: 60vh; background-image: url('https://cdn.sanity.io/images/e422uarq/production/3e7a20da224ecf5788e36e01eb705256773f3268-3282x2188.jpg?w=950&fm=jpg&q=80'); background-size: cover;background-position: center; background-attachment: fixed;display: flex;align-items: center;justify-content: center;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        <!-- Dark overlay -->
        <div style="  position: absolute;inset: 0; background-color: rgba(0, 0, 0, 0.5);"></div>

        <!-- Text -->
        <h1 style="position: relative;z-index: 1;color: white;font-size: 3rem;font-weight: bold;text-align: center;">
            কর্মজীবন
        </h1>
    </section>

    <section style="
    display: flex;
    width: 100%;
    min-height: 60vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
">
        <!-- Left Text Side -->
        <div style="
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 2rem;
      text-align: center;
  ">
            <h2 style="
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
    ">
                Explore Your Career Path
            </h2>
            <p style="
        font-size: 1.1rem;
        max-width: 450px;
        color: #333;
        line-height: 1.5;
    ">
                At Ispahani, we offer a dynamic yet secure work environment. We invite ambitious graduates and visionary business leaders to join a team united by the commitment to safe food and a safer Bangladesh.
            </p>
        </div>

        <!-- Right Image Side -->
        <div style="flex: 1; display: flex; justify-content: center; align-items: center; padding: 2rem;">
            <img src="https://img.freepik.com/free-vector/team-leader-teamwork-concept_74855-6671.jpg?semt=ais_hybrid&w=740" alt="Career Image" style="max-width: 100%; height: auto; border-radius: 8px; object-fit: cover;">
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-12">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-3">Available Career Opportunities</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Join our team and grow your career with industry leaders in agro-business</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gradient-to-r from-green-600 to-green-700">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">Job ID</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">Position</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">Vacancy</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">Closing Date</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">Details</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($careers as $career)
                        <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#{{ $career->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-semibold text-gray-900">{{ $career->Position }}</div>
                                <div class="text-xs text-gray-500">{{ $career->Department ?? 'Agro Division' }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{ $career->Vacancy }} position(s)
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    {{ \Carbon\Carbon::parse($career->Closing_Date)->format('M d, Y') }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $career->Status == 1 ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ $career->Status == 1 ? 'Open' : 'Closed' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <div class="text-xs text-gray-500">{{ $career->Details ?? 'Agro Division' }}</div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-8 text-center">
                                <div class="flex flex-col items-center justify-center text-gray-500">
                                    <svg class="w-16 h-16 mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-lg font-medium">No current job openings</p>
                                    <p class="mt-1">We'll post new opportunities here when available</p>
                                    <a href="#" class="mt-4 text-green-600 hover:text-green-800 font-medium">Join our talent network</a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <section style="margin:0; font-family:'Segoe UI', system-ui, -apple-system, sans-serif; display:flex; justify-content:center; align-items:center; min-height:100vh; padding:40px 20px;">
        <div style="background:white; padding:40px 30px; box-shadow:0 10px 30px rgba(0,0,0,0.08); border-radius:12px; width:100%; max-width:680px; position:relative; overflow:hidden;">
            <!-- Decorative elements -->
            <div style="position:absolute; top:0; right:0; width:120px; height:120px; background:#e3f5ec; border-radius:0 0 0 100%; z-index:0;"></div>
            <div style="position:absolute; bottom:20px; left:20px; width:60px; height:60px; background:#e3f5ec; border-radius:50%; z-index:0;"></div>

            <div style="position:relative; z-index:1;">
                <div style="text-align:center; margin-bottom:40px;">
                    <svg style="width:60px; height:60px; margin:0 auto 15px; color:#28a745;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <h2 style="margin:0 0 10px; font-size:32px; font-weight:700; color:#2d3748;">Submit Your Application</h2>
                    <p style="margin:0; color:#718096; font-size:16px;">Join our team by submitting your CV and contact details</p>
                </div>

                <form action="#" method="POST" enctype="multipart/form-data" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
                    <div style="position:relative;">
                        <label style="display:block; margin-bottom:8px; font-size:14px; color:#4a5568; font-weight:500;">Full Name</label>
                        <input type="text" name="name" placeholder="John Doe" required
                            style="width:100%; padding:14px 16px; border:1px solid #e2e8f0; border-radius:8px; font-size:16px; transition:all 0.3s; background:#f8fafc;"
                            onfocus="this.style.borderColor='#38a169'; this.style.boxShadow='0 0 0 3px rgba(56, 161, 105, 0.2)';"
                            onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';" />
                    </div>

                    <div style="position:relative;">
                        <label style="display:block; margin-bottom:8px; font-size:14px; color:#4a5568; font-weight:500;">Email Address</label>
                        <input type="email" name="email" placeholder="john@example.com" required
                            style="width:100%; padding:14px 16px; border:1px solid #e2e8f0; border-radius:8px; font-size:16px; transition:all 0.3s; background:#f8fafc;"
                            onfocus="this.style.borderColor='#38a169'; this.style.boxShadow='0 0 0 3px rgba(56, 161, 105, 0.2)';"
                            onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';" />
                    </div>

                    <div style="position:relative;">
                        <label style="display:block; margin-bottom:8px; font-size:14px; color:#4a5568; font-weight:500;">Phone Number</label>
                        <input type="tel" name="phone" placeholder="+880 1XXX-XXXXXX" required
                            style="width:100%; padding:14px 16px; border:1px solid #e2e8f0; border-radius:8px; font-size:16px; transition:all 0.3s; background:#f8fafc;"
                            onfocus="this.style.borderColor='#38a169'; this.style.boxShadow='0 0 0 3px rgba(56, 161, 105, 0.2)';"
                            onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';" />
                    </div>

                    <div style="position:relative;">
                        <label style="display:block; margin-bottom:8px; font-size:14px; color:#4a5568; font-weight:500;">Upload CV (PDF, DOCX)</label>
                        <div style="position:relative;">
                            <input type="file" name="cv" accept=".pdf,.doc,.docx" required
                                style="width:100%; padding:14px 16px; border:1px solid #e2e8f0; border-radius:8px; font-size:16px; transition:all 0.3s; background:#f8fafc; color:transparent;"
                                onfocus="this.style.borderColor='#38a169'; this.style.boxShadow='0 0 0 3px rgba(56, 161, 105, 0.2)';"
                                onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none';"
                                onchange="document.getElementById('file-name').textContent = this.files[0] ? this.files[0].name : 'No file chosen'" />
                            <div style="position:absolute; top:0; left:0; right:0; bottom:0; display:flex; align-items:center; padding-left:16px; pointer-events:none;">
                                <span style="margin-left:auto; margin-right:10px; padding:4px 10px; background:#edf2f7; border-radius:4px; font-size:12px; color:#4a5568;">Browse</span>
                            </div>
                        </div>
                    </div>

                    <button type="submit"
                        style="grid-column:1 / -1; background:linear-gradient(to right, #38a169, #48bb78); color:white; padding:16px; border:none; border-radius:8px; font-size:16px; font-weight:600; cursor:pointer; transition:all 0.3s; margin-top:10px; display:flex; align-items:center; justify-content:center; gap:8px;"
                        onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 4px 12px rgba(56, 161, 105, 0.3)';"
                        onmouseout="this.style.transform='none'; this.style.boxShadow='none';">
                        <svg style="width:20px; height:20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        Submit Application
                    </button>
                </form>
            </div>
        </div>
    </section>
    @include('partials.footer')
</body>

</html>
