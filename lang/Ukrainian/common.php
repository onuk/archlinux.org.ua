<?php
/*
* Українська локалізація для FluxBB v1.5.X
* Author: Allec Bernz, http://allec.info/cms/fluxbb-forum-ukrainian-langpack/
* License: MIT
*/

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'uk',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'Невірний запит. Посилання, по якому ви перейшли, є невірним або застарілим.',
'No view'							=>	'У вас немає прав для перегляду форуму.',
'No permission'						=>	'У вас немає прав для доступу до сторінки.',
'Bad referrer'						=>	'Невірний HTTP_REFERER. Ви перейшли на сторінку з несанкціонованого джерела. Якщо проблема повторюється, переконайтеся, що «Основна URL-адреса» вірно прописана на сторінці Адміністрування/Опції, і ви звертаєтеся до форуму за вказаною у налаштуваннях адресою. Додаткову інформацію ви можете отримати з документації до FluxBB.',
'Bad csrf hash'						=>	'Невірний CSRF хеш. Ви перейшли на цю сторінку з несанкціонованого джерела.',
'No cookie'							=>	'Ви успішно увійшли, але куки (cookie) не були встановлені. Перевірте налаштування свого браузера і, якщо є можливість, увімкніть куки для сайту.',
'Pun include extension'  			=>	'Неможливо приєднати %s з шаблону %s. "%s" заборонений(-і)',
'Pun include directory'				=>	'Неможливо приєднати %s з шаблону %s. Обхід директорії заборонено',
'Pun include error'					=>	'Неможливо приєднати %s з шаблону %s. Ні в одній з папок з шаблонами немає запитуваного файлу.',

// Miscellaneous
'Announcement'						=>	'Оголошення',
'Options'							=>	'Опції',
'Submit'							=>	'Надіслати', // "Name" of submit buttons
'Ban message'						=>	'Ваш обліковий запис на цьому форумі заблоковано.',
'Ban message 2'						=>	'Термін закінчення блокування',
'Ban message 3'						=>	'Адміністратор або модератор, який Вас заблокував, залишив наступне повідомлення:',
'Ban message 4'						=>	'Всі питання надсилайте адміністратору на поштову адресу',
'Never'								=>	'Немає',
'Today'								=>	'Сьогодні',
'Yesterday'							=>	'Вчора',
'Info'								=>	'Інформація', // A common table header
'Go back'							=>	'Повернутись',
'Maintenance'						=>	'Обслуговування',
'Redirecting'						=>	'Перенаправлення',
'Click redirect'					=>	'Клікніть сюди, якщо не бажаєте більше чекати (або браузер не підтримує автоматичне перенаправлення)',
'on'								=>	'вкл.', // As in "BBCode is on"
'off'								=>	'викл.',
'Invalid email'						=>	'Вказана поштова адреса невірна.',
'Required'							=>	'(Обов\'язково)',
'required field'					=>	'обов\\\'язкове поле форми.', // For javascript form validation
'Last post'							=>	'Останнє повідомлення',
'by'								=>	'від', // As in last post by someuser
'New posts'							=>	'Нові', // The link that leads to the first new post
'New posts info'					=>	'Перейти до першого нового повідомлення в темі.', // The popup text for new posts links
'Username'							=>	'Ім\'я користувача',
'Password'							=>	'Пароль',
'Email'								=>	'Email',
'Send email'						=>	'Надіслати листа',
'Moderated by'						=>	'Модератори:',
'Registered'						=>	'Зареєстрований',
'Subject'							=>	'Тема',
'Message'							=>	'Повідомлення',
'Topic'								=>	'Тема',
'Forum'								=>	'Форум',
'Posts'								=>	'Повідомлень',
'Replies'							=>	'Відповідей',
'Pages'								=>	'Сторінки:',
'Page'								=>	'Сторінка %s',
'BBCode'							=>	'BB-код:', // You probably shouldn't change this
'url tag'							=>	'[url] тег:',
'img tag'							=>	'[img] тег:',
'Smilies'							=>	'Смайлики:',
'and'								=>	'і',
'Image link'						=>	'Зображення', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'написав раніше:', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Важлива інформація',
'Write message legend'				=>	'Напишіть повідомлення та відправте',
'Previous'							=>	'Попередня',
'Next'								=>	'Наступна',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Звання/ранг',
'Member'							=>	'Користувач', // Default title
'Moderator'							=>	'Модератор',
'Administrator'						=>	'Адміністратор',
'Banned'							=>	'Заблокований',
'Guest'								=>	'Гість',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'Виявлено парний тег [/%1$s] без відповідного початкового тега [%1$s]',
'BBCode error invalid nesting'		=>	'Тег [%1$s] відкривається всередині [%2$s], це неприпустимо',
'BBCode error invalid self-nesting'	=>	'Тег [%s] відкритий всередині собі подібного, це неприпустимо',
'BBCode error no closing tag'		=>	'Виявлено парний тег [%1$s] без відповідного закриваючого тега [/%1$s]',
'BBCode error empty attribute'		=>	'Виявлено тег [%s] з порожнім атрибутом',
'BBCode error tag not allowed'		=>	'Заборонено використовувати теги [%s]',
'BBCode error tag url not allowed'	=>	'Заборонено використовувати посилання в повідомленнях',
'BBCode list size error'			=>	'Створений список занадто великий для обробки, зробіть його менше!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Головна',
'User list'							=>	'Користувачі',
'Rules'								=>	'Правила',
'Search'							=>	'Пошук',
'Register'							=>	'Реєстрація',
'Login'								=>	'Вхід',
'Not logged in'						=>	'Ви не ввійшли.',
'Profile'							=>	'Профіль',
'Logout'							=>	'Вихід',
'Logged in as'						=>	'Увійшли як',
'Admin'								=>	'Управління',
'Last visit'						=>	'Останнє відвідування: %s',
'Topic searches'					=>	'Теми:',
'New posts header'					=>	'Нові',
'Active topics'						=>	'Активні',
'Unanswered topics'					=>	'Без відповідей',
'Posted topics'						=>	'Особисті',
'Show new posts'					=>	'Знайти оновлені теми з останнього візиту.',
'Show active topics'				=>	'Знайти активно обговорювані теми.',
'Show unanswered topics'			=>	'Знайти теми без відповідей.',
'Show posted topics'				=>	'Знайти теми з вашою участю.',
'Mark all as read'					=>	'Позначити весь форум прочитаним',
'Mark forum read'					=>	'Позначити поточний форум прочитаним',
'Title separator'					=>	' :: ',

// Stuff for the page footer
'Board footer'						=>	'Низ форуму',
'Jump to'							=>	'Перейти в',
'Go'								=>	' Вперед ', // Submit button in forum jump
'Moderate topic'					=>	'Модерувати тему',
'All'								=>	'Всі',
'Move topic'						=>	'Перемістити тему',
'Open topic'						=>	'Відкрити тему',
'Close topic'						=>	'Закрити тему',
'Unstick topic'						=>	'Відкріпити тему',
'Stick topic'						=>	'Закріпити тему',
'Moderate forum'					=>	'Модерувати форум',
'Powered by'						=>	'Працює на %s.<br/><small><a href="http://allec.info/cms/fluxbb-forum-ukrainian-langpack/" rel="nofollow">Українська локалізація</a></small>.',

// Debug information
'Debug table'						=>	'Налагоджувальна інформація',
'Querytime'							=>	'Згенеровано за %1$s секунд, виконано %2$s запитів',
'Memory usage'						=>	'Пам\'яті використовується: %1$s',
'Peak usage'						=>	'(Пік: %1$s)',
'Query times'						=>	'Час (с)',
'Query'								=>	'Запит',
'Total query time'					=>	'Загальний час запиту: %s',

// For extern.php RSS feed
'RSS description'					=>	'Останні теми форуму %s.',
'RSS description topic'				=>	'Останні повідомлення з теми %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS стрічка активних тем',
'Atom active topics feed'			=>	'Atom стрічка активних тем',
'RSS forum feed'					=>	'RSS стрічка форуму',
'Atom forum feed'					=>	'Atom стрічка форуму',
'RSS topic feed'					=>	'RSS стрічка теми',
'Atom topic feed'					=>	'Atom стрічка теми',

// Admin related stuff in the header
'New reports'						=>	'Є нові скарги',
'Maintenance mode enabled'			=>	'Включено режим обслуговування!',

// Units for file sizes
'Size unit B'						=>	'%s байт',
'Size unit KiB'						=>	'%s КБ',
'Size unit MiB'						=>	'%s МБ',
'Size unit GiB'						=>	'%s ГБ',
'Size unit TiB'						=>	'%s ТБ',
'Size unit PiB'						=>	'%s ПБ',
'Size unit EiB'						=>	'%s ЕК',

);
