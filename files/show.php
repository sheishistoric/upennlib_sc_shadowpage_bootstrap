<?php
$fileTitle = metadata('file', 'display_title');

if ($fileTitle != '') {
    $fileTitle = ': &quot;' . $fileTitle . '&quot; ';
} else {
    $fileTitle = '';
}
$fileTitle = __('File #%s', metadata('file', 'id')) . $fileTitle;
echo head(array(
    'title' => $fileTitle,
    'bodyclass' => 'files show primary-secondary',
)); ?>
<div id="primary">
    <div class="row page-header">
        <div class="col-xs-12">
            <h1><span class="glyphicon glyphicon-file"></span> <?php echo $fileTitle; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p><?php echo __('Attached to item "%s".', link_to_item(null, array(), 'show', $file->getItem())); ?>
            <div id="file-metadata">
                <?php echo all_element_texts('file'); ?>
            </div>
            <div id="format-metadata">
                <h2><?php echo __('Format Metadata'); ?></h2>
                <div id="original-filename" class="element">
                    <h3><?php echo __('Original Filename'); ?></h3>
                    <div class="element-text"><?php echo metadata('file', 'Original Filename'); ?></div>
                </div>
                <div id="file-size" class="element">
                    <h3><?php echo __('File Size'); ?></h3>
                    <div class="element-text"><?php echo __('%s bytes', metadata('file', 'Size')); ?></div>
                </div>
                <div id="authentication" class="element">
                    <h3><?php echo __('Authentication'); ?></h3>
                    <div class="element-text"><?php echo metadata('file', 'Authentication'); ?></div>
                </div>
            </div><?php // end format-metadata ?>
            <div id="type-metadata" class="section">
                <h2><?php echo __('Type Metadata'); ?></h2>
                <div id="mime-type-browser" class="element">
                    <h3><?php echo __('Mime Type'); ?></h3>
                    <div class="element-text"><?php echo metadata('file', 'MIME Type'); ?></div>
                </div>
                <div id="file-type-os" class="element">
                    <h3><?php echo __('File Type / OS'); ?></h3>
                    <div class="element-text"><?php echo metadata('file', 'Type OS'); ?></div>
                </div>
            </div><?php // end type-metadata ?>
        </div>
        <div class="col-md-6">
            <?php echo file_markup($file, array('imageSize' => 'fullsize', 'class' => 'img-responsive')); ?>
        </div>
    </div>
</div><?php //end primary ?>
<?php echo foot();
