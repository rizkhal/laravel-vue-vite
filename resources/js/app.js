import { createApp, h } from "vue";
import DefaultLayout from "~/layouts/default.vue";
import { InertiaProgress } from "@inertiajs/progress";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";

import Theme from "~/theme";

createInertiaApp({
  resolve: async (name) => {
    const page = await resolvePageComponent(`./pages/${name}.vue`, import.meta.glob("./pages/**/*.vue"));

    if (page.default.layout === undefined) {
      page.default.layout = DefaultLayout;
    }

    return page;
  },
  setup({ el, app, props, plugin }) {
    createApp({ render: () => h(app, props) })
      .use(plugin)
      .use(Theme)
      .mount(el);
  },
});

InertiaProgress.init({ color: "#4B5563" });
