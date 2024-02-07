import {getStorage, percent, setCount, getTotalNumber, setSumPrice, getTotalPrice, getTotalCount} from "../action";
import {useDispatch, useSelector} from "react-redux";
import {countViewProduct} from "../store";
import {useEffect} from "react";

export default function PriceControl(props){

    const selectAddCart = useSelector((store)=>store.addCart);
    const dispatch = useDispatch();

    return  <div>
        <div className="flex flex-row justify-left">
            <div onClick={()=> {
                dispatch({type:"COUNVIEW",count:props.el.count = props.el.count > 1?props.el.count - 1:props.el.count = 1})
                dispatch({type:"SUM",id:props.el.id})
                dispatch({type:"TOTALPRICE",preload:selectAddCart})
                dispatch({type:"TOTALCOUNT",preload:selectAddCart})
            }} className="w-10 h-10 border justify-center flex border-gray-300 cursor-pointer select-none">
                <div className="self-center">-</div>
            </div>
            <div className="w-10 h-10 border justify-center flex border-gray-300 ">
                <div  className="self-center overflow-hidden">{props.el.count}</div>

            </div>
            <div onClick={()=> {
                dispatch({type:"COUNVIEW",count:props.el.count = props.el.count + 1})
                dispatch({type:"SUM",id:props.el.id})
                dispatch({type:"TOTALPRICE",preload:selectAddCart})
                dispatch({type:"TOTALCOUNT",preload:selectAddCart})
            }} className="w-10 h-10 select-none border justify-center flex border-gray-300 cursor-pointer">
                <div className="self-center">+</div>
            </div>
        </div>
    </div>
}