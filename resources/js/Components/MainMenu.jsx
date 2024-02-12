import { Navbar,Button,Dropdown } from 'flowbite-react';
import {useSelector} from "react-redux";
import {localeSeparator} from "@/action";
import lang from "@/json/lang.json";


export default function MainMenu(props){
    const locale = useSelector((store)=>store.getLocale);
    const selectLocaleArr = useSelector((store) => store.getLocaleArr);

    return (
        <Navbar fluid rounded>
            <Navbar.Brand className=" w-[100px] lg:w-[200px]" href="/">
                <img src="/storage/logo.png" className="mr-3 w-full " alt="Flowbite React Logo" />
            </Navbar.Brand>
                <Navbar.Toggle className={"z-10"} />
            <div className="flex md:order-2">

            </div>
            <Navbar.Collapse className="">
                <Navbar.Link className="text-xl font-serif" href={localeSeparator(lang.homeUrl,locale,selectLocaleArr)} active>
                    {localeSeparator(lang.mainMenu.home,locale,selectLocaleArr)}
                </Navbar.Link>
                <Navbar.Link className="text-xl font-serif" href="/product">Продукты</Navbar.Link>
                <Navbar.Link className="text-xl font-serif" href="#">Services</Navbar.Link>
                <Navbar.Link className="text-xl font-serif" href="#">Pricing</Navbar.Link>
                <Navbar.Link className="text-xl font-serif" href="#">Contact</Navbar.Link>
            </Navbar.Collapse>
        </Navbar>
    );
}
