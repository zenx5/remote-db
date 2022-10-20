class Remove_DB.php {
    public static function activation( ) {}
    public static function desactivation( ) {}

    public static function init( ) {
        add_action('pre_get_posts', ['Remove_DB', 'getDatas']);
        get_post();
    }

    public static function getDatas( $query ) {
        echo $query;
    }

}