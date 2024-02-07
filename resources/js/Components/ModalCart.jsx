import {
    TEModal,
    TEModalBody,
    TEModalContent,
    TEModalDialog,
    TEModalFooter,
    TEModalHeader,
    TERipple
} from "tw-elements-react";
import Cart from "./Cart";
import {useDispatch, useSelector} from "react-redux";
import {useEffect} from "react";

export default function ModalCart(props) {
const openCart = useSelector((store)=>store.setRightCart);
    const dispatch = useDispatch();
    useEffect(()=>{
        props.setShowModalTopRight(openCart);
    },[openCart])
    useEffect(()=>{
        dispatch({type:"OPENRIGHTCART",preload:props.showModalTopRight})
    },[props.showModalTopRight])
    return <TEModal show={props.showModalTopRight} setShow={props.setShowModalTopRight}>
        <TEModalDialog
            position="top-right"
            theme={{
                show: "translate-x-0 opacity-100",
                hidden: "translate-x-[100%] opacity-0",
            }}
            className={"right-0 "}
        >
            <TEModalContent className={"relative"}>
                <TEModalHeader>
                    {/* <!--Modal title--> */}
                    <h5 className="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200">
                        Корзина
                    </h5>
                    {/* <!--Close button--> */}
                    <button
                        type="button"
                        className="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        onClick={() => {
                            props.setShowModalTopRight(false);
                            dispatch({type:"OPENRIGHTCART",preload:false})
                        }}
                        aria-label="Close"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            strokeWidth="1.5"
                            stroke="currentColor"
                            className="h-6 w-6"
                        >
                            <path
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </TEModalHeader>
                {/* <!--Modal body--> */}
                <TEModalBody className={"relative"}>
                    <Cart cart={props.cart} showModalTopRight = {props.showModalTopRight}/>
                </TEModalBody>

            </TEModalContent>

        </TEModalDialog>

    </TEModal>
}
