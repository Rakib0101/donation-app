import Alpine from 'alpinejs'
import 'flowbite';
import collapse from '@alpinejs/collapse';
import ApexCharts from 'apexcharts';
import Datepicker from 'flowbite-datepicker/Datepicker';

window.Datepicker = Datepicker
window.ApexCharts = ApexCharts
window.Alpine = Alpine
Alpine.plugin(collapse)
Alpine.start()


