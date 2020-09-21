<template>
    <div>
        <TopNav navHeader="about me" imgSrc="grousemtn.jpg"></TopNav>
        <div class="flex flex-col items-center">
            <div class="m-6 p-6 flex content-center rounded-lg items-center">
                <img :src="'../storage/img/about-me.jpg'" class="m-2 object-contain h-96 rounded-lg">
                <p class="text-lg m-2">My name is Henry Chang and I am a computer programmer with experience in web development and testing.  
                    I am based in Vancouver, British Columbia and have lived in Canada all my life.
                     When I am not sitting infront of a computer, I can hopefully be found trekking the outback, hiking ontop one 
                     of British Columbia's many glorious mountains 
                     <br>
                     <br>
                     This simple web app is created and maintained by me using 
                     <a :href="links.laravel" class="font-medium text-blue-500 hover:underline hover:text-blue-800">Laravel</a> with 
                     <a :href="links.vue" class="font-medium text-blue-500 hover:underline hover:text-blue-800">Vue.js</a> and 
                     <a :href="links.tailwind" class="font-medium text-blue-500 hover:underline hover:text-blue-800">Tailwind CSS</a>.  
                     Here, you can find more about me and links to other projects I've been working on.  
                </p>
            </div>
        </div>
    </div>
</template>

<script>
import TopNav from '../components/TopNav';
export default {
    name: 'AboutMe',

    data: function() {
        return {
            links: {
                'laravel': 'https://laravel.com/',
                'vue': 'https://vuejs.org/',
                'tailwind': 'https://tailwindcss.com/'
            }
        }
    },

    components: {
        TopNav
    }
}
</script>

<style scoped>

</style>