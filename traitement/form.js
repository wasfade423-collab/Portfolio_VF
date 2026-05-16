
document.getElementById("submit").addEventListener('sbmt', ()=>{
    event.preventDefault();
    let nom = document.getElementById("nom").value;
    let prenom = document.getElementById("prenom").value;
    let subject = document.getElementById("subject").value;
    let message = document.getElementById("message").value;
    let email = document.getElementById("email").value;
    let datas = {'nom': nom, 'prenom': prenom, 'subject': subject, 'message': message, 'email': email};
    emailjs.init("IGsJw5AbGmyrIcy87");
    emailjs.send("service_mwcklmp", "template_hzkkpv9", datas)
        .then(function(response){
            console.log("succes");
        },
        function(error){
            console.log("echec");
        }
    )
})