<?php
/**
 * @version     1.0.0
 * @package     com_rubrinfo
 * @copyright   Copyright (C) 2014. Todos los derechos reservados.
 * @license     Licencia Pública General GNU versión 2 o posterior. Consulte LICENSE.txt
 * @author      Irvandoval <irvandoval@gmail.com> - http://
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

// Execute the task.
$controller	= JControllerLegacy::getInstance('Rubrinfo');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
