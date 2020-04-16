<template>
    <div>
        <TopNav navHeader="Where to Find Me"></TopNav>
        <div class="flex flex-col items-center">
            <div class="mx-6 mt-6 p-6 w-1/3 bg-gray-300 rounded-lg">
                <p>
                    For professional inquiries, contact me through LinkedIn.  My personal projects are on Github.  To follow my hiking adventures, visit my Instagram page.  
                </p>
            </div>
            <div class="flex m-6 p-6 w-2/3 content-center bg-gray-300 rounded-lg justify-between">
                <div class="flex flex-col items-center m-2">
                    <a :href="profile.linkedin" class="border rounded-lg hover:border-2 hover:border-black">
                        <img :src="'../storage/img/icons/linkedin.png'" class="m-2 object-contain h-48 rounded-lg">
                        <div class="flex flex-col items-center">
                            <h2 class="text-lg font-bold">LinkedIn</h2>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col items-center m-2">
                    <a :href="profile.github" class="border rounded-lg hover:border-2 hover:border-black">
                        <img :src="'../storage/img/icons/github-image.png'" class="m-2 object-contain h-48 rounded-lg">
                        <div class="flex flex-col items-center">
                            <h2 class="text-lg font-bold">Github</h2>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col items-center m-2">
                    <a :href="profile.instagram" class="border rounded-lg hover:border-2 hover:border-black">
                        <img :src="'../storage/img/icons/instagram.png'" class="m-2 object-contain h-48 rounded-lg">
                        <div class="flex flex-col items-center">
                            <h2 class="text-lg font-bold">Instagram</h2>
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