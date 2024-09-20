import "./bootstrap";
import "../css/app.css";

import { createApp } from "vue";
import NavBar from "./Components/NavBar.vue";
import ImageGrid from "./Components/ImageGrid.vue";
import CampfireScene from "./Components/CampfireScene.vue";

const app = createApp({});

app.component("nav-bar", NavBar);
app.component("image-grid", ImageGrid);
app.component("campfire", CampfireScene);

app.mount("#app");
