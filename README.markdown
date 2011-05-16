flavaDisqusPlugin
=================

A small toolbelt for streamlining disqus comments within Symfony.



Configuration
-------------

If you don't have a config/server_configuration.php file, copy values from:


    plugins/flavaDisqus/server_configuration.php.template
    
To:


    config/server_configuration.php



If not, create a server configuration with the values within:


    plugins/flavaDisqus/server_configuration.php.template




Example Usage
-------------

Simply include the index partial in a view file:


    <?php include_partial('flavaDisqus/index', array(
      'identifier' => 'a_unique_identifier',
    )) ?>