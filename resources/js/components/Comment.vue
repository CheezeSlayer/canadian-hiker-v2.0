<template>
    <div>
        <div>
            <h1 class="text-black text-xl">Leave a comment: </h1>
            <div v-if="this.user_logged_in">
                <textarea v-model="post_body" class="w-full px-2"></textarea>
                <button class="border-solid bg-gray-600 text-white px-2 my-2" v-on:click="post_comment()">Submit</button>
            </div>
            <div v-else>
                <textarea disabled class="w-full px-2" placeholder="Must be logged in to leave a comment"></textarea>
                <button disabled class="border-solid bg-gray-600 text-white px-2 my-2" v-on:click="post_comment()">Submit</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Comment',

    data: function() {
        return {
            user_logged_in: false,
            user_info: '',
            post_data: {
                data: {
                    type: 'post',
                    attributes: {
                        body: '',
                        blog: ''
                    }
                }
            },
            post_body: '',
            loading: false
        }
    },

    props: [
        'blog_name',
    ],

    methods: {
        post_comment: function() {
            this.loading = true;
            this.post_data.data.type = 'post',
            this.post_data.data.attributes.body = this.post_body
            this.post_data.data.attributes.blog = this.blog_name
            axios.post(`/api/posts/${this.blog_name}?api_token=${this.user_info.api_token}`, this.post_data)
                .then(response => {
                    return response;
                })
                .catch(error => {
                    console.log(error);
                })
        }
    },

    mounted() {
        this.user_logged_in = this.$store.getters.isLoggedIn
        this.user_info = this.$store.getters.getUserInfo
    }
}
</script>

<style scoped>

</style>