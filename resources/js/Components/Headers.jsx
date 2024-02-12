import MainMenu from "@/Components/MainMenu";
import {useDispatch, useSelector} from "react-redux";
import {useEffect, useState} from "react";
import MainForm from "@/Components/MainForm";
import {patchLocale} from "@/action";
import LocaleSvg from "@/Components/LocaleSvg";



export default function Headers(props) {
    const [search, setSearch] = useState(false);
    const [login, setLogin] = useState(false);
    const openCart = useSelector((store) => store.setRightCart);
    const dispatch = useDispatch();
    const totalCount = useSelector((store) => store.totalCount);

    useEffect(()=>{
        dispatch({type:"LOCALE",preload:props.children.locale});
        dispatch({type:"LOCALEARR",preload:props.children.localeArray});

    },[])
    return (<>
        <div className="bg-gray-dark  text-white flex flex-row sticky top-0 z-10 h-[50px] justify-center font-alice ">
            <div className="container flex justify-center lg:justify-between px-2">
                <div className="flex">
                    <div className="flex-col self-center pr-4  hidden sm:block">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 className="bi bi-geo-alt"
                                 viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                    </div>
                    <div className="flex-col self-center pr-4  hidden sm:block">
                        <div>
                            r-nul Anenii Noi, s. Bulboaca, str. Stefan cel Mare, 1
                        </div>
                    </div>
                    <div className="flex-col pr-4 self-center hidden sm:block">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 className="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                        </div>
                    </div>
                    <div className="flex-col pr-4 self-center hidden sm:block">
                        <div>
                            (373) 69-916-819
                        </div>
                    </div>
                    <div className="flex-col pr-4 self-center hidden xl:block">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 className="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                        </div>
                    </div>
                    <div className="flex-col pr-4 self-center hidden xl:block">
                        <div>
                            19197908an@mail.ru
                        </div>
                    </div>
                    <div className="flex-col pr-4 self-center hidden xl:block">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 className="bi bi-clock"
                                 viewBox="0 0 16 16">
                                <path
                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div className="flex-col pr-4 self-center hidden xl:block">
                        <div>
                            Ore de lucru de la 8:00 la 17:00
                        </div>
                    </div>
                </div>

                <div className="flex self-center gap-8 justify-end">
                   <div className="w-[50px] relative">
                       <div className="flex local-icon  cursor-pointer">
                           <LocaleSvg x = {3} y={14} text = {props.children.locale}/>
                           <div className="absolute pt-10 hidden z-10 ml-[-15px] ">
                               <div className="flex bg-white pb-1 px-4">
                                   {props.children.localeArray.map((locale)=>locale === "ro"?<a key={locale} href={"/"}><div className="text-gray-900 hover:text-pink-hov"><LocaleSvg x = {3} y={14}  text = "ro"/></div></a>:<a key={locale} href={"/"+ locale + patchLocale(props.children.locale)}><div className="text-gray-900 hover:text-pink-hov"><LocaleSvg x = {3} y={14} color = "#000" text ={locale}/></div></a>)}
                                  </div>
                           </div>
                       </div>

                   </div>

                    <div className="cursor-pointer relative">
                        {!search ? <svg
                                onClick={() => {
                                    setSearch(!search ? true : false);
                                    setLogin(false);
                                }}
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 16 16"
                                fill="currentColor"
                                className="text-center h-7 w-7 hover:text-gray-200">
                                <path
                                    fillRule="evenodd"
                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                    clipRule="evenodd"/>
                            </svg> :
                            <svg
                                onClick={() => {
                                    setSearch(!search ? true : false);
                                    setLogin(false);
                                }}
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 20 20"
                                strokeWidth="1.5"
                                stroke="currentColor"
                                width="30px"
                                className="hover:text-gray-200"

                            >
                                <path
                                    strokeLinecap="round"
                                    strokeLinejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                />
                            </svg>
                        }

                        <div className="mb-3 w-[300px] ml-[-108px] absolute mt-5">
                            <div
                                className={`relative mb-4 flex w-full transition ease-in-out  duration-75 flex-wrap ${search ? `opacity-1` : `opacity-0`} items-stretch`}>
                                <input
                                    type="search"
                                    className="relative m-0 block bg-white focus:ring-gray-900 flex-auto rounded border border-solid border-gray-600 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-gray-300 focus:text-neutral-700  focus:outline-none dark:border-gray-300 dark:border-gray-300 dark:placeholder:text-neutral-200 dark:focus:border-gray-300"
                                    placeholder="Search"
                                    aria-label="Search"
                                    aria-describedby="button-addon2"/>

                                {/* <!--Search icon--> */}
                                <span
                                    className="input-group-text flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-neutral-700 dark:text-neutral-200"
                                    id="basic-addon2">
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                      className="h-5 w-5">
                      <path
                          fillRule="evenodd"
                          d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                          clipRule="evenodd"/>
                  </svg>
              </span>
                            </div>
                        </div>
                    </div>
                    <div className="relative">
                        {login ? <svg
                                onClick={() => {
                                    setSearch(false);
                                    setLogin(!login ? true : false)
                                }}
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 20 20"
                                strokeWidth="1.5"
                                stroke="currentColor"
                                width="30px"
                                className=" hover:text-gray-200 cursor-pointer"

                            >
                                <path
                                    strokeLinecap="round"
                                    strokeLinejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                />
                            </svg> :
                            <svg onClick={() => {
                                setLogin(!login ? true : false)
                                setSearch(false)
                            }} xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                 className="bi bi-person-circle cursor-pointer hover:text-gray-200" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fillRule="evenodd"
                                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>}

                        {login ? <div className="absolute w-[300px] ml-[-175px] mt-3">
                            <MainForm/>
                        </div> : <div></div>}
                    </div>
                    <div className="cursor-pointer" onClick={() => {
                        dispatch({type: "OPENRIGHTCART", preload: openCart ? false : true});
                        setLogin(false);
                        setSearch(false);
                    }}>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                             fill="currentColor"
                             viewBox="0 0 16 16" className="bi  bi-cart-fill  hover:text-gray-200">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            <circle r="5" fill="#621212" cx="11" cy="5"/>
                            <text x="11" y="8" fontSize="8" textAnchor="middle" fill="white">{totalCount}</text>
                        </svg>
                    </div>

                </div>

            </div>
        </div>
        <div className="flex justify-center">
            <div className="container p-2">
                <MainMenu/>
            </div>
        </div>


    </>)
}
