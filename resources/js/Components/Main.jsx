import {useEffect, useState} from "react";
import Category from "./Category";
import CategoryProduct from "./CategoryProduct";
import {useSelector} from "react-redux";
export default function Main(props){

    const [product, setProduct] = useState([{}])
    const [id, setId] = useState(0);
    const selectProduct = useSelector((store)=>store.getPatchProduct);
useEffect(()=>{
    setProduct(selectProduct.category?selectProduct.category:[{}])
},[selectProduct.category])

    return (
        <div className="App">
            <div className="justify-center flex slider mt-6">
                <div className="container px-2">
                    <h2 className="text-center font-bold font-cinzel text-4xl uppercase">Каталог вин</h2>
                    <h3 className="text-center  text-xl">
                        Откройте для себя разнообразие вкусов молдавских вин в нашем интернет-магазине
                    </h3>
                    <div id="category-header"
                         className="mb-5 flex list-none flex-row flex-nowrap justify-center mt-6 overflow-auto">
                        {product.filter((f) => f.product).map((el, i) => <div onClick={() => setId(i)}
                                                                         key={el.id + "category-product"}><Category
                            id={id} count={i} element={el} active={true}/></div>)}
                    </div>
                    <div className="mb-6">
                        {product.filter((f) => f.product).filter((fi, i) => i === id).map((el, i) => <CategoryProduct
                            setShowModalTopRight={props.setShowModalTopRight} setShowModalProduct={props.setShowModalProduct}
                            cart={props.cart} setCart={props.setCart} key={el.id + "category-product-list"} active={true}
                            element={el}/>)}
                    </div>
                </div>
            </div>

        </div>
    );
}
