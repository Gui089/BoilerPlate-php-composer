<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4">
        <div class="flex items-center justify-start gap-4 h-16">
            <a href="/"
               class="<?php if($_SERVER['REQUEST_URI'] == '/') {echo 'bg-gray-900';} ?> text-white py-2 px-3 leading-lg rounded-md hover:bg-gray-900 transition transition-all duration-[0.35s]">
                Home
            </a>
            <a href="/contact"
               class="<?php if($_SERVER['REQUEST_URI'] == '/contact') {echo 'bg-gray-900';} ?> text-white py-2 px-3 leading-lg rounded-md hover:bg-gray-900 transition transition-all duration-[0.35s]">
                Contact
            </a>
        </div>
    </div>
</nav>
