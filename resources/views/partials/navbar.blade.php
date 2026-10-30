<nav class="flex py-2 px-4 md:px-8 bg-white border-b border-slate-300 min-h-17 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center gap-4 w-full">
            <div class="flex-1 flex">
                <a href="/" class="text-lg font-semibold text-black">Portofolio</a>
            </div>
            <div id="collapseMenu" class="hidden lg:block max-lg:bg-white max-lg:fixed max-lg:top-0 max-lg:right-0 max-lg:w-1/2 max-lg:h-full max-lg:shadow-md z-50">
                <ul class="flex flex-col gap-8 font-semibold text-sm text-slate-900 lg:flex-row max-lg:p-6">
                    <li>
                        <a href="/"
                            class="{{ request()->is('/') ? 'text-blue-700 font-semibold' : 'hover:text-blue-700' }}focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Home</a>
                    </li>
                    <li>
                        <a href="/about"
                            class="{{ request()->is('about') ? 'text-blue-700 font-semibold' : 'hover:text-blue-700' }} focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">About</a>
                    </li>
                    <li>
                        <a href="/projects"
                            class="{{ request()->is('projects') ? 'text-blue-700 font-semibold' : 'hover:text-blue-700' }} focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Projects</a>
                    </li>
                    <li>
                        <a href="/blog"
                            class="{{ request()->is('blog') ? 'text-blue-700 font-semibold' : 'hover:text-blue-700' }} focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Blog</a>
                    </li>
                    <li>
                        <a href="/contact"
                            class="{{ request()->is('contact') ? 'text-blue-700 font-semibold' : 'hover:text-blue-700' }} focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>