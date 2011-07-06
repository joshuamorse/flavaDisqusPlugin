<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_developer = '<?php echo sfConfig::get('disqus_developer') ?>';
    var disqus_shortname = '<?php echo sfConfig::get('disqus_shortname') ?>';

    // The following are highly recommended additional parameters. Remove the slashes in front to use.
    <?php if (isset($identifier)): ?>
      var disqus_identifier = '<?php echo $identifier ?>';
    <?php endif ?>

    <?php if (isset($url)): ?>
      var disqus_url = '<?php echo $url ?>';
    <?php endif ?>

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
