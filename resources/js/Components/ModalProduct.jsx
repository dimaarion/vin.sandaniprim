import {
    TEModal,
    TEModalBody,
    TEModalContent,
    TEModalDialog,
    TEModalFooter,
    TEModalHeader,
    TERipple
} from "tw-elements-react";
import ViewProduct from "./ViewProduct";

export default function ModalProduct(props){
   return <TEModal show={props.showModal} setShow={props.setShowModal}>
        <TEModalDialog style={{ maxWidth: "1200px"}}>
            <TEModalContent>
                <TEModalHeader>
                    {/* <!--Modal title--> */}
                    <h5 className="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200">

                    </h5>
                    {/* <!--Close button--> */}
                    <button
                        type="button"
                        className="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        onClick={() => props.setShowModal(false)}
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
                <TEModalBody><ViewProduct setShowModalTopRight={props.setShowModalTopRight} /></TEModalBody>
            </TEModalContent>
        </TEModalDialog>
    </TEModal>
}