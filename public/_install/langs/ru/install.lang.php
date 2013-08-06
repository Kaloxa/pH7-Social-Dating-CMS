<?php
/**
 * @title            Russian Language File
 *
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2013, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Lang / RU
 * @update           07/19/13 10:20
 */

namespace PH7;

$LANG = array (
    'lang' => 'ru',
    'charset' => 'utf-8',
    'lang_name' => 'Pусский',
    'version' => 'версия',
    'CMS_desc' => '<p>Добро пожаловать в установку '.Controller::SOFTWARE_NAME.'.<br />
    Благодарим Вас за выбор нашей CMS, и мы надеемся, что он будет радовать вас.</p>
    <p>Пожалуйста, следуйте шесть шагу установки.</p>',
    'chose_lang_for_install' => 'Пожалуйста, выберите ваш язык, чтобы начать установку',
    'requirements_desc' => 'ВНИМАНИЕ! Пожалуйста, убедитесь, что ваш сервер имеет необходимую <a href="'.Controller::SOFTWARE_REQUIREMENTS_URL.'" target="_blank">требование</a> правильно запустить pH7CMS.',
    'config_path' => '&laquo;protected&raquo; путь к каталогу',
    'desc_config_path' => 'Пожалуйста, укажите полный путь к &laquo;protected&raquo; папка.<br />
    Это мудрое и целесообразно поставить этот каталог за пределами публичного квадратный из вашего веб-сервера.',
    'need_frame' => 'Вы должны использовать веб-браузер, который поддерживает встроенные фреймы!',
    'path_protected' => 'Путь &laquo;protected&raquo; папки',
    'next' => 'Следующий',
    'go' => 'Следующий шаг =>',
    'license' => 'Лицензия',
    'license_desc' => 'Пожалуйста, прочитайте внимательно лицензию и принять его, прежде чем продолжить установку программного обеспечения!',
    'registration_for_license' => 'Пожалуйста, зарегистрируйтесь по этой <a href="'.Controller::SOFTWARE_WEBSITE.'" target="_blank">сайт</a> чтобы получить бесплатную лицензию для продолжения загрузки требуется.',
    'your_license' => 'Лицензионный ключ',
    'agree_license' => 'Я прочитал и согласен с вышеуказанными условиями.',
    'step' => 'Шаг',
    'welcome' => 'Добро пожаловать на установку',
    'welcome_to_installer' => 'Установка',
    'config_site' => 'Настройка вашего сайта!',
    'config_system' => 'Настройка системы CMS!',
    'bad_email' => 'Неверный адрес электронной почты',
    'finish' => 'Завершения установки!',
    'go_your_site' => 'Перейти на новый сайт!',
    'error_page_not_found' => 'Страница не найдена',
    'error_page_not_found_desc' => 'Извините, но страница, которую вы ищете, не может быть найден.',
    'success_license' => 'Лицензионный ключ правильно!',
    'failure_license' => 'К сожалению, Ваш лицензионный ключ был неправильным!',
    'no_protected_exist' => 'Извините, но мы не нашли &laquo;protected&raquo; каталог.',
    'no_protected_readable' => 'Пожалуйста, измените права доступа к &laquo;protected&raquo; каталога в режиме чтения (CHMOD 755).',
    'no_public_writable' => 'Пожалуйста, измените права доступа к &laquo;public&raquo; каталога в режиме записи (CHMOD 777).',
    'no_app_config_writable' => 'Пожалуйста, измените права доступа к &laquo;protected/app/configs&raquo; каталога в режиме записи (CHMOD 777).',
    'database_error' => 'Ошибка подключения к базе данных.<br />',
    'error_sql_import' => 'Произошла ошибка при импорте файла в базу данных SQL',
    'field_required' => 'Это поле обязательно',
    'all_fields_mandatory' => 'Все поля, отмеченные звездочкой (*) обязательны для заполнения',
    'db_hostname' => 'Сервер базы данных хоста',
    'desc_db_hostname' => '(В целом &quot;localhost&quot; или &quot;127.0.0.1&quot;)',
    'db_name' =>'Имя базы данных,',
    'db_username' => 'Имя пользователя базы данных',
    'db_password' => 'база паролей',
    'db_prefix' => 'Префикс таблиц в базе данных',
    'desc_db_prefix' => 'Эта опция полезна, когда у вас есть несколько установок pH7CMS на той же базе данных. Мы рекомендуем, чтобы вы по-прежнему изменить значения по умолчанию для того, чтобы повысить безопасность вашего сайта.',
    'desc_charset' => 'База данных кодирования, как правило, кодировка UTF8 для международных.',
    'db_port' => 'Порт базы данных',
    'ffmpeg_path' => 'Путь к исполняемому FFmpeg (если вы не знаете, где он находится, пожалуйста, обратитесь к хостинг)',
    'password_empty' => 'Ваш пароль является пустым',
    'passwordS_different' => 'Подтверждение пароля не совпадают первоначальный пароль',
    'username_badusername' => 'Ваше имя пользователя является неправильным',
    'username_tooshort' => 'Ваше Имя пользователя слишком короткое, не менее 4 символов',
    'username_toolong' => 'Ваше имя пользователя является слишком долго, максимум 40 символов',
    'email_empty' => 'Электронная почта является обязательным полем',
    'password_nonumber' => 'Ваш пароль должен содержать хотя бы одну цифру',
    'password_noupper' => 'Ваш пароль должен содержать как минимум одну заглавную',
    'password_tooshort' => 'Ваш пароль является слишком коротким',
    'password_toolong' => 'Ваш пароль слишком длинный',
    'bug_report_email' => 'Отчет об ошибке e-mail',
    'admin_first_name' => 'Ваше имя',
    'admin_last_name' => 'Ваша фамилия',
    'admin_username' => 'Ваше имя пользователя чтоб войти в вашу Панель администратора',
    'admin_login_email' => 'Ваш адрес электронной почты для входа в вашу Панель администратора',
    'admin_email' => 'Ваш адрес электронной почты для администрации',
    'admin_return_email' => 'Noreply адрес электронной почты (как правило noreply@yoursite.com)',
    'admin_feedback_email' => 'Адрес электронной почты для контакта форме (обратная связь)',
    'admin_password' => 'Ваш пароль',
    'admin_passwordS' => 'Пожалуйста, подтвердите свой пароль',
    'bad_first_name' => 'Пожалуйста, введите ваше имя, она также должна быть от 2 до 20 символов.',
    'bad_last_name'=> 'Пожалуйста, введите свои фамилию, она также должна быть от 2 до 20 символов.',
    'remove_install_folder_auto' => 'Автоматическое удаление &laquo;install&raquo; каталога (это требует прав доступа, чтобы удалить &laquo;install&raquo; каталог).',
    'confirm_remove_install_folder_auto' => 'ВНИМАНИЕ, ВСЕ файлы в каталоге /_install/ папки будут удалены.',
    'title_email_finish_install' => 'Поздравляем, установка вашего сайта закончен!',
    'content_email_finish_install' => '<p><strong>Поздравляем, Ваш сайт в настоящее время успешно установлен!</strong></p>
    <p>Мы надеемся, Вам понравится работать с '.Controller::SOFTWARE_NAME.'</p>
    <p>Для сообщения об ошибке, предложения, предложения, партнерство, участие в разработке CMS и ее перевод и т.д.</p>
    <p>Пожалуйста, посетите наш <a href="'.Controller::SOFTWARE_WEBSITE.'" target="_blank">веб-сайт</a>.</p>
    <p>---</p>
    <p>С уважением,</p>
    <p>Команда pH7CMS разработчиков.</p>',
    'yes_dir' => 'Каталог был успешно найдены!',
    'no_dir' => 'Каталог не существует.',
    'wait_importing_database' => 'Пожалуйста, подождите при импорте базы данных.<br />
    Это может занять несколько минут.',
    'error_get_server_url' => 'Доступ проблемы с нашими веб-сервера.<br />
    Пожалуйста, убедитесь, что ваш сервер подключен к интернету, в противном случае следует лишь немного подождать (не исключено, что наш сервер перегружен).',
    'powered' => 'Создано',
    'loading' => 'Загрузка...',
);