<?php

  /**
  * @http://www.projectpier.org/
  * 
  * Translated by Martin Liu (http://martinliu.cn)
  *  Reviewed on 2011-1-15 7PM
  */


  return array(
  
    // Empty, dnx etc
    'project dnx' => '所請求的專案在資料庫中不存在',
    'message dnx' => '所請求的留言不存在',
    'no comments in message' => '這個留言沒有評論',
    'no comments associated with object' => '這個專案上沒有評論被發表',
    'no messages in project' => '這個專案上沒有留言',
    'no subscribers' => '沒有使用者訂閱這個留言',

    'no activities in project' => '這個專案上還沒有活動被記錄',
    'comment dnx' => '所請求的評論不存在',
    'milestone dnx' => '所請求的里程碑不存在',
    'time dnx' => '所請求的時間記錄不存在',
    'task list dnx' => '所請求的任務清單不存在',
    'task dnx' => '所請求的任務不存在',
    'no milestones in project' => '在這個專案中還沒有里程碑',
    'no active milestones in project' => '在這個專案中還沒有活動的里程碑',
    'empty milestone' => '這個里程碑是空的。你能給它在任何時候增加 <a href="%s">留言</a> 或者 <a href="%s">任務清單</a> ',
    'no logs for project' => '這個專案還沒有記錄相關的留言',
    'no recent activities' => '在資料庫中最近沒有活動被記錄',
    'no open task lists in project' => '在這個專案中還沒有開放的任務清單',
    'no completed task lists in project' => '在這個專案中還沒有完成的任務清單',
    'no open task in task list' => '這個任務清單中還沒有定義任務',
    'no projects in db' => '在資料庫中還沒有定義專案',
    'no projects owned by company' => '還沒有公司來負責的專案',
    'no projects started' => '還沒有已經開始的專案',
    'no active projects in db' => '還沒進行的專案',
    'no new objects in project since last visit' => '從您上一次訪問到現在，這個專案上還沒有新的對象生成',
    'no clients in company' => '您的公司還沒有注冊客戶',
    'no users in company' => '這個公司中沒有使用者存在',
    'client dnx' => '所選擇的客戶公司不存在',
    'company dnx' => '所選擇的公司不存在',
    'user dnx' => '所請求的使用者在資料庫中不存在',
    'avatar dnx' => '頭像不存在',
    'no current avatar' => '沒有上傳頭像',
    'no current logo' => '沒有上傳圖標',
    'user not on project' => '所選擇的使用者沒有參與在被選的專案中',
    'company not on project' => '所選擇的公司沒有參與被選的專案',
    'user cant be removed from project' => '所選擇的使用者不能從這個專案中刪除',
    'tag dnx' => '請求的標簽不存在',
    'no tags used on projects' => '在這個專案中沒有標簽',
    'no forms in project' => '在這個專案中沒有表單',
    'project form dnx' => '所請求的專案表單在資料庫中不存在',
    'related project form object dnx' => '相關的表單對象在資料庫中不存在',
    'no my tasks' => '沒有任務被分派給你',
    'no search result for' => '沒有與 「<strong>%s</strong>」 匹配的結果',
    'config category dnx' => '你請求的配置分類不存在',
    'config category is empty' => '所選擇的配置分類是空的',
    'email address not in use' => '%s 沒有在使用',
    'no administration tools' => '在資料庫中沒有注冊管理工具',
    'administration tool dnx' => '管理工具 「%s」 不存在',
    'about to delete' => '你將刪除',
    'about to move' => '你將移動',
    
    // Success
    'success add project' => '專案 %s 已經被成功增加',
    'success copy project' => '專案 %s 已經被複製為 %s',
    'success edit project' => '專案 %s 已被更新',
    'success delete project' => '專案 %s 已被刪除',
    'success complete project' => '專案 %s 以被完成',
    'success open project' => '專案 %s 已被重新開放',
    'success edit project logo' => '專案圖標已被更新',
    'success delete project logo' => '專案圖標已被刪除',
    
    'success add milestone' => '里程碑 \'%s\' 已經被成功增加',
    'success edit milestone' => '里程碑 \'%s\' 已被更新',
    'success deleted milestone' => '里程碑 \'%s\' 已被刪除',

    'success add time' => '時間 \'%s\' 已經被成功增加',
    'success edit time' => '時間 \'%s\' 已被更新',
    'success deleted time' => '時間 \'%s\' 已被刪除',
    
    'success add message' => '留言 %s 新增成功',
    'success edit message' => '留言 %s 已被更新',
    'success deleted message' => '留言 \'%s\' 和它所有相關評論已被刪除',
    
    'success add comment' => '評論已經被成功發表',
    'success edit comment' => '評論已經被成功更新',
    'success delete comment' => '評論已經被成功刪除',
    
    'success add task list' => '任務清單 \'%s\' 已被增加',
    'success edit task list' => '任務清單 \'%s\' 已被更新',
    'success copy task list' => '任務清單 \'%s\' 被複製為 \'%s\' 帶著 %s 個任務',
    'success move task list' => '任務清單 \'%s\' 被從 \'%s\' 專案中移動到 \'%s\'專案中',
    'success delete task list' => '任務清單 \'%s\' 已被刪除',
    
    'success add task' => '所選的任務已被增加',
    'success edit task' => '所選的任務已被更新',
    'success delete task' => '所選的任務已被刪除',
    'success complete task' => '所選的任務已完成',
    'success open task' => '所選的任務已開放',
    'success n tasks updated' => '%s 個任務已被更新',
     
    'success add client' => '客戶公司 %s 已被增加',
    'success edit client' => '客戶公司 %s 已被更新',
    'success delete client' => '客戶公司 %s 已被刪除',
    
    'success edit company' => '公司數據已被更新',
    'success edit company logo' => '公司圖標已被更新',
    'success delete company logo' => '公司圖標已被刪除',
    
    'success add user' => '使用者 %s 已被增加',
    'success edit user' => '使用者 %s 已被更新',
    'success delete user' => '使用者 %s 已被刪除',
    
    'success update project permissions' => '專案的全新已被更新',
    'success remove user from project' => '使用者已被從這個專案中刪除',
    'success remove company from project' => '公司已被從這個專案中刪除',
    
    'success update profile' => '使用者資料已被更新',
    'success edit avatar' => '頭像已被更新',
    'success delete avatar' => '頭像已被刪除',
    
    'success hide welcome info' => '歡迎訊息框已被隱藏',
    
    'success complete milestone' => '里程碑 \'%s\' 已被完成',
    'success open milestone' => '里程碑 \'%s\' 已被重新開放',
    
    'success subscribe to message' => '你已成功地訂閱了這個留言',
    'success unsubscribe to message' => '你已成功地解除了這個留言的訂閱',
   
    'success add project form' => '表單 \'%s\' 已被增加',
    'success edit project form' => '表單 \'%s\' 已被更新',
    'success delete project form' => '表單 \'%s\' 已被刪除',
    
    'success update config category' => '%s 配置值已被更新',
    'success forgot password' => '你的密碼被用郵件發出',
    
    'success test mail settings' => '測試郵件被成功地發送',
    'success massmail' => '郵件被發送',
    
    'success update company permissions' => '公司權限 %s 已被更新',
    'success user permissions updated' => '使用者許可權已被更新',
    
    // Failures
    'error form validation' => '由於某些屬性數據不合法，對象保存失敗',
    'error delete owner company' => '所屬公司不能被被刪除',
    'error delete message' => '所選留言刪除失敗',
    'error update message options' => '更新留言選項失敗',
    'error delete comment' => '所選評論刪除失敗',
    'error delete milestone' => '所選里程碑刪除失敗',
    'error delete time' => '所選時間刪除失敗',
    'error complete task' => '所選任務標記完成失敗',
    'error open task' => '所選任務重新開放失敗',
    'error delete project' => '所選專案刪除失敗',
    'error complete project' => '所選專案標記完成失敗',
    'error open project' => '所選專案重新開放失敗',
    'error edit project logo' => '專案圖標更新失敗',
    'error delete project logo' => '專案圖標刪除失敗',
    'error delete client' => '所選客戶公司刪除失敗',
    'error delete user' => '所選使用者刪除失敗',
    'error update project permissions' => '專案許可權更新失敗',
    'error remove user from project' => '從專案中刪除使用者失敗',
    'error remove company from project' => '從專案中刪除公司失敗',
    'error edit avatar' => '更新頭像失敗',
    'error delete avatar' => '刪除頭像失敗',
    'error hide welcome info' => '隱藏歡迎訊息失敗',
    'error complete milestone' => '所選里程碑標記完成失敗',
    'error open milestone' => '所選里程碑重新開放失敗',
    'error edit company logo' => '公司圖標更新失敗',
    'error delete company logo' => '公司圖標刪除失敗',
    'error subscribe to message' => '訂閱所選留言失敗',
    'error unsubscribe to message' => '取消訂閱所選留言失敗',

    'error delete task list' => '所選任務清單刪除失敗',
    'error delete task' => '所選任務刪除失敗',
    'error delete category' => '所選分類刪除失敗',
    'error check for upgrade' => '檢查新版本失敗',
    'error test mail settings' => '發送測試信件失敗',
    'error massmail' => '發送郵件失敗',
    'error owner company has all permissions' => '所屬公司具有所有許可權',
    
    // Access or data errors
    'no access permissions' => '你沒有許可權訪問所請求的頁面',
    'invalid request' => '無效的請求!',
    
    // Confirmation
    'confirm delete message' => '你確定要刪除這個留言?',
    'confirm delete milestone' => '你確定要刪除這個里程碑?',
    'confirm delete task list' => '你確定要刪除這個任務清單和它的所有任務?',
    'confirm delete task' => '你確定要刪除這個任務?',
    'confirm delete comment' => '你確定要刪除這個評論?',
    'confirm delete category' => '你確定要刪除這個分類?',
    'confirm delete project' => '你確定要刪除這個專案和它的所有數據(留言, 任務, 里程碑, 文件...)?',
    'confirm delete project logo' => '你確定要刪除這個圖標?',
    'confirm complete project' => '你確定要把這個專案標記完成? 所有專案活動將被鎖定',
    'confirm open project' => '你確定要把這個專案標記開放? 這會把所有專案活動解鎖',
    'confirm delete client' => '你確定要把所選客戶公司和它的所有使用者都全部刪除?',
    'confirm delete user' => '你確定要把這個使用者賬號刪除?',
    'confirm reset people form' => '你確定要把這個表單重置? 你做的所有修改將丟失!',
    'confirm remove user from project' => '你確定要把這個使用者從專案中刪除?',
    'confirm remove company from project' => '你確定要把這個公司從專案中刪除?',
    'confirm logout' => '你確定要從系統中退出?',
    'confirm delete current avatar' => '你確定要把此頭像刪除?',
    'confirm delete company logo' => '你確定要把此公司圖標刪除?',
    'confirm subscribe' => '你確定要訂閱此留言? 你想在除你之外的人對此留言評論的時候收到通知郵件',
    'confirm reset form' => '你確定要重置這個表單?',
    
    // Errors...
    'system error message' => '抱歉，但是有個錯誤導致你的請求無法執行。一個錯誤報告已被發給了系統管理員',
    'execute action error message' => '抱歉，但是ProjectPier現在無法執行你的請求。一個錯誤報告已被發給了系統管理員',
    
    // Log
    'log add projectmessages' => '\'%s\' 已被增加',
    'log edit projectmessages' => '\'%s\' 已被更新',
    'log delete projectmessages' => '\'%s\' 已被刪除',
    
    'log add comments' => '%s 已被增加',
    'log edit comments' => '%s 已被更新',
    'log delete comments' => '%s 已被刪除',
    
    'log add projectmilestones' => '\'%s\' 已被增加',
    'log edit projectmilestones' => '\'%s\' 已被更新',
    'log delete projectmilestones' => '\'%s\' 已被刪除',
    'log close projectmilestones' => '\'%s\' 已完成',
    'log open projectmilestones' => '\'%s\' 已重新開放',

    'log add projecttimes' => '\'%s\' 已被增加', 
    'log edit projecttimes' => '\'%s\' 已被更新',
    'log delete projecttimes' => '\'%s\' 已被刪除',
    
    'log add projecttasklists' => '\'%s\' 已被增加',
    'log edit projecttasklists' => '\'%s\' 已被更新',
    'log delete projecttasklists' => '\'%s\' 已被刪除',
    'log close projecttasklists' => '\'%s\' 已被關閉',
    'log open projecttasklists' => '\'%s\' 已被開放',
    
    'log add projecttasks' => '\'%s\' 已被增加',
    'log edit projecttasks' => '\'%s\' 已被更新',
    'log delete projecttasks' => '\'%s\' 已被刪除',
    'log close projecttasks' => '\'%s\' 已被關閉',
    'log open projecttasks' => '\'%s\' 已被開放',
  
    'log add projectforms' => '\'%s\' 已被增加',
    'log edit projectforms' => '\'%s\' 已被更新',
    'log delete projectforms' => '\'%s\' 已被刪除',
  
    'log add projects' => '%s 已被增加',


  // messages.php Merge Result
  'no status updates associated with object' => '這個項目沒有公布的狀態更新',
  'no contacts in company' => '這個公司沒有聯絡人',
  'contact dnx' => '選擇的聯絡人並不存在',
  'no image functions' => '沒有圖片功能(請安裝GD函式庫)',
  'no ldap functions' => '沒有LDAP功能(請安裝ldap擴充功能)',
  'success edit logo' => '圖示已經更新',
  'success delete logo' => '圖示已經刪除',
  'success move message' => '留言 \'%s\' 已經從專案 \'%s\' 移動到專案 \'%s\'',
  'success add contact' => '聯絡人 %s 已經新增',
  'success edit contact' => '聯絡人 %s 已經更新',
  'success delete contact' => '聯絡人 %s 已經刪除',
  'error edit logo' => '更新圖示 %s 失敗',
  'error delete logo' => '刪除圖示 %s 失敗',
  'error delete contact' => '無法刪除選擇的聯絡人',
  'error move message' => '無法刪除選擇的留言 %s',
  'error move task list' => '無法移動所選的任務', //Failed to move selected task list',
  'confirm delete logo' => '你確定要刪除這個圖示嗎？', // 'Are you sure that you want to delete this logo?',
  'confirm delete contact' =>  '你確定要刪除這位聯絡人嗎？', // 'Are you sure that you want to delete this contact?',
  'log edit projects' => '專案 \'%s\' 已經更新',
  'log open projects' => '專案 \'%s\' 已經開啟',
  'log close projects' => '專案 \'%s\' 已經關閉',
  'log delete projects' => '專案 \'%s\' 已經刪除',
  'log add users' => '使用者 \'%s\' 已經新增',
  'log edit users' => '使用者 \'%s\' 已經更新',
  'log delete users' => '使用者 \'%s\' 已經刪除',
  'log add companies' => '公司 \'%s\' 已經新增',
  'log edit companies' => '公司 \'%s\' 已經更新',
  'log delete companies' => '公司 \'%s\' 已經刪除',
  'log add contacts' => '聯絡人 \'%s\' 已經新增',
  'log edit contacts' => '聯絡人 \'%s\' 已經更新',
  'log delete contacts' => '聯絡人 \'%s\' 已經刪除',
  'log add i18nlocales' => '語系 \'%s\' 已經新增',
  'log edit i18nlocales' => '語系 \'%s\' 已經更新',
  'log delete i18nlocales' => '語系 \'%s\' 已經刪除',
  'log add i18localevalues' => '語系值 \'%s\' 已經新增',
  'log edit i18nlocalevalues' => '語系值 \'%s\' 已經更新',
  'log delete i18nlocalevalues' => '語系值 \'%s\' 已經刪除',

  ); // array

?>
