<template>
    <div>
        <div class="h-64 sm:h-112 flex flex-col items-center justify-center bg-cover bg-center relative shadow-2xl" 
        :style="'background-image: url(../storage/img/banner/' + imgSrc">
            <h1 class="absolute sm:top-0 text-white text-xl sm:text-6xl sm:m-20 px-5 pb-20 z-20 tracking-wider">{{ navHeader }}</h1>
            <div class="absolute bg-cover bg-black opacity-25 h-full w-full z-10"></div>
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