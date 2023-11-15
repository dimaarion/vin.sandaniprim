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

