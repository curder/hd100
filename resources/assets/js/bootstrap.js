window._ = require('lodash');


try {
    window.$ = window.jQuery = require('jquery');
    // require('bootstrap-sass');
} catch (e) {
}

require('./libs/jquery.SuperSlide.2.1.1');
require('./libs/lib');
require('./libs/slick.min');
require('./libs/headroom.min');
require('./libs/jQuery.headroom');
// require('wowjs');
// window.WOW = require('wowjs').WOW;
import {WOW} from 'wowjs'

window.WOW = WOW

require('./libs/public');

// window.axios = require('axios');
//
// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
//
// let token = document.head.querySelector('meta[name="csrf-token"]');
//
// if (token) {
//     window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
// } else {
//     console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
// }

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key',
//     cluster: 'mt1',
//     encrypted: true
// });
