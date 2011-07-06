flavaDisqusPlugin
=================

A small toolbelt for streamlining disqus comments within Symfony.



Configuration
-------------

Configuration values are stored in a server_configuration file. This allows 
you to set different configuration values on a server-by-server basis, should 
you choose to.

If you don't have a config/server_configuration.php file, copy values from:


    plugins/flavaDisqus/server_configuration.php.template
    
To:


    config/server_configuration.php



If not, create a server configuration with the values within:


    plugins/flavaDisqus/server_configuration.php.template




Example Usage
-------------

For Disqus comments, simply include the index partial in a view file:


    <?php include_partial('flavaDisqus/index', array(
      'identifier' => 'a_unique_identifier',
    )) ?>

Or, load it into a div ('blog-post-disqus') via jQuery and the plugin's route:

    <script type="text/javascript">
      $('#blog-post-disqus').load('/disqus?identifier=<?php echo $blog_post->getDisqusIndentifier() ?>');
    </script>


For the Disqus comment count, include a comment count link and include the
count partial:


    <a href="<?php echo get_current_url() ?>#disqus_thread" data-disqus-identifier="<?php echo $blog_post->getDisqusIndentifier() ?>">0 Comments</a>
    [...]
    <?php include_partial('flavaDisqus/count') ?>