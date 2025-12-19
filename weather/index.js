const weatherapi = `http://api.weatherapi.com/v1/current.json?key=0ac023f3a6ac43099f4222652251012`;

navigator.geolocation.getCurrentPosition(
   (position) => {
     const latitude = position.coords.latitude;
     const longitude = position.coords.longitude;

     console.log(latitude);
     console.log(longitude);

     if (latitude && longitude) {
       const weatherapi = `http://api.weatherapi.com/v1/current.json?key=0ac023f3a6ac43099f4222652251012&q=${latitude},${longitude}`;
       console.log(weatherapi);

       (async function () {
         const response = await fetch(weatherapi);
         const json = await response.json();

         console.log(json);
       })();
     }
   },
  null,
   { enableHighAccuracy: true, timeout: 5000, maximumAge: 0 }
 );