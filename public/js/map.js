var map;

function initMap(la, ln) {
    //初始畫一個LatLng物件(位置的物件，須以經緯度為參數加入)
    var latlng = new google.maps.LatLng(la, ln);

    var mapOptions = {
        center: latlng, //目前地圖中央的位置(須放置LatLng物件)
        zoom: 16, //地圖縮放程度
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    //設定Google Map會檢視於哪個區塊中，如下為id=map-canvas的html標籤區塊
    map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);

    //設定地圖標記提示框中的html內容
    // var contentString = '<div style="width:100px;"><div>標題</div><div>內文</div></div>';

    //建立一個地圖標記提示框
    // var infowindow = new google.maps.InfoWindow({
    //     content: contentString //提示框中的內容
    // });

    //建立一個marker物件(地圖標記點)
    // var marker = new google.maps.Marker({
    //     map: map,
    //     position: latlng
    // });

    //檢視(open)提示框並指向map物件裡的marker標記點
    // infowindow.open(map, marker);
}


/**
 * Google map 使用於 Bootstrap的要點
 * 當畫面變動時啟動
 * */
$(window).resize(function() {
    var h = $(window).height(), //取得視窗的高度，不論改變差距多少
        offsetTop = 0; // Calculate the top offset
    $('#map-canvas').css('height', (h - offsetTop)); // 將地圖的高度也設定為改變後的高度，即可!!
}).resize();


/**
 * house 的篩選 function
 */
function filterHouse() {
    var filted = new Array;
    // filterForm在house頁
    var filter = document.getElementById("filterForm");
    var required = {
        "campus": filter.campus.value, // 校區
        "type": houseType(filter.type.value), // 房屋種類 * 0：不限制，1：透天，2：公寓，3：大樓，4：學舍
        "roomtype": filter.roomtype.value, // 房間類型 * 0：不限制，1：套房，2：雅房
        "limit": sex(filter.limit.value), // 性別限制 * 0：無限制，表就是無限制
        "regionId": filter.regionId.value, // 區域 * 0
        "nosmok": filter.nosmok.value, // 無煙租屋
        "rental": filter.rental.value // 租金範圍
    };

    // 篩選
    Houses.forEach(function(house, index) {
        if (
            (house['type'] == required['type'] || required['type'] == "不限制") && // type in house table -> houseType
            roomSurplus(house, required['roomtype']) &&
            house['limit'] == required['limit'] && // limit in house table -> sexal
            (house['regionId'] == required['regionId'] || required['regionId'] == 0) && // 根據該縣市之區域
            house['nosmok'] == required['nosmok'] &&
            house['rental'] <= required['rental']
        ) {
            filted.push(house);
        }
    });
    // 為了 API 容易操作，因些將結果整理後回傳。
    // 小 → 大
    filted.sort(compareToRental);

    return filted;
}
/**
 * 性別
 */
function sex(number) {
    var sexul = [
        "無限制", "男", "女"
    ];
    return sexul[number];
}

/**
 * 房屋種類
 */
function houseType(number) {
    var type = [
        "不限制", "透天", "公寓", "大樓", "學舍"
    ];
    return type[number];
}

/**
 * 判斷並篩檢套房或雅房的剩餘間數
 */
function roomSurplus(house, required) {
    if (required == 0) return true;
    else if (required == 1 && house['roomNum'] > 0) return true;
    else if (required == 2 && house['roomYNum'] > 0) return true;
    else return false;
}
/**
 * Array.sort(function(a,b){})  用在排序篩選後的陣列。
 */
function compareToRental(a, b) {
    return a.rental - b.rental;
}