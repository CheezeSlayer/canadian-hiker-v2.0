<template>
    <div class="flex flex-col my-6 w-full">
        <div v-lazyloadImg class="flex justify-between overflow-auto">
            <img v-for="image in albumSrc" v-bind:key="image" :data-src="image" class="object-scale-down m-1 h-112">
        </div>
        <div class="flex justify-between">
            <table class="text-sm font-semibold w-full">
                <tr>
                    <td class="w-2/3">
                        <p>{{ albumCaption }}</p>
                    </td>
                    <td class="w-1/3 text-right right-0">
                        <p>{{ albumDate }}</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</template>
<script>
export default {
    name: "PhotoAlbum",

    props: {
        albumSrc: Array,
        albumCaption: String,
        albumDate: String
    }
}
</script>