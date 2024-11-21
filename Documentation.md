# Плагин для Moodle. Статистика по пользователю с красивыми Dashboard'ами.

## Введение

### Описание Moodle API

Moodle API - набор инструментов, предоставляемый системой Moodle для взаимодействия с ее основными функциями и данными.
- Позволяет разработчикам создавать и интегрировать плагины и приложения, которые расширяют возможности Moodle, предоставляя доступ к данным о пользователях, курсах, оценках и аналитике.
- API поддерживает работу через REST-запросы, что упрощает получение данных и их интеграцию с внешними системами.

### Цель документации

> Документация предназначена для команды разработчиков, которая создает плагин "Статистика по пользователю с красивыми Dashboard'ами" для системы Moodle. Она должна помочь им понять, как использовать Moodle API для получения данных о прогрессе пользователей, их успеваемости и другой статистики. В ней будут охвачены основные методы и подходы к интеграции Moodle API с плагином, а также даст рекомендации по использованию API для анализа данных и визуализации результатов.

### Возможности плагина

Плагин будет создан для повышения мотивации и вовлеченности студентов, а также для поддержки преподавателей и администраторов курса. Основные функции плагина включают:
- Мониторинг успеваемости: сбор и представление информации о курсовых достижениях студентов, включая завершенные темы, оценки и время, затраченное на обучение.
- Визуализация прогресса: плагин использует графики и диаграммы для удобного отображения данных, позволяя пользователям легко оценить свои достижения и определить области для улучшения.
- Обратная связь и рекомендации: плагин предоставляет пользователям доступ к аналитике, которая помогает понять их сильные и слабые стороны, способствуя планированию дальнейшего обучения.

## Установка и подготовка

### Как установить?

- Нужно создать учетную запись на [Moodle.org](https://moodle.org/). Это нужно для доступа к [форуму Moodle General Developer](https://moodle.org/mod/forum/view.php?f=33) и загрузки [плагинов Moodle](https://moodle.org/plugins).
- [Нужно установить Moodle на свой компьютер](https://docs.moodle.org/en/Installing_Moodle) или использовать контейнерную среду, например [moodle-docker](https://github.com/moodlehq/moodle-docker). Можно также использовать [Moodle Development Kit (MDK)](https://moodledev.io/general/development/tools/mdk)

> Настоятельно рекомендуется использовать инструмент администрирования баз данных, такой как [adminer,](https://www.adminer.org/) который поможет управлять базами данных разработки.

### Настройка Moodle для разработки

- Нужно включить отладчик Moodle

> При разработке в Moodle рекомендуется включить отладку. Отключайте ее только в демонстрационных целях, поскольку она оказывает значительное влияние на производительность вашего веб-сайта Moodle.

> Всегда устраняйте все ошибки и предупреждения, которые появляются при **включенной отладке Moodle** . Ошибки и предупреждения подразумевают, что что-то работает не так, как должно, то есть ваш код не выполняет то, что вы от него хотели, или может оказаться хрупким и сломаться в будущем.

- Установите [Moodle PHP CodeSniffer](https://moodledev.io/general/development/tools/phpcs). Он будет использоваться для проверки вашего плагина на соответствие стандартам кодирования Moodle. Используйте его для развития хороших навыков кодирования.
- [Установите плагин проверки PHPdoc](https://moodle.org/plugins/local_moodlecheck) Moodle. Он будет использоваться для проверки документации вашего исходного кода. Это также поможет улучшить ваши навыки кодирования.

## Стиль кодирования

В этом блоке будут описаны руководящие принципы стиля для разработчиков, работающих с кодом Moodle. В нем говорится исключительно о механике компоновки кода и о выборе, который сделан для Moodle.

> «Фактический стандарт Moodle» — это любой стиль кодирования, который обычно и типично используется в Moodle.

> [Средство проверки кода](https://moodle.org/plugins/view.php?plugin=local_codechecker) Moodle - инструмент, который поможет написать код, соответствующий данному руководству.

### Форматирование файла

> Всегда используйте "длинные теги" php. Однако, чтобы избежать проблем с пробелами, НЕ включайте закрывающий тег в самый конец файла.

Пример правильного поведения:
```php
<?php
require('config.php');
```

### Отступ

> Используйте отступ в **4 пробела** без символов табуляции. Редакторы должны быть настроены на обработку табуляции как пробелов, чтобы предотвратить внедрение новых символов табуляции в исходный код.

> **НЕ** делайте отступ на уровне основного скрипта

Пример **правильного** поведения:
```php
<?php
require('config.php');
$a = required_param('a', PARAM_INT);
if ($a > 10) {
    call_some_error($a);
} else {
    do_something_with($a);
}
```

Пример **неправильного** поведения:
```php
<?php
    require('config.php');
    $a = required_param('a', PARAM_INT);
    if ($a > 10) {
        call_some_error($a);
    } else {
        do_something_with($a);
    }
```

> В запросах SQL используются специальные отступы, см. [Стиль кодирования SQL](https://moodledev.io/general/development/policies/codingstyle/sql).

### Максимальная длина

> Ключевой вопрос - читабельность. Если вам удобно, старайтесь использовать 132 символа. Не рекомендуется использовать более 180 символов. Исключением являются строковые файлы в `/lang`каталоге, где строки `$string['id'] = 'value';`должны иметь значение, определенное как одна строка любой длины, заключенная в кавычки (без операторов конкатенации, без синтаксиса heredoc и newdoc). Это помогает анализировать и обрабатывать эти строковые файлы, не включая их как код PHP.

### Оберточные линии

При переносе строк обычно следует соблюдать следующие правила:

- Отступ по умолчанию составляет 4 пробела.
- Добавьте к переносимой строке с условиями оператора управления или объявлением функции/класса 4 дополнительных пробела, чтобы визуально отличить ее от последующего тела оператора управления или функции/класса.

### Обертывание структур

Пример правильного поведения:
```php
while ($fileinfolevel && $params['component'] === 'user'
        && $params['filearea'] === 'private') {
    $fileinfolevel = $fileinfolevel->get_parent();
    $params = $fileinfolevel->get_params();
}
```

### Упаковка условий

>Ничего особенного нет, и правило структур контроля все равно будет применяться.

Пример правильного поведения:
```php
if (($userenrol->timestart && $userenrol->timestart < $limit) ||
        (!$userenrol->timestart && $userenrol->timecreated < $limit)) {
    return false;
}
```

Однако если в одной структуре управления имеется несколько условий, попробуйте задать несколько вспомогательных переменных для оценки условий, чтобы улучшить читаемость.

Пример правильного поведения:
```php
$iscourseorcategoryitem = ($element['object']->is_course_item() || $element['object']->is_category_item());  
$usesscaleorvalue = in_array($element['object']->gradetype, [GRADE_TYPE_SCALE, GRADE_TYPE_VALUE]);  
  
if ($iscourseorcategoryitem && $usesscaleorvalue) {  
// Это облегчает просмотр и понимание условий. 
}
```

**Сравните это со следующим.**
Пример неправильного поведения
```php
// НЕ ДЕЛАЙТЕ ЭТОГО.
if (($element['object']->is_course_item() || $element['object']-> is_category_item())
        && ($element['object']->gradetype == GRADE_TYPE_SCALE
        || $element['object']->gradetype == GRADE_TYPE_VALUE)) {
    // Слишком длинные строки со сложными условиями не приветствуются, даже если они имеют правильный отступ.
}
```

## Основные методы API

В этом блоке будет разобраны методы, которые будут использоваться для получения данных о пользователях, курсах, оценках, необходимых для работы Dashboard'а.

### Пользовательский API (User-related APIs)

> Класс [User fields](https://docs.moodle.org/dev/User_fields) в основном используется при отображении таблиц данных о пользователях. Он указывает, какие дополнительные поля (например, email) должны отображаться в текущем контексте на основе разрешений текущего пользователя. Он также предоставляет способы получения необходимых данных из запроса и получения других общеполезных полей для имен пользователей и изображений.

 `core_user::get_profile_picture`
Создать фотографию пользователя.

- **`user`**- Человек, о котором необходимо получить данные.
- **`context`**- Контекст будет использоваться для определения видимости изображения пользователя.
- **`options`**- Параметры отображения, которые необходимо переопределить:
    - `courseid`: идентификатор курса профиля пользователя в ссылке
    - `size`: 35 (размер изображения)
    - `link`: true (сделать изображение кликабельным — ссылка ведет на профиль пользователя)
    - `popup`: false (открыть во всплывающем окне)
    - `alttext`: true (добавить атрибут alt изображения)
    - `class`: атрибут класса изображения (по умолчанию `userpicture`)
    - `visibletoscreenreaders`true (будет ли видно программам чтения с экрана)
    - `includefullname`: false (включать ли полное имя пользователя вместе с фотографией пользователя)
    - `includetoken`: false (использовать ли токен для аутентификации. True для текущего пользователя, значение int для идентификатора другого пользователя)

`core_user::get_profile_url`
Сгенерировать URL-адрес профиля.

- **`user`**- Человек, о котором необходимо получить данные.
- **`context`**- Контекст будет использоваться для определения видимости полного имени пользователя.

`core_user::get_fullname`
Сгенерируйте полное имя пользователя.

- **`user`**- Человек, о котором необходимо получить данные.
- **`context`**- Контекст будет использоваться для определения видимости URL-адреса профиля пользователя.
- **`options`**- Может включать: переопределение - если true, не будут использоваться принудительные настройки имени/фамилии

#### Определение пользовательских полей

> Чтобы гарантировать корректность данных, вставленных в Moodle, и избежать ошибок безопасности, были созданы новые методы определения пользовательских полей для использования в Moodle 3.1 и более поздних версиях. Цель этих новых методов — создать центральную точку проверки данных пользовательских полей и гарантировать, что все данные, вставленные в Moodle, будут очищены в соответствии с правильным типом параметра. Другая цель этого нового API — создать согласованность в ядре Moodle и избежать различных проверок параметров для одних и тех же пользовательских полей. На данный момент пользовательские данные должны проверяться в соответствии с пользовательским полем, а не с помощью clean_param() напрямую.

`$propertiescache`
Кэшированная информация каждого пользовательского поля и его атрибутов заполняется с помощью fill_properties_cache.

`fill_properties_cache()`
Основной метод определения пользователя — сохранить определение каждого поля пользователя и его свойств. Он проверяет, `core_user::$propertiescache` заполнено ли уже, и кэширует все атрибуты полей пользователя в этот же атрибут. Каждое поле соответствует точному имени поля в таблице пользователя. При этом каждое новое поле, добавляемое в таблицу пользователя, должно быть добавлено в массив fill_properties_cache $fields, в противном случае оно не будет проверено или очищено. Каждое поле имеет четыре возможных свойства, которые являются вариантами выбора и необязательными по умолчанию:

- **`null`**- Независимо от того, имеет ли поле значение NULL или NOT_NULL, его НЕ СЛЕДУЕТ использовать для проверки формы, поскольку многие поля в пользовательской таблице имеют свойство NOT_NULL, но имеют значение по умолчанию (``).
- **`type`**- Ожидаемый тип параметра (PARAM_*), который будет использоваться для проверки и очистки.
- **`choices`**- Список допустимых значений этого поля. Например, список доступных стран, часовых поясов, типов календарей и т. д.
- **`default`**- Значение по умолчанию в случае, если пользовательское поле не прошло проверку или не было очищено, и мы должны установить значение по умолчанию. Например, если страна пользователя недействительна и ее нет в списке вариантов, установите $CFG->country.

`validate()`
Статический метод проверки пользовательских полей, принимает массив или объект пользователя в качестве параметра, проверяет каждый параметр по отдельности и может вернуть true, если все пользовательские данные верны или массив ошибок проверки. Цель этого метода — просто проверить пользовательские данные, он не будет выполнять никакой очистки данных.

 `clean_data()`
 Статический метод, цель которого — очистить пользовательские данные и вернуть тот же массив/объект пользователя. Он получает массив с пользовательскими данными или объектом пользователя в качестве параметра и проверяет, находятся ли данные в списке вариантов выбора и имеет ли свойство значение по умолчанию, и очищает данные, если у объекта пользователя нет свойства выбора. Он выведет отладочное сообщение, если в одной из операций выше возникнут проблемы.

`clean_field()`
Статический метод очистки одного пользовательского поля. Он имеет два параметра: очищаемые данные и его пользовательское поле. Поведение метода похоже на clean_data. Он выполнит проверки и очистку и может вывести отладочное сообщение, если будет обнаружена ошибка. Он возвращает очищенные данные.

`get_property_type()`
Вспомогательный метод для получения типа свойства. Он получает имя поля пользователя в качестве параметра и, если оно не существует, выдает исключение. Если свойство найдено, он возвращает его тип.

`get_property_null()`
Вспомогательный метод для получения свойства null поля пользователя. Он получает имя поля пользователя в качестве параметра и, если оно не существует, выдает исключение. Если свойство найдено, он вернет значение null.

`get_property_choices()`
Вспомогательный метод для получения списка вариантов выбора пользовательского поля. Он получает имя пользовательского поля в качестве параметра и, если оно не существует, выдает исключение. Если свойство найдено, он возвращает список допустимых значений.

`get_property_default()`
Вспомогательный метод для получения значения свойства по умолчанию. Он получает имя поля пользователя в качестве параметра и, если оно не существует или не имеет атрибута по умолчанию, выдает исключение. Если свойство найдено, он возвращает его значение по умолчанию.

#### Селектор пользователя

Базовый класс `user_selector_base`, определенный в `user/selector/lib.php`, который вы можете подклассифицировать, чтобы сделать виджет, позволяющий выбирать пользователей способом AJAX. Он используется, например, на странице Добавить участников группы. Лучший способ узнать, как его использовать, — поискать код других пользователей и посмотреть, как они работают. Базовый класс также имеет хорошие комментарии PHPdoc.

#### Сортировка списков пользователя

Когда вы извлекаете список пользователей из базы данных, они всегда должны быть отсортированы последовательно, используя `users_order_by_sql`функцию для генерации предложения order-by. Опять же, лучший способ увидеть, как это работает, — это поискать в коде существующие использования.

### Web Service API

- **core_user_get_users_by_field**: позволяет получить информацию о пользователе по идентификатору или другому полю (например, email).

> Функция в Moodle, которая получает информацию о пользователях по указанному уникальному полю. **Параметры функции**: 
> **field** (обязательный) — поле для поиска (может быть «id», «idnumber», «username» или «email»);
> **values** (обязательный) — значения для поиска.

> Извлечение информации о пользователях для указанного уникального поля. Если вы хотите выполнить поиск пользователей, используйте **core_user_get_users()**.

- **core_completion_get_course_completion_status**: возвращает статус завершения курса для пользователя.

> Функция в Moodle, которая возвращает статус завершения курса. **Параметры метода**: **$courseid** — ID курса; 
> **$userid** — ID пользователя.

- **core_completion_get_activities_completion_status**: предоставляет информацию о статусе выполнения отдельных заданий курса. (Возвращает статус завершения действий пользователя на курсе.)

> Функция в Moodle, которая возвращает статус завершения активностей для пользователя в курсе. Она принимает два параметра: ID курса и ID пользователя и возвращает массив с прогрессом и предупреждениями по активным действиям.

- **gradereport_user_get_grade_items**: возвращает данные об оценках пользователя по конкретному курсу. (Возвращает полный список элементов оценки для пользователей курса)

> Функция в Moodle, которая возвращает полный список оценок для пользователей в курсе.
> **Параметры функции**:
> **int $courseid** — курс (обязательный);
> **int $userid** — пользователь (опциональный);
> **int $groupid** — группа (опциональный)
> **Возвращает** **массив** с таблицами оценок. Доступно с версии Moodle 3.2.

**core_course_get_contents**: предоставляет содержимое курса, включая модули и их статус для пользователя.

> Получить содержание курса (модули + URL-адреса файлов веб-сервиса). Это может быть полезно для анализа, какие модули или темы завершены, а какие еще активны.

#### Информация о действиях и активности в курсе

- **mod_assign_get_assignments** и **mod_assign_get_submissions**: эти методы позволяют узнать о заданиях в курсе и отправленных решениях. Это полезно для анализа вовлеченности и активности пользователя в выполнении заданий.

> **mod_assign_get_assignments** - возвращает курсы и задания для возможностей пользователей. **mod_assign_get_submissions** - возвращает материалы для заданий.

#### Отслеживание активности и посещаемости

- **core_user_get_users_by_courseid**: возвращает список всех пользователей, зарегистрированных на курсе. Это полезно для сбора информации о посещаемости и участия в конкретных курсах.

> Функция в Moodle, которая позволяет получить список пользователей по указанному идентификатору курса

#### Аналитика прогресса и рекомендации

- **core_enrol_get_users_courses**: получить список идентификаторов курсов, на которые зарегистрирован пользователь (если вам разрешено это видеть)

- **gradereport_overview_get_course_grades**: получить итоговые оценки по курсам данного пользователя