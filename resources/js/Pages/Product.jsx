import {useEffect, useState} from "react";

import ProductItem from "../Components/ProductItem";
import Layout from "@/Layouts/Layout";
import {router} from "@inertiajs/react";


export default function Product(props){
useEffect(()=>{
    console.log(props)
},[])
    const [showModalTopRight, setShowModalTopRight] = useState(false);

    return <ProductItem  showModalTopRight={showModalTopRight} setShowModalTopRight={setShowModalTopRight} el = {props.product} />
}
Product.layout = page => <Layout children={page} title="Product"/>
