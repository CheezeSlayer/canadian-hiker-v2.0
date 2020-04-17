<template>
    <div class="m-4 p-2 hover:bg-gray-500 rounded-lg">
        <div class="flex flex-col">
            <img :src="'../storage/img/blog/' + cardImg" class="object-cover h-112 w-112">
            <div class="font-semibold text-lg pt-2">
                {{ cardTitle }}
            </div>
            <div class="pt-2">
                {{ cardDate }}
            </div>
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

</style>