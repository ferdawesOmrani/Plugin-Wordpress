let isSwitchedOn = false;
    function toggleSwitch() {
      const toggleButton = document.getElementById('switchtoggle');
      const containerButton = document.getElementById('conditionsButton')
      if (isSwitchedOn) {
        toggleButton.classList.remove('off');
        containerButton.classList.remove('off');
      } else {
        toggleButton.classList.add('off');
        containerButton.classList.add('off');
      }
      isSwitchedOn = !isSwitchedOn;
}
let costumColor = false;
function colorChange(type, color) {
  let costumColor = false;
    function colorChange(type, color) {
      const costumButton = document.getElementById('customButton');
      const buttonIcon = document.getElementById('fa-chevron-right')
      switch (type) {
        case 'background':
          costumButton.style.backgroundColor = color;
          break;
        case 'border':
          costumButton.style.borderColor = color;
          break;
        case 'text':
          costumButton.style.color = color;
          buttonIcon.style.color = color;
          break;
      }
    }
  }