import EditSvg from "@/Components/EditSvg";
import React, {useEffect, useState} from "react";
import {useForm} from '@inertiajs/react'
import {
    TERipple,
    TEModal,
    TEModalDialog,
    TEModalContent,
    TEModalHeader,
    TEModalBody,
    TEModalFooter,
    TESelect
} from "tw-elements-react";
export default function ListUsers(props) {
    const [showModal, setShowModal] = useState(false);
    const [selectValue, setSelectValue] = useState("user");
    const [user, setUser] = useState({});

    const dataSelect = [
        { text: "administrator", value: "administrator" },
        { text: "user", value: "user" },
        { text: "moderator", value: "moderator" },
    ];
    const {setData, post, processing, errors } = useForm({
        roleUpdate: '',
        role:'',
        userId:''
    })

    useEffect(()=>{

    })
    function submit(e) {
        e.preventDefault();
        post('/dashboard/role');
    }
    return <>
        <div
            className="overflow-x-auto bg-white border border-gray-200 shadow-md dark:bg-neutral-700 mt-6">
            <table className="min-w-full text-left text-xs whitespace-nowrap">
                <thead className="uppercase tracking-wider border-b-2 dark:border-neutral-600 border-t">
                <tr>
                    <th scope="col" className="px-6 py-6 border-x text-center dark:border-neutral-600">
                        №
                    </th>
                    <th scope="col" className="px-6 py-6 border-x text-center dark:border-neutral-600">
                        Имя
                    </th>
                    <th scope="col" className="px-6 py-6 border-x text-center dark:border-neutral-600">
                        почта
                    </th>
                    <th scope="col" className="px-6 py-6 border-x text-center dark:border-neutral-600">
                        Статус
                    </th>
                    <th scope="col" className="px-6 py-6 border-x text-center dark:border-neutral-600">
                        Редактировать
                    </th>
                </tr>
                </thead>


                <tbody>
                {props.users.map((user)=><tr key={user.id + "user"} className="border-b dark:border-neutral-600 user_item">
                    <th scope="row" className="px-6 py-6 text-center border-x dark:border-neutral-600 user_id">
                        {user.id}
                    </th>
                    <td className="px-6 py-6 border-x dark:border-neutral-600 user_name">{user.name}</td>
                    <td className="px-6 py-6 border-x dark:border-neutral-600 user_email">{user.email}</td>
                    <td className="px-6 py-6 border-x dark:border-neutral-600">
                        <div className="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem] flex justify-center">
                            {user.role.map((r)=><div key={r.id + "role"}>{r.role}</div>)}
                        </div>
                    </td>
                    <td>
                        <div className="flex justify-center gap-1">
                            <div  onClick={() => {
                                setShowModal(true);
                                setUser(user);
                                setSelectValue(user.role[0].role);
                                setData('userId', user.id)
                            }} className="cursor-pointer hover:text-pink-950 remove">
                                <EditSvg/>
                            </div>
                        </div>

                    </td>
                </tr>)}


                </tbody>
            </table>
        </div>
        <div className="absolute m-auto left-0 right-0 top-0 bottom-0 hidden ">

        </div>
        <div>

            <TEModal show={showModal} setShow={setShowModal}>
                <form onSubmit={submit}>
                <TEModalDialog>
                    <TEModalContent>
                        <TEModalHeader>
                            {/* <!--Modal title--> */}
                            <h5 className="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200">
                                {user.name} ({selectValue})
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
                            <div className="flex justify-center">
                                <div className="relative mb-3 md:w-96 pt-5">
                                    <TESelect data={dataSelect} value={selectValue}  onValueChange={(e) => {
                                        setSelectValue(e.value);
                                        setData('role', e.value);
                                    }} />
                                </div>
                            </div>
                        </TEModalBody>
                        <TEModalFooter>
                            <TERipple rippleColor="light">
                                <button
                                    type="button"
                                    className="inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]"
                                    onClick={() => setShowModal(false)}
                                >
                                    Закрыть
                                </button>
                            </TERipple>
                            <TERipple rippleColor="light">
                                <button
                                    onClick={()=>setData('roleUpdate', "Сохранить")}
                                    type="submit"
                                    className="inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]"
                                >
                                    Сохранить
                                </button>
                            </TERipple>
                        </TEModalFooter>
                    </TEModalContent>
                </TEModalDialog>
                </form>
            </TEModal>
        </div>
    </>
}
