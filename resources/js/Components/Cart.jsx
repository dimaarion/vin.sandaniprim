import {useEffect, useState} from "react";
import {percent} from "../action";

import {useDispatch, useSelector} from "react-redux";
import PriceControl from "./PriceControl";


export default function Cart(props) {
    const selectAddCart = useSelector((store) => store.addCart);
    const selectTotalPrice = useSelector((store) => store.totalPrice);
    const selectTotalCount = useSelector((store) => store.totalCount);
    const dispatch = useDispatch();

    useEffect(() => {
        dispatch({type: "TOTALPRICE", preload: selectAddCart})
        dispatch({type: "TOTALCOUNT", preload: selectAddCart})

    }, [selectAddCart])

    useEffect(() => {

    }, [selectTotalCount])


    return <div>
        {selectAddCart.filter((f) => f.id).map((el) => <div key={el.id + "cart"}>
            <div className="flex flex-row mt-5 relative cart-block-1">
                <div className="p-4 bg-gray-100 w-1/2 mb-3">
                    <img className="w-full" src={el.image ? el.image.split(",")[0] : ""}/>
                </div>
                <div className="w-1/2">
                    <div className="ml-4 text-sm font-bold"><h3>{el.name}</h3></div>
                    <div className=" ml-4 text-sm flex text-gray-700">
                        <div className="cart-price-1">{el.count}</div>
                        <div className="px-3">x</div>
                        <div className="cart-price-p-1 cart-multi"
                             data-price-res="360">{percent(el.price, el.discount)}</div>
                    </div>
                    <PriceControl el={el}/>
                </div>
                <div onClick={() => dispatch({type: "DELPRODUCT", id: el.id})}
                     className="ml-4 cursor-pointer text-gray-700 hover:text-gray-900 remove-cart-el">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         className="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path
                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                    </svg>
                </div>
            </div>
        </div>)}
        <button onClick={() => window.localStorage.clear()}
                className={"absolute top-0 bg-pink-950 w-1/2 mb-3 text-white px-4 mt-3 py-1 h-[50px] text-lg hover:bg-gray-dark"}>Очистить
        </button>
        <div className={"sticky z-10 mr-6 right-0 bottom-0 bg-white border-t-1"}>
            <div className={"w-full flex text-xl"}>
                <div className={"w-1/2"}>Сумма:</div>
                <div className={"w-1/2 text-right"}>{selectTotalPrice}</div>
                <div className={"ml-2"}>MDL</div>
            </div>
            <div className={"flex"}>
                <button
                    className="bg-pink-950 w-1/2 mb-3 text-white px-4 mt-3 py-1 h-[50px] text-lg hover:bg-gray-dark">
                    В корзину
                </button>
                <button
                    className="w-1/2 mb-3 text-white px-4 mt-3 py-1 h-[50px] text-lg bg-gray-dark ml-3 hover:bg-pink-950">
                    К оформлению
                </button>
            </div>
        </div>
    </div>
}