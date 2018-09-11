<?php
/*
 * This file is part of the ProGrom package.
 *
 * (c) Bartosz Zwierzchowski <bartosz.z@pro-grom.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Oxilo\System\Tool\Profile;

class Benchmark
{
    private $keys  = array();
    private $times = array();

    /**
     * @return void
     */
    public function init() {
        $this->keys = array();
        $this->times = array();
        $this->keys[]  = "init";
        $this->times[] = microtime(true);
    }

    public function add_marker($key=null) {
        $this->keys[]  = $key;
        $this->times[] = microtime(true);
    }
}