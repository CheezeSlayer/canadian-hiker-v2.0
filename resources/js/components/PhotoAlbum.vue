<template>
    <div class="">
        <div v-lazyloadImg class="grid gap-4 lg:grid-cols-4">
            <img v-for="(image, index) in albumSrc" v-bind:key="index" :data-src="image" :data-img="album_name + index" 
            class="place-self-center border-gray-300">
        </div>
    </div>
</template>

<script>

export default {
    name: "PhotoAlbum",

    props: {
        albumSrc: Array,
        albumCaption: String,
        albumDate: String,
        album_name: String
    },
}
</script>

<style scoped>
</style>