
document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('form input');
    const containers = document.querySelectorAll('form');
    for (let i = 0; i < inputs.length; i++) {
      inputs[i].addEventListener('input', function(e) { 
        const idd= containers[i].querySelector('input').id; 
        vvalidateForm(idd); 
        document.write(values);
      });
    }
  });
function vvalidateForm(idd){
  if(idd== name){
    
  }



}