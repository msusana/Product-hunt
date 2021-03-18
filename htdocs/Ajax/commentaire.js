
let envoyer = document.querySelector('#envoyer');
    console.log(envoyer);


function send(){
        let user_id =  document.getElementById("user_id");
       let product_id = document.getElementById("product_id");
       let message = document.getElementById("commentaire");

        formData = new FormData()
        formData.append('user_id', user_id.value)
        formData.append('product_id', product_id.value)
        formData.append('message', message.value)
        /*user_id.append('user_id', user_id);
        product_id.append('product_id', product_id);
        message.append('commentaire', product_id);
        console.log (user_id);*/
       
        fetch('/recuperation-donnees/commentaire.php', {
            method: "post",
            body: formData,
        }).then((response)=>{
            return response.text();
        })
}
