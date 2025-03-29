import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { createPinia } from 'pinia';
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import Default from '@/layouts/Default.vue';
import Auth from '@/layouts/Auth.vue';

const pinia = createPinia();

createInertiaApp({
    resolve: name => {
        const page = resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        );

        page.then((module) => {
            if (!module.default.layout) {
                if (
                    name.startsWith("Auth")
                ) {
                    module.default.layout = Auth;
                } else {
                    module.default.layout = Default;
                }
            }
        });

        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(pinia)
            .mount(el)
    },
})