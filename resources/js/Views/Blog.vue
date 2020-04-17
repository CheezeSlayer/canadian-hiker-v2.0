<template>
    <div>
        <TopNav navHeader="Canadian Hiker"></TopNav>
        <div class="flex justify-center">
            <div class="flex">
                <Card 
                cardImg="9-2018/20180903_082248.jpg" 
                cardTitle="Howe Sound Adventures: Camping and Fishing at Deeks Lake."
                cardDate="September 2-3, 2018">
                </Card>

                <Card 
                cardImg="8-2019/20190804_203050.jpg" 
                cardTitle="Hitting the Tri-lakes at Chilliwack Lake Provincial Park"
                cardDate="August 3-5, 2019">
                </Card>
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