<template>
    <div>
        <div class="h-112 flex flex-col items-center justify-center bg-cover bg-center relative shadow-2xl" 
        :style="'background-image: url(../storage/img/banner/' + imgSrc">
            <h1 class="absolute top-0 text-6xl font-bold text-white m-20 z-20 tracking-wider">{{ navHeader }}</h1>
            <div class="absolute bg-cover bg-black opacity-25 h-full w-full z-10"></div>
        </div>
        <div class="py-5 ">
            
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