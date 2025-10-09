<?php
// Component: components/header.php
// $brandTitle: string
// $brandTagline: string|null
// $logo: string|null
?>
<header class="top-0 z-50 sticky bg-[#8B7E74] text-gray-100 shadow-lg">
    <div class="flex justify-between items-center mx-auto px-4 py-6 max-w-7xl">
        <!-- Brand -->
        <div class="flex items-center space-x-3">
            <img src="<?= esc($logo ?? '/assets/circle_logo.png') ?>" alt="<?= esc($brandTitle ?? 'Achlys Bookstore') ?>" class="w-10 md:w-12 h-10 md:h-12">
            <div>
                <h1 class="text-3xl md:text-4xl tracking-wider font-bold" style="font-family: 'Righteous', sans-serif;">Achlys Bookstore</h1>
                <?php if (!empty($brandTagline)): ?>
                    <p class="text-gray-200 text-sm"><?= esc($brandTagline) ?></p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="/" class="bg-[#C7BBB0] hover:bg-[#A99D92] shadow-lg px-6 py-3 rounded-full text-gray-800 btn-main">Home</a>
            <a href="/loginPage" class="bg-[#C7BBB0] hover:bg-[#A99D92] shadow-lg px-6 py-3 rounded-full text-gray-800 btn-main">Login</a>
            <a href="/signupPage" class="bg-[#C7BBB0] hover:bg-[#A99D92] shadow-lg px-6 py-3 rounded-full text-gray-800 btn-main">Sign Up</a>
            <a href="/moodboardPage" class="bg-[#C7BBB0] hover:bg-[#A99D92] shadow-lg px-6 py-3 rounded-full text-gray-800 btn-main">Moodboard</a>
            <a href="/roadmapPage" class="bg-[#C7BBB0] hover:bg-[#A99D92] shadow-lg px-6 py-3 rounded-full text-gray-800 btn-main">Roadmap</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-100 text-3xl">☰</button>
    </div>
</header>