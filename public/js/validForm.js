  document.addEventListener("DOMContentLoaded", function() {

    document.getElementById('ConcertForm').onsubmit = function (evt) {

        var elements = document.getElementsByTagName("INPUT");
        for (var i = 0; i < elements.length; i++) {
            elements[i].oninvalid = function(e) {
                e.target.setCustomValidity("");
                if (!e.target.validity.valid) {
                    e.target.setCustomValidity("This field cannot be left blank");
                }
            };
            elements[i].oninput = function(e) {
                e.target.setCustomValidity("");
            };
        }

        var name = document.getElementById("name").value;
        var prename = document.getElementById("prename").value;
        var email = document.getElementById("email").value;
        var artists = document.getElementById("artists").value;
        var amount = document.getElementById("amount").value;
        var simpathy = document.querySelector('input[name="simpathy"]:checked').value;
    
        var errors = [];
    
        name.trim();
        prename.trim();
        email.trim();
        artists.trim();
    

        console.log(name);
        console.log(simpathy)
    
        //radio button
        if(simpathy == "") {
            var yesBtn = document.getElementById('dc0');
            yesBtn.checked = true;
        }
    
        var phone = document.getElementById("phone").value;
        console.log(phone)
        console.log(errors)
        const allowedChars = `0123456789 +-/()`;
    
        
         for (const c of phone) {
             if(allowedChars.includes(c));
             console.log("test")
         }

         evt.preventDefault();
      }
});