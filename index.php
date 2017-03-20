<?php
include_once '/php-graph-sdk-5.0.0/src/facebook/autoload.php';

use Facebook\FacebookRequest;
use Facebook\FacebookRequestException;
use Facebook\FacebookSession;

/* ==================================================================================
 * Application : Tutorial Demo
 * App ID : 901608206564948
 * App Secret : 01c4cbb35e3aef6030872000308c86d0
 * Link App : https://developers.facebook.com/apps/
 * ================================================================================== */

 FacebookSession::setDefaultApplication('1641423549236745', 'ecd3c7994b1ebb8d8b236e540c356770');

/* ==================================================================================
 * Access Token
 * Token : CAAM0AgTgZClQBADi5Ex15ZBolmZAWLa2H6jPyb7 .... (ยาวมาก)
 * Link : https://developers.facebook.com/tools/explorer/
 * ================================================================================== */

 $session = new FacebookSession('EAAXU3bOUBgkBAGhUAV0pPV7qjR18zfXs027qKliZA830dJlWTVdyOgwIiWPcaESrOterJWitwN1JMei7No1Qd8qGVRTC5Sy7lsQmeo16z6JZA5VDLuS6Pu1XyJvUJyAPqkeWlhRmZAKrfpRAaOE4GVgEYyCCrIntPjwkC0jQy4XgHm3juS2ZASe9AZAS39aoZD');

if($session) {

    /*
     * Login ผ่าน
     */

    echo 'OK !!';

} else {

    /*
     * Login ไม่ผ่าน
     */

    echo 'Not OK !!';
    ?>

}
