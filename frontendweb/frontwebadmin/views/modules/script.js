$(document).ready(function() {
    // Obtener el campo de número de buses y el botón de más y menos
    var numBusesInput = $('#numBuses');
    var incrementBtn = $('#incrementBtn');
    var decrementBtn = $('#decrementBtn');
  
    // Función para aumentar el número de buses
    incrementBtn.click(function() {
      var currentValue = parseInt(numBusesInput.val());
      numBusesInput.val(currentValue + 1);
    });
  
    // Función para disminuir el número de buses (si es mayor que 0)
    decrementBtn.click(function() {
      var currentValue = parseInt(numBusesInput.val());
      if (currentValue > 0) {
        numBusesInput.val(currentValue - 1);
      }
    });
  });
