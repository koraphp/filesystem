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

/**
 * Interface for managing Filesystem.
 */
interface FilesystemInterface
{
    /**
     * Atomically dumps content into a file.
     *
     * @param resource|string $content The data to write into the file
     *
     * @return mixed
     *
     * @see https://github.com/symfony/filesystem/blob/6.3/Filesystem.php#L659
     */
    public function dumpFile(string $filename, $content);
}
