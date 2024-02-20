<template>
    <section class="second__section second">
        <div class="container">
            <div class="tovar">
                <div class="country">
                    <div v-for="location in locations">
                        <router-link aria-current="page" :to="location.href">
                            <p>{{ location.title }}</p>
                        </router-link>
                    </div>
                </div>
                <ServersTable />
            </div>
        </div>
    </section>
</template>

<script>
import { RouterLink } from 'vue-router';
import ServersTable from './servers_table.vue';
export default {
    data() {
        return {
            locations: [
                {
                    title: 'Москва',
                    href: '/servers/moscow'
                },
                {
                    title: 'Фалькенштайн',
                    href: '/servers/falkenstein'
                },
                {
                    title: 'Хельсинки',
                    href: '/servers/helsinki'
                }
            ],
            errors: {}
        }
    },
    components: {
        RouterLink,
        ServersTable
    }
};
</script>