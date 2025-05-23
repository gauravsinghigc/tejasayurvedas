<?php

/***
  AIO (All In One) Config.php File for core php projects or php projects.
		This file contain all basic requirements for projects and it's configuration just include the file and call required function.
		Change have to done only at App configuration and Database configuration if required, else leave others.
    DEVELOPED BY GAURAVSINGHIGC

    ---
    All Mention formate are being copyrighted by gauravsinghigc--#
    Any miss use may result in un wanted fattle of codes
    showing show many errors
    Need to get support from experience developer.

    -- Thanking for Working with Gauravsinghigc ---
    --- BEST OF LUCK ----
    --- BEST OF LUCK ----
    --- BEST OF LUCK ----
    --- BEST OF LUCK ----
    --- BEST OF LUCK ----
    --- BEST OF LUCK ----
    --- BEST OF LUCK ----
    --- BEST OF LUCK ----
    --- BEST OF LUCK ----

    #############################################################################
 */

//Display Errors
ini_set("display_errors", 1);

//session_start()
session_start();

//App Configurations
//Change configuration according to your need and project requirements


//check SSL is installed or not
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $link = "https";
else
  $link = "http";

// Here append the common URL characters.
$link .= "://";

//dir & domain setup
define("HOST", $HOST = $_SERVER['SERVER_NAME']);

//list of local hosts or servers
define("LOCAL_HOST", array("127.0.0.1", "::1", "localhost", "192.168.1.9", "192.168.43.14", "192.168.1.6", "192.168.1.7"));

//filter domain from local or live server
if (in_array("" . HOST . "", LOCAL_HOST)) {
  define("DOMAIN", $link . HOST . "/tejasayurveda");
} else {
  define("DOMAIN", $link . HOST);
}

//app constant
define("APP_URL", DOMAIN . "/app");
define("ADMIN_URL", DOMAIN . "/admin");
define("WEB_URL", DOMAIN . "/web");
define("STORAGE_URL", DOMAIN . "/storage");
define("STORAGE_URL_D", DOMAIN . "/storage/default");
define("STORAGE_URL_U", DOMAIN . "/storage/users");
define("AUTH_URL", DOMAIN . "/auth");
define("CONTROLLER", DOMAIN . "/controller");
define("ASSETS_URL", DOMAIN . "/assets");
define("LOGIN_BG_IMAGE", STORAGE_URL_D . "/bg/" . CONFIG("LOGIN_BG_IMAGE"));

//Company Profile
define("APP_NAME", CONFIG("APP_NAME"));
define("APP_LOGO", CONFIG("APP_LOGO"));
define("TAGLINE", CONFIG("TAGLINE"));
define("OWNER_NAME", CONFIG("OWNER_NAME"));
define("PRIMARY_PHONE", CONFIG("PRIMARY_PHONE"));
define("PRIMARY_EMAIL", CONFIG("PRIMARY_EMAIL"));
define("SHORT_DESCRIPTION", CONFIG("SHORT_DESCRIPTION"));
define("PRIMARY_ADDRESS", CONFIG("PRIMARY_ADDRESS"));
define("PRIMARY_AREA", CONFIG("PRIMARY_AREA"));
define("PRIMARY_CITY", CONFIG("PRIMARY_CITY"));
define("PRIMARY_STATE", CONFIG("PRIMARY_STATE"));
define("PRIMARY_PINCODE", CONFIG("PRIMARY_PINCODE"));
define("PRIMARY_COUNTRY", CONFIG("PRIMARY_COUNTRY"));
define("PRIMARY_MAP_LOCATION_LINK", CONFIG("PRIMARY_MAP_LOCATION_LINK"));
define("PRIMARY_GST", CONFIG("PRIMARY_GST"));
define("COMPANY_TYPE", CONFIG("COMPANY_TYPE"));
define("FINANCIAL_YEAR", CONFIG("FINANCIAL_YEAR"));
define("GST_NO", CONFIG("GST_NO"));

//mail id's setups
define("SENDER_MAIL_ID", CONFIG("SENDER_MAIL_ID"));
define("RECEIVER_MAIL", CONFIG("RECEIVER_MAIL"));
define("REPLY_TO", CONFIG("REPLY_TO"));
define("SUPPORT_MAIL", CONFIG("SUPPORT_MAIL"));
define("ENQUIRY_MAIL", CONFIG("ENQUIRY_MAIL"));
define("ADMIN_MAIL", CONFIG("ADMIN_MAIL"));


//API keys, 3rd party variables and add-on
define("SMS_API_KEY", CONFIG("SMS_API_KEY"));

//downloadable & add-on links
define("DOWNLOAD_ANDROID_APP_LINK", CONFIG("DOWNLOAD_ANDROID_APP_LINK"));
define("DOWNLOAD_IOS_APP_LINK", CONFIG("DOWNLOAD_IOS_APP_LINK"));
define("DOWNLOAD_BROCHER_LINK", CONFIG("DOWNLOAD_BROCHER_LINK"));

//developer details
define("DEVELOPER_DOMAIN", "tddigitalsolution.com");
define("DEVELOPED_BY", "TD DIGITAL SOLUTIONS");
define("DEVELOPER_URL", "http://" . DEVELOPER_DOMAIN);
define("DEVELOPER_SUPPORT_PHONE", "00000000000");
define("DEVELOPER_SUPPORT_MAIL_ID", "info@tddigitalsolution.com");
define("DEVELOPER_SUPPORT_PANEL", "http://" . DEVELOPER_DOMAIN . "/support");
define("DEVELOPER_SUPPORT_APP_LINK", "");

//Controll activity or die activities, function 
define("CONTROL_WORK_ENV", CONFIG("CONTROL_WORK_ENV"));
define("CONTROL_SMS", CONFIG("CONTROL_SMS"));
define("CONTROL_MAILS", CONFIG("CONTROL_MAILS"));
define("CONTROL_NOTIFICATION", CONFIG("CONTROL_NOTIFICATION"));
define("CONTROL_MSG_DISPLAY_TIME", CONFIG("CONTROL_MSG_DISPLAY_TIME"));
define("CONTROL_APP_LOGS", CONFIG("CONTROL_APP_LOGS"));
define("CONTROL_NOTIFICATION_SOUND", CONFIG("CONTROL_NOTIFICATION_SOUND"));
define("WEBSITE", CONFIG("WEBSITE"));
define("APP", CONFIG("APP"));

//payment gateway configurations
define("PG_OPTIONS", array("RAZORAPAY", "PAYTM"));
define("ONLINE_PAYMENT_OPTION", CONFIG("ONLINE_PAYMENT_OPTION"));
define("PG_MODE", CONFIG("PG_MODE"));
define("PG_PROVIDER", CONFIG("PG_PROVIDER"));
define("MERCHENT_ID", CONFIG("MERCHENT_ID"));
define("MERCHANT_KEY", CONFIG("MERCHANT_KEY"));
define("MAX_ORDER_QTY", CONFIG("MAX_ORDER_QTY"));
define("MIN_ORDER_QTY", CONFIG("MIN_ORDER_QTY"));

//user roles
define("USER_ROLES", array("SUPER_ADMIN", "ADMIN", "RECEPTION", "CUSTOMER", "DOCTORS"));
