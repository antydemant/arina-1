<?php

use nullref\core\traits\MigrationTrait;
use yii\db\Migration;

class m161020_172823_add_subject_data extends Migration
{
    use MigrationTrait;

    public function up()
    {
        $this->batchInsert('{{%subject}}', ['id', 'title', 'code', 'short_name', 'practice'],
            [
                [120, 'Географія', 'ЗО.13', 'Географія', NULL],
                [119, 'Біологія', 'ЗО.12', 'Біологія', NULL],
                [117, 'Фізика', 'ЗО.10', 'Фізика', NULL],
                [118, 'Астрономія', 'ЗО.11', 'Астрономія', NULL],
                [116, 'Геометрія', 'ЗО.09', 'Геометрія', NULL],
                [115, 'Алгебра', 'ЗО.09', 'Алгебра', NULL],
                [113, 'Людина і світ', 'ЗО.07', 'Людина і світ', NULL],
                [114, 'Художня культура', 'ЗО.08', 'Худ.культура', NULL],
                [156, 'Дискретні структури', '4,11', 'Дискретні структури', NULL],
                [155, 'Економіка та організація виробництва', '4,10', 'Економіка та орг. вироб', NULL],
                [154, 'Автоматизовані інформаційні системи', '4,9', 'АІС', NULL],
                [105, 'Українська мова', 'ЗО.01', 'Укр.мова', NULL],
                [106, 'Українська література ', 'ЗО.02', 'Укр.літ', NULL],
                [107, 'Іноземна мова', 'ЗО.03', 'Іноз. мова', NULL],
                [108, 'Світова література', 'ЗО.04', 'Світ.літ.', NULL],
                [157, 'Ліцензування та сертифікація програмних продуктів', '4,12', 'Ліц. та серт. ПЗ', NULL],
                [158, 'Програмування Інтернет-застосувань', '4,13', 'Програмування Інтернет-застосувань', NULL],
                [159, 'Основи програмування', '3,01', 'Осн.прог', NULL],
                [160, 'Історія  України', '1,01', 'Історія України', NULL],
                [161, 'Українська мова (за професійним спрямуванням)', '1,02', 'Укр.мова проф', NULL],
                [162, 'Культурологія', '1,03', 'Культурологія', NULL],
                [163, 'Основи філософських знань', '1,04', 'філософія', NULL],
                [110, 'Всесвітня історія', 'ЗО.06', 'Всес.іст.', NULL],
                [109, 'Історія України', 'ЗО.05', 'Іст.Укр', NULL],
                [137, 'Конструювання програмного забезпечення', '3,11', 'КПЗ', NULL],
                [138, 'Проектний практикум', '3,12', 'Прок.практикум', NULL],
                [139, 'Охорона праці', '3,13', 'Ох. праці', NULL],
                [140, 'Охорона праці в галузі', '3,15', 'Ох праці в галуз', NULL],
                [141, 'Практика з програмування', '3,15', 'Практика з прог', NULL],
                [142, 'Практика з ОС та ООП', '3,16', 'Практика з ОС та ООП', NULL],
                [143, 'Технологічна практика', '3,17', 'Технологічна практика', NULL],
                [144, 'Переддипломна практика', '3,18', 'Переддипломна практика', NULL],
                [145, 'Дипломне проктування', '3,19', 'Дипломне проктування', NULL],
                [146, 'Основи психології та педагогіки', '4,1', 'Основи психології та педагогіки', NULL],
                [147, 'Політологія', '4,2', 'Політологія', NULL],
                [148, 'Підприємництво та менеджмент', '4,3', 'Підприємництво та менеджмент', NULL],
                [149, 'Англійська мова (технічний переклад)', '4,4', 'Англійська мова (технічний переклад)', NULL],
                [150, 'Комп\'ютерна графіка', '4,5', 'Комп\'ютерна графіка', NULL],
                [151, 'Групова дінаміка і комунікації', '4,6', 'ГДК', NULL],
                [152, 'Засоби системного програмування', '4,7', 'ЗСП', NULL],
                [153, 'Дослідження операцій', '4,8', 'Досл. операцій', NULL],
                [127, 'Вступ в спеціальність', '3.01', 'Вступ ', NULL],
                [128, 'Об\'єктно-орієнтоване програмування', '3,02', 'ООП', NULL],
                [129, 'Алгоритми і структури даних', '3,03', 'Алг і стр.дан', NULL],
                [130, 'Операційні системи', '3,04', 'ОС', NULL],
                [131, 'Інструментальні засоби візуального програмування', '3,05', 'ІЗВП', NULL],
                [132, 'Бази даних', '3,06', 'БД', NULL],
                [133, 'Людинно-машинна взаємодія', '3,08', 'ЛМВ', NULL],
                [134, 'Архітектура комп\'ютерів', '3.08', 'Арх. комп', NULL],
                [135, 'Організація комп\'ютерних мереж', '3,09', 'ОКМ', NULL],
                [136, 'Основи програмної інженерії', '3,10', 'ОПІ', NULL],
                [164, 'Математика', 'ЗО.09', 'Математика', NULL],
                [165, 'Інформатика', 'ЗО.17', 'Інформатика', NULL],
                [166, 'Економічна теорія', '1,05', 'Економіка', NULL],
                [167, 'Основи правознавства', '1,06', 'Правознавство', NULL],
                [168, 'Іноземна мова (за професійним спрямуванням)', '1,08', 'Іноз. мова (проф.)', NULL],
                [170, ' Фізика ', '2,02', 'Фізика', NULL],
                [171, 'Лінійна алгебра та аналітична геометрія', '2,03', 'Лін. алгебра', NULL],
                [172, 'Математичний аналіз', '2,04', 'мат. аналіз', NULL],
                [173, 'Дискретна математика', '2,07', 'дис. математика', NULL],
                [174, 'Безпека життєдіяльності', '2,09', 'БЖД', NULL],
                [175, 'Технології', '3,10', 'технології', NULL],
                [177, 'Диференціальні рівняння', '2,05', 'диф. рівняння', NULL],
                [176, 'Фізичне виховання', '1,09', 'фіз. вих.', NULL],
                [178, 'Теорія ймовірності і матем. статистика', '2,06', 'ТІ і матем. стат.', NULL],
                [179, 'Чисельні методи', '2,08', 'чис. методи', NULL],
                [180, 'Основи охорони праці', '3,13', 'Осн. ОП', NULL],
                [181, 'Основи веб-програмування', '4,7', 'веб-програмування', NULL],
                [182, 'Соціологія', '1,07', 'соціологія', NULL],
                [183, 'Людино-машинна взаємодія', '3,07', 'ЛМВ', NULL],
                [184, 'Економіка програмної інженерії', '4,10', 'економіка ПІ', NULL],
                [185, 'Вища математика', '2,1', 'вища математика', NULL],
                [186, 'Теорія електричних та магнітних кіл', '2,4', 'ТЕМК', NULL],
                [187, 'Комп\'ютерна логіка', '2,8', 'КЛ', NULL],
                [188, 'Програмування', '3,3', 'програмування', NULL],
                [189, 'Основи електроніки', '3,4', 'основи електроніки', NULL],
                [190, 'Інженерна та комп\'ютерна графіка', '2,3', 'ІТКГ', NULL],
                [191, 'Алгоритми та методи обчислень', '2,7', 'АТМО', NULL],
                [192, 'Комп\'ютерна електроніка', '3,01', 'КЕ', NULL],
                [193, 'Електрорадіовимірювання', '3,4', 'електрорадіовимірювання', NULL],
                [194, 'Системне програмування', '2,10', 'сис. програмування', NULL],
                [195, 'Комп\'ютерна схемотехніка', '3,11', 'КС', NULL],
                [196, 'Периферійні пристрої', '3,08', 'ПП', NULL],
                [197, 'Комп\'ютерні системи та мережі', '3,09', 'КСТМ', NULL],
                [198, 'Надійність, діагностика та експлуатація КС та КМ.', '3,12', 'НДТЕКС', NULL],
                [199, 'Економіка і планування виробництва', '3,14', 'економіка', NULL],
                [200, 'Захист інформації в комп\'ютерних системах', '3,4', 'ЗІВКС', NULL],
                [121, 'Хімія', 'ЗО.14', 'Хімія', NULL],
                [122, 'Екологія', 'ЗО.15', 'Екологія', NULL],
                [123, 'Технології (Вступ в спеціальність)', 'ЗО.16', 'Технології', NULL],
                [124, 'Інформатика (основи програмування)', 'ЗО.17', 'Інформатика', NULL],
                [125, 'Фізична культура', 'ЗО.18', 'Фіз.культ', NULL],
                [126, 'Захист Вітчизни', 'ЗО.19', 'Захист Вітчизни', NULL],
                [112, 'Економіка', 'ЗО.07', 'Економіка', NULL],
                [111, 'Правознавство', 'ЗО.07', 'Правознавство', NULL],

            ]
        );
    }

    public function down()
    {
        $this->truncateTable('{{%subject}}');
    }

    public function to()
    {
        $this->truncateTable('{{%subject}}');
    }
}