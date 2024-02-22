<template>
    <div>
        <ul>
            <li v-for="user in users" :key="user.id">
                {{ user.name }} ({{ user.email }})
            </li>
            <!-- <p>{{ users.name }}</p> -->
        </ul>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            users: []
        }
    },
    mounted() {
        axios.get('/api/open_profile')
            .then(response => {
                this.users = response.data;
            });
    }
}
</script>