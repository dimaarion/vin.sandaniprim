import './bootstrap';
import {Chart} from "frappe-charts/dist/frappe-charts.min.esm"
import Alpine from 'alpinejs';

import {
    Carousel,
    Dropdown,
    Sidenav,
    Lightbox,
    Collapse,
    Select,
    Ripple,
    Input,
    initTE,
} from "tw-elements";
import createForEach from "alpinejs";
import axios from "axios";


window.Alpine = Alpine;

Alpine.start();
initTE({Carousel, Dropdown, Sidenav, Collapse, Select, Ripple, Lightbox,Input});

class Admin {

    save = "Сохранено";
    negative = "Ошибка";
    del = "Удалено";
    id = 91390101;
    key = "OAuth y0_AgAAAAALk4mfAAa0oAAAAADyNDbpfM-dOxo6SS-2k85vvD71PojCyo4";
    date1 = "18-11-2023";
    month = "";
    url = "https://api-metrika.yandex.net/stat/v1/data";
    height = '300px';


    response(text, n = 0) {
        let r = document.querySelector("#response");
        if (r) {
            if (n === 0) {
                r.classList.add("text-pink-950");
            } else {
                r.classList.add("text-green");
            }
            r.innerHTML = text;
            setTimeout(() => {
                r.innerHTML = "";
                r.classList.remove("text-pink-950");
            }, 3000)
        }
    }

    deleteUser() {
        let remove = document.querySelectorAll(".remove");
        remove.forEach((e, i) => {
            e.addEventListener("click", (event) => {
                let removeBlock = document.querySelector("#remove");
                removeBlock.classList.remove("hidden");
                let item = document.createElement("div");
                let closeEl = document.createElement("div");
                let user = document.createElement("div");
                let userId = document.getElementsByClassName("user_id")[i];
                let userName = document.getElementsByClassName("user_name")[i];
                let userEmail = document.getElementsByClassName("user_email")[i];
                let userItem = document.getElementsByClassName("user_item")[i];

                closeEl.className = "flex justify-end p-6 cursor-pointer  hover:text-pink-950"
                closeEl.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">\n' +
                    '  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"></path>\n' +
                    '</svg>';
                removeBlock.appendChild(item);
                item.appendChild(closeEl);
                item.appendChild(user);
                item.className = "bg-white"
                user.innerHTML = '<table class="flex justify-center h-[100px]"><tr><td class="border border-gray-400 w-[100px] text-center">№</td><td class="border border-gray-400 w-[250px] text-center">Имя</td><td class="border border-gray-400 w-[250px] text-center">Почта</td><td class="border border-gray-400 w-[250px] text-center" rowspan="2"><button class="bg-pink-950 w-full h-[72px] text-white text-2xl hover:bg-gray-950">Удалить</button></td></tr><tr><td class="border border-gray-400 w-[100px] text-center">' + userId.textContent + '</td><td class="border border-gray-400  text-center">' + userName.textContent + '</td><td class="border border-gray-400 text-center">' + userEmail.textContent + '</td></tr></table>'
                let button = removeBlock.querySelector("button");

                button.addEventListener("click", (event) => {
                    this.response(this.negative, 0);
                    event.preventDefault();
                    axios({
                        method: 'post',
                        url: '/dashboard/surliest',
                        data: {
                            category: 'removeUser',
                            userid: parseInt(userId.textContent),
                        }
                    }).then((response)=>{
                        console.log(response)
                    }).catch((response) => {
                        console.log(response)

                    });
                    console.log("del")
                    this.response(this.del, 1)
                    item.remove();
                    removeBlock.classList.add("hidden");
                    userItem.remove();
                })

                closeEl.addEventListener("click", () => {
                   item.remove();
                   removeBlock.classList.add("hidden");
                })
            });

        })
    }

    adminStatus() {
        let role = document.querySelectorAll(".role");
        role.forEach((el, j) => {
            el.addEventListener("change", (e) => {
                this.response(this.negative, 0)
                e.preventDefault();
                let userId = document.getElementsByClassName("user_id")[j];


                axios({
                    method: 'post',
                    url: '/dashboard/surliest',
                    data: {
                        category: 'roleUser',
                        roleId: parseInt(userId.textContent),
                        role: e.target.value
                    }
                }).catch((response) => {
                    console.log(response)
                });
                this.response(this.save, 1)

            })
        })


    }

    urlMenu() {
        let menu = document.querySelector("#menu");
        let a = menu.querySelectorAll("a");
        a.forEach((e, i) => {
            if (this.isUrl(e.href) !== -1) {
                a[i].parentElement.classList.add("bg-gray-950");
                a[i].parentElement.parentElement.parentElement.classList.remove("hidden")
            }
        })
    }

    isUrl(url) {
        return document.baseURI.search(url);
    }

    dateTime() {
        let d = new Date();
        let y = d.getFullYear();
        let date = d.getDate();
        let month = d.getMonth();
        let date1Month = (y) + "-" + (month) + "-" + date;
        let date1Week = (y) + "-" + (month + 1) + "-" + (date - 7);
        let date1Year = (y - 1) + "-" + (month + 1) + "-" + date;
        this.month = date + "." + month + "." + y + " - " + date + "." + (month + 1) + "." + y
        let titleAdmin = document.querySelectorAll(".title-admin");

        titleAdmin.forEach((el) => {
            el.href = "/dashboard?date1=" + date1Year + "&group=month";
        })
        this.date1 = document.location.search.replace("?", "");
        let dateSelector = document.querySelector(".date-selector");
        if (dateSelector) {
            let td = dateSelector.getElementsByTagName("td");
            let select = dateSelector.getElementsByTagName("select");
            for (let i = 0; i < td.length; i++) {
                td.item(i).addEventListener("click", () => {
                    if (i === 0) {
                        document.location = "/dashboard?date1=7daysAgo&group=day";
                    } else if (i === 1) {
                        document.location = "/dashboard?date1=30daysAgo&group=week";
                    } else if (i === 2) {
                        document.location = "/dashboard?date1=" + date1Year + "&group=month";
                    }

                })
            }
            for (let i = 0; i < select.length; i++) {
                select.item(i).addEventListener("change", (el) => {
                    if (select.item(i).getAttribute("data-selector") === "7daysAgo") {
                        document.location = "/dashboard?date1=7daysAgo&group=" + el.target.value;
                    } else if (select.item(i).getAttribute("data-selector") === "30daysAgo") {
                        document.location = "/dashboard?date1=30daysAgo&group=" + el.target.value;
                    } else if (select.item(i).getAttribute("data-selector") === 'year') {
                        document.location = "/dashboard?date1=" + date1Year + "&group=" + el.target.value;
                    }
                })
            }

        }
    }


    dimensions(metrikaApiJSON, n = 0) {
        return metrikaApiJSON.data.map((d) => d.dimensions[n]);
    }

    metrics(metrikaApiJSON, n = 0) {
        return metrikaApiJSON.data.map((d) => d.metrics[n]);
    }

    getMetrikYear(params) {
        fetch(
            this.url + '/bytime?'+ params +'&lang=ru&' + this.date1 + '&id=' + this.id, {
                headers: {
                    "Authorization": this.key
                }
            })
            .then(r => r.json())
            .then(metrikaApiJSON => {

                this.setDateV("#chart", metrikaApiJSON);


                let names = this.dimensions(metrikaApiJSON).map((n) => n.name);
                let viz = this.metrics(metrikaApiJSON)[0];
                let pr = this.metrics(metrikaApiJSON, 1)[0];
                let otk = this.metrics(metrikaApiJSON, 2)[0];
                let glPr = this.metrics(metrikaApiJSON, 3)[0];
                let timesV = this.metrics(metrikaApiJSON, 4)[0];


                const data = {
                    labels: names,
                    datasets: [
                        {
                            name: "Визиты", type: "bar",
                            values: viz
                        },
                        {
                            name: "Просмотры", type: "bar",
                            values: pr
                        }

                    ]
                }
                new Chart("#chart", {  // or a DOM element,
                    // new Chart() in case of ES6 module with above usage
                    title: "My Awesome Chart",
                    data: data,
                    type: 'axis-mixed', // or 'bar', 'line', 'scatter', 'pie', 'percentage'
                    height: 250,
                    colors: ['#7cd6fd', '#743ee2', 'red', 'green', '#ffd963']
                })

            })

    }

    setDateV(id, data) {
        if (data.query) {
            let block = document.querySelector(id);
            let date = document.createElement("div");
            block.parentElement.appendChild(date);
            date.className = "absolute top-0 right-0 m-auto mr-4 mt-3 text-lg";
            date.innerHTML = data.query.date1.replace(/[-]+/g, ".") + " - " + data.query.date2.replace(/[-]+/g, ".")

        }
    }

    getTraffic(v,n = 0) {
        document.querySelector("#grafic-visits").getElementsByTagName("h2")[0].innerHTML = v;
        fetch(
            this.url + '/bytime?metrics=ym:s:visits,ym:s:pageviews,ym:s:users,ga:pageviewsPerSession&' + this.date1 + '&date2=today&ym:s:isRobot==No&id=' + this.id, {
                headers: {
                    "Authorization": this.key
                }
            })
            .then(r => r.json())
            .then(metrikaApiJSON => {
                this.setDateV("#visits", metrikaApiJSON);
                let metrics = this.metrics(metrikaApiJSON);
                let pageviews = this.metrics(metrikaApiJSON, 1);
                let users = this.metrics(metrikaApiJSON, 2);
                let pageCount = this.metrics(metrikaApiJSON, 3);
                let monts = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
                let m = metrikaApiJSON.time_intervals.map((x) => x[0].match(/([0-9])([0-9])/g)[2].replace(/^[0]/, ""));
                let mont = monts.map((el, i) => [{
                    'name': el,
                    "count": i + 1
                }][0]);

                function df(n) {
                    return mont.filter((x) => x.count === n)
                }

                let value = metrics[0];
                if (n === 0) {
                    value = metrics[0];
                } else if (n === 1) {
                    value = pageviews[0];
                } else if (n === 2) {
                    value = users[0];
                } else if (n === 3) {
                    value = pageCount[0];
                }

                const data = {
                    labels: m.map((x) => df(parseInt(x))[0].name),
                    datasets: [
                        {
                            name: v, type: "bar",
                            values: value
                        }
                    ]
                }
                const chart = new Chart("#visits", {  // or a DOM element,
                    // new Chart() in case of ES6 module with above usage
                    title: "My Awesome Chart",
                    data: data,
                    type: 'bar', // or 'bar', 'line', 'scatter', 'pie', 'percentage'
                    height: 250,
                    colors: ['#7cd6fd', '#743ee2', 'red', 'green', '#ffd963']
                })

                document.querySelector(".visit-max").innerHTML = this.countPlus(metrics[0]);
                document.querySelector(".pageviews-max").innerHTML = this.countPlus(pageviews[0]);
                document.querySelector(".users-max").innerHTML = this.countPlus(users[0]);
                document.querySelector(".page-count-max").innerHTML = this.countPlus(pageCount[0]);

            })
    }



    countPlus(a) {
        let count = 0;
        a.forEach((el) => {
            count += el;
        })
        return count;
    }


    getMetrikSearchPhrases() {
        fetch(
            this.url + '?preset=sources_search_phrases&' + this.date1 + '&id=' + this.id, {
                headers: {
                    "Authorization": this.key
                }
            })
            .then(r => r.json())
            .then(metrikaApiJSON => {
                this.setDateV("#search-phrases", metrikaApiJSON);
                this.createTableEl(metrikaApiJSON, "#search-phrases", 0);
            })
    }

    createTableEl(metrikaApiJSON, selecror, n) {
        let data = metrikaApiJSON.data
        let pages = data.map((d) => d.dimensions[n]);
        let metrics = data.map((d) => d.metrics)
        let p = document.querySelector(selecror);
        let table = document.createElement("table");
        let thead = document.createElement("thead");
        let btn = document.createElement("button");
        table.className = "min-w-full text-left text-sm font-light"
        p.className = "relative my-4";
        p.appendChild(table);
        let headname = ['Название', 'Визиты', 'Просмотры'];
        table.appendChild(thead);
        let trh = document.createElement("tr");
        thead.appendChild(trh);
        headname.map((head, i) => {
            let th = trh.appendChild(document.createElement("th"));
            th.innerHTML = head;
            th.setAttribute("scope", "col");
            th.className = "px-6 py-4";
            if (i === 0) {
                th.className = "px-6 py-4 w-[300px]";
            }
        })

        pages.filter((f) => f.name !== null).map((p, i) => {
            let tr = document.createElement("tr");
            tr.className = "border-b dark:border-neutral-500"
            table.appendChild(tr);
            let td = [p.name, metrics[i][0], metrics[i][1]];
            td.map((t, j) => {
                td = tr.appendChild(document.createElement("td"));
                if (p.url !== undefined) {
                    td.innerHTML = '<a href="' + p.url + '">' + t + '</a>';
                } else {
                    td.innerHTML = t;
                }

                if (j === 0) {
                    td.className = " px-6 py-4 font-medium"
                } else {
                    td.className = " px-6 py-4"
                }
            })
        })

    }

    getMetrikVEngines() {
        let browsers = document.querySelector("#browsers");
        fetch(
            this.url + '/bytime?preset=interests2&lang=ru&' + this.date1 + '&id=' + this.id, {
                headers: {
                    "Authorization": "OAuth y0_AgAAAAALk4mfAAa0oAAAAADyNDbpfM-dOxo6SS-2k85vvD71PojCyo4"
                }
            })
            .then(r => r.json())
            .then(metrikaApiJSON => {

               console.log(metrikaApiJSON)
            })
    }

    getPageContent() {
        fetch(
            this.url + '?preset=content_entrance&' + this.date1 + '&id=' + this.id, {
                headers: {
                    "Authorization": "OAuth y0_AgAAAAALk4mfAAa0oAAAAADyNDbpfM-dOxo6SS-2k85vvD71PojCyo4"
                }
            })
            .then(r => r.json())
            .then(metrikaApiJSON => {
                this.createTableEl(metrikaApiJSON, "#search-content", 4);
            })
    }

    scrolling() {
        let scrolls = document.querySelector("#scrolls");

        function changes() {
            if (window.scrollY > 10) {
                scrolls.classList.replace("opacity-0", "opacity-100");
            } else if (window.scrollY < 10) {
                scrolls.classList.replace("opacity-100", "opacity-0")
            }
        }

        window.addEventListener("scroll", (e) => {
            changes();
        });
        changes();
        scrolls.addEventListener("click", (e) => {
            e.preventDefault();

            window.scrollBy({
                top: -window.scrollY,
                behavior: 'smooth'
            });

        })
    }

    trafficView(){
        this.getTraffic("Визиты",0)
        document.querySelectorAll(".list-select-max").forEach((el, i) => {
            el.addEventListener("click", () => {
                this.getTraffic(el.getElementsByTagName("h6")[0].textContent,i);
                document.querySelectorAll(".list-select-max").forEach((x,j)=>{
                    if(i === j){
                        x.getElementsByTagName("h5")[0].classList.add("border-gray-950")
                    }else {
                        x.getElementsByTagName("h5")[0].classList.remove("border-gray-950")
                    }
                })
            });
        })
        this.getMetrikYear("preset=geo_country&dimensions=ga:city");
       document.querySelectorAll(".list-summary").forEach((summary,i)=>{
           summary.addEventListener("click",()=>{
               if(i === 0){
                   this.getMetrikYear("preset=geo_country&dimensions=ga:city");
               }else if (i === 1){
                   this.getMetrikYear("preset=tech_browsers");
               }else if(i === 2){
                   this.getMetrikYear("preset=search_engines");
               }else if(i === 3){
                   this.getMetrikYear("preset=interests2");
               }
               document.querySelectorAll(".list-summary").forEach((el,j)=>{
                   if(i === j){
                       el.getElementsByTagName("h5")[0].classList.add("border-gray-950")
                   }else if(i === j){
                       el.getElementsByTagName("h5")[0].classList.add("border-gray-950")
                   }else {
                       el.getElementsByTagName("h5")[0].classList.remove("border-gray-950")
                   }
               })

           })
       })


    }


    addProduct(){
       let addProduct = document.querySelector("#add-product");
       let input = addProduct.getElementsByTagName("input");
       let button = addProduct.getElementsByTagName("button");
       let image = document.querySelector(".image");
       button = button.item(0);
       button.addEventListener("change",()=>{

       })
        for (let key in input) {
             if(input.item(key).type === "file"){
                 input.item(key).addEventListener("change",(el)=>{
                     image.src = URL.createObjectURL(el.target.files[0])
console.log(el.target.files[0])
                 })
             }
        }

    }

    view() {
        this.dateTime();
        if (document.querySelector("#menu")) {
            this.isUrl("dashboard/surliest");
            this.urlMenu();
            this.adminStatus();
            this.deleteUser();
        }
        if (document.querySelector("#metrics")) {
            this.getMetrikSearchPhrases();
           // this.getMetrikVEngines();
            this.getPageContent();
            this.trafficView();
        }
        if(document.querySelector("#add-product")){
            this.addProduct();
        }
        this.scrolling();
    }
}

const admin = new Admin();
admin.view();


