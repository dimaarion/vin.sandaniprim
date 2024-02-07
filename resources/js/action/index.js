import Dayjs from "dayjs";
export function percent(num, pr) {
    return Math.floor(num - (num * pr / 100)) ;
}

export function setStorage(el){
        return window.localStorage.setItem("cart",JSON.stringify(el));
}

export function getStorage(){
    if(window.localStorage.getItem("cart")){
        return JSON.parse(window.localStorage.getItem("cart"));
    }else {
        return [];
    }

}

export function setCount(cart,n = 1,id){
    if(cart){

        let count = n;
        if(!id){
            cart.forEach((el)=>{
                if(!el.count){
                    el.count = 1;
                    count = 1;
                }
            });
        }else {
            cart.filter((f)=>f.id === id).forEach((el)=>{
                if(!el.count){
                    el.count = 1;
                    count = 1;
                }else {
                    el.count = n;
                    count = n;

                }
            })
        }
        return cart;
    }
}

export function getTotalNumber(){
    if(window.localStorage.getItem("cart")){
        let cart = JSON.parse(window.localStorage.getItem("cart"));
        let num = 0;
        cart.forEach((el)=>{
            num += el.count;
        });
        return num;
    }
}

export function setSumPrice(cart, id){
    let num = 0;
    if(cart){
        let cart = JSON.parse(window.localStorage.getItem("cart"));
        cart.filter((f)=>f.id === id).forEach((el)=>{
            el.totalPrice = el.count * percent(el.price,el.discount);
            num = el.totalPrice
        });
        window.localStorage.setItem("cart",JSON.stringify(cart));
        return num
    }
}

export function getTotalPrice(cart){
    if(Array.isArray(cart)){
        let num = 0;
        cart.forEach((el)=>{
            if(el.totalPrice){
                num += el.totalPrice;
            }

        });
        return num;
    }
}

export function getTotalCount(cart){
    if(Array.isArray(cart)){
        let num = 0;
        cart.forEach((el)=>{
            if(el.count){
                num += el.count;
            }

        });
        return num;
    }
}

export function getPresentation(){
    if(window.localStorage.getItem("presentation")){
        return JSON.parse(window.localStorage.getItem("presentation"));
    }else {
        return [];
    }
}

export const params = {
    id : 91390982,
    key : "OAuth y0_AgAAAAALk4mfAAa0oAAAAADyNDbpfM-dOxo6SS-2k85vvD71PojCyo4",
    date1 : "2023-01-30",
    url : "https://api-metrika.yandex.net/stat/v1/data",
    label: ["Пр:","Виз:","Отк:","Гл:","Вр:"],
    height : '300px',
    d: new Date(),

    dimensions(metrikaApiJSON) {
        if(metrikaApiJSON){
            return metrikaApiJSON.filter((m)=>m.dimensions[0].name !== "(not set)");
        }

    },
    dimensionsName(metrikaApiJSON, n = 0) {
            return this.dimensions(metrikaApiJSON).map((f)=>f.dimensions.map((d)=>d.name));
    },
    metricsViz(metrikaApiJSON, n = 0)  {
        if(metrikaApiJSON){
            if(this.dimensions(metrikaApiJSON).map((d) => d.metrics[n])){
                let a = [];
                metrikaApiJSON.forEach((d,i) => {
                        a[i] = d.metrics[n];
                });

                return a.map((el,i)=>el.reduce((a,b)=>{return a + b},0))
            }

        }
    },
    metrics(metrikaApiJSON, n = 0) {
        if(metrikaApiJSON){
            return metrikaApiJSON.map((d) => d.metrics[n]);
        }else {
            return []
        }

    },
    getMetrikYear(params,data,id) {
        fetch(
            this.url + `/bytime?${params}&lang=ru&id=${id}`, {
                headers: {
                    "Authorization": this.key
                }
            })
            .then(r => r.json())
            .then(metrikaApiJSON =>data(metrikaApiJSON))

    },
    getTraffic(data,date1,group,id){
        fetch(
            this.url + `/bytime?metrics=ym:s:visits,ym:s:pageviews,ym:s:users,ga:pageviewsPerSession&date1=${date1}&group=${group}&ym:s:isRobot==No&id=${id}`, {
                headers: {
                    "Authorization": this.key
                }
            })
            .then(r => r.json())
            .then(metrikaApiJSON => {data(metrikaApiJSON)})
    },

    getMetrikSearchPhrases(data,date1,id) {
        fetch(
            this.url + '?preset=sources_search_phrases&date1=' + date1 + '&id=' + id, {
                headers: {
                    "Authorization": this.key
                }
            })
            .then(r => r.json())
            .then(metrikaApiJSON => {
                data(metrikaApiJSON);
            })
    },
    getPageContent(data,date1,id) {
        fetch(
            this.url + '?preset=content_entrance&date1=' + date1 + '&id=' + id, {
                headers: {
                    "Authorization": this.key
                }
            })
            .then(r => r.json())
            .then(metrikaApiJSON => {
                data(metrikaApiJSON);
            })
    },
    namePage(metrikaApiJSON){
        if(metrikaApiJSON.data){
                return metrikaApiJSON.data.map((d)=>d.dimensions.map((n)=>[n.name,d.metrics,d.metrics.map((m,l)=>this.label[l])]));
        }
    },
    contentPage(metrikaApiJSON){
        if(metrikaApiJSON.data){
            let a = [];
            metrikaApiJSON.data.map((f,l)=>f.dimensions.forEach((el,i)=>{
                a[l] = [el.name,this.label,f.metrics]
            }))

            return a;
        }

    },



    interval_traffic(metrikaApiJSON){
        if(metrikaApiJSON){
            if(metrikaApiJSON.time_intervals){
                let monts = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь','Январь'];


                let format = "MMM"
                if(metrikaApiJSON.query.group === "month"){
                    format = "MMM"
                }else if(metrikaApiJSON.query.group === "week"){
                    format = "DD"
                }else if(metrikaApiJSON.query.group === "day"){
                    format = "DD"
                }
                else if(metrikaApiJSON.query.group === "hour"){
                    format = "HH"
                }if(metrikaApiJSON.query.group === "minute"){
                    format = "HH"
                }
                return metrikaApiJSON.time_intervals.map((m,i)=>Dayjs(m[0]).format(format));
            }

        }else {
            return [];
        }

    }
}


export function localeSeparator(el,locale){
   return  el?locale === "ru"?el.split("|")[0]:el.split("|")[1]:""
}

export function patchLocale(locale){
let url = document.location.pathname.split("/").filter((el)=>el !== locale).join("/");
console.log(document.location)
    return url === "/"?"":url;
}
