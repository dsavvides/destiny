<?php
$clanid=  2916191;

$a= "https://www.bungie.net/Platform";
$clan = "/Destiny2/Clan/".$clanid."/WeeklyRewardState/";
$clanLeaderboards = "/Destiny2/Stats/Leaderboards/Clans/".$clanid."/";
$findPlayer = "/Destiny2/SearchDestinyPlayer/2/dsavvy83/";
$GetProfile = "/Destiny2/2/Profile/4611686018433747360/";
$gememid = "/User/GetMembershipsById/4611686018433747360/254/";
$part = "/User/4611686018433747360/Partnerships/";

    
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$a.$GetProfile); 
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HTTPHEADER,array('X-API-Key: 95e1b68652a641fd8f8973d064706a59'));
        $json = json_decode(curl_exec($ch));
echo "<pre>";
         print_r($json);
echo "</pre>";        
if(gettype($json)=="NULL"){
            // If we get no data, clearly there's something wrong.
            throw new Exception("Fatal Error.  Status Code A1: Bad Query For API.");
            unset($json);
            unset($ch);
        }
        $errorCode = $json->ErrorCode;
        $errorStatus = $json->ErrorStatus;
        $errorMessage = $json->Message;





/*
None: 0
TigerXbox: 1
TigerPsn: 2
TigerBlizzard: 4
TigerDemon: 10
BungieNext: 254
All: -1

              (
                    [iconPath] => /img/theme/destiny/icons/icon_psn.png
                    [membershipType] => 2
                    [membershipId] => 4611686018433747360
                    [displayName] => dsavvy83
                )



Destiny2.GetProfile
Destiny2

Verb: GET
Path: /User/GetMembershipsById/{membershipId}/{membershipType}/
Path: /Destiny2/{membershipType}/Profile/{destinyMembershipId}/

67a6489d531646faaba1105a3a80967d
95e1b68652a641fd8f8973d064706a59





            [bungieNetUser] => stdClass Object
                (
                    [membershipId] => 6092275
                    [uniqueName] => 6092275
                    [displayName] => dsavvy83
                    [profilePicture] => 70346
                    [profileTheme] => 1111
                    [userTitle] => 0
                    [successMessageFlags] => 0
                    [isDeleted] => 
                    [about] => 
                    [firstAccess] => 2014-09-09T20:21:12.412Z
                    [lastUpdate] => 2017-09-12T06:42:57.68Z
                    [psnDisplayName] => dsavvy83
                    [showActivity] => 1
                    [locale] => en
                    [localeInheritDefault] => 1
                    [showGroupMessaging] => 1
                    [profilePicturePath] => /img/profile/avatars/oonsk.gif
                    [profileThemeName] => d2_11
                    [userTitleDisplay] => Newbie
                    [statusText] => Add me to your fireteam :)
                    [statusDate] => 2015-09-22T10:55:33.796Z
                )












*/
?>