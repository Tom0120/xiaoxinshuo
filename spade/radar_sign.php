<?php
/**
 * ECSHOP 商品雷达生成签名文件
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * ECSHOP官网: http://www.ecshop.com；商品雷达官网 :http://www.sradar.cn;
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: yujian $
 * $Id: radar_sign.php 17217 2012-04-20 06:29:08Z yujian $
 * 
*/
function __assemble($params)
{
    if(!is_array($params))  return null;
    ksort($params,SORT_STRING);
    $sign = '';
    foreach($params AS $key=>$val){
        $sign .= $key . (is_array($val) ? __assemble($val) : $val);
    }
    return $sign;
}
    
    
function getRadarSign()
{
	$sql = "SELECT value FROM " . $GLOBALS['ecs']->table('shop_config') . " WHERE code = 'certificate_id'";
    $license = $GLOBALS['db']->getOne($sql);
	$sql = "SELECT value FROM " . $GLOBALS['ecs']->table('shop_config') . " WHERE code = 'token'";
    $token = $GLOBALS['db']->getOne($sql);  
    $data = array(
	    'radar_lincense_id'	=>	$license,
	    'radar_product_key'	=>	'ecshop'
    );
    $sign = strtoupper(md5(strtoupper(md5(__assemble($data))).$token));

    return $sign;
}