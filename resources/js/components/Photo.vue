<template>
    <div v-lazyloadImg class="flex flex-col my-6">
        <img :data-src="imgSrc"  class="flex-1 object-cover overflow-auto h-112 w-full">
        <table class="table-fixed">
                <tr class="text-sm font-semibold">
                    <td class="w-2/3 text-left">
                        <p>{{ imgCaption }}</p>
                    </td>
                    <td class="w-1/3 text-right">
                        <p>{{ imgDate }}</p>
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