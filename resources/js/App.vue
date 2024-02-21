<template>
    <HeaderComponent v-if="!hideHeaderFooter" />
    <main>
        <router-view></router-view>
    </main>
    <FooterComponent v-if="!hideHeaderFooter" />
</template>

<script>
import { defineComponent, computed } from 'vue';
import HeaderComponent from '@/components/headerComponent.vue';
import FooterComponent from '@/components/footerComponent.vue';
import NotFound from './pages/not_found.vue';
import { useRoute } from 'vue-router';

export default defineComponent({
    components: {
        HeaderComponent,
        FooterComponent,
        NotFound
    },
    setup() {
        const route = useRoute();
        const currentPath = computed(() => route.path);
        const hideHeaderFooter = computed(() => currentPath.value.includes('/login') || currentPath.value.includes('/register') || route.name === 'NotFound');
        return { hideHeaderFooter };
    },
});
</script>