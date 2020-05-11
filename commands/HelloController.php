<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex($message = 'hello world')
    {
        for ($i = 1; $i <= 100; $i++){
            if ($i % 15 == 0) {
                echo 'FizzBuzz'.PHP_EOL;
                continue;
            }
            if ($i % 5 == 0){
                echo 'Buzz'.PHP_EOL;
                continue;
            }
            if ($i % 3 == 0) {
                echo 'Fizz'.PHP_EOL;
                continue;
            }
            echo $i.PHP_EOL;
        }
        echo $message . "\n";

        return ExitCode::OK;
    }
}
