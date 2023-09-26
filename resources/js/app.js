import "./bootstrap";
import './libs/trix';
import "../css/app.css";
import "swiffy-slider/css"
import "./custom.js";
import "@protonemedia/laravel-splade/dist/style.css";
import { createApp } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";
import "@protonemedia/laravel-splade/dist/jodit.css";
import "../../public/assets/js/toggle-dark-mode";
import {defineAsyncComponent} from "vue";

const el = document.getElementById("app");

createApp({
    render: renderSpladeApp({ el })
})
    .use(SpladePlugin, {
        "max_keep_alive": 10,
        "transform_anchors": true,
        'progress_bar': {
            delay: 250,
            color: "#000000",
            css: true,
            spinner: false,
        },
        'components': {
            'ProductImages': defineAsyncComponent(() => import('./components/ProductImages.vue')),
            'MobileProductImages': defineAsyncComponent(() => import('./components/MobileProductImages.vue')),
            'HomeSlider': defineAsyncComponent(() => import('./components/HomeSlider.vue')),
            'WelcomeMessage': defineAsyncComponent(() => import('./components/WelcomeMessage.vue')),
        }
    })
    .mount(el);
