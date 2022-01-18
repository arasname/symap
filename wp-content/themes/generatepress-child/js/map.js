let map;
let dateStart, dateEnd, slider;
let markers = [];
let testers;


function initMap() {
    dateStart = new Date(2011, 01, 01);
    dateEnd = new Date();
    map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(35.456738824940196, 38.69571126727095),
        zoom: 7,
        tilt: 47.5,

        mapId: "564768c2fceba738",
    });

    slider = document.getElementById("dateRange");
    slider.currentDate = dateStart;

    initMarkers();


}

function initMarkers() {}

function countMonthFromStart() {
    dateStart = new Date(2011, 01, 01);
    dateEnd = new Date();
    slider = document.getElementById("dateRange");
    var months;
    months = (dateEnd.getFullYear() - dateStart.getFullYear()) * 12;
    months -= dateStart.getMonth();
    months += dateEnd.getMonth();
    slider.max = months;
    slider.min = 0;
    //document.getElementById("demo").innerHTML = monthSliderValue;
}

function initSlider() {
    alert(13442);
    console.log(arasvars);
    countMonthFromStart();
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;
    slider.oninput = function () {
        var d = new Date(dateStart.getFullYear(), dateStart.getMonth(), dateStart.getDate());
        d.setMonth(dateStart.getMonth() - 1 + parseInt(this.value));
        slider.currentDate = d;
        document.getElementById('monthOutput').innerHTML = d.toLocaleString('default', {
            month: 'long'
        });
        document.getElementById('yearOutput').innerHTML = d.getFullYear();
        output.innerHTML = this.value + "aras" + d;
        addFirstMarker(this.value);
    }
}

function addFirstMarker(val) {
    markers[0].setMap(map);

}


function addFirstMarker(val) {
    markers[0].setMap(map);

}

function initMaps() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(35.456738824940196, 38.69571126727095),
        zoom: 7,
        tilt: 47.5,

        mapId: "564768c2fceba738",
    });
    const iconBase =
        "https://developers.google.com/maps/documentation/javascript/examples/full/images/";
    const icons = {
        tv: {
            icon: iconBase + "parking_lot_maps.png",
        },
        newspaper: {
            icon: iconBase + "library_maps.png",
        },
        webpage: {
            icon: iconBase + "info-i_maps.png",
        },
        radio: {
            icon: iconBase + "info-i_maps.png",
        },
    };
    const features = [{
            position: new google.maps.LatLng(36.53826838820746, 37.38139158520327),
            type: "webpage",
            dateStart: '2012-01-01',
            dateEnd: '2014-01-01',
            title: 'ArtaFM',
            shortDesc: 'saf asdf asdf asd fasdf ',
            url: ''
        },
        {
            position: new google.maps.LatLng(36.105901494312, 40.02913141903258),
            type: "tv",
            date: '2013-01-01',
            dateEnd: '2019-01-01'
        },
        {
            position: new google.maps.LatLng(36.65019403182274, 39.977725107263694),
            type: "radio",
            date: '2014-01-01',
            dateEnd: '2020-01-01'
        },
        {
            position: new google.maps.LatLng(36.221616984023385, 38.390649275863794),
            type: "newspaper",
            date: '2015-01-01',
            dateEnd: '2017-01-01'
        },
        {
            position: new google.maps.LatLng(36.47420341068751, 40.47469372868596),
            type: "radio",
            date: '2016-01-01',
            dateEnd: '2018-01-01'
        },
        {
            position: new google.maps.LatLng(35.457509533954386, 39.15579187763656),
            type: "radio",
            date: '2017-01-01',
            dateEnd: '2019-01-01'
        },
    ];



    for (let i = 0; i < features.length; i++) {
        const marker = new google.maps.Marker({
            position: features[i].position,
            icon: icons[features[i].type].icon,
            map: showMarkerInMap(),
        });
        markers.push(marker);
    }

}

function showMarkerInMap(marker) {
    sliderDate = slider.value;

    console.log(currentDate);
    return map;
}