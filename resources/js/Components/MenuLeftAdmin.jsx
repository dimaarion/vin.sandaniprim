import React, {useEffect, useState} from "react";
import { TECollapse } from "tw-elements-react";
import {useSelector} from "react-redux";
import menuAdmin from "@/json/menuAdmin.json";
export default function MenuLeftAdmin(props){
    const [activeElement, setActiveElement] = useState("");
   const scroll = useSelector((store)=>store.getScroll)
    const handleClick = (value) => {
        if (value === activeElement) {
            setActiveElement("");
        } else {
            setActiveElement(value);
        }
    };

    return (
        <>
            <div id="menu" className={`w-[300px]  top-0 bg-gray-dark-200 z-10 ${scroll > 200 ? `fixed` : ``}`}>
                {menuAdmin.map((el,i)=> <div key={"menu-left-admin" + i} className={`rounded-t-lg border border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800`}>
                    <h2 className="mb-0" id="headingOne">
                        <button
                            className={`${
                                activeElement === "element-menu-" + i &&
                                `text-primary [box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:!text-primary-400 dark:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]`
                            } group relative flex w-full items-center rounded-t-[15px] border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white`}
                            type="button"
                            onClick={() => handleClick("element-menu-" + i)}
                            aria-expanded="true"
                            aria-controls="collapseOne"
                        >
                            <div dangerouslySetInnerHTML={{__html: el.category.icon}} />
                            <div className="ml-4">{el.category.text}</div>
                            <span
                                className={`${
                                    activeElement === "element-menu-" + i
                                        ? `rotate-[-180deg] -mr-1`
                                        : `rotate-0 fill-[#212529]  dark:fill-white`
                                } ml-auto h-5 w-5 shrink-0 fill-[#336dec] transition-transform duration-200 ease-in-out motion-reduce:transition-none dark:fill-blue-300`}
                            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    strokeWidth="1.5"
                    stroke="currentColor"
                    className="h-6 w-6"
                >
                  <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                  />
                </svg>
              </span>
                        </button>
                    </h2>
                    <TECollapse
                        show={activeElement === "element-menu-" + i}
                        className="!mt-0 !rounded-b-none !shadow-none"
                    >
                        <div className="px-5 py-4">
                            {el.category.item.map((item)=> <div key={"item" + item.name} className="h-10  px-4 flex">
                                <a className="block self-center hover:text-pink-700 w-full" href={item.url}>{item.name}</a>
                            </div>)}
                        </div>
                    </TECollapse>
                </div>)}
            </div>
        </>
    );

}
