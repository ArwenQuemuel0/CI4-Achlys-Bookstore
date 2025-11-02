<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Achlys' Bookstore</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto Slab', serif;
            background-color: #f9f8f6;
        }

        .header-title {
            font-family: "Righteous", sans-serif;
            font-weight: 400;
        }

        .custom-neutral {
            background-color: #8B7E74;
        }

        .sidebar-link {
            transition: all 0.2s ease;
        }

        .sidebar-link:hover {
            background-color: #A99D92;
            color: #fff;
        }
    </style>
</head>

<body class="flex min-h-screen">


    <main class="flex-1 bg-white/90 backdrop-blur-sm">
        <header class="flex justify-between items-center shadow-md px-6 py-4 text-gray-100 custom-neutral">
            <h1 class="text-3xl tracking-wide header-title">Dashboard Overview</h1>
            <div class="flex items-center space-x-4">
                <span class="font-semibold">Welcome, Admin</span>
                <img src="/assets/profile_placeholder.png" alt="Admin Avatar" class="border border-[#A99D92] rounded-full w-10 h-10">
            </div>
        </header>

        <!-- Dashboard Cards -->
        <?= view('components/cards/dashboard_cards', [
            'totalBooks' => 245,
            'registeredUsers' => 1024,
            'monthlySales' => 58200
        ]) ?>


        <!-- Recent Activity -->
        <section class="p-8">
            <h2 class="mb-4 text-[#8B7E74] text-2xl header-title">Recent Activity</h2>
            <div class="bg-white shadow-md border border-[#E5E0DC] rounded-xl overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-[#A99D92]/20">
                        <tr>
                            <th class="px-6 py-3">User</th>
                            <th class="px-6 py-3">Action</th>
                            <th class="px-6 py-3">Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#E5E0DC]">
                        <tr>
                            <td class="px-6 py-4">Mary Arwen Quemuel</td>
                            <td class="px-6 py-4">Added a new eBook: <strong>“Digital Design”</strong></td>
                            <td class="px-6 py-4">Nov 2, 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">Adrian Guillermo</td>
                            <td class="px-6 py-4">Updated account information</td>
                            <td class="px-6 py-4">Nov 1, 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">Guest</td>
                            <td class="px-6 py-4">Purchased “The Origin of Species”</td>
                            <td class="px-6 py-4">Oct 31, 2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Sidebar -->
    <aside class="flex flex-col bg-[#8B7E74] w-64 text-gray-100">
        <div class="p-6 border-[#A99D92] border-b text-center">
            <img src="/assets/circle_logo.png" alt="Achlys Logo" class="mx-auto mb-3 w-16 h-16">
            <h2 class="text-2xl header-title">Admin Panel</h2>
        </div>

        <nav class="flex-1 space-y-2 p-4">
            <a href="#" class="block bg-[#A99D92]/30 px-4 py-3 rounded-lg sidebar-link">📊 Dashboard</a>
            <a href="#" class="block px-4 py-3 rounded-lg sidebar-link">📚 Manage Books</a>
            <a href="#" class="block px-4 py-3 rounded-lg sidebar-link">👤 Manage Users</a>
            <a href="#" class="block px-4 py-3 rounded-lg sidebar-link">💸 Sales Reports</a>
            <a href="#" class="block px-4 py-3 rounded-lg sidebar-link">⚙️ Settings</a>
        </nav>

        <div class="p-4 border-[#A99D92]/30 border-t">
            <a href="/logout" class="block bg-[#A99D92] hover:bg-[#7C6F66] py-2 rounded-lg text-center transition">Logout</a>
        </div>
    </aside>
</body>

</html>