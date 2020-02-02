class Form {
    constructor(el) {
        this._el = el;

        this._elBtnCommand = this._el.querySelector('[data-js-command]');

        console.log(this._elBtnCommand);

        this.init();
    }

    init = () => {
        
        if (sessionStorage.getItem('products')) this._elBtnCommand.classList.remove('btn--hidden')
        else this._elBtnCommand.classList.add('btn--hidden');
/* longueur du storage pour le cart
        let nbSessions = sessionStorage.getItem('products');
        console.log(nbSessions)
        if (nbSessions != null){

            console.log(sessionStorage.getItem('products').length);
        } else {
            sessionStorage.getItem('products').length = 0;
        }
        console.log(sessionStorage.getItem('products').length);*/
    }
/*
    showMoreProduct = () => {

        // déclaration de l'objet XMLHttpRequest
        var xhr;
        xhr = new XMLHttpRequest();
        // initialisation de la requête

        if(xhr) {	
            
            let recherche = 'id',//encodeURIComponent(this._elSelect.value);
                limit = 0;    
            limit += 12;
            
            xhr.open("GET", "index.php?Boutique_AJAX&action=afficheListeProduits&tri=" + recherche + "&offset=" + limit);

            //2ème étape - spécifier la fonction de callback
            xhr.addEventListener("readystatechange", () => {

                //console.log("État de la requête : " + xhr.readyState);
				//console.log("Code de status : " + xhr.status);
                if(xhr.readyState === 4) {							
                    if(xhr.status === 200) {
                        
                        //les données ont été reçues
                        this._elResults.innerHTML = xhr.responseText;
                        console.log('Ça passe par ici aussi!')
                    } else if (xhr.status === 404) {
                        //la page demandée n'existe pas
                    }
                }
            });
            
            //3ème étape - envoi de la requête
            xhr.send();
        }
    }*/
}