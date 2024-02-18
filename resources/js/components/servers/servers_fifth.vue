<template>
    <section class="third__section third">
        <img src="assets/img/third_part_1.png" alt="" class="third__part-1" />
        <div class="middle__container flex oc">
            <div class="third__left">
                <h1>Нет подходящего сервера?</h1>
                <h2>
                    Не нашли подходящего сервера? Соберите нужную сборку и установить на нее нужную ОС и
                    приложения
                </h2>
            </div>
            <div class="third__right_centre">
                <form action="" class="form_config">
                    <h2>Регион размещения</h2>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="region-1" type="radio" name="radio" value="1">
                        <label for="region-1" class="cursor__pointer">
                            <p>Москва</p>
                        </label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="region-2" type="radio" name="radio" value="2">
                        <label for="region-2" class="cursor__pointer">Фалькенштайн</label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="region-3" type="radio" name="radio" value="3">
                        <label for="region-3" class="cursor__pointer">Хельсинки</label>
                    </div>
                    <h2>Операционная система</h2>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="oc-1" type="radio" name="radio" value="">
                        <label for="oc-1" class="cursor__pointer">
                            <p>Almalinux</p>
                        </label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="oc-2" type="radio" name="radio" value="2">
                        <label for="oc-2" class="cursor__pointer">Centos</label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="oc-3" type="radio" name="radio" value="3">
                        <label for="oc-3" class="cursor__pointer">Debian</label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="oc-4" type="radio" name="radio" value="2">
                        <label for="oc-4" class="cursor__pointer">Ubuntu</label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="oc-5" type="radio" name="radio" value="3">
                        <label for="oc-5" class="cursor__pointer">Windows</label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="oc-6" type="radio" name="radio" value="2">
                        <label for="oc-6" class="cursor__pointer">Centos</label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="oc-7" type="radio" name="radio" value="3">
                        <label for="oc-7" class="cursor__pointer">Rockylinux</label>
                    </div>
                    <h2>Приложения и панели управления</h2>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="dop-1" type="radio" name="radio" value="">
                        <label for="dop-1" class="cursor__pointer">
                            <p>Redmine</p>
                        </label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="dop-2" type="radio" name="radio" value="2">
                        <label for="dop-2" class="cursor__pointer">Gitlab</label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="dop-3" type="radio" name="radio" value="3">
                        <label for="dop-3" class="cursor__pointer">Doker</label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="dop-4" type="radio" name="radio" value="2">
                        <label for="dop-4" class="cursor__pointer">Fastpanel</label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="dop-5" type="radio" name="radio" value="3">
                        <label for="dop-5" class="cursor__pointer">Node js</label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="dop-6" type="radio" name="radio" value="2">
                        <label for="dop-6" class="cursor__pointer">Wireguard</label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="dop-7" type="radio" name="radio" value="3">
                        <label for="dop-7" class="cursor__pointer">Ruby on Rails</label>
                    </div>
                    <h2>Количество ядер vCPU</h2>
                    <div class="border__button">
                        <div class="polzunok">
                            <p id="min_cpu"></p>
                            <input type="range" min="1" max="24" step="1" value="4" id="cpu" class="cursor__pointer">
                            <p id="max_cpu"></p>
                        </div>
                        <p id="cpu_screen"></p>
                    </div>
                    <h2>Размер памяти RAM, ГБ</h2>
                    <div class="border__button">
                        <div class="polzunok">
                            <p id="min_ram"></p>
                            <input type="range" min="1" max="48" step="1" value="4" id="ram" class="cursor__pointer">
                            <p id="max_ram"></p>
                        </div>
                        <p id="ram_screen"></p>
                    </div>
                    <h2>Объем диска, ГБ</h2>
                    <div class="border__button">
                        <div class="polzunok">
                            <p id="min_hdd"></p>
                            <input type="range" min="20" max="480" step="20" value="40" id="hdd" class="cursor__pointer">
                            <p id="max_hdd"></p>
                        </div>
                        <p id="hdd_screen"></p>
                    </div>
                    <h2>Срок аренды</h2>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="hour" type="radio" name="radio" value="1">
                        <label for="hour" class="cursor__pointer">
                            <p>Час</p>
                        </label>
                    </div>
                    <div class="form_radio_btn cursor__pointer">
                        <input id="month" type="radio" name="radio" value="2">
                        <label for="month" class="cursor__pointer">Месяц</label>
                    </div>
                    <button class="zakazat cursor__pointer">Заказать</button>
                </form>
            </div>
        </div>
    </section>
</template>