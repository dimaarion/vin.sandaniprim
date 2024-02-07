import {useDispatch} from "react-redux";

export default function Icons(props){
    const dispatch = useDispatch();

    if(props.image){
        return <div  className="w-full h-[130px] flex overflow-auto bg-white z-1 relative">
            {props.image.split(",").map((el, i) =><div key={i + "image-product"}  onClick={() => dispatch({type:"COUNTIMAGE",preload:i})} className="mr-2 mt-2 h-[100px] w-[100px] p-2 border flex-none "><img className="w-full cursor-pointer" src={el}/></div>)}
        </div>
    }else {
        return <div></div>
    }

}
