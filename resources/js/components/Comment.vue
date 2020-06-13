<template>
    <div>
        <div v-if="loading_comments">
            <h1>Loading Comments...</h1>
        </div>
        <div v-else class="flex flex-col">
            <div v-for="(comment) in comments" :key="comment.id">
                <div class="w-full m-2 px-2 bg-gray-300 rounded-lg">
                    <div class="flex justify-between">
                        <div class="text-sm px-4">
                            {{ comment.created_at }}
                        </div>
                        <div v-if="comment.user_id == user_info.id">
                            <button class="hover:text-red-600 px-4 outline-none" v-on:click="delete_comment(comment)"> x </button>
                        </div>
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
                <div>
                    <textarea v-model="post_data.data.attributes.body" class="w-full px-2"></textarea>
                    <button class="border-solid bg-gray-600 text-white px-2 my-2 outline-none" v-on:click="post_comment()">Submit</button>
                </div>
            </div>
            <div v-else>
                <textarea disabled class="w-full px-2" placeholder="Log in to post a comment"></textarea>
                <button disabled class="border-solid bg-gray-600 text-white px-2 my-2 outline-none">Submit</button>
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
            comment_template: {
                blog: '',
                body: '',
                created_at: '',
                id: '',
                updated_at: '',
                user_id: ''
            },
            loading_comments: true,
            post_error: false,
        }
    },

    props: [
        'blog_name',
    ],

    methods: {
        post_comment: async function() {
            this.post_data.data.attributes.blog = this.blog_name
            if(this.post_data.data.attributes.body == '') {
                post_error = true
                return
            }
            axios.post(`/api/posts/${this.blog_name}?api_token=${this.user_info.api_token}`, this.post_data)
                .then(response => {
                    console.log(response)
                    this.comment_template.blog = this.blog_name;
                    this.comment_template.body = response.data.data.attributes.body;
                    this.comment_template.created_at = response.data.data.attributes.posted_at.date;
                    this.comment_template.id = response.data.data.id
                    this.comment_template.updated_at = response.data.data.attributes.posted_at.date;
                    this.comment_template.user_id = this.user_info.id;

                    this.comments.push(this.comment_template);
                    console.log(this.comments);
                    return response;
                })
                .catch(error => {
                    console.log(error);
                })
        },

        delete_comment: async function(comment) {
            console.log(comment.user_id == this.user_info.id)
            axios.delete(`/api/posts/${comment.id}?api_token=${this.user_info.api_token}`)
                .then(response => {
                    this.comments.splice(comment);
                    return response
                })
                .catch(error => {
                    console.log(error)
                    return error
                });
        },

        get_comments: async function(index) {
            axios.get(`/api/posts/${this.blog_name}`)
                .then( response => {
                    this.comments = response.data.data;
                    this.loading_comments = false;
                    return response;
                })
                .catch(error => {
                    console.log(error);
                    this.loading_comments = false;
                    return error;
                })
        }
    },

    created() {
        this.user_logged_in = this.$store.getters.isLoggedIn
        this.user_info = this.$store.getters.getUserInfo
        this.get_comments();

    }
}
</script>

<style scoped>

</style>