<?php
/**
 * TaskController class file.
 * @author Ricardo Obregón <ricardo@obregon.co>
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Ricardo Obregón 2012-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package auth.controllers
 */

/**
 * Controller for task related actions.
 */
class TaskController extends AuthItemController
{
    /**
     * @var integer the item type (0=operation, 1=task, 2=role).
     */
    public $type = CAuthItem::TYPE_TASK;
}
