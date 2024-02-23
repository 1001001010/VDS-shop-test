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
            users: []
        }
    },
    mounted() {
        axios.get('/api/open_profile/1')
            .then(response => {
                this.users = response.data;
            });
    }
}
</script>