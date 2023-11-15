import './bootstrap';

import Alpine from 'alpinejs';

import {
    Carousel,
    Dropdown,
    Sidenav,
    Lightbox,
    initTE,
} from "tw-elements";
import createForEach from "alpinejs";

initTE({Carousel, Dropdown, Sidenav, Lightbox});
window.Alpine = Alpine;

Alpine.start();

let md = new MobileDetect(window.navigator.userAgent);

let close = '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">\n' +
    '  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>\n' +
    '</svg>'
let search = '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"\n' +
    '     class="bi bi-search" viewBox="0 0 16 16">\n' +
    '    <path\n' +
    '        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>\n' +
    '</svg>';

let user = '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"\n' +
    '                                 class="bi bi-person-circle" viewBox="0 0 16 16">\n' +
    '                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>\n' +
    '                                <path fill-rule="evenodd"\n' +
    '                                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>\n' +
    '                            </svg>';

let menuMob = '  <svg\n' +
    '            xmlns="http://www.w3.org/2000/svg"\n' +
    '            viewBox="0 0 24 24"\n' +
    '            fill="currentColor"\n' +
    '            class="h-7 w-7">\n' +
    '          <path\n' +
    '              fill-rule="evenodd"\n' +
    '              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"\n' +
    '              clip-rule="evenodd"/>\n' +
    '        </svg>';
let removeIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">\n' +
    '  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>\n' +
    '</svg>'

function displayClass(cl1, cl2, def, old) {
    cl1 = document.querySelector(cl1);
    cl2 = document.querySelector(cl2);
    cl1.innerHTML = def;
    cl1.addEventListener("click", (e) => {
        if (cl2.classList.contains("hidden")) {
            cl2.classList.remove("hidden");
            cl1.innerHTML = old;
        } else {
            cl2.classList.add("hidden");
            cl1.innerHTML = def;
        }

    });

}

function labelTransform(el1, el2) {
    el1 = document.querySelector(el1);
    el2 = document.querySelector(el2);
    el1.addEventListener("focus", (e) => {
        el2.classList.add("label-transform");
    })
    el1.addEventListener("focusout", (e) => {
        if (e.target.value.length === 0) {
            el2.classList.remove("label-transform");
        }

    });
}

if (document.baseURI.search("public") !== -1) {
    document.location = "/";
}


function sliders() {
    let slider = document.querySelector('.slider'),
        sliderList = slider.querySelector('.slider-list'),
        sliderTrack = slider.querySelector('.slider-track'),
        slides = slider.querySelectorAll('.slide'),
        arrows = slider.querySelector('.slider-arrows'),
        prev = arrows.children[0],
        next = arrows.children[1],
        slideWidth = slides[0].offsetWidth,
        slideIndex = 0,
        posInit = 0,
        posX1 = 0,
        posX2 = 0,
        posFinal = 0,
        posThreshold = slideWidth * .35,
        trfRegExp = /[-0-9.]+(?=px)/,
        slide = function () {
            sliderTrack.style.transition = 'transform .5s';
            sliderTrack.style.transform = `translate3d(-${slideIndex * slideWidth}px, 0px, 0px)`;

            // делаем стрелку prev недоступной на первом слайде
            // и доступной в остальных случаях
            // делаем стрелку next недоступной на последнем слайде
            // и доступной в остальных случаях
            //    prev.classList.toggle('disabled', slideIndex === 0);
            //    next.classList.toggle('disabled', slideIndex === --slides.length);
        },
        getEvent = function () {
            return event.type.search('touch') !== -1 ? event.touches[0] : event;
            // p.s. event - аргумент по умолчанию в функции
        },
// или es6


        swipeStart = function () {
            let evt = getEvent();

            // берем начальную позицию курсора по оси Х
            posInit = posX1 = evt.clientX;

            // убираем плавный переход, чтобы track двигался за курсором без задержки
            // т.к. он будет включается в функции slide()
            sliderTrack.style.transition = '';

            // и сразу начинаем отслеживать другие события на документе
            document.addEventListener('touchmove', swipeAction);
            document.addEventListener('touchend', swipeEnd);
            document.addEventListener('mousemove', swipeAction);
            document.addEventListener('mouseup', swipeEnd);
        },
        swipeAction = function () {
            let evt = getEvent(),
                // для более красивой записи возьмем в переменную текущее свойство transform
                style = sliderTrack.style.transform,
                // считываем трансформацию с помощью регулярного выражения и сразу превращаем в число
                transform = +style.match(trfRegExp)[0];

            posX2 = posX1 - evt.clientX;
            posX1 = evt.clientX;

            sliderTrack.style.transform = `translate3d(${transform - posX2}px, 0px, 0px)`;
            // можно было бы использовать метод строк .replace():
            // sliderTrack.style.transform = style.replace(trfRegExp, match => match - posX2);
            // но в дальнейшем нам нужна будет текущая трансформация в переменной
        },
        swipeEnd = function () {
            // финальная позиция курсора
            posFinal = posInit - posX1;

            document.removeEventListener('touchmove', swipeAction);
            document.removeEventListener('mousemove', swipeAction);
            document.removeEventListener('touchend', swipeEnd);
            document.removeEventListener('mouseup', swipeEnd);

            // убираем знак минус и сравниваем с порогом сдвига слайда
            if (Math.abs(posFinal) > posThreshold) {
                // если мы тянули вправо, то уменьшаем номер текущего слайда
                if (posInit < posX1) {
                    slideIndex--;
                    // если мы тянули влево, то увеличиваем номер текущего слайда
                } else if (posInit > posX1) {
                    slideIndex++;
                }
            }

            // если курсор двигался, то запускаем функцию переключения слайдов
            if (posInit !== posX1) {
                slide();
            }

        }
    arrows.addEventListener('click', function () {
        let target = event.target;

        if (target === next) {
            slideIndex++;
        } else if (target === prev) {
            slideIndex--;
        } else {
            return;
        }

        slide();
    });

    sliderTrack.style.transform = 'translate3d(0px, 0px, 0px)';
    slider.addEventListener('touchstart', swipeStart);
    slider.addEventListener('mousedown', swipeStart);
}

let collidePointRect = function (pointX, pointY, x, y, xW, yW) {
    //2d
    if (
        pointX >= x && // right of the left edge AND
        pointX <= x + xW && // left of the right edge AND
        pointY >= y && // below the top AND
        pointY <= y + yW
    ) {
        // above the bottom

        return true;
    }
    return false;
};

let defaultProduct = defaultProductCart();


function defaultProductCart() {
    let product = [{}];
    if (window.localStorage.getItem("cart")) {
        product = JSON.parse(window.localStorage.getItem("cart"));
    } else {
        product = [{}];
    }
    return product.filter((f) => f.id);
}

//product-min product-res product-plus
function countViewProduct(min, res, plus, count = 1, n) {
    if (!n) {
        n = "";
    }
    return '<div class="p-4 flex flex-row justify-left"><div class="w-10 h-10 border justify-center flex border-gray-300 cursor-pointer select-none" id="' + min + n + '"><div  class="self-center">-</div></div><div class="w-10 h-10 border justify-center flex border-gray-300 " contentEditable = "true"><div id="' + res + n + '" class="self-center overflow-hidden" >' + count + '</div></div><div id="' + plus + n + '" class="w-10 h-10 select-none border justify-center flex border-gray-300 cursor-pointer"><div  class="self-center">+</div></div></div>';
}

function viewCardProduct(close) {
    let product = document.querySelectorAll(".product");
    product.forEach((e, i) => {
        e.getElementsByClassName("product-icon")[0].addEventListener("click", (event) => {
            let img = e.parentElement.children[i].getElementsByTagName("img")[0];
            let div = document.createElement("div");
            let cart = document.createElement("div");
            let cartItemLeft = document.createElement("div");
            let cartItemRight = document.createElement("div");

            document.body.appendChild(div);
            div.appendChild(cart);
            cart.appendChild(cartItemLeft);
            cart.appendChild(cartItemRight);
            div.className = "fixed top-0 bottom-0 left-0 right-0 m-auto w-full  ";
            cart.className = " w-3/4  flex flex-row m-auto shadow-md bg-white border border-gray-50";
            cart.style.marginTop = 10 + "%";
            cartItemLeft.style.width = 50 + "%";
            cartItemRight.style.width = 50 + "%";
            cartItemLeft.innerHTML = '<div class="bg-gray-100 justify-center flex">' +
                ' <img class="self-center w-full p-4 " src="' + img.src + '"/>' +
                '</div>'
            cartItemRight.innerHTML = '<div class="relative ">'
                + '<div class="text-center text-2xl  mt-3 ">' + img.getAttribute("alt") + '</div>'
                + '<div class="p-4 ">' + img.getAttribute("data-price") + '</div>'
                + '<div class="p-4 ">' + img.getAttribute("data-description") + '</div>'
                + countViewProduct('product-min', 'product-res', 'product-plus', 1)
                + '<div class="p-4"><button id="add-cart" class=" bg-pink-950 text-white px-4 py-2 text-2xl hover:bg-gray-dark">В корзину</button></div>'
                + '<div id="close-cart" class="absolute top-0 right-0 mr-3 cursor-pointer hover:text-pink">' + close + '</div>'
                + '</div>';
            let productRes = document.querySelector("#product-res");
            defaultProduct = defaultProductCart();
            if (defaultProduct.filter((el) => el.id === img.getAttribute("data-id")).length === 0) {
                defaultProduct.push({
                    id: img.getAttribute("data-id"),
                    img: img.src,
                    name: img.getAttribute("alt"),
                    count: productRes.textContent,
                    price: img.getAttribute("data-price"),
                    description: img.getAttribute("data-description")
                })
            }
            document.querySelector("#close-cart").addEventListener("click", () => {
                div.remove();
            });

            countProduct();
            getAddCart(img.getAttribute("data-id"), div);
        })
    })

}

function countProduct(count) {
    let jsonArrProd = defaultProductCart();
    if (!count) {
        count = "";
    }
    let productMin = document.querySelector("#product-min" + count);
    let productRes = document.querySelector("#product-res" + count);
    let productPlus = document.querySelector("#product-plus" + count);

    let productResCont = 1;
    let productResContDef = 1;
    if (productRes) {
        productResCont = Number.parseInt(productRes.textContent);
    }

    if (productMin) {
        productMin.addEventListener("click", () => {
            productResContDef = Number.parseInt(productRes.textContent);
            if (productMin && productRes && productResContDef > 1) {
                productResCont = productResContDef - 1
                productRes.innerHTML = productResCont;
                resCart(count, productRes);

            }
        });
    }
    if (productPlus) {
        productPlus.addEventListener("click", () => {
            productResContDef = Number.parseInt(productRes.textContent);
            if (productPlus) {
                productResCont = productResContDef + 1
                productRes.innerHTML = productResCont;
                resCart(count, productRes)
            }

        });
    }

    function resCart(count, productRes) {
        if (count) {
            document.getElementsByClassName("cart-price-" + count)[0].innerHTML = productRes.textContent;
            let cartPriceP = document.getElementsByClassName("cart-price-p-" + count)[0];
            let n = Number.parseInt(productRes.textContent) * Number.parseInt(cartPriceP.textContent)
            cartPriceP.setAttribute("data-price-res", n.toString())
            let cartMulti = document.querySelectorAll(".cart-multi");
            let sum = 0;
            cartMulti.forEach((el) => {
                if (el.getAttribute("data-price-res")) {
                    let num = Number.parseInt(el.getAttribute("data-price-res"));
                    sum += num;
                }

            })
            document.querySelector("#total").innerHTML = sum;
            jsonArrProd.filter((f) => f.id === count).map((el) => el.count = productRes.textContent);
            jsonArrProd = jsonArrProd.map((el) => {
                if (el.id === count) {
                    el.count = productRes.textContent
                }
                return el;
            })
            window.localStorage.setItem('cart', JSON.stringify(jsonArrProd));
            getLengthCart();
        }

    }

    resCart(count, productRes)

    return productResCont;
}


function getAddCart(id, props) {
    let productRes = document.querySelector("#product-res");
    let addCart = document.querySelector("#add-cart");
    if (productRes && addCart) {
        addCart.addEventListener("click", () => {
            defaultProduct.filter((el) => el.id === id).map((el2) => el2.count = countProduct());
            window.localStorage.setItem("cart", JSON.stringify(defaultProduct));
            getLengthCart()
            getViewCart(close);
            if (props) {
                props.remove();
            }

        })
    }

}

function getViewCart(svg) {
    let cartPanel = document.createElement("div");
    let closeBlock = document.createElement("div");
    let jsonCart = JSON.parse(window.localStorage.getItem("cart"));
    if (jsonCart) {
        jsonCart = JSON.parse(window.localStorage.getItem("cart"));
    } else {
        jsonCart = [{}];
    }


    document.body.appendChild(cartPanel);
    cartPanel.className = "fixed top-0 bottom-0 left-0 right-0 m-auto w-full z-50";
    closeBlock.className = "m-auto absolute right-0 cursor-pointer pt-2 pr-4 mr-2";
    closeBlock.innerHTML = svg;
    cartPanel.style.background = "#ECF1F357";
    viewCartElements(cartPanel, jsonCart);
    cartPanel.appendChild(closeBlock);
    jsonCart.filter((f) => f.id).map((el) => countProduct(el.id));
    closeBlock.addEventListener("click", () => {
        cartPanel.remove();
    })
    removeCartElement(cartPanel, jsonCart);
    let inCart = document.querySelector("#in-cart");
    let toPaid = document.querySelector("#to-paid");
    inCart.addEventListener("mouseover", () => {
        inCart.parentElement.classList.replace("bg-gray-dark", "bg-pink-950");
        toPaid.parentElement.classList.replace("bg-pink-950", "bg-gray-dark");
    })

    toPaid.addEventListener("mouseover", () => {
        toPaid.parentElement.classList.replace("bg-gray-dark", "bg-pink-950");
        inCart.parentElement.classList.replace("bg-pink-950", "bg-gray-dark");
    })


}

function viewCartElements(cartPanel, jsonCart) {
    return cartPanel.innerHTML = '<div id="cart-main" class="m-auto absolute right-0 bg-white h-full p-4 text-xl" style="width: 400px; overflow-y: scroll">'
        + '<div class="mb-4">Корзина</div>'
        + '<div class="mt-4 pt-4">'
        + jsonCart.filter((f) => f.id).map((el) => {
            return '<div class="flex flex-row mt-5 relative cart-block-' + el.id + '">'
                + '<div class="p-4 bg-gray-100 mb-3" style="width: 40%;"><img class="w-full " src="' + el.img + '"></div>'
                + '<div><div class="ml-4 text-sm font-bold"><h3>' + el.name + '</h3></div>'
                + '<div class=" ml-4 text-sm flex text-gray-700"> ' + ' <div class="cart-price-' + el.id + '">1</div>' + '<div class="px-3">x</div><div class="cart-price-p-' + el.id + ' cart-multi">' + el.price + '</div></div>'
                + '<div class="">' + countViewProduct('product-min', 'product-res', 'product-plus', el.count, el.id) + '</div>'
                + '</div>'
                + '<div data-id = "' + el.id + '" class="ml-4 cursor-pointer text-gray-700 hover:text-gray-900 remove-cart-el">' + removeIcon + '</div>'
                + '</div>'
        }).join("")
        + '</div>'
        + '<div class="fixed bottom-0 m-auto h-[160px] w-full bg-white border-t pt-4" data-total = "0">' +
        '<div class="flex flex-row">' +
        '<div class="w-[300px]">Сумма:</div>' +
        '<div class="text-right">' +
        '<div class="mr-4 px-3" id="total"></div>' +
        '</div>' +
        '</div>' +
        '<div class="flex flex-row justify-center mt-3" style="width: 370px;"><div  class="w-1/2  text-center text-white bg-gray-dark h-[50px] pt-2 "><a id="in-cart" class="block" href="/#">В корзину</a></div><div class="w-2"></div><div  class="w-1/2 text-center text-white pt-2 h-[50px] bg-pink-950 "><a id="to-paid" class="block" href="/#">К оплате</a></div></div>' +
        '</div>'
        + '</div>';

}


function removeCartElement(cartPanel, jsonArr) {
    let r = document.querySelectorAll('.remove-cart-el');

    r.forEach((el) => el.addEventListener("click", (e) => {
        let id = el.getAttribute("data-id");
        jsonArr = jsonArr.filter((f) => f.id !== id);
        jsonArr = jsonArr.filter((f) => f.id);
        let bl = document.querySelector(".cart-block-" + id)

        window.localStorage.setItem('cart', JSON.stringify(jsonArr));
        getLengthCart();
        bl.remove();

    }))


}

function getLengthCart() {
    if (window.localStorage.getItem("cart")) {
        let num = 0;
        JSON.parse(window.localStorage.getItem("cart")).filter((el) => el.id).forEach((el2) => {
            num += Number.parseInt(el2.count);
        })
        document.querySelector("#main-cart").children.item(2).textContent = num;
    }
}

function scrolling() {
    let headBar = document.querySelector(".head-bar");
    let scrolls = document.querySelector("#scrolls");
    let logo = document.querySelector(".logo")
    function changes(){
        if (window.scrollY > 10) {
            scrolls.classList.replace("opacity-0","opacity-100");
        } else if (window.scrollY < 10) {
            scrolls.classList.replace("opacity-100","opacity-0")
        }
    }
    window.addEventListener("scroll", (e) => {
       changes();
    });
    changes();
    scrolls.addEventListener("click",(e)=>{
        e.preventDefault();

        window.scrollBy({
            top: -window.scrollY,
            behavior: 'smooth'
        });

    })
}

function getData() {
    let d = new Date();
    document.querySelector("#data").innerHTML = d.getFullYear().toString();
}


function tabs(id, cl) {

    let tabOld = document.querySelectorAll("." + cl);
    let tabs = document.querySelectorAll(".tabs");
    tabs.forEach((ts, i) => {
        let tab = document.getElementById(id + i);
        if (tab) {
            tab.addEventListener("click", (t) => {
                tabs.forEach((elTabs) => {
                    if (elTabs.id === tab.id) {
                        elTabs.classList.add("active");

                    } else {
                        elTabs.classList.remove("active");
                    }

                })

                tabOld.forEach((el) => {
                    if (el.getAttribute("data-tab")) {
                        if (el.getAttribute("data-tab") === tab.id) {
                            el.classList.remove("hidden");
                            el.classList.add("active");

                        } else {
                            el.classList.add("hidden");
                            el.classList.remove("active");

                        }

                    }

                })

            })

        }


    })


}


function contactFooter() {
    let contact = document.querySelector("#contact-footer");
    let tel = document.querySelector("#tel-footer");
    let close = document.querySelector("#close-contact");
    tel.addEventListener("click",(el)=>{
        contact.classList.add("contact")
        tel.classList.add("hidden");
    });
    close.addEventListener("click",()=>{
        contact.classList.remove("contact");
        tel.classList.remove("hidden");
    })
}


getData();

displayClass(".on-search", "#in-search", search, close);
displayClass("#on-user", "#in-user", user, close);
displayClass("#main-menu-btn", "#navbarSupportedContent8", menuMob, close);

labelTransform("#email", "#email-label");
labelTransform("#password", "#password-label");
if (md.mobile()) {
    sliders();
}
viewCardProduct(close);
scrolling();

getLengthCart();

document.querySelectorAll(".bi-cart-fill").forEach((el) => {
    el.parentElement.addEventListener("click", () => getViewCart(close))
})

tabs("catalog-tab-", "products");
contactFooter();

