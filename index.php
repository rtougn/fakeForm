<?php
global $userBrowser;
global $userAccept;
 
$mobiidentity = array('wapbrowser','up.browser','up/4','mib','cellphone','go.web',
                     'nokia','panasonic','wap','wml-browser','wml','samsung'
                     );

$pcidentity = array(
        'mozilla','gecko','opera','omniweb','msie','konqueror','safari',
        'netpositive' ,'lynx' ,'elinks' ,'links' ,'w3m' ,'webtv' ,'amaya' ,
        'dillo' ,'ibrowse' ,'icab' ,'crazy browser' ,'internet explorer'
        );
 
$pspidentity= array('PlayStation Portable');
$iPhoneidentity= array('iphone');
 
 
$linkformobile = "mobile.php";
$linkforweb = "desktop.php";
 
$userBrowser = strtolower($_SERVER['HTTP_USER_AGENT']); 
$userAccept= strtolower($_SERVER['HTTP_ACCEPT']);
 
 
if (stristr($userAccept,'wml')) {
    $driver = "WML";    
}else{
    if(check_identity($userBrowser, $mobiidentity))
        $driver = "WML";
    elseif(check_identity($userBrowser, $pcidentity))
        $driver = "PC";
    elseif(check_identity($userBrowser, $pspidentity))
        $driver = "WML";
    elseif(check_identity($userBrowser, $iPhoneidentity))
        $driver = "WML";
    else
        $driver = "WML";
}
 
switch ($driver){
  case 'PC':
    header("Location: ".$linkforweb);
    exit;
  case 'WML':
    header("Location: ".$linkformobile);
  exit;
  }
 
function check_identity($userBrowser, $identity){
    foreach($identity as $value){
        if(stristr($userBrowser, $value)){
            return true;
        }
    }
    return false;
}
?>