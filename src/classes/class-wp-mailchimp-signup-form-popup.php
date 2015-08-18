<?php

class WP_MailChimp_Signup_Form_Popup {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_Recipe_Grunticon
     */
    protected static $instance = null;

    /* Constructor
    ---------------------------------------------------------------------------------- */

    /**
     * Initialize class.
     */
    public function __construct() {

        add_filter( 'wp_head', array( $this, '__render' ) );

    }

    /* Public
    ---------------------------------------------------------------------------------- */

    /**
     * Gets instance of class.
     *
     * @return WP_Recipe_Grunticon Instance of the class.
     */
    public static function get_instance() {

        if ( null == self::$instance ) {

            self::$instance = new self;

        }

        return self::$instance;

    }

    /* Private
    ---------------------------------------------------------------------------------- */

    /**
     * Renders view.
     */
    function __render() {

        $options = apply_filters( 'wp_mailchimp_signup_form_popup_options', '' );

        if ( $options ) {

            echo '<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>';
            echo '<script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({' . $options . '}) })</script>';

        }

    }
}
