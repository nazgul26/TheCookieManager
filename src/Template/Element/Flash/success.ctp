<script type="text/javascript">
    $(function() {
        <?php if (isset($event)) { ?>
        var flashEvent = jQuery.Event("<?php echo h($event);?>");
        $(document).trigger(flashEvent);
        <?php }?>
            
        toastr.success('<?php echo h($message);?>');
    });
</script>
