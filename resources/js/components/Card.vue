<template>
    <div class="max-w-sm rounded overflow-hidden shadow-2xl m-4 bg-gray-300 hover:bg-gray-500 border border-double border-gray-500">
        <img class="object-cover h-96 w-96" :src="'../storage/img/blog/' + cardImg">
        <div class="px-6 py-4">
            <div class="text-lg sm:text-xl mb-2 card-title">{{ cardTitle }}</div>
            <p class="text-gray-700 text-base">
                {{ cardDate }}
            </p>
        </div>
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
.card-title {
    font-family: 'Playfaire Display'
}
</style>