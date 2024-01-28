import MainMenu from "@/Components/MainMenu";

export default function Headers() {
    return <>
        <div className="bg-gray-dark  text-white flex flex-row justify-center pt-1 font-alice head-bar">
            <div className="container p-2 flex ">
                <div className="flex-col pr-4 mt-2 hidden sm:block">
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
                <div className="flex-col pr-4 mt-1 hidden sm:block">
                    <div>
                        r-nul Anenii Noi, s. Bulboaca, str. Stefan cel Mare, 1
                    </div>
                </div>
                <div className="flex-col pr-4 mt-2 hidden sm:block">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             className="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    </div>
                </div>
                <div className="flex-col pr-4 mt-1 hidden sm:block">
                    <div>
                        (373) 69-916-819
                    </div>
                </div>
                <div className="flex-col pr-4 mt-2 hidden xl:block">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             className="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                    </div>
                </div>
                <div className="flex-col pr-4 mt-1 hidden xl:block">
                    <div>
                        19197908an@mail.ru
                    </div>
                </div>
                <div className="flex-col pr-4 mt-2 hidden xl:block">
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
                <div className="flex-col pr-4 mt-1 hidden xl:block">
                    <div>
                        Ore de lucru de la 8:00 la 17:00
                    </div>
                </div>
                <div className=" grow  pr-4 flex flex-row ml-4  justify-center sm:justify-end">
                    <div className="flex-col pr-4 ml-4 cursor-pointer">
                        <div className="relative">
                            <button className="on-search">
                                <x-icon-search width="30" height="30" className="bi bi-search"/>
                            </button>

                            <div className="absolute pt-2 rounded hidden z-50" id="in-search">
                                <div className="flex relative">
                                    <div className=" pt-1">
                                        <input
                                            className="on-search text-gray border rounded border-gray focus:border-pink focus:ring-pink"
                                            placeholder="Поиск"
                                            type="text"/>
                                    </div>
                                    <div
                                        className=" text-gray-950 m-auto w-4 h-4 right-0 mr-3 top-0 bottom-0 absolute ">
                                        <x-icon-search width="20" height="20" className="bi bi-search hover:text-pink"/>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                             className="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fillRule="evenodd"
                                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </div>
                    <div id="main-cart" className="flex-col pr-4 ml-4 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                             fill="currentColor"
                             viewBox="0 0 16 16" className="bi  bi-cart-fill">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            <circle r="5" fill="#621212" cx="11" cy="5"/>
                            <text x="11" y="8" fontSize="8" textAnchor="middle" fill="white">1</text>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
        <div className="flex justify-center">
            <div className="container p-2" >
                <MainMenu />
            </div>
        </div>
        <div className="flex justify-center bg-amber-50">
            <div className="container h-[400px] px-2">
                <div className="columns-2 gap-5">
                    <div className="">
                        <img
                            src="../storage/banner3.png"
                            className="w-full"
                            alt="..."/>
                    </div>
                    <div className="pt-12">
                        <p className="font-serif font-light text-lg  sm:text-xl  lg:text-4xl">
                            Гармония вкуса и аромата молдавских вин не оставит равнодушным даже самого
                            искушенного гурмана
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </>
}
