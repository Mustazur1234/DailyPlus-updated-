(function(){

    let ConnnectApi = function(url, callback){
        this.init = config =>{
        let _url = url;
        let promise =  new Promise( (resolve, reject) =>{
                var url = this.proxyServer + this.host + _url;
                var xhr = new XMLHttpRequest();
                xhr.open( config.method, url, true);

                xhr.setRequestHeader("accept", "application/json");
                xhr.setRequestHeader("X-CSRFToken", this.X_CSRFToken);

                xhr.onload = function () {
                if (xhr.readyState === 4) {
                    resolve(xhr.responseText)
                }};

                xhr.send(config.body);
            } ) 

            callback(promise)
        }
    }
    /*
        ======================================
        API SETUP
        ======================================
    */ 
    ConnnectApi.prototype.proxyServer = 'https://cors-anywhere.herokuapp.com/';
    ConnnectApi.prototype.host        = 'https://api.dailyplus.store';
    ConnnectApi.prototype.X_CSRFToken = 'SUSm0nZWXI7ClCenCXyZNMZYSSHe5M74iao6Tgn082qrz0GoLM8w6vPP2XqMFZyE';
    


    /*
        ======================================
        start usig api from here
        ======================================
    */ 



    /*
        ======================================
        for category part
        ======================================
    */ 

    new ConnnectApi(
        "/v0/catalogue/category/",
        data =>{
            fn()
            async function fn(){
                let category = await data;
                let row = document.getElementById('categoryRow');

                JSON.parse(category).map( cat =>{

                    let markup = document.getElementById('categorymarkup').content.cloneNode(true);
                    let cateItem = markup.querySelector('#categoryItem');

                    cateItem.querySelector('img').setAttribute('src', cat.image)
                    cateItem.querySelector('.category_title').innerText = cat.name
                    cateItem.querySelector('.cate_link').setAttribute('href', `category-single.php?id=${cat.id}`);
                    cateItem.querySelector('.category_description').innerText = cat.description ? cat.description : '';

                    row.appendChild(cateItem)



                } )

            }

        }
    ).init({
        method: 'GET',
        body : null
    })



    
    

    




}()) //initalize the program
