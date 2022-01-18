
## Подготовка проекта
Создана папку проекта ik-understrap - в неё перенесён рабочий composer.json.

Плагины добавлялись через Composer командой:

```bash
$ composer require wpackagist-plugin/theme-check
```
В папке из консоли выполняется команда

```bash
$ composer install
```
Устанавливаются Wordpress и плагины.

Создаётся база данных ikunderstrap
Настраивается домен в Openserver
Устанавливаются Wordpress.

При установке темы Understrap через панель администратора отсутствует система сборки SASS,
поэтому скачивается тема с гитхаба и устанавливается а Вордпресс
https://github.com/understrap/understrap

Создаётся пустая папка для темы - ik-undestrap
В этой папке инкрементно будет создаваться тема копированием и редактированием оригинальных файлов Undestrap.
Она же - git репозиторий.
В папке создаётся файл README.md и весь этот текст копируется туда.

## Создание репозитория на Гитхаб

На Github cоздаём новый пустой репозиторий - "ik-understrap"

Локально из папки проекта:

```bash
git init
git add README.md
git commit -m "first commit"
git branch -M master
git remote add origin https://github.com/i-koptev/ik-understrap.git
git push -u origin master
```

## Создание необходимых файлов темы

Создаются два файла, необходимых для того, чтобы директория распознавалась Вордпресс как тема:
```shell
style.css
index.php
```
## Копирование файлов из темы Uderstrap

Копируются файлы:

- .editorconfig - настройки редактора ( для Шторма похоже избыточны )
- .browserslistrc - настройки для Автопрефиксера
- .gitignore
- .jscsrc - настройки линтера
- .jshintignore - игнор для линтера
- package.json - система сборки SASS


