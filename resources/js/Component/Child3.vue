<script setup>
import { usePage } from '@inertiajs/vue3'
const page = usePage()
</script>
<template>
    <h1>From Child Component</h1>
    <h6>Message: {{page.props.message}}</h6>
    <h6>Status: {{page.props.status}}</h6>
    <h6>Shared Data: {{page.props.share_data}}</h6>
</template>
