<template>
    <div class="min-h-screen flex flex-col items-center">
        <div class="w-5/6 sm:w-1/2 flex flex-col gap-y-8">
            <header class="flex flex-col items-center gap-y-2">
                <h1 class="text-4xl pt-8">
                    <span class="block">Hello 👋,</span>
                    <span class="block">I am <b class="hover:text-yellow-400">Abraham</b></span>
                </h1>
                <nav>
                    <ul class="flex flex-wrap justify-center gap-x-8 text-xl text-gray-400">
                        <li>
                            <a href="" class="hover:text-yellow-400">Who am I!</a>
                        </li>
                        <li>
                            <a href="" class="hover:text-yellow-400">Subscribe</a>
                        </li>
                        <li>
                            <a href="" class="hover:text-yellow-400">Contact</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <main>
                <slot />
            </main>
            <footer class="flex justify-center border-t border-gray-200">
                <h6 class=" text-xs py-4">© Abraham's Blog</h6>
            </footer>
        </div>
    </div>
</template>