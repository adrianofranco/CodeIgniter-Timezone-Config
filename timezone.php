<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Adriano Franco CodeIgniter Timezone config
 *
 * @package		Adriano Franco
 * @author		Adriano Franco
 * @copyright	Copyright (c) 2014, Adriano Franco LLC.
 * @license		http://www.opensource.org/licenses/mit-license.php
 * @link		http://adrianofranco.com.br
 * @version		v1.0
 * @filesource
 *
 *
 * @install		Copy this file to application/config and initialize at autoload file: $autoload['config'] = array('timezone');
 *                      Check default timezone at http://php.net/manual/en/timezones.php
 */


$config['timezone'] = date_default_timezone_set("America/Sao_Paulo");

/* End of file timezone.php */
