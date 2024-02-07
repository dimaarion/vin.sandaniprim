import {localeSeparator, percent} from "../action"

import {useDispatch, useSelector} from "react-redux";

export default function Products(props) {
    const selectAddCart = useSelector((store)=>store.addCart);
    const presentation = useSelector((store)=>store.setPresentation);
    const dispatch = useDispatch();
    let icon = presentation.filter((f)=>f === props.el.id);
    const locale = useSelector((store)=>store.getLocale);

    return <div
        className="item-products shadow-lg mx-3 mt-6 flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0">
        {locale}
        <a href={locale === "ro"?`/product/${props.el.alias}`:`${locale}/product/${props.el.alias}`}>
            <img
                className="rounded-t-lg m-auto p-6 h-[200px]"
                src={props.el.image.split(",")[0]}
                alt="Skyscrapers"/>
        </a>
        <div className="p-6">
            <h5
                className="mb-2 h-[50px] text-xl  font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                {localeSeparator(props.el.title,locale)}
            </h5>
            <p className="mb-4  text-base text-neutral-600 dark:text-neutral-200">
                {props.el.discount > 0?<span className="text-gray-600 "><s>{props.el.price} MDL</s></span>:<span/>} <span className="text-gray-950">{percent(props.el.price, props.el.discount)} MDL</span>
            </p>
            <div className="thumbnail-buttons">
                <div className="text-2xl flex justify-center">
                    <div onClick={() => {
                        props.setShowModalProduct(true);
                        dispatch({type:"VIEWPRODUCT",cart:selectAddCart,el:props.el});
                        dispatch({type:"COUNTIMAGE",preload:0})
                    }}
                         className="basis-auto  w-10 h-10 justify-center flex product-icon ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             className="bi self-center  text-white bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path
    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                    </div>

                    {icon.length > 0 ? <div onClick={()=> {dispatch({type: "SETPRESENTATION", el: props.el})}} className="basis-auto  w-10 h-10 justify-center flex  product-icon ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             className="bi self-center  text-white bi-heart-fill" viewBox="0 0 16 16">
                            <path fillRule="evenodd"
    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg>
                    </div> : <div onClick={()=> {dispatch({type: "SETPRESENTATION", el: props.el})}} className="basis-auto  w-10 h-10 justify-center flex product-icon  ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             className="bi bi-heart text-white self-center" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                        </svg>
                    </div>}

                    <div onClick={() => {
                        props.setShowModalTopRight(true);

                        dispatch({type:"ADDCART",product:props.el});
                    }}
                         className="basis-auto  w-10 h-10 justify-center flex product-icon ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             className="bi self-center  text-white bi-cart-fill" viewBox="0 0 16 16">
                            <path
    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

    </div>

}
