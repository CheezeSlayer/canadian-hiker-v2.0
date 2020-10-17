<template>
    <div class="flex flex-col my-6">
        <img :src="'../storage/img/blog/9-2018/' + imgSrc"  class="object-cover h-112 w-full">
        <div class="flex justify-between text-sm font-semibold">
            <p>imgCaption</p>
            <p>imgDate</p>
        </div>
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