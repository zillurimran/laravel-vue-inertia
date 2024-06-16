<script setup>
import NavBar from "@/Component/NavBar.vue";
import { Head } from '@inertiajs/vue3'
const props = defineProps({meta: Object})
</script>

<template>
    <NavBar/>
    <Head>
        <title>{{props.meta.title}}</title>
        <meta name="description" content="{{props.meta.description}}">
    </Head>
    <h1>Page5</h1>
</template>

<style scoped>

</style>
