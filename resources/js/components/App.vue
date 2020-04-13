<template>
    <div>
        <div class="h-screen bg-gray-500">
            <div class="flex">
                <div class="px-6 bg-gray-200 w-48 h-screen border-r-2 border-gray-400">
                    <nav class="pt-4">
                        <router-link to="/">
                            <img :src="'../storage/img/profile.jpg'" class="rounded-full border-solid border-2 border-gray-500">
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