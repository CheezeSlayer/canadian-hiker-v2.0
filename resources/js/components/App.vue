<template>
    <div>
        <div class="h-screen bg-gray-400">
            <div class="flex">
                <div class="px-6 bg-gray-200 w-56 h-screen border-r-2">
                    <nav class="pt-4">
                        <router-link to="/">
                            <img :src="'../storage/img/profile.jpg'" class="rounded-full border-solid border-2 border-gray-400">
                            <h1 class="pb-6 text-center text-xl text-gray-600 border-dotted border-b-2 border-gray-600">Henry Chang</h1>
                        </router-link>

                        <router-link to="/about" class="flex items-center py-12 text-gray-600 hover:text-gray-900">
                            <svg data-v-8892b924="" viewBox="0 0 16 16" focusable="false" role="img" alt="icon" 
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-person b-icon bi h-8 w-8"><g data-v-8892b924="">
                                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 
                                13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 
                                10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 
                                7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"></path></g></svg>

                            <h1 class="uppercase font-bold mx-auto">About Me</h1>
                        </router-link>
                    
                        <!-- <router-link to="/" class="flex items-center py-12 text-gray-600 hover:text-gray-900">
                            <svg data-v-8892b924="" viewBox="0 0 16 16" focusable="false" role="img" alt="icon" 
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-book b-icon bi h-8 w-8"><g data-v-8892b924="">
                                <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 018.5 2.5v11a.5.5 0 
                                01-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 010 13.5v-11a.5.5 0 
                                01.276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 01.22-.103 12.958 12.958 0 
                                012.7-.869zM1 2.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 
                                3.426.56V2.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 001 2.82z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 007.5 2.5v11a.5.5 0 
                                00.854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0016 13.5v-11a.5.5 0 
                                00-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 00-.799-.34 
                                12.96 12.96 0 00-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 
                                2.631-.956 4.09-.664A11.956 11.956 0 0115 2.82z" clip-rule="evenodd"></path></g></svg>

                            <h1 class="uppercase font-bold mx-auto">Education</h1>
                        </router-link> -->
                       
                        <router-link to="/contact" class="flex items-center py-12 text-gray-600 hover:text-gray-900">
                            <svg data-v-8892b924="" viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" alt="icon" 
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-envelope b-icon bi h-8 w-8"><g data-v-8892b924="">
                                <path fill-rule="evenodd" d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 
                                2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M.071 
                                4.243a.5.5 0 01.686-.172L8 8.417l7.243-4.346a.5.5 0 01.514.858L8 9.583.243 4.93a.5.5 0 01-.172-.686z" clip-rule="evenodd">
                                </path><path d="M6.752 8.932l.432-.252-.504-.864-.432.252.504.864zm-6 3.5l6-3.5-.504-.864-6 
                                3.5.504.864zm8.496-3.5l-.432-.252.504-.864.432.252-.504.864zm6 3.5l-6-3.5.504-.864 6 3.5-.504.864z"></path></g></svg>

                            <h1 class="uppercase font-bold mx-auto">Contact</h1>
                        </router-link>
                    
                        <router-link to="/blog" class="flex items-center py-12 text-gray-600 hover:text-gray-900">
                            <svg data-v-8892b924="" viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" alt="icon" 
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-image b-icon bi h-8 w-8"><g data-v-8892b924="">
                                <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 00-1 1v10a1 1 0 001 1h12a1 1 0 001-1V3a1 1 0 00-1-1zm-12-1a2 
                                2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V3a2 2 0 00-2-2h-12z" clip-rule="evenodd"></path><path d="M10.648 
                                7.646a.5.5 0 01.577-.093L15.002 9.5V14h-14v-2l2.646-2.354a.5.5 0 01.63-.062l2.66 1.773 3.71-3.71z"></path>
                                <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" clip-rule="evenodd"></path></g></svg>

                            <h1 class="uppercase font-bold mx-auto">Blog</h1>
                        </router-link>

                        <router-link v-if="this.user" to="/logout" class="flex items-center py-12 text-gray-600 hover:text-gray-900">
                            <svg data-v-8892b924="" viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" alt="icon" 
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-box-arrow-left b-icon bi h-8 w-8"><g data-v-8892b924="">
                                <path fill-rule="evenodd" d="M4.354 11.354a.5.5 0 000-.708L1.707 8l2.647-2.646a.5.5 0 10-.708-.708l-3 3a.5.5 0 000 
                                .708l3 3a.5.5 0 00.708 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M11.5 8a.5.5 0 00-.5-.5H2a.5.5 
                                0 000 1h9a.5.5 0 00.5-.5z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M14 13.5a1.5 1.5 0 001.5-1.5V4A1.5 
                                1.5 0 0014 2.5H7A1.5 1.5 0 005.5 4v1.5a.5.5 0 001 0V4a.5.5 0 01.5-.5h7a.5.5 0 01.5.5v8a.5.5 0 01-.5.5H7a.5.5 0 
                                01-.5-.5v-1.5a.5.5 0 00-1 0V12A1.5 1.5 0 007 13.5h7z" clip-rule="evenodd"></path></g></svg>

                            <h1 class="uppercase font-bold mx-auto">Logout</h1>
                        </router-link>
                        <div v-else>
                            <router-link to="/login" class="flex items-center pt-12 text-gray-600 hover:text-gray-900">
                                <svg data-v-8892b924="" viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" alt="icon" 
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-box-arrow-left b-icon bi h-8 w-8"><g data-v-8892b924="">
                                    <path fill-rule="evenodd" d="M4.354 11.354a.5.5 0 000-.708L1.707 8l2.647-2.646a.5.5 0 10-.708-.708l-3 3a.5.5 0 000 
                                    .708l3 3a.5.5 0 00.708 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M11.5 8a.5.5 0 00-.5-.5H2a.5.5 
                                    0 000 1h9a.5.5 0 00.5-.5z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M14 13.5a1.5 1.5 0 001.5-1.5V4A1.5 
                                    1.5 0 0014 2.5H7A1.5 1.5 0 005.5 4v1.5a.5.5 0 001 0V4a.5.5 0 01.5-.5h7a.5.5 0 01.5.5v8a.5.5 0 01-.5.5H7a.5.5 0 
                                    01-.5-.5v-1.5a.5.5 0 00-1 0V12A1.5 1.5 0 007 13.5h7z" clip-rule="evenodd"></path></g></svg>

                                <h1 class="uppercase font-bold mx-auto">Login</h1>
                            </router-link>
                            <router-link to="/signup" class="flex items-center pt-6 text-gray-600 hover:text-gray-900">
                                <svg data-v-8892b924="" viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" alt="icon" 
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-person-plus b-icon bi h-8 w-8"><g data-v-8892b924="">
                                    <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 
                                    0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 
                                    1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM6 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 
                                    0zm4.5 0a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V5.5a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd" d="M13 7.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"></path></g></svg>

                                <h1 class="uppercase font-bold mx-auto">Sign Up</h1>
                            </router-link>
                        </div>
                    </nav>
                </div>

                <div class="flex flex-col flex-1 h-screen overflow-y-hidden">
                    <div class="flex flex-col overflow-y-hidden flex-1">
                        <transition name="fade">
                            <router-view class="p-6 overflow-x-hidden"></router-view>
                        </transition>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</template>

<script>
export default {
    name: "App",

    props: [
        'user'
    ],
    created() {
        console.log(this.user);
    }
}
</script>

<style scoped>
    .fade-enter-active {
        transition: opacity 0.5s;
    }

    .fade-enter, .fade-leave-to {
        opacity: 0;
    }
</style>