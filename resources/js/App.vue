
<template>
        <component :is="currentLayout" v-if="!isAdminRoute">
            <RouterView/>
        </component>

        <RouterView v-else/>
</template>
<script setup>
import { computed } from 'vue'
import { useRoute } from 'vue-router'
import Layout from './components/Layout.vue'

const route = useRoute()
const isAdminRoute = computed(() => route.path === '/admin/login')
const currentLayout = computed(() => {
    if(!isAdminRoute.value) {
        return Layout
    }
})
</script>
