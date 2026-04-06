// XHR = XML HTTP REQUEST
// AJAX = Async JavaScript & XML

async function getWeatherData(city) {
  const response = await fetch(`https://wttr.in/${city}?format=j1`);

  const weatherData = await response.json();

  const currentCondition = weatherData.current_condition[0];
  const areaDetails = weatherData.nearest_area[0];
  const weatherDesc = currentCondition.weatherDesc[0];
  const weatherIcon = currentCondition.weatherIconUrl[0];

  const currentCity = areaDetails.areaName[0].value;
  const desc = weatherDesc.value;
  const icon = weatherIcon.value;
  const tempC = currentCondition.temp_C;
  const humidity = currentCondition.humidity;
  const windSpeed = currentCondition.windspeedKmph;

  const result = document.getElementById("result");
  const iconElem = document.getElementById("icon");

  result.innerText = `${currentCity} ${tempC} ${desc}`;
  iconElem.src = icon;
}

getWeatherData("Lahore");
