import {Link} from '@inertiajs/react'
import Headers from "@/Components/Headers";
import Footer from "@/Components/Footer";

export default function Layout({children}) {
    return (
        <main>
            <Headers children = {children.props}/>
            <article>{children}</article>
            <Footer/>
        </main>
    )
}
