<?php

/*
 * V6  2019.12.27 
 * 
 * 威兔主要從事網站設計，Discuz模板製作，WordPress企業項目，PHP+Mysql應用開發及相關外包服務。
 *
 * 工作時間：週一至週五，週六需提前預約，節假日休息。
 *
 * 網站：www.v2my.com
 * QQ：32-77558-32
 *
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

//修改時注意標點符號
$langplus = array(
	'home'=>'首頁',
	'bbs'=>'社區',
	'feed'=>'動態',
	'blog'=>'日誌',	
	'doing'=>'記錄',
	'album'=>'相冊',
	'medal'=>'勳章',
	'wall'=>'留言',
	'guide'=>'發現',
	'groups'=>'圈子',
	'follow'=>'說說',
	'ranklist'=>'熱榜',
	'threadtypes'=>'分類',
	'subforums'=>'版塊',
	'digest'=>'精華',
	'top'=>'置頂',
	'pic'=>'圖',
	'activity_already'=>'報名人數',
	'activity_payment'=>'花銷',
	'apply_name'=>'報名用戶',
	'trade_name'=>'商品名稱',
	'trade_bargain'=>'聯繫賣家',
	'floor'=>'樓',
	'total'=>'有',
	'totals'=>'共有',
	'pack_up'=>'收起',
	'of'=>'的',
	'di'=>'第',
	'od'=>'條',
	'page'=>'頁',
	'ticket'=>'票',
	'piece'=>'件',
	'kinds'=>'種',
	'tenthousand'=>'萬',
	'heats'=>'熱',
	'adigest'=>'精',
	'he'=>'他',
	'she'=>'她',
	'people'=>'人',
	'addup'=>'贊',
	'ask'=>'問',
	'star'=>'星',
	'already'=>'已經',
	'other'=>'其他',
	'view'=>'閱讀',
	'view_related'=>'相關閱讀',
	'browsed'=>'瀏覽',
	'list'=>'列表',
	'plays'=>'播放',
	'video'=>'視頻',
	'audio'=>'音頻',
	'music'=>'音樂',
	'detail'=>'詳情',
	'comment'=>'評論',
	'askat'=>'問於',
	'answer'=>'回答',
	'iwant'=>'我要',
	'sayaword'=>'我也說一句',
	'rewardanswer'=>'我來回答',
	'views'=>'次閱讀',
	'searchportal'=>'搜索文章',
	'guidesofa' =>'沙發',
	'forum_nothreads'=>'本欄目或指定的範圍內尚無主題',
	'todaypost'=>'今日發帖',
	'forumposts'=>'帖子總數',
	'forumusers'=>'會員數',
	'forum_posts'=>'帖數',
	'recolumn'=>'相關',
	'subcolumn'=>'下級', 
	'backcolumn'=>'上級', 
	'threads'=>'主題',
	'profile'=>'資料',
	'me'=>'我的',
	'tools'=>'工具箱',
	'managers'=>'管理組',
	'add_friend'=>'加好友',
	'ignore_friend'=>'刪好友',
	'oltime'=>'上線時間',
	'user_manager'=>'管理',
	'all'=>'全部',
	'projectnum'=>'項目數量',
	'favorite_forum'=>'版塊收藏',
	'forum_myfav'=>'我收藏的',
	'forum_myfav_f'=>'我關注的',
	'favorite'=>'收藏',
	'favorite_in'=>'已收藏',
	'extitle'=>'金錢',
	'fans'=>'粉絲',
	'discussing'=>'參與',
	'spmyitem'=>'我的中心',
	're_album'=>'關聯相冊',
	'add_blacklist'=>'黑名單',
	'delete_black'=>'移除',
	'add_black'=>'拉黑',
	'ol_friend'=>'在線好友',
	'say_hi'=>'招呼',
	'no_function'=>'暫無此功能提供，欲看此信息請到電腦版',
	'no_logintip'=>'登錄後才能使用此功能',
	'notime'=>'暫無',
	'photo_lastpost'=>'全部',
	'photo_dateline'=>'穿越',
	'photo_heats'=>'熱門',
	'photo_digest'=>'精華',
	'photo_views'=>'熱覽',
	'photo_replies'=>'熱回',
	'photo_newup'=>'新更',
	'photo_hot'=>'熱圖',
	'brilliant'=>'精彩',
	'message_password'=>'本帖為密碼貼，繼續閱讀請用',
	'noreply'=>'暫不允許評論',
	'copyright'=>'版權所有',
	'pnpost'=>'發帖',
	'reply'=>'回復',
	'share'=>'分享',
	'sorts'=>'排序',
	'sorta'=>'新回復',
	'sortb'=>'新發佈',
	'sortc'=>'回複數',
	'sortd'=>'瀏覽數',
	'newpost'=>'發表',
	'publish'=>'發佈',
	'publishat'=>'發佈於',
	'postbytime'=>'發表於',
	'recommend'=>'推薦',
	'filter'=>'篩選',
	'information'=>'信息',
	'posts_type'=>'類型',
	'post_descview'=>'倒序',
	'post_ascview'=>'正序',
	'orderheats'=>'熱門',
	'sofas'=>'<p>暫無評論，點我搶沙發吧</p>',
	'sofas_b'=>'<p>暫無評論，趕緊搶沙發吧</p>',
	'sofas_c'=>'<p>暫無回答，點我搶沙發吧</p>',
	'sofas_d'=>'<p>暫無辯手，點我搶沙發吧</p>',
	'follows'=>'關注',
	'follows_m'=>'關注我',
	'nofollows'=>'已關注',
	'followsspecial'=>'特別關注',
	'nofollows_m'=>'取關',
	'delspecial'=>'取消特關',
	'yesfollowyou'=>'TA已關注你',
	'notfollowyou'=>'TA未關注你',
	'sayhello'=>'打招呼',	
	'join'=>'加入',
	'fillingin'=>'填入',
	'up_avatar'=>'頭像',
	'taskapplycondition'=>'申請所需條件',
	'psw_security'=>'密碼',
	'required'=>'必填項',
	'system'=>'系統',
	'qmenu'=>'我的導航',
	'musergroupsc'=>'可購買',
	'capacity'=>'道具包',
	'startreading'=>'點我閱讀全部內容',
	'morereading'=>'點我查看詳細內容',
	'nothreadsorts'=>'分類信息專用板塊',
	'emailnot'=>'郵件地址錯誤',
	'textnot'=>'項目長度過長',
	'numbernot'=>'數字填寫錯誤',
	'bignot'=>'大於最大值',
	'smallnot'=>'小於最小值',
	'urlnot'=>'以http://開頭',
	'innot'=>'必填項目未填',
	'newpm'=>'有新消息',
	'clickinsert'=>'點我插入',
	'setcover'=>'選封面',
	'insert'=>'插入',
	'richtext'=>'富文本',		
	'video_link'=>'視頻地址',
	'music_link'=>'音頻地址',
	'links_link'=>'鏈接地址',
	'linkname_link'=>'鏈接文字',
	'img_link'=>'圖片地址',	
	'iat'=>'用戶賬號',	
	'data_log'=>'記錄',
	'credit_rule'=>'規則',	
	'credit_need'=>'用',
	'credit'=>'信用',
	'my_credit'=>'積分',
	'my_usergroup'=>'用戶組',
	'my_userprofile_m'=>'改資料',
	'my_userprofile'=>'修改資料',
	'new_password_confirm'=>'確認密碼',
	'security_answer'=>'回答提問',
	'nofunction'=>'手機端暫無此功能',
	'upimgtips'=>'選擇一張圖片後, 您可以繼續選擇圖片',
	'groupimgfilesize'=>'建議使用高度不低於 300 的圖片以取得最佳效果',
	'maxawardperweek'=>'獎勵次數',
	'optionaldata'=>'必填資料',
	'modeone'=>'推廣',
	'task_apply'=>'立即申請',
	'task_com'=>'立即開始',
	'task_full'=>'人數已滿',
	'task_nope'=>'無法申請',
	'task_award'=>'領取獎勵',
	'task_del'=>'放棄任務',
	'task_wait'=>'時間未到',
	'taskdoing'=>'進行中',
	'taskdone'=>'已完成',
	'taskfailed'=>'失敗的',
	'amount'=>'數量',
	'dateline'=>'時間',
	'price'=>'價格',
	'award'=>'頒發',
	'honor'=>'榮譽',
	'description'=>'描述',
	'userstatus'=>'個人頭銜',
	'option'=>'選項',
	'postadv'=>'進入高級模式?',
	'advmode'=>'高級模式',
	'rewardask'=>'懸賞問答',
	'rushreplylimit'=>'搶樓要求',
	'rushreplyend'=>'截止樓層',
	'participate'=>'才能參與',
	'setbestanswer'=>'選為答案',
	'clickto'=>'點擊進入',
	'editalbuminfo'=>'編輯相冊',
	'comefrom'=>'轉載自',
	'supporters'=>'人給樓主點贊',
	'rewardeds'=>'人給樓主打賞',
	'interested'=>'你可能感興趣的',
	'searchhot'=>'熱門搜索',
	'favsuccess'=>'信息收藏成功',
	'oksuccess'=>'操作成功',
	'pollsucceed'=>'投票成功',
	'clicksuccess'=>'表態成功',	
	'vote'=>'投票',
	'voteing'=>'投票進行中',
	'browsednum'=>'瀏覽人數',
	'voteppnum'=>'投票人數',
	'votenum'=>'累計投票數',
	'voteprtp'=>'參與投票',
	'debateprtp'=>'參與辯論',
	'debaternum'=>'辯手人數',
	'point'=>'觀點',
	'bothsides'=>'雙方',
	'apply'=>'報名',
	'activity_type'=>'活動類型',
	'activity_space'=>'活動地點',
	'activity_dateline'=>'發佈時間',
	'tradeselected'=>'已選',
	'tradetype'=>'類型',
	'tradenumber'=>'數量',
	'tradeselled'=>'已售',
	'trade'=>'出售',
	'shopexp'=>'鋪子介紹',
	'leavemessage'=>'留言',
	'subjectprice'=>'此為付費主題，請進入貼內瀏覽',
	'subjectauth'=>'權限限制，請進入貼內瀏覽',
	'thecanplay'=>'才能播放',
	'paytoauthor'=>'需向作者支付',
	'payfreetime'=>'到期後免費',
	'viewreward'=>'賞',
	'viewsreward'=>'打賞',
	'buy'=>'購買',
	'payment'=>'支付',
	'tradebuy'=>'立即購買',
	'selecttrade'=>'選擇商品',
	'addtrade'=>'添加',
	'tradedes'=>'商品說明',
	'friendtrade'=>'好友的商品',
	'eccreditlistall'=>'全部評價',
	'eccreditlistbuyer'=>'買家評價',
	'eccreditlistseller'=>'賣家評價',
	'eccreditlistother'=>'發出評價',
	'tradeinfo'=>'交易詳情',
	'endtime'=>'截止',
	'neverexpires'=>'永久有效',
	'norights'=>'您的權限不足',
	'support'=>'點贊',
	'webcomments'=>'網友銳評',
	'signature'=>'簽名',
	'feedsettings'=>'個人動態設置',
	'replycredit_member'=>'最多可得',
	'replycredit_rate'=>'中獎概率',
	'replycredit_empty'=>'留空或填 0 為不獎勵',
	'inbalance'=>'餘額不足',
	'tradeoffline'=>'線下交接',
	'pollmaxoption'=>'已達最多選項',
	'polloption'=>'投票項目',
	'remindnote'=>'注意事項',
	'thisis'=>'此為',
	'imgpollnote'=>'點選圖片進行投票',
	'cost'=>'費用',
	'cloudmusic'=>'網易雲音樂分享地址',
	'nocloudmusic'=>'您分享的雲音樂不存在',
	'editnotice'=>'如果原內容是在電腦端發佈的，在手機上編輯時可能會遺失某些格式。你確定要繼續嗎？',
	'certifiedphoto'=>'查看照片',
	'task_completed'=>'恭喜您，任務已成功完成，您將收到獎勵通知，請注意查收',
	'share_browser'=>'使用瀏覽器的分享按鈕<br />分享給好友哦',
	'pokemessage'=>'給對方留言, 最多 10 個字',
	'lastpost'=>'最後發表',
	'prank'=>'頭銜',
	'psig'=>'簽名',
	'pbio'=>'介紹',
	'phobby'=>'愛好',
	'pwrite'=>'寫點東西吧',
	'pempty'=>'這人太懶, 啥也沒留下',
	'sendemail'=>'郵件通知',
	'usergroupplus'=>'擴展組',
	'webage'=>'站齡',
	'greaterthan'=>'大於',
	'lessthan'=>'小於',
	'lesshalfyear'=>'小於半年',
	'lessyear'=>'小於一年',
	'days'=>'天',
	'years'=>'年',
	'month'=>'月',
	'day'=>'日',
	'hour'=>'時',
	'min'=>'分',
	'sec'=>'秒',
	'hours'=>'小時',
	'mins'=>'分鐘',
	'oneweek'=>'1周',
	'onemonth'=>'1個月',
	'sixmonth'=>'6個月',
	'sixmonthago'=>'6個月前',
	'acceccredit'=>'累計信用',
	'selectdate'=>'選擇日期',
	'confirm'=>'確認',
	'over'=>'結束',
	'alreadyover'=>'已結束',
	'contact'=>'聯繫',
	'login_now'=>'已有賬號',
	'register_now'=>'註冊賬號',
	'perfectact'=>'完善賬號',
	'bindingact'=>'綁定賬號',
	'tplnofunction'=>'暫未開放此功能, 請關注模板更新',
	'warnfunction'=>'請到應用中心安裝模板擴展, 或者關掉相關設置',
	'noplay'=>'暫不支持該地址, 請更換正確的分享地址',
	'autocutzoom'=>'圖片會自動剪切並進行縮放',
	'goonpage'=>'滾動瀏覽或者點我返回第一頁',
	'gobackpage'=>'這是最後一頁點我返回第一頁',
	'groupowner'=>'群主',
	'groupleader'=>'副群主',
	'starmembers'=>'明星成員',
	'ordmembers'=>'普通成員',
	'members'=>'成員',
	'kickout'=>'踢出',
	'joinsucceed'=>'成功加入',
	'exitsucceed'=>'成功退出',
	'quick'=>'快捷',
	'advanced'=>'高級',
	'searchmlist'=>'以下是查找到的用戶列表, 最多顯示 100 個',
	'ranklists'=>'排行榜',
	'rankuping'=>'熱榜, 每',
	'rankuptime'=>'實時熱榜, 每',	
	'rankupend'=>'小時更新一次',
	'rankdataing'=>'數據正在更新中',
	'datas'=>'數據',
	'shownote'=>'宣言',
	'shownotnote'=>'我要上榜',
	'picnoitd'=>'這個人很懶, 什麼都沒有寫',
	'groupnoitd'=>'這個群主很懶, 什麼都沒有寫',
	'groupwriteitd'=>'寫群簡介, 吸引更多成員加入!',
	'nomusicfiles'=>'無音樂文件',
	'information'=>'信息',
	'frommobilemess'=>'來自手機',	
	'nothtmltag'=>'<p class="nothtmltag">您的瀏覽器不支持 video 或 audio 標籤</p>',	
	'load_pm'=>'<i class="rotation"></i>消息加載中',
	'more_pm'=>'<i class="vt-time"></i>點我查看更多消息',	
	'load'=>'<i class="rotation"></i>正在加載',
	'more'=>'加載更多',	
	'more_view'=>'查看更多',
	'allcontent'=>'<p>已顯示全部內容</p>',
	'passwdnotmatch'=>'兩次輸入的密碼不一致',
    );
?>