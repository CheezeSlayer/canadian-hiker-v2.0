<template>
    <div>
        <div class="h-screen bg-gray-500">
            <div class="flex">
                <div class="px-6 bg-gray-200 w-48 h-screen border-r-2 border-gray-400">
                    <nav class="pt-4">
                        <router-link to="/">
                            <img :src="'../storage/img/profile.jpg'" class="rounded-full border-solid border-2 border-gray-400">
                            <h1 class="pb-6 text-center text-xl text-gray-600 border-dotted border-b-2 border-gray-600">Henry Chang</h1>
                        </router-link>

                        <router-link to="/" class="flex items-center py-12 text-gray-600 hover:text-gray-900">
                            <svg data-v-8892b924="" viewBox="0 0 16 16" focusable="false" role="img" alt="icon" 
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-person b-icon bi h-8 w-8"><g data-v-8892b924="">
                                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 
                                13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 
                                10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 
                                7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"></path></g></svg>

                            <h1 class="uppercase font-bold mx-auto">About Me</h1>
                        </router-link>

                        <router-link to="/" class="flex items-center py-12 text-gray-600 hover:text-gray-900">
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
                        </router-link>

                        <router-link to="/" class="flex items-center py-12 text-gray-600 hover:text-gray-900">
                            <svg data-v-8892b924="" viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" alt="icon" 
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-inbox b-icon bi h-8 w-8"><g data-v-8892b924="">
                                <path fill-rule="evenodd" d="M3.81 4.063A1.5 1.5 0 014.98 3.5h6.04a1.5 1.5 0 011.17.563l3.7 4.625a.5.5 0 
                                01-.78.624l-3.7-4.624a.5.5 0 00-.39-.188H4.98a.5.5 0 00-.39.188L.89 9.312a.5.5 0 11-.78-.624l3.7-4.625z" 
                                clip-rule="evenodd"></path><path fill-rule="evenodd" d="M.125 8.67A.5.5 0 01.5 8.5H6a.5.5 0 01.5.5 1.5 1.5 
                                0 003 0 .5.5 0 01.5-.5h5.5a.5.5 0 01.496.562l-.39 3.124a1.5 1.5 0 01-1.489 1.314H1.883a1.5 1.5 0 
                                01-1.489-1.314l-.39-3.124a.5.5 0 01.121-.393zm.941.83l.32 2.562a.5.5 0 00.497.438h12.234a.5.5 0 
                                00.496-.438l.32-2.562H10.45a2.5 2.5 0 01-4.9 0H1.066z" clip-rule="evenodd"></path></g></svg>

                            <h1 class="uppercase font-bold mx-auto">Let's Talk</h1>
                        </router-link>

                        <router-link to="/" class="flex items-center py-12 text-gray-600 hover:text-gray-900">
                            <svg data-v-8892b924="" viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" alt="icon" 
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-image b-icon bi h-8 w-8"><g data-v-8892b924="">
                                <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 00-1 1v10a1 1 0 001 1h12a1 1 0 001-1V3a1 1 0 00-1-1zm-12-1a2 
                                2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V3a2 2 0 00-2-2h-12z" clip-rule="evenodd"></path><path d="M10.648 
                                7.646a.5.5 0 01.577-.093L15.002 9.5V14h-14v-2l2.646-2.354a.5.5 0 01.63-.062l2.66 1.773 3.71-3.71z"></path>
                                <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" clip-rule="evenodd"></path></g></svg>

                            <h1 class="uppercase font-bold mx-auto">Photography</h1>
                        </router-link>
                    </nav>
                </div>
            </div>
        </div>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "App",
}
</script>

<style scoped>

</style>