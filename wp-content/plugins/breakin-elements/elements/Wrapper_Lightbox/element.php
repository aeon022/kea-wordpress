<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\WrapperLightbox",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class WrapperLightbox extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="currentColor" d="M5 20q-.825 0-1.412-.587T3 18V4q0-.825.588-1.412T5 2h14q.825 0 1.413.588T21 4v7.1q-.25-.05-.488-.075T20 11h-1V4H5v14h3.1q.1.55.263 1.05T8.8 20zm0-3v1V4zm2-1h1.1q.2-1.225.875-2.262T10.7 12H7zm0-6h4V6H7zm7 11q-1.65 0-2.825-1.175T10 17t1.175-2.825T14 13h2v2h-2q-.825 0-1.412.588T12 17t.588 1.413T14 19h2v2zm-1-11h4V6h-4zm1 8v-2h6v2zm4 3v-2h2q.825 0 1.413-.587T22 17t-.587-1.412T20 15h-2v-2h2q1.65 0 2.825 1.163T24 17q0 1.65-1.175 2.825T20 21z"/></svg>';
    }

    static function tag()
    {
        return 'a';
    }

    static function tagOptions()
    {
        return [];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'Wrapper Lightbox';
    }

    static function className()
    {
        return 'bde-container-link';
    }

    static function category()
    {
        return 'breakin elements';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return __CLASS__;
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return false;
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [getPresetSection(
      "EssentialElements\\simpleLayout",
      "Layout",
      "layout",
       ['condition' => [[['path' => 'design.layout', 'operand' => 'is set', 'value' => '']]], 'type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\LayoutV2",
      "Layout",
      "layout_v2",
       ['condition' => [[['path' => 'design.layout', 'operand' => 'is not set', 'value' => '']]], 'type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\LessFancyBackground",
      "Background",
      "background",
       ['type' => 'popout']
     ), c(
        "container",
        "Container",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "min_height",
        "Min Height",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), c(
        "hover",
        "Hover",
        [c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "border_color",
        "Border Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "shadow",
        "Shadow",
        [],
        ['type' => 'shadow', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "transition_duration",
        "Transition Duration",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['ms']], 'rangeOptions' => ['min' => 1, 'max' => 1000, 'step' => 1]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Padding",
      "padding",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "text_colors",
        "Text Colors",
        [c(
        "headings",
        "Headings",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "text",
        "Text",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "brand",
        "Brand",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'condition' => [[['path' => 'design.text_colors', 'operand' => 'is set', 'value' => '']]]],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\spacing_margin_y",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     )];
    }

    static function contentControls()
    {
        return [c(
        "content",
        "Content",
        [c(
        "type",
        "Type",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => [['value' => 'image', 'text' => 'Image', 'icon' => 'ImageIcon'], ['text' => 'Gallery', 'value' => 'gallery', 'icon' => 'ImagePolaroidIcon']]],
        false,
        false,
        [],
      ), c(
        "image",
        "Image",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['image'], 'multiple' => false], 'condition' => [[['path' => 'content.content.type', 'operand' => 'equals', 'value' => 'image']]]],
        false,
        false,
        [],
      ), c(
        "gallery",
        "Gallery",
        [c(
        "image",
        "Image",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['image'], 'multiple' => false]],
        false,
        false,
        [],
      )],
        ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '', 'defaultTitle' => 'Image', 'buttonName' => 'Add image', 'galleryMode' => true, 'galleryMediaPath' => 'image'], 'condition' => [[['path' => 'content.content.type', 'operand' => 'equals', 'value' => 'gallery']]]],
        false,
        false,
        [],
      ), c(
        "gallery_id",
        "Gallery ID",
        [],
        ['type' => 'number', 'layout' => 'inline', 'condition' => [[['path' => 'content.content.type', 'operand' => 'equals', 'value' => 'image']]]],
        false,
        false,
        [],
      ), c(
        "warning",
        "Warning",
        [],
        ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'info', 'content' => '<p>View the page on the frontend to preview the lightbox</p>']],
        false,
        false,
        [],
      ), c(
        "warning",
        "Warning",
        [],
        ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'warning', 'content' => '<p><strong>Important Tip</strong><br><br>Elements that contain links should not be placed inside a Wrapper Lightbox element.<br><br>Doing so will create invalid HTML and could cause unexpected behavior.</p>']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'sectionOptions' => ['type' => 'accordion']],
        false,
        false,
        [],
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return ['0' =>  ['styles' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/Wrapper_Lightbox/glightbox.min.css'],'scripts' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/Wrapper_Lightbox/glightbox.min.js'],'title' => 'GLightbox','builderCondition' => 'false',],'1' =>  ['inlineScripts' => ['const SupaLightbox = GLightbox({
selector:\'.supaglightbox\'
});'],'frontendCondition' => '{% if content.content.type != \'gallery\' %}
return true;
{% endif %}','builderCondition' => 'false','title' => 'image',],'2' =>  ['inlineScripts' => ['const SupaGalleryLightbox = GLightbox({
descPosition:\'right\',
elements:[
{% for item in content.content.gallery %}
{
\'href\':\'{{ item.image.sizes.full.url }}\',
\'type\':\'image\',
\'desc-position\':\'left\',
{% if item.title %}\'title\':\'{{ item.title }}\',{% endif %}
{% if item.description %}\'description\':\'{{ item.description }}\'{% endif %}
},
{% endfor %}
], 
});
document.querySelector(\'%%SELECTOR%%\').addEventListener(\'click\', () => {
  event.preventDefault();
  SupaGalleryLightbox.open();
});'],'frontendCondition' => '{% if content.content.type == \'gallery\' %}
return true;
{% endif %}','title' => 'gallery',],];
    }

    static function settings()
    {
        return ['proOnly' => true];
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return false;
    }

    static function nestingRule()
    {
        return ["type" => "container-link",   ];
    }

    static function spacingBars()
    {
        return [['location' => 'outside-top', 'cssProperty' => 'margin-top', 'affectedPropertyPath' => 'design.spacing.margin_top.%%BREAKPOINT%%'], ['location' => 'outside-bottom', 'cssProperty' => 'margin-bottom', 'affectedPropertyPath' => 'design.spacing.margin_bottom.%%BREAKPOINT%%']];
    }

    static function attributes()
    {
        return [['name' => 'href', 'template' => '{% if content.content.type == \'image\' %}
{{ content.content.image.url }}
{% elseif content.content.type == \'video\' %}
{{ content.content.video.url }}
{% elseif content.content.type == \'external\' %}
{{ content.content.url }}
{% elseif content.content.type == \'gallery\' %}
#
{% endif %}'], ['name' => 'data-type', 'template' => '{% if content.content.type == \'image\' %}
{{ content.content.type }}
{% elseif content.content.type == \'external\' %}
{{ content.content.type }}
{% elseif content.content.type == \'gallery\' %}
image
{% endif %}'], ['name' => 'data-gallery', 'template' => '{% if content.content.gallery_id %}gallery{{ content.content.gallery_id }}{% endif %}']];
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 45;
    }

    static function dynamicPropertyPaths()
    {
        return [['accepts' => 'url', 'path' => 'content.content.link.url'], ['accepts' => 'image_url', 'path' => 'design.background.image'], ['accepts' => 'image_url', 'path' => 'design.background.overlay.image'], ['accepts' => 'string', 'path' => 'content.content.gallery[].description'], ['accepts' => 'string', 'path' => 'content.content.gallery[].title'], ['accepts' => 'string', 'path' => 'content.options.description'], ['accepts' => 'string', 'path' => 'content.options.title'], ['accepts' => 'string', 'path' => 'content.content.gallery_id'], ['accepts' => 'image_url', 'path' => 'content.content.image'], ['accepts' => 'gallery', 'path' => 'content.content.gallery[].image'], ['accepts' => 'gallery', 'path' => 'content.content.gallery']];
    }

    static function additionalClasses()
    {
        return [['name' => 'breakdance-link', 'template' => 'yes'], ['name' => 'supaglightbox', 'template' => '{% if content.content.type != \'gallery\' %}yo{% endif %}']];
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return ['design.layout.horizontal.vertical_at', 'design.background.type', 'design.background.image', 'design.background.overlay.image', 'design.background.image_settings.unset_image_at', 'design.background.image_settings.size', 'design.background.image_settings.height', 'design.background.image_settings.repeat', 'design.background.image_settings.position', 'design.background.image_settings.left', 'design.background.image_settings.top', 'design.background.image_settings.attachment', 'design.background.image_settings.custom_position', 'design.background.image_settings.width', 'design.background.overlay.image_settings.custom_position', 'design.background.image_size', 'design.background.overlay.image_size', 'design.background.overlay.type', 'design.background.image_settings', 'design.layout_v2.layout', 'design.layout_v2.h_vertical_at', 'design.layout_v2.h_alignment_when_vertical', 'design.layout_v2.a_display'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
