<template>
    <HomeFirst />
    <HomeSecond />
    <HomeThird />
    <HomeFourth />
    <HomeFifth v-if="!name" />
</template>

<script>
import HomeFirst from './home_first.vue'
import HomeSecond from './home_second.vue'
import HomeThird from './home_third.vue'
import HomeFourth from './home_fourth.vue'
import HomeFifth from './home_fifth.vue'
export default {
    data() {
        return {
            name: localStorage.getItem('name')
        }
    },
    components:
    {
        HomeFirst,
        HomeSecond,
        HomeThird,
        HomeFourth,
        HomeFifth
    },
}
</script>