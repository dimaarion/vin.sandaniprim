import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head} from '@inertiajs/react';
import MenuLeftAdmin from "@/Components/MenuLeftAdmin";
import Metrika from "@/Components/Metrika";
import {useEffect} from "react";
import ListUsers from "@/Components/ListUsers";
import ProductAdmin from "@/Components/ProductAdmin";
import CategoryAdmin from "@/Components/CategoryAdmin";


export default function Dashboard(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={
                <div className="relative h-[50px]">
                    <h2 className="font-semibold absolute left-0 text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        Административная панель
                    </h2>
                    <h2 id="response" className="text-green absolute right-0"></h2>
                </div>
            }
        >
            <Head title="Административная панель"/>

            <div className="flex flex-row ">
                <div className={`w-[280px]`}>
                    <MenuLeftAdmin menu={props.menu}/>
                </div>
                <div className="w-3/4 flex justify-center ml-5 mt-5 p-5 overflow-y-scroll h-[800px]">
                    <div className="w-full">
                        {props.component === "metrika" ?
                            <Metrika/> : props.component === "list-users" ?
                                <ListUsers users={props.users}/> : props.component === "product" ?
                                    <ProductAdmin error={props.errors} product={props.product}
                                                  files={props.files}/> : props.component === "category" ?
                                        <CategoryAdmin files={props.files} category={props.category}/> :
                                        <div>test</div>}
                    </div>
                </div>
            </div>

        </AuthenticatedLayout>
    );
}
