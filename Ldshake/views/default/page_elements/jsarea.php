<script type="text/javascript">
<?php global $ldshake_jscache_break;?>
var baseurl = '<?php echo $vars['url'] ?>';
var language = '<?php echo $vars['config']->language ?>';
var isadminloggedin = <?php echo (isadminloggedin() ? 'true' : 'false') ?>;
var t9nc = {
    deleteLdS : "<?php echo T("Are you sure you want to delete this LdS?") ?>"
};
var ldshake_cache = <?php echo json_encode($ldshake_jscache_break) ?>;
</script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="<?php echo $vars['url']; ?>vendors/moment/moment-with-langs.min.js"></script>
<script type="text/javascript" src="<?php echo $vars['url']; ?>javascript/initialise_elgg.js"></script>
<script type="text/javascript" src="<?php echo $vars['url']; ?>javascript/common.js"></script>
<script type="text/javascript">
//Unix time to language
    $(".timeago_timestamp").each(function() {
        var $e = $(this);
        var timestamp = parseInt($e.attr("timestamp"));
        var date = moment.unix(timestamp).fromNow();
        $e.text(date);
    });
</script>
<?php
if(get_context() == 'admin')
	echo elgg_view('metatags',$vars);
