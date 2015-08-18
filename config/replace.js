module.exports = (function () {

    'use strict';

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com',
            username: 'manovotny'
        },
        project: {
            composer: 'manovotny/wp-array-util',
            description: 'A MailChimp signup form popup for WordPress.',
            git: 'git://github.com/manovotny/wp-mailchimp-signup-form-popup.git',
            name: 'WP MailChimp Signup Form Popup',
            slug: 'wp-mailchimp-signup-form-popup',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-mailchimp-signup-form-popup',
            version: '1.0.1'
        },
        translations: {
            domain: 'wp-mailchimp-signup-form-popup',
            path: 'lang'
        }
    };

}());
