import {useDispatch, useSelector} from "react-redux";
import {useState} from "react";
import {percent} from "../action";
import PriceControl from "./PriceControl";
import Icons from "./Icons";

export default function ViewProduct(props) {
    const [count, setCount] = useState(0)
    const selectCount = useSelector((store) => store.countViewProduct);
    const countImage = useSelector((store) => store.countImage);
    const product = useSelector((store) => store.viewProductCart)[0];
    const dispatch = useDispatch();
    if (product) {
        return <div className="grid lg:grid-cols-2 gap-1">
            <div className="relative ">
                <div className="h-500 relative border">
                    <img className="m-auto absolute top-0 bottom-0 left-0 right-0"
                         src={product.image ? product.image.split(",")[countImage] : ""}/>
                </div>
                <Icons setCount={setCount} image={product.image}/>
            </div>
            <div className="w-full px-4">
                <h1 className="text-3xl">{product.name}</h1>
                <div className="text-2xl">{percent(product.price, product.discount)} <span>MDL</span></div>
                <div className="text-gray-800">{product.description}</div>
                <div className="flex-wrap lg:!flex gap-4 mt-6">
                    <div className="flex">
                        <div className="self-center"><PriceControl el={product}/></div>
                    </div>
                    <div className="flex">
                        <button
                            onClick={() => {
                                dispatch({type: "ADDCART", product: product, count: product.count});
                                props.setShowModalTopRight(true)
                            }}
                            className="bg-pink-950 text-white px-4  py-4 h-full text-lg hover:bg-gray-dark">
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
    } else {
        return <div></div>
    }

}
