(function(){
    let ToggleContent = function(config){
    
        this.init = (callback)=>{
            let btn     = document.getElementById(config.btnID);
            let holder     = document.getElementById(config.holderID);
            if( btn && holder ){
            let status = 'fasle';
            let panel;
            
            
            btn.addEventListener('click', e =>{
                let markup  = document.getElementById(config.markupID).content.cloneNode(true);
                let toggle = e.target.closest('button').dataset.toggle;
                
                if( toggle == 'false' ){
                    status = 'true'
                    e.target.closest('button').setAttribute('data-toggle', 'true');
                    panel = markup.querySelector(config.geniListID);
                    holder.append(markup.querySelector(config.geniListID))

                    callback !== null ? callback(f => fn()) : null;

                }
                else{
                    holder.innerHTML = '';
                    e.target.closest('button').setAttribute('data-toggle', 'false');
                    status = 'false';
                    
                }
                window.addEventListener('click', (e) =>{
                    if( panel !== e.target.closest(config.geniListID)){
                        
                        if( btn !== e.target.closest(`#${config.btnID}`) ){
                            holder.innerHTML = '';
                            btn.closest('button').setAttribute('data-toggle', 'false');
                            status = 'false';
                        }
                        
                    }
            
                })
            })
        }
        }
    
    
    }

    /*
        ==========================
        configuration panel
        ==========================
    */ 

    //gene content
    let gene = new ToggleContent({
        btnID : 'genie-list-btn',
        markupID: 'markup-genie_list',
        geniListID : '#genelist-id',
        holderID : 'gene-holder',
    })
    gene.init(null);


    //  notification content
    let noti = new ToggleContent({
        btnID : 'notificaton_btn',
        markupID: 'markup-noti_list',
        geniListID : '#notificationHolder',
        holderID : 'noti-holder',
    })
    noti.init(null);


    //  login body content
    let login_nav = new ToggleContent({
        btnID : 'login-body-btn',
        markupID: 'markup_login-body-list',
        geniListID : '#login-body_markup',
        holderID : 'nav-login-Holder',
    })
    login_nav.init(null);


    
    //  user body content
    let nav_user = new ToggleContent({
        btnID : 'userNavBtn',
        markupID: 'userTemplateMarkup',
        geniListID : '#userHolder',
        holderID : 'userNavHolder',
    })


    nav_user.init(()=>{

        //  my profile markup inner user markup
        let myProfile = new ToggleContent({
            btnID : 'myProfileNavBtn',
            markupID: 'myProfileMarkup',
            geniListID : '#profileHolder',
            holderID : 'myProfileNav_holder',
        })
        myProfile.init(null);

        //  order nav information
        let order_nav = new ToggleContent({
            btnID : 'order_nav_btn',
            markupID: 'orderNavMarkup',
            geniListID : '#orderHolder',
            holderID : 'orderInfoHolder',
        })
        order_nav.init(null);


    });





}())

