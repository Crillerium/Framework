<?php
if ($_GET['mode']=="light" or $_GET['mode']=="dark") {
    $mode = $_GET['mode'];
}
else if (isset($_COOKIE['mode']) && $_COOKIE['mode']!="") {
    $mode = $_COOKIE['mode'];
}
else {
    $mode = "light";
}
if ($mode == "light") {
    $layout = "light";
    $id = "7";
    $link = "dark";
    setcookie("mode","light",time()+31536000);
}
else {
    $layout = "dark";
    $id = "4";
    $link = "light";
    setcookie("mode","dark",time()+31536000);
}
?>
<!doctype html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
    <meta name="renderer" content="webkit" />
    <meta name="force-rendering" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="https://unpkg.com/mdui@1.0.2/dist/css/mdui.min.css" />
    <title>Crillerium Framework</title>
</head>

<body
    class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink mdui-bottom-nav-fixed mdui-theme-layout-<?php echo $layout; ?>">
    <header class="mdui-appbar mdui-appbar-fixed">
        <div class="mdui-toolbar mdui-color-theme">
            <a href="javascript:;" class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#left-drawer', swipe: true}">
                <i class="mdui-icon material-icons">menu</i>
            </a>

            <span class="mdui-typo-title">Framework</span>
            <div class="mdui-toolbar-spacer"></div>
            <a href="?mode=<?php echo $link; ?>" class="mdui-btn mdui-btn-icon">
                <i class="mdui-icon material-icons">brightness_<?php echo $id; ?></i>
            </a>
            <a href="javascript:;" class="mdui-btn mdui-btn-icon" mdui-menu="{target: '#example-attr'}">
                <i class="mdui-icon material-icons">more_vert</i>
            </a>
            <ul class="mdui-menu" id="example-attr">
                <li class="mdui-menu-item">
                    <a href="#" class="mdui-ripple">Link 1</a>
                </li>
                <li class="mdui-menu-item">
                    <a href="#" class="mdui-ripple">Link 2</a>
                </li>
                <li class="mdui-menu-item">
                    <a href="#" class="mdui-ripple">Link 3</a>
                </li>
                <li class="mdui-menu-item">
                    <a href="#">Link 4</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="mdui-container">
        <div class="mdui-drawer" id="left-drawer">
            <ul class="mdui-list">
                <a href="#" class="mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons">send</i>
                    <div class="mdui-list-item-content">Link 1</div>
                </a>
                <a href="#" class="mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons">email</i>
                    <div class="mdui-list-item-content">Link 2</div>
                </a>
                <a href="#" class="mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons">settings</i>
                    <div class="mdui-list-item-content">Link 3</div>
                </a>
                <a href="#" class="mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons">help</i>
                    <div class="mdui-list-item-content">Link 4</div>
                </a>
            </ul>
        </div>
        </br>