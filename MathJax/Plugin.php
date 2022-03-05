<?php
/**
 * MathJax 公式插件
 * 
 * @package MathJax
 * @author TechQI
 * @version 0.0.1
 * @link https://www.techqi.top/
 */
class MathJax_Plugin implements Typecho_Plugin_Interface {
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     */
    public static function activate() {
        Typecho_Plugin::factory('Widget_Archive')->header = array('MathJax_Plugin', 'header');
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

    /**
     * 插件实现
     */
    public static function header() {
        echo '<script id="MathJax-script" async src="//cdn.bootcss.com/mathjax/3.0.5/es5/tex-mml-chtml.js"></script>';
    }
}
