<template>
    <div class="w-full flex justify-center items-center px-2 sm:px-4 py-10">
        <div class="container  mx-auto flex flex-row gap-10">
            <div class="lg:flex hidden flex-col gap-10 w-1/6">
                <button type="button" data-modal-toggle="add-discussion-modal"
                        class="bg-blue-500 hover:bg-blue-600 hover:cursor-pointer px-3 py-2 rounded shadow hover:shadow-lg text-white font-medium text-center">
                    Start a Discussion
                </button>
                <div class="w-full flex flex-col gap-5">
                    <a href="" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                        <span class="w-[30px]"><i class="fa-regular fa-comments"></i></span>
                        <span>All discussions</span>
                    </a>
                    <a href="" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                        <span class="w-[30px]"><i class="fa-solid fa-table-cells-large"></i></span>
                        <span>Tags</span>
                    </a>
                </div>
                <div class="w-full flex flex-col gap-5">

                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Sidebar"
}
</script>

<style scoped>

</style>
