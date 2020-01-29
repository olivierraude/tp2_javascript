class ProduitList {
    constructor(el) {
        this._el = el;

        this._elBtn = this._el.querySelector('[data-js-more]');
        this._elSelect = this._el.querySelector('[data-js-select]');
        this._elResults = this._el.querySelector('[data-js-results]');

    
        //console.log(this._elBtn);
        //console.log(this._elSelect.value);
        //console.log(this._elResult);

        this.init();
    }

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
    showProductList = () => {

        // déclaration de l'objet XMLHttpRequest
        var xhr;
        xhr = new XMLHttpRequest();
        // initialisation de la requête

        if(xhr) {	

            let recherche = encodeURIComponent(this._elSelect.value);

            xhr.open("GET", "index.php?Boutique_AJAX&action=" + recherche);

            //2ème étape - spécifier la fonction de callback
            xhr.addEventListener("readystatechange", () => {

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
