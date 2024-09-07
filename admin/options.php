<?php
if ( !defined( 'ABSPATH' ) ) {
    die;
}
class NS_Plugin_Options {
// $themename = "base-theme";
    // $this->shortname = "mnt";

    /**
     * Class constructor.
     */
    public function __construct( $options = [], $post_id = false ) {
        $this->shortname = "wpig";
        $this->post_id   = $post_id;

        if ( count( $options ) < 1 ) {
            $this->default_options();
        } else {
            $this->options = $options;
        }
    }

    public function display() {
        foreach ( $this->options as $value ) {
            switch ( $value['type'] ) {
            case "sub-section-3":
                $this->create_suf_header_3( $value );
                break;

            case "text";
                $this->create_section_for_text( $value );
                break;

            case "textarea":
                $this->create_section_for_textarea( $value );
                break;

            case "checkbox":
                $this->create_section_for_checkbox( $value );
                break;

            case "radio":
                $this->create_section_for_radio( $value );
                break;

            case "color-picker":
                $this->create_section_for_color_picker( $value );
                break;
            case "select":
                $this->create_section_for_category_select( $value );
                break;
            case "select-2":
                $this->create_section_for_category_select( $value );
                break;
            }
        }
    }

    public function default_options() {
        $this->options = array(
            array( "name" => "Header Customization",
                "type"       => "sub-section-3",
                "category"   => "header-styles",
            ),
            array( "name" => "Header Image",
                "desc"       => "Set the image to use for the header background. ",
                "id"         => $this->shortname . "_header_background_image",
                "type"       => "text",
                "parent"     => "header-styles",
                "std"        => "" ),
            array( "name" => "Body Background Settings",
                "type"       => "sub-section-3",
                "category"   => "body-styles",
            ),
            array( "name" => "Body Background Color",
                "desc"       => "Set the color of the background on which the page is. ",
                "id"         => $this->shortname . "_body_background_color",
                "type"       => "color-picker",
                "parent"     => "body-styles",
                "std"        => "444444" ),
            array( "name" => "Sidebar Setup",
                "type"       => "sub-section-3",
                "category"   => "sidebar-setup",
            ),
            array( "name" => "Sidebar Position",
                "id"         => $this->shortname . "_sidebar_alignment",
                "type"       => "radio",
                "desc"       => "Which side would you like your sidebar?",
                "options"    => array( "left" => "Left", "right" => "Right" ),
                "parent"     => "sidebar-setup",
                "std"        => "right" ),
            array( "name" => "Navigation Bar Setup",
                "type"       => "sub-section-3",
                "category"   => "nav-setup",
            ),
            array( "name" => "Pages to show in Navigation Bar",
                "desc"       => "Select the pages you want to include. All pages are excluded by default",
                "id"         => $this->shortname . "_nav_pages",
                "type"       => "multi-select",
                "options"    => $this->mnt_get_formatted_page_array( $this->shortname . "_nav_pages" ),
                "parent"     => "nav-setup",
                "std"        => "none",
            ),
            array( "name" => "Analytics",
                "type"       => "sub-section-3",
                "category"   => "analytics-setup",
            ),
            array( "name" => "Custom Google Analytics Tracking Code",
                "desc"       => "Enter your tracking code here for Google Analytics",
                "id"         => $this->shortname . "_custom_analytics_code",
                "type"       => "textarea",
                "parent"     => "analytics-setup",
                "std"        => "",
            ),
            array( "name" => "category posts to show on the front page",
                "desc"       => "Select the category you want to include. All pages are excluded by default",
                "id"         => $this->shortname . "_front_page_first_section",
                "type"       => "select",
                "options"    => $this->mnt_get_category_array( $this->shortname . "_nav_pages" ),
                "parent"     => "nav-setup",
                "std"        => $this->mnt_get_category_array( $this->shortname . "_nav_pages" ),
            ),
            array( "name" => "category posts to show on the front page below",
                "desc"       => "Select the category you want to include. All pages are excluded by default",
                "id"         => $this->shortname . "_front_page_second_section",
                "type"       => "select-2",
                "options"    => $this->mnt_get_category_array( $this->shortname . "_nav_pages" ),
                "parent"     => "nav-setup",
                "std"        => $this->mnt_get_category_array( $this->shortname . "_nav_pages" ),
            ),
        );
    }

    /* functions to andale the options array  */

    /**
     * @return mixed
     */
    public function mnt_get_formatted_page_array() {
        global $suffusion_pages_array;
        if ( isset( $suffusion_pages_array ) && $suffusion_pages_array != null ) {
            return $suffusion_pages_array;
        }
        $ret   = array();
        $pages = get_pages( 'sort_column=menu_order' );
        if ( $pages != null ) {
            foreach ( $pages as $page ) {
                if ( is_null( $suffusion_pages_array ) ) {
                    $ret[$page->ID] = array( "title" => $page->post_title, "depth" => count( get_ancestors( $page->ID, 'page' ) ) );
                }
            }
        }
        if ( $suffusion_pages_array == null ) {
            $suffusion_pages_array = $ret;
            return $ret;
        } else {
            return $suffusion_pages_array;
        }
    }

    /**
     * @return mixed
     */
    public function mnt_get_category_array() {
        global $suffusion_category_array;
        if ( isset( $suffusion_category_array ) && $suffusion_category_array != null ) {
            return $suffusion_category_array;
        }
        $ret  = array();
        $args = array(
            'orderby' => 'name',
            'parent'  => 0,
        );
        $categories = get_categories( $args );
        if ( $categories != null ) {
            foreach ( $categories as $category ) {
                if ( is_null( $suffusion_category_array ) ) {
                    $ret[$category->cat_ID] = array( "name" => $category->name, "number" => $category->count );
                }
            }
        }

        if ( $suffusion_category_array == null ) {
            $suffusion_category_array = $ret;
            return $ret;
        } else {
            return $suffusion_category_array;
        }
    }

    /**
     * @param $value
     */
    public function create_opening_tag( $value ) {
        $group_class = "";
        if ( isset( $value['grouping'] ) ) {
            $group_class = "suf-grouping-rhs";
        }
        echo '<div class="suf-section fix">' . "\n";
        if ( $group_class != "" ) {
            echo "<div class='$group_class fix'>\n";
        }
        if ( isset( $value['name'] ) ) {
            echo "<p>" . esc_html( $value['name'] ) . "</p>\n";
        }
        if ( isset( $value['desc'] ) && !( isset( $value['type'] ) && $value['type'] == 'checkbox' ) ) {
            // echo esc_html($value['desc']) . "<br />";
        }
        if ( isset( $value['note'] ) ) {
            echo "<span class=\"note\">" . esc_html( $value['note'] ) . "</span><br />";
        }
    }

    /**
     * Creates the closing markup for each option.
     *
     * @param $value
     * @return void
     */
    public function create_closing_tag( $value ) {
        if ( isset( $value['grouping'] ) ) {
            echo "</div>\n";
        }
        //echo "</div><!-- suf-section -->\n";
        echo "</div>\n";
    }

    /**
     * @param $value
     */
    public function create_suf_header_3( $value ) {echo '<h3 class="suf-header-3">' . esc_html( $value['name'] ) . "</h3>\n";}

    /**
     * @param $value
     */
    public function create_section_for_text( $value ) {
        $this->create_opening_tag( $value );
        $text = "";
        if ( $this->get_option( $value['id'] ) === FALSE ) {
            $text = $value['std'];
        } else {
            $text = $this->get_option( $value['id'] );
        }

        echo '<input class="large-text" type="text" id="' . esc_html( $value['id'] ) . '" placeholder="enter your title" name="' . esc_html( $value['id'] ) . '" value="' . esc_html( $text ) . '" />' . "\n";
        $this->create_closing_tag( $value );
    }

    /**
     * @param $value
     */
    public function create_section_for_textarea( $value ) {
        $this->create_opening_tag( $value );
        echo '<textarea class="large-text" name="' . esc_html( $value['id'] ) . '" type="textarea" cols="" rows="">' . "\n";
        if ( $this->get_option( sanitize_text_field( $value['id'] ) ) != "" ) {
            echo esc_html( $this->get_option( $value['id'] ) );
        } else {
            echo esc_html( $value['std'] );
        }
        echo '</textarea>';
        $this->create_closing_tag( $value );
    }

    /**
     * @param $value
     */
    public function create_section_for_color_picker( $value ) {
        $this->create_opening_tag( $value );
        $color_value = "";
        if ( $this->get_option( sanitize_text_field( $value['id'] ) ) === FALSE ) {
            $color_value = esc_html( $value['std'] );
        } else {
            $color_value = esc_html( $this->get_option( sanitize_text_field( $value['id'] ) ) );
        }

        echo '<div class="color-picker">' . "\n";
        echo '<input type="text" id="' . esc_html( $value['id'] ) . '" name="' . esc_html( $value['id'] ) . '" value="' . ( $color_value ) . '" class="color large-text color-field" />';
        // echo ' « Click to select color<br/>' . "\n";
        // echo "<strong>Default: <font color='" . $value['std'] . "'> " . $value['std'] . "</font></strong>";
        // echo " (You can copy and paste this into the box above)\n";
        echo "</div>\n";
        $this->create_closing_tag( $value );
    }

    /**
     * @param $value
     */
    public function create_section_for_radio( $value ) {
        $this->create_opening_tag( $value );
        foreach ( $value['options'] as $option_value => $option_text ) {
            $checked = ' ';
            if ( $this->get_option( $value['id'] ) == $option_value ) {
                $checked = ' checked="checked" ';
            } else if ( $this->get_option( $value['id'] ) === FALSE && $value['std'] == $option_value ) {
                $checked = ' checked="checked" ';
            } else {
                $checked = ' ';
            }
            echo '<div class="mnt-radio"><input type="radio" name="' . esc_html( $value['id'] ) . '" value="' .
            esc_html( $option_value ) . '" ' . $checked . "/>" . esc_html( $option_text ) . "</div>\n";
        }
        $this->create_closing_tag( $value );
    }

    /**
     * @param $value
     */
    public function create_section_for_checkbox( $value ) {
        $this->create_opening_tag( $value );
        echo '<ul class="mnt-checklist" id="' . esc_html( $value['id'] ) . '" >' . "\n";
        foreach ( $value['options'] as $option_value => $option_list ) {
            $checked = " ";
            if ( $this->get_option( $value['id'] ) == $option_value ) {
                $checked = ' checked="checked" ';
            } else if ( $this->get_option( $value['id'] ) === FALSE && $value['std'] == $option_value ) {
                $checked = ' checked="checked" ';
            } else {
                $checked = ' ';
            }

            echo "<li>\n";
            echo '<input type="checkbox" name="' . esc_html( $value['id'] ) . '" value="' . esc_html( $option_value ) . '" ' . $checked . ' class="depth-' . ( 2 + 1 ) . '" />' . esc_html( $option_list ) . "\n";
            echo "</li>\n";
        }
        echo "</ul>\n";
        $this->create_closing_tag( $value );
    }

    /**
     * @param $page_section
     * @param $value
     */
    public function create_section_for_category_select( $value ) {
        $this->create_opening_tag( $value );
        $all_categoris = '';
        echo '<div class="wrap" id="' . esc_html( $value['id'] ) . '" >' . "\n";
        // echo '<h1>Theme Options</h1> ' . "\n" . '
        //         <p><strong>' . $page_section . ':</strong></p>';
        echo "<select id='" . esc_html( $value['id'] ) . "' class='post_form' style='width: 99%;' name='" . esc_html( $value['id'] ) . "' value='true'>\n";
        // echo "<option id='all' value=''>All</option>";
        foreach ( $value['options'] as $option_value => $option_list ) {
            $checked = ' ';
            //  echo 'value_id=' . $value['id'] . ' value_id=' . get_option( $value['id'] ) . ' options_value=' . $option_value;
            if ( $this->get_option( $value['id'] ) == $option_value ) {
                $checked = ' selected ';
            } else if ( $this->get_option( $value['id'] ) === FALSE && $value['std'] == $option_value ) {
                $checked = ' selected ';
            } else {
                $checked = '';
            }
            echo '<option value="' . esc_html( $option_value ) . '" class="level-0" ' . $checked . ' />' . esc_html( $option_list ) . "</option>\n";
            //$all_categoris .= $option_list['name'] . ',';
        }
        echo "</select>\n </div>";
        //echo '<script>jQuery("#all").val("'.$all_categoris.'")</\script>';
        $this->create_closing_tag( $value );
    }

    /**
     * @param $id
     */
    public function get_option( $id ) {
        if ( $this->post_id ) {
            if ( metadata_exists( 'post', $this->post_id, $id ) ) {
                // $meta_value = get_post_meta( $this->post_id, $id, true );
                return get_post_meta( $this->post_id, $id, true );
            } else {
                return false;
                // echo "<pre>";
                // echo $id . " Not Exist";
                // var_dump( get_post_meta( $this->post_id, $id, true ) );
                // echo "</pre>";
                // exit;
            }

        } else {
            return get_option( $id );
        }
    }

}
?>