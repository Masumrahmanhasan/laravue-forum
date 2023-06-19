<template>
    <div id="login-modal" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
         class="fixed flex items-center justify-center z-50 overflow-x-hidden overflow-y-auto md:inset-0"
         :class="{'hidden': !open}"
    >
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <button type="button"
                        class="absolute top-3 right-2.5 text-slate-400 bg-transparent hover:bg-slate-200 hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-slate-800 dark:hover:text-white"
                        data-modal-toggle="login-modal"
                        @click="closeModal"
                >
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-8 text-xl font-medium text-slate-900">Log in to LaraForum</h3>
                    <form>
                        <div class="grid grid-cols-1      filament-forms-component-container gap-6">
                            <div class="col-span-1"
                                 wire:key="eSjt4QULlgbstLJQ1MWe.email.Filament\Forms\Components\TextInput">
                                <div class="filament-forms-field-wrapper">

                                    <div class="space-y-2">
                                        <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                            <label
                                                class="filament-forms-field-wrapper-label inline-flex items-center space-x-3 rtl:space-x-reverse"
                                                for="email">


    <span class="text-sm font-medium leading-4 text-gray-700">

        Email address<span class="whitespace-nowrap">
                <sup class="font-medium text-danger-700">*</sup>
            </span>
            </span>


                                            </label>

                                        </div>

                                        <div
                                            class="filament-forms-text-input-component flex items-center space-x-2 rtl:space-x-reverse group">


                                            <div class="flex-1">
                                                <input x-data="{}" wire:model.defer="email" type="email"
                                                       dusk="filament.forms.email" id="email" required=""
                                                       class="block w-full transition duration-75 rounded-lg shadow-sm outline-none focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 border-gray-300"
                                                       x-bind:class="{
                    'border-gray-300': ! ('email' in $wire.__instance.serverMemo.errors),
                    'dark:border-gray-600': ! ('email' in $wire.__instance.serverMemo.errors) &amp;&amp; false,
                    'border-danger-600 ring-danger-600': ('email' in $wire.__instance.serverMemo.errors),
                    'dark:border-danger-400 dark:ring-danger-400': ('email' in $wire.__instance.serverMemo.errors) &amp;&amp; false,
                }">
                                            </div>


                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-span-1"
                                 wire:key="eSjt4QULlgbstLJQ1MWe.password.Phpsa\FilamentPasswordReveal\Password">
                                <div class="filament-forms-field-wrapper">

                                    <div class="space-y-2">
                                        <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                            <label
                                                class="filament-forms-field-wrapper-label inline-flex items-center space-x-3 rtl:space-x-reverse"
                                                for="password">


    <span class="text-sm font-medium leading-4 text-gray-700">

        Password<span class="whitespace-nowrap">
                <sup class="font-medium text-danger-700">*</sup>
            </span>
            </span>


                                            </label>

                                        </div>

                                        <div
                                            class="flex items-center space-x-2 rtl:space-x-reverse group filament-forms-text-input-component">


                                            <div class="relative flex-1" x-data="{
                id: 0,
                show: false,
                generatePasswd: function() {
                    let chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!#$%&amp;()*+,-./:;<=>?@[\]^_`{|}~';
                    let password = '';
                    for (let i = 0; i < 8; i++) {
                        password += chars.charAt(Math.floor(Math.random() * chars.length));
                    }
                    $refs.input_password.value = password;
                    $wire.set('password', password);

                                    },
                copyPassword: function() {
                    navigator.clipboard.writeText($refs.input_password.value);
                                            new Notification()
                            .title('Copied to clipboard')
                            .seconds(3)
                            .success()
                            .send();
                                    },
            }">
                                                <input x-ref="input_password" :type="show ? 'text' : 'password'"
                                                       wire:model.defer="password" dusk="filament.forms.password"
                                                       id="password" required=""
                                                       class="block w-full transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 disabled:opacity-70 border-gray-300 !pr-8"
                                                       type="password">
                                                <div
                                                    class="absolute inset-y-0 right-0 flex items-center gap-1 pr-2 text-sm leading-5">


                                                    <button type="button" @click="show = !show"
                                                            x-bind:class="{ 'block': show, 'hidden': !show }"
                                                            class="hidden">
                                                        <svg
                                                            class="h-5 text-gray-400 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-300"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                            aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                        </svg>
                                                    </button>

                                                    <button type="button" @click="show = !show"
                                                            x-bind:class="{ 'hidden': show, 'block': !show }"
                                                            class="block">
                                                        <svg
                                                            class="h-5 text-gray-400 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-300"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
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
                                 wire:key="eSjt4QULlgbstLJQ1MWe.remember.Filament\Forms\Components\Checkbox">
                                <div class="filament-forms-field-wrapper">

                                    <div class="space-y-2">
                                        <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                            <label
                                                class="filament-forms-field-wrapper-label inline-flex items-center space-x-3 rtl:space-x-reverse"
                                                for="remember">
                                                <input wire:loading.attr="disabled" id="remember" type="checkbox"
                                                       wire:model.defer="remember" dusk="filament.forms.remember"
                                                       class="filament-forms-checkbox-component text-primary-600 transition duration-75 rounded shadow-sm focus:border-primary-500 focus:ring-2 focus:ring-primary-500 disabled:opacity-70 border-gray-300">

                                                <span class="text-sm font-medium leading-4 text-gray-700">

        Remember me    </span>


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

                    <div class="w-full flex flex-col justify-center items-center gap-2 mt-5">
                        <div class="text-center text-sm text-slate-700 uppercase flex items-center gap-5">
                            <div class="w-[50px] h-1 border-b border-slate-300"></div>
                            Or sign up with
                            <div class="w-[50px] h-1 border-b border-slate-300"></div>
                        </div>
                        <div class="w-full flex flex-row flex-wrap justify-center items-center mt-2">
                            <a href="http://localhost:8001/redirect/facebook"
                               class="text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-xs px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2"
                               style="background-color: #3b5998">
                                <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab"
                                     data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 320 512">
                                    <path fill="currentColor"
                                          d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z"></path>
                                </svg>
                                <span class="first-letter:uppercase">facebook</span>
                            </a>
                            <a href="http://localhost:8001/redirect/github"
                               class="text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-xs px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2"
                               style="background-color: #24292F">
                                <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab"
                                     data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 496 512">
                                    <path fill="currentColor"
                                          d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                                </svg>
                                <span class="first-letter:uppercase">github</span>
                            </a>
                            <a href="http://localhost:8001/redirect/google"
                               class="text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-xs px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2"
                               style="background-color: #DB4437">
                                <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab"
                                     data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 488 512">
                                    <path fill="currentColor"
                                          d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                                </svg>
                                <span class="first-letter:uppercase">google</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</template>

<script>
export default {
    name: "LoginModal",
    data() {
        return {
            open: true
        }
    },
    methods: {
        closeModal() {
            this.open = false;
        },
        openModal() {
            this.open = true;
        }
    }
}
</script>

<style scoped>

</style>
