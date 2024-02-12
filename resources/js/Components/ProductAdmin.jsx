import React, {useState, useEffect} from "react";
import {percent} from "@/action";
import {router, useForm} from '@inertiajs/react'
import {
    TETabs,
    TETabsContent,
    TETabsItem,
    TETabsPane,
    TERipple,
    TEModal,
    TEModalDialog,
    TEModalContent,
    TEModalHeader,
    TEModalBody,
    TEModalFooter,
    TEInput,
    TETextarea
} from "tw-elements-react";
import DeleteSvg from "@/Components/DeleteSvg";
import EditSvg from "@/Components/EditSvg";
import PlusSvg from "@/Components/PlusSvg";

export default function ProductAdmin(props) {
    const [justifyActive, setJustifyActive] = useState("Красные вина");
    const [showModalEdit, setShowModalEdit] = useState(false);
    const [showModalFiles, setShowModalFiles] = useState(false);
    const [showModalDelete, setShowModalDelete] = useState(false);
    const [addProduct, setAddProduct] = useState(false);
    const [productValue, setProductValue] = useState({});
    const [images, setImages] = useState([]);
    const handleJustifyClick = (value) => {
        if (value === justifyActive) {
            return;
        }
        setJustifyActive(value);
    };
    const [values, setValues] = useState({
        id: '',
        name: '',
        alias: '',
        image: '',
        title: '',
        description: '',
        title_meta: '',
        description_meta: '',
        keywords: '',
        price: '0',
        discount: '0',
        storage_time: '',
        color: '',
        flavor: '',
        sort: '',
        volume: '',
        category_id: '',
    })

    function submit(e) {
        e.preventDefault()
        values.alias = values.name.replace(/[" "]/g, "-").toLowerCase();
        values.image = images.join(",");
        values.button = addProduct ? "add-product" : "update-product"
        router.post('/dashboard/edit-product', values);
    }

    function submitDelete(e) {
        e.preventDefault();
        let val = {button: '', id: ''}
        Array.from(e.target).forEach((el)=>{
            if(el.type ==='submit'){
                val = {button: el.name, id: el.value}
            }
        })
        router.post('/dashboard/edit-product', val);
        setShowModalDelete(false);
    }

    function handleChange(e) {
        const key = e.target.id;
        const value = e.target.value
        setValues(values => ({
            ...values,
            [key]: value,
        }))
    }

    return <>
        <div className="mb-3">
            <TETabs justify>
                {props.product.map((el) => <div key={el.id + "category"}><TETabsItem
                    onClick={() => handleJustifyClick(el.sub_name)}
                    active={justifyActive === el.sub_name}
                >
                    {el.sub_name}
                </TETabsItem></div>)}
            </TETabs>

            <TETabsContent>
                {props.product.map((el) => <div key={el.id + "category"}>
                    <TETabsPane show={justifyActive === el.sub_name}>
                        <div className="flex justify-end my-6">
                            <button
                                onClick={() => {
                                    setAddProduct(true)
                                    setShowModalEdit(true);
                                    setImages([])
                                    setValues({
                                        id: '',
                                        name: '',
                                        alias: '',
                                        image: '',
                                        title: '',
                                        description: '',
                                        title_meta: '',
                                        description_meta: '',
                                        keywords: '',
                                        price: '0',
                                        discount: '0',
                                        storage_time: '',
                                        color: '',
                                        flavor: '',
                                        sort: '',
                                        volume: '',
                                        category_id: el.id,
                                    })
                                }}
                                type="button"
                                className="inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]"
                            >
                                Добавить продукт
                            </button>
                        </div>

                        <div className="relative bg-white border border-gray-200 shadow-md dark:bg-neutral-700 p-6">
                            <table className="min-w-full text-left text-xs ">
                                <thead className="uppercase tracking-wider border-b-2 dark:border-neutral-600 border-t">
                                <tr>
                                    <th scope="col" className="px-6 py-6 border-x text-center dark:border-neutral-600">
                                        №
                                    </th>
                                    <th scope="col" className="px-6 py-6 border-x text-center dark:border-neutral-600">
                                        Изображение
                                    </th>
                                    <th scope="col" className="px-6 py-6 border-x text-center dark:border-neutral-600">
                                        Название
                                    </th>
                                    <th scope="col" className="px-6 py-6 border-x text-center dark:border-neutral-600">
                                        Цена
                                    </th>
                                    <th scope="col" className="px-6 py-6 border-x text-center dark:border-neutral-600">
                                        Скидка
                                    </th>
                                    <th scope="col" className="px-6 py-6 border-x text-center dark:border-neutral-600">
                                        Редактировать
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                {el.product.map((p) => <tr key={p.id + "product"}
                                                           className="border-b dark:border-neutral-600 user_item">
                                    <td scope="row"
                                        className="px-6 py-6 text-center border-x dark:border-neutral-600 product_id">
                                        {p.id}
                                    </td>
                                    <td className="px-6 py-6 border-x dark:border-neutral-600 product_image flex justify-center">
                                        <img className="w-[100px]" src={p.image.split(",")[0]}/>
                                    </td>
                                    <td className="px-6 py-6 border-x text-balance dark:border-neutral-600 product_name">{p.name}</td>
                                    <td className="px-6 py-6 border-x dark:border-neutral-600 product_price text-center">{p.price}</td>
                                    <td className="px-6 py-6 border-x dark:border-neutral-600 product_discount text-center">{p.discount}%</td>
                                    <td className="px-6 py-6 border-x dark:border-neutral-600 product_item">
                                        <div className="flex justify-center gap-1">
                                            <div onClick={() => {
                                                setProductValue(p);
                                                setImages(p.image ? p.image.split(",") : [])
                                                setShowModalEdit(true);
                                                setValues({
                                                    id: p.id,
                                                    name: p.name ? p.name : "",
                                                    alias: p.name ? p.name.replace(/[" "]/g, "-").toLowerCase() : "",
                                                    image: p.image ? p.image : "",
                                                    title: p.title ? p.title : "",
                                                    description: p.description ? p.description : "",
                                                    title_meta: p.title_meta ? p.title_meta : "",
                                                    description_meta: p.description_meta ? p.description_meta : "",
                                                    keywords: p.keywords ? p.keywords : "",
                                                    price: p.price ? p.price : "0",
                                                    discount: p.discount ? p.discount : "0",
                                                    storage_time: p.storage_time ? p.storage_time : "",
                                                    color: p.color ? p.color : "",
                                                    flavor: p.flavor ? p.flavor : "",
                                                    sort: p.sort ? p.sort : "",
                                                    volume: p.volume ? p.volume : "",
                                                    category_id: p.category_id,
                                                })
                                            }} className="cursor-pointer hover:text-pink-950" title="Редактировать">
                                                <EditSvg/>
                                            </div>
                                            <div onClick={() => {
                                                setShowModalDelete(true);
                                                setProductValue(p);
                                            }
                                            } className="cursor-pointer hover:text-pink-950 delete-product"
                                                 title="Удалить">
                                                <DeleteSvg/>
                                            </div>
                                        </div>
                                    </td>
                                </tr>)}
                                </tbody>
                            </table>
                        </div>
                    </TETabsPane>
                </div>)}
            </TETabsContent>
        </div>
        <div>
            {/* <!-- Modal --> */}
            <TEModal show={showModalEdit} setShow={setShowModalEdit} scrollable>
                <form onSubmit={(e) => submit(e)}>
                    <TEModalDialog size="fullscreen">
                        <TEModalContent>
                            <TEModalHeader>
                                {/* <!-- Modal title --> */}
                                <div>
                                    <h5 className="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200">
                                        ru|md
                                    </h5>
                                    <h5 className="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200">
                                        {productValue.name}
                                    </h5>
                                </div>

                                {/* <!--Close button--> */}
                                <TERipple rippleColor="light">
                                    <button
                                        type="submit"
                                        className="inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]"
                                    >
                                        Сохранить
                                    </button>
                                </TERipple>
                                <TERipple rippleColor="light">
                                    <button
                                        type="button"
                                        className="inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]"
                                        onClick={() => {
                                            setShowModalEdit(false);
                                            setAddProduct(false);
                                        }}
                                    >
                                        Закрыть
                                    </button>
                                </TERipple>
                            </TEModalHeader>
                            {/* <!--Modal body--> */}
                            <TEModalBody>
                                {values.name}
                                <div className="flex gap-4">
                                    <div className="w-1/2 grid gap-y-4">
                                        <h2 className="font-bold text-xl">Страница</h2>
                                        <div className="flex gap-4">
                                            <div className="w-full">
                                                <TEInput id="name" value={values.name} onChange={handleChange}
                                                         type="text" label="Название страницы"/>
                                            </div>
                                        </div>
                                        <div className="flex gap-4">
                                            <div className="w-full">
                                                <TEInput type="text" id="alias" onFocus={handleChange}
                                                         value={values.name.replace(/[" "]/g, "-").toLowerCase()}
                                                         disabled/>
                                            </div>
                                        </div>
                                        <div className="flex gap-4">
                                            <div className="w-full">
                                                <TEInput id="keywords" value={values.keywords} onChange={handleChange}
                                                         type="text" label="Ключевые слова"/>
                                            </div>
                                        </div>
                                        <div className="flex gap-4">
                                            <div className="w-full">
                                                <TEInput id="title_meta" value={values.title_meta}
                                                         onChange={handleChange} type="text"
                                                         label="Заголовок страницы"/>
                                            </div>
                                        </div>
                                        <div className="flex gap-4">
                                            <div className="w-full">
                                                <TETextarea id="description_meta" value={values.description_meta}
                                                            onChange={handleChange} label="Описание страницы"
                                                            rows={10}/>
                                            </div>
                                        </div>
                                        <h2 className="font-bold text-xl">Товар</h2>
                                        <div className="flex gap-4">
                                            <div className="w-full">
                                                <TEInput id="title" value={values.title} onChange={handleChange}
                                                         type="text" label="Заголовок товара"/>
                                            </div>
                                        </div>
                                        <div className="flex gap-4">
                                            <div className="w-full">
                                                <TETextarea id="description" value={values.description}
                                                            onChange={handleChange} label="Описание товара"
                                                            rows={10}/>
                                            </div>
                                        </div>
                                        <h2 className="font-bold">Характеристики</h2>
                                        <div className="flex gap-4">
                                            <div className="w-full">
                                                <TEInput id="storage_time" value={values.storage_time}
                                                         onChange={handleChange} type="text" label="Год"/>
                                            </div>
                                            <div className="w-full">
                                                <TEInput id="color" value={values.color} onChange={handleChange}
                                                         type="text" label="Цвет"/>
                                            </div>
                                            <div className="w-full">
                                                <TEInput id="flavor" value={values.flavor} onChange={handleChange}
                                                         type="text" label="Вкус"/>
                                            </div>
                                        </div>
                                        <div className="flex gap-4">
                                            <div className="w-full">
                                                <TEInput id="sort" value={values.sort} onChange={handleChange}
                                                         type="text" label="Сорт"/>
                                            </div>
                                            <div className="w-full">
                                                <TEInput id="volume" value={values.volume} onChange={handleChange}
                                                         type="text" label="Объем"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="grid grid-cols-2 w-1/2 relative">
                                        <div className="grid gap-y-4 h-[140px]">
                                            <h2 className="font-bold">Цена: <s
                                                className="text-gray-600">{values.price} MDL</s> {percent(values.price, values.discount)}MDL
                                            </h2>
                                            <div className="flex">
                                                <div className="w-full">
                                                    <TEInput id="discount" value={values.discount}
                                                             onChange={handleChange} type="number" label="Скидка"/>
                                                </div>
                                            </div>
                                            <div className="flex">
                                                <div className="w-full">
                                                    <TEInput id="price" value={values.price} onChange={handleChange}
                                                             type="number" label="Цена"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="ml-4">
                                            <img className="w-full" src={images[0]}/>
                                        </div>
                                        <div
                                            className="grid gap-4 grid-cols-6 absolute bottom-0 overflow-y-scroll h-[400px] bg-white py-6">
                                            {images.map((el, i) => <div key={i + "images"}
                                                                        className="h-auto border rounded relative">
                                                <img className="w-full" src={el}/>
                                                <div onClick={(e) => setImages(images.filter((fel, j) => j !== i))}
                                                     className="absolute cursor-pointer top-0 right-0 p-1"><DeleteSvg
                                                    width={15} height={15}/></div>
                                            </div>)}
                                            <div onClick={() => setShowModalFiles(true)}><PlusSvg/></div>
                                        </div>
                                    </div>
                                </div>
                            </TEModalBody>
                        </TEModalContent>
                    </TEModalDialog>
                </form>
            </TEModal>
            <TEModal show={showModalFiles} setShow={setShowModalFiles} className="z-10">
                <TEModalDialog size="lg" position="top-left" className="bg-white">
                    <TEModalHeader>
                        <h5>Галлерея</h5>
                    </TEModalHeader>
                    <TEModalContent className="z-10">
                        <div className="m-6 grid gap-4 grid-cols-5">
                            {props.files.map((el, i) => <div key={i + "files"}
                                                             onClick={() => setImages([...images, "/storage/" + el])}
                                                             className="border rounded"><img className="w-full"
                                                                                             src={`/storage/${el}`}/>
                            </div>)}
                        </div>
                    </TEModalContent>
                </TEModalDialog>
            </TEModal>
            <TEModal show={showModalDelete} setShow={setShowModalDelete} className="z-10">
                <form onSubmit={submitDelete}>
                    <TEModalDialog size="sm" position="top" className="bg-white">
                        <TEModalHeader>
                            <h5><span className="font-bold">Удалить</span>: {productValue.name}</h5>
                        </TEModalHeader>
                        <TEModalContent className="z-10">
                            <div>
                                <button type="submit"
                                        name="del-product"
                                        value={productValue.id}
                                        className="inline-block w-full rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                                    Удалить продукт
                                </button>


                            </div>
                        </TEModalContent>
                    </TEModalDialog>
                </form>
            </TEModal>
        </div>
    </>
}
