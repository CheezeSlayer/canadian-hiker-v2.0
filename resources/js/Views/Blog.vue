<template>
    <div>
        <TopNav navHeader="Canadian Hiker" imgSrc="mysterylake.jpg"></TopNav>
        <div class="flex justify-center">
            <div class="flex">
                <router-link to="/blog/deeks_lake_2018">
                    <Card 
                    cardImg="9-2018/20180903_082248.jpg" 
                    cardTitle="Howe Sound Adventures: Camping and Fishing at Deeks Lake."
                    cardDate="September 2-3, 2018">
                    </Card>
                </router-link>
                <router-link to="/blog/tri_lakes_adventure_2019">
                    <Card 
                    cardImg="8-2019/20190804_203050.jpg" 
                    cardTitle="Hitting the Tri-lakes at Chilliwack Lake Provincial Park"
                    cardDate="August 3-5, 2019">
                    </Card>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
import TopNav from '../components/TopNav';
import Card from '../components/Card';
export default {
    name: 'Blog',

    components: {
        TopNav,
        Card
    }
}
</script>

<style scoped>

</style>