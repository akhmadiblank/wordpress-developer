<?php
function menuadminwa()
{
    // add_menu_page('Setting Plugin keren', 'Setting Plugin', 'manage_options', 'tesmenu', 'fungsi_testmenu', 'dashicons-welcome-learn-more');
    add_menu_page('Whatsapp Setting', 'Whatsapp Setting', '', 'wasetting', 'aturwa', 'dashicons-admin-comments');
    // add_submenu_page('tesmenu', 'Halaman submenu', 'plugin Submenu', 'manage_options', 'submenu', 'fungsi_submenu');
    add_submenu_page('wasetting', 'pengaturan WA', 'Atur WA', 'manage_options', 'aturwa', 'aturwa');
}

function aturwa()
{
    if ($_POST['nohp'] != '') {
        update_option('wa_nohp', $_POST['nohp']);
        update_option('wa_pesan', $_POST['pesan']);
        update_option('wa_text', $_POST['text']);
        echo 'berhasil';
    }
    echo '<h2>Pengaturan Setting Whatsapp</h2>
    <form action="" method="post">
    Nomor Whatsapp :<input type="text" name="nohp" value="' . get_option('wa_nohp') . '"/><br>
    Pesan Default :<input type="text" name="pesan" value="' . get_option('wa_pesan') . '"/><br>
    Text yang muncul :<input type="text" name="text"value="' . get_option('wa_text') . '"/><br>
    <input type="submit" value="Updata Data"/>
    </form>';
}

function fungsi_submenu()
{
    echo '<p>ini adalah halaman sub menu</p>';
}
add_action('admin_menu', 'menuadminwa');

function whatsapps($atts)
{
    $nohp = get_option('wa_nohp');
    $pesan = get_option('wa_pesan');
    $text = get_option('wa_text');
    $var = shortcode_atts([
        'nohp' => $nohp,
        'pesan' => $pesan,
        'text' => $text,
    ], $atts);
    return '<a href="https://wa.me/' . $var['nohp'] . '?text=' . urlencode($var['pesan']) . '" target="_blank">' . $var['text'] . '</a>';
}
add_shortcode('whatsapps', 'whatsapps');
