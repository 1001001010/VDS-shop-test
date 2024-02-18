<template>
    <footer class="footer">
        <div class="container">
            <div class="footer__top flex justify-between">
                <div class="footer__left">
                    <div class="footer__logo">
                        <a href="/"><img src="../../../public/img/footer_logo.svg" alt="" /></a>
                    </div>
                    <ul class="footer__media flex align-center">
                        <li>
                            <a href="/" target="_blank">
                                <img src="../../../public/img/telegram.svg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="/" target="_blank">
                                <img src="../../../public/img/facebook.svg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="/" target="_blank">
                                <img src="../../../public/img/twitter.svg" alt="" />
                            </a>
                        </li>
                    </ul>
                    <ul class="header__reg flex align-center">
                        <li><router-link to="/register" v-if="!name">Регистрация</router-link></li>
                        <li><router-link to="/login" v-if="!name">Вход</router-link></li>
                    </ul>
                </div>
                <div class="footer__right">
                    <div class="flex">
                        <div class="footer__col">
                            <ul>
                                <li v-for="link in links">
                                    <router-link :to="link.href">
                                        <a>{{ link.title }}</a>
                                    </router-link>
                                </li>
                                <!-- <li><a href="/">Главная</a></li>
                                <li><a href="/">Серверы</a></li>
                                <li><a href="/">Информация</a></li>
                                <li><a href="/">Mining</a></li>
                                <li><a href="/">Academy</a></li> -->
                            </ul>
                        </div>
                        <div class="footer__col">
                            <ul>
                                <li><a href="/">Политика конфиденциальности</a></li>
                                <li><a href="/">Правила</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__text">Zetrix© All Rights Reserved</div>
        </div>
    </footer>
</template>

<script>
export default {
    data() {
        return {
            links: [
                {
                    title: 'Главная',
                    href: '/'
                },
                {
                    title: 'Серверы',
                    href: '/servers'
                },
                {
                    title: 'Информация',
                    href: '/info'
                }
            ],
            name: localStorage.getItem('name'),
            errors: {}
        }
    }
}

</script>