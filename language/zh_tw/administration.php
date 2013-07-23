<?php

  /**
  * @http://www.projectpier.org/
  * 
  * Translated by Martin Liu (http://martinliu.cn)
  *  Reviewed on 2011-1-15 7PM
  */
  return array(

    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => '測試郵件設置',
    'administration tool desc test_mail_settings' => '使用這個簡單的工具來檢查,伺服器是否被合理的配置並能夠成功地發送郵件',
    'administration tool name mass_mailer' => '批量郵件發送器', 
    'administration tool desc mass_mailer' => '此簡單的工具能夠讓您給系統中某組中的所有人發送純文本信息',

    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => '配置',
    
    'mail transport mail()' => '預設PHP設置',
    'mail transport smtp' => 'SMTP伺服器',
    
    'secure smtp connection no'  => '否',
    'secure smtp connection ssl' => '是,使用SSL',
    'secure smtp connection tls' => '是,使用TLS',
    
    'file storage file system' => '文件系統',
    'file storage mysql' => '資料庫(MySQL)',
    
    // Categories
    'config category name general' => '常規',
    'config category desc general' => '常規ProjectPier系統設置',
    'config category name mailing' => '郵件發送',
    'config category desc mailing' => '使用此配置來設置ProjectPier系統如何發送郵件通知。你可以按照php.ini文件中提供的信息配置，或者使用SMTP伺服器的配置信息',
    'config category name features' => '功能',
    'config category desc features' => '使用如下參數來啟用或者禁用不同的功能，或者選擇專案數據顯示的不同方式',
    'config category name database' => '資料庫',
    'config category desc database' => '使用如下參數類配置資料庫相關選項',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => '地點名稱',
    'config option desc site_name' => '這個值將被作為專案的地點名稱在儀錶板頁面上顯示',
    'config option name file_storage_adapter' => '文件存儲',
    'config option desc file_storage_adapter' => '選擇用來存儲附件、頭像、圖標圖片和其他任何上傳文檔的位置。 <strong>推薦使用資料庫引擎存儲</strong>.',
    'config option name default_project_folders' => '預設文件夾',
    'config option desc default_project_folders' => '當一個專案被創建的時候，會生成一個文件夾。每一個文件夾名稱應該佔新的一行。 重復的或者空行將被程序忽略',
    'config option name theme' => '樣式',
    'config option desc theme' => '使用樣式功能你可以改變Projectpier系統預設的外觀和顏色',
    'config option name calendar_first_day_of_week' => '每周的第一天',
    'config option name check_email_unique' => '郵件地址必須是唯一的',
    'config option name remember_login_lifetime' => '保持登錄狀態的秒數',
    'config option name installation_root' => 'Web站點的路徑',
    'config option name installation_welcome_logo' => '登錄頁面的Logo圖標',
    'config option name installation_welcome_text' => '登錄頁面上的文字',
    'config option name installation_base_language' => '基礎語言(也用於登錄頁面)',

    // LDAP authentication support
    'config option name ldap_domain' => 'LDAP 域名',
    'config option desc ldap_domain' => '活動目錄域名',
    'config option name ldap_host' => 'LDAP 主機',
    'config option desc ldap_host' => '活動目錄主機名或者IP地址',
    'secure ldap connection no' => '否',
    'secure ldap connection tls' => '是，使用TLS',
    'config option name ldap_secure_connection' => '使用安全LDAP連接',
    
    // ProjectPier
    'config option name upgrade_check_enabled' => '使用升級包在線檢查',
    'config option desc upgrade_check_enabled' => '如果選 \'是\' 系統將每天檢查是否ProjectPier有可以下載的新版本發布',
    'config option name logout_redirect_page' => '退出頁面重定向頁面',
    'config option desc logout_redirect_page' => '配置當用戶退出系統後，被重定向的跳轉頁面。使用預設字元串變更到預設配置',
    
    // Mailing
    'config option name exchange_compatible' => 'Microsoft Exchange相容模式',
    'config option desc exchange_compatible' => '如果您使用的是Microsoft Exchange 伺服器，設置這個選項為是， 來避免一些已知錯誤。',
    'config option name mail_transport' => '郵件發送',
    'config option desc mail_transport' => '使用預設的PHP配置來發送郵件，或者指定一個 SMTP伺服器',
    'config option name mail_from' => '郵件發件人: 地址',
    'config option name mail_use_reply_to' => '用於回復: 給發件人',
    'config option name smtp_server' => 'SMTP 伺服器',
    'config option name smtp_port' => 'SMTP 埠',
    'config option name smtp_authenticate' => '使用SMTP認證',
    'config option name smtp_username' => 'SMTP 用戶名',
    'config option name smtp_password' => 'SMTP 密碼',
    'config option name smtp_secure_connection' => '使用安全SMTP連接',

    'config option name per_project_activity_logs' => '專案前期活動記錄',
    'config option name categories_per_page' => '每頁分類的數量',

    'config option name character_set' => '使用的字元集',
    'config option name collation' => '字元集排序',

    'config option name session_lifetime' => '會話剩餘時間',
    'config option name default_controller' => '預設主頁',
    'config option name default_action' => '預設次頁',

    'config option name logs_show_icons' => '在應用記錄中顯示圖標',
    'config option name default_private' => '私有選項為預設設置',
  ); // array
  

?>
