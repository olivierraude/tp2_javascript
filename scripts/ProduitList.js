class ProduitList {
    constructor(el) {
        this._el = el;

<<<<<<< HEAD
=======
        this._elBtn = this._el.querySelector('[data-js-more]');
>>>>>>> 2a5a426b46e8475a82942dd10a1b265abc988307
        this._elSelect = this._el.querySelector('[data-js-select]');
        this._elResults = this._el.querySelector('[data-js-results]');
        //this._elTile = this._el.querySelector('[data-js-product]');
        //this._elBtn = this._el.querySelector('[data-js-more]');

    
        console.log(this._elSelect);
        console.log(this._elResults);
        //console.log(this._elTile);
        //console.log(this._elBtn);

    
        //console.log(this._elBtn);
        //console.log(this._elSelect.value);
        //console.log(this._elResult);

        this.init();
    }

<<<<<<< HEAD
    init = () => {
        this._elSelect.addEventListener('change', () => {
            //e.preventDefault();
            
            console.log('change');
            console.log(this._elSelect.value);
            
            this.showProductList();
        });
/*     
        this._elTile.addEventListener('click', (e) => {
            e.preventDefault();

            console.log('click');

            //this.showMoreProduct();
        });
        
        this._elBtn.addEventListener('click', (e) => {
            e.preventDefault();

            console.log('click');

            //this.showMoreProduct();
        });*/
    }

=======
    init = (e) => {

        this._elSelect.addEventListener("change", () => {
            console.log('change');
            console.log(this._elSelect.value);
        
            this.showProductList();
        });
/*
        this._elBtn.addEventListener("click", (e) => {
            e.preventDefault();

            console.log('click');

            //this.showMoreProduct();
        });
*/
    }
>>>>>>> 2a5a426b46e8475a82942dd10a1b265abc988307
    showProductList = () => {

        // déclaration de l'objet XMLHttpRequest
        var xhr;
        xhr = new XMLHttpRequest();
        // initialisation de la requête

        if(xhr) {	
<<<<<<< HEAD
            
            let recherche = encodeURIComponent(this._elSelect.value);
            
            xhr.open("GET", "index.php?Boutique_AJAX&action=afficheListeProduits&tri=" + recherche);
=======

            let recherche = encodeURIComponent(this._elSelect.value);

            xhr.open("GET", "index.php?Boutique_AJAX&action=" + recherche);
>>>>>>> 2a5a426b46e8475a82942dd10a1b265abc988307

            //2ème étape - spécifier la fonction de callback
            xhr.addEventListener("readystatechange", () => {

                //console.log("État de la requête : " + xhr.readyState);
				//console.log("Code de status : " + xhr.status);
                if(xhr.readyState === 4) {							
                    if(xhr.status === 200) {
                        
                        //les données ont été reçues
                        this._elResults.innerHTML = xhr.responseText;

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
