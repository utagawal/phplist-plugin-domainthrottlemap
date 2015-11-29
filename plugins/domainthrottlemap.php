<?php

class domainthrottlemap extends phplistPlugin {
  public $name = "Group domains for throttling";
  public $coderoot = '';
  public $version = "0.1";
  public $authors = 'Michiel Dethmers';
  public $enabled = 1;
  public $description = 'Provide a grouping of domains for the purpose of domain throttling.';

  /** 
   * based on the domain, return a mapping for throttling
   * 
   * this means that domains that map to the same value will be grouped for throttling.
   */

  function throttleDomainMap ($domain) {
      
      switch (strtolower($domain)) {
          
          case 'yahoo.co.uk':
          case 'yahoo.com':
                return "Yahoo"; break;
            
          
          /* 
           * add more mappings here with the following structure
           * 
           * 
           * --------------------
           * case 'domain':
           * case 'otherdomain':
           *    return 'Main domain or provider name'; break;
           * ---------------------
           * 
           *   do not forget the "break" on the last line
           * 
           */
          


      }
      
      
      
      return false;
  }

    public function dependencyCheck()
    {
        global $plugins;

        return array(
            'phpList version 3.2.4 or later' => version_compare(VERSION, '3.2.4') > 0,
        );
    }
 

}
