import './bootstrap';
import '../aset/riko.css';
import '../aset/jquery/jquery351.js';


import $ from 'jquery';
window.$ = $;

import DataTable from "datatables.net-bs5";
DataTable(window, window.$);