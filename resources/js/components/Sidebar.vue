<template>
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
            <div v-for="tag in tags">
                <a href="" class="w-full flex items-center hover:text-blue-500 text-slate-500">
                    <span class="w-[30px]" :style="{color: tag.color}"><i :class="tag.icon"></i></span>
                    <span :style="{color: tag.color}">{{ tag.name }}</span>
                </a>
            </div>
        </div>
    </div>
</template>

<script>

import SuperFetch from "../hook/SuperFetch";

export default {
    name: "Sidebar",
    data() {
        return {
            tags: []
        }
    },
    methods: {
        fetchTags() {
            SuperFetch.get('/tags').then((res) => {
                this.tags = res.data.data
            })
        }
    },
    mounted() {
        this.fetchTags()
    }
}
</script>

<style scoped>

</style>
