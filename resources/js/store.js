import {combineReducers, createStore} from "redux";
import {
    getStorage,
    getTotalPrice,
    percent,
    setCount,
    setStorage,
    setSumPrice,
    getPresentation,
    getTotalCount
} from "./action";

export function getPatchProduct(state = [{}], action){
    switch (action.type) {
        case "GETPATCHPRODUCT":
            return state = action.preload;
        default:
            return state;
    }
}

export function addCart(state = getStorage(), action) {
    switch (action.type) {
        case "ADDCART":
            let a = state.filter((f) => f.id === action.product.id);
            if (a.length === 0) {
                if (action.count) {
                    action.product.count = action.count;
                } else {
                    action.product.count = 1;
                }
                action.product.totalPrice = action.product.count * percent(action.product.price, action.product.discount);
                setStorage([...state, action.product]);
                return state = [...state, action.product];
            } else {

                return state;
            }
        case "COUNTPLUS":
            state.filter((f) => f.id === action.id).forEach((el) => {
                el.count = el.count + 1
            })
            setStorage(state);
            return state;
        case "COUNTMINUS":
            state.filter((f) => f.id === action.id).forEach((el) => {
                if (el.count > 1) {
                    el.count = el.count - 1
                } else {
                    el.count = 1
                }
            })
            setStorage(state);
            return state;
        case "SUM":
            state.filter((f) => f.id === action.id).forEach((el) => {
                el.totalPrice = el.count * percent(el.price, el.discount)
            })
            setStorage(state);
            return state;

        case "DELPRODUCT":
            setStorage(state.filter((f) => f.id !== action.id));
            return state = state.filter((f) => f.id !== action.id);
        default:
            return state;
    }

}


export function viewProductCart(state = getStorage(), action) {
    switch (action.type) {
        case "VIEWPRODUCT":
            let ar = action.cart.filter((f) => f.id === action.el.id);
            if (ar.length > 0) {
                state = ar;

            } else {
                action.el.count = 1;
                action.el.totalPrice = action.el.count * percent(action.el.price, action.el.discount);
                state = [action.el]
            }
            return state;
        default:
            return state;
    }
}

export function countViewProduct(state = 1, action) {
    switch (action.type) {
        case "COUNVIEW":
            return state = action.count;
        default:
            return state;
    }
}

export function totalPrice(state = 0, action) {
    switch (action.type) {
        case "TOTALPRICE":
            state = getTotalPrice(action.preload)
            return state;
        default:
            return state;
    }
}

export function totalCount(state = 0, action) {
    switch (action.type) {
        case "TOTALCOUNT":
            state = getTotalCount(action.preload);
            window.localStorage.setItem("totalCount",state.toString());
            if(document.querySelector("#main-cart")){
                document.querySelector("#main-cart").innerHTML = '<svg id="main-cart" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16" class="bi  bi-cart-fill">\n' +
                    '                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>\n' +
                    '                    <circle r="5" fill="#621212" cx="11" cy="5"></circle>\n' +
                    '                    <text x="11" y="8" font-size="8" text-anchor="middle" fill="white">'+ state +'</text>\n' +
                    '                </svg>'
            }
            return state;
        default:
            return state;
    }
}

export function setPresentation(state = getPresentation(), action) {
    switch (action.type) {
        case "SETPRESENTATION":
            window.localStorage.setItem("presentation", JSON.stringify([...state, action.el.id]));
            state = [...state, action.el.id];
            let a = []
            a = state.filter((f) => f === action.el.id);
            if(a.length > 1){
                state = state.filter((f) => f !== action.el.id);
            }
            return state;
        default:
            return state;
    }
}

export function getProduct(state = {}, action){
    switch (action.type) {
        case "GETPRODUCT":
            return state = action.preload;
        default:
            return state;
    }
}

export function countImage(state = 0,action){
    switch (action.type) {
        case "COUNTIMAGE":
            return state = action.preload;
        default:
            return state;
    }
}


export default createStore(combineReducers(
    {
        addCart: addCart,
        viewProductCart: viewProductCart,
        totalPrice: totalPrice,
        countViewProduct: countViewProduct,
        setPresentation: setPresentation,
        totalCount:totalCount,
        getPatchProduct:getPatchProduct,
        countImage:countImage


    }
));
