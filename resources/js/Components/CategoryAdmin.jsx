import React, {useEffect, useState} from "react";
import EditSvg from "@/Components/EditSvg";
import DeleteSvg from "@/Components/DeleteSvg";
import {
    TERipple,
    TEModal,
    TEModalDialog,
    TEModalContent,
    TEModalHeader,
    TEModalBody,
    TEModalFooter, TEInput,
} from "tw-elements-react";
import {router} from "@inertiajs/react";

export default function CategoryAdmin(props) {
    const [showModal, setShowModal] = useState(false);
    const [showModalFiles, setShowModalFiles] = useState(false);
    const [categoryEdit, setCategoryEdit] = useState({});
    const [values, setValues] = useState({button:'', name:'',sub_name:'',image:'',id:''});
    const [images, setImages] = useState("");
    function handleChange(e) {
        const key = e.target.id;
        const value = e.target.value
        setValues(values => ({
            ...values,
            [key]: value,
        }))
    }
    useEffect(() => {
       // console.log(values)
    }, [values])

   function submit(e){
        if(values.name === "" || values.sub_name === "" || images === ""){
            return true;
        }
        e.preventDefault();
        values.image = images;
        router.post('/dashboard/category-update',values);
        console.log(values)
       setShowModal(false)
    }


   function deleteCategory(e){
        e.preventDefault();
       setValues({button:'del-category', name:'',sub_name: '',image: '',id:e.target.value})
            console.log({button:'del-category',id:e.target.children[0].value});
       router.post('/dashboard/category-update',{button:'del-category',id:e.target.children[0].value});
    }

    return <>
        <h2 className="text-2xl">Категории</h2>
        <div className="relative inline-block flex justify-end align-bottom">
            <button onClick={()=> {
                setShowModal(true);
                setValues({button:'add-category',name:'',sub_name: '',image: '', id:''})
                setImages("");
            }} type="submit" className="inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                Добавить категорию
            </button>
        </div>
        <div>
            {props.category.map((el, i) => <div className="flex gap-4 border-b py-4" key={i + "category"}>
                <div className="w-[50px] h-[50px]"><img className="w-full" src={el.image} /></div>
                <div className="w-full self-center">{el.name}</div>
                <div onClick={() => {
                    setShowModal(true);
                    setCategoryEdit(el);
                    setValues({button:'edit-category', name:el.name,sub_name: el.sub_name,image: el.image,id:el.id})
                    setImages(el.image)
                }} className="cursor-pointer self-center"><EditSvg/></div>
                <form onSubmit={deleteCategory} className="cursor-pointer self-center">
                    <button value={el.id} type={"submit"} ><DeleteSvg/></button>
                </form>

            </div>)}
        </div>
        <TEModal show={showModal} setShow={setShowModal}>
            <TEModalDialog>
                <form onSubmit={submit}>
                <TEModalContent>
                    <TEModalHeader>
                        {/* <!--Modal title--> */}
                        <h5 className="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200">
                            {categoryEdit.name}
                        </h5>
                        {/* <!--Close button--> */}
                        <button
                            type="button"
                            className="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                            onClick={() => setShowModal(false)}
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
                    <TEModalBody>

                        <div className="flex gap-4">
                            <div className="w-1/4 relative">
                                <img className="w-full" src={images}/>
                                <div onClick={()=>setShowModalFiles(true)} className="absolute top-0 right-0 bg-white p-1 rounded hover:bg-gray-200 cursor-pointer"><EditSvg/></div>
                            </div>
                            <div className="w-3/4">
                                <div className="py-2">
                                    <TEInput
                                        type="text"
                                        id="name"
                                        label="Категория"
                                        value={values.name}
                                        onChange={handleChange}
                                    />
                                </div>
                                <div className="py-2">
                                    <TEInput
                                        type="text"
                                        id="sub_name"
                                        label="Подкатегория"
                                        value={values.sub_name}
                                        onChange={handleChange}
                                    />
                                </div>
                            </div>
                        </div>
                    </TEModalBody>
                    <TEModalFooter>
                        <TERipple rippleColor="light">
                            <div className="relative inline-block align-bottom">
                                <button  type="submit" className="inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                                    Сохранить
                                </button>
                            </div>
                        </TERipple>
                    </TEModalFooter>
                </TEModalContent>
            </form>
            </TEModalDialog>
        </TEModal>
        <TEModal show={showModalFiles} setShow={setShowModalFiles} className="z-10">
            <TEModalDialog  position="top-left" className="bg-white">
                <TEModalHeader>
                    <h5>Галлерея</h5>
                </TEModalHeader>
                <TEModalContent className="z-10">
                    <div className="m-6 grid cursor-pointer gap-4 grid-cols-5">
                        {props.files.map((el, i) => <div key={i + "files"}
                                                         onClick={() => setImages( "/storage/" + el)}
                                                         className="border rounded"><img className="w-full"
                                                                                         src={`/storage/${el}`}/>
                        </div>)}
                    </div>
                </TEModalContent>
            </TEModalDialog>
        </TEModal>

    </>

}
