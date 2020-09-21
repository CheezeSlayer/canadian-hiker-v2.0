<template>
    <div>
        <div class="h-screen bg-gray-200 overflow-auto">
            <div class="px-10 py-5">
                <div class="flex flex-col flex-1">
                    <div class="z-10 pb-5">
                        <table>
                            <tr>
                                <td>
                                    <router-link to="/blog" class="flex items-center text-gray-600 hover:text-gray-900 pr-5">
                                        <h1 class="uppercase font-bold mx-auto">Home</h1>
                                    </router-link>
                                </td>
                                <td>
                                    <router-link to="/about" class="flex items-center text-gray-600 hover:text-gray-900 pr-5">
                                        <h1 class="uppercase font-bold mx-auto">About</h1>
                                    </router-link>
                                </td>
                                <td>
                                    <router-link to="/contact" class="flex items-center text-gray-600 hover:text-gray-900 pr-5">
                                        <h1 class="uppercase font-bold mx-auto">Contact</h1>
                                    </router-link>
                                </td>
                                <td>
                                    <router-link to="/login" class="flex items-center text-gray-600 hover:text-gray-900 pr-5">
                                        <h1 class="uppercase font-bold mx-auto">Login</h1>
                                    </router-link>
                                </td>
                                <td>
                                    <router-link to="/signup" class="flex items-center text-gray-600 hover:text-gray-900">
                                        <h1 class="uppercase font-bold mx-auto">Sign Up</h1>
                                    </router-link>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="flex flex-col flex-1">
                        <transition name="fade">
                            <router-view></router-view>
                        </transition>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</template>

<script>
export default {
    name: "App",

    props: [
        'user'
    ],

    data: function () {
        return {
            title: '',
            user_logged_in: 'false',
        }
    },

    watch: {
        $route(to, from) {
            this.title = to.meta.title;
        },

        title() {
            document.title = 'Canadian Hiker | ' + this.title
        }
    },

    created() {
        this.title = this.$route.meta.title;
        this.$store.commit('setAuthUser', window.auth_user);
        this.user_logged_in = this.$store.getters.isLoggedIn;
        console.log(this.user_logged_in);
    }
}
</script>

<style scoped>
    .fade-enter-active {
        transition: opacity 0.5s;
    }

    .fade-enter, .fade-leave-to {
        opacity: 0;
    }
</style>