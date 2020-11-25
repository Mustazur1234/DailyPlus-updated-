(function(){

    /*
        ===========================
        sidebar content
        ===========================
    */ 

    let SidebarToggle = function(config){
        this.init = ()=>{
            let sidebar = document.getElementById(config.sidebarID);
            if( sidebar ){
                let rect = sidebar.getBoundingClientRect() ;


                sidebar.style[config.position] = `-${rect.width}px`;
                

                let btn = document.getElementById(config.openBtnID);

                //open button handler
                if( btn ){
                btn.addEventListener('click', e =>{
                    let toggle = e.target.closest('button').dataset.toggle;

                    if( toggle == 'false' ){
                        status = 'true'
                        
                        //when overlay is true
                        config.overlay ? $(`#${config.overlayID}`).fadeIn() : null;
                        $(`#${config.sidebarID}`).animate({[config.position]: 0}, config.speed);
                        e.target.closest('button').setAttribute('data-toggle', 'true');

                    }
                    else{
                        
                        $(`#${config.sidebarID}`).animate({[config.position]: `-${rect.width}px`},config.speed);
                        config.overlay ? $(`#${config.overlayID}`).fadeOut() : null;
                        btn.closest('button').setAttribute('data-toggle', 'false');
                        status = 'false';
                        
                    }

                    //global click
                    document.querySelector('body').addEventListener('click', (e) =>{
                    
                        if( sidebar !== e.target.closest(`#${config.sidebarID}`)){
                        
                            if( btn !== e.target.closest(`#${config.openBtnID }`) ){
                            
                                
                                    $(`#${config.sidebarID}`).animate({[config.position]: `-${rect.width}px`},config.speed, () =>{
                                            
                                        config.overlay ? $(`#${config.overlayID}`)[0].style.display = 'none' : null;
                                        btn.closest('button').setAttribute('data-toggle', 'false');
                                            
                                    }); 

                                
                                
                                status = 'false';
                                

                            }
                            
                        }
                
                    })
                })
                }

                //close button handler
                if( config.closeBtnID ){
                    document.getElementById(config.closeBtnID)
                    .addEventListener('click', e=>{
                        $(`#${config.sidebarID}`).animate({[config.position]: `-${rect.width}px`},config.speed);             
                        config.overlay ? $(`#${config.overlayID}`).fadeOut() : null;
                        btn.closest('button').setAttribute('data-toggle', 'false');
                        status = 'false';
                    })

                }
                


        }
        }
    }

    // card sidebar
    let cardSideBar = new SidebarToggle({
        overlayID   : 'overlayID',
        sidebarID   : 'cart-holder',
        position    : 'right',
        openBtnID   : 'cartShowBtn',
        closeBtnID  : 'cartCloseBtn',
        overlay     : true,
        speed       : 300,
    })

    cardSideBar.init();


    // sidebar left
    let sidebarLeft = new SidebarToggle({
        overlayID   : 'overlayID_navbar',
        sidebarID   : 'sidebarLeftID',
        position    : 'left',
        openBtnID   : 'categoryID',
        closeBtnID  : null,
        overlay     : true,
        speed       : 300,
    })

    sidebarLeft.init();

    

}());


