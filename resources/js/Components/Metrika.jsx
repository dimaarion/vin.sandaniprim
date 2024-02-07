import {useEffect, useState} from "react";
import {params} from "@/action";
import Dayjs from "dayjs";
import {
    TEDropdown,
    TEDropdownToggle,
    TEDropdownMenu,
    TEDropdownItem,
    TERipple,
    TEChart
} from "tw-elements-react";


export default function Metrika() {
    const [data, setData] = useState([{}]);
    const [data2, setData2] = useState([{}]);
    const [data3, setData3] = useState([{}]);
    const [data4, setData4] = useState([{}]);
    const [pages, setPages] = useState([]);
    const [group, setGroup] = useState("month");
    const [visit, setVisit] = useState({});
    const [contentP, setContentP] = useState([]);
    const [site, setSite] = useState("vin.sandaniprim.md");
    const [id, setId] = useState(42913549);
    const [active, setActive] = useState("Год");
    const [date1, setDate1] = useState(Dayjs().subtract(1, 'year').format("YYYY-MM-DD"));



    useEffect(() => {
        params.getMetrikYear("preset=geo_country&dimensions=ga:city&date1=" + date1, setData, id);
    }, [date1, id])

    useEffect(() => {
        params.getTraffic(setData2, date1, group, id);
    }, [date1, id, group])

    useEffect(() => {
        params.getMetrikSearchPhrases(setData3, date1, id);
    }, [date1, id])
    useEffect(() => {
        params.getPageContent(setData4, date1, id);
    }, [date1, id])
    useEffect(() => {
        if (params.metricsViz(data.data)) {
            setVisit({
                label: params.dimensionsName(data.data),
                visit: params.metricsViz(data.data),
                prosm: params.metricsViz(data.data, 1)
            });
        }
    }, [data])

    useEffect(() => {
        if (params.namePage(data3)) {
            setPages(params.namePage(data3))
        }
    }, [data3])

    useEffect(() => {
        if(params.contentPage(data4)){
            setContentP(params.contentPage(data4))
        }
    }, [data4])




    return <div className="">
        <div className="sticky top-0">
            <div className="flex justify-between w-full">
                <table className={`my-4 top-0 bg-gray-dark-200 z-10`}>
                    <tbody>
                    <tr>
                        <td onClick={() => {
                            setDate1(Dayjs().subtract(1, 'day').format("YYYY-MM-DD"));
                            setActive("День");
                            setGroup("hour")

                        }}
                            className={`border border-gray-300 px-2 py-1 cursor-pointer hover:bg-amber-300 ${active === "День" ? `bg-amber-300` : `bg-amber-200`} `}>
                            День
                        </td>
                        <td onClick={() => {
                            setDate1(Dayjs().subtract(1, 'week').format("YYYY-MM-DD"));
                            setActive("Неделя");
                            setGroup("day")

                        }}
                            className={`border border-gray-300 px-2 py-1 cursor-pointer hover:bg-amber-300 ${active === "Неделя" ? `bg-amber-300` : `bg-amber-200`} `}>
                            Неделя
                        </td>
                        <td onClick={() => {
                            setDate1(Dayjs().subtract(1, 'month').format("YYYY-MM-DD"));
                            setActive("Месяц");
                            setGroup("week")
                        }}
                            className={`border border-gray-300 px-2 py-1 cursor-pointer hover:bg-amber-300 ${active === "Месяц" ? `bg-amber-300` : `bg-amber-200`} `}>
                            Месяц
                        </td>
                        <td onClick={() => {
                            setDate1(Dayjs().subtract(1, 'year').format("YYYY-MM-DD"));
                            setActive("Год")
                            setGroup("month")
                        }}
                            className={`border border-gray-300 px-2 py-1 cursor-pointer hover:bg-amber-300 ${active === "Год" ? `bg-amber-300` : `bg-amber-200`} `}>
                            Год
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div><h1
                    className={"text-center text-xl my-6"}>С {Dayjs(date1).format("DD.MM.YYYY")} по {Dayjs().format("DD.MM.YYYY")} г.</h1>
                </div>
                <div>
                    <TEDropdown className="flex justify-center">
                        <TERipple rippleColor="light">
                            <TEDropdownToggle className="flex">
                                {site}
                                <span className="ml-2 [&>svg]:w-5 w-2">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
            >
              <path
                  fillRule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clipRule="evenodd"
              />
            </svg>
          </span>
                            </TEDropdownToggle>
                        </TERipple>

                        <TEDropdownMenu>
                            <TEDropdownItem>
                                <div onClick={() => {
                                    setSite("vin.sandaniprim.md");
                                    setId(42913549)
                                }}
                                     className="block w-full min-w-[160px] cursor-pointer whitespace-nowrap bg-transparent px-4 py-2 text-sm text-left font-normal pointer-events-auto text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:bg-neutral-100 focus:bg-neutral-100 focus:text-neutral-800 focus:outline-none active:no-underline dark:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600 dark:active:bg-neutral-600">
                                    vin.sandaniprim.md

                                </div>
                            </TEDropdownItem>
                            <TEDropdownItem>
                                <div onClick={() => {
                                    setSite("sandani.ru");
                                    setId(91390101)
                                }}
                                     className="block w-full min-w-[160px] cursor-pointer whitespace-nowrap bg-transparent px-4 py-2 text-sm text-left font-normal pointer-events-auto text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:bg-neutral-100 focus:bg-neutral-100 focus:text-neutral-800 focus:outline-none active:no-underline dark:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600 dark:active:bg-neutral-600">
                                    sandani.ru
                                </div>
                            </TEDropdownItem>
                            <TEDropdownItem>
                                <div onClick={() => {
                                    setSite("sandaniprim.md");
                                    setId(91390982)
                                }}
                                     className="block w-full min-w-[160px] cursor-pointer whitespace-nowrap bg-transparent px-4 py-2 text-sm text-left font-normal pointer-events-auto text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:bg-neutral-100 focus:bg-neutral-100 focus:text-neutral-800 focus:outline-none active:no-underline dark:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600 dark:active:bg-neutral-600">
                                    sandaniprim.md
                                </div>
                            </TEDropdownItem>
                        </TEDropdownMenu>
                    </TEDropdown>
                </div>
            </div>
            <div className={"flex"}>
                {active === "День" ? <div>
                    <select onChange={(e) => setGroup(e.target.value)} className="period-group-selector">
                        <option value="hour">По часам</option>
                        <option value="minute">По минутам</option>
                    </select>
                </div> : <div></div>}
                {active === "Неделя" ? <div>
                    <select onChange={(e) => setGroup(e.target.value)} className="period-group-selector">
                        <option value="day">По дням</option>
                        <option value="hour">По часам</option>
                    </select>
                </div> : <div></div>}
                {active === "Месяц" ? <div>
                    <select onChange={(e) => setGroup(e.target.value)} className="period-group-selector">
                        <option value="week">По неделям</option>
                        <option value="day">По дням</option>
                    </select>
                </div> : <div></div>}
                {active === "Год" ? <div>
                    <select onChange={(e) => setGroup(e.target.value)} className="period-group-selector">
                        <option value="month">По месяцам</option>
                        <option value="week">По неделям</option>
                    </select>
                </div> : <div></div>}


            </div>
        </div>
        <div className={"border rounded mt-6 bg-white p-6"}>
            <h1 className={"text-center text-2xl my-6"}>По городам</h1>
            <TEChart
                type="line"
                data={{
                    labels: visit.label,
                    datasets: [
                        {
                            backgroundColor: "blue",
                            borderColor: "blue",
                            label: "Визиты",
                            data: visit.visit,
                        }, {
                            backgroundColor: "yellow",
                            borderColor: "yellow",
                            label: "Просмотры",
                            data: visit.prosm,
                        },
                    ],
                }}
            />
        </div>
        <div className={"border rounded mt-6 bg-white p-6"}>
            <h1 className={"text-center text-xl my-6"}>Сводка</h1>
            <TEChart
                type="line"
                data={{
                    labels: params.interval_traffic(data2) ? params.interval_traffic(data2) : [],
                    datasets: [
                        {
                            backgroundColor: "blue",
                            borderColor: "blue",
                            label: "Визиты",
                            data: params.metrics(data2.data)[0],
                        }, {
                            backgroundColor: "yellow",
                            borderColor: "yellow",
                            label: "Просмотры",
                            data: params.metrics(data2.data, 1)[0],
                        },
                        {
                            backgroundColor: "green",
                            borderColor: "green",
                            label: "Посетители",
                            data: params.metrics(data2.data, 2)[0],
                        }, {
                            backgroundColor: "aqua",
                            borderColor: "aqua",
                            label: "Впемя на сайте",
                            data: params.metrics(data2.data, 3)[0],
                        },
                    ],
                }}
            />
        </div>
        <div className="flex">
            <div className="border rounded bg-white w-1/2 mt-6 mr-6">
                <h2 className="ml-4 mt-4 font-bold">Поисковые запросы</h2>
                <div className="overflow-y-scroll   my-4  h-[500px]">
                    <div className="p-6">{pages.map((el, i) => <div className="flex my-3 border-b-2" key={i + "name-page"}>
                        <div className="w-[200px]">{el[0][0]}</div>
                        <div className="justify-center flex self-center w-[150px]">{el[1][0]}</div>
                        <div>{el[1][1].map((m, l) => <div key={l + "metric-pade"} className="flex">
                            <div className="mr-2">{el[1][2][l]}</div>
                            {m}</div>)}</div>
                    </div>)}
                    </div>
                </div>
            </div>
            <div className="border rounded w-1/2 bg-white mt-6">
                <h2 className="ml-4 mt-4 font-bold">Страницы</h2>
                <div className="overflow-y-scroll   my-4  h-[500px]">
                    <div className="p-6">{contentP.map((el,i)=><div key={i + "content"} className="flex border-b-2 my-3">
                        <div className="w-[200px] overflow-hidden mr-4">{el[0]}</div>
                        <div className="flex">
                            <div>{el[1].map((l)=><div key={l + "label"}>{l}</div>)}</div>
                            <div>{el[2].map((l,j)=><div key={j + "metric"} className="ml-4">{l}</div>)}</div>
                        </div>

                    </div>)}</div>
                </div>
            </div>
        </div>

<div className="h-[200px]"></div>
    </div>
}
