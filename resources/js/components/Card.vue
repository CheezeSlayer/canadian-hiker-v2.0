<template>
    <div class="m-4 p-2 bg-gray-300 hover:bg-gray-500 rounded-lg">
        <div class="flex flex-col justify-center">
            <div class="flex">
                <div class="font-semibold text-lg py-2 w-2/3 text-left">
                    {{ cardTitle }}
                </div>
                <div class="py-2 w-1/3 text-right">
                    {{ cardDate }}
                </div>
            </div>
            <img :src="'../storage/img/blog/' + cardImg" class="object-cover h-112 w-112 rounded-lg">
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