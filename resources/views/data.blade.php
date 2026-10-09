<?php
$nama       = "Endy Mahavira";
$usia       = "17 Tahun";
$pendidikan = "SMK Jurusan RPL";
$roleplayer = "Server CBB";
$tahun      = date('Y');

$skills = array(
    array("icon" => "fa-server",        "label" => "Setup Server",      "pct" => 90),
    array("icon" => "fa-puzzle-piece",  "label" => "Membuat Plugin",    "pct" => 80),
    array("icon" => "fa-cube",          "label" => "Minecraft Modding", "pct" => 75),
    array("icon" => "fa-globe",         "label" => "Web Development",   "pct" => 70),
    array("icon" => "fa-mobile-alt",    "label" => "Membuat Aplikasi",  "pct" => 65),
    array("icon" => "fa-network-wired", "label" => "Networking",        "pct" => 72),
);

$servers = array(
    array(
        "name"     => "Classroom Beyond The Bell",
        "short"    => "CBB",
        "icon"     => "fa-school",
        "type"     => "Roleplay",
        "color"    => "blue",
        "desc"     => "Server Roleplay bertema sekolah. Developer sekaligus aktif sebagai Roleplayer.",
        "roles"    => array("Developer", "Roleplayer"),
        "featured" => false,
    ),
    array(
        "name"     => "Binantara",
        "short"    => "BINAN",
        "icon"     => "fa-building",
        "type"     => "Roleplay",
        "color"    => "blue",
        "desc"     => "Server Roleplay. Berkontribusi sebagai Developer dalam pengembangan sistem dan infrastruktur.",
        "roles"    => array("Developer"),
        "featured" => false,
    ),
    array(
        "name"     => "Zephyr",
        "short"    => "",
        "icon"     => "fa-bolt",
        "type"     => "Brutal Legend",
        "color"    => "red",
        "desc"     => "Server Brutal Legend. Developer dalam membangun dan mengelola server.",
        "roles"    => array("Developer"),
        "featured" => false,
    ),
    array(
        "name"     => "Artist SMP ID",
        "short"    => "",
        "icon"     => "fa-paint-brush",
        "type"     => "Owner",
        "color"    => "accent",
        "desc"     => "Server yang saya dirikan dan kelola sendiri. Bertanggung jawab penuh dari development hingga komunitas.",
        "roles"    => array("Owner", "Founder", "Developer"),
        "featured" => true,
    ),
);

$socials = array(
    array("icon" => "fa-discord",   "label" => "Discord",   "url" => "https://discord.gg/9HpGyPuXV5"),
    array("icon" => "fa-github",    "label" => "GitHub",    "url" => "https://github.com/ENDY1807"),
    array("icon" => "fa-tiktok",    "label" => "TikTok",    "url" => "https://www.tiktok.com/@endy.mahavira"),
    array("icon" => "fa-instagram", "label" => "Instagram", "url" => "https://www.instagram.com/endy_mahavira"),
);
