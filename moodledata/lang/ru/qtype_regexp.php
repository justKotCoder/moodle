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
 * Strings for component 'qtype_regexp', language 'ru', version '4.1'.
 *
 * @package     qtype_regexp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addahint'] = 'Добавить подсказку';
$string['addingregexp'] = 'Добавление вопроса «Короткий ответ с регулярными выражениями»';
$string['addmoreanswers'] = 'Добавить еще ответы - {no}';
$string['answer'] = 'Ответ:';
$string['answer1mustbegiven'] = 'Ответ 1 не может быть пустым';
$string['answermustbegiven'] = 'Вы должны ввести ответ, если есть оценка или отзыв.';
$string['answerno'] = 'Ответ: {$a}';
$string['bestcorrectansweris'] = '<strong>Лучший правильный ответ:</strong><br />{$a}';
$string['calculatealternate'] = '(Пере-)Расчет альтернативных ответов';
$string['caseno'] = 'Нет, регистр не имеет значения';
$string['casesensitive'] = 'Чувствительность к регистру';
$string['caseyes'] = 'Да, регистр должен совпадать';
$string['clicktosubmit'] = 'Дополните или исправьте свой ответ и нажмите кнопку <strong>Проверка</strong>, чтобы отправить его.';
$string['correctansweris'] = '<strong>Правильный ответ:</strong><br />{$a}';
$string['correctanswersare'] = '<strong>Другие принятые ответы: </strong>';
$string['editingregexp'] = 'Редактирование вопроса с регулярными выражениями';
$string['filloutoneanswer'] = '<strong>Ответ 1</strong> должен быть правильным (оценка = 100%), и он не будет анализироваться как регулярное выражение.';
$string['hidealternate'] = 'Скрыть альтернативные ответы';
$string['illegalcharacters'] = '<strong>ОШИБКА!</strong> В ответах с оценкой > 0 эти <em>неэкранированные</em> метасимволы недопустимы:: <strong>{$a}</strong>';
$string['letter'] = 'Буква';
$string['misplacedwords'] = 'Неуместные слова';
$string['notenoughanswers'] = 'Этот тип вопросов требует как минимум одного ответа';
$string['penaltyforeachincorrecttry'] = 'Штраф за неправильные попытки и покупку буквы или слова';
$string['penaltyforeachincorrecttry_help'] = 'Если используется поведение вопросов «Интерактивный с несколькими попытками» или «Адаптивный режим» с возможностью у студента нескольких попыток ответить на вопрос правильно, то этот параметр определяет, насколько студент будет оштрафован за каждую неправильную попытку.

Штраф - это доля от общей оценки вопроса, поэтому если вопрос оценивается в три балла, а штраф составляет 0,3333333, то ученик получит 3 балла, если ответит на вопрос с первого раза, 2 балла, если ответит со второй попытки, и 1 балл, если ответит с третьей попытки.

Если для этого вопроса в режиме <strong>кнопки подсказки</strong> установлено значение <strong>буква</strong> или <strong>слово</strong>, <strong><em>такой же штраф</em></strong> применяется каждый раз, когда ученик нажимает кнопку <strong>Купить букву/слово</strong>.';
$string['pleaseenterananswer'] = 'Пожалуйста, введите ответ.';
$string['pluginname'] = 'Короткий ответ с регулярными выражениями';
$string['pluginname_link'] = 'question/type/regexp';
$string['pluginnameadding'] = 'Добавление вопроса с регулярным выражением';
$string['pluginnameediting'] = 'Редактирование вопроса с регулярными выражениями';
$string['pluginnamesummary'] = 'Похоже на короткий ответ, но анализ ответов студента основан на регулярных выражениях';
$string['privacy:metadata'] = 'Плагин «Короткий ответ с регулярными выражениями» не хранит никаких персональных данных.';
$string['regexp'] = 'Короткий ответ с регулярными выражениями';
$string['regexp_help'] = 'Щелкните правой кнопкой мыши на ссылке <em>Дополнительная помощь</em> ниже, чтобы открыть страницу помощи в новой вкладке/окне.';
$string['regexp_link'] = 'question/type/regexp';
$string['regexperror'] = 'Ошибка в регулярном выражении:<strong>{$a}</strong>';
$string['regexperrorsqbrack'] = 'Квадратные скобки';
$string['regexpsensitive'] = 'Использует регулярные выражения для проверки ответов';
$string['regexpsummary'] = 'Подобно короткому ответу, но анализ ответов ученика основан на регулярных выражениях';
$string['settingsformultipletries'] = 'Настройки для нескольких попыток и покупки букв или слов';
$string['showhidealternate'] = 'Показать/скрыть альтернативные ответы';
$string['showhidealternate_help'] = 'Вычислить и отобразить все правильные ответы в этой форме? Это может занять довольно много времени в зависимости от количества и сложности регулярных выражений, которые вы ввели в поля ответа!

С другой стороны, это рекомендуемый способ проверить правильность написания выражений «правильные ответы».';
$string['studentshowalternate'] = 'Показать альтернативные варианты';
$string['studentshowalternate_help'] = 'Показывать <strong>все</strong> правильные альтернативные ответы ученику на странице обзора? Если есть много автоматически сгенерированных правильных альтернативных ответов, отображение их всех может сделать страницу обзора довольно длинной.';
$string['usehint'] = 'Режим «Кнопка помощи«';
$string['usehint_help'] = 'При выборе режима, отличного от <strong>Нет</strong>, на экране появится кнопка, позволяющая студенту получить следующую букву или слово.

В режиме «<strong>Адаптивный</strong>» отображаемая кнопка будет называться «<strong>Купить следующую букву</strong>» или «<strong>Купить следующее слово</strong>» в зависимости от режима, выбранного учителем. О том, как настроить «стоимость» покупки буквы или слова, см. <strong>Штраф за неправильные попытки и Покупка буквы или слова</strong> далее на этой странице.

В режиме «<strong>Адаптивный без штрафа</strong>» на кнопка будет отображаться «<strong>Получить следующую букву</strong>» или «<strong>Получить следующее слово</strong>».

По умолчанию значение режима кнопки помощи установлено на <b>Нет</b>.';
$string['word'] = 'Слово';
$string['wordorpunctuation'] = 'Слово или знак препинания';
$string['wrongwords'] = 'Неправильные слова';
