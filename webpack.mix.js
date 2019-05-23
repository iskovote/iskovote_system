const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

const public_js = 'public/js/';
const public_css = 'public/css/';
const resource_sass = 'resources/assets/sass/';


/* Gentelella JavaScripts and Styles*/

const gentelella_home = 'node_modules/gentelella/';
const gentelella_vendor = gentelella_home + '/vendors/';

/*
 *  Copy dependent JavaScripts and CSSs
 */
mix.
    // gentelella
    copy(gentelella_home + 'build/css/custom.css',
        public_css + 'gentelella-custom.css').
    copy(gentelella_home + 'build/js/custom.js',
        public_js + 'gentelella-custom.js').
    // jQuery
    copy(gentelella_vendor + 'jquery/dist/jquery.min.js',
        public_js + 'jquery.min.js').
    // bootstrap
    copy(gentelella_vendor + 'bootstrap/dist/css/bootstrap.css',
        public_css + 'bootstrap.css').
    copy(gentelella_vendor + 'bootstrap/dist/css/bootstrap.css.map',
        public_css + 'bootstrap.css.map').
    copy(gentelella_vendor + 'bootstrap/dist/js/bootstrap.js',
        public_js + 'bootstrap.js').
    // font-awesome
    copy(gentelella_vendor + 'font-awesome/css/font-awesome.css',
        public_css + 'font-awesome.css').
    copy(gentelella_vendor + 'font-awesome/css/font-awesome.css.map',
        public_css + 'font-awesome.css.map').
    // nprogress
    copy(gentelella_vendor + 'nprogress/nprogress.css',
        public_css + 'nprogress.css').
    copy(gentelella_vendor + 'nprogress/nprogress.js',
        public_js + 'nprogress.js').
    // bootstrap-progressbar
    copy(gentelella_vendor +
        'bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css',
        public_css + 'bootstrap-progressbar.css').
    copy(gentelella_vendor + 'bootstrap-progressbar/bootstrap-progressbar.js',
        public_js + 'bootstrap-progressbar.js').
    // select2
    copy(gentelella_vendor + 'select2/dist/css/select2.css',
        public_css + 'select2.css').
    copy(gentelella_vendor + 'select2/dist/js/select2.full.js',
        public_js + 'select2.full.js').
    copy(gentelella_vendor + 'moment/moment.js',
        public_js + 'moment.js').
    copy(gentelella_vendor + 'bootstrap-daterangepicker/daterangepicker.js',
        public_js + 'bootstrap-daterangepicker.js').
    copy(gentelella_vendor + 'chart.js/dist/Chart.js',
        public_js + 'chart.js').
    copy(gentelella_vendor + 'gauge.js/dist/gauge.js',
        public_js + 'gauge.js').
    copy(gentelella_vendor + 'skycons/skycons.js',
        public_js + 'skycons.js').
    copy(gentelella_vendor + 'flot/jquery.flot.js',
        public_js + 'jquery.flot.js').
    copy(gentelella_vendor + 'flot/jquery.flot.pie.js',
        public_js + 'jquery.flot.pie.js').
    copy(gentelella_vendor + 'flot/jquery.flot.time.js',
        public_js + 'jquery.flot.time.js').
    copy(gentelella_vendor + 'flot/jquery.flot.resize.js',
        public_js + 'jquery.flot.resize.js').
    copy(gentelella_vendor + 'flot/jquery.flot.stack.js',
        public_js + 'jquery.flot.stack.js').
    copy(gentelella_vendor + 'flot-spline/js/jquery.flot.spline.js',
        public_js + 'jquery.flot.spline.js').
    copy(gentelella_vendor + 'flot.orderbars/js/jquery.flot.orderBars.js',
        public_js + 'jquery.flot.orderBars.js').
    copy(gentelella_vendor + 'fastclick/lib/fastclick.js',
        public_js + 'fastclick.js').
    copy(gentelella_vendor + 'DateJS/build/date.js',
        public_js + 'date.js').

    //Flot and Chart Drawing
    copy(gentelella_vendor + 'jqvmap/dist/jquery.vmap.js',
        public_js + 'jqvmap.js').
    copy(gentelella_vendor + 'jqvmap/dist/maps/jquery.vmap.world.js',
        public_js + 'jqvmap.world.js').
    copy(gentelella_vendor + 'jqvmap/examples/js/jquery.vmap.sampledata.js',
        public_js + 'jqvmap.sampledata.js').
    copy(gentelella_vendor + 'jqvmap/dist/jqvmap.css',
        public_css + 'jqvmap.css').
    copy(gentelella_vendor + 'Flot/jquery.flot.js',
        public_js + 'jquery.flot.js').
    copy(gentelella_vendor + 'Flot/jquery.flot.pie.js',
        public_js + 'jquery.flot.pie.js').
    copy(gentelella_vendor + 'Flot/jquery.flot.time.js',
        public_js + 'jquery.flot.time.js').
    copy(gentelella_vendor + 'Flot/jquery.flot.stack.js',
        public_js + 'jquery.flot.stack.js').
    copy(gentelella_vendor + 'Flot/jquery.flot.resize.js',
        public_js + 'jquery.flot.resize.js').
    copy(gentelella_vendor + 'flot-spline/js/jquery.flot.spline.js',
        public_js + 'jquery.flot.spline.js').
    copy(gentelella_vendor + 'flot.curvedlines/curvedLines.js',
        public_js + 'flot.curvedLines.js').
    copy(gentelella_vendor + 'echarts/dist/echarts.js',
        public_js + 'echart.js').
    copy(gentelella_vendor + 'echarts/map/js/world.js',
        public_js + 'echart-world.js').

    // DataTables
    copy(
        gentelella_vendor + 'datatables.net-bs/css/dataTables.bootstrap.css',
        public_css + 'dataTables.bootstrap.css').
    copy(gentelella_vendor +
        'datatables.net-buttons-bs/css/buttons.bootstrap.css',
        public_css + 'buttons.bootstrap.css').
    copy(gentelella_vendor +
        'datatables.net-fixedheader-bs/css/fixedheader.bootstrap.css',
        public_css + 'fixedheader.bootstrap.css').
    copy(gentelella_vendor +
        'datatables.net-responsive-bs/css/responsive.bootstrap.css',
        public_css + 'responsive.bootstrap.css').
    copy(gentelella_vendor +
        'datatables.net-scroller-bs/css/scroller.bootstrap.css',
        public_css + 'scroller.bootstrap.css').
    copy(gentelella_vendor + 'datatables.net/js/jquery.dataTables.js',
        public_js + 'jquery.dataTables.js').
    copy(gentelella_vendor + 'datatables.net-bs/js/dataTables.bootstrap.js',
        public_js + 'dataTables.bootstrap.js').
    copy(gentelella_vendor + 'datatables.net-buttons/js/dataTables.buttons.js',
        public_js + 'dataTables.buttons.js').
    copy(gentelella_vendor + 'datatables.net-buttons/js/buttons.flash.js',
        public_js + 'buttons.flash.js').
    copy(gentelella_vendor + 'datatables.net-buttons/js/buttons.html5.js',
        public_js + 'buttons.html5.js').
    copy(gentelella_vendor + 'datatables.net-buttons/js/buttons.print.js',
        public_js + 'buttons.print.js').
    copy(gentelella_vendor +
        'datatables.net-buttons-bs/js/buttons.bootstrap.js',
        public_js + 'buttons.bootstrap.js').
    copy(gentelella_vendor +
        'datatables.net-fixedheader/js/dataTables.fixedHeader.js',
        public_js + 'dataTables.fixedHeader.js').
    copy(gentelella_vendor +
        'datatables.net-keytable/js/dataTables.keytable.js',
        public_js + 'dataTables.keytable.js').
    copy(gentelella_vendor +
        'datatables.net-responsive/js/dataTables.responsive.js',
        public_js + 'dataTables.responsive.js').
    copy(gentelella_vendor +
        'datatables.net-responsive-bs/js/responsive.bootstrap.js',
        public_js + 'responsive.bootstrap.js').
    copy(gentelella_vendor +
        'datatables.net-scroller/js/dataTables.scroller.js',
        public_js + 'dataTables.scroller.js').
    // form elements
    copy(gentelella_vendor + 'switchery/dist/switchery.css',
        public_css + 'switchery.css').
    copy(gentelella_vendor + 'switchery/dist/switchery.js',
        public_js + 'switchery.js').
    copy(gentelella_vendor + 'iCheck/skins/flat/green.css',
        public_css + 'icheck-flat-green.css').
    copy(gentelella_vendor + 'iCheck/skins/flat/green@2x.png',
        public_css + 'green@2x.png').
    copy(gentelella_vendor + 'iCheck/icheck.js',
        public_js + 'icheck.js')
;
