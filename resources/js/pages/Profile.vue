<template>
    <section class="second__section second">
        <div class="container">
            <div class="tovar">
                <div class="Offers">
                    <div class="left_block">
                        <p class="user__title">Пользователь <span class="bold">{{ users.name }}</span></p>
                        <ul type="circle" class="haracter">
                            <li>
                                <p>Email: <span class="bold">{{ users.email }}</span></p>
                            </li>
                            <li>
                                <p>Балланс: <span class="bold">{{ users.balance }}₽</span></p>
                            </li>
                            <li>
                                <p>Дата регистрации: <span class="bold">{{ users.data }}</span></p>
                            </li>
                            <div class="flex wrapper flex__col__start button__reduct_user gap__15 padding-t__15">
                                <div class="table__item">
                                    <a target="_blank">Изменить информацию</a>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="right_block">
                        <div class="title-centre">
                            <p>Всего аренд: <span class="bold">6</span></p>
                        </div>
                        <div class="serv__inf__block">
                            <p>28.06.2023</p>
                            <p>ID сервера: 23</p>
                            <p>Срок: Месяц</p>
                            <p>Цена: 450</p>
                        </div>
                        <div class="serv__inf__block">
                            <p>28.06.2023</p>
                            <p>ID сервера: 23</p>
                            <p>Срок: Месяц</p>
                            <p>Цена: 450</p>
                        </div>
                        <div class="serv__inf__block">
                            <p>28.06.2023</p>
                            <p>ID сервера: 23</p>
                            <p>Срок: Месяц</p>
                            <p>Цена: 450</p>
                        </div>
                        <div class="serv__inf__block">
                            <p>28.06.2023</p>
                            <p>ID сервера: 23</p>
                            <p>Срок: Месяц</p>
                            <p>Цена: 450</p>
                        </div>
                        <div class="serv__inf__block">
                            <p>28.06.2023</p>
                            <p>ID сервера: 23</p>
                            <p>Срок: Месяц</p>
                            <p>Цена: 450</p>
                        </div>
                        <div class="serv__inf__block">
                            <p>28.06.2023</p>
                            <p>ID сервера: 23</p>
                            <p>Срок: Месяц</p>
                            <p>Цена: 450</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    },
}
</script>