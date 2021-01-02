<template>
    <div class="flex flex-col my-6 w-full">
        <div class="relative flex items-center justify-center">
            <transition name="fade">
                <div v-on:load="detect_overflow()">
                    <a id="leftBtn" class="text-5xl p-2 font-bold text-white cursor-pointer" v-on:click="scroll_left()">
                        &#10094;
                    </a>
                </div>
            </transition>
            <div v-lazyloadImg class="flex justify-between overflow-hidden w-full" :id="album_name">
                <img v-for="(image, index) in albumSrc" v-bind:key="index" :data-src="image" :data-img="album_name + index" class="object-scale-down mr-1 h-112">
            </div>
            <transition name="fade">
                <div v-on:load="detect_overflow()">
                    <a id="rightBtn" class="text-5xl p-2 font-bold text-white cursor-pointer" v-on:click="scroll_right()">
                        &#10095;
                    </a>
                </div>
            </transition>
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

    data: {
        overflow_status: false
    },

    methods: {
        detect_overflow() {
            let album = document.querySelector(`#${this.album_name}`)
            let imgs = Array.from(album.childNodes);

            imgs[imgs.length - 1].addEventListener("load", function() {
                console.log("Image has Loaded")

                let content = imgs[imgs.length - 1].getBoundingClientRect()
                if (content.right > album.scrollWidth) {
                    console.log('Overflow Detected');
                } else {
                    console.log('No Overflow Detected');
                    document.querySelector('#rightBtn').style.display = "none"
                    document.querySelector('#leftBtn').style.display = "none"
                }
            })
        },

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
    },

    created() {
        
    }
}
</script>

<style scoped>

.fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
}

#leftBtn, #rightBtn {
  background-color: rgba(0,0,0,0.5);
}

#leftBtn:hover, #rightBtn:hover {
  background-color: rgba(0,0,0,0.8);
  transition: 0.6s ease;
}
</style>