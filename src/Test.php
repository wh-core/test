<?php
namespace Sxq\PackageTest;

class Test
{
    public function execute()
    {
        echo '这是一个测试';
    }
    public function getConfig()
    {
        var_dump(config('test'));
    }
}
