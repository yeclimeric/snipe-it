<?php
/**
* Macro helpers
*/

/**
 * Barcode macro
 * Generates the dropdown menu of available 1D barcodes
 */
Form::macro('alt_barcode_types', function ($name = 'alt_barcode', $selected = null, $class = null) {
    $barcode_types = [
        'C128',
        'C39',
        'PDF417',
        'EAN5',
        'EAN13',
        'UPCA',
        'UPCE',

    ];

    $select = '<select name="'.$name.'" class="'.$class.'" aria-label="'.$name.'">';
    foreach ($barcode_types as $barcode_type) {
        $select .= '<option value="'.$barcode_type.'"'.($selected == $barcode_type ? ' selected="selected" role="option" aria-selected="true"' : ' aria-selected="false"').'>'.$barcode_type.'</option> ';
    }

    $select .= '</select>';

    return $select;
});

/**
 * Barcode macro
 * Generates the dropdown menu of available 2D barcodes
 */
Form::macro('barcode_types', function ($name = 'barcode_type', $selected = null, $class = null) {
    $barcode_types = [
        'QRCODE',
        'DATAMATRIX',

    ];

    $select = '<select name="'.$name.'" class="'.$class.'" aria-label="'.$name.'">';
    foreach ($barcode_types as $barcode_type) {
        $select .= '<option value="'.$barcode_type.'"'.($selected == $barcode_type ? ' selected="selected" role="option" aria-selected="true"' : ' aria-selected="false"').'>'.$barcode_type.'</option> ';
    }

    $select .= '</select>';

    return $select;
});
