<?php

namespace Kanboard\Plugin\Helper;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->helper->register('avatar', '\Kanboard\Plugin\Helper\AvatarHelper');
    }
}