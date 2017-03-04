<?php
/**
 * Eliasis PHP Framework application
 *
 * @author     Josantonius - hola@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Eliasis-Framework/Eliasis
 * @since      1.0.0
 */

namespace App\Modules\ForkMeGitHub\Controller;

use Josantonius\Asset\Asset;
    
/**
 * Module main controller.
 *
 * @since 1.0.0
 */
class ForkMeGitHub extends Controller {

    const ASSETS_URL = MODULES_URL . 'ForkMeGitHub' . DS . 'assets' . DS;

    /**
     * Actions for css hook.
     *
     * @since 1.0.0
     */
    public function css() {

        Asset::css(self::ASSETS_URL . 'css' . DS . 'style.css');
    }

    /**
     * Actions for top hook.
     *
     * @since 1.0.0
     */
    public function top() {

        self::$view->renderizate(dirname(__DIR__) . DS . 'view' . DS . 'strip');
    }
}
