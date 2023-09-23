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
        "transform_anchors": false,
        "progress_bar": true,
        'components': {
            'ProductImages': defineAsyncComponent(() => import('./components/ProductImages.vue')),
        }
    })
    .mount(el);
