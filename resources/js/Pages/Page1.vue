<script setup>
import NavBar from "@/Component/NavBar.vue";
import Child1 from "@/Component/Child1.vue";
const props = defineProps({data: Object})
</script>
<template>
    <NavBar/>
    <Child1 :data="props.data"/>
</template>

<style scoped>

</style>
