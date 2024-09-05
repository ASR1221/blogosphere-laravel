<x-app-layout>
    <section>
        <h1 class="text-4xl text-color-title pt-8 pb-2">One Place For All what you read</h1>
        <p class="text-color-sub-title">Create, Discover, and Dive In: Your Ultimate Reading Hub</p>

        <div class="py-3">
            <x-primary-button>Start Exploring</x-primary-button>
        </div>
    </section>
    
    <section>
        <div>
            <div class="rounded-xl bg-slate-300 aspect-video">
                <img src="" alt="" class="object-cover w-full">
            </div>
            <div class=" my-2">
                <h2 class="text-3xl text-color-title">Tilte title title</h2>
                <p class="text-color-sub-title">Description decription decription decription</p>
            </div>
        </div>
        <div class=" flex items-center justify-between">
            <div class=" flex items-center">
                <div class=" w-6 h-2 mx-1 bg-color-primary rounded-md"></div>
                <div class=" w-2 h-2 mx-1 bg-color-secondary rounded-md"></div>
                <div class=" w-2 h-2 mx-1 bg-color-secondary rounded-md"></div>
            </div>
            <div class=" flex items-center">
                <button class=" p-1 mx-1 rounded-full border-2 border-color-primary hover:bg-color-primary hover:text-color-bg rotate-90 transition-all">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class=" hover:text-color-bg text-color-primary icon icon-tabler icons-tabler-outline icon-tabler-arrow-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M18 13l-6 6" /><path d="M6 13l6 6" /></svg>
                </button>
                <button class=" p-1 mx-1 rounded-full border-2 border-color-primary hover:bg-color-primary hover:text-color-bg -rotate-90 transition-all">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class=" hover:text-color-bg text-color-primary icon icon-tabler icons-tabler-outline icon-tabler-arrow-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M18 13l-6 6" /><path d="M6 13l6 6" /></svg>
                </button>
            </div>
        </div>
    </section>

    <section class=" my-5">
        <h2 class="text-3xl text-color-title">New Blogs</h2>
        <div class=" flex flex-wrap my-2">
            <button class=" px-3 py-1 text-color-sub-title border-2 border-color-sub-title rounded-lg">Category</button>
        </div>

        <div>
            <div class=" p-2 bg-color-secondary rounded-xl">
                <div class="rounded-lg bg-color-bg aspect-video">
                    <img src="" alt="" class="object-cover w-full">
                </div>
                <div class=" mt-2 mb-3">
                    <h2 class="text-3xl text-color-title">Tilte title title</h2>
                    <p class="text-color-sub-title">Description decription decription decription</p>
                </div>
                <div class="flex items-center mb-1">
                    <div class="flex items-center">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="text-color-primary icon icon-tabler icons-tabler-outline icon-tabler-heart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                        <p class=" px-[2px] text-color-primary">100 Likes</p>
                    </div>
                    <div class="w-4"></div>
                    <div class="flex items-center">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"  class="text-color-primary icon icon-tabler icons-tabler-outline icon-tabler-message-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M9 18h-3a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-3l-3 3l-3 -3z" /></svg>
                        <p class=" px-1 text-color-primary">50 Comments</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" flex items-center justify-center my-4">
            <x-primary-button>Explore More</x-primary-button>
        </div>
    </section>
</x-app-layout>