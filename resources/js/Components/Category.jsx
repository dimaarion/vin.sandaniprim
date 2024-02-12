import {localeSeparator} from "@/action";
import {useEffect} from "react";
import {useSelector} from "react-redux";

export default function Category(props) {
    const locale = useSelector((store)=>store.getLocale)
    const localeArr = useSelector((store)=>store.getLocaleArr)

    return <div className="text-center w-[100px] cursor-pointer mx-6 ">
        <img className={`w-full rounded-full ${props.id === props.count?`active`:``}`}  src={props.element.image}/>
        <div>{localeSeparator(props.element.name,locale,localeArr) }</div>
    </div>
}

