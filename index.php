<?php
/**
 * Super mini php proxy
 * claudio.mulas@lucla.biz
 *
 * PHP version 5
 *
 *
 * @package    Super mini php proxy
 * @author     Claudio Mulas <claudio.mulas@lucla.biz>
 * @copyright  2013 Claudio Mulas
 * @license    Do whatever you want!
 * @version    SVN: $Id$
 * @link       http://www.luclanet.it
 */
if (!isset($_SERVER['REDIRECT_QUERY_STRING'])) $_SERVER['REDIRECT_QUERY_STRING'] = "";

$url = $_SERVER['REDIRECT_QUERY_STRING'];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$out = curl_exec($ch);

header("Content-type: ".curl_getinfo($ch, CURLINFO_CONTENT_TYPE));
echo $out;
