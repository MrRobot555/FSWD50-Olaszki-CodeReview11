var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    }
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var Locations = /** @class */ (function () {
    function Locations(name, city, ZIP, street, timage) {
        this.name = name;
        this.city = city;
        this.ZIP = ZIP;
        this.street = street;
        this.timage = timage;
    }
    Locations.prototype.loc_render = function () {
        var colu = Math.floor(12 / dataarray[0].length);
        if (colu < 3) {
            colu = 3;
        }
        ;
        var colu_md;
        if (colu == 12) {
            colu_md = 12;
        }
        else {
            colu_md = 6;
        }
        ;
        return "<div class=\"col-lg-" + colu + " col-md-" + colu_md + " col-sm-12 parcontain\">\n                  <div class=\"containerset\">\n                  <div class=\"ourpic hidden-xs\" style=\"background-image: url('" + this.timage + "')\"></div>\n                  <figcaption>\n                    <h4>" + this.name + "</h4>\n                    <p>Address: " + (this.ZIP + " " + this.city) + " <br>\n                    " + this.street + "</p>\n                  </figcaption>\n                  </div>\n               </div>";
    };
    return Locations;
}());
var Restaurant = /** @class */ (function (_super) {
    __extends(Restaurant, _super);
    function Restaurant(name, city, ZIP, street, timage, phone, type, webaddress) {
        var _this = _super.call(this, name, city, ZIP, street, timage) || this;
        _this.phone = phone;
        _this.type = type;
        _this.webaddress = webaddress;
        return _this;
    }
    Restaurant.prototype.res_render = function () {
        var colu = Math.floor(12 / dataarray[1].length);
        if (colu < 3) {
            colu = 3;
        }
        ;
        var colu_md;
        if (colu == 12) {
            colu_md = 12;
        }
        else {
            colu_md = 6;
        }
        ;
        return "<div class=\"col-lg-" + colu + " col-md-" + colu_md + " col-sm-12 parcontain\">\n                  <div class=\"containerset\">\n                  <div class=\"ourpic hidden-xs\" style=\"background-image: url('" + this.timage + "')\"></div>\n                  <figcaption>\n                    <h4>" + this.name + "</h4>\n                    <p>Address: " + (this.ZIP + " " + this.city) + " <br>\n                    " + this.street + " <br>\n                    Phone: " + this.phone + " <br>\n                    Type: " + this.type + " <br>\n                    Web: <a href=\"" + this.webaddress + "\">" + this.webaddress + "</a></p>\n                  </figcaption>\n                  </div>\n              </div>";
    };
    return Restaurant;
}(Locations));
var Events = /** @class */ (function (_super) {
    __extends(Events, _super);
    function Events(name, city, ZIP, street, timage, date, time, price) {
        var _this = _super.call(this, name, city, ZIP, street, timage) || this;
        _this.date = date;
        _this.time = time;
        _this.price = price;
        return _this;
    }
    Events.prototype.ev_render = function () {
        var colu = Math.floor(12 / dataarray[2].length);
        if (colu < 3) {
            colu = 3;
        }
        ;
        var colu_md;
        if (colu == 12) {
            colu_md = 12;
        }
        else {
            colu_md = 6;
        }
        ;
        return "<div class=\"col-lg-" + colu + " col-md-" + colu_md + " col-sm-12 parcontain\">\n                  <div class=\"containerset\">\n                  <div class=\"ourpic hidden-xs\" style=\"background-image: url('" + this.timage + "')\"></div>\n                  <figcaption>\n                    <h4>" + this.name + "</h4>\n                    <p>Address: " + (this.ZIP + " " + this.city) + " <br>\n                    " + this.street + " <br>\n                    Date: " + this.date + " <br>\n                    Time: " + this.time + " <br>\n                    Ticket price: \u20AC " + this.price + "</p>\n                  </figcaption>\n                  </div>\n              </div>";
        console.log("event render run");
    };
    return Events;
}(Locations));
var Location1 = new Locations("St. Charles Church", "Vienna", "1010", "Karlsplatz 1", "./img/loc1.jpg");
var Location2 = new Locations("Zoo Vienna", "Vienna", "1130", "Maxingstraße 13b", "./img/loc2.jpg");
var Location3 = new Locations("St. Charles Church", "Vienna", "1010", "Karlsplatz 1", "./img/loc1.jpg");
var Location4 = new Locations("Zoo Vienna", "Vienna", "1130", "Maxingstraße 13b", "./img/loc2.jpg");
var Restaurant1 = new Restaurant("Lemon Leaf Thai Restaurant", "Vienna", "1050", "Kettenbrückengasse 19", "./img/res1.png", "+43(1)5812308", "Thai Food", "http://www.lemonleaf.at");
var Restaurant2 = new Restaurant("SIXTA", "Vienna", "1050", "Schönbrunner Straße 21", "./img/res2.png", "+43(1)5852856l / +43(1)5852856", "Austrian Food", "http://www.sixta-restaurant.at/");
var Restaurant3 = new Restaurant("SIXTA", "Vienna", "1050", "Schönbrunner Straße 21", "./img/res2.png", "+43(1)5852856l / +43(1)5852856", "Austrian Food", "http://www.sixta-restaurant.at/");
var Event1 = new Events("Kris Kristofferson", "Vienna", "1150", "Wiener Stadthalle, Halle F, Roland Rainer Platz 1", "./img/event1.jpg", "Fr., 15.11.2018.", "20:00", "58,5");
var Event2 = new Events("Lenny Kravitz", "Vienna", "1150", "Wiener Stadthalle - Halle D, Roland Rainer Platz 1", "./img/event2.jpg", "Sat., 09.12.2019.", "19:30", "47,80");
var dataarray = new Array(1);
dataarray[0] = [Location1, Location2, Location3, Location4];
dataarray[1] = [Restaurant1, Restaurant2, Restaurant3];
dataarray[2] = [Event1, Event2];
function locheader(title) {
    var headerout = "<div class=\"row\">\n                                <div class=\"text-center col-xs-12 col-md-12 col-sm-12 col-lg-12 extradecoration\">  \n                                <h2>Best " + title + "</h2>\n                                <p>These are the best " + title + " I visited</p>\n                                </div>\n                            </div>";
    $("#locationtarget").append(headerout);
}
function listitems(ar) {
    for (var i = 0, len = ar.length; i < len; i++) {
        // inner loop applies to sub-arrays
        if (i == 0) {
            locheader("locations");
        }
        if (i == 1) {
            locheader("restaurants");
        }
        if (i == 2) {
            locheader("events");
        }
        for (var j = 0, len2 = ar[i].length; j < len2; j++) {
            // accesses each element of each sub-array in turn
            if (i == 0) {
                $("#locationtarget").append(ar[i][j].loc_render());
            }
            if (i == 1) {
                $("#locationtarget").append(ar[i][j].res_render());
            }
            if (i == 2) {
                $("#locationtarget").append(ar[i][j].ev_render());
            }
            console.log(i, j, ar);
        }
    }
}
listitems(dataarray);
