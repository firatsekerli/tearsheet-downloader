<?php
defined( 'ABSPATH' ) || exit;

/**
 * Registers the Fournir Product Specs ACF field group programmatically.
 *
 * Field names (use these in get_field() or the block template):
 *
 *   fournir_details       — Details (e.g. "Tight Seat")
 *   fournir_material      — Material (e.g. "Hardwood")
 *   fournir_finish        — Finish Shown (e.g. "Swedish Paint with 22K Gold Details")
 *   fournir_width         — Width (e.g. "19"")
 *   fournir_depth         — Depth (e.g. "23"")
 *   fournir_height        — Height (e.g. "38"")
 *   fournir_seat_height   — Seat Height (e.g. "19 1/2"")
 *   fournir_com           — COM / Customer's Own Material (e.g. "1 yard 54"")
 *   fournir_col           — COL / Customer's Own Leather (e.g. "17 sq ft")
 *   fournir_lead_time     — Estimated Lead Time (e.g. "14-16 Weeks")
 */
class Tearsheet_ACF_Fields {

    public static function register(): void {
        if ( ! function_exists( 'acf_add_local_field_group' ) ) {
            return;
        }

        acf_add_local_field_group( [
            'key'                   => 'group_fournir_product_specs',
            'title'                 => 'Product Specs',
            'fields'                => self::fields(),
            'location'              => [
                [
                    [
                        'param'    => 'post_type',
                        'operator' => '==',
                        'value'    => 'product',
                    ],
                ],
            ],
            'menu_order'            => 10,
            'position'              => 'normal',
            'style'                 => 'default',
            'label_placement'       => 'top',
            'instruction_placement' => 'label',
            'active'                => true,
        ] );
    }

    private static function fields(): array {
        return [

            // ── Details ──────────────────────────────────────────────────
            [
                'key'           => 'field_fournir_details',
                'label'         => 'Details',
                'name'          => 'fournir_details',
                'type'          => 'text',
                'instructions'  => 'e.g. Tight Seat',
                'required'      => 0,
                'wrapper'       => [ 'width' => '50' ],
            ],

            // ── Material ─────────────────────────────────────────────────
            [
                'key'           => 'field_fournir_material',
                'label'         => 'Material',
                'name'          => 'fournir_material',
                'type'          => 'text',
                'instructions'  => 'e.g. Hardwood',
                'required'      => 0,
                'wrapper'       => [ 'width' => '50' ],
            ],

            // ── Finish Shown ──────────────────────────────────────────────
            [
                'key'           => 'field_fournir_finish',
                'label'         => 'Finish Shown',
                'name'          => 'fournir_finish',
                'type'          => 'text',
                'instructions'  => 'e.g. Swedish Paint with 22K Gold Details',
                'required'      => 0,
                'wrapper'       => [ 'width' => '100' ],
            ],

            // ── Dimensions tab ────────────────────────────────────────────
            [
                'key'           => 'field_fournir_tab_dimensions',
                'label'         => 'Standard Dimensions',
                'type'          => 'tab',
                'placement'     => 'left',
            ],
            [
                'key'           => 'field_fournir_width',
                'label'         => 'Width',
                'name'          => 'fournir_width',
                'type'          => 'text',
                'instructions'  => 'e.g. 19"',
                'required'      => 0,
                'wrapper'       => [ 'width' => '25' ],
            ],
            [
                'key'           => 'field_fournir_depth',
                'label'         => 'Depth',
                'name'          => 'fournir_depth',
                'type'          => 'text',
                'instructions'  => 'e.g. 23"',
                'required'      => 0,
                'wrapper'       => [ 'width' => '25' ],
            ],
            [
                'key'           => 'field_fournir_height',
                'label'         => 'Height',
                'name'          => 'fournir_height',
                'type'          => 'text',
                'instructions'  => 'e.g. 38"',
                'required'      => 0,
                'wrapper'       => [ 'width' => '25' ],
            ],
            [
                'key'           => 'field_fournir_seat_height',
                'label'         => 'Seat Height',
                'name'          => 'fournir_seat_height',
                'type'          => 'text',
                'instructions'  => 'e.g. 19 1/2"',
                'required'      => 0,
                'wrapper'       => [ 'width' => '25' ],
            ],

            // ── Notes (upholstery) tab ────────────────────────────────────
            [
                'key'           => 'field_fournir_tab_notes',
                'label'         => 'Notes',
                'type'          => 'tab',
                'placement'     => 'left',
            ],
            [
                'key'           => 'field_fournir_com',
                'label'         => 'COM',
                'name'          => 'fournir_com',
                'type'          => 'text',
                'instructions'  => "Customer's Own Material — e.g. 1 yard 54\"",
                'required'      => 0,
                'wrapper'       => [ 'width' => '50' ],
            ],
            [
                'key'           => 'field_fournir_col',
                'label'         => 'COL',
                'name'          => 'fournir_col',
                'type'          => 'text',
                'instructions'  => "Customer's Own Leather — e.g. 17 sq ft",
                'required'      => 0,
                'wrapper'       => [ 'width' => '50' ],
            ],

            // ── Lead Time tab ─────────────────────────────────────────────
            [
                'key'           => 'field_fournir_tab_lead_time',
                'label'         => 'Lead Time',
                'type'          => 'tab',
                'placement'     => 'left',
            ],
            [
                'key'           => 'field_fournir_lead_time',
                'label'         => 'Estimated Lead Time',
                'name'          => 'fournir_lead_time',
                'type'          => 'text',
                'instructions'  => 'e.g. 14-16 Weeks',
                'required'      => 0,
                'wrapper'       => [ 'width' => '50' ],
            ],

        ];
    }
}
