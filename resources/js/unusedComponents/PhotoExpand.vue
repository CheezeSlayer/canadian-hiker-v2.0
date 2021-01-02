<template>
    <div class="flex relative">
        <div class="expandable-image" :class="{expanded: expand}">
            <img v-on:click="expanded = true" :src="photoSrc">
            <i v-if="expanded" class="close-button">
                <svg style="width:24px; height:24px" viewBox="0 0 24 24">
                    <path fill="#666666" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
                </svg>
            </i>
            <i v-if="!expanded" class="expand-button">
                <svg style="width:24px; height:24px" viewBox="0 0 24 24">
                    <path fill="#000000" d="M10,21V19H6.41L10.91,14.5L9.5,13.09L5,17.59V14H3V21H10M14.5,10.91L19,6.41V10H21V3H14V5H17.59L13.09,9.5L14.5,10.91Z" />
                </svg>
            </i>
        </div>
    </div>
</template>


<script>
export default {
    name: "PhotoExpand",

    data() {
        return {
            expanded: false,
            closeButtonRef: null
        }
    },

    props: {
        photoSrc: String,
        photoCaption: String,
    },

    methods: {
        closeImage(event) {
            this.expanded = false;
        },

        freezeVp(event) {
            event.preventDefault();
        }
    },

    watch: {
        expanded: function(status) {
            console.log(status)
            this.$nextTick(() => {
                try {
                    if(status) {
                        this.cloned = this.$el.cloneNode(true)
                        this.closeButtonRef = this.cloned.querySelector('.close-button')
                        this.closeButtonRef.addEventListener('click', this.closeImage)
                        document.body.style.backgroundColor = "black";
                        document.body.appendChild(this.cloned)
                        this.cloned.addEventListener('touchmove', this.freezeVp, false);
                    } else {
                        this.cloned.style.opacity = 0
                        this.cloned.addEventListener('touchmove', this.freezeVp, false);
                        setTimeout(() => {
                            this.closeButtonRef.removeEventListener('click', this.closeImage)
                            this.cloned.remove()
                            this.cloned = null
                            this.closeButtonRef = null
                            document.body.style.overflow = 'auto'
                        }, 250)
                    }
                } catch(error) {
                    console.log(error)
                }
            })
        }
    },

    mounted: function() {
        const viewportMeta = document.createElement('meta')
        viewportMeta.name = 'viewport'
        viewportMeta.content = 'width=device-width, initial-scale=1'
        document.head.appendChild(viewportMeta)
    }
}
</script>

<style scoped>
body {
    background-color: black;
}
.expand-button {
  position: absolute;
  z-index: 10;
  right: 10px;
  top: 10px;
  opacity: 0;
  transition: 0.2s opacity;
}

.expandable-image {
  position: relative;
  transition: 0.25s opacity;
  cursor: zoom-in;
}

.expandable-image:hover .expand-button {
  opacity: 1;
}

.close-button {
  position: absolute;
  z-index: 10;
  right: 10px;
  top: 10px;
  opacity: 0;
  transition: 0.2s opacity;
}

.expandable-image:hover .close-button {
  opacity: 1;
}
</style>