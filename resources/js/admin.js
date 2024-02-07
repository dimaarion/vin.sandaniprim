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
    Modal,
    Ripple,
    Input,
    initTE,
    Tab
} from "tw-elements";
import createForEach from "alpinejs";
import axios from "axios";
import isNumeric from "alpinejs";


window.Alpine = Alpine;

Alpine.start();
initTE({Carousel, Dropdown, Sidenav, Collapse, Select, Modal, Ripple, Lightbox, Tab, Input});

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
    closeIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">\n' +
        '  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>\n' +
        '  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>\n' +
        '</svg>';
    delIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">\n' +
        '<path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>\n' +
        '</svg>';


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

    getSelector(selector) {
        return document.querySelector(selector);
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
                closeEl.innerHTML = this.closeIcon;
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
                    }).then((response) => {
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
        if (date.toString().length === 1) {
            date = "0" + date;
        }
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
            this.url + '/bytime?' + params + '&lang=ru&' + this.date1 + '&id=' + this.id, {
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

    getTraffic(v, n = 0) {
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
                    "count": i + 1,
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
                console.log(m.map((x) => df(parseInt(x))[0]))
                const data = {
                    labels: m.map((x) => df(parseInt(x))[0].name),
                    datasets: [
                        {
                            name: v, type: "bar",
                            values: value
                        }
                    ]
                }
                new Chart("#visits", {  // or a DOM element,
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

    trafficView() {
        this.getTraffic("Визиты", 0)
        document.querySelectorAll(".list-select-max").forEach((el, i) => {
            el.addEventListener("click", () => {
                this.getTraffic(el.getElementsByTagName("h6")[0].textContent, i);
                document.querySelectorAll(".list-select-max").forEach((x, j) => {
                    if (i === j) {
                        x.getElementsByTagName("h5")[0].classList.add("border-gray-950")
                    } else {
                        x.getElementsByTagName("h5")[0].classList.remove("border-gray-950")
                    }
                })
            });
        });


        this.getMetrikYear("preset=geo_country&dimensions=ga:city");

        document.querySelectorAll(".list-summary").forEach((summary, i) => {
            summary.addEventListener("click", () => {
                if (i === 0) {
                    this.getMetrikYear("preset=geo_country&dimensions=ga:city");
                } else if (i === 1) {
                    this.getMetrikYear("preset=tech_browsers");
                } else if (i === 2) {
                    this.getMetrikYear("preset=search_engines");
                } else if (i === 3) {
                    this.getMetrikYear("preset=interests2");
                }
                document.querySelectorAll(".list-summary").forEach((el, j) => {
                    if (i === j) {
                        el.getElementsByTagName("h5")[0].classList.add("border-gray-950")
                    } else if (i === j) {
                        el.getElementsByTagName("h5")[0].classList.add("border-gray-950")
                    } else {
                        el.getElementsByTagName("h5")[0].classList.remove("border-gray-950")
                    }
                })

            })
        })


    }


    addProduct() {
        let addProduct = document.querySelector("#add-product");
        let input = addProduct.getElementsByTagName("input");
        let button = document.querySelector("#add-product-save");
        let image = document.querySelector(".image");
        let file = document.querySelector("#add-product-file");
        let nameImage = document.querySelector(".name-image");
        let nameProduct = document.querySelector("#add-name-product");
        let aliasProduct = document.querySelector("#add-alias-product");
        let titleProduct = document.querySelector("#add-title-product");
        let descriptionProduct = document.querySelector("#add-description-product");
        let titlePageProduct = document.querySelector("#add-title-page-product");
        let descriptionPageProduct = document.querySelector("#add-description-page-product");
        let keyWordProduct = document.querySelector("#add-keyword-product");
        let categoryProduct = document.querySelector("#add-category-product");
        let addPrice = document.querySelector("#add-price-product");
        let addDiscount = document.querySelector("#add-discount-product");
        let storageTime = document.querySelector("#add-year-product");
        let color = document.querySelector("#add-color-product");
        let flavor = document.querySelector("#add-flavor-product");
        let sort = document.querySelector("#add-sort-product");
        let volume = document.querySelector("#add-volume-product");

        this.replaceNum(addPrice);
        this.replaceNum(addDiscount);
        this.replaceAlias(nameProduct,aliasProduct)
        addPrice.addEventListener("click", (event) => {
            event.target.value = "";
        })
        addDiscount.addEventListener("click", (event) => {
            event.target.value = "";
        })




        button.addEventListener("click", () => {
            if (button.value === "add-product-save" && this.getImageList().length > 0) {
                const NUMERIC_REGEXP = /[-]{0,1}[\d]*[.]{0,1}[\d]+/g;
                const numbers = addPrice.value.match(NUMERIC_REGEXP);
                const numDisc = addDiscount.value.match(NUMERIC_REGEXP);
                numbers ? addPrice.value = numbers.join("") : addPrice.value = 0;
                numDisc ? addDiscount.value = numDisc.join("") : addDiscount.value = 0;

                axios({
                    method: "post",
                    url: "/dashboard/addproduct",
                    data: {
                        nameProduct: nameProduct.value ? nameProduct.value : "-1",
                        aliasProduct:aliasProduct.value?aliasProduct.value:"-1",
                        titleProduct: titleProduct.value ? titleProduct.value : "-1",
                        descriptionProduct: descriptionProduct.value ? descriptionProduct.value : "-1",
                        titlePageProduct: titlePageProduct.value ? titlePageProduct.value : "-1",
                        descriptionPageProduct: descriptionPageProduct.value ? descriptionPageProduct.value : "-1",
                        keyWordProduct: keyWordProduct.value ? keyWordProduct.value : "-1",
                        image: this.getImageList().join(","),
                        price: addPrice.value,
                        discount: addDiscount.value,
                        storageTime:storageTime.value? storageTime.value : "-1",
                        color:color.value? color.value : "-1",
                        flavor:flavor.value? flavor.value : "-1",
                        sort:sort.value? sort.value : "-1",
                        volume:volume.value? volume.value : "-1",
                        categoryId: categoryProduct.value ? categoryProduct.value : "-1",
                        button: button.value
                    }
                }).then((response) => {
                    if (response.status === 200) {
                        document.location = "/dashboard/product"
                    }
                })

            } else {

            }

        });

        file.addEventListener("change", (el) => {
            image.src = window.URL.createObjectURL(el.target.files[0]);
            nameImage.innerHTML = el.target.files[0].name;
        })
    }

    getImageList(selector = ".image-list"){
        let imgArr = []
        document.querySelectorAll(selector).forEach((el,i)=> {
            imgArr[i] = el.src;
        });
       return imgArr;
    }

    getFiles(file, image, nameImage) {
        file.addEventListener("change", (el) => {
            image.src = window.URL.createObjectURL(el.target.files[0]);
            nameImage.innerHTML = el.target.files[0].name;
        })
    }

    addCategory() {
        let addCategory = document.querySelector("#add-category-save");
        let addCategoryText = document.querySelector("#add-category-text");
        let addSubCategoryText = document.querySelector("#add-sub-category-text");
        let categoryProduct = document.querySelector("#add-category-product");

        addCategory.addEventListener("click", (event2) => {
            if (addCategoryText.value.length > 3) {
                if (addSubCategoryText.value <= 0) {
                    addSubCategoryText.value = "нет";
                }
                axios({
                    method: "post",
                    url: "/dashboard/addcategory",
                    data: {
                        name: addCategoryText.value,
                        subName: addSubCategoryText.value
                    }
                }).then((response) => {
                    if (categoryProduct) {
                        let option = document.createElement("option");
                        categoryProduct.appendChild(option);
                        option.value = response.data.name;
                        option.innerHTML = response.data.name;
                    }
                    let table = document.querySelector("#table-category tbody");
                    if (response.status === 200 && table) {
                        document.location = "/dashboard/addCategory";
                    }
                });
                addCategoryText.value = "";
                addCategoryText.parentElement.style.border = "";
                addSubCategoryText.value = "";

                //this.updateElement("#table-category");
            } else {
                addCategoryText.parentElement.style.border = " 1px solid red";
            }
        })
    }

    updateCategory() {
        let icon = document.querySelectorAll(".update-category-icon");
        if (icon) {
            icon.forEach((el, i) => {
                el.addEventListener("click", (event) => {
                    let category = document.querySelector("#update-category-text");
                    let subCategory = document.querySelector("#update-sub-category-text");
                    let id = document.querySelector("#update-category-id");
                    id.value = el.getAttribute("data-id");
                    category.value = el.getAttribute("data-name");
                    subCategory.value = el.getAttribute("data-subname");
                    let categoryName = document.querySelectorAll(".category-name").item(i);
                    let categorySubName = document.querySelectorAll(".category-sub-name").item(i);
                    let categoryimage = document.querySelectorAll(".category-image").item(i);
                    let button = document.querySelector("#update-category-save");
                    button.addEventListener("click", () => {
                        axios({
                            method: "post",
                            url: "/dashboard/update-category",
                            data: {
                                id: id.value,
                                name: category.value,
                                subName: subCategory.value,
                                image:categoryimage.value
                            }
                        }).then((response) => {
                            if (response.status === 200) {
                                if (el.getAttribute("data-id") === id.value) {
                                    categoryName.innerText = category.value;
                                    categorySubName.innerText = subCategory.value;

                                    el.setAttribute("data-name", category.value);
                                    el.setAttribute("data-subname", subCategory.value);
                                    el.setAttribute("data-image", subCategory.value);
                                }
                            }

                        })


                    })
                })
            })

        }
    }


    dellCategory() {
        let delCategory = this.getSelector("#del-category");
        let category = this.getSelector("#add-category-product");
        let addCategory = this.getSelector("#add-category");

        function delCat(sel, id, el, category = undefined) {
            sel.addEventListener("click", () => {
                axios({
                    method: "post",
                    url: "/dashboard/edit",
                    data: {
                        id: id,
                        delCategory: true
                    }
                }).then((response) => {
                    console.log(response.data)
                    if (id === response.data.toString()) {

                        if (category) {
                            Array.from(category.options).forEach((op) => {
                                if (id === op.value) {
                                    op.remove();
                                }
                            })
                        }

                        el.remove();
                    }
                })
            });
        }

        if (delCategory) {
            delCategory.addEventListener("click", (el) => {
                let col_1 = document.createElement("div");
                let blockCategory = document.createElement("div");
                document.body.appendChild(blockCategory);
                blockCategory.classList = "fixed m-auto top-0 left-0 right-0 bottom-0 w-1/2 bg-white p-6 overflow-y-auto";
                blockCategory.appendChild(col_1);
                col_1.innerHTML = category.innerHTML.replace(/option/g, "div");
                col_1.innerHTML = col_1.innerHTML.replace(/value/g, "data-id")

                let divList = col_1.querySelectorAll("div");
                let close = document.createElement("div");
                blockCategory.appendChild(close);
                close.innerHTML = this.closeIcon;
                close.className = "absolute top-0 right-0 cursor-pointer";


                divList.forEach((el, i) => {
                    let id = el.getAttribute("data-id");
                    el.className = "w-full flex"
                    let del = document.createElement("div");
                    el.innerHTML = '<div class="w-1/2">' + el.innerHTML + '</div>'
                    el.appendChild(del);
                    del.innerHTML = this.delIcon;
                    del.className = "w-[100px] cursor-pointer my-2";
                    delCat(del, id, el, category)
                });


                close.addEventListener("click", () => {
                    blockCategory.remove();
                })
            })
        }
        if (addCategory) {
            let delCategoryIcon = document.querySelectorAll(".delete-category");
            let categoryItem = document.querySelectorAll(".category_item");
            delCategoryIcon.forEach((el, i) => {
                let id = el.getAttribute("data-id");
                delCat(delCategoryIcon.item(i), id, categoryItem.item(i), category = undefined);
            })

        }


    }

    updateElement(selector) {
        async function elementUpdate(selector) {
            try {
                var html = await (await fetch(location.href)).text();
                var newdoc = new DOMParser().parseFromString(html, 'text/html');
                document.querySelector(selector).outerHTML = newdoc.querySelector(selector).outerHTML;
                console.log('Элемент ' + selector + ' был успешно обновлен');
                return true;
            } catch (err) {
                console.log('При обновлении элемента ' + selector + ' произошла ошибка:');
                console.dir(err);
                return false;
            }
        }

        return elementUpdate(selector);
    }


    replaceNum(el) {
        if (el) {
            el.addEventListener("keyup", (e) => {
                e.target.value = e.target.value.replace(/[a-z_A-Z_а-я_А-Я]/g, "");
            })
        }

    }

    replaceAlias(name,alias){
        name.addEventListener("keyup",(e)=>{
            alias.value =  e.target.value.replace(/ /g, '-').toLowerCase();
        })
    }

    editProduct() {
        let editProduct = this.getSelector("#edit-product");
        let editNameProduct = this.getSelector("#edit-name-product");
        let editAliasProduct = this.getSelector("#edit-alias-product");
        let editProductSave = this.getSelector("#edit-product-save");
        let editTitleProduct = this.getSelector("#edit-title-product");
        let editDescriptionProduct = this.getSelector("#edit-description-product");
        let editTitlePageProduct = this.getSelector("#edit-title-page-product");
        let editDescriptionPageProduct = this.getSelector("#edit-description-page-product");
        let editKeywordProduct = this.getSelector("#edit-keyword-product");
        let editCategory = this.getSelector("#edit-category");
        let editSubCategory = this.getSelector("#edit-sub-category");
        let editPriceProduct = this.getSelector("#edit-price-product");
        let editDiscountProduct = this.getSelector("#edit-discount-product");
        let image = this.getSelector(".image");
        let nameImage = this.getSelector(".name-image");
        let id = 1;
        let editCategorySelect = this.getSelector("#add-category-product");
        let category = this.getSelector("#category");
        let subCategory = this.getSelector("#sub-category");
        let file = this.getSelector("#edit-product-file");
        let imageBlock = this.getSelector('.image-block')
        let storageTime = document.querySelector("#edit-year-product");
        let color = document.querySelector("#edit-color-product");
        let flavor = document.querySelector("#edit-flavor-product");
        let sort = document.querySelector("#edit-sort-product");
        let volume = document.querySelector("#edit-volume-product");
        if (editProduct.getAttribute("data-id")) {
            id = editProduct.getAttribute("data-id");
        }
        this.replaceNum(editPriceProduct);
        this.replaceNum(editDiscountProduct);
        this.getFiles(file, image, nameImage);
        this.replaceAlias(editNameProduct,editAliasProduct)

        imageBlock.innerHTML = image.src.split(",").map((el)=>'<img class="image-list" width="100px" height="100px" src="'+ el +'">').join("");
        console.log(image.src.split(","))
        image.src = image.src.split(",")[0]
        Array.from(editCategorySelect.options).forEach((el, i) => {
            el.addEventListener("click", (ev) => {
                category.getElementsByTagName("input")[0].value = ev.target.getAttribute("data-name");
                subCategory.getElementsByTagName("input")[0].value = ev.target.getAttribute("data-sub-name");
                category.getElementsByTagName("input")[1].value = editCategorySelect.value;
            });
        });

        editProductSave.addEventListener("click", (el) => {
            if (category.getElementsByTagName("input")[0].value.length > 0 && subCategory.getElementsByTagName("input")[0].value.length > 0) {

                axios({
                    url: "/dashboard/edit",
                    method: "post",
                    data: {
                        editNameProduct: editNameProduct.value ? editNameProduct.value : "-1",
                        editAliasProduct:editAliasProduct.value?editAliasProduct.value:"-1",
                        editProductSave: el.target.value ? el.target.value : "-1",
                        editTitleProduct: editTitleProduct.value ? editTitleProduct.value : "-1",
                        editDescriptionProduct: editDescriptionProduct.value ? editDescriptionProduct.value : "-1",
                        editTitlePageProduct: editTitlePageProduct.value ? editTitlePageProduct.value : "-1",
                        editDescriptionPageProduct: editDescriptionPageProduct.value ? editDescriptionPageProduct.value : "-1",
                        editKeywordProduct: editKeywordProduct.value ? editKeywordProduct.value : "-1",
                        editPriceProduct: editPriceProduct.value ? editPriceProduct.value : "-1",
                        editDiscountProduct: editDiscountProduct.value ? editDiscountProduct.value : "-1",
                        image: this.getImageList().join(","),
                        productId: id,
                        subCategory: subCategory.getElementsByTagName("input")[0].value,
                        category: category.getElementsByTagName("input")[0].value,
                        storageTime:storageTime.value? storageTime.value : "-1",
                        color:color.value? color.value : "-1",
                        flavor:flavor.value? flavor.value : "-1",
                        sort:sort.value? sort.value : "-1",
                        volume:volume.value? volume.value : "-1",
                        categoryId: category.getElementsByTagName("input")[1].value

                    }
                }).then((response) => {
                    if (response.status === 200) {
                       document.location = "/dashboard/edit/" + response.data.productId;
                    }

                }).catch((response) => {
                    console.log(response)
                })
            }

        })

    }


    loadImage() {
        let image = document.querySelector(".image");
        let imgTable = document.querySelector(".image-block");
        let arrSrc = []
        if (image) {
            let modalImageProduct = document.querySelectorAll(".modal-image-product");
            modalImageProduct.forEach((el,i) => {
                el.addEventListener("click", (event) => {
                    if(el.parentElement.querySelector("input").checked === false){
                        let img = document.createElement("img");
                        img.src = event.target.src;
                        arrSrc.push(event.target.src);

                    }
                    el.parentElement.querySelector("input").checked = true
                    if(arrSrc[0]){
                        image.src = arrSrc[0];
                    }
                    imgTable.innerHTML = arrSrc.map((b,i)=>'<img class="image-list" width="100px" height="100px" src="'+ b +'">').join("");
                })
            })

        }
        return arrSrc
    }

    delProduct() {
        let del = document.querySelectorAll(".delete-product");
        let userItem = document.querySelectorAll(".user_item");
        if (del) {
            del.forEach((el, i) => {
                let id = 0;
                el.addEventListener("click", () => {
                    id = el.getAttribute("data-id");
                    axios({
                        method: "post",
                        url: "/dashboard/edit",
                        data: {
                            id: id,
                            deleteProduct: true
                        }
                    }).then((response) => {
                        if (response.status === 200) {
                            userItem.item(i).remove()
                        }

                    })

                })
            })

        }
    }

    deleteFile() {
        let image = document.querySelectorAll(".delete-image");
        image.forEach((el) => {
            el.addEventListener("click", () => {
                console.log(el.getAttribute("data-name"))
                axios({
                    method: "post",
                    url: "/dashboard/delete-file",
                    data: {
                        name: el.getAttribute("data-name")
                    }
                }).then((response) => {
                    if (response.status === 200) {
                        document.location = "/dashboard/gallery";
                    }
                })
            })
        })

    }

    percent(num, pr) {
        return num - (num * pr / 100);
    }

    discount(price, discount) {
        let editPriceProduct = document.querySelector(price);
        let editDiscountProduct = document.querySelector(discount);

        function isRes(editPriceProduct, editDiscountProduct, percent) {

            let viewPrice = document.querySelector("#view-price");

            function num(val) {

                if (val.length === 0) {
                    return 0;
                } else {
                    return val;
                }

            }

            if (parseInt(num(editDiscountProduct.value)) === 0) {
                return viewPrice.innerHTML = '<div class="text-2xl"><div>' + num(editPriceProduct.value) + ' lei </div>';
            } else {
                return viewPrice.innerHTML = '<div class="text-2xl flex"><div><s class="text-gray-600">' + num(editPriceProduct.value) + ' lei </s></div><div class="ml-4"></div><div><b> ' + percent(parseInt(num(editPriceProduct.value)), parseInt(num(editDiscountProduct.value))).toFixed(2) + ' lei </b></div></div>';
            }
        }

        isRes(editPriceProduct, editDiscountProduct, this.percent)
        editDiscountProduct.addEventListener("keyup", () => {
            isRes(editPriceProduct, editDiscountProduct, this.percent)
        });
        editPriceProduct.addEventListener("keyup", () => {
            isRes(editPriceProduct, editDiscountProduct, this.percent)
        })

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
        if (document.querySelector("#add-product")) {
            this.addProduct();
            this.discount("#add-price-product", "#add-discount-product");
        }
        if (document.querySelector("#edit-product")) {
            this.editProduct();
            this.discount("#edit-price-product", "#edit-discount-product");
        }
        if (document.querySelector("#add-category")) {
            this.addCategory();
            this.dellCategory();
        }
        if (document.querySelector("#update-category-save")) {
            this.updateCategory();
        }
        if (document.querySelector("#gallery")) {
            this.deleteFile();
        }

        this.scrolling();
        this.delProduct();
        this.loadImage();
    }
}

const admin = new Admin();
admin.view();



