class ProductSort {
    constructor(el) {
        this._el = el;

        this._elSelect = this._el.querySelector('[data-js-select]');
        this._elResults = this._el.querySelector('[data-js-results]');

        console.log(this._elSelect);
        //console.log(this._elResults);

        this.init();
    }

    init = () => {

        this._elSelect.addEventListener('change', () => {
            //e.preventDefault();
            
            console.log('change');
            console.log(this._elSelect.value);
            
            this.showProductList();
        });
    }
    
    showProductList = () => {

        // déclaration de l'objet XMLHttpRequest
        var xhr;
        xhr = new XMLHttpRequest();
        // initialisation de la requête

        if(xhr) {	
            
            let recherche = encodeURIComponent(this._elSelect.value),
                limit = 12;
                
            //limit += 12;
            
            xhr.open("GET", "index.php?Boutique_AJAX&action=afficheListeProduits&tri=" + recherche + "&offset=" + limit);

            //2ème étape - spécifier la fonction de callback
            xhr.addEventListener("readystatechange", () => {

                //console.log("État de la requête : " + xhr.readyState);
				//console.log("Code de status : " + xhr.status);
                if(xhr.readyState === 4) {							
                    if(xhr.status === 200) {
                        
                        //les données ont été reçues
                        this._elResults.innerHTML = xhr.responseText;
                        //console.log('Ça passe par ici!')
                    } else if (xhr.status === 404) {
                        //la page demandée n'existe pas
                    }
                }
            });
            
            //3ème étape - envoi de la requête
            xhr.send();
        }
    } 
}
