關於laravel的Model 進行資料搜尋/處理
如果要過濾單筆/特定條件的資料 
where('欄位名稱', 條件)  單純判斷欄位的資料是否符合條件  EX: where('auther', 'John')
where('欄位名稱', 比對的方法 ,條件) EX: where('totalprice', '<', 6000 )

如果需要排序資料 
orderby('欄位') 升序排列
orderbydesc('欄位') 降序排列

如果只要取特定的數量
take(數量)
--------------以下是取資料的方法, 須注意回傳的型態---------------------
將資料過濾/排序後實際抓取的指令
Article::get();   
抓取符合條件的所有資料, 但即時只有抓到一筆, 他的資料還是會以陣列的方式呈現

Article::find(10);
會直接以id (主key)去搜尋, 搜尋到後直接返回單筆資料

Article::first();
抓取符合條件的資料的第一筆

以下是 假設租屋網的搜尋 使用者輸入 租金12000以下, 至少3房, 有電梯, 雅房, 台中市, 以屋齡小到大排序
$result = House::where('price','<=', 12000)->where('rooms', '>=', 3)->where('elevator', 1)->where('type','雅房')->where('city','台中')->sortBy('year')->get();

return view('搜尋結果頁', compact('result'));

