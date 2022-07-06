import $ from "jquery";
import _ from "lodash";
window._ = _;
import axios from "axios";
window.axios = axios;

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
import "bootstrap";
import "datatables.net-bs4";
import "datatables.net-buttons-bs4";

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