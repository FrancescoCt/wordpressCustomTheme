// formSubmitter.js
//Can be used for external API calling by submitting POST forms
class FormSubmitter {
    constructor(formId) {
        this.formId = formId;
        
        
    }

    submitContactsForm(){
        //Submit
        var formElement = document.getElementById(this.formId);
        if(formElement){
            formElement.addEventListener('submit', function(event) {
                event.preventDefault();
                const firstname = document.getElementById('firstname').value;
                const lastname = document.getElementById('lastname').value;
                const email = document.getElementById('email').value;
                const messageDiv = document.getElementById('messageContacts');
                const urlContacts = 'http://localhost:9000/wordpressSito/contacts/';

                var successMessage = "Form submitted.";
                var errorMessage = 'Error submitting form.';
                var logError = errorMessage + "- Form: Contacts, Error Details: ";
                var responseMessage = 'Response Form Contacs: ';

                fetch(urlContacts, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ firstname: firstname, lastname: lastname, email: email })
                })
                .then(response =>response.json())
                .then(data => {
                    if(data.message == successMessage) {
                        messageDiv.textContent = data.message;
                        messageDiv.className = 'alert alert-success';
                    }
                    else{
                        messageDiv.textContent = errorMessage;
                        messageDiv.className = 'alert alert-danger';
                    }
                    console.log(responseMessage, data)
                })
                .catch(error => {
                    console.error(logError, error);
                    messageDiv.textContent = errorMessage;
                    messageDiv.className = 'alert alert-danger';
                });
            });
        }
        
    }

    //Not tested yet
    submitFormAdvanced(){
        var formElement = document.getElementById(this.formId);
        if(formElement){
           formElement.addEventListener("submit", async function(e) {
                e.preventDefault(); // Avoid page refresh
            
                const formData = new FormData(this);
            
                try {
                    const response = await fetch("https://tuo-sito.com/wp-admin/admin-ajax.php", {
                        method: "POST",
                        body: formData
                    });
            
                    const result = await response.json();
                    if (result.success) {
                        alert("Dati salvati con successo!");
                    } else {
                        alert("Errore durante il salvataggio: " + result.message);
                    }
                } catch (error) {
                    console.error("Errore:", error);
                }
            }); 
        }
        
        
    }

    startComponent(){
        this.submitContactsForm();
    }

}

export {FormSubmitter};