<template>
    <HeaderComponent />
    <main>
        <router-view></router-view>
    </main>
    <FooterComponent />
</template> 

<script>
import { defineComponent } from 'vue';
import HeaderComponent from '@/components/headerComponent.vue';
import FooterComponent from '@/components/footerComponent.vue';
export default defineComponent({
    components:
    {
        HeaderComponent,
        FooterComponent
    },

}) 
</script>