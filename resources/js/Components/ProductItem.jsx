import PriceControl from "./PriceControl";
import {useDispatch, useSelector} from "react-redux";
import {useEffect, useState} from "react";
import {getStorage, percent} from "../action";
import Icons from "./Icons";
import Review from "./Review";
import ModalProduct from "@/Components/ModalProduct";
import ModalCart from "@/Components/ModalCart";
import {Head} from "@inertiajs/react";

export default function ProductItem(props) {
    const [count, setCount] = useState(0)
    const [showModalProduct, setShowModalProduct] = useState(false);
    const [showModalTopRight, setShowModalTopRight] = useState(false);
    const [cart, setCart] = useState({el: getStorage(), id: 0});
    const dispatch = useDispatch();
    const selectCount = useSelector((store) => store.countViewProduct);
    const selectAddCart = useSelector((store) => store.addCart);
    const countImage = useSelector((store) => store.countImage);
    const locale = useSelector((store) => store.getLocale);
    const selectLocaleArr = useSelector((store) => store.getLocaleArr);


    props.el.count = selectCount;
    let cartDef = selectAddCart.filter((el)=>el.id === props.el.id);
    const [product, setProduct] = useState(cartDef.length > 0?cartDef[0]:props.el)
    useEffect(() => {
        setProduct(cartDef.length > 0?cartDef[0]:props.el)
    }, [selectAddCart])


    return<>
        <Head title={product.title_meta}/>
        <div className="justify-center flex mt-6">
        <div className="container px-2">
            <div className="grid lg:grid-cols-2 gap-6">
                <div className="relative overflow-hidden">
                    <div className="h-500 relative border mx-2">
                        <img className="m-auto absolute top-0 bottom-0 left-0 right-0"
                             src={product.image ? product.image.split(",")[countImage] : ""}/>
                    </div>
                    <Icons setCount={setCount} image={product.image}/>
                </div>

                <div className="w-full  mx-2">
                    <h1 className="text-3xl">{product.title}</h1>
                    <div className="my-6">
                        {product.description}
                    </div>

                    <div className="flex-wrap lg:!flex gap-4">
                        <div className="self-center mt-2">
                            {percent(product.price, product.discount) !== product.price ?
                                <div className="flex line-through text-gray-700">
                                    <div data-discount="10">{product.price}</div>
                                    <div className="ml-1">MDL</div>
                                </div> : <div className="ml-3 mt-4"></div>}
                            <div className="flex">
                                <div className="text-2xl self-center ">{percent(product.price, product.discount)}</div>
                                <div className="self-center ml-1">MDL</div>
                            </div>
                        </div>
                        <div className="flex mb-3 lg:mb-0">
                            <div className="self-center"><PriceControl el={product}/></div>
                        </div>
                        <div className="flex">
                            <button
                                onClick={() => {
                                    dispatch({type: "ADDCART", product: props.el, count: product.count});
                                    setShowModalTopRight(true)
                                }}
                                className="bg-pink-950   text-white px-4  py-4 h-full text-lg hover:bg-gray-dark">
                                Добавить в корзину
                            </button>
                        </div>

                    </div>

                    <div className="mt-6">
                        <h2 className="font-bold ">Характеристики</h2>
                        <div className="mt-6 grid grid-cols-1 lg:grid-cols-2 gap-1">
                            <div>
                                <div className="flex">
                                    <div className="w-8"><img className="w-full"
                                                              src="http://vin.sandaniprim/storage/prodH1.png"/></div>
                                    <div className="self-end text-xl ml-4">{product.storage_time}<span> г.</span></div>
                                </div>
                                <div className="flex mt-2">
                                    <div className="w-8"><img className="w-full"
                                                              src="http://vin.sandaniprim/storage/prodH2.png"/>
                                    </div>
                                    <div className="self-end text-xl ml-4">{product.color}</div>
                                </div>
                            </div>
                            <div>
                                <div className="flex mt-2">
                                    <div className="w-8"><img className="w-full"
                                                              src="http://vin.sandaniprim/storage/prodH3.png"/>
                                    </div>
                                    <div className="self-end text-xl ml-4">{product.flavor}</div>
                                </div>
                                <div className="flex mt-2">
                                    <div className="w-8"><img className="w-full"
                                                              src="http://vin.sandaniprim/storage/prodH4.png"/>
                                    </div>
                                    <div className="self-end text-xl ml-4">{product.sort}</div>
                                </div>
                            </div>
                            <div>
                                <div className="flex mt-2">
                                    <div className="w-8"><img className="w-full"
                                                              src="http://vin.sandaniprim/storage/prodH5.png"/>
                                    </div>
                                    <div className="self-end text-xl ml-4">{product.volume}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <Review/>
        </div>
    </div>
        <ModalProduct showModal={showModalProduct} setShowModalTopRight={setShowModalTopRight}
                      setShowModal={setShowModalProduct}/>
        <ModalCart showModalTopRight={showModalTopRight} cart={cart} setShowModalTopRight={setShowModalTopRight}/>
    </>
}
