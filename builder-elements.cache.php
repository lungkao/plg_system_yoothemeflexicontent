<?php

return array (
  'accordion' => 
  array (
    'name' => 'accordion',
    'title' => 'Accordion',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_image' => true,
      'show_link' => true,
      'collapsible' => true,
      'content_column_breakpoint' => 'm',
      'image_svg_color' => 'emphasis',
      'image_align' => 'top',
      'image_grid_width' => '1-2',
      'image_grid_breakpoint' => 'm',
      'link_text' => 'Read more',
      'link_style' => 'default',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'item' => 'accordion_item',
        'media' => 
        array (
          'type' => 'image',
          'item' => 
          array (
            'title' => 'title',
            'image' => 'src',
          ),
        ),
      ),
      'show_image' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the image',
      ),
      'show_link' => 
      array (
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the link',
      ),
      'multiple' => 
      array (
        'label' => 'Behavior',
        'type' => 'checkbox',
        'text' => 'Allow multiple open items',
      ),
      'collapsible' => 
      array (
        'type' => 'checkbox',
        'text' => 'Start with all items closed',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Lead' => 'lead',
          'Meta' => 'meta',
        ),
      ),
      'content_dropcap' => 
      array (
        'label' => 'Drop Cap',
        'description' => 'Display the first letter of the paragraph as a large initial.',
        'type' => 'checkbox',
        'text' => 'Enable drop cap',
      ),
      'content_column' => 
      array (
        'label' => 'Columns',
        'description' => 'Set the number of text columns.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Halves' => '1-2',
          'Thirds' => '1-3',
          'Quarters' => '1-4',
          'Fifths' => '1-5',
          'Sixths' => '1-6',
        ),
      ),
      'content_column_divider' => 
      array (
        'description' => 'Show a divider between text columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'content_column',
      ),
      'content_column_breakpoint' => 
      array (
        'label' => 'Columns Breakpoint',
        'description' => 'Set the device width from which the text columns should apply.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'content_column',
      ),
      'content_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
        'enable' => 'show_image',
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => 'show_image',
      ),
      'image_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the image to the top, left, right or place it between the title and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Bottom' => 'bottom',
          'Left' => 'left',
          'Right' => 'right',
        ),
        'enable' => 'show_image',
      ),
      'image_grid_width' => 
      array (
        'label' => 'Grid Width',
        'description' => 'Define the width of the image within the grid. Choose between percent and fixed widths or expand columns to the width of their content.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => 'auto',
          '80%' => '4-5',
          '75%' => '3-4',
          '66%' => '2-3',
          '60%' => '3-5',
          '50%' => '1-2',
          '40%' => '2-5',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
        'enable' => 'show_image && $match(image_align, \'left|right\')',
      ),
      'image_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between the image and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'show_image && $match(image_align, \'left|right\')',
      ),
      'image_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'show_image && $match(image_align, \'left|right\')',
      ),
      'image_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'show_image && $match(image_align, \'left|right\')',
      ),
      'image_vertical_align' => 
      array (
        'label' => 'Vertical Alignment',
        'description' => 'Vertically center grid items.',
        'type' => 'checkbox',
        'text' => 'Center',
        'enable' => 'show_image && $match(image_align, \'left|right\')',
      ),
      'image_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_image && image_align == \'bottom\'',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'show_image',
      ),
      'image_svg_color' => 
      array (
        'label' => 'SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_image && image_svg_inline',
      ),
      'link_text' => 
      array (
        'label' => 'Text',
        'description' => 'Enter the text for the link.',
        'enable' => 'show_link',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'show_link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'show_link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'show_link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'show_link',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link' => '',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
        'enable' => 'show_link',
      ),
      'link_size' => 
      array (
        'label' => 'Button Size',
        'description' => 'Set the button size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Full width button',
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_link',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-title</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-item',
            2 => '.el-title',
            3 => '.el-content',
            4 => '.el-image',
            5 => '.el-link',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'show_image',
              2 => 'show_link',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Accordion',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'multiple',
                  1 => 'collapsible',
                ),
              ),
              1 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_style',
                  1 => 'content_dropcap',
                  2 => 'content_column',
                  3 => 'content_column_divider',
                  4 => 'content_column_breakpoint',
                  5 => 'content_margin',
                ),
              ),
              2 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_loading',
                  2 => 'image_border',
                  3 => 'image_align',
                  4 => 'image_grid_width',
                  5 => 'image_grid_column_gap',
                  6 => 'image_grid_row_gap',
                  7 => 'image_grid_breakpoint',
                  8 => 'image_vertical_align',
                  9 => 'image_margin',
                  10 => 'image_svg_inline',
                  11 => 'image_svg_color',
                ),
              ),
              3 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_text',
                  1 => 'link_target',
                  2 => 'link_download',
                  3 => 'link_rel_nofollow',
                  4 => 'link_rel_noreferrer',
                  5 => 'link_style',
                  6 => 'link_size',
                  7 => 'link_fullwidth',
                  8 => 'link_margin',
                ),
              ),
              4 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'accordion_item' => 
  array (
    'name' => 'accordion_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'image' => '${builder.image}',
      'image_alt' => '${builder.image_alt}',
      'link' => '${builder.link}',
      'link_text' => 
      array (
        'label' => 'Link Text',
        'description' => 'Set a different link text for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'item_element' => '${builder.html_element_item}',
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'image',
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'title',
              1 => 'content',
              2 => 'image',
              3 => 'image_alt',
              4 => 'link',
              5 => 'link_text',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Item',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'item_element',
                ),
              ),
              1 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'image_focal_point',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
  ),
  'alert' => 
  array (
    'name' => 'alert',
    'title' => 'Alert',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'title_element' => 'h3',
    ),
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'link' => '${builder.link}',
      'alert_style' => 
      array (
        'label' => 'Style',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Primary' => 'primary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
      ),
      'alert_size' => 
      array (
        'type' => 'checkbox',
        'text' => 'Larger padding',
      ),
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Bold' => 'text-bold',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'title',
      ),
      'title_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'title',
      ),
      'title_inline' => 
      array (
        'label' => 'Alignment',
        'description' => 'Display the title in the same line as the content.',
        'type' => 'checkbox',
        'text' => 'Inline title',
        'enable' => 'title',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Lead' => 'lead',
          'Meta' => 'meta',
        ),
        'enable' => 'content',
      ),
      'content_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'content && !title_inline',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'link',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-title</code>, <code>.el-content</code>, <code>.el-link</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-title',
            2 => '.el-content',
            3 => '.el-link',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'title',
              1 => 'content',
              2 => 'link',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Alert',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'alert_style',
                  1 => 'alert_size',
                ),
              ),
              1 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_style',
                  1 => 'title_element',
                  2 => 'title_inline',
                ),
              ),
              2 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_style',
                  1 => 'content_margin',
                ),
              ),
              3 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_target',
                  1 => 'link_download',
                  2 => 'link_rel_nofollow',
                  3 => 'link_rel_noreferrer',
                ),
              ),
              4 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'button' => 
  array (
    'name' => 'button',
    'title' => 'Button',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'grid_column_gap' => 'small',
      'grid_row_gap' => 'small',
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'title' => 'content',
        'item' => 'button_item',
        'media' => 
        array (
          'type' => '',
          'item' => 
          array (
            'link_title' => 'title',
            'link' => 'src',
          ),
        ),
      ),
      'button_size' => 
      array (
        'label' => 'Size',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
      ),
      'fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Full width button',
      ),
      'grid_column_gap' => 
      array (
        'label' => 'Column Gap',
        'description' => 'Set the size of the column gap between multiple buttons.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'grid_row_gap' => 
      array (
        'label' => 'Row Gap',
        'description' => 'Set the size of the row gap between multiple buttons.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-content</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-item',
            2 => '.el-content',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Button',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'button_size',
                  1 => 'fullwidth',
                  2 => 'grid_column_gap',
                  3 => 'grid_row_gap',
                ),
              ),
              1 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'button_item' => 
  array (
    'name' => 'button_item',
    'title' => 'Item',
    'width' => 500,
    'defaults' => 
    array (
      'button_style' => 'default',
      'icon_align' => 'left',
      'dialog_layout' => 'modal',
      'dialog_offcanvas_flip' => true,
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Content',
        'source' => true,
      ),
      'icon' => 
      array (
        'label' => 'Icon',
        'description' => 'Pick an optional icon from the icon library.',
        'type' => 'icon',
        'source' => true,
      ),
      'link' => '${builder.link}',
      'link_title' => '${builder.link_title}',
      'link_aria_label' => '${builder.link_aria_label}',
      'dialog' => 
      array (
        'label' => 'Dialog',
        'description' => 'Instead of opening a link, display an alternative content in a modal or an offcanvas sidebar.',
        'type' => 'editor',
        'source' => true,
        'enable' => '!link',
      ),
      'button_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the button style.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Danger' => 'danger',
          'Text' => 'text',
          'Link' => '',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
      ),
      'icon_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Choose the icon position.',
        'type' => 'select',
        'options' => 
        array (
          'Left' => 'left',
          'Right' => 'right',
        ),
        'enable' => 'icon',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'link && !lightbox',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'link && !lightbox',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'link && !lightbox',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'link && !lightbox',
      ),
      'lightbox' => 
      array (
        'label' => 'Modal',
        'type' => 'checkbox',
        'text' => 'Enable modal window',
        'enable' => 'link',
      ),
      'image_width' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'link && lightbox',
      ),
      'image_height' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'link && lightbox',
      ),
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'link && lightbox',
      ),
      'dialog_layout' => 
      array (
        'label' => 'Target',
        'type' => 'select',
        'options' => 
        array (
          'Modal' => 'modal',
          'Offcanvas' => 'offcanvas',
        ),
        'enable' => 'dialog && !link',
      ),
      'dialog_close_large' => 
      array (
        'label' => 'Close',
        'type' => 'checkbox',
        'text' => 'Display large icon',
        'enable' => 'dialog && !link && dialog_layout',
      ),
      'dialog_close_outside' => 
      array (
        'type' => 'checkbox',
        'text' => 'Display outside',
        'enable' => 'dialog && !link && dialog_layout == \'modal\'',
      ),
      'dialog_modal_width' => 
      array (
        'label' => 'Modal Width',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Container' => 'container',
          'Expand' => 'expand',
        ),
        'enable' => 'dialog && !link && dialog_layout == \'modal\'',
      ),
      'dialog_offcanvas_flip' => 
      array (
        'label' => 'Offcanvas',
        'type' => 'checkbox',
        'text' => 'Display on the right',
        'enable' => 'dialog && !link && dialog_layout == \'offcanvas\'',
      ),
      'dialog_offcanvas_overlay' => 
      array (
        'type' => 'checkbox',
        'text' => 'Overlay the site',
        'enable' => 'dialog && !link && dialog_layout == \'offcanvas\'',
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'icon',
              2 => 'link',
              3 => 'link_title',
              4 => 'link_aria_label',
              5 => 'dialog',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Button',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'button_style',
                ),
              ),
              1 => 
              array (
                'label' => 'Icon',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'icon_align',
                ),
              ),
              2 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_target',
                  1 => 'link_download',
                  2 => 'link_rel_nofollow',
                  3 => 'link_rel_noreferrer',
                  4 => 'lightbox',
                  5 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Set the width and height for the content the link is linking to, i.e. image, video or iframe.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  6 => 'image_focal_point',
                ),
              ),
              3 => 
              array (
                'label' => 'Dialog',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'dialog_layout',
                  1 => 'dialog_close_large',
                  2 => 'dialog_close_outside',
                  3 => 'dialog_modal_width',
                  4 => 'dialog_offcanvas_flip',
                  5 => 'dialog_offcanvas_overlay',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
  ),
  'code' => 
  array (
    'name' => 'code',
    'title' => 'Code',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'editor' => 'code',
        'source' => true,
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-content</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-content',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'animation',
                  10 => '_parallax_button',
                  11 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'column' => 
  array (
    'name' => 'column',
    'title' => 'Column',
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'position_sticky_breakpoint' => 'm',
      'image_position' => 'center-center',
    ),
    'fields' => 
    array (
      'image' => 
      array (
        'label' => 'Image',
        'description' => 'Upload a background image.',
        'type' => 'image',
        'source' => true,
        'show' => '!video',
      ),
      'video' => 
      array (
        'label' => 'Video',
        'type' => 'video',
        'source' => true,
        'show' => '!image',
      ),
      '_media' => 
      array (
        'type' => 'button-panel',
        'panel' => 'builder-column-media',
        'text' => 'Edit Settings',
        'show' => 'image || video',
      ),
      'vertical_align' => 
      array (
        'label' => 'Vertical Alignment',
        'description' => 'Vertically align the elements in the column.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => '',
          'Middle' => 'middle',
          'Bottom' => 'bottom',
        ),
      ),
      'style' => 
      array (
        'label' => 'Style',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Card Default' => 'card-default',
          'Card Primary' => 'card-primary',
          'Card Secondary' => 'card-secondary',
          'Card Hover' => 'card-hover',
          'Card Overlay' => 'card-overlay',
          'Tile Default' => 'tile-default',
          'Tile Muted' => 'tile-muted',
          'Tile Primary' => 'tile-primary',
          'Tile Secondary' => 'tile-secondary',
        ),
        'source' => true,
      ),
      'preserve_color' => 
      array (
        'type' => 'checkbox',
        'text' => 'Preserve text color',
        'enable' => '$match(style, \'tile-\')',
      ),
      'background_color' => 
      array (
        'label' => 'Background Color',
        'type' => 'gradient',
        'internal' => 'background_color_gradient',
        'source' => true,
        'enable' => '!style',
      ),
      'background_color_gradient' => 
      array (
        'type' => 'hidden',
      ),
      '_background_parallax_button' => 
      array (
        'type' => 'button-panel',
        'text' => 'Edit Parallax',
        'panel' => 'background-parallax',
        'enable' => '!style',
      ),
      'border' => 
      array (
        'description' => 'Define a custom background color or a color parallax animation instead of using a predefined style.',
        'type' => 'checkbox',
        'text' => 'Round corners',
        'enable' => '!style && (background_color || background_color_gradient || background_parallax_background || image || video)',
      ),
      'text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Force a light or dark color for text, buttons and controls on the image or video background.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
        'enable' => '!style || ($match(style, \'tile-\') && (image || video))',
      ),
      'padding' => 
      array (
        'label' => 'Padding',
        'description' => 'Set the padding.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'none',
        ),
        'enable' => 'style || background_color || background_color_gradient || background_parallax_background || image || video',
      ),
      'html_element' => '${builder.html_element}',
      'position_sticky' => 
      array (
        'label' => 'Position Sticky',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Elements within Column' => 'column',
          'Column within Row' => 'row',
          'Column within Section' => 'section',
        ),
      ),
      'position_blend' => 
      array (
        'description' => 'Stick the column or its elements to the top of the viewport while scrolling down. They will stop being sticky when they reach the bottom of the containing column, row or section. Optionally, blend all elements with the page content.',
        'type' => 'checkbox',
        'text' => 'Blend with page content',
        'enable' => 'position_sticky',
      ),
      'position_sticky_offset' => 
      array (
        'label' => 'Top Offset',
        'attrs' => 
        array (
          'placeholder' => '0',
        ),
        'enable' => 'position_sticky',
      ),
      'position_sticky_offset_end' => 
      array (
        'label' => 'Bottom Offset',
        'attrs' => 
        array (
          'placeholder' => '0',
        ),
        'enable' => 'position_sticky',
      ),
      'position_sticky_breakpoint' => 
      array (
        'label' => 'Position Sticky Breakpoint',
        'description' => 'Make the column or its elements sticky only from this device width and larger.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'position_sticky',
      ),
      'prevent_collapse' => 
      array (
        'label' => 'Empty Dynamic Content',
        'description' => 'Don\'t collapse the column if dynamically loaded content is empty.',
        'type' => 'checkbox',
        'text' => 'Don\'t collapse column',
      ),
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-column</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-column',
          ),
        ),
        'source' => true,
      ),
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'image',
              1 => 'video',
              2 => '_media',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 'vertical_align',
              1 => 'style',
              2 => 'preserve_color',
              3 => 'background_color',
              4 => '_background_parallax_button',
              5 => 'border',
              6 => 'text_color',
              7 => 'padding',
              8 => 'html_element',
              9 => 'position_sticky',
              10 => 'position_blend',
              11 => 
              array (
                'description' => 'Set the sticky top offset, e.g. <code>100px</code>, <code>50vh</code> or <code>50vh - 50%</code>. Percent relates to the column\'s height. Set a bottom offset if the sticky content is larger than the viewport.',
                'name' => '_position_sticky_offset',
                'type' => 'grid',
                'width' => '1-2',
                'fields' => 
                array (
                  0 => 'position_sticky_offset',
                  1 => 'position_sticky_offset_end',
                ),
              ),
              12 => 'position_sticky_breakpoint',
              13 => 'prevent_collapse',
            ),
          ),
          2 => 
          array (
            'title' => 'Advanced',
            'fields' => 
            array (
              0 => 'source',
              1 => 'id',
              2 => 'class',
              3 => 'attributes',
              4 => 'css',
            ),
          ),
        ),
      ),
    ),
    'panels' => 
    array (
      'builder-column-media' => 
      array (
        'title' => 'Image/Video',
        'width' => 500,
        'fields' => 
        array (
          'image_width' => 
          array (
            'label' => 'Width',
            'type' => 'number',
            'attrs' => 
            array (
              'placeholder' => 'auto',
            ),
          ),
          'image_height' => 
          array (
            'label' => 'Height',
            'type' => 'number',
            'attrs' => 
            array (
              'placeholder' => 'auto',
            ),
          ),
          'media_focal_point' => 
          array (
            'label' => 'Focal Point',
            'description' => 'Set a focal point to control cropping.',
            'type' => 'select',
            'options' => 
            array (
              'Top Left' => 'top-left',
              'Top Center' => 'top-center',
              'Top Right' => 'top-right',
              'Center Left' => 'center-left',
              'Center Center' => '',
              'Center Right' => 'center-right',
              'Bottom Left' => 'bottom-left',
              'Bottom Center' => 'bottom-center',
              'Bottom Right' => 'bottom-right',
            ),
            'source' => true,
          ),
          'image_loading' => 
          array (
            'label' => 'Loading',
            'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
            'type' => 'checkbox',
            'text' => 'Load image eagerly',
          ),
          'image_size' => 
          array (
            'label' => 'Image Size',
            'description' => 'Determine whether the image will fit the section dimensions by clipping it or by filling the empty areas with the background color.',
            'type' => 'select',
            'options' => 
            array (
              'Auto' => '',
              'Cover' => 'cover',
              'Contain' => 'contain',
              'Width 100%' => 'width-1-1',
              'Height 100%' => 'height-1-1',
            ),
            'show' => 'image && !video',
          ),
          'image_position' => 
          array (
            'label' => 'Image Position',
            'description' => 'Set the initial background position, relative to the section layer.',
            'type' => 'select',
            'options' => 
            array (
              'Top Left' => 'top-left',
              'Top Center' => 'top-center',
              'Top Right' => 'top-right',
              'Center Left' => 'center-left',
              'Center Center' => 'center-center',
              'Center Right' => 'center-right',
              'Bottom Left' => 'bottom-left',
              'Bottom Center' => 'bottom-center',
              'Bottom Right' => 'bottom-right',
            ),
            'show' => 'image && !video',
          ),
          'image_effect' => 
          array (
            'label' => 'Image Effect',
            'type' => 'select',
            'options' => 
            array (
              'None' => '',
              'Parallax' => 'parallax',
              'Fixed' => 'fixed',
            ),
            'show' => 'image && !video',
          ),
          '_image_parallax_button' => 
          array (
            'description' => 'Add a parallax effect or fix the background with regard to the viewport while scrolling.',
            'type' => 'button-panel',
            'text' => 'Edit Parallax',
            'panel' => 'image-parallax',
            'show' => 'image && !video',
            'enable' => 'image_effect == \'parallax\'',
          ),
          'media_visibility' => 
          array (
            'label' => 'Visibility',
            'description' => 'Display the image or video only on this device width and larger.',
            'type' => 'select',
            'options' => 
            array (
              'Always' => '',
              'Small (Phone Landscape)' => 's',
              'Medium (Tablet Landscape)' => 'm',
              'Large (Desktop)' => 'l',
              'X-Large (Large Screens)' => 'xl',
            ),
          ),
          'media_background' => 
          array (
            'label' => 'Background Color',
            'description' => 'Use the background color in combination with blend modes, a transparent image or to fill the area, if the image doesn\'t cover the whole section.',
            'type' => 'color',
          ),
          'media_blend_mode' => 
          array (
            'label' => 'Blend Mode',
            'description' => 'Determine how the image or video will blend with the background color.',
            'type' => 'select',
            'options' => 
            array (
              'Normal' => '',
              'Multiply' => 'multiply',
              'Screen' => 'screen',
              'Overlay' => 'overlay',
              'Darken' => 'darken',
              'Lighten' => 'lighten',
              'Color-dodge' => 'color-dodge',
              'Color-burn' => 'color-burn',
              'Hard-light' => 'hard-light',
              'Soft-light' => 'soft-light',
              'Difference' => 'difference',
              'Exclusion' => 'exclusion',
              'Hue' => 'hue',
              'Saturation' => 'saturation',
              'Color' => 'color',
              'Luminosity' => 'luminosity',
            ),
          ),
          'media_overlay' => 
          array (
            'label' => 'Overlay Color',
            'type' => 'gradient',
            'internal' => 'media_overlay_gradient',
          ),
          'media_overlay_gradient' => 
          array (
            'type' => 'hidden',
          ),
          '_media_overlay_parallax_button' => 
          array (
            'description' => 'Set an additional transparent overlay to soften the image or video.',
            'type' => 'button-panel',
            'text' => 'Edit Parallax',
            'panel' => 'media-overlay-parallax',
            'enable' => 'media_overlay',
          ),
        ),
        'fieldset' => 
        array (
          'default' => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'description' => 'Set the width and height in pixels. Setting just one value preserves the original proportions. The image will be resized and cropped automatically.',
                'name' => '_image_dimension',
                'type' => 'grid',
                'width' => '1-2',
                'fields' => 
                array (
                  0 => 'image_width',
                  1 => 'image_height',
                ),
              ),
              1 => 'media_focal_point',
              2 => 'image_loading',
              3 => 'image_size',
              4 => 'image_position',
              5 => 'image_effect',
              6 => '_image_parallax_button',
              7 => 'media_visibility',
              8 => 'media_background',
              9 => 'media_blend_mode',
              10 => 'media_overlay',
              11 => '_media_overlay_parallax_button',
            ),
          ),
        ),
      ),
    ),
  ),
  'countdown' => 
  array (
    'name' => 'countdown',
    'title' => 'Countdown',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_separator' => true,
      'show_label' => true,
      'grid_column_gap' => 'small',
      'grid_row_gap' => 'small',
      'countdown_style' => 'heading-medium',
      'label_margin' => 'small',
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'date' => 
      array (
        'label' => 'Date',
        'type' => 'datetime',
        'description' => 'Enter a date for the countdown to expire.',
        'source' => true,
      ),
      'label_days' => 
      array (
        'label' => 'Labels',
        'attrs' => 
        array (
          'placeholder' => 'Days',
        ),
      ),
      'label_hours' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'Hours',
        ),
      ),
      'label_minutes' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'Minutes',
        ),
      ),
      'label_seconds' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'Seconds',
        ),
      ),
      'show_label' => 
      array (
        'description' => 'Enter labels for the countdown time.',
        'type' => 'checkbox',
        'text' => 'Show Labels',
      ),
      'reload' => 
      array (
        'label' => 'Reload',
        'description' => 'Reload the page after the countdown expires.',
        'type' => 'checkbox',
        'text' => 'Reload page when expired',
      ),
      'grid_column_gap' => 
      array (
        'label' => 'Column Gap',
        'description' => 'Set the size of the column gap between the numbers.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'grid_row_gap' => 
      array (
        'label' => 'Row Gap',
        'description' => 'Set the size of the row gap between the numbers.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'show_separator' => 
      array (
        'label' => 'Separator',
        'description' => 'Show a separator between the numbers.',
        'type' => 'checkbox',
        'text' => 'Show Separators',
      ),
      'countdown_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
      ),
      'countdown_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
      ),
      'countdown_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
      ),
      'label_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
      ),
      'label_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
      ),
      'label_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Set the margin between the countdown and the label text.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'None' => 'remove',
        ),
        'enable' => 'show_label',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'date',
              1 => 'label_days',
              2 => 'label_hours',
              3 => 'label_minutes',
              4 => 'label_seconds',
              5 => 'show_label',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Countdown',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'reload',
                  1 => 'grid_column_gap',
                  2 => 'grid_row_gap',
                  3 => 'show_separator',
                  4 => 'countdown_style',
                  5 => 'countdown_font_family',
                  6 => 'countdown_color',
                ),
              ),
              1 => 
              array (
                'label' => 'Label',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'label_style',
                  1 => 'label_color',
                  2 => 'label_margin',
                ),
              ),
              2 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'text_align',
                  10 => 'text_align_breakpoint',
                  11 => 'text_align_fallback',
                  12 => 'animation',
                  13 => '_parallax_button',
                  14 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'description_list' => 
  array (
    'name' => 'description_list',
    'title' => 'Description List',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_title' => true,
      'show_meta' => true,
      'show_content' => true,
      'show_link' => true,
      'list_element' => 'ul',
      'column_breakpoint' => 'm',
      'layout' => 'grid-2',
      'title_grid_width' => 'auto',
      'title_grid_column_gap' => 'small',
      'title_grid_row_gap' => 'small',
      'title_element' => 'div',
      'meta_style' => 'text-meta',
      'meta_align' => 'below-content',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'item' => 'description_list_item',
      ),
      'show_title' => 
      array (
        'label' => 'Display',
        'type' => 'checkbox',
        'text' => 'Show the title',
      ),
      'show_meta' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the meta text',
      ),
      'show_content' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the content',
      ),
      'show_link' => 
      array (
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the link',
      ),
      'list_marker' => 
      array (
        'label' => 'Marker',
        'description' => 'Select the marker of the list items.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Disc' => 'disc',
          'Circle' => 'circle',
          'Square' => 'square',
          'Decimal' => 'decimal',
          'Hyphen' => 'hyphen',
          'Image Bullet' => 'bullet',
        ),
      ),
      'list_marker_color' => 
      array (
        'label' => 'Marker Color',
        'description' => 'Select the color of the list markers.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
        ),
        'enable' => 'list_marker != \'bullet\'',
      ),
      'list_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select the list style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Striped' => 'striped',
        ),
      ),
      'list_size' => 
      array (
        'label' => 'Size',
        'description' => 'Define the padding between items.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'column' => 
      array (
        'label' => 'Columns',
        'description' => 'Set the number of list columns.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Halves' => '1-2',
          'Thirds' => '1-3',
          'Quarters' => '1-4',
          'Fifths' => '1-5',
          'Sixths' => '1-6',
        ),
      ),
      'column_divider' => 
      array (
        'description' => 'Show a divider between list columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'column',
      ),
      'column_breakpoint' => 
      array (
        'label' => 'Columns Breakpoint',
        'description' => 'Set the device width from which the list columns should apply.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'column',
      ),
      'list_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set whether it\'s an ordered or unordered list.',
        'type' => 'select',
        'options' => 
        array (
          'ul' => 'ul',
          'ol' => 'ol',
        ),
      ),
      'layout' => 
      array (
        'label' => 'Layout',
        'description' => 'Define the layout of the title, meta and content.',
        'type' => 'select',
        'options' => 
        array (
          '2 Column Grid' => 'grid-2',
          '2 Column Grid (Meta only)' => 'grid-2-m',
          'Stacked' => 'stacked',
        ),
      ),
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select the title style and add an optional colon at the end of the title.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Bold' => 'text-bold',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_title',
      ),
      'title_colon' => 
      array (
        'type' => 'checkbox',
        'text' => 'Add a colon',
        'enable' => 'show_title',
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
        'enable' => 'show_title',
      ),
      'title_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
        'enable' => 'show_title',
      ),
      'title_grid_width' => 
      array (
        'label' => 'Grid Width',
        'description' => 'Define the width of the title within the grid.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => 'auto',
          'Small' => 'small',
          'Medium' => 'medium',
          'Expand' => 'expand',
        ),
        'enable' => 'show_title && layout != \'stacked\'',
      ),
      'title_leader' => 
      array (
        'type' => 'checkbox',
        'text' => 'Add a leader',
        'enable' => 'layout == \'grid-2-m\' && title_grid_width == \'expand\'',
      ),
      'title_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between the title and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'show_title && layout != \'stacked\'',
      ),
      'title_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'show_title && layout != \'stacked\'',
      ),
      'title_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'show_title && layout != \'stacked\'',
      ),
      'title_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_title',
      ),
      'meta_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined meta text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_meta',
      ),
      'meta_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_meta',
      ),
      'meta_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the meta text.',
        'type' => 'select',
        'options' => 
        array (
          'Above Title' => 'above-title',
          'Below Title' => 'below-title',
          'Above Content' => 'above-content',
          'Below Content' => 'below-content',
        ),
        'enable' => 'show_meta && layout != \'grid-2-m\'',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_content',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'This option doesn\'t apply unless a URL has been added to the item. Only the item content will be linked.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Text' => 'text',
          'Reset' => 'reset',
        ),
        'enable' => 'show_link',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-item',
            2 => '.el-title',
            3 => '.el-meta',
            4 => '.el-content',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'show_title',
              2 => 'show_meta',
              3 => 'show_content',
              4 => 'show_link',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'List',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'list_marker',
                  1 => 'list_marker_color',
                  2 => 'list_style',
                  3 => 'list_size',
                  4 => 'column',
                  5 => 'column_divider',
                  6 => 'column_breakpoint',
                  7 => 'list_element',
                ),
              ),
              1 => 
              array (
                'label' => 'List Item',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'layout',
                ),
              ),
              2 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_style',
                  1 => 'title_colon',
                  2 => 'title_font_family',
                  3 => 'title_color',
                  4 => 'title_grid_width',
                  5 => 'title_leader',
                  6 => 'title_grid_column_gap',
                  7 => 'title_grid_row_gap',
                  8 => 'title_grid_breakpoint',
                  9 => 'title_element',
                ),
              ),
              3 => 
              array (
                'label' => 'Meta',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'meta_style',
                  1 => 'meta_color',
                  2 => 'meta_align',
                ),
              ),
              4 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_style',
                ),
              ),
              5 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_style',
                ),
              ),
              6 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'description_list_item' => 
  array (
    'name' => 'description_list_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'meta' => 
      array (
        'label' => 'Meta',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'link' => '${builder.link}',
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'link',
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'title',
              1 => 'meta',
              2 => 'content',
              3 => 'link',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'link_target',
                  1 => 'link_download',
                  2 => 'link_rel_nofollow',
                  3 => 'link_rel_noreferrer',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
  ),
  'divider' => 
  array (
    'name' => 'divider',
    'title' => 'Divider',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'divider_element' => 'hr',
    ),
    'fields' => 
    array (
      'divider_style' => 
      array (
        'label' => 'Style',
        'description' => 'Choose a divider style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Icon' => 'icon',
          'Small' => 'small',
          'Vertical' => 'vertical',
        ),
      ),
      'divider_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set a thematic break between paragraphs or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'hr' => 'hr',
          'div' => 'div',
        ),
      ),
      'divider_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Center, left and right alignment may depend on a breakpoint and require a fallback.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Left' => 'left',
          'Center' => 'center',
          'Right' => 'right',
        ),
        'enable' => 'divider_style == \'small\'',
      ),
      'divider_align_breakpoint' => 
      array (
        'label' => 'Alignment Breakpoint',
        'description' => 'Define the device width from which the alignment will apply.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'divider_style == \'small\' && divider_align',
      ),
      'divider_align_fallback' => 
      array (
        'label' => 'Alignment Fallback',
        'description' => 'Define an alignment fallback for device widths below the breakpoint.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Left' => 'left',
          'Center' => 'center',
          'Right' => 'right',
        ),
        'enable' => 'divider_style == \'small\' && divider_align && divider_align_breakpoint',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Divider',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'divider_style',
                  1 => 'divider_element',
                  2 => 'divider_align',
                  3 => 'divider_align_breakpoint',
                  4 => 'divider_align_fallback',
                ),
              ),
              1 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'animation',
                  15 => '_parallax_button',
                  16 => 'visibility',
                ),
              ),
            ),
          ),
          1 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'fragment' => 
  array (
    'name' => 'fragment',
    'title' => 'Sublayout',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'fragment' => true,
    'width' => 500,
    'defaults' => 
    array (
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'type' => 'builder-fragment',
      ),
      'html_element' => '${builder.html_element}',
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
          ),
        ),
        'source' => true,
      ),
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Sublayout',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'html_element',
                ),
              ),
              1 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'animation',
                  10 => '_parallax_button',
                  11 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'gallery' => 
  array (
    'name' => 'gallery',
    'title' => 'Gallery',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_title' => true,
      'show_meta' => true,
      'show_content' => true,
      'show_link' => true,
      'show_hover_image' => true,
      'show_hover_video' => true,
      'grid_default' => '1',
      'grid_medium' => '3',
      'filter_style' => 'tab',
      'filter_all' => true,
      'filter_position' => 'top',
      'filter_align' => 'left',
      'filter_grid_width' => 'auto',
      'filter_grid_breakpoint' => 'm',
      'lightbox_bg_close' => true,
      'overlay_mode' => 'cover',
      'overlay_hover' => true,
      'overlay_style' => 'overlay-primary',
      'overlay_position' => 'center',
      'text_color' => 'light',
      'overlay_transition' => 'fade',
      'title_hover_style' => 'reset',
      'title_element' => 'h3',
      'meta_style' => 'text-meta',
      'meta_align' => 'below-title',
      'meta_element' => 'div',
      'link_text' => 'Read more',
      'link_style' => 'default',
      'text_align' => 'center',
      'margin_top' => 'default',
      'margin_bottom' => 'default',
      'item_animation' => true,
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'item' => 'gallery_item',
        'media' => 
        array (
          0 => 
          array (
            'type' => 'image',
            'item' => 
            array (
              'title' => 'title',
              'image' => 'src',
            ),
          ),
          1 => 
          array (
            'type' => 'video',
            'item' => 
            array (
              'title' => 'title',
              'video' => 'src',
            ),
          ),
        ),
      ),
      'show_title' => 
      array (
        'label' => 'Display',
        'type' => 'checkbox',
        'text' => 'Show the title',
      ),
      'show_meta' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the meta text',
      ),
      'show_content' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the content',
      ),
      'show_link' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the link',
      ),
      'show_hover_image' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the hover image',
      ),
      'show_hover_video' => 
      array (
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the hover video',
      ),
      'grid_masonry' => 
      array (
        'label' => 'Masonry',
        'description' => 'Create a gap-free masonry layout if grid items have different heights. Pack items into columns with the most room or show them in their natural order. Optionally, use a parallax animation to move columns while scrolling until they justify at the bottom.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Pack' => 'pack',
          'Next' => 'next',
        ),
      ),
      'grid_parallax' => 
      array (
        'label' => 'Parallax',
        'description' => 'The parallax animation moves single grid columns at different speeds while scrolling. Define the vertical parallax offset in pixels. Alternatively, move columns with different heights until they justify at the bottom.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 0,
          'max' => 600,
          'step' => 10,
        ),
      ),
      'grid_parallax_justify' => 
      array (
        'type' => 'checkbox',
        'text' => 'Justify columns at the bottom',
      ),
      'grid_parallax_start' => 
      array (
        'enable' => 'grid_parallax || grid_parallax_justify',
      ),
      'grid_parallax_end' => 
      array (
        'enable' => 'grid_parallax || grid_parallax_justify',
      ),
      'grid_column_gap' => 
      array (
        'label' => 'Column Gap',
        'description' => 'Set the size of the gap between the grid columns.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'grid_row_gap' => 
      array (
        'label' => 'Row Gap',
        'description' => 'Set the size of the gap between the grid rows.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'grid_divider' => 
      array (
        'label' => 'Divider',
        'description' => 'Show a divider between grid columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'grid_column_gap != \'collapse\' && grid_row_gap != \'collapse\'',
      ),
      'grid_column_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Center grid columns horizontally and rows vertically.',
        'type' => 'checkbox',
        'text' => 'Center columns',
        'enable' => '!grid_masonry && !grid_parallax && !grid_parallax_justify',
      ),
      'grid_row_align' => 
      array (
        'type' => 'checkbox',
        'text' => 'Center rows',
        'enable' => '!grid_masonry && !grid_parallax && !grid_parallax_justify',
      ),
      'grid_default' => 
      array (
        'label' => 'Phone Portrait',
        'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size. <i>Auto</i> expands the columns to the width of their items filling the rows accordingly.',
        'type' => 'select',
        'options' => 
        array (
          '1 Column' => '1',
          '2 Columns' => '2',
          '3 Columns' => '3',
          '4 Columns' => '4',
          '5 Columns' => '5',
          '6 Columns' => '6',
          'Auto' => 'auto',
        ),
      ),
      'grid_small' => 
      array (
        'label' => 'Phone Landscape',
        'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size. <i>Auto</i> expands the columns to the width of their items filling the rows accordingly.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '1 Column' => '1',
          '2 Columns' => '2',
          '3 Columns' => '3',
          '4 Columns' => '4',
          '5 Columns' => '5',
          '6 Columns' => '6',
          'Auto' => 'auto',
        ),
      ),
      'grid_medium' => 
      array (
        'label' => 'Tablet Landscape',
        'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size. <i>Auto</i> expands the columns to the width of their items filling the rows accordingly.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '1 Column' => '1',
          '2 Columns' => '2',
          '3 Columns' => '3',
          '4 Columns' => '4',
          '5 Columns' => '5',
          '6 Columns' => '6',
          'Auto' => 'auto',
        ),
      ),
      'grid_large' => 
      array (
        'label' => 'Desktop',
        'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size. <i>Auto</i> expands the columns to the width of their items filling the rows accordingly.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '1 Column' => '1',
          '2 Columns' => '2',
          '3 Columns' => '3',
          '4 Columns' => '4',
          '5 Columns' => '5',
          '6 Columns' => '6',
          'Auto' => 'auto',
        ),
      ),
      'grid_xlarge' => 
      array (
        'label' => 'Large Screens',
        'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size. <i>Auto</i> expands the columns to the width of their items filling the rows accordingly.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '1 Column' => '1',
          '2 Columns' => '2',
          '3 Columns' => '3',
          '4 Columns' => '4',
          '5 Columns' => '5',
          '6 Columns' => '6',
          'Auto' => 'auto',
        ),
      ),
      'filter' => 
      array (
        'label' => 'Filter',
        'type' => 'checkbox',
        'text' => 'Enable filter navigation',
      ),
      'filter_animation' => 
      array (
        'label' => 'Animation',
        'description' => 'Select an animation that will be applied to the content items when filtering between them.',
        'type' => 'select',
        'options' => 
        array (
          'None' => 'false',
          'Slide' => '',
          'Fade' => 'fade',
          'Delayed Fade' => 'delayed-fade',
        ),
        'enable' => 'filter',
      ),
      'filter_order' => 
      array (
        'label' => 'Navigation Order',
        'description' => 'Order the filter navigation alphabetically or by defining the order manually.',
        'type' => 'select',
        'options' => 
        array (
          'Alphabetical' => '',
          'Manual' => 'manual',
        ),
        'enable' => 'filter',
      ),
      'filter_reverse' => 
      array (
        'type' => 'checkbox',
        'text' => 'Reverse order',
        'enable' => 'filter',
      ),
      'filter_order_manual' => 
      array (
        'label' => 'Manual Order',
        'description' => 'Enter a comma-separated list of tags to manually order the filter navigation.',
        'enable' => 'filter && filter_order == \'manual\'',
      ),
      'filter_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select the filter navigation style. The pill and divider styles are only available for horizontal Subnavs.',
        'type' => 'select',
        'options' => 
        array (
          'Tabs' => 'tab',
          'Subnav (Nav)' => 'subnav',
          'Subnav Divider (Nav)' => 'subnav-divider',
          'Subnav Pill (Nav)' => 'subnav-pill',
        ),
        'enable' => 'filter',
      ),
      'filter_all' => 
      array (
        'label' => 'All Items',
        'type' => 'checkbox',
        'text' => 'Show filter control for all items',
        'enable' => 'filter',
      ),
      'filter_all_label' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'All',
        ),
        'enable' => 'filter && filter_all',
      ),
      'filter_position' => 
      array (
        'label' => 'Position',
        'description' => 'Position the filter navigation at the top, left or right. A larger style can be applied to left and right navigation.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Left' => 'left',
          'Right' => 'right',
        ),
        'enable' => 'filter',
      ),
      'filter_style_primary' => 
      array (
        'type' => 'checkbox',
        'text' => 'Primary navigation',
        'enable' => 'filter && $match(filter_position, \'left|right\') && $match(filter_style, \'^subnav\')',
      ),
      'filter_wrap' => 
      array (
        'label' => 'Wrap',
        'description' => 'Set whether filter items are forced into one line or can wrap into multiple lines.',
        'type' => 'checkbox',
        'text' => 'Don\'t wrap into multiple lines',
        'enable' => 'filter',
      ),
      'filter_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the filter controls.',
        'type' => 'select',
        'options' => 
        array (
          'Left' => 'left',
          'Right' => 'right',
          'Center' => 'center',
          'Justify' => 'justify',
        ),
        'enable' => 'filter && filter_position == \'top\'',
      ),
      'filter_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Set the vertical margin.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => 'filter && filter_position == \'top\'',
      ),
      'filter_grid_width' => 
      array (
        'label' => 'Grid Width',
        'description' => 'Define the width of the filter navigation. Choose between percent and fixed widths or expand columns to the width of their content.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => 'auto',
          '50%' => '1-2',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'enable' => 'filter && $match(filter_position, \'left|right\')',
      ),
      'filter_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between between the filter navigation and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'filter && $match(filter_position, \'left|right\')',
      ),
      'filter_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'filter && $match(filter_position, \'left|right\')',
      ),
      'filter_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'filter && $match(filter_position, \'left|right\')',
      ),
      'lightbox' => 
      array (
        'label' => 'Lightbox',
        'type' => 'checkbox',
        'text' => 'Enable lightbox gallery',
      ),
      'lightbox_controls' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show controls always',
        'enable' => 'lightbox',
      ),
      'lightbox_counter' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show counter',
        'enable' => 'lightbox',
      ),
      'lightbox_bg_close' => 
      array (
        'type' => 'checkbox',
        'text' => 'Close on background click',
        'enable' => 'lightbox',
      ),
      'lightbox_animation' => 
      array (
        'label' => 'Animation',
        'description' => 'Select the transition between two slides.',
        'type' => 'select',
        'options' => 
        array (
          'Slide' => '',
          'Fade' => 'fade',
          'Scale' => 'scale',
        ),
        'enable' => 'lightbox',
      ),
      'lightbox_nav' => 
      array (
        'label' => 'Navigation',
        'description' => 'Select the navigation type.',
        'type' => 'select',
        'options' => 
        array (
          'Slidenav' => '',
          'Dotnav' => 'dotnav',
          'Thumbnav' => 'thumbnav',
        ),
        'enable' => 'lightbox',
      ),
      'lightbox_image_width' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'lightbox',
      ),
      'lightbox_image_height' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'lightbox',
      ),
      'lightbox_image_orientation' => 
      array (
        'label' => 'Image Orientation',
        'description' => 'Width and height will be flipped accordingly, if the image is in portrait or landscape format.',
        'type' => 'checkbox',
        'text' => 'Allow mixed image orientations',
        'enable' => 'lightbox',
      ),
      'lightbox_video_autoplay' => 
      array (
        'label' => 'Video Mode',
        'description' => 'Enable autoplay or use the video like an animated image (autoplay, loop, no controls and muted).',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Autoplay' => 'true',
          'Animated Image' => 'inline',
        ),
        'enable' => 'lightbox',
      ),
      'lightbox_text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
        'enable' => 'lightbox',
      ),
      'title_display' => 
      array (
        'label' => 'Show Title',
        'description' => 'Display the title inside the overlay, as the lightbox caption or both.',
        'type' => 'select',
        'options' => 
        array (
          'Overlay + Lightbox' => '',
          'Overlay only' => 'item',
          'Lightbox only' => 'lightbox',
        ),
        'enable' => 'show_title && lightbox',
      ),
      'content_display' => 
      array (
        'label' => 'Show Content',
        'description' => 'Display the content inside the overlay, as the lightbox caption or both.',
        'type' => 'select',
        'options' => 
        array (
          'Overlay + Lightbox' => '',
          'Overlay only' => 'item',
          'Lightbox only' => 'lightbox',
        ),
        'enable' => 'show_content && lightbox',
      ),
      'image_expand' => 
      array (
        'label' => 'Height',
        'description' => 'Expand the height of the image to fill the available space in the item.',
        'type' => 'checkbox',
        'text' => 'Expand image',
        'enable' => '!grid_masonry',
      ),
      'overlay_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the whole overlay if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link overlay',
        'enable' => 'show_link',
      ),
      'item_maxwidth' => 
      array (
        'type' => 'select',
        'label' => 'Max Width',
        'description' => 'Set the maximum width.',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
      ),
      'overlay_mode' => 
      array (
        'label' => 'Mode',
        'description' => 'When using cover mode, you need to set the text color manually.',
        'type' => 'select',
        'options' => 
        array (
          'Cover' => 'cover',
          'Caption' => 'caption',
        ),
      ),
      'overlay_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Display overlay on hover',
      ),
      'overlay_transition_background' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate background only',
        'enable' => 'overlay_hover && overlay_mode == \'cover\' && overlay_style',
      ),
      'overlay_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select the style for the overlay.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Overlay Default' => 'overlay-default',
          'Overlay Primary' => 'overlay-primary',
          'Tile Default' => 'tile-default',
          'Tile Muted' => 'tile-muted',
          'Tile Primary' => 'tile-primary',
          'Tile Secondary' => 'tile-secondary',
        ),
      ),
      'overlay_position' => 
      array (
        'label' => 'Position',
        'description' => 'Select the overlay or content position.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Bottom' => 'bottom',
          'Left' => 'left',
          'Right' => 'right',
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
          'Center' => 'center',
          'Center Left' => 'center-left',
          'Center Right' => 'center-right',
        ),
      ),
      'overlay_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Apply a margin between the overlay and the image container.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'enable' => 'overlay_style',
      ),
      'overlay_padding' => 
      array (
        'label' => 'Padding',
        'description' => 'Set the padding between the overlay and its content.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Small' => 'small',
          'Large' => 'large',
          'None' => 'none',
        ),
      ),
      'overlay_maxwidth' => 
      array (
        'label' => 'Max Width',
        'description' => 'Set the maximum content width.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
        'enable' => '!$match(overlay_position, \'^(top|bottom)$\')',
      ),
      'text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
      ),
      'text_color_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Inverse the text color on hover',
        'enable' => '!overlay_style && (show_hover_image || show_hover_video) || overlay_style && overlay_mode == \'cover\' && overlay_hover && overlay_transition_background',
      ),
      'text_blend' => 
      array (
        'type' => 'checkbox',
        'text' => 'Blend with image',
        'enable' => '!overlay_style',
      ),
      'overlay_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the overlay when it appears on hover.',
        'type' => 'select',
        'options' => 
        array (
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'overlay_hover',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_orientation' => 
      array (
        'label' => 'Image Orientation',
        'description' => 'Landscape and portrait images are centered within the grid cells. Width and height will be flipped when images are resized.',
        'type' => 'checkbox',
        'text' => 'Allow mixed image orientations',
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
      ),
      'image_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select an image transition. If the hover image is set, the transition takes place between the two images. If <i>None</i> is selected, the hover image fades in.',
        'type' => 'select',
        'options' => 
        array (
          'None (Fade if hover image)' => '',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
        ),
      ),
      'image_transition_border' => 
      array (
        'type' => 'checkbox',
        'text' => 'Border',
      ),
      'image_min_height' => 
      array (
        'label' => 'Min Height',
        'description' => 'Use an optional minimum height to prevent images from becoming smaller than the content on small devices.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 200,
          'max' => 500,
          'step' => 20,
        ),
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => '!image_transition_border && !image_box_decoration',
      ),
      'image_box_shadow' => 
      array (
        'label' => 'Box Shadow',
        'description' => 'Select the image box shadow size.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
      ),
      'image_hover_box_shadow' => 
      array (
        'label' => 'Hover Box Shadow',
        'description' => 'Select the image box shadow size on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
      ),
      'image_box_decoration' => 
      array (
        'label' => 'Box Decoration',
        'description' => 'Select the image box decoration style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Floating Shadow' => 'shadow',
          'Mask' => 'mask',
        ),
      ),
      'image_box_decoration_inverse' => 
      array (
        'type' => 'checkbox',
        'text' => 'Inverse style',
        'enable' => '$match(image_box_decoration, \'^(default|primary|secondary)$\')',
      ),
      'media_background' => '${builder.media_background}',
      'media_blend_mode' => '${builder.media_blend_mode}',
      'media_overlay' => '${builder.media_overlay}',
      'media_overlay_gradient' => '${builder.media_overlay_gradient}',
      'video_autoplay' => 
      array (
        'label' => 'Video Autoplay',
        'description' => 'Enable autoplay immediately, start as soon as the video enters the viewport or only on hover.',
        'type' => 'select',
        'options' => 
        array (
          'On' => '',
          'Inview' => 'inview',
          'Hover' => 'hover',
        ),
      ),
      'video_autoplay_restart' => 
      array (
        'type' => 'checkbox',
        'text' => 'Restart from beginning',
        'enable' => 'video_autoplay',
      ),
      'title_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the title when the overlay appears on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'show_title && overlay_hover && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the title if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link title',
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox) && show_link',
      ),
      'title_hover_style' => 
      array (
        'label' => 'Hover Style',
        'description' => 'Set the hover style for a linked title.',
        'type' => 'select',
        'options' => 
        array (
          'None' => 'reset',
          'Heading Link' => 'heading',
          'Default Link' => '',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox) && show_link && (title_link || overlay_link)',
      ),
      'title_decoration' => 
      array (
        'label' => 'Decoration',
        'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Bullet' => 'bullet',
          'Line' => 'line',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'meta_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the meta text when the overlay appears on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'show_meta && overlay_hover',
      ),
      'meta_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined meta text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_meta',
      ),
      'meta_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_meta',
      ),
      'meta_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the meta text.',
        'type' => 'select',
        'options' => 
        array (
          'Above Title' => 'above-title',
          'Below Title' => 'below-title',
          'Below Content' => 'below-content',
        ),
        'enable' => 'show_meta',
      ),
      'meta_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_meta',
      ),
      'meta_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_meta',
      ),
      'meta_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_meta',
      ),
      'content_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the content when the overlay appears on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'show_content && overlay_hover && (content_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_content && (content_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'content_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_content && (content_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'content_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_content && (content_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'link_text' => 
      array (
        'label' => 'Text',
        'description' => 'Enter the text for the link.',
        'enable' => 'show_link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'ARIA Label',
        'description' => 'Enter a descriptive text label to make it accessible if the link has no visible text.',
        'enable' => 'show_link',
      ),
      'link_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the link when the overlay appears on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'show_link && overlay_hover',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'show_link && !lightbox',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'show_link && !lightbox',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'show_link && !lightbox',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'show_link && !lightbox',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link' => '',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
        'enable' => 'show_link',
      ),
      'link_size' => 
      array (
        'label' => 'Button Size',
        'description' => 'Set the button size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Full width button',
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_link',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      'item_animation' => '${builder.item_animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'container_padding_remove' => '${builder.container_padding_remove}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-nav</code>, <code>.el-item</code>, <code>.el-image</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-link</code>, <code>.el-hover-image</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-nav',
            2 => '.el-item',
            3 => '.el-image',
            4 => '.el-title',
            5 => '.el-meta',
            6 => '.el-content',
            7 => '.el-link',
            8 => '.el-hover-image',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'show_title',
              2 => 'show_meta',
              3 => 'show_content',
              4 => 'show_link',
              5 => 'show_hover_image',
              6 => 'show_hover_video',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Gallery',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'grid_masonry',
                  1 => 'grid_parallax',
                  2 => 'grid_parallax_justify',
                  3 => 
                  array (
                    'label' => 'Parallax Start/End',
                    'description' => 'The animation starts when the element enters the viewport and ends when it leaves the viewport. Optionally, set a start and end offset, e.g. <code>100px</code>, <code>50vh</code> or <code>50vh + 50%</code>. Percent relates to the element\'s height.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'grid_parallax_start',
                      1 => 'grid_parallax_end',
                    ),
                  ),
                  4 => 'grid_column_gap',
                  5 => 'grid_row_gap',
                  6 => 'grid_divider',
                  7 => 'grid_column_align',
                  8 => 'grid_row_align',
                ),
              ),
              1 => 
              array (
                'label' => 'Columns',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'grid_default',
                  1 => 'grid_small',
                  2 => 'grid_medium',
                  3 => 'grid_large',
                  4 => 'grid_xlarge',
                ),
              ),
              2 => 
              array (
                'label' => 'Filter',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'filter',
                  1 => 'filter_animation',
                  2 => 'filter_order',
                  3 => 'filter_reverse',
                  4 => 'filter_order_manual',
                  5 => 'filter_style',
                  6 => 'filter_all',
                  7 => 'filter_all_label',
                  8 => 'filter_position',
                  9 => 'filter_style_primary',
                  10 => 'filter_wrap',
                  11 => 'filter_align',
                  12 => 'filter_margin',
                  13 => 'filter_grid_width',
                  14 => 'filter_grid_column_gap',
                  15 => 'filter_grid_row_gap',
                  16 => 'filter_grid_breakpoint',
                ),
              ),
              3 => 
              array (
                'label' => 'Lightbox',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'lightbox',
                  1 => 'lightbox_controls',
                  2 => 'lightbox_counter',
                  3 => 'lightbox_bg_close',
                  4 => 'lightbox_animation',
                  5 => 'lightbox_nav',
                  6 => 
                  array (
                    'label' => 'Image Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'lightbox_image_width',
                      1 => 'lightbox_image_height',
                    ),
                  ),
                  7 => 'lightbox_image_orientation',
                  8 => 'lightbox_video_autoplay',
                  9 => 'lightbox_text_color',
                  10 => 'title_display',
                  11 => 'content_display',
                ),
              ),
              4 => 
              array (
                'label' => 'Item',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'image_expand',
                  1 => 'overlay_link',
                  2 => 'item_maxwidth',
                ),
              ),
              5 => 
              array (
                'label' => 'Overlay',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'overlay_mode',
                  1 => 'overlay_hover',
                  2 => 'overlay_transition_background',
                  3 => 'overlay_style',
                  4 => 'overlay_position',
                  5 => 'overlay_margin',
                  6 => 'overlay_padding',
                  7 => 'overlay_maxwidth',
                  8 => 'text_color',
                  9 => 'text_color_hover',
                  10 => 'text_blend',
                  11 => 'overlay_transition',
                ),
              ),
              6 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_orientation',
                  2 => 'image_loading',
                  3 => 'image_transition',
                  4 => 'image_transition_border',
                  5 => 'image_min_height',
                  6 => 'image_border',
                  7 => 'image_box_shadow',
                  8 => 'image_hover_box_shadow',
                  9 => 'image_box_decoration',
                  10 => 'image_box_decoration_inverse',
                  11 => 'media_background',
                  12 => 'media_blend_mode',
                  13 => 'media_overlay',
                  14 => 'video_autoplay',
                  15 => 'video_autoplay_restart',
                ),
              ),
              7 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_transition',
                  1 => 'title_style',
                  2 => 'title_link',
                  3 => 'title_hover_style',
                  4 => 'title_decoration',
                  5 => 'title_font_family',
                  6 => 'title_color',
                  7 => 'title_element',
                  8 => 'title_margin',
                  9 => 'title_margin_auto',
                ),
              ),
              8 => 
              array (
                'label' => 'Meta',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'meta_transition',
                  1 => 'meta_style',
                  2 => 'meta_color',
                  3 => 'meta_align',
                  4 => 'meta_element',
                  5 => 'meta_margin',
                  6 => 'meta_margin_auto',
                ),
              ),
              9 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_transition',
                  1 => 'content_style',
                  2 => 'content_margin',
                  3 => 'content_margin_auto',
                ),
              ),
              10 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_text',
                  1 => 'link_aria_label',
                  2 => 'link_transition',
                  3 => 'link_target',
                  4 => 'link_download',
                  5 => 'link_rel_nofollow',
                  6 => 'link_rel_noreferrer',
                  7 => 'link_style',
                  8 => 'link_size',
                  9 => 'link_fullwidth',
                  10 => 'link_margin',
                ),
              ),
              11 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => 'item_animation',
                  19 => '_parallax_button',
                  20 => 'visibility',
                  21 => 'container_padding_remove',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'gallery_item' => 
  array (
    'name' => 'gallery_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'image',
        'source' => true,
        'show' => '!video',
        'altRef' => '%name%_alt',
      ),
      'video' => 
      array (
        'label' => 'Video',
        'type' => 'video',
        'source' => true,
        'show' => '!image',
      ),
      '_media' => 
      array (
        'type' => 'button-panel',
        'panel' => 'builder-gallery-item-media',
        'text' => 'Edit Settings',
        'show' => 'image || video',
      ),
      'image_alt' => 
      array (
        'label' => 'Image Alt',
        'source' => true,
        'show' => 'image && !video',
      ),
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'meta' => 
      array (
        'label' => 'Meta',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'link' => '${builder.link}',
      'link_text' => 
      array (
        'label' => 'Link Text',
        'description' => 'Set a different link text for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'Link ARIA Label',
        'description' => 'Set a different link ARIA label for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'hover_image' => 
      array (
        'label' => 'Hover Image',
        'description' => 'Select an optional image that appears on hover.',
        'type' => 'image',
        'source' => true,
        'show' => '!hover_video',
      ),
      'hover_video' => 
      array (
        'label' => 'Hover Video',
        'description' => 'Select an optional video that appears on hover.',
        'type' => 'video',
        'source' => true,
        'show' => '!hover_image',
      ),
      'tags' => 
      array (
        'label' => 'Tags',
        'description' => 'Enter a comma-separated list of tags, for example, <code>blue, white, black</code>.',
        'source' => true,
      ),
      'item_element' => '${builder.html_element_item}',
      'text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set a different text color for this item.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
      ),
      'text_color_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Inverse the text color on hover',
      ),
      'lightbox_image_focal_point' => 
      array (
        'label' => 'Image Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'lightbox_text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
      ),
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'hover_image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'image',
              1 => 'video',
              2 => '_media',
              3 => 'image_alt',
              4 => 'title',
              5 => 'meta',
              6 => 'content',
              7 => 'link',
              8 => 'link_text',
              9 => 'link_aria_label',
              10 => 'hover_image',
              11 => 'hover_video',
              12 => 'tags',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Item',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'item_element',
                ),
              ),
              1 => 
              array (
                'label' => 'Overlay',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'text_color',
                  1 => 'text_color_hover',
                ),
              ),
              2 => 
              array (
                'label' => 'Lightbox',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'lightbox_image_focal_point',
                  1 => 'lightbox_text_color',
                ),
              ),
              3 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'image_focal_point',
                ),
              ),
              4 => 
              array (
                'label' => 'Hover Image',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'hover_image_focal_point',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
    'panels' => 
    array (
      'builder-gallery-item-media' => 
      array (
        'title' => 'Media',
        'width' => 500,
        'fields' => 
        array (
          'media_background' => '${builder.media_background}',
          'media_blend_mode' => '${builder.media_blend_mode}',
          'media_overlay' => '${builder.media_overlay}',
          'media_overlay_gradient' => '${builder.media_overlay_gradient}',
        ),
        'fieldset' => 
        array (
          'default' => 
          array (
            'fields' => 
            array (
              0 => 'media_background',
              1 => 'media_blend_mode',
              2 => 'media_overlay',
            ),
          ),
        ),
      ),
    ),
  ),
  'grid' => 
  array (
    'name' => 'grid',
    'title' => 'Grid',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_title' => true,
      'show_meta' => true,
      'show_content' => true,
      'show_image' => true,
      'show_video' => true,
      'show_link' => true,
      'show_hover_image' => true,
      'show_hover_video' => true,
      'grid_default' => '1',
      'grid_medium' => '3',
      'filter_style' => 'tab',
      'filter_all' => true,
      'filter_position' => 'top',
      'filter_align' => 'left',
      'filter_grid_width' => 'auto',
      'filter_grid_breakpoint' => 'm',
      'lightbox_bg_close' => true,
      'title_hover_style' => 'reset',
      'title_element' => 'h3',
      'title_align' => 'top',
      'title_grid_width' => '1-2',
      'title_grid_breakpoint' => 'm',
      'meta_style' => 'text-meta',
      'meta_align' => 'below-title',
      'meta_element' => 'div',
      'content_column_breakpoint' => 'm',
      'image_align' => 'top',
      'image_grid_width' => '1-2',
      'image_grid_breakpoint' => 'm',
      'image_svg_color' => 'emphasis',
      'link_text' => 'Read more',
      'link_style' => 'default',
      'margin_top' => 'default',
      'margin_bottom' => 'default',
      'item_animation' => true,
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'item' => 'grid_item',
        'media' => 
        array (
          0 => 
          array (
            'type' => 'image',
            'item' => 
            array (
              'title' => 'title',
              'image' => 'src',
            ),
          ),
          1 => 
          array (
            'type' => 'video',
            'item' => 
            array (
              'title' => 'title',
              'video' => 'src',
            ),
          ),
        ),
      ),
      'show_title' => 
      array (
        'label' => 'Display',
        'type' => 'checkbox',
        'text' => 'Show the title',
      ),
      'show_meta' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the meta text',
      ),
      'show_content' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the content',
      ),
      'show_image' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the image',
      ),
      'show_video' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the video',
      ),
      'show_link' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the link',
      ),
      'show_hover_image' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the hover image',
      ),
      'show_hover_video' => 
      array (
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the hover video',
      ),
      'grid_masonry' => 
      array (
        'label' => 'Masonry',
        'description' => 'Create a gap-free masonry layout if grid items have different heights. Pack items into columns with the most room or show them in their natural order. Optionally, use a parallax animation to move columns while scrolling until they justify at the bottom.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Pack' => 'pack',
          'Next' => 'next',
        ),
      ),
      'grid_parallax' => 
      array (
        'label' => 'Parallax',
        'description' => 'The parallax animation moves single grid columns at different speeds while scrolling. Define the vertical parallax offset in pixels. Alternatively, move columns with different heights until they justify at the bottom.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 0,
          'max' => 600,
          'step' => 10,
        ),
      ),
      'grid_parallax_justify' => 
      array (
        'type' => 'checkbox',
        'text' => 'Justify columns at the bottom',
      ),
      'grid_parallax_start' => 
      array (
        'enable' => 'grid_parallax || grid_parallax_justify',
      ),
      'grid_parallax_end' => 
      array (
        'enable' => 'grid_parallax || grid_parallax_justify',
      ),
      'grid_column_gap' => 
      array (
        'label' => 'Column Gap',
        'description' => 'Set the size of the gap between the grid columns.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'grid_row_gap' => 
      array (
        'label' => 'Row Gap',
        'description' => 'Set the size of the gap between the grid rows.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'grid_divider' => 
      array (
        'label' => 'Divider',
        'description' => 'Show a divider between grid columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'grid_column_gap != \'collapse\' && grid_row_gap != \'collapse\'',
      ),
      'grid_column_align' => 
      array (
        'label' => 'Alignment',
        'type' => 'checkbox',
        'text' => 'Center columns',
        'enable' => '!grid_masonry && !grid_parallax && !grid_parallax_justify',
      ),
      'grid_row_align' => 
      array (
        'description' => 'Center grid columns horizontally and rows vertically.',
        'type' => 'checkbox',
        'text' => 'Center rows',
        'enable' => '!grid_masonry && !grid_parallax && !grid_parallax_justify',
      ),
      'grid_default' => 
      array (
        'label' => 'Phone Portrait',
        'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size. <i>Auto</i> expands the columns to the width of their items filling the rows accordingly.',
        'type' => 'select',
        'options' => 
        array (
          '1 Column' => '1',
          '2 Columns' => '2',
          '3 Columns' => '3',
          '4 Columns' => '4',
          '5 Columns' => '5',
          '6 Columns' => '6',
          'Auto' => 'auto',
        ),
      ),
      'grid_small' => 
      array (
        'label' => 'Phone Landscape',
        'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size. <i>Auto</i> expands the columns to the width of their items filling the rows accordingly.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '1 Column' => '1',
          '2 Columns' => '2',
          '3 Columns' => '3',
          '4 Columns' => '4',
          '5 Columns' => '5',
          '6 Columns' => '6',
          'Auto' => 'auto',
        ),
      ),
      'grid_medium' => 
      array (
        'label' => 'Tablet Landscape',
        'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size. <i>Auto</i> expands the columns to the width of their items filling the rows accordingly.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '1 Column' => '1',
          '2 Columns' => '2',
          '3 Columns' => '3',
          '4 Columns' => '4',
          '5 Columns' => '5',
          '6 Columns' => '6',
          'Auto' => 'auto',
        ),
      ),
      'grid_large' => 
      array (
        'label' => 'Desktop',
        'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size. <i>Auto</i> expands the columns to the width of their items filling the rows accordingly.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '1 Column' => '1',
          '2 Columns' => '2',
          '3 Columns' => '3',
          '4 Columns' => '4',
          '5 Columns' => '5',
          '6 Columns' => '6',
          'Auto' => 'auto',
        ),
      ),
      'grid_xlarge' => 
      array (
        'label' => 'Large Screens',
        'description' => 'Set the number of grid columns for each breakpoint. <i>Inherit</i> refers to the number of columns on the next smaller screen size. <i>Auto</i> expands the columns to the width of their items filling the rows accordingly.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '1 Column' => '1',
          '2 Columns' => '2',
          '3 Columns' => '3',
          '4 Columns' => '4',
          '5 Columns' => '5',
          '6 Columns' => '6',
          'Auto' => 'auto',
        ),
      ),
      'filter' => 
      array (
        'label' => 'Filter',
        'type' => 'checkbox',
        'text' => 'Enable filter navigation',
      ),
      'filter_animation' => 
      array (
        'label' => 'Animation',
        'description' => 'Select an animation that will be applied to the content items when filtering between them.',
        'type' => 'select',
        'options' => 
        array (
          'None' => 'false',
          'Slide' => '',
          'Fade' => 'fade',
          'Delayed Fade' => 'delayed-fade',
        ),
        'enable' => 'filter',
      ),
      'filter_order' => 
      array (
        'label' => 'Navigation Order',
        'description' => 'Order the filter navigation alphabetically or by defining the order manually.',
        'type' => 'select',
        'options' => 
        array (
          'Alphabetical' => '',
          'Manual' => 'manual',
        ),
        'enable' => 'filter',
      ),
      'filter_reverse' => 
      array (
        'type' => 'checkbox',
        'text' => 'Reverse order',
        'enable' => 'filter',
      ),
      'filter_order_manual' => 
      array (
        'label' => 'Manual Order',
        'description' => 'Enter a comma-separated list of tags to manually order the filter navigation.',
        'enable' => 'filter && filter_order == \'manual\'',
      ),
      'filter_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select the filter navigation style. The pill and divider styles are only available for horizontal Subnavs.',
        'type' => 'select',
        'options' => 
        array (
          'Tabs' => 'tab',
          'Subnav (Nav)' => 'subnav',
          'Subnav Divider (Nav)' => 'subnav-divider',
          'Subnav Pill (Nav)' => 'subnav-pill',
        ),
        'enable' => 'filter',
      ),
      'filter_all' => 
      array (
        'label' => 'All Items',
        'type' => 'checkbox',
        'text' => 'Show filter control for all items',
        'enable' => 'filter',
      ),
      'filter_all_label' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'All',
        ),
        'enable' => 'filter && filter_all',
      ),
      'filter_position' => 
      array (
        'label' => 'Position',
        'description' => 'Position the filter navigation at the top, left or right. A larger style can be applied to left and right navigation.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Left' => 'left',
          'Right' => 'right',
        ),
        'enable' => 'filter',
      ),
      'filter_style_primary' => 
      array (
        'type' => 'checkbox',
        'text' => 'Primary navigation',
        'enable' => 'filter && $match(filter_position, \'left|right\') && $match(filter_style, \'^subnav\')',
      ),
      'filter_wrap' => 
      array (
        'label' => 'Wrap',
        'description' => 'Set whether filter items are forced into one line or can wrap into multiple lines.',
        'type' => 'checkbox',
        'text' => 'Don\'t wrap into multiple lines',
        'enable' => 'filter',
      ),
      'filter_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the filter controls.',
        'type' => 'select',
        'options' => 
        array (
          'Left' => 'left',
          'Right' => 'right',
          'Center' => 'center',
          'Justify' => 'justify',
        ),
        'enable' => 'filter && filter_position == \'top\'',
      ),
      'filter_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Set the vertical margin.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => 'filter && filter_position == \'top\'',
      ),
      'filter_grid_width' => 
      array (
        'label' => 'Grid Width',
        'description' => 'Define the width of the filter navigation. Choose between percent and fixed widths or expand columns to the width of their content.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => 'auto',
          '50%' => '1-2',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'enable' => 'filter && $match(filter_position, \'left|right\')',
      ),
      'filter_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between between the filter navigation and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'filter && $match(filter_position, \'left|right\')',
      ),
      'filter_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'filter && $match(filter_position, \'left|right\')',
      ),
      'filter_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'filter && $match(filter_position, \'left|right\')',
      ),
      'lightbox' => 
      array (
        'label' => 'Lightbox',
        'type' => 'checkbox',
        'text' => 'Enable lightbox gallery',
      ),
      'lightbox_controls' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show controls always',
        'enable' => 'lightbox',
      ),
      'lightbox_counter' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show counter',
        'enable' => 'lightbox',
      ),
      'lightbox_bg_close' => 
      array (
        'type' => 'checkbox',
        'text' => 'Close on background click',
        'enable' => 'lightbox',
      ),
      'lightbox_animation' => 
      array (
        'label' => 'Animation',
        'description' => 'Select the transition between two slides.',
        'type' => 'select',
        'options' => 
        array (
          'Slide' => '',
          'Fade' => 'fade',
          'Scale' => 'scale',
        ),
        'enable' => 'lightbox',
      ),
      'lightbox_nav' => 
      array (
        'label' => 'Navigation',
        'description' => 'Select the navigation type.',
        'type' => 'select',
        'options' => 
        array (
          'Slidenav' => '',
          'Dotnav' => 'dotnav',
          'Thumbnav' => 'thumbnav',
        ),
        'enable' => 'lightbox',
      ),
      'lightbox_image_width' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'lightbox',
      ),
      'lightbox_image_height' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'lightbox',
      ),
      'lightbox_image_orientation' => 
      array (
        'label' => 'Image Orientation',
        'description' => 'Width and height will be flipped accordingly, if the image is in portrait or landscape format.',
        'type' => 'checkbox',
        'text' => 'Allow mixed image orientations',
        'enable' => 'lightbox',
      ),
      'lightbox_video_autoplay' => 
      array (
        'label' => 'Video Mode',
        'description' => 'Enable autoplay or use the video like an animated image (autoplay, loop, no controls and muted).',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Autoplay' => 'true',
          'Animated Image' => 'inline',
        ),
        'enable' => 'lightbox',
      ),
      'lightbox_text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
        'enable' => 'lightbox',
      ),
      'title_display' => 
      array (
        'label' => 'Show Title',
        'description' => 'Display the title inside the panel, as the lightbox caption or both.',
        'type' => 'select',
        'options' => 
        array (
          'Panel + Lightbox' => '',
          'Panel only' => 'item',
          'Lightbox only' => 'lightbox',
        ),
        'enable' => 'show_title && lightbox',
      ),
      'content_display' => 
      array (
        'label' => 'Show Content',
        'description' => 'Display the content inside the panel, as the lightbox caption or both.',
        'type' => 'select',
        'options' => 
        array (
          'Panel + Lightbox' => '',
          'Panel only' => 'item',
          'Lightbox only' => 'lightbox',
        ),
        'enable' => 'show_content && lightbox',
      ),
      'panel_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select one of the boxed card or tile styles or a blank panel.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Card Default' => 'card-default',
          'Card Primary' => 'card-primary',
          'Card Secondary' => 'card-secondary',
          'Card Hover' => 'card-hover',
          'Card Overlay' => 'card-overlay',
          'Tile Default' => 'tile-default',
          'Tile Muted' => 'tile-muted',
          'Tile Primary' => 'tile-primary',
          'Tile Secondary' => 'tile-secondary',
          'Tile Checked' => 'tile-checked',
        ),
      ),
      'panel_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the whole panel if a link exists. Optionally, add a hover style.',
        'type' => 'checkbox',
        'text' => 'Link panel',
        'enable' => 'show_link',
      ),
      'panel_link_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Add hover style',
        'enable' => 'show_link && panel_link && $match(panel_style, \'card-(default|primary|secondary|overlay)|tile-\')',
      ),
      'panel_padding' => 
      array (
        'label' => 'Padding',
        'description' => 'Set the padding.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Default' => 'default',
          'Large' => 'large',
        ),
        'enable' => 'panel_style || (!panel_style && (show_image || show_video) && image_align != \'between\')',
      ),
      'panel_image_no_padding' => 
      array (
        'description' => 'Top, left or right aligned images can be attached to the panel edge. If the image is aligned to the left or right, it will also extend to cover the whole space.',
        'type' => 'checkbox',
        'text' => 'Align image without padding',
        'show' => 'panel_style',
        'enable' => '(show_image || show_video) && image_align != \'between\'',
      ),
      'item_maxwidth' => 
      array (
        'type' => 'select',
        'label' => 'Max Width',
        'description' => 'Set the maximum width.',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
      ),
      'panel_content_width' => 
      array (
        'label' => '1 Column Content Width',
        'description' => 'Set an optional content width which doesn\'t affect the image if there is just one column.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => '',
          'X-Small' => 'xsmall',
          'Small' => 'small',
        ),
        'show' => '!panel_style',
        'enable' => '(show_image || show_video) && image_align == \'top\' && !panel_padding && !item_maxwidth && (!grid_default || grid_default == \'1\') && (!grid_small || grid_small == \'1\') && (!grid_medium || grid_medium == \'1\') && (!grid_large || grid_large == \'1\') && (!grid_xlarge || grid_xlarge == \'1\')',
      ),
      'image_expand' => 
      array (
        'label' => 'Height',
        'type' => 'checkbox',
        'text' => 'Expand image',
        'enable' => '!grid_masonry',
      ),
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the title if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link title',
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox) && show_link',
      ),
      'title_hover_style' => 
      array (
        'label' => 'Hover Style',
        'description' => 'Set the hover style for a linked title.',
        'type' => 'select',
        'options' => 
        array (
          'None' => 'reset',
          'Heading Link' => 'heading',
          'Default Link' => '',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox) && show_link && (title_link || panel_link)',
      ),
      'title_decoration' => 
      array (
        'label' => 'Decoration',
        'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Bullet' => 'bullet',
          'Line' => 'line',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the title to the top or left in regards to the content.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Left' => 'left',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_grid_width' => 
      array (
        'label' => 'Grid Width',
        'description' => 'Define the width of the title within the grid. Choose between percent and fixed widths or expand columns to the width of their content.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => 'auto',
          'Expand' => 'expand',
          '80%' => '4-5',
          '75%' => '3-4',
          '66%' => '2-3',
          '60%' => '3-5',
          '50%' => '1-2',
          '40%' => '2-5',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox) && title_align == \'left\'',
      ),
      'title_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between the title and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox) && title_align == \'left\'',
      ),
      'title_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox) && title_align == \'left\'',
      ),
      'title_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox) && title_align == \'left\'',
      ),
      'title_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'title_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'meta_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined meta text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_meta',
      ),
      'meta_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_meta',
      ),
      'meta_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the meta text.',
        'type' => 'select',
        'options' => 
        array (
          'Above Title' => 'above-title',
          'Below Title' => 'below-title',
          'Above Content' => 'above-content',
          'Below Content' => 'below-content',
        ),
        'enable' => 'show_meta',
      ),
      'meta_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_meta',
      ),
      'meta_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_meta',
      ),
      'meta_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_meta',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_content && (content_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'content_align' => 
      array (
        'label' => 'Alignment',
        'type' => 'checkbox',
        'text' => 'Force left alignment',
        'enable' => 'show_content && (content_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'content_dropcap' => 
      array (
        'label' => 'Drop Cap',
        'description' => 'Display the first letter of the paragraph as a large initial.',
        'type' => 'checkbox',
        'text' => 'Enable drop cap',
        'enable' => 'show_content && (content_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'content_column' => 
      array (
        'label' => 'Columns',
        'description' => 'Set the number of text columns.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Halves' => '1-2',
          'Thirds' => '1-3',
          'Quarters' => '1-4',
          'Fifths' => '1-5',
          'Sixths' => '1-6',
        ),
        'enable' => 'show_content && (content_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'content_column_divider' => 
      array (
        'description' => 'Show a divider between text columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'show_content && (content_display != \'lightbox\' && lightbox || !lightbox) && content_column',
      ),
      'content_column_breakpoint' => 
      array (
        'label' => 'Columns Breakpoint',
        'description' => 'Set the device width from which the text columns should apply.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'show_content && (content_display != \'lightbox\' && lightbox || !lightbox) && content_column',
      ),
      'content_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_content && (content_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'content_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_content && (content_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image || show_video',
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image || show_video',
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
        'enable' => 'show_image || show_video',
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => '(show_image || show_video) && (!panel_style || (panel_style && (!panel_image_no_padding || image_align == \'between\')))',
      ),
      'image_box_shadow' => 
      array (
        'label' => 'Box Shadow',
        'description' => 'Select the image box shadow size.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => '(show_image || show_video) && !panel_style',
      ),
      'image_box_decoration' => 
      array (
        'label' => 'Box Decoration',
        'description' => 'Select the image box decoration style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Floating Shadow' => 'shadow',
          'Mask' => 'mask',
        ),
        'enable' => '(show_image || show_video) && !panel_style',
      ),
      'image_box_decoration_inverse' => 
      array (
        'type' => 'checkbox',
        'text' => 'Inverse style',
        'enable' => '(show_image || show_video) && !panel_style && $match(image_box_decoration, \'^(default|primary|secondary)$\')',
      ),
      'image_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the image if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link image',
        'enable' => '(show_image || show_video) && show_link',
      ),
      'image_transition' => 
      array (
        'label' => 'Hover Transition',
        'description' => 'Set the hover transition for a linked image.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
        ),
        'enable' => '(show_image || show_video) && show_link && (image_link || panel_link)',
      ),
      'image_transition_border' => 
      array (
        'type' => 'checkbox',
        'text' => 'Border',
        'enable' => '(show_image || show_video) && show_link && (image_link || panel_link)',
      ),
      'image_hover_box_shadow' => 
      array (
        'label' => 'Hover Box Shadow',
        'description' => 'Select the image box shadow size on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => 'show_link && (show_image || show_video) && !panel_style && (image_link || panel_link)',
      ),
      'image_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the image to the top, left, right or place it between the title and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Bottom' => 'bottom',
          'Left' => 'left',
          'Right' => 'right',
          'Between' => 'between',
        ),
        'enable' => 'show_image || show_video',
      ),
      'image_grid_width' => 
      array (
        'label' => 'Grid Width',
        'description' => 'Define the width of the image within the grid. Choose between percent and fixed widths or expand columns to the width of their content.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => 'auto',
          '80%' => '4-5',
          '75%' => '3-4',
          '66%' => '2-3',
          '60%' => '3-5',
          '50%' => '1-2',
          '40%' => '2-5',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
        'enable' => '(show_image || show_video) && $match(image_align, \'left|right\')',
      ),
      'image_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between the image and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => '(show_image || show_video) && $match(image_align, \'left|right\') && !(panel_image_no_padding && panel_style)',
      ),
      'image_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => '(show_image || show_video) && $match(image_align, \'left|right\') && !(panel_image_no_padding && panel_style)',
      ),
      'image_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => '(show_image || show_video) && $match(image_align, \'left|right\')',
      ),
      'image_vertical_align' => 
      array (
        'label' => 'Vertical Alignment',
        'description' => 'Vertically center grid items.',
        'type' => 'checkbox',
        'text' => 'Center',
        'enable' => '(show_image || show_video) && $match(image_align, \'left|right\')',
      ),
      'image_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => '(show_image || show_video) && (image_align == \'between\' || (image_align == \'bottom\' && !(panel_style && panel_image_no_padding)))',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'show_image',
      ),
      'image_svg_animate' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate strokes',
        'enable' => 'show_image && image_svg_inline',
      ),
      'image_svg_color' => 
      array (
        'label' => 'Icon/SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_image',
      ),
      'image_text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls if a sticky transparent navbar is displayed above.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
        'enable' => 'show_image || show_video',
      ),
      'video_autoplay' => 
      array (
        'label' => 'Video Autoplay',
        'description' => 'Enable autoplay immediately, start as soon as the video enters the viewport or only on hover.',
        'type' => 'select',
        'options' => 
        array (
          'On' => '',
          'Inview' => 'inview',
          'Hover' => 'hover',
        ),
        'enable' => 'show_video',
      ),
      'video_autoplay_restart' => 
      array (
        'type' => 'checkbox',
        'text' => 'Restart from beginning',
        'enable' => 'show_video && video_autoplay',
      ),
      'link_text' => 
      array (
        'label' => 'Text',
        'description' => 'Enter the text for the link.',
        'enable' => 'show_link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'ARIA Label',
        'description' => 'Enter a descriptive text label to make it accessible if the link has no visible text.',
        'enable' => 'show_link',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'show_link && !lightbox',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'show_link && !lightbox',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'show_link && !lightbox',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'show_link && !lightbox',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link' => '',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
        'enable' => 'show_link',
      ),
      'link_size' => 
      array (
        'label' => 'Button Size',
        'description' => 'Set the button size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Full width button',
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_link',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      'item_animation' => '${builder.item_animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'container_padding_remove' => '${builder.container_padding_remove}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-nav</code>, <code>.el-item</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>, <code>.el-hover-image</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-nav',
            2 => '.el-item',
            3 => '.el-title',
            4 => '.el-meta',
            5 => '.el-content',
            6 => '.el-image',
            7 => '.el-link',
            8 => '.el-hover-image',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'show_title',
              2 => 'show_meta',
              3 => 'show_content',
              4 => 'show_image',
              5 => 'show_video',
              6 => 'show_link',
              7 => 'show_hover_image',
              8 => 'show_hover_video',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Grid',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'grid_masonry',
                  1 => 'grid_parallax',
                  2 => 'grid_parallax_justify',
                  3 => 
                  array (
                    'label' => 'Parallax Start/End',
                    'description' => 'The animation starts when the element enters the viewport and ends when it leaves the viewport. Optionally, set a start and end offset, e.g. <code>100px</code>, <code>50vh</code> or <code>50vh + 50%</code>. Percent relates to the element\'s height.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'grid_parallax_start',
                      1 => 'grid_parallax_end',
                    ),
                  ),
                  4 => 'grid_column_gap',
                  5 => 'grid_row_gap',
                  6 => 'grid_divider',
                  7 => 'grid_column_align',
                  8 => 'grid_row_align',
                ),
              ),
              1 => 
              array (
                'label' => 'Columns',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'grid_default',
                  1 => 'grid_small',
                  2 => 'grid_medium',
                  3 => 'grid_large',
                  4 => 'grid_xlarge',
                ),
              ),
              2 => 
              array (
                'label' => 'Filter',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'filter',
                  1 => 'filter_animation',
                  2 => 'filter_order',
                  3 => 'filter_reverse',
                  4 => 'filter_order_manual',
                  5 => 'filter_style',
                  6 => 'filter_all',
                  7 => 'filter_all_label',
                  8 => 'filter_position',
                  9 => 'filter_style_primary',
                  10 => 'filter_wrap',
                  11 => 'filter_align',
                  12 => 'filter_margin',
                  13 => 'filter_grid_width',
                  14 => 'filter_grid_column_gap',
                  15 => 'filter_grid_row_gap',
                  16 => 'filter_grid_breakpoint',
                ),
              ),
              3 => 
              array (
                'label' => 'Lightbox',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'lightbox',
                  1 => 'lightbox_controls',
                  2 => 'lightbox_counter',
                  3 => 'lightbox_bg_close',
                  4 => 'lightbox_animation',
                  5 => 'lightbox_nav',
                  6 => 
                  array (
                    'label' => 'Image Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'lightbox_image_width',
                      1 => 'lightbox_image_height',
                    ),
                  ),
                  7 => 'lightbox_image_orientation',
                  8 => 'lightbox_video_autoplay',
                  9 => 'lightbox_text_color',
                  10 => 'title_display',
                  11 => 'content_display',
                ),
              ),
              4 => 
              array (
                'label' => 'Panel',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'panel_style',
                  1 => 'panel_link',
                  2 => 'panel_link_hover',
                  3 => 'panel_padding',
                  4 => 'panel_image_no_padding',
                  5 => 'item_maxwidth',
                  6 => 'panel_content_width',
                  7 => 'image_expand',
                ),
              ),
              5 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_style',
                  1 => 'title_link',
                  2 => 'title_hover_style',
                  3 => 'title_decoration',
                  4 => 'title_font_family',
                  5 => 'title_color',
                  6 => 'title_element',
                  7 => 'title_align',
                  8 => 'title_grid_width',
                  9 => 'title_grid_column_gap',
                  10 => 'title_grid_row_gap',
                  11 => 'title_grid_breakpoint',
                  12 => 'title_margin',
                  13 => 'title_margin_auto',
                ),
              ),
              6 => 
              array (
                'label' => 'Meta',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'meta_style',
                  1 => 'meta_color',
                  2 => 'meta_align',
                  3 => 'meta_element',
                  4 => 'meta_margin',
                  5 => 'meta_margin_auto',
                ),
              ),
              7 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_style',
                  1 => 'content_align',
                  2 => 'content_dropcap',
                  3 => 'content_column',
                  4 => 'content_column_divider',
                  5 => 'content_column_breakpoint',
                  6 => 'content_margin',
                  7 => 'content_margin_auto',
                ),
              ),
              8 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_loading',
                  2 => 'image_border',
                  3 => 'image_box_shadow',
                  4 => 'image_box_decoration',
                  5 => 'image_box_decoration_inverse',
                  6 => 'image_link',
                  7 => 'image_transition',
                  8 => 'image_transition_border',
                  9 => 'image_hover_box_shadow',
                  10 => 'image_align',
                  11 => 'image_grid_width',
                  12 => 'image_grid_column_gap',
                  13 => 'image_grid_row_gap',
                  14 => 'image_grid_breakpoint',
                  15 => 'image_vertical_align',
                  16 => 'image_margin',
                  17 => 'image_svg_inline',
                  18 => 'image_svg_animate',
                  19 => 'image_svg_color',
                  20 => 'image_text_color',
                  21 => 'video_autoplay',
                  22 => 'video_autoplay_restart',
                ),
              ),
              9 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_text',
                  1 => 'link_aria_label',
                  2 => 'link_target',
                  3 => 'link_download',
                  4 => 'link_rel_nofollow',
                  5 => 'link_rel_noreferrer',
                  6 => 'link_style',
                  7 => 'link_size',
                  8 => 'link_fullwidth',
                  9 => 'link_margin',
                ),
              ),
              10 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => 'item_animation',
                  19 => '_parallax_button',
                  20 => 'visibility',
                  21 => 'container_padding_remove',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'grid_item' => 
  array (
    'name' => 'grid_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'meta' => 
      array (
        'label' => 'Meta',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'image',
        'source' => true,
        'show' => '!video',
        'altRef' => '%name%_alt',
      ),
      'video' => 
      array (
        'label' => 'Video',
        'type' => 'video',
        'source' => true,
        'show' => '!image',
      ),
      'image_alt' => 
      array (
        'label' => 'Image Alt',
        'source' => true,
        'show' => 'image && !video',
      ),
      'icon' => 
      array (
        'label' => 'Icon',
        'description' => 'Instead of using a custom image, you can click on the pencil to pick an icon from the icon library.',
        'type' => 'icon',
        'source' => true,
        'enable' => '!image && !video',
      ),
      'link' => '${builder.link}',
      'link_text' => 
      array (
        'label' => 'Link Text',
        'description' => 'Set a different link text for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'Link ARIA Label',
        'description' => 'Set a different link ARIA label for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'hover_image' => 
      array (
        'label' => 'Hover Image',
        'description' => 'Select an optional image that appears on hover.',
        'type' => 'image',
        'source' => true,
        'show' => '!hover_video',
        'enable' => 'image || video',
      ),
      'hover_video' => 
      array (
        'label' => 'Hover Video',
        'description' => 'Select an optional video that appears on hover.',
        'type' => 'video',
        'source' => true,
        'show' => '!hover_image',
        'enable' => 'image || video',
      ),
      'tags' => 
      array (
        'label' => 'Tags',
        'description' => 'Enter a comma-separated list of tags, for example, <code>blue, white, black</code>.',
        'source' => true,
      ),
      'panel_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select one of the boxed card or tile styles or a blank panel.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Card Default' => 'card-default',
          'Card Primary' => 'card-primary',
          'Card Secondary' => 'card-secondary',
          'Card Hover' => 'card-hover',
          'Card Overlay' => 'card-overlay',
          'Tile Default' => 'tile-default',
          'Tile Muted' => 'tile-muted',
          'Tile Primary' => 'tile-primary',
          'Tile Secondary' => 'tile-secondary',
        ),
      ),
      'item_element' => '${builder.html_element_item}',
      'lightbox_image_focal_point' => 
      array (
        'label' => 'Image Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'lightbox_text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
      ),
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'image || video',
      ),
      'image_text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls if a sticky transparent navbar is displayed above.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
        'enable' => 'image || video',
      ),
      'hover_image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'title',
              1 => 'meta',
              2 => 'content',
              3 => 'image',
              4 => 'video',
              5 => 'image_alt',
              6 => 'icon',
              7 => 'link',
              8 => 'link_text',
              9 => 'link_aria_label',
              10 => 'hover_image',
              11 => 'hover_video',
              12 => 'tags',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Panel',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'panel_style',
                  1 => 'item_element',
                ),
              ),
              1 => 
              array (
                'label' => 'Lightbox',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'lightbox_image_focal_point',
                  1 => 'lightbox_text_color',
                ),
              ),
              2 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'image_focal_point',
                  1 => 'image_text_color',
                ),
              ),
              3 => 
              array (
                'label' => 'Hover Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'hover_image_focal_point',
                ),
              ),
              4 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'link_style',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
  ),
  'headline' => 
  array (
    'name' => 'headline',
    'title' => 'Headline',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'title_element' => 'h1',
      'image_align' => 'left',
      'image_margin' => 'xsmall',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'root' => true,
        'source' => true,
      ),
      'link' => '${builder.link}',
      'image' => '${builder.image}',
      'image_alt' => '${builder.image_alt}',
      'icon' => 
      array (
        'label' => 'Icon',
        'description' => 'Instead of using a custom image, you can click on the pencil to pick an icon from the icon library.',
        'type' => 'icon',
        'source' => true,
        'enable' => '!image',
      ),
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Headline styles differ in font size and font family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
        ),
      ),
      'title_text_stroke' => 
      array (
        'type' => 'checkbox',
        'text' => 'Outline text',
      ),
      'title_decoration' => 
      array (
        'label' => 'Decoration',
        'description' => 'Decorate the headline with a divider, bullet or a line that is vertically centered to the heading.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Bullet' => 'bullet',
          'Line' => 'line',
        ),
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
      ),
      'title_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
      ),
      'link_style' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show hover effect if linked.',
        'enable' => 'link',
      ),
      'title_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'link',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'image || icon',
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'image || icon',
      ),
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'image',
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
        'enable' => 'image',
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => 'image',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'image',
      ),
      'image_svg_animate' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate strokes',
        'enable' => 'image && image_svg_inline',
      ),
      'image_svg_color' => 
      array (
        'label' => 'Icon/SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'image || icon',
      ),
      'image_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the image to the left or right.',
        'type' => 'select',
        'options' => 
        array (
          'Left' => 'left',
          'Right' => 'right',
        ),
        'enable' => 'image || icon',
      ),
      'image_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Set the margin between the image and the content.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Medium' => 'medium',
        ),
        'enable' => 'image || icon',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-link</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-link',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'link',
              2 => 'image',
              3 => 'image_alt',
              4 => 'icon',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_style',
                  1 => 'title_text_stroke',
                  2 => 'title_decoration',
                  3 => 'title_font_family',
                  4 => 'title_color',
                  5 => 'link_style',
                  6 => 'title_element',
                ),
              ),
              1 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_target',
                  1 => 'link_download',
                  2 => 'link_rel_nofollow',
                  3 => 'link_rel_noreferrer',
                ),
              ),
              2 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_focal_point',
                  2 => 'image_loading',
                  3 => 'image_border',
                  4 => 'image_svg_inline',
                  5 => 'image_svg_animate',
                  6 => 'image_svg_color',
                  7 => 'image_align',
                  8 => 'image_margin',
                ),
              ),
              3 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'html' => 
  array (
    'name' => 'html',
    'title' => 'Html',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'editor' => 'code',
        'source' => true,
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'status' => '${builder.status}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'type' => 'editor',
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'icon' => 
  array (
    'name' => 'icon',
    'title' => 'Icon',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'icon_width' => 60,
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'icon' => 
      array (
        'label' => 'Icon',
        'description' => 'Click on the pencil to pick an icon from the icon library.',
        'type' => 'icon',
        'source' => true,
      ),
      'link' => '${builder.link}',
      'link_aria_label' => '${builder.link_aria_label}',
      'icon_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the icon color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => '!link',
      ),
      'icon_width' => 
      array (
        'label' => 'Icon Width',
        'description' => 'Set the icon width.',
        'enable' => 'link_style != \'button\'',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'link',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'Icon Link' => '',
          'Icon Button' => 'button',
          'Link' => 'link',
          'Link Muted' => 'muted',
          'Link Text' => 'text',
          'Link Reset' => 'reset',
        ),
        'enable' => 'link',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'icon',
              1 => 'link',
              2 => 'link_aria_label',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Icon',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'icon_color',
                  1 => 'icon_width',
                ),
              ),
              1 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_target',
                  1 => 'link_download',
                  2 => 'link_rel_nofollow',
                  3 => 'link_rel_noreferrer',
                  4 => 'link_style',
                ),
              ),
              2 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'image' => 
  array (
    'name' => 'image',
    'title' => 'Image',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'margin_top' => 'default',
      'margin_bottom' => 'default',
      'image_svg_color' => 'emphasis',
    ),
    'fields' => 
    array (
      'image' => '${builder.image}',
      'image_alt' => 
      array (
        'label' => 'Image Alt',
        'description' => 'Enter the image alt attribute.',
        'source' => true,
        'enable' => 'image',
      ),
      'link' => '${builder.link}',
      'link_aria_label' => '${builder.link_aria_label}',
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'height_expand' => 
      array (
        'label' => 'Height',
        'description' => 'Expand the height of the element to fill the available space in the column. Alternatively, the height can adapt to the height of the viewport, and optionally subtract the header height to fill the first visible viewport.',
        'type' => 'checkbox',
        'text' => 'Fill the available column space',
      ),
      'height_viewport' => 
      array (
        'type' => 'checkbox',
        'text' => 'Set viewport height',
        'enable' => '!height_expand',
      ),
      'height_viewport_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => '100',
          'min' => 0,
          'step' => 10,
        ),
        'enable' => '!height_expand && height_viewport',
      ),
      'height_viewport_offset' => 
      array (
        'type' => 'checkbox',
        'text' => 'Subtract height above',
        'enable' => '!height_expand && height_viewport && (height_viewport_height || 0) <= 100',
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
      ),
      'image_box_shadow' => 
      array (
        'label' => 'Box Shadow',
        'description' => 'Select the image box shadow size.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
      ),
      'image_hover_box_shadow' => 
      array (
        'label' => 'Hover Box Shadow',
        'description' => 'Select the image box shadow size on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => 'link',
      ),
      'image_box_decoration' => 
      array (
        'label' => 'Box Decoration',
        'description' => 'Select the image box decoration style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Floating Shadow' => 'shadow',
          'Mask' => 'mask',
        ),
      ),
      'image_box_decoration_inverse' => 
      array (
        'type' => 'checkbox',
        'text' => 'Inverse style',
        'enable' => '$match(image_box_decoration, \'^(default|primary|secondary)$\')',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
      ),
      'image_svg_animate' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate strokes',
        'enable' => 'image_svg_inline',
      ),
      'image_svg_color' => 
      array (
        'label' => 'SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'image_svg_inline',
      ),
      'text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls if a sticky transparent navbar is displayed above.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'link && !lightbox',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'link && !lightbox',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'link && !lightbox',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'link && !lightbox',
      ),
      'lightbox' => 
      array (
        'label' => 'Modal',
        'type' => 'checkbox',
        'text' => 'Enable modal window',
        'enable' => 'link',
      ),
      'lightbox_width' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'link && lightbox',
      ),
      'lightbox_height' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'link && lightbox',
      ),
      'lightbox_image_focal_point' => 
      array (
        'label' => 'Modal Image Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'link && lightbox',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'container_padding_remove' => '${builder.container_padding_remove}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-image</code>, <code>.el-link</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-image',
            2 => '.el-link',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'image',
              1 => 'image_alt',
              2 => 'link',
              3 => 'link_aria_label',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_focal_point',
                  2 => 'height_expand',
                  3 => 'height_viewport',
                  4 => 'height_viewport_height',
                  5 => 'height_viewport_offset',
                  6 => 'image_loading',
                  7 => 'image_border',
                  8 => 'image_box_shadow',
                  9 => 'image_hover_box_shadow',
                  10 => 'image_box_decoration',
                  11 => 'image_box_decoration_inverse',
                  12 => 'image_svg_inline',
                  13 => 'image_svg_animate',
                  14 => 'image_svg_color',
                  15 => 'text_color',
                ),
              ),
              1 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_target',
                  1 => 'link_download',
                  2 => 'link_rel_nofollow',
                  3 => 'link_rel_noreferrer',
                  4 => 'lightbox',
                  5 => 
                  array (
                    'label' => 'Modal Width/Height',
                    'description' => 'Set the width and height for the modal content, i.e. image, video or iframe.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'lightbox_width',
                      1 => 'lightbox_height',
                    ),
                  ),
                  6 => 'lightbox_image_focal_point',
                ),
              ),
              2 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                  20 => 'container_padding_remove',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'layout' => 
  array (
    'name' => 'layout',
    'title' => 'Layout',
    'container' => true,
  ),
  'list' => 
  array (
    'name' => 'list',
    'title' => 'List',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_image' => true,
      'show_link' => true,
      'list_type' => 'vertical',
      'list_element' => 'ul',
      'list_horizontal_separator' => ', ',
      'column_breakpoint' => 'm',
      'image_svg_color' => 'emphasis',
      'image_align' => 'left',
      'image_vertical_align' => true,
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'title' => 'content',
        'item' => 'list_item',
        'media' => 
        array (
          'type' => 'image',
          'item' => 
          array (
            'image' => 'src',
          ),
        ),
      ),
      'show_image' => 
      array (
        'label' => 'Display',
        'type' => 'checkbox',
        'text' => 'Show the image',
      ),
      'show_link' => 
      array (
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the link',
      ),
      'list_type' => 
      array (
        'label' => 'Type',
        'description' => 'Choose between a vertical or horizontal list.',
        'type' => 'select',
        'options' => 
        array (
          'Vertical' => 'vertical',
          'Horizontal' => 'horizontal',
        ),
      ),
      'list_marker' => 
      array (
        'label' => 'Marker',
        'description' => 'Select the marker of the list items.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Disc' => 'disc',
          'Circle' => 'circle',
          'Square' => 'square',
          'Decimal' => 'decimal',
          'Hyphen' => 'hyphen',
          'Image Bullet' => 'bullet',
        ),
        'enable' => 'list_type == \'vertical\'',
      ),
      'list_marker_color' => 
      array (
        'label' => 'Marker Color',
        'description' => 'Select the color of the list markers.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
        ),
        'enable' => 'list_type == \'vertical\' && list_marker != \'bullet\'',
      ),
      'list_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select the list style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Striped' => 'striped',
        ),
        'enable' => 'list_type == \'vertical\'',
      ),
      'list_size' => 
      array (
        'label' => 'Size',
        'description' => 'Define the padding between items.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'list_type == \'vertical\'',
      ),
      'list_horizontal_separator' => 
      array (
        'label' => 'Separator',
        'description' => 'Set the separator between list items.',
        'enable' => 'list_type == \'horizontal\'',
      ),
      'column' => 
      array (
        'label' => 'Columns',
        'description' => 'Set the number of list columns.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Halves' => '1-2',
          'Thirds' => '1-3',
          'Quarters' => '1-4',
          'Fifths' => '1-5',
          'Sixths' => '1-6',
        ),
      ),
      'column_divider' => 
      array (
        'description' => 'Show a divider between list columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'column',
      ),
      'column_breakpoint' => 
      array (
        'label' => 'Columns Breakpoint',
        'description' => 'Set the device width from which the list columns should apply.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'column',
      ),
      'list_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set whether it\'s an ordered or unordered list.',
        'type' => 'select',
        'options' => 
        array (
          'ul' => 'ul',
          'ol' => 'ol',
        ),
        'enable' => 'list_type == \'vertical\'',
      ),
      'html_element' => 
      array (
        'type' => 'checkbox',
        'text' => 'Wrap with nav element',
        'enable' => 'list_type == \'vertical\'',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Bold' => 'text-bold',
          'Text Muted' => 'text-muted',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
        'enable' => 'show_image',
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => 'show_image',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'show_image',
      ),
      'image_svg_animate' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate strokes',
        'enable' => 'show_image && image_svg_inline',
      ),
      'image_svg_color' => 
      array (
        'label' => 'Icon/SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_image',
      ),
      'icon' => 
      array (
        'type' => 'icon',
        'label' => 'Default Icon',
        'description' => 'Click on the pencil to pick an icon from the icon library.',
        'enable' => 'show_image',
      ),
      'image_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the image to the left or right.',
        'type' => 'select',
        'options' => 
        array (
          'Left' => 'left',
          'Right' => 'right',
        ),
        'enable' => 'show_image',
      ),
      'image_vertical_align' => 
      array (
        'label' => 'Vertical Alignment',
        'description' => 'Vertically center the image.',
        'type' => 'checkbox',
        'text' => 'Center',
        'enable' => 'show_image',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'This option doesn\'t apply unless a URL has been added to the item.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Text' => 'text',
          'Heading' => 'heading',
          'Reset' => 'reset',
        ),
        'enable' => 'show_link',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-item',
            2 => '.el-content',
            3 => '.el-image',
            4 => '.el-link',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'show_image',
              2 => 'show_link',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'List',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'list_type',
                  1 => 'list_marker',
                  2 => 'list_marker_color',
                  3 => 'list_style',
                  4 => 'list_size',
                  5 => 'list_horizontal_separator',
                  6 => 'column',
                  7 => 'column_divider',
                  8 => 'column_breakpoint',
                  9 => 'list_element',
                  10 => 'html_element',
                ),
              ),
              1 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_style',
                ),
              ),
              2 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_loading',
                  2 => 'image_border',
                  3 => 'image_svg_inline',
                  4 => 'image_svg_animate',
                  5 => 'image_svg_color',
                  6 => 'icon',
                  7 => 'image_align',
                  8 => 'image_vertical_align',
                ),
              ),
              3 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_style',
                ),
              ),
              4 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'list_item' => 
  array (
    'name' => 'list_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'root' => true,
        'source' => true,
      ),
      'image' => '${builder.image}',
      'image_alt' => '${builder.image_alt}',
      'icon' => 
      array (
        'label' => 'Icon',
        'description' => 'Instead of using a custom image, you can click on the pencil to pick an icon from the icon library.',
        'type' => 'icon',
        'source' => true,
        'enable' => '!image',
      ),
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'image',
      ),
      'image_svg_color' => 
      array (
        'label' => 'Icon/SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'image || icon',
      ),
      'link' => '${builder.link}',
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'link',
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'image',
              2 => 'image_alt',
              3 => 'icon',
              4 => 'link',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'image_focal_point',
                  1 => 'image_svg_color',
                ),
              ),
              1 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'link_target',
                  1 => 'link_download',
                  2 => 'link_rel_nofollow',
                  3 => 'link_rel_noreferrer',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
  ),
  'map' => 
  array (
    'name' => 'map',
    'title' => 'Map',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_title' => true,
      'show_meta' => true,
      'show_content' => true,
      'show_image' => true,
      'show_link' => true,
      'type' => 'roadmap',
      'zoom' => 10,
      'controls' => true,
      'poi' => false,
      'zooming' => false,
      'dragging' => false,
      'min_zoom' => 0,
      'max_zoom' => 18,
      'title_hover_style' => 'reset',
      'title_element' => 'h3',
      'meta_style' => 'text-meta',
      'meta_align' => 'below-title',
      'meta_element' => 'div',
      'image_svg_color' => 'emphasis',
      'link_text' => 'Read more',
      'link_style' => 'default',
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'title' => 'title',
        'button' => 'Add Item',
        'item' => 'map_item',
      ),
      'show_title' => 
      array (
        'label' => 'Display',
        'type' => 'checkbox',
        'text' => 'Show the title',
      ),
      'show_meta' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the meta text',
      ),
      'show_content' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the content',
      ),
      'show_image' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the image',
      ),
      'show_link' => 
      array (
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the link',
      ),
      'marker_icon' => 
      array (
        'label' => 'Marker Icon',
        'type' => 'image',
      ),
      'marker_icon_width' => 
      array (
        'label' => 'Width',
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'marker_icon',
      ),
      'marker_icon_height' => 
      array (
        'label' => 'Height',
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'marker_icon',
      ),
      'cluster_icon_1' => 
      array (
        'label' => 'Cluster Icon (< 10 Markers)',
        'type' => 'image',
      ),
      'cluster_icon_1_width' => 
      array (
        'label' => 'Width',
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'cluster_icon_1',
      ),
      'cluster_icon_1_height' => 
      array (
        'label' => 'Height',
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'cluster_icon_1',
      ),
      'cluster_icon_1_text_color' => 
      array (
        'label' => 'Text Color',
        'type' => 'color',
        'enable' => 'cluster_icon_1',
      ),
      'cluster_icon_2' => 
      array (
        'label' => 'Cluster Icon (< 100 Markers)',
        'type' => 'image',
      ),
      'cluster_icon_2_width' => 
      array (
        'label' => 'Width',
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'cluster_icon_2',
      ),
      'cluster_icon_2_height' => 
      array (
        'label' => 'Height',
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'cluster_icon_2',
      ),
      'cluster_icon_2_text_color' => 
      array (
        'label' => 'Text Color',
        'type' => 'color',
        'enable' => 'cluster_icon_2',
      ),
      'cluster_icon_3' => 
      array (
        'label' => 'Cluster Icon (100+ Markers)',
        'type' => 'image',
      ),
      'cluster_icon_3_width' => 
      array (
        'label' => 'Width',
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'cluster_icon_3',
      ),
      'cluster_icon_3_height' => 
      array (
        'label' => 'Height',
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'cluster_icon_3',
      ),
      'cluster_icon_3_text_color' => 
      array (
        'label' => 'Text Color',
        'type' => 'color',
        'enable' => 'cluster_icon_3',
      ),
      'consent_placeholder_image' => 
      array (
        'label' => 'Placeholder Image',
        'description' => 'Select an optional placeholder image to load the map on click.',
        'type' => 'image',
      ),
      'width' => 
      array (
        'type' => 'number',
      ),
      'height' => 
      array (
        'type' => 'number',
        'enable' => '!height_viewport',
      ),
      'width_breakpoint' => 
      array (
        'type' => 'checkbox',
        'text' => 'Use width as breakpoint only',
        'enable' => 'width && height && !height_viewport',
      ),
      'height_viewport' => 
      array (
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Viewport' => 'viewport',
          'Viewport (Subtract Next Section)' => 'section',
        ),
      ),
      'height_viewport_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => '100',
          'min' => 0,
          'step' => 10,
          'class' => 'uk-form-width-xsmall',
        ),
        'enable' => 'height_viewport == \'viewport\'',
      ),
      'height_viewport_offset' => 
      array (
        'type' => 'checkbox',
        'text' => 'Subtract height above',
        'enable' => 'height_viewport == \'viewport\' && (height_viewport_height || 0) <= 100 || height_viewport == \'section\'',
      ),
      'type' => 
      array (
        'label' => 'Type',
        'description' => 'Choose a map type.',
        'type' => 'select',
        'options' => 
        array (
          'Roadmap' => 'roadmap',
          'Satellite' => 'satellite',
        ),
      ),
      'zoom' => 
      array (
        'label' => 'Zoom',
        'description' => 'Set the initial resolution at which to display the map. 0 is fully zoomed out and 18 is at the highest resolution zoomed in. Alternatively, set the viewport to contain the given markers.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 0,
          'max' => 18,
          'step' => 1,
        ),
        'enable' => '!fit_bounds',
      ),
      'fit_bounds' => 
      array (
        'type' => 'checkbox',
        'text' => 'Fit markers',
      ),
      'controls' => 
      array (
        'label' => 'Controls',
        'description' => 'Display the map controls and define whether the map can be zoomed or dragged using the mouse wheel or touch.',
        'type' => 'checkbox',
        'text' => 'Show map controls',
      ),
      'poi' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show points of interest',
        'show' => 'yootheme.config.google_maps_api_key',
      ),
      'zooming' => 
      array (
        'type' => 'checkbox',
        'text' => 'Enable map zooming',
      ),
      'dragging' => 
      array (
        'type' => 'checkbox',
        'text' => 'Enable map dragging',
      ),
      'min_zoom' => 
      array (
        'label' => 'Minimum Zoom',
        'description' => 'Minimum zoom level of the map.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 0,
          'max' => 18,
          'step' => 1,
        ),
        'enable' => 'zooming',
      ),
      'max_zoom' => 
      array (
        'label' => 'Maximum Zoom',
        'description' => 'Maximum zoom level of the map.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 0,
          'max' => 18,
          'step' => 1,
        ),
        'enable' => 'zooming',
      ),
      'text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls if a sticky transparent navbar is displayed above.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
      ),
      'styler_hue' => 
      array (
        'label' => 'Hue',
        'description' => 'Set the hue, e.g. <i>#ff0000</i>.',
        'type' => 'color',
        'alpha' => false,
        'fields' => false,
        'saturation' => false,
        'enable' => 'yootheme.config.google_maps_api_key',
      ),
      'styler_lightness' => 
      array (
        'label' => 'Lightness',
        'description' => 'Set percentage change in lightness (Between -100 and 100).',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => -100,
          'max' => 100,
          'step' => 1,
        ),
        'enable' => 'yootheme.config.google_maps_api_key',
      ),
      'styler_invert_lightness' => 
      array (
        'type' => 'checkbox',
        'text' => 'Invert lightness',
        'enable' => 'yootheme.config.google_maps_api_key',
      ),
      'styler_saturation' => 
      array (
        'label' => 'Saturation',
        'description' => 'Set percentage change in saturation (Between -100 and 100).',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => -100,
          'max' => 100,
          'step' => 1,
        ),
        'enable' => 'yootheme.config.google_maps_api_key',
      ),
      'styler_gamma' => 
      array (
        'label' => 'Gamma',
        'description' => 'Set percentage change in the amount of gamma correction (Between 0.01 and 10.0, where 1.0 applies no correction).',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 0.01,
          'max' => 10,
          'step' => 0.1,
        ),
        'enable' => 'yootheme.config.google_maps_api_key',
      ),
      'clustering' => 
      array (
        'label' => 'Clustering',
        'type' => 'checkbox',
        'text' => 'Enable marker clustering',
      ),
      'popup_max_width' => 
      array (
        'label' => 'Max Width',
        'description' => 'Set the maximum width.',
        'type' => 'number',
      ),
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
        ),
        'enable' => 'show_title',
      ),
      'title_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the title if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link title',
        'enable' => 'show_title && show_link',
      ),
      'title_hover_style' => 
      array (
        'label' => 'Hover Style',
        'description' => 'Set the hover style for a linked title.',
        'type' => 'select',
        'options' => 
        array (
          'None' => 'reset',
          'Heading Link' => 'heading',
          'Default Link' => '',
        ),
        'enable' => 'show_title && show_link && title_link',
      ),
      'title_decoration' => 
      array (
        'label' => 'Decoration',
        'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Bullet' => 'bullet',
          'Line' => 'line',
        ),
        'enable' => 'show_title',
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
        'enable' => 'show_title',
      ),
      'title_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
        'enable' => 'show_title',
      ),
      'title_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_title',
      ),
      'title_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_title',
      ),
      'meta_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined meta text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_meta',
      ),
      'meta_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_meta',
      ),
      'meta_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the meta text.',
        'type' => 'select',
        'options' => 
        array (
          'Above Title' => 'above-title',
          'Below Title' => 'below-title',
          'Below Content' => 'below-content',
        ),
        'enable' => 'show_meta',
      ),
      'meta_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_meta',
      ),
      'meta_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_meta',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_content',
      ),
      'content_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_content',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
        'enable' => 'show_image',
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => 'show_image',
      ),
      'image_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the image if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link image',
        'enable' => 'show_image && show_link',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'show_image',
      ),
      'image_svg_animate' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate strokes',
        'enable' => 'show_image && image_svg_inline',
      ),
      'image_svg_color' => 
      array (
        'label' => 'SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_image && image_svg_inline',
      ),
      'link_text' => 
      array (
        'label' => 'Text',
        'description' => 'Enter the text for the link.',
        'enable' => 'show_link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'ARIA Label',
        'description' => 'Enter a descriptive text label to make it accessible if the link has no visible text.',
        'enable' => 'show_link',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'show_link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'show_link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'show_link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'show_link',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link' => '',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
        'enable' => 'show_link',
      ),
      'link_size' => 
      array (
        'label' => 'Button Size',
        'description' => 'Set the button size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Full width button',
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_link',
      ),
      'consent_card_size' => 
      array (
        'label' => 'Card Size',
        'type' => 'checkbox',
        'text' => 'Small card size',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'item_text_align' => 
      array (
        'label' => 'Text Alignment',
        'description' => 'Center, left and right alignment may depend on a breakpoint and require a fallback.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Left' => 'left',
          'Center' => 'center',
          'Right' => 'right',
          'Justify' => 'justify',
        ),
      ),
      'item_text_align_breakpoint' => 
      array (
        'label' => 'Text Alignment Breakpoint',
        'description' => 'Define the device width from which the alignment will apply.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'item_text_align && item_text_align != \'justify\'',
      ),
      'item_text_align_fallback' => 
      array (
        'label' => 'Text Alignment Fallback',
        'description' => 'Define an alignment fallback for device widths below the breakpoint.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Left' => 'left',
          'Center' => 'center',
          'Right' => 'right',
          'Justify' => 'justify',
        ),
        'enable' => 'item_text_align && item_text_align != \'justify\' && item_text_align_breakpoint',
      ),
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'container_padding_remove' => '${builder.container_padding_remove}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-item',
            2 => '.el-title',
            3 => '.el-meta',
            4 => '.el-content',
            5 => '.el-image',
            6 => '.el-link',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'show_title',
              2 => 'show_meta',
              3 => 'show_content',
              4 => 'show_image',
              5 => 'show_link',
              6 => 'marker_icon',
              7 => 
              array (
                'name' => '_marker_icon_dimension',
                'type' => 'grid',
                'width' => '1-2',
                'fields' => 
                array (
                  0 => 'marker_icon_width',
                  1 => 'marker_icon_height',
                ),
              ),
              8 => 'cluster_icon_1',
              9 => 
              array (
                'name' => '_cluster_icon_1_dimensions',
                'type' => 'grid',
                'width' => '1-3',
                'fields' => 
                array (
                  0 => 'cluster_icon_1_width',
                  1 => 'cluster_icon_1_height',
                  2 => 'cluster_icon_1_text_color',
                ),
              ),
              10 => 'cluster_icon_2',
              11 => 
              array (
                'name' => '_cluster_icon_2_dimensions',
                'type' => 'grid',
                'width' => '1-3',
                'fields' => 
                array (
                  0 => 'cluster_icon_2_width',
                  1 => 'cluster_icon_2_height',
                  2 => 'cluster_icon_2_text_color',
                ),
              ),
              12 => 'cluster_icon_3',
              13 => 
              array (
                'name' => '_cluster_icon_3_dimensions',
                'type' => 'grid',
                'width' => '1-3',
                'fields' => 
                array (
                  0 => 'cluster_icon_3_width',
                  1 => 'cluster_icon_3_height',
                  2 => 'cluster_icon_3_text_color',
                ),
              ),
              14 => 'consent_placeholder_image',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Map',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Set the width and height in pixels. If no width is set, the map takes the full width. If both width and height are set, the map is responsive like an image. Additionally, the width can be used as a breakpoint. The map takes the full width, but below the breakpoint it will start to shrink preserving the aspect ratio.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'width',
                      1 => 'height',
                    ),
                  ),
                  1 => 'width_breakpoint',
                  2 => 
                  array (
                    'label' => 'Height Viewport',
                    'description' => 'Set a fixed height, and optionally subtract the header height to fill the first visible viewport. Alternatively, expand the height so the next section also fits the viewport.',
                    'name' => '_height_viewport',
                    'type' => 'grid',
                    'width' => 'expand,auto',
                    'gap' => 'small',
                    'fields' => 
                    array (
                      0 => 'height_viewport',
                      1 => 'height_viewport_height',
                    ),
                  ),
                  3 => 'height_viewport_offset',
                  4 => 'type',
                  5 => 'zoom',
                  6 => 'fit_bounds',
                  7 => 'controls',
                  8 => 'poi',
                  9 => 'zooming',
                  10 => 'dragging',
                  11 => 'min_zoom',
                  12 => 'max_zoom',
                  13 => 'text_color',
                ),
              ),
              1 => 
              array (
                'label' => 'Style',
                'description' => 'Only available for Google Maps.',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'styler_hue',
                  1 => 'styler_lightness',
                  2 => 'styler_invert_lightness',
                  3 => 'styler_saturation',
                  4 => 'styler_gamma',
                ),
              ),
              2 => 
              array (
                'label' => 'Marker',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'clustering',
                ),
              ),
              3 => 
              array (
                'label' => 'Popup',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'popup_max_width',
                ),
              ),
              4 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_style',
                  1 => 'title_link',
                  2 => 'title_hover_style',
                  3 => 'title_decoration',
                  4 => 'title_font_family',
                  5 => 'title_color',
                  6 => 'title_element',
                  7 => 'title_margin',
                ),
              ),
              5 => 
              array (
                'label' => 'Meta',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'meta_style',
                  1 => 'meta_color',
                  2 => 'meta_align',
                  3 => 'meta_element',
                  4 => 'meta_margin',
                ),
              ),
              6 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_style',
                  1 => 'content_margin',
                ),
              ),
              7 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_loading',
                  2 => 'image_border',
                  3 => 'image_link',
                  4 => 'image_svg_inline',
                  5 => 'image_svg_animate',
                  6 => 'image_svg_color',
                ),
              ),
              8 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_text',
                  1 => 'link_aria_label',
                  2 => 'link_target',
                  3 => 'link_download',
                  4 => 'link_rel_nofollow',
                  5 => 'link_rel_noreferrer',
                  6 => 'link_style',
                  7 => 'link_size',
                  8 => 'link_fullwidth',
                  9 => 'link_margin',
                ),
              ),
              9 => 
              array (
                'label' => 'Consent',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'consent_card_size',
                ),
              ),
              10 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'item_text_align',
                  15 => 'item_text_align_breakpoint',
                  16 => 'item_text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                  20 => 'container_padding_remove',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'map_item' => 
  array (
    'name' => 'map_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'location' => 
      array (
        'label' => 'Location',
        'type' => 'location',
        'source' => true,
      ),
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'meta' => 
      array (
        'label' => 'Meta',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'image' => '${builder.image}',
      'image_alt' => '${builder.image_alt}',
      'link' => '${builder.link}',
      'link_text' => 
      array (
        'label' => 'Link Text',
        'description' => 'Set a different link text for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'Link ARIA Label',
        'description' => 'Set a different link ARIA label for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'marker_icon' => 
      array (
        'label' => 'Marker Icon',
        'type' => 'image',
        'source' => true,
      ),
      'marker_icon_width' => 
      array (
        'label' => 'Width',
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'marker_icon',
      ),
      'marker_icon_height' => 
      array (
        'label' => 'Height',
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'marker_icon',
      ),
      'hide' => 
      array (
        'label' => 'Marker',
        'type' => 'checkbox',
        'text' => 'Hide marker',
      ),
      'show_popup' => 
      array (
        'label' => 'Behavior',
        'type' => 'checkbox',
        'text' => 'Show popup on load',
      ),
      'item_element' => '${builder.html_element_item}',
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'image',
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'location',
              1 => 'title',
              2 => 'meta',
              3 => 'content',
              4 => 'image',
              5 => 'image_alt',
              6 => 'link',
              7 => 'link_text',
              8 => 'link_aria_label',
              9 => 'marker_icon',
              10 => 
              array (
                'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                'name' => '_marker_dimension',
                'type' => 'grid',
                'width' => '1-2',
                'fields' => 
                array (
                  0 => 'marker_icon_width',
                  1 => 'marker_icon_height',
                ),
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Marker',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'hide',
                ),
              ),
              1 => 
              array (
                'label' => 'Popup',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'show_popup',
                  1 => 'item_element',
                ),
              ),
              2 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'image_focal_point',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
  ),
  'nav' => 
  array (
    'name' => 'nav',
    'title' => 'Nav',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_meta' => true,
      'show_image' => true,
      'nav_style' => 'default',
      'grid' => '1',
      'image_vertical_align' => true,
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'title' => 'content',
        'item' => 'nav_item',
      ),
      'show_meta' => 
      array (
        'label' => 'Display',
        'type' => 'checkbox',
        'text' => 'Show the subtitle',
      ),
      'show_image' => 
      array (
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the image',
      ),
      'nav_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select the nav style.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Navbar Dropdown' => 'navbar-dropdown-nav',
        ),
      ),
      'nav_divider' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'nav_style != \'navbar-dropdown-nav\'',
      ),
      'nav_size' => 
      array (
        'label' => 'Primary Size',
        'description' => 'Select the primary nav size.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => 'nav_style == \'primary\'',
      ),
      'html_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Define a navigation menu or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'div' => '',
          'nav' => 'nav',
        ),
      ),
      'grid' => 
      array (
        'label' => 'Grid',
        'description' => 'Set the number of grid columns.',
        'type' => 'select',
        'options' => 
        array (
          '1 Column' => '1',
          '2 Columns' => '2',
          '3 Columns' => '3',
          '4 Columns' => '4',
          '5 Columns' => '5',
          '6 Columns' => '6',
        ),
      ),
      'grid_divider' => 
      array (
        'description' => 'Show a divider between grid columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'grid',
      ),
      'grid_breakpoint' => 
      array (
        'label' => 'Columns Breakpoint',
        'description' => 'Set the device width from which the nav columns should apply.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'grid',
      ),
      'grid_column_gap' => 
      array (
        'label' => 'Column Gap',
        'description' => 'Set the size of the gap between the grid columns.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'grid_row_gap' => 
      array (
        'label' => 'Row Gap',
        'description' => 'Set the size of the gap between the grid rows.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
        'enable' => 'show_image',
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => 'show_image',
      ),
      'image_margin' => 
      array (
        'label' => 'Margin',
        'type' => 'checkbox',
        'text' => 'Add margin between',
        'enable' => 'show_image',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'show_image',
      ),
      'image_svg_animate' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate strokes',
        'enable' => 'show_image && image_svg_inline',
      ),
      'image_svg_color' => 
      array (
        'label' => 'Icon/SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_image',
      ),
      'image_vertical_align' => 
      array (
        'label' => 'Vertical Alignment',
        'description' => 'Vertically center the image.',
        'type' => 'checkbox',
        'text' => 'Center',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-item',
            2 => '.el-content',
            3 => '.el-image',
            4 => '.el-link',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'show_meta',
              2 => 'show_image',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Nav',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'nav_style',
                  1 => 'nav_divider',
                  2 => 'nav_size',
                  3 => 'html_element',
                  4 => 'grid',
                  5 => 'grid_divider',
                  6 => 'grid_breakpoint',
                  7 => 'grid_column_gap',
                  8 => 'grid_row_gap',
                ),
              ),
              1 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_loading',
                  2 => 'image_margin',
                  3 => 'image_border',
                  4 => 'image_svg_inline',
                  5 => 'image_svg_animate',
                  6 => 'image_svg_color',
                  7 => 'image_vertical_align',
                ),
              ),
              2 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'nav_item' => 
  array (
    'name' => 'nav_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Content',
        'source' => true,
      ),
      'meta' => 
      array (
        'label' => 'Subtitle',
        'source' => true,
      ),
      'image' => '${builder.image}',
      'image_alt' => '${builder.image_alt}',
      'icon' => 
      array (
        'label' => 'Icon',
        'description' => 'Instead of using a custom image, you can click on the pencil to pick an icon from the icon library.',
        'type' => 'icon',
        'source' => true,
        'enable' => '!image',
      ),
      'link' => 
      array (
        'label' => 'Link',
        'type' => 'link',
        'description' => 'Enter or pick a link, an image or a video file.',
        'attrs' => 
        array (
          'placeholder' => 'http://',
        ),
        'source' => true,
      ),
      'type' => 
      array (
        'label' => 'Type',
        'description' => 'Select the item type.',
        'type' => 'select',
        'options' => 
        array (
          'Item' => '',
          'Heading' => 'heading',
          'Divider' => 'divider',
        ),
        'source' => true,
      ),
      'active' => 
      array (
        'label' => 'Active',
        'description' => 'Highlight the item as the active item.',
        'type' => 'checkbox',
        'text' => 'Enable active state',
        'source' => true,
        'enable' => '!$match(type, \'divider|header\')',
      ),
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'image',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'link',
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'meta',
              2 => 'image',
              3 => 'image_alt',
              4 => 'icon',
              5 => 'link',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Item',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'type',
                  1 => 'active',
                ),
              ),
              1 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'image_focal_point',
                ),
              ),
              2 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'link_target',
                  1 => 'link_download',
                  2 => 'link_rel_nofollow',
                  3 => 'link_rel_noreferrer',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
  ),
  'overlay-slider' => 
  array (
    'name' => 'overlay-slider',
    'title' => 'Overlay Slider',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_title' => true,
      'show_meta' => true,
      'show_content' => true,
      'show_link' => true,
      'show_hover_image' => true,
      'show_hover_video' => true,
      'slider_width' => 'fixed',
      'slider_width_default' => '1-1',
      'slider_width_medium' => '1-3',
      'slider_gap' => 'default',
      'slider_autoplay_pause' => true,
      'nav' => 'dotnav',
      'nav_below' => true,
      'nav_position' => 'bottom-center',
      'nav_position_margin' => 'medium',
      'nav_align' => 'center',
      'nav_breakpoint' => 's',
      'slidenav' => 'default',
      'slidenav_margin' => 'medium',
      'slidenav_breakpoint' => 's',
      'slidenav_outside_breakpoint' => 'xl',
      'overlay_mode' => 'cover',
      'overlay_position' => 'center',
      'overlay_transition' => 'fade',
      'title_hover_style' => 'reset',
      'title_element' => 'h3',
      'meta_style' => 'text-meta',
      'meta_align' => 'below-title',
      'meta_element' => 'div',
      'link_text' => 'Read more',
      'link_style' => 'default',
      'text_align' => 'center',
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'item' => 'overlay-slider_item',
        'media' => 
        array (
          0 => 
          array (
            'type' => 'image',
            'item' => 
            array (
              'title' => 'title',
              'image' => 'src',
            ),
          ),
          1 => 
          array (
            'type' => 'video',
            'item' => 
            array (
              'title' => 'title',
              'video' => 'src',
            ),
          ),
        ),
      ),
      'show_title' => 
      array (
        'label' => 'Display',
        'type' => 'checkbox',
        'text' => 'Show the title',
      ),
      'show_meta' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the meta text',
      ),
      'show_content' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the content',
      ),
      'show_link' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the link',
      ),
      'show_hover_image' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the hover image',
      ),
      'show_hover_video' => 
      array (
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the hover video',
      ),
      'slider_width' => 
      array (
        'label' => 'Item Width Mode',
        'description' => 'Define whether the width of the slider items is fixed or automatically expanded by its content widths.',
        'type' => 'select',
        'options' => 
        array (
          'Fixed' => 'fixed',
          'Auto' => '',
        ),
      ),
      'height_viewport' => 
      array (
        'type' => 'select',
        'options' => 
        array (
          'Auto' => '',
          'Viewport' => 'viewport',
          'Viewport (Subtract Next Section)' => 'section',
        ),
        'enable' => 'slider_width',
      ),
      'height_viewport_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => '100',
          'min' => 0,
          'max' => 100,
          'step' => 10,
          'class' => 'uk-form-width-xsmall',
        ),
        'enable' => 'slider_width && height_viewport == \'viewport\'',
      ),
      'height_viewport_offset' => 
      array (
        'type' => 'checkbox',
        'text' => 'Subtract height above',
        'enable' => 'slider_width && height_viewport == \'viewport\' && (height_viewport_height || 0) <= 100 || height_viewport == \'section\'',
      ),
      'height_expand' => 
      array (
        'type' => 'checkbox',
        'text' => 'Fill the available column space',
        'enable' => 'slider_width && !height_viewport',
      ),
      'slider_min_height' => 
      array (
        'label' => 'Min Height',
        'description' => 'Use an optional minimum height to prevent the slider from becoming smaller than its content on small devices.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 200,
          'max' => 800,
          'step' => 50,
        ),
      ),
      'slider_gap' => 
      array (
        'label' => 'Column Gap',
        'description' => 'Set the size of the gap between the grid columns.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => 'default',
          'Large' => 'large',
          'None' => '',
        ),
      ),
      'slider_divider' => 
      array (
        'label' => 'Divider',
        'description' => 'Show a divider between grid columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'slider_gap',
      ),
      'slider_row_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Center grid rows vertically.',
        'type' => 'checkbox',
        'text' => 'Center rows',
        'enable' => 'slider_width',
      ),
      'slider_width_default' => 
      array (
        'label' => 'Phone Portrait',
        'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
        'type' => 'select',
        'options' => 
        array (
          '100%' => '1-1',
          '83%' => '5-6',
          '80%' => '4-5',
          '60%' => '3-5',
          '50%' => '1-2',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          '16%' => '1-6',
        ),
        'enable' => 'slider_width',
      ),
      'slider_width_small' => 
      array (
        'label' => 'Phone Landscape',
        'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '100%' => '1-1',
          '83%' => '5-6',
          '80%' => '4-5',
          '60%' => '3-5',
          '50%' => '1-2',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          '16%' => '1-6',
        ),
        'enable' => 'slider_width',
      ),
      'slider_width_medium' => 
      array (
        'label' => 'Tablet Landscape',
        'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '100%' => '1-1',
          '83%' => '5-6',
          '80%' => '4-5',
          '60%' => '3-5',
          '50%' => '1-2',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          '16%' => '1-6',
        ),
        'enable' => 'slider_width',
      ),
      'slider_width_large' => 
      array (
        'label' => 'Desktop',
        'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '100%' => '1-1',
          '83%' => '5-6',
          '80%' => '4-5',
          '60%' => '3-5',
          '50%' => '1-2',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          '16%' => '1-6',
        ),
        'enable' => 'slider_width',
      ),
      'slider_width_xlarge' => 
      array (
        'label' => 'Large Screens',
        'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '100%' => '1-1',
          '83%' => '5-6',
          '80%' => '4-5',
          '60%' => '3-5',
          '50%' => '1-2',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          '16%' => '1-6',
        ),
        'enable' => 'slider_width',
      ),
      'slider_sets' => 
      array (
        'label' => 'Sets',
        'description' => 'Group items into sets. The number of items within a set depends on the defined item width, e.g. <i>33%</i> means that each set contains 3 items.',
        'type' => 'checkbox',
        'text' => 'Slide all visible items at once',
        'enable' => '!slider_parallax',
      ),
      'slider_center' => 
      array (
        'label' => 'Center',
        'type' => 'checkbox',
        'text' => 'Center the active slide',
      ),
      'slider_finite' => 
      array (
        'label' => 'Finite',
        'type' => 'checkbox',
        'text' => 'Disable infinite scrolling',
      ),
      'slider_velocity' => 
      array (
        'label' => 'Velocity',
        'description' => 'Set the velocity in pixels per millisecond.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 0.2,
          'max' => 3,
          'step' => 0.1,
          'placeholder' => '1',
        ),
        'enable' => '!slider_parallax',
      ),
      'slider_autoplay' => 
      array (
        'label' => 'Autoplay',
        'type' => 'checkbox',
        'text' => 'Enable autoplay',
        'enable' => '!slider_parallax',
      ),
      'slider_autoplay_pause' => 
      array (
        'type' => 'checkbox',
        'text' => 'Pause autoplay on hover',
        'enable' => '!slider_parallax && slider_autoplay',
      ),
      'slider_autoplay_interval' => 
      array (
        'label' => 'Autoplay Interval',
        'description' => 'Set the autoplay interval in seconds.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 5,
          'max' => 15,
          'step' => 1,
          'placeholder' => '7',
        ),
        'enable' => '!slider_parallax && slider_autoplay',
      ),
      'slider_parallax' => 
      array (
        'label' => 'Parallax',
        'description' => 'Add a stepless parallax animation based on the scroll position.',
        'type' => 'checkbox',
        'text' => 'Enable parallax effect',
      ),
      'slider_parallax_easing' => 
      array (
        'label' => 'Parallax Easing',
        'description' => 'Set the animation easing. Zero transitions at an even speed, a negative value starts off quickly while a positive value starts off slowly.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => -2,
          'max' => 2,
          'step' => 0.1,
        ),
        'enable' => 'slider_parallax',
      ),
      'slider_parallax_target' => 
      array (
        'label' => 'Parallax Target',
        'description' => 'The animation starts and stops depending on the element position in the viewport. Alternatively, use the position of a parent container.',
        'type' => 'select',
        'options' => 
        array (
          'Element' => '',
          'Column' => '!.tm-grid-expand>*',
          'Row' => '!.tm-grid-expand',
          'Section' => '!.uk-section',
          'Next Section' => '![class*=\'uk-section-\'] ~ [class*=\'uk-section-\']',
        ),
        'enable' => 'slider_parallax',
      ),
      'slider_parallax_start' => 
      array (
        'enable' => 'slider_parallax',
      ),
      'slider_parallax_end' => 
      array (
        'enable' => 'slider_parallax',
      ),
      'nav' => 
      array (
        'label' => 'Navigation',
        'description' => 'Select the navigation type.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Dotnav' => 'dotnav',
        ),
      ),
      'nav_below' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show below slider',
        'enable' => 'nav',
      ),
      'nav_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show on hover only',
        'enable' => 'nav && !nav_below',
      ),
      'nav_vertical' => 
      array (
        'type' => 'checkbox',
        'text' => 'Vertical navigation',
        'enable' => 'nav && !nav_below',
      ),
      'nav_position' => 
      array (
        'label' => 'Position',
        'description' => 'Select the position of the navigation.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'show' => 'nav && !nav_below',
      ),
      'nav_align' => 
      array (
        'label' => 'Position',
        'description' => 'Align the navigation items.',
        'type' => 'select',
        'options' => 
        array (
          'Left' => 'left',
          'Center' => 'center',
          'Right' => 'right',
        ),
        'show' => 'nav && nav_below',
      ),
      'nav_position_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Apply a margin between the navigation and the slideshow container.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'show' => 'nav && !nav_below',
      ),
      'nav_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Set the vertical margin.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'show' => 'nav && nav_below',
      ),
      'nav_breakpoint' => 
      array (
        'label' => 'Breakpoint',
        'description' => 'Display the navigation only on this device width and larger.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'nav',
      ),
      'slidenav' => 
      array (
        'label' => 'Position',
        'description' => 'Select the position of the slidenav.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Outside' => 'outside',
          'Top Left' => 'top-left',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'enable' => '!slider_parallax',
      ),
      'slidenav_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show on hover only',
        'enable' => 'slidenav && !slider_parallax',
      ),
      'slidenav_large' => 
      array (
        'type' => 'checkbox',
        'text' => 'Larger style',
        'enable' => 'slidenav && !slider_parallax',
      ),
      'slidenav_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Apply a margin between the slidenav and the slider container.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'enable' => 'slidenav && !slider_parallax',
      ),
      'slidenav_breakpoint' => 
      array (
        'label' => 'Breakpoint',
        'description' => 'Display the slidenav only on this device width and larger.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'slidenav && !slider_parallax',
      ),
      'slidenav_outside_breakpoint' => 
      array (
        'label' => 'Outside Breakpoint',
        'description' => 'Display the slidenav outside only on this device width and larger. Otherwise, display it inside.',
        'type' => 'select',
        'options' => 
        array (
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'slidenav == \'outside\' && !slider_parallax',
      ),
      'image_expand' => 
      array (
        'label' => 'Height',
        'description' => 'Expand the height of the image to fill the available space in the item.',
        'type' => 'checkbox',
        'text' => 'Expand image',
      ),
      'overlay_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the whole overlay if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link overlay',
        'enable' => 'show_link',
      ),
      'overlay_mode' => 
      array (
        'label' => 'Mode',
        'description' => 'When using cover mode, you need to set the text color manually.',
        'type' => 'select',
        'options' => 
        array (
          'Cover' => 'cover',
          'Caption' => 'caption',
        ),
      ),
      'overlay_display' => 
      array (
        'label' => 'Display',
        'description' => 'Show the overlay only on hover or when the slide becomes active.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Hover' => 'hover',
          'Active' => 'active',
        ),
      ),
      'overlay_active_first' => 
      array (
        'type' => 'checkbox',
        'text' => 'Make only first item active',
        'enable' => 'overlay_display == \'active\'',
      ),
      'overlay_transition_background' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate background only',
        'enable' => 'overlay_display && overlay_mode == \'cover\' && overlay_style',
      ),
      'overlay_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select the style for the overlay.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Overlay Default' => 'overlay-default',
          'Overlay Primary' => 'overlay-primary',
          'Tile Default' => 'tile-default',
          'Tile Muted' => 'tile-muted',
          'Tile Primary' => 'tile-primary',
          'Tile Secondary' => 'tile-secondary',
        ),
      ),
      'overlay_position' => 
      array (
        'label' => 'Position',
        'description' => 'Select the overlay or content position.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Bottom' => 'bottom',
          'Left' => 'left',
          'Right' => 'right',
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
          'Center' => 'center',
          'Center Left' => 'center-left',
          'Center Right' => 'center-right',
        ),
      ),
      'overlay_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Apply a margin between the overlay and the image container.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'enable' => 'overlay_style',
      ),
      'overlay_padding' => 
      array (
        'label' => 'Padding',
        'description' => 'Set the padding between the overlay and its content.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Small' => 'small',
          'Large' => 'large',
          'None' => 'none',
        ),
      ),
      'overlay_maxwidth' => 
      array (
        'label' => 'Max Width',
        'description' => 'Set the maximum content width.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
        'enable' => '!$match(overlay_position, \'^(top|bottom)$\')',
      ),
      'text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
      ),
      'text_color_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Inverse on hover or when active',
        'enable' => '!overlay_style && (show_hover_image || show_hover_video) || overlay_style && overlay_mode == \'cover\' && overlay_display && overlay_transition_background',
      ),
      'text_blend' => 
      array (
        'type' => 'checkbox',
        'text' => 'Blend with image',
        'enable' => '!overlay_style',
      ),
      'overlay_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the overlay when it appears on hover or when active.',
        'type' => 'select',
        'options' => 
        array (
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'overlay_display',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
      ),
      'image_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select an image transition.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
        ),
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
      ),
      'media_background' => '${builder.media_background}',
      'media_blend_mode' => '${builder.media_blend_mode}',
      'media_overlay' => '${builder.media_overlay}',
      'media_overlay_gradient' => '${builder.media_overlay_gradient}',
      'video_autoplay' => 
      array (
        'label' => 'Video Autoplay',
        'description' => 'Enable autoplay immediately, start as soon as the video enters the viewport or only on hover.',
        'type' => 'select',
        'options' => 
        array (
          'On' => '',
          'Inview' => 'inview',
          'Hover' => 'hover',
        ),
      ),
      'video_autoplay_restart' => 
      array (
        'type' => 'checkbox',
        'text' => 'Restart from beginning',
        'enable' => 'video_autoplay',
      ),
      'title_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the title when the overlay appears on hover or when active.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'show_title && overlay_display',
      ),
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
        ),
        'enable' => 'show_title',
      ),
      'title_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the title if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link title',
        'enable' => 'show_title && show_link',
      ),
      'title_hover_style' => 
      array (
        'label' => 'Hover Style',
        'description' => 'Set the hover style for a linked title.',
        'type' => 'select',
        'options' => 
        array (
          'None' => 'reset',
          'Heading Link' => 'heading',
          'Default Link' => '',
        ),
        'enable' => 'show_title && show_link && (title_link || overlay_link)',
      ),
      'title_decoration' => 
      array (
        'label' => 'Decoration',
        'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Bullet' => 'bullet',
          'Line' => 'line',
        ),
        'enable' => 'show_title',
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
        'enable' => 'show_title',
      ),
      'title_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
        'enable' => 'show_title',
      ),
      'title_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_title',
      ),
      'title_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_title',
      ),
      'title_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_title && (title_display != \'lightbox\' && lightbox || !lightbox)',
      ),
      'meta_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the meta text when the overlay appears on hover or when active.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'show_meta && overlay_display',
      ),
      'meta_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined meta text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_meta',
      ),
      'meta_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_meta',
      ),
      'meta_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the meta text.',
        'type' => 'select',
        'options' => 
        array (
          'Above Title' => 'above-title',
          'Below Title' => 'below-title',
          'Below Content' => 'below-content',
        ),
        'enable' => 'show_meta',
      ),
      'meta_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_meta',
      ),
      'meta_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_meta',
      ),
      'meta_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_meta',
      ),
      'content_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the content when the overlay appears on hover or when active.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'show_content && overlay_display',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_content',
      ),
      'content_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_content',
      ),
      'content_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_content',
      ),
      'link_text' => 
      array (
        'label' => 'Text',
        'description' => 'Enter the text for the link.',
        'enable' => 'show_link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'ARIA Label',
        'description' => 'Enter a descriptive text label to make it accessible if the link has no visible text.',
        'enable' => 'show_link',
      ),
      'link_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the link when the overlay appears on hover or when active.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'show_link && overlay_display',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'show_link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'show_link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'show_link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'show_link',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link' => '',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
        'enable' => 'show_link',
      ),
      'link_size' => 
      array (
        'label' => 'Button Size',
        'description' => 'Set the button size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Full width button',
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_link',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'container_padding_remove' => '${builder.container_padding_remove}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-nav</code>, <code>.el-item</code>, <code>.el-slidenav</code>, <code>.el-image</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-link</code>, <code>.el-hover-image</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-item',
            2 => '.el-nav',
            3 => '.el-slidenav',
            4 => '.el-image',
            5 => '.el-title',
            6 => '.el-meta',
            7 => '.el-content',
            8 => '.el-link',
            9 => '.el-hover-image',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'show_title',
              2 => 'show_meta',
              3 => 'show_content',
              4 => 'show_link',
              5 => 'show_hover_image',
              6 => 'show_hover_video',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Slider',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'slider_width',
                  1 => 
                  array (
                    'label' => 'Height',
                    'description' => 'The height will adapt automatically based on its content. Alternatively, the height can adapt to the height of the viewport. <br><br>Note: Make sure no height is set in the section settings when using one of the viewport options.',
                    'name' => '_height_viewport',
                    'type' => 'grid',
                    'width' => 'expand,auto',
                    'gap' => 'small',
                    'fields' => 
                    array (
                      0 => 'height_viewport',
                      1 => 'height_viewport_height',
                    ),
                  ),
                  2 => 'height_viewport_offset',
                  3 => 'height_expand',
                  4 => 'slider_min_height',
                  5 => 'slider_gap',
                  6 => 'slider_divider',
                  7 => 'slider_row_align',
                ),
              ),
              1 => 
              array (
                'label' => 'Item Width',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'slider_width_default',
                  1 => 'slider_width_small',
                  2 => 'slider_width_medium',
                  3 => 'slider_width_large',
                  4 => 'slider_width_xlarge',
                ),
              ),
              2 => 
              array (
                'label' => 'Animation',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'slider_sets',
                  1 => 'slider_center',
                  2 => 'slider_finite',
                  3 => 'slider_velocity',
                  4 => 'slider_autoplay',
                  5 => 'slider_autoplay_pause',
                  6 => 'slider_autoplay_interval',
                  7 => 'slider_parallax',
                  8 => 'slider_parallax_easing',
                  9 => 'slider_parallax_target',
                  10 => 
                  array (
                    'label' => 'Parallax Start/End',
                    'description' => 'The animation starts when the element enters the viewport and ends when it leaves the viewport. Optionally, set a start and end offset, e.g. <code>100px</code>, <code>50vh</code> or <code>50vh + 50%</code>. Percent relates to the target\'s height.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'slider_parallax_start',
                      1 => 'slider_parallax_end',
                    ),
                  ),
                ),
              ),
              3 => 
              array (
                'label' => 'Navigation',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'nav',
                  1 => 'nav_below',
                  2 => 'nav_hover',
                  3 => 'nav_vertical',
                  4 => 'nav_position',
                  5 => 'nav_align',
                  6 => 'nav_position_margin',
                  7 => 'nav_margin',
                  8 => 'nav_breakpoint',
                ),
              ),
              4 => 
              array (
                'label' => 'Slidenav',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'slidenav',
                  1 => 'slidenav_hover',
                  2 => 'slidenav_large',
                  3 => 'slidenav_margin',
                  4 => 'slidenav_breakpoint',
                  5 => 'slidenav_outside_breakpoint',
                ),
              ),
              5 => 
              array (
                'label' => 'Item',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'image_expand',
                  1 => 'overlay_link',
                ),
              ),
              6 => 
              array (
                'label' => 'Overlay',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'overlay_mode',
                  1 => 'overlay_display',
                  2 => 'overlay_active_first',
                  3 => 'overlay_transition_background',
                  4 => 'overlay_style',
                  5 => 'overlay_position',
                  6 => 'overlay_margin',
                  7 => 'overlay_padding',
                  8 => 'overlay_maxwidth',
                  9 => 'text_color',
                  10 => 'text_color_hover',
                  11 => 'text_blend',
                  12 => 'overlay_transition',
                ),
              ),
              7 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_loading',
                  2 => 'image_transition',
                  3 => 'image_border',
                  4 => 'media_background',
                  5 => 'media_blend_mode',
                  6 => 'media_overlay',
                  7 => 'video_autoplay',
                  8 => 'video_autoplay_restart',
                ),
              ),
              8 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_transition',
                  1 => 'title_style',
                  2 => 'title_link',
                  3 => 'title_hover_style',
                  4 => 'title_decoration',
                  5 => 'title_font_family',
                  6 => 'title_color',
                  7 => 'title_element',
                  8 => 'title_margin',
                  9 => 'title_margin_auto',
                ),
              ),
              9 => 
              array (
                'label' => 'Meta',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'meta_transition',
                  1 => 'meta_style',
                  2 => 'meta_color',
                  3 => 'meta_align',
                  4 => 'meta_element',
                  5 => 'meta_margin',
                  6 => 'meta_margin_auto',
                ),
              ),
              10 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_transition',
                  1 => 'content_style',
                  2 => 'content_margin',
                  3 => 'content_margin_auto',
                ),
              ),
              11 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_text',
                  1 => 'link_aria_label',
                  2 => 'link_transition',
                  3 => 'link_target',
                  4 => 'link_download',
                  5 => 'link_rel_nofollow',
                  6 => 'link_rel_noreferrer',
                  7 => 'link_style',
                  8 => 'link_size',
                  9 => 'link_fullwidth',
                  10 => 'link_margin',
                ),
              ),
              12 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                  20 => 'container_padding_remove',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'overlay-slider_item' => 
  array (
    'name' => 'overlay-slider_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'image',
        'source' => true,
        'show' => '!video',
        'altRef' => '%name%_alt',
      ),
      'video' => 
      array (
        'label' => 'Video',
        'type' => 'video',
        'source' => true,
        'show' => '!image',
      ),
      '_media' => 
      array (
        'type' => 'button-panel',
        'panel' => 'builder-overlay-slider-item-media',
        'text' => 'Edit Settings',
        'show' => 'image || video',
      ),
      'image_alt' => 
      array (
        'label' => 'Image Alt',
        'source' => true,
        'show' => 'image && !video',
      ),
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'meta' => 
      array (
        'label' => 'Meta',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'link' => '${builder.link}',
      'link_text' => 
      array (
        'label' => 'Link Text',
        'description' => 'Set a different link text for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'Link ARIA Label',
        'description' => 'Set a different link ARIA label for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'hover_image' => 
      array (
        'label' => 'Hover Image',
        'description' => 'Select an optional image that appears on hover.',
        'type' => 'image',
        'source' => true,
        'show' => '!hover_video',
      ),
      'hover_video' => 
      array (
        'label' => 'Hover Video',
        'description' => 'Select an optional video that appears on hover.',
        'type' => 'video',
        'source' => true,
        'show' => '!hover_image',
      ),
      'item_element' => '${builder.html_element_item}',
      'text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set a different text color for this item.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
      ),
      'text_color_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Inverse the text color on hover',
      ),
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'hover_image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'image',
              1 => 'video',
              2 => '_media',
              3 => 'image_alt',
              4 => 'title',
              5 => 'meta',
              6 => 'content',
              7 => 'link',
              8 => 'link_text',
              9 => 'link_aria_label',
              10 => 'hover_image',
              11 => 'hover_video',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Item',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'item_element',
                ),
              ),
              1 => 
              array (
                'label' => 'Overlay',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'text_color',
                  1 => 'text_color_hover',
                ),
              ),
              2 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'image_focal_point',
                ),
              ),
              3 => 
              array (
                'label' => 'Hover Image',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'hover_image_focal_point',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
    'panels' => 
    array (
      'builder-overlay-slider-item-media' => 
      array (
        'title' => 'Media',
        'width' => 500,
        'fields' => 
        array (
          'media_background' => '${builder.media_background}',
          'media_blend_mode' => '${builder.media_blend_mode}',
          'media_overlay' => '${builder.media_overlay}',
          'media_overlay_gradient' => '${builder.media_overlay_gradient}',
        ),
        'fieldset' => 
        array (
          'default' => 
          array (
            'fields' => 
            array (
              0 => 'media_background',
              1 => 'media_blend_mode',
              2 => 'media_overlay',
            ),
          ),
        ),
      ),
    ),
  ),
  'overlay' => 
  array (
    'name' => 'overlay',
    'title' => 'Overlay',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'link_text' => 'Read more',
      'overlay_mode' => 'cover',
      'overlay_hover' => true,
      'overlay_style' => 'overlay-primary',
      'overlay_position' => 'center',
      'text_color' => 'light',
      'overlay_transition' => 'fade',
      'title_hover_style' => 'reset',
      'title_element' => 'h3',
      'meta_style' => 'text-meta',
      'meta_align' => 'below-title',
      'meta_element' => 'div',
      'link_style' => 'default',
      'text_align' => 'center',
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'image',
        'source' => true,
        'show' => '!video',
        'altRef' => '%name%_alt',
      ),
      'video' => 
      array (
        'label' => 'Video',
        'type' => 'video',
        'source' => true,
        'show' => '!image',
      ),
      '_media' => 
      array (
        'type' => 'button-panel',
        'panel' => 'builder-overlay-media',
        'text' => 'Edit Settings',
        'show' => 'image || video',
      ),
      'image_alt' => 
      array (
        'label' => 'Image Alt',
        'source' => true,
        'show' => 'image && !video',
      ),
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'meta' => 
      array (
        'label' => 'Meta',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'link' => '${builder.link}',
      'link_text' => 
      array (
        'label' => 'Link Text',
        'description' => 'Enter the text for the link.',
        'source' => true,
        'enable' => 'link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'Link ARIA Label',
        'description' => 'Enter a descriptive text label to make it accessible if the link has no visible text.',
        'source' => true,
        'enable' => 'link',
      ),
      'hover_image' => 
      array (
        'label' => 'Hover Image',
        'description' => 'Select an optional image that appears on hover.',
        'type' => 'image',
        'source' => true,
        'show' => '!hover_video',
      ),
      'hover_video' => 
      array (
        'label' => 'Hover Video',
        'description' => 'Select an optional video that appears on hover.',
        'type' => 'video',
        'source' => true,
        'show' => '!hover_image',
      ),
      'height_expand' => 
      array (
        'label' => 'Height',
        'description' => 'Expand the height of the element to fill the available space in the column.',
        'type' => 'checkbox',
        'text' => 'Fill the available column space',
      ),
      'overlay_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the whole overlay if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link overlay',
        'enable' => 'link',
      ),
      'html_element' => '${builder.html_element}',
      'overlay_mode' => 
      array (
        'label' => 'Mode',
        'description' => 'When using cover mode, you need to set the text color manually.',
        'type' => 'select',
        'options' => 
        array (
          'Cover' => 'cover',
          'Caption' => 'caption',
        ),
      ),
      'overlay_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Display overlay on hover',
      ),
      'overlay_transition_background' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate background only',
        'enable' => 'overlay_hover && overlay_mode == \'cover\' && overlay_style',
      ),
      'overlay_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a style for the overlay.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Overlay Default' => 'overlay-default',
          'Overlay Primary' => 'overlay-primary',
          'Tile Default' => 'tile-default',
          'Tile Muted' => 'tile-muted',
          'Tile Primary' => 'tile-primary',
          'Tile Secondary' => 'tile-secondary',
        ),
      ),
      'overlay_position' => 
      array (
        'label' => 'Position',
        'description' => 'Select the overlay or content position.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Bottom' => 'bottom',
          'Left' => 'left',
          'Right' => 'right',
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
          'Center' => 'center',
          'Center Left' => 'center-left',
          'Center Right' => 'center-right',
        ),
      ),
      'overlay_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Apply a margin between the overlay and the image container.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'enable' => 'overlay_style',
      ),
      'overlay_padding' => 
      array (
        'label' => 'Padding',
        'description' => 'Set the padding between the overlay and its content.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Small' => 'small',
          'Large' => 'large',
          'None' => 'none',
        ),
      ),
      'overlay_maxwidth' => 
      array (
        'label' => 'Max Width',
        'description' => 'Set the maximum content width.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
        'enable' => '!$match(overlay_position, \'^(top|bottom)$\')',
      ),
      'text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
      ),
      'text_color_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Inverse the text color on hover',
        'enable' => '!overlay_style && (hover_image || hover_video) || overlay_style && overlay_mode == \'cover\' && overlay_hover && overlay_transition_background',
      ),
      'text_blend' => 
      array (
        'type' => 'checkbox',
        'text' => 'Blend with image',
        'enable' => '!overlay_style',
      ),
      'overlay_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the overlay when it appears on hover.',
        'type' => 'select',
        'options' => 
        array (
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'overlay_hover',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
      ),
      'image_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select an image transition. If the hover image is set, the transition takes place between the two images. If <i>None</i> is selected, the hover image fades in.',
        'type' => 'select',
        'options' => 
        array (
          'None (Fade if hover image)' => '',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
        ),
      ),
      'image_transition_border' => 
      array (
        'type' => 'checkbox',
        'text' => 'Border',
      ),
      'image_min_height' => 
      array (
        'label' => 'Min Height',
        'description' => 'Use an optional minimum height to prevent images from becoming smaller than the content on small devices.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 200,
          'max' => 500,
          'step' => 20,
        ),
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => '!image_transition_border && !image_box_decoration',
      ),
      'image_box_shadow' => 
      array (
        'label' => 'Box Shadow',
        'description' => 'Select the image box shadow size.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
      ),
      'image_hover_box_shadow' => 
      array (
        'label' => 'Hover Box Shadow',
        'description' => 'Select the image box shadow size on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
      ),
      'image_box_decoration' => 
      array (
        'label' => 'Box Decoration',
        'description' => 'Select the image box decoration style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Floating Shadow' => 'shadow',
          'Mask' => 'mask',
        ),
      ),
      'image_box_decoration_inverse' => 
      array (
        'type' => 'checkbox',
        'text' => 'Inverse style',
        'enable' => '$match(image_box_decoration, \'^(default|primary|secondary)$\')',
      ),
      'video_autoplay' => 
      array (
        'label' => 'Video Autoplay',
        'description' => 'Enable autoplay immediately, start as soon as the video enters the viewport or only on hover.',
        'type' => 'select',
        'options' => 
        array (
          'On' => '',
          'Inview' => 'inview',
          'Hover' => 'hover',
        ),
      ),
      'video_autoplay_restart' => 
      array (
        'type' => 'checkbox',
        'text' => 'Restart from beginning',
        'enable' => 'video_autoplay',
      ),
      'hover_image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'title_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the title when the overlay appears on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'title && overlay_hover',
      ),
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
        ),
        'enable' => 'title',
      ),
      'title_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the title if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link title',
        'enable' => 'title && link',
      ),
      'title_hover_style' => 
      array (
        'label' => 'Hover Style',
        'description' => 'Set the hover style for a linked title.',
        'type' => 'select',
        'options' => 
        array (
          'None' => 'reset',
          'Heading Link' => 'heading',
          'Default Link' => '',
        ),
        'enable' => 'title && link && (title_link || overlay_link)',
      ),
      'title_decoration' => 
      array (
        'label' => 'Decoration',
        'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Bullet' => 'bullet',
          'Line' => 'line',
        ),
        'enable' => 'title',
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
        'enable' => 'title',
      ),
      'title_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
        'enable' => 'title',
      ),
      'title_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'title',
      ),
      'title_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'title',
      ),
      'title_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'title',
      ),
      'meta_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the meta text when the overlay appears on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'meta && overlay_hover',
      ),
      'meta_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined meta text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'meta',
      ),
      'meta_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'meta',
      ),
      'meta_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the meta text.',
        'type' => 'select',
        'options' => 
        array (
          'Above Title' => 'above-title',
          'Below Title' => 'below-title',
          'Below Content' => 'below-content',
        ),
        'enable' => 'meta',
      ),
      'meta_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'meta',
      ),
      'meta_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'meta',
      ),
      'meta_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'meta',
      ),
      'content_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the content when the overlay appears on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'content && overlay_hover',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'content',
      ),
      'content_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'content',
      ),
      'content_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'content',
      ),
      'link_transition' => 
      array (
        'label' => 'Transition',
        'description' => 'Select a transition for the link when the overlay appears on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
        'enable' => 'link && link_text && overlay_hover',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'link',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link' => '',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
        'enable' => 'link && link_text',
      ),
      'link_size' => 
      array (
        'label' => 'Button Size',
        'description' => 'Set the button size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => 'link && link_text && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Full width button',
        'enable' => 'link && link_text && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'link && link_text',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'container_padding_remove' => '${builder.container_padding_remove}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-image</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-link</code>, <code>.el-hover-image</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-image',
            2 => '.el-title',
            3 => '.el-meta',
            4 => '.el-content',
            5 => '.el-link',
            6 => '.el-hover-image',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'image',
              1 => 'video',
              2 => '_media',
              3 => 'image_alt',
              4 => 'title',
              5 => 'meta',
              6 => 'content',
              7 => 'link',
              8 => 'link_text',
              9 => 'link_aria_label',
              10 => 'hover_image',
              11 => 'hover_video',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Container',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'height_expand',
                  1 => 'overlay_link',
                  2 => 'html_element',
                ),
              ),
              1 => 
              array (
                'label' => 'Overlay',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'overlay_mode',
                  1 => 'overlay_hover',
                  2 => 'overlay_transition_background',
                  3 => 'overlay_style',
                  4 => 'overlay_position',
                  5 => 'overlay_margin',
                  6 => 'overlay_padding',
                  7 => 'overlay_maxwidth',
                  8 => 'text_color',
                  9 => 'text_color_hover',
                  10 => 'text_blend',
                  11 => 'overlay_transition',
                ),
              ),
              2 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_focal_point',
                  2 => 'image_loading',
                  3 => 'image_transition',
                  4 => 'image_transition_border',
                  5 => 'image_min_height',
                  6 => 'image_border',
                  7 => 'image_box_shadow',
                  8 => 'image_hover_box_shadow',
                  9 => 'image_box_decoration',
                  10 => 'image_box_decoration_inverse',
                  11 => 'video_autoplay',
                  12 => 'video_autoplay_restart',
                ),
              ),
              3 => 
              array (
                'label' => 'Hover Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'hover_image_focal_point',
                ),
              ),
              4 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_transition',
                  1 => 'title_style',
                  2 => 'title_link',
                  3 => 'title_hover_style',
                  4 => 'title_decoration',
                  5 => 'title_font_family',
                  6 => 'title_color',
                  7 => 'title_element',
                  8 => 'title_margin',
                  9 => 'title_margin_auto',
                ),
              ),
              5 => 
              array (
                'label' => 'Meta',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'meta_transition',
                  1 => 'meta_style',
                  2 => 'meta_color',
                  3 => 'meta_align',
                  4 => 'meta_element',
                  5 => 'meta_margin',
                  6 => 'meta_margin_auto',
                ),
              ),
              6 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_transition',
                  1 => 'content_style',
                  2 => 'content_margin',
                  3 => 'content_margin_auto',
                ),
              ),
              7 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_transition',
                  1 => 'link_target',
                  2 => 'link_download',
                  3 => 'link_rel_nofollow',
                  4 => 'link_rel_noreferrer',
                  5 => 'link_style',
                  6 => 'link_size',
                  7 => 'link_fullwidth',
                  8 => 'link_margin',
                ),
              ),
              8 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                  20 => 'container_padding_remove',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
    'panels' => 
    array (
      'builder-overlay-media' => 
      array (
        'title' => 'Media',
        'width' => 500,
        'fields' => 
        array (
          'media_background' => '${builder.media_background}',
          'media_blend_mode' => '${builder.media_blend_mode}',
          'media_overlay' => '${builder.media_overlay}',
          'media_overlay_gradient' => '${builder.media_overlay_gradient}',
        ),
        'fieldset' => 
        array (
          'default' => 
          array (
            'fields' => 
            array (
              0 => 'media_background',
              1 => 'media_blend_mode',
              2 => 'media_overlay',
            ),
          ),
        ),
      ),
    ),
  ),
  'panel-slider' => 
  array (
    'name' => 'panel-slider',
    'title' => 'Panel Slider',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_title' => true,
      'show_meta' => true,
      'show_content' => true,
      'show_image' => true,
      'show_video' => true,
      'show_link' => true,
      'show_hover_image' => true,
      'show_hover_video' => true,
      'slider_width' => 'fixed',
      'slider_width_default' => '1-1',
      'slider_width_medium' => '1-3',
      'slider_gap' => 'default',
      'slider_autoplay_pause' => true,
      'nav' => 'dotnav',
      'nav_align' => 'center',
      'nav_breakpoint' => 's',
      'slidenav' => 'outside',
      'slidenav_margin' => 'medium',
      'slidenav_breakpoint' => 'xl',
      'slidenav_outside_breakpoint' => 'xl',
      'panel_match' => true,
      'title_hover_style' => 'reset',
      'title_element' => 'h3',
      'title_align' => 'top',
      'title_grid_width' => '1-2',
      'title_grid_breakpoint' => 'm',
      'meta_style' => 'text-meta',
      'meta_align' => 'below-title',
      'meta_element' => 'div',
      'content_column_breakpoint' => 'm',
      'image_align' => 'top',
      'image_grid_width' => '1-2',
      'image_grid_breakpoint' => 'm',
      'image_svg_color' => 'emphasis',
      'link_text' => 'Read more',
      'link_style' => 'default',
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'item' => 'panel-slider_item',
        'media' => 
        array (
          0 => 
          array (
            'type' => 'image',
            'item' => 
            array (
              'title' => 'title',
              'image' => 'src',
            ),
          ),
          1 => 
          array (
            'type' => 'video',
            'item' => 
            array (
              'title' => 'title',
              'video' => 'src',
            ),
          ),
        ),
      ),
      'show_title' => 
      array (
        'label' => 'Display',
        'type' => 'checkbox',
        'text' => 'Show the title',
      ),
      'show_meta' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the meta text',
      ),
      'show_content' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the content',
      ),
      'show_image' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the image',
      ),
      'show_video' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the video',
      ),
      'show_link' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the link',
      ),
      'show_hover_image' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the hover image',
      ),
      'show_hover_video' => 
      array (
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the hover video',
      ),
      'slider_width' => 
      array (
        'label' => 'Item Width Mode',
        'description' => 'Define whether the width of the slider items is fixed or automatically expanded by its content widths.',
        'type' => 'select',
        'options' => 
        array (
          'Fixed' => 'fixed',
          'Auto' => '',
        ),
      ),
      'height_expand' => 
      array (
        'label' => 'Height',
        'type' => 'checkbox',
        'text' => 'Fill the available column space',
        'enable' => 'slider_width',
      ),
      'slider_gap' => 
      array (
        'label' => 'Column Gap',
        'description' => 'Set the size of the gap between the grid columns.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => 'default',
          'Large' => 'large',
          'None' => '',
        ),
      ),
      'slider_divider' => 
      array (
        'label' => 'Divider',
        'description' => 'Show a divider between grid columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'slider_gap',
      ),
      'slider_row_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Center grid rows vertically.',
        'type' => 'checkbox',
        'text' => 'Center rows',
      ),
      'slider_width_default' => 
      array (
        'label' => 'Phone Portrait',
        'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
        'type' => 'select',
        'options' => 
        array (
          '100%' => '1-1',
          '83%' => '5-6',
          '80%' => '4-5',
          '60%' => '3-5',
          '50%' => '1-2',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          '16%' => '1-6',
        ),
        'enable' => 'slider_width',
      ),
      'slider_width_small' => 
      array (
        'label' => 'Phone Landscape',
        'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '100%' => '1-1',
          '83%' => '5-6',
          '80%' => '4-5',
          '60%' => '3-5',
          '50%' => '1-2',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          '16%' => '1-6',
        ),
        'enable' => 'slider_width',
      ),
      'slider_width_medium' => 
      array (
        'label' => 'Tablet Landscape',
        'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '100%' => '1-1',
          '83%' => '5-6',
          '80%' => '4-5',
          '60%' => '3-5',
          '50%' => '1-2',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          '16%' => '1-6',
        ),
        'enable' => 'slider_width',
      ),
      'slider_width_large' => 
      array (
        'label' => 'Desktop',
        'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '100%' => '1-1',
          '83%' => '5-6',
          '80%' => '4-5',
          '60%' => '3-5',
          '50%' => '1-2',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          '16%' => '1-6',
        ),
        'enable' => 'slider_width',
      ),
      'slider_width_xlarge' => 
      array (
        'label' => 'Large Screens',
        'description' => 'Set the item width for each breakpoint. <i>Inherit</i> refers to the item width of the next smaller screen size.',
        'type' => 'select',
        'options' => 
        array (
          'Inherit' => '',
          '100%' => '1-1',
          '83%' => '5-6',
          '80%' => '4-5',
          '60%' => '3-5',
          '50%' => '1-2',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          '16%' => '1-6',
        ),
        'enable' => 'slider_width',
      ),
      'slider_sets' => 
      array (
        'label' => 'Sets',
        'description' => 'Group items into sets. The number of items within a set depends on the defined item width, e.g. <i>33%</i> means that each set contains 3 items.',
        'type' => 'checkbox',
        'text' => 'Slide all visible items at once',
        'enable' => '!slider_parallax',
      ),
      'slider_center' => 
      array (
        'label' => 'Center',
        'type' => 'checkbox',
        'text' => 'Center the active slide',
      ),
      'slider_finite' => 
      array (
        'label' => 'Finite',
        'type' => 'checkbox',
        'text' => 'Disable infinite scrolling',
      ),
      'slider_velocity' => 
      array (
        'label' => 'Velocity',
        'description' => 'Set the velocity in pixels per millisecond.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 0.2,
          'max' => 3,
          'step' => 0.1,
          'placeholder' => '1',
        ),
        'enable' => '!slider_parallax',
      ),
      'slider_autoplay' => 
      array (
        'label' => 'Autoplay',
        'type' => 'checkbox',
        'text' => 'Enable autoplay',
        'enable' => '!slider_parallax',
      ),
      'slider_autoplay_pause' => 
      array (
        'type' => 'checkbox',
        'text' => 'Pause autoplay on hover',
        'enable' => '!slider_parallax && slider_autoplay',
      ),
      'slider_autoplay_interval' => 
      array (
        'label' => 'Autoplay Interval',
        'description' => 'Set the autoplay interval in seconds.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 5,
          'max' => 15,
          'step' => 1,
          'placeholder' => '7',
        ),
        'enable' => '!slider_parallax && slider_autoplay',
      ),
      'slider_parallax' => 
      array (
        'label' => 'Parallax',
        'description' => 'Add a stepless parallax animation based on the scroll position.',
        'type' => 'checkbox',
        'text' => 'Enable parallax effect',
      ),
      'slider_parallax_easing' => 
      array (
        'label' => 'Parallax Easing',
        'description' => 'Set the animation easing. Zero transitions at an even speed, a negative value starts off quickly while a positive value starts off slowly.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => -2,
          'max' => 2,
          'step' => 0.1,
        ),
        'enable' => 'slider_parallax',
      ),
      'slider_parallax_target' => 
      array (
        'label' => 'Parallax Target',
        'description' => 'The animation starts and stops depending on the element position in the viewport. Alternatively, use the position of a parent container.',
        'type' => 'select',
        'options' => 
        array (
          'Element' => '',
          'Column' => '!.tm-grid-expand>*',
          'Row' => '!.tm-grid-expand',
          'Section' => '!.uk-section',
          'Next Section' => '![class*=\'uk-section-\'] ~ [class*=\'uk-section-\']',
        ),
        'enable' => 'slider_parallax',
      ),
      'slider_parallax_start' => 
      array (
        'enable' => 'slider_parallax',
      ),
      'slider_parallax_end' => 
      array (
        'enable' => 'slider_parallax',
      ),
      'nav' => 
      array (
        'label' => 'Navigation',
        'description' => 'Select the navigation type.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Dotnav' => 'dotnav',
        ),
      ),
      'nav_align' => 
      array (
        'label' => 'Position',
        'description' => 'Align the navigation items.',
        'type' => 'select',
        'options' => 
        array (
          'Left' => 'left',
          'Center' => 'center',
          'Right' => 'right',
        ),
        'enable' => 'nav',
      ),
      'nav_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Set the vertical margin.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'enable' => 'nav',
      ),
      'nav_breakpoint' => 
      array (
        'label' => 'Breakpoint',
        'description' => 'Display the navigation only on this device width and larger.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'nav',
      ),
      'slidenav' => 
      array (
        'label' => 'Position',
        'description' => 'Select the position of the slidenav.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Outside' => 'outside',
          'Top Left' => 'top-left',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'enable' => '!slider_parallax',
      ),
      'slidenav_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show on hover only',
        'enable' => 'slidenav && !slider_parallax',
      ),
      'slidenav_large' => 
      array (
        'type' => 'checkbox',
        'text' => 'Larger style',
        'enable' => 'slidenav && !slider_parallax',
      ),
      'slidenav_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Apply a margin between the slidenav and the slider container.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'enable' => 'slidenav && !slider_parallax',
      ),
      'slidenav_breakpoint' => 
      array (
        'label' => 'Breakpoint',
        'description' => 'Display the slidenav only on this device width and larger.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'slidenav && !slider_parallax',
      ),
      'slidenav_outside_breakpoint' => 
      array (
        'label' => 'Outside Breakpoint',
        'description' => 'Display the slidenav outside only on this device width and larger. Otherwise, display it inside.',
        'type' => 'select',
        'options' => 
        array (
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'slidenav == \'outside\' && !slider_parallax',
      ),
      'panel_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select one of the boxed card or tile styles or a blank panel.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Card Default' => 'card-default',
          'Card Primary' => 'card-primary',
          'Card Secondary' => 'card-secondary',
          'Card Hover' => 'card-hover',
          'Card Overlay' => 'card-overlay',
          'Tile Default' => 'tile-default',
          'Tile Muted' => 'tile-muted',
          'Tile Primary' => 'tile-primary',
          'Tile Secondary' => 'tile-secondary',
        ),
      ),
      'panel_card_offset' => 
      array (
        'type' => 'checkbox',
        'text' => 'Add clipping offset',
        'enable' => 'panel_style',
      ),
      'panel_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the whole panel if a link exists. Optionally, add a hover style.',
        'type' => 'checkbox',
        'text' => 'Link panel',
        'enable' => 'show_link',
      ),
      'panel_link_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Add hover style',
        'enable' => 'show_link && panel_link && $match(panel_style, \'card-(default|primary|secondary|overlay)|tile-\')',
      ),
      'panel_padding' => 
      array (
        'label' => 'Padding',
        'description' => 'Set the padding.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Default' => 'default',
          'Large' => 'large',
        ),
        'enable' => 'panel_style || (!panel_style && (show_image || show_video) && image_align != \'between\')',
      ),
      'panel_image_no_padding' => 
      array (
        'description' => 'Top, left or right aligned images can be attached to the panel edge. If the image is aligned to the left or right, it will also extend to cover the whole space.',
        'type' => 'checkbox',
        'text' => 'Align image without padding',
        'show' => 'panel_style',
        'enable' => '(show_image || show_video) && image_align != \'between\'',
      ),
      'panel_match' => 
      array (
        'label' => 'Height',
        'type' => 'checkbox',
        'text' => 'Match panel heights',
      ),
      'image_expand' => 
      array (
        'type' => 'checkbox',
        'text' => 'Expand image',
        'enable' => 'panel_match',
      ),
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
        ),
        'enable' => 'show_title',
      ),
      'title_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the title if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link title',
        'enable' => 'show_title && show_link',
      ),
      'title_hover_style' => 
      array (
        'label' => 'Hover Style',
        'description' => 'Set the hover style for a linked title.',
        'type' => 'select',
        'options' => 
        array (
          'None' => 'reset',
          'Heading Link' => 'heading',
          'Default Link' => '',
        ),
        'enable' => 'show_title && show_link && (title_link || panel_link)',
      ),
      'title_decoration' => 
      array (
        'label' => 'Decoration',
        'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Bullet' => 'bullet',
          'Line' => 'line',
        ),
        'enable' => 'show_title',
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
        'enable' => 'show_title',
      ),
      'title_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
        'enable' => 'show_title',
      ),
      'title_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_title',
      ),
      'title_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the title to the top or left in regards to the content.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Left' => 'left',
        ),
        'enable' => 'show_title',
      ),
      'title_grid_width' => 
      array (
        'label' => 'Grid Width',
        'description' => 'Define the width of the title within the grid. Choose between percent and fixed widths or expand columns to the width of their content.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => 'auto',
          'Expand' => 'expand',
          '80%' => '4-5',
          '75%' => '3-4',
          '66%' => '2-3',
          '60%' => '3-5',
          '50%' => '1-2',
          '40%' => '2-5',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
        'enable' => 'show_title && title_align == \'left\'',
      ),
      'title_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between the title and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'show_title && title_align == \'left\'',
      ),
      'title_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'show_title && title_align == \'left\'',
      ),
      'title_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'show_title && title_align == \'left\'',
      ),
      'title_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_title',
      ),
      'title_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_title',
      ),
      'meta_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined meta text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_meta',
      ),
      'meta_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_meta',
      ),
      'meta_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the meta text.',
        'type' => 'select',
        'options' => 
        array (
          'Above Title' => 'above-title',
          'Below Title' => 'below-title',
          'Above Content' => 'above-content',
          'Below Content' => 'below-content',
        ),
        'enable' => 'show_meta',
      ),
      'meta_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_meta',
      ),
      'meta_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_meta',
      ),
      'meta_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_meta',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_content',
      ),
      'content_align' => 
      array (
        'label' => 'Alignment',
        'type' => 'checkbox',
        'text' => 'Force left alignment',
        'enable' => 'show_content',
      ),
      'content_dropcap' => 
      array (
        'label' => 'Drop Cap',
        'description' => 'Display the first letter of the paragraph as a large initial.',
        'type' => 'checkbox',
        'text' => 'Enable drop cap',
        'enable' => 'show_content',
      ),
      'content_column' => 
      array (
        'label' => 'Columns',
        'description' => 'Set the number of text columns.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Halves' => '1-2',
          'Thirds' => '1-3',
          'Quarters' => '1-4',
          'Fifths' => '1-5',
          'Sixths' => '1-6',
        ),
        'enable' => 'show_content',
      ),
      'content_column_divider' => 
      array (
        'description' => 'Show a divider between text columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'show_content && content_column',
      ),
      'content_column_breakpoint' => 
      array (
        'label' => 'Columns Breakpoint',
        'description' => 'Set the device width from which the text columns should apply.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'show_content && content_column',
      ),
      'content_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_content',
      ),
      'content_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_content',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image || show_video',
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image || show_video',
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
        'enable' => 'show_image || show_video',
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => '(show_image || show_video) && (!panel_style || (panel_style && (!panel_image_no_padding || image_align == \'between\')))',
      ),
      'image_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the image if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link image',
        'enable' => '(show_image || show_video) && show_link',
      ),
      'image_transition' => 
      array (
        'label' => 'Hover Transition',
        'description' => 'Set the hover transition for a linked image.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
        ),
        'enable' => '(show_image || show_video) && show_link && (image_link || panel_link)',
      ),
      'image_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the image to the top, left, right or place it between the title and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Bottom' => 'bottom',
          'Left' => 'left',
          'Right' => 'right',
          'Between' => 'between',
        ),
        'enable' => 'show_image || show_video',
      ),
      'image_grid_width' => 
      array (
        'label' => 'Grid Width',
        'description' => 'Define the width of the image within the grid. Choose between percent and fixed widths or expand columns to the width of their content.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => 'auto',
          '80%' => '4-5',
          '75%' => '3-4',
          '66%' => '2-3',
          '60%' => '3-5',
          '50%' => '1-2',
          '40%' => '2-5',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
        'enable' => '(show_image || show_video) && $match(image_align, \'left|right\')',
      ),
      'image_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between the image and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => '(show_image || show_video) && $match(image_align, \'left|right\') && !(panel_image_no_padding && panel_style)',
      ),
      'image_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => '(show_image || show_video) && $match(image_align, \'left|right\') && !(panel_image_no_padding && panel_style)',
      ),
      'image_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => '(show_image || show_video) && $match(image_align, \'left|right\')',
      ),
      'image_vertical_align' => 
      array (
        'label' => 'Vertical Alignment',
        'description' => 'Vertically center grid items.',
        'type' => 'checkbox',
        'text' => 'Center',
        'enable' => '(show_image || show_video) && $match(image_align, \'left|right\')',
      ),
      'image_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => '(show_image || show_video) && (image_align == \'between\' || (image_align == \'bottom\' && !(panel_style && panel_image_no_padding)))',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'show_image',
      ),
      'image_svg_animate' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate strokes',
        'enable' => 'show_image && image_svg_inline',
      ),
      'image_svg_color' => 
      array (
        'label' => 'Icon/SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_image',
      ),
      'image_text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls if a sticky transparent navbar is displayed above.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
        'enable' => 'show_image || show_video',
      ),
      'video_autoplay' => 
      array (
        'label' => 'Video Autoplay',
        'description' => 'Enable autoplay immediately, start as soon as the video enters the viewport or only on hover.',
        'type' => 'select',
        'options' => 
        array (
          'On' => '',
          'Inview' => 'inview',
          'Hover' => 'hover',
        ),
        'enable' => 'show_video',
      ),
      'video_autoplay_restart' => 
      array (
        'type' => 'checkbox',
        'text' => 'Restart from beginning',
        'enable' => 'show_video && video_autoplay',
      ),
      'link_text' => 
      array (
        'label' => 'Text',
        'description' => 'Enter the text for the link.',
        'enable' => 'show_link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'ARIA Label',
        'description' => 'Enter a descriptive text label to make it accessible if the link has no visible text.',
        'enable' => 'show_link',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'show_link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'show_link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'show_link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'show_link',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link' => '',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
        'enable' => 'show_link',
      ),
      'link_size' => 
      array (
        'label' => 'Button Size',
        'description' => 'Set the button size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Full width button',
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_link',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'container_padding_remove' => '${builder.container_padding_remove}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-nav</code>, <code>.el-slidenav</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>, <code>.el-hover-image</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-item',
            2 => '.el-nav',
            3 => '.el-slidenav',
            4 => '.el-title',
            5 => '.el-meta',
            6 => '.el-content',
            7 => '.el-image',
            8 => '.el-link',
            9 => '.el-hover-image',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'show_title',
              2 => 'show_meta',
              3 => 'show_content',
              4 => 'show_image',
              5 => 'show_video',
              6 => 'show_link',
              7 => 'show_hover_image',
              8 => 'show_hover_video',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Slider',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'slider_width',
                  1 => 'height_expand',
                  2 => 'slider_gap',
                  3 => 'slider_divider',
                  4 => 'slider_row_align',
                ),
              ),
              1 => 
              array (
                'label' => 'Item Width',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'slider_width_default',
                  1 => 'slider_width_small',
                  2 => 'slider_width_medium',
                  3 => 'slider_width_large',
                  4 => 'slider_width_xlarge',
                ),
              ),
              2 => 
              array (
                'label' => 'Animation',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'slider_sets',
                  1 => 'slider_center',
                  2 => 'slider_finite',
                  3 => 'slider_velocity',
                  4 => 'slider_autoplay',
                  5 => 'slider_autoplay_pause',
                  6 => 'slider_autoplay_interval',
                  7 => 'slider_parallax',
                  8 => 'slider_parallax_easing',
                  9 => 'slider_parallax_target',
                  10 => 
                  array (
                    'label' => 'Parallax Start/End',
                    'description' => 'The animation starts when the element enters the viewport and ends when it leaves the viewport. Optionally, set a start and end offset, e.g. <code>100px</code>, <code>50vh</code> or <code>50vh + 50%</code>. Percent relates to the target\'s height.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'slider_parallax_start',
                      1 => 'slider_parallax_end',
                    ),
                  ),
                ),
              ),
              3 => 
              array (
                'label' => 'Navigation',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'nav',
                  1 => 'nav_align',
                  2 => 'nav_margin',
                  3 => 'nav_breakpoint',
                ),
              ),
              4 => 
              array (
                'label' => 'Slidenav',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'slidenav',
                  1 => 'slidenav_hover',
                  2 => 'slidenav_large',
                  3 => 'slidenav_margin',
                  4 => 'slidenav_breakpoint',
                  5 => 'slidenav_outside_breakpoint',
                ),
              ),
              5 => 
              array (
                'label' => 'Panel',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'panel_style',
                  1 => 'panel_card_offset',
                  2 => 'panel_link',
                  3 => 'panel_link_hover',
                  4 => 'panel_padding',
                  5 => 'panel_image_no_padding',
                  6 => 'panel_match',
                  7 => 'image_expand',
                ),
              ),
              6 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_style',
                  1 => 'title_link',
                  2 => 'title_hover_style',
                  3 => 'title_decoration',
                  4 => 'title_font_family',
                  5 => 'title_color',
                  6 => 'title_element',
                  7 => 'title_align',
                  8 => 'title_grid_width',
                  9 => 'title_grid_column_gap',
                  10 => 'title_grid_row_gap',
                  11 => 'title_grid_breakpoint',
                  12 => 'title_margin',
                  13 => 'title_margin_auto',
                ),
              ),
              7 => 
              array (
                'label' => 'Meta',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'meta_style',
                  1 => 'meta_color',
                  2 => 'meta_align',
                  3 => 'meta_element',
                  4 => 'meta_margin',
                  5 => 'meta_margin_auto',
                ),
              ),
              8 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_style',
                  1 => 'content_align',
                  2 => 'content_dropcap',
                  3 => 'content_column',
                  4 => 'content_column_divider',
                  5 => 'content_column_breakpoint',
                  6 => 'content_margin',
                  7 => 'content_margin_auto',
                ),
              ),
              9 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_loading',
                  2 => 'image_border',
                  3 => 'image_link',
                  4 => 'image_transition',
                  5 => 'image_align',
                  6 => 'image_grid_width',
                  7 => 'image_grid_column_gap',
                  8 => 'image_grid_row_gap',
                  9 => 'image_grid_breakpoint',
                  10 => 'image_vertical_align',
                  11 => 'image_margin',
                  12 => 'image_svg_inline',
                  13 => 'image_svg_animate',
                  14 => 'image_svg_color',
                  15 => 'image_text_color',
                  16 => 'video_autoplay',
                  17 => 'video_autoplay_restart',
                ),
              ),
              10 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_text',
                  1 => 'link_aria_label',
                  2 => 'link_target',
                  3 => 'link_download',
                  4 => 'link_rel_nofollow',
                  5 => 'link_rel_noreferrer',
                  6 => 'link_style',
                  7 => 'link_size',
                  8 => 'link_fullwidth',
                  9 => 'link_margin',
                ),
              ),
              11 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                  20 => 'container_padding_remove',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'panel-slider_item' => 
  array (
    'name' => 'panel-slider_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'meta' => 
      array (
        'label' => 'Meta',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'image',
        'source' => true,
        'show' => '!video',
        'altRef' => '%name%_alt',
      ),
      'video' => 
      array (
        'label' => 'Video',
        'type' => 'video',
        'source' => true,
        'show' => '!image',
      ),
      'image_alt' => 
      array (
        'label' => 'Image Alt',
        'source' => true,
        'show' => 'image && !video',
      ),
      'icon' => 
      array (
        'label' => 'Icon',
        'description' => 'Instead of using a custom image, you can click on the pencil to pick an icon from the icon library.',
        'type' => 'icon',
        'source' => true,
        'enable' => '!image && !video',
      ),
      'link' => '${builder.link}',
      'link_text' => 
      array (
        'label' => 'Link Text',
        'description' => 'Set a different link text for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'Link ARIA Label',
        'description' => 'Set a different link ARIA label for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'hover_image' => 
      array (
        'label' => 'Hover Image',
        'description' => 'Select an optional image that appears on hover.',
        'type' => 'image',
        'source' => true,
        'show' => '!hover_video',
        'enable' => 'image || video',
      ),
      'hover_video' => 
      array (
        'label' => 'Hover Video',
        'description' => 'Select an optional video that appears on hover.',
        'type' => 'video',
        'source' => true,
        'show' => '!hover_image',
        'enable' => 'image || video',
      ),
      'panel_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select one of the boxed card or tile styles or a blank panel.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Card Default' => 'card-default',
          'Card Primary' => 'card-primary',
          'Card Secondary' => 'card-secondary',
          'Card Hover' => 'card-hover',
          'Card Overlay' => 'card-overlay',
          'Tile Default' => 'tile-default',
          'Tile Muted' => 'tile-muted',
          'Tile Primary' => 'tile-primary',
          'Tile Secondary' => 'tile-secondary',
        ),
      ),
      'item_element' => '${builder.html_element_item}',
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'image || video',
      ),
      'image_text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls if a sticky transparent navbar is displayed above.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
        'enable' => 'image || video',
      ),
      'hover_image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'title',
              1 => 'meta',
              2 => 'content',
              3 => 'image',
              4 => 'video',
              5 => 'image_alt',
              6 => 'icon',
              7 => 'link',
              8 => 'link_text',
              9 => 'link_aria_label',
              10 => 'hover_image',
              11 => 'hover_video',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Panel',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'panel_style',
                  1 => 'item_element',
                ),
              ),
              1 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'image_focal_point',
                  1 => 'image_text_color',
                ),
              ),
              2 => 
              array (
                'label' => 'Hover Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'hover_image_focal_point',
                ),
              ),
              3 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'link_style',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
  ),
  'panel' => 
  array (
    'name' => 'panel',
    'title' => 'Panel',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'link_text' => 'Read more',
      'title_hover_style' => 'reset',
      'title_element' => 'h3',
      'title_align' => 'top',
      'title_grid_width' => '1-2',
      'title_grid_breakpoint' => 'm',
      'meta_style' => 'text-meta',
      'meta_align' => 'below-title',
      'meta_element' => 'div',
      'content_column_breakpoint' => 'm',
      'image_align' => 'top',
      'image_grid_width' => '1-2',
      'image_grid_breakpoint' => 'm',
      'image_svg_color' => 'emphasis',
      'link_style' => 'default',
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'meta' => 
      array (
        'label' => 'Meta',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'image',
        'source' => true,
        'show' => '!video',
        'altRef' => '%name%_alt',
      ),
      'video' => 
      array (
        'label' => 'Video',
        'type' => 'video',
        'source' => true,
        'show' => '!image',
      ),
      'image_alt' => 
      array (
        'label' => 'Image Alt',
        'source' => true,
        'show' => 'image && !video',
      ),
      'icon' => 
      array (
        'label' => 'Icon',
        'description' => 'Instead of using a custom image, you can click on the pencil to pick an icon from the icon library.',
        'type' => 'icon',
        'source' => true,
        'enable' => '!image && !video',
      ),
      'link' => '${builder.link}',
      'link_text' => 
      array (
        'label' => 'Link Text',
        'description' => 'Enter the text for the link.',
        'source' => true,
        'enable' => 'link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'Link ARIA Label',
        'description' => 'Enter a descriptive text label to make it accessible if the link has no visible text.',
        'source' => true,
        'enable' => 'link',
      ),
      'hover_image' => 
      array (
        'label' => 'Hover Image',
        'description' => 'Select an optional image that appears on hover.',
        'type' => 'image',
        'source' => true,
        'show' => '!hover_video',
        'enable' => 'image || video',
      ),
      'hover_video' => 
      array (
        'label' => 'Hover Video',
        'description' => 'Select an optional video that appears on hover.',
        'type' => 'video',
        'source' => true,
        'show' => '!hover_image',
        'enable' => 'image || video',
      ),
      'panel_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select one of the boxed card or tile styles or a blank panel.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Card Default' => 'card-default',
          'Card Primary' => 'card-primary',
          'Card Secondary' => 'card-secondary',
          'Card Hover' => 'card-hover',
          'Card Overlay' => 'card-overlay',
          'Tile Default' => 'tile-default',
          'Tile Muted' => 'tile-muted',
          'Tile Primary' => 'tile-primary',
          'Tile Secondary' => 'tile-secondary',
        ),
      ),
      'panel_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the whole panel if a link exists. Optionally, add a hover style.',
        'type' => 'checkbox',
        'text' => 'Link panel',
        'enable' => 'link',
      ),
      'panel_link_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Add hover style',
        'enable' => 'link && panel_link && $match(panel_style, \'card-(default|primary|secondary|overlay)|tile-\')',
      ),
      'panel_padding' => 
      array (
        'label' => 'Padding',
        'description' => 'Set the padding.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Default' => 'default',
          'Large' => 'large',
        ),
        'enable' => 'panel_style || (!panel_style && (image || video) && image_align != \'between\')',
      ),
      'panel_image_no_padding' => 
      array (
        'description' => 'Top, bottom, left or right aligned images can be attached to the panel edge. If the image is aligned to the left or right, it will also extend to cover the whole space.',
        'type' => 'checkbox',
        'text' => 'Align image without padding',
        'show' => 'panel_style',
        'enable' => '(image || video) && image_align != \'between\'',
      ),
      'height_expand' => 
      array (
        'label' => 'Height',
        'description' => 'Expand the height of the element to fill the available space in the column.',
        'type' => 'checkbox',
        'text' => 'Fill the available column space',
      ),
      'image_expand' => 
      array (
        'type' => 'checkbox',
        'text' => 'Expand image',
        'enable' => 'height_expand',
      ),
      'html_element' => '${builder.html_element}',
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'title',
      ),
      'title_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the title if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link title',
        'enable' => 'title && link',
      ),
      'title_hover_style' => 
      array (
        'label' => 'Hover Style',
        'description' => 'Set the hover style for a linked title.',
        'type' => 'select',
        'options' => 
        array (
          'None' => 'reset',
          'Heading Link' => 'heading',
          'Default Link' => '',
        ),
        'enable' => 'title && link && (title_link || panel_link)',
      ),
      'title_decoration' => 
      array (
        'label' => 'Decoration',
        'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Bullet' => 'bullet',
          'Line' => 'line',
        ),
        'enable' => 'title',
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
        'enable' => 'title',
      ),
      'title_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
        'enable' => 'title',
      ),
      'title_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'title',
      ),
      'title_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the title to the top or left in regards to the content.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Left' => 'left',
        ),
        'enable' => 'title',
      ),
      'title_grid_width' => 
      array (
        'label' => 'Grid Width',
        'description' => 'Define the width of the title within the grid. Choose between percent and fixed widths or expand columns to the width of their content.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => 'auto',
          'Expand' => 'expand',
          '80%' => '4-5',
          '75%' => '3-4',
          '66%' => '2-3',
          '60%' => '3-5',
          '50%' => '1-2',
          '40%' => '2-5',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
        'enable' => 'title && title_align == \'left\'',
      ),
      'title_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between the title and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'title && title_align == \'left\'',
      ),
      'title_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'title && title_align == \'left\'',
      ),
      'title_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'title && title_align == \'left\'',
      ),
      'title_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'title',
      ),
      'title_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'title',
      ),
      'meta_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined meta text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'meta',
      ),
      'meta_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'meta',
      ),
      'meta_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the meta text.',
        'type' => 'select',
        'options' => 
        array (
          'Above Title' => 'above-title',
          'Below Title' => 'below-title',
          'Above Content' => 'above-content',
          'Below Content' => 'below-content',
        ),
        'enable' => 'meta',
      ),
      'meta_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'meta',
      ),
      'meta_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'meta',
      ),
      'meta_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'meta',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'content',
      ),
      'content_align' => 
      array (
        'label' => 'Alignment',
        'type' => 'checkbox',
        'text' => 'Force left alignment',
        'enable' => 'content',
      ),
      'content_dropcap' => 
      array (
        'label' => 'Drop Cap',
        'description' => 'Display the first letter of the paragraph as a large initial.',
        'type' => 'checkbox',
        'text' => 'Enable drop cap',
        'enable' => 'content',
      ),
      'content_column' => 
      array (
        'label' => 'Columns',
        'description' => 'Set the number of text columns.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Halves' => '1-2',
          'Thirds' => '1-3',
          'Quarters' => '1-4',
          'Fifths' => '1-5',
          'Sixths' => '1-6',
        ),
        'enable' => 'content',
      ),
      'content_column_divider' => 
      array (
        'description' => 'Show a divider between text columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'content && content_column',
      ),
      'content_column_breakpoint' => 
      array (
        'label' => 'Columns Breakpoint',
        'description' => 'Set the device width from which the text columns should apply.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'content && content_column',
      ),
      'content_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'content',
      ),
      'content_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'content',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'image || video || icon',
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'image || video || icon',
      ),
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'image || video',
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
        'enable' => 'image || video',
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => '(image || video) && (!panel_style || (panel_style && (!panel_image_no_padding || image_align == \'between\')))',
      ),
      'image_box_shadow' => 
      array (
        'label' => 'Box Shadow',
        'description' => 'Select the image box shadow size.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => '(image || video) && !panel_style',
      ),
      'image_box_decoration' => 
      array (
        'label' => 'Box Decoration',
        'description' => 'Select the image box decoration style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Floating Shadow' => 'shadow',
          'Mask' => 'mask',
        ),
        'enable' => '(image || video) && !panel_style',
      ),
      'image_box_decoration_inverse' => 
      array (
        'type' => 'checkbox',
        'text' => 'Inverse style',
        'enable' => '(image || video) && !panel_style && $match(image_box_decoration, \'^(default|primary|secondary)$\')',
      ),
      'image_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the image if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link image',
        'enable' => '(image || video) && link',
      ),
      'image_transition' => 
      array (
        'label' => 'Hover Transition',
        'description' => 'Set the hover transition for a linked image. If the hover image is set, the transition takes place between the two images. If <i>None</i> is selected, the hover image fades in.',
        'type' => 'select',
        'options' => 
        array (
          'None (Fade if hover image)' => '',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
        ),
        'enable' => '(image || video) && (link && (image_link || panel_link))',
      ),
      'image_transition_border' => 
      array (
        'type' => 'checkbox',
        'text' => 'Border',
        'enable' => '(image || video) && link && (image_link || panel_link)',
      ),
      'image_hover_box_shadow' => 
      array (
        'label' => 'Hover Box Shadow',
        'description' => 'Select the image box shadow size on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => '(image || video) && link && !panel_style && (image_link || panel_link)',
      ),
      'image_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the image to the top, left, right or place it between the title and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Bottom' => 'bottom',
          'Left' => 'left',
          'Right' => 'right',
          'Between' => 'between',
        ),
        'enable' => 'image || video || icon',
      ),
      'image_grid_width' => 
      array (
        'label' => 'Grid Width',
        'description' => 'Define the width of the image within the grid. Choose between percent and fixed widths or expand columns to the width of their content.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => 'auto',
          '80%' => '4-5',
          '75%' => '3-4',
          '66%' => '2-3',
          '60%' => '3-5',
          '50%' => '1-2',
          '40%' => '2-5',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
        'enable' => '(image || video || icon) && $match(image_align, \'left|right\')',
      ),
      'image_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between the image and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => '(image || video || icon) && $match(image_align, \'left|right\') && !(panel_image_no_padding && panel_style)',
      ),
      'image_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => '(image || video || icon) && $match(image_align, \'left|right\') && !(panel_image_no_padding && panel_style)',
      ),
      'image_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => '(image || video || icon) && $match(image_align, \'left|right\')',
      ),
      'image_vertical_align' => 
      array (
        'label' => 'Vertical Alignment',
        'description' => 'Vertically center grid items.',
        'type' => 'checkbox',
        'text' => 'Center',
        'enable' => '(image || video || icon) && $match(image_align, \'left|right\')',
      ),
      'image_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => '(image || video || icon) && (image_align == \'between\' || (image_align == \'bottom\' && !(panel_style && panel_image_no_padding)))',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'image',
      ),
      'image_svg_animate' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate strokes',
        'enable' => 'image && image_svg_inline',
      ),
      'image_svg_color' => 
      array (
        'label' => 'Icon/SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'image || icon',
      ),
      'image_text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls if a sticky transparent navbar is displayed above.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
        'enable' => 'image || video',
      ),
      'video_autoplay' => 
      array (
        'label' => 'Video Autoplay',
        'description' => 'Enable autoplay immediately, start as soon as the video enters the viewport or only on hover.',
        'type' => 'select',
        'options' => 
        array (
          'On' => '',
          'Inview' => 'inview',
          'Hover' => 'hover',
        ),
        'enable' => 'video',
      ),
      'video_autoplay_restart' => 
      array (
        'type' => 'checkbox',
        'text' => 'Restart from beginning',
        'enable' => 'video && video_autoplay',
      ),
      'hover_image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'link',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link' => '',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
        'enable' => 'link && link_text',
      ),
      'link_size' => 
      array (
        'label' => 'Button Size',
        'description' => 'Set the button size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => 'link && link_text && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Full width button',
        'enable' => 'link && link_text && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'link && link_text',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>, <code>.el-hover-image</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-title',
            2 => '.el-meta',
            3 => '.el-content',
            4 => '.el-image',
            5 => '.el-link',
            6 => '.el-hover-image',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'title',
              1 => 'meta',
              2 => 'content',
              3 => 'image',
              4 => 'video',
              5 => 'image_alt',
              6 => 'icon',
              7 => 'link',
              8 => 'link_text',
              9 => 'link_aria_label',
              10 => 'hover_image',
              11 => 'hover_video',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Panel',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'panel_style',
                  1 => 'panel_link',
                  2 => 'panel_link_hover',
                  3 => 'panel_padding',
                  4 => 'panel_image_no_padding',
                  5 => 'height_expand',
                  6 => 'image_expand',
                  7 => 'html_element',
                ),
              ),
              1 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_style',
                  1 => 'title_link',
                  2 => 'title_hover_style',
                  3 => 'title_decoration',
                  4 => 'title_font_family',
                  5 => 'title_color',
                  6 => 'title_element',
                  7 => 'title_align',
                  8 => 'title_grid_width',
                  9 => 'title_grid_column_gap',
                  10 => 'title_grid_row_gap',
                  11 => 'title_grid_breakpoint',
                  12 => 'title_margin',
                  13 => 'title_margin_auto',
                ),
              ),
              2 => 
              array (
                'label' => 'Meta',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'meta_style',
                  1 => 'meta_color',
                  2 => 'meta_align',
                  3 => 'meta_element',
                  4 => 'meta_margin',
                  5 => 'meta_margin_auto',
                ),
              ),
              3 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_style',
                  1 => 'content_align',
                  2 => 'content_dropcap',
                  3 => 'content_column',
                  4 => 'content_column_divider',
                  5 => 'content_column_breakpoint',
                  6 => 'content_margin',
                  7 => 'content_margin_auto',
                ),
              ),
              4 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_focal_point',
                  2 => 'image_loading',
                  3 => 'image_border',
                  4 => 'image_box_shadow',
                  5 => 'image_box_decoration',
                  6 => 'image_box_decoration_inverse',
                  7 => 'image_link',
                  8 => 'image_transition',
                  9 => 'image_transition_border',
                  10 => 'image_hover_box_shadow',
                  11 => 'image_align',
                  12 => 'image_grid_width',
                  13 => 'image_grid_column_gap',
                  14 => 'image_grid_row_gap',
                  15 => 'image_grid_breakpoint',
                  16 => 'image_vertical_align',
                  17 => 'image_margin',
                  18 => 'image_svg_inline',
                  19 => 'image_svg_animate',
                  20 => 'image_svg_color',
                  21 => 'image_text_color',
                  22 => 'video_autoplay',
                  23 => 'video_autoplay_restart',
                ),
              ),
              5 => 
              array (
                'label' => 'Hover Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'hover_image_focal_point',
                ),
              ),
              6 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_target',
                  1 => 'link_download',
                  2 => 'link_rel_nofollow',
                  3 => 'link_rel_noreferrer',
                  4 => 'link_style',
                  5 => 'link_size',
                  6 => 'link_fullwidth',
                  7 => 'link_margin',
                ),
              ),
              7 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'popover' => 
  array (
    'name' => 'popover',
    'title' => 'Popover',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_title' => true,
      'show_meta' => true,
      'show_content' => true,
      'show_image' => true,
      'show_link' => true,
      'drop_mode' => 'hover',
      'drop_position' => 'top-center',
      'card_style' => 'default',
      'title_hover_style' => 'reset',
      'title_element' => 'h3',
      'meta_style' => 'text-meta',
      'meta_align' => 'below-title',
      'meta_element' => 'div',
      'image_card_padding' => true,
      'image_svg_color' => 'emphasis',
      'link_text' => 'Read more',
      'link_style' => 'default',
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'background_image' => 
      array (
        'label' => 'Image',
        'type' => 'image',
        'source' => true,
      ),
      'background_image_width' => 
      array (
        'label' => 'Image Width',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'background_image',
      ),
      'background_image_height' => 
      array (
        'label' => 'Image Height',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'background_image',
      ),
      'background_image_alt' => 
      array (
        'label' => 'Image Alt',
        'source' => true,
        'enable' => 'background_image',
      ),
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'item' => 'popover_item',
        'media' => 
        array (
          'type' => 'image',
          'item' => 
          array (
            'title' => 'title',
            'image' => 'src',
          ),
        ),
      ),
      'show_title' => 
      array (
        'label' => 'Display',
        'type' => 'checkbox',
        'text' => 'Show the title',
      ),
      'show_meta' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the meta text',
      ),
      'show_content' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the content',
      ),
      'show_image' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the image',
      ),
      'show_link' => 
      array (
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the link',
      ),
      'background_image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'height_expand' => 
      array (
        'label' => 'Height',
        'description' => 'Expand the height of the element to fill the available space in the column. Alternatively, the height can adapt to the height of the viewport, and optionally subtract the header height to fill the first visible viewport.',
        'type' => 'checkbox',
        'text' => 'Fill the available column space',
      ),
      'height_viewport' => 
      array (
        'type' => 'checkbox',
        'text' => 'Set viewport height',
        'enable' => '!height_expand',
      ),
      'height_viewport_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => '100',
          'min' => 0,
          'step' => 10,
        ),
        'enable' => '!height_expand && height_viewport',
      ),
      'height_viewport_offset' => 
      array (
        'type' => 'checkbox',
        'text' => 'Subtract height above',
        'enable' => '!height_expand && height_viewport && (height_viewport_height || 0) <= 100',
      ),
      'background_image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
      ),
      'background_image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
      ),
      'marker_color' => 
      array (
        'label' => 'Color',
        'description' => 'Set light or dark color mode.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
      ),
      'drop_mode' => 
      array (
        'label' => 'Mode',
        'description' => 'Display the popover on click or hover.',
        'type' => 'select',
        'options' => 
        array (
          'Click' => 'click',
          'Hover' => 'hover',
        ),
      ),
      'drop_position' => 
      array (
        'label' => 'Position',
        'description' => 'Select the popover alignment to its marker. If the popover doesn\'t fit its container, it will flip automatically.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top-center',
          'Bottom' => 'bottom-center',
          'Left' => 'left-center',
          'Right' => 'right-center',
        ),
      ),
      'drop_width' => 
      array (
        'label' => 'Width',
        'type' => 'number',
        'description' => 'Enter a width for the popover in pixels.',
        'attrs' => 
        array (
          'placeholder' => '300',
        ),
      ),
      'card_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a card style.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Overlay' => 'overlay',
        ),
      ),
      'card_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the whole card if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link card',
        'enable' => 'show_link',
      ),
      'card_size' => 
      array (
        'label' => 'Padding',
        'description' => 'Set the padding between the card\'s edge and its content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
      ),
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
        ),
        'enable' => 'show_title',
      ),
      'title_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the title if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link title',
        'enable' => 'show_title && show_link',
      ),
      'title_hover_style' => 
      array (
        'label' => 'Hover Style',
        'description' => 'Set the hover style for a linked title.',
        'type' => 'select',
        'options' => 
        array (
          'None' => 'reset',
          'Heading Link' => 'heading',
          'Default Link' => '',
        ),
        'enable' => 'show_title && show_link && (title_link || card_link)',
      ),
      'title_decoration' => 
      array (
        'label' => 'Decoration',
        'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Bullet' => 'bullet',
          'Line' => 'line',
        ),
        'enable' => 'show_title',
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
        'enable' => 'show_title',
      ),
      'title_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
        'enable' => 'show_title',
      ),
      'title_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_title',
      ),
      'title_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_title',
      ),
      'meta_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined meta text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_meta',
      ),
      'meta_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_meta',
      ),
      'meta_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the meta text.',
        'type' => 'select',
        'options' => 
        array (
          'Above Title' => 'above-title',
          'Below Title' => 'below-title',
          'Below Content' => 'below-content',
        ),
        'enable' => 'show_meta',
      ),
      'meta_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_meta',
      ),
      'meta_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_meta',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_content',
      ),
      'content_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_content',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_card_padding' => 
      array (
        'label' => 'Padding',
        'description' => 'Attach the image to the drop\'s edge.',
        'type' => 'checkbox',
        'text' => 'Align image without padding',
        'enable' => 'show_image',
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => 'show_image && !image_card_padding',
      ),
      'image_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the image if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link image',
        'enable' => 'show_image && show_link',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'show_image',
      ),
      'image_svg_animate' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate strokes',
        'enable' => 'show_image && image_svg_inline',
      ),
      'image_svg_color' => 
      array (
        'label' => 'SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_image && image_svg_inline',
      ),
      'link_text' => 
      array (
        'label' => 'Text',
        'description' => 'Enter the text for the link.',
        'enable' => 'show_link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'ARIA Label',
        'description' => 'Enter a descriptive text label to make it accessible if the link has no visible text.',
        'enable' => 'show_link',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'show_link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'show_link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'show_link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'show_link',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link' => '',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
        'enable' => 'show_link',
      ),
      'link_size' => 
      array (
        'label' => 'Button Size',
        'description' => 'Set the button size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Full width button',
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_link',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'container_padding_remove' => '${builder.container_padding_remove}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-marker</code>, <code>.el-item</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-marker',
            2 => '.el-item',
            3 => '.el-title',
            4 => '.el-meta',
            5 => '.el-content',
            6 => '.el-image',
            7 => '.el-link',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'background_image',
              1 => 
              array (
                'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                'name' => '_background_image_dimension',
                'type' => 'grid',
                'width' => '1-2',
                'fields' => 
                array (
                  0 => 'background_image_width',
                  1 => 'background_image_height',
                ),
              ),
              2 => 'background_image_alt',
              3 => 'content',
              4 => 'show_title',
              5 => 'show_meta',
              6 => 'show_content',
              7 => 'show_image',
              8 => 'show_link',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Background Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'background_image_focal_point',
                  1 => 'height_expand',
                  2 => 'height_viewport',
                  3 => 'height_viewport_height',
                  4 => 'height_viewport_offset',
                  5 => 'background_image_loading',
                  6 => 'background_image_border',
                ),
              ),
              1 => 
              array (
                'label' => 'Marker',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'marker_color',
                  1 => 'drop_mode',
                ),
              ),
              2 => 
              array (
                'label' => 'Popover',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'drop_position',
                  1 => 'drop_width',
                  2 => 'card_style',
                  3 => 'card_link',
                  4 => 'card_size',
                ),
              ),
              3 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_style',
                  1 => 'title_link',
                  2 => 'title_hover_style',
                  3 => 'title_decoration',
                  4 => 'title_font_family',
                  5 => 'title_color',
                  6 => 'title_element',
                  7 => 'title_margin',
                ),
              ),
              4 => 
              array (
                'label' => 'Meta',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'meta_style',
                  1 => 'meta_color',
                  2 => 'meta_align',
                  3 => 'meta_element',
                  4 => 'meta_margin',
                ),
              ),
              5 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_style',
                  1 => 'content_margin',
                ),
              ),
              6 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_card_padding',
                  2 => 'image_border',
                  3 => 'image_link',
                  4 => 'image_svg_inline',
                  5 => 'image_svg_animate',
                  6 => 'image_svg_color',
                ),
              ),
              7 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_text',
                  1 => 'link_aria_label',
                  2 => 'link_target',
                  3 => 'link_download',
                  4 => 'link_rel_nofollow',
                  5 => 'link_rel_noreferrer',
                  6 => 'link_style',
                  7 => 'link_size',
                  8 => 'link_fullwidth',
                  9 => 'link_margin',
                ),
              ),
              8 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                  20 => 'container_padding_remove',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'popover_item' => 
  array (
    'name' => 'popover_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'meta' => 
      array (
        'label' => 'Meta',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'image' => '${builder.image}',
      'image_alt' => '${builder.image_alt}',
      'link' => '${builder.link}',
      'link_text' => 
      array (
        'label' => 'Link Text',
        'description' => 'Set a different link text for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'Link ARIA Label',
        'description' => 'Set a different link ARIA label for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'position_x' => 
      array (
        'label' => 'Left',
        'description' => 'Enter the horizontal position of the marker in percent.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 0,
          'max' => 100,
          'step' => 1,
        ),
        'source' => true,
      ),
      'position_y' => 
      array (
        'label' => 'Top',
        'description' => 'Enter the vertical position of the marker in percent.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 0,
          'max' => 100,
          'step' => 1,
        ),
        'source' => true,
      ),
      'drop_position' => 
      array (
        'label' => 'Position',
        'description' => 'Select a different position for this item.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Top' => 'top-center',
          'Bottom' => 'bottom-center',
          'Left' => 'left-center',
          'Right' => 'right-center',
        ),
        'source' => true,
      ),
      'item_element' => '${builder.html_element_item}',
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'image',
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'title',
              1 => 'meta',
              2 => 'content',
              3 => 'image',
              4 => 'image_alt',
              5 => 'link',
              6 => 'link_text',
              7 => 'link_aria_label',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Marker',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'position_x',
                  1 => 'position_y',
                ),
              ),
              1 => 
              array (
                'label' => 'Popover',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'drop_position',
                  1 => 'item_element',
                ),
              ),
              2 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'image_focal_point',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
  ),
  'quotation' => 
  array (
    'name' => 'quotation',
    'title' => 'Quotation',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'author' => 
      array (
        'label' => 'Author',
        'description' => 'Enter the author name.',
        'source' => true,
      ),
      'link' => 
      array (
        'label' => 'Author Link',
        'attrs' => 
        array (
          'placeholder' => 'http://',
        ),
        'source' => true,
        'enable' => 'author',
      ),
      'footer' => 
      array (
        'label' => 'Footer',
        'description' => 'Enter an optional footer text.',
        'source' => true,
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'author && link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'author && link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'author && link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'author && link',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select the link style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Text' => 'text',
          'Reset' => 'reset',
        ),
        'enable' => 'author && link',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-footer</code>, <code>.el-author</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-footer',
            2 => '.el-author',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'author',
              2 => 'link',
              3 => 'footer',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_target',
                  1 => 'link_download',
                  2 => 'link_rel_nofollow',
                  3 => 'link_rel_noreferrer',
                  4 => 'link_style',
                ),
              ),
              1 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'row' => 
  array (
    'name' => 'row',
    'title' => 'Row',
    'container' => true,
    'width' => 500,
    'fields' => 
    array (
      'layout' => 
      array (
        'label' => 'Layout',
        'type' => 'select-img',
        'title' => 'Select a grid layout',
        'options' => 
        array (
          '' => 
          array (
            'label' => 'Whole',
            'src' => '${url:images/whole.svg}',
          ),
          '1-2,1-2' => 
          array (
            'label' => 'Halves',
            'src' => '${url:images/halves.svg}',
          ),
          '1-3,1-3,1-3' => 
          array (
            'label' => 'Thirds',
            'src' => '${url:images/thirds.svg}',
          ),
          '1-4,1-4,1-4,1-4|1-2,1-2,1-2,1-2' => 
          array (
            'label' => 'Quarters',
            'src' => '${url:images/quarters.svg}',
          ),
          '1-5,1-5,1-5,1-5,1-5|1-2,1-2,1-3,1-3,1-3' => 
          array (
            'label' => 'Fifths',
            'src' => '${url:images/fifths.svg}',
          ),
          '1-6,1-6,1-6,1-6,1-6,1-6|1-3,1-3,1-3,1-3,1-3,1-3' => 
          array (
            'label' => 'Sixths',
            'src' => '${url:images/sixths.svg}',
          ),
          '2-3,1-3' => 
          array (
            'label' => 'Thirds 2-1',
            'src' => '${url:images/thirds-2-1.svg}',
          ),
          '1-3,2-3' => 
          array (
            'label' => 'Thirds 1-2',
            'src' => '${url:images/thirds-1-2.svg}',
          ),
          '3-4,1-4' => 
          array (
            'label' => 'Quarters 3-1',
            'src' => '${url:images/quarters-3-1.svg}',
          ),
          '1-4,3-4' => 
          array (
            'label' => 'Quarters 1-3',
            'src' => '${url:images/quarters-1-3.svg}',
          ),
          '1-2,1-4,1-4|1-1,1-2,1-2' => 
          array (
            'label' => 'Quarters 2-1-1',
            'src' => '${url:images/quarters-2-1-1.svg}',
          ),
          '1-4,1-4,1-2|1-2,1-2,1-1' => 
          array (
            'label' => 'Quarters 1-1-2',
            'src' => '${url:images/quarters-1-1-2.svg}',
          ),
          '1-4,1-2,1-4' => 
          array (
            'label' => 'Quarters 1-2-1',
            'src' => '${url:images/quarters-1-2-1.svg}',
          ),
          '2-5,3-5' => 
          array (
            'label' => 'Fifths 2-3',
            'src' => '${url:images/fifths-2-3.svg}',
          ),
          '3-5,2-5' => 
          array (
            'label' => 'Fifths 3-2',
            'src' => '${url:images/fifths-3-2.svg}',
          ),
          '1-5,4-5' => 
          array (
            'label' => 'Fifths 1-4',
            'src' => '${url:images/fifths-1-4.svg}',
          ),
          '4-5,1-5' => 
          array (
            'label' => 'Fifths 4-1',
            'src' => '${url:images/fifths-4-1.svg}',
          ),
          '3-5,1-5,1-5|1-1,1-2,1-2' => 
          array (
            'label' => 'Fifths 3-1-1',
            'src' => '${url:images/fifths-3-1-1.svg}',
          ),
          '1-5,1-5,3-5|1-2,1-2,1-1' => 
          array (
            'label' => 'Fifths 1-1-3',
            'src' => '${url:images/fifths-1-1-3.svg}',
          ),
          '1-5,3-5,1-5' => 
          array (
            'label' => 'Fifths 1-3-1',
            'src' => '${url:images/fifths-1-3-1.svg}',
          ),
          '2-5,1-5,1-5,1-5|1-1,1-3,1-3,1-3' => 
          array (
            'label' => 'Fifths 2-1-1-1',
            'src' => '${url:images/fifths-2-1-1-1.svg}',
          ),
          '1-5,1-5,1-5,2-5|1-3,1-3,1-3,1-1' => 
          array (
            'label' => 'Fifths 1-1-1-2',
            'src' => '${url:images/fifths-1-1-1-2.svg}',
          ),
          '1-6,5-6|1-5,4-5' => 
          array (
            'label' => 'Sixths 1-5',
            'src' => '${url:images/sixths-1-5.svg}',
          ),
          '5-6,1-6|4-5,1-5' => 
          array (
            'label' => 'Sixths 5-1',
            'src' => '${url:images/sixths-5-1.svg}',
          ),
          'large,expand' => 
          array (
            'label' => 'Fixed-Left',
            'src' => '${url:images/fixed-left.svg}',
          ),
          'expand,large' => 
          array (
            'label' => 'Fixed-Right',
            'src' => '${url:images/fixed-right.svg}',
          ),
          'expand,large,expand' => 
          array (
            'label' => 'Fixed-Inner',
            'src' => '${url:images/fixed-inner.svg}',
          ),
          'large,expand,large' => 
          array (
            'label' => 'Fixed-Outer',
            'src' => '${url:images/fixed-outer.svg}',
          ),
        ),
      ),
      '_layout' => 
      array (
        'text' => 'Edit Layout',
        'description' => 'Customize the column widths of the selected layout and set the column order. Changing the layout will reset all customizations.',
        'type' => 'button-panel',
        'panel' => 'builder-row-layout',
      ),
      'columns' => 
      array (
        'label' => 'Columns',
        'description' => 'Define a background style or an image of a column and set the vertical alignment for its content.',
        'type' => 'children',
      ),
      'column_gap' => 
      array (
        'label' => 'Column Gap',
        'description' => 'Set the size of the gap between the grid columns.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'row_gap' => 
      array (
        'label' => 'Row Gap',
        'description' => 'Set the size of the gap between the grid rows.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'divider' => 
      array (
        'label' => 'Divider',
        'description' => 'Show a divider between grid columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'column_gap != \'collapse\' && row_gap != \'collapse\'',
      ),
      'alignment' => 
      array (
        'label' => 'Alignment',
        'description' => 'Expand columns equally to always fill remaining space within the row, center them or align them to the left.',
        'type' => 'select',
        'options' => 
        array (
          'Justify' => '',
          'Left' => 'left',
          'Center' => 'center',
        ),
      ),
      'width' => 
      array (
        'label' => 'Max Width',
        'type' => 'select',
        'options' => 
        array (
          'Default' => 'default',
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'Expand' => 'expand',
          'None' => '',
        ),
      ),
      'padding_remove_horizontal' => 
      array (
        'description' => 'Set the maximum content width. Note: The section may already have a maximum width, which you cannot exceed.',
        'type' => 'checkbox',
        'text' => 'Remove horizontal padding',
        'enable' => 'width && width != \'expand\'',
      ),
      'width_expand' => 
      array (
        'label' => 'Expand One Side',
        'description' => 'Expand the width of one side to the left or right while the other side keeps within the constraints of the max width.',
        'type' => 'select',
        'options' => 
        array (
          'Don\'t expand' => '',
          'To left' => 'left',
          'To right' => 'right',
        ),
        'enable' => 'width && width != \'expand\'',
      ),
      'height' => 
      array (
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Pixels' => 'pixels',
          'Viewport' => 'viewport',
        ),
      ),
      'height_viewport' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => '100',
          'min' => 0,
          'step' => 10,
        ),
        'enable' => 'height',
      ),
      'height_viewport_offset' => 
      array (
        'description' => 'Set a fixed height for all columns. They will keep their height when stacking. Optionally, subtract the header height to fill the first visible viewport.',
        'type' => 'checkbox',
        'text' => 'Subtract height above row',
        'enable' => 'height == \'viewport\' && (height_viewport || 0) <= 100',
      ),
      'margin_top' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin.',
        'type' => 'select',
        'options' => 
        array (
          'Keep existing' => '',
          'Small' => 'small',
          'Default' => 'default',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'Remove' => 'remove',
        ),
      ),
      'margin_bottom' => 
      array (
        'label' => 'Margin Bottom',
        'description' => 'Set the bottom margin.',
        'type' => 'select',
        'options' => 
        array (
          'Same as top' => '',
          'Small' => 'small',
          'Default' => 'default',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'Remove' => 'remove',
        ),
      ),
      'html_element' => '${builder.html_element}',
      'parallax' => 
      array (
        'label' => 'Column Parallax',
        'description' => 'Set a parallax animation to move columns with different heights until they justify at the bottom. Mind that this disables the vertical alignment of elements in the columns.',
        'type' => 'checkbox',
        'text' => 'Justify columns at the bottom',
      ),
      'parallax_start' => 
      array (
        'label' => 'Start',
        'enable' => 'parallax',
      ),
      'parallax_end' => 
      array (
        'label' => 'End',
        'enable' => 'parallax',
      ),
      'status' => 
      array (
        'label' => 'Status',
        'description' => 'Disable the row and publish it later.',
        'type' => 'checkbox',
        'text' => 'Disable row',
        'attrs' => 
        array (
          'true-value' => 'disabled',
          'false-value' => '',
        ),
      ),
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-row</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-row',
          ),
        ),
        'source' => true,
      ),
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 'layout',
              1 => '_layout',
              2 => 'columns',
              3 => 'column_gap',
              4 => 'row_gap',
              5 => 'divider',
              6 => 'alignment',
              7 => 'width',
              8 => 'padding_remove_horizontal',
              9 => 'width_expand',
              10 => 
              array (
                'label' => 'Column Height',
                'name' => '_height',
                'type' => 'grid',
                'width' => '3-4,1-4',
                'gap' => 'small',
                'fields' => 
                array (
                  0 => 'height',
                  1 => 'height_viewport',
                ),
              ),
              11 => 'height_viewport_offset',
              12 => 'margin_top',
              13 => 'margin_bottom',
              14 => 'html_element',
              15 => 'parallax',
              16 => 
              array (
                'description' => 'The animation starts when the row enters the viewport and ends when it leaves the viewport. Optionally, set a start and end offset, e.g. <code>100px</code>, <code>50vh</code> or <code>50vh + 50%</code>. Percent relates to the row\'s height.',
                'name' => '_parallax',
                'type' => 'grid',
                'width' => '1-2',
                'fields' => 
                array (
                  0 => 'parallax_start',
                  1 => 'parallax_end',
                ),
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Advanced',
            'fields' => 
            array (
              0 => 'status',
              1 => 'source',
              2 => 'id',
              3 => 'class',
              4 => 'attributes',
              5 => 'css',
            ),
          ),
        ),
      ),
    ),
    'panels' => 
    array (
      'builder-row-layout' => 
      array (
        'title' => 'Column Layout',
        'width' => 500,
        'fields' => 
        array (
          0 => 
          array (
            'label' => 'Column 1',
            'type' => 'group',
            'divider' => true,
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Phone Portrait',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 0,
                'field' => 
                array (
                  'name' => 'width_default',
                  'type' => 'select',
                  'options' => '${builder.column_width_options_default}',
                ),
              ),
              1 => 
              array (
                'label' => 'Phone Landscape',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 0,
                'field' => 
                array (
                  'name' => 'width_small',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              2 => 
              array (
                'label' => 'Tablet Landscape',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 0,
                'field' => 
                array (
                  'name' => 'width_medium',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              3 => 
              array (
                'label' => 'Desktop',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 0,
                'field' => 
                array (
                  'name' => 'width_large',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              4 => 
              array (
                'label' => 'Large Screen',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 0,
                'field' => 
                array (
                  'name' => 'width_xlarge',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              5 => 
              array (
                'label' => 'Order First',
                'type' => 'child-prop',
                'description' => 'Select the breakpoint from which the column will start to appear before other columns. On smaller screen sizes, the column will appear in the natural order.',
                'index' => 0,
                'field' => 
                array (
                  'name' => 'order_first',
                  'type' => 'select',
                  'options' => '${builder.column_order_first_options}',
                ),
              ),
            ),
          ),
          1 => 
          array (
            'label' => 'Column 2',
            'type' => 'group',
            'divider' => true,
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Phone Portrait',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 1,
                'field' => 
                array (
                  'name' => 'width_default',
                  'type' => 'select',
                  'options' => '${builder.column_width_options_default}',
                ),
              ),
              1 => 
              array (
                'label' => 'Phone Landscape',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 1,
                'field' => 
                array (
                  'name' => 'width_small',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              2 => 
              array (
                'label' => 'Tablet Landscape',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 1,
                'field' => 
                array (
                  'name' => 'width_medium',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              3 => 
              array (
                'label' => 'Desktop',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 1,
                'field' => 
                array (
                  'name' => 'width_large',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              4 => 
              array (
                'label' => 'Large Screen',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 1,
                'field' => 
                array (
                  'name' => 'width_xlarge',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              5 => 
              array (
                'label' => 'Order First',
                'description' => 'Select the breakpoint from which the column will start to appear before other columns. On smaller screen sizes, the column will appear in the natural order.',
                'type' => 'child-prop',
                'index' => 1,
                'field' => 
                array (
                  'name' => 'order_first',
                  'type' => 'select',
                  'options' => '${builder.column_order_first_options}',
                ),
              ),
            ),
            'show' => 'this.node.children.length > 1',
          ),
          2 => 
          array (
            'label' => 'Column 3',
            'type' => 'group',
            'divider' => true,
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Phone Portrait',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 2,
                'field' => 
                array (
                  'name' => 'width_default',
                  'type' => 'select',
                  'options' => '${builder.column_width_options_default}',
                ),
              ),
              1 => 
              array (
                'label' => 'Phone Landscape',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 2,
                'field' => 
                array (
                  'name' => 'width_small',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              2 => 
              array (
                'label' => 'Tablet Landscape',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 2,
                'field' => 
                array (
                  'name' => 'width_medium',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              3 => 
              array (
                'label' => 'Desktop',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 2,
                'field' => 
                array (
                  'name' => 'width_large',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              4 => 
              array (
                'label' => 'Large Screen',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 2,
                'field' => 
                array (
                  'name' => 'width_xlarge',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              5 => 
              array (
                'label' => 'Order First',
                'description' => 'Select the breakpoint from which the column will start to appear before other columns. On smaller screen sizes, the column will appear in the natural order.',
                'type' => 'child-prop',
                'index' => 2,
                'field' => 
                array (
                  'name' => 'order_first',
                  'type' => 'select',
                  'options' => '${builder.column_order_first_options}',
                ),
              ),
            ),
            'show' => 'this.node.children.length > 2',
          ),
          3 => 
          array (
            'label' => 'Column 4',
            'type' => 'group',
            'divider' => true,
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Phone Portrait',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 3,
                'field' => 
                array (
                  'name' => 'width_default',
                  'type' => 'select',
                  'options' => '${builder.column_width_options_default}',
                ),
              ),
              1 => 
              array (
                'label' => 'Phone Landscape',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 3,
                'field' => 
                array (
                  'name' => 'width_small',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              2 => 
              array (
                'label' => 'Tablet Landscape',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 3,
                'field' => 
                array (
                  'name' => 'width_medium',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              3 => 
              array (
                'label' => 'Desktop',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 3,
                'field' => 
                array (
                  'name' => 'width_large',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              4 => 
              array (
                'label' => 'Large Screen',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 3,
                'field' => 
                array (
                  'name' => 'width_xlarge',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              5 => 
              array (
                'label' => 'Order First',
                'description' => 'Select the breakpoint from which the column will start to appear before other columns. On smaller screen sizes, the column will appear in the natural order.',
                'type' => 'child-prop',
                'index' => 3,
                'field' => 
                array (
                  'name' => 'order_first',
                  'type' => 'select',
                  'options' => '${builder.column_order_first_options}',
                ),
              ),
            ),
            'show' => 'this.node.children.length > 3',
          ),
          4 => 
          array (
            'label' => 'Column 5',
            'type' => 'group',
            'divider' => true,
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Phone Portrait',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 4,
                'field' => 
                array (
                  'name' => 'width_default',
                  'type' => 'select',
                  'options' => '${builder.column_width_options_default}',
                ),
              ),
              1 => 
              array (
                'label' => 'Phone Landscape',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 4,
                'field' => 
                array (
                  'name' => 'width_small',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              2 => 
              array (
                'label' => 'Tablet Landscape',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 4,
                'field' => 
                array (
                  'name' => 'width_medium',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              3 => 
              array (
                'label' => 'Desktop',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 4,
                'field' => 
                array (
                  'name' => 'width_large',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              4 => 
              array (
                'label' => 'Large Screen',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 4,
                'field' => 
                array (
                  'name' => 'width_xlarge',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              5 => 
              array (
                'label' => 'Order First',
                'description' => 'Select the breakpoint from which the column will start to appear before other columns. On smaller screen sizes, the column will appear in the natural order.',
                'type' => 'child-prop',
                'index' => 4,
                'field' => 
                array (
                  'name' => 'order_first',
                  'type' => 'select',
                  'options' => '${builder.column_order_first_options}',
                ),
              ),
            ),
            'show' => 'this.node.children.length > 4',
          ),
          5 => 
          array (
            'label' => 'Column 6',
            'type' => 'group',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Phone Portrait',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 5,
                'field' => 
                array (
                  'name' => 'width_default',
                  'type' => 'select',
                  'options' => '${builder.column_width_options_default}',
                ),
              ),
              1 => 
              array (
                'label' => 'Phone Landscape',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 5,
                'field' => 
                array (
                  'name' => 'width_small',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              2 => 
              array (
                'label' => 'Tablet Landscape',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 5,
                'field' => 
                array (
                  'name' => 'width_medium',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              3 => 
              array (
                'label' => 'Desktop',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 5,
                'field' => 
                array (
                  'name' => 'width_large',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              4 => 
              array (
                'label' => 'Large Screen',
                'description' => 'Set the column width for each breakpoint. Mix fraction widths or combine fixed widths with the <i>Expand</i> value. If no value is selected, the column width of the next smaller screen size is applied. The combination of widths should always take the full width.',
                'type' => 'child-prop',
                'index' => 5,
                'field' => 
                array (
                  'name' => 'width_xlarge',
                  'type' => 'select',
                  'options' => '${builder.column_width_options}',
                ),
              ),
              5 => 
              array (
                'label' => 'Order First',
                'description' => 'Select the breakpoint from which the column will start to appear before other columns. On smaller screen sizes, the column will appear in the natural order.',
                'type' => 'child-prop',
                'index' => 5,
                'field' => 
                array (
                  'name' => 'order_first',
                  'type' => 'select',
                  'options' => '${builder.column_order_first_options}',
                ),
              ),
            ),
            'show' => 'this.node.children.length > 5',
          ),
        ),
      ),
    ),
  ),
  'section' => 
  array (
    'name' => 'section',
    'title' => 'Section',
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'style' => 'default',
      'width' => 'default',
      'vertical_align' => 'middle',
      'title_position' => 'top-left',
      'title_rotation' => 'left',
      'title_breakpoint' => 'xl',
      'image_position' => 'center-center',
    ),
    'fields' => 
    array (
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'image',
        'source' => true,
        'show' => '!video',
      ),
      'video' => 
      array (
        'label' => 'Video',
        'type' => 'video',
        'source' => true,
        'show' => '!image',
      ),
      '_media' => 
      array (
        'type' => 'button-panel',
        'panel' => 'builder-section-media',
        'text' => 'Edit Settings',
        'show' => 'image || video',
      ),
      'title' => 
      array (
        'label' => 'Title',
        'description' => 'Enter a decorative section title which is aligned to the section edge.',
        'source' => true,
      ),
      'style' => 
      array (
        'label' => 'Style',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Muted' => 'muted',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
        ),
        'source' => true,
      ),
      'preserve_color' => 
      array (
        'type' => 'checkbox',
        'text' => 'Preserve text color',
        'enable' => 'style',
      ),
      'overlap' => 
      array (
        'type' => 'checkbox',
        'text' => 'Overlap the following section',
      ),
      'background_color' => 
      array (
        'label' => 'Background Color',
        'type' => 'gradient',
        'internal' => 'background_color_gradient',
        'source' => true,
        'enable' => '!style',
      ),
      'background_color_gradient' => 
      array (
        'type' => 'hidden',
      ),
      '_background_parallax_button' => 
      array (
        'description' => 'Define a custom background color or a color parallax animation instead of using a predefined style.',
        'type' => 'button-panel',
        'text' => 'Edit Parallax',
        'panel' => 'background-parallax',
        'enable' => '!style',
      ),
      'text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Force a light or dark color for text, buttons and controls on the image or video background.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
        'enable' => '!style || image || video',
      ),
      'width' => 
      array (
        'label' => 'Max Width',
        'type' => 'select',
        'options' => 
        array (
          'Default' => 'default',
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'Expand' => 'expand',
          'None' => '',
        ),
      ),
      'padding_remove_horizontal' => 
      array (
        'description' => 'Set the maximum content width.',
        'type' => 'checkbox',
        'text' => 'Remove horizontal padding',
        'enable' => 'width && width != \'expand\'',
      ),
      'width_expand' => 
      array (
        'label' => 'Expand One Side',
        'description' => 'Expand the width of one side to the left or right while the other side keeps within the constraints of the max width.',
        'type' => 'select',
        'options' => 
        array (
          'Don\'t expand' => '',
          'To left' => 'left',
          'To right' => 'right',
        ),
        'enable' => 'width && width != \'expand\'',
      ),
      'height' => 
      array (
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Pixels' => 'pixels',
          'Viewport' => 'viewport',
          'Viewport (Subtract Next Section)' => 'section',
          'Expand Page to Viewport' => 'page',
        ),
      ),
      'height_viewport' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => '100',
          'min' => 0,
          'step' => 10,
        ),
        'enable' => 'height == \'viewport\' || height == \'pixels\'',
      ),
      'height_viewport_offset' => 
      array (
        'description' => 'Set a fixed height, and optionally subtract the header height to fill the first visible viewport. Alternatively, expand the height so the next section also fits the viewport, or on smaller pages to fill the viewport.',
        'type' => 'checkbox',
        'text' => 'Subtract height above section',
        'enable' => 'height == \'viewport\' && (height_viewport || 0) <= 100 || height == \'section\'',
      ),
      'vertical_align' => 
      array (
        'label' => 'Vertical Alignment',
        'description' => 'Align the section content vertically, if the section height is larger than the content itself.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => '',
          'Middle' => 'middle',
          'Bottom' => 'bottom',
        ),
        'enable' => 'height',
      ),
      'padding_top' => 
      array (
        'label' => 'Padding Top',
        'description' => 'Set the top padding.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'none',
        ),
      ),
      'padding_bottom' => 
      array (
        'label' => 'Padding Bottom',
        'description' => 'Set the bottom padding.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'none',
        ),
      ),
      'html_element' => '${builder.html_element}',
      'sticky' => 
      array (
        'label' => 'Sticky Effect',
        'description' => 'Sticky section will be covered by the following section while scrolling. Reveal section by previous section.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Cover' => 'cover',
          'Reveal' => 'reveal',
        ),
      ),
      'header_transparent' => 
      array (
        'label' => 'Transparent Header',
        'type' => 'checkbox',
        'text' => 'Make header transparent',
      ),
      'header_transparent_noplaceholder' => 
      array (
        'description' => 'Make the header transparent and overlay this section if it directly follows the header.',
        'type' => 'checkbox',
        'text' => 'Pull content behind header',
        'enable' => 'header_transparent',
      ),
      'header_transparent_text_color' => 
      array (
        'label' => 'Header Text Color',
        'description' => 'Force a light or dark color for text, buttons and controls on the image or video background.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
        'enable' => 'header_transparent',
      ),
      'animation' => 
      array (
        'label' => 'Animation',
        'description' => 'Apply an animation to elements once they enter the viewport. Slide animations can come into effect with a fixed offset or at 100% of the element size.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
      ),
      'animation_delay' => 
      array (
        'label' => 'Animation Delay',
        'description' => 'Delay the element animations in milliseconds, e.g. <code>200</code>.',
        'attrs' => 
        array (
          'placeholder' => '0',
        ),
        'enable' => 'animation',
        'divider' => true,
      ),
      'title_position' => 
      array (
        'label' => 'Position',
        'description' => 'Define the title position within the section.',
        'type' => 'select',
        'options' => 
        array (
          'Left Top' => 'top-left',
          'Left Center' => 'center-left',
          'Left Bottom' => 'bottom-left',
          'Right Top' => 'top-right',
          'Right Center' => 'center-right',
          'Right Bottom' => 'bottom-right',
        ),
        'enable' => 'title',
      ),
      'title_rotation' => 
      array (
        'label' => 'Rotation',
        'description' => 'Rotate the title 90 degrees clockwise or counterclockwise.',
        'type' => 'select',
        'options' => 
        array (
          'Left' => 'left',
          'Right' => 'right',
        ),
        'enable' => 'title',
      ),
      'title_breakpoint' => 
      array (
        'label' => 'Breakpoint',
        'description' => 'Display the section title on the defined screen size and larger.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'title',
      ),
      'status' => 
      array (
        'label' => 'Status',
        'description' => 'Disable the section and publish it later.',
        'type' => 'checkbox',
        'text' => 'Disable section',
        'attrs' => 
        array (
          'true-value' => 'disabled',
          'false-value' => '',
        ),
      ),
      'source' => '${builder.source}',
      'name' => '${builder.name}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-section</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-section',
          ),
        ),
        'source' => true,
      ),
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'image',
              1 => 'video',
              2 => '_media',
              3 => 'title',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 'style',
              1 => 'preserve_color',
              2 => 'overlap',
              3 => 'background_color',
              4 => '_background_parallax_button',
              5 => 'text_color',
              6 => 'width',
              7 => 'padding_remove_horizontal',
              8 => 'width_expand',
              9 => 
              array (
                'label' => 'Height',
                'name' => '_height',
                'type' => 'grid',
                'width' => '3-4,1-4',
                'gap' => 'small',
                'fields' => 
                array (
                  0 => 'height',
                  1 => 'height_viewport',
                ),
              ),
              10 => 'height_viewport_offset',
              11 => 'vertical_align',
              12 => 'padding_top',
              13 => 'padding_bottom',
              14 => 'html_element',
              15 => 'sticky',
              16 => 'header_transparent',
              17 => 'header_transparent_noplaceholder',
              18 => 'header_transparent_text_color',
              19 => 'animation',
              20 => 'animation_delay',
              21 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'title_position',
                  1 => 'title_rotation',
                  2 => 'title_breakpoint',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
    'panels' => 
    array (
      'builder-section-media' => 
      array (
        'title' => 'Image/Video',
        'width' => 500,
        'fields' => 
        array (
          'image_width' => 
          array (
            'label' => 'Width',
            'type' => 'number',
            'attrs' => 
            array (
              'placeholder' => 'auto',
            ),
          ),
          'image_height' => 
          array (
            'label' => 'Height',
            'type' => 'number',
            'attrs' => 
            array (
              'placeholder' => 'auto',
            ),
          ),
          'media_focal_point' => 
          array (
            'label' => 'Focal Point',
            'description' => 'Set a focal point to control cropping.',
            'type' => 'select',
            'options' => 
            array (
              'Top Left' => 'top-left',
              'Top Center' => 'top-center',
              'Top Right' => 'top-right',
              'Center Left' => 'center-left',
              'Center Center' => '',
              'Center Right' => 'center-right',
              'Bottom Left' => 'bottom-left',
              'Bottom Center' => 'bottom-center',
              'Bottom Right' => 'bottom-right',
            ),
            'source' => true,
          ),
          'image_loading' => 
          array (
            'label' => 'Loading',
            'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
            'type' => 'checkbox',
            'text' => 'Load image eagerly',
          ),
          'image_size' => 
          array (
            'label' => 'Image Size',
            'description' => 'Determine whether the image will fit the section dimensions by clipping it or by filling the empty areas with the background color.',
            'type' => 'select',
            'options' => 
            array (
              'Auto' => '',
              'Cover' => 'cover',
              'Contain' => 'contain',
              'Width 100%' => 'width-1-1',
              'Height 100%' => 'height-1-1',
            ),
            'show' => 'image && !video',
          ),
          'image_position' => 
          array (
            'label' => 'Image Position',
            'description' => 'Set the initial background position, relative to the section layer.',
            'type' => 'select',
            'options' => 
            array (
              'Top Left' => 'top-left',
              'Top Center' => 'top-center',
              'Top Right' => 'top-right',
              'Center Left' => 'center-left',
              'Center Center' => 'center-center',
              'Center Right' => 'center-right',
              'Bottom Left' => 'bottom-left',
              'Bottom Center' => 'bottom-center',
              'Bottom Right' => 'bottom-right',
            ),
            'show' => 'image && !video',
          ),
          'image_effect' => 
          array (
            'label' => 'Image Effect',
            'type' => 'select',
            'options' => 
            array (
              'None' => '',
              'Parallax' => 'parallax',
              'Fixed' => 'fixed',
            ),
            'show' => 'image && !video',
          ),
          '_image_parallax_button' => 
          array (
            'description' => 'Add a parallax effect or fix the background with regard to the viewport while scrolling.',
            'type' => 'button-panel',
            'text' => 'Edit Parallax',
            'panel' => 'image-parallax',
            'show' => 'image && !video',
            'enable' => 'image_effect == \'parallax\'',
          ),
          'media_visibility' => 
          array (
            'label' => 'Visibility',
            'description' => 'Display the image or video only on this device width and larger.',
            'type' => 'select',
            'options' => 
            array (
              'Always' => '',
              'Small (Phone Landscape)' => 's',
              'Medium (Tablet Landscape)' => 'm',
              'Large (Desktop)' => 'l',
              'X-Large (Large Screens)' => 'xl',
            ),
          ),
          'media_background' => 
          array (
            'label' => 'Background Color',
            'description' => 'Use the background color in combination with blend modes, a transparent image or to fill the area, if the image doesn\'t cover the whole section.',
            'type' => 'color',
          ),
          'media_blend_mode' => 
          array (
            'label' => 'Blend Mode',
            'description' => 'Determine how the image or video will blend with the background color.',
            'type' => 'select',
            'options' => 
            array (
              'Normal' => '',
              'Multiply' => 'multiply',
              'Screen' => 'screen',
              'Overlay' => 'overlay',
              'Darken' => 'darken',
              'Lighten' => 'lighten',
              'Color-dodge' => 'color-dodge',
              'Color-burn' => 'color-burn',
              'Hard-light' => 'hard-light',
              'Soft-light' => 'soft-light',
              'Difference' => 'difference',
              'Exclusion' => 'exclusion',
              'Hue' => 'hue',
              'Saturation' => 'saturation',
              'Color' => 'color',
              'Luminosity' => 'luminosity',
            ),
          ),
          'media_overlay' => 
          array (
            'label' => 'Overlay Color',
            'type' => 'gradient',
            'internal' => 'media_overlay_gradient',
          ),
          'media_overlay_gradient' => 
          array (
            'type' => 'hidden',
          ),
          '_media_overlay_parallax_button' => 
          array (
            'description' => 'Set an additional transparent overlay to soften the image or video.',
            'type' => 'button-panel',
            'text' => 'Edit Parallax',
            'panel' => 'media-overlay-parallax',
            'enable' => 'media_overlay',
          ),
        ),
        'fieldset' => 
        array (
          'default' => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'description' => 'Set the width and height in pixels. Setting just one value preserves the original proportions. The image will be resized and cropped automatically.',
                'name' => '_image_dimension',
                'type' => 'grid',
                'width' => '1-2',
                'fields' => 
                array (
                  0 => 'image_width',
                  1 => 'image_height',
                ),
              ),
              1 => 'media_focal_point',
              2 => 'image_loading',
              3 => 'image_size',
              4 => 'image_position',
              5 => 'image_effect',
              6 => '_image_parallax_button',
              7 => 'media_visibility',
              8 => 'media_background',
              9 => 'media_blend_mode',
              10 => 'media_overlay',
              11 => '_media_overlay_parallax_button',
            ),
          ),
        ),
      ),
    ),
  ),
  'slideshow' => 
  array (
    'name' => 'slideshow',
    'title' => 'Slideshow',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_title' => true,
      'show_meta' => true,
      'show_content' => true,
      'show_link' => true,
      'show_thumbnail' => true,
      'slideshow_min_height' => 300,
      'slideshow_autoplay_pause' => true,
      'nav' => 'dotnav',
      'nav_position' => 'bottom-center',
      'nav_position_margin' => 'medium',
      'nav_align' => 'center',
      'nav_breakpoint' => 's',
      'thumbnav_width' => '100',
      'thumbnav_height' => '75',
      'thumbnav_svg_color' => 'emphasis',
      'slidenav' => 'default',
      'slidenav_margin' => 'medium',
      'slidenav_breakpoint' => 's',
      'slidenav_outside_breakpoint' => 'xl',
      'overlay_position' => 'center-left',
      'overlay_animation' => 'parallax',
      'title_hover_style' => 'reset',
      'title_element' => 'h3',
      'meta_style' => 'text-meta',
      'meta_align' => 'below-title',
      'meta_element' => 'div',
      'link_text' => 'Read more',
      'link_style' => 'default',
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'item' => 'slideshow_item',
        'media' => 
        array (
          0 => 
          array (
            'type' => 'image',
            'item' => 
            array (
              'title' => 'title',
              'image' => 'src',
            ),
          ),
          1 => 
          array (
            'type' => 'video',
            'item' => 
            array (
              'title' => 'title',
              'video' => 'src',
            ),
          ),
        ),
      ),
      'show_title' => 
      array (
        'label' => 'Display',
        'type' => 'checkbox',
        'text' => 'Show the title',
      ),
      'show_meta' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the meta text',
      ),
      'show_content' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the content',
      ),
      'show_link' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the link',
      ),
      'show_thumbnail' => 
      array (
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the navigation thumbnail instead of the image',
      ),
      'link' => 
      array (
        'label' => 'Link',
        'type' => 'link',
        'description' => 'Link the whole slideshow instead of linking items separately.',
        'attrs' => 
        array (
          'placeholder' => 'http://',
        ),
        'source' => true,
      ),
      'height_viewport' => 
      array (
        'type' => 'select',
        'options' => 
        array (
          'Auto' => '',
          'Viewport' => 'viewport',
          'Viewport (Subtract Next Section)' => 'section',
        ),
      ),
      'height_viewport_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => '100',
          'min' => 0,
          'max' => 100,
          'step' => 10,
          'class' => 'uk-form-width-xsmall',
        ),
        'enable' => 'height_viewport == \'viewport\'',
      ),
      'height_viewport_offset' => 
      array (
        'type' => 'checkbox',
        'text' => 'Subtract height above',
        'enable' => 'height_viewport == \'viewport\' && (height_viewport_height || 0) <= 100 || height_viewport == \'section\'',
      ),
      'height_expand' => 
      array (
        'type' => 'checkbox',
        'text' => 'Fill the available column space',
        'enable' => '!height_viewport',
      ),
      'slideshow_ratio' => 
      array (
        'label' => 'Ratio',
        'description' => 'Set the slideshow ratio. It\'s recommended to use the same ratio as the image or video file. Simply use its width and height, e.g. <code>1600:900</code>.',
        'attrs' => 
        array (
          'placeholder' => '16:9',
        ),
        'enable' => '!height_viewport',
      ),
      'slideshow_min_height' => 
      array (
        'label' => 'Min Height',
        'description' => 'Use an optional minimum height to prevent the slideshow from becoming smaller than its content on small devices.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 200,
          'max' => 800,
          'step' => 50,
        ),
        'enable' => 'height_viewport || (!height_viewport && !height_expand)',
      ),
      'slideshow_max_height' => 
      array (
        'label' => 'Max Height',
        'description' => 'Set the maximum height.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 500,
          'max' => 1600,
          'step' => 50,
        ),
        'enable' => '!height_viewport',
      ),
      'text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
      ),
      'slideshow_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the slideshow border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => '!slideshow_box_decoration',
      ),
      'slideshow_box_shadow' => 
      array (
        'label' => 'Box Shadow',
        'description' => 'Select the slideshow box shadow size.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
      ),
      'slideshow_box_decoration' => 
      array (
        'label' => 'Box Decoration',
        'description' => 'Select the image box decoration style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Floating Shadow' => 'shadow',
          'Mask' => 'mask',
        ),
      ),
      'slideshow_box_decoration_inverse' => 
      array (
        'type' => 'checkbox',
        'text' => 'Inverse style',
        'enable' => '$match(slideshow_box_decoration, \'^(default|primary|secondary)$\')',
      ),
      'slideshow_animation' => 
      array (
        'label' => 'Transition',
        'description' => 'Select the transition between two slides.',
        'type' => 'select',
        'options' => 
        array (
          'Slide' => '',
          'Pull' => 'pull',
          'Push' => 'push',
          'Fade' => 'fade',
          'Scale' => 'scale',
        ),
      ),
      'slideshow_velocity' => 
      array (
        'label' => 'Velocity',
        'description' => 'Set the velocity in pixels per millisecond.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 0.2,
          'max' => 3,
          'step' => 0.1,
          'placeholder' => '1',
        ),
        'enable' => '!slideshow_parallax',
      ),
      'slideshow_autoplay' => 
      array (
        'label' => 'Autoplay',
        'type' => 'checkbox',
        'text' => 'Enable autoplay',
        'enable' => '!slideshow_parallax',
      ),
      'slideshow_autoplay_pause' => 
      array (
        'type' => 'checkbox',
        'text' => 'Pause autoplay on hover',
        'enable' => '!slideshow_parallax && slideshow_autoplay',
      ),
      'slideshow_autoplay_interval' => 
      array (
        'label' => 'Autoplay Interval',
        'description' => 'Set the autoplay interval in seconds.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 5,
          'max' => 15,
          'step' => 1,
          'placeholder' => '7',
        ),
        'enable' => '!slideshow_parallax && slideshow_autoplay',
      ),
      'slideshow_parallax' => 
      array (
        'label' => 'Parallax',
        'description' => 'Add a stepless parallax animation based on the scroll position.',
        'type' => 'checkbox',
        'text' => 'Enable parallax effect',
      ),
      'slideshow_parallax_easing' => 
      array (
        'label' => 'Parallax Easing',
        'description' => 'Set the animation easing. Zero transitions at an even speed, a negative value starts off quickly while a positive value starts off slowly.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => -2,
          'max' => 2,
          'step' => 0.1,
        ),
        'enable' => 'slideshow_parallax',
      ),
      'slideshow_parallax_target' => 
      array (
        'label' => 'Parallax Target',
        'description' => 'The animation starts and stops depending on the element position in the viewport. Alternatively, use the position of a parent container.',
        'type' => 'select',
        'options' => 
        array (
          'Element' => '',
          'Column' => '!.tm-grid-expand>*',
          'Row' => '!.tm-grid-expand',
          'Section' => '!.uk-section',
          'Next Section' => '![class*=\'uk-section-\'] ~ [class*=\'uk-section-\']',
        ),
        'enable' => 'slideshow_parallax',
      ),
      'slideshow_parallax_start' => 
      array (
        'enable' => 'slideshow_parallax',
      ),
      'slideshow_parallax_end' => 
      array (
        'enable' => 'slideshow_parallax',
      ),
      'slideshow_kenburns' => 
      array (
        'label' => 'Ken Burns Effect',
        'description' => 'Select the transformation origin for the Ken Burns animation.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Alternate' => 'alternate',
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => 'center-center',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
      ),
      'slideshow_kenburns_duration' => 
      array (
        'label' => 'Ken Burns Duration',
        'description' => 'Set the duration for the Ken Burns effect in seconds.',
        'type' => 'range',
        'attrs' => 
        array (
          'min' => 10,
          'max' => 30,
          'step' => 1,
          'placeholder' => '15',
        ),
        'enable' => 'slideshow_kenburns',
      ),
      'nav' => 
      array (
        'label' => 'Navigation',
        'description' => 'Select the navigation type.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Dotnav' => 'dotnav',
          'Thumbnav' => 'thumbnav',
        ),
      ),
      'nav_below' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show below slideshow',
        'enable' => 'nav',
      ),
      'nav_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show on hover only',
        'enable' => 'nav && !nav_below',
      ),
      'nav_vertical' => 
      array (
        'type' => 'checkbox',
        'text' => 'Vertical navigation',
        'enable' => 'nav && !nav_below',
      ),
      'nav_position' => 
      array (
        'label' => 'Position',
        'description' => 'Select the position of the navigation.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'show' => 'nav && !nav_below',
      ),
      'nav_align' => 
      array (
        'label' => 'Position',
        'description' => 'Align the navigation items.',
        'type' => 'select',
        'options' => 
        array (
          'Left' => 'left',
          'Center' => 'center',
          'Right' => 'right',
        ),
        'show' => 'nav && nav_below',
      ),
      'nav_position_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Apply a margin between the navigation and the slideshow container.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'show' => 'nav && !nav_below',
      ),
      'nav_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Set the vertical margin.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'show' => 'nav && nav_below',
      ),
      'nav_breakpoint' => 
      array (
        'label' => 'Breakpoint',
        'description' => 'Display the navigation only on this device width and larger.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'nav',
      ),
      'thumbnav_width' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'nav == \'thumbnav\' && show_thumbnail',
      ),
      'thumbnav_height' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'nav == \'thumbnav\' && show_thumbnail',
      ),
      'thumbnav_shrink' => 
      array (
        'description' => 'Shrink thumbnails if the container is too small.',
        'type' => 'checkbox',
        'text' => 'Shrink thumbnails',
        'enable' => 'nav == \'thumbnav\' && show_thumbnail',
      ),
      'thumbnav_svg_inline' => 
      array (
        'label' => 'Thumbnav Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'nav == \'thumbnav\' && show_thumbnail',
      ),
      'thumbnav_svg_color' => 
      array (
        'label' => 'Thumbnav SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'nav == \'thumbnav\' && show_thumbnail && thumbnav_svg_inline',
      ),
      'slidenav' => 
      array (
        'label' => 'Position',
        'description' => 'Select the position of the slidenav.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Outside' => 'outside',
          'Top Left' => 'top-left',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
      ),
      'slidenav_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show on hover only',
        'enable' => 'slidenav',
      ),
      'slidenav_large' => 
      array (
        'type' => 'checkbox',
        'text' => 'Larger style',
        'enable' => 'slidenav',
      ),
      'slidenav_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Apply a margin between the slidenav and the slideshow container.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'enable' => 'slidenav',
      ),
      'slidenav_breakpoint' => 
      array (
        'label' => 'Breakpoint',
        'description' => 'Display the slidenav only on this device width and larger.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'slidenav',
      ),
      'slidenav_outside_breakpoint' => 
      array (
        'label' => 'Outside Breakpoint',
        'description' => 'Display the slidenav outside only on this device width and larger. Otherwise, display it inside.',
        'type' => 'select',
        'options' => 
        array (
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'slidenav == \'outside\'',
      ),
      'overlay_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the whole overlay if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link overlay',
        'enable' => 'show_link && !link',
      ),
      'overlay_container' => 
      array (
        'label' => 'Container Width',
        'description' => 'Set the maximum content width. Note: The section may already have a maximum width, which you cannot exceed.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Small' => 'small',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'Expand' => 'expand',
        ),
      ),
      'overlay_container_padding' => 
      array (
        'label' => 'Container Padding',
        'description' => 'Set the vertical container padding to position the overlay.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => 'overlay_container',
      ),
      'overlay_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Set the margin between the overlay and the slideshow container.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Small' => 'small',
          'Large' => 'large',
          'None' => 'none',
        ),
        'enable' => '!overlay_container',
      ),
      'overlay_position' => 
      array (
        'label' => 'Position',
        'description' => 'Select the content position.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Bottom' => 'bottom',
          'Left' => 'left',
          'Right' => 'right',
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => 'center',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
      ),
      'overlay_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a style for the overlay.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Overlay Default' => 'overlay-default',
          'Overlay Primary' => 'overlay-primary',
          'Tile Default' => 'tile-default',
          'Tile Muted' => 'tile-muted',
          'Tile Primary' => 'tile-primary',
          'Tile Secondary' => 'tile-secondary',
        ),
      ),
      'overlay_padding' => 
      array (
        'label' => 'Padding',
        'description' => 'Set the padding between the overlay and its content.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Small' => 'small',
          'Large' => 'large',
        ),
        'enable' => 'overlay_style',
      ),
      'overlay_width' => 
      array (
        'label' => 'Width',
        'description' => 'Set a fixed width.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
        'enable' => '!$match(overlay_position, \'^(top|bottom)$\')',
      ),
      'overlay_animation' => 
      array (
        'label' => 'Animation',
        'description' => 'Choose between a parallax depending on the scroll position or an animation, which is applied once the slide is active.',
        'type' => 'select',
        'options' => 
        array (
          'Parallax' => 'parallax',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
      ),
      '_slideshow_overlay_parallax' => 
      array (
        'type' => 'button-panel',
        'panel' => 'builder-slideshow-overlay-parallax',
        'text' => 'Edit Settings',
        'enable' => 'overlay_animation == \'parallax\'',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
      ),
      'media_background' => '${builder.media_background}',
      'media_blend_mode' => '${builder.media_blend_mode}',
      'media_overlay' => '${builder.media_overlay}',
      'media_overlay_gradient' => '${builder.media_overlay_gradient}',
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
        ),
        'enable' => 'show_title',
      ),
      'title_link' => 
      array (
        'label' => 'Link',
        'description' => 'Link the title if a link exists.',
        'type' => 'checkbox',
        'text' => 'Link title',
        'enable' => 'show_title && show_link && !link',
      ),
      'title_hover_style' => 
      array (
        'label' => 'Hover Style',
        'description' => 'Set the hover style for a linked title.',
        'type' => 'select',
        'options' => 
        array (
          'None' => 'reset',
          'Heading Link' => 'heading',
          'Default Link' => '',
        ),
        'enable' => 'show_title && show_link && !link && (title_link || overlay_link)',
      ),
      'title_decoration' => 
      array (
        'label' => 'Decoration',
        'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Bullet' => 'bullet',
          'Line' => 'line',
        ),
        'enable' => 'show_title',
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
        'enable' => 'show_title',
      ),
      'title_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
        'enable' => 'show_title',
      ),
      'title_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_title',
      ),
      'title_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_title',
      ),
      'title_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_title',
      ),
      '_title_parallax' => 
      array (
        'label' => 'Parallax',
        'description' => 'Add a parallax effect.',
        'type' => 'button-panel',
        'panel' => 'builder-slideshow-title-parallax',
        'text' => 'Edit Settings',
        'enable' => 'show_title && overlay_animation == \'parallax\'',
      ),
      'meta_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined meta text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_meta',
      ),
      'meta_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_meta',
      ),
      'meta_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the meta text.',
        'type' => 'select',
        'options' => 
        array (
          'Above Title' => 'above-title',
          'Below Title' => 'below-title',
          'Below Content' => 'below-content',
        ),
        'enable' => 'show_meta',
      ),
      'meta_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_meta',
      ),
      'meta_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_meta',
      ),
      'meta_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_meta',
      ),
      '_meta_parallax' => 
      array (
        'label' => 'Parallax',
        'description' => 'Add a parallax effect.',
        'type' => 'button-panel',
        'panel' => 'builder-slideshow-meta-parallax',
        'text' => 'Edit Settings',
        'enable' => 'show_meta && overlay_animation == \'parallax\'',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_content',
      ),
      'content_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_content',
      ),
      'content_margin_auto' => 
      array (
        'label' => 'Margin Bottom',
        'type' => 'checkbox',
        'text' => 'Auto',
        'enable' => 'show_content',
      ),
      '_content_parallax' => 
      array (
        'label' => 'Parallax',
        'description' => 'Add a parallax effect.',
        'type' => 'button-panel',
        'panel' => 'builder-slideshow-content-parallax',
        'text' => 'Edit Settings',
        'enable' => 'show_content && overlay_animation == \'parallax\'',
      ),
      'link_text' => 
      array (
        'label' => 'Text',
        'description' => 'Enter the text for the link.',
        'enable' => 'show_link && !link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'ARIA Label',
        'description' => 'Enter a descriptive text label to make it accessible if the link has no visible text.',
        'enable' => 'show_link',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'show_link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'show_link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'show_link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'show_link',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link' => '',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
        'enable' => 'show_link && !link',
      ),
      'link_size' => 
      array (
        'label' => 'Button Size',
        'description' => 'Set the button size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => 'show_link && !link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Full width button',
        'enable' => 'show_link && !link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_link && !link',
      ),
      '_link_parallax' => 
      array (
        'label' => 'Parallax',
        'description' => 'Add a parallax effect.',
        'type' => 'button-panel',
        'panel' => 'builder-slideshow-link-parallax',
        'text' => 'Edit Settings',
        'enable' => 'show_link && !link && overlay_animation == \'parallax\'',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'container_padding_remove' => '${builder.container_padding_remove}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-nav</code>, <code>.el-slidenav</code>, <code>.el-image</code>, <code>.el-overlay</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-link</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-item',
            2 => '.el-nav',
            3 => '.el-slidenav',
            4 => '.el-image',
            5 => '.el-overlay',
            6 => '.el-title',
            7 => '.el-meta',
            8 => '.el-content',
            9 => '.el-link',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'show_title',
              2 => 'show_meta',
              3 => 'show_content',
              4 => 'show_link',
              5 => 'show_thumbnail',
              6 => 'link',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Slideshow',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Height',
                    'description' => 'The slideshow always takes up full width, and the height will adapt automatically based on the defined ratio. Alternatively, the height can adapt to the height of the viewport or to fill the available space in the column.<br><br>Note: Make sure no height is set in the section settings when using one of the viewport options.',
                    'name' => '_height_viewport',
                    'type' => 'grid',
                    'width' => 'expand,auto',
                    'gap' => 'small',
                    'fields' => 
                    array (
                      0 => 'height_viewport',
                      1 => 'height_viewport_height',
                    ),
                  ),
                  1 => 'height_viewport_offset',
                  2 => 'height_expand',
                  3 => 'slideshow_ratio',
                  4 => 'slideshow_min_height',
                  5 => 'slideshow_max_height',
                  6 => 'text_color',
                  7 => 'slideshow_border',
                  8 => 'slideshow_box_shadow',
                  9 => 'slideshow_box_decoration',
                  10 => 'slideshow_box_decoration_inverse',
                ),
              ),
              1 => 
              array (
                'label' => 'Animation',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'slideshow_animation',
                  1 => 'slideshow_velocity',
                  2 => 'slideshow_autoplay',
                  3 => 'slideshow_autoplay_pause',
                  4 => 'slideshow_autoplay_interval',
                  5 => 'slideshow_parallax',
                  6 => 'slideshow_parallax_easing',
                  7 => 'slideshow_parallax_target',
                  8 => 
                  array (
                    'label' => 'Parallax Start/End',
                    'description' => 'The animation starts when the element enters the viewport and ends when it leaves the viewport. Optionally, set a start and end offset, e.g. <code>100px</code>, <code>50vh</code> or <code>50vh + 50%</code>. Percent relates to the target\'s height.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'slideshow_parallax_start',
                      1 => 'slideshow_parallax_end',
                    ),
                  ),
                  9 => 'slideshow_kenburns',
                  10 => 'slideshow_kenburns_duration',
                ),
              ),
              2 => 
              array (
                'label' => 'Navigation',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'nav',
                  1 => 'nav_below',
                  2 => 'nav_hover',
                  3 => 'nav_vertical',
                  4 => 'nav_position',
                  5 => 'nav_align',
                  6 => 'nav_position_margin',
                  7 => 'nav_margin',
                  8 => 'nav_breakpoint',
                  9 => 
                  array (
                    'label' => 'Thumbnail Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'thumbnav_width',
                      1 => 'thumbnav_height',
                    ),
                  ),
                  10 => 'thumbnav_shrink',
                  11 => 'thumbnav_svg_inline',
                  12 => 'thumbnav_svg_color',
                ),
              ),
              3 => 
              array (
                'label' => 'Slidenav',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'slidenav',
                  1 => 'slidenav_hover',
                  2 => 'slidenav_large',
                  3 => 'slidenav_margin',
                  4 => 'slidenav_breakpoint',
                  5 => 'slidenav_outside_breakpoint',
                ),
              ),
              4 => 
              array (
                'label' => 'Item',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'overlay_link',
                ),
              ),
              5 => 
              array (
                'label' => 'Overlay',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'overlay_container',
                  1 => 'overlay_container_padding',
                  2 => 'overlay_margin',
                  3 => 'overlay_position',
                  4 => 'overlay_style',
                  5 => 'overlay_padding',
                  6 => 'overlay_width',
                  7 => 'overlay_animation',
                  8 => '_slideshow_overlay_parallax',
                ),
              ),
              6 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_loading',
                  2 => 'media_background',
                  3 => 'media_blend_mode',
                  4 => 'media_overlay',
                ),
              ),
              7 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_style',
                  1 => 'title_link',
                  2 => 'title_hover_style',
                  3 => 'title_decoration',
                  4 => 'title_font_family',
                  5 => 'title_color',
                  6 => 'title_element',
                  7 => 'title_margin',
                  8 => 'title_margin_auto',
                  9 => '_title_parallax',
                ),
              ),
              8 => 
              array (
                'label' => 'Meta',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'meta_style',
                  1 => 'meta_color',
                  2 => 'meta_align',
                  3 => 'meta_element',
                  4 => 'meta_margin',
                  5 => 'meta_margin_auto',
                  6 => '_meta_parallax',
                ),
              ),
              9 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_style',
                  1 => 'content_margin',
                  2 => 'content_margin_auto',
                  3 => '_content_parallax',
                ),
              ),
              10 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_text',
                  1 => 'link_aria_label',
                  2 => 'link_target',
                  3 => 'link_download',
                  4 => 'link_rel_nofollow',
                  5 => 'link_rel_noreferrer',
                  6 => 'link_style',
                  7 => 'link_size',
                  8 => 'link_fullwidth',
                  9 => 'link_margin',
                  10 => '_link_parallax',
                ),
              ),
              11 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                  20 => 'container_padding_remove',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
    'panels' => 
    array (
      'builder-slideshow-overlay-parallax' => 
      array (
        'title' => 'Overlay Parallax',
        'width' => 500,
        'fields' => 
        array (
          'overlay_parallax_x' => 
          array (
            'text' => 'Translate X',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => -600,
              'max' => 600,
              'step' => 10,
            ),
          ),
          'overlay_parallax_y' => 
          array (
            'text' => 'Translate Y',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => -600,
              'max' => 600,
              'step' => 10,
            ),
          ),
          'overlay_parallax_scale' => 
          array (
            'text' => 'Scale',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0.3,
              'max' => 4,
              'step' => 0.1,
            ),
          ),
          'overlay_parallax_rotate' => 
          array (
            'text' => 'Rotate',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0,
              'max' => 360,
              'step' => 10,
            ),
          ),
          'overlay_parallax_opacity' => 
          array (
            'text' => 'Opacity',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0,
              'max' => 1,
              'step' => 0.1,
            ),
          ),
        ),
        'fieldset' => 
        array (
          'default' => 
          array (
            'fields' => 
            array (
              0 => 'overlay_parallax_x',
              1 => 'overlay_parallax_y',
              2 => 'overlay_parallax_scale',
              3 => 'overlay_parallax_rotate',
              4 => 'overlay_parallax_opacity',
            ),
          ),
        ),
      ),
      'builder-slideshow-title-parallax' => 
      array (
        'title' => 'Title Parallax',
        'width' => 500,
        'fields' => 
        array (
          'title_parallax_x' => 
          array (
            'text' => 'Translate X',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => -600,
              'max' => 600,
              'step' => 10,
            ),
          ),
          'title_parallax_y' => 
          array (
            'text' => 'Translate Y',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => -600,
              'max' => 600,
              'step' => 10,
            ),
          ),
          'title_parallax_scale' => 
          array (
            'text' => 'Scale',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0.3,
              'max' => 4,
              'step' => 0.1,
            ),
          ),
          'title_parallax_rotate' => 
          array (
            'text' => 'Rotate',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0,
              'max' => 360,
              'step' => 10,
            ),
          ),
          'title_parallax_opacity' => 
          array (
            'text' => 'Opacity',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0,
              'max' => 1,
              'step' => 0.1,
            ),
          ),
        ),
        'fieldset' => 
        array (
          'default' => 
          array (
            'fields' => 
            array (
              0 => 'title_parallax_x',
              1 => 'title_parallax_y',
              2 => 'title_parallax_scale',
              3 => 'title_parallax_rotate',
              4 => 'title_parallax_opacity',
            ),
          ),
        ),
      ),
      'builder-slideshow-meta-parallax' => 
      array (
        'title' => 'Meta Parallax',
        'width' => 500,
        'fields' => 
        array (
          'meta_parallax_x' => 
          array (
            'text' => 'Translate X',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => -600,
              'max' => 600,
              'step' => 10,
            ),
          ),
          'meta_parallax_y' => 
          array (
            'text' => 'Translate Y',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => -600,
              'max' => 600,
              'step' => 10,
            ),
          ),
          'meta_parallax_scale' => 
          array (
            'text' => 'Scale',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0.3,
              'max' => 4,
              'step' => 0.1,
            ),
          ),
          'meta_parallax_rotate' => 
          array (
            'text' => 'Rotate',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0,
              'max' => 360,
              'step' => 10,
            ),
          ),
          'meta_parallax_opacity' => 
          array (
            'text' => 'Opacity',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0,
              'max' => 1,
              'step' => 0.1,
            ),
          ),
        ),
        'fieldset' => 
        array (
          'default' => 
          array (
            'fields' => 
            array (
              0 => 'meta_parallax_x',
              1 => 'meta_parallax_y',
              2 => 'meta_parallax_scale',
              3 => 'meta_parallax_rotate',
              4 => 'meta_parallax_opacity',
            ),
          ),
        ),
      ),
      'builder-slideshow-content-parallax' => 
      array (
        'title' => 'Content Parallax',
        'width' => 500,
        'fields' => 
        array (
          'content_parallax_x' => 
          array (
            'text' => 'Translate X',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => -600,
              'max' => 600,
              'step' => 10,
            ),
          ),
          'content_parallax_y' => 
          array (
            'text' => 'Translate Y',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => -600,
              'max' => 600,
              'step' => 10,
            ),
          ),
          'content_parallax_scale' => 
          array (
            'text' => 'Scale',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0.3,
              'max' => 4,
              'step' => 0.1,
            ),
          ),
          'content_parallax_rotate' => 
          array (
            'text' => 'Rotate',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0,
              'max' => 360,
              'step' => 10,
            ),
          ),
          'content_parallax_opacity' => 
          array (
            'text' => 'Opacity',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0,
              'max' => 1,
              'step' => 0.1,
            ),
          ),
        ),
        'fieldset' => 
        array (
          'default' => 
          array (
            'fields' => 
            array (
              0 => 'content_parallax_x',
              1 => 'content_parallax_y',
              2 => 'content_parallax_scale',
              3 => 'content_parallax_rotate',
              4 => 'content_parallax_opacity',
            ),
          ),
        ),
      ),
      'builder-slideshow-link-parallax' => 
      array (
        'title' => 'Link Parallax',
        'width' => 500,
        'fields' => 
        array (
          'link_parallax_x' => 
          array (
            'text' => 'Translate X',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => -600,
              'max' => 600,
              'step' => 10,
            ),
          ),
          'link_parallax_y' => 
          array (
            'text' => 'Translate Y',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => -600,
              'max' => 600,
              'step' => 10,
            ),
          ),
          'link_parallax_scale' => 
          array (
            'text' => 'Scale',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0.3,
              'max' => 4,
              'step' => 0.1,
            ),
          ),
          'link_parallax_rotate' => 
          array (
            'text' => 'Rotate',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0,
              'max' => 360,
              'step' => 10,
            ),
          ),
          'link_parallax_opacity' => 
          array (
            'text' => 'Opacity',
            'type' => 'parallax-stops',
            'attrs' => 
            array (
              'min' => 0,
              'max' => 1,
              'step' => 0.1,
            ),
          ),
        ),
        'fieldset' => 
        array (
          'default' => 
          array (
            'fields' => 
            array (
              0 => 'link_parallax_x',
              1 => 'link_parallax_y',
              2 => 'link_parallax_scale',
              3 => 'link_parallax_rotate',
              4 => 'link_parallax_opacity',
            ),
          ),
        ),
      ),
    ),
  ),
  'slideshow_item' => 
  array (
    'name' => 'slideshow_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'image' => 
      array (
        'label' => 'Image',
        'type' => 'image',
        'source' => true,
        'show' => '!video',
        'altRef' => '%name%_alt',
      ),
      'video' => 
      array (
        'label' => 'Video',
        'type' => 'video',
        'source' => true,
        'show' => '!image',
      ),
      '_media' => 
      array (
        'type' => 'button-panel',
        'panel' => 'builder-slideshow-item-media',
        'text' => 'Edit Settings',
        'show' => 'image || video',
      ),
      'image_alt' => 
      array (
        'label' => 'Image Alt',
        'source' => true,
        'show' => 'image && !video',
      ),
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'meta' => 
      array (
        'label' => 'Meta',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'link' => '${builder.link}',
      'link_text' => 
      array (
        'label' => 'Link Text',
        'description' => 'Set a different link text for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'link_aria_label' => 
      array (
        'label' => 'Link ARIA Label',
        'description' => 'Set a different link ARIA label for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'thumbnail' => 
      array (
        'label' => 'Navigation Thumbnail',
        'description' => 'This option is only used if the thumbnail navigation is set.',
        'type' => 'image',
        'source' => true,
      ),
      'text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set a different text color for this item.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
      ),
      'item_element' => '${builder.html_element_item}',
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
      ),
      'thumbnail_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'thumbnail',
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'image',
              1 => 'video',
              2 => '_media',
              3 => 'image_alt',
              4 => 'title',
              5 => 'meta',
              6 => 'content',
              7 => 'link',
              8 => 'link_text',
              9 => 'link_aria_label',
              10 => 'thumbnail',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Item',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'text_color',
                  1 => 'item_element',
                ),
              ),
              1 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'image_focal_point',
                ),
              ),
              2 => 
              array (
                'label' => 'Thumbnail',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'thumbnail_focal_point',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
    'panels' => 
    array (
      'builder-slideshow-item-media' => 
      array (
        'title' => 'Image/Video',
        'width' => 500,
        'fields' => 
        array (
          'media_background' => '${builder.media_background}',
          'media_blend_mode' => '${builder.media_blend_mode}',
          'media_overlay' => '${builder.media_overlay}',
          'media_overlay_gradient' => '${builder.media_overlay_gradient}',
        ),
        'fieldset' => 
        array (
          'default' => 
          array (
            'fields' => 
            array (
              0 => 'media_background',
              1 => 'media_blend_mode',
              2 => 'media_overlay',
            ),
          ),
        ),
      ),
    ),
  ),
  'social' => 
  array (
    'name' => 'social',
    'title' => 'Social',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'link_style' => 'button',
      'grid' => 'horizontal',
      'grid_column_gap' => 'small',
      'grid_row_gap' => 'small',
      'image_svg_inline' => true,
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'title' => 'link',
        'item' => 'social_item',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'type' => 'select',
        'options' => 
        array (
          'Icon Link' => '',
          'Icon Button' => 'button',
          'Link' => 'link',
          'Link Muted' => 'muted',
          'Link Text' => 'text',
          'Link Reset' => 'reset',
          'Iconnav' => 'iconnav',
          'Thumbnav' => 'thumbnav',
        ),
      ),
      'grid' => 
      array (
        'label' => 'Grid',
        'type' => 'select',
        'options' => 
        array (
          'Horizontal' => 'horizontal',
          'Vertical' => 'vertical',
        ),
      ),
      'grid_vertical_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will align side by side.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'grid == \'vertical\' && !$match(link_style, \'iconnav|thumbnav\')',
      ),
      'grid_column_gap' => 
      array (
        'label' => 'Column Gap',
        'description' => 'Set the size of the gap between the grid columns.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => '!$match(link_style, \'iconnav|thumbnav\') || ($match(link_style, \'iconnav|thumbnav\') && grid == \'horizontal\')',
      ),
      'grid_row_gap' => 
      array (
        'label' => 'Row Gap',
        'description' => 'Set the size of the gap between the grid rows.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => '!$match(link_style, \'iconnav|thumbnav\') || ($match(link_style, \'iconnav|thumbnav\') && grid == \'horizontal\')',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
      ),
      'link_aria_label' => 
      array (
        'label' => 'ARIA Label',
        'description' => 'Enter a descriptive text label to make it accessible if the link has no visible text.',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-link</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-item',
            2 => '.el-link',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Social Icons',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_style',
                  1 => 'grid',
                  2 => 'grid_vertical_breakpoint',
                  3 => 'grid_column_gap',
                  4 => 'grid_row_gap',
                ),
              ),
              1 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_loading',
                  2 => 'image_svg_inline',
                ),
              ),
              2 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_aria_label',
                  1 => 'link_target',
                  2 => 'link_download',
                  3 => 'link_rel_nofollow',
                  4 => 'link_rel_noreferrer',
                ),
              ),
              3 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'social_item' => 
  array (
    'name' => 'social_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'link' => 
      array (
        'label' => 'Link',
        'attrs' => 
        array (
          'placeholder' => 'https://',
        ),
        'source' => true,
        'description' => 'Enter link to your social profile. A corresponding <a href="https://getuikit.com/docs/icon" target="_blank">UIkit brand icon</a> will be displayed automatically, if available. Links to email addresses and phone numbers, like mailto:info@example.com or tel:+491570156, are also supported.',
      ),
      'link_aria_label' => 
      array (
        'label' => 'Link ARIA Label',
        'description' => 'Set a different link ARIA label for this item.',
        'source' => true,
      ),
      'icon' => 
      array (
        'label' => 'Icon',
        'description' => 'Pick an alternative icon from the icon library.',
        'type' => 'icon',
        'source' => true,
        'enable' => '!image',
      ),
      'image' => 
      array (
        'label' => 'Image',
        'description' => 'Pick an alternative SVG image from the media manager.',
        'type' => 'image',
        'source' => true,
        'enable' => '!icon',
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'link',
              1 => 'link_aria_label',
              2 => 'icon',
              3 => 'image',
            ),
          ),
          1 => '${builder.advancedItem}',
        ),
      ),
    ),
  ),
  'subnav' => 
  array (
    'name' => 'subnav',
    'title' => 'Subnav',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_image' => true,
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'title' => 'content',
        'item' => 'subnav_item',
      ),
      'show_image' => 
      array (
        'label' => 'Display',
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the image',
      ),
      'subnav_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select the subnav style.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Divider' => 'divider',
          'Pill' => 'pill',
          'Tab' => 'tab',
        ),
      ),
      'html_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Define a navigation menu or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'div' => '',
          'nav' => 'nav',
        ),
      ),
      'subnav_wrap' => 
      array (
        'label' => 'Wrap',
        'description' => 'Set whether subnav items are forced into one line or can wrap into multiple lines.',
        'type' => 'checkbox',
        'text' => 'Don\'t wrap into multiple lines',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
        'enable' => 'show_image',
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => 'show_image',
      ),
      'image_margin' => 
      array (
        'label' => 'Margin',
        'type' => 'checkbox',
        'text' => 'Add margin between',
        'enable' => 'show_image',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'show_image',
      ),
      'image_svg_animate' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate strokes',
        'enable' => 'show_image && image_svg_inline',
      ),
      'image_svg_color' => 
      array (
        'label' => 'Icon/SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_image',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-content</code>, <code>.el-link</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-item',
            2 => '.el-content',
            3 => '.el-link',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'show_image',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Subnav',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'subnav_style',
                  1 => 'html_element',
                  2 => 'subnav_wrap',
                ),
              ),
              1 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_loading',
                  2 => 'image_margin',
                  3 => 'image_border',
                  4 => 'image_svg_inline',
                  5 => 'image_svg_animate',
                  6 => 'image_svg_color',
                ),
              ),
              2 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'subnav_item' => 
  array (
    'name' => 'subnav_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Content',
        'source' => true,
      ),
      'image' => '${builder.image}',
      'image_alt' => '${builder.image_alt}',
      'icon' => 
      array (
        'label' => 'Icon',
        'description' => 'Instead of using a custom image, you can click on the pencil to pick an icon from the icon library.',
        'type' => 'icon',
        'source' => true,
        'enable' => '!image',
      ),
      'link' => '${builder.link}',
      'active' => 
      array (
        'label' => 'Active',
        'description' => 'Highlight the item as the active item.',
        'type' => 'checkbox',
        'text' => 'Enable active state',
        'source' => true,
      ),
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'image',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'link',
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'image',
              2 => 'image_alt',
              3 => 'icon',
              4 => 'link',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Item',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'active',
                ),
              ),
              1 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'image_focal_point',
                ),
              ),
              2 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'link_target',
                  1 => 'link_download',
                  2 => 'link_rel_nofollow',
                  3 => 'link_rel_noreferrer',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
  ),
  'switcher' => 
  array (
    'name' => 'switcher',
    'title' => 'Switcher',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_title' => true,
      'show_meta' => true,
      'show_content' => true,
      'show_image' => true,
      'show_link' => true,
      'show_label' => true,
      'show_thumbnail' => true,
      'switcher_animation' => 'fade',
      'switcher_height' => true,
      'nav' => 'tab',
      'nav_position' => 'top',
      'nav_align' => 'left',
      'nav_grid_width' => 'auto',
      'nav_grid_breakpoint' => 'm',
      'thumbnav_svg_color' => 'emphasis',
      'title_element' => 'h3',
      'title_align' => 'top',
      'title_grid_width' => '1-2',
      'title_grid_breakpoint' => 'm',
      'meta_style' => 'text-meta',
      'meta_align' => 'below-title',
      'meta_element' => 'div',
      'content_column_breakpoint' => 'm',
      'image_svg_color' => 'emphasis',
      'image_align' => 'top',
      'image_grid_width' => '1-2',
      'image_grid_breakpoint' => 'm',
      'thumbnav_width' => '100',
      'thumbnav_height' => '75',
      'link_text' => 'Read more',
      'link_style' => 'default',
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'item' => 'switcher_item',
        'media' => 
        array (
          'type' => 'image',
          'item' => 
          array (
            'title' => 'title',
            'image' => 'src',
          ),
        ),
      ),
      'show_title' => 
      array (
        'label' => 'Display',
        'type' => 'checkbox',
        'text' => 'Show the title',
      ),
      'show_meta' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the meta text',
      ),
      'show_content' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the content',
      ),
      'show_image' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the image',
      ),
      'show_link' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the link',
      ),
      'show_label' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the navigation label instead of title',
      ),
      'show_thumbnail' => 
      array (
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the navigation thumbnail instead of the image',
      ),
      'switcher_animation' => 
      array (
        'label' => 'Animation',
        'description' => 'Select an animation that will be applied to the content items when toggling between them.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Fade' => 'fade',
          'Scale Up' => 'scale-up',
          'Scale Down' => 'scale-down',
          'Slide Top Small' => 'slide-top-small',
          'Slide Bottom Small' => 'slide-bottom-small',
          'Slide Left Small' => 'slide-left-small',
          'Slide Right Small' => 'slide-right-small',
          'Slide Top Medium' => 'slide-top-medium',
          'Slide Bottom Medium' => 'slide-bottom-medium',
          'Slide Left Medium' => 'slide-left-medium',
          'Slide Right Medium' => 'slide-right-medium',
          'Slide Top 100%' => 'slide-top',
          'Slide Bottom 100%' => 'slide-bottom',
          'Slide Left 100%' => 'slide-left',
          'Slide Right 100%' => 'slide-right',
        ),
      ),
      'switcher_height' => 
      array (
        'label' => 'Match Height',
        'description' => 'Extend all content items to the same height.',
        'type' => 'checkbox',
        'text' => 'Match content height',
      ),
      'item_maxwidth' => 
      array (
        'type' => 'select',
        'label' => 'Item Max Width',
        'description' => 'Set the maximum width.',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
      ),
      'nav' => 
      array (
        'label' => 'Navigation',
        'description' => 'Select the navigation type. The pill and divider styles are only available for horizontal Subnavs.',
        'type' => 'select',
        'options' => 
        array (
          'Tabs' => 'tab',
          'Subnav Pill (Nav)' => 'subnav-pill',
          'Subnav Divider (Nav)' => 'subnav-divider',
          'Subnav (Nav)' => 'subnav',
          'Thumbnav' => 'thumbnav',
        ),
      ),
      'nav_position' => 
      array (
        'label' => 'Position',
        'description' => 'Position the navigation at the top, bottom, left or right. A larger style can be applied to left and right navigations.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Bottom' => 'bottom',
          'Left' => 'left',
          'Right' => 'right',
        ),
      ),
      'nav_style_primary' => 
      array (
        'type' => 'checkbox',
        'text' => 'Primary navigation',
        'enable' => '$match(nav_position, \'left|right\') && $match(nav, \'^subnav\')',
      ),
      'nav_wrap' => 
      array (
        'label' => 'Wrap',
        'description' => 'Set whether navigation items are forced into one line or can wrap into multiple lines.',
        'type' => 'checkbox',
        'text' => 'Don\'t wrap into multiple lines',
      ),
      'nav_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the navigation items.',
        'type' => 'select',
        'options' => 
        array (
          'Left' => 'left',
          'Right' => 'right',
          'Center' => 'center',
          'Justify' => 'justify',
        ),
        'enable' => '$match(nav_position, \'top|bottom\')',
      ),
      'nav_margin' => 
      array (
        'label' => 'Margin',
        'description' => 'Set the vertical margin.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => '$match(nav_position, \'top|bottom\')',
      ),
      'nav_grid_width' => 
      array (
        'label' => 'Grid Width',
        'description' => 'Define the width of the navigation. Choose between percent and fixed widths or expand columns to the width of their content.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => 'auto',
          '50%' => '1-2',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
        'enable' => '$match(nav_position, \'left|right\')',
      ),
      'nav_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between the navigation and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => '$match(nav_position, \'left|right\')',
      ),
      'nav_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => '$match(nav_position, \'left|right\')',
      ),
      'nav_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => '$match(nav_position, \'left|right\')',
      ),
      'nav_vertical_align' => 
      array (
        'label' => 'Vertical Alignment',
        'description' => 'Vertically center the navigation and content.',
        'type' => 'checkbox',
        'text' => 'Center',
        'enable' => '$match(nav_position, \'left|right\')',
      ),
      'thumbnav_width' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'nav == \'thumbnav\' && show_thumbnail',
      ),
      'thumbnav_height' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'nav == \'thumbnav\' && show_thumbnail',
      ),
      'thumbnav_shrink' => 
      array (
        'description' => 'Shrink thumbnails if the container is too small.',
        'type' => 'checkbox',
        'text' => 'Shrink thumbnails',
        'enable' => 'nav == \'thumbnav\' && show_thumbnail',
      ),
      'thumbnav_svg_inline' => 
      array (
        'label' => 'Thumbnail Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'nav == \'thumbnav\' && show_thumbnail',
      ),
      'thumbnav_svg_color' => 
      array (
        'label' => 'Thumbnail SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'nav == \'thumbnav\' && show_thumbnail && thumbnav_svg_inline',
      ),
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
        ),
        'enable' => 'show_title',
      ),
      'title_decoration' => 
      array (
        'label' => 'Decoration',
        'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Bullet' => 'bullet',
          'Line' => 'line',
        ),
        'enable' => 'show_title',
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
        'enable' => 'show_title',
      ),
      'title_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
        'enable' => 'show_title',
      ),
      'title_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_title',
      ),
      'title_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the title to the top or left in regards to the content.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Left' => 'left',
        ),
        'enable' => 'show_title',
      ),
      'title_grid_width' => 
      array (
        'label' => 'Grid Width',
        'description' => 'Define the width of the title within the grid. Choose between percent and fixed widths or expand columns to the width of their content.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => 'auto',
          'Expand' => 'expand',
          '80%' => '4-5',
          '75%' => '3-4',
          '66%' => '2-3',
          '60%' => '3-5',
          '50%' => '1-2',
          '40%' => '2-5',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
        'enable' => 'show_title && title_align == \'left\'',
      ),
      'title_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between the title and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'show_title && title_align == \'left\'',
      ),
      'title_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'show_title && title_align == \'left\'',
      ),
      'title_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'show_title && title_align == \'left\'',
      ),
      'title_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_title',
      ),
      'meta_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined meta text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_meta',
      ),
      'meta_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_meta',
      ),
      'meta_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the meta text.',
        'type' => 'select',
        'options' => 
        array (
          'Above Title' => 'above-title',
          'Below Title' => 'below-title',
          'Above Content' => 'above-content',
          'Below Content' => 'below-content',
        ),
        'enable' => 'show_meta',
      ),
      'meta_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Set the level for the section heading or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'h1' => 'h1',
          'h2' => 'h2',
          'h3' => 'h3',
          'h4' => 'h4',
          'h5' => 'h5',
          'h6' => 'h6',
          'div' => 'div',
        ),
        'enable' => 'show_meta',
      ),
      'meta_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_meta',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_content',
      ),
      'content_dropcap' => 
      array (
        'label' => 'Drop Cap',
        'description' => 'Display the first letter of the paragraph as a large initial.',
        'type' => 'checkbox',
        'text' => 'Enable drop cap',
        'enable' => 'show_content',
      ),
      'content_column' => 
      array (
        'label' => 'Columns',
        'description' => 'Set the number of text columns.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Halves' => '1-2',
          'Thirds' => '1-3',
          'Quarters' => '1-4',
          'Fifths' => '1-5',
          'Sixths' => '1-6',
        ),
        'enable' => 'show_content',
      ),
      'content_column_divider' => 
      array (
        'description' => 'Show a divider between text columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'show_content && content_column',
      ),
      'content_column_breakpoint' => 
      array (
        'label' => 'Columns Breakpoint',
        'description' => 'Set the device width from which the text columns should apply.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'show_content && content_column',
      ),
      'content_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_content',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
        'enable' => 'show_image',
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => 'show_image',
      ),
      'image_box_shadow' => 
      array (
        'label' => 'Image Box Shadow',
        'description' => 'Select the image box shadow size.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => 'show_image',
      ),
      'image_box_decoration' => 
      array (
        'label' => 'Box Decoration',
        'description' => 'Select the image box decoration style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Floating Shadow' => 'shadow',
          'Mask' => 'mask',
        ),
        'enable' => 'show_image',
      ),
      'image_box_decoration_inverse' => 
      array (
        'type' => 'checkbox',
        'text' => 'Inverse style',
        'enable' => 'show_image && $match(image_box_decoration, \'^(default|primary|secondary)$\')',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'show_image',
      ),
      'image_svg_animate' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate strokes',
        'enable' => 'show_image && image_svg_inline',
      ),
      'image_svg_color' => 
      array (
        'label' => 'SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_image && image_svg_inline',
      ),
      'image_align' => 
      array (
        'label' => 'Alignment',
        'description' => 'Align the image to the top, left, right or place it between the title and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Bottom' => 'bottom',
          'Left' => 'left',
          'Right' => 'right',
        ),
        'enable' => 'show_image',
      ),
      'image_grid_width' => 
      array (
        'label' => 'Grid Width',
        'description' => 'Define the width of the image within the grid. Choose between percent and fixed widths or expand columns to the width of their content.',
        'type' => 'select',
        'options' => 
        array (
          'Auto' => 'auto',
          '80%' => '4-5',
          '75%' => '3-4',
          '66%' => '2-3',
          '60%' => '3-5',
          '50%' => '1-2',
          '40%' => '2-5',
          '33%' => '1-3',
          '25%' => '1-4',
          '20%' => '1-5',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          '2X-Large' => '2xlarge',
        ),
        'enable' => 'show_image && $match(image_align, \'left|right\')',
      ),
      'image_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between the image and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'show_image && $match(image_align, \'left|right\')',
      ),
      'image_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'show_image && $match(image_align, \'left|right\')',
      ),
      'image_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'show_image && $match(image_align, \'left|right\')',
      ),
      'image_vertical_align' => 
      array (
        'label' => 'Vertical Alignment',
        'description' => 'Vertically center grid items.',
        'type' => 'checkbox',
        'text' => 'Center',
        'enable' => 'show_image && $match(image_align, \'left|right\')',
      ),
      'image_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_image && image_align == \'bottom\'',
      ),
      'link_text' => 
      array (
        'label' => 'Text',
        'description' => 'Enter the text for the link.',
        'enable' => 'show_link',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'show_link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'show_link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'show_link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'show_link',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link' => '',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
        'enable' => 'show_link',
      ),
      'link_size' => 
      array (
        'label' => 'Button Size',
        'description' => 'Set the button size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Full width button',
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_margin' => 
      array (
        'label' => 'Margin Top',
        'description' => 'Set the top margin. Note that the margin will only apply if the content field immediately follows another content field.',
        'type' => 'select',
        'options' => 
        array (
          'X-Small' => 'xsmall',
          'Small' => 'small',
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
          'None' => 'remove',
        ),
        'enable' => 'show_link',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-nav</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-item',
            2 => '.el-nav',
            3 => '.el-title',
            4 => '.el-meta',
            5 => '.el-content',
            6 => '.el-image',
            7 => '.el-link',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'show_title',
              2 => 'show_meta',
              3 => 'show_content',
              4 => 'show_image',
              5 => 'show_link',
              6 => 'show_label',
              7 => 'show_thumbnail',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Switcher',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'switcher_animation',
                  1 => 'switcher_height',
                  2 => 'item_maxwidth',
                ),
              ),
              1 => 
              array (
                'label' => 'Navigation',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'nav',
                  1 => 'nav_position',
                  2 => 'nav_style_primary',
                  3 => 'nav_wrap',
                  4 => 'nav_align',
                  5 => 'nav_margin',
                  6 => 'nav_grid_width',
                  7 => 'nav_grid_column_gap',
                  8 => 'nav_grid_row_gap',
                  9 => 'nav_grid_breakpoint',
                  10 => 'nav_vertical_align',
                  11 => 
                  array (
                    'label' => 'Thumbnail Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'thumbnav_width',
                      1 => 'thumbnav_height',
                    ),
                  ),
                  12 => 'thumbnav_shrink',
                  13 => 'thumbnav_svg_inline',
                  14 => 'thumbnav_svg_color',
                ),
              ),
              2 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_style',
                  1 => 'title_decoration',
                  2 => 'title_font_family',
                  3 => 'title_color',
                  4 => 'title_element',
                  5 => 'title_align',
                  6 => 'title_grid_width',
                  7 => 'title_grid_column_gap',
                  8 => 'title_grid_row_gap',
                  9 => 'title_grid_breakpoint',
                  10 => 'title_margin',
                ),
              ),
              3 => 
              array (
                'label' => 'Meta',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'meta_style',
                  1 => 'meta_color',
                  2 => 'meta_align',
                  3 => 'meta_element',
                  4 => 'meta_margin',
                ),
              ),
              4 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_style',
                  1 => 'content_dropcap',
                  2 => 'content_column',
                  3 => 'content_column_divider',
                  4 => 'content_column_breakpoint',
                  5 => 'content_margin',
                ),
              ),
              5 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_loading',
                  2 => 'image_border',
                  3 => 'image_box_shadow',
                  4 => 'image_box_decoration',
                  5 => 'image_box_decoration_inverse',
                  6 => 'image_svg_inline',
                  7 => 'image_svg_animate',
                  8 => 'image_svg_color',
                  9 => 'image_align',
                  10 => 'image_grid_width',
                  11 => 'image_grid_column_gap',
                  12 => 'image_grid_row_gap',
                  13 => 'image_grid_breakpoint',
                  14 => 'image_vertical_align',
                  15 => 'image_margin',
                ),
              ),
              6 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_text',
                  1 => 'link_target',
                  2 => 'link_download',
                  3 => 'link_rel_nofollow',
                  4 => 'link_rel_noreferrer',
                  5 => 'link_style',
                  6 => 'link_size',
                  7 => 'link_fullwidth',
                  8 => 'link_margin',
                ),
              ),
              7 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'switcher_item' => 
  array (
    'name' => 'switcher_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'meta' => 
      array (
        'label' => 'Meta',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'image' => '${builder.image}',
      'image_alt' => '${builder.image_alt}',
      'link' => '${builder.link}',
      'link_text' => 
      array (
        'label' => 'Link Text',
        'description' => 'Set a different link text for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'label' => 
      array (
        'label' => 'Navigation Label',
        'source' => true,
      ),
      'thumbnail' => 
      array (
        'label' => 'Navigation Thumbnail',
        'description' => 'This is only used, if the thumbnail navigation is set.',
        'type' => 'image',
        'source' => true,
      ),
      'item_element' => '${builder.html_element_item}',
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'image',
      ),
      'thumbnail_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'thumbnail',
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'title',
              1 => 'meta',
              2 => 'content',
              3 => 'image',
              4 => 'image_alt',
              5 => 'link',
              6 => 'link_text',
              7 => 'label',
              8 => 'thumbnail',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Item',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'item_element',
                ),
              ),
              1 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'image_focal_point',
                ),
              ),
              2 => 
              array (
                'label' => 'Thumbnail',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'thumbnail_focal_point',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
  ),
  'table' => 
  array (
    'name' => 'table',
    'title' => 'Table',
    'group' => 'multiple items',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'container' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_title' => true,
      'show_meta' => true,
      'show_content' => true,
      'show_image' => true,
      'show_link' => true,
      'table_order' => '1',
      'table_responsive' => 'overflow',
      'table_width_title' => 'shrink',
      'table_width_meta' => 'shrink',
      'meta_style' => 'text-meta',
      'image_svg_color' => 'emphasis',
      'link_text' => 'Read more',
      'link_style' => 'default',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Items',
        'type' => 'content-items',
        'item' => 'table_item',
      ),
      'show_title' => 
      array (
        'label' => 'Display',
        'type' => 'checkbox',
        'text' => 'Show the title',
      ),
      'show_meta' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the meta text',
      ),
      'show_content' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the content',
      ),
      'show_image' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show the image',
      ),
      'show_link' => 
      array (
        'description' => 'Show or hide content fields without the need to delete the content itself.',
        'type' => 'checkbox',
        'text' => 'Show the link',
      ),
      'table_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select the table style.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Divider' => 'divider',
          'Striped' => 'striped',
        ),
      ),
      'table_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Highlight the hovered row',
      ),
      'table_justify' => 
      array (
        'type' => 'checkbox',
        'text' => 'Remove left and right padding',
      ),
      'table_size' => 
      array (
        'label' => 'Size',
        'description' => 'Define the padding between table rows.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Small' => 'small',
          'Large' => 'large',
        ),
      ),
      'table_order' => 
      array (
        'label' => 'Order',
        'description' => 'Define the order of the table cells.',
        'type' => 'select',
        'options' => 
        array (
          'Meta, Image, Title, Content, Link' => '1',
          'Title, Image, Meta, Content, Link' => '2',
          'Image, Title, Content, Meta, Link' => '3',
          'Image, Title, Meta, Content, Link' => '4',
          'Title, Meta, Content, Link, Image' => '5',
          'Meta, Title, Content, Link, Image' => '6',
        ),
      ),
      'table_vertical_align' => 
      array (
        'label' => 'Vertical Alignment',
        'description' => 'Vertically center table cells.',
        'type' => 'checkbox',
        'text' => 'Center',
      ),
      'table_responsive' => 
      array (
        'label' => 'Responsive',
        'description' => 'Stack columns on small devices or enable overflow scroll for the container.',
        'type' => 'select',
        'options' => 
        array (
          'Scroll overflow' => 'overflow',
          'Stacked' => 'responsive',
        ),
      ),
      'table_last_align' => 
      array (
        'label' => 'Last Column Alignment',
        'description' => 'Define the alignment of the last table column.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Left' => 'left',
          'Center' => 'center',
          'Right' => 'right',
        ),
      ),
      'table_width_title' => 
      array (
        'label' => 'Title Width',
        'description' => 'Define the width of the title cell.',
        'type' => 'select',
        'options' => 
        array (
          'Expand' => '',
          'Shrink' => 'shrink',
          'Small' => 'small',
          'Medium' => 'medium',
        ),
        'enable' => 'show_title',
      ),
      'table_width_meta' => 
      array (
        'label' => 'Meta Width',
        'description' => 'Define the width of the meta cell.',
        'type' => 'select',
        'options' => 
        array (
          'Expand' => '',
          'Shrink' => 'shrink',
          'Small' => 'small',
          'Medium' => 'medium',
        ),
        'enable' => 'show_meta',
      ),
      'table_width_content' => 
      array (
        'label' => 'Content Width',
        'description' => 'Define the width of the content cell.',
        'type' => 'select',
        'options' => 
        array (
          'Expand' => '',
          'Shrink' => 'shrink',
          'Small' => 'small',
          'Medium' => 'medium',
        ),
        'enable' => 'show_content',
      ),
      'table_head_title' => 
      array (
        'label' => 'Title',
        'description' => 'Enter a table header text for the title column.',
        'attrs' => 
        array (
          'placeholder' => 'Title',
        ),
        'enable' => 'show_title',
      ),
      'table_head_meta' => 
      array (
        'label' => 'Meta',
        'description' => 'Enter a table header text for the meta column.',
        'attrs' => 
        array (
          'placeholder' => 'Meta',
        ),
        'enable' => 'show_meta',
      ),
      'table_head_content' => 
      array (
        'label' => 'Content',
        'description' => 'Enter a table header text for the content column.',
        'attrs' => 
        array (
          'placeholder' => 'Content',
        ),
        'enable' => 'show_content',
      ),
      'table_head_image' => 
      array (
        'label' => 'Image',
        'description' => 'Enter a table header text for the image column.',
        'attrs' => 
        array (
          'placeholder' => 'Image',
        ),
        'enable' => 'show_image',
      ),
      'table_head_link' => 
      array (
        'label' => 'Link',
        'description' => 'Enter a table header text for the link column.',
        'attrs' => 
        array (
          'placeholder' => 'Link',
        ),
        'enable' => 'show_link',
      ),
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
        ),
        'enable' => 'show_title',
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
        'enable' => 'show_title',
      ),
      'title_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
        'enable' => 'show_title',
      ),
      'meta_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined meta text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_meta',
      ),
      'meta_color' => 
      array (
        'label' => 'Color',
        'description' => 'Select the text color.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_meta',
      ),
      'content_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Text Meta' => 'text-meta',
          'Text Lead' => 'text-lead',
          'Text Small' => 'text-small',
          'Text Large' => 'text-large',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
        ),
        'enable' => 'show_content',
      ),
      'image_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'show_image',
      ),
      'image_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'By default, images are loaded lazy. Enable eager loading for images in the initial viewport.',
        'type' => 'checkbox',
        'text' => 'Load image eagerly',
        'enable' => 'show_image',
      ),
      'image_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the image border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
        'enable' => 'show_image',
      ),
      'image_box_shadow' => 
      array (
        'label' => 'Box Shadow',
        'description' => 'Select the image box shadow size.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => 'show_image',
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'show_image',
      ),
      'image_svg_animate' => 
      array (
        'type' => 'checkbox',
        'text' => 'Animate strokes',
        'enable' => 'show_image && image_svg_inline',
      ),
      'image_svg_color' => 
      array (
        'label' => 'SVG Color',
        'description' => 'Select the SVG color. It will only apply to supported elements defined in the SVG.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
        'enable' => 'show_image && image_svg_inline',
      ),
      'link_text' => 
      array (
        'label' => 'Text',
        'description' => 'Enter the text for the link.',
        'enable' => 'show_link',
      ),
      'link_target' => 
      array (
        'label' => 'Attributes',
        'description' => 'Optionally, open the link in a new window, treat it as download, don\'t endorse the linked page or don\'t include the referrer header.',
        'type' => 'checkbox',
        'text' => 'Open in a new window',
        'enable' => 'show_link',
      ),
      'link_download' => 
      array (
        'type' => 'checkbox',
        'text' => 'Download',
        'enable' => 'show_link',
      ),
      'link_rel_nofollow' => 
      array (
        'type' => 'checkbox',
        'text' => 'Nofollow',
        'enable' => 'show_link',
      ),
      'link_rel_noreferrer' => 
      array (
        'type' => 'checkbox',
        'text' => 'Noreferrer',
        'enable' => 'show_link',
      ),
      'link_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the link style.',
        'type' => 'select',
        'options' => 
        array (
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Link' => '',
          'Link Muted' => 'link-muted',
          'Link Text' => 'link-text',
        ),
        'enable' => 'show_link',
      ),
      'link_size' => 
      array (
        'label' => 'Button Size',
        'description' => 'Set the button size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)\')',
      ),
      'link_fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Expand width to table cell',
        'enable' => 'show_link && link_style && !$match(link_style, \'link-(muted|text)|^text$\')',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-title</code>, <code>.el-meta</code>, <code>.el-content</code>, <code>.el-image</code>, <code>.el-link</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-item',
            2 => '.el-title',
            3 => '.el-meta',
            4 => '.el-content',
            5 => '.el-image',
            6 => '.el-link',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
              1 => 'show_title',
              2 => 'show_meta',
              3 => 'show_content',
              4 => 'show_image',
              5 => 'show_link',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Table',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'table_style',
                  1 => 'table_hover',
                  2 => 'table_justify',
                  3 => 'table_size',
                  4 => 'table_order',
                  5 => 'table_vertical_align',
                  6 => 'table_responsive',
                  7 => 'table_last_align',
                  8 => 'table_width_title',
                  9 => 'table_width_meta',
                  10 => 'table_width_content',
                ),
              ),
              1 => 
              array (
                'label' => 'Table Head',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'table_head_title',
                  1 => 'table_head_meta',
                  2 => 'table_head_content',
                  3 => 'table_head_image',
                  4 => 'table_head_link',
                ),
              ),
              2 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_style',
                  1 => 'title_font_family',
                  2 => 'title_color',
                ),
              ),
              3 => 
              array (
                'label' => 'Meta',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'meta_style',
                  1 => 'meta_color',
                ),
              ),
              4 => 
              array (
                'label' => 'Content',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'content_style',
                ),
              ),
              5 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'image_width',
                      1 => 'image_height',
                    ),
                  ),
                  1 => 'image_loading',
                  2 => 'image_border',
                  3 => 'image_box_shadow',
                  4 => 'image_svg_inline',
                  5 => 'image_svg_animate',
                  6 => 'image_svg_color',
                ),
              ),
              6 => 
              array (
                'label' => 'Link',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'link_text',
                  1 => 'link_target',
                  2 => 'link_download',
                  3 => 'link_rel_nofollow',
                  4 => 'link_rel_noreferrer',
                  5 => 'link_style',
                  6 => 'link_size',
                  7 => 'link_fullwidth',
                ),
              ),
              7 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'table_item' => 
  array (
    'name' => 'table_item',
    'title' => 'Item',
    'width' => 500,
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
        'source' => true,
      ),
      'meta' => 
      array (
        'label' => 'Meta',
        'source' => true,
      ),
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'image' => '${builder.image}',
      'image_alt' => '${builder.image_alt}',
      'link' => '${builder.link}',
      'link_text' => 
      array (
        'label' => 'Link Text',
        'description' => 'Set a different link text for this item.',
        'source' => true,
        'enable' => 'link',
      ),
      'image_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => 'image',
      ),
      'name' => '${builder.nameItem}',
      'status' => '${builder.statusItem}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'title',
              1 => 'meta',
              2 => 'content',
              3 => 'image',
              4 => 'image_alt',
              5 => 'link',
              6 => 'link_text',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Image',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'image_focal_point',
                ),
              ),
            ),
          ),
          2 => '${builder.advancedItem}',
        ),
      ),
    ),
  ),
  'text' => 
  array (
    'name' => 'text',
    'title' => 'Text',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'margin_top' => 'default',
      'margin_bottom' => 'default',
      'column_breakpoint' => 'm',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Content',
        'type' => 'editor',
        'source' => true,
      ),
      'dropcap' => 
      array (
        'label' => 'Drop Cap',
        'description' => 'Display the first letter of the paragraph as a large initial.',
        'type' => 'checkbox',
        'text' => 'Enable drop cap',
      ),
      'text_style' => 
      array (
        'label' => 'Text Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Meta' => 'meta',
          'Lead' => 'lead',
          'Small' => 'small',
          'Large' => 'large',
        ),
      ),
      'text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Emphasis' => 'emphasis',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
        ),
      ),
      'column' => 
      array (
        'label' => 'Columns',
        'description' => 'Set the number of text columns.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Halves' => '1-2',
          'Thirds' => '1-3',
          'Quarters' => '1-4',
          'Fifths' => '1-5',
          'Sixths' => '1-6',
        ),
      ),
      'column_divider' => 
      array (
        'description' => 'Show a divider between text columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'column',
      ),
      'column_breakpoint' => 
      array (
        'label' => 'Columns Breakpoint',
        'description' => 'Set the device width from which the text columns should apply.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'column',
      ),
      'html_element' => 
      array (
        'label' => 'HTML Element',
        'description' => 'Define the purpose and structure of the content or give it no semantic meaning.',
        'type' => 'select',
        'options' => 
        array (
          'div' => '',
          'address' => 'address',
          'aside' => 'aside',
          'footer' => 'footer',
        ),
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Text',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'dropcap',
                  1 => 'text_style',
                  2 => 'text_color',
                  3 => 'column',
                  4 => 'column_divider',
                  5 => 'column_breakpoint',
                  6 => 'html_element',
                ),
              ),
              1 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'totop' => 
  array (
    'name' => 'totop',
    'title' => 'To Top',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'title_grid_column_gap' => 'small',
      'title_grid_row_gap' => 'small',
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'title' => 
      array (
        'label' => 'Title',
      ),
      'link_title' => '${builder.link_title}',
      'title_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select a predefined text style, including color, size and font-family.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Meta' => 'meta',
        ),
        'enable' => 'title',
      ),
      'title_grid_column_gap' => 
      array (
        'label' => 'Grid Column Gap',
        'description' => 'Set the size of the gap between the title and the content.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'title',
      ),
      'title_grid_row_gap' => 
      array (
        'label' => 'Grid Row Gap',
        'description' => 'Set the size of the gap if the grid items stack.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
        'enable' => 'title',
      ),
      'title_grid_breakpoint' => 
      array (
        'label' => 'Grid Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'type' => 'select',
        'options' => 
        array (
          'Always' => '',
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
        'enable' => 'title',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-title</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-title',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'title',
              1 => 'link_title',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_style',
                  1 => 'title_grid_column_gap',
                  2 => 'title_grid_row_gap',
                  3 => 'title_grid_breakpoint',
                ),
              ),
              1 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'video' => 
  array (
    'name' => 'video',
    'title' => 'Video',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'video_loading' => 'lazy',
      'video_controls' => true,
      'margin_top' => 'default',
      'margin_bottom' => 'default',
    ),
    'fields' => 
    array (
      'video' => 
      array (
        'label' => 'Video',
        'description' => 'Select a video file or enter a link from <a href="https://www.youtube.com" target="_blank">YouTube</a> or <a href="https://vimeo.com" target="_blank">Vimeo</a>.',
        'type' => 'video',
        'source' => true,
      ),
      'video_title' => 
      array (
        'label' => 'Video Title',
        'source' => true,
        'show' => 'video && !yootheme.builder.helpers.Media.isVideo(video)',
      ),
      'poster' => 
      array (
        'label' => 'Poster Image',
        'description' => 'Select a poster image which is also used as a placeholder if the video is loaded on click or before consent is given.',
        'type' => 'image',
        'source' => true,
        'enable' => 'video',
      ),
      'play_icon' => 
      array (
        'label' => 'Play Icon',
        'description' => 'Select an optional play icon for the video loaded on click.',
        'type' => 'image',
        'enable' => 'video && video_loading == \'click\'',
      ),
      'link_aria_label' => 
      array (
        'label' => 'ARIA Label',
        'description' => 'Enter a descriptive text label to make it accessible if the video is loaded on click.',
        'enable' => 'video && video_loading == \'click\'',
      ),
      'video_width' => 
      array (
        'type' => 'number',
      ),
      'video_height' => 
      array (
        'type' => 'number',
      ),
      'video_focal_point' => 
      array (
        'label' => 'Focal Point',
        'description' => 'Set a focal point to control cropping.',
        'type' => 'select',
        'options' => 
        array (
          'Top Left' => 'top-left',
          'Top Center' => 'top-center',
          'Top Right' => 'top-right',
          'Center Left' => 'center-left',
          'Center Center' => '',
          'Center Right' => 'center-right',
          'Bottom Left' => 'bottom-left',
          'Bottom Center' => 'bottom-center',
          'Bottom Right' => 'bottom-right',
        ),
        'source' => true,
        'enable' => '!yootheme.builder.helpers.Media.isIframeVideo(video)',
      ),
      'height_expand' => 
      array (
        'label' => 'Height',
        'description' => 'Expand the height of the element to fill the available space in the column. Alternatively, the height can adapt to the height of the viewport, and optionally subtract the header height to fill the first visible viewport.',
        'type' => 'checkbox',
        'text' => 'Fill the available column space',
        'enable' => '!yootheme.builder.helpers.Media.isIframeVideo(video)',
      ),
      'height_viewport' => 
      array (
        'type' => 'checkbox',
        'text' => 'Set viewport height',
        'enable' => '!height_expand && !yootheme.builder.helpers.Media.isIframeVideo(video)',
      ),
      'height_viewport_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => '100',
          'min' => 0,
          'step' => 10,
        ),
        'enable' => '!height_expand && !yootheme.builder.helpers.Media.isIframeVideo(video) && height_viewport',
      ),
      'height_viewport_offset' => 
      array (
        'type' => 'checkbox',
        'text' => 'Subtract height above',
        'enable' => '!height_expand && !yootheme.builder.helpers.Media.isIframeVideo(video) && height_viewport && (height_viewport_height || 0) <= 100',
      ),
      'video_loading' => 
      array (
        'label' => 'Loading',
        'description' => 'Load the video eagerly, lazily when it enters the viewport, or only after a placeholder image is clicked. If YouTube and Vimeo videos are loaded on click, no external requests are sent, and no JavaScript is loaded until the video is played.',
        'type' => 'select',
        'options' => 
        array (
          'Eager' => '',
          'Lazy' => 'lazy',
          'On Click' => 'click',
        ),
      ),
      'video_autoplay' => 
      array (
        'label' => 'Autoplay',
        'description' => 'Enable autoplay immediately, start as soon as the video enters the viewport or only on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'On' => true,
          'Inview' => 'inview',
          'Hover' => 'hover',
        ),
        'enable' => '(video_loading != \'click\') && !yootheme.builder.helpers.Media.isIframeVideo(video)',
      ),
      'video_autoplay_restart' => 
      array (
        'type' => 'checkbox',
        'text' => 'Restart from beginning',
        'enable' => '$match(video_autoplay, \'^(inview|hover)$\') && (video_loading != \'click\') && !yootheme.builder.helpers.Media.isIframeVideo(video)',
      ),
      'video_controls' => 
      array (
        'label' => 'Options',
        'type' => 'checkbox',
        'text' => 'Show controls',
        'enable' => '!yootheme.builder.helpers.Media.isIframeVideo(video)',
      ),
      'video_playsinline' => 
      array (
        'type' => 'checkbox',
        'text' => 'Play video inline',
        'enable' => '!yootheme.builder.helpers.Media.isIframeVideo(video)',
      ),
      'video_loop' => 
      array (
        'type' => 'checkbox',
        'text' => 'Loop video',
        'enable' => '!yootheme.builder.helpers.Media.isIframeVideo(video)',
      ),
      'video_muted' => 
      array (
        'type' => 'checkbox',
        'text' => 'Mute video',
        'enable' => '!yootheme.builder.helpers.Media.isIframeVideo(video)',
      ),
      'video_border' => 
      array (
        'label' => 'Border',
        'description' => 'Select the video border style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Rounded' => 'rounded',
          'Circle' => 'circle',
          'Pill' => 'pill',
        ),
      ),
      'video_box_shadow' => 
      array (
        'label' => 'Box Shadow',
        'description' => 'Select the video box shadow size.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
      ),
      'video_hover_box_shadow' => 
      array (
        'label' => 'Hover Box Shadow',
        'description' => 'Select the video box shadow size on hover.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => 'video_loading == \'click\'',
      ),
      'video_box_decoration' => 
      array (
        'label' => 'Box Decoration',
        'description' => 'Select the video box decoration style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Floating Shadow' => 'shadow',
          'Mask' => 'mask',
        ),
      ),
      'video_box_decoration_inverse' => 
      array (
        'type' => 'checkbox',
        'text' => 'Inverse style',
        'enable' => '$match(video_box_decoration, \'^(default|primary|secondary)$\')',
      ),
      'text_color' => 
      array (
        'label' => 'Text Color',
        'description' => 'Set light or dark color mode for text, buttons and controls if a sticky transparent navbar is displayed above.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Light' => 'light',
          'Dark' => 'dark',
        ),
        'source' => true,
      ),
      'play_icon_width' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'play_icon',
      ),
      'play_icon_height' => 
      array (
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
        'enable' => 'play_icon',
      ),
      'play_icon_hover' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show on hover only',
        'enable' => 'play_icon',
      ),
      'play_icon_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the page markup so that they can easily be styled with CSS.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
        'enable' => 'play_icon',
      ),
      'consent_card_size' => 
      array (
        'label' => 'Card Size',
        'type' => 'checkbox',
        'text' => 'Small card size',
        'enable' => 'yootheme.builder.helpers.Media.isIframeVideo(video)',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'container_padding_remove' => '${builder.container_padding_remove}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'video',
              1 => 'video_title',
              2 => 'poster',
              3 => 'play_icon',
              4 => 'link_aria_label',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Video',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Set the video dimensions.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'video_width',
                      1 => 'video_height',
                    ),
                  ),
                  1 => 'video_focal_point',
                  2 => 'height_expand',
                  3 => 'height_viewport',
                  4 => 'height_viewport_height',
                  5 => 'height_viewport_offset',
                  6 => 'video_loading',
                  7 => 'video_autoplay',
                  8 => 'video_autoplay_restart',
                  9 => 'video_controls',
                  10 => 'video_playsinline',
                  11 => 'video_loop',
                  12 => 'video_muted',
                  13 => 'video_border',
                  14 => 'video_box_shadow',
                  15 => 'video_hover_box_shadow',
                  16 => 'video_box_decoration',
                  17 => 'video_box_decoration_inverse',
                  18 => 'text_color',
                ),
              ),
              1 => 
              array (
                'label' => 'Play Icon',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'label' => 'Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'play_icon_width',
                      1 => 'play_icon_height',
                    ),
                  ),
                  1 => 'play_icon_hover',
                  2 => 'play_icon_svg_inline',
                ),
              ),
              2 => 
              array (
                'label' => 'Consent',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'consent_card_size',
                ),
              ),
              3 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                  20 => 'container_padding_remove',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'breadcrumbs' => 
  array (
    'name' => 'breadcrumbs',
    'title' => 'Breadcrumbs',
    'group' => 'system',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_home' => true,
      'show_current' => true,
    ),
    'fields' => 
    array (
      'show_home' => 
      array (
        'label' => 'Breadcrumbs',
        'description' => 'Show or hide the home link as first item as well as the current page as last item in the breadcrumb navigation.',
        'text' => 'Show home link',
        'type' => 'checkbox',
      ),
      'show_current' => 
      array (
        'text' => 'Show current page',
        'type' => 'checkbox',
      ),
      'home_text' => 
      array (
        'label' => 'Home Text',
        'description' => 'Enter the text for the home link.',
        'attrs' => 
        array (
          'placeholder' => 'Home',
        ),
        'enable' => 'show_home',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
          ),
        ),
        'source' => true,
      ),
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Breadcrumbs',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'show_home',
                  1 => 'show_current',
                  2 => 'home_text',
                ),
              ),
              1 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'text_align',
                  10 => 'text_align_breakpoint',
                  11 => 'text_align_fallback',
                  12 => 'animation',
                  13 => '_parallax_button',
                  14 => 'visibility',
                ),
              ),
            ),
          ),
          1 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'menu' => 
  array (
    'name' => 'menu',
    'title' => 'Menu',
    'group' => 'system',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'show_all_children' => true,
      'style' => 'default',
      'image_align' => 'center',
    ),
    'fields' => 
    array (
      'taxonomy' => 
      array (
        'label' => 'Menu',
        'type' => 'select',
        'options' => 
        array (
          'Menu' => '',
          'Category' => 'category',
          'Tag' => 'tag',
        ),
      ),
      'menu' => 
      array (
        'description' => 'Select a menu or a taxonomy that will be rendered as menu.',
        'type' => 'select',
        'defaultIndex' => 0,
        'options' => 
        array (
          0 => 
          array (
            'evaluate' => 'yootheme.customizer.menu.menusSelect()',
          ),
        ),
        'enable' => '!taxonomy',
      ),
      'menu_base_item' => 
      array (
        'label' => 'Base Item',
        'description' => 'By default, the menu is based on the current menu item. Alternatively, select a base item to always show the same menu.',
        'type' => 'select-item',
        'route' => 'joomla/menu-items',
        'labels' => 
        array (
          'type' => 'Menu Item',
        ),
        'show' => '!taxonomy',
      ),
      'category_base_item' => 
      array (
        'label' => 'Base Item',
        'description' => 'By default, the navigation is based on the current menu item. Alternatively, select a base item to always show the same menu.',
        'type' => 'select',
        'defaultIndex' => 0,
        'options' => 
        array (
          0 => 
          array (
            'text' => 'None',
            'value' => '',
          ),
          1 => 
          array (
            'evaluate' => 'yootheme.builder.categories',
          ),
        ),
        'show' => 'taxonomy == \'category\'',
      ),
      'tag_base_item' => 
      array (
        'label' => 'Base Item',
        'description' => 'By default, the navigation is based on the current menu item. Alternatively, select a base item to always show the same menu.',
        'type' => 'select',
        'defaultIndex' => 0,
        'options' => 
        array (
          0 => 
          array (
            'text' => 'None',
            'value' => '',
          ),
          1 => 
          array (
            'evaluate' => 'yootheme.builder.tags',
          ),
        ),
        'show' => 'taxonomy == \'tag\'',
      ),
      'start_level' => 
      array (
        'label' => 'Start Level',
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => '1',
          'min' => 1,
          'max' => 10,
        ),
      ),
      'end_level' => 
      array (
        'label' => 'End Level',
        'type' => 'number',
        'attrs' => 
        array (
          'placeholder' => 'All',
          'min' => 0,
          'max' => 10,
        ),
      ),
      'show_all_children' => 
      array (
        'text' => 'Show all submenu items',
        'type' => 'checkbox',
      ),
      'type' => 
      array (
        'label' => 'Type',
        'description' => 'Select the menu type.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Nav' => 'nav',
          'Subnav' => 'subnav',
          'Iconnav' => 'iconnav',
        ),
      ),
      'divider' => 
      array (
        'label' => 'Nav/Subnav Divider',
        'description' => 'Show optional dividers between nav or subnav items.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
      ),
      'style' => 
      array (
        'label' => 'Nav Style',
        'description' => 'Select the nav style.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
        ),
      ),
      'size' => 
      array (
        'label' => 'Nav Primary Size',
        'description' => 'Select the primary nav size.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => 'style == \'primary\'',
      ),
      'image_width' => 
      array (
        'label' => 'Image Width',
        'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_height' => 
      array (
        'label' => 'Image Height',
        'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the markup so they adopt the text color automatically.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
      ),
      'image_margin' => 
      array (
        'label' => 'Image and Title',
        'type' => 'checkbox',
        'text' => 'Add margin between',
      ),
      'image_align' => 
      array (
        'label' => 'Image Align',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Center' => 'center',
        ),
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'taxonomy',
              1 => 'menu',
              2 => 'menu_base_item',
              3 => 'category_base_item',
              4 => 'tag_base_item',
              5 => 
              array (
                'name' => '_level',
                'type' => 'grid',
                'width' => '1-2',
                'fields' => 
                array (
                  0 => 'start_level',
                  1 => 'end_level',
                ),
              ),
              6 => 'show_all_children',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Menu',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'type',
                  1 => 'divider',
                  2 => 'style',
                  3 => 'size',
                  4 => 'image_width',
                  5 => 'image_height',
                  6 => 'image_svg_inline',
                  7 => 'image_margin',
                  8 => 'image_align',
                ),
              ),
              1 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'module' => 
  array (
    'name' => 'module',
    'title' => 'Module',
    'group' => 'system',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'menu_style' => 'default',
      'menu_image_margin' => true,
      'menu_image_align' => 'center',
    ),
    'fields' => 
    array (
      'module' => 
      array (
        'type' => 'select-item',
        'label' => 'Module',
        'route' => 'joomla/modules',
        'description' => 'Any Joomla module can be displayed in your custom layout.',
      ),
      '_edit_button' => 
      array (
        'type' => 'button',
        'text' => 'Edit Module',
        'attrs' => 
        array (
          'class' => 'uk-margin-medium-top uk-display-block',
        ),
        'event' => 'openEditModule',
        'enable' => 'module && yootheme.customizer.module.canCreate',
      ),
      'style' => 
      array (
        'type' => 'select',
        'label' => 'Style',
        'description' => 'Select a panel style.',
        'options' => 
        array (
          'None' => '',
          'Card Default' => 'card-default',
          'Card Primary' => 'card-primary',
          'Card Secondary' => 'card-secondary',
          'Card Hover' => 'card-hover',
        ),
      ),
      'title_style' => 
      array (
        'type' => 'select',
        'label' => 'Style',
        'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.',
        'options' => 
        array (
          'None' => '',
          'Heading 3X-Large' => 'heading-3xlarge',
          'Heading 2X-Large' => 'heading-2xlarge',
          'Heading X-Large' => 'heading-xlarge',
          'Heading Large' => 'heading-large',
          'Heading Medium' => 'heading-medium',
          'Heading Small' => 'heading-small',
          'Heading H1' => 'h1',
          'Heading H2' => 'h2',
          'Heading H3' => 'h3',
          'Heading H4' => 'h4',
          'Heading H5' => 'h5',
          'Heading H6' => 'h6',
          'Text Meta' => 'meta',
          'Text Lead' => 'lead',
        ),
      ),
      'title_decoration' => 
      array (
        'type' => 'select',
        'label' => 'Decoration',
        'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
          'Bullet' => 'bullet',
          'Line' => 'line',
        ),
      ),
      'title_font_family' => 
      array (
        'label' => 'Font Family',
        'description' => 'Select an alternative font family. Mind that not all styles have different font families.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Tertiary' => 'tertiary',
        ),
      ),
      'title_color' => 
      array (
        'type' => 'select',
        'label' => 'Color',
        'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
          'Primary' => 'primary',
          'Success' => 'success',
          'Warning' => 'warning',
          'Danger' => 'danger',
          'Background' => 'background',
        ),
      ),
      'list_style' => 
      array (
        'label' => 'List Style',
        'description' => 'Select the list style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Divider' => 'divider',
        ),
      ),
      'link_style' => 
      array (
        'label' => 'Link Style',
        'description' => 'Select the link style.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Muted' => 'muted',
        ),
      ),
      'menu_type' => 
      array (
        'label' => 'Type',
        'description' => 'Select the menu type.',
        'type' => 'select',
        'default' => 'nav',
        'options' => 
        array (
          'Nav' => 'nav',
          'Subnav' => 'subnav',
          'Iconnav' => 'iconnav',
        ),
      ),
      'menu_divider' => 
      array (
        'label' => 'Divider',
        'description' => 'Show optional dividers between nav or subnav items.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
      ),
      'menu_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select the nav style.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
        ),
      ),
      'menu_size' => 
      array (
        'label' => 'Primary Size',
        'description' => 'Select the primary nav size.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
          'X-Large' => 'xlarge',
        ),
        'enable' => 'menu_style == \'primary\'',
      ),
      'menu_image_width' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'menu_image_height' => 
      array (
        'attrs' => 
        array (
          'placeholder' => 'auto',
        ),
      ),
      'menu_image_svg_inline' => 
      array (
        'label' => 'Inline SVG',
        'description' => 'Inject SVG images into the markup so they adopt the text color automatically.',
        'type' => 'checkbox',
        'text' => 'Make SVG stylable with CSS',
      ),
      'menu_image_margin' => 
      array (
        'label' => 'Image and Title',
        'type' => 'checkbox',
        'text' => 'Add margin between',
      ),
      'menu_image_align' => 
      array (
        'label' => 'Image Align',
        'type' => 'select',
        'options' => 
        array (
          'Top' => 'top',
          'Center' => 'center',
        ),
      ),
      'language_parent_icon' => 
      array (
        'label' => 'Dropdown',
        'text' => 'Show parent icon',
        'type' => 'checkbox',
        'default' => true,
      ),
      'language_icon' => 
      array (
        'description' => 'Show a general icon instead of a specific flag icon.',
        'text' => 'Show language icon',
        'type' => 'checkbox',
        'default' => true,
      ),
      'language_icon_width' => 
      array (
        'label' => 'Dropdown Icon Width',
      ),
      'language_icon_margin' => 
      array (
        'type' => 'checkbox',
        'text' => 'Add margin between',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-title</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'module',
              1 => '_edit_button',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Panel',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'style',
                ),
              ),
              1 => 
              array (
                'label' => 'Title',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'title_style',
                  1 => 'title_decoration',
                  2 => 'title_font_family',
                  3 => 'title_color',
                ),
              ),
              2 => 
              array (
                'label' => 'List',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'list_style',
                  1 => 'link_style',
                ),
                'show' => '$match(type, \'articles_(archive|categories|latest|popular)|tags_(popular|similar)\')',
              ),
              3 => 
              array (
                'label' => 'Menu',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'menu_type',
                  1 => 'menu_divider',
                  2 => 'menu_style',
                  3 => 'menu_size',
                  4 => 
                  array (
                    'label' => 'Image Width/Height',
                    'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically, and where possible, high resolution images will be auto-generated.',
                    'type' => 'grid',
                    'width' => '1-2',
                    'fields' => 
                    array (
                      0 => 'menu_image_width',
                      1 => 'menu_image_height',
                    ),
                  ),
                  5 => 'menu_image_svg_inline',
                  6 => 'menu_image_margin',
                  7 => 'menu_image_align',
                ),
                'show' => '$match(type, \'menu\')',
              ),
              4 => 
              array (
                'label' => 'Language Switcher',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'language_parent_icon',
                  1 => 'language_icon',
                  2 => 'language_icon_width',
                  3 => 'language_icon_margin',
                ),
                'show' => '$match(type, \'languages\')',
              ),
              5 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'module_position' => 
  array (
    'name' => 'module_position',
    'title' => 'Module Position',
    'group' => 'system',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'defaults' => 
    array (
      'layout' => 'stack',
      'breakpoint' => 'm',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'type' => 'select-position',
        'label' => 'Position',
        'description' => 'Select a Joomla module position that will render all published modules. It\'s recommended to use the builder-1 to -6 positions, which are not rendered elsewhere by the theme.',
      ),
      'layout' => 
      array (
        'type' => 'select',
        'label' => 'Layout',
        'description' => 'Select whether the modules should be aligned side by side or stacked above each other.',
        'default' => 'sidebar',
        'options' => 
        array (
          'Stacked' => 'stack',
          'Grid' => 'grid',
        ),
      ),
      'column_gap' => 
      array (
        'label' => 'Column Gap',
        'description' => 'Set the size of the gap between the grid columns.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'row_gap' => 
      array (
        'label' => 'Row Gap',
        'description' => 'Set the size of the gap between the grid rows.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
          'Large' => 'large',
          'None' => 'collapse',
        ),
      ),
      'divider' => 
      array (
        'label' => 'Divider',
        'description' => 'Show a divider between grid columns.',
        'type' => 'checkbox',
        'text' => 'Show dividers',
        'enable' => 'column_gap != \'collapse\' && row_gap != \'collapse\'',
      ),
      'breakpoint' => 
      array (
        'type' => 'select',
        'label' => 'Breakpoint',
        'description' => 'Set the breakpoint from which grid items will stack.',
        'options' => 
        array (
          'Small (Phone Landscape)' => 's',
          'Medium (Tablet Landscape)' => 'm',
          'Large (Desktop)' => 'l',
          'X-Large (Large Screens)' => 'xl',
        ),
      ),
      'vertical_align' => 
      array (
        'type' => 'checkbox',
        'label' => 'Vertical Alignment',
        'description' => 'Vertically center grid items.',
        'text' => 'Center',
      ),
      'match' => 
      array (
        'type' => 'checkbox',
        'label' => 'Match Height',
        'description' => 'Match the height of all modules which are styled as a card.',
        'text' => 'Match height',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'content',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Grid',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'layout',
                  1 => 'column_gap',
                  2 => 'row_gap',
                  3 => 'divider',
                  4 => 'breakpoint',
                  5 => 'vertical_align',
                  6 => 'match',
                ),
              ),
              1 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'search' => 
  array (
    'name' => 'search',
    'title' => 'Search',
    'group' => 'system',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'fields' => 
    array (
      'search_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the search input style.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Medium' => 'medium',
          'Large' => 'large',
        ),
      ),
      'search_size' => 
      array (
        'label' => 'Size',
        'description' => 'Set the search input size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => '!search_style',
      ),
      'search_icon' => 
      array (
        'label' => 'Icon',
        'description' => 'Display a search icon on the left or right. The icon on the right can be clicked to submit the search.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Left (Not Clickable)' => 'left',
          'Right (Clickable)' => 'right',
        ),
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Input',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'search_style',
                  1 => 'search_size',
                  2 => 'search_icon',
                ),
              ),
              1 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          1 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'search_ordering' => 
  array (
    'name' => 'search_ordering',
    'title' => 'Search Ordering',
    'group' => 'system',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'button_style' => 'default',
      'icon_align' => 'left',
    ),
    'fields' => 
    array (
      'button_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the button style.',
        'type' => 'select',
        'options' => 
        array (
          'Button Default' => 'default',
          'Button Primary' => 'primary',
          'Button Secondary' => 'secondary',
          'Button Danger' => 'danger',
          'Button Text' => 'text',
          'Button Link' => 'link',
        ),
      ),
      'button_size' => 
      array (
        'label' => 'Size',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
        'enable' => '!$match(button_style, \'text|link\')',
      ),
      'icon' => 
      array (
        'label' => 'Icon',
        'description' => 'Pick an optional icon from the icon library.',
        'type' => 'icon',
        'enable' => '!parent_icon',
      ),
      'parent_icon' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show parent icon',
      ),
      'icon_align' => 
      array (
        'label' => 'Icon Alignment',
        'description' => 'Choose the icon position.',
        'type' => 'select',
        'options' => 
        array (
          'Left' => 'left',
          'Right' => 'right',
        ),
        'enable' => '!parent_icon',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Button',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'button_style',
                  1 => 'button_size',
                  2 => 'icon',
                  3 => 'parent_icon',
                  4 => 'icon_align',
                ),
              ),
              1 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          1 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'pagination' => 
  array (
    'name' => 'pagination',
    'title' => 'Pagination',
    'group' => 'system',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'pagination_type' => 'previous/next',
      'text_align' => 'center',
    ),
    'fields' => 
    array (
      'pagination_type' => 
      array (
        'label' => 'Pagination',
        'description' => 'Choose between the previous/next or numeric pagination. The numeric pagination is not available for single articles.',
        'type' => 'select',
        'options' => 
        array (
          'Previous/Next' => 'previous/next',
          'Numeric' => 'numeric',
        ),
      ),
      'pagination_space_between' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show space between links',
        'enable' => 'pagination_type == \'previous/next\'',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
          ),
        ),
        'source' => true,
      ),
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Pagination',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'pagination_type',
                  1 => 'pagination_space_between',
                ),
              ),
              1 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          1 => '${builder.advanced}',
        ),
      ),
    ),
  ),
  'newsletter' => 
  array (
    'name' => 'newsletter',
    'title' => 'Newsletter',
    'group' => 'basic',
    'icon' => '${url:images/icon.svg}',
    'iconSmall' => '${url:images/iconSmall.svg}',
    'element' => true,
    'width' => 500,
    'defaults' => 
    array (
      'layout' => 'grid',
      'show_name' => true,
      'label_first_name' => 'First name',
      'label_last_name' => 'Last name',
      'label_email' => 'Email address',
      'label_button' => 'Subscribe',
      'provider' => 
      array (
        'name' => 'mailchimp',
        'after_submit' => 'message',
        'message' => 'You\'ve been subscribed successfully.',
        'redirect' => '',
      ),
      'mailchimp' => 
      array (
        'client_id' => '',
        'list_id' => '',
        'double_optin' => true,
      ),
      'cmonitor' => 
      array (
        'client_id' => '',
        'list_id' => '',
      ),
      'button_mode' => 'button',
      'button_style' => 'default',
      'button_icon' => 'mail',
    ),
    'fields' => 
    array (
      'provider.name' => 
      array (
        'label' => 'Provider',
        'type' => 'select',
        'options' => 
        array (
          'Mailchimp' => 'mailchimp',
          'Campaign Monitor' => 'cmonitor',
        ),
      ),
      'mailchimp' => 
      array (
        'label' => 'Mailchimp',
        'type' => 'newsletter-lists',
        'provider' => 'mailchimp',
        'show' => 'provider.name == \'mailchimp\'',
      ),
      'mailchimp.double_optin' => 
      array (
        'label' => 'Double opt-in',
        'type' => 'checkbox',
        'text' => 'Use double opt-in.',
        'show' => 'provider.name == \'mailchimp\'',
      ),
      'cmonitor' => 
      array (
        'label' => 'Campaign Monitor',
        'type' => 'newsletter-lists',
        'provider' => 'cmonitor',
        'show' => 'provider.name == \'cmonitor\'',
      ),
      'provider.after_submit' => 
      array (
        'label' => 'After Submit',
        'description' => 'Select whether a message will be shown or the site will be redirected after clicking the subscribe button.',
        'type' => 'select',
        'options' => 
        array (
          'Show message' => 'message',
          'Redirect' => 'redirect',
        ),
      ),
      'provider.message' => 
      array (
        'label' => 'Message',
        'description' => 'Message shown to the user after submit.',
        'type' => 'textarea',
        'attrs' => 
        array (
          'rows' => 4,
        ),
        'show' => 'provider.after_submit == \'message\'',
      ),
      'provider.redirect' => 
      array (
        'label' => 'Link',
        'description' => 'Link to redirect to after submit.',
        'type' => 'link',
        'filePicker' => false,
        'show' => 'provider.after_submit == \'redirect\'',
      ),
      'layout' => 
      array (
        'label' => 'Layout',
        'description' => 'Define the layout of the form.',
        'type' => 'select',
        'options' => 
        array (
          'Grid' => 'grid',
          'Stacked' => 'stacked',
          'Stacked (Name fields as grid)' => 'stacked-name',
        ),
      ),
      'show_name' => 
      array (
        'type' => 'checkbox',
        'text' => 'Show name fields',
      ),
      'gap' => 
      array (
        'label' => 'Gap',
        'description' => 'Set the size of the gap between the grid columns.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Medium' => 'medium',
          'Default' => '',
        ),
      ),
      'form_size' => 
      array (
        'label' => 'Size',
        'description' => 'Select the form size.',
        'type' => 'select',
        'options' => 
        array (
          'Small' => 'small',
          'Default' => '',
          'Large' => 'large',
        ),
      ),
      'form_style' => 
      array (
        'label' => 'Style',
        'description' => 'Select the form style.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => '',
          'Blank' => 'blank',
        ),
      ),
      'label_email' => 
      array (
        'label' => 'Email',
        'attrs' => 
        array (
          'placeholder' => 'Email address',
        ),
      ),
      'label_button' => 
      array (
        'label' => 'Button',
        'attrs' => 
        array (
          'placeholder' => 'Submit',
        ),
      ),
      'label_first_name' => 
      array (
        'label' => 'First name',
        'attrs' => 
        array (
          'placeholder' => 'First name',
        ),
        'enable' => 'show_name',
      ),
      'label_last_name' => 
      array (
        'label' => 'Last name',
        'attrs' => 
        array (
          'placeholder' => 'Last name',
        ),
        'enable' => 'show_name',
      ),
      'button_mode' => 
      array (
        'label' => 'Mode',
        'description' => 'Select whether a button or a clickable icon inside the email input is shown.',
        'type' => 'select',
        'options' => 
        array (
          'Button' => 'button',
          'Icon' => 'icon',
        ),
      ),
      'button_style' => 
      array (
        'label' => 'Style',
        'description' => 'Set the button style.',
        'type' => 'select',
        'options' => 
        array (
          'Default' => 'default',
          'Primary' => 'primary',
          'Secondary' => 'secondary',
          'Danger' => 'danger',
          'Text' => 'text',
        ),
        'enable' => 'button_mode == \'button\'',
      ),
      'button_fullwidth' => 
      array (
        'type' => 'checkbox',
        'text' => 'Full width button',
        'enable' => 'button_mode == \'button\' && layout != \'grid\'',
      ),
      'button_margin' => 
      array (
        'label' => 'Extra Margin',
        'description' => 'Add extra margin to the button.',
        'type' => 'select',
        'options' => 
        array (
          'None' => '',
          'Small' => 'small',
          'Medium' => 'default',
        ),
        'enable' => 'button_mode == \'button\' && show_name',
      ),
      'button_icon' => 
      array (
        'label' => 'Icon',
        'description' => 'Click on the pencil to pick an icon from the icon library.',
        'type' => 'icon',
        'enable' => 'button_mode == \'icon\'',
      ),
      'position' => '${builder.position}',
      'position_left' => '${builder.position_left}',
      'position_right' => '${builder.position_right}',
      'position_top' => '${builder.position_top}',
      'position_bottom' => '${builder.position_bottom}',
      'position_z_index' => '${builder.position_z_index}',
      'blend' => '${builder.blend}',
      'margin_top' => '${builder.margin_top}',
      'margin_bottom' => '${builder.margin_bottom}',
      'maxwidth' => '${builder.maxwidth}',
      'maxwidth_breakpoint' => '${builder.maxwidth_breakpoint}',
      'block_align' => '${builder.block_align}',
      'block_align_breakpoint' => '${builder.block_align_breakpoint}',
      'block_align_fallback' => '${builder.block_align_fallback}',
      'text_align' => '${builder.text_align_justify}',
      'text_align_breakpoint' => '${builder.text_align_breakpoint}',
      'text_align_fallback' => '${builder.text_align_justify_fallback}',
      'animation' => '${builder.animation}',
      '_parallax_button' => '${builder._parallax_button}',
      'visibility' => '${builder.visibility}',
      'name' => '${builder.name}',
      'status' => '${builder.status}',
      'source' => '${builder.source}',
      'id' => '${builder.id}',
      'class' => '${builder.cls}',
      'attributes' => '${builder.attrs}',
      'css' => 
      array (
        'label' => 'CSS',
        'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-input</code>, <code>.el-button</code>',
        'type' => 'editor',
        'editor' => 'code',
        'mode' => 'css',
        'attrs' => 
        array (
          'debounce' => 500,
          'hints' => 
          array (
            0 => '.el-element',
            1 => '.el-input',
            2 => '.el-button',
          ),
        ),
        'source' => true,
      ),
      'transform' => '${builder.transform}',
    ),
    'fieldset' => 
    array (
      'default' => 
      array (
        'type' => 'tabs',
        'fields' => 
        array (
          0 => 
          array (
            'title' => 'Content',
            'fields' => 
            array (
              0 => 'provider.name',
              1 => 'mailchimp',
              2 => 'mailchimp.double_optin',
              3 => 'cmonitor',
              4 => 'provider.after_submit',
              5 => 'provider.message',
              6 => 'provider.redirect',
            ),
          ),
          1 => 
          array (
            'title' => 'Settings',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'Form',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'layout',
                  1 => 'show_name',
                  2 => 'gap',
                  3 => 'form_size',
                  4 => 'form_style',
                ),
              ),
              1 => 
              array (
                'label' => 'Labels',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'label_email',
                  1 => 'label_button',
                  2 => 'label_first_name',
                  3 => 'label_last_name',
                ),
              ),
              2 => 
              array (
                'label' => 'Button',
                'type' => 'group',
                'divider' => true,
                'fields' => 
                array (
                  0 => 'button_mode',
                  1 => 'button_style',
                  2 => 'button_fullwidth',
                  3 => 'button_margin',
                  4 => 'button_icon',
                ),
              ),
              3 => 
              array (
                'label' => 'General',
                'type' => 'group',
                'fields' => 
                array (
                  0 => 'position',
                  1 => 'position_left',
                  2 => 'position_right',
                  3 => 'position_top',
                  4 => 'position_bottom',
                  5 => 'position_z_index',
                  6 => 'blend',
                  7 => 'margin_top',
                  8 => 'margin_bottom',
                  9 => 'maxwidth',
                  10 => 'maxwidth_breakpoint',
                  11 => 'block_align',
                  12 => 'block_align_breakpoint',
                  13 => 'block_align_fallback',
                  14 => 'text_align',
                  15 => 'text_align_breakpoint',
                  16 => 'text_align_fallback',
                  17 => 'animation',
                  18 => '_parallax_button',
                  19 => 'visibility',
                ),
              ),
            ),
          ),
          2 => '${builder.advanced}',
        ),
      ),
    ),
  ),
);
