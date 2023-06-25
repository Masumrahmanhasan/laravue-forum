<template>
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-8 text-xl font-medium text-slate-900">Log in to LaraForum</h3>
                        <form @submit.prevent="login">
                            <div class="grid grid-cols-1      filament-forms-component-container gap-6">
                                <div class="col-span-1">
                                    <div class="filament-forms-field-wrapper">
                                        <div class="space-y-2">
                                            <div
                                                class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                <label
                                                    class="filament-forms-field-wrapper-label inline-flex items-center space-x-3 rtl:space-x-reverse"
                                                    for="email">
                                                <span class="text-sm font-medium leading-4 text-gray-700">
                                                    Email address
                                                    <span class="whitespace-nowrap">
                                                            <sup class="font-medium text-danger-700">*</sup>
                                                    </span>
                                                </span>
                                                </label>
                                            </div>

                                            <div
                                                class="filament-forms-text-input-component flex items-center space-x-2 rtl:space-x-reverse group">


                                                <div class="flex-1">
                                                    <input type="email"
                                                           id="email" required=""
                                                           class="block w-full transition duration-75 rounded-lg shadow-sm outline-none focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 border-gray-300"
                                                    >
                                                </div>


                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-1"
                                >
                                    <div class="filament-forms-field-wrapper">

                                        <div class="space-y-2">
                                            <div
                                                class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                <label
                                                    class="filament-forms-field-wrapper-label inline-flex items-center space-x-3 rtl:space-x-reverse"
                                                    for="password">
                                                <span class="text-sm font-medium leading-4 text-gray-700">

                                                    Password
                                                    <span class="whitespace-nowrap">
                                                            <sup class="font-medium text-danger-700">*</sup>
                                                    </span>
                                                </span>


                                                </label>

                                            </div>

                                            <div
                                                class="flex items-center space-x-2 rtl:space-x-reverse group filament-forms-text-input-component">


                                                <div class="relative flex-1">
                                                    <input :type="showText ? 'text' : 'password'"
                                                           id="password" required=""
                                                           class="block w-full transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 disabled:opacity-70 border-gray-300 !pr-8"
                                                           type="password">
                                                    <div
                                                        class="absolute inset-y-0 right-0 flex items-center gap-1 pr-2 text-sm leading-5">


                                                        <button type="button" @click="showText = !showText"
                                                                :class="{'block': !showText, 'hidden': showText}">
                                                            <svg
                                                                class="h-5 text-gray-700"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                            </svg>
                                                        </button>

                                                        <button type="button" @click="showText = !showText"
                                                                :class="{'block': showText, 'hidden': !showText}">
                                                            <svg
                                                                class="h-5 text-gray-700"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-1"
                                >
                                    <div class="filament-forms-field-wrapper">

                                        <div class="space-y-2">
                                            <div
                                                class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                                <label
                                                    class="filament-forms-field-wrapper-label inline-flex items-center space-x-3 rtl:space-x-reverse"
                                                    for="remember">
                                                    <input id="remember" type="checkbox"

                                                           class="filament-forms-checkbox-component text-primary-600 transition duration-75 rounded shadow-sm focus:border-primary-500 focus:ring-2 focus:ring-primary-500 disabled:opacity-70 border-gray-300">

                                                    <span class="text-sm font-medium leading-4 text-gray-700">
                                                    Remember me
                                                </span>

                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit"
                                    class="mt-6 w-full text-white bg-blue-700 disabled:bg-slate-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Log in to your account
                            </button>
                            <div class="w-full flex justify-center items-center text-center">
                                <button
                                    class="w-fit p-2 text-blue-500 hover:text-blue-700 hover:cursor-pointer hover:underline"
                                    type="button">
                                    Forgot password?
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

</script>

<style scoped>
.login-card {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}
</style>
