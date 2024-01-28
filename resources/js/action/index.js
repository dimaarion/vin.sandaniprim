export function percent(num, pr) {
    return Math.floor(num - (num * pr / 100)) ;
}

export function setStorage(el){
        return window.localStorage.setItem("cart",JSON.stringify(el));
}

export function getStorage(){
    if(window.localStorage.getItem("cart")){
        return JSON.parse(window.localStorage.getItem("cart"));
    }else {
        return [];
    }

}

export function setCount(cart,n = 1,id){
    if(cart){

        let count = n;
        if(!id){
            cart.forEach((el)=>{
                if(!el.count){
                    el.count = 1;
                    count = 1;
                }
            });
        }else {
            cart.filter((f)=>f.id === id).forEach((el)=>{
                if(!el.count){
                    el.count = 1;
                    count = 1;
                }else {
                    el.count = n;
                    count = n;

                }
            })
        }
        return cart;
    }
}

export function getTotalNumber(){
    if(window.localStorage.getItem("cart")){
        let cart = JSON.parse(window.localStorage.getItem("cart"));
        let num = 0;
        cart.forEach((el)=>{
            num += el.count;
        });
        return num;
    }
}

export function setSumPrice(cart, id){
    let num = 0;
    if(cart){
        let cart = JSON.parse(window.localStorage.getItem("cart"));
        cart.filter((f)=>f.id === id).forEach((el)=>{
            el.totalPrice = el.count * percent(el.price,el.discount);
            num = el.totalPrice
        });
        window.localStorage.setItem("cart",JSON.stringify(cart));
        return num
    }
}

export function getTotalPrice(cart){
    if(Array.isArray(cart)){
        let num = 0;
        cart.forEach((el)=>{
            if(el.totalPrice){
                num += el.totalPrice;
            }

        });
        return num;
    }
}

export function getTotalCount(cart){
    if(Array.isArray(cart)){
        let num = 0;
        cart.forEach((el)=>{
            if(el.count){
                num += el.count;
            }

        });
        return num;
    }
}

export function getPresentation(){
    if(window.localStorage.getItem("presentation")){
        return JSON.parse(window.localStorage.getItem("presentation"));
    }else {
        return [];
    }
}