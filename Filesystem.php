<?php

/*
 * This file is part of the Kora package.
 *
 * (c) Uriel Wilson <uriel@koraphp.com>
 *
 * The full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kora\Filesystem;

use Symfony\Component\Filesystem\Filesystem as SymfonyFilesystem;

class Filesystem extends SymfonyFilesystem implements FilesystemInterface
{
    protected $system = null;
}
