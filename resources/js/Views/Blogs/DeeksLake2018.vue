<template>
    <div>
        <TopNav navHeader="How Sound Adventures:  Camping and Fishing at Deeks Lake"></TopNav>
        <div class="flex justify-center">
           <div class="flex flex-col p-6 w-full text-lg tracking-wide leading-10">
                <p>
                    The North Shore Mountains has always been a marvel of beauty.  
                    During my lunch breaks I would frequent the waterfront of Coal Harbour 
                    and gaze upon the humbling majesty of those rocky giants overlooking Greater Vancouver; 
                    an experience surpassed only by exploring every trail, summit,
                    nook and cranny that these mountains offered to folks of adventurous spirit.  
                    For within the glorious outback hides a sprawl of trails old and new, leading to treasures of 
                    lakes, creeks, waterfalls, and peaks of unparalleled beauty.  A sanctuary diverse in various 
                    forms fish, birds, animals, insects and plants alike, hidden away from the noise and fumes of industry.  
                </p>
                <div class="flex flex-col my-6">
                    <img :src="'../storage/img/blog/9-2018/coal_harbour.jpg'"  class="object-cover h-112 w-full">
                    <div class="flex justify-between text-sm font-semibold">
                        <p>The North Shore Mountains as seen from Coal Harbour</p>
                        <p>May 7, 2019</p>
                    </div>
                </div>
                <p>
                    One of these trails is the Howe Sound Crest Trail.  Boasting a length of roughly 29 km, 
                    this trail stretches northwards from Cypress Bowl to Porteau Cove along the Sea-to-Sky 
                    Highway and passes through various notable landmarks such as The Lions and Brunswick Mountain.  
                    Just a little due south of the Porteau Cove trailhead is Deeks Lake, the site of my first 
                    backpacking trip ever in British Columbia among the North Shore Mountains.  
                <br><br>
                    I set off with my fellow friends and adventurers Jamie and Derek on September 2, the start of 
                    the Labour Day long weekend and arrived at the Porteau Cove trailhead sometime around 8 AM.  
                    By then the sun was already shining up high giving off a warmth that would soon boil into a 
                    sweltering heat as the day went on.  Our cohort headed south following the Deeks Creek Trail; a gradual uphill for about 2 hours.  
                    The path eventually came across a turnoff marked by a sign connecting eastwards to the 
                    Howe Sound Crest Trail (HSCT). The path became significantly steeper on the HSCT with a lot of loose 
                    rocks which impeded our progress, in an ordeal that was exacerbated by our heavy backpacks and equipment.  
                    Despite the grueling trial, we encountered various viewpoints for a worthwhile stop and breather 
                    offering magnificent views of the Howe Sound.  It would be another 3 hours before we finally reached the banks of Deeks Lake. 
                </p>
                <div class="flex flex-col my-6">
                    <img :src="'../storage/img/blog/9-2018/trailblazer_lookout.jpg'"  class="object-cover h-112 w-full">
                    <div class="flex justify-between text-sm font-semibold">
                        <p>Trailblazer Lookout.  Located on the Howe Sound Crest Trail just a short ways down from the Deeks Creek Trail turn off</p>
                        <p>September 2, 2018</p>
                    </div>
                </div>
                <p>
                    The lake itself is a small but charming area surrounded by mountains and tall trees of pine and evergreen, 
                    some of which had long since fallen and their dry sunbaked trunks lay floating along the banks forming 
                    a natural pier of sorts.  By now it was roughly 1 PM and the sun at its zenith.  It's rays shining bright upon the 
                    lake's glistening surface emitting dancing sparkles of light, completing the magnificent scenery of the area.  Drenched 
                    in sweat, we threw off our heavy packs and proceeded along the pier to dip our weary feet into its refreshing cold.    
                </p>
                <div class="flex flex-col my-6">
                    <img :src="'../storage/img/blog/9-2018/deeks_lake_1.jpg'"  class="object-cover h-112 w-full">
                    <div class="flex justify-between text-sm font-semibold">
                        <p>Deeks Lake.  This photo was taken in the evening at around 6 PM.  
                            By then the sunlight had all but left with only the peaks and mountains catching its last rays</p>
                        <p>September 2, 2018</p>
                    </div>
                </div>
           </div>
        </div>
    </div>
</template>

<script>
import TopNav from '../../components/TopNav';
export default {
    name: 'DeeksLake2018',

    components: {
        TopNav
    }
}
</script>

<style scoped>

</style>