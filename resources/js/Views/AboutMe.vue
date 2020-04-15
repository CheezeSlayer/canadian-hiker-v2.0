<template>
    <div>
        <TopNav navHeader="About Me"></TopNav>
        <div class="flex flex-col items-center">
            <div class="m-6 p-6 flex content-center bg-gray-400 rounded-lg">
                <p>Hello World</p>
            </div>
        </div>
    </div>
</template>

<script>
import TopNav from '../components/TopNav';
export default {
    name: "AboutMe",

    components: {
        TopNav
    }
}
</script>

<style scoped>

</style>