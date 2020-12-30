<template>
    <div class="flex flex-col my-6 w-full">
        <div class="relative flex items-center justify-center">
            <div class="flex absolute w-full justify-between">
                <a id="leftBtn" class="text-5xl p-10 font-bold text-white cursor-pointer" v-on:click="scroll_left()">
                    &#10094;
                </a>
                <a id="rightBtn" class="text-5xl p-10 font-bold text-white cursor-pointer" v-on:click="scroll_right()">
                    &#10095;
                </a>
            </div>
            <div v-lazyloadImg class="flex justify-between overflow-hidden" :id="album_name">
                <img v-for="image in albumSrc" v-bind:key="image" :data-src="image" class="object-scale-down mr-1 h-112">
            </div>
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
        albumDate: String,
        album_name: String
    },

    methods: {
        scroll_left() {
            let content = document.querySelector(`#${this.album_name}`);
            let imgs = Array.from(content.childNodes);
            let scroll_position = content.scrollLeft / (content.scrollWidth - content.clientWidth)
            if(scroll_position > 0) {
                for(var i = imgs.length - 1; i > 0; i--) {
                    if(imgs[i].getBoundingClientRect().x <= content.clientWidth) {
                        let slideWidth = content.scrollLeft - imgs[i].width
                        $(content).animate({ scrollLeft: slideWidth }, 500)
                        return;
                    }
                }
            }
        },

        scroll_right() {
            let content = document.querySelector(`#${this.album_name}`);
            let imgs = Array.from(content.childNodes);
            let scroll_position = content.scrollLeft / (content.scrollWidth - content.clientWidth)
            if(scroll_position < 1) {
                for(var i = 0; i < imgs.length; i++) {
                    if(imgs[i].getBoundingClientRect().x > 0) {
                        let slideWidth = content.scrollLeft + imgs[i].width
                        $(content).animate({ scrollLeft: slideWidth }, 500)
                        return;
                    }
                }
            }
        }
    }
}
</script>

<style scoped>
#leftBtn, #rightBtn {
  background-color: rgba(0,0,0,0.5);
  transition: 0.6s ease;
}

#leftBtn:hover, #rightBtn:hover {
  background-color: rgba(0,0,0,0.8);
  transition: 0.6s ease;
}
</style>