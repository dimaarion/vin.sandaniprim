export default function LocaleSvg(props){

    return <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="30" height="30">
        <text x={props.x} y={props.y}  fill={"currentColor"}>{props.text}</text>
    </svg>
}
