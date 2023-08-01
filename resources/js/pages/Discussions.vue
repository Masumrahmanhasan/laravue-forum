<template>
    <div class="w-full flex justify-center items-center px-2 sm:px-4 py-10">
        <div class="container  mx-auto flex flex-row gap-10">
            <Sidebar/>
            <div class="flex flex-col gap-8 w-full">
                <div class="w-full flex flex-col gap-1">
                    <div class="text-slate-700 font-medium text-lg flex items-center gap-2">
                        <div>
                            <i class="fa fa-spinner fa-spin"></i>
                        </div>
                    </div>
                </div>
                <div class="w-full flex flex-col" v-for="i in 10">
                    <div class="bg-white border-slate-200 flex flex-col gap-3 hover:cursor-pointer items-start justify-between lg:flex-row lg:gap-0 px-3 py-5 rounded-lg transition-all w-full">
                        <div class="flex gap-3">
                            <img src="https://ui-avatars.com/api/Admin" alt="Avatar"
                                 class="rounded-lg border border-slate-200" style="width: 56px; height: 56px"/>
                            <div class="flex flex-col gap-1">
                                <div class="flex items-center gap-1">
                                    <span class="font-large text-slate-500">
                                        This is for test
                                    </span>
                                </div>
                                <span class="text-slate-400 text-sm">
                            Created by <span class="font-medium">Masum rahman Hasan</span>
                            (<span class="text-xs">25th May 2023</span>)
                        </span>
                                <span class="text-slate-400 font-light lg:max-w-[90%] max-w-full text-sm">
                            hello this is me for the test
                        </span>
                                <div class="flex items-center mt-2">
                                    <div class="flex items-center gap-1">
                                        <span  class="w-fit text-xs font-medium px-2.5 py-0.5 rounded flex items-center justify-center text-center hover:cursor-pointer"
                                               style="background-color: darkcyan; color: white">
                                            Support
                                        </span>
                                        <span class="w-fit text-xs font-medium px-2.5 py-0.5 rounded flex items-center justify-center text-center hover:cursor-pointer" style="background-color: rgba(0,141,64,1); color: white">Resolved</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row items-center gap-3 lg:pl-0 pl-14">
                            <div class="flex items-center gap-3 lg:order-2 order-1">
                                <span class="text-sm text-slate-500 flex items-center gap-1">
                                    <i class="fa-regular fa-thumbs-up"></i> 50
                                </span>
                                <span class="text-sm text-slate-500 flex items-center gap-1">
                                     <i class="fa-regular fa-comment"></i> 20
                                </span>

                                <span class="text-sm text-slate-500 flex items-center gap-1">
                                    <i class="fa-solid fa-lock text-slate-400"></i>
                                </span>
                                <span class="text-sm text-slate-500 flex items-center gap-1">
                                    <a class="bg-blue-500 block px-0 py-2 rounded-full text-center text-white text-xs w-28">Support</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</template>
<script>
import Sidebar from "../components/Sidebar.vue";

export default {
    name: "Discussions",
    components: {Sidebar},
    data() {
        return {
            tags: []
        }
    },
    methods: {
        async fetchTags() {
            console.log('hello')
        }
    },
    mounted() {
        this.fetchTags()
    }
}
</script>
