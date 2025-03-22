<?php
/**
 * Регистрация пакетов ресурсов темы Cap.
 * 
 * Тема Cap.
 */

use Gm\View\ClientScript;

/**
 * Класс регистрации ресурсов темы.
 * 
 * @package Theme
 * @subpackage Cap
 * @version 1.0
 */
class Asset extends \Gm\Theme\ThemeAsset
{
    /**
     * Формирует метаданные документа для основной страницы.
     * 
     * @return void
     */
    public function main()
    {
        // регистрация JS и CSS пакетов
        $this->script
            ->appendPackage('theme', [
                'theme' => true,
                'css'   => [
                    'styles.css' => ['/assets/css/styles.css', ClientScript::POS_HEAD],
                ],
                'js' => [
                    'scripts.js' => ['/assets/js/scripts.js', ClientScript::POS_END]
                ]
            ])
            ->registerPackages('theme', 'gm');
    }
}
