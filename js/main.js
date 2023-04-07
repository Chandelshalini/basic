
function authenticateUser(){
    $("#formId").submit(function(e) {
        e.preventDefault();}); // avoid to execute the actual submit of the form.
        var form = $("#formId");
        $.ajax({
            type: "POST",
            url: "/basic/site/login",
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
              alert(data);
             
               // show response from the php script.
            }
       
        }); 
    
    
}