<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Install message'				=>	'檔案 \'config.php\' 已損壞或不存在。這表示FluxBB尚未安裝。',
'Choose install language'		=>	'選擇安裝指令碼的語言',
'Choose install language info'	=>	'本安裝指令碼所使用的語言。論壇所使用的預設語言將在安裝過程中設定。',
'Install language'				=>	'安裝語言',
'Change language'				=>	'變更語言',
'Next'							=>	'下一步',
'Already installed'				=>	'FluxBB 似乎已安裝。請點選<a href="index.php">此連結</a>前往。',
'You are running error'			=>	'您的 %1$s 版本為 %2$s。 FluxBB %3$s 至少需要 %1$s %4$s 方可正確執行。在繼續之前，必須升級您的 %1$s 設定。',
'My FluxBB Forum'				=>	'我的 FluxBB 論壇',
'Description'					=>	'Unfortunately no one can be told what FluxBB is - you have to see it for yourself.',
'Username 1'					=>	'會員名稱長度不可少於2個字元。',
'Username 2'					=>	'會員名稱長度不可超過25個字元。',
'Username 3'					=>	'guest 是保留的會員名稱。',
'Username 4'					=>	'會員名稱的格式不允許是 IP 位址式。',
'Username 5'					=>	'會員名稱不可一次包含字元 \'、 " 與 [ 或 ] 。請重新選擇會員名稱。',
'Username 6'					=>	'會員名稱不可包含本論壇所使用的文字樣式標籤(BBCode)。',
'Short password'				=>	'密碼長度不可少於4個字元。',
'Passwords not match'			=>	'密碼不符合。',
'Wrong email'					=>	'您輸入的管理員電子信箱位址無效。',
'No board title'				=>	'您必須輸入論壇標題。',
'Error default language'		=>	'所選的預設語言似乎不存在。',
'Error default style'			=>	'所選的預設風格似乎不存在。',
'No DB extensions'				=>	'現有 PHP 環境不具備 FluxBB 所需的任何格式的資料庫。為使 FluxBB 能被安裝，PHP 必須支援 MySQL、PostgreSQL或SQLite。',
'Administrator username'		=>	'管理員名稱',
'Administrator password 1'		=>	'管理員密碼1',
'Administrator password 2'		=>	'管理員密碼2',
'Administrator email'			=>	'管理員電子信箱',
'Board title'					=>	'論壇標題',
'Base URL'						=>	'根目錄網址',
'Required field'				=>	'在這個表格中是必填欄位。',
'FluxBB Installation'			=>	'FluxBB 安裝',
'Welcome'						=>	'您將要安裝 FluxBB。繼續安裝前您必須完成底下表格。遇到任何安裝問題，請參考說明文件。',
'Install'						=>	'安裝 FluxBB 1.4',
'Errors'						=>	'下列錯誤須要修正：',
'Database setup'				=>	'資料庫設定',
'Info 1'						=>	'請輸入必須的資訊以安裝 FluxBB 所需的資料庫。在開始安裝前，您必須瞭解所要求內容的全部資訊。',
'Select database'				=>	'選擇資料庫類型',
'Info 2'						=>	'FluxBB 目前支援 MySQL， PostgreSQL 以及 SQLite。如果選擇資料庫的下拉式選單不可用，便表示您的 PHP 環境不支援所需的資料庫。各資料庫特定版本的更多相關資料可查看問答集(FAQ)。',
'Dual MySQL'					=>	'FluxBB 偵測到您的 PHP 環境支援 MySQl 的兩種不同通訊方式。兩個選項分別為標準(standard)與加強(improved)。如果您不確定該如何選擇，建議您選擇加強(improved)，如不能完成再改試標準(standard)。',
'InnoDB'						=>	'FluxBB 偵測到您的 MySQL 也許支援 <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a>。它對 執行大型論壇有益處。如果您不很確定是否該使用 InnoDB，建議您不要使用。',
'Database type'					=>	'資料庫類型',
'Required'						=>	'(必需)',
'Database hostname'				=>	'輸入資料庫伺服器的主機名稱',
'Info 3'						=>	'資料庫伺服器的位址(例如：localhost, db.myhost.com 或 192.168.0.15)。如果您的資料庫未使用指定連接埠，您可自訂連接埠(例如：localhost:3580)。如使用 SQLite 資料庫，此處可輸入任意字元或直接用\'localhost\'。',
'Database server hostname'		=>'資料庫伺服器主機名稱',
'Database enter name'			=>	'輸入資料庫名稱',
'Info 4'						=>	'安裝 FluxBB 即將使用的資料庫名稱。這個資料庫必須存在。如使用 SQLite 資料庫，這裡便是資料庫檔案的相對路徑。安全起見，強烈建議儘可能將 SQLite 資料庫放置於私有(網路不能存取)目錄。如 SQLite 資料庫檔案不存在，FluxBB 將嘗試建立它。',
'Database name'					=>	'資料庫名稱',
'Database enter informations'	=>	'輸入您資料庫的使用者名稱及密碼',
'Database username'				=>	'資料庫使用者名稱',
'Info 5'						=>	'輸入您所要連接的資料庫的使用者名稱及密碼。如使用 SQLite 此處忽略。',
'Database password'				=>	'資料庫密碼',
'Database enter prefix'			=>	'輸入資料庫的資料表前置字元',
'Info 6'						=>	'如果您喜歡，您可指定資料表的前置字元。這個方式可讓您在同一資料庫中安裝多個 FluxBB (例如：foo_)。',
'Table prefix'					=>	'資料表前置字元',
'Administration setup'			=>	'管理員設定',
'Info 7'						=>	'請輸入所需資訊以便安裝 FluxBB 完成後設定一個管理員。',
'Admin enter username'			=>	'輸入管理員名稱',
'Info 8'						=>	'論壇管理員的名稱。稍後您還可以設定更多管理員以及版主。管理員名稱長度須在2至25個字元之間。',
'Admin enter password'			=>	'輸入並確認管理員密碼',
'Info 9'						=>	'密碼長度至少須4個字元。密碼區分大小寫。',
'Password'						=>	'密碼',
'Confirm password'				=>	'確認密碼',
'Admin enter email'				=>	'輸入管理員電子信箱',
'Info 10'						=>	'論壇管理員的電子信箱位址。',
'Board setup'					=>	'論壇設定',
'Info 11'						=>	'請輸入所需資訊以設定您的 FluxBB 論壇。',
'Enter board title'				=>	'輸入您論壇的標題',
'Info 12'						=>	'論壇的標題(將在每頁頂部顯示)。',
'Enter board description'		=>	'輸入論壇敘述',
'Info 13'						=>	'關於本論壇的簡短敘述(將在每頁頂部顯示)。此欄位可包含 HTML。',
'Board description'				=>	'論壇敘述',
'Enter base URL'				=>	'輸入您安裝的 FluxBB 論壇的根目錄網址',
'Info 14'						=>	'您的 FluxBB 論壇的 URL (無需後面斜線)位址(例如： http://forum.myhost.com 或 http://myhost.com/~myuser)。此處<strong>必須</strong>輸入正確，否則，管理員和版主都將無法送出任何表單。請注意此處的預設值只是 FluxBB 的猜測結果。',
'Choose the default language'		=>	'選擇預設語言',
'Info 15'						=>	'訪客以及未在個人資料中修改設定的會員使用的預設語言。',
'Default language'				=>	'預設語言',
'Choose the default style'		=>	'選擇預設風格',
'Info 16'						=>	'訪客以及未在個人資料中修改設定的會員使用的預設風格。',
'Default style'					=>	'預設風格',
'Start install'					=>	'開始安裝',
'DB type not valid'				=>	'\'%s\' 不是一個有效的資料庫類型',
'Table prefix error'			=>	'資料表前置字元 \'%s\' 包含不合法字元或過長。資料表前置字元可包含字母 a 至 z，任何數字以及字元 _。並且不能以數字開頭。長度不超過40個字元。請另選資料表前置字元',
'Prefix reserved'				=>	'資料表前置字元 \'sqlite_\' 是專為 SQLite 引擎保留的名稱。請另選資料表前置字元',
'Existing table error'			=>	'資料庫 \'%s\'中已經存在資料表 \'%s的使用者\'。這可能表示 FluxBB 已曾安裝或另一個已安裝的軟體佔用了 FluxBB 所需的一個或多個資料表名稱。如您準備在同一資料庫中安裝多個 FluxBB，您必須選擇不同的資料表前置字元。',
'InnoDB off'					=>	'InnoDB 似乎停用。請另選一個無 InnoDB 支援的資料庫層，或在您的 MySQL伺服器上啟用 InnoDB',
'Administrators'				=>	'管理員',
'Administrator'					=>	'管理員',
'Moderators'					=>	'版主',
'Moderator'						=>	'版主',
'Guests'						=>	'訪客',
'Guest'							=>	'訪客',
'New member'					=>	'新會員',
'Members'						=>	'一般會員',
'Member'						=>	'一般會員',
'Announcement'					=>	'在此輸入您要發佈的公告。',
'Rules'							=>	'在此輸入論壇服務條款',
'Maintenance message'			=>	'論壇維護中暫時關閉，請稍後訪問。',
'Test post'						=>	'測試發文',
'Message'						=>	'如果您在閱讀這篇文章(我猜正是如此)，安裝的 FluxBB 已經開始運作！現在您可以登入，並進入頂部的論壇管理設定面板來設定論壇。',
'Test category'					=>	'測試用分區',
'Test forum'					=>	'測試用版面',
'This is just a test forum'		=>	'這只是一個測試版面',
'Alert cache'					=>	'<strong>快取所在目錄不可寫！</strong>為使 FluxBB 功能正常，必須為目錄 <em>%s</em> 設定 PHP 寫入權限。使用 chmod 命令設定恰當的目錄權限。如有疑問，用 chmod 設為0777。',
'Alert avatar'					=>	'<strong>頭像所在目錄不可寫！</strong>如果您準備允許會員上傳自訂頭像，您必須確認已為目錄 <em>%s</em> 設定了 PHP 寫入權限。稍後您可為會員上傳的頭像檔選擇指定的目錄(見 論壇管理設定/選項)。使用 chmod 命令設定恰當的目錄權限。如有疑問，用 chmod 設為0777。',
'Alert upload'					=>	'<strong>這個伺服器似乎不允許上傳檔案！</strong>如果您準備允許會員上傳自訂頭像，您必須設定 PHP 中的 file_uploads 設定。上傳功能一旦啟用，可在 論壇管理設定/選項/頭像 中啟用。',
'FluxBB has been installed'		=>	'FluxBB 已安裝。請遵循以下指示完成安裝。',
'Final instructions'			=>	'最後一步',
'Info 17'						=>	'為完成安裝，您需要點選底下按鈕以下載 config.php 檔。然後上傳它至您已安裝的 FluxBB 根目錄下。',
'Info 18'						=>	'一旦您上傳完 config.php，FluxBB 就安裝成功了！隨後您便可 <a href="index.php">進入論壇首頁</a>。',
'Download config.php file'		=>	'下載 config.php 檔',
'FluxBB fully installed'		=>	'FluxBB 已經安裝成功！您現在可 <a href="index.php">訪問論壇首頁</a>。',

);
