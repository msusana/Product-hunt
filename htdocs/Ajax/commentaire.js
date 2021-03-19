
let envoyer = document.querySelector('#envoyer');



function send(){
        let user_id =  document.getElementById("user_id");
       let product_id = document.getElementById("product_id");
       let message = document.getElementById("commentaire");

        formData = new FormData()
        formData.append('user_id', user_id.value)
        formData.append('product_id', product_id.value)
        formData.append('message', message.value)
       
        fetch('/recuperation-donnees/commentaire.php', {
            method: "post",
            body: formData,
        }).then(()=>{
            message.value=""; 
            load_sms();
        })
}

// function sends(){
//     let user_id =  document.getElementById("user_id");
//    let product_id = document.getElementById("product_id");
//    let message = document.getElementById("commentaire");

//     formData = new FormData()
//     formData.append('user_id', user_id.value)
//     formData.append('product_id', product_id.value)
//     formData.append('message', message.value)

//     fetch('/load/commentaire.php', {
//         method: "post",
//         body: formData,
//     }).then(()=>{
//         message.value="";
//         return response.text();
//     }) 
    
   
// }
function load_sms(){
    let formData2 = new FormData()
    formData2.append('product_id', product_id.value)
    fetch('/load/commentaire.php', {
        method:'post',
        body:formData2
    }).then((response)=>{
        console.log(response);
        return response.text();
    }).then((data)=>{
        document.querySelector('.commentaire-list').innerHTML = data
    })
}