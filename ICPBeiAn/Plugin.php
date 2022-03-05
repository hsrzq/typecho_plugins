<?php
/**
 * 域名备案显示插件
 * 
 * @package ICPBeiAn
 * @author TechQI
 * @version 0.0.1
 * @link https://www.techqi.top/
 */
class ICPBeiAn_Plugin implements Typecho_Plugin_Interface {
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     */
    public static function activate() {
        Typecho_Plugin::factory('Widget_Archive')->footer = array('ICPBeiAn_Plugin', 'footer');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     */
    public static function deactivate() {}

    /**
     * 获取插件配置面板
     */
    public static function config(Typecho_Widget_Helper_Form $form) {
        $icpid = new Typecho_Widget_Helper_Form_Element_Text('icpid', NULL, '国ICP备00000000号', _t('备案号：'));
        $form->addInput($icpid);
    }
 
    /**
     * 个人用户配置面板
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form) {}

    /**
     * 插件实现
     */
    public static function footer() {
        echo '<br/>';
        echo '<a href="http://beian.miit.gov.cn">' . Helper::options()->plugin('ICPBeiAn')->icpid . '</a>';
    }
}
