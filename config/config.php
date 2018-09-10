<?php
/*
*Copyright (C) 2012-2013  Psychokiller
*
*This program is free software; you can redistribute it and/or modify it under the terms of
*the GNU General Public License as published by the Free Software Foundation; either
*version 3 of the License, or any later version.
*
*This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
*without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*See the GNU General Public License for more details.
*
*You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>.
*/
if(!defined("SECURECHECK")) {die($lang['error_file_alone']);}

$server[0]['alias'] = (!empty(getenv('ALIAS')) ? (string)getenv('ALIAS') : "Local TeamSpeak Server");
$server[0]['ip'] = (!empty(getenv('HOST')) ? (string)getenv('HOST') : "ts3");
$server[0]['tport'] = (!empty(getenv('PORT')) ? (string)getenv('PORT') : "10011");
// Available languages: German => "de", English => "en", Netherlandish => "nl"
$cfglang = (!empty(getenv('LANG')) ? (string)getenv('LANG') : "en");
$duration = "100";				//Set the Limit for Clients show per Page on Client List
$fastswitch=true;				//If true you can switch the Server on the header
$showicons="left";				//Define the position where the icons on the Viewer will show left or right
$style="new";					//Chose your design  set 'new' for the default design or the name of your own create design
$msgsend_name="Webinterface";	//This Name will be show if you send a message to a Server
$show_motd=true;				// Set it to false to not show the message of the day window
?>