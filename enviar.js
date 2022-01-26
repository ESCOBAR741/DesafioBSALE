$fullname=document.getElementById("Username").value;
$email=document.getElementById("EmailAddress").value;

function Enviar(){
   emailjs.send(serviceID, templateID, templateParams, userID);

   var templateParams = {
       name: 'James',
       notes: 'Check this out!'
   };
    
   emailjs.send('YOUR_SERVICE_ID', 'YOUR_TEMPLATE_ID', templateParams)
       .then(function(response) {
          console.log('SUCCESS!', response.status, response.text);
       }, function(error) {
          console.log('FAILED...', error);
       });
}

function Modificar(){
   sdasda
   MediaStreamAudioSourceNode
   dasdas
   dasdas
}


