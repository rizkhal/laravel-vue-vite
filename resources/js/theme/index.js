export default {
  install: (app, options) => {
    app.component("v-header", require("./includes/header.vue").default);
  },
};
