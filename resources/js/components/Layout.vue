<script setup>
import { ref } from 'vue';
import LoginModal from "@/components/modal/LoginModal.vue";
import SignUpModal from "@/components/modal/SignUpModal.vue";

const isMenuOpen = ref(false)
const isSidebarOpen = ref(false)
const isModalOpen = ref(false)
const isSignUpModalOpen = ref(false)

const showMenu = () => {
    isMenuOpen.value = !isMenuOpen.value
}

const showSidebar = () => {
    isSidebarOpen.value = !isSidebarOpen.value
}

</script>

<template>
    <div class="w-full absolute top-0 left-0 right-0 bottom-0 w-full h-full overflow-auto z-10">
        <nav
            class="min-h-[80px] sticky top-0 bg-white border-slate-200 px-2 sm:px-4 py-2.5 rounded  border-b w-full items-center justify-center flex text-gray-500">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <div class="flex items-center gap-2">
                    <button
                        class="inline-flex items-center p-2 text-sm text-slate-500 rounded-lg lg:hidden hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-200  dark:hover:bg-slate-700 dark:focus:ring-slate-600">
                        <svg viewBox="0 0 20 20" class="w-6 h-6 fill-current text-slate-600">
                            <path fill-rule="evenodd"
                                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                  clip-rule="evenodd">
                            </path>
                        </svg>
                    </button>
                    <RouterLink to="/" class="flex items-center">
                        <!--                            <img src="" class="h-6 mr-3 sm:h-9" alt="Logo" />-->
                        <span
                            class="self-center text-xl font-semibold whitespace-nowrap text-slate-500">LaraForum</span>
                    </RouterLink>
                </div>
                <div class="flex md:order-1">

                    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                            aria-expanded="false"
                            class="md:hidden text-slate-500  hover:bg-slate-100 dark:hover:bg-slate-700 focus:outline-none focus:ring-4 focus:ring-slate-200 dark:focus:ring-slate-700 rounded-lg text-sm p-2.5 mr-1">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <div class="relative hidden md:block">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-slate-500" aria-hidden="true" fill="currentColor"
                                 viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>
                        <form action="" method="GET" class="w-full">
                            <label for="search-navbar1"></label>
                            <input type="search" id="search-navbar1" name="q" minlength="3" required
                                   class="bg-slate-50 block border border-slate-300  focus:border-blue-500 focus:ring-blue-500 p-2 pl-10 rounded-lg text-sm w-full"
                                   placeholder="Search...">
                        </form>
                    </div>
                    <button data-collapse-toggle="navbar-search" type="button"
                            @click="showSidebar"
                            class="inline-flex items-center p-2 text-sm text-slate-500 rounded-lg md:hidden hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-200  dark:hover:bg-slate-700 dark:focus:ring-slate-600"
                            aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                  clip-rule="evenodd">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between w-full md:flex md:w-auto md:order-2" id="navbar-search"
                     :class="{'hidden': !isSidebarOpen}"
                >
                    <div class="relative mt-3 md:hidden">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-slate-500" aria-hidden="true" fill="currentColor"
                                 viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="search-navbar"
                               class="block w-full p-2 pl-10 text-sm text-slate-900 border border-slate-300 rounded-lg bg-slate-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Search...">
                    </div>
                    <ul
                        class="flex flex-col p-4 mt-4 border border-slate-100 rounded-lg bg-slate-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white ">
                        <RouterLink to="/discussions">
                            <li class="nav-menu">
                                <a href=""
                                   class="block py-2 pl-3 pr-4 text-slate-700 rounded hover:bg-slate-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0   dark:hover:bg-slate-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-slate-700"
                                   aria-current="page">
                                    Discussions
                                </a>
                            </li>
                        </RouterLink>


                        <li class="nav-menu">
                            <button type="button"
                                    @click="isSignUpModalOpen = true"
                                    class="block py-2 pl-3 pr-4 text-slate-700 rounded hover:bg-slate-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0   dark:hover:bg-slate-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-slate-700">
                                Sign up
                            </button>
                        </li>


                        <li class="nav-menu">
                            <button type="button"
                                    @click="isModalOpen = true"
                                    class="block py-2 pl-3 pr-4 text-slate-700 rounded hover:bg-slate-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0   dark:hover:bg-slate-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-slate-700">
                                Log in
                            </button>
                        </li>

                        <li>
                            <button type="button" id="profile-dropdown" data-dropdown-toggle="dropdown"
                                    @click="showMenu"
                                    class="flex items-center gap-2 py-2 pl-3 pr-4 text-slate-700 rounded  md:hover:text-blue-700 md:p-0"
                                    aria-current="page">
                                <span class="rounded-full w-6 h-6 border order-slate-200 shadow"></span> Masum Rahman
                                Hasan
                            </button>

                            <div id="dropdown"
                                 class="absolute top-10 z-10 w-44 bg-white rounded divide-y divide-slate-100 shadow"
                                 :class="{'hidden': !isMenuOpen}" style="top: 79px">
                                <ul class="py-1 text-sm text-slate-700 dark:text-slate-200">
                                    <li>
                                        <a href=""
                                           class="flex items-center gap-2 py-2 px-4 text-slate-600 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                            <i class="fa-solid fa-user w-[20px]"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href=""
                                           class="flex items-center gap-2 py-2 px-4 text-slate-600 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                            <i class="fa-solid fa-cog w-[20px]"></i> Settings
                                        </a>
                                    </li>

                                    <RouterLink to="/admin/login">
                                        <li>
                                            <a href=""
                                               class="flex items-center gap-2 py-2 px-4 text-slate-600 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                                <i class="fa-solid fa-gears w-[20px]"></i> Administration
                                            </a>
                                        </li>
                                    </RouterLink>
                                </ul>
                                <div class="py-1">
                                    <a href=""
                                       class="flex items-center gap-2 py-2 px-4 text-red-600 hover:bg-red-100 dark:hover:bg-red-600 dark:hover:text-white">
                                        <i class="fa-solid fa-sign-out w-[20px]"></i> Sign out
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <slot/>
        <LoginModal :show="isModalOpen" @close="isModalOpen = false"/>
        <SignUpModal :show="isSignUpModalOpen" @closeSignup="isSignUpModalOpen = false"/>
    </div>
</template>


<style scoped>


</style>
