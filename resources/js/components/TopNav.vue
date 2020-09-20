<template>
    <div>
        <div class="h-96 flex flex-col items-center justify-center bg-cover bg-center relative" 
        :style="'background-image: url(../storage/img/banner/' + imgSrc">
            <!-- <div class="bg-cover opacity-25 h-full w-full z-10"></div> -->
        </div>
        <div class="bg-gray-300 py-5 shadow-xl">
            <h1 class="text-4xl text-center font-bold text-gray-800 mx-20">{{ navHeader }}</h1>
        </div>
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