<template>
    <div>
        <TopNav navHeader="where to find me" imgSrc="stmarks.jpg"></TopNav>
        <div class="flex flex-col items-center">
            <div class="lg:w-2/3 mx-6 mt-6 p-6 bg-gray-300 border border-double border-gray-500 rounded-lg">
                <p>
                    For professional inquiries, contact me through LinkedIn.  My personal projects are on Github.  To follow my hiking adventures, visit my Instagram page.  
                </p>
            </div>
            <div class="flex m-6 p-6 rounded-lg">
                <div class="mx-2 lg:mx-6">
                    <a :href="profile.linkedin">
                        <img :src="'../storage/img/icons/linkedin.png'" class="w-12 lg:w-48 rounded-lg">
                        <div class="flex flex-col items-center my-6">
                            <h2 class="text-xs lg:text-lg font-bold">LinkedIn</h2>
                        </div>
                    </a>
                </div>

                <div class="mx-2 lg:mx-6">
                    <a :href="profile.github">
                        <img :src="'../storage/img/icons/github-image.png'" class="w-12 lg:w-48 rounded-lg">
                        <div class="flex flex-col items-center my-6">
                            <h2 class="text-xs lg:text-lg font-bold">Github</h2>
                        </div>
                    </a>
                </div>

                <div class="mx-2 lg:mx-6">
                    <a :href="profile.instagram">
                        <img :src="'../storage/img/icons/instagram.png'" class="w-12 lg:w-48 rounded-lg">
                        <div class="flex flex-col items-center my-6">
                            <h2 class="text-xs lg:text-lg font-bold">Instagram</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-xs">
                Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from 
                <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
            </div>
        </div>
    </div>
</template>

<script>
import TopNav from '../components/TopNav';
export default {
    name: 'Contact',

    data: function() {
        return {
            profile: {
                'linkedin': 'https://www.linkedin.com/in/henry-chang-1732bb19a/',
                'github': 'https://github.com/CheezeSlayer',
                'instagram': 'https://www.instagram.com/canadian.hiker/?hl=en'
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