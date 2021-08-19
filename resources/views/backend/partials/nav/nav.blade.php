

<div class="flex flex-col w-64 h-screen py-8 bg-white border-r dark:bg-gray-800 dark:border-gray-600 ">
    <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Dashboard</h2>
    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav>
            <a class="flex items-center px-5 py-2{{request()->is('dashboard') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard">
                <span class="mx-4 font-medium">Dashboard</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 {{request()->is('dashboard/about') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard/about">
                <span class="mx-4 font-medium">About</span>
            </a>
            <a class="flex items-center px-4 py-2 mt-5 {{request()->is('dashboard/facts') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard/facts">
                <span class="mx-4 font-medium">Facts</span>
            </a>
            <a class="flex items-center px-4 py-2 mt-5 {{request()->is('dashboard/skills') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard/skills">
                <span class="mx-4 font-medium">Skills</span>
            </a>
            <a class="flex items-center px-4 py-2 mt-5 {{request()->is('dashboard/potfolios') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard/potfolios">
                <span class="mx-4 font-medium">Portfolios</span>
            </a>
            <a class="flex items-center px-4 py-2 mt-5 {{request()->is('/dashboard/services') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard/services">
                <span class="mx-4 font-medium">Services</span>
            </a>
            <a class="flex items-center px-4 py-2 mt-5 {{request()->is('dashboard/contact') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard/contact">
                <span class="mx-4 font-medium">Contact</span>
            </a>
            <a class="flex items-center px-4 py-2 mt-5 {{request()->is('dashboard/portfolioDetails') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard/portfolioDetails">
                <span class="mx-4 font-medium">Portfolio Details</span>
            </a>
        </nav>
    </div>
</div>

