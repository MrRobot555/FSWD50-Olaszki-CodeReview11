class Locations {
  name:string;
  city:string;
  ZIP:number;
  street:string;
  timage:string;
 
 constructor(name, city, ZIP, street, timage) {
  this.name = name;
 	this.city = city;
 	this.ZIP = ZIP;
 	this.street = street;
  this.timage = timage;
 }

   loc_render(){
      let colu:number = Math.floor(12 / dataarray[0].length);
      if (colu < 3) {colu=3};
      let colu_md:number;
      if (colu==12) {colu_md = 12} else {colu_md = 6};

   		return `<div class="col-lg-${colu} col-md-${colu_md} col-sm-12 parcontain">
                  <div class="containerset">
                  <div class="ourpic hidden-xs" style="background-image: url('${this.timage}')"></div>
                  <figcaption>
                    <h4>${this.name}</h4>
                    <p>Address: ${this.ZIP+" "+this.city} <br>
                    ${this.street}</p>
                  </figcaption>
                  </div>
               </div>`;
   }
}

class Restaurant extends Locations {

phone:string;
type:string;
webaddress:string;


  constructor(name, city, ZIP, street, timage, phone, type, webaddress) {
  super(name, city, ZIP, street, timage);
  this.phone = phone;
  this.type = type;
  this.webaddress = webaddress;
}

   res_render() {
      let colu:number = Math.floor(12 / dataarray[1].length);
      if (colu < 3) {colu=3};
      let colu_md:number;
      if (colu==12) {colu_md = 12} else {colu_md = 6};

       return `<div class="col-lg-${colu} col-md-${colu_md} col-sm-12 parcontain">
                  <div class="containerset">
                  <div class="ourpic hidden-xs" style="background-image: url('${this.timage}')"></div>
                  <figcaption>
                    <h4>${this.name}</h4>
                    <p>Address: ${this.ZIP+" "+this.city} <br>
                    ${this.street} <br>
                    Phone: ${this.phone} <br>
                    Type: ${this.type} <br>
                    Web: <a href="${this.webaddress}">${this.webaddress}</a></p>
                  </figcaption>
                  </div>
              </div>`;
   }

}


class Events extends Locations {
date:string;
time:string;
price:number;


constructor(name, city, ZIP, street, timage, date, time, price) {
  super(name, city, ZIP, street, timage);
  this.date = date;
  this.time = time;
  this.price = price;
}

   ev_render() {
      let colu:number = Math.floor(12 / dataarray[2].length);
      if (colu < 3) {colu=3};
      let colu_md:number;
      if (colu==12) {colu_md = 12} else {colu_md = 6};

       return `<div class="col-lg-${colu} col-md-${colu_md} col-sm-12 parcontain">
                  <div class="containerset">
                  <div class="ourpic hidden-xs" style="background-image: url('${this.timage}')"></div>
                  <figcaption>
                    <h4>${this.name}</h4>
                    <p>Address: ${this.ZIP+" "+this.city} <br>
                    ${this.street} <br>
                    Date: ${this.date} <br>
                    Time: ${this.time} <br>
                    Ticket price: € ${this.price}</p>
                  </figcaption>
                  </div>
              </div>`;
              // console.log("event render run");
   }

  }

 // ajax get data from server 
// var result = $ajax
//           getData: function(url) {
//                       var result = null;
//                       $.ajax({
//                       url:"retrieve.php",
//                       type:"POST",
//                       async: false,
//                       // dataType : "text",
//                       success:function(data){
//                           result = data;
//             }
//         });
//        return result;
//     }
// });
 // end of ajax 


// var results = $.getData();console.log(results);


var locations = $.ajax({
    type: 'POST',       
    url: "retrieve.php",
    global: false,
    async: false,
    success: function(data) {
        return data;
    },
    dataType: "json"
}).responseText;



var restaurants = $.ajax({
    type: 'POST',       
    url: "retrieve2.php",
    global: false,
    async: false,
    success: function(data) {
        return data;
    }
}).responseText;



var events = $.ajax({
    type: 'POST',       
    url: "retrieve3.php",
    global: false,
    async: false,
    success: function(data) {
        return data;
    }
}).responseText;

  
// alert(locations);
// alert(restaurants);
// alert(events);


let outdata2 : string = locations.replace(/[\[\]&"]+/g, '');

let outdata : any[] = outdata2.split(",");

let i, i2 : number;
i = 0;
i2 = 1;
let locname : string;
let city : string;
let ZIP : string;
let address : string;
let image : string;

let Locarr = new Locations[];

outdata.forEach(function() {
  locname = outdata[i];
  city = outdata[i+1];
  ZIP = outdata[i+2];
  address = outdata[i+3];
  image = outdata[i+4];
  let 
  i2++;

});


   let Location1 = new Locations("St. Charles Church","Vienna","1010","Karlsplatz 1","./img/loc1.jpg");
   let Location2 = new Locations("Zoo Vienna","Vienna","1130","Maxingstraße 13b","./img/loc2.jpg");
   let Location3 = new Locations("St. Charles Church","Vienna","1010","Karlsplatz 1","./img/loc1.jpg");
   let Location4 = new Locations("Zoo Vienna","Vienna","1130","Maxingstraße 13b","./img/loc2.jpg");

   let Restaurant1 = new Restaurant("Lemon Leaf Thai Restaurant", "Vienna", "1050", "Kettenbrückengasse 19", "./img/res1.png", "+43(1)5812308", "Thai Food", "http://www.lemonleaf.at");
   let Restaurant2 = new Restaurant("SIXTA", "Vienna", "1050", "Schönbrunner Straße 21", "./img/res2.png", "+43(1)5852856l / +43(1)5852856", "Austrian Food", "http://www.sixta-restaurant.at/");
   let Restaurant3 = new Restaurant("SIXTA", "Vienna", "1050", "Schönbrunner Straße 21", "./img/res2.png", "+43(1)5852856l / +43(1)5852856", "Austrian Food", "http://www.sixta-restaurant.at/");

   let Event1 = new Events("Kris Kristofferson","Vienna","1150","Wiener Stadthalle, Halle F, Roland Rainer Platz 1","./img/event1.jpg","Fr., 15.11.2018.","20:00","58,5");
   let Event2 = new Events("Lenny Kravitz","Vienna","1150","Wiener Stadthalle - Halle D, Roland Rainer Platz 1","./img/event2.jpg","Sat., 09.12.2019.","19:30","47,80");

   let dataarray = new Array(1);

   dataarray[0] = [Location1, Location2, Location3, Location4];
   dataarray[1] = [Restaurant1, Restaurant2, Restaurant3];
   dataarray[2] = [Event1, Event2];



  function locheader(title:string) {
    var headerout:string = `<div class="row">
                                <div class="text-center col-xs-12 col-md-12 col-sm-12 col-lg-12 extradecoration">  
                                <h2>Best ${title}</h2>
                                <p>These are the best ${title} I visited</p>
                                </div>
                            </div>`;
     $("#locationtarget").append(headerout);
  }


function listitems(ar: any[][]) {
for (var i=0, len=ar.length; i<len; i++) {
    // inner loop applies to sub-arrays

    if (i==0) {locheader("locations");}
    if (i==1) {locheader("restaurants");}  
    if (i==2) {locheader("events");}

    for (var j=0, len2=ar[i].length; j<len2; j++) {
        // accesses each element of each sub-array in turn 

            if (i==0) {$("#locationtarget").append(ar[i][j].loc_render());}
            if (i==1) {$("#locationtarget").append(ar[i][j].res_render());}
            if (i==2) {$("#locationtarget").append(ar[i][j].ev_render());}

            //console.log(i, j, ar);

    }
}
}

listitems(dataarray);
