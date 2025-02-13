import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';
import SideMenu from "./components/SideMenu.vue"


if (document.getElementById("menue_app")) {
    const menue_app = createApp({
        components:{
            SideMenu,
        },

        setup() {}

    })

    menue_app.mount("#menue_app")

}


const anchors = document.querySelectorAll('a[href*="#"].yakor');

for (let anchor of anchors) {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        // main_side_menue.classList.remove("active");
        const blockID = anchor.getAttribute("href").substr(1);

        document.getElementById(blockID).scrollIntoView({
            behavior: "smooth",
            block: "start",
        });
    });
}
