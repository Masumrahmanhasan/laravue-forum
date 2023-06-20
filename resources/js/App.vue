
<template>
        <component :is="currentLayout">
            <RouterView/>
        </component>
</template>
<script setup>
import { computed } from 'vue'
import { useRoute } from 'vue-router'
import Layout from './components/Layout.vue'
const route = useRoute()
const currentLayout = computed(() => {
    if(route.path !== '/admin/login') {
        return Layout
    }
    return '';
})
</script>
