      const form = document.getElementById('registerform');


      form.addEventListener('submit', event => {
        event.preventDefault(); // Prevent the default form submission

        const formData = new FormData();
        formData.append('P1', form.elements.P1.value);
        alert(form.elements.P1.value);
        formData.append('P2', form.elements.P2.value);
        alert(form.elements.P2.value);
        formData.append('phno', form.elements.phno.value);




        // Send the POST request to a PHP script
        fetch('registermngr.php', {
          method: 'POST',
          body: form
        })
        .then(response => response.text())
        .then(data => {
          // Update the label with the data
          const msg = document.getElementById('message');
          if(data=="Sucess"){

            msg.innerHTML = "Team Registered Sucessfully";
            msg.style.color = "green";
            msg.style.display = "block";
            msg.reset();
            console.log(data);
          }
          else{
            msg.innerHTML = "Error Registring Team Try Again";
            msg.style.color = "red";
            msg.style.display = "block";
            console.log(data);
          }
        })
        .catch(error => console.error(error));



      });
