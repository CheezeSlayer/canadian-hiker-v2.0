<template>
    <div>
        <div v-if="comments_state.loading_comments">
            <h1>Loading Comments...</h1>
        </div>
        <div v-else class="flex flex-col">
            <div v-for="(comment) in comments" :key="comment.id">
                <div class="w-full m-2 px-2 bg-gray-300 rounded-lg">
                    <div class="flex justify-between">
                        <div class="text-sm px-4">
                            {{ comment.created_at }}
                        </div>
                        <div v-if="user_info && (comment.user_id == user_info.id)" class="flex">
                            <h1 v-if="comment.deleting" class="mx-2">Deleting...</h1>
                            <button :disabled="comments_state.deleting_comments ? 'disabled' : undefined" class="hover:text-red-600 px-4 font-bold outline-none" v-on:click="delete_comment(comment)"> X </button>
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
                    <div v-if="!comments_state.posting_comments && !comments_state.deleting_comments">
                        <textarea v-model="post_data.data.attributes.body" 
                            :disabled="user_info ? undefined : 'disabled'"
                            :placeholder="this.user_info ? '' : 'Log in to post a comment'"
                            class="w-full px-2 placeholder-gray-600 bg-white"></textarea>
                        <button 
                            :disabled="(user_info ? undefined : 'disabled')" 
                            :class="this.user_info ? submit_button_theme : submit_button_theme_disabled" 
                            v-on:click="post_comment()">
                            Submit
                        </button>
                    </div>
                    <div v-else>
                        <textarea
                            disabled="disabled"
                            placeholder="Posting..."
                            class="w-full px-2 placeholder-gray-600 bg-white"></textarea>
                        <button 
                            disabled="disabled" 
                            :class="submit_button_theme_disabled" 
                            v-on:click="post_comment()">
                            Submit
                        </button>
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
            comments_state: {
                loading_comments: true,
                posting_comments: false,
                deleting_comments: false,
            },
            /* Themes */
            submit_button_theme: 'border-solid bg-blue-600 text-white px-2 my-2 outline-none rounded',
            submit_button_theme_disabled: 'border-solid bg-gray-600 text-white px-2 my-2 outline-none rounded'
        }
    },

    props: [
        'blog_name',
    ],

    methods: {
        post_comment: async function() {
            this.comments_state.posting_comments = true;

            this.post_data.data.attributes.blog = this.blog_name
            axios.post(`/api/posts/${this.blog_name}?api_token=${this.user_info.api_token}`, this.post_data)
                .then(response => {
                    setTimeout(2000);
                    this.comment_template.blog = this.blog_name;
                    this.comment_template.body = response.data.data.attributes.body;
                    this.comment_template.created_at = response.data.data.attributes.posted_at.date;
                    this.comment_template.id = response.data.data.id
                    this.comment_template.updated_at = response.data.data.attributes.posted_at.date;
                    this.comment_template.user_id = this.user_info.id;
                    this.comments.push(this.comment_template);
                    this.comment_template = {};

                    this.post_data.data.attributes.body = null;

                    this.comments_state.posting_comments = false;
                    return response;
                })
                .catch(error => {
                    this.comments_state.posting_comments = false;
                    return error;
                })
        },

        delete_comment: async function(comment) {
            this.comments_state.deleting_comments = true;
            this.comments[this.comments.indexOf(comment)].deleting = true;
            axios.delete(`/api/posts/${comment.id}?api_token=${this.user_info.api_token}`)
                .then(response => {
                    setTimeout(2000);
                    this.comments.splice(this.comments.indexOf(comment), 1);

                    this.comments_state.deleting_comments = false;
                    return response
                })
                .catch(error => {
                    this.comments_state.deleting_comments = false;
                    return error
                });
        },

        get_comments: async function(index) {
            this.comments_state.loading_comments = true;

            axios.get(`/api/posts/${this.blog_name}`)
                .then( response => {
                    this.comments = response.data.data;

                    this.comments_state.loading_comments = false;
                    return response;
                })
                .catch(error => {
                    this.comments_state.loading_comments = false;
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