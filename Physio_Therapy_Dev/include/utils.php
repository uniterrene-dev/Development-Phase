<?php
class utils{

	public function log($str, $type, $system) {
                //global $pub_config;
                
                global $dbpush_ads_config;
                
                //$filepath = '/tmp/myhealth.log';
                
                $log = date('Y-m-d H:i:s')."\t".$type."\t".'['.$system.']'."\t".$str."\n";
                //$rc = file_put_contents($filepath, $log, FILE_APPEND);
        }
}
?>
