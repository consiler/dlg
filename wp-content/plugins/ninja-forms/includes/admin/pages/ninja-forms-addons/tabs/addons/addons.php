<?php
add_action('init', 'ninja_forms_register_tab_addons');

function ninja_forms_register_tab_addons(){
    $args = array(
        'name' => __( 'Extend Ninja Forms', 'ninja-forms' ),
        'page' => 'ninja-forms-extend',
        'display_function' => 'ninja_forms_tab_addons',
        'save_function' => '',
        'show_save' => false,
    );
    ninja_forms_register_tab('extend', $args);

}

function ninja_forms_tab_addons(){
    $uri = 'http://ninjaforms.com/downloads/category/ninja-forms/feed/';
    //include_once(ABSPATH . WPINC . '/feed.php');
    $feed = fetch_feed( $uri );

    if (!is_wp_error( $feed ) ) :
        $items = $feed->get_items(0, 0);
    endif;

    $items = array(
        array (
            'title' => __( 'Layout and Styles', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2013/01/layout-styles-300x121.png',
            'content' => __( 'This extension gives you power over the look and feel of your Ninja Forms from within your WordPress admin. It gives you the ability to style almost every part of your form, down to the the smallest detail, with little to no …', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/layout-styles/',
            'plugin' => 'ninja-forms-style/ninja-forms-style.php',
            'docs' => 'http://ninjaforms.com/documentation/extensions/layout-styles/',
        ),       
        array (
            'title' => __( 'PayPal Express', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2013/09/paypal-express-300x121.png',
            'content' => __( 'Accept payments using PayPal Express and Ninja Forms', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/paypal-express/',
            'plugin' => 'ninja-forms-paypal-express/paypal-express.php',
            'docs' => 'http://ninjaforms.com/documentation/extensions/paypal-express/',
        ),
        array (
            'title' => __( 'Save User Progress', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2012/10/save-user-progress-300x121.png',
            'content' => __( 'Sometimes forms can grow quite large, and it would be very helpful for users to be able to save their progress and come back at a later time. This extension does just that for you. Using the built-in WordPress user …', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/save-user-progress/',
            'plugin' => 'ninja-forms-save-progress/save-progress.php',
            'docs' => '',
        ),
        array (
            'title' => __( 'File Uploads', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2012/10/file-uploads1-300x121.png',
            'content' => __( 'File Uploads for Ninjas Forms gives you the ability to insert file upload fields to your forms. This will allow users the ability to upload images, docs, audio or video files, or anything else you may need. You can easily …', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/file-uploads/',
            'plugin' => 'ninja-forms-uploads/file-uploads.php',
            'docs' => 'http://ninjaforms.com/documentation/extensions/file-uploads/',
        ),
        array (
            'title' => __( 'Front-End Posting', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2012/10/front-end-posting-300x121.png',
            'content' => __( 'The Ninja Forms Front-end Posting extension gives you the power of the WordPress post editor on any publicly viewable page you choose. You can allow users the ability to create content and have it assigned to any publicly available built-in or custom …', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/front-end-posting/',
            'plugin' => 'ninja-forms-post-creation/post-creation.php',
            'docs' => '',
        ),
        array (
            'title' => __( 'Front-End Editor', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2013/03/front-end-editor.png',
            'content' => __( 'The Front-End Editor Extension brings the power of your WordPress admin to your front-facing site. It is a one-stop solution for almost all your front-end editing needs. Users can now be allowed to create, edit, or delete posts, pages, or any custom post type without the need to see the WordPress admin.', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/front-end-editor/',
            'plugin' => 'ninja-forms-front-end-editor/front-end-editor.php',
            'docs' => '',
        ),
        array (
            'title' => __( 'Multi-Part Forms', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2012/10/multi-part-forms-300x121.png',
            'content' => __( 'The Multi-Part Forms extension allows you to break long forms into sections, creating a natural flow for your visitors. You can add a breadcrumb trail through the various sections of the form and a progress bar so that your users …', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/multi-part-forms/',
            'plugin' => 'ninja-forms-multi-part/multi-part.php',
            'docs' => '',
        ),
        array (
            'title' => __( 'Conditional Logic', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2012/10/conditional-logic-300x121.png',
            'content' => __( 'This extension for Ninja Forms allows you to create “smart” forms. Fields within these forms can dynamically change based upon user input; show or hide fields based on a selected item, set field values based upon a list selection, or …', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/conditional-logic/',
            'plugin' => 'ninja-forms-conditionals/conditionals.php',
            'docs' => '',
        ),
        array (
            'title' => __( 'MailChimp', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2013/04/mailchimp-for-ninja-forms-300x121.png',
            'content' => __( 'The MailChimp extension allows you to quickly create newsletter signup forms for your MailChimp account using the power and flexibility that Ninja Forms provides. …', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/mail-chimp/',
            'plugin' => 'ninja-forms-mailchimp/ninja-forms-mailchimp.php',
            'docs' => '',
        ),
        array (
            'title' => __( 'Campaign Monitor', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2013/05/campaign-monitor-header-300x121.png',
            'content' => __( 'The Campaign Monitor extension allows you to quickly create newsletter signup forms for your Campaign Monitor account using the power and flexibility that Ninja Forms provides. …', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/mail-chimp/',
            'plugin' => 'ninja-forms-campaign-monitor/ninja-forms-campaign-monitor.php',
            'docs' => '',
        ),
        array (
            'title' => __( 'User Analytics', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2013/05/user-analytics-header-300x121.png',
            'content' => __( 'The User Analytics extension will help website owners understand how hot a lead is based on extra data automatically collected about the user. …', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/user-analytics/',
            'plugin' => 'ninja-forms-user-analytics/nf-user-analytics.php',
            'docs' => '',
        ),
        array (
            'title' => __( 'Constant Contact', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2013/07/constant-contact-300x121.png',
            'content' => __( 'The Constant Contact extension allows you to quickly create newsletter signup forms for your Constant Contact account using the power and…', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/constant-contact/',
            'plugin' => 'ninja-forms-constant-contact/ninja-forms-constant-contact.php',
            'docs' => '',
        ),
        array (
            'title' => __( 'Pushover', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2013/07/pushover-300x121.png',
            'content' => __( 'When email and SMS notifications just do not cut it, send yourself push notifications of form submissions with Pushover. Pushover makes…', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/pushover/',
            'plugin' => 'ninja-forms-pushover/ninja-forms-pushover.php',
            'docs' => '',
        ),
        array (
            'title' => __( 'Freshbooks', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2013/07/freshbooks-300x121.png',
            'content' => __( 'Automatically insert Ninja Forms data right into Freshbooks when your potential clients submit forms. Go from lead to invoice that much quicker…', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/freshbooks/',
            'plugin' => 'ninja-forms-freshbooks/ninja-forms-freshbooks.php',
            'docs' => '',
        ),        
        array (
            'title' => __( 'AWeber', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2013/08/aweber-300x121.png',
            'content' => __( 'Use Ninja Forms to quickly create flexible newsletter signup forms for your AWeber email marketing account.', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/aweber/',
            'plugin' => 'ninja-forms-aweber/ninja-forms-aweber.php',
            'docs' => '',
        ),        
        array (
            'title' => __( 'Picatcha', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2013/08/picatcha-header-300x121.png',
            'content' => __( 'The Picatcha extension allows you to add image-based CAPTHA to your forms.', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/picatcha/',
            'plugin' => 'ninja-forms-picatcha/ninja-forms-picatcha.php',
            'docs' => '',
        ),       
        array (
            'title' => __( 'WYSIJA', 'ninja-forms' ),
            'image' => 'http://ninjaforms.com/wp-content/uploads/edd/2013/08/wysija-header-300x121.jpg',
            'content' => __( 'The Wisija extension allows you to quickly create newsletter signup forms for your Wisija mailing lists using the power and flexibility that Ninja Forms provides.', 'ninja-forms' ),
            'link' => 'http://ninjaforms.com/downloads/wysija/',
            'plugin' => 'ninja-forms-wysija/nf-wysija.php',
            'docs' => '',
        ),
    );

    foreach ($items as $item) {
        echo '<div class="nf-extend">';
            echo '<img src="' . $item['image'] . '" />';
            echo '<h2>' . $item['title'] . '</h2>';
            echo '<div>';
                echo '<p>' . $item['content'] . '</p>';
                if( !empty( $item['docs'] ) ) {
                    echo '<p><a href="' . $item['docs'] . '">' . $item['title'] . ' ' . __( 'Extension Documentation', 'ninja-forms' ) . '</a></p>';
                } else {
                    echo '<p>' . __( 'Documentation coming soon.', 'ninja-forms' ) . '</a>.</p>';
                }
            echo '</div>';
            if( file_exists( WP_PLUGIN_DIR.'/'.$item['plugin'] ) ){
              if( is_plugin_active( $item['plugin'] ) ) {
                    echo '<span class="button-secondary nf-button">' . __( 'Active', 'ninja-forms' ) . '</span>';
                } elseif( is_plugin_inactive( $item['plugin'] ) ) {
                    echo '<span class="button-secondary nf-button">' . __( 'Installed', 'ninja-forms' ) . '</span>';
                } else {
                    echo '<a href="' . $item['link'] . '" title="' . $item['title'] . '" class="button-primary nf-button">' . __( 'Learn More', 'ninja-forms' ) . '</a>';
                }
            }else{
                echo '<a href="' . $item['link'] . '" title="' . $item['title'] . '" class="button-primary nf-button">' . __( 'Learn More', 'ninja-forms' ) . '</a>';
            }

        echo '</div>';
    }
}

function ninja_forms_save_addons($data){
    global $wpdb;

}