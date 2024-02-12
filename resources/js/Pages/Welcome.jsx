import {Link, Head, router} from '@inertiajs/react';
import Main from "@/Components/Main";
import {useEffect, useState} from "react";
import {getStorage, localeSeparator} from "../action"
import {useDispatch, useSelector} from "react-redux";
import ModalProduct from "@/Components/ModalProduct";
import ModalCart from "@/Components/ModalCart";
import Layout from "@/Layouts/Layout";
import lang from "@/json/lang.json";

export default function Welcome(props) {
    const [showModalProduct, setShowModalProduct] = useState(false);
    const [showModalTopRight, setShowModalTopRight] = useState(false);
    const [cart, setCart] = useState({el: getStorage(), id: 0});
    const dispatch = useDispatch();
    const locale = useSelector((store) => store.getLocale);
    const selectLocaleArr = useSelector((store) => store.getLocaleArr);
    useEffect(() => {
        dispatch({type: "GETPATCHPRODUCT", preload: {product: props.product, category: props.productCategory}});
        console.log(props)
    }, [])

let headBannerText = "Fără doar de gust și aromă, vinurile moldovenești vor impresiona chiar și pe cei mai sofisticati gurmani.|" +
    "Гармония вкуса и аромата молдавских вин не оставит равнодушным даже самого искушенного гурмана.|" +
    "The taste and aroma of Moldovan wines will not leave indifferent even the most sophisticated gourmets.";


return (
        <>
            <Head title="Интернет магазин Молдавских вин"/>

            <div className="flex justify-center bg-amber-50 hidden lg:flex">
                <div className="container  px-2">
                    <div className="columns-2 gap-5">
                        <div className="">
                            <img
                                src="/storage/banner3.png"
                                className="w-full"
                                alt="..."/>
                        </div>
                        <div className="pt-12">
                            <p className="font-serif font-light text-lg  sm:text-xl  lg:text-4xl">
                                {localeSeparator(headBannerText,locale,selectLocaleArr)}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <Main showModalProduct={showModalProduct} cart={cart} setCart={setCart}
                  setShowModalTopRight={setShowModalTopRight}
                  setShowModalProduct={setShowModalProduct}
                  showModalTopRight={showModalTopRight} />


            <div className="justify-center flex mt-6 relative">
                <img className="w-full" src="/storage/fon-baner.png" />
                <img className="w-1/3 absolute m-auto left-0 mt-min-1" src="/storage/vinograd.png"/>
                <div
                    className="container h-full px-2 absolute flex flex-row  text-sm sm:text-sm  md:text-2xl lg:text-4xl font-serif">
                    <div className="w-1/4"></div>
                    <div className="w-3/4 self-center relative">
                        {localeSeparator(lang.mainBanner,locale,selectLocaleArr)}
                        <div className="absolute m-auto bottom-0 right-0 h-0 w-1/4  flex">
                            <div
                                className="h-[32px] md:h-[72px] text-white w-full bg-pink-950 hover:bg-gray-950 self-center xl:mt-[200px]">
                                <a href="/#">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="100%" width="100%"
                                         fill="currentColor"
                                         className="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fillRule="evenodd"
                                              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div className="w-1/4"></div>
                </div>
            </div>
            <div className="flex justify-center mt-6">
                <div className="container px-2 grid  grid-cols-1 lg:grid-cols-2 gap-5">
                    <div className="relative">
                        <img className="w-full" src="/storage/banner.png" />
                            <div className="absolute flex m-auto top-0 w-full h-full">
                                <div className="w-1/2 text-center"></div>
                                <div className="w-1/2 text-center mt-6 font-serif relative">
                                    <div className="text-pink-950 text-2xl px-5 leading-none">
                                        20% {localeSeparator(lang.discount,locale,selectLocaleArr)}
                                    </div>
                                    <div className=" text-xl sm:text-3xl px-5 leading-none lg:leading-tight">Фирменное
                                        розовое
                                        вино
                                    </div>
                                    <div
                                        className="text-2xl px-5 flex justify-center absolute m-auto bottom-0 left-0 mb-4   right-0">
                                        <div
                                            className="bg-pink-950 hover:bg-gray-950 pt-1 text-white w-[150px] h-[50px]">
                                            <a
                                                className="block" href="/#">Купить</a></div>
                                    </div>
                                </div>

                            </div>
                    </div>
                    <div className="relative">
                        <img className="w-full" src="/storage/banner.png" />
                            <div className="absolute flex m-auto top-0 w-full h-full">
                                <div className="w-1/2 text-center"></div>
                                <div className="w-1/2 text-center mt-6 font-serif relative">
                                    <div className="text-pink-950 text-2xl px-5 leading-none">
                                        20% {localeSeparator(lang.discount,locale,selectLocaleArr)}
                                    </div>
                                    <div className=" text-xl sm:text-3xl px-5 leading-none lg:leading-tight">Фирменное
                                        розовое
                                        вино
                                    </div>
                                    <div
                                        className="text-2xl px-5 flex justify-center absolute m-auto bottom-0 left-0 mb-4   right-0">
                                        <div
                                            className="bg-pink-950 hover:bg-gray-950 pt-1 text-white w-[150px] h-[50px]">
                                            <a
                                                className="block" href="/#">Купить</a></div>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
            <div className="flex justify-center mt-6">
                <div className="container px-2">
                    <h2 className="text-center font-bold font-cinzel text-4xl uppercase">НОВОСТНОЙ БЛОГ</h2>
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-6">
                        <div>
                            <div className="flex font-alice">
                                <div className="w-1/4 p-4 bg-pink-950 flex w-[100px] justify-center">
                                    <div className="self-center text-white ">
                                        <div className="text-center text-4xl">5</div>
                                        <div className="text-center">Декабрь</div>
                                    </div>
                                </div>
                                <div className="mx-4 text-2xl "><h2>Новость</h2></div>
                            </div>
                            <div className="text-xl font-serif">Как уроженец Калифорнии, я большой поклонник вина!
                                Местное вино
                                - мое слабое место, и я никогда не упускал возможности попробовать какое-нибудь новое
                                вино…
                            </div>
                            <div className="text-xl text-right text-pink-950 hover:text-gray-950"><a href="/#">Подробнее . . .</a></div>
                        </div>
                        <div>
                            <div className="flex font-alice">
                                <div className="w-1/4 p-4 bg-pink-950 flex w-[100px] justify-center">
                                    <div className="self-center text-white ">
                                        <div className="text-center text-4xl">5</div>
                                        <div className="text-center">Декабрь</div>
                                    </div>
                                </div>
                                <div className="mx-4 text-2xl "><h2>Новость</h2></div>
                            </div>
                            <div className="text-xl font-serif">
                                Как уроженец Калифорнии, я большой поклонник вина! Местное вино - мое слабое место, и я
                                никогда не упускал возможности попробовать какое-нибудь новое вино…
                            </div>
                            <div className="text-xl text-right text-pink-950 hover:text-gray-950"><a href="/#">Подробнее . . .</a></div>
                        </div>
                        <div>
                            <div className="flex font-alice">
                                <div className="w-1/4 p-4 bg-pink-950 flex w-[100px] justify-center">
                                    <div className="self-center text-white ">
                                        <div className="text-center text-4xl">5</div>
                                        <div className="text-center">Декабрь</div>
                                    </div>
                                </div>
                                <div className="mx-4 text-2xl "><h2>Новость</h2></div>
                            </div>
                            <div className="text-xl font-serif">Как уроженец Калифорнии, я большой поклонник вина!
                                Местное вино
                                - мое слабое место, и я никогда не упускал возможности попробовать какое-нибудь новое
                                вино…
                            </div>
                            <div className="text-xl text-right text-pink-950 hover:text-gray-950"><a href="/#">Подробнее . . .</a></div>
                        </div>
                        <div>
                            <div className="flex font-alice">
                                <div className="w-1/4 p-4 bg-pink-950 w-[100px] flex justify-center">
                                    <div className="self-center text-white ">
                                        <div className="text-center text-4xl">5</div>
                                        <div className="text-center px-2">Декабрь</div>
                                    </div>
                                </div>
                                <div className="mx-4 text-2xl "><h2>Новость</h2></div>
                            </div>
                            <div className="text-xl font-serif">Как уроженец Калифорнии, я большой поклонник вина!
                                Местное вино
                                - мое слабое место, и я никогда не упускал возможности попробовать какое-нибудь новое
                                вино…
                            </div>
                            <div className="text-xl text-right text-pink-950 hover:text-gray-950"><a href="/#">Подробнее . . .</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <ModalProduct showModal={showModalProduct} setShowModalTopRight={setShowModalTopRight}
                          setShowModal={setShowModalProduct}/>
            <ModalCart showModalTopRight={showModalTopRight} cart={cart} setShowModalTopRight={setShowModalTopRight}/>
        </>
    );
}
Welcome.layout = page => <Layout children={page} title="Welcome"/>
