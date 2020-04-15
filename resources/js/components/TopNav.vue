<template>
    <div class="h-24 p-2 border-b border-gray-400 flex flex-col items-center">
        <h1 class="text-4xl">{{ navHeader }}</h1>
    </div>
</template>

<script>
export default {
    name: "TopNav",
    
    props: [
        'navHeader'
    ],
}
</script>

<style scoped>

</style>