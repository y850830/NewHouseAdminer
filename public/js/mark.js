var numbers;
var infoWindow;
var markers = []; // marker cluster
var markerCluster;

function targetHouse(i) {
    map.panTo(new google.maps.LatLng(la[i], ln[i]));
}

function SetMap(s_lat, s_lon) {

    if (markerCluster) {
        deleteMarkers();
    }
    var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(lat, lon)
    };

    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    stepDisplay = new google.maps.InfoWindow();
    for (j = 0; j <= s_lat.length; j++) {
        createMarkers(s_lat[j], s_lon[j]);
    }
    markerCluster = new MarkerClusterer(map, markers);

}

function Mapping(type) {
    var HousingType = {
        1: "公寓",
        2: "學舍",
        3: "透天",
        4: "大樓",
    };
    return HousingType[type];
}

function FilterMap(objecjType) {
    // if(tagId == "houseType"){

    // }
    // else if (tagId == "roomType"){
    //     console.log("roomType");
    // }

    recId = [];

    numbers = objecjType.split(",");


    if (markerCluster) deleteMarkers();
    var mapOptions = {
        zoom: 15,
        center: new google.maps.LatLng(Find_Schools_lat, Find_Schools_lon)
    };
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    stepDisplay = new google.maps.InfoWindow();
    rentValue = parseInt($('#rentBar').val());
    if ($('#selectArea option:selected').text() != "不分類") {
        for (var i = 0; i < house_arr.length; i++) {
            if (house_arr[i]["rent"] <= rentValue) {
                for (var j = 1; j < numbers.length; j++) {
                    if (house_arr[i]["type"] == Mapping(numbers[j])) {
                        recId.push(i);
                        createMarkers(i, house_arr[i]["address"], house_arr[i]["lat"], house_arr[i]["lon"]);
                    }
                    housestatistics(house_arr[i]["rent"], Mapping(numbers[j]), $('#selectArea option:selected').text());
                }
            }
        }
    } else {
        for (var k = 0; k < School_arr.length; k++) {
            Notclassified(School_arr[i]["ename"]);
        }
        for (var i = 0; i < house_arr.length; i++) {
            if (house_arr[i]["rent"] <= rentValue) {
                for (var j = 1; j < numbers.length; j++) {
                    if (house_arr[i]["type"] == Mapping(numbers[j]))
                        recId.push(i);
                    createMarkers(i, house_arr[i]["address"], house_arr[i]["lat"], house_arr[i]["lon"]);
                }
            }
        }
    }
    if (numbers.length == 1) getSchoolInfo();
    else markerCluster = new MarkerClusterer(map, markers);

    makeRightSB(pages);
}

function createMarkers(lat, lon) {
    var point = new google.maps.LatLng(lat, lon);
    //  infoWindow = new google.maps.InfoWindow();

    var marker = new google.maps.Marker({
        map: map,
        position: point
            //icon : site_path+'image/icon/6-2.png'
    });
    //標記資訊視窗點擊事件
    infoWindow = new google.maps.InfoWindow();
    google.maps.event.addListener(marker, 'click', function() {

        infoWindow.setContent(createPopUpHtml());
        infoWindow.open(map, marker);
    });

    markers.push(marker);

}
/*Marker操作
 *************************************************/
function setAllMap(map) {
    markerCluster.addMarkers(markers);
}

function clearMarkers() {
    markerCluster.clearMarkers();
}

function showMarkers() {
    setAllMap(map);
}

function deleteMarkers() {
    clearMarkers();
    markers = [];
}

function bindInfoWindow(marker, map, infoWindow, html) {
    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
    });
}

function createPopUpHtml() {
    return "<div class='MarkerPopUp'><div class='MarkerTitle'>" +
        "</div>";
}

function showHouseInfo(id) {

    $('#myModal').modal('show');
}

// /*類別複選功能*/
function Add_ObjectType(tagId, typename) {
    // alert("Arrival!");
    //objecjType 目的在抓一個藏起來的<TEXT>，而其記錄歷經所選項目。
    var objecjType = document.getElementById(tagId);

    //match  尋找匹配數字
    if (objecjType.value.match(typename) != null) {
        objecjType.value = objecjType.value.replace("," + typename, "");
        console.log(objecjType.value);
    } else {
        objecjType.value += "," + typename;
        console.log(objecjType.value);
    }

    if (pages == 1) {
        FilterMap(objecjType.value);
    } else if (pages == 2) {
        FilterMapCampus(objecjType.value);
    }

}


function Notclassified(School) {

    var URLs = HousingURL + "api.php?action=houselist&school=" + School;
    var housedata = new Array();
    $.ajax({
        url: URLs,
        dataType: 'XML',
        success: function(response) {

            $(response).find("house").each(function(i) { //取得xml父節點
                housedata[i] = new Array();
                var total = $(response).find("house").length; //xml的總筆數
                housedata[i]["type"] = $(this).children("type").text(); // 房屋種類
                housedata[i]["rent"] = $(this).children("rent").text(); // 租金
            });

            for (var i = 0; i < housedata.length; i++) {
                if (housedata[i]["rent"] <= rentValue) {
                    for (var j = 1; j < numbers.length; j++) {
                        if (housedata[i]["type"] == Mapping(numbers[j]))
                            housestatistics(housedata[i]["rent"], Mapping(numbers[j]), School_arr[k]['cname']);
                    }
                }
            }

        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert("getSchoolInfo , error ! ");
        }
    });


}