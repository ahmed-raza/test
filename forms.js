function installments_form(){
  var cars = document.getElementById("cars");
  if (cars.value != -1) {
    if (cars.value == 'Toyota') {
      document.getElementById('prices').style.display = 'block';
      var prices = document.getElementById("prices").options;
      var toyota_prices = ['996000', '750000', '550000', '475000'];
      for(var i = 0; i <= prices.length; i++){
        prices[i].text = toyota_prices[i];
        prices[i].value = toyota_prices[i];
      }
    }else{
      document.getElementById('prices').style.display = '';
    }
    if (cars.value == 'Honda') {
      document.getElementById('prices').style.display = 'block';
      var prices = document.getElementById("prices").options;
      var honda_prices = ['863000', '784000', '635000', '578000'];
      for(var i = 0; i <= prices.length; i++){
        prices[i].text = honda_prices[i];
        prices[i].value = honda_prices[i];
      }
    }else{
      document.getElementById('prices').style.display = '';
    }
    if (cars.value == 'Mercedes') {
      document.getElementById('prices').style.display = 'block';
      var prices = document.getElementById("prices").options;
      var mercedes_prices = ['1100000', '1023000', '900000', '850000'];
      for(var i = 0; i <= prices.length; i++){
        prices[i].text = mercedes_prices[i];
        prices[i].value = mercedes_prices[i];
      }
    }else{
      document.getElementById('prices').style.display = '';
    }
    if (cars.value == 'BMW') {
      document.getElementById('prices').style.display = 'block';
      var prices = document.getElementById("prices").options;
      var bmw_prices = ['1200000', '1175000', '1055000', '950000'];
      for(var i = 0; i <= prices.length; i++){
        prices[i].text = bmw_prices[i];
        prices[i].value = bmw_prices[i];
      }
    }else{
      document.getElementById('prices').style.display = '';
    }
  }else{
    // By default, get all the prices select dropdowns and hide them.
    var prices = document.getElementsByClassName('prices');
    for (var i = prices.length - 1; i >= 0; i--) {
      prices[i].style.display = '';
    }
  }
}
