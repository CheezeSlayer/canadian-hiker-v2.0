<template>
    <!-- <div class="m-4 p-2 bg-gray-300 hover:bg-gray-500 rounded-lg border-2 border-solid border-gray-500">
        <div class="flex flex-col justify-center">
            <div class="flex">
                <div class="font-semibold text-lg py-2 w-2/3 text-left">
                    {{ cardTitle }}
                </div>
                <div class="py-2 w-1/3 text-right">
                    {{ cardDate }}
                </div>
            </div>
            <img :src="'../storage/img/blog/' + cardImg" class="object-cover h-96 w-96 rounded-lg">
        </div>
    </div>  -->
    <div class="max-w-sm rounded overflow-hidden shadow-2xl m-4 bg-gray-300 hover:bg-gray-500 border border-double border-gray-500">
        <img class="object-cover h-96 w-96" :src="'../storage/img/blog/' + cardImg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ cardTitle }}</div>
            <p class="text-gray-700 text-base">
                {{ cardDate }}
            </p>
        </div>
        <!-- <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div> -->
    </div>
</template>

<script>
export default {
    name: 'Card',

    props: [
        'cardImg',
        'cardTitle',
        'cardDate',
    ]
}
</script>

<style scoped>

</style>