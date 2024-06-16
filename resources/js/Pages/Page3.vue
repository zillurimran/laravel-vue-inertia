<script setup>
import NavBar from "@/Component/NavBar.vue";
import { usePage } from '@inertiajs/vue3'
import Child3 from "../Component/Child3.vue";
const page = usePage()
</script>

<template>
    <NavBar/>
    <h1>From Parent Component</h1>
    <h6>Message: {{page.props.message}}</h6>
    <h6>Status: {{page.props.status}}</h6>
    <h6>Shared Data: {{page.props.share_data}}</h6>
    <Child3/>
</template>
