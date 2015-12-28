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
          case 'yahoo.fr':
    		  case 'yahoo.com':
    			  return "Yahoo"; break;	
      		case 'onedrive.fr':
      		case 'hotmail.fr' :
      		case 'outlook.fr' :
      		case 'live.fr' :
      		case 'onedrive.net':
      		case 'windowsmobile.co.uk':
      		case 'xbox.com':
      		case 'onedrive.org':
      		case 'windowsmobile.org':
      		case 'xbox.co.uk':
      		case 'onedrive.co':
      		case 'windowsmobile.co':
      		case 'xbox.org':
      		case 'onedrive.eu':
      		case 'windowsphone.com':
      		case 'xbox.co':
      		case 'skype.com':
      		case 'windowsmobile.eu':
      		case 'xbox.eu':
      		case 'skype.org':
      		case 'windowsphone.co.uk':
      		case 'xbox360.com':
      		case 'skype.net':
      		case 'windowsphone.org':
      		case 'xbox360.co.uk':
      		case 'skype.co.uk':
      		case 'windowsphone.co':
      		case 'xbox360.co':
      		case 'skype.co':
      		case 'windowsphone.net':
      		case 'xbox360.eu':
      		case 'skype.eu':
      		case 'zune.com':
      		case 'xbox360.org':
      		case 'outlook.com':
      		case 'zune.co.uk':
      		case 'xboxone.com':
      		case 'outlook.org':
      		case 'zune.org':
      		case 'xboxone.co.uk':
      		case 'outlook.co':
      		case 'zune.net':
      		case 'xboxone.eu':
      		case 'outlook.eu':
      		case 'zune.co':
      		case 'xboxone.eu':
      		case 'windowsmobile.com':
      		case 'zune.eu':
      		case 'office.com':
      		case 'onedrive.co.uk':
      		case 'visualstudio.net':
      		case 'visualstudio.eu':
      		case 'onedrive.com':
      		case 'skydrive.com':
      		case 'visualstudio.co.uk':
      		case 'skydrive.co':
      		case 'visualstudio.co':
      		case 'visualstudio.com':
      		case 'microsoftvisualstudio.net':
      		case 'microsoftvisualstudio.com':
      		case 'sqlserver.net':
      		case 'microsoftsqlserver.com':
      		case 'microsoftsilverlight.net':
      		case 'microsoftsilverlight.org':
      		case 'live.eu':
      		case 'internetexplorer.co':
      		case 'microsoftsilverlight.com':
      		case 'live.org':
      		case 'internetexplorer.com':
      		case 'ie8.co':
      		case 'live.co':
      		case 'live.com':
      		case 'hotmail.co':
      		case 'live.net':
      		case 'hotmail.org':
      		case 'hotmail.eu':
      		case 'live.co.uk':
      		case 'hotmail.net':
      		case 'hotmail.co.uk':
      		case 'bingbar.com':
      		case 'hotmail.com':
      		case 'bingtoolbar.com':
      		case 'bingbar.net':
      		case 'bing.co':
      		case 'bing.co.uk':
      		case 'bing.net':
      		case 'bing.com':
      		case 'microsoft.co':
      		case 'microsoft.nl':
      		case 'microsoft.co.uk':
      		case 'microsoft.net':
      		case 'microsoft.org':
      		case 'microsoft.com':
      		case 'hotmail.nl':
      		case 'hotmail.be':
      		case 'msn.com':
      		case 'windowslive.com':
      		case 'live.nl':
      		case 'live.com.au':
      			return "Microsoft"; break;
            
          
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
            'phpList version 3.2.4 or later' => version_compare(VERSION, '3.2.3') > 0,
        );
    }
 

}
