<template>
    <div>
        <ul>
            <li>
                Имя пользователя: {{ users.name }}
            </li>
            <li>
                Почта: {{ users.email }}
            </li>
            <li>
                Дата регистрации: {{ users.created_at }}
            </li>
            <li>Балланс: {{ users.balance }}₽</li>
        </ul>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            users: [],
            name: localStorage.getItem('name'),
        }
    },
    mounted() {
        if (this.$route.params.name === this.name) {
            axios.get('/api/open_profile/' + this.$route.params.name)
                .then(response => {
                    this.users = response.data;
                });
        } else {
            this.$router.push('/');
        }
    }
}
</script>