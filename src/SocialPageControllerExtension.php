<?php

namespace Webmaxsk\MaxSocial;

use SilverStripe\ORM\DataExtension;
use SilverStripe\View\Requirements;

class SocialPageControllerExtension extends DataExtension {

    public function googlePlusJS() {
        Requirements::customScript(<<<JS
            (function() {
                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                po.src = 'https://apis.google.com/js/plusone.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
            })();
JS
        );
    }
}
