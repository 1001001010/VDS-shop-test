<template>
    <ServersFirst />
    <ServersSecond />
    <ServersThird />
    <ServersFourth />
    <ServersFifth />
</template>

<script>
import ServersFirst from './servers_first.vue'
import ServersSecond from './servers_second.vue'
import ServersThird from './servers_third.vue'
import ServersFourth from './servers_fourth.vue'
import ServersFifth from './servers_fifth.vue'
export default {
    data() {
        return {
            name: localStorage.getItem('name')
        }
    },
    components:
    {
        ServersFirst,
        ServersSecond,
        ServersThird,
        ServersFourth,
        ServersFifth
    },
}
</script>