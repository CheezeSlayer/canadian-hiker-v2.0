<template>
    <div>
        <div v-if="loading">
            <h1>Loading Comments...</h1>
        </div>
        <div v-else class="flex flex-col">
            <div v-for="(comment, index) in comments" :key="comment.id">
                <div class="w-full m-2 px-2 bg-gray-300 rounded-lg">
                    <div class="text-sm">
                        {{ comment.created_at }}
                    </div>
                    <div class="text-center p-2">
                        {{ comment.body }}
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h1 class="text-black text-xl">Leave a comment: </h1>
            <div v-if="this.user_logged_in">
                <div v-if="this.posting_comments">
                    <textarea v-model="post_body" class="w-full px-2"></textarea>
                    <button class="border-solid bg-gray-600 text-white px-2 my-2" v-on:click="submit_comment()">Submit</button>
                </div>
            </div>
            <div v-else>
                <textarea disabled class="w-full px-2" placeholder="Log in to post a comment"></textarea>
                <button disabled class="border-solid bg-gray-600 text-white px-2 my-2">Submit</button>
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
            comments: [],
            loading_comments: true,
            posting_comments: false,
        }
    },

    props: [
        'blog_name',
    ],

    methods: {
        post_comment: async function() {
            this.posting_comments = true;
            this.post_data.data.type = 'post',
            this.post_data.data.attributes.body = this.post_body
            this.post_data.data.attributes.blog = this.blog_name
            axios.post(`/api/posts/${this.blog_name}?api_token=${this.user_info.api_token}`, this.post_data)
                .then(response => {
                    this.posting_comments = false;
                    return response;
                })
                .catch(error => {
                    this.posting_comments = false;
                    console.log(error);
                })
        },

        get_comments: async function(index) {
            axios.get(`/api/posts/${this.blog_name}`)
                .then( response => {
                    this.comments = response.data.data;
                    this.loading_comments = false;
                })
                .catch(error => {
                    console.log(error);
                    this.loading_comments = false;
                })
        },

        submit_comment: async function() {
            await this.post_comment()
                .then((response) => {
                    return this.get_comments()
                })
                .then((response) => {
                    console.log('Axios promise chain test: ' + response)
                })
                .catch(error => {
                    console.log(error);
                })
        }
    },

    mounted() {
        this.user_logged_in = this.$store.getters.isLoggedIn
        this.user_info = this.$store.getters.getUserInfo
        this.get_comments();

    }
}
</script>

<style scoped>

</style>