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


export function setRightCart(state = false, action){
    switch (action.type) {
        case "OPENRIGHTCART":
            return state = action.preload;
        default:
            return state;
    }
}
export function getScroll(state = 0, action){
    switch (action.type) {
        case "SCROLL":
            return state = action.preload;
        default:
            return state;
    }
}

export function getLocale(state = "ro", action){
    switch (action.type) {
        case "LOCALE":
            return state = action.preload;
        default:
            return state;
    }
}

export function getLocaleArr(state = [], action){
    switch (action.type) {
        case "LOCALEARR":
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
        countImage:countImage,
        setRightCart:setRightCart,
        getScroll:getScroll,
        getLocale:getLocale,
        getLocaleArr:getLocaleArr


    }
));
