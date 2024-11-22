<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_reminders', language 'ru', version '4.1'.
 *
 * @package     local_reminders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityconfduein'] = 'Срок истекает';
$string['activityconfexplicitenable'] = 'Активация явного напоминания';
$string['activityconfexplicitenabledesc'] = 'Если этот флажок установлен, преподаватели должны в курсе <strong>явно</strong> включить напоминания для каждого активного элемента на странице настроек напоминаний. При этом все напоминания об активных элементах будут по умолчанию отключены независимо от определенного ниже расписания. Эта конфигурация в любом случае не влияет на "просроченные" напоминания.';
$string['activityconfexplicitenablehint'] = 'На сайте по умолчанию отключена отправка напоминаний об активных элементах. Это означает, что преподаватели должны  в этом курсе <em>явно</em> включить желаемые напоминания об активных элементах.';
$string['activityconfnoupcomingactivities'] = 'Нет предстоящих событий в этом курсе.';
$string['activityconfupcomingactivities'] = 'Предстоящие события';
$string['activityconfupcomingactivitiesdesc'] = 'Напоминания о непроверенных активных элементах отправляться не будут.';
$string['activitydueopenahead'] = 'Напоминать об открытии элементов за:';
$string['activitydueopenaheaddesc'] = 'За сколько дней необходимо отправлять напоминания об открытии активных элементов. Этот параметр действителен только в том случае, если в настройках выше разрешена отправка напоминаний об открытии активных элементов.';
$string['activityignoreincompletes'] = 'Никаких напоминаний после выполнения:';
$string['activityignoreincompletesdetails'] = 'Если флажок установлен, то никакие напоминания не будут отправляться, если активный элемент уже выполнен пользователем, <strong>до</strong> его закрытия.';
$string['activityopeningseparation'] = 'Отдельные открытия для активных элементов:';
$string['activityopeningseparationdesc'] = 'Показывать в курсе открытия активных элементов как отдельные записи на странице настроек напоминаний.';
$string['activityremindersboth'] = 'Для открывающихся и закрывающихся активных элементов';
$string['activityremindersonlyclosings'] = 'Только для закрывающихся активных элементов';
$string['activityremindersonlyopenings'] = 'Только для открывающихся активных элементов';
$string['admintreelabel'] = 'Напоминания';
$string['calendareventcreatedprefix'] = 'ДОБАВЛЕНО';
$string['calendareventoverdueprefix'] = 'ПРОСРОЧЕНО';
$string['calendareventremovedprefix'] = 'УДАЛЕНО';
$string['calendareventupdatedprefix'] = 'ОБНОВЛЕНО';
$string['caleventchangedheading'] = 'Напоминания об изменениях событий календаря';
$string['caleventchangedheadingdetails'] = 'Эти настройки будут проверены <strong> перед</strong> рассмотрением отдельного типа события.';
$string['categoryheading'] = 'Напоминания о событиях категории курса';
$string['categorynosendforended'] = 'Никаких напоминаний о пройденных курсах:';
$string['categorynosendforendeddescription'] = 'Если этот флажок установлен, напоминания о пройденных курсах отправляться не будут.';
$string['contentdescription'] = 'Описание';
$string['contenttypeactivity'] = 'Активный элемент';
$string['contenttypecategory'] = 'Категория';
$string['contenttypecourse'] = 'Курс';
$string['contenttypegroup'] = 'Группа';
$string['contenttypelocation'] = 'Где';
$string['contenttypeuser'] = 'Пользователь';
$string['contentwhen'] = 'Когда';
$string['courseheading'] = 'Напоминания о событиях курса';
$string['days1'] = '1 день';
$string['days3'] = '3 дня';
$string['days7'] = '7 дней';
$string['dueheading'] = 'Напоминания о событиях';
$string['emailconfigsheading'] = 'Настройка напоминания по электронной почте';
$string['emailfootercustomname'] = 'Настраиваемый нижний колонтитул электронной почты';
$string['emailfootercustomnamedesc'] = 'Укажите содержимое нижнего колонтитула, которое будет вставляться в каждое электронное сообщение с напоминанием. Если это содержимое пустое и нижний колонтитул по умолчанию отключен, то нижний колонтитул будет полностью удален из напоминаний.';
$string['emailfooterdefaultname'] = 'Использовать нижний колонтитул электронной почты по умолчанию';
$string['emailfooterdefaultnamedesc'] = 'Если этот флажок установлен, то нижний колонтитул электронного письма с напоминанием по умолчанию будет содержать ссылку на календарь Moodle. В противном случае будет использоваться содержимое, предоставленное в настраиваемом нижнем колонтитуле.';
$string['emailheadercustomname'] = 'Настраиваемый заголовок электронной почты';
$string['emailheadercustomnamedesc'] = 'Укажите содержимое заголовка, которое будет встраиваться в каждое электронное сообщение с напоминанием. Это можно использовать для размещения этих сообщений электронной почты на вашем сайте.';
$string['enabled'] = 'Включено:';
$string['enabledaddedevents'] = 'Отправить при создании события:';
$string['enabledaddedeventsdescription'] = 'Указывает, следует ли отправлять напоминания при создании события календаря.';
$string['enabledchangedevents'] = 'Отправлять при обновлении события:';
$string['enabledchangedeventsdescription'] = 'Указывает, следует ли отправлять напоминания при обновлении события календаря.';
$string['enableddescription'] = 'Включить / отключить плагин напоминания';
$string['enabledforcalevents'] = 'Включить для изменения событий календаря:';
$string['enabledforcaleventsdescription'] = 'Разрешить отправку напоминаний при создании, удалении или обновлении события календаря.';
$string['enabledoverdue'] = 'Разрешено «Просрочено»';
$string['enabledremovedevents'] = 'Отправить, когда событие удалено:';
$string['enabledremovedeventsdescription'] = 'Указывает, следует ли отправлять напоминания при удалении события календаря.';
$string['eventtypeclose'] = 'Активный элемент закрывается';
$string['eventtypeexpectcompletionon'] = 'Завершение ожидается';
$string['eventtypegradingdue'] = 'Оценить до';
$string['eventtypeopen'] = 'Активный элемент открывается';
$string['excludedmodules'] = 'Исключенные модули:';
$string['excludedmodulesdesc'] = 'Напоминания не будут отправляться, если событие сгенерировано из выбранных выше модулей. Этот параметр является глобальным и применим для любого типа событий.';
$string['explaincategoryheading'] = 'Настройки напоминания для событий категории курса.';
$string['explaincourseheading'] = 'Настройки напоминания для событий курса. Эти события принадлежат курсу.';
$string['explaindueheading'] = 'Настройки напоминания для событий активного элемента. Эти события происходят с модулем курса.';
$string['explaingroupheading'] = 'Настройки напоминаний для событий группы. Эти события относятся только к определенной группе.';
$string['explaingroupshowname'] = 'Указывает, следует ли включать название группы в отправляемое сообщение или нет.';
$string['explainrolesallowedfor'] = 'Выберите, какие пользователи с вышеуказанными ролями могут получать напоминания.';
$string['explainsendactivityreminders'] = 'Указывает, в каком состоянии активного элемента следует отправлять напоминания.';
$string['explainsiteheading'] = 'Настройки напоминания для событий сайта. Эти события актуальны для всех пользователей сайта.';
$string['explainuserheading'] = 'Настройки напоминания для событий пользователя. Эти события индивидуальны для каждого пользователя.';
$string['filterevents'] = 'Фильтровать события календаря:';
$string['filtereventsdescription'] = 'Какие события календаря следует фильтровать и отправлять напоминания для них.';
$string['filtereventsonlyhidden'] = 'Только события, скрытые в календаре';
$string['filtereventsonlyvisible'] = 'Только события, видимые в календаре';
$string['filtereventssendall'] = 'Все события';
$string['groupheading'] = 'Напоминания о групповых событиях';
$string['groupshowname'] = 'Показать название группы в сообщении:';
$string['messageprovider:reminders_course'] = 'Напоминания о событиях курса';
$string['messageprovider:reminders_coursecategory'] = 'Уведомления с напоминаниями о событиях категории курса';
$string['messageprovider:reminders_due'] = 'Уведомления с напоминанием об активном элементе';
$string['messageprovider:reminders_group'] = 'Напоминания о групповых событиях';
$string['messageprovider:reminders_site'] = 'Напоминания о событиях на сайте';
$string['messageprovider:reminders_user'] = 'Напоминания о событиях пользователя';
$string['messagetitleprefix'] = 'Префикс заголовка сообщения:';
$string['messagetitleprefixdescription'] = 'Этот текст будет вставлен в виде префикса (в квадратных скобках) к заголовку каждого отправляемого сообщения-напоминания.';
$string['moodlecalendarname'] = 'Календарь Moodle';
$string['overdueactivityreminders'] = 'Напоминания о просроченных активных элементах:';
$string['overdueactivityremindersdescription'] = 'Если этот флажок установлен, то напоминания будут отправляться пользователям, которые просрочили выполнение активного элемента.';
$string['overduemessage'] = 'Этот активный элемент просрочен!';
$string['overduewarnmessage'] = 'Предупреждающее сообщение о просроченных активных элементах:';
$string['overduewarnmessagedescription'] = 'Введите <strong>простой текст</strong>, который будет выделен красным цветом внутри "просроченных" электронных писем. Если это поле пустое, то сообщение отображаться не будет. Это будет работать только в том случае, если разрешены электронные письма о просроченных активных элементах.';
$string['overduewarnprefix'] = 'Префикс темы о просроченных активных элементах:';
$string['overduewarnprefixdescription'] = 'Введите <strong> простой префикс</strong>, который будет встроен в заголовок "просроченных" писем. Если это поле пустое, то ничего добавляться не будет. Это будет работать только в том случае, если разрешены электронные письма о просроченных активных элементах.';
$string['pluginname'] = 'Напоминания о событиях';
$string['privacy:metadata'] = 'Плагин напоминаний о событиях не хранит никаких личных данных.';
$string['reminderdaysahead'] = 'Отправить до:';
$string['reminderdaysaheadcustom'] = 'Пользовательское расписание:';
$string['reminderdaysaheadcustomdetails'] = 'Дополнительно укажите желаемое расписание, чтобы заранее отправлять напоминания о событии.';
$string['reminderdaysaheadschedule'] = 'Расписание';
$string['reminderfrom'] = 'Напоминание от';
$string['reminderstask'] = 'Локальные напоминания';
$string['reminderstaskclean'] = 'Очистить журналы локальных напоминаний';
$string['rolesallowedfor'] = 'Разрешенные роли:';
$string['sendactivityreminders'] = 'Напоминания об активном элементе:';
$string['sendas'] = 'Отправить как:';
$string['sendasadmin'] = 'Как администратор сайта';
$string['sendasdescription'] = 'Укажите, кому эти письма-напоминания следует отправлять.';
$string['sendasnamedescription'] = 'Укажите отображаемое имя пользователя для писем с напоминанием, когда они отправляются как "пользователь без ответа".';
$string['sendasnametitle'] = 'Название (без ответа):';
$string['sendasnoreply'] = 'Адрес (без ответа)';
$string['showmodnameintitle'] = 'Показывать название модуля в теме письма';
$string['showmodnameintitledesc'] = 'Если этот флажок установлен, к теме письма с напоминанием будет добавлено название соответствующего модуля.';
$string['siteheading'] = 'Напоминания о событиях на сайте';
$string['taskreminder'] = 'Задача напоминания';
$string['titlesubjectprefix'] = 'Напоминание';
$string['userheading'] = 'Напоминания о событиях пользователя';
$string['useservertimezone'] = 'Использовать часовой пояс сервера';
