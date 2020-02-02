class ProductList {
    constructor(el) {
        this._el = el;

        this._elProductName = this._el.querySelectorAll('[data-js-name]');
        this._elProductPrice = this._el.querySelectorAll('[data-js-price]');
        this._elProductImage = this._el.querySelectorAll('[data-js-image]');        
        this._elProduct = this._el.querySelector('[data-js-product]');        
        
        this._elBtnCommand = this._el.querySelector('[data-js-command]');
        this._elSelect = this._el.querySelector('[data-js-select]');
        this._allTiles = this._el.querySelectorAll('[data-js-product]');
        this._elBtn = this._el.querySelector('[data-js-more]');
        this._elResults = this._el.querySelector('[data-js-results]');

        console.log(this._elBtnCommand);
        console.log(this._elSelect);
        console.log(this._allTiles);
        console.log(this._elBtn);
        console.log(this._elResults);

        this.init();
    }

    init = () => {

        for (let i = 0, l = this._allTiles.length; i < l; i++) {

            //Si 'inventaire' -= 0 this._allTiles.classList.add('btn--disabled');
            
            this._allTiles[i].addEventListener('click', (e) => {
                e.preventDefault();

                //btn commander ok + incrément nb produit panier
                console.log('click');
                console.log(this._elProduct[i]);

                let productName = this._elProductName[i].innerHTML,
                    productPrice = this._elProductPrice[i].innerHTML,
                    productImage = this._elProductImage[i].src;
                    
                    console.log(sessionStorage.getItem('products'));
                     
                this.ajouteSession(productName, productPrice, productImage);
            });
        }
        
    //undefined because of the btn is on the Research view.
        this._elBtn.addEventListener('click', (e) => {
            e.preventDefault();

            console.log('click');

            this.showMoreProduct();
        });
    }

    ajouteSession = (productName, productPrice, productImage) => {

        let product = {
            'nom' : productName,
            'prix' : productPrice,
            'image' : productImage
        };

        let commande =  JSON.parse(sessionStorage.getItem('products')) || [];
        commande.push(product);
        sessionStorage.setItem('products', JSON.stringify(commande));
        
        //this._elBtnCommand.classList.add('btn--hidden');
        console.log(commande);
        //this.changePage()
    }

    showMoreProduct = () => {

        // déclaration de l'objet XMLHttpRequest
        var xhr;
        xhr = new XMLHttpRequest();
        // initialisation de la requête

        if(xhr) {	
            
            let recherche = encodeURIComponent(this._elSelect.value),
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
    }
}
