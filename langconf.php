<?php
/*
Copyright 2023 UUP dump authors

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

//List of languages supported by the website
$supportedLangs = [
    'en-us',
    'pl-pl',
    'de-de',
    'pt-br',
    'pt-pt',
    'nl-nl',
    'fr-fr',
    'zh-cn',
    'ja-jp',
    'es-ar',
    'it-it',
    'ar-sa',
    'ko-kr',
    'zh-tw',
    'hu-hu',
    'tr-tr',
    'ro-ro',
    'ru-ru',
];

/*
List of languages automatically set from user's browser configuration.

These mappings were made only for somewhat complete translations on purpose as
it's better to not force half translated website down to people's throats.
*/
$autoLangMappings = [
    'en-us' => 'en-us',
    'en'    => 'en-us',
    'pl-pl' => 'pl-pl',
    'pl'    => 'pl-pl',
    'de-de' => 'de-de',
    'de'    => 'de-de',
    'ja-jp' => 'ja-jp',
    'ja'    => 'ja-jp',
    'zh-cn' => 'zh-cn',
    'zh'    => 'zh-cn',
    'ar-sa' => 'ar-sa',
    'ar'    => 'ar-sa',
];
