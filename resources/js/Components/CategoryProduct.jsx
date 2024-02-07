import Products from "./Products";
import {useEffect, useState} from "react";

export default function CategoryProduct(props) {

    if(props.active){
        return <div id="main-products" className="container px-2 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-center text-center" >
            {props.element.product.filter((f)=>f.id).map((el)=><div key={el.id + "product"}><Products setShowModalTopRight = {props.setShowModalTopRight} setShowModalProduct = {props.setShowModalProduct} cart = {props.cart} setCart = {props.setCart} el={el} /></div>)}
        </div>
    }
}