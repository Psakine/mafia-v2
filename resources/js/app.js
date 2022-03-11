import {createApp, h} from 'vue';
import App from "../vue/App";

require('./bootstrap');

const app = createApp({
  render : () => h(App)
});
app.mount('#app');
