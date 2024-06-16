<script setup>
const props = defineProps({data: Object})
</script>
<template>
    {{JSON.stringify(props.data)}}
</template>

<style scoped>

</style>
