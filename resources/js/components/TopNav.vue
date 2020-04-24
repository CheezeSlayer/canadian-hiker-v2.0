<template>
    <div class="h-96 border-b-2 border-gray-500 flex flex-col items-center justify-center bg-cover bg-center relative" 
    :style="'background-image: url(../storage/img/banner/' + imgSrc">
        <h1 class="text-6xl font-bold text-white absolute z-20 px-6">{{ navHeader }}</h1>
        <div class="bg-black bg-cover opacity-25 h-full w-full z-10"></div>
    </div>
</template>

<script>
export default {
    name: "TopNav",
    
    props: [
        'navHeader',
        'imgSrc'
    ],
}
</script>

<style scoped>

</style>