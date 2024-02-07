import { Navbar,Button } from 'flowbite-react';
import {useSelector} from "react-redux";
import {patchLocale} from "@/action";

export default function MainMenu(props){
    const locale = useSelector((store)=>store.getLocale)
    return (
        <Navbar fluid rounded>
            <Navbar.Brand className=" w-[100px] lg:w-[200px]" href="/">
                <img src="/storage/logo.png" className="mr-3 w-full " alt="Flowbite React Logo" />
            </Navbar.Brand>
                <Navbar.Toggle className={"z-10"} />
            <Navbar.Collapse className="text-xl3" >
                <Navbar.Link className="text-xl" href={locale !== "ro"?"/" + locale:"/" } active>
                    Home
                </Navbar.Link>
                <Navbar.Link className="text-xl" href="/product">Продукты</Navbar.Link>
                <Navbar.Link className="text-xl" href="#">Services</Navbar.Link>
                <Navbar.Link className="text-xl" href="#">Pricing</Navbar.Link>
                <Navbar.Link className="text-xl" href="#">Contact</Navbar.Link>
            </Navbar.Collapse>
        </Navbar>
    );
}
