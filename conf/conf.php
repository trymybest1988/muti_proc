<?php
if (! defined('MUTIPROC')) exit('No direct script access allowed');

/* 配置数组 */
$mutiproc_config                                     = array();

/* 多进程管理类相关配置 */
$mutiproc_config['muti_proc']['log_level']           = 'DEBUG';
$mutiproc_config['muti_proc']['max_proc_num']        = 4;
$mutiproc_config['muti_proc']['max_excute_time']     = 3000 * 10;


/* End of file conf.php */
/* Location: ./conf/conf.php */