<?php
/**
 * HighlightJS 语法高亮插件
 * 
 * @package HighlightJS
 * @author TechQI
 * @version 0.0.1
 * @link https://www.techqi.top/
 */
class HighlightJS_Plugin implements Typecho_Plugin_Interface {
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     */
    public static function activate() {
        Typecho_Plugin::factory('Widget_Archive')->header = array('HighlightJS_Plugin', 'header');
        Typecho_Plugin::factory('Widget_Archive')->footer = array('HighlightJS_Plugin', 'footer');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     */
    public static function deactivate() {}

    /**
     * 获取插件配置面板
     */
    public static function config(Typecho_Widget_Helper_Form $form) {}
 
    /**
     * 个人用户配置面板
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form) {}

    /*========== 插件实现 ==========*/

    public static function header() {
        echo '<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/default.min.css">';
        echo '<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>';
    }

    public static function footer() {
        echo '<script>hljs.highlightAll();</script>';
    }
}
