<template>
    <div>
        <div class="bg-gray-200">
            <div class="py-5">
                <div class="flex flex-col flex-1">
                    <div class="pb-5 flex justify-center" id="navbar">
                        <table>
                            <tr>
                                <td>
                                    <router-link to="/blog" class="flex text-gray-600 hover:text-gray-900 pr-5">
                                        <h1 class="uppercase font-medium">Home</h1>
                                    </router-link>
                                </td>
                                <td>
                                    <router-link to="/about" class="flex text-gray-600 hover:text-gray-900 pr-5">
                                        <h1 class="uppercase font-medium mx-auto">About</h1>
                                    </router-link>
                                </td>
                                <td>
                                    <router-link to="/contact" class="flex text-gray-600 hover:text-gray-900">
                                        <h1 class="uppercase font-medium mx-auto">Contact</h1>
                                    </router-link>
                                </td>
                                <!-- <td>
                                    <router-link to="/login" class="flex text-gray-600 hover:text-gray-900 pr-5">
                                        <h1 class="uppercase font-medium mx-auto">Login</h1>
                                    </router-link>
                                </td>
                                <td>
                                    <router-link to="/signup" class="flex text-gray-600 hover:text-gray-900">
                                        <h1 class="uppercase font-medium mx-auto">Sign Up</h1>
                                    </router-link>
                                </td> -->
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
    
</style>