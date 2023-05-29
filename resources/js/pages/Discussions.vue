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
                    <a href=""
                       class="bg-white border-b border-slate-200 flex flex-col gap-3 hover:bg-slate-100 hover:cursor-pointer hover:rounded items-start justify-between lg:flex-row lg:gap-0 px-3 py-5 rounded-lg shadow transition-all w-full">
                        <div class="flex gap-3">
                            <img src="https://ui-avatars.com/api/Admin" alt="Avatar"
                                 class="rounded w-10 h-10 border border-slate-200"/>
                            <div class="flex flex-col gap-1">
                                <div class="flex items-center gap-1">
                                    <i class="fa-solid fa-star text-green-500" title="Following"></i>

                                    <span class="font-medium text-slate-500">
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
                            </div>
                        </div>
                    </a>
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
}
</script>
