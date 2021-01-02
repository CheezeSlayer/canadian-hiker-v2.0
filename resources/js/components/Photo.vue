<template>
    <div v-lazyloadImg class="flex flex-col">
        <img :data-src="imgSrc"  class="flex-1 object-cover overflow-auto h-112 w-full">
        <table class="table-fixed">
                <tr class="text-sm font-semibold">
                    <td class="w-2/3 text-left">
                        <p class="image-caption text-xs">{{ imgCaption }}</p>
                    </td>
                    <td class="w-1/3 text-right">
                        <p class="image-date text-xs">{{ imgDate }}</p>
                    </td>
                </tr>
        </table>
    </div>
</template>
<script>
export default {
    name: "Photo",

    props: [
        'imgSrc',
        'imgCaption',
        'imgDate'
    ]
}
</script>

<style scoped>
.image-caption, .image-date {
    padding: 0;
    margin: 0;
}
</style>