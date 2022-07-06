import $ from "jquery";
window._ = require("lodash");
window.axios = require("axios");

import "sweetalert2/src/sweetalert2.scss";
import Swal from "sweetalert2/dist/sweetalert2.js";

try {
  window.$ = window.jQuery = $;
  window.Swal = Swal;

  require("select2");
} catch (error) {
  console.error(error);
}

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// datatable
require("bootstrap");
require("datatables.net-bs4");
require("datatables.net-buttons-bs4");

$.ajaxSetup({
  headers: {
    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
  },
});

function customSelect2(placeholder, object, url) {
  object.select2({
      placeholder: placeholder,
      ajax: {
          url: url,
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
              return data;
          },
          cache: true
      }
  });
}