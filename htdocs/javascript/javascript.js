//JS pour faire pop la modale

let popupsBtn = document.querySelectorAll("[data-popup-ref]");

popupsBtn.forEach(btn => {
    btn.addEventListener('click', activePopup);

    function activePopup() {
        let popupId = btn.getAttribute("data-popup-ref");
        let popup = document.querySelector(`[data-popup-id=${popupId}]`);
    
        if (popup !== undefined && popup !== null) {
            let popupContent = popup.querySelector('.popup-content');
            let closeBtns = popup.querySelectorAll('[data-dismiss-popup]')

            closeBtns.forEach( btn => {
        
            btn.addEventListener('click', onPopupClose);
            });
            
            popup.addEventListener('click', onPopupClose);
           
            popupContent.addEventListener('click', (ev)=>{
                ev.stopPropagation();

            });

            

            popup.classList.add('active');
            setTimeout(()=>{
                popupContent.classList.add('active');
            }, 10);
            


            function onPopupClose() {
                setTimeout(()=>{
                    popup.classList.remove('active');
                }, 10);
                popupContent.classList.remove('active');

            }        
        }
    }
});

//AJAX pour récupérer les infos de chaque produit dans la modale associée

let cards = document.querySelectorAll('.box-product')
let modal = document.querySelector('.popup-content')

cards.forEach(card => {
    
    card.addEventListener('click', function(){
        formData = new FormData()
        formData.append('product_id', card.getAttribute('id'))
        
        fetch('content_modal.php', {
            method: "post",
            body: formData
        }).then((response)=>{
            return response.text()
        }).then((data)=>{
            modal.innerHTML = data
        })
    })
});
function tech(){
       let techs = document.querySelector(".tech");
       let tech = document.getElementById("affichage");
        formData1 = new FormData()
        formData1.append('categorie', techs.getAttribute('id'))
        console.log(formData1)
    
        fetch('/categories/categories.php', {
            method: "post",
            body: formData1,
        }).then((response)=>{
            return response.text();  
        }).then((data)=>{
           console.log(data)
            tech.innerHTML = data
        })
    }

function home(){
    let homes = document.querySelector('.home')
    let home = document.querySelector('#affichage')
    
            formData2 = new FormData()
            formData2.append('categorie', homes.getAttribute('id'))
            
            fetch('/categories/categories.php', {
                method: "post",
                body: formData2
            }).then((response)=>{
                return response.text()
            }).then((data)=>{
                home.innerHTML = data
            })
        }    

function web(){
            let webs = document.querySelector('.web')
            let web = document.querySelector('#affichage')
            
                    formData3 = new FormData()
                    formData3.append('categorie', webs.getAttribute('id'))
                    
                    fetch('/categories/categories.php', {
                        method: "post",
                        body: formData3
                    }).then((response)=>{
                        return response.text()
                    }).then((data)=>{
                        web.innerHTML = data
                    })
                } 

function comics(){
    let comicss = document.querySelector('.comics')
    let comics = document.querySelector('#affichage')
                    
    formData4 = new FormData()
    formData4.append('categorie', comicss.getAttribute('id'))
                            
    fetch('/categories/categories.php', {
    method: "post",
    body: formData4
     }).then((response)=>{
         console.log(response);
    return response.text()
    }).then((data)=>{
    comics.innerHTML = data
    })
}    
                   
        