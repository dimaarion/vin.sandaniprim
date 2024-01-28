import { Navbar,Button } from 'flowbite-react';

export default function MainMenu(props){
    return (
        <Navbar fluid rounded>
            <Navbar.Brand className="w-[200px]" href="/">
                <img src="../storage/logo.png" className="mr-3 w-full " alt="Flowbite React Logo" />
            </Navbar.Brand>
            <div className="flex md:order-2">
            </div>
            <Navbar.Collapse className="text-xl3" >
                <Navbar.Link className="text-xl" href="#" active>
                    Home
                </Navbar.Link>
                <Navbar.Link className="text-xl" href="/product">About</Navbar.Link>
                <Navbar.Link className="text-xl" href="#">Services</Navbar.Link>
                <Navbar.Link className="text-xl" href="#">Pricing</Navbar.Link>
                <Navbar.Link className="text-xl" href="#">Contact</Navbar.Link>
            </Navbar.Collapse>
        </Navbar>
    );
}
