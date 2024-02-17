<template>
    <!-- <HeaderComponent></HeaderComponent> -->
    <main>
        <router-view></router-view>
    </main>
</template> 

<script>
import { defineComponent } from 'vue';
import HeaderComponent from './components/headerComponent.vue';
export default defineComponent({
    components:
    {
        HeaderComponent
    },
}) 
</script>