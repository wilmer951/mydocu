
window.onload = function(){detecversionnavegador()}

function detecversionnavegador(){
  
  grafico1calidadgeneral();
    (function getBrowser() {


        //checks for individual browsers
        let chromeCheck =
          /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
        let firefoxCheck = /Firefox/.test(navigator.userAgent);
        let ieCheck = /Edg/.test(navigator.userAgent);
      
        //if/else to check browsers against defined variables
        if (chromeCheck && !ieCheck) {
          isBrowser.textContent = `Yes. It's Chrome!`;
        } else if (firefoxCheck) {
          isBrowser.textContent = `No. This is Firefox.`;
        } else if (ieCheck) {
          isBrowser.textContent = `No. It's Edge.`;
        } else {
          isBrowser.textContent = `We have no clue!`;
        }
      })();

}