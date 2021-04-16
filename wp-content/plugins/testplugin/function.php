<?php
function testmenuadmin()
{
    add_menu_page('Setting Plugin keren', 'Setting Plugin', 'manage_options', 'tesmenu', 'fungsi_testmenu', 'dashicons-welcome-learn-more');
    add_submenu_page('tesmenu', 'Halaman submenu', 'plugin Submenu', 'manage_options', 'submenu', 'fungsi_submenu');
}

function fungsi_testmenu()
{
    echo '<h2>hello world</h2>';
}

function fungsi_submenu()
{
    echo '<p>ini adalah halaman sub menu</p>';
}
add_action('admin_menu', 'testmenuadmin');

function whatsapps($atts)
{
    $var = shortcode_atts([
        'nohp' => '085745096251',
        'pesan' => 'mohon info bisnis online',
        'text' => 'klik disini'
    ], $atts);
    return '<a href="https://wa.me/' . $var['nohp'] . '?text=' . urlencode($var['pesan']) . '" target="_blank">' . $var['text'] . '</a>';
}
add_shortcode('whatsapps', 'whatsapps');
